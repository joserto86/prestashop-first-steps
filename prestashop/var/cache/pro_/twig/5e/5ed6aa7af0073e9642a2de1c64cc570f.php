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

/* @Modules/ps_linklist/src/Model/LinkBlock.php */
class __TwigTemplate_f25ef1bf4477fe64e092d9fd1bd53228 extends Template
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
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\\Module\\LinkList\\Model;

use Shop;

/**
 * Class LinkBlock.
 */
class LinkBlock extends \\ObjectModel
{
    /**
     * @var int
     */
    public \$id_link_block;

    /**
     * @var string
     */
    public \$name;

    /**
     * @var int
     */
    public \$id_hook;

    /**
     * @var int
     */
    public \$position;

    /**
     * @var array|string|null
     */
    public \$content;

    /**
     * @var array
     */
    public \$custom_content;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'link_block',
        'primary' => 'id_link_block',
        'multilang' => true,
        'fields' => [
            'name' => ['type' => self::TYPE_STRING, 'lang' => true, 'required' => true, 'size' => 40],
            'id_hook' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true],
            'position' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true],
            'content' => ['type' => self::TYPE_STRING, 'validate' => 'isJson'],
            'custom_content' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isJson'],
        ],
    ];

    public function __construct(\$id = null, \$id_lang = null, \$id_shop = null)
    {
        Shop::addTableAssociation('link_block', ['type' => 'shop']);

        parent::__construct(\$id, \$id_lang, \$id_shop);

        if (\$this->id) {
            \$this->content = json_decode(\$this->content, true);
            if (\$this->custom_content) {
                \$this->custom_content = array_map(
                    function (\$el) {
                        return json_decode(\$el ?? '', true);
                    },
                    \$this->custom_content
                );
            }
        }

        if (is_null(\$this->content)) {
            \$this->content = [
                'cms' => [],
                'product' => [],
                'static' => [],
                'category' => [],
            ];
        }
    }

    public function add(\$auto_date = true, \$null_values = false)
    {
        if (is_array(\$this->content)) {
            \$this->content = json_encode(\$this->content);
        }

        if (!\$this->position) {
            \$this->position = 1;
        }

        \$return = parent::add(\$auto_date, \$null_values);
        \$this->content = json_decode(\$this->content, true);

        return \$return;
    }

    public function update(\$auto_date = true, \$null_values = false)
    {
        if (is_array(\$this->content)) {
            \$this->content = json_encode(\$this->content);
        }

        \$return = parent::update(\$null_values);
        \$this->content = json_decode(\$this->content, true);

        return \$return;
    }

    public function toArray()
    {
        return [
            'id' => \$this->id,
            'id_link_block' => \$this->id,
            'name' => \$this->name,
            'id_hook' => \$this->id_hook,
            'position' => \$this->position,
            'content' => \$this->content,
            'custom_content' => \$this->custom_content,
            'shop_association' => \$this->getAssociatedShops(),
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Model/LinkBlock.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/src/Model/LinkBlock.php", "/var/www/html/modules/ps_linklist/src/Model/LinkBlock.php");
    }
}
