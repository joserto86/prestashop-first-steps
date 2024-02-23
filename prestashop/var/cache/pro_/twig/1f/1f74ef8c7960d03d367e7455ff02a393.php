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

/* @Modules/ps_emailalerts/mails/en/productoutofstock.txt */
class __TwigTemplate_e85fbd7ad5e0b601212ded6400e11b62 extends Template
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

The remaining stock is now less than the specified minimum of
{last_qty}.

REMAINING STOCK: {qty}

You are advised to open the product's admin Product Page in order to
replenish your inventory. \t\t 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/productoutofstock.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/en/productoutofstock.txt", "/var/www/html/modules/ps_emailalerts/mails/en/productoutofstock.txt");
    }
}
