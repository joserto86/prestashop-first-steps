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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig */
class __TwigTemplate_2cffbf07e2cd879cba8f9e67074f3139 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'generateMailsFormBlock' => [$this, 'block_generateMailsFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('generateMailsFormBlock', $context, $blocks);
    }

    public function block_generateMailsFormBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List %theme% layouts", ["%theme%" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 31)], "Admin.Design.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">

      <table class=\"grid-table table\">
        <thead class=\"thead-default\">
          <tr class=\"column-headers\">
            <th scope=\"col\">
              ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
            </th>
            <th scope=\"col\">
              ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module", [], "Admin.Global"), "html", null, true);
        echo "
            </th>
            <th scope=\"col\">
              <div class=\"grid-actions-header-text\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "layouts", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["mailLayout"]) {
            // line 54
            echo "            <tr>
              <td class=\"data-type\">
                ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
              </td>
              <td class=\"data-type\">
                ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 59), "html", null, true);
            echo "
              </td>
              <td class=\"action-type\">
                ";
            // line 62
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 62))) {
                // line 63
                echo "                  ";
                $context["previewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_preview_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 63), "locale", [], "any", false, false, false, 63), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 63), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 63), "type" => "html"]);
                // line 64
                echo "                  ";
                $context["rawUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "locale", [], "any", false, false, false, 64), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 64), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 64), "type" => "html"]);
                // line 65
                echo "                  ";
                $context["txtUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 65), "locale", [], "any", false, false, false, 65), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 65), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 65), "type" => "txt"]);
                // line 66
                echo "                  ";
                $context["mailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_send_test_mail", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 66), "locale", [], "any", false, false, false, 66), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 66), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 66)]);
                // line 67
                echo "                ";
            } else {
                // line 68
                echo "                  ";
                $context["previewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_preview_module_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "locale", [], "any", false, false, false, 68), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 68), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 68), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 68), "type" => "html"]);
                // line 69
                echo "                  ";
                $context["rawUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_module_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 69), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 69), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 69), "type" => "html"]);
                // line 70
                echo "                  ";
                $context["txtUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_module_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "locale", [], "any", false, false, false, 70), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 70), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 70), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 70), "type" => "txt"]);
                // line 71
                echo "                  ";
                $context["mailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_send_test_module_mail", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "locale", [], "any", false, false, false, 71), "theme" => twig_get_attribute($this->env, $this->source, ($context["mailTheme"] ?? null), "name", [], "any", false, false, false, 71), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 71), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 71)]);
                // line 72
                echo "                ";
            }
            // line 73
            echo "
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, ($context["previewUrl"] ?? null), "html", null, true);
            echo "\">
                      <i class=\"material-icons\">http</i>
                    </a>

                    <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
                       data-toggle=\"dropdown\" 
                       aria-haspopup=\"true\" 
                       aria-expanded=\"false\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                      <a target=\"_blank\" class=\"btn tooltip-link dropdown-item raw-html-link\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, ($context["rawUrl"] ?? null), "html", null, true);
            echo "\">
                        <i class=\"material-icons\">code</i>
                        ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Raw HTML", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                      </a>
                      <a target=\"_blank\" class=\"btn tooltip-link dropdown-item raw-text-link\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, ($context["txtUrl"] ?? null), "html", null, true);
            echo "\">
                        <i class=\"material-icons\">subject</i>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                      </a>
                      <a class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["mailUrl"] ?? null), "html", null, true);
            echo "\">
                        <i class=\"material-icons\">email</i>
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send a test email", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                      </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
      </table>

    </div>

    <div class=\"card-footer\">
      <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_index", ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\" id=\"back-to-configuration-link\">
        <i class=\"material-icons rtl-flip\">arrow_back</i>
        ";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to configuration", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>

  </div>

";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 112,  205 => 110,  197 => 104,  183 => 96,  178 => 94,  173 => 92,  168 => 90,  163 => 88,  158 => 86,  145 => 76,  140 => 73,  137 => 72,  134 => 71,  131 => 70,  128 => 69,  125 => 68,  122 => 67,  119 => 66,  116 => 65,  113 => 64,  110 => 63,  108 => 62,  102 => 59,  96 => 56,  92 => 54,  88 => 53,  79 => 47,  72 => 43,  66 => 40,  54 => 31,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig");
    }
}
