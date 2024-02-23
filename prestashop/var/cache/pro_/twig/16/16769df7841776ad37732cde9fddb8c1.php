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

/* @Modules/statsstock/config.xml */
class __TwigTemplate_ba477183e8c2fb2381a0bbc72bab2d43 extends Template
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
\t<name>statsstock</name>
\t<displayName><![CDATA[Available quantities]]></displayName>
\t<version><![CDATA[2.0.1]]></version>
\t<description><![CDATA[Adds a tab showing the quantity of available products for sale to the Stats dashboard.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[analytics_stats]]></tab>
\t<is_configurable>0</is_configurable>
\t<need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>";
    }

    public function getTemplateName()
    {
        return "@Modules/statsstock/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsstock/config.xml", "/var/www/html/modules/statsstock/config.xml");
    }
}
