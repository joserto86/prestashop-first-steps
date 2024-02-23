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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl */
class __TwigTemplate_ceac5e6ff8b01fa4b8e4859d8637bea1 extends Template
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
* 2007-2018 PrestaShop
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   http://addons.prestashop.com/en/content/12-terms-and-conditions-of-use
* International Registered Trademark & Property of PrestaShop SA
*}

<div class=\"row no-gutter js-wireframe\">
    <div class=\"col-xs-12 js-img-menu\" data-module_name=\"menu\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/header.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/header-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/header-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12\">
        <div class=\"row no-gutter\">
            <div class=\"col-xs-3 js-img-navigation_column\" data-module_name=\"navigation_column\">
                <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/category/navigation-column.jpg\"/>
                <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/category/navigation-column-hover.jpg\"/>
                <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/category/navigation-column-selected.jpg\"/>
            </div>
            <div class=\"col-xs-9\">
                <div class=\"row no-gutter\">
                    <div class=\"col-xs-12 js-img-categories\" data-module_name=\"categories\">
                        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/category/category.jpg\"/>
                        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/category/category-hover.jpg\"/>
                        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/category/category-selected.jpg\"/>
                    </div>
                    <div class=\"col-xs-12 js-img-content\" data-module_name=\"content\">
                        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/category/content.jpg\"/>
                        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/category/content-hover.jpg\"/>
                        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/category/content-selected.jpg\"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xs-12 js-img-social_newsletter\" data-module_name=\"social_newsletter\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-footer\" data-module_name=\"footer\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/footer.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/footer-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/footer-selected.jpg\"/>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl");
    }
}
