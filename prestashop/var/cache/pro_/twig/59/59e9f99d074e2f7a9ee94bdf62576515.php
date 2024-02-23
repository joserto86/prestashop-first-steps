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

/* @Modules/statsbestcategories/CHANGELOG.txt */
class __TwigTemplate_71ee2f4d37bdeaa51820e200242f21cf extends Template
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
        echo "2014-03-27 17:16:31 +0100\t/ MO statsbestcategories : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:36 +0100\t/ MO statsbestcategories : ps_versions_compliancy added
2014-03-20 14:35:55 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsbestcategories/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsbestcategories/CHANGELOG.txt", "/var/www/html/modules/statsbestcategories/CHANGELOG.txt");
    }
}
