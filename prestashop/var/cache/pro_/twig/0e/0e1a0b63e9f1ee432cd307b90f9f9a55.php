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

/* @Modules/ps_emailalerts/mails/en/customer_qty.txt */
class __TwigTemplate_41b586bf6400a86fb30e9ea004f01425 extends Template
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

This item is once again in-stock.

You can access the product page by clicking on the link: {product}
[{product_link}]

You can order it right now from our online shop. \t\t 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/customer_qty.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/en/customer_qty.txt", "/var/www/html/modules/ps_emailalerts/mails/en/customer_qty.txt");
    }
}
