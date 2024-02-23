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

/* @Modules/ps_emailalerts/mails/es/order_changed.txt */
class __TwigTemplate_a2210164e9da59eb5cda1c906c986e4c extends Template
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

ID Pedido {order_name} - Pedido modificado

Su pedido con número de referencia {order_name} de {shop_name} ha sido modificado por el comerciante.

Diríjase a su cuenta de cliente para obtener más información al respecto.

Si tiene una cuenta de invitado, puede seguir su pedido desde la sección: [Seguimiento de pedido]({guest_tracking_url}) de nuestra tienda.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/es/order_changed.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/es/order_changed.txt", "/var/www/html/modules/ps_emailalerts/mails/es/order_changed.txt");
    }
}
