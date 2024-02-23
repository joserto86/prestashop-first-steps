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

/* @Modules/dashproducts/config.xml */
class __TwigTemplate_d88cf2178d859fa7c61b7ed5886bb373 extends Template
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
\t<name>dashproducts</name>
\t<displayName><![CDATA[Dashboard Products]]></displayName>
\t<version><![CDATA[2.1.4]]></version>
\t<description><![CDATA[Adds a block with a table of your latest orders and a ranking of your products]]></description>
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
        return "@Modules/dashproducts/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/dashproducts/config.xml", "/var/www/html/modules/dashproducts/config.xml");
    }
}
