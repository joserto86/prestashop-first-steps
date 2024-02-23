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

/* @Modules/ps_themecusto/config.xml */
class __TwigTemplate_0a0b248ad9783d65821f0d5b83fef778 extends Template
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
    <name>ps_themecusto</name>
    <displayName><![CDATA[Theme Customization]]></displayName>
    <version><![CDATA[1.2.3]]></version>
    <description><![CDATA[Easily configure and customize your homepage&rsquo;s theme and main native modules. Feature available on Design &gt; Theme &amp; Logo page.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[]]></tab>
    <is_configurable>0</is_configurable>
    <need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/config.xml", "/var/www/html/modules/ps_themecusto/config.xml");
    }
}
