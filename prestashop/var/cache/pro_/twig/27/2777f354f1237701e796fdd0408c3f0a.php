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

/* @Modules/blockreassurance/views/img/reassurance/pack1/lock.svg */
class __TwigTemplate_0eb545329d0cfbb8d290c738311cff50 extends Template
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
        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<svg width=\"70px\" height=\"70px\" viewBox=\"0 0 70 70\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>pack1_ lock</title>
    <desc>Created with Sketch.</desc>
    <g id=\"pack1_-lock\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"baseline-lock-24px\" transform=\"translate(11.000000, 2.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <path d=\"M41.5,21.3333333 L38.5833333,21.3333333 L38.5833333,15.5 C38.5833333,7.45 32.05,0.916666667 24,0.916666667 C15.95,0.916666667 9.41666667,7.45 9.41666667,15.5 L9.41666667,21.3333333 L6.5,21.3333333 C3.29166667,21.3333333 0.666666667,23.9583333 0.666666667,27.1666667 L0.666666667,56.3333333 C0.666666667,59.5416667 3.29166667,62.1666667 6.5,62.1666667 L41.5,62.1666667 C44.7083333,62.1666667 47.3333333,59.5416667 47.3333333,56.3333333 L47.3333333,27.1666667 C47.3333333,23.9583333 44.7083333,21.3333333 41.5,21.3333333 Z M24,47.5833333 C20.7916667,47.5833333 18.1666667,44.9583333 18.1666667,41.75 C18.1666667,38.5416667 20.7916667,35.9166667 24,35.9166667 C27.2083333,35.9166667 29.8333333,38.5416667 29.8333333,41.75 C29.8333333,44.9583333 27.2083333,47.5833333 24,47.5833333 Z M33.0416667,21.3333333 L14.9583333,21.3333333 L14.9583333,15.5 C14.9583333,10.5125 19.0125,6.45833333 24,6.45833333 C28.9875,6.45833333 33.0416667,10.5125 33.0416667,15.5 L33.0416667,21.3333333 Z\" id=\"Shape\"></path>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/reassurance/pack1/lock.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/reassurance/pack1/lock.svg", "/var/www/html/modules/blockreassurance/views/img/reassurance/pack1/lock.svg");
    }
}