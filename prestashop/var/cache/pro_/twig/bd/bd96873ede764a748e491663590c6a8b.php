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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig */
class __TwigTemplate_061a608bdacf5ae3af607e8e24d529ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'keyword' => [$this, 'block_keyword'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('keyword', $context, $blocks);
    }

    public function block_keyword($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["routeKeywords"] ?? null), ($context["idRoute"] ?? null), [], "array", true, true, false, 27)) {
            // line 28
            echo "    ";
            $context["formattedKeywords"] = [];
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["routeKeywords"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["idRoute"] ?? null)] ?? null) : null));
            foreach ($context['_seq'] as $context["keyword"] => $context["value"]) {
                // line 30
                echo "      ";
                ob_start(function () { return ''; });
                // line 31
                echo "        ";
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                if (twig_get_attribute($this->env, $this->source, $context["value"], "param", [], "array", true, true, false, 31)) {
                    echo "*";
                }
                // line 32
                echo "      ";
                $context["formattedKeyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 33
                echo "
      ";
                // line 34
                $context["formattedKeywords"] = twig_array_merge(($context["formattedKeywords"] ?? null), [0 => ($context["formattedKeyword"] ?? null)]);
                // line 35
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['keyword'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
    ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keywords: %keywords%", ["%keywords%" => twig_join_filter(($context["formattedKeywords"] ?? null), ", ")], "Admin.Shopparameters.Feature"), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 37,  82 => 36,  76 => 35,  74 => 34,  71 => 33,  68 => 32,  62 => 31,  59 => 30,  54 => 29,  51 => 28,  48 => 27,  41 => 26,  38 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/keyword.html.twig");
    }
}
