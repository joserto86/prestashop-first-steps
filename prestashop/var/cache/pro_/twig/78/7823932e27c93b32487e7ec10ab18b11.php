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

/* @PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig */
class __TwigTemplate_377f35a48429d802fa325deb3bda954c extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["merchandiseReturnsOptionsForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["merchandiseReturnsOptionsForm"] ?? null), 'form_start', ["attr" => ["class" => "form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_merchandise_returns_save_options")]);
        // line 31
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchandise return (RMA) options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["merchandiseReturnsOptionsForm"] ?? null), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["merchandiseReturnsOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 47,  67 => 43,  59 => 38,  52 => 34,  47 => 31,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/MerchandiseReturn/Blocks/options.html.twig");
    }
}
