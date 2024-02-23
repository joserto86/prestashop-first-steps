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

/* @PrestaShop/Admin/Improve/International/Country/create.html.twig */
class __TwigTemplate_a5eea57ad322d1ea44ca454d4c8ff653 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new", [], "Admin.Actions");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/International/Country/create.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/International/Country/Blocks/form.html.twig");
        echo "
";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/country_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Country/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 37,  65 => 35,  61 => 34,  54 => 31,  50 => 30,  45 => 28,  43 => 26,  36 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Country/create.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Country/create.html.twig");
    }
}
