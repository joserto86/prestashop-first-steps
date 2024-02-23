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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe.tpl */
class __TwigTemplate_bb421125b26e09f42a35b23f4598f808 extends Template
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

<div class=\"row js-wireframe\">
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-menu\" data-module_name=\"menu\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/header.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/header-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/header-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-slider\" data-module_name=\"slider\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/slider.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/slider-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/slider-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-home_products\" data-module_name=\"home_products\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/home_products.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/home_products-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/home_products-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-block_text\" data-module_name=\"block_text\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/block_text.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/block_text-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/block_text-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-home_products\" data-module_name=\"home_products\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/home_products2.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/home_products2-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/home_products2-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-banner\" data-module_name=\"banner\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/banner.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/banner-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/banner-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-social_newsletter\" data-module_name=\"social_newsletter\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/newsletter.jpg\"/>
        <img class=\"hover-element\" src=\"{\$moduleImgUri}/wireframe/newsletter-hover.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/newsletter-selected.jpg\"/>
    </div>
    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 js-img-footer\" data-module_name=\"footer\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/footer.jpg\"/>
        <img class=\"active-element\" src=\"{\$moduleImgUri}/wireframe/footer_hover.jpg\"/>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe.tpl");
    }
}
