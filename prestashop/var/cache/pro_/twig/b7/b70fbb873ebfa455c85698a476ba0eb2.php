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

/* @Modules/statscatalog/composer.lock */
class __TwigTemplate_af34342be9b47f0d1708d0d3204a7a4c extends Template
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
    \"_readme\": [
        \"This file locks the dependencies of your project to a known state\",
        \"Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies\",
        \"This file is @generated automatically\"
    ],
    \"content-hash\": \"7a8a9c8d35c4e41061e664bd6aed67ff\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"composer/semver\",
            \"version\": \"3.2.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"31f3ea725711245195f62e54ffa402d8ef2fdba9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/31f3ea725711245195f62e54ffa402d8ef2fdba9\",
                \"reference\": \"31f3ea725711245195f62e54ffa402d8ef2fdba9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^0.12.54\",
                \"symfony/phpunit-bridge\": \"^4.2 || ^5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"3.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\Semver\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nils Adermann\",
                    \"email\": \"naderman@naderman.de\",
                    \"homepage\": \"http://www.naderman.de\"
                },
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                },
                {
                    \"name\": \"Rob Bast\",
                    \"email\": \"rob.bast@gmail.com\",
                    \"homepage\": \"http://robbast.nl\"
                }
            ],
            \"description\": \"Semver library that offers utilities, version constraint parsing and validation.\",
            \"keywords\": [
                \"semantic\",
                \"semver\",
                \"validation\",
                \"versioning\"
            ],
            \"support\": {
                \"irc\": \"irc://irc.freenode.org/composer\",
                \"issues\": \"https://github.com/composer/semver/issues\",
                \"source\": \"https://github.com/composer/semver/tree/3.2.5\"
            },
            \"funding\": [
                {
                    \"url\": \"https://packagist.com\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/composer\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/composer/composer\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-05-24T12:41:47+00:00\"
        },
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"84674dd3a7575ba617f5a76d7e9e29a7d3891339\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/84674dd3a7575ba617f5a76d7e9e29a7d3891339\",
                \"reference\": \"84674dd3a7575ba617f5a76d7e9e29a7d3891339\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\",
                \"psr/log\": \"^1 || ^2 || ^3\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^0.12.55\",
                \"symfony/phpunit-bridge\": \"^4.2 || ^5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\XdebugHandler\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"John Stevenson\",
                    \"email\": \"john-stevenson@blueyonder.co.uk\"
                }
            ],
            \"description\": \"Restarts a process without Xdebug.\",
            \"keywords\": [
                \"Xdebug\",
                \"performance\"
            ],
            \"support\": {
                \"irc\": \"irc://irc.freenode.org/composer\",
                \"issues\": \"https://github.com/composer/xdebug-handler/issues\",
                \"source\": \"https://github.com/composer/xdebug-handler/tree/2.0.2\"
            },
            \"funding\": [
                {
                    \"url\": \"https://packagist.com\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/composer\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/composer/composer\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-07-31T17:03:58+00:00\"
        },
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"1.13.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"5b668aef16090008790395c02c893b1ba13f7e08\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/5b668aef16090008790395c02c893b1ba13f7e08\",
                \"reference\": \"5b668aef16090008790395c02c893b1ba13f7e08\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1 || ^8.0\",
                \"psr/cache\": \"^1 || ^2 || ^3\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"^1.11 || ^2.0\",
                \"doctrine/coding-standard\": \"^6.0 || ^8.1\",
                \"phpstan/phpstan\": \"^0.12.20\",
                \"phpunit/phpunit\": \"^7.5 || ^8.0 || ^9.1.5\",
                \"symfony/cache\": \"^4.4 || ^5.2\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Annotations\\\\\": \"lib/Doctrine/Common/Annotations\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Jonathan Wage\",
                    \"email\": \"jonwage@gmail.com\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"Docblock Annotations Parser\",
            \"homepage\": \"https://www.doctrine-project.org/projects/annotations.html\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"parser\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/doctrine/annotations/issues\",
                \"source\": \"https://github.com/doctrine/annotations/tree/1.13.2\"
            },
            \"time\": \"2021-08-05T19:00:23+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"e864bbf5904cb8f5bb334f99209b48018522f042\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/e864bbf5904cb8f5bb334f99209b48018522f042\",
                \"reference\": \"e864bbf5904cb8f5bb334f99209b48018522f042\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2 || ^8.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^6.0\",
                \"phpstan/phpstan\": \"^0.11.8\",
                \"phpunit/phpunit\": \"^8.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"lib/Doctrine/Common/Lexer\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
                },
                {
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Johannes Schmitt\",
                    \"email\": \"schmittjoh@gmail.com\"
                }
            ],
            \"description\": \"PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/lexer.html\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"lexer\",
                \"parser\",
                \"php\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/doctrine/lexer/issues\",
                \"source\": \"https://github.com/doctrine/lexer/tree/1.2.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://www.doctrine-project.org/sponsorship.html\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://www.patreon.com/phpdoctrine\",
                    \"type\": \"patreon\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/doctrine%2Flexer\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2020-05-25T17:44:05+00:00\"
        },
        {
            \"name\": \"friendsofphp/php-cs-fixer\",
            \"version\": \"v2.19.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer.git\",
                \"reference\": \"d5c737c2e18ba502b75b44832b31fe627f82e307\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/FriendsOfPHP/PHP-CS-Fixer/zipball/d5c737c2e18ba502b75b44832b31fe627f82e307\",
                \"reference\": \"d5c737c2e18ba502b75b44832b31fe627f82e307\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/semver\": \"^1.4 || ^2.0 || ^3.0\",
                \"composer/xdebug-handler\": \"^1.2 || ^2.0\",
                \"doctrine/annotations\": \"^1.2\",
                \"ext-json\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^5.6 || ^7.0 || ^8.0\",
                \"php-cs-fixer/diff\": \"^1.3\",
                \"symfony/console\": \"^3.4.43 || ^4.1.6 || ^5.0\",
                \"symfony/event-dispatcher\": \"^3.0 || ^4.0 || ^5.0\",
                \"symfony/filesystem\": \"^3.0 || ^4.0 || ^5.0\",
                \"symfony/finder\": \"^3.0 || ^4.0 || ^5.0\",
                \"symfony/options-resolver\": \"^3.0 || ^4.0 || ^5.0\",
                \"symfony/polyfill-php70\": \"^1.0\",
                \"symfony/polyfill-php72\": \"^1.4\",
                \"symfony/process\": \"^3.0 || ^4.0 || ^5.0\",
                \"symfony/stopwatch\": \"^3.0 || ^4.0 || ^5.0\"
            },
            \"require-dev\": {
                \"justinrainbow/json-schema\": \"^5.0\",
                \"keradus/cli-executor\": \"^1.4\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"php-coveralls/php-coveralls\": \"^2.4.2\",
                \"php-cs-fixer/accessible-object\": \"^1.0\",
                \"php-cs-fixer/phpunit-constraint-isidenticalstring\": \"^1.2\",
                \"php-cs-fixer/phpunit-constraint-xmlmatchesxsd\": \"^1.2.1\",
                \"phpspec/prophecy-phpunit\": \"^1.1 || ^2.0\",
                \"phpunit/phpunit\": \"^5.7.27 || ^6.5.14 || ^7.5.20 || ^8.5.13 || ^9.5\",
                \"phpunitgoodpractices/polyfill\": \"^1.5\",
                \"phpunitgoodpractices/traits\": \"^1.9.1\",
                \"sanmai/phpunit-legacy-adapter\": \"^6.4 || ^8.2.1\",
                \"symfony/phpunit-bridge\": \"^5.2.1\",
                \"symfony/yaml\": \"^3.0 || ^4.0 || ^5.0\"
            },
            \"suggest\": {
                \"ext-dom\": \"For handling output formats in XML\",
                \"ext-mbstring\": \"For handling non-UTF8 characters.\",
                \"php-cs-fixer/phpunit-constraint-isidenticalstring\": \"For IsIdenticalString constraint.\",
                \"php-cs-fixer/phpunit-constraint-xmlmatchesxsd\": \"For XmlMatchesXsd constraint.\",
                \"symfony/polyfill-mbstring\": \"When enabling `ext-mbstring` is not possible.\"
            },
            \"bin\": [
                \"php-cs-fixer\"
            ],
            \"type\": \"application\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.19-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PhpCsFixer\\\\\": \"src/\"
                },
                \"classmap\": [
                    \"tests/Test/AbstractFixerTestCase.php\",
                    \"tests/Test/AbstractIntegrationCaseFactory.php\",
                    \"tests/Test/AbstractIntegrationTestCase.php\",
                    \"tests/Test/Assert/AssertTokensTrait.php\",
                    \"tests/Test/IntegrationCase.php\",
                    \"tests/Test/IntegrationCaseFactory.php\",
                    \"tests/Test/IntegrationCaseFactoryInterface.php\",
                    \"tests/Test/InternalIntegrationCaseFactory.php\",
                    \"tests/Test/IsIdenticalConstraint.php\",
                    \"tests/Test/TokensWithObservedTransformers.php\",
                    \"tests/TestCase.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Dariusz Rumiński\",
                    \"email\": \"dariusz.ruminski@gmail.com\"
                }
            ],
            \"description\": \"A tool to automatically fix PHP code style\",
            \"support\": {
                \"issues\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues\",
                \"source\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer/tree/v2.19.2\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/keradus\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-08-18T19:55:46+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v3.1.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\",
                \"reference\": \"bb87e28e7d7b8d9a7fda231d37457c9210faf6ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"~4.0|~5.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"PhpParser\\\\\": \"lib/PhpParser\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nikita Popov\"
                }
            ],
            \"description\": \"A PHP parser written in PHP\",
            \"keywords\": [
                \"parser\",
                \"php\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/nikic/PHP-Parser/issues\",
                \"source\": \"https://github.com/nikic/PHP-Parser/tree/v3.1.5\"
            },
            \"time\": \"2018-02-28T20:30:58+00:00\"
        },
        {
            \"name\": \"php-cs-fixer/diff\",
            \"version\": \"v1.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PHP-CS-Fixer/diff.git\",
                \"reference\": \"dbd31aeb251639ac0b9e7e29405c1441907f5759\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PHP-CS-Fixer/diff/zipball/dbd31aeb251639ac0b9e7e29405c1441907f5759\",
                \"reference\": \"dbd31aeb251639ac0b9e7e29405c1441907f5759\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0 || ^8.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.7.23 || ^6.4.3 || ^7.0\",
                \"symfony/process\": \"^3.3\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"classmap\": [
                    \"src/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
                },
                {
                    \"name\": \"Kore Nordmann\",
                    \"email\": \"mail@kore-nordmann.de\"
                },
                {
                    \"name\": \"SpacePossum\"
                }
            ],
            \"description\": \"sebastian/diff v2 backport support for PHP5.6\",
            \"homepage\": \"https://github.com/PHP-CS-Fixer\",
            \"keywords\": [
                \"diff\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/PHP-CS-Fixer/diff/issues\",
                \"source\": \"https://github.com/PHP-CS-Fixer/diff/tree/v1.3.1\"
            },
            \"time\": \"2020-10-14T08:39:05+00:00\"
        },
        {
            \"name\": \"prestashop/autoindex\",
            \"version\": \"v1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/autoindex.git\",
                \"reference\": \"92e10242f94a99163dece280f6bd7b7c2b79c158\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/autoindex/zipball/92e10242f94a99163dece280f6bd7b7c2b79c158\",
                \"reference\": \"92e10242f94a99163dece280f6bd7b7c2b79c158\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^3.1\",
                \"php\": \">=5.6\",
                \"symfony/console\": \"^3.4\",
                \"symfony/finder\": \"^3.4\"
            },
            \"bin\": [
                \"bin/autoindex\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"PrestaShop\\\\AutoIndex\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"AFL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"PrestaShop SA\",
                    \"email\": \"contact@prestashop.com\"
                }
            ],
            \"description\": \"Automatically add an 'index.php' in all the current or specified directories and all sub-directories.\",
            \"homepage\": \"https://github.com/PrestaShopCorp/autoindex\",
            \"support\": {
                \"source\": \"https://github.com/PrestaShopCorp/autoindex/tree/v1.0.0\"
            },
            \"time\": \"2020-03-11T13:37:03+00:00\"
        },
        {
            \"name\": \"prestashop/header-stamp\",
            \"version\": \"v1.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/header-stamp.git\",
                \"reference\": \"d77ce6d0a7f066670a4774be88f05e5f07b4b6fc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/header-stamp/zipball/d77ce6d0a7f066670a4774be88f05e5f07b4b6fc\",
                \"reference\": \"d77ce6d0a7f066670a4774be88f05e5f07b4b6fc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^3.1\",
                \"php\": \">=5.6\",
                \"symfony/console\": \"^3.4 || ~4.0 || ~5.0\",
                \"symfony/finder\": \"^3.4 || ~4.0 || ~5.0\"
            },
            \"require-dev\": {
                \"prestashop/php-dev-tools\": \"1.*\"
            },
            \"bin\": [
                \"bin/header-stamp\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"PrestaShop\\\\HeaderStamp\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"AFL-3.0\"
            ],
            \"authors\": [
                {
                    \"name\": \"PrestaShop SA\",
                    \"email\": \"contact@prestashop.com\"
                }
            ],
            \"description\": \"Rewrite your file headers to add the license or to make them up-to-date\",
            \"homepage\": \"https://github.com/PrestaShopCorp/header-stamp\",
            \"support\": {
                \"issues\": \"https://github.com/PrestaShopCorp/header-stamp/issues\",
                \"source\": \"https://github.com/PrestaShopCorp/header-stamp/tree/v1.7\"
            },
            \"time\": \"2020-12-09T16:40:38+00:00\"
        },
        {
            \"name\": \"prestashop/php-dev-tools\",
            \"version\": \"v3.16.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShop/php-dev-tools.git\",
                \"reference\": \"578bffb03fb683fa6f35e07c7c32db8d2781abef\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShop/php-dev-tools/zipball/578bffb03fb683fa6f35e07c7c32db8d2781abef\",
                \"reference\": \"578bffb03fb683fa6f35e07c7c32db8d2781abef\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"friendsofphp/php-cs-fixer\": \"^2.14\",
                \"php\": \">=5.6.0\",
                \"prestashop/autoindex\": \"^1.0\",
                \"prestashop/header-stamp\": \"^1.0\",
                \"squizlabs/php_codesniffer\": \"^3.4\",
                \"symfony/console\": \"~3.2 || ~4.0 || ~5.0\",
                \"symfony/filesystem\": \"~3.2 || ~4.0 || ~5.0\"
            },
            \"conflict\": {
                \"friendsofphp/php-cs-fixer\": \"2.18.3\"
            },
            \"bin\": [
                \"bin/prestashop-coding-standards\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"PrestaShop\\\\CodingStandards\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PrestaShop coding standards\",
            \"support\": {
                \"issues\": \"https://github.com/PrestaShop/php-dev-tools/issues\",
                \"source\": \"https://github.com/PrestaShop/php-dev-tools/tree/v3.16.0\"
            },
            \"time\": \"2021-06-22T08:28:47+00:00\"
        },
        {
            \"name\": \"psr/cache\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/cache.git\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/cache/zipball/d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"reference\": \"d11b50ad223250cf17b86e38383413f5a6764bf8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Cache\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for caching libraries\",
            \"keywords\": [
                \"cache\",
                \"psr\",
                \"psr-6\"
            ],
            \"support\": {
                \"source\": \"https://github.com/php-fig/cache/tree/master\"
            },
            \"time\": \"2016-08-06T20:24:11+00:00\"
        },
        {
            \"name\": \"psr/container\",
            \"version\": \"1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/container.git\",
                \"reference\": \"8622567409010282b7aeebe4bb841fe98b58dcaf\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/container/zipball/8622567409010282b7aeebe4bb841fe98b58dcaf\",
                \"reference\": \"8622567409010282b7aeebe4bb841fe98b58dcaf\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Container\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"https://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common Container Interface (PHP FIG PSR-11)\",
            \"homepage\": \"https://github.com/php-fig/container\",
            \"keywords\": [
                \"PSR-11\",
                \"container\",
                \"container-interface\",
                \"container-interop\",
                \"psr\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/php-fig/container/issues\",
                \"source\": \"https://github.com/php-fig/container/tree/1.1.1\"
            },
            \"time\": \"2021-03-05T17:36:06+00:00\"
        },
        {
            \"name\": \"psr/event-dispatcher\",
            \"version\": \"1.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/event-dispatcher.git\",
                \"reference\": \"dbefd12671e8a14ec7f180cab83036ed26714bb0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/event-dispatcher/zipball/dbefd12671e8a14ec7f180cab83036ed26714bb0\",
                \"reference\": \"dbefd12671e8a14ec7f180cab83036ed26714bb0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\EventDispatcher\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Standard interfaces for event handling.\",
            \"keywords\": [
                \"events\",
                \"psr\",
                \"psr-14\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/php-fig/event-dispatcher/issues\",
                \"source\": \"https://github.com/php-fig/event-dispatcher/tree/1.0.0\"
            },
            \"time\": \"2019-01-08T18:20:26+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"d49695b909c3b7628b6289db5479a1c204601f11\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/d49695b909c3b7628b6289db5479a1c204601f11\",
                \"reference\": \"d49695b909c3b7628b6289db5479a1c204601f11\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Log\\\\\": \"Psr/Log/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PHP-FIG\",
                    \"homepage\": \"https://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for logging libraries\",
            \"homepage\": \"https://github.com/php-fig/log\",
            \"keywords\": [
                \"log\",
                \"psr\",
                \"psr-3\"
            ],
            \"support\": {
                \"source\": \"https://github.com/php-fig/log/tree/1.1.4\"
            },
            \"time\": \"2021-05-03T11:20:27+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"ffced0d2c8fa8e6cdc4d695a743271fab6c38625\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/ffced0d2c8fa8e6cdc4d695a743271fab6c38625\",
                \"reference\": \"ffced0d2c8fa8e6cdc4d695a743271fab6c38625\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-simplexml\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=5.4.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.0 || ^5.0 || ^6.0 || ^7.0\"
            },
            \"bin\": [
                \"bin/phpcs\",
                \"bin/phpcbf\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.x-dev\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"BSD-3-Clause\"
            ],
            \"authors\": [
                {
                    \"name\": \"Greg Sherwood\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"PHP_CodeSniffer tokenizes PHP, JavaScript and CSS files and detects violations of a defined set of coding standards.\",
            \"homepage\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
            \"keywords\": [
                \"phpcs\",
                \"standards\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/squizlabs/PHP_CodeSniffer/issues\",
                \"source\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
                \"wiki\": \"https://github.com/squizlabs/PHP_CodeSniffer/wiki\"
            },
            \"time\": \"2021-04-09T00:54:41+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"a10b1da6fc93080c180bba7219b5ff5b7518fe81\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/a10b1da6fc93080c180bba7219b5ff5b7518fe81\",
                \"reference\": \"a10b1da6fc93080c180bba7219b5ff5b7518fe81\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/debug\": \"~2.8|~3.0|~4.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.4\",
                \"symfony/process\": \"<3.3\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~3.3|~4.0\",
                \"symfony/dependency-injection\": \"~3.4|~4.0\",
                \"symfony/event-dispatcher\": \"~2.8|~3.0|~4.0\",
                \"symfony/lock\": \"~3.4|~4.0\",
                \"symfony/process\": \"~3.3|~4.0\"
            },
            \"suggest\": {
                \"psr/log\": \"For using the console logger\",
                \"symfony/event-dispatcher\": \"\",
                \"symfony/lock\": \"\",
                \"symfony/process\": \"\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Console\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Console Component\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/console/tree/v3.4.47\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2020-10-24T10:57:07+00:00\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v4.4.31\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"43ede438d4cb52cd589ae5dc070e9323866ba8e0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/43ede438d4cb52cd589ae5dc070e9323866ba8e0\",
                \"reference\": \"43ede438d4cb52cd589ae5dc070e9323866ba8e0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1.3\",
                \"psr/log\": \"^1|^2|^3\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \"<3.4\"
            },
            \"require-dev\": {
                \"symfony/http-kernel\": \"^3.4|^4.0|^5.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Debug\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Provides tools to ease debugging PHP code\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/debug/tree/v4.4.31\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-09-24T13:30:14+00:00\"
        },
        {
            \"name\": \"symfony/deprecation-contracts\",
            \"version\": \"v2.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/deprecation-contracts.git\",
                \"reference\": \"5f38c8804a9e97d23e0c8d63341088cd8a22d627\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/deprecation-contracts/zipball/5f38c8804a9e97d23e0c8d63341088cd8a22d627\",
                \"reference\": \"5f38c8804a9e97d23e0c8d63341088cd8a22d627\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"2.4-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/contracts\",
                    \"url\": \"https://github.com/symfony/contracts\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"function.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"A generic function and convention to trigger deprecation notices\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/deprecation-contracts/tree/v2.4.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-03-23T23:28:01+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v5.3.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"ce7b20d69c66a20939d8952b617506a44d102130\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/ce7b20d69c66a20939d8952b617506a44d102130\",
                \"reference\": \"ce7b20d69c66a20939d8952b617506a44d102130\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/deprecation-contracts\": \"^2.1\",
                \"symfony/event-dispatcher-contracts\": \"^2\",
                \"symfony/polyfill-php80\": \"^1.16\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<4.4\"
            },
            \"provide\": {
                \"psr/event-dispatcher-implementation\": \"1.0\",
                \"symfony/event-dispatcher-implementation\": \"2.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"^1|^2|^3\",
                \"symfony/config\": \"^4.4|^5.0\",
                \"symfony/dependency-injection\": \"^4.4|^5.0\",
                \"symfony/error-handler\": \"^4.4|^5.0\",
                \"symfony/expression-language\": \"^4.4|^5.0\",
                \"symfony/http-foundation\": \"^4.4|^5.0\",
                \"symfony/service-contracts\": \"^1.1|^2\",
                \"symfony/stopwatch\": \"^4.4|^5.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\EventDispatcher\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Provides tools that allow your application components to communicate with each other by dispatching events and listening to them\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/event-dispatcher/tree/v5.3.7\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-08-04T21:20:46+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher-contracts\",
            \"version\": \"v2.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
                \"reference\": \"69fee1ad2332a7cbab3aca13591953da9cdb7a11\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/69fee1ad2332a7cbab3aca13591953da9cdb7a11\",
                \"reference\": \"69fee1ad2332a7cbab3aca13591953da9cdb7a11\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"psr/event-dispatcher\": \"^1\"
            },
            \"suggest\": {
                \"symfony/event-dispatcher-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"2.4-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/contracts\",
                    \"url\": \"https://github.com/symfony/contracts\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\EventDispatcher\\\\\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Generic abstractions related to dispatching event\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/event-dispatcher-contracts/tree/v2.4.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-03-23T23:28:01+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v5.3.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"343f4fe324383ca46792cae728a3b6e2f708fb32\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/343f4fe324383ca46792cae728a3b6e2f708fb32\",
                \"reference\": \"343f4fe324383ca46792cae728a3b6e2f708fb32\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-php80\": \"^1.16\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Filesystem\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Provides basic utilities for the filesystem\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/filesystem/tree/v5.3.4\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-07-21T12:40:44+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"b6b6ad3db3edb1b4b1c1896b1975fb684994de6e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/b6b6ad3db3edb1b4b1c1896b1975fb684994de6e\",
                \"reference\": \"b6b6ad3db3edb1b4b1c1896b1975fb684994de6e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Finder\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony Finder Component\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/finder/tree/v3.4.47\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2020-11-16T17:02:08+00:00\"
        },
        {
            \"name\": \"symfony/options-resolver\",
            \"version\": \"v5.3.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"4b78e55b179003a42523a362cc0e8327f7a69b5e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/4b78e55b179003a42523a362cc0e8327f7a69b5e\",
                \"reference\": \"4b78e55b179003a42523a362cc0e8327f7a69b5e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/deprecation-contracts\": \"^2.1\",
                \"symfony/polyfill-php73\": \"~1.0\",
                \"symfony/polyfill-php80\": \"^1.16\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\OptionsResolver\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Provides an improved replacement for the array_replace PHP function\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"config\",
                \"configuration\",
                \"options\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/options-resolver/tree/v5.3.7\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-08-04T21:20:46+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.23.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"46cd95797e9df938fdd2b03693b5fca5e64b01ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/46cd95797e9df938fdd2b03693b5fca5e64b01ce\",
                \"reference\": \"46cd95797e9df938fdd2b03693b5fca5e64b01ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"suggest\": {
                \"ext-ctype\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.23-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Ctype\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Gert de Pagter\",
                    \"email\": \"BackEndTea@gmail.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for ctype functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"ctype\",
                \"polyfill\",
                \"portable\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-ctype/tree/v1.23.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-02-19T12:13:01+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.23.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"9174a3d80210dca8daa7f31fec659150bbeabfc6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/9174a3d80210dca8daa7f31fec659150bbeabfc6\",
                \"reference\": \"9174a3d80210dca8daa7f31fec659150bbeabfc6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.23-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill for the Mbstring extension\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"mbstring\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-mbstring/tree/v1.23.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-05-27T12:26:48+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php70\",
            \"version\": \"v1.20.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php70.git\",
                \"reference\": \"5f03a781d984aae42cebd18e7912fa80f02ee644\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php70/zipball/5f03a781d984aae42cebd18e7912fa80f02ee644\",
                \"reference\": \"5f03a781d984aae42cebd18e7912fa80f02ee644\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"metapackage\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.20-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill backporting some PHP 7.0+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-php70/tree/v1.20.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2020-10-23T14:02:19+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php72\",
            \"version\": \"v1.23.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php72.git\",
                \"reference\": \"9a142215a36a3888e30d0a9eeea9766764e96976\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php72/zipball/9a142215a36a3888e30d0a9eeea9766764e96976\",
                \"reference\": \"9a142215a36a3888e30d0a9eeea9766764e96976\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.23-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php72\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-php72/tree/v1.23.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-05-27T09:17:38+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.23.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"fba8933c384d6476ab14fb7b8526e5287ca7e010\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/fba8933c384d6476ab14fb7b8526e5287ca7e010\",
                \"reference\": \"fba8933c384d6476ab14fb7b8526e5287ca7e010\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.23-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"classmap\": [
                    \"Resources/stubs\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-php73/tree/v1.23.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-02-19T12:13:01+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php80\",
            \"version\": \"v1.23.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php80.git\",
                \"reference\": \"1100343ed1a92e3a38f9ae122fc0eb21602547be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php80/zipball/1100343ed1a92e3a38f9ae122fc0eb21602547be\",
                \"reference\": \"1100343ed1a92e3a38f9ae122fc0eb21602547be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.23-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php80\\\\\": \"\"
                },
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"classmap\": [
                    \"Resources/stubs\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Ion Bazan\",
                    \"email\": \"ion.bazan@gmail.com\"
                },
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-php80/tree/v1.23.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-07-28T13:41:28+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v5.3.7\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"38f26c7d6ed535217ea393e05634cb0b244a1967\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/38f26c7d6ed535217ea393e05634cb0b244a1967\",
                \"reference\": \"38f26c7d6ed535217ea393e05634cb0b244a1967\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/polyfill-php80\": \"^1.16\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Process\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Executes commands in sub-processes\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/process/tree/v5.3.7\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-08-04T21:20:46+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v2.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb\",
                \"reference\": \"f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"psr/container\": \"^1.1\"
            },
            \"suggest\": {
                \"symfony/service-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"2.4-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/contracts\",
                    \"url\": \"https://github.com/symfony/contracts\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Contracts\\\\Service\\\\\": \"\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Generic abstractions related to writing services\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"abstractions\",
                \"contracts\",
                \"decoupling\",
                \"interfaces\",
                \"interoperability\",
                \"standards\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/service-contracts/tree/v2.4.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-04-01T10:43:52+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v5.3.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"b24c6a92c6db316fee69e38c80591e080e41536c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/b24c6a92c6db316fee69e38c80591e080e41536c\",
                \"reference\": \"b24c6a92c6db316fee69e38c80591e080e41536c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/service-contracts\": \"^1.0|^2\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\Stopwatch\\\\\": \"\"
                },
                \"exclude-from-classmap\": [
                    \"/Tests/\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Fabien Potencier\",
                    \"email\": \"fabien@symfony.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Provides a way to profile code\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/stopwatch/tree/v5.3.4\"
            },
            \"funding\": [
                {
                    \"url\": \"https://symfony.com/sponsor\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/fabpot\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/symfony/symfony\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-07-10T08:58:57+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \">=5.4\"
    },
    \"platform-dev\": [],
    \"plugin-api-version\": \"2.0.0\"
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/statscatalog/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statscatalog/composer.lock", "/var/www/html/modules/statscatalog/composer.lock");
    }
}
