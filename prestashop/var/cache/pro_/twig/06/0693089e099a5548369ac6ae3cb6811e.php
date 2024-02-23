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

/* @Modules/ps_brandlist/views/templates/hook/ps_brandlist.tpl */
class __TwigTemplate_f5cd40c6037890796deacdccfbdaff74 extends Template
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

<div>
  <h4>
    {if \$display_link_brand}<a href=\"{\$page_link}\" title=\"{l s='Brands' d='Modules.Brandlist.Shop'}\">{/if}
      {l s='Brands' d='Modules.Brandlist.Shop'}
    {if \$display_link_brand}</a>{/if}
  </h4>
  <div>
    {if \$brands}
      {include file=\"module:ps_brandlist/views/templates/_partials/\$brand_display_type.tpl\" brands=\$brands}
    {else}
      <p>{l s='No brand' d='Modules.Brandlist.Shop'}</p>
    {/if}
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_brandlist/views/templates/hook/ps_brandlist.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_brandlist/views/templates/hook/ps_brandlist.tpl", "/var/www/html/modules/ps_brandlist/views/templates/hook/ps_brandlist.tpl");
    }
}
