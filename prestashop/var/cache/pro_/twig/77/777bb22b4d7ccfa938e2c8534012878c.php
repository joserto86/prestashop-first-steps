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

/* @Modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl */
class __TwigTemplate_29616c5b02298a16339db09afc0d3361 extends Template
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
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{extends file=\"helpers/list/list_content.tpl\"}

{block name=\"td_content\"}
\t{if isset(\$params.type) && \$params.type == 'link'}
\t\t<a href=\"{\$tr.\$key|escape:'html':'UTF-8'}\" target=\"_blank\">{\$tr.\$key|escape:'html':'UTF-8'}</a>
\t{else}
\t\t{\$smarty.block.parent}
\t{/if}
{/block}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl", "/var/www/html/modules/ps_mainmenu/views/templates/admin/_configure/helpers/list/list_content.tpl");
    }
}
