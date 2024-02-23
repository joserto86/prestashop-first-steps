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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/api_accesses_states.html.twig */
class __TwigTemplate_c5a27c150a6adaee1121294c62866748 extends Template
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
<i class=\"material-icons active\">check</i>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active", [], "Admin.Global"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "active_api_access", [], "any", false, false, false, 26), "html", null, true);
        echo " <i class=\"material-icons inactive\">close</i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive", [], "Admin.Global"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "inactive_api_access", [], "any", false, false, false, 26), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/api_accesses_states.html.twig";
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
        return new Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/api_accesses_states.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/api_accesses_states.html.twig");
    }
}
