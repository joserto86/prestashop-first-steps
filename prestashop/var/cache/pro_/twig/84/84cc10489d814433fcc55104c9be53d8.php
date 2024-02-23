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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig */
class __TwigTemplate_dd641a6e00ef82bdbab001b6a6b8acaf extends Template
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
<div class=\"list-group\" id=\"profileTabs\" role=\"tablist\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "profiles", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 28
            echo "    <a class=\"list-group-item list-group-item-action p-2";
            if ((twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "employeeProfileId", [], "any", false, false, false, 28))) {
                echo " active";
            }
            echo "\"
       id=\"profileListItem_";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
       data-toggle=\"list\"
       href=\"#profileTabContent_";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
       role=\"tab\"
       aria-controls=\"home\"
    >
      ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "
    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 38,  64 => 35,  57 => 31,  52 => 29,  45 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig");
    }
}
