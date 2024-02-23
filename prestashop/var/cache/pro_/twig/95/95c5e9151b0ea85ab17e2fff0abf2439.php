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

/* @Modules/ps_featuredproducts/config.xml */
class __TwigTemplate_ea9dd90c63dae925dd21ff58665cbdd4 extends Template
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
    <name>ps_featuredproducts</name>
    <displayName><![CDATA[Featured products]]></displayName>
    <version><![CDATA[2.1.5]]></version>
    <description><![CDATA[Displays featured products in the central column of your homepage.]]></description>
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
        return "@Modules/ps_featuredproducts/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_featuredproducts/config.xml", "/var/www/html/modules/ps_featuredproducts/config.xml");
    }
}
