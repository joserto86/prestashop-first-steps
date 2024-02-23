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

/* @Modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js */
class __TwigTemplate_7ee11db4e4c542bfbf4f945a253ca8a8 extends Template
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
        echo "/**
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

/* globals \$, ga, jQuery */

var GoogleAnalyticEnhancedECommerce = {

\tsetCurrency: function(Currency) {
\t\tga('set', '&cu', Currency);
\t},

\tadd: function(Product, Order, Impression) {
\t\tvar Products = {};
\t\tvar Orders = {};

\t\tvar ProductFieldObject = ['id', 'name', 'category', 'brand', 'variant', 'price', 'quantity', 'coupon', 'list', 'position', 'dimension1'];
\t\tvar OrderFieldObject = ['id', 'affiliation', 'revenue', 'tax', 'shipping', 'coupon', 'list', 'step', 'option'];

\t\tif (Product != null) {
\t\t\tif (Impression && Product.quantity !== undefined) {
\t\t\t\tdelete Product.quantity;
\t\t\t}

\t\t\tfor (var productKey in Product) {
\t\t\t\tfor (var i = 0; i < ProductFieldObject.length; i++) {
\t\t\t\t\tif (productKey.toLowerCase() == ProductFieldObject[i]) {
\t\t\t\t\t\tif (Product[productKey] != null) {
\t\t\t\t\t\t\tProducts[productKey.toLowerCase()] = Product[productKey];
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t}

\t\t\t}
\t\t}

\t\tif (Order != null) {
\t\t\tfor (var orderKey in Order) {
\t\t\t\tfor (var j = 0; j < OrderFieldObject.length; j++) {
\t\t\t\t\tif (orderKey.toLowerCase() == OrderFieldObject[j]) {
\t\t\t\t\t\tOrders[orderKey.toLowerCase()] = Order[orderKey];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}

\t\tif (Impression) {
\t\t\tga('ec:addImpression', Products);
\t\t} else {
\t\t\tga('ec:addProduct', Products);
\t\t}
\t},

\taddProductDetailView: function(Product) {
\t\tthis.add(Product);
\t\tga('ec:setAction', 'detail');
\t\tga('send', 'event', 'UX', 'detail', 'Product Detail View',{'nonInteraction': 1});
\t},

\taddToCart: function(Product) {
\t\tthis.add(Product);
\t\tga('ec:setAction', 'add');
\t\tga('send', 'event', 'UX', 'click', 'Add to Cart');
\t},

\tremoveFromCart: function(Product) {
\t\tthis.add(Product);
\t\tga('ec:setAction', 'remove');
\t\tga('send', 'event', 'UX', 'click', 'Remove From cart');
\t},

\taddProductImpression: function(Product) {
\t},


\trefundByOrderId: function(Order) {
\t\t/**
\t\t * Refund an entire transaction.
\t\t **/
\t\tga('ec:setAction', 'refund', {
\t\t\t'id': Order.id // Transaction ID is only required field for full refund.
\t\t});
\t\tga('send', 'event', 'Ecommerce', 'Refund', {'nonInteraction': 1});
\t},

\trefundByProduct: function(Order) {
\t\tga('ec:setAction', 'refund', {
\t\t\t'id': Order.id, // Transaction ID is required for partial refund.
\t\t});
\t\tga('send', 'event', 'Ecommerce', 'Refund', {'nonInteraction': 1});
\t},

\taddProductClick: function(Product) {
\t\tvar ClickPoint = jQuery('a[href\$=\"' + Product.url + '\"].quick-view');

\t\tClickPoint.on(\"click\", function() {
\t\t\tGoogleAnalyticEnhancedECommerce.add(Product);
\t\t\tga('ec:setAction', 'click', {
\t\t\t\tlist: Product.list
\t\t\t});

\t\t\tga('send', 'event', 'Product Quick View', 'click', Product.list, {
\t\t\t\t'hitCallback': function() {
\t\t\t\t\treturn !ga.loaded;
\t\t\t\t}
\t\t\t});
\t\t});

\t},

\taddProductClickByHttpReferal: function(Product) {
\t\tthis.add(Product);
\t\tga('ec:setAction', 'click', {
\t\t\tlist: Product.list
\t\t});

\t\tga('send', 'event', 'Product Click', 'click', Product.list, {
\t\t\t'nonInteraction': 1,
\t\t\t'hitCallback': function() {
\t\t\t\treturn !ga.loaded;
\t\t\t}
\t\t});

\t},

\taddTransaction: function(Order) {
\t\tga('ec:setAction', 'purchase', Order);
\t\tga('send', 'event','Transaction','purchase', {
\t\t\t'hitCallback': function() {
\t\t\t\t\$.get(Order.url, {
\t\t\t\t\torderid: Order.id,
\t\t\t\t\tcustomer: Order.customer
\t\t\t\t});
\t\t\t}
\t\t});

\t},

\taddCheckout: function(Step) {
\t\tga('ec:setAction', 'checkout', {
\t\t\t'step': Step
\t\t\t//'option':'Visa'
\t\t});
\t\tga('send', 'pageview');
\t},

\taddCheckoutOption: function(Step,Option) {
\t\tga('ec:setAction', 'checkout_option', {
\t\t\t'step': Step,
\t\t\t'option': Option
\t\t});
\t\tga('send', 'event', 'Checkout', 'Option');
  \t}
};
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js", "/var/www/html/modules/ps_googleanalytics/views/js/GoogleAnalyticActionLib.js");
    }
}
