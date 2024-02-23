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

/* @Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php */
class __TwigTemplate_17c45bba227c1b4036a595aaab3b47a6 extends Template
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper;

use Configuration;
use Context;
use Order;
use PrestaShop\\Module\\Ps_Googleanalytics\\Hooks\\WrapperInterface;
use Shop;
use Validate;

class OrderWrapper implements WrapperInterface
{
    private \$context;

    public function __construct(Context \$context)
    {
        \$this->context = \$context;
    }

    /**
     * Return a detailed transaction for Google Analytics
     */
    public function wrapOrder(\$id_order)
    {
        \$order = new Order((int) \$id_order);

        if (Validate::isLoadedObject(\$order)) {
            return [
                'id' => \$id_order,
                'affiliation' => Shop::isFeatureActive() ? \$this->context->shop->name : Configuration::get('PS_SHOP_NAME'),
                'revenue' => \$order->total_paid,
                'shipping' => \$order->total_shipping,
                'tax' => \$order->total_paid_tax_incl - \$order->total_paid_tax_excl,
                'url' => \$this->context->link->getAdminLink('AdminGanalyticsAjax'),
                'customer' => \$order->id_customer,
            ];
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php", "/var/www/html/modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php");
    }
}
