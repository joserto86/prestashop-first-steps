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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/status.html.twig */
class __TwigTemplate_f7f70a773ad8568877c7769265954a6f extends Template
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
        $context["isActive"] = (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "id", [], "any", false, false, false, 25)] ?? null) : null);
        // line 26
        echo "
<i class=\"material-icons ";
        // line 27
        if (($context["isActive"] ?? null)) {
            echo "text-success";
        } else {
            echo "text-danger";
        }
        echo "\">
  ";
        // line 28
        if (($context["isActive"] ?? null)) {
            echo "check";
        } else {
            echo "clear";
        }
        // line 29
        echo "</i>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 29,  50 => 28,  42 => 27,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/status.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/status.html.twig");
    }
}
