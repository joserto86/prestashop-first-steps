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

/* @Modules/blockwishlist/Makefile */
class __TwigTemplate_a9180e0925c8a3f8879b35309ebd2bdf extends Template
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
        echo "help:
\t@egrep \"^#\" Makefile

# target: docker-build|db               - Setup/Build PHP & (node)JS dependencies
db: docker-build
docker-build: build-back build-front

build-back:
\tdocker-compose run --rm php sh -c \"composer install\"

build-back-prod:
\tdocker-compose run --rm php sh -c \"composer install --no-dev -o\"

build-front:
\tdocker-compose run --rm node sh -c \"npm install\"
\tdocker-compose run --rm node sh -c \"npm run build\"
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/Makefile", "/var/www/html/modules/blockwishlist/Makefile");
    }
}
