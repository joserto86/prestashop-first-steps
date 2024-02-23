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

/* @Modules/statscarrier/CHANGELOG.txt */
class __TwigTemplate_942eb55514bf337660ce42ce5a14e491 extends Template
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
        echo "2014-03-27 17:17:58 +0100\t/ MO statscarrier : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:43 +0100\t/ MO statscarrier : ps_versions_compliancy added
2014-03-20 14:36:21 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/statscarrier/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statscarrier/CHANGELOG.txt", "/var/www/html/modules/statscarrier/CHANGELOG.txt");
    }
}
