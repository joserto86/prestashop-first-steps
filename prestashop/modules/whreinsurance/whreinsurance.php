<?php

if (!defined('_PS_VERSION_')) { //checks if the constant exist to prevent ouside prestashop load
    exit;
}

class WHReinsurance extends Module
{
    public function __construct()
    {
        $this->name = 'whreinsurance';
        $this->version = '1.0.0';
        $this->tab = 'front_office_features';
        $this->author = 'Jose Alberto Hernán';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->confirmUninstall = $this->l('Do you still want to uninstall this module?');
        $this->description = $this->l('This is a reinsurance module for your front office.');
        $this->displayName = $this->l('Reinsurance block');

        $this->ps_versions_compliancy = ['min' => '8.1.3', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayFooterBefore')
            && $this->registerHook('actionFrontControllerSetMedia');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayFooterBefore($params)
    {
        $this->context->smarty->assign([
            'module_img_dir' => $this->_path . 'views/img/',
        ]);

        return $this->display(__FILE__, 'whreinsurance.tpl');
    }

    public function hookActionFrontControllerSetMedia($params)
    {
        $this->context->controller->registerStylesheet(
            'whreinsurance-style',
            $this->_path.'views/css/whreinsurance.css',
            [
                'media' => 'all',
                'priority' => 999,
            ]
        );
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }
}