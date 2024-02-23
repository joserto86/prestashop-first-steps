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

/* @PrestaShop/Admin/Sell/CustomerService/OrderMessage/Blocks/form.html.twig */
class __TwigTemplate_29f1940bd87706254605e6f7bb70f84f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_message_form_widget' => [$this, 'block_order_message_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["orderMessageForm"] ?? null), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderMessageForm"] ?? null), 'form_start');
        echo "
  <div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order messages", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderMessageForm"] ?? null), 'errors');
        echo "
      ";
        // line 37
        $this->displayBlock('order_message_form_widget', $context, $blocks);
        // line 40
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_messages_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">
      ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderMessageForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 37
    public function block_order_message_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderMessageForm"] ?? null), 'widget');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/OrderMessage/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  94 => 37,  88 => 51,  81 => 47,  75 => 44,  71 => 43,  66 => 40,  64 => 37,  60 => 36,  53 => 32,  46 => 28,  43 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/CustomerService/OrderMessage/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/OrderMessage/Blocks/form.html.twig");
    }
}
