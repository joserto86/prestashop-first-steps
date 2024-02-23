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

/* @Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/title.tpl */
class __TwigTemplate_841951e4adbee7db645ce0efd8789c6e extends Template
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

<div class=\"form-group content_by_lang lang-{\$language.id_lang|escape:'htmlall':'UTF-8'} {if \$language.id_lang != \$defaultFormLanguage}inactive{/if}\"
     data-type=\"title\" data-lang=\"{\$language.id_lang|escape:'htmlall':'UTF-8'}\">
    <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-3\">
        <div class=\"text-right\">
            <label class=\"control-label\">
                {l s='Title' d='Modules.Blockreassurance.Admin'}
            </label>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-4\">
        <div class=\"input-group col-lg-12\">
            <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-12\">
                <input type=\"text\" name=\"title-{\$language.id_lang|escape:'htmlall':'UTF-8'}\" max=\"100\"
                       class=\"form-control\"
                       value=\"{if isset(\$block)}{\$allblock[\$block['id_psreassurance']]['title'][{\$language.id_lang}]|escape:'htmlall':'UTF-8'}{/if}\">
            </div>
        </div>
        <div class=\"col-xs-12 help-block\">
            <span class=\"limit_text\">0</span>/100 characters
        </div>
    </div>
    <div class=\"clearfix\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/title.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/title.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/title.tpl");
    }
}
