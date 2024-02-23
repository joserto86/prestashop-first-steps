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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig */
class __TwigTemplate_0359036427d6611158b5e3c105d7b188 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'carrier_showcase_card' => [$this, 'block_carrier_showcase_card'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayBlock('carrier_showcase_card', $context, $blocks);
        // line 32
        echo "
  ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig", "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig", 33)->display($context);
        // line 34
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig", 34)->display(twig_array_merge($context, ["grid" => ($context["carrierGrid"] ?? null)]));
        // line 35
        echo "
  ";
        // line 37
        echo "  <div class=\"row\">
    <div class=\"col\"></div>
  </div>
";
    }

    // line 29
    public function block_carrier_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig", 30)->display($context);
        // line 31
        echo "  ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/carrier.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 46,  94 => 45,  88 => 43,  84 => 42,  80 => 31,  77 => 30,  73 => 29,  66 => 37,  63 => 35,  60 => 34,  58 => 33,  55 => 32,  52 => 29,  48 => 28,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/Shipping/Carriers/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/index.html.twig");
    }
}
