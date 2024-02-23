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

/* @Modules/ps_emailalerts/mails/en/productcoverage.txt */
class __TwigTemplate_7349fcf9c8ef4390843a8e4655d81190 extends Template
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

The stock cover is now less than the specified minimum of:
{warning_coverage}.

CURRENT STOCK COVER: {current_coverage} \t\t 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/productcoverage.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/en/productcoverage.txt", "/var/www/html/modules/ps_emailalerts/mails/en/productcoverage.txt");
    }
}
