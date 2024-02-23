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

/* @Modules/blockreassurance/views/img/ITIcons/pack2_security.svg */
class __TwigTemplate_ddf0b5619b3a8058a1e7b64c7a0498b2 extends Template
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
<svg width=\"90px\" height=\"123px\" viewBox=\"0 0 90 123\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: sketchtool 53.2 (72643) - https://sketchapp.com -->
    <title>917A204E-A368-41D3-A057-AB6D58156CD6</title>
    <desc>Created with sketchtool.</desc>
    <g id=\"Mockups\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Reassurance-Images-Themes---Free\" transform=\"translate(-571.000000, -1047.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <g id=\"IT-Icons\" transform=\"translate(20.000000, 640.000000)\">
                <path d=\"M579.754401,455 L579.754401,435.181879 L579.757728,435.052945 C580.316112,424.240346 586.090117,418.407227 596.384388,418.407227 C606.696694,418.407227 612.390936,424.267591 612.754401,435.181879 L612.754401,455 L620.206384,455 L620.207618,435.487542 C619.653741,419.770286 612.016934,412.314453 596.5,412.314453 C580.986909,412.314453 573.177971,419.77693 572.302734,435.468319 L572.302734,455 L579.754401,455 Z M584.754401,455 L607.754722,455 L607.755797,435.265406 C607.481603,427.063297 603.92917,423.407227 596.384388,423.407227 C588.840953,423.407227 585.194297,427.071689 584.754401,435.247707 L584.754401,455 Z M567.302734,455 L567.302734,435.399497 L567.306431,435.263601 C568.306807,416.887407 578.295912,407.314453 596.5,407.314453 C614.722332,407.314453 624.556236,416.915316 625.206067,435.399497 L625.206067,455 L636,455 C638.761424,455 641,457.238576 641,460 L641,525 C641,527.761424 638.761424,530 636,530 L556,530 C553.238576,530 551,527.761424 551,525 L551,460 C551,457.238576 553.238576,455 556,455 L567.302734,455 Z M557,461 L557,524 L635,524 L635,461 L557,461 Z M596,512 C585.50659,512 577,503.49341 577,493 C577,482.50659 585.50659,474 596,474 C606.49341,474 615,482.50659 615,493 C615,503.49341 606.49341,512 596,512 Z M596,507.043478 C603.755999,507.043478 610.043478,500.755999 610.043478,493 C610.043478,485.244001 603.755999,478.956522 596,478.956522 C588.244001,478.956522 581.956522,485.244001 581.956522,493 C581.956522,500.755999 588.244001,507.043478 596,507.043478 Z M586.673246,503.326754 C584.392675,500.849329 583,497.541848 583,493.909091 C583,486.227312 589.227312,480 596.909091,480 C600.541848,480 603.849329,481.392675 606.326754,483.673246 C608.607325,486.150671 610,489.458152 610,493.090909 C610,500.772688 603.772688,507 596.090909,507 C592.458152,507 589.150671,505.607325 586.673246,503.326754 Z M587.717192,495.05459 L589.021494,496.432026 C590.0536,497.520802 591.134342,498.637614 592.204352,499.718915 C592.56691,500.116528 593.10824,500.339491 593.682913,500.327905 C593.763359,500.310806 593.852219,500.330291 593.934494,500.312803 C594.301436,500.230418 594.631901,500.037234 594.872176,499.76465 C598.215752,495.860303 601.556889,491.956474 604.854266,488.023574 C605.17204,487.684269 605.336776,487.248579 605.312987,486.810357 C605.251193,486.415906 605.025405,486.064257 604.682636,485.82863 C604.329635,485.582137 603.876534,485.483874 603.429592,485.556883 C602.98265,485.629893 602.581183,485.867753 602.319342,486.214683 C601.946611,486.642751 601.540398,487.111076 601.167195,487.53692 C600.996803,487.727209 600.834688,487.956438 600.623481,488.152496 L593.563127,496.387033 C593.459033,496.292879 593.402102,496.228816 593.298736,496.135088 C592.922682,495.753386 592.594656,495.399849 592.217993,495.018277 C591.465887,494.254874 590.705249,493.45433 589.912309,492.699606 C589.642206,492.392536 589.240549,492.20821 588.804528,492.19123 C588.368506,492.174249 587.937846,492.326161 587.616753,492.610208 C586.914627,493.174003 586.785643,494.125316 587.321298,494.789317 C587.47123,494.853307 587.605563,494.943318 587.717192,495.05459 Z\" id=\"pack2_security\"></path>
            </g>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/ITIcons/pack2_security.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/ITIcons/pack2_security.svg", "/var/www/html/modules/blockreassurance/views/img/ITIcons/pack2_security.svg");
    }
}