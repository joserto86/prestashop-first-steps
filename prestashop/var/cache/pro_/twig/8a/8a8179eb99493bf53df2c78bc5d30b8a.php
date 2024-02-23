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

/* @Modules/ps_emailsubscription/config.xml */
class __TwigTemplate_448e81929e43d20d5b2f6952dab59c1e extends Template
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
    <name>ps_emailsubscription</name>
    <displayName><![CDATA[E-mail subscription form]]></displayName>
    <version><![CDATA[2.7.1]]></version>
    <description><![CDATA[Adds a block for newsletter subscription.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <confirmUninstall><![CDATA[Are you sure that you want to delete all of your contacts?]]></confirmUninstall>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
    <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailsubscription/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailsubscription/config.xml", "/var/www/html/modules/ps_emailsubscription/config.xml");
    }
}
