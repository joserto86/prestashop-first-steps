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

/* @Modules/ps_mainmenu/config.xml */
class __TwigTemplate_b07929660e8b8ec4b0f32ab975f0e742 extends Template
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
\t<name>ps_mainmenu</name>
\t<displayName><![CDATA[Main menu]]></displayName>
\t<version><![CDATA[2.3.2]]></version>
\t<description><![CDATA[Adds a new menu to the top of your e-commerce website.]]></description>
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
        return "@Modules/ps_mainmenu/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_mainmenu/config.xml", "/var/www/html/modules/ps_mainmenu/config.xml");
    }
}
