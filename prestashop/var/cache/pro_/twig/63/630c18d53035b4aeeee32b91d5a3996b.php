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

/* @Modules/dashtrends/config.xml */
class __TwigTemplate_5f4a03f4894cc5a05926845ff7ea23b2 extends Template
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
\t<name>dashtrends</name>
\t<displayName><![CDATA[Dashboard Trends]]></displayName>
\t<version><![CDATA[2.1.3]]></version>
\t<description><![CDATA[Adds a block whith the evolution of your stores main numbers along with a graphic.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[dashboard]]></tab>
\t<is_configurable>0</is_configurable>
\t<need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/dashtrends/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/dashtrends/config.xml", "/var/www/html/modules/dashtrends/config.xml");
    }
}
