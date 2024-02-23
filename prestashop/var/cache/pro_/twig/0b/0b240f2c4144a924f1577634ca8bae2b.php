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

/* @PrestaShop/Admin/Helpers/range_slider.html.twig */
class __TwigTemplate_475789ccf39c2e64f15f707406f57cc5 extends Template
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
        echo "<script>
    \$(document).ready(function() {
        var sliderInput = \$('#";
        // line 27
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<', '";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? null), "0")) : ("0")), "html", null, true);
        echo ",');
            value = value.replace('>', '";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? null), "10")) : ("10")), "html", null, true);
        echo ",');
            value = value.split(',');
            value[0] = parseInt(value[0]);
            value[1] = parseInt(value[1]);
        } else {
            value = [";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? null), "0")) : ("0")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? null), "10")) : ("10")), "html", null, true);
        echo "];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        sliderInput.bootstrapSlider({
            formatter: function(values) {
                if (typeof values[0] != 'undefined') {
                    var slider = \$('#";
        // line 49
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "');
                    if (values[0] == ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? null), "0")) : ("0")), "html", null, true);
        echo " && values[1] == ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? null), "10")) : ("10")), "html", null, true);
        echo ") {
                        slider.attr('sql', '');
                        return \"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not filtered", [], "Admin.Global"), "html", null, true);
        echo "\";
                    }
                    if (values[0] == values[1]) {
                        slider.attr('sql', ''); //'='+values[0]);
                        return \"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Equals", [], "Admin.Global"), "html", null, true);
        echo " \" + values[0];
                    }
                    if (values[0] == ";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? null), "0")) : ("0")), "html", null, true);
        echo ") {
                        slider.attr('sql', '<'+values[1]);
                        return \"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Below", [], "Admin.Global"), "html", null, true);
        echo " \" + values[1];
                    }
                    if (values[1] == ";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? null), "10")) : ("10")), "html", null, true);
        echo ") {
                        slider.attr('sql', '>'+values[0]);
                        return \"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Above", [], "Admin.Global"), "html", null, true);
        echo " \" + values[0];
                    }
                    slider.attr('sql', 'BETWEEN '+values[0]+' AND '+values[1]);
                    return \"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inside range", [], "Admin.Global"), "html", null, true);
        echo " [\" + values[0] + \"~\" + values[1] + \"]\";
                }
            },
            min: ";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter(($context["min"] ?? null), "0")) : ("0")), "html", null, true);
        echo ",
            max: ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter(($context["max"] ?? null), "10")) : ("10")), "html", null, true);
        echo ",
            step: ";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("step", $context)) ? (_twig_default_filter(($context["step"] ?? null), "1")) : ("1")), "html", null, true);
        echo ",
            //tooltip: 'always',
            scale: '";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("scale", $context)) ? (_twig_default_filter(($context["scale"] ?? null), "linear")) : ("linear")), "html", null, true);
        echo "', // or 'logarithmic'
            value: value,
            id: '";
        // line 76
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "Slider'
        });
        ";
        // line 78
        if (array_key_exists("on_change_func_name", $context)) {
            // line 79
            echo "            sliderInput.on('slideStop', function() {
                ";
            // line 80
            echo ($context["on_change_func_name"] ?? null);
            echo "
            });
        ";
        }
        // line 83
        echo "    });
</script>
<style>
    <!-- /* To remove once integrated in sass */
    #";
        // line 87
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "Slider .slider-selection {
        background: #aaaaaa;
    }
    #";
        // line 90
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "Slider .tooltip-inner {
        padding: 0.4em;
    }
    -->
</style>

<input type=\"text\" id=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, ($context["input_name"] ?? null), "html", null, true);
        echo "\" value=\"\" sql=\"";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Helpers/range_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 96,  173 => 90,  167 => 87,  161 => 83,  155 => 80,  152 => 79,  150 => 78,  145 => 76,  140 => 74,  135 => 72,  131 => 71,  127 => 70,  121 => 67,  115 => 64,  110 => 62,  105 => 60,  100 => 58,  95 => 56,  88 => 52,  81 => 50,  77 => 49,  63 => 40,  55 => 35,  51 => 34,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Helpers/range_slider.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/range_slider.html.twig");
    }
}
