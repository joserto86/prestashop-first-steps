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

/* @Modules/ps_checkpayment/views/templates/front/payment_infos.tpl */
class __TwigTemplate_9a1d6bbe23b332e6b86b819f206bf389 extends Template
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

<section>
  <p>{l s='Please send us your check following these rules:' d='Modules.Checkpayment.Shop'}
    <dl>
      <dt>{l s='Amount' d='Modules.Checkpayment.Shop'}</dt>
      <dd>{\$checkTotal} {\$checkTaxLabel}</dd>
      <dt>{l s='Payee' d='Modules.Checkpayment.Shop'}</dt>
      <dd>{\$checkOrder}</dd>
      <dt>{l s='Send your check to this address' d='Modules.Checkpayment.Shop'}</dt>
      <dd>{\$checkAddress nofilter}</dd>
    </dl>
  </p>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_checkpayment/views/templates/front/payment_infos.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_checkpayment/views/templates/front/payment_infos.tpl", "/var/www/html/modules/ps_checkpayment/views/templates/front/payment_infos.tpl");
    }
}
