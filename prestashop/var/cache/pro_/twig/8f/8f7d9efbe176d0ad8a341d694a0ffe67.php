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

/* @Modules/ps_linklist/src/Filter/LinkFilter.php */
class __TwigTemplate_01e3b30b431193022b50bfec1ac86104 extends Template
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
        echo "<?php

/**
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
 */

namespace PrestaShop\\Module\\LinkList\\Filter;

class LinkFilter
{
    /**
     * @var RouteFilterInterface[]
     */
    private \$routeFilters = [];

    public function __construct(array \$routeFilters = [])
    {
        \$this->addRouteFilter(...\$routeFilters);
    }

    public function addRouteFilter(RouteFilterInterface ...\$routeFilters): void
    {
        foreach (\$routeFilters as \$routeFilter) {
            \$this->routeFilters[] = \$routeFilter;
        }
    }

    public function isRouteEnabled(string \$routeId): bool
    {
        foreach (\$this->routeFilters as \$filter) {
            if (\$filter->supports(\$routeId) && !\$filter->isRouteEnabled(\$routeId)) {
                return false;
            }
        }

        return true;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Filter/LinkFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/src/Filter/LinkFilter.php", "/var/www/html/modules/ps_linklist/src/Filter/LinkFilter.php");
    }
}
