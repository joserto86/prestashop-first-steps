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

/* @Modules/ps_linklist/config/routes.yml */
class __TwigTemplate_bd30c73ddca86ba8282ddde04b7fc1b4 extends Template
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
        echo "admin_link_block_list:
  path: /link-widget/list
  methods: [GET]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::listAction'
    _legacy_controller: AdminLinkWidget
    _legacy_link: AdminLinkWidget

admin_link_block_create:
  path: /link-widget/create
  methods: [GET]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::createAction'
    _legacy_controller: AdminLinkWidget

admin_link_block_create_process:
  path: /link-widget/create
  methods: [POST]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::createProcessAction'
    _legacy_controller: AdminLinkWidget

admin_link_block_edit:
  path: /link-widget/edit/{linkBlockId}
  methods: [GET]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::editAction'
    _legacy_controller: AdminLinkWidget

admin_link_block_edit_process:
  path: /link-widget/edit/{linkBlockId}
  methods: [POST]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::editProcessAction'
    _legacy_controller: AdminLinkWidget

admin_link_block_delete:
  path: /link-widget/delete/{linkBlockId}
  methods: [POST]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::deleteAction'
    _legacy_controller: AdminLinkWidget
  requirements:
    linkBlockId: \\d+

admin_link_block_update_positions:
  path: /link-widget/update-positions/{hookId}
  methods: [POST]
  defaults:
    _controller: 'PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design\\LinkBlockController::updatePositionsAction'
    _legacy_controller: AdminLinkWidget
  requirements:
    hookId: \\d+
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/config/routes.yml";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/config/routes.yml", "/var/www/html/modules/ps_linklist/config/routes.yml");
    }
}
