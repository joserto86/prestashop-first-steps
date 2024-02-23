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

/* @PrestaShop/Admin/Module/Includes/tab-module-line.html.twig */
class __TwigTemplate_7fab52b572a1adc85e34c65429e1a884 extends Template
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
        // line 26
        $context["moduleImage"] = (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 26), "img", [], "any", false, false, false, 26))) ? ((((twig_constant("_MODULE_DIR_") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
($context["module"] ?? null), "attributes", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27)) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 27), "logo", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
($context["module"] ?? null), "attributes", [], "any", false, false, false, 28), "img", [], "any", false, false, false, 28)));
        // line 30
        echo "<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
      src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["moduleImage"] ?? null), "html", null, true);
        echo "\"
    />
  </td>
  <td>
    <div id=\"anchor";
        // line 39
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 39), "displayName", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
      <div class=\"module_name\">
        <span style=\"display:none\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</span>
        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 42), "displayName", [], "any", false, false, false, 42), "html", null, true);
        echo "
        <small class=\"text-muted\">v";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 43), "version", [], "any", false, false, false, 43), "html", null, true);
        echo " - by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 43), "author", [], "any", false, false, false, 43), "html", null, true);
        echo "</small>
        ";
        // line 44
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) == "addonsBought"))) {
            // line 45
            echo "        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You bought this module on PrestaShop Addons. Thank You.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bought", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
($context["module"] ?? null), "attributes", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) == "addonsMustHave"))) {
            // line 47
            echo "        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is available on PrestaShop Addons.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-group\"></i> <small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["module"] ?? null), "attributes", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48) == "addonsPartner"))) {
            // line 49
            echo "        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is available for free thanks to our partner.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Official", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["module"] ?? null), "attributes", [], "any", false, true, false, 50), "id", [], "any", true, true, false, 50) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50) >= 0))) {
            // line 51
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 51), "version_addons", [], "any", true, true, false, 51) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 51), "version_addons", [], "any", false, false, false, 51))) {
                // line 52
                echo "            <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Need update", [], "Admin.Modules.Help"), "html", null, true);
                echo "</span>
          ";
            }
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </div>
      <p class=\"module_description\">
        ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 57), "description", [], "any", true, true, false, 57) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 57), "description", [], "any", false, false, false, 57)))) {
            // line 58
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58), "html", null, true);
            echo "
        ";
        }
        // line 60
        echo "      </p>
      ";
        // line 61
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 61), "message", [], "any", true, true, false, 61) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61))) && (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 61), "type", [], "any", true, true, false, 61) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61) != "addonsMustHave")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61) != "addonsNative")))) {
            // line 62
            echo "        <div class=\"alert alert-success\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <p class=\"alert-text\">
            ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 65), "message", [], "any", false, false, false, 65), "html", null, true);
            echo "
          </p>
        </div>
      ";
        }
        // line 69
        echo "    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    ";
        // line 72
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", ["module" => ($context["module"] ?? null)]);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 72,  149 => 69,  142 => 65,  137 => 62,  135 => 61,  132 => 60,  126 => 58,  124 => 57,  120 => 55,  117 => 54,  111 => 52,  108 => 51,  106 => 50,  99 => 49,  97 => 48,  90 => 47,  88 => 46,  81 => 45,  79 => 44,  73 => 43,  69 => 42,  65 => 41,  58 => 39,  51 => 35,  47 => 34,  41 => 30,  39 => 28,  38 => 27,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/tab-module-line.html.twig");
    }
}
