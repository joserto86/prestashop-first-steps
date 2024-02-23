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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/not_found.html.twig */
class __TwigTemplate_305d57b0f10e93d2659d7289581b8b9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/not_found.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/theme" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\"/>
";
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  <div class=\"card-block\">
    <div class=\"justify-content-center d-flex\">
      <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/missing_combination.png"), "html", null, true);
        echo "\">
    </div>
    <div class=\"justify-content-center d-flex combination-not-found-description\">
      <h2>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This combination doesn't exist anymore", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"justify-content-center d-flex\">
      <button type=\"button\" aria-label=\"Close\" class=\"btn btn-primary\" data-dismiss=\"modal\">
        <span>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close and refresh", [], "Admin.Actions"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/not_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 40,  72 => 36,  66 => 33,  62 => 31,  58 => 30,  51 => 27,  47 => 26,  36 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/not_found.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/not_found.html.twig");
    }
}
