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

/* @Modules/ps_contactinfo/ps_contactinfo-rich.tpl */
class __TwigTemplate_1152e6140c66929a7dd6c5533be5f850 extends Template
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div class=\"contact-rich\">
  <h4>{l s='Store information' d='Shop.Theme.Global'}</h4>
  <div class=\"block\">
    <div class=\"icon\"><i class=\"material-icons\">&#xE55F;</i></div>
    <div class=\"data\">{\$contact_infos.address.formatted nofilter}</div>
  </div>
  {if \$contact_infos.phone}
    <hr/>
    <div class=\"block\">
      <div class=\"icon\"><i class=\"material-icons\">&#xE0CD;</i></div>
      <div class=\"data\">
        {l s='Call us:' d='Modules.Contactinfo.Shop'}<br/>
        <a href=\"tel:{\$contact_infos.phone}\">{\$contact_infos.phone}</a>
      </div>
    </div>
  {/if}
  {if \$contact_infos.fax}
    <hr/>
    <div class=\"block\">
      <div class=\"icon\"><i class=\"material-icons\">&#xE0DF;</i></div>
      <div class=\"data\">
        {l s='Fax:' d='Modules.Contactinfo.Shop'}<br/>
        {\$contact_infos.fax}
      </div>
    </div>
  {/if}
  {if \$contact_infos.email && \$display_email}
    <hr/>
    <div class=\"block\">
      <div class=\"icon\"><i class=\"material-icons\">&#xE158;</i></div>
      <div class=\"data email\">
        {l s='Email us:' d='Modules.Contactinfo.Shop'}<br/>
        {mailto address=\$contact_infos.email encode=\"javascript\"}
      </div>
    </div>
  {/if}
  {if \$contact_infos.details}
    <hr/>
    <div class=\"block\">
      <div class=\"icon\"><i class=\"material-icons\">&#xE88E;</i></div>
      <div class=\"data\">
        {l s='Details:' d='Modules.Contactinfo.Shop'}<br/>
        {\$contact_infos.details|nl2br nofilter}
      </div>
    </div>
  {/if}
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_contactinfo/ps_contactinfo-rich.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_contactinfo/ps_contactinfo-rich.tpl", "/var/www/html/modules/ps_contactinfo/ps_contactinfo-rich.tpl");
    }
}
