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

/* @Modules/ps_cashondelivery/config.xml */
class __TwigTemplate_a7cdf57043bada741196960218cdbab3 extends Template
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
<name>ps_cashondelivery</name>
    <displayName><![CDATA[Cash on delivery (COD)]]></displayName>
    <version><![CDATA[2.0.1]]></version>
    <description><![CDATA[Accept cash payments on delivery to make it easy for customers to purchase on your store.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <is_configurable>0</is_configurable>
    <need_instance>1</need_instance>
    <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_cashondelivery/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_cashondelivery/config.xml", "/var/www/html/modules/ps_cashondelivery/config.xml");
    }
}
