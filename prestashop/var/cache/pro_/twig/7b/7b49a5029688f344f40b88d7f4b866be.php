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

/* @Modules/ps_facetedsearch/config.xml */
class __TwigTemplate_65515ce38c6442e28c17810d2f6309a1 extends Template
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
    <name>ps_facetedsearch</name>
    <displayName><![CDATA[Faceted search]]></displayName>
    <version><![CDATA[3.14.1]]></version>
    <description><![CDATA[Displays a block allowing multiple filters.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[front_office_features]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
    <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/config.xml", "/var/www/html/modules/ps_facetedsearch/config.xml");
    }
}
