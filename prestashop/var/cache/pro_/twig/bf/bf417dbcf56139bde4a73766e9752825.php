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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/delete_customer_discount.html.twig */
class __TwigTemplate_f7ea9065759456c52b6a93dedcf7dbe6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 28)) {
            // line 29
            echo "  ";
            $context["class"] = ((($context["class"] ?? null) . " ") . twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", false, false, false, 29));
        }
        // line 31
        echo "
";
        // line 32
        $context["confirmation_message"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 32), "confirm_message", [], "any", false, false, false, 32);
        // line 33
        echo "
<button class=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 34)), "html", null, true);
        echo "-row-link\"
   type=\"button\"
   data-confirm-message=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["confirmation_message"] ?? null), "html", null, true);
        echo "\"
   data-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCartRules", true, ["id_cart_rule" => (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 37), "id_cart_rule", [], "any", false, false, false, 37)] ?? null) : null), "deletecart_rule" => 1, "back" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 37), "uri", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\"
   data-method=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 38), "method", [], "any", false, false, false, 38), "html", null, true);
        echo "\"
  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 39), "modal_options", [], "any", false, true, false, 39), "options", [], "any", true, true, false, 39)) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, false, false, 40), "modal_options", [], "any", false, false, false, 40), "options", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 41
                echo "      data-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["attribute"], ["_" => "-"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  ";
        }
        // line 44
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 44)) {
            // line 45
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\"
  ";
        }
        // line 49
        echo ">
  ";
        // line 50
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 50))) {
            // line 51
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "icon", [], "any", false, false, false, 51), "html", null, true);
            echo "</i>
  ";
        }
        // line 53
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "tooltip_name", [], "any", false, false, false, 53)) {
            // line 54
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "
  ";
        }
        // line 56
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_customer_discount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  125 => 54,  122 => 53,  116 => 51,  114 => 50,  111 => 49,  106 => 47,  102 => 45,  99 => 44,  96 => 43,  85 => 41,  80 => 40,  78 => 39,  74 => 38,  70 => 37,  66 => 36,  59 => 34,  56 => 33,  54 => 32,  51 => 31,  47 => 29,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Actions/Row/delete_customer_discount.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/delete_customer_discount.html.twig");
    }
}
