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

/* @PrestaShop/Admin/Module/Includes/card_list_addons.html.twig */
class __TwigTemplate_81b9acbc39c60dea8a7cb535ddd6785e extends Template
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
        echo "<div class=\"module-item-list module-addons-item-list col-md-12\">
    <div class=\"container-fluid\">
        <div class=\"module-addons-item-wrapper-list\">
          <span class=\"module-icon-addons-exit-list\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/preston.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exit to PrestaShop Addons Marketplace", [], "Admin.Modules.Feature"), "html", null, true);
        echo "\" />
          </span>
          ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See all results for your search on", [], "Admin.Modules.Feature"), "html", null, true);
        echo "<br/>
          <a class=\"url\" href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop Addons Marketplace", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_list_addons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 32,  50 => 31,  43 => 29,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/card_list_addons.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_list_addons.html.twig");
    }
}
