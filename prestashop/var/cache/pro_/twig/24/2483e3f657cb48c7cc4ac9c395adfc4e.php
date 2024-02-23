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

/* @Modules/ps_brandlist/views/templates/_partials/brand_text.tpl */
class __TwigTemplate_f5e83dca06d7855180747c2a0ec41500 extends Template
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
        echo "<ul>
  {foreach from=\$brands item=brand name=brand_list}
    {if \$smarty.foreach.brand_list.iteration <= \$text_list_nb}
      <li>
        <a href=\"{\$brand['link']}\" title=\"{\$brand['name']}\">
          {\$brand['name']}
        </a>
      </li>
    {/if}
  {/foreach}
</ul>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_brandlist/views/templates/_partials/brand_text.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_brandlist/views/templates/_partials/brand_text.tpl", "/var/www/html/modules/ps_brandlist/views/templates/_partials/brand_text.tpl");
    }
}
