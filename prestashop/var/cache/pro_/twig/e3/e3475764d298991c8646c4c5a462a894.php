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

/* @PrestaShop/Admin/Module/Includes/sorting.html.twig */
class __TwigTemplate_50c4146552c9660623238dd7a82d4005 extends Template
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
        echo "<div class=\"module-sorting-menu\">
  <div class=\"row\">
    <div class=\"col-lg-6\">
      <div class=\"module-sorting-search-wording\">
        <span id=\"selected_modules\" class=\"module-search-result-title module-search-result-wording\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%nbModules% modules and services selected for you", ["%nbModules%" => ($context["totalModules"] ?? null)], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        ";
        // line 30
        $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/Module/Includes/sorting.html.twig", 30)->display(twig_array_merge($context, ["content" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selection", [], "Admin.Modules.Feature"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your store with this selection of modules recommended for your shop, based on your country, language and version of PrestaShop. It includes the most popular modules from our Addons marketplace, and free partner modules.", [], "Admin.Modules.Help")]));
        // line 31
        echo "      </div>
    </div>
    <div class=\"col-lg-6\">
      <div class=\"module-sorting module-sorting-author float-right\">
        <select id=\"sort_module\" class=\"custom-select sort-component\">
          <option value=\"\" disabled selected>- ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by", [], "Admin.Actions"), "html", null, true);
        echo " -</option>
          <option value=\"name\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</option>
          <option value=\"price\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Increasing Price", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
          <option value=\"price-desc\">";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Decreasing Price", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
          <option value=\"scoring-desc\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popularity", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
        </select>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 40,  68 => 39,  64 => 38,  60 => 37,  56 => 36,  49 => 31,  47 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/sorting.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/sorting.html.twig");
    }
}
