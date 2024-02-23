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

/* @PrestaShop/Admin/Configure/ShopParameters/CustomerSettings/Title/index.html.twig */
class __TwigTemplate_491ac7acd90b4fae4a8d9e3c94e616c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'titles_list_panel' => [$this, 'block_titles_list_panel'],
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
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_title_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new title", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 36
        $context["enableSidebar"] = true;
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/CustomerSettings/Title/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "  ";
        $this->displayBlock('titles_list_panel', $context, $blocks);
    }

    public function block_titles_list_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/CustomerSettings/Title/index.html.twig", 40)->display(twig_array_merge($context, ["grid" => ($context["titleGrid"] ?? null)]));
        // line 41
        echo "  ";
    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/title.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/CustomerSettings/Title/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  82 => 47,  76 => 45,  72 => 44,  68 => 41,  65 => 40,  57 => 39,  53 => 38,  48 => 26,  46 => 36,  44 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/CustomerSettings/Title/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/CustomerSettings/Title/index.html.twig");
    }
}
