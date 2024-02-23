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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderStates/edit.html.twig */
class __TwigTemplate_d2e198d5def1b73d3af444979ae804cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit: %name%", ["%name%" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 28
($context["editableOrderState"] ?? null), "localizedNames", [], "any", false, false, false, 28)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["contextLangId"] ?? null)] ?? null) : null)], "Admin.Actions");
        // line 31
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/edit.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/edit.html.twig", 34)->display($context);
    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order_states_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 40,  66 => 38,  62 => 37,  57 => 34,  53 => 33,  48 => 31,  46 => 28,  45 => 27,  43 => 26,  36 => 31,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/edit.html.twig");
    }
}
