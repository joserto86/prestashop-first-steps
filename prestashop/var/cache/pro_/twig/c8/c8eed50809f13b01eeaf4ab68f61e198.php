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

/* @Modules/ps_checkpayment/views/templates/hook/infos.tpl */
class __TwigTemplate_770029f7b54a5bd15322391b7627ea95 extends Template
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

<div class=\"alert alert-info\">
<img src=\"../modules/ps_checkpayment/logo.png\" style=\"float:left; margin-right:15px;\" height=\"60\">
<p><strong>{l s=\"This module allows you to accept payments by check.\" d='Modules.Checkpayment.Admin'}</strong></p>
<p>{l s=\"If the client chooses this payment method, the order status will change to 'Waiting for payment'.\" d='Modules.Checkpayment.Admin'}</p>
<p>{l s=\"You will need to manually confirm the order as soon as you receive a check.\" d='Modules.Checkpayment.Admin'}</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_checkpayment/views/templates/hook/infos.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_checkpayment/views/templates/hook/infos.tpl", "/var/www/html/modules/ps_checkpayment/views/templates/hook/infos.tpl");
    }
}
