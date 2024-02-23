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

/* @Modules/ps_contactinfo/config.xml */
class __TwigTemplate_001cd663d4a0225384dae341796855a5 extends Template
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
\t<name>ps_contactinfo</name>
\t<displayName><![CDATA[Contact information]]></displayName>
\t<version><![CDATA[3.3.2]]></version>
\t<description><![CDATA[Allows you to display additional information about your store&#039;s customer service.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[front_office_features]]></tab>
\t<is_configurable>1</is_configurable>
\t<need_instance>1</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_contactinfo/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_contactinfo/config.xml", "/var/www/html/modules/ps_contactinfo/config.xml");
    }
}
