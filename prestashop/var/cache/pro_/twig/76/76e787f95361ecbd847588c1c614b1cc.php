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

/* @Modules/statsstock/statsstock.php */
class __TwigTemplate_a59443350ac3072d99ef6b71d2f6ad17 extends Template
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
if (!defined('_PS_VERSION_')) {
    exit;
}

class statsstock extends Module
{
    private \$html = '';

    public function __construct()
    {
        \$this->name = 'statsstock';
        \$this->version = '2.0.1';
        \$this->tab = 'administration';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Available quantities', [], 'Modules.Statsstock.Admin');
        \$this->description = \$this->trans('Enrich your stats, add a tab showing the available quantities of products left for sale.', [], 'Modules.Statsstock.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('displayAdminStatsModules');
    }

    public function hookDisplayAdminStatsModules()
    {
        if (Tools::isSubmit('submitCategory')) {
            \$this->context->cookie->statsstock_id_category = Tools::getValue('statsstock_id_category');
        }

        \$ru = AdminController::\$currentIndex . '&module=' . \$this->name . '&token=' . Tools::getValue('token');
        \$currency = new Currency((int) Configuration::get('PS_CURRENCY_DEFAULT'));
        \$filter = ((int) \$this->context->cookie->statsstock_id_category ? ' AND p.id_product IN (SELECT cp.id_product FROM ' . _DB_PREFIX_ . 'category_product cp WHERE cp.id_category = ' . (int) \$this->context->cookie->statsstock_id_category . ')' : '');

        \$sql = 'SELECT p.id_product, p.reference, pl.name,
\t\t\t\tIFNULL((
\t\t\t\t\tSELECT AVG(product_attribute_shop.wholesale_price)
\t\t\t\t\tFROM ' . _DB_PREFIX_ . 'product_attribute pa
\t\t\t\t\t' . Shop::addSqlAssociation('product_attribute', 'pa') . '
\t\t\t\t\tWHERE p.id_product = pa.id_product
\t\t\t\t\tAND product_attribute_shop.wholesale_price != 0
\t\t\t\t), product_shop.wholesale_price) as wholesale_price,
\t\t\t\tIFNULL(stock.quantity, 0) as quantity
\t\t\t\tFROM ' . _DB_PREFIX_ . 'product p
\t\t\t\t' . Shop::addSqlAssociation('product', 'p') . '
\t\t\t\tINNER JOIN ' . _DB_PREFIX_ . 'product_lang pl
\t\t\t\t\tON (p.id_product = pl.id_product AND pl.id_lang = ' . (int) \$this->context->language->id . Shop::addSqlRestrictionOnLang('pl') . ')
\t\t\t\t' . Product::sqlStock('p', 0) . '
\t\t\t\tWHERE 1 = 1
\t\t\t\t' . \$filter;
        /** @var array<array{id_product: int, reference: string, name: string, wholesale_price: float, quantity: int}> \$products */
        \$products = Db::getInstance()->executeS(\$sql);

        foreach (\$products as \$key => \$p) {
            \$products[\$key]['stockvalue'] = \$p['wholesale_price'] * \$p['quantity'];
        }

        \$this->html .= '
\t\t<script type=\"text/javascript\">\$(\\'#calendar\\').slideToggle();</script>

\t\t<div class=\"panel-heading\">'
            . \$this->trans('Evaluation of available quantities for sale', [], 'Modules.Statsstock.Admin') .
        '</div>
\t\t<form action=\"' . Tools::safeOutput(\$ru) . '\" method=\"post\" class=\"form-horizontal\">
\t\t\t<div class=\"row row-margin-bottom\">
\t\t\t\t<label class=\"control-label col-lg-3\">' . \$this->trans('Category', [], 'Admin.Global') . '</label>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<select name=\"statsstock_id_category\" onchange=\"this.form.submit();\">
\t\t\t\t\t\t<option value=\"0\">- ' . \$this->trans('All', [], 'Admin.Global') . ' -</option>';
        foreach (Category::getSimpleCategories(\$this->context->language->id) as \$category) {
            \$this->html .= '<option value=\"' . (int) \$category['id_category'] . '\" ' .
                        (\$this->context->cookie->statsstock_id_category == \$category['id_category'] ? 'selected=\"selected\"' : '') . '>' .
                        \$category['name'] . '
\t\t\t\t\t</option>';
        }
        \$this->html .= '
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"hidden\" name=\"submitCategory\" value=\"1\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>';

        if (!count(\$products)) {
            \$this->html .= '<p>' . \$this->trans('Your catalog is empty.', [], 'Modules.Statsstock.Admin') . '</p>';
        } else {
            \$rollup = ['quantity' => 0, 'wholesale_price' => 0, 'stockvalue' => 0];
            \$this->html .= '
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('ID', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Ref.', [], 'Modules.Statsstock.Admin') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Item', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Available quantity for sale', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Price*', [], 'Modules.Statsstock.Admin') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Value', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>';
            foreach (\$products as \$product) {
                \$rollup['quantity'] += \$product['quantity'];
                \$rollup['wholesale_price'] += \$product['wholesale_price'];
                \$rollup['stockvalue'] += \$product['stockvalue'];
                \$this->html .= '<tr>
\t\t\t\t\t\t<td>' . \$product['id_product'] . '</td>
\t\t\t\t\t\t<td>' . \$product['reference'] . '</td>
\t\t\t\t\t\t<td>' . \$product['name'] . '</td>
\t\t\t\t\t\t<td>' . \$product['quantity'] . '</td>
\t\t\t\t\t\t<td>'
                    . (method_exists(\$this->context, 'getCurrentLocale') ? \$this->context->getCurrentLocale()->formatPrice(\$product['wholesale_price'], \$currency->iso_code) : \$product['wholesale_price'])
                    . '</td>
\t\t\t\t\t\t<td>'
                    . (method_exists(\$this->context, 'getCurrentLocale') ? \$this->context->getCurrentLocale()->formatPrice(\$product['stockvalue'], \$currency->iso_code) : \$product['stockvalue'])
                    . '</td>
\t\t\t\t\t</tr>';
            }
            \$this->html .= '
\t\t\t\t</tbody>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan=\"3\"></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Total quantities', [], 'Modules.Statsstock.Admin') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Average price', [], 'Admin.Global') . '</span></th>
\t\t\t\t\t\t<th><span class=\"title_box active\">' . \$this->trans('Total value', [], 'Modules.Statsstock.Admin') . '</span></th>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"3\"></td>
\t\t\t\t\t\t<td>' . \$rollup['quantity'] . '</td>
\t\t\t\t\t\t<td>'
                . (method_exists(\$this->context, 'getCurrentLocale') ? \$this->context->getCurrentLocale()->formatPrice(\$rollup['wholesale_price'] / count(\$products), \$currency->iso_code) : \$rollup['wholesale_price'] / count(\$products))
                . '</td>
\t\t\t\t\t\t<td>'
                . (method_exists(\$this->context, 'getCurrentLocale') ? \$this->context->getCurrentLocale()->formatPrice(\$rollup['stockvalue'], \$currency->iso_code) : \$rollup['stockvalue'])
                . '</td>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t</table>
\t\t\t<i class=\"icon-asterisk\"></i> ' . \$this->trans('This section corresponds to the default wholesale price according to the default supplier for the product. An average price is used when the product has attributes.', [], 'Modules.Statsstock.Admin');

            return \$this->html;
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsstock/statsstock.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsstock/statsstock.php", "/var/www/html/modules/statsstock/statsstock.php");
    }
}