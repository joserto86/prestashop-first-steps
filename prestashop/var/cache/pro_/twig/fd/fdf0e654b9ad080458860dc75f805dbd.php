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

/* @Modules/followup/mails/es/followup_1.txt */
class __TwigTemplate_6029a9b6cda45f8fb3663e5ba8ced6e5 extends Template
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

Gracias por tu visita. Sin embargo, parece que no ha completado su compra.

Su carrito ha sido guardado, puede reanudar su pedido volviendo a visitar nuestra tienda: {shop_url}

Nos complace ofrecerle un descuento de un {amount}% en su próximo pedido. Esta oferta es solamente válida durante {days} días, ¡así que no espere más!

Su código del cupón de descuento en {shop_name}

Aquí está su CÓDIGO DE CUPÓN DE DESCUENTO: {voucher_num}

Introduzca este código en su carrito de compra para obtener el descuento.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/followup/mails/es/followup_1.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/followup/mails/es/followup_1.txt", "/var/www/html/modules/followup/mails/es/followup_1.txt");
    }
}
