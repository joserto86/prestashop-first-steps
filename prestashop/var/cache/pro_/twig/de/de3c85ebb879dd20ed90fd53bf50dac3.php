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

/* @Modules/referralprogram/mails/es/referralprogram-congratulations.txt */
class __TwigTemplate_724b31abbd0d8bfdb017bb8467a861c8 extends Template
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

¡Enhorabuena!

¡Su amigo referido {sponsored_firstname} {sponsored_lastname} ha realizado su primera compra en [{shop_name}]({shop_url})!

Nos complace ofrecerle un cupón de descuento valorado en {discount_display} (CUPÓN # {discount_name}) para que lo utilice en su próximo pedido.

Saludos.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/referralprogram/mails/es/referralprogram-congratulations.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/referralprogram/mails/es/referralprogram-congratulations.txt", "/var/www/html/modules/referralprogram/mails/es/referralprogram-congratulations.txt");
    }
}
