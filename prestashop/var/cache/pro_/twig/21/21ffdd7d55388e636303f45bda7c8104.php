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

/* @Modules/blockreassurance/views/img/reassurance/pack1/local-shipping.svg */
class __TwigTemplate_2c9e62b132346e72fe38e0e3ce21f0b6 extends Template
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
    <title>pack1_ local-shipping</title>
    <desc>Created with Sketch.</desc>
    <g id=\"pack1_-local-shipping\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"baseline-local_shipping-24px\" transform=\"translate(2.000000, 11.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <path d=\"M56.3333333,12.3333333 L47.5833333,12.3333333 L47.5833333,0.666666667 L6.75,0.666666667 C3.54166667,0.666666667 0.916666667,3.29166667 0.916666667,6.5 L0.916666667,38.5833333 L6.75,38.5833333 C6.75,43.425 10.6583333,47.3333333 15.5,47.3333333 C20.3416667,47.3333333 24.25,43.425 24.25,38.5833333 L41.75,38.5833333 C41.75,43.425 45.6583333,47.3333333 50.5,47.3333333 C55.3416667,47.3333333 59.25,43.425 59.25,38.5833333 L65.0833333,38.5833333 L65.0833333,24 L56.3333333,12.3333333 Z M15.5,42.9583333 C13.0791667,42.9583333 11.125,41.0041667 11.125,38.5833333 C11.125,36.1625 13.0791667,34.2083333 15.5,34.2083333 C17.9208333,34.2083333 19.875,36.1625 19.875,38.5833333 C19.875,41.0041667 17.9208333,42.9583333 15.5,42.9583333 Z M54.875,16.7083333 L60.5916667,24 L47.5833333,24 L47.5833333,16.7083333 L54.875,16.7083333 Z M50.5,42.9583333 C48.0791667,42.9583333 46.125,41.0041667 46.125,38.5833333 C46.125,36.1625 48.0791667,34.2083333 50.5,34.2083333 C52.9208333,34.2083333 54.875,36.1625 54.875,38.5833333 C54.875,41.0041667 52.9208333,42.9583333 50.5,42.9583333 Z\" id=\"Shape\"></path>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/reassurance/pack1/local-shipping.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/reassurance/pack1/local-shipping.svg", "/var/www/html/modules/blockreassurance/views/img/reassurance/pack1/local-shipping.svg");
    }
}
