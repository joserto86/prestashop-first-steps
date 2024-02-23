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

/* @Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl */
class __TwigTemplate_5e6a9fdad2c9dc098d2b427b6070e703 extends Template
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

<div class=\"form-group psr-url {if (isset(\$block) && \$block['type_link'] != \$LINK_TYPE_URL) || !isset(\$block)} inactive{/if}\" data-type=\"url\">
    <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-3\">
        <div class=\"text-right\">
            <label class=\"control-label\">
                {l s='URL' d='Modules.Blockreassurance.Admin'}
            </label>
        </div>
    </div>

    {foreach from=\$languages item=language}
        <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-4 content_by_lang lang-{\$language.id_lang|escape:'htmlall':'UTF-8'} {if \$language.id_lang != \$defaultFormLanguage}inactive{/if}\"
             data-type=\"url\" data-lang=\"{\$language.id_lang|escape:'htmlall':'UTF-8'}\">
            <div class=\"input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex\">
                <div class=\"input-group-append\">
                    <span class=\"input-group-text picto-url\"><i class=\"material-icons\">link</i></span>
                </div>
                <input class=\"block_url form-control\" type=\"text\" name=\"URL\"
                       value=\"{if isset(\$block)}{\$allblock[\$block['id_psreassurance']]['url'][{\$language.id_lang}]}{/if}\">
            </div>
        </div>
    {/foreach}
    <div class=\"clearfix\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl");
    }
}
