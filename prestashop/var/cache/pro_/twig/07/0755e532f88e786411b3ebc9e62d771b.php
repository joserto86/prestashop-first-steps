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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link_group.html.twig */
class __TwigTemplate_c43f9b3ecfce6cc7a83e30ba8b671152 extends Template
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
<div class=\"text-nowrap\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, false, false, 27), "links", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 28
            echo "    ";
            if ((($__internal_compile_0 = ($context["record"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["link"], "is_link_available_field", [], "any", false, false, false, 28)] ?? null) : null)) {
                // line 29
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["link"], "route", [], "any", false, false, false, 29), [twig_get_attribute($this->env, $this->source, $context["link"], "route_param_name", [], "any", false, false, false, 29) => (($__internal_compile_1 = ($context["record"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["link"], "route_param_field", [], "any", false, false, false, 29)] ?? null) : null)]), "html", null, true);
                echo "\">
        <i class=\"material-icons\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "icon", [], "any", false, false, false, 30), "html", null, true);
                echo "</i>
      </a>
    ";
            }
            // line 33
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 34,  59 => 33,  53 => 30,  48 => 29,  45 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/link_group.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/link_group.html.twig");
    }
}
