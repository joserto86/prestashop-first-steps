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

/* @Modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl */
class __TwigTemplate_83eabc8d16b43d67df4ade9221cb40ef extends Template
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
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '{\$bofaviconBgColor|escape:'javascript'}',
      textColor: '{\$bofaviconTxtColor|escape:'javascript'}',
      notificationGetUrl: '{\$bofaviconUrl|escape:'javascript'}',
      CHECKBOX_ORDER: {\$bofaviconOrder|intval},
      CHECKBOX_CUSTOMER: {\$bofaviconCustomer|intval},
      CHECKBOX_MESSAGE: {\$bofaviconMsg|intval},
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl", "/var/www/html/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl");
    }
}
