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

/* @Modules/ps_dataprivacy/config.xml */
class __TwigTemplate_3750ae0e1ad9fc58732e0b8d5a6cdf82 extends Template
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
\t<name>ps_dataprivacy</name>
\t<displayName><![CDATA[Customer data privacy block]]></displayName>
\t<version><![CDATA[2.1.1]]></version>
\t<description><![CDATA[Adds a block displaying your data privacy policy for more transparency and reassurance.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<is_configurable>1</is_configurable>
\t<need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_dataprivacy/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_dataprivacy/config.xml", "/var/www/html/modules/ps_dataprivacy/config.xml");
    }
}
