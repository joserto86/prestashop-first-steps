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

/* @Modules/ps_shoppingcart/ps_shoppingcart.tpl */
class __TwigTemplate_70afeedab1719b211c6ce1c1a807a833 extends Template
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
        echo "{**
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
 *}
<div id=\"blockcart-wrapper\">
  <div class=\"blockcart cart-preview\" data-refresh-url=\"{\$refresh_url}\">
    <div class=\"header\">
      <a rel=\"nofollow\" href=\"{\$cart_url}\">
        <span>{l s='Cart' d='Shop.Theme.Actions'}</span>
        <span>{\$cart.summary_string}</span>
      </a>
    </div>
    <div class=\"body\">
      <ul>
        {foreach from=\$cart.products item=product}
          <li>{include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=\$product}</li>
        {/foreach}
      </ul>
      <div class=\"cart-subtotals\">
        {foreach from=\$cart.subtotals item=\"subtotal\"}
          {if isset(\$subtotal.type, \$subtotal.label, \$subtotal.amount)}
            <div class=\"{\$subtotal.type}\">
              <span class=\"label\">{\$subtotal.label}</span>
              <span class=\"value\">{\$subtotal.amount}</span>
            </div>
          {/if}
        {/foreach}
      </div>
      <div class=\"cart-total\">
        <span class=\"label\">{\$cart.totals.total.label}</span>
        <span class=\"value\">{\$cart.totals.total.amount}</span>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_shoppingcart/ps_shoppingcart.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_shoppingcart/ps_shoppingcart.tpl", "/var/www/html/modules/ps_shoppingcart/ps_shoppingcart.tpl");
    }
}
