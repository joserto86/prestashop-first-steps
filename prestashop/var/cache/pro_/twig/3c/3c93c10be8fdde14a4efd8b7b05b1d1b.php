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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig */
class __TwigTemplate_7596800921122b69dc5e0a75c9b146f7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'sql_manager_db_tables_panel' => [$this, 'block_sql_manager_db_tables_panel'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["requestSqlForm"] ?? null), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30))) {
            // line 31
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["requestSqlForm"] ?? null), "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 33
                echo "        <div class=\"alert-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 33), "html", null, true);
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </div>
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig", 38)->display($context);
        // line 39
        echo "
  ";
        // line 40
        $this->displayBlock('sql_manager_db_tables_panel', $context, $blocks);
    }

    public function block_sql_manager_db_tables_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig", 41)->display($context);
        // line 42
        echo "  ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/sql_manager.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 49,  107 => 48,  101 => 46,  97 => 45,  93 => 42,  90 => 41,  83 => 40,  80 => 39,  78 => 38,  75 => 37,  71 => 35,  62 => 33,  58 => 32,  55 => 31,  52 => 30,  48 => 29,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/edit.html.twig");
    }
}
