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

/* @Modules/dashproducts/CHANGELOG.txt */
class __TwigTemplate_1fc666d4ac0fc66be47ec5b239e84075 extends Template
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
        echo "2014-04-22 18:58:19 +0200\t// Changelog updated
2014-03-24 15:21:15 +0100\t/ MO dashproducts : ps_versions_compliancy added
2014-03-20 14:32:28 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/dashproducts/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/dashproducts/CHANGELOG.txt", "/var/www/html/modules/dashproducts/CHANGELOG.txt");
    }
}
