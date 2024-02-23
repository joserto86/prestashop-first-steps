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

/* @Modules/referralprogram/mails/es/referralprogram-voucher.txt */
class __TwigTemplate_819e20308b710c1c7db6e39b5d96d000 extends Template
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

Hola {firstname} {lastname},

Programa de Patrocinio

Hemos creado un cupón de descuento a su nombre por referir a un amigo.
Aquí está el código de su cupón de descuento: {voucher_num}, por valor de {voucher_num}

Copie y pegue este código durante el proceso de pago de su próximo pedido.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/referralprogram/mails/es/referralprogram-voucher.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/referralprogram/mails/es/referralprogram-voucher.txt", "/var/www/html/modules/referralprogram/mails/es/referralprogram-voucher.txt");
    }
}
