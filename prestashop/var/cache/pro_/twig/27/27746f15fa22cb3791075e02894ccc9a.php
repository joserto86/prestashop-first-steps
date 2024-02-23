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

/* @PrestaShop/Admin/Sell/CustomerService/OrderReturn/Blocks/form.html.twig */
class __TwigTemplate_2db15156339ddcd056572c48917bc3cc extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["orderReturnForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderReturnForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchandise returns", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderReturnForm"] ?? null), 'widget');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_merchandise_returns_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>

    <button class=\"btn btn-primary float-right\">
      ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderReturnForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/OrderReturn/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 51,  79 => 47,  72 => 43,  68 => 42,  60 => 37,  52 => 32,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/OrderReturn/Blocks/form.html.twig", "/var/www/html/templates/bundles/PrestaShopBundle/Admin/Sell/CustomerService/OrderReturn/Blocks/form.html.twig");
    }
}
