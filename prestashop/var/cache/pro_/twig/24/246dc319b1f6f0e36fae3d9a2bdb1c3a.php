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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/private.html.twig */
class __TwigTemplate_3988bbed1739ea7a3f1e64b338d272f0 extends Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "private", [], "any", false, false, false, 26) == 1)) {
            // line 27
            echo "  <i class=\"material-icons\">lock_open</i>
";
        } else {
            // line 29
            echo "  <i class=\"material-icons\">lock</i>
";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/private.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 29,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/private.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/private.html.twig");
    }
}
