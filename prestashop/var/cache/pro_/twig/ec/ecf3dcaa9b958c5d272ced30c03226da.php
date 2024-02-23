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

/* @PrestaShop/Admin/Exception/not_found.html.twig */
class __TwigTemplate_043d2de73c5f9c1e72478cd6f759b575 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/base.html.twig", "@PrestaShop/Admin/Exception/not_found.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/theme" . ($context["rtl_suffix"] ?? null)) . ".css")), "html", null, true);
        echo "\"/>
";
    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  <div class=\"container\">
    <div class=\"mt-5\">
      <div class=\"card\">
        <div class=\"card-body text-center\">
          <img class=\"img-responsive\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/error/500.svg"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "\">

          <div class=\"mt-3\">
            <p class=\"error-header\">
              ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The object cannot be loaded (or found).", [], "Admin.Notifications.Error"), "html", null, true);
        echo "
            </p>

            ";
        // line 49
        if ((array_key_exists("exception", $context) && ($context["exception"] ?? null))) {
            // line 50
            echo "              <div class=\"mx-auto\">
                <p class=\"mb-0\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 51), "html", null, true);
            echo "</p>
                ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", true, true, false, 52) || twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "code", [], "any", true, true, false, 52))) {
                // line 53
                echo "                  <p class=\"mb-0\">[";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", true, true, false, 53)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", [], "any", false, false, false, 53), "Exception")) : ("Exception")), "html", null, true);
                echo "
                    ";
                // line 54
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "code", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "code", [], "any", false, false, false, 54), 0)) : (0)), "html", null, true);
                echo "]</p>
                ";
            }
            // line 56
            echo "              </div>
            ";
        }
        // line 58
        echo "
            ";
        // line 59
        if (array_key_exists("errorMessage", $context)) {
            // line 60
            echo "              <div class=\"mx-auto\">
                <p class=\"mb-0\">";
            // line 61
            echo twig_escape_filter($this->env, ($context["errorMessage"] ?? null), "html", null, true);
            echo "</p>
              </div>
            ";
        }
        // line 64
        echo "
            <div class=\"mt-4\">
              <form action=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_errors_enable_debug_mode");
        echo "\" method=\"post\" class=\"d-inline\">
                <input type=\"hidden\" name=\"_redirect_url\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "requestUri", [], "any", false, false, false, 67), "html", null, true);
        echo "\">

                <button class=\"btn btn-outline-secondary\" type=\"submit\">
                  ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable debug mode", [], "Admin.Actions"), "html", null, true);
        echo "
                </button>
              </form>
              <button class=\"btn btn-primary js-go-back-btn ml-3\" type=\"button\">
                ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to previous page", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>

            <p class=\"mt-3\">
              <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getFunction('documentation_link')->getCallable()("debug_mode"), "html", null, true);
        echo "\" target=\"_blank\">
                ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more about debug mode", [], "Admin.Actions"), "html", null, true);
        echo "
                <i class=\"material-icons rtl-flip\">arrow_right_alt</i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 91
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/error.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Exception/not_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 92,  186 => 91,  172 => 80,  168 => 79,  160 => 74,  153 => 70,  147 => 67,  143 => 66,  139 => 64,  133 => 61,  130 => 60,  128 => 59,  125 => 58,  121 => 56,  116 => 54,  111 => 53,  109 => 52,  105 => 51,  102 => 50,  100 => 49,  94 => 46,  85 => 42,  79 => 38,  75 => 37,  68 => 34,  64 => 33,  58 => 30,  53 => 29,  49 => 28,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Exception/not_found.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Exception/not_found.html.twig");
    }
}
