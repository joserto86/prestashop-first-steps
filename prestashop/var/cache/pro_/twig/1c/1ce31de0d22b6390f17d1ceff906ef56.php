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

/* @Modules/followup/mails/es/followup_4.txt */
class __TwigTemplate_08212c5e74aaa70ff7ac9ccc9da82bce extends Template
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

Su carrito de compra en {shop_name}

Usted es uno de nuestros mejores clientes, sin embargo, no ha realizado ningún pedido desde hace {days_threshold} días.

Su carrito ha sido guardado, puede reanudar su pedido visitando nuestra tienda: {shop_url}

Nos complace ofrecerle un descuento de un {amount}% en su próximo pedido. Esta oferta es solamente válida durante {days} días, ¡así que no espere más!

Aquí está su CÓDIGO DE CUPÓN DE DESCUENTO: {voucher_num}

Introduzca este código en su carrito de compra para obtener el descuento.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/followup/mails/es/followup_4.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/followup/mails/es/followup_4.txt", "/var/www/html/modules/followup/mails/es/followup_4.txt");
    }
}
