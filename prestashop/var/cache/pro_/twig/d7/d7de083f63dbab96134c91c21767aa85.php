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

/* @Modules/ps_emailalerts/mails/en/order_changed.txt */
class __TwigTemplate_cb5b82006cd5fb38ba1be4450a5d9757 extends Template
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
[{shop_url}]

Hi {firstname} {lastname},

Your order with the reference {order_name} from {shop_name} has
been modified.

You can review your order and download your invoice from the
\"Order history\" [{history_url}] section of your
customer account by clicking \"My account\"
[{my_account_url}] on our shop.

If you have a guest account, you can follow your order via the
\"Guest Tracking\"
[{guest_tracking_url}?id_order={order_name}] section
on our shop.

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/]

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/order_changed.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/en/order_changed.txt", "/var/www/html/modules/ps_emailalerts/mails/en/order_changed.txt");
    }
}
