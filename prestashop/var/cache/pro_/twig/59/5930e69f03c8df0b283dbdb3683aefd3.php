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

/* @Modules/ps_facetedsearch/views/dist/front.css */
class __TwigTemplate_1fbc1e07f8c72257827430b2cf5ddd9e extends Template
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
        echo ".faceted-overlay{left:0;top:0;width:100%;height:100%;position:fixed;background-color:rgba(25,25,25,0.5);z-index:100}.faceted-overlay .overlay__inner{left:0;top:0;width:100%;height:100%;position:absolute}.faceted-overlay .overlay__content{left:50%;position:absolute;top:50%;transform:translate(-50%, -50%)}.faceted-overlay .spinner{width:75px;height:75px;display:inline-block;border-width:2px;border-color:rgba(255,255,255,0.05);border-top-color:#fff;animation:spin 1s infinite linear;border-radius:100%;border-style:solid}@keyframes spin{100%{transform:rotate(360deg)}}

#search_filters .ui-slider-horizontal .ui-slider-handle{margin-left:-1px;cursor:pointer}#search_filters .ui-widget-header{background:#555}#search_filters .ui-slider .ui-slider-handle{top:-.45em;width:0.4em;background:#fff;border:1px solid #555}#search_filters .ui-slider-horizontal{height:.4em}

#search_filters .facet .title{display:flex}#search_filters .facet .title .collapse-icons{margin-left:auto}#search_filters .facet .facet-title{width:calc(100% - 30px);overflow:hidden;text-overflow:ellipsis;white-space:nowrap}#search_filters .facet .facet-label{width:100%;text-align:left}#search_filters .facet .facet-label .custom-checkbox,#search_filters .facet .facet-label .custom-radio{top:-7px;margin-right:0}#search_filters .facet .facet-label .color{margin-left:0}#search_filters .facet .facet-label a{width:calc(100% - 30px);overflow:hidden;text-overflow:ellipsis;white-space:nowrap}


/*# sourceMappingURL=front.css.map*/";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/dist/front.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/views/dist/front.css", "/var/www/html/modules/ps_facetedsearch/views/dist/front.css");
    }
}
