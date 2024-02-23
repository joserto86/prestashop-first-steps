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

/* @Modules/ps_socialfollow/config.xml */
class __TwigTemplate_9fe3afe65e2d7c3a7ae9dde606dfbd5f extends Template
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
    <name>ps_socialfollow</name>
    <displayName><![CDATA[Social media follow links]]></displayName>
    <version><![CDATA[2.3.0]]></version>
    <description><![CDATA[Allows you to add information about your brand&#039;s social networking accounts.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>1</need_instance>
    <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_socialfollow/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_socialfollow/config.xml", "/var/www/html/modules/ps_socialfollow/config.xml");
    }
}
