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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig */
class __TwigTemplate_506da930b07fc094e48242fd6b3abe10 extends Template
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
        // line 29
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Return statuses", [], "Admin.Shopparameters.Feature");
        // line 29
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig", 32)->display($context);
        // line 33
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig", 33)->display($context);
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order_return_states_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 39,  68 => 37,  64 => 36,  59 => 33,  56 => 32,  52 => 31,  47 => 29,  45 => 27,  43 => 26,  36 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderReturnStates/create.html.twig");
    }
}
