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

/* @Modules/ps_categorytree/views/templates/hook/ps_categorytree.tpl */
class __TwigTemplate_ae3276b38aec53de3c738f24d2de8afe extends Template
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

{function name=\"categories\" nodes=[] depth=0}
  {strip}
    {if \$nodes|count}
      <ul>
        {foreach from=\$nodes item=node}
          <li>
            <a href=\"{\$node.link}\">{\$node.name}</a>
            <div>
              {categories nodes=\$node.children depth=\$depth+1}
            </div>
          </li>
        {/foreach}
      </ul>
    {/if}
  {/strip}
{/function}

<div class=\"category-tree\">
  <ul>
    <li><a href=\"{\$categories.link nofilter}\">{\$categories.name}</a></li>
    {if !empty(\$categories.children)}
      <li>{categories nodes=\$categories.children}</li>
    {/if}
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_categorytree/views/templates/hook/ps_categorytree.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_categorytree/views/templates/hook/ps_categorytree.tpl", "/var/www/html/modules/ps_categorytree/views/templates/hook/ps_categorytree.tpl");
    }
}
