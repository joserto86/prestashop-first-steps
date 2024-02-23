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

/* @Modules/blockreassurance/views/templates/admin/tabs/content/config.tpl */
class __TwigTemplate_3f7bf2bfd1a1f664d60d69d6384dab75 extends Template
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
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}

<div id=\"blockDisplay\" class=\"panel panel-default panel-blockreassurance col-lg-10 col-xs-10 col-lg-offset-1 col-xs-offset-1 inactive\">
    <div class=\"panel-heading\">
        {l s='Reassurance Block' d='Modules.Blockreassurance.Admin'}
    </div>
    {include file=\"./config_elements/reassurance_block.tpl\"}
    <form class=\"form_\" method=\"post\" ENCTYPE=\"multipart/form-data\">
      <div class=\"panel-body-0 panel-body show-rea-block inactive\">
          {* icon *}
          {include file=\"./config_elements/icon.tpl\"}
          {* language *}
          {include file=\"./config_elements/language.tpl\"}
          {foreach from=\$languages item=language}
              {* title *}
              {include file=\"./config_elements/title.tpl\"}
              {* description *}
              {include file=\"./config_elements/description.tpl\"}
          {/foreach}
          {* redirection *}
          {include file=\"./config_elements/redirection.tpl\"}
          {* CMS *}
          {include file=\"./config_elements/cms.tpl\"}
          {* URL *}
          {include file=\"./config_elements/url.tpl\"}
      </div>
    </form>
    {foreach from=\$allblock item=\$block key=\$key}
        <form class=\"form_{\$block['id_psreassurance']}\" method=\"post\" ENCTYPE=\"multipart/form-data\">
            <div class=\"panel-body-{\$block['id_psreassurance']} panel-body show-rea-block inactive\">
                {* icon *}
                {include file=\"./config_elements/icon.tpl\"}
                {* language *}
                {include file=\"./config_elements/language.tpl\"}
                {foreach from=\$languages item=language}
                    {* title *}
                    {include file=\"./config_elements/title.tpl\"}
                    {* description *}
                    {include file=\"./config_elements/description.tpl\"}
                {/foreach}
                {* redirection *}
                {include file=\"./config_elements/redirection.tpl\"}
                {* CMS *}
                {include file=\"./config_elements/cms.tpl\"}
                {* URL *}
                {include file=\"./config_elements/url.tpl\"}
            </div>
        </form>
    {/foreach}
    <div class=\"panel-footer\">
        <div class=\"col-xs-6 text-left\">
            <input name=\"refreshPage\" type=\"submit\"
                    class=\"btn btn-primary refreshPage\" value=\"{l s='Return' d='Modules.Blockreassurance.Admin'}\">
        </div>
        <div class=\"col-xs-6 text-right\">
            <input name=\"saveContentConfiguration\" id=\"saveContentConfiguration\" data-id=\"\" type=\"submit\"
                   class=\"btn btn-primary\" value=\"{l s='Save' d='Modules.Blockreassurance.Admin'}\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/content/config.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/templates/admin/tabs/content/config.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config.tpl");
    }
}
