<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_emailalerts/controllers/front/account.php */
class __TwigTemplate_14a60a83fab22e4134b48a54448d5eb6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

/**
 * @since 1.5.0
 */
class Ps_EmailAlertsAccountModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();

        require_once \$this->module->getLocalPath() . 'MailAlert.php';
    }

    public function getBreadcrumbLinks()
    {
        \$breadcrumb = parent::getBreadcrumbLinks();
        \$breadcrumb['links'][] = \$this->addMyAccountToBreadcrumb();
        \$breadcrumb['links'][] = [
            'title' => \$this->trans('My alerts', [], 'Modules.Emailalerts.Shop'),
            'url' => \$this->context->link->getModuleLink('ps_emailalerts', 'account'),
        ];

        return \$breadcrumb;
    }

    public function initContent()
    {
        parent::initContent();

        if (!Context::getContext()->customer->isLogged()) {
            Tools::redirect('index.php?controller=authentication&redirect=module&module=ps_emailalerts&action=account');
        }

        if (Context::getContext()->customer->id) {
            \$this->context->smarty->assign('id_customer', Context::getContext()->customer->id);
            \$this->context->smarty->assign(
                'mailAlerts',
                MailAlert::getMailAlerts((int) Context::getContext()->customer->id, (int) Context::getContext()->language->id)
            );

            \$this->setTemplate('module:ps_emailalerts/views/templates/front/mailalerts-account.tpl');
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/controllers/front/account.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/controllers/front/account.php", "/var/www/html/modules/ps_emailalerts/controllers/front/account.php");
    }
}
