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

/* @Modules/blockreassurance/views/img/reassurance/pack1/payment.svg */
class __TwigTemplate_50fd880e6e763f8133b90187d66d7119 extends Template
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
    <title>pack1_ payment</title>
    <desc>Created with Sketch.</desc>
    <g id=\"pack1_-payment\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"baseline-payment-24px\" transform=\"translate(5.000000, 11.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <path d=\"M53.3333333,0.666666667 L6.66666667,0.666666667 C3.42916667,0.666666667 0.8625,3.2625 0.8625,6.5 L0.833333333,41.5 C0.833333333,44.7375 3.42916667,47.3333333 6.66666667,47.3333333 L53.3333333,47.3333333 C56.5708333,47.3333333 59.1666667,44.7375 59.1666667,41.5 L59.1666667,6.5 C59.1666667,3.2625 56.5708333,0.666666667 53.3333333,0.666666667 Z M53.3333333,41.5 L6.66666667,41.5 L6.66666667,24 L53.3333333,24 L53.3333333,41.5 Z M53.3333333,12.3333333 L6.66666667,12.3333333 L6.66666667,6.5 L53.3333333,6.5 L53.3333333,12.3333333 Z\" id=\"Shape\"></path>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/reassurance/pack1/payment.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/reassurance/pack1/payment.svg", "/var/www/html/modules/blockreassurance/views/img/reassurance/pack1/payment.svg");
    }
}
