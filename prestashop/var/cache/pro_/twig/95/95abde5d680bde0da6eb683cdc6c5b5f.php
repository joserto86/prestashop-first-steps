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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/index.html.twig */
class __TwigTemplate_6b7883890f005bda7ae8211497b7a78b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/customer_threads" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/index.html.twig", 33)->display(twig_array_merge($context, ["grid" => ($context["customerThreadGrid"] ?? null)]));
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/customer_thread.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 40,  78 => 39,  72 => 37,  68 => 36,  63 => 33,  59 => 32,  52 => 29,  48 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/index.html.twig");
    }
}
