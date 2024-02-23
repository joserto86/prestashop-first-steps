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

/* @Modules/statsbestvouchers/CHANGELOG.txt */
class __TwigTemplate_6bb1387029595b49db409fed8c12a0cb extends Template
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
        echo "2014-03-27 17:17:34 +0100\t/ MO statsbestvouchers : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:42 +0100\t/ MO statsbestvouchers : ps_versions_compliancy added
2014-03-20 14:36:08 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsbestvouchers/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsbestvouchers/CHANGELOG.txt", "/var/www/html/modules/statsbestvouchers/CHANGELOG.txt");
    }
}
