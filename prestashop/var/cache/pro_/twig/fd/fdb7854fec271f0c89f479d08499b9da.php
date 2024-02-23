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

/* @Modules/ps_checkpayment/config.xml */
class __TwigTemplate_9b4a75a6f7c2031d70f8e926ec243bfa extends Template
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
\t<name>ps_checkpayment</name>
\t<displayName><![CDATA[Check payment]]></displayName>
\t<version><![CDATA[2.1.0]]></version>
\t<description><![CDATA[This module allows you to accept payments by check.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[payments_gateways]]></tab>
\t<confirmUninstall>Are you sure you want to delete these details?</confirmUninstall>
\t<is_configurable>1</is_configurable>
\t<need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_checkpayment/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_checkpayment/config.xml", "/var/www/html/modules/ps_checkpayment/config.xml");
    }
}
