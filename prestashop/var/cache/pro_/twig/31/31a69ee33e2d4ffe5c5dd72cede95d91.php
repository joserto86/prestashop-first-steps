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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig */
class __TwigTemplate_fc6fc226cbee15d7a298d8f33e0b1fd7 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig", 29)->display($context);
        // line 30
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig", 30)->display(twig_array_merge($context, ["searchEngineForm" => ($context["searchEngineForm"] ?? null)]));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 30,  50 => 29,  46 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/create.html.twig");
    }
}
