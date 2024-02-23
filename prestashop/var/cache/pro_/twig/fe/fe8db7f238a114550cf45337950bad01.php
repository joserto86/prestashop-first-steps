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

/* @PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig */
class __TwigTemplate_311a354475e5e8cd24a5316c4e39054a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'feature_form_block' => [$this, 'block_feature_form_block'],
            'feature_form_rest' => [$this, 'block_feature_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('feature_form_block', $context, $blocks);
    }

    public function block_feature_form_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureForm"] ?? null), 'form_start');
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["featureForm"] ?? null), "name", [], "any", false, false, false, 38), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}")]], 38, $context, $this->getSourceContext());
        // line 41
        echo "

        ";
        // line 43
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayFeatureForm", ["id_feature" => ($context["featureId"] ?? null)]);
        echo "

        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["featureForm"] ?? null), "shop_association", [], "any", true, true, false, 45)) {
            // line 46
            echo "          ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["featureForm"] ?? null), "shop_association", [], "any", false, false, false, 46), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store association", [], "Admin.Global")]], 46, $context, $this->getSourceContext());
            // line 48
            echo "
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('feature_form_rest', $context, $blocks);
        // line 54
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      ";
        // line 59
        echo "      <a href=\"";
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>

  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["featureForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 51
    public function block_feature_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["featureForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  125 => 51,  119 => 68,  111 => 63,  105 => 60,  101 => 59,  95 => 54,  93 => 51,  90 => 50,  86 => 48,  83 => 46,  81 => 45,  76 => 43,  72 => 41,  70 => 38,  62 => 33,  54 => 29,  47 => 28,  44 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/Blocks/form.html.twig");
    }
}
