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

/* @Modules/productcomments/composer.lock */
class __TwigTemplate_f319400095e957fb9480b73c0c973aeb extends Template
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
    \"content-hash\": \"8b03b0cfb726154b52b8caea005883ed\",
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
            \"version\": \"3.3.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"3953f23262f2bff1919fc82183ad9acb13ff62c9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/3953f23262f2bff1919fc82183ad9acb13ff62c9\",
                \"reference\": \"3953f23262f2bff1919fc82183ad9acb13ff62c9\",
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
                \"source\": \"https://github.com/composer/semver/tree/3.3.2\"
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
            \"time\": \"2022-04-01T19:23:25+00:00\"
        },
        {
            \"name\": \"composer/xdebug-handler\",
            \"version\": \"2.0.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/xdebug-handler.git\",
                \"reference\": \"9e36aeed4616366d2b690bdce11f71e9178c579a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/xdebug-handler/zipball/9e36aeed4616366d2b690bdce11f71e9178c579a\",
                \"reference\": \"9e36aeed4616366d2b690bdce11f71e9178c579a\",
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
                \"source\": \"https://github.com/composer/xdebug-handler/tree/2.0.5\"
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
            \"time\": \"2022-02-24T20:20:32+00:00\"
        },
        {
            \"name\": \"doctrine/annotations\",
            \"version\": \"1.14.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/annotations.git\",
                \"reference\": \"fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/annotations/zipball/fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af\",
                \"reference\": \"fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/lexer\": \"^1 || ^2\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.1 || ^8.0\",
                \"psr/cache\": \"^1 || ^2 || ^3\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"^1.11 || ^2.0\",
                \"doctrine/coding-standard\": \"^9 || ^10\",
                \"phpstan/phpstan\": \"~1.4.10 || ^1.8.0\",
                \"phpunit/phpunit\": \"^7.5 || ^8.5 || ^9.5\",
                \"symfony/cache\": \"^4.4 || ^5.4 || ^6\",
                \"vimeo/psalm\": \"^4.10\"
            },
            \"suggest\": {
                \"php\": \"PHP 8.0 or higher comes with attributes, a native replacement for annotations\"
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
                \"source\": \"https://github.com/doctrine/annotations/tree/1.14.3\"
            },
            \"time\": \"2023-02-01T09:20:38+00:00\"
        },
        {
            \"name\": \"doctrine/deprecations\",
            \"version\": \"v1.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/deprecations.git\",
                \"reference\": \"612a3ee5ab0d5dd97b7cf3874a6efe24325efac3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/deprecations/zipball/612a3ee5ab0d5dd97b7cf3874a6efe24325efac3\",
                \"reference\": \"612a3ee5ab0d5dd97b7cf3874a6efe24325efac3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1 || ^8.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^9\",
                \"phpstan/phpstan\": \"1.4.10 || 1.10.15\",
                \"phpstan/phpstan-phpunit\": \"^1.0\",
                \"phpunit/phpunit\": \"^7.5 || ^8.5 || ^9.5\",
                \"psalm/plugin-phpunit\": \"0.18.4\",
                \"psr/log\": \"^1 || ^2 || ^3\",
                \"vimeo/psalm\": \"4.30.0 || 5.12.0\"
            },
            \"suggest\": {
                \"psr/log\": \"Allows logging deprecations via PSR-3 logger implementation\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Deprecations\\\\\": \"lib/Doctrine/Deprecations\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"A small layer on top of trigger_error(E_USER_DEPRECATED) or PSR-3 logging with options to disable all deprecations or selectively for packages.\",
            \"homepage\": \"https://www.doctrine-project.org/\",
            \"support\": {
                \"issues\": \"https://github.com/doctrine/deprecations/issues\",
                \"source\": \"https://github.com/doctrine/deprecations/tree/v1.1.1\"
            },
            \"time\": \"2023-06-03T09:27:29+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"2.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"39ab8fcf5a51ce4b85ca97c7a7d033eb12831124\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/39ab8fcf5a51ce4b85ca97c7a7d033eb12831124\",
                \"reference\": \"39ab8fcf5a51ce4b85ca97c7a7d033eb12831124\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/deprecations\": \"^1.0\",
                \"php\": \"^7.1 || ^8.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^9 || ^10\",
                \"phpstan/phpstan\": \"^1.3\",
                \"phpunit/phpunit\": \"^7.5 || ^8.5 || ^9.5\",
                \"psalm/plugin-phpunit\": \"^0.18.3\",
                \"vimeo/psalm\": \"^4.11 || ^5.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Lexer\\\\\": \"src\"
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
                \"source\": \"https://github.com/doctrine/lexer/tree/2.1.0\"
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
            \"time\": \"2022-12-14T08:49:07+00:00\"
        },
        {
            \"name\": \"friendsofphp/php-cs-fixer\",
            \"version\": \"v3.4.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer.git\",
                \"reference\": \"47177af1cfb9dab5d1cc4daf91b7179c2efe7fad\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/FriendsOfPHP/PHP-CS-Fixer/zipball/47177af1cfb9dab5d1cc4daf91b7179c2efe7fad\",
                \"reference\": \"47177af1cfb9dab5d1cc4daf91b7179c2efe7fad\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"composer/semver\": \"^3.2\",
                \"composer/xdebug-handler\": \"^2.0\",
                \"doctrine/annotations\": \"^1.12\",
                \"ext-json\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"php\": \"^7.2.5 || ^8.0\",
                \"php-cs-fixer/diff\": \"^2.0\",
                \"symfony/console\": \"^4.4.20 || ^5.1.3 || ^6.0\",
                \"symfony/event-dispatcher\": \"^4.4.20 || ^5.0 || ^6.0\",
                \"symfony/filesystem\": \"^4.4.20 || ^5.0 || ^6.0\",
                \"symfony/finder\": \"^4.4.20 || ^5.0 || ^6.0\",
                \"symfony/options-resolver\": \"^4.4.20 || ^5.0 || ^6.0\",
                \"symfony/polyfill-mbstring\": \"^1.23\",
                \"symfony/polyfill-php80\": \"^1.23\",
                \"symfony/polyfill-php81\": \"^1.23\",
                \"symfony/process\": \"^4.4.20 || ^5.0 || ^6.0\",
                \"symfony/stopwatch\": \"^4.4.20 || ^5.0 || ^6.0\"
            },
            \"require-dev\": {
                \"justinrainbow/json-schema\": \"^5.2\",
                \"keradus/cli-executor\": \"^1.5\",
                \"mikey179/vfsstream\": \"^1.6.8\",
                \"php-coveralls/php-coveralls\": \"^2.5.2\",
                \"php-cs-fixer/accessible-object\": \"^1.1\",
                \"php-cs-fixer/phpunit-constraint-isidenticalstring\": \"^1.2\",
                \"php-cs-fixer/phpunit-constraint-xmlmatchesxsd\": \"^1.2.1\",
                \"phpspec/prophecy\": \"^1.15\",
                \"phpspec/prophecy-phpunit\": \"^1.1 || ^2.0\",
                \"phpunit/phpunit\": \"^8.5.21 || ^9.5\",
                \"phpunitgoodpractices/polyfill\": \"^1.5\",
                \"phpunitgoodpractices/traits\": \"^1.9.1\",
                \"symfony/phpunit-bridge\": \"^5.2.4 || ^6.0\",
                \"symfony/yaml\": \"^4.4.20 || ^5.0 || ^6.0\"
            },
            \"suggest\": {
                \"ext-dom\": \"For handling output formats in XML\",
                \"ext-mbstring\": \"For handling non-UTF8 characters.\"
            },
            \"bin\": [
                \"php-cs-fixer\"
            ],
            \"type\": \"application\",
            \"autoload\": {
                \"psr-4\": {
                    \"PhpCsFixer\\\\\": \"src/\"
                }
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
                \"source\": \"https://github.com/FriendsOfPHP/PHP-CS-Fixer/tree/v3.4.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/keradus\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-12-11T16:25:08+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.16.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"19526a33fb561ef417e822e85f08a00db4059c17\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/19526a33fb561ef417e822e85f08a00db4059c17\",
                \"reference\": \"19526a33fb561ef417e822e85f08a00db4059c17\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"ircmaxell/php-yacc\": \"^0.0.7\",
                \"phpunit/phpunit\": \"^6.5 || ^7.0 || ^8.0 || ^9.0\"
            },
            \"bin\": [
                \"bin/php-parse\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.9-dev\"
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
                \"source\": \"https://github.com/nikic/PHP-Parser/tree/v4.16.0\"
            },
            \"time\": \"2023-06-25T14:52:30+00:00\"
        },
        {
            \"name\": \"php-cs-fixer/diff\",
            \"version\": \"v2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PHP-CS-Fixer/diff.git\",
                \"reference\": \"29dc0d507e838c4580d018bd8b5cb412474f7ec3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PHP-CS-Fixer/diff/zipball/29dc0d507e838c4580d018bd8b5cb412474f7ec3\",
                \"reference\": \"29dc0d507e838c4580d018bd8b5cb412474f7ec3\",
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
                }
            ],
            \"description\": \"sebastian/diff v3 backport support for PHP 5.6+\",
            \"homepage\": \"https://github.com/PHP-CS-Fixer\",
            \"keywords\": [
                \"diff\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/PHP-CS-Fixer/diff/issues\",
                \"source\": \"https://github.com/PHP-CS-Fixer/diff/tree/v2.0.2\"
            },
            \"abandoned\": true,
            \"time\": \"2020-10-14T08:32:19+00:00\"
        },
        {
            \"name\": \"prestashop/autoindex\",
            \"version\": \"v2.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/autoindex.git\",
                \"reference\": \"235f3ec115432ffc32d582198ea498467b3946d0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/autoindex/zipball/235f3ec115432ffc32d582198ea498467b3946d0\",
                \"reference\": \"235f3ec115432ffc32d582198ea498467b3946d0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^4.10\",
                \"php\": \"^8.0 || ^7.2\",
                \"symfony/console\": \"^3.4 || ~4.0 || ~5.0 || ~6.0\",
                \"symfony/finder\": \"^3.4 || ~4.0 || ~5.0 || ~6.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^0.12.83\",
                \"prestashop/php-dev-tools\": \"1.*\"
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
                \"source\": \"https://github.com/PrestaShopCorp/autoindex/tree/v2.1.0\"
            },
            \"time\": \"2022-10-10T08:35:00+00:00\"
        },
        {
            \"name\": \"prestashop/header-stamp\",
            \"version\": \"v2.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/header-stamp.git\",
                \"reference\": \"3104b69ad73b6039c7082dbba4af9dbeb0b936b3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/header-stamp/zipball/3104b69ad73b6039c7082dbba4af9dbeb0b936b3\",
                \"reference\": \"3104b69ad73b6039c7082dbba4af9dbeb0b936b3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^4.10\",
                \"php\": \"^8.0 || ^7.2\",
                \"symfony/console\": \"^3.4 || ~4.0 || ~5.0 || ~6.0\",
                \"symfony/finder\": \"^3.4 || ~4.0 || ~5.0 || ~6.0\"
            },
            \"require-dev\": {
                \"phpstan/phpstan\": \"^0.12.83\",
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
                \"source\": \"https://github.com/PrestaShopCorp/header-stamp/tree/v2.3\"
            },
            \"time\": \"2023-03-23T14:44:10+00:00\"
        },
        {
            \"name\": \"prestashop/php-dev-tools\",
            \"version\": \"v4.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShop/php-dev-tools.git\",
                \"reference\": \"843275b19729ba810d8ba2b9c97b568e5bbabe03\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShop/php-dev-tools/zipball/843275b19729ba810d8ba2b9c97b568e5bbabe03\",
                \"reference\": \"843275b19729ba810d8ba2b9c97b568e5bbabe03\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"friendsofphp/php-cs-fixer\": \"^3.2\",
                \"php\": \">=7.2.5\",
                \"prestashop/autoindex\": \"^2.0\",
                \"prestashop/header-stamp\": \"^2.0\",
                \"squizlabs/php_codesniffer\": \"^3.4\",
                \"symfony/console\": \"~3.2 || ~4.0 || ~5.0 || ~6.0\",
                \"symfony/filesystem\": \"~3.2 || ~4.0 || ~5.0 || ~6.0\"
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
                \"source\": \"https://github.com/PrestaShop/php-dev-tools/tree/v4.3.0\"
            },
            \"time\": \"2022-10-18T14:19:51+00:00\"
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
            \"version\": \"3.7.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/squizlabs/PHP_CodeSniffer.git\",
                \"reference\": \"ed8e00df0a83aa96acf703f8c2979ff33341f879\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/squizlabs/PHP_CodeSniffer/zipball/ed8e00df0a83aa96acf703f8c2979ff33341f879\",
                \"reference\": \"ed8e00df0a83aa96acf703f8c2979ff33341f879\",
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
                \"standards\",
                \"static analysis\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/squizlabs/PHP_CodeSniffer/issues\",
                \"source\": \"https://github.com/squizlabs/PHP_CodeSniffer\",
                \"wiki\": \"https://github.com/squizlabs/PHP_CodeSniffer/wiki\"
            },
            \"time\": \"2023-02-22T23:07:41+00:00\"
        },
        {
            \"name\": \"symfony/console\",
            \"version\": \"v5.4.24\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"560fc3ed7a43e6d30ea94a07d77f9a60b8ed0fb8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/560fc3ed7a43e6d30ea94a07d77f9a60b8ed0fb8\",
                \"reference\": \"560fc3ed7a43e6d30ea94a07d77f9a60b8ed0fb8\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/deprecation-contracts\": \"^2.1|^3\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php73\": \"^1.9\",
                \"symfony/polyfill-php80\": \"^1.16\",
                \"symfony/service-contracts\": \"^1.1|^2|^3\",
                \"symfony/string\": \"^5.1|^6.0\"
            },
            \"conflict\": {
                \"psr/log\": \">=3\",
                \"symfony/dependency-injection\": \"<4.4\",
                \"symfony/dotenv\": \"<5.1\",
                \"symfony/event-dispatcher\": \"<4.4\",
                \"symfony/lock\": \"<4.4\",
                \"symfony/process\": \"<4.4\"
            },
            \"provide\": {
                \"psr/log-implementation\": \"1.0|2.0\"
            },
            \"require-dev\": {
                \"psr/log\": \"^1|^2\",
                \"symfony/config\": \"^4.4|^5.0|^6.0\",
                \"symfony/dependency-injection\": \"^4.4|^5.0|^6.0\",
                \"symfony/event-dispatcher\": \"^4.4|^5.0|^6.0\",
                \"symfony/lock\": \"^4.4|^5.0|^6.0\",
                \"symfony/process\": \"^4.4|^5.0|^6.0\",
                \"symfony/var-dumper\": \"^4.4|^5.0|^6.0\"
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
            \"description\": \"Eases the creation of beautiful and testable command line interfaces\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"cli\",
                \"command-line\",
                \"console\",
                \"terminal\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/console/tree/v5.4.24\"
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
            \"time\": \"2023-05-26T05:13:16+00:00\"
        },
        {
            \"name\": \"symfony/deprecation-contracts\",
            \"version\": \"v2.5.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/deprecation-contracts.git\",
                \"reference\": \"e8b495ea28c1d97b5e0c121748d6f9b53d075c66\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/deprecation-contracts/zipball/e8b495ea28c1d97b5e0c121748d6f9b53d075c66\",
                \"reference\": \"e8b495ea28c1d97b5e0c121748d6f9b53d075c66\",
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
                \"source\": \"https://github.com/symfony/deprecation-contracts/tree/v2.5.2\"
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
            \"name\": \"symfony/event-dispatcher\",
            \"version\": \"v5.4.22\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher.git\",
                \"reference\": \"1df20e45d56da29a4b1d8259dd6e950acbf1b13f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher/zipball/1df20e45d56da29a4b1d8259dd6e950acbf1b13f\",
                \"reference\": \"1df20e45d56da29a4b1d8259dd6e950acbf1b13f\",
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
                \"source\": \"https://github.com/symfony/event-dispatcher/tree/v5.4.22\"
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
            \"time\": \"2023-03-17T11:31:58+00:00\"
        },
        {
            \"name\": \"symfony/event-dispatcher-contracts\",
            \"version\": \"v2.5.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/event-dispatcher-contracts.git\",
                \"reference\": \"f98b54df6ad059855739db6fcbc2d36995283fe1\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/f98b54df6ad059855739db6fcbc2d36995283fe1\",
                \"reference\": \"f98b54df6ad059855739db6fcbc2d36995283fe1\",
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
                \"source\": \"https://github.com/symfony/event-dispatcher-contracts/tree/v2.5.2\"
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
            \"name\": \"symfony/filesystem\",
            \"version\": \"v5.4.25\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"0ce3a62c9579a53358d3a7eb6b3dfb79789a6364\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/0ce3a62c9579a53358d3a7eb6b3dfb79789a6364\",
                \"reference\": \"0ce3a62c9579a53358d3a7eb6b3dfb79789a6364\",
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
                \"source\": \"https://github.com/symfony/filesystem/tree/v5.4.25\"
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
            \"time\": \"2023-05-31T13:04:02+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v5.4.21\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"078e9a5e1871fcfe6a5ce421b539344c21afef19\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/078e9a5e1871fcfe6a5ce421b539344c21afef19\",
                \"reference\": \"078e9a5e1871fcfe6a5ce421b539344c21afef19\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/deprecation-contracts\": \"^2.1|^3\",
                \"symfony/polyfill-php80\": \"^1.16\"
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
            \"description\": \"Finds files and directories via an intuitive fluent interface\",
            \"homepage\": \"https://symfony.com\",
            \"support\": {
                \"source\": \"https://github.com/symfony/finder/tree/v5.4.21\"
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
            \"time\": \"2023-02-16T09:33:00+00:00\"
        },
        {
            \"name\": \"symfony/options-resolver\",
            \"version\": \"v5.4.21\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/options-resolver.git\",
                \"reference\": \"4fe5cf6ede71096839f0e4b4444d65dd3a7c1eb9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/options-resolver/zipball/4fe5cf6ede71096839f0e4b4444d65dd3a7c1eb9\",
                \"reference\": \"4fe5cf6ede71096839f0e4b4444d65dd3a7c1eb9\",
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
                \"source\": \"https://github.com/symfony/options-resolver/tree/v5.4.21\"
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
            \"time\": \"2023-02-14T08:03:56+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-ctype\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-ctype.git\",
                \"reference\": \"5bbc823adecdae860bb64756d639ecfec17b050a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-ctype/zipball/5bbc823adecdae860bb64756d639ecfec17b050a\",
                \"reference\": \"5bbc823adecdae860bb64756d639ecfec17b050a\",
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
                    \"dev-main\": \"1.27-dev\"
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
                    \"Symfony\\\\Polyfill\\\\Ctype\\\\\": \"\"
                }
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
                \"source\": \"https://github.com/symfony/polyfill-ctype/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-grapheme\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-grapheme.git\",
                \"reference\": \"511a08c03c1960e08a883f4cffcacd219b758354\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/511a08c03c1960e08a883f4cffcacd219b758354\",
                \"reference\": \"511a08c03c1960e08a883f4cffcacd219b758354\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"suggest\": {
                \"ext-intl\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.27-dev\"
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
                    \"Symfony\\\\Polyfill\\\\Intl\\\\Grapheme\\\\\": \"\"
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
            \"description\": \"Symfony polyfill for intl's grapheme_* functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"grapheme\",
                \"intl\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-intl-grapheme/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-normalizer\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-normalizer.git\",
                \"reference\": \"19bd1e4fcd5b91116f14d8533c57831ed00571b6\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/19bd1e4fcd5b91116f14d8533c57831ed00571b6\",
                \"reference\": \"19bd1e4fcd5b91116f14d8533c57831ed00571b6\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"suggest\": {
                \"ext-intl\": \"For best performance\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.27-dev\"
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
                    \"Symfony\\\\Polyfill\\\\Intl\\\\Normalizer\\\\\": \"\"
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
            \"description\": \"Symfony polyfill for intl's Normalizer class and related functions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"intl\",
                \"normalizer\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-intl-normalizer/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-mbstring\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-mbstring.git\",
                \"reference\": \"8ad114f6b39e2c98a8b0e3bd907732c207c2b534\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-mbstring/zipball/8ad114f6b39e2c98a8b0e3bd907732c207c2b534\",
                \"reference\": \"8ad114f6b39e2c98a8b0e3bd907732c207c2b534\",
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
                    \"dev-main\": \"1.27-dev\"
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
                    \"Symfony\\\\Polyfill\\\\Mbstring\\\\\": \"\"
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
                \"source\": \"https://github.com/symfony/polyfill-mbstring/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php73.git\",
                \"reference\": \"9e8ecb5f92152187c4799efd3c96b78ccab18ff9\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php73/zipball/9e8ecb5f92152187c4799efd3c96b78ccab18ff9\",
                \"reference\": \"9e8ecb5f92152187c4799efd3c96b78ccab18ff9\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.27-dev\"
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
                \"source\": \"https://github.com/symfony/polyfill-php73/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php80\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php80.git\",
                \"reference\": \"7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php80/zipball/7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936\",
                \"reference\": \"7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.27-dev\"
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
                \"source\": \"https://github.com/symfony/polyfill-php80/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php81\",
            \"version\": \"v1.27.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php81.git\",
                \"reference\": \"707403074c8ea6e2edaf8794b0157a0bfa52157a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php81/zipball/707403074c8ea6e2edaf8794b0157a0bfa52157a\",
                \"reference\": \"707403074c8ea6e2edaf8794b0157a0bfa52157a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-main\": \"1.27-dev\"
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
                    \"Symfony\\\\Polyfill\\\\Php81\\\\\": \"\"
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
            \"description\": \"Symfony polyfill backporting some PHP 8.1+ features to lower PHP versions\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"compatibility\",
                \"polyfill\",
                \"portable\",
                \"shim\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/polyfill-php81/tree/v1.27.0\"
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
            \"time\": \"2022-11-03T14:55:06+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v5.4.24\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"e3c46cc5689c8782944274bb30702106ecbe3b64\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/e3c46cc5689c8782944274bb30702106ecbe3b64\",
                \"reference\": \"e3c46cc5689c8782944274bb30702106ecbe3b64\",
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
                \"source\": \"https://github.com/symfony/process/tree/v5.4.24\"
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
            \"time\": \"2023-05-17T11:26:05+00:00\"
        },
        {
            \"name\": \"symfony/service-contracts\",
            \"version\": \"v2.5.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/service-contracts.git\",
                \"reference\": \"4b426aac47d6427cc1a1d0f7e2ac724627f5966c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/service-contracts/zipball/4b426aac47d6427cc1a1d0f7e2ac724627f5966c\",
                \"reference\": \"4b426aac47d6427cc1a1d0f7e2ac724627f5966c\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"psr/container\": \"^1.1\",
                \"symfony/deprecation-contracts\": \"^2.1|^3\"
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
                \"source\": \"https://github.com/symfony/service-contracts/tree/v2.5.2\"
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
            \"time\": \"2022-05-30T19:17:29+00:00\"
        },
        {
            \"name\": \"symfony/stopwatch\",
            \"version\": \"v5.4.21\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"f83692cd869a6f2391691d40a01e8acb89e76fee\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/f83692cd869a6f2391691d40a01e8acb89e76fee\",
                \"reference\": \"f83692cd869a6f2391691d40a01e8acb89e76fee\",
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
                \"source\": \"https://github.com/symfony/stopwatch/tree/v5.4.21\"
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
            \"time\": \"2023-02-14T08:03:56+00:00\"
        },
        {
            \"name\": \"symfony/string\",
            \"version\": \"v5.4.22\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/string.git\",
                \"reference\": \"8036a4c76c0dd29e60b6a7cafcacc50cf088ea62\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/string/zipball/8036a4c76c0dd29e60b6a7cafcacc50cf088ea62\",
                \"reference\": \"8036a4c76c0dd29e60b6a7cafcacc50cf088ea62\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2.5\",
                \"symfony/polyfill-ctype\": \"~1.8\",
                \"symfony/polyfill-intl-grapheme\": \"~1.0\",
                \"symfony/polyfill-intl-normalizer\": \"~1.0\",
                \"symfony/polyfill-mbstring\": \"~1.0\",
                \"symfony/polyfill-php80\": \"~1.15\"
            },
            \"conflict\": {
                \"symfony/translation-contracts\": \">=3.0\"
            },
            \"require-dev\": {
                \"symfony/error-handler\": \"^4.4|^5.0|^6.0\",
                \"symfony/http-client\": \"^4.4|^5.0|^6.0\",
                \"symfony/translation-contracts\": \"^1.1|^2\",
                \"symfony/var-exporter\": \"^4.4|^5.0|^6.0\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"files\": [
                    \"Resources/functions.php\"
                ],
                \"psr-4\": {
                    \"Symfony\\\\Component\\\\String\\\\\": \"\"
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
                    \"name\": \"Nicolas Grekas\",
                    \"email\": \"p@tchwork.com\"
                },
                {
                    \"name\": \"Symfony Community\",
                    \"homepage\": \"https://symfony.com/contributors\"
                }
            ],
            \"description\": \"Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way\",
            \"homepage\": \"https://symfony.com\",
            \"keywords\": [
                \"grapheme\",
                \"i18n\",
                \"string\",
                \"unicode\",
                \"utf-8\",
                \"utf8\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/string/tree/v5.4.22\"
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
            \"time\": \"2023-03-14T06:11:53+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \">=7.1.3\"
    },
    \"platform-dev\": [],
    \"plugin-api-version\": \"2.3.0\"
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/productcomments/composer.lock", "/var/www/html/modules/productcomments/composer.lock");
    }
}
