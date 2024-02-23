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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl */
class __TwigTemplate_ddb06742d3413f827542672c4255cfa4 extends Template
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

<div id=\"psthemecusto\" class=\"container-fluid clearfix\">
    <div class=\"panel row\">
        <div class=\"panel-heading text-center\">
            <button class=\"btn btn-primary btn-lg selected\" data-id-modal=\"homepageModal\">{l s='Homepage' mod='ps_themecusto'}</button>
            <button class=\"btn btn-primary btn-lg\" data-id-modal=\"categoryModal\">{l s='Category page' mod='ps_themecusto'}</button>
            <button class=\"btn btn-primary btn-lg\" data-id-modal=\"productModal\">{l s='Product page' mod='ps_themecusto'}</button>
        </div>

        {include file=\"./dropdownList.tpl\" elementsList=\$homePageList idModal='homepage' defaultModalClass='' }
        {include file=\"./dropdownList.tpl\" elementsList=\$categoryPageList idModal='category' defaultModalClass='hide'}
        {include file=\"./dropdownList.tpl\" elementsList=\$productPageList idModal='product' defaultModalClass='hide'}
    </div>

    {include file=\"./elem/modal.tpl\"}
</div>

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/index.tpl");
    }
}
