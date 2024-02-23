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

/* @Modules/ps_sharebuttons/composer.lock */
class __TwigTemplate_f204849bac1863570bf33fd7f9e04255 extends Template
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
    \"content-hash\": \"4f9e455b321867ff2e3d0e4dfa4e9e7e\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"composer/pcre\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/pcre.git\",
                \"reference\": \"67a32d7d6f9f560b726ab25a061b38ff3a80c560\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/pcre/zipball/67a32d7d6f9f560b726ab25a061b38ff3a80c560\",
                \"reference\": \"67a32d7d6f9f560b726ab25a061b38ff3a80c560\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^1.3\",
                \"phpstan/phpstan-strict-rules\": \"^1.1\",
                \"symfony/phpunit-bridge\": \"^4.2 || ^5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Composer\\\\Pcre\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jordi Boggiano\",
                    \"email\": \"j.boggiano@seld.be\",
                    \"homepage\": \"http://seld.be\"
                }
            ],
            \"description\": \"PCRE wrapping library that offers type-safe preg_* replacements.\",
            \"keywords\": [
                \"PCRE\",
                \"preg\",
                \"regex\",
                \"regular expression\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/composer/pcre/issues\",
                \"source\": \"https://github.com/composer/pcre/tree/1.0.1\"
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
            \"time\": \"2022-01-21T20:24:37+00:00\"
        },
        {
            \"name\": \"composer/semver\",
            \"version\": \"3.2.9\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"a951f614bd64dcd26137bc9b7b2637ddcfc57649\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/a951f614bd64dcd26137bc9b7b2637ddcfc57649\",
                \"reference\": \"a951f614bd64dcd26137bc9b7b2637ddcfc57649\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^1.4\",
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
                \"source\": \"https://github.com/composer/semver/tree/3.2.9\"
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
            \"time\": \"2022-02-04T13:58:43+00:00\"
        },
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"2.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"0c1a3925ec58a4ec98e992b9c7d171e9e184be0a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/0c1a3925ec58a4ec98e992b9c7d171e9e184be0a\",
                \"reference\": \"0c1a3925ec58a4ec98e992b9c7d171e9e184be0a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/pcre\": \"^1\",
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\",
                \"psr/log\": \"^1 || ^2 || ^3\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^1.0\",
                \"phpstan/phpstan-strict-rules\": \"^1.1\",
                \"symfony/phpunit-bridge\": \"^4.2 || ^5.0 || ^6.0\"
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
                \"source\": \"https://github.com/composer/xdebug-handler/tree/2.0.4\"
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
            \"time\": \"2022-01-04T17:06:45+00:00\"
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
            \"version\": \"1.2.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c\",
                \"reference\": \"9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1 || ^8.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^9.0\",
                \"phpstan/phpstan\": \"1.3\",
                \"phpunit/phpunit\": \"^7.5 || ^8.5 || ^9.5\",
                \"vimeo/psalm\": \"^4.11\"
            },
            \"type\": \"library\",
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
                \"source\": \"https://github.com/doctrine/lexer/tree/1.2.2\"
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
            \"time\": \"2022-01-12T08:27:12+00:00\"
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
            \"support\": {
                \"issues\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues\",
                \"source\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer/tree/v2.19.3\"
            },
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
            \"support\": {
                \"issues\": \"https://github.com/PrestaShop/php-dev-tools/issues\",
                \"source\": \"https://github.com/PrestaShop/php-dev-tools/tree/v3.16.1\"
            },
            \"time\": \"2021-10-18T07:48:21+00:00\"
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
            \"version\": \"3.6.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"5e4e71592f69da17871dba6e80dd51bce74a351a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/5e4e71592f69da17871dba6e80dd51bce74a351a\",
                \"reference\": \"5e4e71592f69da17871dba6e80dd51bce74a351a\",
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
            \"time\": \"2021-12-12T21:44:58+00:00\"
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
            \"version\": \"v4.4.37\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"5de6c6e7f52b364840e53851c126be4d71e60470\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/5de6c6e7f52b364840e53851c126be4d71e60470\",
                \"reference\": \"5de6c6e7f52b364840e53851c126be4d71e60470\",
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
                \"source\": \"https://github.com/symfony/debug/tree/v4.4.37\"
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
            \"time\": \"2022-01-02T09:41:36+00:00\"
        },
        {
            \"name\": \"symfony/deprecation-contracts\",
            \"version\": \"v2.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/deprecation-contracts.git\",
                \"reference\": \"6f981ee24cf69ee7ce9736146d1c57c2780598a8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/deprecation-contracts/zipball/6f981ee24cf69ee7ce9736146d1c57c2780598a8\",
                \"reference\": \"6f981ee24cf69ee7ce9736146d1c57c2780598a8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"2.5-dev\"
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
                \"source\": \"https://github.com/symfony/deprecation-contracts/tree/v2.5.0\"
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
            \"time\": \"2021-07-12T14:48:14+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"dec8a9f58d20df252b9cd89f1c6c1530f747685d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/dec8a9f58d20df252b9cd89f1c6c1530f747685d\",
                \"reference\": \"dec8a9f58d20df252b9cd89f1c6c1530f747685d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/deprecation-contracts\": \"^2.1|^3\",
                \"symfony/event-dispatcher-contracts\": \"^2|^3\",
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
                \"symfony/config\": \"^4.4|^5.0|^6.0\",
                \"symfony/dependency-injection\": \"^4.4|^5.0|^6.0\",
                \"symfony/error-handler\": \"^4.4|^5.0|^6.0\",
                \"symfony/expression-language\": \"^4.4|^5.0|^6.0\",
                \"symfony/http-foundation\": \"^4.4|^5.0|^6.0\",
                \"symfony/service-contracts\": \"^1.1|^2|^3\",
                \"symfony/stopwatch\": \"^4.4|^5.0|^6.0\"
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
                \"source\": \"https://github.com/symfony/event-dispatcher/tree/v5.4.3\"
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
            \"time\": \"2022-01-02T09:53:40+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher-contracts\",
            \"version\": \"v2.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
                \"reference\": \"66bea3b09be61613cd3b4043a65a8ec48cfa6d2a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/66bea3b09be61613cd3b4043a65a8ec48cfa6d2a\",
                \"reference\": \"66bea3b09be61613cd3b4043a65a8ec48cfa6d2a\",
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
                    \"dev-main\": \"2.5-dev\"
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
                \"source\": \"https://github.com/symfony/event-dispatcher-contracts/tree/v2.5.0\"
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
            \"time\": \"2021-07-12T14:48:14+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"0f0c4bf1840420f4aef3f32044a9dbb24682731b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/0f0c4bf1840420f4aef3f32044a9dbb24682731b\",
                \"reference\": \"0f0c4bf1840420f4aef3f32044a9dbb24682731b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-mbstring\": \"~1.8\",
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
                \"source\": \"https://github.com/symfony/filesystem/tree/v5.4.3\"
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
            \"time\": \"2022-01-02T09:53:40+00:00\"
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
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"cc1147cb11af1b43f503ac18f31aa3bec213aba8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/cc1147cb11af1b43f503ac18f31aa3bec213aba8\",
                \"reference\": \"cc1147cb11af1b43f503ac18f31aa3bec213aba8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/deprecation-contracts\": \"^2.1|^3\",
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
                \"source\": \"https://github.com/symfony/options-resolver/tree/v5.4.3\"
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
            \"time\": \"2022-01-02T09:53:40+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.24.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"30885182c981ab175d4d034db0f6f469898070ab\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/30885182c981ab175d4d034db0f6f469898070ab\",
                \"reference\": \"30885182c981ab175d4d034db0f6f469898070ab\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"provide\": {
                \"ext-ctype\": \"*\"
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
                \"source\": \"https://github.com/symfony/polyfill-ctype/tree/v1.24.0\"
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
            \"time\": \"2021-10-20T20:35:02+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.24.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"0abb51d2f102e00a4eefcf46ba7fec406d245825\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/0abb51d2f102e00a4eefcf46ba7fec406d245825\",
                \"reference\": \"0abb51d2f102e00a4eefcf46ba7fec406d245825\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"provide\": {
                \"ext-mbstring\": \"*\"
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
                \"source\": \"https://github.com/symfony/polyfill-mbstring/tree/v1.24.0\"
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
            \"time\": \"2021-11-30T18:21:41+00:00\"
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
            \"version\": \"v1.24.0\",
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
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php72\\\\\": \"\"
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
            \"description\": \"Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-php72/tree/v1.24.0\"
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
            \"version\": \"v1.24.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"cc5db0e22b3cb4111010e48785a97f670b350ca5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/cc5db0e22b3cb4111010e48785a97f670b350ca5\",
                \"reference\": \"cc5db0e22b3cb4111010e48785a97f670b350ca5\",
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
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php73\\\\\": \"\"
                },
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
                \"source\": \"https://github.com/symfony/polyfill-php73/tree/v1.24.0\"
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
            \"time\": \"2021-06-05T21:20:04+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php80\",
            \"version\": \"v1.24.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php80.git\",
                \"reference\": \"57b712b08eddb97c762a8caa32c84e037892d2e9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php80/zipball/57b712b08eddb97c762a8caa32c84e037892d2e9\",
                \"reference\": \"57b712b08eddb97c762a8caa32c84e037892d2e9\",
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
                \"files\": [
                    \"bootstrap.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Polyfill\\\\Php80\\\\\": \"\"
                },
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
                \"source\": \"https://github.com/symfony/polyfill-php80/tree/v1.24.0\"
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
            \"time\": \"2021-09-13T13:58:33+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"553f50487389a977eb31cf6b37faae56da00f753\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/553f50487389a977eb31cf6b37faae56da00f753\",
                \"reference\": \"553f50487389a977eb31cf6b37faae56da00f753\",
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
                \"source\": \"https://github.com/symfony/process/tree/v5.4.3\"
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
            \"time\": \"2022-01-26T16:28:35+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v2.5.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc\",
                \"reference\": \"1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"psr/container\": \"^1.1\",
                \"symfony/deprecation-contracts\": \"^2.1\"
            },
            \"conflict\": {
                \"ext-psr\": \"<1.1|>=2\"
            },
            \"suggest\": {
                \"symfony/service-implementation\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"2.5-dev\"
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
                \"source\": \"https://github.com/symfony/service-contracts/tree/v2.5.0\"
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
            \"time\": \"2021-11-04T16:48:04+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"395220730edceb6bd745236ccb5c9125c748f779\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/395220730edceb6bd745236ccb5c9125c748f779\",
                \"reference\": \"395220730edceb6bd745236ccb5c9125c748f779\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/service-contracts\": \"^1|^2|^3\"
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
                \"source\": \"https://github.com/symfony/stopwatch/tree/v5.4.3\"
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
            \"time\": \"2022-01-02T09:53:40+00:00\"
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
    \"plugin-api-version\": \"2.2.0\"
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_sharebuttons/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_sharebuttons/composer.lock", "/var/www/html/modules/ps_sharebuttons/composer.lock");
    }
}
