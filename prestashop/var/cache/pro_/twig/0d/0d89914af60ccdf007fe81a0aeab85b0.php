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

/* @Modules/ps_emailalerts/mails/es/return_slip.txt */
class __TwigTemplate_c39370154d3bcaf5e15048da2958df24 extends Template
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

Has recibido una nueva solicitud de devolución en {shop_name}.

Detalles de devolución

Pedido: {order_name} Realizado el {date}

Cliente: {firstname} {lastname}, ({email})

Referencia\tProducto\tCantidad   {items}

Dirección de entrega

{delivery_block_html}

Dirección de facturación

{invoice_block_html}

Mensaje del cliente:

{message}

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/es/return_slip.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/es/return_slip.txt", "/var/www/html/modules/ps_emailalerts/mails/es/return_slip.txt");
    }
}
