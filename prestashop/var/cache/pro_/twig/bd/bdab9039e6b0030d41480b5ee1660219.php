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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig */
class __TwigTemplate_0c71889b1a9a3468c989e333c5ef2502 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_return_state_form' => [$this, 'block_order_return_state_form'],
            'order_return_state_form_reset' => [$this, 'block_order_return_state_form_reset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('order_return_state_form', $context, $blocks);
    }

    public function block_order_return_state_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderReturnStateForm"] ?? null), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Return statuses", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderReturnStateForm"] ?? null), 'errors');
        echo "

          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderReturnStateForm"] ?? null), "name", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status name", [], "Admin.Shopparameters.Feature"), "help" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order's return status name.", [], "Admin.Shopparameters.Help") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters: numbers and", [], "Admin.Shopparameters.Help")) . " !<>,;?=+()@#\"{}_\$%:")]], 39, $context, $this->getSourceContext());
        // line 45
        echo "

          ";
        // line 47
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, ($context["orderReturnStateForm"] ?? null), "color", [], "any", false, false, false, 47), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Color", [], "Admin.Shopparameters.Feature"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")")]], 47, $context, $this->getSourceContext());
        // line 50
        echo "

          ";
        // line 52
        $this->displayBlock('order_return_state_form_reset', $context, $blocks);
        // line 55
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension']->getPathWithBackUrl("admin_order_states"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderReturnStateForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 52
    public function block_order_return_state_form_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderReturnStateForm"] ?? null), 'rest');
        echo "
          ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 53,  116 => 52,  110 => 66,  103 => 62,  97 => 59,  93 => 58,  88 => 55,  86 => 52,  82 => 50,  80 => 47,  76 => 45,  74 => 39,  69 => 37,  62 => 33,  54 => 29,  47 => 28,  44 => 27,  42 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig");
    }
}
