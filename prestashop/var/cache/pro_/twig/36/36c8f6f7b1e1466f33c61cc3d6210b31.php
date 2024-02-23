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

/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig */
class __TwigTemplate_8325bbb03038189adca0451992f4111c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'import_data_configuration_panel' => [$this, 'block_import_data_configuration_panel'],
            'import_modal' => [$this, 'block_import_modal'],
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<div class=\"row justify-content-center\">
  <div class=\"col-xl-10\">
    ";
        // line 32
        $this->displayBlock('import_data_configuration_panel', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('import_modal', $context, $blocks);
        // line 39
        echo "  </div>
</div>
";
    }

    // line 32
    public function block_import_data_configuration_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig", 33)->display($context);
        // line 34
        echo "    ";
    }

    // line 36
    public function block_import_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig", 37)->display($context);
        // line 38
        echo "    ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/imports_data.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  96 => 44,  92 => 43,  88 => 38,  85 => 37,  81 => 36,  77 => 34,  74 => 33,  70 => 32,  64 => 39,  62 => 36,  59 => 35,  57 => 32,  53 => 30,  49 => 29,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/index.html.twig");
    }
}
