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

/* @Modules/productcomments/config/common.yml */
class __TwigTemplate_9ce58295592bd48b7d895e713fec19ff extends Template
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

  product_comment_criterion_repository:
    class: PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository
    arguments:
      - '@doctrine'
      - '@doctrine.dbal.default_connection'
      - '%database_prefix%'

  product_comment_repository:
    class: PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentRepository
    arguments:
      - '@doctrine'
      - '@doctrine.dbal.default_connection'
      - '%database_prefix%'
      - '@=service(\"prestashop.adapter.legacy.configuration\").get(\"PRODUCT_COMMENTS_ALLOW_GUESTS\")'
      - '@=service(\"prestashop.adapter.legacy.configuration\").get(\"PRODUCT_COMMENTS_MINIMAL_TIME\")'
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/config/common.yml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/config/common.yml", "/var/www/html/modules/productcomments/config/common.yml");
    }
}
