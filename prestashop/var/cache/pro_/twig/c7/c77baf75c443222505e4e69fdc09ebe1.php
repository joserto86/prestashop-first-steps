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

/* @Modules/ps_emailalerts/views/templates/front/mailalerts-account-line.tpl */
class __TwigTemplate_dad0f3f704f1149571b83085d0f32280 extends Template
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
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *}

<a href=\"{\$mailAlert.link}\" class=\"col-md-2 col-xs-4\" style=\"text-align:center;\">
  <img src=\"{\$mailAlert.cover_url}\" alt=\"\" style=\"max-width: 100%;\"/>
</a>
<a href=\"{\$mailAlert.link}\" class=\"col-md-8 col-xs-6\">
  <div>{\$mailAlert.name}
    <span>{\$mailAlert.attributes_small}</span>
  </div>
</a>
<a href=\"#\"
   title=\"{l s='Delete email alert' d='Modules.Emailalerts.Shop'}\"
   class=\"js-remove-email-alert btn btn-link col-xs-2\"
   rel=\"js-id-emailalerts-{\$mailAlert.id_product|intval}-{\$mailAlert.id_product_attribute|intval}\"
   data-url=\"{url entity='module' name='ps_emailalerts' controller='actions' params=['process' => 'remove']}\">
  <i class=\"material-icons\">delete</i>
</a>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/views/templates/front/mailalerts-account-line.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/views/templates/front/mailalerts-account-line.tpl", "/var/www/html/modules/ps_emailalerts/views/templates/front/mailalerts-account-line.tpl");
    }
}
