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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/Blocks/form.html.twig */
class __TwigTemplate_bc4ba179a02fc7fc7bcc8484187c1a77 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'search_engine_form_widget' => [$this, 'block_search_engine_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchEngineForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["searchEngineForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Referrer", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["searchEngineForm"] ?? null), 'errors');
        echo "

        ";
        // line 38
        $this->displayBlock('search_engine_form_widget', $context, $blocks);
        // line 41
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_search_engines_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["searchEngineForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 38
    public function block_search_engine_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["searchEngineForm"] ?? null), 'widget');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 39,  98 => 38,  92 => 55,  85 => 51,  78 => 47,  74 => 46,  67 => 41,  65 => 38,  60 => 36,  52 => 31,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/SearchEngines/Blocks/form.html.twig");
    }
}
