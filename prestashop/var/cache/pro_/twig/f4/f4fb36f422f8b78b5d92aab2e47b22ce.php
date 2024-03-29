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

/* @Modules/ps_wirepayment/validation.php */
class __TwigTemplate_5309b382b807e38c766f9ab979d6b6b3 extends Template
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
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

/**
 * @deprecated 1.5.0 This file is deprecated, use moduleFrontController instead
 */
include __DIR__ . '/../../config/config.inc.php';
include __DIR__ . '/../../header.php';
include __DIR__ . '/../../init.php';

\$context = Context::getContext();
\$cart = \$context->cart;
/** @var Ps_Wirepayment \$bankwire */
\$bankwire = Module::getInstanceByName('ps_wirepayment');

if (\$cart->id_customer == 0 or \$cart->id_address_delivery == 0 or \$cart->id_address_invoice == 0 or !\$bankwire->active) {
    Tools::redirect('index.php?controller=order&step=1');
}

// Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
\$authorized = false;
foreach (Module::getPaymentModules() as \$module) {
    if (\$module['name'] == 'ps_wirepayment') {
        \$authorized = true;
        break;
    }
}
if (!\$authorized) {
    exit(\$bankwire->getTranslator()->trans('This payment method is not available.', [], 'Modules.Wirepayment.Shop'));
}

\$customer = new Customer((int) \$cart->id_customer);

if (!Validate::isLoadedObject(\$customer)) {
    Tools::redirect('index.php?controller=order&step=1');
}

\$currency = \$context->currency;
\$total = (float) (\$cart->getOrderTotal(true, Cart::BOTH));

\$bankwire->validateOrder(\$cart->id, (int) Configuration::get('PS_OS_BANKWIRE'), \$total, \$bankwire->displayName, null, [], (int) \$currency->id, false, \$customer->secure_key);

\$order = new Order(\$bankwire->currentOrder);
Tools::redirect('index.php?controller=order-confirmation&id_cart=' . \$cart->id . '&id_module=' . \$bankwire->id . '&id_order=' . \$bankwire->currentOrder . '&key=' . \$customer->secure_key);
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/validation.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_wirepayment/validation.php", "/var/www/html/modules/ps_wirepayment/validation.php");
    }
}
