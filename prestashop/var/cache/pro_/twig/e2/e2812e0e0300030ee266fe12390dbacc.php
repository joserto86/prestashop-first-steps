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

/* @Modules/statsbestcategories/config.xml */
class __TwigTemplate_a40724ea98fbab945059670f4c5a47f3 extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<module>
    <name>statsbestcategories</name>
    <displayName><![CDATA[Best categories]]></displayName>
    <version><![CDATA[2.0.1]]></version>
    <description><![CDATA[Adds a list of the best categories to the Stats dashboard.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[analytics_stats]]></tab>
    <is_configurable>0</is_configurable>
    <need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsbestcategories/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsbestcategories/config.xml", "/var/www/html/modules/statsbestcategories/config.xml");
    }
}
