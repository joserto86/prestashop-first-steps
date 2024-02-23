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

/* @PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig */
class __TwigTemplate_c8432edc478ead136bedbbf1a28e7058 extends Template
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
        if ((twig_length_filter($this->env, ($context["warehouses"] ?? null)) > 0)) {
            // line 26
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product location in warehouses", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>

    <div class=\"alert alert-info\" style=\"display:block; position: 'auto';\" role=\"alert\">
        <div class=\"alert-text\">
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This interface allows you to specify the warehouse in which the product is stocked.", [], "Admin.Catalog.Help"), "html", null, true);
            echo "</p>
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It is also possible to specify the location within the warehouse for each product or combination.", [], "Admin.Catalog.Help"), "html", null, true);
            echo "</p>
        </div>
    </div>
    <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please choose the warehouses associated with this product.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</p>

    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["warehouses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["warehouse"]) {
                // line 37
                echo "        <div class=\"panel panel-default\">
            ";
                // line 38
                $context["collectionName"] = ("warehouse_combination_" . twig_get_attribute($this->env, $this->source, $context["warehouse"], "id_warehouse", [], "any", false, false, false, 38));
                // line 39
                echo "            <div class=\"form-group\" id=\"warehouse_combination_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["warehouse"], "id_warehouse", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
                <label class=\"col-sm-2 control-label\">
                    <h4>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["form"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["collectionName"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 41), "label", [], "any", false, false, false, 41), "html", null, true);
                echo "</h4><br/>
                    ";
                // line 42
                if ((twig_length_filter($this->env, (($__internal_compile_1 = ($context["form"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["collectionName"] ?? null)] ?? null) : null)) > 1)) {
                    // line 43
                    echo "                        <button type=\"button\" class=\"btn btn-default check_all_warehouse\">
                            <i class=\"icon-check-sign\"></i> ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    echo "
                        </button>
                    ";
                }
                // line 47
                echo "                </label>
                <div class=\"col-sm-10\">
                    ";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_compile_2 = ($context["form"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[($context["collectionName"] ?? null)] ?? null) : null), 'errors');
                echo "
                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_3 = ($context["form"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["collectionName"] ?? null)] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["warehouse_combination"]) {
                    // line 51
                    echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52), "html", null, true);
                    echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"float-left col-lg-1\">";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "activated", [], "any", false, false, false, 54), 'widget');
                    echo "</div>
                                ";
                    // line 55
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "location", [], "any", false, false, false, 55), 'label');
                    echo "
                                <div class=\"float-left col-lg-3\">";
                    // line 56
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "location", [], "any", false, false, false, 56), 'widget');
                    echo "</div>
                                ";
                    // line 57
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "id_product_attribute", [], "any", false, false, false, 57), 'widget');
                    echo "
                                ";
                    // line 58
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "warehouse_id", [], "any", false, false, false, 58), 'widget');
                    echo "
                                ";
                    // line 59
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "product_id", [], "any", false, false, false, 59), 'widget');
                    echo "
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse_combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  132 => 59,  128 => 58,  124 => 57,  120 => 56,  116 => 55,  112 => 54,  107 => 52,  104 => 51,  100 => 50,  96 => 49,  92 => 47,  86 => 44,  83 => 43,  81 => 42,  77 => 41,  71 => 39,  69 => 38,  66 => 37,  62 => 36,  57 => 34,  51 => 31,  47 => 30,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig");
    }
}
