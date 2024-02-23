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

/* @Modules/ps_linklist/views/templates/hook/linkblock.tpl */
class __TwigTemplate_311c773a56c3d2b96385f310e25080e6 extends Template
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
        echo "{**
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
 *}

{foreach \$linkBlocks as \$linkBlock}
  <h3>{\$linkBlock.title|escape:'html':'UTF-8'}</h3>
  <ul>
    {foreach \$linkBlock.links as \$link}
      <li>
        <a
          id=\"{\$link.id}-{\$linkBlock.id}\"
          class=\"{\$link.class}\"
          href=\"{\$link.url|escape:'html':'UTF-8'}\"
          title=\"{\$link.description|escape:'html':'UTF-8'}\"
          {if !empty(\$link.target)} target=\"{\$link.target|escape:'html':'UTF-8'}\" {/if}
        >
          {\$link.title|escape:'html':'UTF-8'}
        </a>
      </li>
    {/foreach}
  </ul>
{/foreach}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/templates/hook/linkblock.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/views/templates/hook/linkblock.tpl", "/var/www/html/modules/ps_linklist/views/templates/hook/linkblock.tpl");
    }
}
