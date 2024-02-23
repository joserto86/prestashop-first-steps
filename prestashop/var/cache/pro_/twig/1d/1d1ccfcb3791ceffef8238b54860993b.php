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

/* @Modules/graphnvd3/CHANGELOG.txt */
class __TwigTemplate_267ff3ccfea24b9ed45eda4355ab63ee extends Template
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
        echo "2014-04-22 18:58:39 +0200\t// Changelog updated
2014-04-17 11:58:28 +0200\t[-] MO : graphnvd3 - Fix 1.5 ps_version_compliancy issue
2014-03-24 15:21:45 +0100\t/ MO graphnvd3 : ps_versions_compliancy added
2014-03-20 14:33:52 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/graphnvd3/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/graphnvd3/CHANGELOG.txt", "/var/www/html/modules/graphnvd3/CHANGELOG.txt");
    }
}
