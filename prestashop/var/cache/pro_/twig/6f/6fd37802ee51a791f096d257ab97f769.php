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

/* @Modules/ps_emailsubscription/mails/en/newsletter_voucher.txt */
class __TwigTemplate_9e70224d9e9dbcdd60e117cf3e3b1149 extends Template
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
[{shop_url}] 

Hi, 

Regarding your newsletter subscription, we are pleased to offer
you the following voucher: {discount} 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailsubscription/mails/en/newsletter_voucher.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailsubscription/mails/en/newsletter_voucher.txt", "/var/www/html/modules/ps_emailsubscription/mails/en/newsletter_voucher.txt");
    }
}
