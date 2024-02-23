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

/* @Modules/ps_wirepayment/views/templates/hook/payment.tpl */
class __TwigTemplate_5ee84bb0c7f56623ae7c2c13b05b644c extends Template
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
 * 2007-2020 PrestaShop and Contributors
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<p class=\"payment_module\">
\t<a href=\"{\$link->getModuleLink('ps_wirepayment', 'payment')|escape:'html'}\" title=\"{l s='Pay by bank wire' d='Modules.Wirepayment.Shop'}\">
\t\t<img src=\"{\$this_path_bw}logo.png\" alt=\"{l s='Pay by bank wire' d='Modules.Wirepayment.Shop'}\" width=\"86\" height=\"49\"/>
\t\t{l s='Pay by bank wire' d='Modules.Wirepayment.Shop'}&nbsp;<span>{l s='(order processing will be longer)' d='Modules.Wirepayment.Shop'}</span>
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/views/templates/hook/payment.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_wirepayment/views/templates/hook/payment.tpl", "/var/www/html/modules/ps_wirepayment/views/templates/hook/payment.tpl");
    }
}
