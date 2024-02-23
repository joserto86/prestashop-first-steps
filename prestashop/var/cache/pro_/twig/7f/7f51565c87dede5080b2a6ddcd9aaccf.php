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

/* @PrestaShop/Admin/Module/Includes/card_grid.html.twig */
class __TwigTemplate_3c0e556a168fbd8ea6bf907bb8f8db18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        $context["isModuleActive"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, false, false, 25), "active", [], "any", false, false, false, 25);
        // line 26
        echo "
<div
  class=\"module-item module-item-grid col-lg-6 col-xl-3 ";
        // line 28
        if (((($context["origin"] ?? null) == "manage") && (($context["isModuleActive"] ?? null) == "0"))) {
            echo "module-item-grid-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 30), "displayName", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 31), "avgRate", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 32), "img", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 33), "author", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 34), "version", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 37), "categoryName", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 39), "productType", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40), "raw", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["isModuleActive"] ?? null), "html", null, true);
        echo "\"
>
  <div class=\"module-item-wrapper-grid\">
    <div class=\"module-item-heading-grid\">
      <div class=\"module-logo-thumb-grid\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 46), "img", [], "any", false, false, false, 46), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 46), "displayName", [], "any", false, false, false, 46), "html", null, true);
        echo "\"/>
      </div>
      <h3
        class=\"text-ellipsis module-name-grid\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        title=\"";
        // line 52
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 52), "displayName", [], "any", false, false, false, 52);
        echo "\"
      >
        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 54), "displayName", [], "any", false, false, false, 54)) {
            // line 55
            echo "          ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 55), "displayName", [], "any", false, false, false, 55);
            echo "
        ";
        } else {
            // line 57
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "
        ";
        }
        // line 59
        echo "      </h3>
      <div class=\"text-ellipsis small-text module-version-author-grid\">
        ";
        // line 61
        $this->displayBlock('addon_version', $context, $blocks);
        // line 68
        echo "      </div>
    </div>
    <div class=\"module-quick-description-grid small no-padding mb-0\">
      ";
        // line 71
        $this->displayBlock('addon_description', $context, $blocks);
        // line 79
        echo "    </div>

    <div class=\"module-container module-quick-action-grid clearfix\">
        <div class=\"badges-container\">
          ";
        // line 83
        $context["badges"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 83), "badges", [], "any", false, false, false, 83);
        // line 84
        echo "          ";
        if (($context["badges"] ?? null)) {
            // line 85
            echo "            ";
            $context["badge"] = twig_first($this->env, ($context["badges"] ?? null));
            // line 86
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "img", [], "any", false, false, false, 86), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "label", [], "any", false, false, false, 86), "html", null, true);
            echo "\"/>
            ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["badge"] ?? null), "label", [], "any", false, false, false, 87), "html", null, true);
            echo "
          ";
        }
        // line 89
        echo "        </div>
      <hr />
      ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 91), "nbRates", [], "any", false, false, false, 91) > 0)) {
            // line 92
            echo "        <div class=\"module-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 92), "starsRate", [], "any", false, false, false, 92), "html", null, true);
            echo " small\">
          (";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 93), "nbRates", [], "any", false, false, false, 93), "html", null, true);
            echo ")
        </div>
      ";
        }
        // line 96
        echo "      <div class=\"float-right module-price\">
      ";
        // line 97
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 97), "url_active", [], "any", false, false, false, 97) == "buy") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 97), "price", [], "any", false, false, false, 97), "raw", [], "any", false, false, false, 97) != "0.00"))) {
            // line 98
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 98), "price", [], "any", false, false, false, 98), "displayPrice", [], "any", false, false, false, 98), "html", null, true);
            echo "
      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
($context["module"] ?? null), "attributes", [], "any", false, false, false, 99), "url_active", [], "any", false, false, false, 99) != "buy")) {
            // line 100
            echo "        <span class=\"pt-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
      ";
        }
        // line 102
        echo "      </div>
      ";
        // line 103
        if ((array_key_exists("requireBulkActions", $context) && (($context["requireBulkActions"] ?? null) == true))) {
            // line 104
            echo "        <div class=\"float-right module-checkbox-bulk-grid\">
          <input type=\"checkbox\" data-name=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 105), "displayName", [], "any", false, false, false, 105), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "\" />
        </div>
      ";
        }
        // line 108
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig", 108)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null), "level" => ($context["level"] ?? null)]));
        // line 109
        echo "    </div>
    ";
        // line 110
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig", 110)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null)]));
        // line 111
        echo "  </div>
</div>
";
    }

    // line 61
    public function block_addon_version($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 62), "productType", [], "any", false, false, false, 62) == "service")) {
            // line 63
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 63), "author", [], "any", false, false, false, 63)) . "</b>")], "Admin.Modules.Feature");
            echo "
          ";
        } else {
            // line 65
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 65), "version", [], "any", false, false, false, 65), "%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 65), "author", [], "any", false, false, false, 65)) . "</b>")], "Admin.Modules.Feature");
            echo "
          ";
        }
        // line 67
        echo "        ";
    }

    // line 71
    public function block_addon_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "        <div class=\"module-quick-description-text\">
          ";
        // line 73
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 73), "description", [], "any", false, false, false, 73);
        echo "
          ";
        // line 74
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 74), "description", [], "any", false, false, false, 74)) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 74), "description", [], "any", false, false, false, 74)) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 74), "fullDescription", [], "any", false, false, false, 74))))) {
            // line 75
            echo "            ...
          ";
        }
        // line 77
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 77,  277 => 75,  275 => 74,  271 => 73,  268 => 72,  264 => 71,  260 => 67,  254 => 65,  248 => 63,  245 => 62,  241 => 61,  235 => 111,  233 => 110,  230 => 109,  227 => 108,  219 => 105,  216 => 104,  214 => 103,  211 => 102,  205 => 100,  203 => 99,  198 => 98,  196 => 97,  193 => 96,  187 => 93,  182 => 92,  180 => 91,  176 => 89,  171 => 87,  164 => 86,  161 => 85,  158 => 84,  156 => 83,  150 => 79,  148 => 71,  143 => 68,  141 => 61,  137 => 59,  131 => 57,  125 => 55,  123 => 54,  118 => 52,  107 => 46,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  83 => 37,  79 => 36,  75 => 35,  71 => 34,  67 => 33,  63 => 32,  59 => 31,  55 => 30,  51 => 29,  45 => 28,  41 => 26,  39 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_grid.html.twig");
    }
}
