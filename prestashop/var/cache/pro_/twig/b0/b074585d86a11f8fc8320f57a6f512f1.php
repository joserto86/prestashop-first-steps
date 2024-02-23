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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig */
class __TwigTemplate_4adae81a22ae1e41132432d11a3b1a4d extends Template
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
        // line 26
        if (($context["isDeleteSubmitted"] ?? null)) {
            // line 27
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? null), 'form_start');
            echo "
  <div class=\"col-md-12\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What do you want to do with the products associated with this category?", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-group mb-0\">
          ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["deleteCategoriesForm"] ?? null), "delete_mode", [], "any", false, false, false, 35), 'widget');
            echo "
        </div>
        <div class=\"d-none\">
          ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["deleteCategoriesForm"] ?? null), "categories_to_delete", [], "any", false, false, false, 38), 'widget');
            echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
            echo "\">
          <i class=\"material-icons\">cancel</i>
          ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "
        </a>

        <button class=\"btn btn-danger btn-sm\" type=\"submit\">
          <i class=\"material-icons\">delete</i>
          ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    </div>
  </div>
  ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["deleteCategoriesForm"] ?? null), 'form_end');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 54,  83 => 49,  75 => 44,  70 => 42,  63 => 38,  57 => 35,  50 => 31,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig");
    }
}
