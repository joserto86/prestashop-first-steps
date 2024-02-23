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

/* @Modules/psgdpr/views/templates/front/pdf/personalData.modules-tab.tpl */
class __TwigTemplate_a395fd33ff024463080012e994540fdb extends Template
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

{foreach from=\$modules item=module key=key}
<h2>{l s='Module' mod='psgdpr'} : {\$key}</h2>
<br>

{foreach from=\$module item=table}
<table id=\"summary-tab\" width=\"100%\">
    <tr>
        {foreach from=\$table item=value key=index}
        <th class=\"header\" valign=\"middle\">{\$index}</th>
        {/foreach}
    </tr>

    <tr>
        {foreach from=\$table item=value key=index}
        <td class=\"center white\">{\$value|escape:'html':'UTF-8'}</td>
        {/foreach}
    </tr>
</table>
{/foreach}

{/foreach}
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/front/pdf/personalData.modules-tab.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/templates/front/pdf/personalData.modules-tab.tpl", "/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.modules-tab.tpl");
    }
}
