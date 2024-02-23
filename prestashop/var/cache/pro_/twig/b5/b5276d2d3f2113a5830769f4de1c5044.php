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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig */
class __TwigTemplate_ac8c3787700c1d7f1e11c94b9a83bc9b extends Template
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
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", 25)->unwrap();
        // line 26
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multistore", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 33
        echo twig_call_macro($macros["ps"], "macro_multistore_switch", [($context["shopLogosForm"] ?? null), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multistore", [], "Admin.Global")]], 33, $context, $this->getSourceContext());
        // line 35
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 35,  51 => 33,  44 => 29,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/multishop_switch.html.twig");
    }
}
