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

/* @Modules/ps_distributionapiclient/src/Middleware/CachedResponse.php */
class __TwigTemplate_c30f9405373d3490a4447fb3e06d8f02 extends Template
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

declare(strict_types=1);

namespace PrestaShop\\Module\\DistributionApiClient\\Middleware;

class CachedResponse
{
    /** @var string[][] */
    private \$headers;

    /** @var string */
    private \$body;

    /**
     * @param string[][] \$headers
     * @param string \$body
     */
    public function __construct(array \$headers, string \$body)
    {
        \$this->headers = \$headers;
        \$this->body = \$body;
    }

    /**
     * @return string[][]
     */
    public function getHeaders(): array
    {
        return \$this->headers;
    }

    public function getBody(): string
    {
        return \$this->body;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/src/Middleware/CachedResponse.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_distributionapiclient/src/Middleware/CachedResponse.php", "/var/www/html/modules/ps_distributionapiclient/src/Middleware/CachedResponse.php");
    }
}
