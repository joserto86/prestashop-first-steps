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

/* @Modules/ps_wirepayment/config.xml */
class __TwigTemplate_b8654d8d002e95a0f83d2851f83ee347 extends Template
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
\t<name>ps_wirepayment</name>
\t<displayName><![CDATA[Wire payment]]></displayName>
\t<version><![CDATA[2.1.3]]></version>
\t<description><![CDATA[Accept payments by bank transfer.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[payments_gateways]]></tab>
\t<confirmUninstall><![CDATA[Are you sure about removing these details?]]></confirmUninstall>
\t<is_configurable>1</is_configurable>
\t<need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_wirepayment/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_wirepayment/config.xml", "/var/www/html/modules/ps_wirepayment/config.xml");
    }
}
