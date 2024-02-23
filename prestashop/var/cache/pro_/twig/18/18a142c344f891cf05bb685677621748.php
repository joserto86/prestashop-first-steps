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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig */
class __TwigTemplate_a5bc33a413288a294858dfe5b086b55e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'order_states_listing' => [$this, 'block_order_states_listing'],
            'order_return_states_listing' => [$this, 'block_order_return_states_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 41
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["enableSidebar"] = true;
        // line 27
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Statuses", [], "Admin.Navigation.Menu");
        // line 28
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_states_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new order status", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"], "add_return_state" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_return_states_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new order return status", [], "Admin.Shopparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 41
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", 44)->display($context);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('order_states_listing', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $this->displayBlock('order_return_states_listing', $context, $blocks);
        // line 53
        echo "
";
    }

    // line 46
    public function block_order_states_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", 47, "1030503347")->display(twig_array_merge($context, ["grid" => ($context["orderStatesGrid"] ?? null)]));
        // line 48
        echo "  ";
    }

    // line 50
    public function block_order_return_states_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", 51, "1119843709")->display(twig_array_merge($context, ["grid" => ($context["orderReturnStatesGrid"] ?? null)]));
        // line 52
        echo "  ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/order_states.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 60,  110 => 59,  104 => 57,  100 => 56,  96 => 52,  93 => 51,  89 => 50,  85 => 48,  82 => 47,  78 => 46,  73 => 53,  71 => 50,  68 => 49,  66 => 46,  63 => 45,  60 => 44,  56 => 43,  51 => 41,  49 => 28,  47 => 27,  45 => 26,  38 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}


/* @PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig */
class __TwigTemplate_a5bc33a413288a294858dfe5b086b55e___1030503347 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 47
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", 47);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 47,  114 => 60,  110 => 59,  104 => 57,  100 => 56,  96 => 52,  93 => 51,  89 => 50,  85 => 48,  82 => 47,  78 => 46,  73 => 53,  71 => 50,  68 => 49,  66 => 46,  63 => 45,  60 => 44,  56 => 43,  51 => 41,  49 => 28,  47 => 27,  45 => 26,  38 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}


/* @PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig */
class __TwigTemplate_a5bc33a413288a294858dfe5b086b55e___1119843709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 51
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", 51);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 51,  160 => 47,  114 => 60,  110 => 59,  104 => 57,  100 => 56,  96 => 52,  93 => 51,  89 => 50,  85 => 48,  82 => 47,  78 => 46,  73 => 53,  71 => 50,  68 => 49,  66 => 46,  63 => 45,  60 => 44,  56 => 43,  51 => 41,  49 => 28,  47 => 27,  45 => 26,  38 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/index.html.twig");
    }
}
