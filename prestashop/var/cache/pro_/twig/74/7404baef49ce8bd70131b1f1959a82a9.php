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

/* @Modules/dashtrends/composer.lock */
class __TwigTemplate_c39302b88c5ed81b8ac50b561b6ca03f extends Template
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
    \"content-hash\": \"777bb014c5dd195f95f328928c880106\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"composer/semver\",
            \"version\": \"3.2.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"83e511e247de329283478496f7a1e114c9517506\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/83e511e247de329283478496f7a1e114c9517506\",
                \"reference\": \"83e511e247de329283478496f7a1e114c9517506\",
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
            \"time\": \"2021-10-25T11:34:17+00:00\"
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
            \"version\": \"v1.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"54cacc9b81758b14e3ce750f205a393d52339e97\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/54cacc9b81758b14e3ce750f205a393d52339e97\",
                \"reference\": \"54cacc9b81758b14e3ce750f205a393d52339e97\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"1.*\",
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"1.*\",
                \"phpunit/phpunit\": \"^5.7\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.4.x-dev\"
                }
            },
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Benjamin Eberlei\",
                    \"email\": \"kontakt@beberlei.de\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"homepage\": \"http://www.doctrine-project.org\",
            \"keywords\": [
                \"annotations\",
                \"docblock\",
                \"parser\"
            ],
            \"time\": \"2017-02-24T16:22:25+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"1febd6c3ef84253d7c815bed85fc622ad207a9f8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/1febd6c3ef84253d7c815bed85fc622ad207a9f8\",
                \"reference\": \"1febd6c3ef84253d7c815bed85fc622ad207a9f8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
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
                    \"name\": \"Roman Borschel\",
                    \"email\": \"roman@code-factory.org\"
                },
                {
                    \"name\": \"Guilherme Blanco\",
                    \"email\": \"guilhermeblanco@gmail.com\"
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
            \"time\": \"2019-06-08T11:03:04+00:00\"
        },
        {
            \"name\": \"friendsofphp/php-cs-fixer\",
            \"version\": \"v2.19.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer.git\",
                \"reference\": \"75ac86f33fab4714ea5a39a396784d83ae3b5ed8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/FriendsOfPHP/PHP-CS-Fixer/zipball/75ac86f33fab4714ea5a39a396784d83ae3b5ed8\",
                \"reference\": \"75ac86f33fab4714ea5a39a396784d83ae3b5ed8\",
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
            \"funding\": [
                {
                    \"url\": \"https://github.com/keradus\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-11-15T17:17:55+00:00\"
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
            \"time\": \"2018-02-28T20:30:58+00:00\"
        },
        {
            \"name\": \"paragonie/random_compat\",
            \"version\": \"v2.0.20\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/paragonie/random_compat.git\",
                \"reference\": \"0f1f60250fccffeaf5dda91eea1c018aed1adc2a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/paragonie/random_compat/zipball/0f1f60250fccffeaf5dda91eea1c018aed1adc2a\",
                \"reference\": \"0f1f60250fccffeaf5dda91eea1c018aed1adc2a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.2.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"4.*|5.*\"
            },
            \"suggest\": {
                \"ext-libsodium\": \"Provides a modern crypto API that can be used to generate random bytes.\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"files\": [
                    \"lib/random.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Paragon Initiative Enterprises\",
                    \"email\": \"security@paragonie.com\",
                    \"homepage\": \"https://paragonie.com\"
                }
            ],
            \"description\": \"PHP 5.x polyfill for random_bytes() and random_int() from PHP 7\",
            \"keywords\": [
                \"csprng\",
                \"polyfill\",
                \"pseudorandom\",
                \"random\"
            ],
            \"time\": \"2021-04-17T09:33:01+00:00\"
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
            \"time\": \"2020-12-09T16:40:38+00:00\"
        },
        {
            \"name\": \"prestashop/php-dev-tools\",
            \"version\": \"v3.16.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShop/php-dev-tools.git\",
                \"reference\": \"785108c29ef6f580930372d88b8f551740fdee98\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShop/php-dev-tools/zipball/785108c29ef6f580930372d88b8f551740fdee98\",
                \"reference\": \"785108c29ef6f580930372d88b8f551740fdee98\",
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
            \"time\": \"2021-10-18T07:48:21+00:00\"
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
            \"time\": \"2021-05-03T11:20:27+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.6.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"f268ca40d54617c6e06757f83f699775c9b3ff2e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/f268ca40d54617c6e06757f83f699775c9b3ff2e\",
                \"reference\": \"f268ca40d54617c6e06757f83f699775c9b3ff2e\",
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
            \"time\": \"2021-10-11T04:00:11+00:00\"
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
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"ab42889de57fdfcfcc0759ab102e2fd4ea72dcae\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/ab42889de57fdfcfcc0759ab102e2fd4ea72dcae\",
                \"reference\": \"ab42889de57fdfcfcc0759ab102e2fd4ea72dcae\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"psr/log\": \"~1.0\"
            },
            \"conflict\": {
                \"symfony/http-kernel\": \">=2.3,<2.3.24|~2.4.0|>=2.5,<2.5.9|>=2.6,<2.6.2\"
            },
            \"require-dev\": {
                \"symfony/http-kernel\": \"~2.8|~3.0|~4.0\"
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
            \"description\": \"Symfony Debug Component\",
            \"homepage\": \"https://symfony.com\",
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
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"31fde73757b6bad247c54597beef974919ec6860\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/31fde73757b6bad247c54597beef974919ec6860\",
                \"reference\": \"31fde73757b6bad247c54597beef974919ec6860\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"conflict\": {
                \"symfony/dependency-injection\": \"<3.3\"
            },
            \"require-dev\": {
                \"psr/log\": \"~1.0\",
                \"symfony/config\": \"~2.8|~3.0|~4.0\",
                \"symfony/debug\": \"~3.4|~4.4\",
                \"symfony/dependency-injection\": \"~3.3|~4.0\",
                \"symfony/expression-language\": \"~2.8|~3.0|~4.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0|~4.0\"
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
            \"description\": \"Symfony EventDispatcher Component\",
            \"homepage\": \"https://symfony.com\",
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
            \"name\": \"symfony/filesystem\",
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"e58d7841cddfed6e846829040dca2cca0ebbbbb3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/e58d7841cddfed6e846829040dca2cca0ebbbbb3\",
                \"reference\": \"e58d7841cddfed6e846829040dca2cca0ebbbbb3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/polyfill-ctype\": \"~1.8\"
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
            \"description\": \"Symfony Filesystem Component\",
            \"homepage\": \"https://symfony.com\",
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
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"c7efc97a47b2ebaabc19d5b6c6b50f5c37c92744\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/c7efc97a47b2ebaabc19d5b6c6b50f5c37c92744\",
                \"reference\": \"c7efc97a47b2ebaabc19d5b6c6b50f5c37c92744\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
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
            \"description\": \"Symfony OptionsResolver Component\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"config\",
                \"configuration\",
                \"options\"
            ],
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
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.19.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"aed596913b70fae57be53d86faa2e9ef85a2297b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/aed596913b70fae57be53d86faa2e9ef85a2297b\",
                \"reference\": \"aed596913b70fae57be53d86faa2e9ef85a2297b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-ctype\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.19-dev\"
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
            \"time\": \"2020-10-23T09:01:57+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.19.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"b5f7b932ee6fa802fc792eabd77c4c88084517ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/b5f7b932ee6fa802fc792eabd77c4c88084517ce\",
                \"reference\": \"b5f7b932ee6fa802fc792eabd77c4c88084517ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"suggest\": {
                \"ext-mbstring\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.19-dev\"
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
            \"time\": \"2020-10-23T09:01:57+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php70\",
            \"version\": \"v1.19.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php70.git\",
                \"reference\": \"3fe414077251a81a1b15b1c709faf5c2fbae3d4e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php70/zipball/3fe414077251a81a1b15b1c709faf5c2fbae3d4e\",
                \"reference\": \"3fe414077251a81a1b15b1c709faf5c2fbae3d4e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"paragonie/random_compat\": \"~1.0|~2.0|~9.99\",
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.19-dev\"
                },
                \"thanks\": {
                    \"name\": \"symfony/polyfill\",
                    \"url\": \"https://github.com/symfony/polyfill\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php70\\\\\": \"\"
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
            \"description\": \"Symfony polyfill backporting some PHP 7.0+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
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
            \"time\": \"2020-10-23T09:01:57+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php72\",
            \"version\": \"v1.19.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php72.git\",
                \"reference\": \"beecef6b463b06954638f02378f52496cb84bacc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php72/zipball/beecef6b463b06954638f02378f52496cb84bacc\",
                \"reference\": \"beecef6b463b06954638f02378f52496cb84bacc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.19-dev\"
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
            \"time\": \"2020-10-23T09:01:57+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"b8648cf1d5af12a44a51d07ef9bf980921f15fca\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/b8648cf1d5af12a44a51d07ef9bf980921f15fca\",
                \"reference\": \"b8648cf1d5af12a44a51d07ef9bf980921f15fca\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
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
            \"description\": \"Symfony Process Component\",
            \"homepage\": \"https://symfony.com\",
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
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v3.4.47\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"298b81faad4ce60e94466226b2abbb8c9bca7462\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/298b81faad4ce60e94466226b2abbb8c9bca7462\",
                \"reference\": \"298b81faad4ce60e94466226b2abbb8c9bca7462\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
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
            \"description\": \"Symfony Stopwatch Component\",
            \"homepage\": \"https://symfony.com\",
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
    \"plugin-api-version\": \"1.1.0\"
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/dashtrends/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/dashtrends/composer.lock", "/var/www/html/modules/dashtrends/composer.lock");
    }
}
