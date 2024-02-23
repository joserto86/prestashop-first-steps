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

/* @PrestaShop/Admin/Product/ProductPage/disabled_form_alert.html.twig */
class __TwigTemplate_6a3b96638b7fad8e998dcad6eeda210a extends Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/disabled_form_alert.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "  <div class=\"header-toolbar d-print-none\">
    ";
        // line 29
        echo $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension']->getMultistoreHeader();
        echo "
  </div>
    <div class=\"col-md-12\">
        <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can't add or edit a product in this shop context: select a shop instead of a group of shops.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/disabled_form_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 34,  53 => 29,  50 => 28,  46 => 27,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Product/ProductPage/disabled_form_alert.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/disabled_form_alert.html.twig");
    }
}
