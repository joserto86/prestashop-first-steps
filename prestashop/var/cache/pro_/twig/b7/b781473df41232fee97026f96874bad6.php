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

/* @Modules/ps_emailalerts/config.xml */
class __TwigTemplate_3d56fe604916de626aa7e21abbf8341c extends Template
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
\t<name>ps_emailalerts</name>
\t<displayName><![CDATA[Mail alerts]]></displayName>
\t<version><![CDATA[2.4.2]]></version>
\t<description><![CDATA[Sends e-mail notifications to customers and merchants regarding stock and order modifications.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[administration]]></tab>
\t<confirmUninstall>Are you sure you want to delete all customer notifications?</confirmUninstall>
\t<is_configurable>1</is_configurable>
\t<need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/config.xml", "/var/www/html/modules/ps_emailalerts/config.xml");
    }
}
