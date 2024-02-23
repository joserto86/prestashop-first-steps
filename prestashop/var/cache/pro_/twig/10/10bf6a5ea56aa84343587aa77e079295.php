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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig */
class __TwigTemplate_621c6a298a8322e8c732063c112b88c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 27
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["legacyBaseLayout"] = "light_display_layout.tpl";
        // line 27
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig", 27);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\"
        media=\"all\">
";
    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(        // line 37
($context["bulkCombinationForm"] ?? null), 'form_start', ["attr" => ["class" => ("combination-page " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["bulkCombinationForm"] ?? null), "vars", [], "any", false, true, false, 39), "attr", [], "any", false, true, false, 39), "class", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bulkCombinationForm"] ?? null), "vars", [], "any", false, true, false, 39), "attr", [], "any", false, true, false, 39), "class", [], "any", false, false, false, 39), "")) : (""))), "data-bulk-chunk-size" => 10, "data-progress-title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editing %total% combinations", [], "Admin.Catalog.Feature"), "data-progress-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editing %done%/%total% combinations", [], "Admin.Catalog.Feature"), "data-close-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Catalog.Feature"), "data-stop-processing" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop processing", [], "Admin.Catalog.Feature"), "data-errors-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_count% errors occurred. You can download the logs for future reference.", [], "Admin.Catalog.Feature"), "data-back-to-processing" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to processing", [], "Admin.Catalog.Feature"), "data-download-error-log" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download error log", [], "Admin.Catalog.Feature"), "data-view-error-log" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View %error_count% error logs", [], "Admin.Catalog.Feature"), "data-view-error-title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error log", [], "Admin.Catalog.Feature")]]);
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["bulkCombinationForm"] ?? null), 'row');
        echo "
  ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["bulkCombinationForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/combination_bulk.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 59,  93 => 57,  89 => 56,  83 => 53,  79 => 52,  76 => 51,  74 => 39,  73 => 37,  71 => 36,  67 => 35,  60 => 31,  55 => 30,  51 => 29,  46 => 27,  44 => 26,  37 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/bulk.html.twig");
    }
}
