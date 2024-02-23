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

/* @Modules/ps_checkpayment/controllers/front/payment.php */
class __TwigTemplate_665383593105c3b81c69b956d6decc4d extends Template
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

/**
 * @since 1.5.0
 */
class Ps_CheckpaymentPaymentModuleFrontController extends ModuleFrontController
{
    public \$ssl = true;

    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();

        if (!(\$this->module instanceof Ps_Checkpayment)) {
            Tools::redirect('index.php?controller=order');

            return;
        }
        \$cart = \$this->context->cart;
        if (!\$this->module->checkCurrency(\$cart)) {
            Tools::redirect('index.php?controller=order');

            return;
        }

        \$this->context->smarty->assign([
            'nbProducts' => \$cart->nbProducts(),
            'cust_currency' => \$cart->id_currency,
            'currencies' => \$this->module->getCurrency((int) \$cart->id_currency),
            'total' => \$cart->getOrderTotal(true, Cart::BOTH),
            'isoCode' => \$this->context->language->iso_code,
            'checkName' => \$this->module->checkName,
            'checkAddress' => Tools::nl2br(\$this->module->address),
            'this_path' => \$this->module->getPathUri(),
            'this_path_check' => \$this->module->getPathUri(),
            'this_path_ssl' => Tools::getShopDomainSsl(true, true) . __PS_BASE_URI__ . 'modules/' . \$this->module->name . '/',
        ]);

        \$this->setTemplate('payment_execution.tpl');
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_checkpayment/controllers/front/payment.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_checkpayment/controllers/front/payment.php", "/var/www/html/modules/ps_checkpayment/controllers/front/payment.php");
    }
}
