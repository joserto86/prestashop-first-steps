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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig */
class __TwigTemplate_3136e6f444d0e7ccc264924073849892 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'request_sql_view_block' => [$this, 'block_request_sql_view_block'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $this->displayBlock('request_sql_view_block', $context, $blocks);
    }

    public function block_request_sql_view_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <h3 id=\"card-title\">
          <i class=\"material-icons\">list</i>
          ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query result", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          (";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["sqlRequestResult"] ?? null), "rows", [], "any", false, false, false, 36)), "html", null, true);
        echo ")
        </h3>
      </div>
      <div class=\"card-body\">
        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["sqlRequestResult"] ?? null), "rows", [], "any", false, false, false, 40))) {
            // line 41
            echo "          <div class=\"table-responsive\">
            <table id=\"grid-table\" class=\"table\">
              <thead>
                <tr>
                  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sqlRequestResult"] ?? null), "columns", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 46
                echo "                    <th class=\"column-";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "-head\">";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tr>
              </thead>
              <tbody>
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sqlRequestResult"] ?? null), "rows", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 52
                echo "                  <tr>
                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["sqlRequestResult"] ?? null), "columns", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 54
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["requestSqlView"] ?? null), "attributes", [], "any", false, true, false, 54), $context["column"], [], "array", true, true, false, 54)) {
                        // line 55
                        echo "                        <td class=\"grid-";
                        echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                        echo "-value\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["requestSqlView"] ?? null), "attributes", [], "any", false, false, false, 55)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["column"]] ?? null) : null), "html", null, true);
                        echo "</td>
                      ";
                    } else {
                        // line 57
                        echo "                        <td class=\"grid-";
                        echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                        echo "-value\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["row"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["column"]] ?? null) : null), "html", null, true);
                        echo "</td>
                      ";
                    }
                    // line 59
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "              </tbody>
            </table>
          </div>
        ";
        } else {
            // line 66
            echo "          <div class=\"alert alert-warning\">
            <p class=\"alert-text\">
              ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This SQL query has no result.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        }
        // line 72
        echo "      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 72,  157 => 68,  153 => 66,  147 => 62,  140 => 60,  134 => 59,  126 => 57,  118 => 55,  115 => 54,  111 => 53,  108 => 52,  104 => 51,  99 => 48,  88 => 46,  84 => 45,  78 => 41,  76 => 40,  69 => 36,  65 => 35,  59 => 31,  51 => 30,  47 => 29,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig");
    }
}
