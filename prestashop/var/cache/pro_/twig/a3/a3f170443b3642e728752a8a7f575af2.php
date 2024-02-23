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

/* @Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl */
class __TwigTemplate_d665d6108b933bc8aa628abf4646af93 extends Template
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

{if \$languages|count > 1}
<div class=\"form-group\">
    <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-3\">
        <div class=\"text-right\">
            <label class=\"control-label\">
                {l s='Languages' d='Modules.Blockreassurance.Admin'}
            </label>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-4\">
        <div class=\"input-group col-lg-12\">
            <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-12\">
                <select class=\"custom-select\" name=\"psr-language\">
                    {foreach from=\$languages item=lang}
                        <option {if \$lang.id_lang == \$defaultFormLanguage}selected=\"selected\"{/if}
                                value=\"{\$lang.id_lang}\">{\$lang.name|escape:'htmlall':'UTF-8'}</option>
                    {/foreach}
                </select>
            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
</div>
{/if}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl");
    }
}
