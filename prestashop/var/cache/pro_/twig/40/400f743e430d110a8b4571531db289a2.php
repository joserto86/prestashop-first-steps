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

/* @Modules/statsbestcustomers/CHANGELOG.txt */
class __TwigTemplate_b5c6baeb86217bb19b6d04b9f84adf29 extends Template
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
        echo "2014-03-31 12:12:00 +0200\t// Typo.
2014-03-27 17:16:48 +0100\t/ MO statsbestcustomers : min ps_versions_compliancy modified (1.5.6.1 => 1.6)
2014-03-24 15:22:38 +0100\t/ MO statsbestcustomers : ps_versions_compliancy added
2014-03-20 14:35:57 +0100\tInitial commit
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsbestcustomers/CHANGELOG.txt";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsbestcustomers/CHANGELOG.txt", "/var/www/html/modules/statsbestcustomers/CHANGELOG.txt");
    }
}
