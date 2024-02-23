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

/* @PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig */
class __TwigTemplate_e3d780e7829a2d854fe1251b19e66a81 extends Template
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
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit: %value%", ["%value%" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["editableFeature"] ?? null), "name", [], "any", false, false, false, 26)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["contextLangId"] ?? null)] ?? null) : null)], "Admin.Catalog.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        if ((array_key_exists("showDisabledFeatureWarning", $context) && ($context["showDisabledFeatureWarning"] ?? null))) {
            // line 32
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 32)->display($context);
            // line 33
            echo "  ";
        } else {
            // line 34
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 34)->display(twig_array_merge($context, ["featureId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
($context["editableFeature"] ?? null), "featureId", [], "any", false, false, false, 35), "getValue", [], "any", false, false, false, 35), "featureForm" =>             // line 36
($context["featureForm"] ?? null)]));
            // line 38
            echo "  ";
        }
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form_javascripts.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 43)->display($context);
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 43,  77 => 42,  73 => 41,  68 => 38,  66 => 36,  65 => 35,  63 => 34,  60 => 33,  57 => 32,  54 => 31,  50 => 30,  45 => 28,  43 => 26,  36 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/edit.html.twig");
    }
}
