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

/* @PrestaShop/Admin/Improve/Design/MailTheme/preview.html.twig */
class __TwigTemplate_11dd6651d7ec05ce5961488b74a0dce1 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/preview.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig", ["mailTheme" =>         // line 31
($context["mailTheme"] ?? null)]);
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 33,  52 => 31,  50 => 29,  46 => 28,  35 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/MailTheme/preview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/preview.html.twig");
    }
}
