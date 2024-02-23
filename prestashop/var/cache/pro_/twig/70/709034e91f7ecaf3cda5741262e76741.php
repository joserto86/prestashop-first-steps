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

/* @Modules/ps_facetedsearch/views/templates/admin/_partials/categories-tree.tpl */
class __TwigTemplate_61913ee1d5e0ec8e4589cc2c97b6da32 extends Template
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
<div class=\"form-group form-group-categories\">
  <label class=\"control-label col-lg-3\">{l s='Categories used for this template:' d='Modules.Facetedsearch.Admin'}</label>
  <div class=\"col-lg-9\">
    {if trim(\$categories_tree) != ''}
      {\$categories_tree}
    {else}
      <div class=\"alert alert-warning\">
        {l s='Categories selection is disabled because you have no categories or you are in a \"all shops\" context.' d='Modules.Facetedsearch.Admin'}
      </div>
    {/if}
    <p class=\"help-block\">{l s='Effective only if category pages are selected above.' d='Modules.Facetedsearch.Admin'}</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/admin/_partials/categories-tree.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/views/templates/admin/_partials/categories-tree.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/categories-tree.tpl");
    }
}
