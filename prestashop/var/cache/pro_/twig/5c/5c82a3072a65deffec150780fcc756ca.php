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

/* @Modules/ps_wirepayment/views/templates/hook/infos.tpl */
class __TwigTemplate_c112b4b41660800288b6a990b6546c6f extends Template
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

<div class=\"alert alert-info\">
  <img src=\"../modules/ps_wirepayment/logo.png\" style=\"float:left; margin-right:15px;\" height=\"60\">
  <p><strong>{l s=\"This module allows you to accept secure payments by bank wire.\" d='Modules.Wirepayment.Admin'}</strong></p>
  <p>{l s=\"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.\" d='Modules.Wirepayment.Admin'}</p>
  <p>{l s=\"That said, you must manually confirm the order upon receiving the bank wire.\" d='Modules.Wirepayment.Admin'}</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/views/templates/hook/infos.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_wirepayment/views/templates/hook/infos.tpl", "/var/www/html/modules/ps_wirepayment/views/templates/hook/infos.tpl");
    }
}
