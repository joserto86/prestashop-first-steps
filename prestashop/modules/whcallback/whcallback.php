<?php

if (!defined('_PS_VERSION_')) { //checks if the constant exist to prevent ouside prestashop load
    exit;
}

use WebHelpers\WHCallback\Entity\WHCallbackRequest;
use Symfony\Component\HttpFoundation\Request;

class WHCallback extends Module
{
    public $tabs = [
        [
            'name' => [
                'en' => 'Callback Requests',
                'fr' => 'Demandes de rappel'
            ],
            'class_name' => 'AdminWHCallbackRequest',
            'route_name' => 'admin_whcallbackrequest_list',
            'parent_class_name' => 'AdminParentCustomer',
            'wording' => 'Callback Requests',
            // Ignored in PS < 1.7.8
            'wording_domain' => 'Modules.WHCallback.Admin',
            // Ignored in PS < 1.7.8
        ]
    ];

    public function __construct()
    {
        $this->name = 'whcallback';
        $this->version = '1.0.0';
        $this->tab = 'front_office_features';
        $this->author = 'Jose Alberto Hernán';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->confirmUninstall = $this->l('Do you still want to uninstall this module?');
        $this->description = $this->l('This is a customer callback module for your front office.');
        $this->displayName = $this->l('Customer callback');

        $this->ps_versions_compliancy = ['min' => '8.1.3', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        if (parent::install()
            && $this->createTable()
            && $this->registerHook('displayFooterBefore')
            && $this->registerHook('registerGDPRConsent')
            && $this->registerHook('actionFrontControllerSetMedia')
        ) {
            Configuration::updateValue('CALLBACK_HOURS', 1);
            return true;
        } else {
            $this->_errors[] = $this->l('There was an error during the installation.');
            return false;
        }
    }

    public function uninstall()
    {
        $this->dropTable();
        Configuration::deleteByName('CALLBACK_HOURS');

        return parent::uninstall() &&
            $this->unregisterHook('displayFooterBefore') &&
            $this->unregisterHook('registerGDPRConsent') &&
            $this->unregisterHook('actionFrontControllerSetMedia');
    }

    public function hookActionFrontControllerSetMedia($params)
    {
        $this->context->controller->registerStylesheet(
            'whcallback-style',
            $this->_path.'views/css/whcallback.css',
            [
                'media' => 'all',
                'priority' => 999,
            ]
        );
    }

    public function hookDisplayFooterBefore($params)
    {
        $this->processFooterForm();
        $this->context->smarty->assign([
            'id_module' => $this->id,
            'hours' => Configuration::get('WHCALLBACK_HOURS'),
        ]);
        return $this->display(__FILE__, 'whcallback.tpl');
    }

    public function hookRegisterGDPRConsent()
    {

    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    private function processFooterForm()
    {
        if (Tools::isSubmit('whcbsubmit')){
            if (Tools::getIsset('whcbphone') &&
                Validate::isPhoneNumber(Tools::getValue('whcbphone'))){
                $phone = Tools::getValue('whcbphone');
                $firstname = Tools::getValue('whcbfirstname');
                $lastname = Tools::getValue('whcblastname');

                $entityManager = $this->get('doctrine.orm.entity_manager');
                try {
                    $callbackRequest = new WHCallbackRequest();
                    $callbackRequest
                        ->setPhone($phone)
                        ->setFirstname($firstname)
                        ->setLastname($lastname);
                    $entityManager->persist($callbackRequest);
                    $entityManager->flush();

                    Mail::Send(
                        (int)(Configuration::get('PS_LANG_DEFAULT')), // defaut language id
                        'contact', // email template file to be use
                        'New Callback Request', // email subject
                        array(
                            '{email}' => Configuration::get('PS_SHOP_EMAIL'), // sender email address
                            '{message}' => 'You have a new pending customer callback request from '.$firstname.' '.$lastname.' - phone: '.$phone // email content
                        ),
                        Configuration::get('PS_SHOP_EMAIL'), // receiver email address
                        NULL, //receiver name
                        NULL, //from email address
                        NULL  //from name
                    );

                    $this->context->smarty->assign([
                        'success_message' => $this->l('Thank you for your interest, we will call you back very soon!'),
                    ]);
                }
                catch(\Exception $e){
                    $this->context->smarty->assign([
                        'alert_message' => $e->getMessage()
                    ]);
                }

            } else {
                $this->context->smarty->assign([
                    'alert_message' => $this->l('Please make sure that the phone field is correctly filled!')
                ]);
            }
        }
    }

    public function getContent()
    {
        $settingFormBuilder = $this->get('webhelpers.whcallback.form.identifiable_object.builder.setting_form_builder');
        $settingForm = $settingFormBuilder->getForm();

        $request = Request::createFromGlobals();
        $settingForm->handleRequest($request);

        $settingFormHandler = $this->get('webhelpers.whcallback.form.identifiable_object.handler.setting_form_handler');
        $result = $settingFormHandler->handle($settingForm);

        $link = Context::getContext()->link;
        $symfonyUrl = $link->getAdminLink(null, true, array('route' => 'admin_whcallbackrequest_list'));

        return $this->get('twig')->render('@Modules/whcallback/views/templates/admin/configure.html.twig',[
            "settingForm"=>$settingForm->createView(),
            "linkGrid"=>$symfonyUrl,
        ]);
    }


    private function createTable()
    {
        return Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ .
        'whcallback_request` (
        `id_request` int(6) NOT NULL AUTO_INCREMENT,
        `phone` varchar(255) NOT NULL,
        `firstname` varchar(255) NOT NULL,
        `lastname` varchar(255) NOT NULL,
        `request_date_add` DATETIME NULL,
        PRIMARY KEY(`id_request`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' default CHARSET=utf8');
    }

    private function dropTable()
    {
        Db::getInstance()->execute('DROP TABLE IF EXISTS ' . _DB_PREFIX_ . 'whcallback_request');
    }
}