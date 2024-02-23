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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig */
class __TwigTemplate_8c734110b769f925439901139185e51e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig", 29)->display($context);
        // line 30
        echo "
  ";
        // line 31
        $context["employeeProfileId"] = twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "employeeProfileId", [], "any", false, false, false, 31);
        // line 32
        echo "  ";
        $context["profilePermissionsForModules"] = twig_get_attribute($this->env, $this->source, ($context["configurablePermissions"] ?? null), "profilePermissionsForModules", [], "any", false, false, false, 32);
        // line 33
        echo "
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-2\">
      ";
        // line 36
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig", 36)->display($context);
        // line 37
        echo "    </div>
    <div class=\"col-lg-10\">
      ";
        // line 39
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig", 39)->display($context);
        // line 40
        echo "    </div>
  </div>
";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/permissions" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/permission.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 52,  101 => 50,  97 => 49,  91 => 46,  86 => 45,  82 => 44,  76 => 40,  74 => 39,  70 => 37,  68 => 36,  63 => 33,  60 => 32,  58 => 31,  55 => 30,  52 => 29,  48 => 28,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Permission/index.html.twig");
    }
}
