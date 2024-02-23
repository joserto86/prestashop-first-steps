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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/combination_list_form.html.twig */
class __TwigTemplate_21427e49c7bdba42554df6888a1df2df extends Template
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
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["combinationsForm"] ?? null), [0 => "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["combinationsForm"] ?? null), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/combination_list_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/combination_list_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/combination_list_form.html.twig");
    }
}
