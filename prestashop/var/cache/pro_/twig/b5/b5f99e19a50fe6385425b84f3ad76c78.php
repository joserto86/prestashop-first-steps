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

/* @Modules/ps_emailalerts/mails/es/new_order.txt */
class __TwigTemplate_526116b457b10953c954b00321257627 extends Template
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

Un nuevo pedido ha sido efectuado en {shop_name} por el siguiente cliente: {firstname} {lastname} ({email})

Detalles del pedido

Pedido: {order_name} Realizado el {date}

Pago: {payment}

Referencia\tProducto\tPrecio unitario\tCantidad\tPrecio total   {items}
Productos\t{total_products}
Descuentos\t{total_discounts}
Embalaje de regalo\t{total_wrapping}
Transporte\t{total_shipping}
Incluyendo impuestos totales\t{total_tax_paid}
Total pagado\t{total_paid}

Transportista

Transportista: {carrier}

Pago: {payment}

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
        return "@Modules/ps_emailalerts/mails/es/new_order.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/es/new_order.txt", "/var/www/html/modules/ps_emailalerts/mails/es/new_order.txt");
    }
}
