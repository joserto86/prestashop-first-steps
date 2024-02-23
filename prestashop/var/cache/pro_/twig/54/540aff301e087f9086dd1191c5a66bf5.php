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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig */
class __TwigTemplate_32b93773f48db2d343b1400639d54f1b extends Template
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
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if (($context["showHeaderAlert"] ?? null)) {
            // line 29
            echo "  <div class=\"alert alert-info\">
    <p>";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].", ["[1]" => "<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">", "[/1]" => "</a>"], "Admin.Shipping.Help");
            echo "</p><br>
    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!", ["[1]" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new carrier", [], "Admin.Shipping.Feature")], "Admin.Shipping.Help"), "html", null, true);
            echo "</p>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 31,  48 => 30,  45 => 29,  43 => 28,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig");
    }
}
