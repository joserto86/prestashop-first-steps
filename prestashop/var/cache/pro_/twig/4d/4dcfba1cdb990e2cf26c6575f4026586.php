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

/* @PrestaShop/Admin/Improve/International/Locations/State/edit.html.twig */
class __TwigTemplate_e694316b9abbbe0086a26369a7af39ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Locations/State/edit.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/International/Locations/State/Blocks/form.html.twig", ["stateForm" => ($context["stateForm"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Locations/State/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  46 => 29,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Locations/State/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Locations/State/edit.html.twig");
    }
}
