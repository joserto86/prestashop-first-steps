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

/* @Modules/ps_distributionapiclient/composer.lock */
class __TwigTemplate_fe412cbd81236eb26569f90dc0097ded extends Template
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
    \"content-hash\": \"d36034f3c5e33f9a8337022565605b2b\",
    \"packages\": [
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
            \"version\": \"3.3.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/composer/semver.git\",
                \"reference\": \"5d8e574bb0e69188786b8ef77d43341222a41a71\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/composer/semver/zipball/5d8e574bb0e69188786b8ef77d43341222a41a71\",
                \"reference\": \"5d8e574bb0e69188786b8ef77d43341222a41a71\",
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
                \"source\": \"https://github.com/composer/semver/tree/3.3.1\"
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
            \"time\": \"2022-03-16T11:22:07+00:00\"
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
            \"name\": \"doctrine/cache\",
            \"version\": \"2.1.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/cache.git\",
                \"reference\": \"331b4d5dbaeab3827976273e9356b3b453c300ce\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/cache/zipball/331b4d5dbaeab3827976273e9356b3b453c300ce\",
                \"reference\": \"331b4d5dbaeab3827976273e9356b3b453c300ce\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"~7.1 || ^8.0\"
            },
            \"conflict\": {
                \"doctrine/common\": \">2.2,<2.4\"
            },
            \"require-dev\": {
                \"alcaeus/mongo-php-adapter\": \"^1.1\",
                \"cache/integration-tests\": \"dev-master\",
                \"doctrine/coding-standard\": \"^8.0\",
                \"mongodb/mongodb\": \"^1.1\",
                \"phpunit/phpunit\": \"^7.0 || ^8.0 || ^9.0\",
                \"predis/predis\": \"~1.0\",
                \"psr/cache\": \"^1.0 || ^2.0 || ^3.0\",
                \"symfony/cache\": \"^4.4 || ^5.2 || ^6.0@dev\",
                \"symfony/var-exporter\": \"^4.4 || ^5.2 || ^6.0@dev\"
            },
            \"suggest\": {
                \"alcaeus/mongo-php-adapter\": \"Required to use legacy MongoDB driver\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Common\\\\Cache\\\\\": \"lib/Doctrine/Common/Cache\"
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
            \"description\": \"PHP Doctrine Cache library is a popular cache implementation that supports many different drivers such as redis, memcache, apc, mongodb and others.\",
            \"homepage\": \"https://www.doctrine-project.org/projects/cache.html\",
            \"keywords\": [
                \"abstraction\",
                \"apcu\",
                \"cache\",
                \"caching\",
                \"couchdb\",
                \"memcached\",
                \"php\",
                \"redis\",
                \"xcache\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/doctrine/cache/issues\",
                \"source\": \"https://github.com/doctrine/cache/tree/2.1.1\"
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
                    \"url\": \"https://tidelift.com/funding/github/packagist/doctrine%2Fcache\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-07-17T14:49:29+00:00\"
        },
        {
            \"name\": \"doctrine/lexer\",
            \"version\": \"1.2.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/lexer.git\",
                \"reference\": \"c268e882d4dbdd85e36e4ad69e02dc284f89d229\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/lexer/zipball/c268e882d4dbdd85e36e4ad69e02dc284f89d229\",
                \"reference\": \"c268e882d4dbdd85e36e4ad69e02dc284f89d229\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1 || ^8.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^9.0\",
                \"phpstan/phpstan\": \"^1.3\",
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
                \"source\": \"https://github.com/doctrine/lexer/tree/1.2.3\"
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
            \"time\": \"2022-02-28T11:07:21+00:00\"
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
            \"name\": \"guzzlehttp/guzzle\",
            \"version\": \"7.4.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/guzzle/guzzle.git\",
                \"reference\": \"ee0a041b1760e6a53d2a39c8c34115adc2af2c79\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/guzzle/guzzle/zipball/ee0a041b1760e6a53d2a39c8c34115adc2af2c79\",
                \"reference\": \"ee0a041b1760e6a53d2a39c8c34115adc2af2c79\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-json\": \"*\",
                \"guzzlehttp/promises\": \"^1.5\",
                \"guzzlehttp/psr7\": \"^1.8.3 || ^2.1\",
                \"php\": \"^7.2.5 || ^8.0\",
                \"psr/http-client\": \"^1.0\",
                \"symfony/deprecation-contracts\": \"^2.2 || ^3.0\"
            },
            \"provide\": {
                \"psr/http-client-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"bamarni/composer-bin-plugin\": \"^1.4.1\",
                \"ext-curl\": \"*\",
                \"php-http/client-integration-tests\": \"^3.0\",
                \"phpunit/phpunit\": \"^8.5.5 || ^9.3.5\",
                \"psr/log\": \"^1.1 || ^2.0 || ^3.0\"
            },
            \"suggest\": {
                \"ext-curl\": \"Required for CURL handler support\",
                \"ext-intl\": \"Required for Internationalized Domain Name (IDN) support\",
                \"psr/log\": \"Required for using the Log middleware\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.4-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"src/functions_include.php\"
                ],
                \"psr-4\": {
                    \"GuzzleHttp\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Graham Campbell\",
                    \"email\": \"hello@gjcampbell.co.uk\",
                    \"homepage\": \"https://github.com/GrahamCampbell\"
                },
                {
                    \"name\": \"Michael Dowling\",
                    \"email\": \"mtdowling@gmail.com\",
                    \"homepage\": \"https://github.com/mtdowling\"
                },
                {
                    \"name\": \"Jeremy Lindblom\",
                    \"email\": \"jeremeamia@gmail.com\",
                    \"homepage\": \"https://github.com/jeremeamia\"
                },
                {
                    \"name\": \"George Mponos\",
                    \"email\": \"gmponos@gmail.com\",
                    \"homepage\": \"https://github.com/gmponos\"
                },
                {
                    \"name\": \"Tobias Nyholm\",
                    \"email\": \"tobias.nyholm@gmail.com\",
                    \"homepage\": \"https://github.com/Nyholm\"
                },
                {
                    \"name\": \"Márk Sági-Kazár\",
                    \"email\": \"mark.sagikazar@gmail.com\",
                    \"homepage\": \"https://github.com/sagikazarmark\"
                },
                {
                    \"name\": \"Tobias Schultze\",
                    \"email\": \"webmaster@tubo-world.de\",
                    \"homepage\": \"https://github.com/Tobion\"
                }
            ],
            \"description\": \"Guzzle is a PHP HTTP client library\",
            \"keywords\": [
                \"client\",
                \"curl\",
                \"framework\",
                \"http\",
                \"http client\",
                \"psr-18\",
                \"psr-7\",
                \"rest\",
                \"web service\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/guzzle/guzzle/issues\",
                \"source\": \"https://github.com/guzzle/guzzle/tree/7.4.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/GrahamCampbell\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://github.com/Nyholm\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/guzzlehttp/guzzle\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-12-06T18:43:05+00:00\"
        },
        {
            \"name\": \"guzzlehttp/promises\",
            \"version\": \"1.5.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/guzzle/promises.git\",
                \"reference\": \"fe752aedc9fd8fcca3fe7ad05d419d32998a06da\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/guzzle/promises/zipball/fe752aedc9fd8fcca3fe7ad05d419d32998a06da\",
                \"reference\": \"fe752aedc9fd8fcca3fe7ad05d419d32998a06da\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.5\"
            },
            \"require-dev\": {
                \"symfony/phpunit-bridge\": \"^4.4 || ^5.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.5-dev\"
                }
            },
            \"autoload\": {
                \"files\": [
                    \"src/functions_include.php\"
                ],
                \"psr-4\": {
                    \"GuzzleHttp\\\\Promise\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Graham Campbell\",
                    \"email\": \"hello@gjcampbell.co.uk\",
                    \"homepage\": \"https://github.com/GrahamCampbell\"
                },
                {
                    \"name\": \"Michael Dowling\",
                    \"email\": \"mtdowling@gmail.com\",
                    \"homepage\": \"https://github.com/mtdowling\"
                },
                {
                    \"name\": \"Tobias Nyholm\",
                    \"email\": \"tobias.nyholm@gmail.com\",
                    \"homepage\": \"https://github.com/Nyholm\"
                },
                {
                    \"name\": \"Tobias Schultze\",
                    \"email\": \"webmaster@tubo-world.de\",
                    \"homepage\": \"https://github.com/Tobion\"
                }
            ],
            \"description\": \"Guzzle promises library\",
            \"keywords\": [
                \"promise\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/guzzle/promises/issues\",
                \"source\": \"https://github.com/guzzle/promises/tree/1.5.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/GrahamCampbell\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://github.com/Nyholm\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/guzzlehttp/promises\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-10-22T20:56:57+00:00\"
        },
        {
            \"name\": \"guzzlehttp/psr7\",
            \"version\": \"2.1.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/guzzle/psr7.git\",
                \"reference\": \"089edd38f5b8abba6cb01567c2a8aaa47cec4c72\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/guzzle/psr7/zipball/089edd38f5b8abba6cb01567c2a8aaa47cec4c72\",
                \"reference\": \"089edd38f5b8abba6cb01567c2a8aaa47cec4c72\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2.5 || ^8.0\",
                \"psr/http-factory\": \"^1.0\",
                \"psr/http-message\": \"^1.0\",
                \"ralouphie/getallheaders\": \"^3.0\"
            },
            \"provide\": {
                \"psr/http-factory-implementation\": \"1.0\",
                \"psr/http-message-implementation\": \"1.0\"
            },
            \"require-dev\": {
                \"bamarni/composer-bin-plugin\": \"^1.4.1\",
                \"http-interop/http-factory-tests\": \"^0.9\",
                \"phpunit/phpunit\": \"^8.5.8 || ^9.3.10\"
            },
            \"suggest\": {
                \"laminas/laminas-httphandlerrunner\": \"Emit PSR-7 responses\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"GuzzleHttp\\\\Psr7\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Graham Campbell\",
                    \"email\": \"hello@gjcampbell.co.uk\",
                    \"homepage\": \"https://github.com/GrahamCampbell\"
                },
                {
                    \"name\": \"Michael Dowling\",
                    \"email\": \"mtdowling@gmail.com\",
                    \"homepage\": \"https://github.com/mtdowling\"
                },
                {
                    \"name\": \"George Mponos\",
                    \"email\": \"gmponos@gmail.com\",
                    \"homepage\": \"https://github.com/gmponos\"
                },
                {
                    \"name\": \"Tobias Nyholm\",
                    \"email\": \"tobias.nyholm@gmail.com\",
                    \"homepage\": \"https://github.com/Nyholm\"
                },
                {
                    \"name\": \"Márk Sági-Kazár\",
                    \"email\": \"mark.sagikazar@gmail.com\",
                    \"homepage\": \"https://github.com/sagikazarmark\"
                },
                {
                    \"name\": \"Tobias Schultze\",
                    \"email\": \"webmaster@tubo-world.de\",
                    \"homepage\": \"https://github.com/Tobion\"
                },
                {
                    \"name\": \"Márk Sági-Kazár\",
                    \"email\": \"mark.sagikazar@gmail.com\",
                    \"homepage\": \"https://sagikazarmark.hu\"
                }
            ],
            \"description\": \"PSR-7 message implementation that also provides common utility methods\",
            \"keywords\": [
                \"http\",
                \"message\",
                \"psr-7\",
                \"request\",
                \"response\",
                \"stream\",
                \"uri\",
                \"url\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/guzzle/psr7/issues\",
                \"source\": \"https://github.com/guzzle/psr7/tree/2.1.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/GrahamCampbell\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://github.com/Nyholm\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/guzzlehttp/psr7\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2021-10-06T17:43:30+00:00\"
        },
        {
            \"name\": \"nikic/php-parser\",
            \"version\": \"v4.13.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/nikic/PHP-Parser.git\",
                \"reference\": \"210577fe3cf7badcc5814d99455df46564f3c077\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/nikic/PHP-Parser/zipball/210577fe3cf7badcc5814d99455df46564f3c077\",
                \"reference\": \"210577fe3cf7badcc5814d99455df46564f3c077\",
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
                \"source\": \"https://github.com/nikic/PHP-Parser/tree/v4.13.2\"
            },
            \"time\": \"2021-11-30T19:35:32+00:00\"
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
            \"time\": \"2020-10-14T08:32:19+00:00\"
        },
        {
            \"name\": \"prestashop/autoindex\",
            \"version\": \"v2.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/autoindex.git\",
                \"reference\": \"355c224de4ca8766d63a038dcdcb24f56cb19fec\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/autoindex/zipball/355c224de4ca8766d63a038dcdcb24f56cb19fec\",
                \"reference\": \"355c224de4ca8766d63a038dcdcb24f56cb19fec\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^4.10\",
                \"php\": \">=7.2\",
                \"symfony/console\": \"^3.4 || ~4.0 || ~5.0\",
                \"symfony/finder\": \"^3.4 || ~4.0 || ~5.0\"
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
                \"source\": \"https://github.com/PrestaShopCorp/autoindex/tree/v2.0.0\"
            },
            \"time\": \"2021-06-09T15:37:17+00:00\"
        },
        {
            \"name\": \"prestashop/circuit-breaker\",
            \"version\": \"v4.0.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShop/circuit-breaker.git\",
                \"reference\": \"9744f98f5f5a3c678fd14cd60b70d2872d9295f2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShop/circuit-breaker/zipball/9744f98f5f5a3c678fd14cd60b70d2872d9295f2\",
                \"reference\": \"9744f98f5f5a3c678fd14cd60b70d2872d9295f2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"guzzlehttp/guzzle\": \"^7.3\",
                \"prestashop/php-dev-tools\": \"^4.0\"
            },
            \"require-dev\": {
                \"doctrine/cache\": \"^1.10.2\",
                \"phpunit/phpunit\": \"^8\",
                \"psr/simple-cache\": \"^1.0\",
                \"symfony/cache\": \"^4.4\",
                \"symfony/event-dispatcher\": \"^4.4\"
            },
            \"suggest\": {
                \"doctrine/cache\": \"Allows use of Doctrine Cache adapters to store transactions\",
                \"ext-apcu\": \"Allows use of APCu adapter (performant) to store transactions\",
                \"symfony/cache\": \"Allows use of Symfony Cache adapters to store transactions\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"PrestaShop\\\\CircuitBreaker\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"PrestaShop SA\",
                    \"email\": \"contact@prestashop.com\"
                },
                {
                    \"name\": \"PrestaShop Community\",
                    \"homepage\": \"http://contributors.prestashop.com/\"
                }
            ],
            \"description\": \"A circuit breaker implementation for PHP\",
            \"support\": {
                \"issues\": \"https://github.com/PrestaShop/circuit-breaker/issues\",
                \"source\": \"https://github.com/PrestaShop/circuit-breaker/tree/v4.0.0\"
            },
            \"time\": \"2021-04-20T14:48:25+00:00\"
        },
        {
            \"name\": \"prestashop/header-stamp\",
            \"version\": \"v2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShopCorp/header-stamp.git\",
                \"reference\": \"d00c2ce550fe9b1a3713cebafee669f44a93ff2a\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShopCorp/header-stamp/zipball/d00c2ce550fe9b1a3713cebafee669f44a93ff2a\",
                \"reference\": \"d00c2ce550fe9b1a3713cebafee669f44a93ff2a\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"nikic/php-parser\": \"^4.10\",
                \"php\": \">=7.2.5\",
                \"symfony/console\": \"^3.4 || ~4.0 || ~5.0\",
                \"symfony/finder\": \"^3.4 || ~4.0 || ~5.0\"
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
                \"source\": \"https://github.com/PrestaShopCorp/header-stamp/tree/v2.1\"
            },
            \"time\": \"2021-11-15T16:57:29+00:00\"
        },
        {
            \"name\": \"prestashop/php-dev-tools\",
            \"version\": \"v4.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/PrestaShop/php-dev-tools.git\",
                \"reference\": \"359a2896c5115014b01155af1af2bea18ea28451\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/PrestaShop/php-dev-tools/zipball/359a2896c5115014b01155af1af2bea18ea28451\",
                \"reference\": \"359a2896c5115014b01155af1af2bea18ea28451\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"friendsofphp/php-cs-fixer\": \"^3.2\",
                \"php\": \">=7.2.5\",
                \"prestashop/autoindex\": \"^2.0\",
                \"prestashop/header-stamp\": \"^2.0\",
                \"squizlabs/php_codesniffer\": \"^3.4\",
                \"symfony/console\": \"~3.2 || ~4.0 || ~5.0\",
                \"symfony/filesystem\": \"~3.2 || ~4.0 || ~5.0\"
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
                \"source\": \"https://github.com/PrestaShop/php-dev-tools/tree/v4.2.1\"
            },
            \"time\": \"2021-12-01T11:02:58+00:00\"
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
            \"name\": \"psr/http-client\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/http-client.git\",
                \"reference\": \"2dfb5f6c5eff0e91e20e913f8c5452ed95b86621\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/http-client/zipball/2dfb5f6c5eff0e91e20e913f8c5452ed95b86621\",
                \"reference\": \"2dfb5f6c5eff0e91e20e913f8c5452ed95b86621\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.0 || ^8.0\",
                \"psr/http-message\": \"^1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Http\\\\Client\\\\\": \"src/\"
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
            \"description\": \"Common interface for HTTP clients\",
            \"homepage\": \"https://github.com/php-fig/http-client\",
            \"keywords\": [
                \"http\",
                \"http-client\",
                \"psr\",
                \"psr-18\"
            ],
            \"support\": {
                \"source\": \"https://github.com/php-fig/http-client/tree/master\"
            },
            \"time\": \"2020-06-29T06:28:15+00:00\"
        },
        {
            \"name\": \"psr/http-factory\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/http-factory.git\",
                \"reference\": \"12ac7fcd07e5b077433f5f2bee95b3a771bf61be\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/http-factory/zipball/12ac7fcd07e5b077433f5f2bee95b3a771bf61be\",
                \"reference\": \"12ac7fcd07e5b077433f5f2bee95b3a771bf61be\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0.0\",
                \"psr/http-message\": \"^1.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Psr\\\\Http\\\\Message\\\\\": \"src/\"
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
            \"description\": \"Common interfaces for PSR-7 HTTP message factories\",
            \"keywords\": [
                \"factory\",
                \"http\",
                \"message\",
                \"psr\",
                \"psr-17\",
                \"psr-7\",
                \"request\",
                \"response\"
            ],
            \"support\": {
                \"source\": \"https://github.com/php-fig/http-factory/tree/master\"
            },
            \"time\": \"2019-04-30T12:38:16+00:00\"
        },
        {
            \"name\": \"psr/http-message\",
            \"version\": \"1.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/php-fig/http-message.git\",
                \"reference\": \"f6561bf28d520154e4b0ec72be95418abe6d9363\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/php-fig/http-message/zipball/f6561bf28d520154e4b0ec72be95418abe6d9363\",
                \"reference\": \"f6561bf28d520154e4b0ec72be95418abe6d9363\",
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
                    \"Psr\\\\Http\\\\Message\\\\\": \"src/\"
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
            \"description\": \"Common interface for HTTP messages\",
            \"homepage\": \"https://github.com/php-fig/http-message\",
            \"keywords\": [
                \"http\",
                \"http-message\",
                \"psr\",
                \"psr-7\",
                \"request\",
                \"response\"
            ],
            \"support\": {
                \"source\": \"https://github.com/php-fig/http-message/tree/master\"
            },
            \"time\": \"2016-08-06T14:39:51+00:00\"
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
            \"name\": \"ralouphie/getallheaders\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/ralouphie/getallheaders.git\",
                \"reference\": \"120b605dfeb996808c31b6477290a714d356e822\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/ralouphie/getallheaders/zipball/120b605dfeb996808c31b6477290a714d356e822\",
                \"reference\": \"120b605dfeb996808c31b6477290a714d356e822\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"require-dev\": {
                \"php-coveralls/php-coveralls\": \"^2.1\",
                \"phpunit/phpunit\": \"^5 || ^6.5\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"files\": [
                    \"src/getallheaders.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Ralph Khattar\",
                    \"email\": \"ralph.khattar@gmail.com\"
                }
            ],
            \"description\": \"A polyfill for getallheaders.\",
            \"support\": {
                \"issues\": \"https://github.com/ralouphie/getallheaders/issues\",
                \"source\": \"https://github.com/ralouphie/getallheaders/tree/develop\"
            },
            \"time\": \"2019-03-08T08:55:37+00:00\"
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
            \"version\": \"v5.4.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/console.git\",
                \"reference\": \"d8111acc99876953f52fe16d4c50eb60940d49ad\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/console/zipball/d8111acc99876953f52fe16d4c50eb60940d49ad\",
                \"reference\": \"d8111acc99876953f52fe16d4c50eb60940d49ad\",
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
                \"command line\",
                \"console\",
                \"terminal\"
            ],
            \"support\": {
                \"source\": \"https://github.com/symfony/console/tree/v5.4.5\"
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
            \"time\": \"2022-02-24T12:45:35+00:00\"
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
            \"version\": \"v5.4.6\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/filesystem.git\",
                \"reference\": \"d53a45039974952af7f7ebc461ccdd4295e29440\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/filesystem/zipball/d53a45039974952af7f7ebc461ccdd4295e29440\",
                \"reference\": \"d53a45039974952af7f7ebc461ccdd4295e29440\",
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
                \"source\": \"https://github.com/symfony/filesystem/tree/v5.4.6\"
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
            \"time\": \"2022-03-02T12:42:23+00:00\"
        },
        {
            \"name\": \"symfony/finder\",
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/finder.git\",
                \"reference\": \"231313534dded84c7ecaa79d14bc5da4ccb69b7d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/finder/zipball/231313534dded84c7ecaa79d14bc5da4ccb69b7d\",
                \"reference\": \"231313534dded84c7ecaa79d14bc5da4ccb69b7d\",
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
                \"source\": \"https://github.com/symfony/finder/tree/v5.4.3\"
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
            \"time\": \"2022-01-26T16:34:36+00:00\"
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
            \"version\": \"v1.25.0\",
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
                \"source\": \"https://github.com/symfony/polyfill-ctype/tree/v1.25.0\"
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
            \"name\": \"symfony/polyfill-intl-grapheme\",
            \"version\": \"v1.25.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-grapheme.git\",
                \"reference\": \"81b86b50cf841a64252b439e738e97f4a34e2783\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/81b86b50cf841a64252b439e738e97f4a34e2783\",
                \"reference\": \"81b86b50cf841a64252b439e738e97f4a34e2783\",
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
                \"source\": \"https://github.com/symfony/polyfill-intl-grapheme/tree/v1.25.0\"
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
            \"time\": \"2021-11-23T21:10:46+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-intl-normalizer\",
            \"version\": \"v1.25.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-intl-normalizer.git\",
                \"reference\": \"8590a5f561694770bdcd3f9b5c69dde6945028e8\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/8590a5f561694770bdcd3f9b5c69dde6945028e8\",
                \"reference\": \"8590a5f561694770bdcd3f9b5c69dde6945028e8\",
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
                \"source\": \"https://github.com/symfony/polyfill-intl-normalizer/tree/v1.25.0\"
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
            \"version\": \"v1.25.0\",
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
                \"source\": \"https://github.com/symfony/polyfill-mbstring/tree/v1.25.0\"
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
            \"name\": \"symfony/polyfill-php73\",
            \"version\": \"v1.25.0\",
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
                \"source\": \"https://github.com/symfony/polyfill-php73/tree/v1.25.0\"
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
            \"version\": \"v1.25.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php80.git\",
                \"reference\": \"4407588e0d3f1f52efb65fbe92babe41f37fe50c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php80/zipball/4407588e0d3f1f52efb65fbe92babe41f37fe50c\",
                \"reference\": \"4407588e0d3f1f52efb65fbe92babe41f37fe50c\",
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
                \"source\": \"https://github.com/symfony/polyfill-php80/tree/v1.25.0\"
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
            \"time\": \"2022-03-04T08:16:47+00:00\"
        },
        {
            \"name\": \"symfony/polyfill-php81\",
            \"version\": \"v1.25.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/polyfill-php81.git\",
                \"reference\": \"5de4ba2d41b15f9bd0e19b2ab9674135813ec98f\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/polyfill-php81/zipball/5de4ba2d41b15f9bd0e19b2ab9674135813ec98f\",
                \"reference\": \"5de4ba2d41b15f9bd0e19b2ab9674135813ec98f\",
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
                \"source\": \"https://github.com/symfony/polyfill-php81/tree/v1.25.0\"
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
            \"time\": \"2021-09-13T13:58:11+00:00\"
        },
        {
            \"name\": \"symfony/process\",
            \"version\": \"v5.4.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/process.git\",
                \"reference\": \"95440409896f90a5f85db07a32b517ecec17fa4c\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/process/zipball/95440409896f90a5f85db07a32b517ecec17fa4c\",
                \"reference\": \"95440409896f90a5f85db07a32b517ecec17fa4c\",
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
                \"source\": \"https://github.com/symfony/process/tree/v5.4.5\"
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
            \"time\": \"2022-01-30T18:16:22+00:00\"
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
            \"version\": \"v5.4.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/stopwatch.git\",
                \"reference\": \"4d04b5c24f3c9a1a168a131f6cbe297155bc0d30\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/stopwatch/zipball/4d04b5c24f3c9a1a168a131f6cbe297155bc0d30\",
                \"reference\": \"4d04b5c24f3c9a1a168a131f6cbe297155bc0d30\",
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
                \"source\": \"https://github.com/symfony/stopwatch/tree/v5.4.5\"
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
            \"time\": \"2022-02-18T16:06:09+00:00\"
        },
        {
            \"name\": \"symfony/string\",
            \"version\": \"v5.4.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/symfony/string.git\",
                \"reference\": \"92043b7d8383e48104e411bc9434b260dbeb5a10\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/symfony/string/zipball/92043b7d8383e48104e411bc9434b260dbeb5a10\",
                \"reference\": \"92043b7d8383e48104e411bc9434b260dbeb5a10\",
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
                \"source\": \"https://github.com/symfony/string/tree/v5.4.3\"
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
    \"packages-dev\": [
        {
            \"name\": \"doctrine/instantiator\",
            \"version\": \"1.4.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/doctrine/instantiator.git\",
                \"reference\": \"10dcfce151b967d20fde1b34ae6640712c3891bc\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/doctrine/instantiator/zipball/10dcfce151b967d20fde1b34ae6640712c3891bc\",
                \"reference\": \"10dcfce151b967d20fde1b34ae6640712c3891bc\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1 || ^8.0\"
            },
            \"require-dev\": {
                \"doctrine/coding-standard\": \"^9\",
                \"ext-pdo\": \"*\",
                \"ext-phar\": \"*\",
                \"phpbench/phpbench\": \"^0.16 || ^1\",
                \"phpstan/phpstan\": \"^1.4\",
                \"phpstan/phpstan-phpunit\": \"^1\",
                \"phpunit/phpunit\": \"^7.5 || ^8.5 || ^9.5\",
                \"vimeo/psalm\": \"^4.22\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"psr-4\": {
                    \"Doctrine\\\\Instantiator\\\\\": \"src/Doctrine/Instantiator/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Marco Pivetta\",
                    \"email\": \"ocramius@gmail.com\",
                    \"homepage\": \"https://ocramius.github.io/\"
                }
            ],
            \"description\": \"A small, lightweight utility to instantiate objects in PHP without invoking their constructors\",
            \"homepage\": \"https://www.doctrine-project.org/projects/instantiator.html\",
            \"keywords\": [
                \"constructor\",
                \"instantiate\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/doctrine/instantiator/issues\",
                \"source\": \"https://github.com/doctrine/instantiator/tree/1.4.1\"
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
                    \"url\": \"https://tidelift.com/funding/github/packagist/doctrine%2Finstantiator\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2022-03-03T08:28:38+00:00\"
        },
        {
            \"name\": \"myclabs/deep-copy\",
            \"version\": \"1.11.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/myclabs/DeepCopy.git\",
                \"reference\": \"14daed4296fae74d9e3201d2c4925d1acb7aa614\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/myclabs/DeepCopy/zipball/14daed4296fae74d9e3201d2c4925d1acb7aa614\",
                \"reference\": \"14daed4296fae74d9e3201d2c4925d1acb7aa614\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1 || ^8.0\"
            },
            \"conflict\": {
                \"doctrine/collections\": \"<1.6.8\",
                \"doctrine/common\": \"<2.13.3 || >=3,<3.2.2\"
            },
            \"require-dev\": {
                \"doctrine/collections\": \"^1.6.8\",
                \"doctrine/common\": \"^2.13.3 || ^3.2.2\",
                \"phpunit/phpunit\": \"^7.5.20 || ^8.5.23 || ^9.5.13\"
            },
            \"type\": \"library\",
            \"autoload\": {
                \"files\": [
                    \"src/DeepCopy/deep_copy.php\"
                ],
                \"psr-4\": {
                    \"DeepCopy\\\\\": \"src/DeepCopy/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"Create deep copies (clones) of your objects\",
            \"keywords\": [
                \"clone\",
                \"copy\",
                \"duplicate\",
                \"object\",
                \"object graph\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/myclabs/DeepCopy/issues\",
                \"source\": \"https://github.com/myclabs/DeepCopy/tree/1.11.0\"
            },
            \"funding\": [
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/myclabs/deep-copy\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2022-03-03T13:19:32+00:00\"
        },
        {
            \"name\": \"phar-io/manifest\",
            \"version\": \"2.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/manifest.git\",
                \"reference\": \"97803eca37d319dfa7826cc2437fc020857acb53\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/manifest/zipball/97803eca37d319dfa7826cc2437fc020857acb53\",
                \"reference\": \"97803eca37d319dfa7826cc2437fc020857acb53\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-phar\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"phar-io/version\": \"^3.0.1\",
                \"php\": \"^7.2 || ^8.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
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
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Component for reading phar.io manifest information from a PHP Archive (PHAR)\",
            \"support\": {
                \"issues\": \"https://github.com/phar-io/manifest/issues\",
                \"source\": \"https://github.com/phar-io/manifest/tree/2.0.3\"
            },
            \"time\": \"2021-07-20T11:28:43+00:00\"
        },
        {
            \"name\": \"phar-io/version\",
            \"version\": \"3.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phar-io/version.git\",
                \"reference\": \"4f7fd7836c6f332bb2933569e566a0d6c4cbed74\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phar-io/version/zipball/4f7fd7836c6f332bb2933569e566a0d6c4cbed74\",
                \"reference\": \"4f7fd7836c6f332bb2933569e566a0d6c4cbed74\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2 || ^8.0\"
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
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Heuer\",
                    \"email\": \"sebastian@phpeople.de\",
                    \"role\": \"Developer\"
                },
                {
                    \"name\": \"Sebastian Bergmann\",
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"Library for handling version information and constraints\",
            \"support\": {
                \"issues\": \"https://github.com/phar-io/version/issues\",
                \"source\": \"https://github.com/phar-io/version/tree/3.2.1\"
            },
            \"time\": \"2022-02-21T01:04:05+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-common\",
            \"version\": \"2.2.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionCommon.git\",
                \"reference\": \"1d01c49d4ed62f25aa84a747ad35d5a16924662b\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/1d01c49d4ed62f25aa84a747ad35d5a16924662b\",
                \"reference\": \"1d01c49d4ed62f25aa84a747ad35d5a16924662b\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2 || ^8.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-2.x\": \"2.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Jaap van Otterdijk\",
                    \"email\": \"opensource@ijaap.nl\"
                }
            ],
            \"description\": \"Common reflection classes used by phpdocumentor to reflect the code structure\",
            \"homepage\": \"http://www.phpdoc.org\",
            \"keywords\": [
                \"FQSEN\",
                \"phpDocumentor\",
                \"phpdoc\",
                \"reflection\",
                \"static analysis\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/phpDocumentor/ReflectionCommon/issues\",
                \"source\": \"https://github.com/phpDocumentor/ReflectionCommon/tree/2.x\"
            },
            \"time\": \"2020-06-27T09:03:43+00:00\"
        },
        {
            \"name\": \"phpdocumentor/reflection-docblock\",
            \"version\": \"5.3.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/ReflectionDocBlock.git\",
                \"reference\": \"622548b623e81ca6d78b721c5e029f4ce664f170\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/622548b623e81ca6d78b721c5e029f4ce664f170\",
                \"reference\": \"622548b623e81ca6d78b721c5e029f4ce664f170\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-filter\": \"*\",
                \"php\": \"^7.2 || ^8.0\",
                \"phpdocumentor/reflection-common\": \"^2.2\",
                \"phpdocumentor/type-resolver\": \"^1.3\",
                \"webmozart/assert\": \"^1.9.1\"
            },
            \"require-dev\": {
                \"mockery/mockery\": \"~1.3.2\",
                \"psalm/phar\": \"^4.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"5.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                },
                {
                    \"name\": \"Jaap van Otterdijk\",
                    \"email\": \"account@ijaap.nl\"
                }
            ],
            \"description\": \"With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.\",
            \"support\": {
                \"issues\": \"https://github.com/phpDocumentor/ReflectionDocBlock/issues\",
                \"source\": \"https://github.com/phpDocumentor/ReflectionDocBlock/tree/5.3.0\"
            },
            \"time\": \"2021-10-19T17:43:47+00:00\"
        },
        {
            \"name\": \"phpdocumentor/type-resolver\",
            \"version\": \"1.6.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpDocumentor/TypeResolver.git\",
                \"reference\": \"93ebd0014cab80c4ea9f5e297ea48672f1b87706\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/93ebd0014cab80c4ea9f5e297ea48672f1b87706\",
                \"reference\": \"93ebd0014cab80c4ea9f5e297ea48672f1b87706\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2 || ^8.0\",
                \"phpdocumentor/reflection-common\": \"^2.0\"
            },
            \"require-dev\": {
                \"ext-tokenizer\": \"*\",
                \"psalm/phar\": \"^4.8\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-1.x\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"phpDocumentor\\\\Reflection\\\\\": \"src\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Mike van Riel\",
                    \"email\": \"me@mikevanriel.com\"
                }
            ],
            \"description\": \"A PSR-5 based resolver of Class names, Types and Structural Element Names\",
            \"support\": {
                \"issues\": \"https://github.com/phpDocumentor/TypeResolver/issues\",
                \"source\": \"https://github.com/phpDocumentor/TypeResolver/tree/1.6.0\"
            },
            \"time\": \"2022-01-04T19:58:01+00:00\"
        },
        {
            \"name\": \"phpspec/prophecy\",
            \"version\": \"v1.15.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpspec/prophecy.git\",
                \"reference\": \"bbcd7380b0ebf3961ee21409db7b38bc31d69a13\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpspec/prophecy/zipball/bbcd7380b0ebf3961ee21409db7b38bc31d69a13\",
                \"reference\": \"bbcd7380b0ebf3961ee21409db7b38bc31d69a13\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.2\",
                \"php\": \"^7.2 || ~8.0, <8.2\",
                \"phpdocumentor/reflection-docblock\": \"^5.2\",
                \"sebastian/comparator\": \"^3.0 || ^4.0\",
                \"sebastian/recursion-context\": \"^3.0 || ^4.0\"
            },
            \"require-dev\": {
                \"phpspec/phpspec\": \"^6.0 || ^7.0\",
                \"phpunit/phpunit\": \"^8.0 || ^9.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.x-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Prophecy\\\\\": \"src/Prophecy\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Konstantin Kudryashov\",
                    \"email\": \"ever.zet@gmail.com\",
                    \"homepage\": \"http://everzet.com\"
                },
                {
                    \"name\": \"Marcello Duarte\",
                    \"email\": \"marcello.duarte@gmail.com\"
                }
            ],
            \"description\": \"Highly opinionated mocking framework for PHP 5.3+\",
            \"homepage\": \"https://github.com/phpspec/prophecy\",
            \"keywords\": [
                \"Double\",
                \"Dummy\",
                \"fake\",
                \"mock\",
                \"spy\",
                \"stub\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/phpspec/prophecy/issues\",
                \"source\": \"https://github.com/phpspec/prophecy/tree/v1.15.0\"
            },
            \"time\": \"2021-12-08T12:19:24+00:00\"
        },
        {
            \"name\": \"phpstan/phpstan\",
            \"version\": \"1.4.10\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/phpstan/phpstan.git\",
                \"reference\": \"898c479c39caa727bedf4311dd294a8f4e250e72\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/phpstan/phpstan/zipball/898c479c39caa727bedf4311dd294a8f4e250e72\",
                \"reference\": \"898c479c39caa727bedf4311dd294a8f4e250e72\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.1|^8.0\"
            },
            \"conflict\": {
                \"phpstan/phpstan-shim\": \"*\"
            },
            \"bin\": [
                \"phpstan\",
                \"phpstan.phar\"
            ],
            \"type\": \"library\",
            \"autoload\": {
                \"files\": [
                    \"bootstrap.php\"
                ]
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"description\": \"PHPStan - PHP Static Analysis Tool\",
            \"support\": {
                \"issues\": \"https://github.com/phpstan/phpstan/issues\",
                \"source\": \"https://github.com/phpstan/phpstan/tree/1.4.10\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/ondrejmirtes\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://github.com/phpstan\",
                    \"type\": \"github\"
                },
                {
                    \"url\": \"https://www.patreon.com/phpstan\",
                    \"type\": \"patreon\"
                },
                {
                    \"url\": \"https://tidelift.com/funding/github/packagist/phpstan/phpstan\",
                    \"type\": \"tidelift\"
                }
            ],
            \"time\": \"2022-03-14T10:25:45+00:00\"
        },
        {
            \"name\": \"phpunit/php-code-coverage\",
            \"version\": \"7.0.15\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-code-coverage.git\",
                \"reference\": \"819f92bba8b001d4363065928088de22f25a3a48\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/819f92bba8b001d4363065928088de22f25a3a48\",
                \"reference\": \"819f92bba8b001d4363065928088de22f25a3a48\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \">=7.2\",
                \"phpunit/php-file-iterator\": \"^2.0.2\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-token-stream\": \"^3.1.3 || ^4.0\",
                \"sebastian/code-unit-reverse-lookup\": \"^1.0.1\",
                \"sebastian/environment\": \"^4.2.2\",
                \"sebastian/version\": \"^2.0.1\",
                \"theseer/tokenizer\": \"^1.1.3\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.2.2\"
            },
            \"suggest\": {
                \"ext-xdebug\": \"^2.7.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"7.0-dev\"
                }
            },
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that provides collection, processing, and rendering functionality for PHP code coverage information.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-code-coverage\",
            \"keywords\": [
                \"coverage\",
                \"testing\",
                \"xunit\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/php-code-coverage/issues\",
                \"source\": \"https://github.com/sebastianbergmann/php-code-coverage/tree/7.0.15\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-07-26T12:20:09+00:00\"
        },
        {
            \"name\": \"phpunit/php-file-iterator\",
            \"version\": \"2.0.5\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-file-iterator.git\",
                \"reference\": \"42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5\",
                \"reference\": \"42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"FilterIterator implementation that filters files based on a list of suffixes.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-file-iterator/\",
            \"keywords\": [
                \"filesystem\",
                \"iterator\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/php-file-iterator/issues\",
                \"source\": \"https://github.com/sebastianbergmann/php-file-iterator/tree/2.0.5\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-12-02T12:42:26+00:00\"
        },
        {
            \"name\": \"phpunit/php-text-template\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-text-template.git\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"reference\": \"31f8b717e51d9a2afca6c9f046f5d69fc27c8686\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.3.3\"
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Simple template engine.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-text-template/\",
            \"keywords\": [
                \"template\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/php-text-template/issues\",
                \"source\": \"https://github.com/sebastianbergmann/php-text-template/tree/1.2.1\"
            },
            \"time\": \"2015-06-21T13:50:34+00:00\"
        },
        {
            \"name\": \"phpunit/php-timer\",
            \"version\": \"2.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-timer.git\",
                \"reference\": \"2454ae1765516d20c4ffe103d85a58a9a3bd5662\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-timer/zipball/2454ae1765516d20c4ffe103d85a58a9a3bd5662\",
                \"reference\": \"2454ae1765516d20c4ffe103d85a58a9a3bd5662\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.1-dev\"
                }
            },
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Utility class for timing\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-timer/\",
            \"keywords\": [
                \"timer\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/php-timer/issues\",
                \"source\": \"https://github.com/sebastianbergmann/php-timer/tree/2.1.3\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T08:20:02+00:00\"
        },
        {
            \"name\": \"phpunit/php-token-stream\",
            \"version\": \"3.1.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/php-token-stream.git\",
                \"reference\": \"9c1da83261628cb24b6a6df371b6e312b3954768\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/php-token-stream/zipball/9c1da83261628cb24b6a6df371b6e312b3954768\",
                \"reference\": \"9c1da83261628cb24b6a6df371b6e312b3954768\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-tokenizer\": \"*\",
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Wrapper around PHP's tokenizer extension.\",
            \"homepage\": \"https://github.com/sebastianbergmann/php-token-stream/\",
            \"keywords\": [
                \"tokenizer\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/php-token-stream/issues\",
                \"source\": \"https://github.com/sebastianbergmann/php-token-stream/tree/3.1.3\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"abandoned\": true,
            \"time\": \"2021-07-26T12:15:06+00:00\"
        },
        {
            \"name\": \"phpunit/phpunit\",
            \"version\": \"8.5.24\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/phpunit.git\",
                \"reference\": \"293cb0099d75407d971a73f41e51f35b664667ed\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/phpunit/zipball/293cb0099d75407d971a73f41e51f35b664667ed\",
                \"reference\": \"293cb0099d75407d971a73f41e51f35b664667ed\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"doctrine/instantiator\": \"^1.3.1\",
                \"ext-dom\": \"*\",
                \"ext-json\": \"*\",
                \"ext-libxml\": \"*\",
                \"ext-mbstring\": \"*\",
                \"ext-xml\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"myclabs/deep-copy\": \"^1.10.0\",
                \"phar-io/manifest\": \"^2.0.3\",
                \"phar-io/version\": \"^3.0.2\",
                \"php\": \">=7.2\",
                \"phpspec/prophecy\": \"^1.10.3\",
                \"phpunit/php-code-coverage\": \"^7.0.12\",
                \"phpunit/php-file-iterator\": \"^2.0.4\",
                \"phpunit/php-text-template\": \"^1.2.1\",
                \"phpunit/php-timer\": \"^2.1.2\",
                \"sebastian/comparator\": \"^3.0.2\",
                \"sebastian/diff\": \"^3.0.2\",
                \"sebastian/environment\": \"^4.2.3\",
                \"sebastian/exporter\": \"^3.1.2\",
                \"sebastian/global-state\": \"^3.0.0\",
                \"sebastian/object-enumerator\": \"^3.0.3\",
                \"sebastian/resource-operations\": \"^2.0.1\",
                \"sebastian/type\": \"^1.1.3\",
                \"sebastian/version\": \"^2.0.1\"
            },
            \"require-dev\": {
                \"ext-pdo\": \"*\"
            },
            \"suggest\": {
                \"ext-soap\": \"*\",
                \"ext-xdebug\": \"*\",
                \"phpunit/php-invoker\": \"^2.0.0\"
            },
            \"bin\": [
                \"phpunit\"
            ],
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"8.5-dev\"
                }
            },
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"The PHP Unit Testing framework.\",
            \"homepage\": \"https://phpunit.de/\",
            \"keywords\": [
                \"phpunit\",
                \"testing\",
                \"xunit\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/phpunit/issues\",
                \"source\": \"https://github.com/sebastianbergmann/phpunit/tree/8.5.24\"
            },
            \"funding\": [
                {
                    \"url\": \"https://phpunit.de/sponsors.html\",
                    \"type\": \"custom\"
                },
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2022-03-05T16:52:36+00:00\"
        },
        {
            \"name\": \"sebastian/code-unit-reverse-lookup\",
            \"version\": \"1.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup.git\",
                \"reference\": \"1de8cd5c010cb153fcd68b8d0f64606f523f7619\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/1de8cd5c010cb153fcd68b8d0f64606f523f7619\",
                \"reference\": \"1de8cd5c010cb153fcd68b8d0f64606f523f7619\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.0.x-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Looks up which function or method a line of code belongs to\",
            \"homepage\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/issues\",
                \"source\": \"https://github.com/sebastianbergmann/code-unit-reverse-lookup/tree/1.0.2\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T08:15:22+00:00\"
        },
        {
            \"name\": \"sebastian/comparator\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/comparator.git\",
                \"reference\": \"1071dfcef776a57013124ff35e1fc41ccd294758\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/comparator/zipball/1071dfcef776a57013124ff35e1fc41ccd294758\",
                \"reference\": \"1071dfcef776a57013124ff35e1fc41ccd294758\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\",
                \"sebastian/diff\": \"^3.0\",
                \"sebastian/exporter\": \"^3.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
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
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@2bepublished.at\"
                }
            ],
            \"description\": \"Provides the functionality to compare PHP values for equality\",
            \"homepage\": \"https://github.com/sebastianbergmann/comparator\",
            \"keywords\": [
                \"comparator\",
                \"compare\",
                \"equality\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/comparator/issues\",
                \"source\": \"https://github.com/sebastianbergmann/comparator/tree/3.0.3\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T08:04:30+00:00\"
        },
        {
            \"name\": \"sebastian/diff\",
            \"version\": \"3.0.3\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/diff.git\",
                \"reference\": \"14f72dd46eaf2f2293cbe79c93cc0bc43161a211\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/diff/zipball/14f72dd46eaf2f2293cbe79c93cc0bc43161a211\",
                \"reference\": \"14f72dd46eaf2f2293cbe79c93cc0bc43161a211\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5 || ^8.0\",
                \"symfony/process\": \"^2 || ^3.3 || ^4\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
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
            \"description\": \"Diff implementation\",
            \"homepage\": \"https://github.com/sebastianbergmann/diff\",
            \"keywords\": [
                \"diff\",
                \"udiff\",
                \"unidiff\",
                \"unified diff\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/diff/issues\",
                \"source\": \"https://github.com/sebastianbergmann/diff/tree/3.0.3\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:59:04+00:00\"
        },
        {
            \"name\": \"sebastian/environment\",
            \"version\": \"4.2.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/environment.git\",
                \"reference\": \"d47bbbad83711771f167c72d4e3f25f7fcc1f8b0\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/environment/zipball/d47bbbad83711771f167c72d4e3f25f7fcc1f8b0\",
                \"reference\": \"d47bbbad83711771f167c72d4e3f25f7fcc1f8b0\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^7.5\"
            },
            \"suggest\": {
                \"ext-posix\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"4.2-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Provides functionality to handle HHVM/PHP environments\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/environment\",
            \"keywords\": [
                \"Xdebug\",
                \"environment\",
                \"hhvm\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/environment/issues\",
                \"source\": \"https://github.com/sebastianbergmann/environment/tree/4.2.4\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:53:42+00:00\"
        },
        {
            \"name\": \"sebastian/exporter\",
            \"version\": \"3.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/exporter.git\",
                \"reference\": \"0c32ea2e40dbf59de29f3b49bf375176ce7dd8db\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/exporter/zipball/0c32ea2e40dbf59de29f3b49bf375176ce7dd8db\",
                \"reference\": \"0c32ea2e40dbf59de29f3b49bf375176ce7dd8db\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-mbstring\": \"*\",
                \"phpunit/phpunit\": \"^8.5\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.1.x-dev\"
                }
            },
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
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Volker Dusch\",
                    \"email\": \"github@wallbash.com\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                },
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Provides the functionality to export PHP variables for visualization\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/exporter\",
            \"keywords\": [
                \"export\",
                \"exporter\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/exporter/issues\",
                \"source\": \"https://github.com/sebastianbergmann/exporter/tree/3.1.4\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-11-11T13:51:24+00:00\"
        },
        {
            \"name\": \"sebastian/global-state\",
            \"version\": \"3.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/global-state.git\",
                \"reference\": \"de036ec91d55d2a9e0db2ba975b512cdb1c23921\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/global-state/zipball/de036ec91d55d2a9e0db2ba975b512cdb1c23921\",
                \"reference\": \"de036ec91d55d2a9e0db2ba975b512cdb1c23921\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"ext-dom\": \"*\",
                \"phpunit/phpunit\": \"^8.0\"
            },
            \"suggest\": {
                \"ext-uopz\": \"*\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Snapshotting of global state\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/global-state\",
            \"keywords\": [
                \"global state\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/global-state/issues\",
                \"source\": \"https://github.com/sebastianbergmann/global-state/tree/3.0.2\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2022-02-10T06:55:38+00:00\"
        },
        {
            \"name\": \"sebastian/object-enumerator\",
            \"version\": \"3.0.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-enumerator.git\",
                \"reference\": \"e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2\",
                \"reference\": \"e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0\",
                \"sebastian/object-reflector\": \"^1.1.1\",
                \"sebastian/recursion-context\": \"^3.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Traverses array structures and object graphs to enumerate all referenced objects\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-enumerator/\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/object-enumerator/issues\",
                \"source\": \"https://github.com/sebastianbergmann/object-enumerator/tree/3.0.4\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:40:27+00:00\"
        },
        {
            \"name\": \"sebastian/object-reflector\",
            \"version\": \"1.1.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/object-reflector.git\",
                \"reference\": \"9b8772b9cbd456ab45d4a598d2dd1a1bced6363d\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/9b8772b9cbd456ab45d4a598d2dd1a1bced6363d\",
                \"reference\": \"9b8772b9cbd456ab45d4a598d2dd1a1bced6363d\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Allows reflection of object attributes, including inherited and non-public ones\",
            \"homepage\": \"https://github.com/sebastianbergmann/object-reflector/\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/object-reflector/issues\",
                \"source\": \"https://github.com/sebastianbergmann/object-reflector/tree/1.1.2\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:37:18+00:00\"
        },
        {
            \"name\": \"sebastian/recursion-context\",
            \"version\": \"3.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/recursion-context.git\",
                \"reference\": \"367dcba38d6e1977be014dc4b22f47a484dac7fb\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/367dcba38d6e1977be014dc4b22f47a484dac7fb\",
                \"reference\": \"367dcba38d6e1977be014dc4b22f47a484dac7fb\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.0\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^6.0\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"3.0.x-dev\"
                }
            },
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
                    \"name\": \"Jeff Welch\",
                    \"email\": \"whatthejeff@gmail.com\"
                },
                {
                    \"name\": \"Adam Harvey\",
                    \"email\": \"aharvey@php.net\"
                }
            ],
            \"description\": \"Provides functionality to recursively process PHP variables\",
            \"homepage\": \"http://www.github.com/sebastianbergmann/recursion-context\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/recursion-context/issues\",
                \"source\": \"https://github.com/sebastianbergmann/recursion-context/tree/3.0.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:34:24+00:00\"
        },
        {
            \"name\": \"sebastian/resource-operations\",
            \"version\": \"2.0.2\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/resource-operations.git\",
                \"reference\": \"31d35ca87926450c44eae7e2611d45a7a65ea8b3\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/31d35ca87926450c44eae7e2611d45a7a65ea8b3\",
                \"reference\": \"31d35ca87926450c44eae7e2611d45a7a65ea8b3\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.1\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0-dev\"
                }
            },
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
                }
            ],
            \"description\": \"Provides a list of PHP built-in functions that operate on resources\",
            \"homepage\": \"https://www.github.com/sebastianbergmann/resource-operations\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/resource-operations/issues\",
                \"source\": \"https://github.com/sebastianbergmann/resource-operations/tree/2.0.2\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:30:19+00:00\"
        },
        {
            \"name\": \"sebastian/type\",
            \"version\": \"1.1.4\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/type.git\",
                \"reference\": \"0150cfbc4495ed2df3872fb31b26781e4e077eb4\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/type/zipball/0150cfbc4495ed2df3872fb31b26781e4e077eb4\",
                \"reference\": \"0150cfbc4495ed2df3872fb31b26781e4e077eb4\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=7.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.2\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.1-dev\"
                }
            },
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Collection of value objects that represent the types of the PHP type system\",
            \"homepage\": \"https://github.com/sebastianbergmann/type\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/type/issues\",
                \"source\": \"https://github.com/sebastianbergmann/type/tree/1.1.4\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/sebastianbergmann\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2020-11-30T07:25:11+00:00\"
        },
        {
            \"name\": \"sebastian/version\",
            \"version\": \"2.0.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/sebastianbergmann/version.git\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/sebastianbergmann/version/zipball/99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"reference\": \"99732be0ddb3361e16ad77b68ba41efc8e979019\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \">=5.6\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"2.0.x-dev\"
                }
            },
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
                    \"email\": \"sebastian@phpunit.de\",
                    \"role\": \"lead\"
                }
            ],
            \"description\": \"Library that helps with managing the version number of Git-hosted PHP projects\",
            \"homepage\": \"https://github.com/sebastianbergmann/version\",
            \"support\": {
                \"issues\": \"https://github.com/sebastianbergmann/version/issues\",
                \"source\": \"https://github.com/sebastianbergmann/version/tree/master\"
            },
            \"time\": \"2016-10-03T07:35:21+00:00\"
        },
        {
            \"name\": \"theseer/tokenizer\",
            \"version\": \"1.2.1\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/theseer/tokenizer.git\",
                \"reference\": \"34a41e998c2183e22995f158c581e7b5e755ab9e\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/theseer/tokenizer/zipball/34a41e998c2183e22995f158c581e7b5e755ab9e\",
                \"reference\": \"34a41e998c2183e22995f158c581e7b5e755ab9e\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"ext-dom\": \"*\",
                \"ext-tokenizer\": \"*\",
                \"ext-xmlwriter\": \"*\",
                \"php\": \"^7.2 || ^8.0\"
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
                    \"name\": \"Arne Blankerts\",
                    \"email\": \"arne@blankerts.de\",
                    \"role\": \"Developer\"
                }
            ],
            \"description\": \"A small library for converting tokenized PHP source code into XML and potentially other formats\",
            \"support\": {
                \"issues\": \"https://github.com/theseer/tokenizer/issues\",
                \"source\": \"https://github.com/theseer/tokenizer/tree/1.2.1\"
            },
            \"funding\": [
                {
                    \"url\": \"https://github.com/theseer\",
                    \"type\": \"github\"
                }
            ],
            \"time\": \"2021-07-28T10:34:58+00:00\"
        },
        {
            \"name\": \"webmozart/assert\",
            \"version\": \"1.10.0\",
            \"source\": {
                \"type\": \"git\",
                \"url\": \"https://github.com/webmozarts/assert.git\",
                \"reference\": \"6964c76c7804814a842473e0c8fd15bab0f18e25\"
            },
            \"dist\": {
                \"type\": \"zip\",
                \"url\": \"https://api.github.com/repos/webmozarts/assert/zipball/6964c76c7804814a842473e0c8fd15bab0f18e25\",
                \"reference\": \"6964c76c7804814a842473e0c8fd15bab0f18e25\",
                \"shasum\": \"\"
            },
            \"require\": {
                \"php\": \"^7.2 || ^8.0\",
                \"symfony/polyfill-ctype\": \"^1.8\"
            },
            \"conflict\": {
                \"phpstan/phpstan\": \"<0.12.20\",
                \"vimeo/psalm\": \"<4.6.1 || 4.6.2\"
            },
            \"require-dev\": {
                \"phpunit/phpunit\": \"^8.5.13\"
            },
            \"type\": \"library\",
            \"extra\": {
                \"branch-alias\": {
                    \"dev-master\": \"1.10-dev\"
                }
            },
            \"autoload\": {
                \"psr-4\": {
                    \"Webmozart\\\\Assert\\\\\": \"src/\"
                }
            },
            \"notification-url\": \"https://packagist.org/downloads/\",
            \"license\": [
                \"MIT\"
            ],
            \"authors\": [
                {
                    \"name\": \"Bernhard Schussek\",
                    \"email\": \"bschussek@gmail.com\"
                }
            ],
            \"description\": \"Assertions to validate method input/output with nice error messages.\",
            \"keywords\": [
                \"assert\",
                \"check\",
                \"validate\"
            ],
            \"support\": {
                \"issues\": \"https://github.com/webmozarts/assert/issues\",
                \"source\": \"https://github.com/webmozarts/assert/tree/1.10.0\"
            },
            \"time\": \"2021-03-09T10:59:23+00:00\"
        }
    ],
    \"aliases\": [],
    \"minimum-stability\": \"stable\",
    \"stability-flags\": [],
    \"prefer-stable\": false,
    \"prefer-lowest\": false,
    \"platform\": {
        \"php\": \">=7.2.5\"
    },
    \"platform-dev\": [],
    \"platform-overrides\": {
        \"php\": \"7.2.5\"
    },
    \"plugin-api-version\": \"2.2.0\"
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/composer.lock";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_distributionapiclient/composer.lock", "/var/www/html/modules/ps_distributionapiclient/composer.lock");
    }
}
