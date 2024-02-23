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

/* @PrestaShop/Admin/Module/tab-modules-list.html.twig */
class __TwigTemplate_54762f10d5847b4d550a50217c471e46 extends Template
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
        $context["modulesListShouldBeDisplayed"] = (array_key_exists("modulesList", $context) &&  !twig_test_empty(($context["modulesList"] ?? null)));
        // line 26
        if ((($context["modulesListShouldBeDisplayed"] ?? null) == true)) {
            // line 27
            echo "  <div class=\"row-margin-bottom\">
    <ul class=\"nav nav-pills\">
      ";
            // line 29
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", false, false, false, 29)) > 0)) {
                // line 30
                echo "        <li class=\"active\">
          <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
            ";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Installed", []), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            // line 36
            echo "
      ";
            // line 37
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "installed", [], "any", false, false, false, 37)) > 0)) {
                // line 38
                echo "        <li ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", false, false, false, 38)) == 0)) {
                    echo " class=\"active\" ";
                }
                echo ">
          <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
            ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installed", []), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            // line 44
            echo "    </ul>
  </div>
  <div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
    ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", true, true, false, 47) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", false, false, false, 47)))) {
                // line 48
                echo "      <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
        <table id=\"tab_modules_list_not_installed\" class=\"table\">
          ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", false, false, false, 50));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 51
                    echo "            ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        </table>
      </div>
    ";
            }
            // line 56
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "installed", [], "any", false, false, false, 56)) > 0)) {
                // line 57
                echo "      <div class=\"tab-pane ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", false, false, false, 57)) == 0)) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\">
        <table id=\"tab_modules_list_installed\" class=\"table\">
          ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "installed", [], "any", false, false, false, 59));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 60
                    echo "            ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "        </table>
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
        // line 67
        echo "<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69), "html", null, true);
        echo "&amp;utm_content=download";
        if (array_key_exists("adminListFromSource", $context)) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, ($context["adminListFromSource"] ?? null), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More modules on addons.prestashop.com", []), "html", null, true);
        echo "</a>
  </p>
</div>

";
        // line 73
        if ((($context["modulesListShouldBeDisplayed"] ?? null) == true)) {
            // line 74
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/module_card.bundle.js"), "html", null, true);
            echo "\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/tab-modules-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 74,  200 => 73,  186 => 69,  182 => 67,  178 => 65,  173 => 62,  156 => 60,  139 => 59,  131 => 57,  128 => 56,  123 => 53,  106 => 51,  89 => 50,  85 => 48,  83 => 47,  78 => 44,  71 => 40,  63 => 38,  61 => 37,  58 => 36,  51 => 32,  47 => 30,  45 => 29,  41 => 27,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/tab-modules-list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/tab-modules-list.html.twig");
    }
}
