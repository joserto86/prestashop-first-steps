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

/* @Modules/ps_themecusto/views/templates/admin/page.tpl */
class __TwigTemplate_c9dae1c8717ccdafb2949a9def566829 extends Template
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

<div class=\"content-div\">
    <div class=\"grid\">
        <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            {if \$enable}
                {include file=\"./controllers/\$configure_type/index.tpl\"}
            {else}
                <div class=\"panel col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <h4>{l s='The module %s has been disabled' sprintf=\$moduleName mod='ps_themecusto'}</h4>
                </div>
            {/if}
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/page.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/views/templates/admin/page.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/page.tpl");
    }
}
