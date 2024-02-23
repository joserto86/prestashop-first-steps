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

/* @Modules/ps_emailalerts/mails/en/return_slip.txt */
class __TwigTemplate_373e724c24b47dd413ebaee7d82b82c2 extends Template
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

Hi, 

You have received a new return request for {shop_name}. 

Return details 

ORDER: {order_name} Placed on {date}

CUSTOMER: {firstname} {lastname}, ({email}) 

REFERENCE

PRODUCT

QUANTITY

{items} 

Delivery address

{delivery_block_html} \t\t 

Billing address

{invoice_block_html} 

Customer message: 

{message} 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/return_slip.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/en/return_slip.txt", "/var/www/html/modules/ps_emailalerts/mails/en/return_slip.txt");
    }
}
