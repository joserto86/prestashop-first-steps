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

/* @Modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl */
class __TwigTemplate_0fb33b06955e03bc42af7149aeb2c727 extends Template
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
        echo "{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<section>
  <h2>
    {if \$products|@count == 1}
      {l s='%s other product in the same category:' sprintf=[\$products|@count] d='Modules.Categoryproducts.Shop'}
    {else}
      {l s='%s other products in the same category:' sprintf=[\$products|@count] d='Modules.Categoryproducts.Shop'}
    {/if}
  </h2>
  <div>
      {foreach from=\$products item=\"product\"}
          {include file=\"catalog/_partials/miniatures/product.tpl\" product=\$product}
      {/foreach}
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl", "/var/www/html/modules/ps_categoryproducts/views/templates/hook/ps_categoryproducts.tpl");
    }
}
