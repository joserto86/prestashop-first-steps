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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig */
class __TwigTemplate_e55b4871d5696c204ef77d4a3b41d0cd extends Template
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
<div class=\"card\" id=\"linkedOrdersPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Linked orders", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "linkedOrders", [], "any", false, false, false, 30), "linkedOrders", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
    </h3>
  </div>

  <div class=\"card-body\">
    <table class=\"table mb-3\">
      <thead>
      <tr>
        <th>
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </th>
        <th>
          ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
        </th>
        <th>
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "
        </th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 51
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "linkedOrders", [], "any", false, false, false, 51), "linkedOrders", [], "any", false, false, false, 51))) {
            // line 52
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["orderForViewing"] ?? null), "linkedOrders", [], "any", false, false, false, 52), "linkedOrders", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                // line 53
                echo "      <tr>
        <td>
          <a class=\"_blank\" href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
            ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 56), "html", null, true);
                echo "
          </a>
        </td>
        <td>
          ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "statusName", [], "any", false, false, false, 60), "html", null, true);
                echo "
        </td>
        <td>
          ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "amount", [], "any", false, false, false, 63), "html", null, true);
                echo "
        </td>
        <td>
          <a class=\"_blank\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => twig_get_attribute($this->env, $this->source, $context["linkedOrder"], "orderId", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">
            <i class=\"material-icons\">remove_red_eye</i>
            ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
          </a>
        </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "        ";
        }
        // line 73
        echo "      </tbody>
    </table>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 73,  129 => 72,  119 => 68,  114 => 66,  108 => 63,  102 => 60,  95 => 56,  91 => 55,  87 => 53,  82 => 52,  80 => 51,  71 => 45,  65 => 42,  59 => 39,  47 => 30,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig");
    }
}
