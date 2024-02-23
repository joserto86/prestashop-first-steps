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

/* @Modules/statsproduct/config.xml */
class __TwigTemplate_e6ad72e08a85c3940cb22733f9f4d1da extends Template
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
\t<name>statsproduct</name>
\t<displayName><![CDATA[Product details]]></displayName>
\t<version><![CDATA[2.1.3]]></version>
\t<description><![CDATA[Adds detailed statistics for each product to the Stats dashboard.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[analytics_stats]]></tab>
\t<is_configurable>0</is_configurable>
\t<need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/statsproduct/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsproduct/config.xml", "/var/www/html/modules/statsproduct/config.xml");
    }
}
