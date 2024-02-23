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

/* @PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/index.html.twig */
class __TwigTemplate_6733e3624f11536dd6ed7670c2d73cb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'authorized_applications_main_panel' => [$this, 'block_authorized_applications_main_panel'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayBlock('authorized_applications_main_panel', $context, $blocks);
    }

    public function block_authorized_applications_main_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => ($context["grid"] ?? null)]);
        echo "
  ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/authorization-server.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  76 => 35,  71 => 34,  67 => 33,  60 => 30,  52 => 29,  48 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/AuthorizationServer/index.html.twig");
    }
}
