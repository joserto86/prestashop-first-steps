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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig */
class __TwigTemplate_14e43ec6450fcffdfe0150e8cfe5b477 extends Template
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
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">cloud_download</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Actions"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-success\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Beginning the download ...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </p>
      </div>
      <p>
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Backup files should automatically start downloading.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        ";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If not,[1][2] please click here[/1]!", ["[1]" => ((" <a href=\"" . twig_get_attribute($this->env, $this->source, ($context["downloadFile"] ?? null), "url", [], "any", false, false, false, 43)) . "\" class=\"btn btn-outline-primary btn-sm\">"), "[/1]" => "</a> ", "[2]" => "<i class=\"icon-download\"></i>"], "Admin.Advparameters.Notification");
        echo "
      </p>
      <p class=\"mb-0\">
        <a class=\"btn btn-outline-primary btn-sm\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backups_index");
        echo "\">
          <i class=\"material-icons\">keyboard_backspace</i>
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to list", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </p>
      <iframe src=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["downloadFile"] ?? null), "url", [], "any", false, false, false, 51), "html", null, true);
        echo "\" class=\"d-none\"></iframe>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 51,  85 => 48,  80 => 46,  74 => 43,  70 => 42,  63 => 38,  55 => 33,  50 => 30,  46 => 29,  35 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig");
    }
}
