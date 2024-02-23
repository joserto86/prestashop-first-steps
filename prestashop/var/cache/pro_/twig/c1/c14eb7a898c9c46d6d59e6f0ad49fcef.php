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

/* @Modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl */
class __TwigTemplate_a42900b9c155666dbee3124a0be46000 extends Template
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
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to https://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2020 PrestaShop SA
*  @license    https://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{block name='social_sharing'}
  {if isset(\$social_share_links) && \$social_share_links|is_array}
    <div class=\"social-sharing\">
      <ul>
        {foreach from=\$social_share_links item='social_share_link'}
          <li class=\"{\$social_share_link.class}\"><a href=\"{\$social_share_link.url}\">{\$social_share_link.label}</a></li>
        {/foreach}
      </ul>
    </div>
  {/if}
{/block}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl", "/var/www/html/modules/ps_sharebuttons/views/templates/hook/ps_sharebuttons.tpl");
    }
}
