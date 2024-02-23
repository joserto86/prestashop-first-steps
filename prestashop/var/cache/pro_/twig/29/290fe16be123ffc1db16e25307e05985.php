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

/* @Modules/ps_categoryproducts/config.xml */
class __TwigTemplate_b3c1cf43b686748efa89ce4fb5e6948d extends Template
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
    <name>ps_categoryproducts</name>
    <displayName><![CDATA[Products category]]></displayName>
    <version><![CDATA[1.0.7]]></version>
    <description><![CDATA[Displays products of the same category on the product page.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
  <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_categoryproducts/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_categoryproducts/config.xml", "/var/www/html/modules/ps_categoryproducts/config.xml");
    }
}
