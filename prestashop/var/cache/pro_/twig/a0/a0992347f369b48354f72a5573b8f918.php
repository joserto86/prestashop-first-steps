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

/* @Modules/ps_banner/config.xml */
class __TwigTemplate_6b86d0f5fb8757c1c4e9602a9fc38c6c extends Template
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
    <name>ps_banner</name>
    <displayName><![CDATA[Banner]]></displayName>
    <version><![CDATA[2.1.2]]></version>
    <description><![CDATA[Displays a banner on your shop.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_banner/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_banner/config.xml", "/var/www/html/modules/ps_banner/config.xml");
    }
}
