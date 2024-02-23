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

/* @PrestaShop/Admin/Sell/Catalog/AttributeGroup/index.html.twig */
class __TwigTemplate_4f2d25f2e3fd4f61064b7b64ca199626 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'attribute_group_showcase_card' => [$this, 'block_attribute_group_showcase_card'],
            'attributes_listing' => [$this, 'block_attributes_listing'],
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
        // line 27
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_attribute_groups_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new attribute", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/AttributeGroup/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('attribute_group_showcase_card', $context, $blocks);
        // line 41
        echo "
  ";
        // line 42
        $this->displayBlock('attributes_listing', $context, $blocks);
    }

    // line 38
    public function block_attribute_group_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/AttributeGroup/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Sell/Catalog/AttributeGroup/index.html.twig", 39)->display($context);
        // line 40
        echo "  ";
    }

    // line 42
    public function block_attributes_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/AttributeGroup/index.html.twig", 43)->display(twig_array_merge($context, ["grid" => ($context["attributeGroupGrid"] ?? null)]));
        // line 44
        echo "  ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/attribute_group.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/AttributeGroup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 51,  100 => 50,  94 => 48,  90 => 47,  86 => 44,  83 => 43,  79 => 42,  75 => 40,  72 => 39,  68 => 38,  64 => 42,  61 => 41,  59 => 38,  56 => 37,  52 => 36,  47 => 26,  45 => 27,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/AttributeGroup/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/AttributeGroup/index.html.twig");
    }
}
