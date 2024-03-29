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

/* @Modules/psgdpr/views/templates/front/pdf/personalData.addresses-tab.tpl */
class __TwigTemplate_04138886490bdecfc0398090f7ddf10e extends Template
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

<h2>{l s='Addresses' mod='psgdpr'}</h2>
<br>
<table id=\"summary-tab\" width=\"100%\">
    <tr>
        <th class=\"header\" valign=\"middle\">{l s='Alias' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Company' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Name' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Address' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Phone(s)' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Country' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Date' mod='psgdpr'}</th>
    </tr>

    {if count(\$addresses) >= 1}
    {foreach from=\$addresses item=address}
    <tr>
        <td class=\"center white\">{\$address['alias']}</td>
        <td class=\"center white\">{\$address['company']}</td>
        <td class=\"center white\">{\$address['firstname']} {\$address['lastname']}</td>
        <td class=\"center white\">{\$address['address1']} {\$address['address2']} {\$address['postcode']} {\$address['city']}</td>
        <td class=\"center white\">{\$address['phone']} {\$address['phone_mobile']}</td>
        <td class=\"center white\">{\$address['country']}</td>
        <td class=\"center white\">{\$address['date_add']}</td>
    </tr>
    {/foreach}
    {else}
    <tr>
        <td colspan=\"7\" class=\"center white\">{l s='No addresses' mod='psgdpr'}</td>
    </tr>
    {/if}
</table>

";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/front/pdf/personalData.addresses-tab.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/templates/front/pdf/personalData.addresses-tab.tpl", "/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.addresses-tab.tpl");
    }
}
