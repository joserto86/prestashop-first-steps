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

/* @Modules/ps_googleanalytics/views/templates/admin/configuration.tpl */
class __TwigTemplate_5636dac683a97a6631d907c4527d30fb extends Template
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
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class=\"panel\">
\t<div id=\"google_analytics_top\">
\t\t<img src=\"{\$module_dir}views/img/ga_logo.png\" class=\"img-responsive\" alt=\"Google Analytics\" />
\t</div>
\t<hr/>
\t<div id=\"google_analytics_content\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<p>{l s='Your customers go everywhere; shouldn\\'t your analytics.' d='Modules.GAnalytics.Admin'}</p>
\t\t\t\t<p>{l s='Google Analytics shows you the full customer picture across ads and videos, websites and social tools, tables and smartphones. That makes it easier to serve your current customers and win new ones.' d='Modules.GAnalytics.Admin'}</p>
\t\t\t\t<p><b>{l s='With ecommerce functionality in Google Analytics you can gain clear insight into important metrics about shopper behavior and conversion, including:' d='Modules.GAnalytics.Admin'}</b></p>
\t\t\t\t<div class=\"row google-analytics-advantages-list\">
\t\t\t\t\t<div class=\"col-sm-6\"><img src=\"{\$module_dir}views/img/product_detail_icon.png\" alt=\"\" />{l s='Product detail views' d='Modules.GAnalytics.Admin'}</div>
\t\t\t\t\t<div class=\"col-sm-6\"><img src=\"{\$module_dir}views/img/merchandising_tools_icon.png\" alt=\"\" />{l s='Internal merchandising Success' d='Modules.GAnalytics.Admin'}</div>
\t\t\t\t\t<div class=\"col-sm-6\"><img src=\"{\$module_dir}views/img/add_to_cart_icon.png\" alt=\"\" />{l s='\"Add to cart\" actions' d='Modules.GAnalytics.Admin'}</div>
\t\t\t\t\t<div class=\"col-sm-6\"><img src=\"{\$module_dir}views/img/checkout_icon.png\" alt=\"\" />{l s='The checkout process' d='Modules.GAnalytics.Admin'}</div>
\t\t\t\t\t<div class=\"col-sm-6\"><img src=\"{\$module_dir}views/img/campaign_clicks_icon.png\" alt=\"\" />{l s='Internal campaign clicks' d='Modules.GAnalytics.Admin'}</div>
\t\t\t\t\t<div class=\"col-sm-6\"><img src=\"{\$module_dir}views/img/purchase_icon.png\" alt=\"\" />{l s='And purchase' d='Modules.GAnalytics.Admin'}</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"google-analytics-create\">
\t\t\t\t\t<a href=\"https://support.google.com/analytics/answer/1008015\" rel=\"external\" class=\"btn btn-primary\">{l s='Create your account to get started' d='Modules.GAnalytics.Admin'}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t\t<img src=\"{\$module_dir}views/img/stats.png\" class=\"img-responsive google-analytics-stats\" alt=\"\" /><br />
\t\t\t\t\t<span class=\"small\"><em>{l s='Merchants are able to understand how far along users get in the buying process and where they are dropping off.' d='Modules.GAnalytics.Admin'}</em></span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/views/templates/admin/configuration.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/views/templates/admin/configuration.tpl", "/var/www/html/modules/ps_googleanalytics/views/templates/admin/configuration.tpl");
    }
}
