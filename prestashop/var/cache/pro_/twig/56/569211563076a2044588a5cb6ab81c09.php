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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig */
class __TwigTemplate_f2c945dc15d97453958c6df73f14645c extends Template
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
<div class=\"modal fade\" id=\"addOrderProductModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addProductToOrderForm"] ?? null), 'form_start', ["action" => "#"]);
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "product_id", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
              ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "product_id", [], "any", false, false, false, 44), 'widget');
        echo "
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "combination_id", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
              ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "combination_id", [], "any", false, false, false, 51), 'widget');
        echo "
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "price_tax_excl", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
                  ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price tax excluded", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "price_tax_excl", [], "any", false, false, false, 62), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "currencyId", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-group mb-0\">
                <label class=\"form-control-label\" for=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "price_tax_incl", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
                  ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price tax included", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "price_tax_incl", [], "any", false, false, false, 76), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "currencyId", [], "any", false, false, false, 78), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "quantity", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
              ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["addProductToOrderForm"] ?? null), "quantity", [], "any", false, false, false, 89), 'widget');
        echo "
          </div>

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addProductToOrderForm"] ?? null), 'form_end');
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 102,  175 => 98,  169 => 95,  160 => 89,  155 => 87,  151 => 86,  140 => 78,  135 => 76,  128 => 72,  124 => 71,  114 => 64,  109 => 62,  102 => 58,  98 => 57,  89 => 51,  84 => 49,  80 => 48,  73 => 44,  68 => 42,  64 => 41,  54 => 34,  49 => 32,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig");
    }
}
