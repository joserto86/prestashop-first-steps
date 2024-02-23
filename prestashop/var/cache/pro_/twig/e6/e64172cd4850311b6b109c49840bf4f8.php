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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig */
class __TwigTemplate_a7afa1dff06fbdde0e92122267da86b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_state_form' => [$this, 'block_order_state_form'],
            'order_state_form_reset' => [$this, 'block_order_state_form_reset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('order_state_form', $context, $blocks);
    }

    public function block_order_state_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderStateForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order status", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderStateForm"] ?? null), 'errors');
        echo "

          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "name", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status name", [], "Admin.Shopparameters.Feature"), "help" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order status (e.g. 'Pending').", [], "Admin.Shopparameters.Help") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters: numbers and", [], "Admin.Shopparameters.Help")) . " !<>,;?=+()@#\"{}_\$%:")]], 39, $context, $this->getSourceContext());
        // line 45
        echo "

          ";
        // line 47
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "color", [], "any", false, false, false, 47), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Color", [], "Admin.Shopparameters.Feature"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")")]], 47, $context, $this->getSourceContext());
        // line 50
        echo "

          ";
        // line 52
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "loggable", [], "any", false, false, false, 52), [], ["label" => ""]], 52, $context, $this->getSourceContext());
        echo "

          ";
        // line 54
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "invoice", [], "any", false, false, false, 54), [], ["label" => ""]], 54, $context, $this->getSourceContext());
        echo "

          ";
        // line 56
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "hidden", [], "any", false, false, false, 56), [], ["label" => ""]], 56, $context, $this->getSourceContext());
        echo "

          ";
        // line 58
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "send_email", [], "any", false, false, false, 58), [], ["label" => ""]], 58, $context, $this->getSourceContext());
        echo "

          ";
        // line 60
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "pdf_invoice", [], "any", false, false, false, 60), [], ["label" => ""]], 60, $context, $this->getSourceContext());
        echo "

          ";
        // line 62
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "pdf_delivery", [], "any", false, false, false, 62), [], ["label" => ""]], 62, $context, $this->getSourceContext());
        echo "

          ";
        // line 64
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "shipped", [], "any", false, false, false, 64), [], ["label" => ""]], 64, $context, $this->getSourceContext());
        echo "

          ";
        // line 66
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "paid", [], "any", false, false, false, 66), [], ["label" => ""]], 66, $context, $this->getSourceContext());
        echo "

          ";
        // line 68
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "delivery", [], "any", false, false, false, 68), [], ["label" => ""]], 68, $context, $this->getSourceContext());
        echo "

          ";
        // line 70
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderStateForm"] ?? null), "template", [], "any", false, false, false, 70), ["options_extra" => ["data-preview" =>         // line 72
($context["templatesPreviewUrl"] ?? null)], "button" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview", [], "Admin.Actions"), "icon" => "visibility", "class" => "btn btn-primary", "id" => "order_state_template_preview"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email template", [], "Admin.Shopparameters.Feature"), "hint" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")"), "class" => "order_state_template_select"]], 70, $context, $this->getSourceContext());
        // line 85
        echo "

          ";
        // line 87
        $this->displayBlock('order_state_form_reset', $context, $blocks);
        // line 90
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension']->getPathWithBackUrl("admin_order_states"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderStateForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 87
    public function block_order_state_form_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 88
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderStateForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 88,  168 => 87,  162 => 101,  155 => 97,  149 => 94,  145 => 93,  140 => 90,  138 => 87,  134 => 85,  132 => 72,  131 => 70,  126 => 68,  121 => 66,  116 => 64,  111 => 62,  106 => 60,  101 => 58,  96 => 56,  91 => 54,  86 => 52,  82 => 50,  80 => 47,  76 => 45,  74 => 39,  69 => 37,  62 => 33,  54 => 29,  47 => 28,  44 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig");
    }
}
