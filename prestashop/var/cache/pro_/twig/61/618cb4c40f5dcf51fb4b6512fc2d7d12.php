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

/* @Modules/ps_facetedsearch/config/services.yml */
class __TwigTemplate_6abba37a224bb811c80eb175e225d18d extends Template
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
        echo "services:
  _defaults:
    public: true

  prestashop.module.ps_facetedsearch.constraint.url_segment_validator:
    class: PrestaShop\\Module\\FacetedSearch\\Constraint\\UrlSegmentValidator
    arguments:
      - '@prestashop.adapter.tools'
    tags:
      - { name: validator.constraint_validator }
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/config/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/config/services.yml", "/var/www/html/modules/ps_facetedsearch/config/services.yml");
    }
}
