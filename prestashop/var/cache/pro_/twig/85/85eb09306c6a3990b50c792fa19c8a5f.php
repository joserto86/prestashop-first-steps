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

/* @PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig */
class __TwigTemplate_c97702e86ad3cf613b8149ac9d827e0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_attributes_create", ["attributeGroupId" =>         // line 29
($context["attributeGroupId"] ?? null)]), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new value", [], "Admin.Catalog.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "  ";
        $this->displayBlock('attributes_listing', $context, $blocks);
    }

    public function block_attributes_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig", "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig", 38, "1659925512")->display(twig_array_merge($context, ["grid" => ($context["attributeGrid"] ?? null)]));
        // line 48
        echo "  ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/attribute.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 55,  81 => 54,  75 => 52,  71 => 51,  67 => 48,  64 => 38,  56 => 37,  52 => 36,  47 => 26,  45 => 29,  44 => 27,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Attribute/index.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig */
class __TwigTemplate_c97702e86ad3cf613b8149ac9d827e0e___1659925512 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_footer' => [$this, 'block_grid_panel_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 38
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig", 38);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_grid_panel_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "        <div class=\"card-footer\">
          <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_attribute_groups_index");
        echo "\" class=\"btn btn-outline-secondary\">
            <i class=\"material-icons rtl-flip\">arrow_back</i>
            ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to list", [], "Admin.Actions"), "html", null, true);
        echo "
          </a>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 43,  150 => 41,  147 => 40,  143 => 39,  132 => 38,  85 => 55,  81 => 54,  75 => 52,  71 => 51,  67 => 48,  64 => 38,  56 => 37,  52 => 36,  47 => 26,  45 => 29,  44 => 27,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Attribute/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Attribute/index.html.twig");
    }
}
