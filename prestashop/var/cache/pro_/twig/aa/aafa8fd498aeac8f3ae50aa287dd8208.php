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

/* @PrestaShop/Admin/Sell/Outstanding/index.html.twig */
class __TwigTemplate_9b9904d887e4d0f9de7d7ae7ecb5f18e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'outstanding_listing' => [$this, 'block_outstanding_listing'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Outstanding/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayBlock('outstanding_listing', $context, $blocks);
    }

    public function block_outstanding_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Outstanding/index.html.twig", 30)->display(twig_array_merge($context, ["grid" => ($context["outstandingGrid"] ?? null)]));
        // line 31
        echo "  ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/customer_outstanding.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Outstanding/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 38,  77 => 37,  71 => 35,  67 => 34,  63 => 31,  60 => 30,  52 => 29,  48 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Outstanding/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Outstanding/index.html.twig");
    }
}
