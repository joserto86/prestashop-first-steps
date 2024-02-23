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

/* @Modules/ps_distributionapiclient/config.xml */
class __TwigTemplate_f320064b7a195e32ba0a2dbcd8c9dcea extends Template
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
    <name>ps_distributionapiclient</name>
    <displayName><![CDATA[Distribution API Client]]></displayName>
    <version><![CDATA[1.1.0]]></version>
    <description><![CDATA[Download and upgrade PrestaShop&#039;s native modules.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[market_place]]></tab>
    <is_configurable>0</is_configurable>
    <need_instance>1</need_instance>
</module>";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_distributionapiclient/config.xml", "/var/www/html/modules/ps_distributionapiclient/config.xml");
    }
}
