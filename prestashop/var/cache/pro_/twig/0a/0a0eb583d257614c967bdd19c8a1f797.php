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

/* @PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig */
class __TwigTemplate_39fe0e5e78fd06b9804a87d6144dbeb6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        ob_start(function () { return ''; });
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
  ";
        // line 34
        ob_start(function () { return ''; });
        // line 35
        echo "    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        ";
        // line 41
        $context["commandsCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "executedCommands", [], "any", false, false, false, 41));
        // line 42
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if ((($context["commandsCount"] ?? null) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 43
        echo twig_escape_filter($this->env, ($context["commandsCount"] ?? null), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        ";
        // line 48
        $context["queriesCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "executedQueries", [], "any", false, false, false, 48));
        // line 49
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if ((($context["queriesCount"] ?? null) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 50
        echo twig_escape_filter($this->env, ($context["queriesCount"] ?? null), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
  ";
        // line 56
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
    }

    // line 59
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "  <span class=\"label\">
    <span class=\"icon\">";
        // line 61
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
    <strong>Commands / Queries</strong>
  </span>
";
    }

    // line 66
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        ";
        // line 79
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "executedCommands", [], "any", false, false, false, 79))) {
            // line 80
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "executedCommands", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 81
                echo "            <tr>
              <td class=\"text-small\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "command", [], "any", false, false, false, 82), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "command_handler", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 84), "file", [], "any", false, false, false, 84), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 84), "line", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        ";
        }
        // line 92
        echo "      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      ";
        // line 106
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "executedQueries", [], "any", false, false, false, 106))) {
            // line 107
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "executedQueries", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 108
                echo "          <tr>
            <td class=\"text-small\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 109), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "query_handler", [], "any", false, false, false, 110), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 111), "file", [], "any", false, false, false, 111), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 111), "line", [], "any", false, false, false, 111), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "      ";
        } else {
            // line 115
            echo "        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      ";
        }
        // line 119
        echo "      </tbody>
    </table>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 119,  241 => 115,  238 => 114,  227 => 111,  223 => 110,  219 => 109,  216 => 108,  211 => 107,  209 => 106,  193 => 92,  187 => 88,  184 => 87,  173 => 84,  169 => 83,  165 => 82,  162 => 81,  157 => 80,  155 => 79,  141 => 67,  137 => 66,  129 => 61,  126 => 60,  122 => 59,  116 => 56,  113 => 55,  105 => 50,  96 => 49,  94 => 48,  86 => 43,  77 => 42,  75 => 41,  67 => 35,  65 => 34,  62 => 33,  55 => 30,  52 => 29,  48 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/commands_and_queries.html.twig");
    }
}
