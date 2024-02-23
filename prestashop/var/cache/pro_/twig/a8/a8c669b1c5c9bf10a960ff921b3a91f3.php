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

/* @Modules/ps_imageslider/views/templates/admin/_configure/helpers/form/form.tpl */
class __TwigTemplate_8789a9f2cce0a89450cfc7940ce28fe2 extends Template
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

{extends file=\"helpers/form/form.tpl\"}
{block name=\"field\"}
\t{if \$input.type == 'file_lang'}
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"form-group\">
\t\t\t\t{foreach from=\$languages item=language}
\t\t\t\t\t{if \$languages|count > 1}
\t\t\t\t\t\t<div class=\"translatable-field lang-{\$language.id_lang}\" {if \$language.id_lang != \$defaultFormLanguage}style=\"display:none\"{/if}>
\t\t\t\t\t{/if}
\t\t\t\t\t\t<div class=\"col-lg-{if \$languages|count > 1}10{else}12{/if}\">
\t\t\t\t\t\t\t{if isset(\$fields[0]['form']['images'])}
\t\t\t\t\t\t\t<img src=\"{\$image_baseurl}{\$fields[0]['form']['images'][\$language.id_lang]}\" class=\"img-thumbnail\" />
\t\t\t\t\t\t\t{/if}
\t\t\t\t\t\t\t<div class=\"dummyfile input-group\">
\t\t\t\t\t\t\t\t<input id=\"{\$input.name}_{\$language.id_lang}\" type=\"file\" name=\"{\$input.name}_{\$language.id_lang}\" class=\"hide-file-upload\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-file\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"{\$input.name}_{\$language.id_lang}-name\" type=\"text\" class=\"disabled\" name=\"filename\" readonly />
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button id=\"{\$input.name}_{\$language.id_lang}-selectbutton\" type=\"button\" name=\"submitAddAttachments\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-folder-open\"></i> {l s='Choose a file' d='Admin.Actions'}
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{if \$languages|count > 1}
\t\t\t\t\t\t<div class=\"col-lg-2\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" tabindex=\"-1\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t{\$language.iso_code}
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t{foreach from=\$languages item=lang}
\t\t\t\t\t\t\t\t<li><a href=\"javascript:hideOtherLanguage({\$lang.id_lang});\" tabindex=\"-1\">{\$lang.name}</a></li>
\t\t\t\t\t\t\t\t{/foreach}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t{/if}
\t\t\t\t\t{if \$languages|count > 1}
\t\t\t\t\t\t</div>
\t\t\t\t\t{/if}
\t\t\t\t\t<script>
\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\$('#{\$input.name}_{\$language.id_lang}-selectbutton').click(function(e){
\t\t\t\t\t\t\t\$('#{\$input.name}_{\$language.id_lang}').trigger('click');
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('#{\$input.name}_{\$language.id_lang}').change(function(e){
\t\t\t\t\t\t\tvar val = \$(this).val();
\t\t\t\t\t\t\tvar file = val.split(/[\\\\/]/);
\t\t\t\t\t\t\t\$('#{\$input.name}_{\$language.id_lang}-name').val(file[file.length-1]);
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t  </script>
\t\t\t\t{/foreach}
\t\t\t</div>
\t\t</div>
\t{/if}
\t{\$smarty.block.parent}
{/block}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_imageslider/views/templates/admin/_configure/helpers/form/form.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_imageslider/views/templates/admin/_configure/helpers/form/form.tpl", "/var/www/html/modules/ps_imageslider/views/templates/admin/_configure/helpers/form/form.tpl");
    }
}
