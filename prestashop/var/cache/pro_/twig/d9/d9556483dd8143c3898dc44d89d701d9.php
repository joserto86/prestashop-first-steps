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

/* @Modules/blockwishlist/config.xml */
class __TwigTemplate_c7e60ba7d837a34a3ed5dfc00fa95a4a extends Template
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
    <name>blockwishlist</name>
    <displayName><![CDATA[Wishlist block]]></displayName>
    <version><![CDATA[3.0.1]]></version>
    <description><![CDATA[Adds a block containing the customer&#039;s wishlists.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[front_office_features]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>0</need_instance>
    <limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/config.xml", "/var/www/html/modules/blockwishlist/config.xml");
    }
}
