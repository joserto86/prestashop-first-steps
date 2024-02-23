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

/* @Modules/referralprogram/mails/es/referralprogram-invitation.txt */
class __TwigTemplate_6a6cfbffb2478bce03be2378a8c2e532 extends Template
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

{firstname_friend} {lastname_friend}, ¡Únase!

¡Su amigo {firstname} {lastname} quiere referirle en [{shop_name}]({shop_url})!

Nos complace ofrecerle un cupón de descuento valorado en {discount} para que lo utilice en su próximo pedido. ¡Afíliese y obtega un cupón de descuento de {discount}!

[Es muy fácil registrarse. ¡Solo haga clic aquí!]({link})

Al registrarse, no olvide proporcionar la dirección de correo electrónico de su amigo referente: {email}.

Saludos.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
    }

    public function getTemplateName()
    {
        return "@Modules/referralprogram/mails/es/referralprogram-invitation.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/referralprogram/mails/es/referralprogram-invitation.txt", "/var/www/html/modules/referralprogram/mails/es/referralprogram-invitation.txt");
    }
}
