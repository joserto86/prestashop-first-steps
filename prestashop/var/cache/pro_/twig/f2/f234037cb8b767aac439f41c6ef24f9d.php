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

/* @Modules/ps_reminder/mails/es/followup_4.txt */
class __TwigTemplate_a849d514d7a99f387c4a433654fb1bfc extends Template
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
        return "@Modules/ps_reminder/mails/es/followup_4.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_reminder/mails/es/followup_4.txt", "/var/www/html/modules/ps_reminder/mails/es/followup_4.txt");
    }
}
