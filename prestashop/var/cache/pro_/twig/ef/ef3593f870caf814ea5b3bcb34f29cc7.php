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

/* @Modules/ps_facetedsearch/views/dist/back.css */
class __TwigTemplate_e770be4794fa7f495a6bd9a8ad82bba9 extends Template
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
        echo ".bootstrap .filter_list .filter_list_item{display:table;width:100%;padding:5px 0;margin-bottom:4px;background-color:white;-webkit-box-shadow:rgba(0,0,0,0.3) 0 0 3px,rgba(0,0,0,0.1) 0 -2px 0 inset;box-shadow:rgba(0,0,0,0.3) 0 0 3px,rgba(0,0,0,0.1) 0 -2px 0 inset;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;cursor:pointer}.bootstrap .filter_panel{min-height:20px;padding:7px 7px 0px 7px;margin-bottom:20px;background-color:#ebebeb;border:1px solid #d9d9d9;border-radius:3px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.bootstrap .filter_panel header{margin-bottom:7px}.bootstrap .prestashop-switch span{display:none}.sortable-ghost{color:orange}#content.bootstrap .form-group-categories .panel{margin-bottom:0}


/*# sourceMappingURL=back.css.map*/";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/dist/back.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/views/dist/back.css", "/var/www/html/modules/ps_facetedsearch/views/dist/back.css");
    }
}
