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

/* @PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig */
class __TwigTemplate_20eac082c8d26e8b75f416618dff365c extends Template
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
        echo "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["topMenuData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "    ";
            $context["refMenu"] = twig_get_attribute($this->env, $this->source, $context["menu"], "refMenu", [], "any", false, false, false, 27);
            // line 28
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? null), "html", null, true);
            echo "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["refMenu"] ?? null), "html", null, true);
            echo "\">
        <a class=\"dropdown-item module-category-menu module-category-reset\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
        </a>

        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "subMenu", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 41
                echo "          <a 
            class=\"dropdown-item module-category-menu\"
            ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 43)) {
                    echo "data-category-tab=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 43), "html", null, true);
                    echo "\"";
                }
                // line 44
                echo "            data-category-ref=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "refMenu", [], "any", false, false, false, 44), "html", null, true);
                echo "\"
            data-category-display-name=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "\"
          >
            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 47), "html", null, true);
                echo "<span class=\"float-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "modules", [], "any", false, false, false, 47)), "html", null, true);
                echo "</span>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 52,  107 => 50,  96 => 47,  91 => 45,  86 => 44,  80 => 43,  76 => 41,  72 => 40,  66 => 37,  61 => 35,  53 => 30,  47 => 28,  44 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_categories_catalog.html.twig");
    }
}
