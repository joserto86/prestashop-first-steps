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

/* @PrestaShop/Admin/TwigTemplateForm/form_table_layout.html.twig */
class __TwigTemplate_be98935ba2fc47abfec64da5a54eada6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 25
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/form_table_layout.html.twig", 25);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'hidden_row' => [$this, 'block_hidden_row'],
                'form_widget_compound' => [$this, 'block_form_widget_compound'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 39
        $this->displayBlock('button_row', $context, $blocks);
        // line 48
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 56
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 27
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<tr>
        <td>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 31
        echo "</td>
        <td>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 35
        echo "</td>
    </tr>";
    }

    // line 39
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "<tr>
        <td></td>
        <td>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 44
        echo "</td>
    </tr>";
    }

    // line 48
    public function block_hidden_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 52
        echo "</td>
    </tr>";
    }

    // line 56
    public function block_form_widget_compound($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 58
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 58)) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 59
            echo "<tr>
                <td colspan=\"2\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 62
            echo "</td>
            </tr>";
        }
        // line 65
        $this->displayBlock("form_rows", $context, $blocks);
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 67
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  136 => 67,  134 => 66,  132 => 65,  128 => 62,  126 => 61,  123 => 59,  121 => 58,  117 => 57,  113 => 56,  108 => 52,  106 => 51,  103 => 49,  99 => 48,  94 => 44,  92 => 43,  88 => 40,  84 => 39,  79 => 35,  77 => 34,  75 => 33,  72 => 31,  70 => 30,  67 => 28,  63 => 27,  59 => 56,  57 => 48,  55 => 39,  53 => 27,  30 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/TwigTemplateForm/form_table_layout.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_table_layout.html.twig");
    }
}
