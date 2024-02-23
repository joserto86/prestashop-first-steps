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

/* @Modules/gridhtml/config.xml */
class __TwigTemplate_39a564b1912a597d0605a4d3320b6b78 extends Template
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
\t<name>gridhtml</name>
\t<displayName><![CDATA[Simple HTML table display]]></displayName>
\t<version><![CDATA[2.0.3]]></version>
\t<description><![CDATA[Allows the statistics system to display data in a grid.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[administration]]></tab>
\t<is_configurable>0</is_configurable>
\t<need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/gridhtml/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/gridhtml/config.xml", "/var/www/html/modules/gridhtml/config.xml");
    }
}
