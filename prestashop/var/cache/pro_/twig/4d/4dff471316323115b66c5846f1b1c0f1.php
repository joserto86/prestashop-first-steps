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

/* @PrestaShop/Admin/Improve/International/Zone/Blocks/form.html.twig */
class __TwigTemplate_e6a1bc1a9bacedeb2319b4ad5d3915bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form_zone_widget' => [$this, 'block_form_zone_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["zoneForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["zoneForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zones", [], "Admin.International.Feature"), "html", null, true);
        echo "
    </div>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["zoneForm"] ?? null), 'errors');
        echo "
        ";
        // line 37
        $this->displayBlock('form_zone_widget', $context, $blocks);
        // line 40
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_zones_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["zoneForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 37
    public function block_form_zone_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["zoneForm"] ?? null), 'widget');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Zone/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  97 => 37,  91 => 54,  84 => 50,  77 => 46,  73 => 45,  66 => 40,  64 => 37,  60 => 36,  52 => 31,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Zone/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Zone/Blocks/form.html.twig");
    }
}
