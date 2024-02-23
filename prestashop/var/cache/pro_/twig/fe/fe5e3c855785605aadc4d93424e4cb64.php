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

/* @Modules/ps_reminder/mails/es/followup_3.txt */
class __TwigTemplate_cdac66b2f2ab567283eef4027eba7bb7 extends Template
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

Gracias por su confianza y fidelidad.

Nos complace ofrecerle un descuento de un {amount}% en su próximo pedido. Esta oferta es solamente válida durante {days} días, ¡así que no espere más!

Aquí está su CÓDIGO DE CUPÓN DE DESCUENTO: {voucher_num}

Introduzca este código en su carrito de compra para obtener el descuento.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_reminder/mails/es/followup_3.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_reminder/mails/es/followup_3.txt", "/var/www/html/modules/ps_reminder/mails/es/followup_3.txt");
    }
}
