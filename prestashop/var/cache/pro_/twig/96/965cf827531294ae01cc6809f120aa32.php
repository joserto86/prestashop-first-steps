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

/* @Modules/ps_brandlist/views/templates/_partials/brand_form.tpl */
class __TwigTemplate_d02b7115c7bbfec043acc0e79d71e72b extends Template
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
        echo "<div class=\"brands-sort dropdown\">
  <button
    class=\"btn-unstyle select-title\"
    rel=\"nofollow\"
    data-toggle=\"dropdown\"
    aria-haspopup=\"true\"
    aria-expanded=\"false\">
    {l s='All brands' d='Modules.Brandlist.Shop'}
    <i class=\"material-icons float-xs-right\">arrow_drop_down</i>
  </button>
  <div class=\"dropdown-menu\">
    {foreach from=\$brands item=brand}
      <a
        rel=\"nofollow\"
        href=\"{\$brand['link']}\"
        class=\"select-list dropdown-item\"
      >
        {\$brand['name']}
      </a>
    {/foreach}
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_brandlist/views/templates/_partials/brand_form.tpl";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_brandlist/views/templates/_partials/brand_form.tpl", "/var/www/html/modules/ps_brandlist/views/templates/_partials/brand_form.tpl");
    }
}
