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

/* @Modules/ps_googleanalytics/config.xml */
class __TwigTemplate_4807aa22664fb6b92b93eb3e74caea93 extends Template
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
\t<name>ps_googleanalytics</name>
\t<displayName><![CDATA[Google Analytics]]></displayName>
\t<version><![CDATA[4.2.2]]></version>
\t<description><![CDATA[Gain clear insights into important metrics about your customers, using Google Analytics]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[analytics_stats]]></tab>
\t<confirmUninstall><![CDATA[Are you sure you want to uninstall Google Analytics? You will lose all the data related to this module.]]></confirmUninstall>
\t<is_configurable>1</is_configurable>
\t<need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/config.xml", "/var/www/html/modules/ps_googleanalytics/config.xml");
    }
}
