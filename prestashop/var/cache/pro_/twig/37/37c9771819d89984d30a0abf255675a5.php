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

/* @Modules/blockreassurance/views/dist/front.css */
class __TwigTemplate_d426bc5989b76774f4d4fe33778418c8 extends Template
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
        echo ".blockreassurance{padding-top:10px;text-align:center;width:100%}.blockreassurance .reass-item{display:inline-block;text-align:center;vertical-align:top}.blockreassurance .block-title{font-weight:bold}.blockreassurance .block-icon,.blockreassurance .block-icon img,.blockreassurance .block-icon svg{height:70px}@media (max-width: 575px){.blockreassurance{text-align:left}.blockreassurance .block-icon{display:inline-block;height:35px;float:left;margin:10px;width:35px}.blockreassurance .block-icon img,.blockreassurance .block-icon svg{height:35px;width:35px}.blockreassurance .block-title{display:inline-block;height:35px;max-width:calc(100% - 55px);padding-top:10px}}.blockreassurance_product{margin-top:25px}.blockreassurance_product .item-product{display:inline-block;height:35px;float:left;margin-right:5px;padding-top:5px;width:35px}.blockreassurance_product .item-product img,.blockreassurance_product .item-product svg{height:35px;width:35px}.blockreassurance_product p.block-title{line-height:40px}body#checkout .container-blockreassurance{min-height:auto}


/*# sourceMappingURL=front.css.map*/";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/dist/front.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/dist/front.css", "/var/www/html/modules/blockreassurance/views/dist/front.css");
    }
}
