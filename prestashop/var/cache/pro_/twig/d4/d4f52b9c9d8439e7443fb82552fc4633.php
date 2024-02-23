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

/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig */
class __TwigTemplate_94b9a080e1424188f3f874ee0c93f872 extends Template
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
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importDataConfigurationForm"] ?? null), 'form_start', ["attr" => ["class" => "import-data-configuration-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">list</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Match your data", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">

      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please match each column of your source file to one of the destination columns.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </p>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Load a data matching configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importDataConfigurationForm"] ?? null), "matches", [], "any", false, false, false, 50), 'widget');
        echo "
            </div>
            <div class=\"col\">
              <button class=\"btn btn-outline-primary js-load-import-match\" data-url=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_data_configuration_get");
        echo "\">
                <i class=\"material-icons\">settings</i>
                ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Load", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
              <button class=\"btn btn-outline-primary js-delete-import-match\" data-url=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_data_configuration_delete");
        echo "\">
                <i class=\"material-icons\">delete</i>
                ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save your data matching configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importDataConfigurationForm"] ?? null), "match_name", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "js-import-match-input", "type" => "button"]]);
        echo "
            </div>
            <div class=\"col\">
              <button class=\"btn btn-outline-primary js-save-import-match\" data-url=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_data_configuration_create");
        echo "\">
                <i class=\"material-icons\">save</i>
                ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rows to skip", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["importDataConfigurationForm"] ?? null), "skip", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "col-md-4 js-rows-skip", "min" => 0]]);
        echo "
          <small class=\"form-text\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Indicate how many of the first rows of your file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</small>
        </div>
      </div>

      <div class=\"alert alert-warning js-validation-error js-duplicate-columns-warning d-none\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Two columns cannot have the same type of values", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </p>
      </div>
      <div class=\"alert alert-warning js-validation-error js-missing-column-warning d-none\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This column must be set:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          <span class=\"js-missing-column\">&nbsp;</span>
        </p>
      </div>

      <table class=\"table table-bordered js-import-data-table\" data-required-fields=\"";
        // line 105
        echo twig_escape_filter($this->env, json_encode(($context["requiredFields"] ?? null)), "html", null, true);
        echo "\">
        <thead>
          <tr>
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["importDataConfigurationForm"] ?? null), "type_value", [], "any", false, false, false, 108));
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
        foreach ($context['_seq'] as $context["_key"] => $context["importEntityField"]) {
            // line 109
            echo "              <th class=\"js-entity-field ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109) > ($context["maxVisibleColumns"] ?? null))) {
                echo " d-none";
            }
            echo "\">
                ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["importEntityField"], 'errors');
            echo "
                ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["importEntityField"], 'widget');
            echo "
              </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['importEntityField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "          </tr>
        </thead>
        <tbody>
          ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["dataRowCollection"] ?? null), "rows", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 118
            echo "            <tr>
              ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 120
                echo "                <td ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 120) > ($context["maxVisibleColumns"] ?? null))) {
                    echo " class=\"d-none\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "value", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </tbody>
      </table>

      <div class=\"row\">
        <div class=\"col text-left\">
          <button class=\"btn btn-outline-primary js-import-previous-page d-none\" type=\"button\">
            <i class=\"material-icons rtl-flip\">arrow_back</i>
          </button>
        </div>
        <div class=\"col text-right\">
          <button class=\"btn btn-outline-primary js-import-next-page";
        // line 134
        if ( !($context["showPagingArrows"] ?? null)) {
            echo " d-none";
        }
        echo "\" type=\"button\">
            <i class=\"material-icons rtl-flip\">arrow_forward</i>
          </button>
        </div>
      </div>
      ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["importDataConfigurationForm"] ?? null), 'rest');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-between\">
      <a class=\"btn btn-outline-secondary js-import-process-button\" href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import");
        echo "\" data-import_url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_process");
        echo "\">
        <i class=\"material-icons\">cancel</i>
        ";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary js-process-import\">
        <i class=\"material-icons\">check</i>
        ";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["importDataConfigurationForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 155,  326 => 150,  319 => 146,  312 => 144,  304 => 139,  294 => 134,  282 => 124,  275 => 122,  254 => 120,  237 => 119,  234 => 118,  230 => 117,  225 => 114,  208 => 111,  204 => 110,  197 => 109,  180 => 108,  174 => 105,  166 => 100,  158 => 95,  149 => 89,  145 => 88,  139 => 85,  128 => 77,  123 => 75,  117 => 72,  109 => 67,  98 => 59,  93 => 57,  88 => 55,  83 => 53,  77 => 50,  69 => 45,  60 => 39,  50 => 32,  43 => 28,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig");
    }
}
