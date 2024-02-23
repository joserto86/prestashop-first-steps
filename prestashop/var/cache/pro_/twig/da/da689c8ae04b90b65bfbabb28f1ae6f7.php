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

/* @Modules/dashactivity/config.xml */
class __TwigTemplate_3cb647dcdc5c6db583744c94b61f8d49 extends Template
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
\t<name>dashactivity</name>
\t<displayName><![CDATA[Dashboard Activity]]></displayName>
\t<version><![CDATA[2.1.0]]></version>
\t<description><![CDATA[]]></description>
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
        return "@Modules/dashactivity/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/dashactivity/config.xml", "/var/www/html/modules/dashactivity/config.xml");
    }
}
