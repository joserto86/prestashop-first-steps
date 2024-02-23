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

/* @Modules/ps_currencyselector/ps_currencyselector.tpl */
class __TwigTemplate_05b8881f7d0204846842b6bf50d1084c extends Template
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
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class=\"currency-selector\">
  <span>{\$current_currency.iso_code}{if \$current_currency.sign !== \$current_currency.iso_code} {\$current_currency.sign}{/if}</span>
  <ul>
    {foreach from=\$currencies item=currency}
      <li {if \$currency.current} class=\"current\" {/if}>
        <a rel=\"nofollow\" href=\"{\$currency.url}\">{\$currency.iso_code}{if \$currency.sign !== \$currency.iso_code} {\$currency.sign}{/if}</a>
      </li>
    {/foreach}
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_currencyselector/ps_currencyselector.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_currencyselector/ps_currencyselector.tpl", "/var/www/html/modules/ps_currencyselector/ps_currencyselector.tpl");
    }
}
