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

/* @PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig */
class __TwigTemplate_11de902c5b3b579727bb363a503dfe2e extends Template
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
        $context["href"] = ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_performance") . "#optional_features");
        // line 27
        $context["linkText"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Performance", [], "Admin.Global");
        // line 28
        echo "
<div class=\"alert alert-warning\" role=\"alert\">
  <p>
    ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature has been disabled. You can activate it here: %url%.", ["%url%" => (((("<a href=\"" .         // line 32
($context["href"] ?? null)) . "\">") . ($context["linkText"] ?? null)) . "</a>")], "Admin.Catalog.Notification");
        // line 33
        echo "
  </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 33,  50 => 32,  49 => 31,  44 => 28,  42 => 27,  40 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig");
    }
}
