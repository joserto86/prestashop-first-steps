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

/* @Modules/ps_supplierlist/config.xml */
class __TwigTemplate_462a3a8d8ac0e943d8af8eb19182e4fa extends Template
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
\t<name>ps_supplierlist</name>
\t<displayName><![CDATA[Supplier List]]></displayName>
\t<version><![CDATA[1.0.6]]></version>
\t<description><![CDATA[Adds a block with a list of your product suppliers on your shop.]]></description>
\t<author><![CDATA[PrestaShop]]></author>
\t<tab><![CDATA[front_office_features]]></tab>
\t<is_configurable>1</is_configurable>
\t<need_instance>0</need_instance>
\t<limited_countries></limited_countries>
</module>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_supplierlist/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_supplierlist/config.xml", "/var/www/html/modules/ps_supplierlist/config.xml");
    }
}
