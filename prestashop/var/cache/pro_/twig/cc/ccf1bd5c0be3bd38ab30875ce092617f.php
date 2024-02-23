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

/* @Modules/ps_emailsubscription/views/js/ps_emailsubscription.js */
class __TwigTemplate_00db5a554c0e4b5d4257f53d3bca3386 extends Template
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
        echo "/**
 * 2007-2020 PrestaShop.
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
\$(document).ready(function () {
    \$('.block_newsletter form').on('submit', function () {
        var psemailsubscriptionForm = \$(this);
        if (typeof psemailsubscription_subscription === 'undefined') {
            return true;
        }
        \$('.block_newsletter_alert').remove();
        \$.ajax({
            type: 'POST',
            dataType: 'JSON',
            url: psemailsubscription_subscription,
            cache: false,
            data: \$(this).serialize(),
            success: function (data) {
                if (data.nw_error) {
                    psemailsubscriptionForm.prepend('<p class=\"alert alert-danger block_newsletter_alert\">' + data.msg + '</p>');
                } else {
                    psemailsubscriptionForm.prepend('<p class=\"alert alert-success block_newsletter_alert\">' + data.msg + '</p>');
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
        return false;
    });
});
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailsubscription/views/js/ps_emailsubscription.js";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailsubscription/views/js/ps_emailsubscription.js", "/var/www/html/modules/ps_emailsubscription/views/js/ps_emailsubscription.js");
    }
}
