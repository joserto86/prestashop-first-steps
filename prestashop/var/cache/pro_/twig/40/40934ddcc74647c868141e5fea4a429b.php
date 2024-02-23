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

/* @PrestaShop/Admin/Improve/International/Locations/State/add.html.twig */
class __TwigTemplate_85b28b353c1ac457b20f1bbe500d297e extends Template
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
        // line 29
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new", [], "Admin.Actions");
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Locations/State/add.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Improve/International/Locations/State/add.html.twig", 32)->display($context);
        // line 33
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/International/Locations/State/Blocks/form.html.twig", ["stateForm" => ($context["stateForm"] ?? null)]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Locations/State/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 33,  53 => 32,  49 => 31,  44 => 26,  42 => 29,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Locations/State/add.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Locations/State/add.html.twig");
    }
}
