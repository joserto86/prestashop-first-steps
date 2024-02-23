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

/* @Modules/ps_socialfollow/views/css/ps_socialfollow.css */
class __TwigTemplate_af7f764ed9dd6d9f53238974590a8cb9 extends Template
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
        echo ".ps-socialfollow-discord {
  background-image: url('../../assets/icon/discord.svg');
  background-position: 50%;
  background-size: 2rem auto;
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_socialfollow/views/css/ps_socialfollow.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_socialfollow/views/css/ps_socialfollow.css", "/var/www/html/modules/ps_socialfollow/views/css/ps_socialfollow.css");
    }
}
