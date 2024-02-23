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

/* @Modules/statsbestcustomers/config.xml */
class __TwigTemplate_6d8c9d32023fdd692a32d158442a9cb8 extends Template
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
\t<name>statsbestcustomers</name>
\t<displayName><![CDATA[Best customers]]></displayName>
\t<version><![CDATA[2.0.4]]></version>
\t<description><![CDATA[Adds a list of the best customers to the Stats dashboard.]]></description>
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
        return "@Modules/statsbestcustomers/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsbestcustomers/config.xml", "/var/www/html/modules/statsbestcustomers/config.xml");
    }
}
