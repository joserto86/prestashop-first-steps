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

/* @Modules/blockreassurance/views/templates/admin/tabs/appearance.tpl */
class __TwigTemplate_8af215e37546ea2d12e12e637271c649 extends Template
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

<div class=\"panel panel-default panel-blockreassurance col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0\">
    <div class=\"panel-heading\">
        {l s='Customize Module Design' d='Modules.Blockreassurance.Admin'}
    </div>

    <div class=\"panel-body\">
        <div class=\"clearfix\">

            <div class=\"form-group\">
                <div class=\"col-xs-5 col-md-5 col-lg-3\">
                    <div class=\"text-right\">
                        <label class=\"control-label\">
                            {l s='Icon color' d='Modules.Blockreassurance.Admin'}
                        </label>
                    </div>
                </div>
                <div class=\"col-xs-7 col-md-7 col-lg-2\">
                    <input type=\"color\" id=\"color_1\" name=\"PSR_ICON_COLOR\" class=\"psr_icon_color\"
                           value=\"{if isset(\$psr_icon_color)}{\$psr_icon_color|escape:'htmlall':'UTF-8'}{/if}\" />
                </div>

                <div class=\"clearfix\"></div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-xs-5 col-md-5 col-lg-3\">
                    <div class=\"text-right\">
                        <label class=\"control-label\">
                            {l s='Text color' d='Modules.Blockreassurance.Admin'}
                        </label>
                    </div>
                </div>
                <div class=\"col-xs-7 col-md-7 col-lg-2\">
                    <input type=\"color\" id=\"color_2\" name=\"PSR_TEXT_COLOR\" class=\"psr_text_color\"
                           value=\"{if isset(\$psr_text_color)}{\$psr_text_color|escape:'htmlall':'UTF-8'}{/if}\" />
                </div>
            </div>

        </div>
    </div>

    <div class=\"panel-footer\">
        <div class=\"col-xs-12 text-right\">
            <button name=\"saveConfiguration\" id=\"saveConfiguration\" type=\"submit\" class=\"btn btn-primary\">{l s='Save' d='Modules.Blockreassurance.Admin'}</button>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/appearance.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/templates/admin/tabs/appearance.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/appearance.tpl");
    }
}
