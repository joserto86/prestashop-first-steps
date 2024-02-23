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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/edit.html.twig */
class __TwigTemplate_2df0d9f642341d1dd45357d8e2d3f40c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit: %value%", ["%value%" => ($context["searchEngineServer"] ?? null)], "Admin.Actions");
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/edit.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/edit.html.twig", 31)->display(twig_array_merge($context, ["searchEngineForm" => ($context["searchEngineForm"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 31,  49 => 30,  44 => 26,  42 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/edit.html.twig");
    }
}
