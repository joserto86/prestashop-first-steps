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

/* @PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/index.html.twig */
class __TwigTemplate_fe6aa31df736d39c47ce4b0ffae9c593 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'catalog_price_rule_listing' => [$this, 'block_catalog_price_rule_listing'],
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
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalog_price_rules_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new catalog price rule", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  ";
        $this->displayBlock('catalog_price_rule_listing', $context, $blocks);
    }

    public function block_catalog_price_rule_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/index.html.twig", 39)->display(twig_array_merge($context, ["grid" => ($context["catalogPriceRuleGrid"] ?? null)]));
        // line 40
        echo "  ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/catalog_price_rule.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 47,  80 => 46,  74 => 44,  70 => 43,  66 => 40,  63 => 39,  55 => 38,  51 => 37,  46 => 26,  44 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/CatalogPriceRule/index.html.twig");
    }
}
