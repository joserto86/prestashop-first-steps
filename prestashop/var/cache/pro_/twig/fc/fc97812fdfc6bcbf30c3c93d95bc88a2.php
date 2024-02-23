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

/* @Modules/ps_categorytree/category-tree-branch.tpl */
class __TwigTemplate_f4e5edd1899259f7397d94c2f08a9362 extends Template
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

<li class=\"category_{\$node.id}{if isset(\$last) && \$last == 'true'} last{/if}\">
\t<a href=\"{\$node.link|escape:'html':'UTF-8'}\" {if isset(\$currentCategoryId) && \$node.id == \$currentCategoryId}class=\"selected\"{/if}
\t\ttitle=\"{\$node.desc|strip_tags|trim|truncate:255:'...'|escape:'html':'UTF-8'}\">{\$node.name|escape:'html':'UTF-8'}</a>
\t{if \$node.children|@count > 0}
\t\t<ul>
\t\t{foreach from=\$node.children item=child name=categoryTreeBranch}
\t\t\t{if \$smarty.foreach.categoryTreeBranch.last}
\t\t\t\t{include file=\"\$branche_tpl_path\" node=\$child last='true'}
\t\t\t{else}
\t\t\t\t{include file=\"\$branche_tpl_path\" node=\$child last='false'}
\t\t\t{/if}
\t\t{/foreach}
\t\t</ul>
\t{/if}
</li>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_categorytree/category-tree-branch.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_categorytree/category-tree-branch.tpl", "/var/www/html/modules/ps_categorytree/category-tree-branch.tpl");
    }
}
