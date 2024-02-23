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

/* @PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig */
class __TwigTemplate_653484a3ed92637e5ade04953c6258a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'catalog_price_rule_form_rest' => [$this, 'block_catalog_price_rule_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig", 26)->unwrap();
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "reduction", [], "any", false, false, false, 28), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"], true);
        // line 29
        echo "
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["catalogPriceRuleForm"] ?? null), 'form_start');
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["catalogPriceRuleForm"] ?? null), 'errors');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "name", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global")]], 39, $context, $this->getSourceContext());
        // line 41
        echo "

      ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "id_shop", [], "any", true, true, false, 43)) {
            // line 44
            echo "        ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "id_shop", [], "any", false, false, false, 44), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global")]], 44, $context, $this->getSourceContext());
            // line 46
            echo "
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "id_currency", [], "any", false, false, false, 49), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global")]], 49, $context, $this->getSourceContext());
        // line 51
        echo "

      ";
        // line 53
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "id_country", [], "any", false, false, false, 53), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global")]], 53, $context, $this->getSourceContext());
        // line 55
        echo "

      ";
        // line 57
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "id_group", [], "any", false, false, false, 57), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global")]], 57, $context, $this->getSourceContext());
        // line 59
        echo "

      ";
        // line 61
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "from_quantity", [], "any", false, false, false, 61), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From quantity", [], "Admin.Catalog.Feature")]], 61, $context, $this->getSourceContext());
        // line 63
        echo "

      ";
        // line 65
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "price", [], "any", false, false, false, 65), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price (tax excl.)", [], "Admin.Catalog.Feature")]], 65, $context, $this->getSourceContext());
        // line 67
        echo "

      ";
        // line 69
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "leave_initial_price", [], "any", false, false, false, 69), [], ["label" => ""]], 69, $context, $this->getSourceContext());
        echo "

      ";
        // line 71
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "date_range", [], "any", false, false, false, 71), "from", [], "any", false, false, false, 71), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global")]], 71, $context, $this->getSourceContext());
        // line 73
        echo "

      ";
        // line 75
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "date_range", [], "any", false, false, false, 75), "to", [], "any", false, false, false, 75), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global")]], 75, $context, $this->getSourceContext());
        // line 77
        echo "

      ";
        // line 79
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "reduction", [], "any", false, false, false, 79), ["attr" => ["class" => "js-reduction-type-source"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reduction", [], "Admin.Catalog.Feature")]], 79, $context, $this->getSourceContext());
        // line 81
        echo "

      ";
        // line 83
        $this->displayBlock('catalog_price_rule_form_rest', $context, $blocks);
        // line 86
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalog_price_rules_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["catalogPriceRuleForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 83
    public function block_catalog_price_rule_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 84
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["catalogPriceRuleForm"] ?? null), 'rest');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 84,  167 => 83,  161 => 97,  154 => 93,  148 => 90,  144 => 89,  139 => 86,  137 => 83,  133 => 81,  131 => 79,  127 => 77,  125 => 75,  121 => 73,  119 => 71,  114 => 69,  110 => 67,  108 => 65,  104 => 63,  102 => 61,  98 => 59,  96 => 57,  92 => 55,  90 => 53,  86 => 51,  84 => 49,  81 => 48,  77 => 46,  74 => 44,  72 => 43,  68 => 41,  66 => 39,  59 => 35,  52 => 31,  48 => 30,  45 => 29,  43 => 28,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig");
    }
}
