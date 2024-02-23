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

/* @Modules/productcomments/views/templates/admin/_configure/helpers/form/form.tpl */
class __TwigTemplate_d96ede04915d1587f0372571b98f726f extends Template
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

{extends file=\"helpers/form/form.tpl\"}

{block name=\"input\"}
\t{if \$input.type == 'products'}
\t\t<table id=\"{\$input.name}\">
\t\t\t<tr>
\t\t\t\t<th></th>
\t\t\t\t<th>ID</th>
\t\t\t\t<th width=\"80%\">{l s='Product Name' d='Modules.Productcomments.Admin'}</th>
\t\t\t</tr>
\t\t\t{foreach \$input.values as \$value}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"{\$input.name}[]\" value=\"{\$value.id_product}\" 
\t\t\t\t\t\t{if isset(\$value.selected) && \$value.selected == 1} checked {/if} />
\t\t\t\t\t</td>
\t\t\t\t\t<td>{\$value.id_product}</td>
\t\t\t\t\t<td width=\"80%\">{\$value.name}</td>
\t\t\t\t</tr>
\t\t\t{/foreach}
\t\t</table>
    {elseif \$input.type == 'switch' && \$smarty.const._PS_VERSION_|@addcslashes:'\\'' < '1.6'}
\t\t{foreach \$input.values as \$value}
\t\t\t<input type=\"radio\" name=\"{\$input.name}\" id=\"{\$value.id}\" value=\"{\$value.value|escape:'html':'UTF-8'}\"
\t\t\t\t\t{if \$fields_value[\$input.name] == \$value.value}checked=\"checked\"{/if}
\t\t\t\t\t{if isset(\$input.disabled) && \$input.disabled}disabled=\"disabled\"{/if} />
\t\t\t<label class=\"t\" for=\"{\$value.id}\">
\t\t\t {if isset(\$input.is_bool) && \$input.is_bool == true}
\t\t\t\t{if \$value.value == 1}
\t\t\t\t\t<img src=\"../img/admin/enabled.gif\" alt=\"{\$value.label}\" title=\"{\$value.label}\" />
\t\t\t\t{else}
\t\t\t\t\t<img src=\"../img/admin/disabled.gif\" alt=\"{\$value.label}\" title=\"{\$value.label}\" />
\t\t\t\t{/if}
\t\t\t {else}
\t\t\t\t{\$value.label}
\t\t\t {/if}
\t\t\t</label>
\t\t\t{if isset(\$input.br) && \$input.br}<br />{/if}
\t\t\t{if isset(\$value.p) && \$value.p}<p>{\$value.p}</p>{/if}
\t\t{/foreach}
\t{else}
\t\t{\$smarty.block.parent}
    {/if}

{/block}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/templates/admin/_configure/helpers/form/form.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/views/templates/admin/_configure/helpers/form/form.tpl", "/var/www/html/modules/productcomments/views/templates/admin/_configure/helpers/form/form.tpl");
    }
}
