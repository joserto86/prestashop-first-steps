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

/* @Modules/ps_faviconnotificationbo/config.xml */
class __TwigTemplate_f4c23cc83f9dc66e33f602caa4752295 extends Template
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
    <name>ps_faviconnotificationbo</name>
    <displayName><![CDATA[Order Notifications on the Favicon]]></displayName>
    <version><![CDATA[2.1.3]]></version>
    <description><![CDATA[Get notified directly on your browser tab each time you get a new order, customer or message.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[administration]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
    <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_faviconnotificationbo/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_faviconnotificationbo/config.xml", "/var/www/html/modules/ps_faviconnotificationbo/config.xml");
    }
}
