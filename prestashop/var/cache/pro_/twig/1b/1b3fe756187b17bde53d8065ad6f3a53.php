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

/* @PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig */
class __TwigTemplate_7b4a9694687e74a0ac97975037255b8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'merchandise_returns_listing' => [$this, 'block_merchandise_returns_listing'],
            'merchandise_returns_options' => [$this, 'block_merchandise_returns_options'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchandise Returns", [], "Admin.Orderscustomers.Feature");
        // line 29
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  ";
        $this->displayBlock('merchandise_returns_listing', $context, $blocks);
        // line 35
        echo "
  ";
        // line 36
        $this->displayBlock('merchandise_returns_options', $context, $blocks);
    }

    // line 32
    public function block_merchandise_returns_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig", 33)->display(twig_array_merge($context, ["grid" => ($context["merchandiseReturnsGrid"] ?? null)]));
        // line 34
        echo "  ";
    }

    // line 36
    public function block_merchandise_returns_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig", "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig", 37)->display($context);
        // line 38
        echo "  ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/merchandise_return.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 45,  100 => 44,  94 => 42,  90 => 41,  86 => 38,  83 => 37,  79 => 36,  75 => 34,  72 => 33,  68 => 32,  64 => 36,  61 => 35,  58 => 32,  54 => 31,  49 => 29,  47 => 27,  45 => 26,  38 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/MerchandiseReturn/index.html.twig");
    }
}
