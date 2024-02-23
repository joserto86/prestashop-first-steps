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

/* @Modules/statsregistrations/CHANGELOG.txt */
class __TwigTemplate_5d938ed83c92d8b548b19bcf68a67727 extends Template
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
        echo "2014-03-27 17:21:10 +0100\t/ MO statsregistrations : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:53 +0100\t/ MO statsregistrations : ps_versions_compliancy added
2014-03-20 14:37:29 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsregistrations/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsregistrations/CHANGELOG.txt", "/var/www/html/modules/statsregistrations/CHANGELOG.txt");
    }
}
