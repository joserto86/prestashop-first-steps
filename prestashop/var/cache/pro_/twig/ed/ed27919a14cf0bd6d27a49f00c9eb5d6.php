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

/* @PrestaShop/Admin/Improve/International/Locations/State/Blocks/form.html.twig */
class __TwigTemplate_a775072a00e578d60619d55bda0561e8 extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["stateForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stateForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">public</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("States", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["stateForm"] ?? null), 'widget');
        echo "
      </div>
    </div>
    <div class=\"card-footer d-flex align-items-center justify-content-between\">
      <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_states_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["stateForm"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Locations/State/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 47,  75 => 44,  70 => 42,  66 => 41,  59 => 37,  52 => 33,  45 => 29,  42 => 28,  40 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Locations/State/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Locations/State/Blocks/form.html.twig");
    }
}
