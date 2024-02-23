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

/* @PrestaShop/Admin/Common/unavailable-feature.html.twig */
class __TwigTemplate_a811016398842ae24def070f67a14296 extends Template
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
 <div class=\"unavailable-feature\">
  <h2>
    ";
        // line 28
        echo twig_escape_filter($this->env, ($context["featureTitle"] ?? null), "html", null, true);
        echo "
    ";
        // line 29
        if (array_key_exists("helpbox", $context)) {
            // line 30
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/HelpBox/helpbox.html.twig", ["content" =>             // line 31
($context["helpbox"] ?? null)]);
            // line 32
            echo "
    ";
        }
        // line 34
        echo "  </h2>

  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
 </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/unavailable-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 38,  56 => 34,  52 => 32,  50 => 31,  48 => 30,  46 => 29,  42 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Common/unavailable-feature.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/unavailable-feature.html.twig");
    }
}
