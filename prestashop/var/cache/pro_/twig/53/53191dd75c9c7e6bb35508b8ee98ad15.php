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

/* @Modules/ps_facetedsearch/src/Constraint/UrlSegmentValidator.php */
class __TwigTemplate_cc280b936397be78fb42fe5e28d394ae extends Template
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch\\Constraint;

use PrestaShop\\PrestaShop\\Adapter\\Tools;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;

/**
 * Class UrlSegmentValidator responsible for validating an URL segment.
 */
class UrlSegmentValidator extends ConstraintValidator
{
    /**
     * @var Tools
     */
    private \$tools;

    /**
     * @param Tools \$tools
     */
    public function __construct(Tools \$tools)
    {
        \$this->tools = \$tools;
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\$value, Constraint \$constraint)
    {
        if (!\$constraint instanceof UrlSegment) {
            throw new UnexpectedTypeException(\$constraint, UrlSegment::class);
        }

        if (null === \$value || '' === \$value) {
            return;
        }

        if (strtolower(\$value) !== \$this->tools->linkRewrite(\$value)) {
            \$this->context->buildViolation(\$constraint->message)
                ->setTranslationDomain('Admin.Notifications.Error')
                ->setParameter('%s', \$this->formatValue(\$value))
                ->addViolation()
            ;
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Constraint/UrlSegmentValidator.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/src/Constraint/UrlSegmentValidator.php", "/var/www/html/modules/ps_facetedsearch/src/Constraint/UrlSegmentValidator.php");
    }
}
