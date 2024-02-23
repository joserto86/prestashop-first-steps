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

/* @Modules/ps_emailsubscription/mails/es/newsletter_conf.txt */
class __TwigTemplate_10741acde2d3792064d84ede7a667c09 extends Template
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

{shop_url}

Hola,

Gracias por suscribirse a nuestro boletín de noticias.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailsubscription/mails/es/newsletter_conf.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailsubscription/mails/es/newsletter_conf.txt", "/var/www/html/modules/ps_emailsubscription/mails/es/newsletter_conf.txt");
    }
}
