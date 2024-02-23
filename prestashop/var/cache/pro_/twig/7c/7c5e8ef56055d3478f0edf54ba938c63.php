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

/* @PrestaShop/Admin/Module/Includes/categories_grid.html.twig */
class __TwigTemplate_73ddf21c7b045c63347432745a9829a1 extends Template
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
        echo "<div id=\"modules-categories-grid\">
  <div class=\"row\">
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->arrayCast(twig_get_attribute($this->env, $this->source, ($context["categories"] ?? null), "subMenu", [], "any", false, false, false, 27)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 28
            echo "      ";
            // line 29
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/categories_card.html.twig", "@PrestaShop/Admin/Module/Includes/categories_grid.html.twig", 29)->display(twig_array_merge($context, ["category" => $context["category"]]));
            // line 30
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/categories_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  63 => 30,  60 => 29,  58 => 28,  41 => 27,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/categories_grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/categories_grid.html.twig");
    }
}
