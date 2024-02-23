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

/* @Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl */
class __TwigTemplate_9cb812813ee2f8fa32cc79f62d438bad extends Template
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

<h2>{l s='Last connections' mod='psgdpr'}</h2>
<br>
<table id=\"summary-tab\" width=\"100%\">
    <tr>
        <th class=\"header\" valign=\"middle\">{l s='Origin request' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Page viewed' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Time on the page' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='IP address' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Date' mod='psgdpr'}</th>
    </tr>

    {if count(\$connections) >= 1}
    {foreach from=\$connections item=connection}
    <tr>
        <td class=\"center white\">{\$connection['http_referer']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['pages']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['time']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['ipaddress']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['date_add']|escape:'html':'UTF-8'}</td>
    </tr>
    {/foreach}
    {else}
    <tr>
        <td colspan=\"5\" class=\"center white\">{l s='No connections' mod='psgdpr'}</td>
    </tr>
    {/if}
</table>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl", "/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl");
    }
}
