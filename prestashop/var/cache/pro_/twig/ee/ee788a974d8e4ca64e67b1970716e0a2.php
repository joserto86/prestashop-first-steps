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

/* @Modules/ps_facetedsearch/img/icon/more.gif */
class __TwigTemplate_0e17a569be963f9c4138eb559a68d200 extends Template
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
        echo "GIF89a\t\000\t\000€\0007HTÿÿÿ!ù\000\000\000,\000\000\000\000\t\000\t\000\000„¡¶ð ’
\"KsŽ,ÞS\000\000;";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/img/icon/more.gif";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/img/icon/more.gif", "/var/www/html/modules/ps_facetedsearch/img/icon/more.gif");
    }
}
