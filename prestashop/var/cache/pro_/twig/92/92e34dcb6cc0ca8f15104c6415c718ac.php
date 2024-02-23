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

/* @Modules/psgdpr/views/templates/front/pdf/personalData.tpl */
class __TwigTemplate_f40a310938730ad91b0a616b287836fc extends Template
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
        echo "
{**
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

{\$style_tab}


<table width=\"100%\" id=\"body\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"margin:0;\">
    <!-- general customer info -->
    <tr>
        <td colspan=\"12\">

            {\$generalInfo_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"30\">&nbsp;</td>
    </tr>

    <!-- addresses tab -->
    <tr>
        <td colspan=\"12\">

            {\$addresses_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"10\">&nbsp;</td>
    </tr>

    <!-- order list tab -->
    <tr>
        <td colspan=\"12\">

            {\$orders_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"20\">&nbsp;</td>
    </tr>

    <!-- cart list tab -->
    <tr>
        <td colspan=\"12\">

            {\$carts_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"10\">&nbsp;</td>
    </tr>

    <!-- messages tab -->
    <tr>
        <td colspan=\"12\">

            {\$messages_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"10\">&nbsp;</td>
    </tr>

    <!-- connections tab -->
    <tr>
        <td colspan=\"12\">

            {\$connections_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"10\">&nbsp;</td>
    </tr>


    <!-- modules tab -->
    <tr>
        <td colspan=\"12\">

            {\$modules_tab}

        </td>
    </tr>

    <tr>
        <td colspan=\"12\" height=\"10\">&nbsp;</td>
    </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/front/pdf/personalData.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/templates/front/pdf/personalData.tpl", "/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.tpl");
    }
}
