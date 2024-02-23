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

/* @Modules/ps_googleanalytics/composer.lock */
class __TwigTemplate_54628bd472cac7ce438fbb7eb13cfdfe extends Template
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
    \"content-hash\": \"0a3bd8957594bdcbb3102ba56a6cd5f5\",
    \"packages\": [],
    \"packages-dev\": [
        {
            \"name\": \"composer/semver\",
            \"version\": \"1.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"c6bea70230ef4dd483e6bbcab6005f682ed3a8de\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/c6bea70230ef4dd483e6bbcab6005f682ed3a8de\",
                \"reference\": \"c6bea70230ef4dd483e6bbcab6005f682ed3a8de\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.5 || ^5.0.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
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
            \"time\": \"2020-01-13T12:06:48+00:00\"
        },
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"1.4.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"1ab9842d69e64fb3a01be6b656501032d1b78cb7\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/1ab9842d69e64fb3a01be6b656501032d1b78cb7\",
                \"reference\": \"1ab9842d69e64fb3a01be6b656501032d1b78cb7\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.3.2 || ^7.0 || ^8.0\",
                \"psr/log\": \"^1.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^4.8.35 || ^5.7 || 6.5 - 8\"
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
                }
            ],
            \"time\": \"2020-03-01T12:26:26+00:00\"
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
            \"version\": \"v2.16.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer.git\",
                \"reference\": \"83baf823a33a1cbd5416c8626935cf3f843c10b0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/FriendsOfPHP/PHP-CS-Fixer/zipball/83baf823a33a1cbd5416c8626935cf3f843c10b0\",
                \"reference\": \"83baf823a33a1cbd5416c8626935cf3f843c10b0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/semver\": \"^1.4\",
                \"composer/xdebug-handler\": \"^1.2\",
                \"doctrine/annotations\": \"^1.2\",
                \"ext-json\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^5.6 || ^7.0\",
                \"php-cs-fixer/diff\": \"^1.3\",
                \"symfony/console\": \"^3.4.17 || ^4.1.6 || ^5.0\",
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
                \"johnkary/phpunit-speedtrap\": \"^1.1 || ^2.0 || ^3.0\",
                \"justinrainbow/json-schema\": \"^5.0\",
                \"keradus/cli-executor\": \"^1.2\",
                \"mikey179/vfsstream\": \"^1.6\",
                \"php-coveralls/php-coveralls\": \"^2.1\",
                \"php-cs-fixer/accessible-object\": \"^1.0\",
                \"php-cs-fixer/phpunit-constraint-isidenticalstring\": \"^1.1\",
                \"php-cs-fixer/phpunit-constraint-xmlmatchesxsd\": \"^1.1\",
                \"phpunit/phpunit\": \"^5.7.27 || ^6.5.14 || ^7.1\",
                \"phpunitgoodpractices/traits\": \"^1.8\",
                \"symfony/phpunit-bridge\": \"^4.3 || ^5.0\",
                \"symfony/yaml\": \"^3.0 || ^4.0 || ^5.0\"
            },
            \"suggest\": {
                \"ext-dom\": \"For handling output formats in XML\",
                \"ext-mbstring\": \"For handling non-UTF8 characters in cache signature.\",
                \"php-cs-fixer/phpunit-constraint-isidenticalstring\": \"For IsIdenticalString constraint.\",
                \"php-cs-fixer/phpunit-constraint-xmlmatchesxsd\": \"For XmlMatchesXsd constraint.\",
                \"symfony/polyfill-mbstring\": \"When enabling `ext-mbstring` is not possible.\"
            },
            \"bin\": [
                \"php-cs-fixer\"
            ],
            \"type\": \"application\",
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
            \"time\": \"2020-04-15T18:51:10+00:00\"
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
            \"version\": \"v2.0.18\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/paragonie/random_compat.git\",
                \"reference\": \"0a58ef6e3146256cc3dc7cc393927bcc7d1b72db\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/paragonie/random_compat/zipball/0a58ef6e3146256cc3dc7cc393927bcc7d1b72db\",
                \"reference\": \"0a58ef6e3146256cc3dc7cc393927bcc7d1b72db\",
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
            \"time\": \"2019-01-03T20:59:08+00:00\"
        },
        {
            \"name\": \"php-cs-fixer/diff\",
            \"version\": \"v1.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PHP-CS-Fixer/diff.git\",
                \"reference\": \"78bb099e9c16361126c86ce82ec4405ebab8e756\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PHP-CS-Fixer/diff/zipball/78bb099e9c16361126c86ce82ec4405ebab8e756\",
                \"reference\": \"78bb099e9c16361126c86ce82ec4405ebab8e756\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.6 || ^7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^5.7.23 || ^6.4.3\",
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
                    \"name\": \"Kore Nordmann\",
                    \"email\": \"mail@kore-nordmann.de\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\"
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
            \"time\": \"2018-02-15T16:58:55+00:00\"
        },
        {
            \"name\": \"prestashop/header-stamp\",
            \"version\": \"v1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/header-stamp.git\",
                \"reference\": \"cc83b8f315dded710aebd73b3bac2aa4a2931fe1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/header-stamp/zipball/cc83b8f315dded710aebd73b3bac2aa4a2931fe1\",
                \"reference\": \"cc83b8f315dded710aebd73b3bac2aa4a2931fe1\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^3.1\",
                \"php\": \">=5.6\",
                \"symfony/console\": \"^3.4\",
                \"symfony/finder\": \"^3.4\"
            },
            \"require-dev\": {
                \"prestashop/php-coding-standards\": \"dev-master\"
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
            \"homepage\": \"https://github.com/PrestaShop/pimp_my_header\",
            \"time\": \"2019-11-12T08:59:19+00:00\"
        },
        {
            \"name\": \"prestashop/php-dev-tools\",
            \"version\": \"v3.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShop/php-dev-tools.git\",
                \"reference\": \"837eeb0518fddb7978445170673a44af5b2a2fb2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShop/php-dev-tools/zipball/837eeb0518fddb7978445170673a44af5b2a2fb2\",
                \"reference\": \"837eeb0518fddb7978445170673a44af5b2a2fb2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"friendsofphp/php-cs-fixer\": \"^2.14\",
                \"php\": \">=5.6.0\",
                \"prestashop/header-stamp\": \"^1.0\",
                \"squizlabs/php_codesniffer\": \"^3.4\",
                \"symfony/console\": \"~3.2 || ~4.0\",
                \"symfony/filesystem\": \"~3.2 || ~4.0\"
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
            \"time\": \"2020-05-04T08:19:03+00:00\"
        },
        {
            \"name\": \"psr/log\",
            \"version\": \"1.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/log.git\",
                \"reference\": \"0f73288fd15629204f9d42b7055f72dacbe811fc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/log/zipball/0f73288fd15629204f9d42b7055f72dacbe811fc\",
                \"reference\": \"0f73288fd15629204f9d42b7055f72dacbe811fc\",
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
                    \"homepage\": \"http://www.php-fig.org/\"
                }
            ],
            \"description\": \"Common interface for logging libraries\",
            \"homepage\": \"https://github.com/php-fig/log\",
            \"keywords\": [
                \"log\",
                \"psr\",
                \"psr-3\"
            ],
            \"time\": \"2020-03-23T09:12:05+00:00\"
        },
        {
            \"name\": \"squizlabs/php_codesniffer\",
            \"version\": \"3.5.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"73e2e7f57d958e7228fce50dc0c61f58f017f9f6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/73e2e7f57d958e7228fce50dc0c61f58f017f9f6\",
                \"reference\": \"73e2e7f57d958e7228fce50dc0c61f58f017f9f6\",
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
            \"time\": \"2020-04-17T01:09:41+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"bf60d5e606cd595391c5f82bf6b570d9573fa120\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/bf60d5e606cd595391c5f82bf6b570d9573fa120\",
                \"reference\": \"bf60d5e606cd595391c5f82bf6b570d9573fa120\",
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
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-03-27T17:07:22+00:00\"
        },
        {
            \"name\": \"symfony/debug\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/debug.git\",
                \"reference\": \"ce9f3b5e8e1c50f849fded59b3a1b6bc3562ec29\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/debug/zipball/ce9f3b5e8e1c50f849fded59b3a1b6bc3562ec29\",
                \"reference\": \"ce9f3b5e8e1c50f849fded59b3a1b6bc3562ec29\",
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
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-03-23T10:22:40+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"9d4e22943b73acc1ba50595b7de1a01fe9dbad48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/9d4e22943b73acc1ba50595b7de1a01fe9dbad48\",
                \"reference\": \"9d4e22943b73acc1ba50595b7de1a01fe9dbad48\",
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
                \"symfony/dependency-injection\": \"~3.3|~4.0\",
                \"symfony/expression-language\": \"~2.8|~3.0|~4.0\",
                \"symfony/stopwatch\": \"~2.8|~3.0|~4.0\"
            },
            \"suggest\": {
                \"symfony/dependency-injection\": \"\",
                \"symfony/http-kernel\": \"\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-03-15T09:38:08+00:00\"
        },
        {
            \"name\": \"symfony/filesystem\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"78a93e5606a19d0fb490afc3c4a9b7ecd86e1515\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/78a93e5606a19d0fb490afc3c4a9b7ecd86e1515\",
                \"reference\": \"78a93e5606a19d0fb490afc3c4a9b7ecd86e1515\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\",
                \"symfony/polyfill-ctype\": \"~1.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-04-12T16:54:01+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"5ec813ccafa8164ef21757e8c725d3a57da59200\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/5ec813ccafa8164ef21757e8c725d3a57da59200\",
                \"reference\": \"5ec813ccafa8164ef21757e8c725d3a57da59200\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-02-14T07:34:21+00:00\"
        },
        {
            \"name\": \"symfony/options-resolver\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"79701529391f802604ec92080364d617f029974b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/79701529391f802604ec92080364d617f029974b\",
                \"reference\": \"79701529391f802604ec92080364d617f029974b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-04-06T08:30:32+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.15.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"4719fa9c18b0464d399f1a63bf624b42b6fa8d14\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/4719fa9c18b0464d399f1a63bf624b42b6fa8d14\",
                \"reference\": \"4719fa9c18b0464d399f1a63bf624b42b6fa8d14\",
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
                    \"dev-master\": \"1.15-dev\"
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
            \"time\": \"2020-02-27T09:26:54+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.15.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"81ffd3a9c6d707be22e3012b827de1c9775fc5ac\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/81ffd3a9c6d707be22e3012b827de1c9775fc5ac\",
                \"reference\": \"81ffd3a9c6d707be22e3012b827de1c9775fc5ac\",
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
                    \"dev-master\": \"1.15-dev\"
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
            \"time\": \"2020-03-09T19:04:49+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php70\",
            \"version\": \"v1.15.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php70.git\",
                \"reference\": \"2a18e37a489803559284416df58c71ccebe50bf0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php70/zipball/2a18e37a489803559284416df58c71ccebe50bf0\",
                \"reference\": \"2a18e37a489803559284416df58c71ccebe50bf0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"paragonie/random_compat\": \"~1.0|~2.0|~9.99\",
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.15-dev\"
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
            \"time\": \"2020-02-27T09:26:54+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php72\",
            \"version\": \"v1.15.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php72.git\",
                \"reference\": \"37b0976c78b94856543260ce09b460a7bc852747\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php72/zipball/37b0976c78b94856543260ce09b460a7bc852747\",
                \"reference\": \"37b0976c78b94856543260ce09b460a7bc852747\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.15-dev\"
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
            \"time\": \"2020-02-27T09:26:54+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"f5104c9dcbc2cfad45d01d5150c1da9836967271\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/f5104c9dcbc2cfad45d01d5150c1da9836967271\",
                \"reference\": \"f5104c9dcbc2cfad45d01d5150c1da9836967271\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-04-12T14:33:46+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v3.4.40\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"a7a98f40dcc382a332c3729a6d04b298ffbb8f1f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/a7a98f40dcc382a332c3729a6d04b298ffbb8f1f\",
                \"reference\": \"a7a98f40dcc382a332c3729a6d04b298ffbb8f1f\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^5.5.9|>=7.0.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.4-dev\"
                }
            },
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
            \"time\": \"2020-03-15T09:38:08+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \">=5.6\"
    },
    \"platform-dev\": [],
    \"platform-overrides\": {
        \"php\": \"5.6\"
    },
    \"plugin-api-version\": \"1.1.0\"
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_googleanalytics/composer.lock", "/var/www/html/modules/ps_googleanalytics/composer.lock");
    }
}
