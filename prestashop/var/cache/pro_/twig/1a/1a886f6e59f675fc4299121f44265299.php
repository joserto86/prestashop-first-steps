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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/attribute_color.html.twig */
class __TwigTemplate_97dd529a52aa88ac0fa231121aa476f7 extends Template
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
<div style=\"background-color:";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 26), "field", [], "any", false, false, false, 26)] ?? null) : null), "html", null, true);
        echo ";\" class=\"attributes-color-container\"></div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/attribute_color.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/attribute_color.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/attribute_color.html.twig");
    }
}
