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

/* @Modules/blockwishlist/tsconfig.json */
class __TwigTemplate_f986d0b8c0fdaf2d6032b94052a1649c extends Template
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
        echo "{
  \"compilerOptions\": {
    \"outDir\": \"./public/\",
    \"noImplicitAny\": true,
    \"module\": \"es6\",
    \"target\": \"es5\",
    \"strict\": true,
    \"moduleResolution\": \"node\",
    \"allowSyntheticDefaultImports\": true,
    \"allowJs\": true,
    \"baseUrl\": \"./\",
    \"typeRoots\": [\"js/types\", \"node_modules/@types\"]
  },
  \"ts-node\": {
    \"compilerOptions\": {
      \"module\": \"commonjs\"
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/tsconfig.json";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/tsconfig.json", "/var/www/html/modules/blockwishlist/tsconfig.json");
    }
}
