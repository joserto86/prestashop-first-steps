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

/* @PrestaShop/Admin/Module/Includes/categories_card.html.twig */
class __TwigTemplate_c6f63d7713f635e01170a8f3d5800aed extends Template
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
        echo "<div class=\"module-category-item col-lg-3 col-md-4 col-sm-6\"
     ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "tab", [], "any", false, false, false, 26)) {
            echo "data-category-tab=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "tab", [], "any", false, false, false, 26), "html", null, true);
            echo "\"";
        }
        // line 27
        echo "     data-category-ref=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "refMenu", [], "any", false, false, false, 27), "html", null, true);
        echo "\"
>
    <div class=\"module-category-item-wrapper\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 30), [], "Admin.Modules.Feature"), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/categories_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 30,  46 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/categories_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/categories_card.html.twig");
    }
}
