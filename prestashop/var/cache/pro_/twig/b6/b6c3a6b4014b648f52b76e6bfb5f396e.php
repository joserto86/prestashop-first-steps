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

/* @Modules/gsitemap/config.xml */
class __TwigTemplate_1535d7d8fd308913d22b17c8518df91a extends Template
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
    <name>gsitemap</name>
    <displayName><![CDATA[Google sitemap]]></displayName>
    <version><![CDATA[4.3.0]]></version>
    <description><![CDATA[Generate your Google sitemap file]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[seo]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/gsitemap/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/gsitemap/config.xml", "/var/www/html/modules/gsitemap/config.xml");
    }
}
