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

/* @PrestaShop/Admin/Module/Includes/grid_loader.html.twig */
class __TwigTemplate_64d4919e67b04af65935d8f033d52f1a extends Template
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
        // line 26
        echo "<div class=\"module-placeholders-wrapper row\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "    <div class=\"timeline-item col-lg-6 col-xl-3\">
      <div class=\"timeline-item-wrapper\">
        <div class=\"animated-background\">
          <div class=\"background-masker header-top\"></div>
          <div class=\"background-masker header-left\"></div>
          <div class=\"background-masker header-right\"></div>
          <div class=\"background-masker header-bottom\"></div>
          <div class=\"background-masker subheader-left\"></div>
          <div class=\"background-masker subheader-right\"></div>
          <div class=\"background-masker subheader-bottom\"></div>
          <div class=\"background-masker content-top\"></div>
          <div class=\"background-masker content-first-end\"></div>
          <div class=\"background-masker content-second-line\"></div>
          <div class=\"background-masker content-second-end\"></div>
          <div class=\"background-masker content-third-line\"></div>
          <div class=\"background-masker content-third-end\"></div>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>

<div class=\"module-placeholders-failure\">
  <div class=\"module-placeholders-failure-wrapper\">
    <div class=\"module-placeholders-failure-msg\"></div>
    <button id=\"module-placeholders-failure-retry\" type=\"button\" class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 53,  69 => 48,  44 => 28,  40 => 27,  37 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/grid_loader.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_loader.html.twig");
    }
}
