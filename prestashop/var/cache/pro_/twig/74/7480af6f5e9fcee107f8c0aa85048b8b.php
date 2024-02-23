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

/* @Modules/contactform/config.xml */
class __TwigTemplate_91a2e994ab6953fe0789b4a91ee5b7a1 extends Template
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
    <name>contactform</name>
    <displayName><![CDATA[Contact form]]></displayName>
    <version><![CDATA[4.4.1]]></version>
    <description><![CDATA[Adds a contact form to the \"Contact us\" page.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[front_office_features]]></tab>
    <is_configurable>0</is_configurable>
    <need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/contactform/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/contactform/config.xml", "/var/www/html/modules/contactform/config.xml");
    }
}
