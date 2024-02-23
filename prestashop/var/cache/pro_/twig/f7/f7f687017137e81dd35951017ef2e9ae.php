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

/* @Modules/ps_facetedsearch/views/templates/admin/_partials/footer.tpl */
class __TwigTemplate_6bcf49494418115ae9fec4e70b7dae29 extends Template
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<div class=\"panel-footer\" id=\"toolbar-footer\">
  <button class=\"btn btn-default pull-right\" id=\"submit-filter\" name=\"SubmitFilter\" type=\"submit\"><i class=\"process-icon-save\"></i> <span>{l s='Save' d='Admin.Actions'}</span></button>
  <a class=\"btn btn-default\" href=\"{\$current_url}\">
    <i class=\"process-icon-cancel\"></i> <span>{l s='Cancel' d='Admin.Actions'}</span>
  </a>
</div>

<script type=\"text/javascript\">
  var translations = new Array();
  {if isset(\$filters)}var filters = '{\$filters|@json_encode}';{/if}
  translations['no_selected_categories'] = \"{l s='You must select at least one category' d='Modules.Facetedsearch.Admin'}\";
  translations['no_selected_controllers'] = \"{l s='You must select at least one page' d='Modules.Facetedsearch.Admin'}\";
  translations['no_selected_filters'] = \"{l s='You must select at least one filter' d='Modules.Facetedsearch.Admin'}\";
</script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/admin/_partials/footer.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/views/templates/admin/_partials/footer.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/footer.tpl");
    }
}
