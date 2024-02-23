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

/* @Modules/ps_facetedsearch/package-lock.json */
class __TwigTemplate_6dfff0e2ba78a99ae15e0ed01d8ad8e6 extends Template
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
  \"name\": \"ps_facetedsearch\",
  \"version\": \"1.0.0\",
  \"lockfileVersion\": 2,
  \"requires\": true,
  \"packages\": {
    \"\": {
      \"name\": \"ps_facetedsearch\",
      \"license\": \"AFL-3.0\",
      \"dependencies\": {
        \"jquery-ui-touch-punch\": \"^0.2.3\",
        \"lodash.escaperegexp\": \"^4.1.2\"
      },
      \"devDependencies\": {
        \"@babel/cli\": \"^7.23.0\",
        \"@babel/core\": \"^7.23.3\",
        \"@babel/eslint-parser\": \"^7.23.3\",
        \"@babel/node\": \"^7.22.19\",
        \"@babel/preset-env\": \"^7.23.3\",
        \"@babel/register\": \"^7.22.15\",
        \"babel-loader\": \"^9.1.3\",
        \"chai\": \"^4.3.10\",
        \"clean-webpack-plugin\": \"^4.0.0\",
        \"css-loader\": \"^6.8.1\",
        \"eslint\": \"^8.54.0\",
        \"eslint-config-airbnb-base\": \"^15.0.0\",
        \"eslint-config-prestashop\": \"^0.2.1\",
        \"eslint-plugin-import\": \"^2.29.0\",
        \"mini-css-extract-plugin\": \"^1.0.0\",
        \"mocha\": \"^10.2.0\",
        \"node-sass\": \"^9.0.0\",
        \"sass-loader\": \"^13.3.2\",
        \"style-loader\": \"^2.0.0\",
        \"webpack\": \"^5.89.0\",
        \"webpack-cli\": \"^4.10.0\"
      }
    },
    \"../../../eslint-config\": {
      \"name\": \"eslint-config-prestashop\",
      \"version\": \"0.0.1\",
      \"extraneous\": true,
      \"dependencies\": {
        \"@babel/eslint-parser\": \"^7.16.3\",
        \"babel-preset-airbnb\": \"^5.0.0\",
        \"babel-tape-runner\": \"^3.0.0\",
        \"eslint\": \"^8.4.1\",
        \"eslint-config-airbnb-base\": \"^15.0.0\",
        \"eslint-plugin-import\": \"^2.25.3\",
        \"tape\": \"^5.3.2\"
      }
    },
    \"node_modules/@aashutoshrathi/word-wrap\": {
      \"version\": \"1.2.6\",
      \"resolved\": \"https://registry.npmjs.org/@aashutoshrathi/word-wrap/-/word-wrap-1.2.6.tgz\",
      \"integrity\": \"sha512-1Yjs2SvM8TflER/OD3cOjhWWOZb58A2t7wpE2S9XfBYTiIl+XFhQG2bjy4Pu1I+EAlCNUzRDYDdFwFYUKvXcIA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/@ampproject/remapping\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@ampproject/remapping/-/remapping-2.2.0.tgz\",
      \"integrity\": \"sha512-qRmjj8nj9qmLTQXXmaR1cck3UXSRMPrbsLJAasZpF+t3riI71BXed5ebIOYwQntykeZuhjsdweEc9BxH5Jc26w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/gen-mapping\": \"^0.1.0\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      },
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/@ampproject/remapping/node_modules/@jridgewell/gen-mapping\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/gen-mapping/-/gen-mapping-0.1.1.tgz\",
      \"integrity\": \"sha512-sQXCasFk+U8lWYEe66WxRDOE9PjVz4vSM51fTu3Hw+ClTpUSQb718772vH3pyS5pShp6lvQM7SxgIDXXXmOX7w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/set-array\": \"^1.0.0\",
        \"@jridgewell/sourcemap-codec\": \"^1.4.10\"
      },
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/@babel/cli\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/cli/-/cli-7.23.0.tgz\",
      \"integrity\": \"sha512-17E1oSkGk2IwNILM4jtfAvgjt+ohmpfBky8aLerUfYZhiPNg7ca+CRCxZn8QDxwNhV/upsc2VHBCqGFIR+iBfA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"commander\": \"^4.0.1\",
        \"convert-source-map\": \"^2.0.0\",
        \"fs-readdir-recursive\": \"^1.1.0\",
        \"glob\": \"^7.2.0\",
        \"make-dir\": \"^2.1.0\",
        \"slash\": \"^2.0.0\"
      },
      \"bin\": {
        \"babel\": \"bin/babel.js\",
        \"babel-external-helpers\": \"bin/babel-external-helpers.js\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"optionalDependencies\": {
        \"@nicolo-ribaudo/chokidar-2\": \"2.1.8-no-fsevents.3\",
        \"chokidar\": \"^3.4.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/cli/node_modules/glob\": {
      \"version\": \"7.2.3\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.3.tgz\",
      \"integrity\": \"sha512-nFR0zLpU2YCaRxwoCJvL6UvCH2JFyFVIvwTLsIf21AuHlMskA1hhTdk+LlYJtOlYt9v6dvszD2BGRqBL+iQK9Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^3.1.1\",
        \"once\": \"^1.3.0\",
        \"path-is-absolute\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \"*\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/@babel/cli/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/@babel/code-frame\": {
      \"version\": \"7.22.13\",
      \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.22.13.tgz\",
      \"integrity\": \"sha512-XktuhWlJ5g+3TJXc5upd9Ks1HutSArik6jf2eAjYFyIOf4ej3RN+184cZbzDvbPnuTJIUhPKKJE3cIsYTiAT3w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/highlight\": \"^7.22.13\",
        \"chalk\": \"^2.4.2\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/compat-data\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/compat-data/-/compat-data-7.23.3.tgz\",
      \"integrity\": \"sha512-BmR4bWbDIoFJmJ9z2cZ8Gmm2MXgEDgjdWgpKmKWUt54UGFJdlj31ECtbaDvCG/qVdG3AQ1SfpZEs01lUFbzLOQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/core\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/core/-/core-7.23.3.tgz\",
      \"integrity\": \"sha512-Jg+msLuNuCJDyBvFv5+OKOUjWMZgd85bKjbICd3zWrKAo+bJ49HJufi7CQE0q0uR8NGyO6xkCACScNqyjHSZew==\",
      \"dev\": true,
      \"dependencies\": {
        \"@ampproject/remapping\": \"^2.2.0\",
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.3\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helpers\": \"^7.23.2\",
        \"@babel/parser\": \"^7.23.3\",
        \"@babel/template\": \"^7.22.15\",
        \"@babel/traverse\": \"^7.23.3\",
        \"@babel/types\": \"^7.23.3\",
        \"convert-source-map\": \"^2.0.0\",
        \"debug\": \"^4.1.0\",
        \"gensync\": \"^1.0.0-beta.2\",
        \"json5\": \"^2.2.3\",
        \"semver\": \"^6.3.1\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/babel\"
      }
    },
    \"node_modules/@babel/core/node_modules/debug\": {
      \"version\": \"4.3.2\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.2.tgz\",
      \"integrity\": \"sha512-mOp8wKcvj7XxC78zLgw/ZA+6TSgkoE2C/ienthhRD298T7UNwAg9diBpLRxC0mOezLl4B0xV7M0cCO6P/O0Xhw==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/@babel/core/node_modules/json5\": {
      \"version\": \"2.2.3\",
      \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
      \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
      \"dev\": true,
      \"bin\": {
        \"json5\": \"lib/cli.js\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/@babel/core/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/@babel/core/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/@babel/eslint-parser\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/eslint-parser/-/eslint-parser-7.23.3.tgz\",
      \"integrity\": \"sha512-9bTuNlyx7oSstodm1cR1bECj4fkiknsDa1YniISkJemMY3DGhJNYBECbe6QD/q54mp2J8VO66jW3/7uP//iFCw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@nicolo-ribaudo/eslint-scope-5-internals\": \"5.1.1-v1\",
        \"eslint-visitor-keys\": \"^2.1.0\",
        \"semver\": \"^6.3.1\"
      },
      \"engines\": {
        \"node\": \"^10.13.0 || ^12.13.0 || >=14.0.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.11.0\",
        \"eslint\": \"^7.5.0 || ^8.0.0\"
      }
    },
    \"node_modules/@babel/eslint-parser/node_modules/eslint-visitor-keys\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-2.1.0.tgz\",
      \"integrity\": \"sha512-0rSmRBzXgDzIsD6mGdJgevzgezI534Cer5L/vyMX0kHzT/jiB43jRhd9YUlMGYLQy2zprNmoT8qasCGtY+QaKw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/@babel/eslint-parser/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/@babel/generator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/generator/-/generator-7.23.3.tgz\",
      \"integrity\": \"sha512-keeZWAV4LU3tW0qRi19HRpabC/ilM0HRBBzf9/k8FFiG4KVpiv0FIy4hHfLfFQZNhziCTPTmd59zoyv6DNISzg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.23.3\",
        \"@jridgewell/gen-mapping\": \"^0.3.2\",
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"jsesc\": \"^2.5.1\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-annotate-as-pure\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-annotate-as-pure/-/helper-annotate-as-pure-7.22.5.tgz\",
      \"integrity\": \"sha512-LvBTxu8bQSQkcyKOU+a1btnNFQ1dMAd0R6PyW3arXes06F6QLWLIrd681bxRPIXlrMGR3XYnW9JyML7dP3qgxg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-builder-binary-assignment-operator-visitor\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-builder-binary-assignment-operator-visitor/-/helper-builder-binary-assignment-operator-visitor-7.22.15.tgz\",
      \"integrity\": \"sha512-QkBXwGgaoC2GtGZRoma6kv7Szfv06khvhFav67ZExau2RaXzy8MpHSMO2PNoP2XtmQphJQRHFfg77Bq731Yizw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.15\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-compilation-targets\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-compilation-targets/-/helper-compilation-targets-7.22.15.tgz\",
      \"integrity\": \"sha512-y6EEzULok0Qvz8yyLkCvVX+02ic+By2UdOhylwUOvOn9dvYc9mKICJuuU1n1XBI02YWsNsnrY1kc6DVbjcXbtw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/compat-data\": \"^7.22.9\",
        \"@babel/helper-validator-option\": \"^7.22.15\",
        \"browserslist\": \"^4.21.9\",
        \"lru-cache\": \"^5.1.1\",
        \"semver\": \"^6.3.1\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-compilation-targets/node_modules/lru-cache\": {
      \"version\": \"5.1.1\",
      \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-5.1.1.tgz\",
      \"integrity\": \"sha512-KpNARQA3Iwv+jTA0utUVVbrh+Jlrr1Fv0e56GGzAFOXN7dk/FviaDW8LHmK52DlcH4WP2n6gI8vN1aesBFgo9w==\",
      \"dev\": true,
      \"dependencies\": {
        \"yallist\": \"^3.0.2\"
      }
    },
    \"node_modules/@babel/helper-compilation-targets/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/@babel/helper-compilation-targets/node_modules/yallist\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-3.1.1.tgz\",
      \"integrity\": \"sha512-a4UGQaWPH59mOXUYnAG2ewncQS4i4F43Tv3JoAM+s2VDAmS9NsK8GpDMLrCHPksFT7h3K6TOoUNn2pb7RoXx4g==\",
      \"dev\": true
    },
    \"node_modules/@babel/helper-create-class-features-plugin\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-create-class-features-plugin/-/helper-create-class-features-plugin-7.22.15.tgz\",
      \"integrity\": \"sha512-jKkwA59IXcvSaiK2UN45kKwSC9o+KuoXsBDvHvU/7BecYIp8GQ2UwrVvFgJASUT+hBnwJx6MhvMCuMzwZZ7jlg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/helper-member-expression-to-functions\": \"^7.22.15\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.9\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"semver\": \"^6.3.1\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/helper-create-class-features-plugin/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/@babel/helper-create-regexp-features-plugin\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-create-regexp-features-plugin/-/helper-create-regexp-features-plugin-7.22.15.tgz\",
      \"integrity\": \"sha512-29FkPLFjn4TPEa3RE7GpW+qbE8tlsu3jntNYNfcGsc49LphF1PQIiD+vMZ1z1xVOKt+93khA9tc2JBs3kBjA7w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"regexpu-core\": \"^5.3.1\",
        \"semver\": \"^6.3.1\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/helper-create-regexp-features-plugin/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/@babel/helper-define-polyfill-provider\": {
      \"version\": \"0.4.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-define-polyfill-provider/-/helper-define-polyfill-provider-0.4.3.tgz\",
      \"integrity\": \"sha512-WBrLmuPP47n7PNwsZ57pqam6G/RGo1vw/87b0Blc53tZNGZ4x7YvZ6HgQe2vo1W/FR20OgjeZuGXzudPiXHFug==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-compilation-targets\": \"^7.22.6\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"debug\": \"^4.1.1\",
        \"lodash.debounce\": \"^4.0.8\",
        \"resolve\": \"^1.14.2\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.4.0 || ^8.0.0-0 <8.0.0\"
      }
    },
    \"node_modules/@babel/helper-define-polyfill-provider/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/@babel/helper-define-polyfill-provider/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/@babel/helper-environment-visitor\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-environment-visitor/-/helper-environment-visitor-7.22.20.tgz\",
      \"integrity\": \"sha512-zfedSIzFhat/gFhWfHtgWvlec0nqB9YEIVrpuwjruLlXfUSnA8cJB0miHKwqDnQ7d32aKo2xt88/xZptwxbfhA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-function-name\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-function-name/-/helper-function-name-7.23.0.tgz\",
      \"integrity\": \"sha512-OErEqsrxjZTJciZ4Oo+eoZqeW9UIiOcuYKRJA4ZAgV9myA+pOXhhmpfNCKjEH/auVfEYVFJ6y1Tc4r0eIApqiw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/template\": \"^7.22.15\",
        \"@babel/types\": \"^7.23.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-hoist-variables\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-hoist-variables/-/helper-hoist-variables-7.22.5.tgz\",
      \"integrity\": \"sha512-wGjk9QZVzvknA6yKIUURb8zY3grXCcOZt+/7Wcy8O2uctxhplmUPkOdlgoNhmdVee2c92JXbf1xpMtVNbfoxRw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-member-expression-to-functions\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-member-expression-to-functions/-/helper-member-expression-to-functions-7.23.0.tgz\",
      \"integrity\": \"sha512-6gfrPwh7OuT6gZyJZvd6WbTfrqAo7vm4xCzAXOusKqq/vWdKXphTpj5klHKNmRUU6/QRGlBsyU9mAIPaWHlqJA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.23.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-module-imports\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-imports/-/helper-module-imports-7.22.15.tgz\",
      \"integrity\": \"sha512-0pYVBnDKZO2fnSPCrgM/6WMc7eS20Fbok+0r88fp+YtWVLZrp4CkafFGIp+W0VKw4a22sgebPT99y+FDNMdP4w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.15\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-module-transforms\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-transforms/-/helper-module-transforms-7.23.3.tgz\",
      \"integrity\": \"sha512-7bBs4ED9OmswdfDzpz4MpWgSrV7FXlc3zIagvLFjS5H+Mk7Snr21vQ6QwrsoCGMfNC4e4LQPdoULEt4ykz0SRQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-module-imports\": \"^7.22.15\",
        \"@babel/helper-simple-access\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/helper-optimise-call-expression\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-optimise-call-expression/-/helper-optimise-call-expression-7.22.5.tgz\",
      \"integrity\": \"sha512-HBwaojN0xFRx4yIvpwGqxiV2tUfl7401jlok564NgB9EHS1y6QT17FmKWm4ztqjeVdXLuC4fSvHc5ePpQjoTbw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-plugin-utils\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-plugin-utils/-/helper-plugin-utils-7.22.5.tgz\",
      \"integrity\": \"sha512-uLls06UVKgFG9QD4OeFYLEGteMIAa5kpTPcFL28yuCIIzsf6ZyKZMllKVOCZFhiZ5ptnwX4mtKdWCBE/uT4amg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-remap-async-to-generator\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-remap-async-to-generator/-/helper-remap-async-to-generator-7.22.20.tgz\",
      \"integrity\": \"sha512-pBGyV4uBqOns+0UvhsTO8qgl8hO89PmiDYv+/COyp1aeMcmfrfruz+/nCMFiYyFF/Knn0yfrC85ZzNFjembFTw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-wrap-function\": \"^7.22.20\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/helper-replace-supers\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-replace-supers/-/helper-replace-supers-7.22.20.tgz\",
      \"integrity\": \"sha512-qsW0In3dbwQUbK8kejJ4R7IHVGwHJlV6lpG6UA7a9hSa2YEiAib+N1T2kr6PEeUT+Fl7najmSOS6SmAwCHK6Tw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-member-expression-to-functions\": \"^7.22.15\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/helper-simple-access\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-simple-access/-/helper-simple-access-7.22.5.tgz\",
      \"integrity\": \"sha512-n0H99E/K+Bika3++WNL17POvo4rKWZ7lZEp1Q+fStVbUi8nxPQEBOlTmCOxW/0JsS56SKKQ+ojAe2pHKJHN35w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-skip-transparent-expression-wrappers\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-skip-transparent-expression-wrappers/-/helper-skip-transparent-expression-wrappers-7.22.5.tgz\",
      \"integrity\": \"sha512-tK14r66JZKiC43p8Ki33yLBVJKlQDFoA8GYN67lWCDCqoL6EMMSuM9b+Iff2jHaM/RRFYl7K+iiru7hbRqNx8Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-split-export-declaration\": {
      \"version\": \"7.22.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-split-export-declaration/-/helper-split-export-declaration-7.22.6.tgz\",
      \"integrity\": \"sha512-AsUnxuLhRYsisFiaJwvp1QF+I3KjD5FOxut14q/GzovUe6orHLesW2C7d754kRm53h5gqrz6sFl6sxc4BVtE/g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-string-parser\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-string-parser/-/helper-string-parser-7.22.5.tgz\",
      \"integrity\": \"sha512-mM4COjgZox8U+JcXQwPijIZLElkgEpO5rsERVDJTc2qfCDfERyob6k5WegS14SX18IIjv+XD+GrqNumY5JRCDw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-validator-identifier\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.20.tgz\",
      \"integrity\": \"sha512-Y4OZ+ytlatR8AI+8KZfKuL5urKp7qey08ha31L8b3BwewJAoJamTzyvxPR/5D+KkdJCGPq/+8TukHBlY10FX9A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-validator-option\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-option/-/helper-validator-option-7.22.15.tgz\",
      \"integrity\": \"sha512-bMn7RmyFjY/mdECUbgn9eoSY4vqvacUnS9i9vGAGttgFWesO6B4CYWA7XlpbWgBt71iv/hfbPlynohStqnu5hA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helper-wrap-function\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-wrap-function/-/helper-wrap-function-7.22.20.tgz\",
      \"integrity\": \"sha512-pms/UwkOpnQe/PDAEdV/d7dVCoBbB+R4FvYoHGZz+4VPcg7RtYy2KP7S2lbuWM6FCSgob5wshfGESbC/hzNXZw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/template\": \"^7.22.15\",
        \"@babel/types\": \"^7.22.19\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/helpers\": {
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helpers/-/helpers-7.23.2.tgz\",
      \"integrity\": \"sha512-lzchcp8SjTSVe/fPmLwtWVBFC7+Tbn8LGHDVfDp9JGxpAY5opSaEFgt8UQvrnECWOTdji2mOWMz1rOhkHscmGQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/template\": \"^7.22.15\",
        \"@babel/traverse\": \"^7.23.2\",
        \"@babel/types\": \"^7.23.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/highlight\": {
      \"version\": \"7.22.13\",
      \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.22.13.tgz\",
      \"integrity\": \"sha512-C/BaXcnnvBCmHTpz/VGZ8jgtE2aYlW4hxDhseJAWZb7gqGM/qtCK6iZUb0TyKFf7BOUsBH7Q7fkRsDRhg1XklQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-validator-identifier\": \"^7.22.5\",
        \"chalk\": \"^2.4.2\",
        \"js-tokens\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/node\": {
      \"version\": \"7.22.19\",
      \"resolved\": \"https://registry.npmjs.org/@babel/node/-/node-7.22.19.tgz\",
      \"integrity\": \"sha512-VsKSO9aEHdO16NdtqkJfrXZ9Sxlna1BVnBbToWr1KGdI3cyIk6KqOoa8mWvpK280lJDOwJqxvnl994KmLhq1Yw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/register\": \"^7.22.15\",
        \"commander\": \"^4.0.1\",
        \"core-js\": \"^3.30.2\",
        \"node-environment-flags\": \"^1.0.5\",
        \"regenerator-runtime\": \"^0.14.0\",
        \"v8flags\": \"^3.1.1\"
      },
      \"bin\": {
        \"babel-node\": \"bin/babel-node.js\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/parser\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/parser/-/parser-7.23.3.tgz\",
      \"integrity\": \"sha512-uVsWNvlVsIninV2prNz/3lHCb+5CJ+e+IUBfbjToAHODtfGYLfCFuY4AU7TskI+dAKk+njsPiBjq1gKTvZOBaw==\",
      \"dev\": true,
      \"bin\": {
        \"parser\": \"bin/babel-parser.js\"
      },
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression/-/plugin-bugfix-safari-id-destructuring-collision-in-function-expression-7.23.3.tgz\",
      \"integrity\": \"sha512-iRkKcCqb7iGnq9+3G6rZ+Ciz5VywC4XNRHe57lKM+jOeYAoR0lVqdeeDRfh0tQcTfw/+vBhHn926FmQhLtlFLQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining/-/plugin-bugfix-v8-spread-parameters-in-optional-chaining-7.23.3.tgz\",
      \"integrity\": \"sha512-WwlxbfMNdVEpQjZmK5mhm7oSwD3dS6eU+Iwsi4Knl9wAletWem7kaRsGOG+8UEbRyqxY4SS5zvtfXwX+jMxUwQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/plugin-transform-optional-chaining\": \"^7.23.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.13.0\"
      }
    },
    \"node_modules/@babel/plugin-bugfix-v8-static-class-fields-redefine-readonly\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-v8-static-class-fields-redefine-readonly/-/plugin-bugfix-v8-static-class-fields-redefine-readonly-7.23.3.tgz\",
      \"integrity\": \"sha512-XaJak1qcityzrX0/IU5nKHb34VaibwP3saKqG6a/tppelgllOH13LUann4ZCIBcVOeE6H18K4Vx9QKkVww3z/w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/plugin-proposal-private-property-in-object\": {
      \"version\": \"7.21.0-placeholder-for-preset-env.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-proposal-private-property-in-object/-/plugin-proposal-private-property-in-object-7.21.0-placeholder-for-preset-env.2.tgz\",
      \"integrity\": \"sha512-SOSkfJDddaM7mak6cPEpswyTRnuRltl429hMraQEglW+OkovnCzsiszTmsrlY//qLFjCpQDFRvjdm2wA5pPm9w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-async-generators\": {
      \"version\": \"7.8.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-async-generators/-/plugin-syntax-async-generators-7.8.4.tgz\",
      \"integrity\": \"sha512-tycmZxkGfZaxhMRbXlPXuVFpdWlXpir2W4AMhSJgRKzk/eDlIXOhb2LHWoLpDF7TEHylV5zNhykX6KAgHJmTNw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-class-properties\": {
      \"version\": \"7.12.13\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-class-properties/-/plugin-syntax-class-properties-7.12.13.tgz\",
      \"integrity\": \"sha512-fm4idjKla0YahUNgFNLCB0qySdsoPiZP3iQE3rky0mBUtMZ23yDJ9SJdg6dXTSDnulOVqiF3Hgr9nbXvXTQZYA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.12.13\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-class-static-block\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-class-static-block/-/plugin-syntax-class-static-block-7.14.5.tgz\",
      \"integrity\": \"sha512-b+YyPmr6ldyNnM6sqYeMWE+bgJcJpO6yS4QD7ymxgH34GBPNDM/THBh8iunyvKIZztiwLH4CJZ0RxTk9emgpjw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.14.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-dynamic-import\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-dynamic-import/-/plugin-syntax-dynamic-import-7.8.3.tgz\",
      \"integrity\": \"sha512-5gdGbFon+PszYzqs83S3E5mpi7/y/8M9eC90MRTZfduQOYW76ig6SOSPNe41IG5LoP3FGBn2N0RjVDSQiS94kQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-export-namespace-from\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-export-namespace-from/-/plugin-syntax-export-namespace-from-7.8.3.tgz\",
      \"integrity\": \"sha512-MXf5laXo6c1IbEbegDmzGPwGNTsHZmEy6QGznu5Sh2UCWvueywb2ee+CCE4zQiZstxU9BMoQO9i6zUFSY0Kj0Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.3\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-import-assertions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-assertions/-/plugin-syntax-import-assertions-7.23.3.tgz\",
      \"integrity\": \"sha512-lPgDSU+SJLK3xmFDTV2ZRQAiM7UuUjGidwBywFavObCiZc1BeAAcMtHJKUya92hPHO+at63JJPLygilZard8jw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-import-attributes\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-attributes/-/plugin-syntax-import-attributes-7.23.3.tgz\",
      \"integrity\": \"sha512-pawnE0P9g10xgoP7yKr6CK63K2FMsTE+FZidZO/1PwRdzmAPVs+HS1mAURUsgaoxammTJvULUdIkEK0gOcU2tA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-import-meta\": {
      \"version\": \"7.10.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-meta/-/plugin-syntax-import-meta-7.10.4.tgz\",
      \"integrity\": \"sha512-Yqfm+XDx0+Prh3VSeEQCPU81yC+JWZ2pDPFSS4ZdpfZhp4MkFMaDC1UqseovEKwSUpnIL7+vK+Clp7bfh0iD7g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.10.4\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-json-strings\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-json-strings/-/plugin-syntax-json-strings-7.8.3.tgz\",
      \"integrity\": \"sha512-lY6kdGpWHvjoe2vk4WrAapEuBR69EMxZl+RoGRhrFGNYVK8mOPAW8VfbT/ZgrFbXlDNiiaxQnAtgVCZ6jv30EA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-logical-assignment-operators\": {
      \"version\": \"7.10.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-logical-assignment-operators/-/plugin-syntax-logical-assignment-operators-7.10.4.tgz\",
      \"integrity\": \"sha512-d8waShlpFDinQ5MtvGU9xDAOzKH47+FFoney2baFIoMr952hKOLp1HR7VszoZvOsV/4+RRszNY7D17ba0te0ig==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.10.4\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-nullish-coalescing-operator\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-nullish-coalescing-operator/-/plugin-syntax-nullish-coalescing-operator-7.8.3.tgz\",
      \"integrity\": \"sha512-aSff4zPII1u2QD7y+F8oDsz19ew4IGEJg9SVW+bqwpwtfFleiQDMdzA/R+UlWDzfnHFCxxleFT0PMIrR36XLNQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-numeric-separator\": {
      \"version\": \"7.10.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-numeric-separator/-/plugin-syntax-numeric-separator-7.10.4.tgz\",
      \"integrity\": \"sha512-9H6YdfkcK/uOnY/K7/aA2xpzaAgkQn37yzWUMRK7OaPOqOpGS1+n0H5hxT9AUw9EsSjPW8SVyMJwYRtWs3X3ug==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.10.4\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-object-rest-spread\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-object-rest-spread/-/plugin-syntax-object-rest-spread-7.8.3.tgz\",
      \"integrity\": \"sha512-XoqMijGZb9y3y2XskN+P1wUGiVwWZ5JmoDRwx5+3GmEplNyVM2s2Dg8ILFQm8rWM48orGy5YpI5Bl8U1y7ydlA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-optional-catch-binding\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-optional-catch-binding/-/plugin-syntax-optional-catch-binding-7.8.3.tgz\",
      \"integrity\": \"sha512-6VPD0Pc1lpTqw0aKoeRTMiB+kWhAoT24PA+ksWSBrFtl5SIRVpZlwN3NNPQjehA2E/91FV3RjLWoVTglWcSV3Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-optional-chaining\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-optional-chaining/-/plugin-syntax-optional-chaining-7.8.3.tgz\",
      \"integrity\": \"sha512-KoK9ErH1MBlCPxV0VANkXW2/dw4vlbGDrFgz8bmUsBGYkFRcbRwMh6cIJubdPrkxRwuGdtCk0v/wPTKbQgBjkg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-private-property-in-object\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-private-property-in-object/-/plugin-syntax-private-property-in-object-7.14.5.tgz\",
      \"integrity\": \"sha512-0wVnp9dxJ72ZUJDV27ZfbSj6iHLoytYZmh3rFcxNnvsJF3ktkzLDZPy/mA17HGsaQT3/DQsWYX1f1QGWkCoVUg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.14.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-top-level-await\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-top-level-await/-/plugin-syntax-top-level-await-7.14.5.tgz\",
      \"integrity\": \"sha512-hx++upLv5U1rgYfwe1xBQUhRmU41NEvpUvrp8jkrSCdvGSnM5/qdRMtylJ6PG5OFkBaHkbTAKTnd3/YyESRHFw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.14.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-syntax-unicode-sets-regex\": {
      \"version\": \"7.18.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-unicode-sets-regex/-/plugin-syntax-unicode-sets-regex-7.18.6.tgz\",
      \"integrity\": \"sha512-727YkEAPwSIQTv5im8QHz3upqp92JTWhidIC81Tdx4VJYIte/VndKf1qKrfnnhPLiPghStWfvC/iFaMCQu7Nqg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.18.6\",
        \"@babel/helper-plugin-utils\": \"^7.18.6\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/plugin-transform-arrow-functions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-arrow-functions/-/plugin-transform-arrow-functions-7.23.3.tgz\",
      \"integrity\": \"sha512-NzQcQrzaQPkaEwoTm4Mhyl8jI1huEL/WWIEvudjTCMJ9aBZNpsJbMASx7EQECtQQPS/DcnFpo0FIh3LvEO9cxQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-async-generator-functions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-async-generator-functions/-/plugin-transform-async-generator-functions-7.23.3.tgz\",
      \"integrity\": \"sha512-59GsVNavGxAXCDDbakWSMJhajASb4kBCqDjqJsv+p5nKdbz7istmZ3HrX3L2LuiI80+zsOADCvooqQH3qGCucQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-remap-async-to-generator\": \"^7.22.20\",
        \"@babel/plugin-syntax-async-generators\": \"^7.8.4\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-async-to-generator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-async-to-generator/-/plugin-transform-async-to-generator-7.23.3.tgz\",
      \"integrity\": \"sha512-A7LFsKi4U4fomjqXJlZg/u0ft/n8/7n7lpffUP/ZULx/DtV9SGlNKZolHH6PE8Xl1ngCc0M11OaeZptXVkfKSw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-module-imports\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-remap-async-to-generator\": \"^7.22.20\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-block-scoped-functions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-block-scoped-functions/-/plugin-transform-block-scoped-functions-7.23.3.tgz\",
      \"integrity\": \"sha512-vI+0sIaPIO6CNuM9Kk5VmXcMVRiOpDh7w2zZt9GXzmE/9KD70CUEVhvPR/etAeNK/FAEkhxQtXOzVF3EuRL41A==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-block-scoping\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-block-scoping/-/plugin-transform-block-scoping-7.23.3.tgz\",
      \"integrity\": \"sha512-QPZxHrThbQia7UdvfpaRRlq/J9ciz1J4go0k+lPBXbgaNeY7IQrBj/9ceWjvMMI07/ZBzHl/F0R/2K0qH7jCVw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-class-properties\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-class-properties/-/plugin-transform-class-properties-7.23.3.tgz\",
      \"integrity\": \"sha512-uM+AN8yCIjDPccsKGlw271xjJtGii+xQIF/uMPS8H15L12jZTsLfF4o5vNO7d/oUguOyfdikHGc/yi9ge4SGIg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-class-static-block\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-class-static-block/-/plugin-transform-class-static-block-7.23.3.tgz\",
      \"integrity\": \"sha512-PENDVxdr7ZxKPyi5Ffc0LjXdnJyrJxyqF5T5YjlVg4a0VFfQHW0r8iAtRiDXkfHlu1wwcvdtnndGYIeJLSuRMQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-class-static-block\": \"^7.14.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.12.0\"
      }
    },
    \"node_modules/@babel/plugin-transform-classes\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-classes/-/plugin-transform-classes-7.23.3.tgz\",
      \"integrity\": \"sha512-FGEQmugvAEu2QtgtU0uTASXevfLMFfBeVCIIdcQhn/uBQsMTjBajdnAtanQlOcuihWh10PZ7+HWvc7NtBwP74w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.20\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"globals\": \"^11.1.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-computed-properties\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-computed-properties/-/plugin-transform-computed-properties-7.23.3.tgz\",
      \"integrity\": \"sha512-dTj83UVTLw/+nbiHqQSFdwO9CbTtwq1DsDqm3CUEtDrZNET5rT5E6bIdTlOftDTDLMYxvxHNEYO4B9SLl8SLZw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/template\": \"^7.22.15\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-destructuring\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-destructuring/-/plugin-transform-destructuring-7.23.3.tgz\",
      \"integrity\": \"sha512-n225npDqjDIr967cMScVKHXJs7rout1q+tt50inyBCPkyZ8KxeI6d+GIbSBTT/w/9WdlWDOej3V9HE5Lgk57gw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-dotall-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-dotall-regex/-/plugin-transform-dotall-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-vgnFYDHAKzFaTVp+mneDsIEbnJ2Np/9ng9iviHw3P/KVcgONxpNULEW/51Z/BaFojG2GI2GwwXck5uV1+1NOYQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-duplicate-keys\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-duplicate-keys/-/plugin-transform-duplicate-keys-7.23.3.tgz\",
      \"integrity\": \"sha512-RrqQ+BQmU3Oyav3J+7/myfvRCq7Tbz+kKLLshUmMwNlDHExbGL7ARhajvoBJEvc+fCguPPu887N+3RRXBVKZUA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-dynamic-import\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-dynamic-import/-/plugin-transform-dynamic-import-7.23.3.tgz\",
      \"integrity\": \"sha512-vTG+cTGxPFou12Rj7ll+eD5yWeNl5/8xvQvF08y5Gv3v4mZQoyFf8/n9zg4q5vvCWt5jmgymfzMAldO7orBn7A==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-dynamic-import\": \"^7.8.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-exponentiation-operator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-exponentiation-operator/-/plugin-transform-exponentiation-operator-7.23.3.tgz\",
      \"integrity\": \"sha512-5fhCsl1odX96u7ILKHBj4/Y8vipoqwsJMh4csSA8qFfxrZDEA4Ssku2DyNvMJSmZNOEBT750LfFPbtrnTP90BQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-builder-binary-assignment-operator-visitor\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-export-namespace-from\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-export-namespace-from/-/plugin-transform-export-namespace-from-7.23.3.tgz\",
      \"integrity\": \"sha512-yCLhW34wpJWRdTxxWtFZASJisihrfyMOTOQexhVzA78jlU+dH7Dw+zQgcPepQ5F3C6bAIiblZZ+qBggJdHiBAg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-export-namespace-from\": \"^7.8.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-for-of\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-for-of/-/plugin-transform-for-of-7.23.3.tgz\",
      \"integrity\": \"sha512-X8jSm8X1CMwxmK878qsUGJRmbysKNbdpTv/O1/v0LuY/ZkZrng5WYiekYSdg9m09OTmDDUWeEDsTE+17WYbAZw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-function-name\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-function-name/-/plugin-transform-function-name-7.23.3.tgz\",
      \"integrity\": \"sha512-I1QXp1LxIvt8yLaib49dRW5Okt7Q4oaxao6tFVKS/anCdEOMtYwWVKoiOA1p34GOWIZjUK0E+zCp7+l1pfQyiw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-json-strings\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-json-strings/-/plugin-transform-json-strings-7.23.3.tgz\",
      \"integrity\": \"sha512-H9Ej2OiISIZowZHaBwF0tsJOih1PftXJtE8EWqlEIwpc7LMTGq0rPOrywKLQ4nefzx8/HMR0D3JGXoMHYvhi0A==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-json-strings\": \"^7.8.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-literals/-/plugin-transform-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-wZ0PIXRxnwZvl9AYpqNUxpZ5BiTGrYt7kueGQ+N5FiQ7RCOD4cm8iShd6S6ggfVIWaJf2EMk8eRzAh52RfP4rQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-logical-assignment-operators\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-logical-assignment-operators/-/plugin-transform-logical-assignment-operators-7.23.3.tgz\",
      \"integrity\": \"sha512-+pD5ZbxofyOygEp+zZAfujY2ShNCXRpDRIPOiBmTO693hhyOEteZgl876Xs9SAHPQpcV0vz8LvA/T+w8AzyX8A==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-logical-assignment-operators\": \"^7.10.4\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-member-expression-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-member-expression-literals/-/plugin-transform-member-expression-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-sC3LdDBDi5x96LA+Ytekz2ZPk8i/Ck+DEuDbRAll5rknJ5XRTSaPKEYwomLcs1AA8wg9b3KjIQRsnApj+q51Ag==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-modules-amd\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-amd/-/plugin-transform-modules-amd-7.23.3.tgz\",
      \"integrity\": \"sha512-vJYQGxeKM4t8hYCKVBlZX/gtIY2I7mRGFNcm85sgXGMTBcoV3QdVtdpbcWEbzbfUIUZKwvgFT82mRvaQIebZzw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-modules-commonjs\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-commonjs/-/plugin-transform-modules-commonjs-7.23.3.tgz\",
      \"integrity\": \"sha512-aVS0F65LKsdNOtcz6FRCpE4OgsP2OFnW46qNxNIX9h3wuzaNcSQsJysuMwqSibC98HPrf2vCgtxKNwS0DAlgcA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-simple-access\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-modules-systemjs\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-systemjs/-/plugin-transform-modules-systemjs-7.23.3.tgz\",
      \"integrity\": \"sha512-ZxyKGTkF9xT9YJuKQRo19ewf3pXpopuYQd8cDXqNzc3mUNbOME0RKMoZxviQk74hwzfQsEe66dE92MaZbdHKNQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-modules-umd\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-umd/-/plugin-transform-modules-umd-7.23.3.tgz\",
      \"integrity\": \"sha512-zHsy9iXX2nIsCBFPud3jKn1IRPWg3Ing1qOZgeKV39m1ZgIdpJqvlWVeiHBZC6ITRG0MfskhYe9cLgntfSFPIg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-named-capturing-groups-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-named-capturing-groups-regex/-/plugin-transform-named-capturing-groups-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-YgLLKmS3aUBhHaxp5hi1WJTgOUb/NCuDHzGT9z9WTt3YG+CPRhJs6nprbStx6DnWM4dh6gt7SU3sZodbZ08adQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/plugin-transform-new-target\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-new-target/-/plugin-transform-new-target-7.23.3.tgz\",
      \"integrity\": \"sha512-YJ3xKqtJMAT5/TIZnpAR3I+K+WaDowYbN3xyxI8zxx/Gsypwf9B9h0VB+1Nh6ACAAPRS5NSRje0uVv5i79HYGQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-nullish-coalescing-operator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-nullish-coalescing-operator/-/plugin-transform-nullish-coalescing-operator-7.23.3.tgz\",
      \"integrity\": \"sha512-xzg24Lnld4DYIdysyf07zJ1P+iIfJpxtVFOzX4g+bsJ3Ng5Le7rXx9KwqKzuyaUeRnt+I1EICwQITqc0E2PmpA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-nullish-coalescing-operator\": \"^7.8.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-numeric-separator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-numeric-separator/-/plugin-transform-numeric-separator-7.23.3.tgz\",
      \"integrity\": \"sha512-s9GO7fIBi/BLsZ0v3Rftr6Oe4t0ctJ8h4CCXfPoEJwmvAPMyNrfkOOJzm6b9PX9YXcCJWWQd/sBF/N26eBiMVw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-numeric-separator\": \"^7.10.4\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-object-rest-spread\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-object-rest-spread/-/plugin-transform-object-rest-spread-7.23.3.tgz\",
      \"integrity\": \"sha512-VxHt0ANkDmu8TANdE9Kc0rndo/ccsmfe2Cx2y5sI4hu3AukHQ5wAu4cM7j3ba8B9548ijVyclBU+nuDQftZsog==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/compat-data\": \"^7.23.3\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-object-rest-spread\": \"^7.8.3\",
        \"@babel/plugin-transform-parameters\": \"^7.23.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-object-super\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-object-super/-/plugin-transform-object-super-7.23.3.tgz\",
      \"integrity\": \"sha512-BwQ8q0x2JG+3lxCVFohg+KbQM7plfpBwThdW9A6TMtWwLsbDA01Ek2Zb/AgDN39BiZsExm4qrXxjk+P1/fzGrA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.20\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-optional-catch-binding\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-optional-catch-binding/-/plugin-transform-optional-catch-binding-7.23.3.tgz\",
      \"integrity\": \"sha512-LxYSb0iLjUamfm7f1D7GpiS4j0UAC8AOiehnsGAP8BEsIX8EOi3qV6bbctw8M7ZvLtcoZfZX5Z7rN9PlWk0m5A==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-optional-catch-binding\": \"^7.8.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-optional-chaining\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-optional-chaining/-/plugin-transform-optional-chaining-7.23.3.tgz\",
      \"integrity\": \"sha512-zvL8vIfIUgMccIAK1lxjvNv572JHFJIKb4MWBz5OGdBQA0fB0Xluix5rmOby48exiJc987neOmP/m9Fnpkz3Tg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/plugin-syntax-optional-chaining\": \"^7.8.3\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-parameters\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-parameters/-/plugin-transform-parameters-7.23.3.tgz\",
      \"integrity\": \"sha512-09lMt6UsUb3/34BbECKVbVwrT9bO6lILWln237z7sLaWnMsTi7Yc9fhX5DLpkJzAGfaReXI22wP41SZmnAA3Vw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-private-methods\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-private-methods/-/plugin-transform-private-methods-7.23.3.tgz\",
      \"integrity\": \"sha512-UzqRcRtWsDMTLrRWFvUBDwmw06tCQH9Rl1uAjfh6ijMSmGYQ+fpdB+cnqRC8EMh5tuuxSv0/TejGL+7vyj+50g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-private-property-in-object\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-private-property-in-object/-/plugin-transform-private-property-in-object-7.23.3.tgz\",
      \"integrity\": \"sha512-a5m2oLNFyje2e/rGKjVfAELTVI5mbA0FeZpBnkOWWV7eSmKQ+T/XW0Vf+29ScLzSxX+rnsarvU0oie/4m6hkxA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-private-property-in-object\": \"^7.14.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-property-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-property-literals/-/plugin-transform-property-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-jR3Jn3y7cZp4oEWPFAlRsSWjxKe4PZILGBSd4nis1TsC5qeSpb+nrtihJuDhNI7QHiVbUaiXa0X2RZY3/TI6Nw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-regenerator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-regenerator/-/plugin-transform-regenerator-7.23.3.tgz\",
      \"integrity\": \"sha512-KP+75h0KghBMcVpuKisx3XTu9Ncut8Q8TuvGO4IhY+9D5DFEckQefOuIsB/gQ2tG71lCke4NMrtIPS8pOj18BQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"regenerator-transform\": \"^0.15.2\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-reserved-words\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-reserved-words/-/plugin-transform-reserved-words-7.23.3.tgz\",
      \"integrity\": \"sha512-QnNTazY54YqgGxwIexMZva9gqbPa15t/x9VS+0fsEFWplwVpXYZivtgl43Z1vMpc1bdPP2PP8siFeVcnFvA3Cg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-shorthand-properties\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-shorthand-properties/-/plugin-transform-shorthand-properties-7.23.3.tgz\",
      \"integrity\": \"sha512-ED2fgqZLmexWiN+YNFX26fx4gh5qHDhn1O2gvEhreLW2iI63Sqm4llRLCXALKrCnbN4Jy0VcMQZl/SAzqug/jg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-spread\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-spread/-/plugin-transform-spread-7.23.3.tgz\",
      \"integrity\": \"sha512-VvfVYlrlBVu+77xVTOAoxQ6mZbnIq5FM0aGBSFEcIh03qHf+zNqA4DC/3XMUozTg7bZV3e3mZQ0i13VB6v5yUg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-sticky-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-sticky-regex/-/plugin-transform-sticky-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-HZOyN9g+rtvnOU3Yh7kSxXrKbzgrm5X4GncPY1QOquu7epga5MxKHVpYu2hvQnry/H+JjckSYRb93iNfsioAGg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-template-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-template-literals/-/plugin-transform-template-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-Flok06AYNp7GV2oJPZZcP9vZdszev6vPBkHLwxwSpaIqx75wn6mUd3UFWsSsA0l8nXAKkyCmL/sR02m8RYGeHg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-typeof-symbol\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-typeof-symbol/-/plugin-transform-typeof-symbol-7.23.3.tgz\",
      \"integrity\": \"sha512-4t15ViVnaFdrPC74be1gXBSMzXk3B4Us9lP7uLRQHTFpV5Dvt33pn+2MyyNxmN3VTTm3oTrZVMUmuw3oBnQ2oQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-unicode-escapes\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-escapes/-/plugin-transform-unicode-escapes-7.23.3.tgz\",
      \"integrity\": \"sha512-OMCUx/bU6ChE3r4+ZdylEqAjaQgHAgipgW8nsCfu5pGqDcFytVd91AwRvUJSBZDz0exPGgnjoqhgRYLRjFZc9Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-unicode-property-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-property-regex/-/plugin-transform-unicode-property-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-KcLIm+pDZkWZQAFJ9pdfmh89EwVfmNovFBcXko8szpBeF8z68kWIPeKlmSOkT9BXJxs2C0uk+5LxoxIv62MROA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-unicode-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-regex/-/plugin-transform-unicode-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-wMHpNA4x2cIA32b/ci3AfwNgheiva2W0WUKWTK7vBHBhDKfPsc5cFGNWm69WBqpwd86u1qwZ9PWevKqm1A3yAw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/plugin-transform-unicode-sets-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-sets-regex/-/plugin-transform-unicode-sets-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-W7lliA/v9bNR83Qc3q1ip9CQMZ09CcHDbHfbLRDNuAhn1Mvkr1ZNF7hPmztMQvtTGVLJ9m8IZqWsTkXOml8dbw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0\"
      }
    },
    \"node_modules/@babel/preset-env\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/preset-env/-/preset-env-7.23.3.tgz\",
      \"integrity\": \"sha512-ovzGc2uuyNfNAs/jyjIGxS8arOHS5FENZaNn4rtE7UdKMMkqHCvboHfcuhWLZNX5cB44QfcGNWjaevxMzzMf+Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/compat-data\": \"^7.23.3\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-validator-option\": \"^7.22.15\",
        \"@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression\": \"^7.23.3\",
        \"@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining\": \"^7.23.3\",
        \"@babel/plugin-bugfix-v8-static-class-fields-redefine-readonly\": \"^7.23.3\",
        \"@babel/plugin-proposal-private-property-in-object\": \"7.21.0-placeholder-for-preset-env.2\",
        \"@babel/plugin-syntax-async-generators\": \"^7.8.4\",
        \"@babel/plugin-syntax-class-properties\": \"^7.12.13\",
        \"@babel/plugin-syntax-class-static-block\": \"^7.14.5\",
        \"@babel/plugin-syntax-dynamic-import\": \"^7.8.3\",
        \"@babel/plugin-syntax-export-namespace-from\": \"^7.8.3\",
        \"@babel/plugin-syntax-import-assertions\": \"^7.23.3\",
        \"@babel/plugin-syntax-import-attributes\": \"^7.23.3\",
        \"@babel/plugin-syntax-import-meta\": \"^7.10.4\",
        \"@babel/plugin-syntax-json-strings\": \"^7.8.3\",
        \"@babel/plugin-syntax-logical-assignment-operators\": \"^7.10.4\",
        \"@babel/plugin-syntax-nullish-coalescing-operator\": \"^7.8.3\",
        \"@babel/plugin-syntax-numeric-separator\": \"^7.10.4\",
        \"@babel/plugin-syntax-object-rest-spread\": \"^7.8.3\",
        \"@babel/plugin-syntax-optional-catch-binding\": \"^7.8.3\",
        \"@babel/plugin-syntax-optional-chaining\": \"^7.8.3\",
        \"@babel/plugin-syntax-private-property-in-object\": \"^7.14.5\",
        \"@babel/plugin-syntax-top-level-await\": \"^7.14.5\",
        \"@babel/plugin-syntax-unicode-sets-regex\": \"^7.18.6\",
        \"@babel/plugin-transform-arrow-functions\": \"^7.23.3\",
        \"@babel/plugin-transform-async-generator-functions\": \"^7.23.3\",
        \"@babel/plugin-transform-async-to-generator\": \"^7.23.3\",
        \"@babel/plugin-transform-block-scoped-functions\": \"^7.23.3\",
        \"@babel/plugin-transform-block-scoping\": \"^7.23.3\",
        \"@babel/plugin-transform-class-properties\": \"^7.23.3\",
        \"@babel/plugin-transform-class-static-block\": \"^7.23.3\",
        \"@babel/plugin-transform-classes\": \"^7.23.3\",
        \"@babel/plugin-transform-computed-properties\": \"^7.23.3\",
        \"@babel/plugin-transform-destructuring\": \"^7.23.3\",
        \"@babel/plugin-transform-dotall-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-duplicate-keys\": \"^7.23.3\",
        \"@babel/plugin-transform-dynamic-import\": \"^7.23.3\",
        \"@babel/plugin-transform-exponentiation-operator\": \"^7.23.3\",
        \"@babel/plugin-transform-export-namespace-from\": \"^7.23.3\",
        \"@babel/plugin-transform-for-of\": \"^7.23.3\",
        \"@babel/plugin-transform-function-name\": \"^7.23.3\",
        \"@babel/plugin-transform-json-strings\": \"^7.23.3\",
        \"@babel/plugin-transform-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-logical-assignment-operators\": \"^7.23.3\",
        \"@babel/plugin-transform-member-expression-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-amd\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-commonjs\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-systemjs\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-umd\": \"^7.23.3\",
        \"@babel/plugin-transform-named-capturing-groups-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-new-target\": \"^7.23.3\",
        \"@babel/plugin-transform-nullish-coalescing-operator\": \"^7.23.3\",
        \"@babel/plugin-transform-numeric-separator\": \"^7.23.3\",
        \"@babel/plugin-transform-object-rest-spread\": \"^7.23.3\",
        \"@babel/plugin-transform-object-super\": \"^7.23.3\",
        \"@babel/plugin-transform-optional-catch-binding\": \"^7.23.3\",
        \"@babel/plugin-transform-optional-chaining\": \"^7.23.3\",
        \"@babel/plugin-transform-parameters\": \"^7.23.3\",
        \"@babel/plugin-transform-private-methods\": \"^7.23.3\",
        \"@babel/plugin-transform-private-property-in-object\": \"^7.23.3\",
        \"@babel/plugin-transform-property-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-regenerator\": \"^7.23.3\",
        \"@babel/plugin-transform-reserved-words\": \"^7.23.3\",
        \"@babel/plugin-transform-shorthand-properties\": \"^7.23.3\",
        \"@babel/plugin-transform-spread\": \"^7.23.3\",
        \"@babel/plugin-transform-sticky-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-template-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-typeof-symbol\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-escapes\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-property-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-sets-regex\": \"^7.23.3\",
        \"@babel/preset-modules\": \"0.1.6-no-external-plugins\",
        \"babel-plugin-polyfill-corejs2\": \"^0.4.6\",
        \"babel-plugin-polyfill-corejs3\": \"^0.8.5\",
        \"babel-plugin-polyfill-regenerator\": \"^0.5.3\",
        \"core-js-compat\": \"^3.31.0\",
        \"semver\": \"^6.3.1\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/preset-env/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/@babel/preset-modules\": {
      \"version\": \"0.1.6-no-external-plugins\",
      \"resolved\": \"https://registry.npmjs.org/@babel/preset-modules/-/preset-modules-0.1.6-no-external-plugins.tgz\",
      \"integrity\": \"sha512-HrcgcIESLm9aIR842yhJ5RWan/gebQUJ6E/E5+rf0y9o6oj7w0Br+sWuL6kEQ/o/AdfvR1Je9jG18/gnpwjEyA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-plugin-utils\": \"^7.0.0\",
        \"@babel/types\": \"^7.4.4\",
        \"esutils\": \"^2.0.2\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0 || ^8.0.0-0 <8.0.0\"
      }
    },
    \"node_modules/@babel/register\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/register/-/register-7.22.15.tgz\",
      \"integrity\": \"sha512-V3Q3EqoQdn65RCgTLwauZaTfd1ShhwPmbBv+1dkZV/HpCGMKVyn6oFcRlI7RaKqiDQjX2Qd3AuoEguBgdjIKlg==\",
      \"dev\": true,
      \"dependencies\": {
        \"clone-deep\": \"^4.0.1\",
        \"find-cache-dir\": \"^2.0.0\",
        \"make-dir\": \"^2.1.0\",
        \"pirates\": \"^4.0.5\",
        \"source-map-support\": \"^0.5.16\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.0.0-0\"
      }
    },
    \"node_modules/@babel/regjsgen\": {
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/regjsgen/-/regjsgen-0.8.0.tgz\",
      \"integrity\": \"sha512-x/rqGMdzj+fWZvCOYForTghzbtqPDZ5gPwaoNGHdgDfF2QA/XZbCBp4Moo5scrkAMPhB7z26XM/AaHuIJdgauA==\",
      \"dev\": true
    },
    \"node_modules/@babel/runtime\": {
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/runtime/-/runtime-7.23.2.tgz\",
      \"integrity\": \"sha512-mM8eg4yl5D6i3lu2QKPuPH4FArvJ8KhTofbE7jwMUv9KX5mBvwPAqnV3MlyBNqdp9RyRKP6Yck8TrfYrPvX3bg==\",
      \"dev\": true,
      \"dependencies\": {
        \"regenerator-runtime\": \"^0.14.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/template\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/template/-/template-7.22.15.tgz\",
      \"integrity\": \"sha512-QPErUVm4uyJa60rkI73qneDacvdvzxshT3kksGqlGWYdOTIUOwJ7RDUL8sGqslY1uXWSL6xMFKEXDS3ox2uF0w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/parser\": \"^7.22.15\",
        \"@babel/types\": \"^7.22.15\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/traverse\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/traverse/-/traverse-7.23.3.tgz\",
      \"integrity\": \"sha512-+K0yF1/9yR0oHdE0StHuEj3uTPzwwbrLGfNOndVJVV2TqA5+j3oljJUb4nmB954FLGjNem976+B+eDuLIjesiQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.3\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/parser\": \"^7.23.3\",
        \"@babel/types\": \"^7.23.3\",
        \"debug\": \"^4.1.0\",
        \"globals\": \"^11.1.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/traverse/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/@babel/traverse/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/@babel/types\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/types/-/types-7.23.3.tgz\",
      \"integrity\": \"sha512-OZnvoH2l8PK5eUvEcUyCt/sXgr/h+UWpVuBbOljwcrAgUl6lpchoQ++PHGyQy1AtYnVA6CEq3y5xeEI10brpXw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-string-parser\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\",
        \"to-fast-properties\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@discoveryjs/json-ext\": {
      \"version\": \"0.5.7\",
      \"resolved\": \"https://registry.npmjs.org/@discoveryjs/json-ext/-/json-ext-0.5.7.tgz\",
      \"integrity\": \"sha512-dBVuXR082gk3jsFp7Rd/JI4kytwGHecnCoTtXFb7DB6CNHp4rg5k1bhg0nWdLGLnOV71lmDzGQaLMy8iPLY0pw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10.0.0\"
      }
    },
    \"node_modules/@eslint-community/eslint-utils\": {
      \"version\": \"4.4.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint-community/eslint-utils/-/eslint-utils-4.4.0.tgz\",
      \"integrity\": \"sha512-1/sA4dwrzBAyeUoQ6oxahHKmrZvsnLCg4RfxW3ZFGGmQkSNQPFNLV9CUEFQP1x9EYXHTo5p6xdhZM1Ne9p/AfA==\",
      \"dev\": true,
      \"dependencies\": {
        \"eslint-visitor-keys\": \"^3.3.0\"
      },
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      },
      \"peerDependencies\": {
        \"eslint\": \"^6.0.0 || ^7.0.0 || >=8.0.0\"
      }
    },
    \"node_modules/@eslint-community/regexpp\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/@eslint-community/regexpp/-/regexpp-4.6.2.tgz\",
      \"integrity\": \"sha512-pPTNuaAG3QMH+buKyBIGJs3g/S5y0caxw0ygM3YyE6yJFySwiGGSzA+mM3KJ8QQvzeLh3blwgSonkFjgQdxzMw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^12.0.0 || ^14.0.0 || >=16.0.0\"
      }
    },
    \"node_modules/@eslint/eslintrc\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/eslintrc/-/eslintrc-2.1.3.tgz\",
      \"integrity\": \"sha512-yZzuIG+jnVu6hNSzFEN07e8BxF3uAzYtQb6uDkaYZLo6oYZDCq454c5kB8zxnzfCYyP4MIuyBn10L0DqwujTmA==\",
      \"dev\": true,
      \"dependencies\": {
        \"ajv\": \"^6.12.4\",
        \"debug\": \"^4.3.2\",
        \"espree\": \"^9.6.0\",
        \"globals\": \"^13.19.0\",
        \"ignore\": \"^5.2.0\",
        \"import-fresh\": \"^3.2.1\",
        \"js-yaml\": \"^4.1.0\",
        \"minimatch\": \"^3.1.2\",
        \"strip-json-comments\": \"^3.1.1\"
      },
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://opencollective.com/eslint\"
      }
    },
    \"node_modules/@eslint/eslintrc/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/@eslint/eslintrc/node_modules/globals\": {
      \"version\": \"13.23.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-13.23.0.tgz\",
      \"integrity\": \"sha512-XAmF0RjlrjY23MA51q3HltdlGxUpXPvg0GioKiD9X6HD28iMjo2dKC8Vqwm7lne4GNr78+RHTfliktR6ZH09wA==\",
      \"dev\": true,
      \"dependencies\": {
        \"type-fest\": \"^0.20.2\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/@eslint/eslintrc/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/@eslint/eslintrc/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/@eslint/js\": {
      \"version\": \"8.54.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/js/-/js-8.54.0.tgz\",
      \"integrity\": \"sha512-ut5V+D+fOoWPgGGNj83GGjnntO39xDy6DWxO0wb7Jp3DcMX0TfIqdzHF85VTQkerdyGmuuMD9AKAo5KiNlf/AQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      }
    },
    \"node_modules/@gar/promisify\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@gar/promisify/-/promisify-1.1.3.tgz\",
      \"integrity\": \"sha512-k2Ty1JcVojjJFwrg/ThKi2ujJ7XNLYaFGNB/bWT9wGR+oSMJHMa5w+CUq6p/pVrKeNNgA7pCqEcjSnHVoqJQFw==\",
      \"dev\": true
    },
    \"node_modules/@humanwhocodes/config-array\": {
      \"version\": \"0.11.13\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/config-array/-/config-array-0.11.13.tgz\",
      \"integrity\": \"sha512-JSBDMiDKSzQVngfRjOdFXgFfklaXI4K9nLF49Auh21lmBWRLIK3+xTErTWD4KU54pb6coM6ESE7Awz/FNU3zgQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@humanwhocodes/object-schema\": \"^2.0.1\",
        \"debug\": \"^4.1.1\",
        \"minimatch\": \"^3.0.5\"
      },
      \"engines\": {
        \"node\": \">=10.10.0\"
      }
    },
    \"node_modules/@humanwhocodes/config-array/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/@humanwhocodes/config-array/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/@humanwhocodes/module-importer\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/module-importer/-/module-importer-1.0.1.tgz\",
      \"integrity\": \"sha512-bxveV4V8v5Yb4ncFTT3rPSgZBOpCkjfK0y4oVVVJwIuDVBRMDXrPyXRL988i5ap9m9bnyEEjWfm5WkBmtffLfA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=12.22\"
      },
      \"funding\": {
        \"type\": \"github\",
        \"url\": \"https://github.com/sponsors/nzakas\"
      }
    },
    \"node_modules/@humanwhocodes/object-schema\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/object-schema/-/object-schema-2.0.1.tgz\",
      \"integrity\": \"sha512-dvuCeX5fC9dXgJn9t+X5atfmgQAzUOWqS1254Gh0m6i8wKd10ebXkfNKiRK+1GWi/yTvvLDHpoxLr0xxxeslWw==\",
      \"dev\": true
    },
    \"node_modules/@jridgewell/gen-mapping\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/gen-mapping/-/gen-mapping-0.3.2.tgz\",
      \"integrity\": \"sha512-mh65xKQAzI6iBcFzwv28KVWSmCkdRBWoOh+bYQGW3+6OZvbbN3TqMGo5hqYxQniRcH9F2VZIoJCm4pa3BPDK/A==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/set-array\": \"^1.0.1\",
        \"@jridgewell/sourcemap-codec\": \"^1.4.10\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      },
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/@jridgewell/resolve-uri\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/resolve-uri/-/resolve-uri-3.1.0.tgz\",
      \"integrity\": \"sha512-F2msla3tad+Mfht5cJq7LSXcdudKTWCVYUgw6pLFOOHSTtZlj6SWNYAp+AhuqLmWdBO2X5hPrLcu8cVP8fy28w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/@jridgewell/set-array\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/set-array/-/set-array-1.1.1.tgz\",
      \"integrity\": \"sha512-Ct5MqZkLGEXTVmQYbGtx9SVqD2fqwvdubdps5D3djjAkgkKwT918VNOz65pEHFaYTeWcukmJmH5SwsA9Tn2ObQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/@jridgewell/source-map\": {
      \"version\": \"0.3.3\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/source-map/-/source-map-0.3.3.tgz\",
      \"integrity\": \"sha512-b+fsZXeLYi9fEULmfBrhxn4IrPlINf8fiNarzTof004v3lFdntdwa9PF7vFJqm3mg7s+ScJMxXaE3Acp1irZcg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/gen-mapping\": \"^0.3.0\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      }
    },
    \"node_modules/@jridgewell/sourcemap-codec\": {
      \"version\": \"1.4.14\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/sourcemap-codec/-/sourcemap-codec-1.4.14.tgz\",
      \"integrity\": \"sha512-XPSJHWmi394fuUuzDnGz1wiKqWfo1yXecHQMRf2l6hztTO+nPru658AyDngaBe7isIxEkRsPR3FZh+s7iVa4Uw==\",
      \"dev\": true
    },
    \"node_modules/@jridgewell/trace-mapping\": {
      \"version\": \"0.3.17\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/trace-mapping/-/trace-mapping-0.3.17.tgz\",
      \"integrity\": \"sha512-MCNzAp77qzKca9+W/+I0+sEpaUnZoeasnghNeVc41VZCEKaCH73Vq3BZZ/SzWIgrqE4H4ceI+p+b6C0mHf9T4g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/resolve-uri\": \"3.1.0\",
        \"@jridgewell/sourcemap-codec\": \"1.4.14\"
      }
    },
    \"node_modules/@nicolo-ribaudo/chokidar-2\": {
      \"version\": \"2.1.8-no-fsevents.3\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/chokidar-2/-/chokidar-2-2.1.8-no-fsevents.3.tgz\",
      \"integrity\": \"sha512-s88O1aVtXftvp5bCPB7WnmXc5IwOZZ7YPuwNPt+GtOOXpPvad1LfbmjYv+qII7zP6RU2QGnqve27dnLycEnyEQ==\",
      \"dev\": true,
      \"optional\": true
    },
    \"node_modules/@nicolo-ribaudo/eslint-scope-5-internals\": {
      \"version\": \"5.1.1-v1\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/eslint-scope-5-internals/-/eslint-scope-5-internals-5.1.1-v1.tgz\",
      \"integrity\": \"sha512-54/JRvkLIzzDWshCWfuhadfrfZVPiElY8Fcgmg1HroEly/EDSszzhBAsarCux+D/kOslTRquNzuyGSmUSTTHGg==\",
      \"dev\": true,
      \"dependencies\": {
        \"eslint-scope\": \"5.1.1\"
      }
    },
    \"node_modules/@nodelib/fs.scandir\": {
      \"version\": \"2.1.5\",
      \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.scandir/-/fs.scandir-2.1.5.tgz\",
      \"integrity\": \"sha512-vq24Bq3ym5HEQm2NKCr3yXDwjc7vTsEThRDnkp2DK9p1uqLR+DHurm/NOTo0KG7HYHU7eppKZj3MyqYuMBf62g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@nodelib/fs.stat\": \"2.0.5\",
        \"run-parallel\": \"^1.1.9\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/@nodelib/fs.stat\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.stat/-/fs.stat-2.0.5.tgz\",
      \"integrity\": \"sha512-RkhPPp2zrqDAQA/2jNhnztcPAlv64XdhIp7a7454A5ovI7Bukxgt7MX7udwAu3zg1DcpPU0rz3VV1SeaqvY4+A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/@nodelib/fs.walk\": {
      \"version\": \"1.2.8\",
      \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.walk/-/fs.walk-1.2.8.tgz\",
      \"integrity\": \"sha512-oGB+UxlgWcgQkgwo8GcEGwemoTFt3FIO9ababBmaGwXIoBKZ+GTy0pP185beGg7Llih/NSHSV2XAs1lnznocSg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@nodelib/fs.scandir\": \"2.1.5\",
        \"fastq\": \"^1.6.0\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/@npmcli/fs\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/fs/-/fs-1.1.1.tgz\",
      \"integrity\": \"sha512-8KG5RD0GVP4ydEzRn/I4BNDuxDtqVbOdm8675T49OIG/NGhaK0pjPX7ZcDlvKYbA+ulvVK3ztfcF4uBdOxuJbQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@gar/promisify\": \"^1.0.1\",
        \"semver\": \"^7.3.5\"
      }
    },
    \"node_modules/@npmcli/fs/node_modules/semver\": {
      \"version\": \"7.3.7\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.7.tgz\",
      \"integrity\": \"sha512-QlYTucUYOews+WeEujDoEGziz4K6c47V/Bd+LjSSYcA94p+DmINdf7ncaUinThfvZyu13lN9OY1XDxt8C0Tw0g==\",
      \"dev\": true,
      \"dependencies\": {
        \"lru-cache\": \"^6.0.0\"
      },
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/@npmcli/move-file\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/move-file/-/move-file-1.1.2.tgz\",
      \"integrity\": \"sha512-1SUf/Cg2GzGDyaf15aR9St9TWlb+XvbZXWpDx8YKs7MLzMH/BCeopv+y9vzrzgkfykCGuWOlSu3mZhj2+FQcrg==\",
      \"dev\": true,
      \"dependencies\": {
        \"mkdirp\": \"^1.0.4\",
        \"rimraf\": \"^3.0.2\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/@npmcli/move-file/node_modules/rimraf\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
      \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.1.3\"
      },
      \"bin\": {
        \"rimraf\": \"bin.js\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/@tootallnate/once\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@tootallnate/once/-/once-1.1.2.tgz\",
      \"integrity\": \"sha512-RbzJvlNzmRq5c3O09UipeuXno4tA1FE6ikOjxZK0tuxVv3412l64l5t1W5pj4+rJq9vpkm/kwiR07aZXnsKPxw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/@types/eslint\": {
      \"version\": \"8.4.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/eslint/-/eslint-8.4.1.tgz\",
      \"integrity\": \"sha512-GE44+DNEyxxh2Kc6ro/VkIj+9ma0pO0bwv9+uHSyBrikYOHr8zYcdPvnBOp1aw8s+CjRvuSx7CyWqRrNFQ59mA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/estree\": \"*\",
        \"@types/json-schema\": \"*\"
      }
    },
    \"node_modules/@types/eslint-scope\": {
      \"version\": \"3.7.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/eslint-scope/-/eslint-scope-3.7.3.tgz\",
      \"integrity\": \"sha512-PB3ldyrcnAicT35TWPs5IcwKD8S333HMaa2VVv4+wdvebJkjWuW/xESoB8IwRcog8HYVYamb1g/R31Qv5Bx03g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/eslint\": \"*\",
        \"@types/estree\": \"*\"
      }
    },
    \"node_modules/@types/estree\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/estree/-/estree-1.0.1.tgz\",
      \"integrity\": \"sha512-LG4opVs2ANWZ1TJoKc937iMmNstM/d0ae1vNbnBvBhqCSezgVUOzcLCqbI5elV8Vy6WKwKjaqR+zO9VKirBBCA==\",
      \"dev\": true
    },
    \"node_modules/@types/glob\": {
      \"version\": \"7.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.1.3.tgz\",
      \"integrity\": \"sha512-SEYeGAIQIQX8NN6LDKprLjbrd5dARM5EXsd8GI/A5l0apYI1fGMWgPHSe4ZKL4eozlAyI+doUE9XbYS4xCkQ1w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/minimatch\": \"*\",
        \"@types/node\": \"*\"
      }
    },
    \"node_modules/@types/json-schema\": {
      \"version\": \"7.0.11\",
      \"resolved\": \"https://registry.npmjs.org/@types/json-schema/-/json-schema-7.0.11.tgz\",
      \"integrity\": \"sha512-wOuvG1SN4Us4rez+tylwwwCV1psiNVOkJeM3AUWUNWg/jDQY2+HE/444y5gc+jBmRqASOm2Oeh5c1axHobwRKQ==\",
      \"dev\": true
    },
    \"node_modules/@types/json5\": {
      \"version\": \"0.0.29\",
      \"resolved\": \"https://registry.npmjs.org/@types/json5/-/json5-0.0.29.tgz\",
      \"integrity\": \"sha512-dRLjCWHYg4oaA77cxO64oO+7JwCwnIzkZPdrrC71jQmQtlhM556pwKo5bUzqvZndkVbeFLIIi+9TC40JNF5hNQ==\",
      \"dev\": true
    },
    \"node_modules/@types/minimatch\": {
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.3.tgz\",
      \"integrity\": \"sha512-tHq6qdbT9U1IRSGf14CL0pUlULksvY9OZ+5eEgl1N7t+OA3tGvNpxJCzuKQlsNgCVwbAs670L1vcVQi8j9HjnA==\",
      \"dev\": true
    },
    \"node_modules/@types/minimist\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimist/-/minimist-1.2.1.tgz\",
      \"integrity\": \"sha512-fZQQafSREFyuZcdWFAExYjBiCL7AUCdgsk80iO0q4yihYYdcIiH28CcuPTGFgLOCC8RlW49GSQxdHwZP+I7CNg==\",
      \"dev\": true
    },
    \"node_modules/@types/node\": {
      \"version\": \"14.6.4\",
      \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-14.6.4.tgz\",
      \"integrity\": \"sha512-Wk7nG1JSaMfMpoMJDKUsWYugliB2Vy55pdjLpmLixeyMi7HizW2I/9QoxsPCkXl3dO+ZOVqPumKaDUv5zJu2uQ==\",
      \"dev\": true
    },
    \"node_modules/@types/normalize-package-data\": {
      \"version\": \"2.4.0\",
      \"resolved\": \"https://registry.npmjs.org/@types/normalize-package-data/-/normalize-package-data-2.4.0.tgz\",
      \"integrity\": \"sha512-f5j5b/Gf71L+dbqxIpQ4Z2WlmI/mPJ0fOkGGmFgtb6sAu97EPczzbS3/tJKxmcYDj55OX6ssqwDAWOHIYDRDGA==\",
      \"dev\": true
    },
    \"node_modules/@ungap/structured-clone\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@ungap/structured-clone/-/structured-clone-1.2.0.tgz\",
      \"integrity\": \"sha512-zuVdFrMJiuCDQUMCzQaD6KL28MjnqqN8XnAqiEq9PNm/hCPTSGfrXCOfwj1ow4LFb/tNymJPwsNbVePc1xFqrQ==\",
      \"dev\": true
    },
    \"node_modules/@webassemblyjs/ast\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/ast/-/ast-1.11.5.tgz\",
      \"integrity\": \"sha512-LHY/GSAZZRpsNQH+/oHqhRQ5FT7eoULcBqgfyTB5nQHogFnK3/7QoN7dLnwSE/JkUAF0SrRuclT7ODqMFtWxxQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/helper-numbers\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\"
      }
    },
    \"node_modules/@webassemblyjs/floating-point-hex-parser\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/floating-point-hex-parser/-/floating-point-hex-parser-1.11.5.tgz\",
      \"integrity\": \"sha512-1j1zTIC5EZOtCplMBG/IEwLtUojtwFVwdyVMbL/hwWqbzlQoJsWCOavrdnLkemwNoC/EOwtUFch3fuo+cbcXYQ==\",
      \"dev\": true
    },
    \"node_modules/@webassemblyjs/helper-api-error\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-api-error/-/helper-api-error-1.11.5.tgz\",
      \"integrity\": \"sha512-L65bDPmfpY0+yFrsgz8b6LhXmbbs38OnwDCf6NpnMUYqa+ENfE5Dq9E42ny0qz/PdR0LJyq/T5YijPnU8AXEpA==\",
      \"dev\": true
    },
    \"node_modules/@webassemblyjs/helper-buffer\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-buffer/-/helper-buffer-1.11.5.tgz\",
      \"integrity\": \"sha512-fDKo1gstwFFSfacIeH5KfwzjykIE6ldh1iH9Y/8YkAZrhmu4TctqYjSh7t0K2VyDSXOZJ1MLhht/k9IvYGcIxg==\",
      \"dev\": true
    },
    \"node_modules/@webassemblyjs/helper-numbers\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-numbers/-/helper-numbers-1.11.5.tgz\",
      \"integrity\": \"sha512-DhykHXM0ZABqfIGYNv93A5KKDw/+ywBFnuWybZZWcuzWHfbp21wUfRkbtz7dMGwGgT4iXjWuhRMA2Mzod6W4WA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/floating-point-hex-parser\": \"1.11.5\",
        \"@webassemblyjs/helper-api-error\": \"1.11.5\",
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"node_modules/@webassemblyjs/helper-wasm-bytecode\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-wasm-bytecode/-/helper-wasm-bytecode-1.11.5.tgz\",
      \"integrity\": \"sha512-oC4Qa0bNcqnjAowFn7MPCETQgDYytpsfvz4ujZz63Zu/a/v71HeCAAmZsgZ3YVKec3zSPYytG3/PrRCqbtcAvA==\",
      \"dev\": true
    },
    \"node_modules/@webassemblyjs/helper-wasm-section\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-wasm-section/-/helper-wasm-section-1.11.5.tgz\",
      \"integrity\": \"sha512-uEoThA1LN2NA+K3B9wDo3yKlBfVtC6rh0i4/6hvbz071E8gTNZD/pT0MsBf7MeD6KbApMSkaAK0XeKyOZC7CIA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-buffer\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/wasm-gen\": \"1.11.5\"
      }
    },
    \"node_modules/@webassemblyjs/ieee754\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/ieee754/-/ieee754-1.11.5.tgz\",
      \"integrity\": \"sha512-37aGq6qVL8A8oPbPrSGMBcp38YZFXcHfiROflJn9jxSdSMMM5dS5P/9e2/TpaJuhE+wFrbukN2WI6Hw9MH5acg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@xtuc/ieee754\": \"^1.2.0\"
      }
    },
    \"node_modules/@webassemblyjs/leb128\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/leb128/-/leb128-1.11.5.tgz\",
      \"integrity\": \"sha512-ajqrRSXaTJoPW+xmkfYN6l8VIeNnR4vBOTQO9HzR7IygoCcKWkICbKFbVTNMjMgMREqXEr0+2M6zukzM47ZUfQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"node_modules/@webassemblyjs/utf8\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/utf8/-/utf8-1.11.5.tgz\",
      \"integrity\": \"sha512-WiOhulHKTZU5UPlRl53gHR8OxdGsSOxqfpqWeA2FmcwBMaoEdz6b2x2si3IwC9/fSPLfe8pBMRTHVMk5nlwnFQ==\",
      \"dev\": true
    },
    \"node_modules/@webassemblyjs/wasm-edit\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-edit/-/wasm-edit-1.11.5.tgz\",
      \"integrity\": \"sha512-C0p9D2fAu3Twwqvygvf42iGCQ4av8MFBLiTb+08SZ4cEdwzWx9QeAHDo1E2k+9s/0w1DM40oflJOpkZ8jW4HCQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-buffer\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-section\": \"1.11.5\",
        \"@webassemblyjs/wasm-gen\": \"1.11.5\",
        \"@webassemblyjs/wasm-opt\": \"1.11.5\",
        \"@webassemblyjs/wasm-parser\": \"1.11.5\",
        \"@webassemblyjs/wast-printer\": \"1.11.5\"
      }
    },
    \"node_modules/@webassemblyjs/wasm-gen\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-gen/-/wasm-gen-1.11.5.tgz\",
      \"integrity\": \"sha512-14vteRlRjxLK9eSyYFvw1K8Vv+iPdZU0Aebk3j6oB8TQiQYuO6hj9s4d7qf6f2HJr2khzvNldAFG13CgdkAIfA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/ieee754\": \"1.11.5\",
        \"@webassemblyjs/leb128\": \"1.11.5\",
        \"@webassemblyjs/utf8\": \"1.11.5\"
      }
    },
    \"node_modules/@webassemblyjs/wasm-opt\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-opt/-/wasm-opt-1.11.5.tgz\",
      \"integrity\": \"sha512-tcKwlIXstBQgbKy1MlbDMlXaxpucn42eb17H29rawYLxm5+MsEmgPzeCP8B1Cl69hCice8LeKgZpRUAPtqYPgw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-buffer\": \"1.11.5\",
        \"@webassemblyjs/wasm-gen\": \"1.11.5\",
        \"@webassemblyjs/wasm-parser\": \"1.11.5\"
      }
    },
    \"node_modules/@webassemblyjs/wasm-parser\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-parser/-/wasm-parser-1.11.5.tgz\",
      \"integrity\": \"sha512-SVXUIwsLQlc8srSD7jejsfTU83g7pIGr2YYNb9oHdtldSxaOhvA5xwvIiWIfcX8PlSakgqMXsLpLfbbJ4cBYew==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-api-error\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/ieee754\": \"1.11.5\",
        \"@webassemblyjs/leb128\": \"1.11.5\",
        \"@webassemblyjs/utf8\": \"1.11.5\"
      }
    },
    \"node_modules/@webassemblyjs/wast-printer\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wast-printer/-/wast-printer-1.11.5.tgz\",
      \"integrity\": \"sha512-f7Pq3wvg3GSPUPzR0F6bmI89Hdb+u9WXrSKc4v+N0aV0q6r42WoF92Jp2jEorBEBRoRNXgjp53nBniDXcqZYPA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"node_modules/@webpack-cli/configtest\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/configtest/-/configtest-1.2.0.tgz\",
      \"integrity\": \"sha512-4FB8Tj6xyVkyqjj1OaTqCjXYULB9FMkqQ8yGrZjRDrYh0nOE+7Lhs45WioWQQMV+ceFlE368Ukhe6xdvJM9Egg==\",
      \"dev\": true,
      \"peerDependencies\": {
        \"webpack\": \"4.x.x || 5.x.x\",
        \"webpack-cli\": \"4.x.x\"
      }
    },
    \"node_modules/@webpack-cli/info\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/info/-/info-1.5.0.tgz\",
      \"integrity\": \"sha512-e8tSXZpw2hPl2uMJY6fsMswaok5FdlGNRTktvFk2sD8RjH0hE2+XistawJx1vmKteh4NmGmNUrp+Tb2w+udPcQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"envinfo\": \"^7.7.3\"
      },
      \"peerDependencies\": {
        \"webpack-cli\": \"4.x.x\"
      }
    },
    \"node_modules/@webpack-cli/serve\": {
      \"version\": \"1.7.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/serve/-/serve-1.7.0.tgz\",
      \"integrity\": \"sha512-oxnCNGj88fL+xzV+dacXs44HcDwf1ovs3AuEzvP7mqXw7fQntqIhQ1BRmynh4qEKQSSSRSWVyXRjmTbZIX9V2Q==\",
      \"dev\": true,
      \"peerDependencies\": {
        \"webpack-cli\": \"4.x.x\"
      },
      \"peerDependenciesMeta\": {
        \"webpack-dev-server\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/@xtuc/ieee754\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@xtuc/ieee754/-/ieee754-1.2.0.tgz\",
      \"integrity\": \"sha512-DX8nKgqcGwsc0eJSqYt5lwP4DH5FlHnmuWWBRy7X0NcaGR0ZtuyeESgMwTYVEtxmsNGY+qit4QYT/MIYTOTPeA==\",
      \"dev\": true
    },
    \"node_modules/@xtuc/long\": {
      \"version\": \"4.2.2\",
      \"resolved\": \"https://registry.npmjs.org/@xtuc/long/-/long-4.2.2.tgz\",
      \"integrity\": \"sha512-NuHqBY1PB/D8xU6s/thBgOAiAP7HOYDQ32+BFZILJ8ivkUkAHQnWfn6WhL79Owj1qmUnoN/YPhktdIoucipkAQ==\",
      \"dev\": true
    },
    \"node_modules/abbrev\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/abbrev/-/abbrev-1.1.1.tgz\",
      \"integrity\": \"sha512-nne9/IiQ/hzIhY6pdDnbBtz7DjPTKrY00P/zvPSm5pOFkl6xuGrGnXn/VtTNNfNtAfZ9/1RtehkszU9qcTii0Q==\",
      \"dev\": true
    },
    \"node_modules/acorn\": {
      \"version\": \"8.10.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-8.10.0.tgz\",
      \"integrity\": \"sha512-F0SAmZ8iUtS//m8DmCTA0jlh6TDKkHQyK6xc6V4KDTyZKA9dnvX9/3sRTVQrWm79glUAZbnmmNcdYwUIHWVybw==\",
      \"dev\": true,
      \"bin\": {
        \"acorn\": \"bin/acorn\"
      },
      \"engines\": {
        \"node\": \">=0.4.0\"
      }
    },
    \"node_modules/acorn-import-assertions\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn-import-assertions/-/acorn-import-assertions-1.9.0.tgz\",
      \"integrity\": \"sha512-cmMwop9x+8KFhxvKrKfPYmN6/pKTYYHBqLa0DfvVZcKMJWNyWLnaqND7dx/qn66R7ewM1UX5XMaDVP5wlVTaVA==\",
      \"dev\": true,
      \"peerDependencies\": {
        \"acorn\": \"^8\"
      }
    },
    \"node_modules/acorn-jsx\": {
      \"version\": \"5.3.2\",
      \"resolved\": \"https://registry.npmjs.org/acorn-jsx/-/acorn-jsx-5.3.2.tgz\",
      \"integrity\": \"sha512-rq9s+JNhf0IChjtDXxllJ7g41oZk5SlXtp0LHwyA5cejwn7vKmKp4pPri6YEePv2PU65sAsegbXtIinmDFDXgQ==\",
      \"dev\": true,
      \"peerDependencies\": {
        \"acorn\": \"^6.0.0 || ^7.0.0 || ^8.0.0\"
      }
    },
    \"node_modules/agent-base\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/agent-base/-/agent-base-6.0.2.tgz\",
      \"integrity\": \"sha512-RZNwNclF7+MS/8bDg70amg32dyeZGZxiDuQmZxKLAlQjr3jGyLx+4Kkk58UO7D2QdgFIQCovuSuZESne6RG6XQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"debug\": \"4\"
      },
      \"engines\": {
        \"node\": \">= 6.0.0\"
      }
    },
    \"node_modules/agent-base/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/agent-base/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/agentkeepalive\": {
      \"version\": \"4.2.1\",
      \"resolved\": \"https://registry.npmjs.org/agentkeepalive/-/agentkeepalive-4.2.1.tgz\",
      \"integrity\": \"sha512-Zn4cw2NEqd+9fiSVWMscnjyQ1a8Yfoc5oBajLeo5w+YBHgDUcEBY2hS4YpTz6iN5f/2zQiktcuM6tS8x1p9dpA==\",
      \"dev\": true,
      \"dependencies\": {
        \"debug\": \"^4.1.0\",
        \"depd\": \"^1.1.2\",
        \"humanize-ms\": \"^1.2.1\"
      },
      \"engines\": {
        \"node\": \">= 8.0.0\"
      }
    },
    \"node_modules/agentkeepalive/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/agentkeepalive/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/aggregate-error\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/aggregate-error/-/aggregate-error-3.1.0.tgz\",
      \"integrity\": \"sha512-4I7Td01quW/RpocfNayFdFVk1qSuoh0E7JrbRJ16nH01HhKFQ88INq9Sd+nd72zqRySlr9BmDA8xlEJ6vJMrYA==\",
      \"dev\": true,
      \"dependencies\": {
        \"clean-stack\": \"^2.0.0\",
        \"indent-string\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/ajv\": {
      \"version\": \"6.12.6\",
      \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-6.12.6.tgz\",
      \"integrity\": \"sha512-j3fVLgvTo527anyYyJOGTYJbG+vnnQYvE0m5mmkc1TK+nxAppkCLMIL0aZ4dblVCNoGShhm+kzE4ZUykBoMg4g==\",
      \"dev\": true,
      \"dependencies\": {
        \"fast-deep-equal\": \"^3.1.1\",
        \"fast-json-stable-stringify\": \"^2.0.0\",
        \"json-schema-traverse\": \"^0.4.1\",
        \"uri-js\": \"^4.2.2\"
      },
      \"funding\": {
        \"type\": \"github\",
        \"url\": \"https://github.com/sponsors/epoberezkin\"
      }
    },
    \"node_modules/ajv-formats\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/ajv-formats/-/ajv-formats-2.1.1.tgz\",
      \"integrity\": \"sha512-Wx0Kx52hxE7C18hkMEggYlEifqWZtYaRgouJor+WMdPnQyEK13vgEWyVNup7SoeeoLMsr4kf5h6dOW11I15MUA==\",
      \"dev\": true,
      \"dependencies\": {
        \"ajv\": \"^8.0.0\"
      },
      \"peerDependencies\": {
        \"ajv\": \"^8.0.0\"
      },
      \"peerDependenciesMeta\": {
        \"ajv\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/ajv-formats/node_modules/ajv\": {
      \"version\": \"8.11.0\",
      \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.11.0.tgz\",
      \"integrity\": \"sha512-wGgprdCvMalC0BztXvitD2hC04YffAvtsUn93JbGXYLAtCUO4xd17mCCZQxUOItiBwZvJScWo8NIvQMQ71rdpg==\",
      \"dev\": true,
      \"dependencies\": {
        \"fast-deep-equal\": \"^3.1.1\",
        \"json-schema-traverse\": \"^1.0.0\",
        \"require-from-string\": \"^2.0.2\",
        \"uri-js\": \"^4.2.2\"
      },
      \"funding\": {
        \"type\": \"github\",
        \"url\": \"https://github.com/sponsors/epoberezkin\"
      }
    },
    \"node_modules/ajv-formats/node_modules/json-schema-traverse\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
      \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
      \"dev\": true
    },
    \"node_modules/ajv-keywords\": {
      \"version\": \"3.5.2\",
      \"resolved\": \"https://registry.npmjs.org/ajv-keywords/-/ajv-keywords-3.5.2.tgz\",
      \"integrity\": \"sha512-5p6WTN0DdTGVQk6VjcEju19IgaHudalcfabD7yhDGeA6bcQnmL+CpveLJq/3hvfwd1aof6L386Ougkx6RfyMIQ==\",
      \"dev\": true,
      \"peerDependencies\": {
        \"ajv\": \"^6.9.1\"
      }
    },
    \"node_modules/ansi-colors\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-4.1.1.tgz\",
      \"integrity\": \"sha512-JoX0apGbHaUJBNl6yF+p6JAFYZ666/hhCGKN5t9QFjbJQKUU/g8MNbFDbvfrgKXvI1QpZplPOnwIo99lX/AAmA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/ansi-styles\": {
      \"version\": \"3.2.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
      \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-convert\": \"^1.9.0\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/aproba\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/aproba/-/aproba-2.0.0.tgz\",
      \"integrity\": \"sha512-lYe4Gx7QT+MKGbDsA+Z+he/Wtef0BiwDOlK/XkBrdfsh9J/jPPXbX0tE9x9cl27Tmu5gg3QUbUrQYa/y+KOHPQ==\",
      \"dev\": true
    },
    \"node_modules/argparse\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/argparse/-/argparse-2.0.1.tgz\",
      \"integrity\": \"sha512-8+9WqebbFzpX9OR+Wa6O29asIogeRMzcGtAINdpMHHyAg10f05aSFVBbcEqGf/PXw1EjAZ+q2/bEBg3DvurK3Q==\",
      \"dev\": true
    },
    \"node_modules/array-buffer-byte-length\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/array-buffer-byte-length/-/array-buffer-byte-length-1.0.0.tgz\",
      \"integrity\": \"sha512-LPuwb2P+NrQw3XhxGc36+XSvuBPopovXYTR9Ew++Du9Yb/bx5AzBfrIsBoj0EZUifjQU+sHL21sseZ3jerWO/A==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"is-array-buffer\": \"^3.0.1\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/array-includes\": {
      \"version\": \"3.1.7\",
      \"resolved\": \"https://registry.npmjs.org/array-includes/-/array-includes-3.1.7.tgz\",
      \"integrity\": \"sha512-dlcsNBIiWhPkHdOEEKnehA+RNUWDc4UqFtnIXU4uuYDPtA4LDkr7qip2p0VvFAEXNDr0yWZ9PJyIRiGjRLQzwQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"get-intrinsic\": \"^1.2.1\",
        \"is-string\": \"^1.0.7\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/array-union\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-1.0.2.tgz\",
      \"integrity\": \"sha1-mjRBDk9OPaI96jdb5b5w8kd47Dk=\",
      \"dev\": true,
      \"dependencies\": {
        \"array-uniq\": \"^1.0.1\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/array-uniq\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/array-uniq/-/array-uniq-1.0.3.tgz\",
      \"integrity\": \"sha1-r2rId6Jcx/dOBYiUdThY39sk/bY=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/array.prototype.findlastindex\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.findlastindex/-/array.prototype.findlastindex-1.2.3.tgz\",
      \"integrity\": \"sha512-LzLoiOMAxvy+Gd3BAq3B7VeIgPdo+Q8hthvKtXybMvRV0jrXfJM/t8mw7nNlpEcVlVUnCnM2KSX4XU5HmpodOA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"es-shim-unscopables\": \"^1.0.0\",
        \"get-intrinsic\": \"^1.2.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/array.prototype.flat\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.flat/-/array.prototype.flat-1.3.2.tgz\",
      \"integrity\": \"sha512-djYB+Zx2vLewY8RWlNCUdHjDXs2XOgm602S9E7P/UpHgfeHL00cRiIF+IN/G/aUJ7kGPb6yO/ErDI5V2s8iycA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"es-shim-unscopables\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/array.prototype.flatmap\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.flatmap/-/array.prototype.flatmap-1.3.2.tgz\",
      \"integrity\": \"sha512-Ewyx0c9PmpcsByhSW4r+9zDU7sGjFc86qf/kKtuSCRdhfbk0SNLLkaT5qvcHnRGgc5NP/ly/y+qkXkqONX54CQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"es-shim-unscopables\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/arraybuffer.prototype.slice\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/arraybuffer.prototype.slice/-/arraybuffer.prototype.slice-1.0.1.tgz\",
      \"integrity\": \"sha512-09x0ZWFEjj4WD8PDbykUwo3t9arLn8NIzmmYEJFpYekOAQjpkGSyrQhNoRTcwwcFRu+ycWF78QZ63oWTqSjBcw==\",
      \"dev\": true,
      \"dependencies\": {
        \"array-buffer-byte-length\": \"^1.0.0\",
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"get-intrinsic\": \"^1.2.1\",
        \"is-array-buffer\": \"^3.0.2\",
        \"is-shared-array-buffer\": \"^1.0.2\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/arrify\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/arrify/-/arrify-1.0.1.tgz\",
      \"integrity\": \"sha1-iYUI2iIm84DfkEcoRWhJwVAaSw0=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/assertion-error\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/assertion-error/-/assertion-error-1.1.0.tgz\",
      \"integrity\": \"sha512-jgsaNduz+ndvGyFt3uSuWqvy4lCnIJiovtouQN5JZHOKCS2QuhEdbcQHFhVksz2N2U9hXJo8odG7ETyWlEeuDw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/async-foreach\": {
      \"version\": \"0.1.3\",
      \"resolved\": \"https://registry.npmjs.org/async-foreach/-/async-foreach-0.1.3.tgz\",
      \"integrity\": \"sha1-NhIfhFwFeBct5Bmpfb6x0W7DRUI=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/available-typed-arrays\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/available-typed-arrays/-/available-typed-arrays-1.0.5.tgz\",
      \"integrity\": \"sha512-DMD0KiN46eipeziST1LPP/STfDU0sufISXmjSgvVsoU2tqxctQeASejWcfNtxYKqETM1UxQ8sp2OrSBWpHY6sw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/babel-loader\": {
      \"version\": \"9.1.3\",
      \"resolved\": \"https://registry.npmjs.org/babel-loader/-/babel-loader-9.1.3.tgz\",
      \"integrity\": \"sha512-xG3ST4DglodGf8qSwv0MdeWLhrDsw/32QMdTO5T1ZIp9gQur0HkCyFs7Awskr10JKXFXwpAhiCuYX5oGXnRGbw==\",
      \"dev\": true,
      \"dependencies\": {
        \"find-cache-dir\": \"^4.0.0\",
        \"schema-utils\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">= 14.15.0\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.12.0\",
        \"webpack\": \">=5\"
      }
    },
    \"node_modules/babel-loader/node_modules/ajv\": {
      \"version\": \"8.11.0\",
      \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.11.0.tgz\",
      \"integrity\": \"sha512-wGgprdCvMalC0BztXvitD2hC04YffAvtsUn93JbGXYLAtCUO4xd17mCCZQxUOItiBwZvJScWo8NIvQMQ71rdpg==\",
      \"dev\": true,
      \"dependencies\": {
        \"fast-deep-equal\": \"^3.1.1\",
        \"json-schema-traverse\": \"^1.0.0\",
        \"require-from-string\": \"^2.0.2\",
        \"uri-js\": \"^4.2.2\"
      },
      \"funding\": {
        \"type\": \"github\",
        \"url\": \"https://github.com/sponsors/epoberezkin\"
      }
    },
    \"node_modules/babel-loader/node_modules/ajv-keywords\": {
      \"version\": \"5.1.0\",
      \"resolved\": \"https://registry.npmjs.org/ajv-keywords/-/ajv-keywords-5.1.0.tgz\",
      \"integrity\": \"sha512-YCS/JNFAUyr5vAuhk1DWm1CBxRHW9LbJ2ozWeemrIqpbsqKjHVxYPyi5GC0rjZIT5JxJ3virVTS8wk4i/Z+krw==\",
      \"dev\": true,
      \"dependencies\": {
        \"fast-deep-equal\": \"^3.1.3\"
      },
      \"peerDependencies\": {
        \"ajv\": \"^8.8.2\"
      }
    },
    \"node_modules/babel-loader/node_modules/find-cache-dir\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-4.0.0.tgz\",
      \"integrity\": \"sha512-9ZonPT4ZAK4a+1pUPVPZJapbi7O5qbbJPdYw/NOQWZZbVLdDTYM3A4R9z/DpAM08IDaFGsvPgiGZ82WEwUDWjg==\",
      \"dev\": true,
      \"dependencies\": {
        \"common-path-prefix\": \"^3.0.0\",
        \"pkg-dir\": \"^7.0.0\"
      },
      \"engines\": {
        \"node\": \">=14.16\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-loader/node_modules/find-up\": {
      \"version\": \"6.3.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-6.3.0.tgz\",
      \"integrity\": \"sha512-v2ZsoEuVHYy8ZIlYqwPe/39Cy+cFDzp4dXPaxNvkEuouymu+2Jbz0PxpKarJHYJTmv2HWT3O382qY8l4jMWthw==\",
      \"dev\": true,
      \"dependencies\": {
        \"locate-path\": \"^7.1.0\",
        \"path-exists\": \"^5.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.20.0 || ^14.13.1 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-loader/node_modules/json-schema-traverse\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
      \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
      \"dev\": true
    },
    \"node_modules/babel-loader/node_modules/locate-path\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-7.2.0.tgz\",
      \"integrity\": \"sha512-gvVijfZvn7R+2qyPX8mAuKcFGDf6Nc61GdvGafQsHL0sBIxfKzA+usWn4GFC/bk+QdwPUD4kWFJLhElipq+0VA==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-locate\": \"^6.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.20.0 || ^14.13.1 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-loader/node_modules/p-limit\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-4.0.0.tgz\",
      \"integrity\": \"sha512-5b0R4txpzjPWVw/cXXUResoD4hb6U/x9BH08L7nw+GN1sezDzPdxeRvpc9c433fZhBan/wusjbCsqwqm4EIBIQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"yocto-queue\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.20.0 || ^14.13.1 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-loader/node_modules/p-locate\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-6.0.0.tgz\",
      \"integrity\": \"sha512-wPrq66Llhl7/4AGC6I+cqxT07LhXvWL08LNXz1fENOw0Ap4sRZZ/gZpTTJ5jpurzzzfS2W/Ge9BY3LgLjCShcw==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-limit\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.20.0 || ^14.13.1 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-loader/node_modules/path-exists\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-5.0.0.tgz\",
      \"integrity\": \"sha512-RjhtfwJOxzcFmNOi6ltcbcu4Iu+FL3zEj83dk4kAS+fVpTxXLO1b38RvJgT/0QwvV/L3aY9TAnyv0EOqW4GoMQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^12.20.0 || ^14.13.1 || >=16.0.0\"
      }
    },
    \"node_modules/babel-loader/node_modules/pkg-dir\": {
      \"version\": \"7.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-7.0.0.tgz\",
      \"integrity\": \"sha512-Ie9z/WINcxxLp27BKOCHGde4ITq9UklYKDzVo1nhk5sqGEXU3FpkwP5GM2voTGJkGd9B3Otl+Q4uwSOeSUtOBA==\",
      \"dev\": true,
      \"dependencies\": {
        \"find-up\": \"^6.3.0\"
      },
      \"engines\": {
        \"node\": \">=14.16\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-loader/node_modules/schema-utils\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-4.0.0.tgz\",
      \"integrity\": \"sha512-1edyXKgh6XnJsJSQ8mKWXnN/BVaIbFMLpouRUrXgVq7WYne5kw3MW7UPhO44uRXQSIpTSXoJbmrR2X0w9kUTyg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/json-schema\": \"^7.0.9\",
        \"ajv\": \"^8.8.0\",
        \"ajv-formats\": \"^2.1.1\",
        \"ajv-keywords\": \"^5.0.0\"
      },
      \"engines\": {
        \"node\": \">= 12.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      }
    },
    \"node_modules/babel-loader/node_modules/yocto-queue\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/yocto-queue/-/yocto-queue-1.0.0.tgz\",
      \"integrity\": \"sha512-9bnSc/HEW2uRy67wc+T8UwauLuPJVn28jb+GtJY16iiKWyvmYJRXVT4UamsAEGQfPohgr2q4Tq0sQbQlxTfi1g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=12.20\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/babel-plugin-polyfill-corejs2\": {
      \"version\": \"0.4.6\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-corejs2/-/babel-plugin-polyfill-corejs2-0.4.6.tgz\",
      \"integrity\": \"sha512-jhHiWVZIlnPbEUKSSNb9YoWcQGdlTLq7z1GHL4AjFxaoOUMuuEVJ+Y4pAaQUGOGk93YsVCKPbqbfw3m0SM6H8Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/compat-data\": \"^7.22.6\",
        \"@babel/helper-define-polyfill-provider\": \"^0.4.3\",
        \"semver\": \"^6.3.1\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.4.0 || ^8.0.0-0 <8.0.0\"
      }
    },
    \"node_modules/babel-plugin-polyfill-corejs2/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/babel-plugin-polyfill-corejs3\": {
      \"version\": \"0.8.5\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-corejs3/-/babel-plugin-polyfill-corejs3-0.8.5.tgz\",
      \"integrity\": \"sha512-Q6CdATeAvbScWPNLB8lzSO7fgUVBkQt6zLgNlfyeCr/EQaEQR+bWiBYYPYAFyE528BMjRhL+1QBMOI4jc/c5TA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-define-polyfill-provider\": \"^0.4.3\",
        \"core-js-compat\": \"^3.32.2\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.4.0 || ^8.0.0-0 <8.0.0\"
      }
    },
    \"node_modules/babel-plugin-polyfill-regenerator\": {
      \"version\": \"0.5.3\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-regenerator/-/babel-plugin-polyfill-regenerator-0.5.3.tgz\",
      \"integrity\": \"sha512-8sHeDOmXC8csczMrYEOf0UTNa4yE2SxV5JGeT/LP1n0OYVDUUFPxG9vdk2AlDlIit4t+Kf0xCtpgXPBwnn/9pw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/helper-define-polyfill-provider\": \"^0.4.3\"
      },
      \"peerDependencies\": {
        \"@babel/core\": \"^7.4.0 || ^8.0.0-0 <8.0.0\"
      }
    },
    \"node_modules/balanced-match\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
      \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
      \"dev\": true
    },
    \"node_modules/big.js\": {
      \"version\": \"5.2.2\",
      \"resolved\": \"https://registry.npmjs.org/big.js/-/big.js-5.2.2.tgz\",
      \"integrity\": \"sha512-vyL2OymJxmarO8gxMr0mhChsO9QGwhynfuu4+MHTAW6czfq9humCB7rKpUjDd9YUiDPU4mzpyupFSvOClAwbmQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/brace-expansion\": {
      \"version\": \"1.1.11\",
      \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-1.1.11.tgz\",
      \"integrity\": \"sha512-iCuPHDFgrHX7H2vEI/5xpz07zSHB00TpugqhmYtVmMO6518mCuRMoOYFldEBl0g187ufozdaHgWKcYFb61qGiA==\",
      \"dev\": true,
      \"dependencies\": {
        \"balanced-match\": \"^1.0.0\",
        \"concat-map\": \"0.0.1\"
      }
    },
    \"node_modules/browser-stdout\": {
      \"version\": \"1.3.1\",
      \"resolved\": \"https://registry.npmjs.org/browser-stdout/-/browser-stdout-1.3.1.tgz\",
      \"integrity\": \"sha512-qhAVI1+Av2X7qelOfAIYwXONood6XlZE/fXaBSmW/T5SzLAmCgzi+eiWE7fUvbHaeNBQH13UftjpXxsfLkMpgw==\",
      \"dev\": true
    },
    \"node_modules/browserslist\": {
      \"version\": \"4.22.1\",
      \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.22.1.tgz\",
      \"integrity\": \"sha512-FEVc202+2iuClEhZhrWy6ZiAcRLvNMyYcxZ8raemul1DYVOVdFsbqckWLdsixQZCpJlwe77Z3UTalE7jsjnKfQ==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"opencollective\",
          \"url\": \"https://opencollective.com/browserslist\"
        },
        {
          \"type\": \"tidelift\",
          \"url\": \"https://tidelift.com/funding/github/npm/browserslist\"
        },
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/ai\"
        }
      ],
      \"dependencies\": {
        \"caniuse-lite\": \"^1.0.30001541\",
        \"electron-to-chromium\": \"^1.4.535\",
        \"node-releases\": \"^2.0.13\",
        \"update-browserslist-db\": \"^1.0.13\"
      },
      \"bin\": {
        \"browserslist\": \"cli.js\"
      },
      \"engines\": {
        \"node\": \"^6 || ^7 || ^8 || ^9 || ^10 || ^11 || ^12 || >=13.7\"
      }
    },
    \"node_modules/buffer-from\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.1.tgz\",
      \"integrity\": \"sha512-MQcXEUbCKtEo7bhqEs6560Hyd4XaovZlO/k9V3hjVUF/zwW7KBVdSK4gIt/bzwS9MbR5qob+F5jusZsb0YQK2A==\",
      \"dev\": true
    },
    \"node_modules/cacache\": {
      \"version\": \"15.3.0\",
      \"resolved\": \"https://registry.npmjs.org/cacache/-/cacache-15.3.0.tgz\",
      \"integrity\": \"sha512-VVdYzXEn+cnbXpFgWs5hTT7OScegHVmLhJIR8Ufqk3iFD6A6j5iSX1KuBTfNEv4tdJWE2PzA6IVFtcLC7fN9wQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@npmcli/fs\": \"^1.0.0\",
        \"@npmcli/move-file\": \"^1.0.1\",
        \"chownr\": \"^2.0.0\",
        \"fs-minipass\": \"^2.0.0\",
        \"glob\": \"^7.1.4\",
        \"infer-owner\": \"^1.0.4\",
        \"lru-cache\": \"^6.0.0\",
        \"minipass\": \"^3.1.1\",
        \"minipass-collect\": \"^1.0.2\",
        \"minipass-flush\": \"^1.0.5\",
        \"minipass-pipeline\": \"^1.2.2\",
        \"mkdirp\": \"^1.0.3\",
        \"p-map\": \"^4.0.0\",
        \"promise-inflight\": \"^1.0.1\",
        \"rimraf\": \"^3.0.2\",
        \"ssri\": \"^8.0.1\",
        \"tar\": \"^6.0.2\",
        \"unique-filename\": \"^1.1.1\"
      },
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/cacache/node_modules/glob\": {
      \"version\": \"7.2.3\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.3.tgz\",
      \"integrity\": \"sha512-nFR0zLpU2YCaRxwoCJvL6UvCH2JFyFVIvwTLsIf21AuHlMskA1hhTdk+LlYJtOlYt9v6dvszD2BGRqBL+iQK9Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^3.1.1\",
        \"once\": \"^1.3.0\",
        \"path-is-absolute\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \"*\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/cacache/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/cacache/node_modules/p-map\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
      \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"aggregate-error\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/cacache/node_modules/rimraf\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
      \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.1.3\"
      },
      \"bin\": {
        \"rimraf\": \"bin.js\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/call-bind\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/call-bind/-/call-bind-1.0.2.tgz\",
      \"integrity\": \"sha512-7O+FbCihrB5WGbFYesctwmTKae6rOiIzmz1icreWJ+0aA7LJfuqhEso2T9ncpcFtzMQtzXf2QGGueWJGTYsqrA==\",
      \"dev\": true,
      \"dependencies\": {
        \"function-bind\": \"^1.1.1\",
        \"get-intrinsic\": \"^1.0.2\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/callsites\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/callsites/-/callsites-3.1.0.tgz\",
      \"integrity\": \"sha512-P8BjAsXvZS+VIDUI11hHCQEv74YT67YUi5JJFNWIqL235sBmjX4+qx9Muvls5ivyNENctx46xQLQ3aTuE7ssaQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/camelcase\": {
      \"version\": \"5.3.1\",
      \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
      \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/camelcase-keys\": {
      \"version\": \"6.2.2\",
      \"resolved\": \"https://registry.npmjs.org/camelcase-keys/-/camelcase-keys-6.2.2.tgz\",
      \"integrity\": \"sha512-YrwaA0vEKazPBkn0ipTiMpSajYDSe+KjQfrjhcBMxJt/znbvlHd8Pw/Vamaz5EB4Wfhs3SUR3Z9mwRu/P3s3Yg==\",
      \"dev\": true,
      \"dependencies\": {
        \"camelcase\": \"^5.3.1\",
        \"map-obj\": \"^4.0.0\",
        \"quick-lru\": \"^4.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/caniuse-lite\": {
      \"version\": \"1.0.30001547\",
      \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001547.tgz\",
      \"integrity\": \"sha512-W7CrtIModMAxobGhz8iXmDfuJiiKg1WADMO/9x7/CLNin5cpSbuBjooyoIUVB5eyCc36QuTVlkVa1iB2S5+/eA==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"opencollective\",
          \"url\": \"https://opencollective.com/browserslist\"
        },
        {
          \"type\": \"tidelift\",
          \"url\": \"https://tidelift.com/funding/github/npm/caniuse-lite\"
        },
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/ai\"
        }
      ]
    },
    \"node_modules/chai\": {
      \"version\": \"4.3.10\",
      \"resolved\": \"https://registry.npmjs.org/chai/-/chai-4.3.10.tgz\",
      \"integrity\": \"sha512-0UXG04VuVbruMUYbJ6JctvH0YnC/4q3/AkT18q4NaITo91CUm0liMS9VqzT9vZhVQ/1eqPanMWjBM+Juhfb/9g==\",
      \"dev\": true,
      \"dependencies\": {
        \"assertion-error\": \"^1.1.0\",
        \"check-error\": \"^1.0.3\",
        \"deep-eql\": \"^4.1.3\",
        \"get-func-name\": \"^2.0.2\",
        \"loupe\": \"^2.3.6\",
        \"pathval\": \"^1.1.1\",
        \"type-detect\": \"^4.0.8\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/chalk\": {
      \"version\": \"2.4.2\",
      \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
      \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-styles\": \"^3.2.1\",
        \"escape-string-regexp\": \"^1.0.5\",
        \"supports-color\": \"^5.3.0\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/check-error\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/check-error/-/check-error-1.0.3.tgz\",
      \"integrity\": \"sha512-iKEoDYaRmd1mxM90a2OEfWhjsjPpYPuQ+lMYsoxB126+t8fw7ySEO48nmDg5COTjxDI65/Y2OWpeEHk3ZOe8zg==\",
      \"dev\": true,
      \"dependencies\": {
        \"get-func-name\": \"^2.0.2\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/chokidar\": {
      \"version\": \"3.5.3\",
      \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-3.5.3.tgz\",
      \"integrity\": \"sha512-Dr3sfKRP6oTcjf2JmUmFJfeVMvXBdegxB0iVQ5eb2V10uFJUCAS8OByZdVAyVb8xXNz3GjjTgj9kLWsZTqE6kw==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"individual\",
          \"url\": \"https://paulmillr.com/funding/\"
        }
      ],
      \"dependencies\": {
        \"anymatch\": \"~3.1.2\",
        \"braces\": \"~3.0.2\",
        \"glob-parent\": \"~5.1.2\",
        \"is-binary-path\": \"~2.1.0\",
        \"is-glob\": \"~4.0.1\",
        \"normalize-path\": \"~3.0.0\",
        \"readdirp\": \"~3.6.0\"
      },
      \"engines\": {
        \"node\": \">= 8.10.0\"
      },
      \"optionalDependencies\": {
        \"fsevents\": \"~2.3.2\"
      }
    },
    \"node_modules/chokidar/node_modules/anymatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-3.1.2.tgz\",
      \"integrity\": \"sha512-P43ePfOAIupkguHUycrc4qJ9kz8ZiuOUijaETwX7THt0Y/GNK7v0aa8rY816xWjZ7rJdA5XdMcpVFTKMq+RvWg==\",
      \"dev\": true,
      \"dependencies\": {
        \"normalize-path\": \"^3.0.0\",
        \"picomatch\": \"^2.0.4\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/chokidar/node_modules/binary-extensions\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-2.2.0.tgz\",
      \"integrity\": \"sha512-jDctJ/IVQbZoJykoeHbhXpOlNBqGNcwXJKJog42E5HDPUwQTSdjCHdihjj0DlnheQ7blbT6dHOafNAiS8ooQKA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/chokidar/node_modules/braces\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
      \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
      \"dev\": true,
      \"dependencies\": {
        \"fill-range\": \"^7.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/chokidar/node_modules/fill-range\": {
      \"version\": \"7.0.1\",
      \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-7.0.1.tgz\",
      \"integrity\": \"sha512-qOo9F+dMUmC2Lcb4BbVvnKJxTPjCm+RRpe4gDuGrzkL7mEVl/djYSu2OdQ2Pa302N4oqkSg9ir6jaLWJ2USVpQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"to-regex-range\": \"^5.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/chokidar/node_modules/glob-parent\": {
      \"version\": \"5.1.2\",
      \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-5.1.2.tgz\",
      \"integrity\": \"sha512-AOIgSQCepiJYwP3ARnGx+5VnTu2HBYdzbGP45eLw1vr3zB3vZLeyed1sC9hnbcOc9/SrMyM5RPQrkGz4aS9Zow==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-glob\": \"^4.0.1\"
      },
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/chokidar/node_modules/is-binary-path\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-2.1.0.tgz\",
      \"integrity\": \"sha512-ZMERYes6pDydyuGidse7OsHxtbI7WVeUEozgR/g7rd0xUimYNlvZRE/K2MgZTjWy725IfelLeVcEM97mmtRGXw==\",
      \"dev\": true,
      \"dependencies\": {
        \"binary-extensions\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/chokidar/node_modules/is-number\": {
      \"version\": \"7.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
      \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.12.0\"
      }
    },
    \"node_modules/chokidar/node_modules/readdirp\": {
      \"version\": \"3.6.0\",
      \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-3.6.0.tgz\",
      \"integrity\": \"sha512-hOS089on8RduqdbhvQ5Z37A0ESjsqz6qnRcffsMU3495FuTdqSm+7bhJ29JvIOsBDEEnan5DPu9t3To9VRlMzA==\",
      \"dev\": true,
      \"dependencies\": {
        \"picomatch\": \"^2.2.1\"
      },
      \"engines\": {
        \"node\": \">=8.10.0\"
      }
    },
    \"node_modules/chokidar/node_modules/to-regex-range\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
      \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-number\": \"^7.0.0\"
      },
      \"engines\": {
        \"node\": \">=8.0\"
      }
    },
    \"node_modules/chownr\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/chownr/-/chownr-2.0.0.tgz\",
      \"integrity\": \"sha512-bIomtDF5KGpdogkLd9VspvFzk9KfpyyGlS8YFVZl7TGPBHL5snIOnxeshwVgPteQ9b4Eydl+pVbIyE1DcvCWgQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/chrome-trace-event\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/chrome-trace-event/-/chrome-trace-event-1.0.3.tgz\",
      \"integrity\": \"sha512-p3KULyQg4S7NIHixdwbGX+nFHkoBiA4YQmyWtjb8XngSKV124nJmRysgAeujbUVb15vh+RvFUfCPqU7rXk+hZg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.0\"
      }
    },
    \"node_modules/clean-stack\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-stack/-/clean-stack-2.2.0.tgz\",
      \"integrity\": \"sha512-4diC9HaTE+KRAMWhDhrGOECgWZxoevMc5TlkObMqNSsVU62PYzXZ/SMTjzyGAFF1YusgxGcSWTEXBhp0CPwQ1A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/clean-webpack-plugin\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-webpack-plugin/-/clean-webpack-plugin-4.0.0.tgz\",
      \"integrity\": \"sha512-WuWE1nyTNAyW5T7oNyys2EN0cfP2fdRxhxnIQWiAp0bMabPdHhoGxM8A6YL2GhqwgrPnnaemVE7nv5XJ2Fhh2w==\",
      \"dev\": true,
      \"dependencies\": {
        \"del\": \"^4.1.1\"
      },
      \"engines\": {
        \"node\": \">=10.0.0\"
      },
      \"peerDependencies\": {
        \"webpack\": \">=4.0.0 <6.0.0\"
      }
    },
    \"node_modules/cliui\": {
      \"version\": \"7.0.4\",
      \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-7.0.4.tgz\",
      \"integrity\": \"sha512-OcRE68cOsVMXp1Yvonl/fzkQOyjLSu/8bhPDfQt0e0/Eb283TKP20Fs2MqoPsr9SwA595rRCA+QMzYc9nBP+JQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"string-width\": \"^4.2.0\",
        \"strip-ansi\": \"^6.0.0\",
        \"wrap-ansi\": \"^7.0.0\"
      }
    },
    \"node_modules/cliui/node_modules/ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/cliui/node_modules/strip-ansi\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
      \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-regex\": \"^5.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/clone-deep\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/clone-deep/-/clone-deep-4.0.1.tgz\",
      \"integrity\": \"sha512-neHB9xuzh/wk0dIHweyAXv2aPGZIVk3pLMe+/RNzINf17fe0OG96QroktYAUm7SM1PBnzTabaLboqqxDyMU+SQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-plain-object\": \"^2.0.4\",
        \"kind-of\": \"^6.0.2\",
        \"shallow-clone\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/color-convert\": {
      \"version\": \"1.9.3\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-1.9.3.tgz\",
      \"integrity\": \"sha512-QfAUtd+vFdAtFQcC8CCyYt1fYWxSqAiK2cSD6zDB8N3cpsEBAvRxp9zOGg6G/SHHJYAT88/az/IuDGALsNVbGg==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-name\": \"1.1.3\"
      }
    },
    \"node_modules/color-name\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.3.tgz\",
      \"integrity\": \"sha512-72fSenhMw2HZMTVHeCA9KCmpEIbzWiQsjN+BHcBbS9vr1mtt+vJjPdksIBNUmKAW8TFUDPJK5SUU3QhE9NEXDw==\",
      \"dev\": true
    },
    \"node_modules/color-support\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/color-support/-/color-support-1.1.3.tgz\",
      \"integrity\": \"sha512-qiBjkpbMLO/HL68y+lh4q0/O1MZFj2RX6X/KmMa3+gJD3z+WwI1ZzDHysvqHGS3mP6mznPckpXmw1nI9cJjyRg==\",
      \"dev\": true,
      \"bin\": {
        \"color-support\": \"bin.js\"
      }
    },
    \"node_modules/colorette\": {
      \"version\": \"2.0.19\",
      \"resolved\": \"https://registry.npmjs.org/colorette/-/colorette-2.0.19.tgz\",
      \"integrity\": \"sha512-3tlv/dIP7FWvj3BsbHrGLJ6l/oKh1O3TcgBqMn+yyCagOxc23fyzDS6HypQbgxWbkpDnf52p1LuR4eWDQ/K9WQ==\",
      \"dev\": true
    },
    \"node_modules/commander\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-4.1.1.tgz\",
      \"integrity\": \"sha512-NOKm8xhkzAjzFx8B2v5OAHT+u5pRQc2UCa2Vq9jYL/31o2wi9mxBA7LIFs3sV5VSC49z6pEhfbMULvShKj26WA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/common-path-prefix\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/common-path-prefix/-/common-path-prefix-3.0.0.tgz\",
      \"integrity\": \"sha512-QE33hToZseCH3jS0qN96O/bSh3kaw/h+Tq7ngyY9eWDUnTlTNUyqfqvCXioLe5Na5jFsL78ra/wuBU4iuEgd4w==\",
      \"dev\": true
    },
    \"node_modules/commondir\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/commondir/-/commondir-1.0.1.tgz\",
      \"integrity\": \"sha1-3dgA2gxmEnOTzKWVDqloo6rxJTs=\",
      \"dev\": true
    },
    \"node_modules/concat-map\": {
      \"version\": \"0.0.1\",
      \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
      \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
      \"dev\": true
    },
    \"node_modules/confusing-browser-globals\": {
      \"version\": \"1.0.10\",
      \"resolved\": \"https://registry.npmjs.org/confusing-browser-globals/-/confusing-browser-globals-1.0.10.tgz\",
      \"integrity\": \"sha512-gNld/3lySHwuhaVluJUKLePYirM3QNCKzVxqAdhJII9/WXKVX5PURzMVJspS1jTslSqjeuG4KMVTSouit5YPHA==\",
      \"dev\": true
    },
    \"node_modules/console-control-strings\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/console-control-strings/-/console-control-strings-1.1.0.tgz\",
      \"integrity\": \"sha512-ty/fTekppD2fIwRvnZAVdeOiGd1c7YXEixbgJTNzqcxJWKQnjJ/V1bNEEE6hygpM3WjwHFUVK6HTjWSzV4a8sQ==\",
      \"dev\": true
    },
    \"node_modules/convert-source-map\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-2.0.0.tgz\",
      \"integrity\": \"sha512-Kvp459HrV2FEJ1CAsi1Ku+MY3kasH19TFykTz2xWmMeq6bk2NU3XXvfJ+Q61m0xktWwt+1HSYf3JZsTms3aRJg==\",
      \"dev\": true
    },
    \"node_modules/core-js\": {
      \"version\": \"3.30.2\",
      \"resolved\": \"https://registry.npmjs.org/core-js/-/core-js-3.30.2.tgz\",
      \"integrity\": \"sha512-uBJiDmwqsbJCWHAwjrx3cvjbMXP7xD72Dmsn5LOJpiRmE3WbBbN5rCqQ2Qh6Ek6/eOrjlWngEynBWo4VxerQhg==\",
      \"dev\": true,
      \"hasInstallScript\": true,
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/core-js\"
      }
    },
    \"node_modules/core-js-compat\": {
      \"version\": \"3.33.0\",
      \"resolved\": \"https://registry.npmjs.org/core-js-compat/-/core-js-compat-3.33.0.tgz\",
      \"integrity\": \"sha512-0w4LcLXsVEuNkIqwjjf9rjCoPhK8uqA4tMRh4Ge26vfLtUutshn+aRJU21I9LCJlh2QQHfisNToLjw1XEJLTWw==\",
      \"dev\": true,
      \"dependencies\": {
        \"browserslist\": \"^4.22.1\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/core-js\"
      }
    },
    \"node_modules/core-util-is\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
      \"integrity\": \"sha1-tf1UIgqivFq1eqtxQMlAdUUDwac=\",
      \"dev\": true
    },
    \"node_modules/cross-spawn\": {
      \"version\": \"7.0.3\",
      \"resolved\": \"https://registry.npmjs.org/cross-spawn/-/cross-spawn-7.0.3.tgz\",
      \"integrity\": \"sha512-iRDPJKUPVEND7dHPO8rkbOnPpyDygcDFtWjpeWNCgy8WP2rXcxXL8TskReQl6OrB2G7+UJrags1q15Fudc7G6w==\",
      \"dev\": true,
      \"dependencies\": {
        \"path-key\": \"^3.1.0\",
        \"shebang-command\": \"^2.0.0\",
        \"which\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/css-loader\": {
      \"version\": \"6.8.1\",
      \"resolved\": \"https://registry.npmjs.org/css-loader/-/css-loader-6.8.1.tgz\",
      \"integrity\": \"sha512-xDAXtEVGlD0gJ07iclwWVkLoZOpEvAWaSyf6W18S2pOC//K8+qUDIx8IIT3D+HjnmkJPQeesOPv5aiUaJsCM2g==\",
      \"dev\": true,
      \"dependencies\": {
        \"icss-utils\": \"^5.1.0\",
        \"postcss\": \"^8.4.21\",
        \"postcss-modules-extract-imports\": \"^3.0.0\",
        \"postcss-modules-local-by-default\": \"^4.0.3\",
        \"postcss-modules-scope\": \"^3.0.0\",
        \"postcss-modules-values\": \"^4.0.0\",
        \"postcss-value-parser\": \"^4.2.0\",
        \"semver\": \"^7.3.8\"
      },
      \"engines\": {
        \"node\": \">= 12.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"webpack\": \"^5.0.0\"
      }
    },
    \"node_modules/css-loader/node_modules/semver\": {
      \"version\": \"7.3.8\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.8.tgz\",
      \"integrity\": \"sha512-NB1ctGL5rlHrPJtFDVIVzTyQylMLu9N9VICA6HSFJo8MCGVTMW6gfpicwKmmK/dAjTOrqu5l63JJOpDSrAis3A==\",
      \"dev\": true,
      \"dependencies\": {
        \"lru-cache\": \"^6.0.0\"
      },
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/cssesc\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/cssesc/-/cssesc-3.0.0.tgz\",
      \"integrity\": \"sha512-/Tb/JcjK111nNScGob5MNtsntNM1aCNUDipB/TkwZFhyDrrE47SOx/18wF2bbjgc3ZzCSKW1T5nt5EbFoAz/Vg==\",
      \"dev\": true,
      \"bin\": {
        \"cssesc\": \"bin/cssesc\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/debug\": {
      \"version\": \"3.2.7\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
      \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"^2.1.1\"
      }
    },
    \"node_modules/decamelize\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
      \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/decamelize-keys\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize-keys/-/decamelize-keys-1.1.0.tgz\",
      \"integrity\": \"sha1-0XGoeTMlKAfrPLYdwcFEXQeN8tk=\",
      \"dev\": true,
      \"dependencies\": {
        \"decamelize\": \"^1.1.0\",
        \"map-obj\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/decamelize-keys/node_modules/map-obj\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-1.0.1.tgz\",
      \"integrity\": \"sha1-2TPOuSBdgr3PSIb2dCvcK03qFG0=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/deep-eql\": {
      \"version\": \"4.1.3\",
      \"resolved\": \"https://registry.npmjs.org/deep-eql/-/deep-eql-4.1.3.tgz\",
      \"integrity\": \"sha512-WaEtAOpRA1MQ0eohqZjpGD8zdI0Ovsm8mmFhaDN8dvDZzyoUMcYDnf5Y6iu7HTXxf8JDS23qWa4a+hKCDyOPzw==\",
      \"dev\": true,
      \"dependencies\": {
        \"type-detect\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/deep-is\": {
      \"version\": \"0.1.4\",
      \"resolved\": \"https://registry.npmjs.org/deep-is/-/deep-is-0.1.4.tgz\",
      \"integrity\": \"sha512-oIPzksmTg4/MriiaYGO+okXDT7ztn/w3Eptv/+gSIdMdKsJo0u4CfYNFJPy+4SKMuCqGw2wxnA+URMg3t8a/bQ==\",
      \"dev\": true
    },
    \"node_modules/define-properties\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.2.0.tgz\",
      \"integrity\": \"sha512-xvqAVKGfT1+UAvPwKTVw/njhdQ8ZhXK4lI0bCIuCMrp2up9nPnaDftrLtmpTazqd1o+UY4zgzU+avtMbDP+ldA==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-property-descriptors\": \"^1.0.0\",
        \"object-keys\": \"^1.1.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/del\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/del/-/del-4.1.1.tgz\",
      \"integrity\": \"sha512-QwGuEUouP2kVwQenAsOof5Fv8K9t3D8Ca8NxcXKrIpEHjTXK5J2nXLdP+ALI1cgv8wj7KuwBhTwBkOZSJKM5XQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/glob\": \"^7.1.1\",
        \"globby\": \"^6.1.0\",
        \"is-path-cwd\": \"^2.0.0\",
        \"is-path-in-cwd\": \"^2.0.0\",
        \"p-map\": \"^2.0.0\",
        \"pify\": \"^4.0.1\",
        \"rimraf\": \"^2.6.3\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/del/node_modules/pify\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
      \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/delegates\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/delegates/-/delegates-1.0.0.tgz\",
      \"integrity\": \"sha512-bd2L678uiWATM6m5Z1VzNCErI3jiGzt6HGY8OVICs40JQq/HALfbyNJmp0UDakEY4pMMaN0Ly5om/B1VI/+xfQ==\",
      \"dev\": true
    },
    \"node_modules/depd\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/depd/-/depd-1.1.2.tgz\",
      \"integrity\": \"sha512-7emPTl6Dpo6JRXOXjLRxck+FlLRX5847cLKEn00PLAgc3g2hTZZgr+e4c2v6QpSmLeFP3n5yUo7ft6avBK/5jQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.6\"
      }
    },
    \"node_modules/doctrine\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/doctrine/-/doctrine-3.0.0.tgz\",
      \"integrity\": \"sha512-yS+Q5i3hBf7GBkd4KG8a7eBNNWNGLTaEwwYWUijIYM7zrlYDM0BFXHjjPWlWZ1Rg7UaddZeIDmi9jF3HmqiQ2w==\",
      \"dev\": true,
      \"dependencies\": {
        \"esutils\": \"^2.0.2\"
      },
      \"engines\": {
        \"node\": \">=6.0.0\"
      }
    },
    \"node_modules/electron-to-chromium\": {
      \"version\": \"1.4.551\",
      \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.551.tgz\",
      \"integrity\": \"sha512-/Ng/W/kFv7wdEHYzxdK7Cv0BHEGSkSB3M0Ssl8Ndr1eMiYeas/+Mv4cNaDqamqWx6nd2uQZfPz6g25z25M/sdw==\",
      \"dev\": true
    },
    \"node_modules/emoji-regex\": {
      \"version\": \"8.0.0\",
      \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-8.0.0.tgz\",
      \"integrity\": \"sha512-MSjYzcWNOA0ewAHpz0MxpYFvwg6yjy1NG3xteoqz644VCo/RPgnr1/GGt+ic3iJTzQ8Eu3TdM14SawnVUmGE6A==\",
      \"dev\": true
    },
    \"node_modules/emojis-list\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/emojis-list/-/emojis-list-3.0.0.tgz\",
      \"integrity\": \"sha512-/kyM18EfinwXZbno9FyUGeFh87KC8HRQBQGildHZbEuRyWFOmv1U10o9BBp8XVZDVNNuQKyIGIu5ZYAAXJ0V2Q==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 4\"
      }
    },
    \"node_modules/encoding\": {
      \"version\": \"0.1.13\",
      \"resolved\": \"https://registry.npmjs.org/encoding/-/encoding-0.1.13.tgz\",
      \"integrity\": \"sha512-ETBauow1T35Y/WZMkio9jiM0Z5xjHHmJ4XmjZOq1l/dXz3lr2sRn87nJy20RupqSh1F2m3HHPSp8ShIPQJrJ3A==\",
      \"dev\": true,
      \"optional\": true,
      \"dependencies\": {
        \"iconv-lite\": \"^0.6.2\"
      }
    },
    \"node_modules/encoding/node_modules/iconv-lite\": {
      \"version\": \"0.6.3\",
      \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.6.3.tgz\",
      \"integrity\": \"sha512-4fCk79wshMdzMp2rH06qWrJE4iolqLhCUH+OiuIgU++RB0+94NlDL81atO7GX55uUKueo0txHNtvEyI6D7WdMw==\",
      \"dev\": true,
      \"optional\": true,
      \"dependencies\": {
        \"safer-buffer\": \">= 2.1.2 < 3.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/enhanced-resolve\": {
      \"version\": \"5.15.0\",
      \"resolved\": \"https://registry.npmjs.org/enhanced-resolve/-/enhanced-resolve-5.15.0.tgz\",
      \"integrity\": \"sha512-LXYT42KJ7lpIKECr2mAXIaMldcNCh/7E0KBKOu4KSfkHmP+mZmSs+8V5gBAqisWBy0OO4W5Oyys0GO1Y8KtdKg==\",
      \"dev\": true,
      \"dependencies\": {
        \"graceful-fs\": \"^4.2.4\",
        \"tapable\": \"^2.2.0\"
      },
      \"engines\": {
        \"node\": \">=10.13.0\"
      }
    },
    \"node_modules/env-paths\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/env-paths/-/env-paths-2.2.1.tgz\",
      \"integrity\": \"sha512-+h1lkLKhZMTYjog1VEpJNG7NZJWcuc2DDk/qsqSTRRCOXiLjeQ1d1/udrUGhqMxUgAlwKNZ0cf2uqan5GLuS2A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/envinfo\": {
      \"version\": \"7.8.1\",
      \"resolved\": \"https://registry.npmjs.org/envinfo/-/envinfo-7.8.1.tgz\",
      \"integrity\": \"sha512-/o+BXHmB7ocbHEAs6F2EnG0ogybVVUdkRunTT2glZU9XAaGmhqskrvKwqXuDfNjEO0LZKWdejEEpnq8aM0tOaw==\",
      \"dev\": true,
      \"bin\": {
        \"envinfo\": \"dist/cli.js\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/err-code\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/err-code/-/err-code-2.0.3.tgz\",
      \"integrity\": \"sha512-2bmlRpNKBxT/CRmPOlyISQpNj+qSeYvcym/uT0Jx2bMOlKLtSy1ZmLuVxSEKKyor/N5yhvp/ZiG1oE3DEYMSFA==\",
      \"dev\": true
    },
    \"node_modules/error-ex\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/error-ex/-/error-ex-1.3.2.tgz\",
      \"integrity\": \"sha512-7dFHNmqeFSEt2ZBsCriorKnn3Z2pj+fd9kmI6QoWw4//DL+icEBfc0U7qJCisqrTsKTjw4fNFy2pW9OqStD84g==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-arrayish\": \"^0.2.1\"
      }
    },
    \"node_modules/es-abstract\": {
      \"version\": \"1.22.1\",
      \"resolved\": \"https://registry.npmjs.org/es-abstract/-/es-abstract-1.22.1.tgz\",
      \"integrity\": \"sha512-ioRRcXMO6OFyRpyzV3kE1IIBd4WG5/kltnzdxSCqoP8CMGs/Li+M1uF5o7lOkZVFjDs+NLesthnF66Pg/0q0Lw==\",
      \"dev\": true,
      \"dependencies\": {
        \"array-buffer-byte-length\": \"^1.0.0\",
        \"arraybuffer.prototype.slice\": \"^1.0.1\",
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"es-set-tostringtag\": \"^2.0.1\",
        \"es-to-primitive\": \"^1.2.1\",
        \"function.prototype.name\": \"^1.1.5\",
        \"get-intrinsic\": \"^1.2.1\",
        \"get-symbol-description\": \"^1.0.0\",
        \"globalthis\": \"^1.0.3\",
        \"gopd\": \"^1.0.1\",
        \"has\": \"^1.0.3\",
        \"has-property-descriptors\": \"^1.0.0\",
        \"has-proto\": \"^1.0.1\",
        \"has-symbols\": \"^1.0.3\",
        \"internal-slot\": \"^1.0.5\",
        \"is-array-buffer\": \"^3.0.2\",
        \"is-callable\": \"^1.2.7\",
        \"is-negative-zero\": \"^2.0.2\",
        \"is-regex\": \"^1.1.4\",
        \"is-shared-array-buffer\": \"^1.0.2\",
        \"is-string\": \"^1.0.7\",
        \"is-typed-array\": \"^1.1.10\",
        \"is-weakref\": \"^1.0.2\",
        \"object-inspect\": \"^1.12.3\",
        \"object-keys\": \"^1.1.1\",
        \"object.assign\": \"^4.1.4\",
        \"regexp.prototype.flags\": \"^1.5.0\",
        \"safe-array-concat\": \"^1.0.0\",
        \"safe-regex-test\": \"^1.0.0\",
        \"string.prototype.trim\": \"^1.2.7\",
        \"string.prototype.trimend\": \"^1.0.6\",
        \"string.prototype.trimstart\": \"^1.0.6\",
        \"typed-array-buffer\": \"^1.0.0\",
        \"typed-array-byte-length\": \"^1.0.0\",
        \"typed-array-byte-offset\": \"^1.0.0\",
        \"typed-array-length\": \"^1.0.4\",
        \"unbox-primitive\": \"^1.0.2\",
        \"which-typed-array\": \"^1.1.10\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/es-module-lexer\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/es-module-lexer/-/es-module-lexer-1.2.1.tgz\",
      \"integrity\": \"sha512-9978wrXM50Y4rTMmW5kXIC09ZdXQZqkE4mxhwkd8VbzsGkXGPgV4zWuqQJgCEzYngdo2dYDa0l8xhX4fkSwJSg==\",
      \"dev\": true
    },
    \"node_modules/es-set-tostringtag\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/es-set-tostringtag/-/es-set-tostringtag-2.0.1.tgz\",
      \"integrity\": \"sha512-g3OMbtlwY3QewlqAiMLI47KywjWZoEytKr8pf6iTC8uJq5bIAH52Z9pnQ8pVL6whrCto53JZDuUIsifGeLorTg==\",
      \"dev\": true,
      \"dependencies\": {
        \"get-intrinsic\": \"^1.1.3\",
        \"has\": \"^1.0.3\",
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      }
    },
    \"node_modules/es-shim-unscopables\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/es-shim-unscopables/-/es-shim-unscopables-1.0.2.tgz\",
      \"integrity\": \"sha512-J3yBRXCzDu4ULnQwxyToo/OjdMx6akgVC7K6few0a7F/0wLtmKKN7I73AH5T2836UuXRqN7Qg+IIUw/+YJksRw==\",
      \"dev\": true,
      \"dependencies\": {
        \"hasown\": \"^2.0.0\"
      }
    },
    \"node_modules/es-to-primitive\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/es-to-primitive/-/es-to-primitive-1.2.1.tgz\",
      \"integrity\": \"sha512-QCOllgZJtaUo9miYBcLChTUaHNjJF3PYs1VidD7AwiEj1kYxKeQTctLAezAOH5ZKRH0g2IgPn6KwB4IT8iRpvA==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-callable\": \"^1.1.4\",
        \"is-date-object\": \"^1.0.1\",
        \"is-symbol\": \"^1.0.2\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/escalade\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/escalade/-/escalade-3.1.1.tgz\",
      \"integrity\": \"sha512-k0er2gUkLf8O0zKJiAhmkTnJlTvINGv7ygDNPbeIsX/TJjGJZHuh9B2UxbsaEkmlEo9MfhrSzmhIlhRlI2GXnw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/escape-string-regexp\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
      \"integrity\": \"sha512-vbRorB5FUQWvla16U8R/qgaFIya2qGzwDrNmCZuYKrbdSUMG6I1ZCGQRefkRVhuOkIGVne7BQ35DSfo1qvJqFg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.8.0\"
      }
    },
    \"node_modules/eslint\": {
      \"version\": \"8.54.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint/-/eslint-8.54.0.tgz\",
      \"integrity\": \"sha512-NY0DfAkM8BIZDVl6PgSa1ttZbx3xHgJzSNJKYcQglem6CppHyMhRIQkBVSSMaSRnLhig3jsDbEzOjwCVt4AmmA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@eslint-community/eslint-utils\": \"^4.2.0\",
        \"@eslint-community/regexpp\": \"^4.6.1\",
        \"@eslint/eslintrc\": \"^2.1.3\",
        \"@eslint/js\": \"8.54.0\",
        \"@humanwhocodes/config-array\": \"^0.11.13\",
        \"@humanwhocodes/module-importer\": \"^1.0.1\",
        \"@nodelib/fs.walk\": \"^1.2.8\",
        \"@ungap/structured-clone\": \"^1.2.0\",
        \"ajv\": \"^6.12.4\",
        \"chalk\": \"^4.0.0\",
        \"cross-spawn\": \"^7.0.2\",
        \"debug\": \"^4.3.2\",
        \"doctrine\": \"^3.0.0\",
        \"escape-string-regexp\": \"^4.0.0\",
        \"eslint-scope\": \"^7.2.2\",
        \"eslint-visitor-keys\": \"^3.4.3\",
        \"espree\": \"^9.6.1\",
        \"esquery\": \"^1.4.2\",
        \"esutils\": \"^2.0.2\",
        \"fast-deep-equal\": \"^3.1.3\",
        \"file-entry-cache\": \"^6.0.1\",
        \"find-up\": \"^5.0.0\",
        \"glob-parent\": \"^6.0.2\",
        \"globals\": \"^13.19.0\",
        \"graphemer\": \"^1.4.0\",
        \"ignore\": \"^5.2.0\",
        \"imurmurhash\": \"^0.1.4\",
        \"is-glob\": \"^4.0.0\",
        \"is-path-inside\": \"^3.0.3\",
        \"js-yaml\": \"^4.1.0\",
        \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
        \"levn\": \"^0.4.1\",
        \"lodash.merge\": \"^4.6.2\",
        \"minimatch\": \"^3.1.2\",
        \"natural-compare\": \"^1.4.0\",
        \"optionator\": \"^0.9.3\",
        \"strip-ansi\": \"^6.0.1\",
        \"text-table\": \"^0.2.0\"
      },
      \"bin\": {
        \"eslint\": \"bin/eslint.js\"
      },
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://opencollective.com/eslint\"
      }
    },
    \"node_modules/eslint-config-airbnb-base\": {
      \"version\": \"15.0.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-config-airbnb-base/-/eslint-config-airbnb-base-15.0.0.tgz\",
      \"integrity\": \"sha512-xaX3z4ZZIcFLvh2oUNvcX5oEofXda7giYmuplVxoOg5A7EXJMrUyqRgR+mhDhPK8LZ4PttFOBvCYDbX3sUoUig==\",
      \"dev\": true,
      \"dependencies\": {
        \"confusing-browser-globals\": \"^1.0.10\",
        \"object.assign\": \"^4.1.2\",
        \"object.entries\": \"^1.1.5\",
        \"semver\": \"^6.3.0\"
      },
      \"engines\": {
        \"node\": \"^10.12.0 || >=12.0.0\"
      },
      \"peerDependencies\": {
        \"eslint\": \"^7.32.0 || ^8.2.0\",
        \"eslint-plugin-import\": \"^2.25.2\"
      }
    },
    \"node_modules/eslint-config-airbnb-base/node_modules/semver\": {
      \"version\": \"6.3.0\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
      \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/eslint-config-prestashop\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-config-prestashop/-/eslint-config-prestashop-0.2.1.tgz\",
      \"integrity\": \"sha512-OMk55c88NWKyjFH//uv0w9kEHEfzGFWic0ibDYqsJokJ9pxuWJwIgnxZi0Koh/cue7xCsBNp4IKQUmaI/vkbpw==\",
      \"dev\": true,
      \"peerDependencies\": {
        \"eslint-config-airbnb-base\": \"^15.0.0\",
        \"eslint-plugin-import\": \"^2.25.3\"
      }
    },
    \"node_modules/eslint-import-resolver-node\": {
      \"version\": \"0.3.9\",
      \"resolved\": \"https://registry.npmjs.org/eslint-import-resolver-node/-/eslint-import-resolver-node-0.3.9.tgz\",
      \"integrity\": \"sha512-WFj2isz22JahUv+B788TlO3N6zL3nNJGU8CcZbPZvVEkBPaJdCV4vy5wyghty5ROFbCRnm132v8BScu5/1BQ8g==\",
      \"dev\": true,
      \"dependencies\": {
        \"debug\": \"^3.2.7\",
        \"is-core-module\": \"^2.13.0\",
        \"resolve\": \"^1.22.4\"
      }
    },
    \"node_modules/eslint-module-utils\": {
      \"version\": \"2.8.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-module-utils/-/eslint-module-utils-2.8.0.tgz\",
      \"integrity\": \"sha512-aWajIYfsqCKRDgUfjEXNN/JlrzauMuSEy5sbd7WXbtW3EH6A6MpwEh42c7qD+MqQo9QMJ6fWLAeIJynx0g6OAw==\",
      \"dev\": true,
      \"dependencies\": {
        \"debug\": \"^3.2.7\"
      },
      \"engines\": {
        \"node\": \">=4\"
      },
      \"peerDependenciesMeta\": {
        \"eslint\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/eslint-plugin-import\": {
      \"version\": \"2.29.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-plugin-import/-/eslint-plugin-import-2.29.0.tgz\",
      \"integrity\": \"sha512-QPOO5NO6Odv5lpoTkddtutccQjysJuFxoPS7fAHO+9m9udNHvTCPSAMW9zGAYj8lAIdr40I8yPCdUYrncXtrwg==\",
      \"dev\": true,
      \"dependencies\": {
        \"array-includes\": \"^3.1.7\",
        \"array.prototype.findlastindex\": \"^1.2.3\",
        \"array.prototype.flat\": \"^1.3.2\",
        \"array.prototype.flatmap\": \"^1.3.2\",
        \"debug\": \"^3.2.7\",
        \"doctrine\": \"^2.1.0\",
        \"eslint-import-resolver-node\": \"^0.3.9\",
        \"eslint-module-utils\": \"^2.8.0\",
        \"hasown\": \"^2.0.0\",
        \"is-core-module\": \"^2.13.1\",
        \"is-glob\": \"^4.0.3\",
        \"minimatch\": \"^3.1.2\",
        \"object.fromentries\": \"^2.0.7\",
        \"object.groupby\": \"^1.0.1\",
        \"object.values\": \"^1.1.7\",
        \"semver\": \"^6.3.1\",
        \"tsconfig-paths\": \"^3.14.2\"
      },
      \"engines\": {
        \"node\": \">=4\"
      },
      \"peerDependencies\": {
        \"eslint\": \"^2 || ^3 || ^4 || ^5 || ^6 || ^7.2.0 || ^8\"
      }
    },
    \"node_modules/eslint-plugin-import/node_modules/doctrine\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/doctrine/-/doctrine-2.1.0.tgz\",
      \"integrity\": \"sha512-35mSku4ZXK0vfCuHEDAwt55dg2jNajHZ1odvF+8SSr82EsZY4QmXfuWso8oEd8zRhVObSN18aM0CjSdoBX7zIw==\",
      \"dev\": true,
      \"dependencies\": {
        \"esutils\": \"^2.0.2\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/eslint-plugin-import/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/eslint-plugin-import/node_modules/semver\": {
      \"version\": \"6.3.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
      \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      }
    },
    \"node_modules/eslint-scope\": {
      \"version\": \"5.1.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-5.1.1.tgz\",
      \"integrity\": \"sha512-2NxwbF/hZ0KpepYN0cNbo+FN6XoK7GaHlQhgx/hIZl6Va0bF45RQOOwhLIy8lQDbuCiadSLCBnH2CFYquit5bw==\",
      \"dev\": true,
      \"dependencies\": {
        \"esrecurse\": \"^4.3.0\",
        \"estraverse\": \"^4.1.1\"
      },
      \"engines\": {
        \"node\": \">=8.0.0\"
      }
    },
    \"node_modules/eslint-visitor-keys\": {
      \"version\": \"3.4.3\",
      \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-3.4.3.tgz\",
      \"integrity\": \"sha512-wpc+LXeiyiisxPlEkUzU6svyS1frIO3Mgxj1fdy7Pm8Ygzguax2N3Fa/D/ag1WqbOprdI+uY6wMUl8/a2G+iag==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://opencollective.com/eslint\"
      }
    },
    \"node_modules/eslint/node_modules/ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/eslint/node_modules/ansi-styles\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
      \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-convert\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/ansi-styles?sponsor=1\"
      }
    },
    \"node_modules/eslint/node_modules/chalk\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-4.1.2.tgz\",
      \"integrity\": \"sha512-oKnbhFyRIXpUuez8iBMmyEa4nbj4IOQyuhc/wy9kY7/WVPcwIO9VA668Pu8RkO7+0G76SLROeyw9CpQ061i4mA==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-styles\": \"^4.1.0\",
        \"supports-color\": \"^7.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/chalk?sponsor=1\"
      }
    },
    \"node_modules/eslint/node_modules/color-convert\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
      \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-name\": \"~1.1.4\"
      },
      \"engines\": {
        \"node\": \">=7.0.0\"
      }
    },
    \"node_modules/eslint/node_modules/color-name\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
      \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
      \"dev\": true
    },
    \"node_modules/eslint/node_modules/debug\": {
      \"version\": \"4.3.3\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.3.tgz\",
      \"integrity\": \"sha512-/zxw5+vh1Tfv+4Qn7a5nsbcJKPaSvCDhojn6FEl9vupwK2VCSDtEiEtqr8DFtzYFOdz63LBkxec7DYuc2jon6Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/eslint/node_modules/escape-string-regexp\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-4.0.0.tgz\",
      \"integrity\": \"sha512-TtpcNJ3XAzx3Gq8sWRzJaVajRs0uVxA2YAkdb1jm2YkPz4G6egUFAyA3n5vtEIZefPk5Wa4UXbKuS5fKkJWdgA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/eslint/node_modules/eslint-scope\": {
      \"version\": \"7.2.2\",
      \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-7.2.2.tgz\",
      \"integrity\": \"sha512-dOt21O7lTMhDM+X9mB4GX+DZrZtCUJPL/wlcTqxyrx5IvO0IYtILdtrQGQp+8n5S0gwSVmOf9NQrjMOgfQZlIg==\",
      \"dev\": true,
      \"dependencies\": {
        \"esrecurse\": \"^4.3.0\",
        \"estraverse\": \"^5.2.0\"
      },
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://opencollective.com/eslint\"
      }
    },
    \"node_modules/eslint/node_modules/estraverse\": {
      \"version\": \"5.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
      \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4.0\"
      }
    },
    \"node_modules/eslint/node_modules/find-up\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-5.0.0.tgz\",
      \"integrity\": \"sha512-78/PXT1wlLLDgTzDs7sjq9hzz0vXD+zn+7wypEe4fXQxCmdmqfGsEPQxmiCSQI3ajFV91bVSsvNtrJRiW6nGng==\",
      \"dev\": true,
      \"dependencies\": {
        \"locate-path\": \"^6.0.0\",
        \"path-exists\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/eslint/node_modules/glob-parent\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-6.0.2.tgz\",
      \"integrity\": \"sha512-XxwI8EOhVQgWp6iDL+3b0r86f4d6AX6zSU55HfB4ydCEuXLXc5FcYeOu+nnGftS4TEju/11rt4KJPTMgbfmv4A==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-glob\": \"^4.0.3\"
      },
      \"engines\": {
        \"node\": \">=10.13.0\"
      }
    },
    \"node_modules/eslint/node_modules/globals\": {
      \"version\": \"13.19.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-13.19.0.tgz\",
      \"integrity\": \"sha512-dkQ957uSRWHw7CFXLUtUHQI3g3aWApYhfNR2O6jn/907riyTYKVBmxYVROkBcY614FSSeSJh7Xm7SrUWCxvJMQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"type-fest\": \"^0.20.2\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/eslint/node_modules/has-flag\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
      \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/eslint/node_modules/is-path-inside\": {
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-3.0.3.tgz\",
      \"integrity\": \"sha512-Fd4gABb+ycGAmKou8eMftCupSir5lRxqf4aD/vd0cD2qc4HL07OjCeuHMr8Ro4CoMaeCKDB0/ECBOVWjTwUvPQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/eslint/node_modules/locate-path\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-6.0.0.tgz\",
      \"integrity\": \"sha512-iPZK6eYjbxRu3uB4/WZ3EsEIMJFMqAoopl3R+zuq0UjcAm/MO6KCweDgPfP3elTztoKP3KtnVHxTn2NHBSDVUw==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-locate\": \"^5.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/eslint/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/eslint/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/eslint/node_modules/p-limit\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-3.1.0.tgz\",
      \"integrity\": \"sha512-TYOanM3wGwNGsZN2cVTYPArw454xnXj5qmWF1bEoAc4+cU/ol7GVh7odevjp1FNHduHc3KZMcFduxU5Xc6uJRQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"yocto-queue\": \"^0.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/eslint/node_modules/p-locate\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-5.0.0.tgz\",
      \"integrity\": \"sha512-LaNjtRWUBY++zB5nE/NwcaoMylSPk+S+ZHNB1TzdbMJMny6dynpAGt7X/tl/QYq3TIeE6nxHppbo2LGymrG5Pw==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-limit\": \"^3.0.2\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/eslint/node_modules/path-exists\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
      \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/eslint/node_modules/strip-ansi\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
      \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-regex\": \"^5.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/eslint/node_modules/supports-color\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
      \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-flag\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/espree\": {
      \"version\": \"9.6.1\",
      \"resolved\": \"https://registry.npmjs.org/espree/-/espree-9.6.1.tgz\",
      \"integrity\": \"sha512-oruZaFkjorTpF32kDSI5/75ViwGeZginGGy2NoOSg3Q9bnwlnmDm4HLnkl0RE3n+njDXR037aY1+x58Z/zFdwQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"acorn\": \"^8.9.0\",
        \"acorn-jsx\": \"^5.3.2\",
        \"eslint-visitor-keys\": \"^3.4.1\"
      },
      \"engines\": {
        \"node\": \"^12.22.0 || ^14.17.0 || >=16.0.0\"
      },
      \"funding\": {
        \"url\": \"https://opencollective.com/eslint\"
      }
    },
    \"node_modules/esquery\": {
      \"version\": \"1.4.2\",
      \"resolved\": \"https://registry.npmjs.org/esquery/-/esquery-1.4.2.tgz\",
      \"integrity\": \"sha512-JVSoLdTlTDkmjFmab7H/9SL9qGSyjElT3myyKp7krqjVFQCDLmj1QFaCLRFBszBKI0XVZaiiXvuPIX3ZwHe1Ng==\",
      \"dev\": true,
      \"dependencies\": {
        \"estraverse\": \"^5.1.0\"
      },
      \"engines\": {
        \"node\": \">=0.10\"
      }
    },
    \"node_modules/esquery/node_modules/estraverse\": {
      \"version\": \"5.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
      \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4.0\"
      }
    },
    \"node_modules/esrecurse\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/esrecurse/-/esrecurse-4.3.0.tgz\",
      \"integrity\": \"sha512-KmfKL3b6G+RXvP8N1vr3Tq1kL/oCFgn2NYXEtqP8/L3pKapUA4G8cFVaoF3SU323CD4XypR/ffioHmkti6/Tag==\",
      \"dev\": true,
      \"dependencies\": {
        \"estraverse\": \"^5.2.0\"
      },
      \"engines\": {
        \"node\": \">=4.0\"
      }
    },
    \"node_modules/esrecurse/node_modules/estraverse\": {
      \"version\": \"5.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
      \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4.0\"
      }
    },
    \"node_modules/estraverse\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.2.0.tgz\",
      \"integrity\": \"sha1-De4/7TH81GlhjOc0IJn8GvoL2xM=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/esutils\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/esutils/-/esutils-2.0.2.tgz\",
      \"integrity\": \"sha1-Cr9PHKpbyx96nYrMbepPqqBLrJs=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/events\": {
      \"version\": \"3.3.0\",
      \"resolved\": \"https://registry.npmjs.org/events/-/events-3.3.0.tgz\",
      \"integrity\": \"sha512-mQw+2fkQbALzQ7V0MY0IqdnXNOeTtP4r0lN9z7AAawCXgqea7bDii20AYrIBrFd/Hx0M2Ocz6S111CaFkUcb0Q==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.8.x\"
      }
    },
    \"node_modules/fast-deep-equal\": {
      \"version\": \"3.1.3\",
      \"resolved\": \"https://registry.npmjs.org/fast-deep-equal/-/fast-deep-equal-3.1.3.tgz\",
      \"integrity\": \"sha512-f3qQ9oQy9j2AhBe/H9VC91wLmKBCCU/gDOnKNAYG5hswO7BLKj09Hc5HYNz9cGI++xlpDCIgDaitVs03ATR84Q==\",
      \"dev\": true
    },
    \"node_modules/fast-json-stable-stringify\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.0.0.tgz\",
      \"integrity\": \"sha1-1RQsDK7msRifh9OnYREGT4bIu/I=\",
      \"dev\": true
    },
    \"node_modules/fast-levenshtein\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/fast-levenshtein/-/fast-levenshtein-2.0.6.tgz\",
      \"integrity\": \"sha512-DCXu6Ifhqcks7TZKY3Hxp3y6qphY5SJZmrWMDrKcERSOXWQdMhU9Ig/PYrzyw/ul9jOIyh0N4M0tbC5hodg8dw==\",
      \"dev\": true
    },
    \"node_modules/fastest-levenshtein\": {
      \"version\": \"1.0.16\",
      \"resolved\": \"https://registry.npmjs.org/fastest-levenshtein/-/fastest-levenshtein-1.0.16.tgz\",
      \"integrity\": \"sha512-eRnCtTTtGZFpQCwhJiUOuxPQWRXVKYDn0b2PeHfXL6/Zi53SLAzAHfVhVWK2AryC/WH05kGfxhFIPvTF0SXQzg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 4.9.1\"
      }
    },
    \"node_modules/fastq\": {
      \"version\": \"1.13.0\",
      \"resolved\": \"https://registry.npmjs.org/fastq/-/fastq-1.13.0.tgz\",
      \"integrity\": \"sha512-YpkpUnK8od0o1hmeSc7UUs/eB/vIPWJYjKck2QKIzAf71Vm1AAQ3EbuZB3g2JIy+pg+ERD0vqI79KyZiB2e2Nw==\",
      \"dev\": true,
      \"dependencies\": {
        \"reusify\": \"^1.0.4\"
      }
    },
    \"node_modules/file-entry-cache\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/file-entry-cache/-/file-entry-cache-6.0.1.tgz\",
      \"integrity\": \"sha512-7Gps/XWymbLk2QLYK4NzpMOrYjMhdIxXuIvy2QBsLE6ljuodKvdkWs/cpyJJ3CVIVpH0Oi1Hvg1ovbMzLdFBBg==\",
      \"dev\": true,
      \"dependencies\": {
        \"flat-cache\": \"^3.0.4\"
      },
      \"engines\": {
        \"node\": \"^10.12.0 || >=12.0.0\"
      }
    },
    \"node_modules/find-cache-dir\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-2.1.0.tgz\",
      \"integrity\": \"sha512-Tq6PixE0w/VMFfCgbONnkiQIVol/JJL7nRMi20fqzA4NRs9AfeqMGeRdPi3wIhYkxjeBaWh2rxwapn5Tu3IqOQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"commondir\": \"^1.0.1\",
        \"make-dir\": \"^2.0.0\",
        \"pkg-dir\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/find-up\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
      \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
      \"dev\": true,
      \"dependencies\": {
        \"locate-path\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/flat\": {
      \"version\": \"5.0.2\",
      \"resolved\": \"https://registry.npmjs.org/flat/-/flat-5.0.2.tgz\",
      \"integrity\": \"sha512-b6suED+5/3rTpUBdG1gupIl8MPFCAMA0QXwmljLhvCUKcUvdE4gWky9zpuGCcXHOsz4J9wPGNWq6OKpmIzz3hQ==\",
      \"dev\": true,
      \"bin\": {
        \"flat\": \"cli.js\"
      }
    },
    \"node_modules/flat-cache\": {
      \"version\": \"3.0.4\",
      \"resolved\": \"https://registry.npmjs.org/flat-cache/-/flat-cache-3.0.4.tgz\",
      \"integrity\": \"sha512-dm9s5Pw7Jc0GvMYbshN6zchCA9RgQlzzEZX3vylR9IqFfS8XciblUXOKfW6SiuJ0e13eDYZoZV5wdrev7P3Nwg==\",
      \"dev\": true,
      \"dependencies\": {
        \"flatted\": \"^3.1.0\",
        \"rimraf\": \"^3.0.2\"
      },
      \"engines\": {
        \"node\": \"^10.12.0 || >=12.0.0\"
      }
    },
    \"node_modules/flat-cache/node_modules/rimraf\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
      \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.1.3\"
      },
      \"bin\": {
        \"rimraf\": \"bin.js\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/flatted\": {
      \"version\": \"3.2.4\",
      \"resolved\": \"https://registry.npmjs.org/flatted/-/flatted-3.2.4.tgz\",
      \"integrity\": \"sha512-8/sOawo8tJ4QOBX8YlQBMxL8+RLZfxMQOif9o0KUKTNTjMYElWPE0r/m5VNFxTRd0NSw8qSy8dajrwX4RYI1Hw==\",
      \"dev\": true
    },
    \"node_modules/for-each\": {
      \"version\": \"0.3.3\",
      \"resolved\": \"https://registry.npmjs.org/for-each/-/for-each-0.3.3.tgz\",
      \"integrity\": \"sha512-jqYfLp7mo9vIyQf8ykW2v7A+2N4QjeCeI5+Dz9XraiO1ign81wjiH7Fb9vSOWvQfNtmSa4H2RoQTrrXivdUZmw==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-callable\": \"^1.1.3\"
      }
    },
    \"node_modules/fs-minipass\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fs-minipass/-/fs-minipass-2.1.0.tgz\",
      \"integrity\": \"sha512-V/JgOLFCS+R6Vcq0slCuaeWEdNC3ouDlJMNIsacH2VtALiu9mV4LPrHc5cDl8k5aw6J8jwgWWpiTo5RYhmIzvg==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/fs-readdir-recursive\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fs-readdir-recursive/-/fs-readdir-recursive-1.1.0.tgz\",
      \"integrity\": \"sha512-GNanXlVr2pf02+sPN40XN8HG+ePaNcvM0q5mZBd668Obwb0yD5GiUbZOFgwn8kGMY6I3mdyDJzieUy3PTYyTRA==\",
      \"dev\": true
    },
    \"node_modules/fs.realpath\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
      \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
      \"dev\": true
    },
    \"node_modules/fsevents\": {
      \"version\": \"2.3.2\",
      \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-2.3.2.tgz\",
      \"integrity\": \"sha512-xiqMQR4xAeHTuB9uWm+fFRcIOgKBMiOBP+eXiyT7jsgVCq1bkVygt00oASowB7EdtpOHaaPgKt812P9ab+DDKA==\",
      \"dev\": true,
      \"hasInstallScript\": true,
      \"optional\": true,
      \"os\": [
        \"darwin\"
      ],
      \"engines\": {
        \"node\": \"^8.16.0 || ^10.6.0 || >=11.0.0\"
      }
    },
    \"node_modules/function-bind\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.2.tgz\",
      \"integrity\": \"sha512-7XHNxH7qX9xG5mIwxkhumTox/MIRNcOgDrxWsMt2pAr23WHp6MrRlN7FBSFpCpr+oVO0F744iUgR82nJMfG2SA==\",
      \"dev\": true,
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/function.prototype.name\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/function.prototype.name/-/function.prototype.name-1.1.5.tgz\",
      \"integrity\": \"sha512-uN7m/BzVKQnCUF/iW8jYea67v++2u7m5UgENbHRtdDVclOUP+FMPlCNdmk0h/ysGyo2tavMJEDqJAkJdRa1vMA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.0\",
        \"functions-have-names\": \"^1.2.2\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/functions-have-names\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/functions-have-names/-/functions-have-names-1.2.3.tgz\",
      \"integrity\": \"sha512-xckBUXyTIqT97tq2x2AMb+g163b5JFysYk0x4qxNFwbfQkmNZoiRHb6sPzI9/QV33WeuvVYBUIiD4NzNIyqaRQ==\",
      \"dev\": true,
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/gaze\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/gaze/-/gaze-1.1.3.tgz\",
      \"integrity\": \"sha512-BRdNm8hbWzFzWHERTrejLqwHDfS4GibPoq5wjTPIoJHoBtKGPg3xAFfxmM+9ztbXelxcf2hwQcaz1PtmFeue8g==\",
      \"dev\": true,
      \"dependencies\": {
        \"globule\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 4.0.0\"
      }
    },
    \"node_modules/gensync\": {
      \"version\": \"1.0.0-beta.2\",
      \"resolved\": \"https://registry.npmjs.org/gensync/-/gensync-1.0.0-beta.2.tgz\",
      \"integrity\": \"sha512-3hN7NaskYvMDLQY55gnW3NQ+mesEAepTqlg+VEbj7zzqEMBVNhzcGYYeqFo/TlYz6eQiFcp1HcsCZO+nGgS8zg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/get-caller-file\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
      \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"6.* || 8.* || >= 10.*\"
      }
    },
    \"node_modules/get-func-name\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/get-func-name/-/get-func-name-2.0.2.tgz\",
      \"integrity\": \"sha512-8vXOvuE167CtIc3OyItco7N/dpRtBbYOsPsXCz7X/PMnlGjYjSGuZJgM1Y7mmew7BKf9BqvLX2tnOVy1BBUsxQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/get-intrinsic\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/get-intrinsic/-/get-intrinsic-1.2.1.tgz\",
      \"integrity\": \"sha512-2DcsyfABl+gVHEfCOaTrWgyt+tb6MSEGmKq+kI5HwLbIYgjgmMcV8KQ41uaKz1xxUcn9tJtgFbQUEVcEbd0FYw==\",
      \"dev\": true,
      \"dependencies\": {
        \"function-bind\": \"^1.1.1\",
        \"has\": \"^1.0.3\",
        \"has-proto\": \"^1.0.1\",
        \"has-symbols\": \"^1.0.3\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/get-stdin\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/get-stdin/-/get-stdin-4.0.1.tgz\",
      \"integrity\": \"sha1-uWjGsKBDhDJJAui/Gl3zJXmkUP4=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/get-symbol-description\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/get-symbol-description/-/get-symbol-description-1.0.0.tgz\",
      \"integrity\": \"sha512-2EmdH1YvIQiZpltCNgkuiUnyukzxM/R6NDJX31Ke3BG1Nq5b0S2PhX59UKi9vZpPDQVdqn+1IcaAwnzTT5vCjw==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.1.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/glob\": {
      \"version\": \"7.1.3\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.3.tgz\",
      \"integrity\": \"sha512-vcfuiIxogLV4DlGBHIUOwI0IbrJ8HWPc4MU7HzviGeNho/UJDfi6B5p3sHeWIQ0KGIU0Jpxi5ZHxemQfLkkAwQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^3.0.4\",
        \"once\": \"^1.3.0\",
        \"path-is-absolute\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/globals\": {
      \"version\": \"11.11.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-11.11.0.tgz\",
      \"integrity\": \"sha512-WHq43gS+6ufNOEqlrDBxVEbb8ntfXrfAUU2ZOpCxrBdGKW3gyv8mCxAfIBD0DroPKGrJ2eSsXsLtY9MPntsyTw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/globalthis\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/globalthis/-/globalthis-1.0.3.tgz\",
      \"integrity\": \"sha512-sFdI5LyBiNTHjRd7cGPWapiHWMOXKyuBNX/cWJ3NfzrZQVa8GI/8cofCl74AOVqq9W5kNmguTIzJ/1s2gyI9wA==\",
      \"dev\": true,
      \"dependencies\": {
        \"define-properties\": \"^1.1.3\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/globby\": {
      \"version\": \"6.1.0\",
      \"resolved\": \"https://registry.npmjs.org/globby/-/globby-6.1.0.tgz\",
      \"integrity\": \"sha1-9abXDoOV4hyFj7BInWTfAkJNUGw=\",
      \"dev\": true,
      \"dependencies\": {
        \"array-union\": \"^1.0.1\",
        \"glob\": \"^7.0.3\",
        \"object-assign\": \"^4.0.1\",
        \"pify\": \"^2.0.0\",
        \"pinkie-promise\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/globule\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/globule/-/globule-1.3.2.tgz\",
      \"integrity\": \"sha512-7IDTQTIu2xzXkT+6mlluidnWo+BypnbSoEVVQCGfzqnl5Ik8d3e1d4wycb8Rj9tWW+Z39uPWsdlquqiqPCd/pA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"~7.1.1\",
        \"lodash\": \"~4.17.10\",
        \"minimatch\": \"~3.0.2\"
      },
      \"engines\": {
        \"node\": \">= 0.10\"
      }
    },
    \"node_modules/gopd\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/gopd/-/gopd-1.0.1.tgz\",
      \"integrity\": \"sha512-d65bNlIadxvpb/A2abVdlqKqV563juRnZ1Wtk6s1sIR8uNsXR70xqIzVqxVf1eTqDunwT2MkczEeaezCKTZhwA==\",
      \"dev\": true,
      \"dependencies\": {
        \"get-intrinsic\": \"^1.1.3\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/graceful-fs\": {
      \"version\": \"4.2.9\",
      \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.9.tgz\",
      \"integrity\": \"sha512-NtNxqUcXgpW2iMrfqSfR73Glt39K+BLwWsPs94yR63v45T0Wbej7eRmL5cWfwEgqXnmjQp3zaJTshdRW/qC2ZQ==\",
      \"dev\": true
    },
    \"node_modules/graphemer\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/graphemer/-/graphemer-1.4.0.tgz\",
      \"integrity\": \"sha512-EtKwoO6kxCL9WO5xipiHTZlSzBm7WLT627TqC/uVRd0HKmq8NXyebnNYxDoBi7wt8eTWrUrKXCOVaFq9x1kgag==\",
      \"dev\": true
    },
    \"node_modules/hard-rejection\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/hard-rejection/-/hard-rejection-2.1.0.tgz\",
      \"integrity\": \"sha512-VIZB+ibDhx7ObhAe7OVtoEbuP4h/MuOTHJ+J8h/eBXotJYl0fBgR72xDFCKgIh22OJZIOVNxBMWuhAr10r8HdA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/has\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/has/-/has-1.0.3.tgz\",
      \"integrity\": \"sha512-f2dvO0VU6Oej7RkWJGrehjbzMAjFp5/VKPp5tTpWIV4JHHZK1/BxbFRtf/siA2SWTe09caDmVtYYzWEIbBS4zw==\",
      \"dev\": true,
      \"dependencies\": {
        \"function-bind\": \"^1.1.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4.0\"
      }
    },
    \"node_modules/has-bigints\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/has-bigints/-/has-bigints-1.0.2.tgz\",
      \"integrity\": \"sha512-tSvCKtBr9lkF0Ex0aQiP9N+OpV4zi2r/Nee5VkRDbaqv35RLYMzbwQfFSZZH0kR+Rd6302UJZ2p/bJCEoR3VoQ==\",
      \"dev\": true,
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/has-flag\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-3.0.0.tgz\",
      \"integrity\": \"sha512-sKJf1+ceQBr4SMkvQnBDNDtf4TXpVhVGateu0t918bl30FnbE2m4vNLX+VWe/dpjlb+HugGYzW7uQXH98HPEYw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/has-property-descriptors\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-property-descriptors/-/has-property-descriptors-1.0.0.tgz\",
      \"integrity\": \"sha512-62DVLZGoiEBDHQyqG4w9xCuZ7eJEwNmJRWw2VY84Oedb7WFcA27fiEVe8oUQx9hAUJ4ekurquucTGwsyO1XGdQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"get-intrinsic\": \"^1.1.1\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/has-proto\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/has-proto/-/has-proto-1.0.1.tgz\",
      \"integrity\": \"sha512-7qE+iP+O+bgF9clE5+UoBFzE65mlBiVj3tKCrlNQ0Ogwm0BjpT/gK4SlLYDMybDh5I3TCTKnPPa0oMG7JDYrhg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/has-symbols\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
      \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/has-tostringtag\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-tostringtag/-/has-tostringtag-1.0.0.tgz\",
      \"integrity\": \"sha512-kFjcSNhnlGV1kyoGk7OXKSawH5JOb/LzUc5w9B02hOTO0dfFRjbHQKvg1d6cf3HbeUmtU9VbbV3qzZ2Teh97WQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-symbols\": \"^1.0.2\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/has-unicode\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/has-unicode/-/has-unicode-2.0.1.tgz\",
      \"integrity\": \"sha512-8Rf9Y83NBReMnx0gFzA8JImQACstCYWUplepDa9xprwwtmgEZUF0h/i5xSA625zB/I37EtrswSST6OXxwaaIJQ==\",
      \"dev\": true
    },
    \"node_modules/hasown\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/hasown/-/hasown-2.0.0.tgz\",
      \"integrity\": \"sha512-vUptKVTpIJhcczKBbgnS+RtcuYMB8+oNzPK2/Hp3hanz8JmpATdmmgLgSaadVREkDm+e2giHwY3ZRkyjSIDDFA==\",
      \"dev\": true,
      \"dependencies\": {
        \"function-bind\": \"^1.1.2\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      }
    },
    \"node_modules/he\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/he/-/he-1.2.0.tgz\",
      \"integrity\": \"sha512-F/1DnUGPopORZi0ni+CvrCgHQ5FyEAHRLSApuYWMmrbSwoN2Mn/7k+Gl38gJnR7yyDZk6WLXwiGod1JOWNDKGw==\",
      \"dev\": true,
      \"bin\": {
        \"he\": \"bin/he\"
      }
    },
    \"node_modules/homedir-polyfill\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
      \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
      \"dev\": true,
      \"dependencies\": {
        \"parse-passwd\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/http-cache-semantics\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/http-cache-semantics/-/http-cache-semantics-4.1.1.tgz\",
      \"integrity\": \"sha512-er295DKPVsV82j5kw1Gjt+ADA/XYHsajl82cGNQG2eyoPkvgUhX+nDIyelzhIWbbsXP39EHcI6l5tYs2FYqYXQ==\",
      \"dev\": true
    },
    \"node_modules/http-proxy-agent\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/http-proxy-agent/-/http-proxy-agent-4.0.1.tgz\",
      \"integrity\": \"sha512-k0zdNgqWTGA6aeIRVpvfVob4fL52dTfaehylg0Y4UvSySvOq/Y+BOyPrgpUrA7HylqvU8vIZGsRuXmspskV0Tg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@tootallnate/once\": \"1\",
        \"agent-base\": \"6\",
        \"debug\": \"4\"
      },
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/http-proxy-agent/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/http-proxy-agent/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/https-proxy-agent\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/https-proxy-agent/-/https-proxy-agent-5.0.1.tgz\",
      \"integrity\": \"sha512-dFcAjpTQFgoLMzC2VwU+C/CbS7uRL0lWmxDITmqm7C+7F0Odmj6s9l6alZc6AELXhrnggM2CeWSXHGOdX2YtwA==\",
      \"dev\": true,
      \"dependencies\": {
        \"agent-base\": \"6\",
        \"debug\": \"4\"
      },
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/https-proxy-agent/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/https-proxy-agent/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/humanize-ms\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/humanize-ms/-/humanize-ms-1.2.1.tgz\",
      \"integrity\": \"sha512-Fl70vYtsAFb/C06PTS9dZBo7ihau+Tu/DNCk/OyHhea07S+aeMWpFFkUaXRa8fI+ScZbEI8dfSxwY7gxZ9SAVQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"^2.0.0\"
      }
    },
    \"node_modules/icss-utils\": {
      \"version\": \"5.1.0\",
      \"resolved\": \"https://registry.npmjs.org/icss-utils/-/icss-utils-5.1.0.tgz\",
      \"integrity\": \"sha512-soFhflCVWLfRNOPU3iv5Z9VUdT44xFRbzjLsEzSr5AQmgqPMTHdU3PMT1Cf1ssx8fLNJDA1juftYl+PUcv3MqA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^10 || ^12 || >= 14\"
      },
      \"peerDependencies\": {
        \"postcss\": \"^8.1.0\"
      }
    },
    \"node_modules/ignore\": {
      \"version\": \"5.2.4\",
      \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-5.2.4.tgz\",
      \"integrity\": \"sha512-MAb38BcSbH0eHNBxn7ql2NH/kX33OkB3lZ1BNdh7ENeRChHTYsTvWrMubiIAMNS2llXEEgZ1MUOBtXChP3kaFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 4\"
      }
    },
    \"node_modules/import-fresh\": {
      \"version\": \"3.3.0\",
      \"resolved\": \"https://registry.npmjs.org/import-fresh/-/import-fresh-3.3.0.tgz\",
      \"integrity\": \"sha512-veYYhQa+D1QBKznvhUHxb8faxlrwUnxseDAbAp457E0wLNio2bOSKnjYDhMj+YiAq61xrMGhQk9iXVk5FzgQMw==\",
      \"dev\": true,
      \"dependencies\": {
        \"parent-module\": \"^1.0.0\",
        \"resolve-from\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/import-fresh/node_modules/resolve-from\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-from/-/resolve-from-4.0.0.tgz\",
      \"integrity\": \"sha512-pb/MYmXstAkysRFx8piNI1tGFNQIFA3vkE3Gq4EuA1dF6gHp/+vgZqsCGJapvy8N3Q+4o7FwvquPJcnZ7RYy4g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/import-local\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/import-local/-/import-local-3.0.2.tgz\",
      \"integrity\": \"sha512-vjL3+w0oulAVZ0hBHnxa/Nm5TAurf9YLQJDhqRZyqb+VKGOB6LU8t9H1Nr5CIo16vh9XfJTOoHwU0B71S557gA==\",
      \"dev\": true,
      \"dependencies\": {
        \"pkg-dir\": \"^4.2.0\",
        \"resolve-cwd\": \"^3.0.0\"
      },
      \"bin\": {
        \"import-local-fixture\": \"fixtures/cli.js\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/import-local/node_modules/find-up\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
      \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
      \"dev\": true,
      \"dependencies\": {
        \"locate-path\": \"^5.0.0\",
        \"path-exists\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/import-local/node_modules/locate-path\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-5.0.0.tgz\",
      \"integrity\": \"sha512-t7hw9pI+WvuwNJXwk5zVHpyhIqzg2qTlklJOf0mVxGSbe3Fp2VieZcduNYjaLDoy6p9uGpQEGWG87WpMKlNq8g==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-locate\": \"^4.1.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/import-local/node_modules/p-locate\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
      \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-limit\": \"^2.2.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/import-local/node_modules/path-exists\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
      \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/import-local/node_modules/pkg-dir\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-4.2.0.tgz\",
      \"integrity\": \"sha512-HRDzbaKjC+AOWVXxAU/x54COGeIv9eb+6CkDSQoNTt4XyWoIJvuPsXizxu/Fr23EiekbtZwmh1IcIG/l/a10GQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"find-up\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/imurmurhash\": {
      \"version\": \"0.1.4\",
      \"resolved\": \"https://registry.npmjs.org/imurmurhash/-/imurmurhash-0.1.4.tgz\",
      \"integrity\": \"sha1-khi5srkoojixPcT7a21XbyMUU+o=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.8.19\"
      }
    },
    \"node_modules/indent-string\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-4.0.0.tgz\",
      \"integrity\": \"sha512-EdDDZu4A2OyIK7Lr/2zG+w5jmbuk1DVBnEwREQvBzspBJkCEbRa8GxU1lghYcaGJCnRWibjDXlq779X1/y5xwg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/infer-owner\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/infer-owner/-/infer-owner-1.0.4.tgz\",
      \"integrity\": \"sha512-IClj+Xz94+d7irH5qRyfJonOdfTzuDaifE6ZPWfx0N0+/ATZCbuTPq2prFl526urkQd90WyUKIh1DfBQ2hMz9A==\",
      \"dev\": true
    },
    \"node_modules/inflight\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/inflight/-/inflight-1.0.6.tgz\",
      \"integrity\": \"sha1-Sb1jMdfQLQwJvJEKEHW6gWW1bfk=\",
      \"dev\": true,
      \"dependencies\": {
        \"once\": \"^1.3.0\",
        \"wrappy\": \"1\"
      }
    },
    \"node_modules/inherits\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
      \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
      \"dev\": true
    },
    \"node_modules/internal-slot\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/internal-slot/-/internal-slot-1.0.5.tgz\",
      \"integrity\": \"sha512-Y+R5hJrzs52QCG2laLn4udYVnxsfny9CpOhNhUvk/SSSVyF6T27FzRbF0sroPidSu3X8oEAkOn2K804mjpt6UQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"get-intrinsic\": \"^1.2.0\",
        \"has\": \"^1.0.3\",
        \"side-channel\": \"^1.0.4\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      }
    },
    \"node_modules/interpret\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-2.2.0.tgz\",
      \"integrity\": \"sha512-Ju0Bz/cEia55xDwUWEa8+olFpCiQoypjnQySseKtmjNrnps3P+xfpUmGr90T7yjlVJmOtybRvPXhKMbHr+fWnw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.10\"
      }
    },
    \"node_modules/ip\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/ip/-/ip-2.0.0.tgz\",
      \"integrity\": \"sha512-WKa+XuLG1A1R0UWhl2+1XQSi+fZWMsYKffMZTTYsiZaUD8k2yDAj5atimTUD2TZkyCkNEeYE5NhFZmupOGtjYQ==\",
      \"dev\": true
    },
    \"node_modules/is-array-buffer\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-array-buffer/-/is-array-buffer-3.0.2.tgz\",
      \"integrity\": \"sha512-y+FyyR/w8vfIRq4eQcM1EYgSTnmHXPqaF+IgzgraytCFq5Xh8lllDVmAZolPJiZttZLeFSINPYMaEJ7/vWUa1w==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.2.0\",
        \"is-typed-array\": \"^1.1.10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-arrayish\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/is-arrayish/-/is-arrayish-0.2.1.tgz\",
      \"integrity\": \"sha1-d8mYQFJ6qOyxqLppe4BkWnqSap0=\",
      \"dev\": true
    },
    \"node_modules/is-bigint\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/is-bigint/-/is-bigint-1.0.4.tgz\",
      \"integrity\": \"sha512-zB9CruMamjym81i2JZ3UMn54PKGsQzsJeo6xvN3HJJ4CAsQNB6iRutp2To77OfCNuoxspsIhzaPoO1zyCEhFOg==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-bigints\": \"^1.0.1\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-boolean-object\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/is-boolean-object/-/is-boolean-object-1.1.2.tgz\",
      \"integrity\": \"sha512-gDYaKHJmnj4aWxyj6YHyXVpdQawtVLHU5cb+eztPGczf6cjuTdwve5ZIEfgXqH4e57An1D1AKf8CZ3kYrQRqYA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-callable\": {
      \"version\": \"1.2.7\",
      \"resolved\": \"https://registry.npmjs.org/is-callable/-/is-callable-1.2.7.tgz\",
      \"integrity\": \"sha512-1BC0BVFhS/p0qtw6enp8e+8OD0UrK0oFLztSjNzhcKA3WDuJxxAPXzPuPtKkjEY9UUoEWlX/8fgKeu2S8i9JTA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-core-module\": {
      \"version\": \"2.13.1\",
      \"resolved\": \"https://registry.npmjs.org/is-core-module/-/is-core-module-2.13.1.tgz\",
      \"integrity\": \"sha512-hHrIjvZsftOsvKSn2TRYl63zvxsgE0K+0mYMoH6gD4omR5IWB2KynivBQczo3+wF1cCkjzvptnI9Q0sPU66ilw==\",
      \"dev\": true,
      \"dependencies\": {
        \"hasown\": \"^2.0.0\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-date-object\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-date-object/-/is-date-object-1.0.2.tgz\",
      \"integrity\": \"sha512-USlDT524woQ08aoZFzh3/Z6ch9Y/EWXEHQ/AaRN0SkKq4t2Jw2R2339tSXmwuVoY7LLlBCbOIlx2myP/L5zk0g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-extglob\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
      \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/is-fullwidth-code-point\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-3.0.0.tgz\",
      \"integrity\": \"sha512-zymm5+u+sCsSWyD9qNaejV3DFvhCKclKdizYaJUuHA83RLjb7nSuGnddCHGv0hk+KY7BMAlsWeK4Ueg6EV6XQg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/is-glob\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-4.0.3.tgz\",
      \"integrity\": \"sha512-xelSayHH36ZgE7ZWhli7pW34hNbNl8Ojv5KVmkJD4hBdD3th8Tfk9vYasLM+mXWOZhFkgZfxhLSnrwRr4elSSg==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-extglob\": \"^2.1.1\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/is-lambda\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-lambda/-/is-lambda-1.0.1.tgz\",
      \"integrity\": \"sha512-z7CMFGNrENq5iFB9Bqo64Xk6Y9sg+epq1myIcdHaGnbMTYOxvzsEtdYqQUylB7LxfkvgrrjP32T6Ywciio9UIQ==\",
      \"dev\": true
    },
    \"node_modules/is-negative-zero\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-negative-zero/-/is-negative-zero-2.0.2.tgz\",
      \"integrity\": \"sha512-dqJvarLawXsFbNDeJW7zAz8ItJ9cd28YufuuFzh0G8pNHjJMnY08Dv7sYX2uF5UpQOwieAeOExEYAWWfu7ZZUA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-number-object\": {
      \"version\": \"1.0.7\",
      \"resolved\": \"https://registry.npmjs.org/is-number-object/-/is-number-object-1.0.7.tgz\",
      \"integrity\": \"sha512-k1U0IRzLMo7ZlYIfzRu23Oh6MiIFasgpb9X76eqfFZAqwH44UI4KTBvBYIZ1dSL9ZzChTB9ShHfLkR4pdW5krQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-path-cwd\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/is-path-cwd/-/is-path-cwd-2.2.0.tgz\",
      \"integrity\": \"sha512-w942bTcih8fdJPJmQHFzkS76NEP8Kzzvmw92cXsazb8intwLqPibPPdXf4ANdKV3rYMuuQYGIWtvz9JilB3NFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/is-path-in-cwd\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-path-in-cwd/-/is-path-in-cwd-2.1.0.tgz\",
      \"integrity\": \"sha512-rNocXHgipO+rvnP6dk3zI20RpOtrAM/kzbB258Uw5BWr3TpXi861yzjo16Dn4hUox07iw5AyeMLHWsujkjzvRQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-path-inside\": \"^2.1.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/is-path-inside\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-2.1.0.tgz\",
      \"integrity\": \"sha512-wiyhTzfDWsvwAW53OBWF5zuvaOGlZ6PwYxAbPVDhpm+gM09xKQGjBq/8uYN12aDvMxnAnq3dxTyoSoRNmg5YFg==\",
      \"dev\": true,
      \"dependencies\": {
        \"path-is-inside\": \"^1.0.2\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/is-plain-obj\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-plain-obj/-/is-plain-obj-1.1.0.tgz\",
      \"integrity\": \"sha1-caUMhCnfync8kqOQpKA7OfzVHT4=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/is-plain-object\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/is-plain-object/-/is-plain-object-2.0.4.tgz\",
      \"integrity\": \"sha512-h5PpgXkWitc38BBMYawTYMWJHFZJVnBquFE57xFpjB8pJFiF6gZ+bU+WyI/yqXiFR5mdLsgYNaPe8uao6Uv9Og==\",
      \"dev\": true,
      \"dependencies\": {
        \"isobject\": \"^3.0.1\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/is-regex\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/is-regex/-/is-regex-1.1.4.tgz\",
      \"integrity\": \"sha512-kvRdxDsxZjhzUX07ZnLydzS1TU/TJlTUHHY4YLL87e37oUA49DfkLqgy+VjFocowy29cKvcSiu+kIv728jTTVg==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-shared-array-buffer\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-shared-array-buffer/-/is-shared-array-buffer-1.0.2.tgz\",
      \"integrity\": \"sha512-sqN2UDu1/0y6uvXyStCOzyhAjCSlHceFoMKJW8W9EU9cvic/QdsZ0kEU93HEy3IUEFZIiH/3w+AH/UQbPHNdhA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-string\": {
      \"version\": \"1.0.7\",
      \"resolved\": \"https://registry.npmjs.org/is-string/-/is-string-1.0.7.tgz\",
      \"integrity\": \"sha512-tE2UXzivje6ofPW7l23cjDOMa09gb7xlAqG6jG5ej6uPV32TlWP3NKPigtaGeHNu9fohccRYvIiZMfOOnOYUtg==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-symbol\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/is-symbol/-/is-symbol-1.0.3.tgz\",
      \"integrity\": \"sha512-OwijhaRSgqvhm/0ZdAcXNZt9lYdKFpcRDT5ULUuYXPoT794UNOdU+gpT6Rzo7b4V2HUl/op6GqY894AZwv9faQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-symbols\": \"^1.0.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-typed-array\": {
      \"version\": \"1.1.10\",
      \"resolved\": \"https://registry.npmjs.org/is-typed-array/-/is-typed-array-1.1.10.tgz\",
      \"integrity\": \"sha512-PJqgEHiWZvMpaFZ3uTc8kHPM4+4ADTlDniuQL7cU/UDA0Ql7F70yGfHph3cLNe+c9toaigv+DFzTJKhc2CtO6A==\",
      \"dev\": true,
      \"dependencies\": {
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"gopd\": \"^1.0.1\",
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/is-unicode-supported\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-unicode-supported/-/is-unicode-supported-0.1.0.tgz\",
      \"integrity\": \"sha512-knxG2q4UC3u8stRGyAVJCOdxFmv5DZiRcdlIaAQXAbSfJya+OhopNotLQrstBhququ4ZpuKbDc/8S6mgXgPFPw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/is-weakref\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-weakref/-/is-weakref-1.0.2.tgz\",
      \"integrity\": \"sha512-qctsuLZmIQ0+vSSMfoVvyFe2+GSEvnmZ2ezTup1SBse9+twCCeial6EEi3Nc2KFcf6+qz2FBPnjXsk8xhKSaPQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/isarray\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
      \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
      \"dev\": true
    },
    \"node_modules/isexe\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/isexe/-/isexe-2.0.0.tgz\",
      \"integrity\": \"sha1-6PvzdNxVb/iUehDcsFctYz8s+hA=\",
      \"dev\": true
    },
    \"node_modules/isobject\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-3.0.1.tgz\",
      \"integrity\": \"sha1-TkMekrEalzFjaqH5yNHMvP2reN8=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/jest-worker\": {
      \"version\": \"27.5.1\",
      \"resolved\": \"https://registry.npmjs.org/jest-worker/-/jest-worker-27.5.1.tgz\",
      \"integrity\": \"sha512-7vuh85V5cdDofPyxn58nrPjBktZo0u9x1g8WtjQol+jZDaE+fhN+cIvTj11GndBnMnyfrUOG1sZQxCdjKh+DKg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/node\": \"*\",
        \"merge-stream\": \"^2.0.0\",
        \"supports-color\": \"^8.0.0\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\"
      }
    },
    \"node_modules/jest-worker/node_modules/has-flag\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
      \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/jest-worker/node_modules/supports-color\": {
      \"version\": \"8.1.1\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-8.1.1.tgz\",
      \"integrity\": \"sha512-MpUEN2OodtUzxvKQl72cUF7RQ5EiHsGvSsVG0ia9c5RbWGL2CI4C7EpPS8UTBIplnlzZiNuV56w+FuNxy3ty2Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-flag\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/supports-color?sponsor=1\"
      }
    },
    \"node_modules/jquery-ui-touch-punch\": {
      \"version\": \"0.2.3\",
      \"resolved\": \"https://registry.npmjs.org/jquery-ui-touch-punch/-/jquery-ui-touch-punch-0.2.3.tgz\",
      \"integrity\": \"sha1-7tgiQnM7okP0az6HwYQbMIGR2mg=\"
    },
    \"node_modules/js-base64\": {
      \"version\": \"2.6.4\",
      \"resolved\": \"https://registry.npmjs.org/js-base64/-/js-base64-2.6.4.tgz\",
      \"integrity\": \"sha512-pZe//GGmwJndub7ZghVHz7vjb2LgC1m8B07Au3eYqeqv9emhESByMXxaEgkUkEqJe87oBbSniGYoQNIBklc7IQ==\",
      \"dev\": true
    },
    \"node_modules/js-tokens\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/js-tokens/-/js-tokens-4.0.0.tgz\",
      \"integrity\": \"sha512-RdJUflcE3cUzKiMqQgsCu06FPu9UdIJO0beYbPhHN4k6apgJtifcoCtT9bcxOpYBtpD2kCM6Sbzg4CausW/PKQ==\",
      \"dev\": true
    },
    \"node_modules/js-yaml\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/js-yaml/-/js-yaml-4.1.0.tgz\",
      \"integrity\": \"sha512-wpxZs9NoxZaJESJGIZTyDEaYpl0FKSA+FB9aJiyemKhMwkxQg63h4T1KJgUGHpTqPDNRcmmYLugrRjJlBtWvRA==\",
      \"dev\": true,
      \"dependencies\": {
        \"argparse\": \"^2.0.1\"
      },
      \"bin\": {
        \"js-yaml\": \"bin/js-yaml.js\"
      }
    },
    \"node_modules/jsesc\": {
      \"version\": \"2.5.2\",
      \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-2.5.2.tgz\",
      \"integrity\": \"sha512-OYu7XEzjkCQ3C5Ps3QIZsQfNpqoJyZZA99wd9aWd05NCtC5pWOkShK2mkL6HXQR6/Cy2lbNdPlZBpuQHXE63gA==\",
      \"dev\": true,
      \"bin\": {
        \"jsesc\": \"bin/jsesc\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/json-parse-even-better-errors\": {
      \"version\": \"2.3.1\",
      \"resolved\": \"https://registry.npmjs.org/json-parse-even-better-errors/-/json-parse-even-better-errors-2.3.1.tgz\",
      \"integrity\": \"sha512-xyFwyhro/JEof6Ghe2iz2NcXoj2sloNsWr/XsERDK/oiPCfaNhl5ONfp+jQdAZRQQ0IJWNzH9zIZF7li91kh2w==\",
      \"dev\": true
    },
    \"node_modules/json-schema-traverse\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-0.4.1.tgz\",
      \"integrity\": \"sha512-xbbCH5dCYU5T8LcEhhuh7HJ88HXuW3qsI3Y0zOZFKfZEHcpWiHU/Jxzk629Brsab/mMiHQti9wMP+845RPe3Vg==\",
      \"dev\": true
    },
    \"node_modules/json-stable-stringify-without-jsonify\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/json-stable-stringify-without-jsonify/-/json-stable-stringify-without-jsonify-1.0.1.tgz\",
      \"integrity\": \"sha1-nbe1lJatPzz+8wp1FC0tkwrXJlE=\",
      \"dev\": true
    },
    \"node_modules/json5\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/json5/-/json5-1.0.2.tgz\",
      \"integrity\": \"sha512-g1MWMLBiz8FKi1e4w0UyVL3w+iJceWAFBAaBnnGKOpNa5f8TLktkbre1+s6oICydWAm+HRUGTmI+//xv2hvXYA==\",
      \"dev\": true,
      \"dependencies\": {
        \"minimist\": \"^1.2.0\"
      },
      \"bin\": {
        \"json5\": \"lib/cli.js\"
      }
    },
    \"node_modules/kind-of\": {
      \"version\": \"6.0.3\",
      \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.3.tgz\",
      \"integrity\": \"sha512-dcS1ul+9tmeD95T+x28/ehLgd9mENa3LsvDTtzm3vyBEO7RPptvAD+t44WVXaUjTBRcrpFeFlC8WCruUR456hw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/levn\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/levn/-/levn-0.4.1.tgz\",
      \"integrity\": \"sha512-+bT2uH4E5LGE7h/n3evcS/sQlJXCpIp6ym8OWJ5eV6+67Dsql/LaaT7qJBAt2rzfoa/5QBGBhxDix1dMt2kQKQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"prelude-ls\": \"^1.2.1\",
        \"type-check\": \"~0.4.0\"
      },
      \"engines\": {
        \"node\": \">= 0.8.0\"
      }
    },
    \"node_modules/lines-and-columns\": {
      \"version\": \"1.1.6\",
      \"resolved\": \"https://registry.npmjs.org/lines-and-columns/-/lines-and-columns-1.1.6.tgz\",
      \"integrity\": \"sha1-HADHQ7QzzQpOgHWPe2SldEDZ/wA=\",
      \"dev\": true
    },
    \"node_modules/loader-runner\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/loader-runner/-/loader-runner-4.2.0.tgz\",
      \"integrity\": \"sha512-92+huvxMvYlMzMt0iIOukcwYBFpkYJdpl2xsZ7LrlayO7E8SOv+JJUEK17B/dJIHAOLMfh2dZZ/Y18WgmGtYNw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.11.5\"
      }
    },
    \"node_modules/loader-utils\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/loader-utils/-/loader-utils-2.0.4.tgz\",
      \"integrity\": \"sha512-xXqpXoINfFhgua9xiqD8fPFHgkoq1mmmpE92WlDbm9rNRd/EbRb+Gqf908T2DMfuHjjJlksiK2RbHVOdD/MqSw==\",
      \"dev\": true,
      \"dependencies\": {
        \"big.js\": \"^5.2.2\",
        \"emojis-list\": \"^3.0.0\",
        \"json5\": \"^2.1.2\"
      },
      \"engines\": {
        \"node\": \">=8.9.0\"
      }
    },
    \"node_modules/loader-utils/node_modules/json5\": {
      \"version\": \"2.2.3\",
      \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
      \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
      \"dev\": true,
      \"bin\": {
        \"json5\": \"lib/cli.js\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/locate-path\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-3.0.0.tgz\",
      \"integrity\": \"sha512-7AO748wWnIhNqAuaty2ZWHkQHRSNfPVIsPIfwEOWO22AmaoVrWavlOcMR5nzTLNYvp36X220/maaRsrec1G65A==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-locate\": \"^3.0.0\",
        \"path-exists\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/lodash\": {
      \"version\": \"4.17.21\",
      \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.21.tgz\",
      \"integrity\": \"sha512-v2kDEe57lecTulaDIuNTPy3Ry4gLGJ6Z1O3vE1krgXZNrsQ+LFTGHVxVjcXPs17LhbZVGedAJv8XZ1tvj5FvSg==\",
      \"dev\": true
    },
    \"node_modules/lodash.debounce\": {
      \"version\": \"4.0.8\",
      \"resolved\": \"https://registry.npmjs.org/lodash.debounce/-/lodash.debounce-4.0.8.tgz\",
      \"integrity\": \"sha512-FT1yDzDYEoYWhnSGnpE/4Kj1fLZkDFyqRb7fNt6FdYOSxlUWAtp42Eh6Wb0rGIv/m9Bgo7x4GhQbm5Ys4SG5ow==\",
      \"dev\": true
    },
    \"node_modules/lodash.escaperegexp\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.escaperegexp/-/lodash.escaperegexp-4.1.2.tgz\",
      \"integrity\": \"sha1-ZHYsSGGAglGKw99Mz11YhtriA0c=\"
    },
    \"node_modules/lodash.merge\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.merge/-/lodash.merge-4.6.2.tgz\",
      \"integrity\": \"sha512-0KpjqXRVvrYyCsX1swR/XTK0va6VQkQM6MNo7PqW77ByjAhoARA8EfrP1N4+KlKj8YS0ZUCtRT/YUuhyYDujIQ==\",
      \"dev\": true
    },
    \"node_modules/loupe\": {
      \"version\": \"2.3.6\",
      \"resolved\": \"https://registry.npmjs.org/loupe/-/loupe-2.3.6.tgz\",
      \"integrity\": \"sha512-RaPMZKiMy8/JruncMU5Bt6na1eftNoo++R4Y+N2FrxkDVTrGvcyzFTsaGif4QTeKESheMGegbhw6iUAq+5A8zA==\",
      \"dev\": true,
      \"dependencies\": {
        \"get-func-name\": \"^2.0.0\"
      }
    },
    \"node_modules/lru-cache\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-6.0.0.tgz\",
      \"integrity\": \"sha512-Jo6dJ04CmSjuznwJSS3pUeWmd/H0ffTlkXXgwZi+eq1UCmqQwCh+eLsYOYCwY991i2Fah4h1BEMCx4qThGbsiA==\",
      \"dev\": true,
      \"dependencies\": {
        \"yallist\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/make-dir\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/make-dir/-/make-dir-2.1.0.tgz\",
      \"integrity\": \"sha512-LS9X+dc8KLxXCb8dni79fLIIUA5VyZoyjSMCwTluaXA0o27cCK0bhXkpgw+sTXVpPy/lSO57ilRixqk0vDmtRA==\",
      \"dev\": true,
      \"dependencies\": {
        \"pify\": \"^4.0.1\",
        \"semver\": \"^5.6.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/make-dir/node_modules/pify\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
      \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/make-fetch-happen\": {
      \"version\": \"9.1.0\",
      \"resolved\": \"https://registry.npmjs.org/make-fetch-happen/-/make-fetch-happen-9.1.0.tgz\",
      \"integrity\": \"sha512-+zopwDy7DNknmwPQplem5lAZX/eCOzSvSNNcSKm5eVwTkOBzoktEfXsa9L23J/GIRhxRsaxzkPEhrJEpE2F4Gg==\",
      \"dev\": true,
      \"dependencies\": {
        \"agentkeepalive\": \"^4.1.3\",
        \"cacache\": \"^15.2.0\",
        \"http-cache-semantics\": \"^4.1.0\",
        \"http-proxy-agent\": \"^4.0.1\",
        \"https-proxy-agent\": \"^5.0.0\",
        \"is-lambda\": \"^1.0.1\",
        \"lru-cache\": \"^6.0.0\",
        \"minipass\": \"^3.1.3\",
        \"minipass-collect\": \"^1.0.2\",
        \"minipass-fetch\": \"^1.3.2\",
        \"minipass-flush\": \"^1.0.5\",
        \"minipass-pipeline\": \"^1.2.4\",
        \"negotiator\": \"^0.6.2\",
        \"promise-retry\": \"^2.0.1\",
        \"socks-proxy-agent\": \"^6.0.0\",
        \"ssri\": \"^8.0.0\"
      },
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/map-obj\": {
      \"version\": \"4.2.1\",
      \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-4.2.1.tgz\",
      \"integrity\": \"sha512-+WA2/1sPmDj1dlvvJmB5G6JKfY9dpn7EVBUL06+y6PoljPkh+6V1QihwxNkbcGxCRjt2b0F9K0taiCuo7MbdFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/meow\": {
      \"version\": \"9.0.0\",
      \"resolved\": \"https://registry.npmjs.org/meow/-/meow-9.0.0.tgz\",
      \"integrity\": \"sha512-+obSblOQmRhcyBt62furQqRAQpNyWXo8BuQ5bN7dG8wmwQ+vwHKp/rCFD4CrTP8CsDQD1sjoZ94K417XEUk8IQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/minimist\": \"^1.2.0\",
        \"camelcase-keys\": \"^6.2.2\",
        \"decamelize\": \"^1.2.0\",
        \"decamelize-keys\": \"^1.1.0\",
        \"hard-rejection\": \"^2.1.0\",
        \"minimist-options\": \"4.1.0\",
        \"normalize-package-data\": \"^3.0.0\",
        \"read-pkg-up\": \"^7.0.1\",
        \"redent\": \"^3.0.0\",
        \"trim-newlines\": \"^3.0.0\",
        \"type-fest\": \"^0.18.0\",
        \"yargs-parser\": \"^20.2.3\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/meow/node_modules/find-up\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
      \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
      \"dev\": true,
      \"dependencies\": {
        \"locate-path\": \"^5.0.0\",
        \"path-exists\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/hosted-git-info\": {
      \"version\": \"4.0.2\",
      \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-4.0.2.tgz\",
      \"integrity\": \"sha512-c9OGXbZ3guC/xOlCg1Ci/VgWlwsqDv1yMQL1CWqXDL0hDjXuNcq0zuR4xqPSuasI3kqFDhqSyTjREz5gzq0fXg==\",
      \"dev\": true,
      \"dependencies\": {
        \"lru-cache\": \"^6.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/meow/node_modules/locate-path\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-5.0.0.tgz\",
      \"integrity\": \"sha512-t7hw9pI+WvuwNJXwk5zVHpyhIqzg2qTlklJOf0mVxGSbe3Fp2VieZcduNYjaLDoy6p9uGpQEGWG87WpMKlNq8g==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-locate\": \"^4.1.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/normalize-package-data\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-3.0.2.tgz\",
      \"integrity\": \"sha512-6CdZocmfGaKnIHPVFhJJZ3GuR8SsLKvDANFp47Jmy51aKIr8akjAWTSxtpI+MBgBFdSMRyo4hMpDlT6dTffgZg==\",
      \"dev\": true,
      \"dependencies\": {
        \"hosted-git-info\": \"^4.0.1\",
        \"resolve\": \"^1.20.0\",
        \"semver\": \"^7.3.4\",
        \"validate-npm-package-license\": \"^3.0.1\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/meow/node_modules/p-locate\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
      \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-limit\": \"^2.2.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/path-exists\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
      \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/read-pkg\": {
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/read-pkg/-/read-pkg-5.2.0.tgz\",
      \"integrity\": \"sha512-Ug69mNOpfvKDAc2Q8DRpMjjzdtrnv9HcSMX+4VsZxD1aZ6ZzrIE7rlzXBtWTyhULSMKg076AW6WR5iZpD0JiOg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/normalize-package-data\": \"^2.4.0\",
        \"normalize-package-data\": \"^2.5.0\",
        \"parse-json\": \"^5.0.0\",
        \"type-fest\": \"^0.6.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/read-pkg-up\": {
      \"version\": \"7.0.1\",
      \"resolved\": \"https://registry.npmjs.org/read-pkg-up/-/read-pkg-up-7.0.1.tgz\",
      \"integrity\": \"sha512-zK0TB7Xd6JpCLmlLmufqykGE+/TlOePD6qKClNW7hHDKFh/J7/7gCWGR7joEQEW1bKq3a3yUZSObOoWLFQ4ohg==\",
      \"dev\": true,
      \"dependencies\": {
        \"find-up\": \"^4.1.0\",
        \"read-pkg\": \"^5.2.0\",
        \"type-fest\": \"^0.8.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/meow/node_modules/read-pkg-up/node_modules/type-fest\": {
      \"version\": \"0.8.1\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.8.1.tgz\",
      \"integrity\": \"sha512-4dbzIzqvjtgiM5rw1k5rEHtBANKmdudhGyBEajN01fEyhaAIhsoKNy6y7+IN93IfpFtwY9iqi7kD+xwKhQsNJA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/read-pkg/node_modules/hosted-git-info\": {
      \"version\": \"2.8.9\",
      \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.8.9.tgz\",
      \"integrity\": \"sha512-mxIDAb9Lsm6DoOJ7xH+5+X4y1LU/4Hi50L9C5sIswK3JzULS4bwk1FvjdBgvYR4bzT4tuUQiC15FE2f5HbLvYw==\",
      \"dev\": true
    },
    \"node_modules/meow/node_modules/read-pkg/node_modules/normalize-package-data\": {
      \"version\": \"2.5.0\",
      \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-2.5.0.tgz\",
      \"integrity\": \"sha512-/5CMN3T0R4XTj4DcGaexo+roZSdSFW/0AOOTROrjxzCG1wrWXEsGbRKevjlIL+ZDE4sZlJr5ED4YW0yqmkK+eA==\",
      \"dev\": true,
      \"dependencies\": {
        \"hosted-git-info\": \"^2.1.4\",
        \"resolve\": \"^1.10.0\",
        \"semver\": \"2 || 3 || 4 || 5\",
        \"validate-npm-package-license\": \"^3.0.1\"
      }
    },
    \"node_modules/meow/node_modules/read-pkg/node_modules/semver\": {
      \"version\": \"5.7.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
      \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver\"
      }
    },
    \"node_modules/meow/node_modules/read-pkg/node_modules/type-fest\": {
      \"version\": \"0.6.0\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.6.0.tgz\",
      \"integrity\": \"sha512-q+MB8nYR1KDLrgr4G5yemftpMC7/QLqVndBmEEdqzmNj5dcFOO4Oo8qlwZE3ULT3+Zim1F8Kq4cBnikNhlCMlg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/meow/node_modules/semver\": {
      \"version\": \"7.3.5\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.5.tgz\",
      \"integrity\": \"sha512-PoeGJYh8HK4BTO/a9Tf6ZG3veo/A7ZVsYrSA6J8ny9nb3B1VrpkuN+z9OE5wfE5p6H4LchYZsegiQgbJD94ZFQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"lru-cache\": \"^6.0.0\"
      },
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/meow/node_modules/type-fest\": {
      \"version\": \"0.18.1\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.18.1.tgz\",
      \"integrity\": \"sha512-OIAYXk8+ISY+qTOwkHtKqzAuxchoMiD9Udx+FSGQDuiRR+PJKJHc2NJAXlbhkGwTt/4/nKZxELY1w3ReWOL8mw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/merge-stream\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
      \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
      \"dev\": true
    },
    \"node_modules/mime-db\": {
      \"version\": \"1.44.0\",
      \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.44.0.tgz\",
      \"integrity\": \"sha512-/NOTfLrsPBVeH7YtFPgsVWveuL+4SjjYxaQ1xtM1KMFj7HdxlBlxeyNLzhyJVx7r4rZGJAZ/6lkKCitSc/Nmpg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.6\"
      }
    },
    \"node_modules/mime-types\": {
      \"version\": \"2.1.27\",
      \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.27.tgz\",
      \"integrity\": \"sha512-JIhqnCasI9yD+SsmkquHBxTSEuZdQX5BuQnS2Vc7puQQQ+8yiP5AY5uWhpdv4YL4VM5c6iliiYWPgJ/nJQLp7w==\",
      \"dev\": true,
      \"dependencies\": {
        \"mime-db\": \"1.44.0\"
      },
      \"engines\": {
        \"node\": \">= 0.6\"
      }
    },
    \"node_modules/min-indent\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/min-indent/-/min-indent-1.0.1.tgz\",
      \"integrity\": \"sha512-I9jwMn07Sy/IwOj3zVkVik2JTvgpaykDZEigL6Rx6N9LbMywwUSMtxET+7lVoDLLd3O3IXwJwvuuns8UB/HeAg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/mini-css-extract-plugin\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/mini-css-extract-plugin/-/mini-css-extract-plugin-1.0.0.tgz\",
      \"integrity\": \"sha512-IsmrPv1nkdSUtFCDrAsuv5kg0k/27sLxfXqSz8vLjnbRKrNgoRdQrUNA4MppawvD+GHLkNP6L1P93Bw50ALkbg==\",
      \"dev\": true,
      \"dependencies\": {
        \"loader-utils\": \"^2.0.0\",
        \"normalize-url\": \"1.9.1\",
        \"schema-utils\": \"^3.0.0\",
        \"webpack-sources\": \"^1.1.0\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"webpack\": \"^4.4.0 || ^5.0.0\"
      }
    },
    \"node_modules/minimatch\": {
      \"version\": \"3.0.8\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.8.tgz\",
      \"integrity\": \"sha512-6FsRAQsxQ61mw+qP1ZzbL9Bc78x2p5OqNgNpnoAFLTrX8n5Kxph0CsnhmKKNXTWjXqU5L0pGPR7hYk+XWZr60Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/minimist\": {
      \"version\": \"1.2.8\",
      \"resolved\": \"https://registry.npmjs.org/minimist/-/minimist-1.2.8.tgz\",
      \"integrity\": \"sha512-2yyAR8qBkN3YuheJanUpWC5U3bb5osDywNB8RzDVlDwDHbocAJveqqj1u8+SVD7jkWT4yvsHCpWqqWqAxb0zCA==\",
      \"dev\": true,
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/minimist-options\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/minimist-options/-/minimist-options-4.1.0.tgz\",
      \"integrity\": \"sha512-Q4r8ghd80yhO/0j1O3B2BjweX3fiHg9cdOwjJd2J76Q135c+NDxGCqdYKQ1SKBuFfgWbAUzBfvYjPUEeNgqN1A==\",
      \"dev\": true,
      \"dependencies\": {
        \"arrify\": \"^1.0.1\",
        \"is-plain-obj\": \"^1.1.0\",
        \"kind-of\": \"^6.0.3\"
      },
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/minipass\": {
      \"version\": \"3.3.4\",
      \"resolved\": \"https://registry.npmjs.org/minipass/-/minipass-3.3.4.tgz\",
      \"integrity\": \"sha512-I9WPbWHCGu8W+6k1ZiGpPu0GkoKBeorkfKNuAFBNS1HNFJvke82sxvI5bzcCNpWPorkOO5QQ+zomzzwRxejXiw==\",
      \"dev\": true,
      \"dependencies\": {
        \"yallist\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/minipass-collect\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/minipass-collect/-/minipass-collect-1.0.2.tgz\",
      \"integrity\": \"sha512-6T6lH0H8OG9kITm/Jm6tdooIbogG9e0tLgpY6mphXSm/A9u8Nq1ryBG+Qspiub9LjWlBPsPS3tWQ/Botq4FdxA==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/minipass-fetch\": {
      \"version\": \"1.4.1\",
      \"resolved\": \"https://registry.npmjs.org/minipass-fetch/-/minipass-fetch-1.4.1.tgz\",
      \"integrity\": \"sha512-CGH1eblLq26Y15+Azk7ey4xh0J/XfJfrCox5LDJiKqI2Q2iwOLOKrlmIaODiSQS8d18jalF6y2K2ePUm0CmShw==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.1.0\",
        \"minipass-sized\": \"^1.0.3\",
        \"minizlib\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"optionalDependencies\": {
        \"encoding\": \"^0.1.12\"
      }
    },
    \"node_modules/minipass-flush\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/minipass-flush/-/minipass-flush-1.0.5.tgz\",
      \"integrity\": \"sha512-JmQSYYpPUqX5Jyn1mXaRwOda1uQ8HP5KAT/oDSLCzt1BYRhQU0/hDtsB1ufZfEEzMZ9aAVmsBw8+FWsIXlClWw==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/minipass-pipeline\": {
      \"version\": \"1.2.4\",
      \"resolved\": \"https://registry.npmjs.org/minipass-pipeline/-/minipass-pipeline-1.2.4.tgz\",
      \"integrity\": \"sha512-xuIq7cIOt09RPRJ19gdi4b+RiNvDFYe5JH+ggNvBqGqpQXcru3PcRmOZuHBKWK1Txf9+cQ+HMVN4d6z46LZP7A==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/minipass-sized\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/minipass-sized/-/minipass-sized-1.0.3.tgz\",
      \"integrity\": \"sha512-MbkQQ2CTiBMlA2Dm/5cY+9SWFEN8pzzOXi6rlM5Xxq0Yqbda5ZQy9sU75a673FE9ZK0Zsbr6Y5iP6u9nktfg2g==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/minizlib\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minizlib/-/minizlib-2.1.2.tgz\",
      \"integrity\": \"sha512-bAxsR8BVfj60DWXHE3u30oHzfl4G7khkSuPW+qvpd7jFRHm7dLxOjUk1EHACJ/hxLY8phGJ0YhYHZo7jil7Qdg==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.0.0\",
        \"yallist\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/mkdirp\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
      \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
      \"dev\": true,
      \"bin\": {
        \"mkdirp\": \"bin/cmd.js\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/mocha\": {
      \"version\": \"10.2.0\",
      \"resolved\": \"https://registry.npmjs.org/mocha/-/mocha-10.2.0.tgz\",
      \"integrity\": \"sha512-IDY7fl/BecMwFHzoqF2sg/SHHANeBoMMXFlS9r0OXKDssYE1M5O43wUY/9BVPeIvfH2zmEbBfseqN9gBQZzXkg==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-colors\": \"4.1.1\",
        \"browser-stdout\": \"1.3.1\",
        \"chokidar\": \"3.5.3\",
        \"debug\": \"4.3.4\",
        \"diff\": \"5.0.0\",
        \"escape-string-regexp\": \"4.0.0\",
        \"find-up\": \"5.0.0\",
        \"glob\": \"7.2.0\",
        \"he\": \"1.2.0\",
        \"js-yaml\": \"4.1.0\",
        \"log-symbols\": \"4.1.0\",
        \"minimatch\": \"5.0.1\",
        \"ms\": \"2.1.3\",
        \"nanoid\": \"3.3.3\",
        \"serialize-javascript\": \"6.0.0\",
        \"strip-json-comments\": \"3.1.1\",
        \"supports-color\": \"8.1.1\",
        \"workerpool\": \"6.2.1\",
        \"yargs\": \"16.2.0\",
        \"yargs-parser\": \"20.2.4\",
        \"yargs-unparser\": \"2.0.0\"
      },
      \"bin\": {
        \"_mocha\": \"bin/_mocha\",
        \"mocha\": \"bin/mocha.js\"
      },
      \"engines\": {
        \"node\": \">= 14.0.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/mochajs\"
      }
    },
    \"node_modules/mocha/node_modules/ansi-styles\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
      \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-convert\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/ansi-styles?sponsor=1\"
      }
    },
    \"node_modules/mocha/node_modules/chalk\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-4.1.2.tgz\",
      \"integrity\": \"sha512-oKnbhFyRIXpUuez8iBMmyEa4nbj4IOQyuhc/wy9kY7/WVPcwIO9VA668Pu8RkO7+0G76SLROeyw9CpQ061i4mA==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-styles\": \"^4.1.0\",
        \"supports-color\": \"^7.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/chalk?sponsor=1\"
      }
    },
    \"node_modules/mocha/node_modules/chalk/node_modules/supports-color\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
      \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-flag\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/mocha/node_modules/color-convert\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
      \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-name\": \"~1.1.4\"
      },
      \"engines\": {
        \"node\": \">=7.0.0\"
      }
    },
    \"node_modules/mocha/node_modules/color-name\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
      \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
      \"dev\": true
    },
    \"node_modules/mocha/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/mocha/node_modules/debug/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/mocha/node_modules/diff\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/diff/-/diff-5.0.0.tgz\",
      \"integrity\": \"sha512-/VTCrvm5Z0JGty/BWHljh+BAiw3IK+2j87NGMu8Nwc/f48WoDAC395uomO9ZD117ZOBaHmkX1oyLvkVM/aIT3w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.3.1\"
      }
    },
    \"node_modules/mocha/node_modules/escape-string-regexp\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-4.0.0.tgz\",
      \"integrity\": \"sha512-TtpcNJ3XAzx3Gq8sWRzJaVajRs0uVxA2YAkdb1jm2YkPz4G6egUFAyA3n5vtEIZefPk5Wa4UXbKuS5fKkJWdgA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/mocha/node_modules/find-up\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-5.0.0.tgz\",
      \"integrity\": \"sha512-78/PXT1wlLLDgTzDs7sjq9hzz0vXD+zn+7wypEe4fXQxCmdmqfGsEPQxmiCSQI3ajFV91bVSsvNtrJRiW6nGng==\",
      \"dev\": true,
      \"dependencies\": {
        \"locate-path\": \"^6.0.0\",
        \"path-exists\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/mocha/node_modules/glob\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.0.tgz\",
      \"integrity\": \"sha512-lmLf6gtyrPq8tTjSmrO94wBeQbFR3HbLHbuyD69wuyQkImp2hWqMGB47OX65FBkPffO641IP9jWa1z4ivqG26Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^3.0.4\",
        \"once\": \"^1.3.0\",
        \"path-is-absolute\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \"*\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/mocha/node_modules/glob/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/mocha/node_modules/has-flag\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
      \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/mocha/node_modules/locate-path\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-6.0.0.tgz\",
      \"integrity\": \"sha512-iPZK6eYjbxRu3uB4/WZ3EsEIMJFMqAoopl3R+zuq0UjcAm/MO6KCweDgPfP3elTztoKP3KtnVHxTn2NHBSDVUw==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-locate\": \"^5.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/mocha/node_modules/log-symbols\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/log-symbols/-/log-symbols-4.1.0.tgz\",
      \"integrity\": \"sha512-8XPvpAA8uyhfteu8pIvQxpJZ7SYYdpUivZpGy6sFsBuKRY/7rQGavedeB8aK+Zkyq6upMFVL/9AW6vOYzfRyLg==\",
      \"dev\": true,
      \"dependencies\": {
        \"chalk\": \"^4.1.0\",
        \"is-unicode-supported\": \"^0.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/mocha/node_modules/minimatch\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-5.0.1.tgz\",
      \"integrity\": \"sha512-nLDxIFRyhDblz3qMuq+SoRZED4+miJ/G+tdDrjkkkRnjAsBexeGpgjLEQ0blJy7rHhR2b93rhQY4SvyWu9v03g==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/mocha/node_modules/minimatch/node_modules/brace-expansion\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-2.0.1.tgz\",
      \"integrity\": \"sha512-XnAIvQ8eM+kC6aULx6wuQiwVsnzsi9d3WxzV3FpWTGA19F621kwdbsAcFKXgKUHZWsy+mY6iL1sHTxWEFCytDA==\",
      \"dev\": true,
      \"dependencies\": {
        \"balanced-match\": \"^1.0.0\"
      }
    },
    \"node_modules/mocha/node_modules/p-limit\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-3.1.0.tgz\",
      \"integrity\": \"sha512-TYOanM3wGwNGsZN2cVTYPArw454xnXj5qmWF1bEoAc4+cU/ol7GVh7odevjp1FNHduHc3KZMcFduxU5Xc6uJRQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"yocto-queue\": \"^0.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/mocha/node_modules/p-locate\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-5.0.0.tgz\",
      \"integrity\": \"sha512-LaNjtRWUBY++zB5nE/NwcaoMylSPk+S+ZHNB1TzdbMJMny6dynpAGt7X/tl/QYq3TIeE6nxHppbo2LGymrG5Pw==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-limit\": \"^3.0.2\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/mocha/node_modules/path-exists\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
      \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/mocha/node_modules/supports-color\": {
      \"version\": \"8.1.1\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-8.1.1.tgz\",
      \"integrity\": \"sha512-MpUEN2OodtUzxvKQl72cUF7RQ5EiHsGvSsVG0ia9c5RbWGL2CI4C7EpPS8UTBIplnlzZiNuV56w+FuNxy3ty2Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-flag\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/supports-color?sponsor=1\"
      }
    },
    \"node_modules/mocha/node_modules/yargs\": {
      \"version\": \"16.2.0\",
      \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-16.2.0.tgz\",
      \"integrity\": \"sha512-D1mvvtDG0L5ft/jGWkLpG1+m0eQxOfaBvTNELraWj22wSVUMWxZUvYgJYcKh6jGGIkJFhH4IZPQhR4TKpc8mBw==\",
      \"dev\": true,
      \"dependencies\": {
        \"cliui\": \"^7.0.2\",
        \"escalade\": \"^3.1.1\",
        \"get-caller-file\": \"^2.0.5\",
        \"require-directory\": \"^2.1.1\",
        \"string-width\": \"^4.2.0\",
        \"y18n\": \"^5.0.5\",
        \"yargs-parser\": \"^20.2.2\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/mocha/node_modules/yargs-parser\": {
      \"version\": \"20.2.4\",
      \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-20.2.4.tgz\",
      \"integrity\": \"sha512-WOkpgNhPTlE73h4VFAFsOnomJVaovO8VqLDzy5saChRBFQFBoMYirowyW+Q9HB4HFF4Z7VZTiG3iSzJJA29yRA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/ms\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.3.tgz\",
      \"integrity\": \"sha512-6FlzubTLZG3J2a/NVCAleEhjzq5oxgHyaCU9yYXvcLsvoVaHJq/s5xXI6/XXP6tz7R9xAOtHnSO/tXtF3WRTlA==\",
      \"dev\": true
    },
    \"node_modules/nan\": {
      \"version\": \"2.17.0\",
      \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.17.0.tgz\",
      \"integrity\": \"sha512-2ZTgtl0nJsO0KQCjEpxcIr5D+Yv90plTitZt9JBfQvVJDS5seMl3FOvsh3+9CoYWXf/1l5OaZzzF6nDm4cagaQ==\",
      \"dev\": true
    },
    \"node_modules/nanoid\": {
      \"version\": \"3.3.3\",
      \"resolved\": \"https://registry.npmjs.org/nanoid/-/nanoid-3.3.3.tgz\",
      \"integrity\": \"sha512-p1sjXuopFs0xg+fPASzQ28agW1oHD7xDsd9Xkf3T15H3c/cifrFHVwrh74PdoklAPi+i7MdRsE47vm2r6JoB+w==\",
      \"dev\": true,
      \"bin\": {
        \"nanoid\": \"bin/nanoid.cjs\"
      },
      \"engines\": {
        \"node\": \"^10 || ^12 || ^13.7 || ^14 || >=15.0.1\"
      }
    },
    \"node_modules/natural-compare\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/natural-compare/-/natural-compare-1.4.0.tgz\",
      \"integrity\": \"sha1-Sr6/7tdUHywnrPspvbvRXI1bpPc=\",
      \"dev\": true
    },
    \"node_modules/negotiator\": {
      \"version\": \"0.6.3\",
      \"resolved\": \"https://registry.npmjs.org/negotiator/-/negotiator-0.6.3.tgz\",
      \"integrity\": \"sha512-+EUsqGPLsM+j/zdChZjsnX51g4XrHFOIXwfnCVPGlQk/k5giakcKsuxCObBRu6DSm9opw/O6slWbJdghQM4bBg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.6\"
      }
    },
    \"node_modules/neo-async\": {
      \"version\": \"2.6.2\",
      \"resolved\": \"https://registry.npmjs.org/neo-async/-/neo-async-2.6.2.tgz\",
      \"integrity\": \"sha512-Yd3UES5mWCSqR+qNT93S3UoYUkqAZ9lLg8a7g9rimsWmYGK8cVToA4/sF3RrshdyV3sAGMXVUmpMYOw+dLpOuw==\",
      \"dev\": true
    },
    \"node_modules/node-environment-flags\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/node-environment-flags/-/node-environment-flags-1.0.6.tgz\",
      \"integrity\": \"sha512-5Evy2epuL+6TM0lCQGpFIj6KwiEsGh1SrHUhTbNX+sLbBtjidPZFAnVK9y5yU1+h//RitLbRHTIMyxQPtxMdHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"object.getownpropertydescriptors\": \"^2.0.3\",
        \"semver\": \"^5.7.0\"
      }
    },
    \"node_modules/node-environment-flags/node_modules/semver\": {
      \"version\": \"5.7.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
      \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver\"
      }
    },
    \"node_modules/node-gyp\": {
      \"version\": \"8.4.1\",
      \"resolved\": \"https://registry.npmjs.org/node-gyp/-/node-gyp-8.4.1.tgz\",
      \"integrity\": \"sha512-olTJRgUtAb/hOXG0E93wZDs5YiJlgbXxTwQAFHyNlRsXQnYzUaF2aGgujZbw+hR8aF4ZG/rST57bWMWD16jr9w==\",
      \"dev\": true,
      \"dependencies\": {
        \"env-paths\": \"^2.2.0\",
        \"glob\": \"^7.1.4\",
        \"graceful-fs\": \"^4.2.6\",
        \"make-fetch-happen\": \"^9.1.0\",
        \"nopt\": \"^5.0.0\",
        \"npmlog\": \"^6.0.0\",
        \"rimraf\": \"^3.0.2\",
        \"semver\": \"^7.3.5\",
        \"tar\": \"^6.1.2\",
        \"which\": \"^2.0.2\"
      },
      \"bin\": {
        \"node-gyp\": \"bin/node-gyp.js\"
      },
      \"engines\": {
        \"node\": \">= 10.12.0\"
      }
    },
    \"node_modules/node-gyp/node_modules/ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/node-gyp/node_modules/are-we-there-yet\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/are-we-there-yet/-/are-we-there-yet-3.0.1.tgz\",
      \"integrity\": \"sha512-QZW4EDmGwlYur0Yyf/b2uGucHQMa8aFUP7eu9ddR73vvhFyt4V0Vl3QHPcTNJ8l6qYOBdxgXdnBXQrHilfRQBg==\",
      \"dev\": true,
      \"dependencies\": {
        \"delegates\": \"^1.0.0\",
        \"readable-stream\": \"^3.6.0\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-gyp/node_modules/gauge\": {
      \"version\": \"4.0.4\",
      \"resolved\": \"https://registry.npmjs.org/gauge/-/gauge-4.0.4.tgz\",
      \"integrity\": \"sha512-f9m+BEN5jkg6a0fZjleidjN51VE1X+mPFQ2DJ0uv1V39oCLCbsGe6yjbBnp7eK7z/+GAon99a3nHuqbuuthyPg==\",
      \"dev\": true,
      \"dependencies\": {
        \"aproba\": \"^1.0.3 || ^2.0.0\",
        \"color-support\": \"^1.1.3\",
        \"console-control-strings\": \"^1.1.0\",
        \"has-unicode\": \"^2.0.1\",
        \"signal-exit\": \"^3.0.7\",
        \"string-width\": \"^4.2.3\",
        \"strip-ansi\": \"^6.0.1\",
        \"wide-align\": \"^1.1.5\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-gyp/node_modules/glob\": {
      \"version\": \"7.2.3\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.3.tgz\",
      \"integrity\": \"sha512-nFR0zLpU2YCaRxwoCJvL6UvCH2JFyFVIvwTLsIf21AuHlMskA1hhTdk+LlYJtOlYt9v6dvszD2BGRqBL+iQK9Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^3.1.1\",
        \"once\": \"^1.3.0\",
        \"path-is-absolute\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \"*\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/node-gyp/node_modules/minimatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^1.1.7\"
      },
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/node-gyp/node_modules/npmlog\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/npmlog/-/npmlog-6.0.2.tgz\",
      \"integrity\": \"sha512-/vBvz5Jfr9dT/aFWd0FIRf+T/Q2WBsLENygUaFUqstqsycmZAP/t5BvFJTK0viFmSUxiUKTUplWy5vt+rvKIxg==\",
      \"dev\": true,
      \"dependencies\": {
        \"are-we-there-yet\": \"^3.0.0\",
        \"console-control-strings\": \"^1.1.0\",
        \"gauge\": \"^4.0.3\",
        \"set-blocking\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-gyp/node_modules/readable-stream\": {
      \"version\": \"3.6.0\",
      \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-3.6.0.tgz\",
      \"integrity\": \"sha512-BViHy7LKeTz4oNnkcLJ+lVSL6vpiFeX6/d3oSH8zCW7UxP2onchk+vTGB143xuFjHS3deTgkKoXXymXqymiIdA==\",
      \"dev\": true,
      \"dependencies\": {
        \"inherits\": \"^2.0.3\",
        \"string_decoder\": \"^1.1.1\",
        \"util-deprecate\": \"^1.0.1\"
      },
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/node-gyp/node_modules/rimraf\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
      \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.1.3\"
      },
      \"bin\": {
        \"rimraf\": \"bin.js\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/node-gyp/node_modules/semver\": {
      \"version\": \"7.3.7\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.7.tgz\",
      \"integrity\": \"sha512-QlYTucUYOews+WeEujDoEGziz4K6c47V/Bd+LjSSYcA94p+DmINdf7ncaUinThfvZyu13lN9OY1XDxt8C0Tw0g==\",
      \"dev\": true,
      \"dependencies\": {
        \"lru-cache\": \"^6.0.0\"
      },
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/node-gyp/node_modules/strip-ansi\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
      \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-regex\": \"^5.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/node-releases\": {
      \"version\": \"2.0.13\",
      \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.13.tgz\",
      \"integrity\": \"sha512-uYr7J37ae/ORWdZeQ1xxMJe3NtdmqMC/JZK+geofDrkLUApKRHPd18/TxtBOJ4A0/+uUIliorNrfYV6s1b02eQ==\",
      \"dev\": true
    },
    \"node_modules/node-sass\": {
      \"version\": \"9.0.0\",
      \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-9.0.0.tgz\",
      \"integrity\": \"sha512-yltEuuLrfH6M7Pq2gAj5B6Zm7m+gdZoG66wTqG6mIZV/zijq3M2OO2HswtT6oBspPyFhHDcaxWpsBm0fRNDHPg==\",
      \"dev\": true,
      \"hasInstallScript\": true,
      \"dependencies\": {
        \"async-foreach\": \"^0.1.3\",
        \"chalk\": \"^4.1.2\",
        \"cross-spawn\": \"^7.0.3\",
        \"gaze\": \"^1.0.0\",
        \"get-stdin\": \"^4.0.1\",
        \"glob\": \"^7.0.3\",
        \"lodash\": \"^4.17.15\",
        \"make-fetch-happen\": \"^10.0.4\",
        \"meow\": \"^9.0.0\",
        \"nan\": \"^2.17.0\",
        \"node-gyp\": \"^8.4.1\",
        \"sass-graph\": \"^4.0.1\",
        \"stdout-stream\": \"^1.4.0\",
        \"true-case-path\": \"^2.2.1\"
      },
      \"bin\": {
        \"node-sass\": \"bin/node-sass\"
      },
      \"engines\": {
        \"node\": \">=16\"
      }
    },
    \"node_modules/node-sass/node_modules/@npmcli/fs\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/fs/-/fs-2.1.2.tgz\",
      \"integrity\": \"sha512-yOJKRvohFOaLqipNtwYB9WugyZKhC/DZC4VYPmpaCzDBrA8YpK3qHZ8/HGscMnE4GqbkLNuVcCnxkeQEdGt6LQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@gar/promisify\": \"^1.1.3\",
        \"semver\": \"^7.3.5\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/@npmcli/move-file\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/move-file/-/move-file-2.0.1.tgz\",
      \"integrity\": \"sha512-mJd2Z5TjYWq/ttPLLGqArdtnC74J6bOzg4rMDnN+p1xTacZ2yPRCk2y0oSWQtygLR9YVQXgOcONrwtnk3JupxQ==\",
      \"deprecated\": \"This functionality has been moved to @npmcli/fs\",
      \"dev\": true,
      \"dependencies\": {
        \"mkdirp\": \"^1.0.4\",
        \"rimraf\": \"^3.0.2\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/@tootallnate/once\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/@tootallnate/once/-/once-2.0.0.tgz\",
      \"integrity\": \"sha512-XCuKFP5PS55gnMVu3dty8KPatLqUoy/ZYzDzAGCQ8JNFCkLXzmI7vNHCR+XpbZaMWQK/vQubr7PkYq8g470J/A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/node-sass/node_modules/ansi-styles\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
      \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-convert\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/ansi-styles?sponsor=1\"
      }
    },
    \"node_modules/node-sass/node_modules/brace-expansion\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-2.0.1.tgz\",
      \"integrity\": \"sha512-XnAIvQ8eM+kC6aULx6wuQiwVsnzsi9d3WxzV3FpWTGA19F621kwdbsAcFKXgKUHZWsy+mY6iL1sHTxWEFCytDA==\",
      \"dev\": true,
      \"dependencies\": {
        \"balanced-match\": \"^1.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/cacache\": {
      \"version\": \"16.1.3\",
      \"resolved\": \"https://registry.npmjs.org/cacache/-/cacache-16.1.3.tgz\",
      \"integrity\": \"sha512-/+Emcj9DAXxX4cwlLmRI9c166RuL3w30zp4R7Joiv2cQTtTtA+jeuCAjH3ZlGnYS3tKENSrKhAzVVP9GVyzeYQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@npmcli/fs\": \"^2.1.0\",
        \"@npmcli/move-file\": \"^2.0.0\",
        \"chownr\": \"^2.0.0\",
        \"fs-minipass\": \"^2.1.0\",
        \"glob\": \"^8.0.1\",
        \"infer-owner\": \"^1.0.4\",
        \"lru-cache\": \"^7.7.1\",
        \"minipass\": \"^3.1.6\",
        \"minipass-collect\": \"^1.0.2\",
        \"minipass-flush\": \"^1.0.5\",
        \"minipass-pipeline\": \"^1.2.4\",
        \"mkdirp\": \"^1.0.4\",
        \"p-map\": \"^4.0.0\",
        \"promise-inflight\": \"^1.0.1\",
        \"rimraf\": \"^3.0.2\",
        \"ssri\": \"^9.0.0\",
        \"tar\": \"^6.1.11\",
        \"unique-filename\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/cacache/node_modules/glob\": {
      \"version\": \"8.0.3\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-8.0.3.tgz\",
      \"integrity\": \"sha512-ull455NHSHI/Y1FqGaaYFaLGkNMMJbavMrEGFXG/PGrg6y7sutWHUHrz6gy6WEBH6akM1M414dWKCNs+IhKdiQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^5.0.1\",
        \"once\": \"^1.3.0\"
      },
      \"engines\": {
        \"node\": \">=12\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/node-sass/node_modules/chalk\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-4.1.2.tgz\",
      \"integrity\": \"sha512-oKnbhFyRIXpUuez8iBMmyEa4nbj4IOQyuhc/wy9kY7/WVPcwIO9VA668Pu8RkO7+0G76SLROeyw9CpQ061i4mA==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-styles\": \"^4.1.0\",
        \"supports-color\": \"^7.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/chalk?sponsor=1\"
      }
    },
    \"node_modules/node-sass/node_modules/color-convert\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
      \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-name\": \"~1.1.4\"
      },
      \"engines\": {
        \"node\": \">=7.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/color-name\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
      \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
      \"dev\": true
    },
    \"node_modules/node-sass/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/node-sass/node_modules/has-flag\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
      \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/node-sass/node_modules/http-proxy-agent\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/http-proxy-agent/-/http-proxy-agent-5.0.0.tgz\",
      \"integrity\": \"sha512-n2hY8YdoRE1i7r6M0w9DIw5GgZN0G25P8zLCRQ8rjXtTU3vsNFBI/vWK/UIeE6g5MUUz6avwAPXmL6Fy9D/90w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@tootallnate/once\": \"2\",
        \"agent-base\": \"6\",
        \"debug\": \"4\"
      },
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/node-sass/node_modules/lru-cache\": {
      \"version\": \"7.14.1\",
      \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-7.14.1.tgz\",
      \"integrity\": \"sha512-ysxwsnTKdAx96aTRdhDOCQfDgbHnt8SK0KY8SEjO0wHinhWOFTESbjVCMPbU1uGXg/ch4lifqx0wfjOawU2+WA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=12\"
      }
    },
    \"node_modules/node-sass/node_modules/make-fetch-happen\": {
      \"version\": \"10.2.1\",
      \"resolved\": \"https://registry.npmjs.org/make-fetch-happen/-/make-fetch-happen-10.2.1.tgz\",
      \"integrity\": \"sha512-NgOPbRiaQM10DYXvN3/hhGVI2M5MtITFryzBGxHM5p4wnFxsVCbxkrBrDsk+EZ5OB4jEOT7AjDxtdF+KVEFT7w==\",
      \"dev\": true,
      \"dependencies\": {
        \"agentkeepalive\": \"^4.2.1\",
        \"cacache\": \"^16.1.0\",
        \"http-cache-semantics\": \"^4.1.0\",
        \"http-proxy-agent\": \"^5.0.0\",
        \"https-proxy-agent\": \"^5.0.0\",
        \"is-lambda\": \"^1.0.1\",
        \"lru-cache\": \"^7.7.1\",
        \"minipass\": \"^3.1.6\",
        \"minipass-collect\": \"^1.0.2\",
        \"minipass-fetch\": \"^2.0.3\",
        \"minipass-flush\": \"^1.0.5\",
        \"minipass-pipeline\": \"^1.2.4\",
        \"negotiator\": \"^0.6.3\",
        \"promise-retry\": \"^2.0.1\",
        \"socks-proxy-agent\": \"^7.0.0\",
        \"ssri\": \"^9.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/minimatch\": {
      \"version\": \"5.1.1\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-5.1.1.tgz\",
      \"integrity\": \"sha512-362NP+zlprccbEt/SkxKfRMHnNY85V74mVnpUpNyr3F35covl09Kec7/sEFLt3RA4oXmewtoaanoIf67SE5Y5g==\",
      \"dev\": true,
      \"dependencies\": {
        \"brace-expansion\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/node-sass/node_modules/minipass-fetch\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minipass-fetch/-/minipass-fetch-2.1.2.tgz\",
      \"integrity\": \"sha512-LT49Zi2/WMROHYoqGgdlQIZh8mLPZmOrN2NdJjMXxYe4nkN6FUyuPuOAOedNJDrx0IRGg9+4guZewtp8hE6TxA==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.1.6\",
        \"minipass-sized\": \"^1.0.3\",
        \"minizlib\": \"^2.1.2\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      },
      \"optionalDependencies\": {
        \"encoding\": \"^0.1.13\"
      }
    },
    \"node_modules/node-sass/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/node-sass/node_modules/p-map\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
      \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"aggregate-error\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/node-sass/node_modules/rimraf\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
      \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.1.3\"
      },
      \"bin\": {
        \"rimraf\": \"bin.js\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/isaacs\"
      }
    },
    \"node_modules/node-sass/node_modules/semver\": {
      \"version\": \"7.3.8\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.8.tgz\",
      \"integrity\": \"sha512-NB1ctGL5rlHrPJtFDVIVzTyQylMLu9N9VICA6HSFJo8MCGVTMW6gfpicwKmmK/dAjTOrqu5l63JJOpDSrAis3A==\",
      \"dev\": true,
      \"dependencies\": {
        \"lru-cache\": \"^6.0.0\"
      },
      \"bin\": {
        \"semver\": \"bin/semver.js\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/node-sass/node_modules/semver/node_modules/lru-cache\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-6.0.0.tgz\",
      \"integrity\": \"sha512-Jo6dJ04CmSjuznwJSS3pUeWmd/H0ffTlkXXgwZi+eq1UCmqQwCh+eLsYOYCwY991i2Fah4h1BEMCx4qThGbsiA==\",
      \"dev\": true,
      \"dependencies\": {
        \"yallist\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/node-sass/node_modules/socks-proxy-agent\": {
      \"version\": \"7.0.0\",
      \"resolved\": \"https://registry.npmjs.org/socks-proxy-agent/-/socks-proxy-agent-7.0.0.tgz\",
      \"integrity\": \"sha512-Fgl0YPZ902wEsAyiQ+idGd1A7rSFx/ayC1CQVMw5P+EQx2V0SgpGtf6OKFhVjPflPUl9YMmEOnmfjCdMUsygww==\",
      \"dev\": true,
      \"dependencies\": {
        \"agent-base\": \"^6.0.2\",
        \"debug\": \"^4.3.3\",
        \"socks\": \"^2.6.2\"
      },
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/node-sass/node_modules/ssri\": {
      \"version\": \"9.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ssri/-/ssri-9.0.1.tgz\",
      \"integrity\": \"sha512-o57Wcn66jMQvfHG1FlYbWeZWW/dHZhJXjpIcTfXldXEk5nz5lStPo3mK0OJQfGR3RbZUlbISexbljkJzuEj/8Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.1.1\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/supports-color\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
      \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-flag\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/node-sass/node_modules/unique-filename\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/unique-filename/-/unique-filename-2.0.1.tgz\",
      \"integrity\": \"sha512-ODWHtkkdx3IAR+veKxFV+VBkUMcN+FaqzUUd7IZzt+0zhDZFPFxhlqwPF3YQvMHx1TD0tdgYl+kuPnJ8E6ql7A==\",
      \"dev\": true,
      \"dependencies\": {
        \"unique-slug\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/node-sass/node_modules/unique-slug\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/unique-slug/-/unique-slug-3.0.0.tgz\",
      \"integrity\": \"sha512-8EyMynh679x/0gqE9fT9oilG+qEt+ibFyqjuVTsZn1+CMxH+XLlpvr2UZx4nVcCwTpx81nICr2JQFkM+HPLq4w==\",
      \"dev\": true,
      \"dependencies\": {
        \"imurmurhash\": \"^0.1.4\"
      },
      \"engines\": {
        \"node\": \"^12.13.0 || ^14.15.0 || >=16.0.0\"
      }
    },
    \"node_modules/nopt\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/nopt/-/nopt-5.0.0.tgz\",
      \"integrity\": \"sha512-Tbj67rffqceeLpcRXrT7vKAN8CwfPeIBgM7E6iBkmKLV7bEMwpGgYLGv0jACUsECaa/vuxP0IjEont6umdMgtQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"abbrev\": \"1\"
      },
      \"bin\": {
        \"nopt\": \"bin/nopt.js\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/normalize-path\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
      \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/normalize-url\": {
      \"version\": \"1.9.1\",
      \"resolved\": \"https://registry.npmjs.org/normalize-url/-/normalize-url-1.9.1.tgz\",
      \"integrity\": \"sha1-LMDWazHqIwNkWENuNiDYWVTGbDw=\",
      \"dev\": true,
      \"dependencies\": {
        \"object-assign\": \"^4.0.1\",
        \"prepend-http\": \"^1.0.0\",
        \"query-string\": \"^4.1.0\",
        \"sort-keys\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/object-assign\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
      \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/object-inspect\": {
      \"version\": \"1.12.3\",
      \"resolved\": \"https://registry.npmjs.org/object-inspect/-/object-inspect-1.12.3.tgz\",
      \"integrity\": \"sha512-geUvdk7c+eizMNUDkRpW1wJwgfOiOeHbxBR/hLXK1aT6zmVSO0jsQcs7fj6MGw89jC/cjGfLcNOrtMYtGqm81g==\",
      \"dev\": true,
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/object-keys\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
      \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      }
    },
    \"node_modules/object.assign\": {
      \"version\": \"4.1.4\",
      \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.4.tgz\",
      \"integrity\": \"sha512-1mxKf0e58bvyjSCtKYY4sRe9itRk3PJpquJOjeIkz885CczcI4IvJJDLPS72oowuSh+pBxUFROpX+TU++hxhZQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"has-symbols\": \"^1.0.3\",
        \"object-keys\": \"^1.1.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/object.entries\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/object.entries/-/object.entries-1.1.5.tgz\",
      \"integrity\": \"sha512-TyxmjUoZggd4OrrU1W66FMDG6CuqJxsFvymeyXI51+vQLN67zYfZseptRge703kKQdo4uccgAKebXFcRCzk4+g==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      }
    },
    \"node_modules/object.fromentries\": {
      \"version\": \"2.0.7\",
      \"resolved\": \"https://registry.npmjs.org/object.fromentries/-/object.fromentries-2.0.7.tgz\",
      \"integrity\": \"sha512-UPbPHML6sL8PI/mOqPwsH4G6iyXcCGzLin8KvEPenOZN5lpCNBZZQ+V62vdjB1mQHrmqGQt5/OJzemUA+KJmEA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/object.getownpropertydescriptors\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/object.getownpropertydescriptors/-/object.getownpropertydescriptors-2.1.3.tgz\",
      \"integrity\": \"sha512-VdDoCwvJI4QdC6ndjpqFmoL3/+HxffFBbcJzKi5hwLLqqx3mdbedRpfZDdK0SrOSauj8X4GzBvnDZl4vTN7dOw==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.1\"
      },
      \"engines\": {
        \"node\": \">= 0.8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/object.groupby\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/object.groupby/-/object.groupby-1.0.1.tgz\",
      \"integrity\": \"sha512-HqaQtqLnp/8Bn4GL16cj+CUYbnpe1bh0TtEaWvybszDG4tgxCJuRpV8VGuvNaI1fAnI4lUJzDG55MXcOH4JZcQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"get-intrinsic\": \"^1.2.1\"
      }
    },
    \"node_modules/object.values\": {
      \"version\": \"1.1.7\",
      \"resolved\": \"https://registry.npmjs.org/object.values/-/object.values-1.1.7.tgz\",
      \"integrity\": \"sha512-aU6xnDFYT3x17e/f0IiiwlGPTy2jzMySGfUB4fq6z7CV8l85CWHDk5ErhyhpfDHhrOMwGFhSQkhMGHaIotA6Ng==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/once\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
      \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
      \"dev\": true,
      \"dependencies\": {
        \"wrappy\": \"1\"
      }
    },
    \"node_modules/optionator\": {
      \"version\": \"0.9.3\",
      \"resolved\": \"https://registry.npmjs.org/optionator/-/optionator-0.9.3.tgz\",
      \"integrity\": \"sha512-JjCoypp+jKn1ttEFExxhetCKeJt9zhAgAve5FXHixTvFDW/5aEktX9bufBKLRRMdU7bNtpLfcGu94B3cdEJgjg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@aashutoshrathi/word-wrap\": \"^1.2.3\",
        \"deep-is\": \"^0.1.3\",
        \"fast-levenshtein\": \"^2.0.6\",
        \"levn\": \"^0.4.1\",
        \"prelude-ls\": \"^1.2.1\",
        \"type-check\": \"^0.4.0\"
      },
      \"engines\": {
        \"node\": \">= 0.8.0\"
      }
    },
    \"node_modules/p-limit\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.2.0.tgz\",
      \"integrity\": \"sha512-pZbTJpoUsCzV48Mc9Nh51VbwO0X9cuPFE8gYwx9BTCt9SF8/b7Zljd2fVgOxhIF/HDTKgpVzs+GPhyKfjLLFRQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-try\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/p-locate\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-3.0.0.tgz\",
      \"integrity\": \"sha512-x+12w/To+4GFfgJhBEpiDcLozRJGegY+Ei7/z0tSLkMmxGZNybVMSfWj9aJn8Z5Fc7dBUNJOOVgPv2H7IwulSQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-limit\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/p-map\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-2.1.0.tgz\",
      \"integrity\": \"sha512-y3b8Kpd8OAN444hxfBbFfj1FY/RjtTd8tzYwhUqNYXx0fXx2iX4maP4Qr6qhIKbQXI02wTLAda4fYUbDagTUFw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/p-try\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.0.0.tgz\",
      \"integrity\": \"sha512-hMp0onDKIajHfIkdRk3P4CdCmErkYAxxDtP3Wx/4nZ3aGlau2VKh3mZpcuFkH27WQkL/3WBCPOktzA9ZOAnMQQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/parent-module\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/parent-module/-/parent-module-1.0.1.tgz\",
      \"integrity\": \"sha512-GQ2EWRpQV8/o+Aw8YqtfZZPfNRWZYkbidE9k5rpl/hC3vtHHBfGm2Ifi6qWV+coDGkrUKZAxE3Lot5kcsRlh+g==\",
      \"dev\": true,
      \"dependencies\": {
        \"callsites\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/parse-json\": {
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-5.2.0.tgz\",
      \"integrity\": \"sha512-ayCKvm/phCGxOkYRSCM82iDwct8/EonSEgCSxWxD7ve6jHggsFl4fZVQBPRNgQoKiuV/odhFrGzQXZwbifC8Rg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/code-frame\": \"^7.0.0\",
        \"error-ex\": \"^1.3.1\",
        \"json-parse-even-better-errors\": \"^2.3.0\",
        \"lines-and-columns\": \"^1.1.6\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/parse-passwd\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
      \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/path-exists\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-3.0.0.tgz\",
      \"integrity\": \"sha1-zg6+ql94yxiSXqfYENe1mwEP1RU=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/path-is-absolute\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/path-is-absolute/-/path-is-absolute-1.0.1.tgz\",
      \"integrity\": \"sha1-F0uSaHNVNP+8es5r9TpanhtcX18=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/path-is-inside\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/path-is-inside/-/path-is-inside-1.0.2.tgz\",
      \"integrity\": \"sha1-NlQX3t5EQw0cEa9hAn+s8HS9/FM=\",
      \"dev\": true
    },
    \"node_modules/path-key\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/path-key/-/path-key-3.1.1.tgz\",
      \"integrity\": \"sha512-ojmeN0qd+y0jszEtoY48r0Peq5dwMEkIlCOu6Q5f41lfkswXuKtYrhgoTpLnyIcHm24Uhqx+5Tqm2InSwLhE6Q==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/path-parse\": {
      \"version\": \"1.0.7\",
      \"resolved\": \"https://registry.npmjs.org/path-parse/-/path-parse-1.0.7.tgz\",
      \"integrity\": \"sha512-LDJzPVEEEPR+y48z93A0Ed0yXb8pAByGWo/k5YYdYgpY2/2EsOsksJrq7lOHxryrVOn1ejG6oAp8ahvOIQD8sw==\",
      \"dev\": true
    },
    \"node_modules/pathval\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/pathval/-/pathval-1.1.1.tgz\",
      \"integrity\": \"sha512-Dp6zGqpTdETdR63lehJYPeIOqpiNBNtc7BpWSLrOje7UaIsE5aY92r/AunQA7rsXvet3lrJ3JnZX29UPTKXyKQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"*\"
      }
    },
    \"node_modules/picocolors\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-1.0.0.tgz\",
      \"integrity\": \"sha512-1fygroTLlHu66zi26VoTDv8yRgm0Fccecssto+MhsZ0D/DGW2sm8E8AjW7NU5VVTRt5GxbeZ5qBuJr+HyLYkjQ==\",
      \"dev\": true
    },
    \"node_modules/picomatch\": {
      \"version\": \"2.3.1\",
      \"resolved\": \"https://registry.npmjs.org/picomatch/-/picomatch-2.3.1.tgz\",
      \"integrity\": \"sha512-JU3teHTNjmE2VCGFzuY8EXzCDVwEqB2a8fsIvwaStHhAWJEeVd1o1QD80CU6+ZdEXXSLbSsuLwJjkCBWqRQUVA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8.6\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/jonschlinkert\"
      }
    },
    \"node_modules/pify\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
      \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/pinkie\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/pinkie/-/pinkie-2.0.4.tgz\",
      \"integrity\": \"sha1-clVrgM+g1IqXToDnckjoDtT3+HA=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/pinkie-promise\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/pinkie-promise/-/pinkie-promise-2.0.1.tgz\",
      \"integrity\": \"sha1-ITXW36ejWMBprJsXh3YogihFD/o=\",
      \"dev\": true,
      \"dependencies\": {
        \"pinkie\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/pirates\": {
      \"version\": \"4.0.5\",
      \"resolved\": \"https://registry.npmjs.org/pirates/-/pirates-4.0.5.tgz\",
      \"integrity\": \"sha512-8V9+HQPupnaXMA23c5hvl69zXvTwTzyAYasnkb0Tts4XvO4CliqONMOnvlq26rkhLC3nWDFBJf73LU1e1VZLaQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 6\"
      }
    },
    \"node_modules/pkg-dir\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-3.0.0.tgz\",
      \"integrity\": \"sha512-/E57AYkoeQ25qkxMj5PBOVgF8Kiu/h7cYS30Z5+R7WaiCCBfLq58ZI/dSeaEKb9WVJV5n/03QwrN3IeWIFllvw==\",
      \"dev\": true,
      \"dependencies\": {
        \"find-up\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/postcss\": {
      \"version\": \"8.4.31\",
      \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-8.4.31.tgz\",
      \"integrity\": \"sha512-PS08Iboia9mts/2ygV3eLpY5ghnUcfLV/EXTOW1E2qYxJKGGBUtNjN76FYHnMs36RmARn41bC0AZmn+rR0OVpQ==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"opencollective\",
          \"url\": \"https://opencollective.com/postcss/\"
        },
        {
          \"type\": \"tidelift\",
          \"url\": \"https://tidelift.com/funding/github/npm/postcss\"
        },
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/ai\"
        }
      ],
      \"dependencies\": {
        \"nanoid\": \"^3.3.6\",
        \"picocolors\": \"^1.0.0\",
        \"source-map-js\": \"^1.0.2\"
      },
      \"engines\": {
        \"node\": \"^10 || ^12 || >=14\"
      }
    },
    \"node_modules/postcss-modules-extract-imports\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-extract-imports/-/postcss-modules-extract-imports-3.0.0.tgz\",
      \"integrity\": \"sha512-bdHleFnP3kZ4NYDhuGlVK+CMrQ/pqUm8bx/oGL93K6gVwiclvX5x0n76fYMKuIGKzlABOy13zsvqjb0f92TEXw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^10 || ^12 || >= 14\"
      },
      \"peerDependencies\": {
        \"postcss\": \"^8.1.0\"
      }
    },
    \"node_modules/postcss-modules-local-by-default\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-local-by-default/-/postcss-modules-local-by-default-4.0.3.tgz\",
      \"integrity\": \"sha512-2/u2zraspoACtrbFRnTijMiQtb4GW4BvatjaG/bCjYQo8kLTdevCUlwuBHx2sCnSyrI3x3qj4ZK1j5LQBgzmwA==\",
      \"dev\": true,
      \"dependencies\": {
        \"icss-utils\": \"^5.0.0\",
        \"postcss-selector-parser\": \"^6.0.2\",
        \"postcss-value-parser\": \"^4.1.0\"
      },
      \"engines\": {
        \"node\": \"^10 || ^12 || >= 14\"
      },
      \"peerDependencies\": {
        \"postcss\": \"^8.1.0\"
      }
    },
    \"node_modules/postcss-modules-scope\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-scope/-/postcss-modules-scope-3.0.0.tgz\",
      \"integrity\": \"sha512-hncihwFA2yPath8oZ15PZqvWGkWf+XUfQgUGamS4LqoP1anQLOsOJw0vr7J7IwLpoY9fatA2qiGUGmuZL0Iqlg==\",
      \"dev\": true,
      \"dependencies\": {
        \"postcss-selector-parser\": \"^6.0.4\"
      },
      \"engines\": {
        \"node\": \"^10 || ^12 || >= 14\"
      },
      \"peerDependencies\": {
        \"postcss\": \"^8.1.0\"
      }
    },
    \"node_modules/postcss-modules-values\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-values/-/postcss-modules-values-4.0.0.tgz\",
      \"integrity\": \"sha512-RDxHkAiEGI78gS2ofyvCsu7iycRv7oqw5xMWn9iMoR0N/7mf9D50ecQqUo5BZ9Zh2vH4bCUR/ktCqbB9m8vJjQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"icss-utils\": \"^5.0.0\"
      },
      \"engines\": {
        \"node\": \"^10 || ^12 || >= 14\"
      },
      \"peerDependencies\": {
        \"postcss\": \"^8.1.0\"
      }
    },
    \"node_modules/postcss-selector-parser\": {
      \"version\": \"6.0.6\",
      \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-6.0.6.tgz\",
      \"integrity\": \"sha512-9LXrvaaX3+mcv5xkg5kFwqSzSH1JIObIx51PrndZwlmznwXRfxMddDvo9gve3gVR8ZTKgoFDdWkbRFmEhT4PMg==\",
      \"dev\": true,
      \"dependencies\": {
        \"cssesc\": \"^3.0.0\",
        \"util-deprecate\": \"^1.0.2\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/postcss-value-parser\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-value-parser/-/postcss-value-parser-4.2.0.tgz\",
      \"integrity\": \"sha512-1NNCs6uurfkVbeXG4S8JFT9t19m45ICnif8zWLd5oPSZ50QnwMfK+H3jv408d4jw/7Bttv5axS5IiHoLaVNHeQ==\",
      \"dev\": true
    },
    \"node_modules/postcss/node_modules/nanoid\": {
      \"version\": \"3.3.6\",
      \"resolved\": \"https://registry.npmjs.org/nanoid/-/nanoid-3.3.6.tgz\",
      \"integrity\": \"sha512-BGcqMMJuToF7i1rt+2PWSNVnWIkGCU78jBG3RxO/bZlnZPK2Cmi2QaffxGO/2RvWi9sL+FAiRiXMgsyxQ1DIDA==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/ai\"
        }
      ],
      \"bin\": {
        \"nanoid\": \"bin/nanoid.cjs\"
      },
      \"engines\": {
        \"node\": \"^10 || ^12 || ^13.7 || ^14 || >=15.0.1\"
      }
    },
    \"node_modules/prelude-ls\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/prelude-ls/-/prelude-ls-1.2.1.tgz\",
      \"integrity\": \"sha512-vkcDPrRZo1QZLbn5RLGPpg/WmIQ65qoWWhcGKf/b5eplkkarX0m9z8ppCat4mlOqUsWpyNuYgO3VRyrYHSzX5g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.8.0\"
      }
    },
    \"node_modules/prepend-http\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/prepend-http/-/prepend-http-1.0.4.tgz\",
      \"integrity\": \"sha1-1PRWKwzjaW5BrFLQ4ALlemNdxtw=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/process-nextick-args\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.0.tgz\",
      \"integrity\": \"sha512-MtEC1TqN0EU5nephaJ4rAtThHtC86dNN9qCuEhtshvpVBkAW5ZO7BASN9REnF9eoXGcRub+pFuKEpOHE+HbEMw==\",
      \"dev\": true
    },
    \"node_modules/promise-inflight\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/promise-inflight/-/promise-inflight-1.0.1.tgz\",
      \"integrity\": \"sha512-6zWPyEOFaQBJYcGMHBKTKJ3u6TBsnMFOIZSa6ce1e/ZrrsOlnHRHbabMjLiBYKp+n44X9eUI6VUPaukCXHuG4g==\",
      \"dev\": true
    },
    \"node_modules/promise-retry\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/promise-retry/-/promise-retry-2.0.1.tgz\",
      \"integrity\": \"sha512-y+WKFlBR8BGXnsNlIHFGPZmyDf3DFMoLhaflAnyZgV6rG6xu+JwesTo2Q9R6XwYmtmwAFCkAk3e35jEdoeh/3g==\",
      \"dev\": true,
      \"dependencies\": {
        \"err-code\": \"^2.0.2\",
        \"retry\": \"^0.12.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/punycode\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-2.1.1.tgz\",
      \"integrity\": \"sha512-XRsRjdf+j5ml+y/6GKHPZbrF/8p2Yga0JPtdqTIY2Xe5ohJPD9saDJJLPvp9+NSBprVvevdXZybnj2cv8OEd0A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/query-string\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/query-string/-/query-string-4.3.4.tgz\",
      \"integrity\": \"sha1-u7aTucqRXCMlFbIosaArYJBD2+s=\",
      \"dev\": true,
      \"dependencies\": {
        \"object-assign\": \"^4.1.0\",
        \"strict-uri-encode\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/queue-microtask\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/queue-microtask/-/queue-microtask-1.2.3.tgz\",
      \"integrity\": \"sha512-NuaNSa6flKT5JaSYQzJok04JzTL1CA6aGhv5rfLW3PgqA+M2ChpZQnAC8h8i4ZFkBS8X5RqkDBHA7r4hej3K9A==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/feross\"
        },
        {
          \"type\": \"patreon\",
          \"url\": \"https://www.patreon.com/feross\"
        },
        {
          \"type\": \"consulting\",
          \"url\": \"https://feross.org/support\"
        }
      ]
    },
    \"node_modules/quick-lru\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/quick-lru/-/quick-lru-4.0.1.tgz\",
      \"integrity\": \"sha512-ARhCpm70fzdcvNQfPoy49IaanKkTlRWF2JMzqhcJbhSFRZv7nPTvZJdcY7301IPmvW+/p0RgIWnQDLJxifsQ7g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/randombytes\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/randombytes/-/randombytes-2.1.0.tgz\",
      \"integrity\": \"sha512-vYl3iOX+4CKUWuxGi9Ukhie6fsqXqS9FE2Zaic4tNFD2N2QQaXOMFbuKK4QmDHC0JO6B1Zp41J0LpT0oR68amQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"safe-buffer\": \"^5.1.0\"
      }
    },
    \"node_modules/readable-stream\": {
      \"version\": \"2.3.6\",
      \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.6.tgz\",
      \"integrity\": \"sha512-tQtKA9WIAhBF3+VLAseyMqZeBjW0AHJoxOtYqSUZNJxauErmLbVm2FW1y+J/YA9dUrAC39ITejlZWhVIwawkKw==\",
      \"dev\": true,
      \"dependencies\": {
        \"core-util-is\": \"~1.0.0\",
        \"inherits\": \"~2.0.3\",
        \"isarray\": \"~1.0.0\",
        \"process-nextick-args\": \"~2.0.0\",
        \"safe-buffer\": \"~5.1.1\",
        \"string_decoder\": \"~1.1.1\",
        \"util-deprecate\": \"~1.0.1\"
      }
    },
    \"node_modules/rechoir\": {
      \"version\": \"0.7.0\",
      \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.7.0.tgz\",
      \"integrity\": \"sha512-ADsDEH2bvbjltXEP+hTIAmeFekTFK0V2BTxMkok6qILyAJEXV0AFfoWcAq4yfll5VdIMd/RVXq0lR+wQi5ZU3Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"resolve\": \"^1.9.0\"
      },
      \"engines\": {
        \"node\": \">= 0.10\"
      }
    },
    \"node_modules/redent\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/redent/-/redent-3.0.0.tgz\",
      \"integrity\": \"sha512-6tDA8g98We0zd0GvVeMT9arEOnTw9qM03L9cJXaCjrip1OO764RDBLBfrB4cwzNGDj5OA5ioymC9GkizgWJDUg==\",
      \"dev\": true,
      \"dependencies\": {
        \"indent-string\": \"^4.0.0\",
        \"strip-indent\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/regenerate\": {
      \"version\": \"1.4.2\",
      \"resolved\": \"https://registry.npmjs.org/regenerate/-/regenerate-1.4.2.tgz\",
      \"integrity\": \"sha512-zrceR/XhGYU/d/opr2EKO7aRHUeiBI8qjtfHqADTwZd6Szfy16la6kqD0MIUs5z5hx6AaKa+PixpPrR289+I0A==\",
      \"dev\": true
    },
    \"node_modules/regenerate-unicode-properties\": {
      \"version\": \"10.1.0\",
      \"resolved\": \"https://registry.npmjs.org/regenerate-unicode-properties/-/regenerate-unicode-properties-10.1.0.tgz\",
      \"integrity\": \"sha512-d1VudCLoIGitcU/hEg2QqvyGZQmdC0Lf8BqdOMXGFSvJP4bNV1+XqbPQeHHLD51Jh4QJJ225dlIFvY4Ly6MXmQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"regenerate\": \"^1.4.2\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/regenerator-runtime\": {
      \"version\": \"0.14.0\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.14.0.tgz\",
      \"integrity\": \"sha512-srw17NI0TUWHuGa5CFGGmhfNIeja30WMBfbslPNhf6JrqQlLN5gcrvig1oqPxiVaXb0oW0XRKtH6Nngs5lKCIA==\",
      \"dev\": true
    },
    \"node_modules/regenerator-transform\": {
      \"version\": \"0.15.2\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-transform/-/regenerator-transform-0.15.2.tgz\",
      \"integrity\": \"sha512-hfMp2BoF0qOk3uc5V20ALGDS2ddjQaLrdl7xrGXvAIow7qeWRM2VA2HuCHkUKk9slq3VwEwLNK3DFBqDfPGYtg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/runtime\": \"^7.8.4\"
      }
    },
    \"node_modules/regexp.prototype.flags\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/regexp.prototype.flags/-/regexp.prototype.flags-1.5.0.tgz\",
      \"integrity\": \"sha512-0SutC3pNudRKgquxGoRGIz946MZVHqbNfPjBdxeOhBrdgDKlRoXmYLQN9xRbrR09ZXWeGAdPuif7egofn6v5LA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"functions-have-names\": \"^1.2.3\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/regexpu-core\": {
      \"version\": \"5.3.2\",
      \"resolved\": \"https://registry.npmjs.org/regexpu-core/-/regexpu-core-5.3.2.tgz\",
      \"integrity\": \"sha512-RAM5FlZz+Lhmo7db9L298p2vHP5ZywrVXmVXpmAD9GuL5MPH6t9ROw1iA/wfHkQ76Qe7AaPF0nGuim96/IrQMQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/regjsgen\": \"^0.8.0\",
        \"regenerate\": \"^1.4.2\",
        \"regenerate-unicode-properties\": \"^10.1.0\",
        \"regjsparser\": \"^0.9.1\",
        \"unicode-match-property-ecmascript\": \"^2.0.0\",
        \"unicode-match-property-value-ecmascript\": \"^2.1.0\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/regjsparser\": {
      \"version\": \"0.9.1\",
      \"resolved\": \"https://registry.npmjs.org/regjsparser/-/regjsparser-0.9.1.tgz\",
      \"integrity\": \"sha512-dQUtn90WanSNl+7mQKcXAgZxvUe7Z0SqXlgzv0za4LwiUhyzBC58yQO3liFoUgu8GiJVInAhJjkj1N0EtQ5nkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"jsesc\": \"~0.5.0\"
      },
      \"bin\": {
        \"regjsparser\": \"bin/parser\"
      }
    },
    \"node_modules/regjsparser/node_modules/jsesc\": {
      \"version\": \"0.5.0\",
      \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-0.5.0.tgz\",
      \"integrity\": \"sha512-uZz5UnB7u4T9LvwmFqXii7pZSouaRPorGs5who1Ip7VO0wxanFvBL7GkM6dTHlgX+jhBApRetaWpnDabOeTcnA==\",
      \"dev\": true,
      \"bin\": {
        \"jsesc\": \"bin/jsesc\"
      }
    },
    \"node_modules/require-directory\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
      \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/require-from-string\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/require-from-string/-/require-from-string-2.0.2.tgz\",
      \"integrity\": \"sha512-Xf0nWe6RseziFMu+Ap9biiUbmplq6S9/p+7w7YXP/JBHhrUDDUhwa+vANyubuqfZWTveU//DYVGsDG7RKL/vEw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/resolve\": {
      \"version\": \"1.22.8\",
      \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.22.8.tgz\",
      \"integrity\": \"sha512-oKWePCxqpd6FlLvGV1VU0x7bkPmmCNolxzjMf4NczoDnQcIWrAF+cPtZn5i6n+RfD2d9i0tzpKnG6Yk168yIyw==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-core-module\": \"^2.13.0\",
        \"path-parse\": \"^1.0.7\",
        \"supports-preserve-symlinks-flag\": \"^1.0.0\"
      },
      \"bin\": {
        \"resolve\": \"bin/resolve\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/resolve-cwd\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-cwd/-/resolve-cwd-3.0.0.tgz\",
      \"integrity\": \"sha512-OrZaX2Mb+rJCpH/6CpSqt9xFVpN++x01XnN2ie9g6P5/3xelLAkXWVADpdz1IHD/KFfEXyE6V0U01OQ3UO2rEg==\",
      \"dev\": true,
      \"dependencies\": {
        \"resolve-from\": \"^5.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/resolve-from\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-from/-/resolve-from-5.0.0.tgz\",
      \"integrity\": \"sha512-qYg9KP24dD5qka9J47d0aVky0N+b4fTU89LN9iDnjB5waksiC49rvMB0PrUJQGoTmH50XPiqOvAjDfaijGxYZw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/retry\": {
      \"version\": \"0.12.0\",
      \"resolved\": \"https://registry.npmjs.org/retry/-/retry-0.12.0.tgz\",
      \"integrity\": \"sha512-9LkiTwjUh6rT555DtE9rTX+BKByPfrMzEAtnlEtdEwr3Nkffwiihqe2bWADg+OQRjt9gl6ICdmB/ZFDCGAtSow==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 4\"
      }
    },
    \"node_modules/reusify\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/reusify/-/reusify-1.0.4.tgz\",
      \"integrity\": \"sha512-U9nH88a3fc/ekCF1l0/UP1IosiuIjyTh7hBvXVMHYgVcfGvt897Xguj2UOLDeI5BG2m7/uwyaLVT6fbtCwTyzw==\",
      \"dev\": true,
      \"engines\": {
        \"iojs\": \">=1.0.0\",
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/rimraf\": {
      \"version\": \"2.6.3\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.6.3.tgz\",
      \"integrity\": \"sha512-mwqeW5XsA2qAejG46gYdENaxXjx9onRNCfn7L0duuP4hCuTIi/QO7PDK07KJfp1d+izWPrzEJDcSqBa0OZQriA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.1.3\"
      },
      \"bin\": {
        \"rimraf\": \"bin.js\"
      }
    },
    \"node_modules/run-parallel\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/run-parallel/-/run-parallel-1.2.0.tgz\",
      \"integrity\": \"sha512-5l4VyZR86LZ/lDxZTR6jqL8AFE2S0IFLMP26AbjsLVADxHdhB/c0GUsH+y39UfCi3dzz8OlQuPmnaJOMoDHQBA==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/feross\"
        },
        {
          \"type\": \"patreon\",
          \"url\": \"https://www.patreon.com/feross\"
        },
        {
          \"type\": \"consulting\",
          \"url\": \"https://feross.org/support\"
        }
      ],
      \"dependencies\": {
        \"queue-microtask\": \"^1.2.2\"
      }
    },
    \"node_modules/safe-array-concat\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/safe-array-concat/-/safe-array-concat-1.0.0.tgz\",
      \"integrity\": \"sha512-9dVEFruWIsnie89yym+xWTAYASdpw3CJV7Li/6zBewGf9z2i1j31rP6jnY0pHEO4QZh6N0K11bFjWmdR8UGdPQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.2.0\",
        \"has-symbols\": \"^1.0.3\",
        \"isarray\": \"^2.0.5\"
      },
      \"engines\": {
        \"node\": \">=0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/safe-array-concat/node_modules/isarray\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.5.tgz\",
      \"integrity\": \"sha512-xHjhDr3cNBK0BzdUJSPXZntQUx/mwMS5Rw4A7lPJ90XGAO6ISP/ePDNuo0vhqOZU+UD5JoodwCAAoZQd3FeAKw==\",
      \"dev\": true
    },
    \"node_modules/safe-buffer\": {
      \"version\": \"5.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
      \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
      \"dev\": true
    },
    \"node_modules/safe-regex-test\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/safe-regex-test/-/safe-regex-test-1.0.0.tgz\",
      \"integrity\": \"sha512-JBUUzyOgEwXQY1NuPtvcj/qcBDbDmEvWufhlnXZIm75DEHp+afM1r1ujJpJsV/gSM4t59tpDyPi1sd6ZaPFfsA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.1.3\",
        \"is-regex\": \"^1.1.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/safer-buffer\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
      \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
      \"dev\": true,
      \"optional\": true
    },
    \"node_modules/sass-graph\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/sass-graph/-/sass-graph-4.0.1.tgz\",
      \"integrity\": \"sha512-5YCfmGBmxoIRYHnKK2AKzrAkCoQ8ozO+iumT8K4tXJXRVCPf+7s1/9KxTSW3Rbvf+7Y7b4FR3mWyLnQr3PHocA==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob\": \"^7.0.0\",
        \"lodash\": \"^4.17.11\",
        \"scss-tokenizer\": \"^0.4.3\",
        \"yargs\": \"^17.2.1\"
      },
      \"bin\": {
        \"sassgraph\": \"bin/sassgraph\"
      },
      \"engines\": {
        \"node\": \">=12\"
      }
    },
    \"node_modules/sass-loader\": {
      \"version\": \"13.3.2\",
      \"resolved\": \"https://registry.npmjs.org/sass-loader/-/sass-loader-13.3.2.tgz\",
      \"integrity\": \"sha512-CQbKl57kdEv+KDLquhC+gE3pXt74LEAzm+tzywcA0/aHZuub8wTErbjAoNI57rPUWRYRNC5WUnNl8eGJNbDdwg==\",
      \"dev\": true,
      \"dependencies\": {
        \"neo-async\": \"^2.6.2\"
      },
      \"engines\": {
        \"node\": \">= 14.15.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"fibers\": \">= 3.1.0\",
        \"node-sass\": \"^4.0.0 || ^5.0.0 || ^6.0.0 || ^7.0.0 || ^8.0.0 || ^9.0.0\",
        \"sass\": \"^1.3.0\",
        \"sass-embedded\": \"*\",
        \"webpack\": \"^5.0.0\"
      },
      \"peerDependenciesMeta\": {
        \"fibers\": {
          \"optional\": true
        },
        \"node-sass\": {
          \"optional\": true
        },
        \"sass\": {
          \"optional\": true
        },
        \"sass-embedded\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/schema-utils\": {
      \"version\": \"3.3.0\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.3.0.tgz\",
      \"integrity\": \"sha512-pN/yOAvcC+5rQ5nERGuwrjLlYvLTbCibnZ1I7B1LaiAz9BRBlE9GMgE/eqV30P7aJQUf7Ddimy/RsbYO/GrVGg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/json-schema\": \"^7.0.8\",
        \"ajv\": \"^6.12.5\",
        \"ajv-keywords\": \"^3.5.2\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      }
    },
    \"node_modules/scss-tokenizer\": {
      \"version\": \"0.4.3\",
      \"resolved\": \"https://registry.npmjs.org/scss-tokenizer/-/scss-tokenizer-0.4.3.tgz\",
      \"integrity\": \"sha512-raKLgf1LI5QMQnG+RxHz6oK0sL3x3I4FN2UDLqgLOGO8hodECNnNh5BXn7fAyBxrA8zVzdQizQ6XjNJQ+uBwMw==\",
      \"dev\": true,
      \"dependencies\": {
        \"js-base64\": \"^2.4.9\",
        \"source-map\": \"^0.7.3\"
      }
    },
    \"node_modules/scss-tokenizer/node_modules/source-map\": {
      \"version\": \"0.7.4\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.7.4.tgz\",
      \"integrity\": \"sha512-l3BikUxvPOcn5E74dZiq5BGsTb5yEwhaTSzccU6t4sDOH8NWJCstKO5QT2CvtFoK6F0saL7p9xHAqHOlCPJygA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/semver\": {
      \"version\": \"5.6.0\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.6.0.tgz\",
      \"integrity\": \"sha512-RS9R6R35NYgQn++fkDWaOmqGoj4Ek9gGs+DPxNUZKuwE183xjJroKvyo1IzVFeXvUrvmALy6FWD5xrdJT25gMg==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver\"
      }
    },
    \"node_modules/serialize-javascript\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-6.0.0.tgz\",
      \"integrity\": \"sha512-Qr3TosvguFt8ePWqsvRfrKyQXIiW+nGbYpy8XK24NQHE83caxWt+mIymTT19DGFbNWNLfEwsrkSmN64lVWB9ag==\",
      \"dev\": true,
      \"dependencies\": {
        \"randombytes\": \"^2.1.0\"
      }
    },
    \"node_modules/set-blocking\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
      \"integrity\": \"sha512-KiKBS8AnWGEyLzofFfmvKwpdPzqiy16LvQfK3yv/fVH7Bj13/wl3JSR1J+rfgRE9q7xUJK4qvgS8raSOeLUehw==\",
      \"dev\": true
    },
    \"node_modules/shallow-clone\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/shallow-clone/-/shallow-clone-3.0.1.tgz\",
      \"integrity\": \"sha512-/6KqX+GVUdqPuPPd2LxDDxzX6CAbjJehAAOKlNpqqUpAqPM6HeL8f+o3a+JsyGjn2lv0WY8UsTgUJjU9Ok55NA==\",
      \"dev\": true,
      \"dependencies\": {
        \"kind-of\": \"^6.0.2\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/shebang-command\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/shebang-command/-/shebang-command-2.0.0.tgz\",
      \"integrity\": \"sha512-kHxr2zZpYtdmrN1qDjrrX/Z1rR1kG8Dx+gkpK1G4eXmvXswmcE1hTWBWYUzlraYw1/yZp6YuDY77YtvbN0dmDA==\",
      \"dev\": true,
      \"dependencies\": {
        \"shebang-regex\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/shebang-regex\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/shebang-regex/-/shebang-regex-3.0.0.tgz\",
      \"integrity\": \"sha512-7++dFhtcx3353uBaq8DDR4NuxBetBzC7ZQOhmTQInHEd6bSrXdiEyzCvG07Z44UYdLShWUyXt5M/yhz8ekcb1A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/side-channel\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/side-channel/-/side-channel-1.0.4.tgz\",
      \"integrity\": \"sha512-q5XPytqFEIKHkGdiMIrY10mvLRvnQh42/+GoBlFW3b2LXLE2xxJpZFdm94we0BaoV3RwJyGqg5wS7epxTv0Zvw==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.0\",
        \"get-intrinsic\": \"^1.0.2\",
        \"object-inspect\": \"^1.9.0\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/signal-exit\": {
      \"version\": \"3.0.7\",
      \"resolved\": \"https://registry.npmjs.org/signal-exit/-/signal-exit-3.0.7.tgz\",
      \"integrity\": \"sha512-wnD2ZE+l+SPC/uoS0vXeE9L1+0wuaMqKlfz9AMUo38JsyLSBWSFcHR1Rri62LZc12vLr1gb3jl7iwQhgwpAbGQ==\",
      \"dev\": true
    },
    \"node_modules/slash\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/slash/-/slash-2.0.0.tgz\",
      \"integrity\": \"sha512-ZYKh3Wh2z1PpEXWr0MpSBZ0V6mZHAQfYevttO11c51CaWjGTaadiKZ+wVt1PbMlDV5qhMFslpZCemhwOK7C89A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/smart-buffer\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/smart-buffer/-/smart-buffer-4.2.0.tgz\",
      \"integrity\": \"sha512-94hK0Hh8rPqQl2xXc3HsaBoOXKV20MToPkcXvwbISWLEs+64sBq5kFgn2kJDHb1Pry9yrP0dxrCI9RRci7RXKg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 6.0.0\",
        \"npm\": \">= 3.0.0\"
      }
    },
    \"node_modules/socks\": {
      \"version\": \"2.7.0\",
      \"resolved\": \"https://registry.npmjs.org/socks/-/socks-2.7.0.tgz\",
      \"integrity\": \"sha512-scnOe9y4VuiNUULJN72GrM26BNOjVsfPXI+j+98PkyEfsIXroa5ofyjT+FzGvn/xHs73U2JtoBYAVx9Hl4quSA==\",
      \"dev\": true,
      \"dependencies\": {
        \"ip\": \"^2.0.0\",
        \"smart-buffer\": \"^4.2.0\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\",
        \"npm\": \">= 3.0.0\"
      }
    },
    \"node_modules/socks-proxy-agent\": {
      \"version\": \"6.2.1\",
      \"resolved\": \"https://registry.npmjs.org/socks-proxy-agent/-/socks-proxy-agent-6.2.1.tgz\",
      \"integrity\": \"sha512-a6KW9G+6B3nWZ1yB8G7pJwL3ggLy1uTzKAgCb7ttblwqdz9fMGJUuTy3uFzEP48FAs9FLILlmzDlE2JJhVQaXQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"agent-base\": \"^6.0.2\",
        \"debug\": \"^4.3.3\",
        \"socks\": \"^2.6.2\"
      },
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/socks-proxy-agent/node_modules/debug\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
      \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"2.1.2\"
      },
      \"engines\": {
        \"node\": \">=6.0\"
      },
      \"peerDependenciesMeta\": {
        \"supports-color\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/socks-proxy-agent/node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/sort-keys\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/sort-keys/-/sort-keys-1.1.2.tgz\",
      \"integrity\": \"sha1-RBttTTRnmPG05J6JIK37oOVD+a0=\",
      \"dev\": true,
      \"dependencies\": {
        \"is-plain-obj\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/source-list-map\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/source-list-map/-/source-list-map-2.0.1.tgz\",
      \"integrity\": \"sha512-qnQ7gVMxGNxsiL4lEuJwe/To8UnK7fAnmbGEEH8RpLouuKbeEm0lhbQVFIrNSuB+G7tVrAlVsZgETT5nljf+Iw==\",
      \"dev\": true
    },
    \"node_modules/source-map-js\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/source-map-js/-/source-map-js-1.0.2.tgz\",
      \"integrity\": \"sha512-R0XvVJ9WusLiqTCEiGCmICCMplcCkIwwR11mOSD9CR5u+IXYdiseeEuXCVAjS54zqwkLcPNnmU4OeJ6tUrWhDw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/source-map-support\": {
      \"version\": \"0.5.21\",
      \"resolved\": \"https://registry.npmjs.org/source-map-support/-/source-map-support-0.5.21.tgz\",
      \"integrity\": \"sha512-uBHU3L3czsIyYXKX88fdrGovxdSCoTGDRZ6SYXtSRxLZUzHg5P/66Ht6uoUlHu9EZod+inXhKo3qQgwXUT/y1w==\",
      \"dev\": true,
      \"dependencies\": {
        \"buffer-from\": \"^1.0.0\",
        \"source-map\": \"^0.6.0\"
      }
    },
    \"node_modules/source-map-support/node_modules/source-map\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
      \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/spdx-correct\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.1.1.tgz\",
      \"integrity\": \"sha512-cOYcUWwhCuHCXi49RhFRCyJEK3iPj1Ziz9DpViV3tbZOwXD49QzIN3MpOLJNxh2qwq2lJJZaKMVw9qNi4jTC0w==\",
      \"dev\": true,
      \"dependencies\": {
        \"spdx-expression-parse\": \"^3.0.0\",
        \"spdx-license-ids\": \"^3.0.0\"
      }
    },
    \"node_modules/spdx-exceptions\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/spdx-exceptions/-/spdx-exceptions-2.3.0.tgz\",
      \"integrity\": \"sha512-/tTrYOC7PPI1nUAgx34hUpqXuyJG+DTHJTnIULG4rDygi4xu/tfgmq1e1cIRwRzwZgo4NLySi+ricLkZkw4i5A==\",
      \"dev\": true
    },
    \"node_modules/spdx-expression-parse\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/spdx-expression-parse/-/spdx-expression-parse-3.0.1.tgz\",
      \"integrity\": \"sha512-cbqHunsQWnJNE6KhVSMsMeH5H/L9EpymbzqTQ3uLwNCLZ1Q481oWaofqH7nO6V07xlXwY6PhQdQ2IedWx/ZK4Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"spdx-exceptions\": \"^2.1.0\",
        \"spdx-license-ids\": \"^3.0.0\"
      }
    },
    \"node_modules/spdx-license-ids\": {
      \"version\": \"3.0.5\",
      \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.5.tgz\",
      \"integrity\": \"sha512-J+FWzZoynJEXGphVIS+XEh3kFSjZX/1i9gFBaWQcB+/tmpe2qUsSBABpcxqxnAxFdiUFEgAX1bjYGQvIZmoz9Q==\",
      \"dev\": true
    },
    \"node_modules/ssri\": {
      \"version\": \"8.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ssri/-/ssri-8.0.1.tgz\",
      \"integrity\": \"sha512-97qShzy1AiyxvPNIkLWoGua7xoQzzPjQ0HAH4B0rWKo7SZ6USuPcrUiAFrws0UH8RrbWmgq3LMTObhPIHbbBeQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"minipass\": \"^3.1.1\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/stdout-stream\": {
      \"version\": \"1.4.1\",
      \"resolved\": \"https://registry.npmjs.org/stdout-stream/-/stdout-stream-1.4.1.tgz\",
      \"integrity\": \"sha512-j4emi03KXqJWcIeF8eIXkjMFN1Cmb8gUlDYGeBALLPo5qdyTfA9bOtl8m33lRoC+vFMkP3gl0WsDr6+gzxbbTA==\",
      \"dev\": true,
      \"dependencies\": {
        \"readable-stream\": \"^2.0.1\"
      }
    },
    \"node_modules/strict-uri-encode\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/strict-uri-encode/-/strict-uri-encode-1.1.0.tgz\",
      \"integrity\": \"sha1-J5siXfHVgrH1TmWt3UNS4Y+qBxM=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/string_decoder\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.1.1.tgz\",
      \"integrity\": \"sha512-n/ShnvDi6FHbbVfviro+WojiFzv+s8MPMHBczVePfUpDJLwoLT0ht1l4YwBCbi8pJAveEEdnkHyPyTP/mzRfwg==\",
      \"dev\": true,
      \"dependencies\": {
        \"safe-buffer\": \"~5.1.0\"
      }
    },
    \"node_modules/string-width\": {
      \"version\": \"4.2.3\",
      \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-4.2.3.tgz\",
      \"integrity\": \"sha512-wKyQRQpjJ0sIp62ErSZdGsjMJWsap5oRNihHhu6G7JVO/9jIB6UyevL+tXuOqrng8j/cxKTWyWUwvSTriiZz/g==\",
      \"dev\": true,
      \"dependencies\": {
        \"emoji-regex\": \"^8.0.0\",
        \"is-fullwidth-code-point\": \"^3.0.0\",
        \"strip-ansi\": \"^6.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/string-width/node_modules/ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/string-width/node_modules/strip-ansi\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
      \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-regex\": \"^5.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/string.prototype.trim\": {
      \"version\": \"1.2.7\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trim/-/string.prototype.trim-1.2.7.tgz\",
      \"integrity\": \"sha512-p6TmeT1T3411M8Cgg9wBTMRtY2q9+PNy9EV1i2lIXUN/btt763oIfxwN3RR8VU6wHX8j/1CFy0L+YuThm6bgOg==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/string.prototype.trimend\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trimend/-/string.prototype.trimend-1.0.6.tgz\",
      \"integrity\": \"sha512-JySq+4mrPf9EsDBEDYMOb/lM7XQLulwg5R/m1r0PXEFqrV0qHvl58sdTilSXtKOflCsK2E8jxf+GKC0T07RWwQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/string.prototype.trimstart\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trimstart/-/string.prototype.trimstart-1.0.6.tgz\",
      \"integrity\": \"sha512-omqjMDaY92pbn5HOX7f9IccLA+U1tA9GvtU4JrodiXFfYB7jPzzHpRzpglLAjtUV6bB557zwClJezTqnAiYnQA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/strip-bom\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-3.0.0.tgz\",
      \"integrity\": \"sha512-vavAMRXOgBVNF6nyEEmL3DBK19iRpDcoIwW+swQ+CbGiu7lju6t+JklA1MHweoWtadgt4ISVUsXLyDq34ddcwA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/strip-indent\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/strip-indent/-/strip-indent-3.0.0.tgz\",
      \"integrity\": \"sha512-laJTa3Jb+VQpaC6DseHhF7dXVqHTfJPCRDaEbid/drOhgitgYku/letMUqOXFoWV0zIIUbjpdH2t+tYj4bQMRQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"min-indent\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/strip-json-comments\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-json-comments/-/strip-json-comments-3.1.1.tgz\",
      \"integrity\": \"sha512-6fPc+R4ihwqP6N/aIv2f1gMH8lOVtWQHoqC4yK6oSDVVocumAsfCqjkXnqiYMhmMwS/mEHLp7Vehlt3ql6lEig==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/style-loader\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/style-loader/-/style-loader-2.0.0.tgz\",
      \"integrity\": \"sha512-Z0gYUJmzZ6ZdRUqpg1r8GsaFKypE+3xAzuFeMuoHgjc9KZv3wMyCRjQIWEbhoFSq7+7yoHXySDJyyWQaPajeiQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"webpack\": \"^4.0.0 || ^5.0.0\"
      }
    },
    \"node_modules/supports-color\": {
      \"version\": \"5.5.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
      \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
      \"dev\": true,
      \"dependencies\": {
        \"has-flag\": \"^3.0.0\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/supports-preserve-symlinks-flag\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-preserve-symlinks-flag/-/supports-preserve-symlinks-flag-1.0.0.tgz\",
      \"integrity\": \"sha512-ot0WnXS9fgdkgIcePe6RHNk1WA8+muPa6cSjeR3V8K27q9BB1rTE3R1p7Hv0z1ZyAc8s6Vvv8DIyWf681MAt0w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/tapable\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/tapable/-/tapable-2.2.1.tgz\",
      \"integrity\": \"sha512-GNzQvQTOIP6RyTfE2Qxb8ZVlNmw0n88vp1szwWRimP02mnTsx3Wtn5qRdqY9w2XduFNUgvOwhNnQsjwCp+kqaQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
      }
    },
    \"node_modules/tar\": {
      \"version\": \"6.1.11\",
      \"resolved\": \"https://registry.npmjs.org/tar/-/tar-6.1.11.tgz\",
      \"integrity\": \"sha512-an/KZQzQUkZCkuoAA64hM92X0Urb6VpRhAFllDzz44U2mcD5scmT3zBc4VgVpkugF580+DQn8eAFSyoQt0tznA==\",
      \"dev\": true,
      \"dependencies\": {
        \"chownr\": \"^2.0.0\",
        \"fs-minipass\": \"^2.0.0\",
        \"minipass\": \"^3.0.0\",
        \"minizlib\": \"^2.1.1\",
        \"mkdirp\": \"^1.0.3\",
        \"yallist\": \"^4.0.0\"
      },
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/terser\": {
      \"version\": \"5.17.1\",
      \"resolved\": \"https://registry.npmjs.org/terser/-/terser-5.17.1.tgz\",
      \"integrity\": \"sha512-hVl35zClmpisy6oaoKALOpS0rDYLxRFLHhRuDlEGTKey9qHjS1w9GMORjuwIMt70Wan4lwsLYyWDVnWgF+KUEw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/source-map\": \"^0.3.2\",
        \"acorn\": \"^8.5.0\",
        \"commander\": \"^2.20.0\",
        \"source-map-support\": \"~0.5.20\"
      },
      \"bin\": {
        \"terser\": \"bin/terser\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/terser-webpack-plugin\": {
      \"version\": \"5.3.7\",
      \"resolved\": \"https://registry.npmjs.org/terser-webpack-plugin/-/terser-webpack-plugin-5.3.7.tgz\",
      \"integrity\": \"sha512-AfKwIktyP7Cu50xNjXF/6Qb5lBNzYaWpU6YfoX3uZicTx0zTy0stDDCsvjDapKsSDvOeWo5MEq4TmdBy2cNoHw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"jest-worker\": \"^27.4.5\",
        \"schema-utils\": \"^3.1.1\",
        \"serialize-javascript\": \"^6.0.1\",
        \"terser\": \"^5.16.5\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"webpack\": \"^5.1.0\"
      },
      \"peerDependenciesMeta\": {
        \"@swc/core\": {
          \"optional\": true
        },
        \"esbuild\": {
          \"optional\": true
        },
        \"uglify-js\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/terser-webpack-plugin/node_modules/serialize-javascript\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-6.0.1.tgz\",
      \"integrity\": \"sha512-owoXEFjWRllis8/M1Q+Cw5k8ZH40e3zhp/ovX+Xr/vi1qj6QesbyXXViFbpNvWvPNAD62SutwEXavefrLJWj7w==\",
      \"dev\": true,
      \"dependencies\": {
        \"randombytes\": \"^2.1.0\"
      }
    },
    \"node_modules/terser/node_modules/commander\": {
      \"version\": \"2.20.3\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
      \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
      \"dev\": true
    },
    \"node_modules/text-table\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/text-table/-/text-table-0.2.0.tgz\",
      \"integrity\": \"sha1-f17oI66AUgfACvLfSoTsP8+lcLQ=\",
      \"dev\": true
    },
    \"node_modules/to-fast-properties\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-2.0.0.tgz\",
      \"integrity\": \"sha1-3F5pjL0HkmW8c+A3doGk5Og/YW4=\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/trim-newlines\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/trim-newlines/-/trim-newlines-3.0.1.tgz\",
      \"integrity\": \"sha512-c1PTsA3tYrIsLGkJkzHF+w9F2EyxfXGo4UyJc4pFL++FMjnq0HJS69T3M7d//gKrFKwy429bouPescbjecU+Zw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/true-case-path\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/true-case-path/-/true-case-path-2.2.1.tgz\",
      \"integrity\": \"sha512-0z3j8R7MCjy10kc/g+qg7Ln3alJTodw9aDuVWZa3uiWqfuBMKeAeP2ocWcxoyM3D73yz3Jt/Pu4qPr4wHSdB/Q==\",
      \"dev\": true
    },
    \"node_modules/tsconfig-paths\": {
      \"version\": \"3.14.2\",
      \"resolved\": \"https://registry.npmjs.org/tsconfig-paths/-/tsconfig-paths-3.14.2.tgz\",
      \"integrity\": \"sha512-o/9iXgCYc5L/JxCHPe3Hvh8Q/2xm5Z+p18PESBU6Ff33695QnCHBEjcytY2q19ua7Mbl/DavtBOLq+oG0RCL+g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/json5\": \"^0.0.29\",
        \"json5\": \"^1.0.2\",
        \"minimist\": \"^1.2.6\",
        \"strip-bom\": \"^3.0.0\"
      }
    },
    \"node_modules/type-check\": {
      \"version\": \"0.4.0\",
      \"resolved\": \"https://registry.npmjs.org/type-check/-/type-check-0.4.0.tgz\",
      \"integrity\": \"sha512-XleUoc9uwGXqjWwXaUTZAmzMcFZ5858QA2vvx1Ur5xIcixXIP+8LnFDgRplU30us6teqdlskFfu+ae4K79Ooew==\",
      \"dev\": true,
      \"dependencies\": {
        \"prelude-ls\": \"^1.2.1\"
      },
      \"engines\": {
        \"node\": \">= 0.8.0\"
      }
    },
    \"node_modules/type-detect\": {
      \"version\": \"4.0.8\",
      \"resolved\": \"https://registry.npmjs.org/type-detect/-/type-detect-4.0.8.tgz\",
      \"integrity\": \"sha512-0fr/mIH1dlO+x7TlcMy+bIDqKPsw/70tVyeHW787goQjhmqaZe10uwLujubK9q9Lg6Fiho1KUKDYz0Z7k7g5/g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/type-fest\": {
      \"version\": \"0.20.2\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.20.2.tgz\",
      \"integrity\": \"sha512-Ne+eE4r0/iWnpAxD852z3A+N0Bt5RN//NjJwRd2VFHEmrywxf5vsZlh4R6lixl6B+wz/8d+maTSAkN1FIkI3LQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/typed-array-buffer\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-buffer/-/typed-array-buffer-1.0.0.tgz\",
      \"integrity\": \"sha512-Y8KTSIglk9OZEr8zywiIHG/kmQ7KWyjseXs1CbSo8vC42w7hg2HgYTxSWwP0+is7bWDc1H+Fo026CpHFwm8tkw==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.2.1\",
        \"is-typed-array\": \"^1.1.10\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      }
    },
    \"node_modules/typed-array-byte-length\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-byte-length/-/typed-array-byte-length-1.0.0.tgz\",
      \"integrity\": \"sha512-Or/+kvLxNpeQ9DtSydonMxCx+9ZXOswtwJn17SNLvhptaXYDJvkFFP5zbfU/uLmvnBJlI4yrnXRxpdWH/M5tNA==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"has-proto\": \"^1.0.1\",
        \"is-typed-array\": \"^1.1.10\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/typed-array-byte-offset\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-byte-offset/-/typed-array-byte-offset-1.0.0.tgz\",
      \"integrity\": \"sha512-RD97prjEt9EL8YgAgpOkf3O4IF9lhJFr9g0htQkm0rchFp/Vx7LW5Q8fSXXub7BXAODyUQohRMyOc3faCPd0hg==\",
      \"dev\": true,
      \"dependencies\": {
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"has-proto\": \"^1.0.1\",
        \"is-typed-array\": \"^1.1.10\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/typed-array-length\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-length/-/typed-array-length-1.0.4.tgz\",
      \"integrity\": \"sha512-KjZypGq+I/H7HI5HlOoGHkWUUGq+Q0TPhQurLbyrVrvnKTBgzLhIJ7j6J/XTQOi0d1RjyZ0wdas8bKs2p0x3Ng==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"is-typed-array\": \"^1.1.9\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/unbox-primitive\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/unbox-primitive/-/unbox-primitive-1.0.2.tgz\",
      \"integrity\": \"sha512-61pPlCD9h51VoreyJ0BReideM3MDKMKnh6+V9L08331ipq6Q8OFXZYiqP6n/tbHx4s5I9uRhcye6BrbkizkBDw==\",
      \"dev\": true,
      \"dependencies\": {
        \"call-bind\": \"^1.0.2\",
        \"has-bigints\": \"^1.0.2\",
        \"has-symbols\": \"^1.0.3\",
        \"which-boxed-primitive\": \"^1.0.2\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/unicode-canonical-property-names-ecmascript\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-canonical-property-names-ecmascript/-/unicode-canonical-property-names-ecmascript-2.0.0.tgz\",
      \"integrity\": \"sha512-yY5PpDlfVIU5+y/BSCxAJRBIS1Zc2dDG3Ujq+sR0U+JjUevW2JhocOF+soROYDSaAezOzOKuyyixhD6mBknSmQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/unicode-match-property-ecmascript\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-match-property-ecmascript/-/unicode-match-property-ecmascript-2.0.0.tgz\",
      \"integrity\": \"sha512-5kaZCrbp5mmbz5ulBkDkbY0SsPOjKqVS35VpL9ulMPfSl0J0Xsm+9Evphv9CoIZFwre7aJoa94AY6seMKGVN5Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"unicode-canonical-property-names-ecmascript\": \"^2.0.0\",
        \"unicode-property-aliases-ecmascript\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/unicode-match-property-value-ecmascript\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-match-property-value-ecmascript/-/unicode-match-property-value-ecmascript-2.1.0.tgz\",
      \"integrity\": \"sha512-qxkjQt6qjg/mYscYMC0XKRn3Rh0wFPlfxB0xkt9CfyTvpX1Ra0+rAmdX2QyAobptSEvuy4RtpPRui6XkV+8wjA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/unicode-property-aliases-ecmascript\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-property-aliases-ecmascript/-/unicode-property-aliases-ecmascript-2.1.0.tgz\",
      \"integrity\": \"sha512-6t3foTQI9qne+OZoVQB/8x8rk2k1eVy1gRXhV3oFQ5T6R1dqQ1xtin3XqSlx3+ATBkliTaR/hHyJBm+LVPNM8w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4\"
      }
    },
    \"node_modules/unique-filename\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/unique-filename/-/unique-filename-1.1.1.tgz\",
      \"integrity\": \"sha512-Vmp0jIp2ln35UTXuryvjzkjGdRyf9b2lTXuSYUiPmzRcl3FDtYqAwOnTJkAngD9SWhnoJzDbTKwaOrZ+STtxNQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"unique-slug\": \"^2.0.0\"
      }
    },
    \"node_modules/unique-slug\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/unique-slug/-/unique-slug-2.0.2.tgz\",
      \"integrity\": \"sha512-zoWr9ObaxALD3DOPfjPSqxt4fnZiWblxHIgeWqW8x7UqDzEtHEQLzji2cuJYQFCU6KmoJikOYAZlrTHHebjx2w==\",
      \"dev\": true,
      \"dependencies\": {
        \"imurmurhash\": \"^0.1.4\"
      }
    },
    \"node_modules/update-browserslist-db\": {
      \"version\": \"1.0.13\",
      \"resolved\": \"https://registry.npmjs.org/update-browserslist-db/-/update-browserslist-db-1.0.13.tgz\",
      \"integrity\": \"sha512-xebP81SNcPuNpPP3uzeW1NYXxI3rxyJzF3pD6sH4jE7o/IX+WtSpwnVU+qIsDPyk0d3hmFQ7mjqc6AtV604hbg==\",
      \"dev\": true,
      \"funding\": [
        {
          \"type\": \"opencollective\",
          \"url\": \"https://opencollective.com/browserslist\"
        },
        {
          \"type\": \"tidelift\",
          \"url\": \"https://tidelift.com/funding/github/npm/browserslist\"
        },
        {
          \"type\": \"github\",
          \"url\": \"https://github.com/sponsors/ai\"
        }
      ],
      \"dependencies\": {
        \"escalade\": \"^3.1.1\",
        \"picocolors\": \"^1.0.0\"
      },
      \"bin\": {
        \"update-browserslist-db\": \"cli.js\"
      },
      \"peerDependencies\": {
        \"browserslist\": \">= 4.21.0\"
      }
    },
    \"node_modules/uri-js\": {
      \"version\": \"4.2.2\",
      \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.2.2.tgz\",
      \"integrity\": \"sha512-KY9Frmirql91X2Qgjry0Wd4Y+YTdrdZheS8TFwvkbLWf/G5KNJDCh6pKL5OZctEW4+0Baa5idK2ZQuELRwPznQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"punycode\": \"^2.1.0\"
      }
    },
    \"node_modules/util-deprecate\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
      \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
      \"dev\": true
    },
    \"node_modules/v8flags\": {
      \"version\": \"3.2.0\",
      \"resolved\": \"https://registry.npmjs.org/v8flags/-/v8flags-3.2.0.tgz\",
      \"integrity\": \"sha512-mH8etigqMfiGWdeXpaaqGfs6BndypxusHHcv2qSHyZkGEznCd/qAXCWWRzeowtL54147cktFOC4P5y+kl8d8Jg==\",
      \"dev\": true,
      \"dependencies\": {
        \"homedir-polyfill\": \"^1.0.1\"
      },
      \"engines\": {
        \"node\": \">= 0.10\"
      }
    },
    \"node_modules/validate-npm-package-license\": {
      \"version\": \"3.0.4\",
      \"resolved\": \"https://registry.npmjs.org/validate-npm-package-license/-/validate-npm-package-license-3.0.4.tgz\",
      \"integrity\": \"sha512-DpKm2Ui/xN7/HQKCtpZxoRWBhZ9Z0kqtygG8XCgNQ8ZlDnxuQmWhj566j8fN4Cu3/JmbhsDo7fcAJq4s9h27Ew==\",
      \"dev\": true,
      \"dependencies\": {
        \"spdx-correct\": \"^3.0.0\",
        \"spdx-expression-parse\": \"^3.0.0\"
      }
    },
    \"node_modules/watchpack\": {
      \"version\": \"2.4.0\",
      \"resolved\": \"https://registry.npmjs.org/watchpack/-/watchpack-2.4.0.tgz\",
      \"integrity\": \"sha512-Lcvm7MGST/4fup+ifyKi2hjyIAwcdI4HRgtvTpIUxBRhB+RFtUh8XtDOxUfctVCnhVi+QQj49i91OyvzkJl6cg==\",
      \"dev\": true,
      \"dependencies\": {
        \"glob-to-regexp\": \"^0.4.1\",
        \"graceful-fs\": \"^4.1.2\"
      },
      \"engines\": {
        \"node\": \">=10.13.0\"
      }
    },
    \"node_modules/watchpack/node_modules/glob-to-regexp\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/glob-to-regexp/-/glob-to-regexp-0.4.1.tgz\",
      \"integrity\": \"sha512-lkX1HJXwyMcprw/5YUZc2s7DrpAiHB21/V+E1rHUrVNokkvB6bqMzT0VfV6/86ZNabt1k14YOIaT7nDvOX3Iiw==\",
      \"dev\": true
    },
    \"node_modules/webpack\": {
      \"version\": \"5.89.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack/-/webpack-5.89.0.tgz\",
      \"integrity\": \"sha512-qyfIC10pOr70V+jkmud8tMfajraGCZMBWJtrmuBymQKCrLTRejBI8STDp1MCyZu/QTdZSeacCQYpYNQVOzX5kw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/eslint-scope\": \"^3.7.3\",
        \"@types/estree\": \"^1.0.0\",
        \"@webassemblyjs/ast\": \"^1.11.5\",
        \"@webassemblyjs/wasm-edit\": \"^1.11.5\",
        \"@webassemblyjs/wasm-parser\": \"^1.11.5\",
        \"acorn\": \"^8.7.1\",
        \"acorn-import-assertions\": \"^1.9.0\",
        \"browserslist\": \"^4.14.5\",
        \"chrome-trace-event\": \"^1.0.2\",
        \"enhanced-resolve\": \"^5.15.0\",
        \"es-module-lexer\": \"^1.2.1\",
        \"eslint-scope\": \"5.1.1\",
        \"events\": \"^3.2.0\",
        \"glob-to-regexp\": \"^0.4.1\",
        \"graceful-fs\": \"^4.2.9\",
        \"json-parse-even-better-errors\": \"^2.3.1\",
        \"loader-runner\": \"^4.2.0\",
        \"mime-types\": \"^2.1.27\",
        \"neo-async\": \"^2.6.2\",
        \"schema-utils\": \"^3.2.0\",
        \"tapable\": \"^2.1.1\",
        \"terser-webpack-plugin\": \"^5.3.7\",
        \"watchpack\": \"^2.4.0\",
        \"webpack-sources\": \"^3.2.3\"
      },
      \"bin\": {
        \"webpack\": \"bin/webpack.js\"
      },
      \"engines\": {
        \"node\": \">=10.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependenciesMeta\": {
        \"webpack-cli\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/webpack-cli\": {
      \"version\": \"4.10.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack-cli/-/webpack-cli-4.10.0.tgz\",
      \"integrity\": \"sha512-NLhDfH/h4O6UOy+0LSso42xvYypClINuMNBVVzX4vX98TmTaTUxwRbXdhucbFMd2qLaCTcLq/PdYrvi8onw90w==\",
      \"dev\": true,
      \"dependencies\": {
        \"@discoveryjs/json-ext\": \"^0.5.0\",
        \"@webpack-cli/configtest\": \"^1.2.0\",
        \"@webpack-cli/info\": \"^1.5.0\",
        \"@webpack-cli/serve\": \"^1.7.0\",
        \"colorette\": \"^2.0.14\",
        \"commander\": \"^7.0.0\",
        \"cross-spawn\": \"^7.0.3\",
        \"fastest-levenshtein\": \"^1.0.12\",
        \"import-local\": \"^3.0.2\",
        \"interpret\": \"^2.2.0\",
        \"rechoir\": \"^0.7.0\",
        \"webpack-merge\": \"^5.7.3\"
      },
      \"bin\": {
        \"webpack-cli\": \"bin/cli.js\"
      },
      \"engines\": {
        \"node\": \">=10.13.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"webpack\": \"4.x.x || 5.x.x\"
      },
      \"peerDependenciesMeta\": {
        \"@webpack-cli/generators\": {
          \"optional\": true
        },
        \"@webpack-cli/migrate\": {
          \"optional\": true
        },
        \"webpack-bundle-analyzer\": {
          \"optional\": true
        },
        \"webpack-dev-server\": {
          \"optional\": true
        }
      }
    },
    \"node_modules/webpack-cli/node_modules/commander\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-7.2.0.tgz\",
      \"integrity\": \"sha512-QrWXB+ZQSVPmIWIhtEO9H+gwHaMGYiF5ChvoJ+K9ZGHG/sVsa6yiesAD1GC/x46sET00Xlwo1u49RVVVzvcSkw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 10\"
      }
    },
    \"node_modules/webpack-merge\": {
      \"version\": \"5.8.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack-merge/-/webpack-merge-5.8.0.tgz\",
      \"integrity\": \"sha512-/SaI7xY0831XwP6kzuwhKWVKDP9t1QY1h65lAFLbZqMPIuYcD9QAW4u9STIbU9kaJbPBB/geU/gLr1wDjOhQ+Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"clone-deep\": \"^4.0.1\",
        \"wildcard\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=10.0.0\"
      }
    },
    \"node_modules/webpack-sources\": {
      \"version\": \"1.4.3\",
      \"resolved\": \"https://registry.npmjs.org/webpack-sources/-/webpack-sources-1.4.3.tgz\",
      \"integrity\": \"sha512-lgTS3Xhv1lCOKo7SA5TjKXMjpSM4sBjNV5+q2bqesbSPs5FjGmU6jjtBSkX9b4qW87vDIsCIlUPOEhbZrMdjeQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"source-list-map\": \"^2.0.0\",
        \"source-map\": \"~0.6.1\"
      }
    },
    \"node_modules/webpack-sources/node_modules/source-map\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
      \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/webpack/node_modules/glob-to-regexp\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/glob-to-regexp/-/glob-to-regexp-0.4.1.tgz\",
      \"integrity\": \"sha512-lkX1HJXwyMcprw/5YUZc2s7DrpAiHB21/V+E1rHUrVNokkvB6bqMzT0VfV6/86ZNabt1k14YOIaT7nDvOX3Iiw==\",
      \"dev\": true
    },
    \"node_modules/webpack/node_modules/webpack-sources\": {
      \"version\": \"3.2.3\",
      \"resolved\": \"https://registry.npmjs.org/webpack-sources/-/webpack-sources-3.2.3.tgz\",
      \"integrity\": \"sha512-/DyMEOrDgLKKIG0fmvtz+4dUX/3Ghozwgm6iPp8KRhvn+eQf9+Q7GWxVNMk3+uCPWfdXYC4ExGBckIXdFEfH1w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10.13.0\"
      }
    },
    \"node_modules/which\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/which/-/which-2.0.2.tgz\",
      \"integrity\": \"sha512-BLI3Tl1TW3Pvl70l3yq3Y64i+awpwXqsGBYWkkqMtnbXgrMD+yj7rhW0kuEDxzJaYXGjEW5ogapKNMEKNMjibA==\",
      \"dev\": true,
      \"dependencies\": {
        \"isexe\": \"^2.0.0\"
      },
      \"bin\": {
        \"node-which\": \"bin/node-which\"
      },
      \"engines\": {
        \"node\": \">= 8\"
      }
    },
    \"node_modules/which-boxed-primitive\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/which-boxed-primitive/-/which-boxed-primitive-1.0.2.tgz\",
      \"integrity\": \"sha512-bwZdv0AKLpplFY2KZRX6TvyuN7ojjr7lwkg6ml0roIy9YeuSr7JS372qlNW18UQYzgYK9ziGcerWqZOmEn9VNg==\",
      \"dev\": true,
      \"dependencies\": {
        \"is-bigint\": \"^1.0.1\",
        \"is-boolean-object\": \"^1.1.0\",
        \"is-number-object\": \"^1.0.4\",
        \"is-string\": \"^1.0.5\",
        \"is-symbol\": \"^1.0.3\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/which-typed-array\": {
      \"version\": \"1.1.11\",
      \"resolved\": \"https://registry.npmjs.org/which-typed-array/-/which-typed-array-1.1.11.tgz\",
      \"integrity\": \"sha512-qe9UWWpkeG5yzZ0tNYxDmd7vo58HDBc39mZ0xWWpolAGADdFOzkfamWLDxkOWcvHQKVmdTyQdLD4NOfjLWTKew==\",
      \"dev\": true,
      \"dependencies\": {
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"gopd\": \"^1.0.1\",
        \"has-tostringtag\": \"^1.0.0\"
      },
      \"engines\": {
        \"node\": \">= 0.4\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/ljharb\"
      }
    },
    \"node_modules/wide-align\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/wide-align/-/wide-align-1.1.5.tgz\",
      \"integrity\": \"sha512-eDMORYaPNZ4sQIuuYPDHdQvf4gyCF9rEEV/yPxGfwPkRodwEgiMUUXTx/dex+Me0wxx53S+NgUHaP7y3MGlDmg==\",
      \"dev\": true,
      \"dependencies\": {
        \"string-width\": \"^1.0.2 || 2 || 3 || 4\"
      }
    },
    \"node_modules/wildcard\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/wildcard/-/wildcard-2.0.0.tgz\",
      \"integrity\": \"sha512-JcKqAHLPxcdb9KM49dufGXn2x3ssnfjbcaQdLlfZsL9rH9wgDQjUtDxbo8NE0F6SFvydeu1VhZe7hZuHsB2/pw==\",
      \"dev\": true
    },
    \"node_modules/workerpool\": {
      \"version\": \"6.2.1\",
      \"resolved\": \"https://registry.npmjs.org/workerpool/-/workerpool-6.2.1.tgz\",
      \"integrity\": \"sha512-ILEIE97kDZvF9Wb9f6h5aXK4swSlKGUcOEGiIYb2OOu/IrDU9iwj0fD//SsA6E5ibwJxpEvhullJY4Sl4GcpAw==\",
      \"dev\": true
    },
    \"node_modules/wrap-ansi\": {
      \"version\": \"7.0.0\",
      \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-7.0.0.tgz\",
      \"integrity\": \"sha512-YVGIj2kamLSTxw6NsZjoBxfSwsn0ycdesmc4p+Q21c5zPuZ1pl+NfxVdxPtdHvmNVOQ6XSYG4AUtyt/Fi7D16Q==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-styles\": \"^4.0.0\",
        \"string-width\": \"^4.1.0\",
        \"strip-ansi\": \"^6.0.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/wrap-ansi?sponsor=1\"
      }
    },
    \"node_modules/wrap-ansi/node_modules/ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/wrap-ansi/node_modules/ansi-styles\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
      \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-convert\": \"^2.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      },
      \"funding\": {
        \"url\": \"https://github.com/chalk/ansi-styles?sponsor=1\"
      }
    },
    \"node_modules/wrap-ansi/node_modules/color-convert\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
      \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"color-name\": \"~1.1.4\"
      },
      \"engines\": {
        \"node\": \">=7.0.0\"
      }
    },
    \"node_modules/wrap-ansi/node_modules/color-name\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
      \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
      \"dev\": true
    },
    \"node_modules/wrap-ansi/node_modules/strip-ansi\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
      \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
      \"dev\": true,
      \"dependencies\": {
        \"ansi-regex\": \"^5.0.1\"
      },
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/wrappy\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
      \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\",
      \"dev\": true
    },
    \"node_modules/y18n\": {
      \"version\": \"5.0.8\",
      \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-5.0.8.tgz\",
      \"integrity\": \"sha512-0pfFzegeDWJHJIAmTLRP2DwHjdF5s7jo9tuztdQxAhINCdvS+3nGINqPd00AphqJR/0LhANUS6/+7SCb98YOfA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/yallist\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-4.0.0.tgz\",
      \"integrity\": \"sha512-3wdGidZyq5PB084XLES5TpOSRA3wjXAlIWMhum2kRcv/41Sn2emQ0dycQW4uZXLejwKvg6EsvbdlVL+FYEct7A==\",
      \"dev\": true
    },
    \"node_modules/yargs\": {
      \"version\": \"17.5.1\",
      \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-17.5.1.tgz\",
      \"integrity\": \"sha512-t6YAJcxDkNX7NFYiVtKvWUz8l+PaKTLiL63mJYWR2GnHq2gjEWISzsLp9wg3aY36dY1j+gfIEL3pIF+XlJJfbA==\",
      \"dev\": true,
      \"dependencies\": {
        \"cliui\": \"^7.0.2\",
        \"escalade\": \"^3.1.1\",
        \"get-caller-file\": \"^2.0.5\",
        \"require-directory\": \"^2.1.1\",
        \"string-width\": \"^4.2.3\",
        \"y18n\": \"^5.0.5\",
        \"yargs-parser\": \"^21.0.0\"
      },
      \"engines\": {
        \"node\": \">=12\"
      }
    },
    \"node_modules/yargs-parser\": {
      \"version\": \"20.2.9\",
      \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-20.2.9.tgz\",
      \"integrity\": \"sha512-y11nGElTIV+CT3Zv9t7VKl+Q3hTQoT9a1Qzezhhl6Rp21gJ/IVTW7Z3y9EWXhuUBC2Shnf+DX0antecpAwSP8w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/yargs-unparser\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/yargs-unparser/-/yargs-unparser-2.0.0.tgz\",
      \"integrity\": \"sha512-7pRTIA9Qc1caZ0bZ6RYRGbHJthJWuakf+WmHK0rVeLkNrrGhfoabBNdue6kdINI6r4if7ocq9aD/n7xwKOdzOA==\",
      \"dev\": true,
      \"dependencies\": {
        \"camelcase\": \"^6.0.0\",
        \"decamelize\": \"^4.0.0\",
        \"flat\": \"^5.0.2\",
        \"is-plain-obj\": \"^2.1.0\"
      },
      \"engines\": {
        \"node\": \">=10\"
      }
    },
    \"node_modules/yargs-unparser/node_modules/camelcase\": {
      \"version\": \"6.2.0\",
      \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-6.2.0.tgz\",
      \"integrity\": \"sha512-c7wVvbw3f37nuobQNtgsgG9POC9qMbNuMQmTCqZv23b6MIz0fcYpBiOlv9gEN/hdLdnZTDQhg6e9Dq5M1vKvfg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/yargs-unparser/node_modules/decamelize\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-4.0.0.tgz\",
      \"integrity\": \"sha512-9iE1PgSik9HeIIw2JO94IidnE3eBoQrFJ3w7sFuzSX4DpmZ3v5sZpUiV5Swcf6mQEF+Y0ru8Neo+p+nyh2J+hQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/yargs-unparser/node_modules/is-plain-obj\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-plain-obj/-/is-plain-obj-2.1.0.tgz\",
      \"integrity\": \"sha512-YWnfyRwxL/+SsrWYfOpUtz5b3YD+nyfkHvjbcanzk8zgyO4ASD67uVMRt8k5bM4lLMDnXfriRhOpemw+NfT1eA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/yargs/node_modules/yargs-parser\": {
      \"version\": \"21.1.1\",
      \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-21.1.1.tgz\",
      \"integrity\": \"sha512-tVpsJW7DdjecAiFpbIB1e3qxIQsE6NoPc5/eTdrbbIC4h0LVsWhnoa3g+m2HclBIujHzsxZ4VJVA+GUuc2/LBw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=12\"
      }
    },
    \"node_modules/yocto-queue\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/yocto-queue/-/yocto-queue-0.1.0.tgz\",
      \"integrity\": \"sha512-rVksvsnNCdJ/ohGc6xgPwyN8eheCxsiLM8mxuE/t/mOVqJewPuO1miLpTHQiRgTKCLexL4MeAFVagts7HmNZ2Q==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    }
  },
  \"dependencies\": {
    \"@aashutoshrathi/word-wrap\": {
      \"version\": \"1.2.6\",
      \"resolved\": \"https://registry.npmjs.org/@aashutoshrathi/word-wrap/-/word-wrap-1.2.6.tgz\",
      \"integrity\": \"sha512-1Yjs2SvM8TflER/OD3cOjhWWOZb58A2t7wpE2S9XfBYTiIl+XFhQG2bjy4Pu1I+EAlCNUzRDYDdFwFYUKvXcIA==\",
      \"dev\": true
    },
    \"@ampproject/remapping\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@ampproject/remapping/-/remapping-2.2.0.tgz\",
      \"integrity\": \"sha512-qRmjj8nj9qmLTQXXmaR1cck3UXSRMPrbsLJAasZpF+t3riI71BXed5ebIOYwQntykeZuhjsdweEc9BxH5Jc26w==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/gen-mapping\": \"^0.1.0\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      },
      \"dependencies\": {
        \"@jridgewell/gen-mapping\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/@jridgewell/gen-mapping/-/gen-mapping-0.1.1.tgz\",
          \"integrity\": \"sha512-sQXCasFk+U8lWYEe66WxRDOE9PjVz4vSM51fTu3Hw+ClTpUSQb718772vH3pyS5pShp6lvQM7SxgIDXXXmOX7w==\",
          \"dev\": true,
          \"requires\": {
            \"@jridgewell/set-array\": \"^1.0.0\",
            \"@jridgewell/sourcemap-codec\": \"^1.4.10\"
          }
        }
      }
    },
    \"@babel/cli\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/cli/-/cli-7.23.0.tgz\",
      \"integrity\": \"sha512-17E1oSkGk2IwNILM4jtfAvgjt+ohmpfBky8aLerUfYZhiPNg7ca+CRCxZn8QDxwNhV/upsc2VHBCqGFIR+iBfA==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"@nicolo-ribaudo/chokidar-2\": \"2.1.8-no-fsevents.3\",
        \"chokidar\": \"^3.4.0\",
        \"commander\": \"^4.0.1\",
        \"convert-source-map\": \"^2.0.0\",
        \"fs-readdir-recursive\": \"^1.1.0\",
        \"glob\": \"^7.2.0\",
        \"make-dir\": \"^2.1.0\",
        \"slash\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"glob\": {
          \"version\": \"7.2.3\",
          \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.3.tgz\",
          \"integrity\": \"sha512-nFR0zLpU2YCaRxwoCJvL6UvCH2JFyFVIvwTLsIf21AuHlMskA1hhTdk+LlYJtOlYt9v6dvszD2BGRqBL+iQK9Q==\",
          \"dev\": true,
          \"requires\": {
            \"fs.realpath\": \"^1.0.0\",
            \"inflight\": \"^1.0.4\",
            \"inherits\": \"2\",
            \"minimatch\": \"^3.1.1\",
            \"once\": \"^1.3.0\",
            \"path-is-absolute\": \"^1.0.0\"
          }
        },
        \"minimatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
          \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^1.1.7\"
          }
        }
      }
    },
    \"@babel/code-frame\": {
      \"version\": \"7.22.13\",
      \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.22.13.tgz\",
      \"integrity\": \"sha512-XktuhWlJ5g+3TJXc5upd9Ks1HutSArik6jf2eAjYFyIOf4ej3RN+184cZbzDvbPnuTJIUhPKKJE3cIsYTiAT3w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/highlight\": \"^7.22.13\",
        \"chalk\": \"^2.4.2\"
      }
    },
    \"@babel/compat-data\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/compat-data/-/compat-data-7.23.3.tgz\",
      \"integrity\": \"sha512-BmR4bWbDIoFJmJ9z2cZ8Gmm2MXgEDgjdWgpKmKWUt54UGFJdlj31ECtbaDvCG/qVdG3AQ1SfpZEs01lUFbzLOQ==\",
      \"dev\": true
    },
    \"@babel/core\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/core/-/core-7.23.3.tgz\",
      \"integrity\": \"sha512-Jg+msLuNuCJDyBvFv5+OKOUjWMZgd85bKjbICd3zWrKAo+bJ49HJufi7CQE0q0uR8NGyO6xkCACScNqyjHSZew==\",
      \"dev\": true,
      \"requires\": {
        \"@ampproject/remapping\": \"^2.2.0\",
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.3\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helpers\": \"^7.23.2\",
        \"@babel/parser\": \"^7.23.3\",
        \"@babel/template\": \"^7.22.15\",
        \"@babel/traverse\": \"^7.23.3\",
        \"@babel/types\": \"^7.23.3\",
        \"convert-source-map\": \"^2.0.0\",
        \"debug\": \"^4.1.0\",
        \"gensync\": \"^1.0.0-beta.2\",
        \"json5\": \"^2.2.3\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.2\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.2.tgz\",
          \"integrity\": \"sha512-mOp8wKcvj7XxC78zLgw/ZA+6TSgkoE2C/ienthhRD298T7UNwAg9diBpLRxC0mOezLl4B0xV7M0cCO6P/O0Xhw==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
          \"dev\": true
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        },
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"@babel/eslint-parser\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/eslint-parser/-/eslint-parser-7.23.3.tgz\",
      \"integrity\": \"sha512-9bTuNlyx7oSstodm1cR1bECj4fkiknsDa1YniISkJemMY3DGhJNYBECbe6QD/q54mp2J8VO66jW3/7uP//iFCw==\",
      \"dev\": true,
      \"requires\": {
        \"@nicolo-ribaudo/eslint-scope-5-internals\": \"5.1.1-v1\",
        \"eslint-visitor-keys\": \"^2.1.0\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"eslint-visitor-keys\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-2.1.0.tgz\",
          \"integrity\": \"sha512-0rSmRBzXgDzIsD6mGdJgevzgezI534Cer5L/vyMX0kHzT/jiB43jRhd9YUlMGYLQy2zprNmoT8qasCGtY+QaKw==\",
          \"dev\": true
        },
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"@babel/generator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/generator/-/generator-7.23.3.tgz\",
      \"integrity\": \"sha512-keeZWAV4LU3tW0qRi19HRpabC/ilM0HRBBzf9/k8FFiG4KVpiv0FIy4hHfLfFQZNhziCTPTmd59zoyv6DNISzg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.23.3\",
        \"@jridgewell/gen-mapping\": \"^0.3.2\",
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"jsesc\": \"^2.5.1\"
      }
    },
    \"@babel/helper-annotate-as-pure\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-annotate-as-pure/-/helper-annotate-as-pure-7.22.5.tgz\",
      \"integrity\": \"sha512-LvBTxu8bQSQkcyKOU+a1btnNFQ1dMAd0R6PyW3arXes06F6QLWLIrd681bxRPIXlrMGR3XYnW9JyML7dP3qgxg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-builder-binary-assignment-operator-visitor\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-builder-binary-assignment-operator-visitor/-/helper-builder-binary-assignment-operator-visitor-7.22.15.tgz\",
      \"integrity\": \"sha512-QkBXwGgaoC2GtGZRoma6kv7Szfv06khvhFav67ZExau2RaXzy8MpHSMO2PNoP2XtmQphJQRHFfg77Bq731Yizw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.15\"
      }
    },
    \"@babel/helper-compilation-targets\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-compilation-targets/-/helper-compilation-targets-7.22.15.tgz\",
      \"integrity\": \"sha512-y6EEzULok0Qvz8yyLkCvVX+02ic+By2UdOhylwUOvOn9dvYc9mKICJuuU1n1XBI02YWsNsnrY1kc6DVbjcXbtw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.22.9\",
        \"@babel/helper-validator-option\": \"^7.22.15\",
        \"browserslist\": \"^4.21.9\",
        \"lru-cache\": \"^5.1.1\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"lru-cache\": {
          \"version\": \"5.1.1\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-5.1.1.tgz\",
          \"integrity\": \"sha512-KpNARQA3Iwv+jTA0utUVVbrh+Jlrr1Fv0e56GGzAFOXN7dk/FviaDW8LHmK52DlcH4WP2n6gI8vN1aesBFgo9w==\",
          \"dev\": true,
          \"requires\": {
            \"yallist\": \"^3.0.2\"
          }
        },
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        },
        \"yallist\": {
          \"version\": \"3.1.1\",
          \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-3.1.1.tgz\",
          \"integrity\": \"sha512-a4UGQaWPH59mOXUYnAG2ewncQS4i4F43Tv3JoAM+s2VDAmS9NsK8GpDMLrCHPksFT7h3K6TOoUNn2pb7RoXx4g==\",
          \"dev\": true
        }
      }
    },
    \"@babel/helper-create-class-features-plugin\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-create-class-features-plugin/-/helper-create-class-features-plugin-7.22.15.tgz\",
      \"integrity\": \"sha512-jKkwA59IXcvSaiK2UN45kKwSC9o+KuoXsBDvHvU/7BecYIp8GQ2UwrVvFgJASUT+hBnwJx6MhvMCuMzwZZ7jlg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/helper-member-expression-to-functions\": \"^7.22.15\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.9\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"@babel/helper-create-regexp-features-plugin\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-create-regexp-features-plugin/-/helper-create-regexp-features-plugin-7.22.15.tgz\",
      \"integrity\": \"sha512-29FkPLFjn4TPEa3RE7GpW+qbE8tlsu3jntNYNfcGsc49LphF1PQIiD+vMZ1z1xVOKt+93khA9tc2JBs3kBjA7w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"regexpu-core\": \"^5.3.1\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"@babel/helper-define-polyfill-provider\": {
      \"version\": \"0.4.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-define-polyfill-provider/-/helper-define-polyfill-provider-0.4.3.tgz\",
      \"integrity\": \"sha512-WBrLmuPP47n7PNwsZ57pqam6G/RGo1vw/87b0Blc53tZNGZ4x7YvZ6HgQe2vo1W/FR20OgjeZuGXzudPiXHFug==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-compilation-targets\": \"^7.22.6\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"debug\": \"^4.1.1\",
        \"lodash.debounce\": \"^4.0.8\",
        \"resolve\": \"^1.14.2\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"@babel/helper-environment-visitor\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-environment-visitor/-/helper-environment-visitor-7.22.20.tgz\",
      \"integrity\": \"sha512-zfedSIzFhat/gFhWfHtgWvlec0nqB9YEIVrpuwjruLlXfUSnA8cJB0miHKwqDnQ7d32aKo2xt88/xZptwxbfhA==\",
      \"dev\": true
    },
    \"@babel/helper-function-name\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-function-name/-/helper-function-name-7.23.0.tgz\",
      \"integrity\": \"sha512-OErEqsrxjZTJciZ4Oo+eoZqeW9UIiOcuYKRJA4ZAgV9myA+pOXhhmpfNCKjEH/auVfEYVFJ6y1Tc4r0eIApqiw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/template\": \"^7.22.15\",
        \"@babel/types\": \"^7.23.0\"
      }
    },
    \"@babel/helper-hoist-variables\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-hoist-variables/-/helper-hoist-variables-7.22.5.tgz\",
      \"integrity\": \"sha512-wGjk9QZVzvknA6yKIUURb8zY3grXCcOZt+/7Wcy8O2uctxhplmUPkOdlgoNhmdVee2c92JXbf1xpMtVNbfoxRw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-member-expression-to-functions\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-member-expression-to-functions/-/helper-member-expression-to-functions-7.23.0.tgz\",
      \"integrity\": \"sha512-6gfrPwh7OuT6gZyJZvd6WbTfrqAo7vm4xCzAXOusKqq/vWdKXphTpj5klHKNmRUU6/QRGlBsyU9mAIPaWHlqJA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.23.0\"
      }
    },
    \"@babel/helper-module-imports\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-imports/-/helper-module-imports-7.22.15.tgz\",
      \"integrity\": \"sha512-0pYVBnDKZO2fnSPCrgM/6WMc7eS20Fbok+0r88fp+YtWVLZrp4CkafFGIp+W0VKw4a22sgebPT99y+FDNMdP4w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.15\"
      }
    },
    \"@babel/helper-module-transforms\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-transforms/-/helper-module-transforms-7.23.3.tgz\",
      \"integrity\": \"sha512-7bBs4ED9OmswdfDzpz4MpWgSrV7FXlc3zIagvLFjS5H+Mk7Snr21vQ6QwrsoCGMfNC4e4LQPdoULEt4ykz0SRQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-module-imports\": \"^7.22.15\",
        \"@babel/helper-simple-access\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\"
      }
    },
    \"@babel/helper-optimise-call-expression\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-optimise-call-expression/-/helper-optimise-call-expression-7.22.5.tgz\",
      \"integrity\": \"sha512-HBwaojN0xFRx4yIvpwGqxiV2tUfl7401jlok564NgB9EHS1y6QT17FmKWm4ztqjeVdXLuC4fSvHc5ePpQjoTbw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-plugin-utils\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-plugin-utils/-/helper-plugin-utils-7.22.5.tgz\",
      \"integrity\": \"sha512-uLls06UVKgFG9QD4OeFYLEGteMIAa5kpTPcFL28yuCIIzsf6ZyKZMllKVOCZFhiZ5ptnwX4mtKdWCBE/uT4amg==\",
      \"dev\": true
    },
    \"@babel/helper-remap-async-to-generator\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-remap-async-to-generator/-/helper-remap-async-to-generator-7.22.20.tgz\",
      \"integrity\": \"sha512-pBGyV4uBqOns+0UvhsTO8qgl8hO89PmiDYv+/COyp1aeMcmfrfruz+/nCMFiYyFF/Knn0yfrC85ZzNFjembFTw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-wrap-function\": \"^7.22.20\"
      }
    },
    \"@babel/helper-replace-supers\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-replace-supers/-/helper-replace-supers-7.22.20.tgz\",
      \"integrity\": \"sha512-qsW0In3dbwQUbK8kejJ4R7IHVGwHJlV6lpG6UA7a9hSa2YEiAib+N1T2kr6PEeUT+Fl7najmSOS6SmAwCHK6Tw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-member-expression-to-functions\": \"^7.22.15\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\"
      }
    },
    \"@babel/helper-simple-access\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-simple-access/-/helper-simple-access-7.22.5.tgz\",
      \"integrity\": \"sha512-n0H99E/K+Bika3++WNL17POvo4rKWZ7lZEp1Q+fStVbUi8nxPQEBOlTmCOxW/0JsS56SKKQ+ojAe2pHKJHN35w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-skip-transparent-expression-wrappers\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-skip-transparent-expression-wrappers/-/helper-skip-transparent-expression-wrappers-7.22.5.tgz\",
      \"integrity\": \"sha512-tK14r66JZKiC43p8Ki33yLBVJKlQDFoA8GYN67lWCDCqoL6EMMSuM9b+Iff2jHaM/RRFYl7K+iiru7hbRqNx8Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-split-export-declaration\": {
      \"version\": \"7.22.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-split-export-declaration/-/helper-split-export-declaration-7.22.6.tgz\",
      \"integrity\": \"sha512-AsUnxuLhRYsisFiaJwvp1QF+I3KjD5FOxut14q/GzovUe6orHLesW2C7d754kRm53h5gqrz6sFl6sxc4BVtE/g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-string-parser\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-string-parser/-/helper-string-parser-7.22.5.tgz\",
      \"integrity\": \"sha512-mM4COjgZox8U+JcXQwPijIZLElkgEpO5rsERVDJTc2qfCDfERyob6k5WegS14SX18IIjv+XD+GrqNumY5JRCDw==\",
      \"dev\": true
    },
    \"@babel/helper-validator-identifier\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.20.tgz\",
      \"integrity\": \"sha512-Y4OZ+ytlatR8AI+8KZfKuL5urKp7qey08ha31L8b3BwewJAoJamTzyvxPR/5D+KkdJCGPq/+8TukHBlY10FX9A==\",
      \"dev\": true
    },
    \"@babel/helper-validator-option\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-option/-/helper-validator-option-7.22.15.tgz\",
      \"integrity\": \"sha512-bMn7RmyFjY/mdECUbgn9eoSY4vqvacUnS9i9vGAGttgFWesO6B4CYWA7XlpbWgBt71iv/hfbPlynohStqnu5hA==\",
      \"dev\": true
    },
    \"@babel/helper-wrap-function\": {
      \"version\": \"7.22.20\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-wrap-function/-/helper-wrap-function-7.22.20.tgz\",
      \"integrity\": \"sha512-pms/UwkOpnQe/PDAEdV/d7dVCoBbB+R4FvYoHGZz+4VPcg7RtYy2KP7S2lbuWM6FCSgob5wshfGESbC/hzNXZw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/template\": \"^7.22.15\",
        \"@babel/types\": \"^7.22.19\"
      }
    },
    \"@babel/helpers\": {
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helpers/-/helpers-7.23.2.tgz\",
      \"integrity\": \"sha512-lzchcp8SjTSVe/fPmLwtWVBFC7+Tbn8LGHDVfDp9JGxpAY5opSaEFgt8UQvrnECWOTdji2mOWMz1rOhkHscmGQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/template\": \"^7.22.15\",
        \"@babel/traverse\": \"^7.23.2\",
        \"@babel/types\": \"^7.23.0\"
      }
    },
    \"@babel/highlight\": {
      \"version\": \"7.22.13\",
      \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.22.13.tgz\",
      \"integrity\": \"sha512-C/BaXcnnvBCmHTpz/VGZ8jgtE2aYlW4hxDhseJAWZb7gqGM/qtCK6iZUb0TyKFf7BOUsBH7Q7fkRsDRhg1XklQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-validator-identifier\": \"^7.22.5\",
        \"chalk\": \"^2.4.2\",
        \"js-tokens\": \"^4.0.0\"
      }
    },
    \"@babel/node\": {
      \"version\": \"7.22.19\",
      \"resolved\": \"https://registry.npmjs.org/@babel/node/-/node-7.22.19.tgz\",
      \"integrity\": \"sha512-VsKSO9aEHdO16NdtqkJfrXZ9Sxlna1BVnBbToWr1KGdI3cyIk6KqOoa8mWvpK280lJDOwJqxvnl994KmLhq1Yw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/register\": \"^7.22.15\",
        \"commander\": \"^4.0.1\",
        \"core-js\": \"^3.30.2\",
        \"node-environment-flags\": \"^1.0.5\",
        \"regenerator-runtime\": \"^0.14.0\",
        \"v8flags\": \"^3.1.1\"
      }
    },
    \"@babel/parser\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/parser/-/parser-7.23.3.tgz\",
      \"integrity\": \"sha512-uVsWNvlVsIninV2prNz/3lHCb+5CJ+e+IUBfbjToAHODtfGYLfCFuY4AU7TskI+dAKk+njsPiBjq1gKTvZOBaw==\",
      \"dev\": true
    },
    \"@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression/-/plugin-bugfix-safari-id-destructuring-collision-in-function-expression-7.23.3.tgz\",
      \"integrity\": \"sha512-iRkKcCqb7iGnq9+3G6rZ+Ciz5VywC4XNRHe57lKM+jOeYAoR0lVqdeeDRfh0tQcTfw/+vBhHn926FmQhLtlFLQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining/-/plugin-bugfix-v8-spread-parameters-in-optional-chaining-7.23.3.tgz\",
      \"integrity\": \"sha512-WwlxbfMNdVEpQjZmK5mhm7oSwD3dS6eU+Iwsi4Knl9wAletWem7kaRsGOG+8UEbRyqxY4SS5zvtfXwX+jMxUwQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/plugin-transform-optional-chaining\": \"^7.23.3\"
      }
    },
    \"@babel/plugin-bugfix-v8-static-class-fields-redefine-readonly\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-v8-static-class-fields-redefine-readonly/-/plugin-bugfix-v8-static-class-fields-redefine-readonly-7.23.3.tgz\",
      \"integrity\": \"sha512-XaJak1qcityzrX0/IU5nKHb34VaibwP3saKqG6a/tppelgllOH13LUann4ZCIBcVOeE6H18K4Vx9QKkVww3z/w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-proposal-private-property-in-object\": {
      \"version\": \"7.21.0-placeholder-for-preset-env.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-proposal-private-property-in-object/-/plugin-proposal-private-property-in-object-7.21.0-placeholder-for-preset-env.2.tgz\",
      \"integrity\": \"sha512-SOSkfJDddaM7mak6cPEpswyTRnuRltl429hMraQEglW+OkovnCzsiszTmsrlY//qLFjCpQDFRvjdm2wA5pPm9w==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"@babel/plugin-syntax-async-generators\": {
      \"version\": \"7.8.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-async-generators/-/plugin-syntax-async-generators-7.8.4.tgz\",
      \"integrity\": \"sha512-tycmZxkGfZaxhMRbXlPXuVFpdWlXpir2W4AMhSJgRKzk/eDlIXOhb2LHWoLpDF7TEHylV5zNhykX6KAgHJmTNw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-class-properties\": {
      \"version\": \"7.12.13\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-class-properties/-/plugin-syntax-class-properties-7.12.13.tgz\",
      \"integrity\": \"sha512-fm4idjKla0YahUNgFNLCB0qySdsoPiZP3iQE3rky0mBUtMZ23yDJ9SJdg6dXTSDnulOVqiF3Hgr9nbXvXTQZYA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.12.13\"
      }
    },
    \"@babel/plugin-syntax-class-static-block\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-class-static-block/-/plugin-syntax-class-static-block-7.14.5.tgz\",
      \"integrity\": \"sha512-b+YyPmr6ldyNnM6sqYeMWE+bgJcJpO6yS4QD7ymxgH34GBPNDM/THBh8iunyvKIZztiwLH4CJZ0RxTk9emgpjw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-syntax-dynamic-import\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-dynamic-import/-/plugin-syntax-dynamic-import-7.8.3.tgz\",
      \"integrity\": \"sha512-5gdGbFon+PszYzqs83S3E5mpi7/y/8M9eC90MRTZfduQOYW76ig6SOSPNe41IG5LoP3FGBn2N0RjVDSQiS94kQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-export-namespace-from\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-export-namespace-from/-/plugin-syntax-export-namespace-from-7.8.3.tgz\",
      \"integrity\": \"sha512-MXf5laXo6c1IbEbegDmzGPwGNTsHZmEy6QGznu5Sh2UCWvueywb2ee+CCE4zQiZstxU9BMoQO9i6zUFSY0Kj0Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-syntax-import-assertions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-assertions/-/plugin-syntax-import-assertions-7.23.3.tgz\",
      \"integrity\": \"sha512-lPgDSU+SJLK3xmFDTV2ZRQAiM7UuUjGidwBywFavObCiZc1BeAAcMtHJKUya92hPHO+at63JJPLygilZard8jw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-syntax-import-attributes\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-attributes/-/plugin-syntax-import-attributes-7.23.3.tgz\",
      \"integrity\": \"sha512-pawnE0P9g10xgoP7yKr6CK63K2FMsTE+FZidZO/1PwRdzmAPVs+HS1mAURUsgaoxammTJvULUdIkEK0gOcU2tA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-syntax-import-meta\": {
      \"version\": \"7.10.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-meta/-/plugin-syntax-import-meta-7.10.4.tgz\",
      \"integrity\": \"sha512-Yqfm+XDx0+Prh3VSeEQCPU81yC+JWZ2pDPFSS4ZdpfZhp4MkFMaDC1UqseovEKwSUpnIL7+vK+Clp7bfh0iD7g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-syntax-json-strings\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-json-strings/-/plugin-syntax-json-strings-7.8.3.tgz\",
      \"integrity\": \"sha512-lY6kdGpWHvjoe2vk4WrAapEuBR69EMxZl+RoGRhrFGNYVK8mOPAW8VfbT/ZgrFbXlDNiiaxQnAtgVCZ6jv30EA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-logical-assignment-operators\": {
      \"version\": \"7.10.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-logical-assignment-operators/-/plugin-syntax-logical-assignment-operators-7.10.4.tgz\",
      \"integrity\": \"sha512-d8waShlpFDinQ5MtvGU9xDAOzKH47+FFoney2baFIoMr952hKOLp1HR7VszoZvOsV/4+RRszNY7D17ba0te0ig==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-syntax-nullish-coalescing-operator\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-nullish-coalescing-operator/-/plugin-syntax-nullish-coalescing-operator-7.8.3.tgz\",
      \"integrity\": \"sha512-aSff4zPII1u2QD7y+F8oDsz19ew4IGEJg9SVW+bqwpwtfFleiQDMdzA/R+UlWDzfnHFCxxleFT0PMIrR36XLNQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-numeric-separator\": {
      \"version\": \"7.10.4\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-numeric-separator/-/plugin-syntax-numeric-separator-7.10.4.tgz\",
      \"integrity\": \"sha512-9H6YdfkcK/uOnY/K7/aA2xpzaAgkQn37yzWUMRK7OaPOqOpGS1+n0H5hxT9AUw9EsSjPW8SVyMJwYRtWs3X3ug==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-syntax-object-rest-spread\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-object-rest-spread/-/plugin-syntax-object-rest-spread-7.8.3.tgz\",
      \"integrity\": \"sha512-XoqMijGZb9y3y2XskN+P1wUGiVwWZ5JmoDRwx5+3GmEplNyVM2s2Dg8ILFQm8rWM48orGy5YpI5Bl8U1y7ydlA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-optional-catch-binding\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-optional-catch-binding/-/plugin-syntax-optional-catch-binding-7.8.3.tgz\",
      \"integrity\": \"sha512-6VPD0Pc1lpTqw0aKoeRTMiB+kWhAoT24PA+ksWSBrFtl5SIRVpZlwN3NNPQjehA2E/91FV3RjLWoVTglWcSV3Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-optional-chaining\": {
      \"version\": \"7.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-optional-chaining/-/plugin-syntax-optional-chaining-7.8.3.tgz\",
      \"integrity\": \"sha512-KoK9ErH1MBlCPxV0VANkXW2/dw4vlbGDrFgz8bmUsBGYkFRcbRwMh6cIJubdPrkxRwuGdtCk0v/wPTKbQgBjkg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.8.0\"
      }
    },
    \"@babel/plugin-syntax-private-property-in-object\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-private-property-in-object/-/plugin-syntax-private-property-in-object-7.14.5.tgz\",
      \"integrity\": \"sha512-0wVnp9dxJ72ZUJDV27ZfbSj6iHLoytYZmh3rFcxNnvsJF3ktkzLDZPy/mA17HGsaQT3/DQsWYX1f1QGWkCoVUg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-syntax-top-level-await\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-top-level-await/-/plugin-syntax-top-level-await-7.14.5.tgz\",
      \"integrity\": \"sha512-hx++upLv5U1rgYfwe1xBQUhRmU41NEvpUvrp8jkrSCdvGSnM5/qdRMtylJ6PG5OFkBaHkbTAKTnd3/YyESRHFw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-syntax-unicode-sets-regex\": {
      \"version\": \"7.18.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-unicode-sets-regex/-/plugin-syntax-unicode-sets-regex-7.18.6.tgz\",
      \"integrity\": \"sha512-727YkEAPwSIQTv5im8QHz3upqp92JTWhidIC81Tdx4VJYIte/VndKf1qKrfnnhPLiPghStWfvC/iFaMCQu7Nqg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.18.6\",
        \"@babel/helper-plugin-utils\": \"^7.18.6\"
      }
    },
    \"@babel/plugin-transform-arrow-functions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-arrow-functions/-/plugin-transform-arrow-functions-7.23.3.tgz\",
      \"integrity\": \"sha512-NzQcQrzaQPkaEwoTm4Mhyl8jI1huEL/WWIEvudjTCMJ9aBZNpsJbMASx7EQECtQQPS/DcnFpo0FIh3LvEO9cxQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-async-generator-functions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-async-generator-functions/-/plugin-transform-async-generator-functions-7.23.3.tgz\",
      \"integrity\": \"sha512-59GsVNavGxAXCDDbakWSMJhajASb4kBCqDjqJsv+p5nKdbz7istmZ3HrX3L2LuiI80+zsOADCvooqQH3qGCucQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-remap-async-to-generator\": \"^7.22.20\",
        \"@babel/plugin-syntax-async-generators\": \"^7.8.4\"
      }
    },
    \"@babel/plugin-transform-async-to-generator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-async-to-generator/-/plugin-transform-async-to-generator-7.23.3.tgz\",
      \"integrity\": \"sha512-A7LFsKi4U4fomjqXJlZg/u0ft/n8/7n7lpffUP/ZULx/DtV9SGlNKZolHH6PE8Xl1ngCc0M11OaeZptXVkfKSw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-imports\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-remap-async-to-generator\": \"^7.22.20\"
      }
    },
    \"@babel/plugin-transform-block-scoped-functions\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-block-scoped-functions/-/plugin-transform-block-scoped-functions-7.23.3.tgz\",
      \"integrity\": \"sha512-vI+0sIaPIO6CNuM9Kk5VmXcMVRiOpDh7w2zZt9GXzmE/9KD70CUEVhvPR/etAeNK/FAEkhxQtXOzVF3EuRL41A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-block-scoping\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-block-scoping/-/plugin-transform-block-scoping-7.23.3.tgz\",
      \"integrity\": \"sha512-QPZxHrThbQia7UdvfpaRRlq/J9ciz1J4go0k+lPBXbgaNeY7IQrBj/9ceWjvMMI07/ZBzHl/F0R/2K0qH7jCVw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-class-properties\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-class-properties/-/plugin-transform-class-properties-7.23.3.tgz\",
      \"integrity\": \"sha512-uM+AN8yCIjDPccsKGlw271xjJtGii+xQIF/uMPS8H15L12jZTsLfF4o5vNO7d/oUguOyfdikHGc/yi9ge4SGIg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-class-static-block\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-class-static-block/-/plugin-transform-class-static-block-7.23.3.tgz\",
      \"integrity\": \"sha512-PENDVxdr7ZxKPyi5Ffc0LjXdnJyrJxyqF5T5YjlVg4a0VFfQHW0r8iAtRiDXkfHlu1wwcvdtnndGYIeJLSuRMQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-class-static-block\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-transform-classes\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-classes/-/plugin-transform-classes-7.23.3.tgz\",
      \"integrity\": \"sha512-FGEQmugvAEu2QtgtU0uTASXevfLMFfBeVCIIdcQhn/uBQsMTjBajdnAtanQlOcuihWh10PZ7+HWvc7NtBwP74w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.20\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"globals\": \"^11.1.0\"
      }
    },
    \"@babel/plugin-transform-computed-properties\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-computed-properties/-/plugin-transform-computed-properties-7.23.3.tgz\",
      \"integrity\": \"sha512-dTj83UVTLw/+nbiHqQSFdwO9CbTtwq1DsDqm3CUEtDrZNET5rT5E6bIdTlOftDTDLMYxvxHNEYO4B9SLl8SLZw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/template\": \"^7.22.15\"
      }
    },
    \"@babel/plugin-transform-destructuring\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-destructuring/-/plugin-transform-destructuring-7.23.3.tgz\",
      \"integrity\": \"sha512-n225npDqjDIr967cMScVKHXJs7rout1q+tt50inyBCPkyZ8KxeI6d+GIbSBTT/w/9WdlWDOej3V9HE5Lgk57gw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-dotall-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-dotall-regex/-/plugin-transform-dotall-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-vgnFYDHAKzFaTVp+mneDsIEbnJ2Np/9ng9iviHw3P/KVcgONxpNULEW/51Z/BaFojG2GI2GwwXck5uV1+1NOYQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-duplicate-keys\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-duplicate-keys/-/plugin-transform-duplicate-keys-7.23.3.tgz\",
      \"integrity\": \"sha512-RrqQ+BQmU3Oyav3J+7/myfvRCq7Tbz+kKLLshUmMwNlDHExbGL7ARhajvoBJEvc+fCguPPu887N+3RRXBVKZUA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-dynamic-import\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-dynamic-import/-/plugin-transform-dynamic-import-7.23.3.tgz\",
      \"integrity\": \"sha512-vTG+cTGxPFou12Rj7ll+eD5yWeNl5/8xvQvF08y5Gv3v4mZQoyFf8/n9zg4q5vvCWt5jmgymfzMAldO7orBn7A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-dynamic-import\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-exponentiation-operator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-exponentiation-operator/-/plugin-transform-exponentiation-operator-7.23.3.tgz\",
      \"integrity\": \"sha512-5fhCsl1odX96u7ILKHBj4/Y8vipoqwsJMh4csSA8qFfxrZDEA4Ssku2DyNvMJSmZNOEBT750LfFPbtrnTP90BQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-builder-binary-assignment-operator-visitor\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-export-namespace-from\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-export-namespace-from/-/plugin-transform-export-namespace-from-7.23.3.tgz\",
      \"integrity\": \"sha512-yCLhW34wpJWRdTxxWtFZASJisihrfyMOTOQexhVzA78jlU+dH7Dw+zQgcPepQ5F3C6bAIiblZZ+qBggJdHiBAg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-export-namespace-from\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-for-of\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-for-of/-/plugin-transform-for-of-7.23.3.tgz\",
      \"integrity\": \"sha512-X8jSm8X1CMwxmK878qsUGJRmbysKNbdpTv/O1/v0LuY/ZkZrng5WYiekYSdg9m09OTmDDUWeEDsTE+17WYbAZw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-function-name\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-function-name/-/plugin-transform-function-name-7.23.3.tgz\",
      \"integrity\": \"sha512-I1QXp1LxIvt8yLaib49dRW5Okt7Q4oaxao6tFVKS/anCdEOMtYwWVKoiOA1p34GOWIZjUK0E+zCp7+l1pfQyiw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-json-strings\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-json-strings/-/plugin-transform-json-strings-7.23.3.tgz\",
      \"integrity\": \"sha512-H9Ej2OiISIZowZHaBwF0tsJOih1PftXJtE8EWqlEIwpc7LMTGq0rPOrywKLQ4nefzx8/HMR0D3JGXoMHYvhi0A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-json-strings\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-literals/-/plugin-transform-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-wZ0PIXRxnwZvl9AYpqNUxpZ5BiTGrYt7kueGQ+N5FiQ7RCOD4cm8iShd6S6ggfVIWaJf2EMk8eRzAh52RfP4rQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-logical-assignment-operators\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-logical-assignment-operators/-/plugin-transform-logical-assignment-operators-7.23.3.tgz\",
      \"integrity\": \"sha512-+pD5ZbxofyOygEp+zZAfujY2ShNCXRpDRIPOiBmTO693hhyOEteZgl876Xs9SAHPQpcV0vz8LvA/T+w8AzyX8A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-logical-assignment-operators\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-transform-member-expression-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-member-expression-literals/-/plugin-transform-member-expression-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-sC3LdDBDi5x96LA+Ytekz2ZPk8i/Ck+DEuDbRAll5rknJ5XRTSaPKEYwomLcs1AA8wg9b3KjIQRsnApj+q51Ag==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-modules-amd\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-amd/-/plugin-transform-modules-amd-7.23.3.tgz\",
      \"integrity\": \"sha512-vJYQGxeKM4t8hYCKVBlZX/gtIY2I7mRGFNcm85sgXGMTBcoV3QdVtdpbcWEbzbfUIUZKwvgFT82mRvaQIebZzw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-modules-commonjs\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-commonjs/-/plugin-transform-modules-commonjs-7.23.3.tgz\",
      \"integrity\": \"sha512-aVS0F65LKsdNOtcz6FRCpE4OgsP2OFnW46qNxNIX9h3wuzaNcSQsJysuMwqSibC98HPrf2vCgtxKNwS0DAlgcA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-simple-access\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-modules-systemjs\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-systemjs/-/plugin-transform-modules-systemjs-7.23.3.tgz\",
      \"integrity\": \"sha512-ZxyKGTkF9xT9YJuKQRo19ewf3pXpopuYQd8cDXqNzc3mUNbOME0RKMoZxviQk74hwzfQsEe66dE92MaZbdHKNQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\"
      }
    },
    \"@babel/plugin-transform-modules-umd\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-umd/-/plugin-transform-modules-umd-7.23.3.tgz\",
      \"integrity\": \"sha512-zHsy9iXX2nIsCBFPud3jKn1IRPWg3Ing1qOZgeKV39m1ZgIdpJqvlWVeiHBZC6ITRG0MfskhYe9cLgntfSFPIg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-transforms\": \"^7.23.3\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-named-capturing-groups-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-named-capturing-groups-regex/-/plugin-transform-named-capturing-groups-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-YgLLKmS3aUBhHaxp5hi1WJTgOUb/NCuDHzGT9z9WTt3YG+CPRhJs6nprbStx6DnWM4dh6gt7SU3sZodbZ08adQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-new-target\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-new-target/-/plugin-transform-new-target-7.23.3.tgz\",
      \"integrity\": \"sha512-YJ3xKqtJMAT5/TIZnpAR3I+K+WaDowYbN3xyxI8zxx/Gsypwf9B9h0VB+1Nh6ACAAPRS5NSRje0uVv5i79HYGQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-nullish-coalescing-operator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-nullish-coalescing-operator/-/plugin-transform-nullish-coalescing-operator-7.23.3.tgz\",
      \"integrity\": \"sha512-xzg24Lnld4DYIdysyf07zJ1P+iIfJpxtVFOzX4g+bsJ3Ng5Le7rXx9KwqKzuyaUeRnt+I1EICwQITqc0E2PmpA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-nullish-coalescing-operator\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-numeric-separator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-numeric-separator/-/plugin-transform-numeric-separator-7.23.3.tgz\",
      \"integrity\": \"sha512-s9GO7fIBi/BLsZ0v3Rftr6Oe4t0ctJ8h4CCXfPoEJwmvAPMyNrfkOOJzm6b9PX9YXcCJWWQd/sBF/N26eBiMVw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-numeric-separator\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-transform-object-rest-spread\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-object-rest-spread/-/plugin-transform-object-rest-spread-7.23.3.tgz\",
      \"integrity\": \"sha512-VxHt0ANkDmu8TANdE9Kc0rndo/ccsmfe2Cx2y5sI4hu3AukHQ5wAu4cM7j3ba8B9548ijVyclBU+nuDQftZsog==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.23.3\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-object-rest-spread\": \"^7.8.3\",
        \"@babel/plugin-transform-parameters\": \"^7.23.3\"
      }
    },
    \"@babel/plugin-transform-object-super\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-object-super/-/plugin-transform-object-super-7.23.3.tgz\",
      \"integrity\": \"sha512-BwQ8q0x2JG+3lxCVFohg+KbQM7plfpBwThdW9A6TMtWwLsbDA01Ek2Zb/AgDN39BiZsExm4qrXxjk+P1/fzGrA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.20\"
      }
    },
    \"@babel/plugin-transform-optional-catch-binding\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-optional-catch-binding/-/plugin-transform-optional-catch-binding-7.23.3.tgz\",
      \"integrity\": \"sha512-LxYSb0iLjUamfm7f1D7GpiS4j0UAC8AOiehnsGAP8BEsIX8EOi3qV6bbctw8M7ZvLtcoZfZX5Z7rN9PlWk0m5A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-optional-catch-binding\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-optional-chaining\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-optional-chaining/-/plugin-transform-optional-chaining-7.23.3.tgz\",
      \"integrity\": \"sha512-zvL8vIfIUgMccIAK1lxjvNv572JHFJIKb4MWBz5OGdBQA0fB0Xluix5rmOby48exiJc987neOmP/m9Fnpkz3Tg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/plugin-syntax-optional-chaining\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-parameters\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-parameters/-/plugin-transform-parameters-7.23.3.tgz\",
      \"integrity\": \"sha512-09lMt6UsUb3/34BbECKVbVwrT9bO6lILWln237z7sLaWnMsTi7Yc9fhX5DLpkJzAGfaReXI22wP41SZmnAA3Vw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-private-methods\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-private-methods/-/plugin-transform-private-methods-7.23.3.tgz\",
      \"integrity\": \"sha512-UzqRcRtWsDMTLrRWFvUBDwmw06tCQH9Rl1uAjfh6ijMSmGYQ+fpdB+cnqRC8EMh5tuuxSv0/TejGL+7vyj+50g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-private-property-in-object\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-private-property-in-object/-/plugin-transform-private-property-in-object-7.23.3.tgz\",
      \"integrity\": \"sha512-a5m2oLNFyje2e/rGKjVfAELTVI5mbA0FeZpBnkOWWV7eSmKQ+T/XW0Vf+29ScLzSxX+rnsarvU0oie/4m6hkxA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-create-class-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-private-property-in-object\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-transform-property-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-property-literals/-/plugin-transform-property-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-jR3Jn3y7cZp4oEWPFAlRsSWjxKe4PZILGBSd4nis1TsC5qeSpb+nrtihJuDhNI7QHiVbUaiXa0X2RZY3/TI6Nw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-regenerator\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-regenerator/-/plugin-transform-regenerator-7.23.3.tgz\",
      \"integrity\": \"sha512-KP+75h0KghBMcVpuKisx3XTu9Ncut8Q8TuvGO4IhY+9D5DFEckQefOuIsB/gQ2tG71lCke4NMrtIPS8pOj18BQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"regenerator-transform\": \"^0.15.2\"
      }
    },
    \"@babel/plugin-transform-reserved-words\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-reserved-words/-/plugin-transform-reserved-words-7.23.3.tgz\",
      \"integrity\": \"sha512-QnNTazY54YqgGxwIexMZva9gqbPa15t/x9VS+0fsEFWplwVpXYZivtgl43Z1vMpc1bdPP2PP8siFeVcnFvA3Cg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-shorthand-properties\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-shorthand-properties/-/plugin-transform-shorthand-properties-7.23.3.tgz\",
      \"integrity\": \"sha512-ED2fgqZLmexWiN+YNFX26fx4gh5qHDhn1O2gvEhreLW2iI63Sqm4llRLCXALKrCnbN4Jy0VcMQZl/SAzqug/jg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-spread\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-spread/-/plugin-transform-spread-7.23.3.tgz\",
      \"integrity\": \"sha512-VvfVYlrlBVu+77xVTOAoxQ6mZbnIq5FM0aGBSFEcIh03qHf+zNqA4DC/3XMUozTg7bZV3e3mZQ0i13VB6v5yUg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-sticky-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-sticky-regex/-/plugin-transform-sticky-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-HZOyN9g+rtvnOU3Yh7kSxXrKbzgrm5X4GncPY1QOquu7epga5MxKHVpYu2hvQnry/H+JjckSYRb93iNfsioAGg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-template-literals\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-template-literals/-/plugin-transform-template-literals-7.23.3.tgz\",
      \"integrity\": \"sha512-Flok06AYNp7GV2oJPZZcP9vZdszev6vPBkHLwxwSpaIqx75wn6mUd3UFWsSsA0l8nXAKkyCmL/sR02m8RYGeHg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-typeof-symbol\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-typeof-symbol/-/plugin-transform-typeof-symbol-7.23.3.tgz\",
      \"integrity\": \"sha512-4t15ViVnaFdrPC74be1gXBSMzXk3B4Us9lP7uLRQHTFpV5Dvt33pn+2MyyNxmN3VTTm3oTrZVMUmuw3oBnQ2oQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-escapes\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-escapes/-/plugin-transform-unicode-escapes-7.23.3.tgz\",
      \"integrity\": \"sha512-OMCUx/bU6ChE3r4+ZdylEqAjaQgHAgipgW8nsCfu5pGqDcFytVd91AwRvUJSBZDz0exPGgnjoqhgRYLRjFZc9Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-property-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-property-regex/-/plugin-transform-unicode-property-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-KcLIm+pDZkWZQAFJ9pdfmh89EwVfmNovFBcXko8szpBeF8z68kWIPeKlmSOkT9BXJxs2C0uk+5LxoxIv62MROA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-regex/-/plugin-transform-unicode-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-wMHpNA4x2cIA32b/ci3AfwNgheiva2W0WUKWTK7vBHBhDKfPsc5cFGNWm69WBqpwd86u1qwZ9PWevKqm1A3yAw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-sets-regex\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-sets-regex/-/plugin-transform-unicode-sets-regex-7.23.3.tgz\",
      \"integrity\": \"sha512-W7lliA/v9bNR83Qc3q1ip9CQMZ09CcHDbHfbLRDNuAhn1Mvkr1ZNF7hPmztMQvtTGVLJ9m8IZqWsTkXOml8dbw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/preset-env\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/preset-env/-/preset-env-7.23.3.tgz\",
      \"integrity\": \"sha512-ovzGc2uuyNfNAs/jyjIGxS8arOHS5FENZaNn4rtE7UdKMMkqHCvboHfcuhWLZNX5cB44QfcGNWjaevxMzzMf+Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.23.3\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-validator-option\": \"^7.22.15\",
        \"@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression\": \"^7.23.3\",
        \"@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining\": \"^7.23.3\",
        \"@babel/plugin-bugfix-v8-static-class-fields-redefine-readonly\": \"^7.23.3\",
        \"@babel/plugin-proposal-private-property-in-object\": \"7.21.0-placeholder-for-preset-env.2\",
        \"@babel/plugin-syntax-async-generators\": \"^7.8.4\",
        \"@babel/plugin-syntax-class-properties\": \"^7.12.13\",
        \"@babel/plugin-syntax-class-static-block\": \"^7.14.5\",
        \"@babel/plugin-syntax-dynamic-import\": \"^7.8.3\",
        \"@babel/plugin-syntax-export-namespace-from\": \"^7.8.3\",
        \"@babel/plugin-syntax-import-assertions\": \"^7.23.3\",
        \"@babel/plugin-syntax-import-attributes\": \"^7.23.3\",
        \"@babel/plugin-syntax-import-meta\": \"^7.10.4\",
        \"@babel/plugin-syntax-json-strings\": \"^7.8.3\",
        \"@babel/plugin-syntax-logical-assignment-operators\": \"^7.10.4\",
        \"@babel/plugin-syntax-nullish-coalescing-operator\": \"^7.8.3\",
        \"@babel/plugin-syntax-numeric-separator\": \"^7.10.4\",
        \"@babel/plugin-syntax-object-rest-spread\": \"^7.8.3\",
        \"@babel/plugin-syntax-optional-catch-binding\": \"^7.8.3\",
        \"@babel/plugin-syntax-optional-chaining\": \"^7.8.3\",
        \"@babel/plugin-syntax-private-property-in-object\": \"^7.14.5\",
        \"@babel/plugin-syntax-top-level-await\": \"^7.14.5\",
        \"@babel/plugin-syntax-unicode-sets-regex\": \"^7.18.6\",
        \"@babel/plugin-transform-arrow-functions\": \"^7.23.3\",
        \"@babel/plugin-transform-async-generator-functions\": \"^7.23.3\",
        \"@babel/plugin-transform-async-to-generator\": \"^7.23.3\",
        \"@babel/plugin-transform-block-scoped-functions\": \"^7.23.3\",
        \"@babel/plugin-transform-block-scoping\": \"^7.23.3\",
        \"@babel/plugin-transform-class-properties\": \"^7.23.3\",
        \"@babel/plugin-transform-class-static-block\": \"^7.23.3\",
        \"@babel/plugin-transform-classes\": \"^7.23.3\",
        \"@babel/plugin-transform-computed-properties\": \"^7.23.3\",
        \"@babel/plugin-transform-destructuring\": \"^7.23.3\",
        \"@babel/plugin-transform-dotall-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-duplicate-keys\": \"^7.23.3\",
        \"@babel/plugin-transform-dynamic-import\": \"^7.23.3\",
        \"@babel/plugin-transform-exponentiation-operator\": \"^7.23.3\",
        \"@babel/plugin-transform-export-namespace-from\": \"^7.23.3\",
        \"@babel/plugin-transform-for-of\": \"^7.23.3\",
        \"@babel/plugin-transform-function-name\": \"^7.23.3\",
        \"@babel/plugin-transform-json-strings\": \"^7.23.3\",
        \"@babel/plugin-transform-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-logical-assignment-operators\": \"^7.23.3\",
        \"@babel/plugin-transform-member-expression-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-amd\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-commonjs\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-systemjs\": \"^7.23.3\",
        \"@babel/plugin-transform-modules-umd\": \"^7.23.3\",
        \"@babel/plugin-transform-named-capturing-groups-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-new-target\": \"^7.23.3\",
        \"@babel/plugin-transform-nullish-coalescing-operator\": \"^7.23.3\",
        \"@babel/plugin-transform-numeric-separator\": \"^7.23.3\",
        \"@babel/plugin-transform-object-rest-spread\": \"^7.23.3\",
        \"@babel/plugin-transform-object-super\": \"^7.23.3\",
        \"@babel/plugin-transform-optional-catch-binding\": \"^7.23.3\",
        \"@babel/plugin-transform-optional-chaining\": \"^7.23.3\",
        \"@babel/plugin-transform-parameters\": \"^7.23.3\",
        \"@babel/plugin-transform-private-methods\": \"^7.23.3\",
        \"@babel/plugin-transform-private-property-in-object\": \"^7.23.3\",
        \"@babel/plugin-transform-property-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-regenerator\": \"^7.23.3\",
        \"@babel/plugin-transform-reserved-words\": \"^7.23.3\",
        \"@babel/plugin-transform-shorthand-properties\": \"^7.23.3\",
        \"@babel/plugin-transform-spread\": \"^7.23.3\",
        \"@babel/plugin-transform-sticky-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-template-literals\": \"^7.23.3\",
        \"@babel/plugin-transform-typeof-symbol\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-escapes\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-property-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-regex\": \"^7.23.3\",
        \"@babel/plugin-transform-unicode-sets-regex\": \"^7.23.3\",
        \"@babel/preset-modules\": \"0.1.6-no-external-plugins\",
        \"babel-plugin-polyfill-corejs2\": \"^0.4.6\",
        \"babel-plugin-polyfill-corejs3\": \"^0.8.5\",
        \"babel-plugin-polyfill-regenerator\": \"^0.5.3\",
        \"core-js-compat\": \"^3.31.0\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"@babel/preset-modules\": {
      \"version\": \"0.1.6-no-external-plugins\",
      \"resolved\": \"https://registry.npmjs.org/@babel/preset-modules/-/preset-modules-0.1.6-no-external-plugins.tgz\",
      \"integrity\": \"sha512-HrcgcIESLm9aIR842yhJ5RWan/gebQUJ6E/E5+rf0y9o6oj7w0Br+sWuL6kEQ/o/AdfvR1Je9jG18/gnpwjEyA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.0.0\",
        \"@babel/types\": \"^7.4.4\",
        \"esutils\": \"^2.0.2\"
      }
    },
    \"@babel/register\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/register/-/register-7.22.15.tgz\",
      \"integrity\": \"sha512-V3Q3EqoQdn65RCgTLwauZaTfd1ShhwPmbBv+1dkZV/HpCGMKVyn6oFcRlI7RaKqiDQjX2Qd3AuoEguBgdjIKlg==\",
      \"dev\": true,
      \"requires\": {
        \"clone-deep\": \"^4.0.1\",
        \"find-cache-dir\": \"^2.0.0\",
        \"make-dir\": \"^2.1.0\",
        \"pirates\": \"^4.0.5\",
        \"source-map-support\": \"^0.5.16\"
      }
    },
    \"@babel/regjsgen\": {
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/regjsgen/-/regjsgen-0.8.0.tgz\",
      \"integrity\": \"sha512-x/rqGMdzj+fWZvCOYForTghzbtqPDZ5gPwaoNGHdgDfF2QA/XZbCBp4Moo5scrkAMPhB7z26XM/AaHuIJdgauA==\",
      \"dev\": true
    },
    \"@babel/runtime\": {
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/runtime/-/runtime-7.23.2.tgz\",
      \"integrity\": \"sha512-mM8eg4yl5D6i3lu2QKPuPH4FArvJ8KhTofbE7jwMUv9KX5mBvwPAqnV3MlyBNqdp9RyRKP6Yck8TrfYrPvX3bg==\",
      \"dev\": true,
      \"requires\": {
        \"regenerator-runtime\": \"^0.14.0\"
      }
    },
    \"@babel/template\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/template/-/template-7.22.15.tgz\",
      \"integrity\": \"sha512-QPErUVm4uyJa60rkI73qneDacvdvzxshT3kksGqlGWYdOTIUOwJ7RDUL8sGqslY1uXWSL6xMFKEXDS3ox2uF0w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/parser\": \"^7.22.15\",
        \"@babel/types\": \"^7.22.15\"
      }
    },
    \"@babel/traverse\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/traverse/-/traverse-7.23.3.tgz\",
      \"integrity\": \"sha512-+K0yF1/9yR0oHdE0StHuEj3uTPzwwbrLGfNOndVJVV2TqA5+j3oljJUb4nmB954FLGjNem976+B+eDuLIjesiQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.3\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/parser\": \"^7.23.3\",
        \"@babel/types\": \"^7.23.3\",
        \"debug\": \"^4.1.0\",
        \"globals\": \"^11.1.0\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"@babel/types\": {
      \"version\": \"7.23.3\",
      \"resolved\": \"https://registry.npmjs.org/@babel/types/-/types-7.23.3.tgz\",
      \"integrity\": \"sha512-OZnvoH2l8PK5eUvEcUyCt/sXgr/h+UWpVuBbOljwcrAgUl6lpchoQ++PHGyQy1AtYnVA6CEq3y5xeEI10brpXw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-string-parser\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\",
        \"to-fast-properties\": \"^2.0.0\"
      }
    },
    \"@discoveryjs/json-ext\": {
      \"version\": \"0.5.7\",
      \"resolved\": \"https://registry.npmjs.org/@discoveryjs/json-ext/-/json-ext-0.5.7.tgz\",
      \"integrity\": \"sha512-dBVuXR082gk3jsFp7Rd/JI4kytwGHecnCoTtXFb7DB6CNHp4rg5k1bhg0nWdLGLnOV71lmDzGQaLMy8iPLY0pw==\",
      \"dev\": true
    },
    \"@eslint-community/eslint-utils\": {
      \"version\": \"4.4.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint-community/eslint-utils/-/eslint-utils-4.4.0.tgz\",
      \"integrity\": \"sha512-1/sA4dwrzBAyeUoQ6oxahHKmrZvsnLCg4RfxW3ZFGGmQkSNQPFNLV9CUEFQP1x9EYXHTo5p6xdhZM1Ne9p/AfA==\",
      \"dev\": true,
      \"requires\": {
        \"eslint-visitor-keys\": \"^3.3.0\"
      }
    },
    \"@eslint-community/regexpp\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/@eslint-community/regexpp/-/regexpp-4.6.2.tgz\",
      \"integrity\": \"sha512-pPTNuaAG3QMH+buKyBIGJs3g/S5y0caxw0ygM3YyE6yJFySwiGGSzA+mM3KJ8QQvzeLh3blwgSonkFjgQdxzMw==\",
      \"dev\": true
    },
    \"@eslint/eslintrc\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/eslintrc/-/eslintrc-2.1.3.tgz\",
      \"integrity\": \"sha512-yZzuIG+jnVu6hNSzFEN07e8BxF3uAzYtQb6uDkaYZLo6oYZDCq454c5kB8zxnzfCYyP4MIuyBn10L0DqwujTmA==\",
      \"dev\": true,
      \"requires\": {
        \"ajv\": \"^6.12.4\",
        \"debug\": \"^4.3.2\",
        \"espree\": \"^9.6.0\",
        \"globals\": \"^13.19.0\",
        \"ignore\": \"^5.2.0\",
        \"import-fresh\": \"^3.2.1\",
        \"js-yaml\": \"^4.1.0\",
        \"minimatch\": \"^3.1.2\",
        \"strip-json-comments\": \"^3.1.1\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"globals\": {
          \"version\": \"13.23.0\",
          \"resolved\": \"https://registry.npmjs.org/globals/-/globals-13.23.0.tgz\",
          \"integrity\": \"sha512-XAmF0RjlrjY23MA51q3HltdlGxUpXPvg0GioKiD9X6HD28iMjo2dKC8Vqwm7lne4GNr78+RHTfliktR6ZH09wA==\",
          \"dev\": true,
          \"requires\": {
            \"type-fest\": \"^0.20.2\"
          }
        },
        \"minimatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
          \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^1.1.7\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"@eslint/js\": {
      \"version\": \"8.54.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/js/-/js-8.54.0.tgz\",
      \"integrity\": \"sha512-ut5V+D+fOoWPgGGNj83GGjnntO39xDy6DWxO0wb7Jp3DcMX0TfIqdzHF85VTQkerdyGmuuMD9AKAo5KiNlf/AQ==\",
      \"dev\": true
    },
    \"@gar/promisify\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@gar/promisify/-/promisify-1.1.3.tgz\",
      \"integrity\": \"sha512-k2Ty1JcVojjJFwrg/ThKi2ujJ7XNLYaFGNB/bWT9wGR+oSMJHMa5w+CUq6p/pVrKeNNgA7pCqEcjSnHVoqJQFw==\",
      \"dev\": true
    },
    \"@humanwhocodes/config-array\": {
      \"version\": \"0.11.13\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/config-array/-/config-array-0.11.13.tgz\",
      \"integrity\": \"sha512-JSBDMiDKSzQVngfRjOdFXgFfklaXI4K9nLF49Auh21lmBWRLIK3+xTErTWD4KU54pb6coM6ESE7Awz/FNU3zgQ==\",
      \"dev\": true,
      \"requires\": {
        \"@humanwhocodes/object-schema\": \"^2.0.1\",
        \"debug\": \"^4.1.1\",
        \"minimatch\": \"^3.0.5\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"@humanwhocodes/module-importer\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/module-importer/-/module-importer-1.0.1.tgz\",
      \"integrity\": \"sha512-bxveV4V8v5Yb4ncFTT3rPSgZBOpCkjfK0y4oVVVJwIuDVBRMDXrPyXRL988i5ap9m9bnyEEjWfm5WkBmtffLfA==\",
      \"dev\": true
    },
    \"@humanwhocodes/object-schema\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/object-schema/-/object-schema-2.0.1.tgz\",
      \"integrity\": \"sha512-dvuCeX5fC9dXgJn9t+X5atfmgQAzUOWqS1254Gh0m6i8wKd10ebXkfNKiRK+1GWi/yTvvLDHpoxLr0xxxeslWw==\",
      \"dev\": true
    },
    \"@jridgewell/gen-mapping\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/gen-mapping/-/gen-mapping-0.3.2.tgz\",
      \"integrity\": \"sha512-mh65xKQAzI6iBcFzwv28KVWSmCkdRBWoOh+bYQGW3+6OZvbbN3TqMGo5hqYxQniRcH9F2VZIoJCm4pa3BPDK/A==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/set-array\": \"^1.0.1\",
        \"@jridgewell/sourcemap-codec\": \"^1.4.10\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      }
    },
    \"@jridgewell/resolve-uri\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/resolve-uri/-/resolve-uri-3.1.0.tgz\",
      \"integrity\": \"sha512-F2msla3tad+Mfht5cJq7LSXcdudKTWCVYUgw6pLFOOHSTtZlj6SWNYAp+AhuqLmWdBO2X5hPrLcu8cVP8fy28w==\",
      \"dev\": true
    },
    \"@jridgewell/set-array\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/set-array/-/set-array-1.1.1.tgz\",
      \"integrity\": \"sha512-Ct5MqZkLGEXTVmQYbGtx9SVqD2fqwvdubdps5D3djjAkgkKwT918VNOz65pEHFaYTeWcukmJmH5SwsA9Tn2ObQ==\",
      \"dev\": true
    },
    \"@jridgewell/source-map\": {
      \"version\": \"0.3.3\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/source-map/-/source-map-0.3.3.tgz\",
      \"integrity\": \"sha512-b+fsZXeLYi9fEULmfBrhxn4IrPlINf8fiNarzTof004v3lFdntdwa9PF7vFJqm3mg7s+ScJMxXaE3Acp1irZcg==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/gen-mapping\": \"^0.3.0\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      }
    },
    \"@jridgewell/sourcemap-codec\": {
      \"version\": \"1.4.14\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/sourcemap-codec/-/sourcemap-codec-1.4.14.tgz\",
      \"integrity\": \"sha512-XPSJHWmi394fuUuzDnGz1wiKqWfo1yXecHQMRf2l6hztTO+nPru658AyDngaBe7isIxEkRsPR3FZh+s7iVa4Uw==\",
      \"dev\": true
    },
    \"@jridgewell/trace-mapping\": {
      \"version\": \"0.3.17\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/trace-mapping/-/trace-mapping-0.3.17.tgz\",
      \"integrity\": \"sha512-MCNzAp77qzKca9+W/+I0+sEpaUnZoeasnghNeVc41VZCEKaCH73Vq3BZZ/SzWIgrqE4H4ceI+p+b6C0mHf9T4g==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/resolve-uri\": \"3.1.0\",
        \"@jridgewell/sourcemap-codec\": \"1.4.14\"
      }
    },
    \"@nicolo-ribaudo/chokidar-2\": {
      \"version\": \"2.1.8-no-fsevents.3\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/chokidar-2/-/chokidar-2-2.1.8-no-fsevents.3.tgz\",
      \"integrity\": \"sha512-s88O1aVtXftvp5bCPB7WnmXc5IwOZZ7YPuwNPt+GtOOXpPvad1LfbmjYv+qII7zP6RU2QGnqve27dnLycEnyEQ==\",
      \"dev\": true,
      \"optional\": true
    },
    \"@nicolo-ribaudo/eslint-scope-5-internals\": {
      \"version\": \"5.1.1-v1\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/eslint-scope-5-internals/-/eslint-scope-5-internals-5.1.1-v1.tgz\",
      \"integrity\": \"sha512-54/JRvkLIzzDWshCWfuhadfrfZVPiElY8Fcgmg1HroEly/EDSszzhBAsarCux+D/kOslTRquNzuyGSmUSTTHGg==\",
      \"dev\": true,
      \"requires\": {
        \"eslint-scope\": \"5.1.1\"
      }
    },
    \"@nodelib/fs.scandir\": {
      \"version\": \"2.1.5\",
      \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.scandir/-/fs.scandir-2.1.5.tgz\",
      \"integrity\": \"sha512-vq24Bq3ym5HEQm2NKCr3yXDwjc7vTsEThRDnkp2DK9p1uqLR+DHurm/NOTo0KG7HYHU7eppKZj3MyqYuMBf62g==\",
      \"dev\": true,
      \"requires\": {
        \"@nodelib/fs.stat\": \"2.0.5\",
        \"run-parallel\": \"^1.1.9\"
      }
    },
    \"@nodelib/fs.stat\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.stat/-/fs.stat-2.0.5.tgz\",
      \"integrity\": \"sha512-RkhPPp2zrqDAQA/2jNhnztcPAlv64XdhIp7a7454A5ovI7Bukxgt7MX7udwAu3zg1DcpPU0rz3VV1SeaqvY4+A==\",
      \"dev\": true
    },
    \"@nodelib/fs.walk\": {
      \"version\": \"1.2.8\",
      \"resolved\": \"https://registry.npmjs.org/@nodelib/fs.walk/-/fs.walk-1.2.8.tgz\",
      \"integrity\": \"sha512-oGB+UxlgWcgQkgwo8GcEGwemoTFt3FIO9ababBmaGwXIoBKZ+GTy0pP185beGg7Llih/NSHSV2XAs1lnznocSg==\",
      \"dev\": true,
      \"requires\": {
        \"@nodelib/fs.scandir\": \"2.1.5\",
        \"fastq\": \"^1.6.0\"
      }
    },
    \"@npmcli/fs\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/fs/-/fs-1.1.1.tgz\",
      \"integrity\": \"sha512-8KG5RD0GVP4ydEzRn/I4BNDuxDtqVbOdm8675T49OIG/NGhaK0pjPX7ZcDlvKYbA+ulvVK3ztfcF4uBdOxuJbQ==\",
      \"dev\": true,
      \"requires\": {
        \"@gar/promisify\": \"^1.0.1\",
        \"semver\": \"^7.3.5\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"7.3.7\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.7.tgz\",
          \"integrity\": \"sha512-QlYTucUYOews+WeEujDoEGziz4K6c47V/Bd+LjSSYcA94p+DmINdf7ncaUinThfvZyu13lN9OY1XDxt8C0Tw0g==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        }
      }
    },
    \"@npmcli/move-file\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/move-file/-/move-file-1.1.2.tgz\",
      \"integrity\": \"sha512-1SUf/Cg2GzGDyaf15aR9St9TWlb+XvbZXWpDx8YKs7MLzMH/BCeopv+y9vzrzgkfykCGuWOlSu3mZhj2+FQcrg==\",
      \"dev\": true,
      \"requires\": {
        \"mkdirp\": \"^1.0.4\",
        \"rimraf\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"rimraf\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
          \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        }
      }
    },
    \"@tootallnate/once\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@tootallnate/once/-/once-1.1.2.tgz\",
      \"integrity\": \"sha512-RbzJvlNzmRq5c3O09UipeuXno4tA1FE6ikOjxZK0tuxVv3412l64l5t1W5pj4+rJq9vpkm/kwiR07aZXnsKPxw==\",
      \"dev\": true
    },
    \"@types/eslint\": {
      \"version\": \"8.4.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/eslint/-/eslint-8.4.1.tgz\",
      \"integrity\": \"sha512-GE44+DNEyxxh2Kc6ro/VkIj+9ma0pO0bwv9+uHSyBrikYOHr8zYcdPvnBOp1aw8s+CjRvuSx7CyWqRrNFQ59mA==\",
      \"dev\": true,
      \"requires\": {
        \"@types/estree\": \"*\",
        \"@types/json-schema\": \"*\"
      }
    },
    \"@types/eslint-scope\": {
      \"version\": \"3.7.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/eslint-scope/-/eslint-scope-3.7.3.tgz\",
      \"integrity\": \"sha512-PB3ldyrcnAicT35TWPs5IcwKD8S333HMaa2VVv4+wdvebJkjWuW/xESoB8IwRcog8HYVYamb1g/R31Qv5Bx03g==\",
      \"dev\": true,
      \"requires\": {
        \"@types/eslint\": \"*\",
        \"@types/estree\": \"*\"
      }
    },
    \"@types/estree\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/estree/-/estree-1.0.1.tgz\",
      \"integrity\": \"sha512-LG4opVs2ANWZ1TJoKc937iMmNstM/d0ae1vNbnBvBhqCSezgVUOzcLCqbI5elV8Vy6WKwKjaqR+zO9VKirBBCA==\",
      \"dev\": true
    },
    \"@types/glob\": {
      \"version\": \"7.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.1.3.tgz\",
      \"integrity\": \"sha512-SEYeGAIQIQX8NN6LDKprLjbrd5dARM5EXsd8GI/A5l0apYI1fGMWgPHSe4ZKL4eozlAyI+doUE9XbYS4xCkQ1w==\",
      \"dev\": true,
      \"requires\": {
        \"@types/minimatch\": \"*\",
        \"@types/node\": \"*\"
      }
    },
    \"@types/json-schema\": {
      \"version\": \"7.0.11\",
      \"resolved\": \"https://registry.npmjs.org/@types/json-schema/-/json-schema-7.0.11.tgz\",
      \"integrity\": \"sha512-wOuvG1SN4Us4rez+tylwwwCV1psiNVOkJeM3AUWUNWg/jDQY2+HE/444y5gc+jBmRqASOm2Oeh5c1axHobwRKQ==\",
      \"dev\": true
    },
    \"@types/json5\": {
      \"version\": \"0.0.29\",
      \"resolved\": \"https://registry.npmjs.org/@types/json5/-/json5-0.0.29.tgz\",
      \"integrity\": \"sha512-dRLjCWHYg4oaA77cxO64oO+7JwCwnIzkZPdrrC71jQmQtlhM556pwKo5bUzqvZndkVbeFLIIi+9TC40JNF5hNQ==\",
      \"dev\": true
    },
    \"@types/minimatch\": {
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.3.tgz\",
      \"integrity\": \"sha512-tHq6qdbT9U1IRSGf14CL0pUlULksvY9OZ+5eEgl1N7t+OA3tGvNpxJCzuKQlsNgCVwbAs670L1vcVQi8j9HjnA==\",
      \"dev\": true
    },
    \"@types/minimist\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimist/-/minimist-1.2.1.tgz\",
      \"integrity\": \"sha512-fZQQafSREFyuZcdWFAExYjBiCL7AUCdgsk80iO0q4yihYYdcIiH28CcuPTGFgLOCC8RlW49GSQxdHwZP+I7CNg==\",
      \"dev\": true
    },
    \"@types/node\": {
      \"version\": \"14.6.4\",
      \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-14.6.4.tgz\",
      \"integrity\": \"sha512-Wk7nG1JSaMfMpoMJDKUsWYugliB2Vy55pdjLpmLixeyMi7HizW2I/9QoxsPCkXl3dO+ZOVqPumKaDUv5zJu2uQ==\",
      \"dev\": true
    },
    \"@types/normalize-package-data\": {
      \"version\": \"2.4.0\",
      \"resolved\": \"https://registry.npmjs.org/@types/normalize-package-data/-/normalize-package-data-2.4.0.tgz\",
      \"integrity\": \"sha512-f5j5b/Gf71L+dbqxIpQ4Z2WlmI/mPJ0fOkGGmFgtb6sAu97EPczzbS3/tJKxmcYDj55OX6ssqwDAWOHIYDRDGA==\",
      \"dev\": true
    },
    \"@ungap/structured-clone\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@ungap/structured-clone/-/structured-clone-1.2.0.tgz\",
      \"integrity\": \"sha512-zuVdFrMJiuCDQUMCzQaD6KL28MjnqqN8XnAqiEq9PNm/hCPTSGfrXCOfwj1ow4LFb/tNymJPwsNbVePc1xFqrQ==\",
      \"dev\": true
    },
    \"@webassemblyjs/ast\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/ast/-/ast-1.11.5.tgz\",
      \"integrity\": \"sha512-LHY/GSAZZRpsNQH+/oHqhRQ5FT7eoULcBqgfyTB5nQHogFnK3/7QoN7dLnwSE/JkUAF0SrRuclT7ODqMFtWxxQ==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/helper-numbers\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\"
      }
    },
    \"@webassemblyjs/floating-point-hex-parser\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/floating-point-hex-parser/-/floating-point-hex-parser-1.11.5.tgz\",
      \"integrity\": \"sha512-1j1zTIC5EZOtCplMBG/IEwLtUojtwFVwdyVMbL/hwWqbzlQoJsWCOavrdnLkemwNoC/EOwtUFch3fuo+cbcXYQ==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-api-error\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-api-error/-/helper-api-error-1.11.5.tgz\",
      \"integrity\": \"sha512-L65bDPmfpY0+yFrsgz8b6LhXmbbs38OnwDCf6NpnMUYqa+ENfE5Dq9E42ny0qz/PdR0LJyq/T5YijPnU8AXEpA==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-buffer\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-buffer/-/helper-buffer-1.11.5.tgz\",
      \"integrity\": \"sha512-fDKo1gstwFFSfacIeH5KfwzjykIE6ldh1iH9Y/8YkAZrhmu4TctqYjSh7t0K2VyDSXOZJ1MLhht/k9IvYGcIxg==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-numbers\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-numbers/-/helper-numbers-1.11.5.tgz\",
      \"integrity\": \"sha512-DhykHXM0ZABqfIGYNv93A5KKDw/+ywBFnuWybZZWcuzWHfbp21wUfRkbtz7dMGwGgT4iXjWuhRMA2Mzod6W4WA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/floating-point-hex-parser\": \"1.11.5\",
        \"@webassemblyjs/helper-api-error\": \"1.11.5\",
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"@webassemblyjs/helper-wasm-bytecode\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-wasm-bytecode/-/helper-wasm-bytecode-1.11.5.tgz\",
      \"integrity\": \"sha512-oC4Qa0bNcqnjAowFn7MPCETQgDYytpsfvz4ujZz63Zu/a/v71HeCAAmZsgZ3YVKec3zSPYytG3/PrRCqbtcAvA==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-wasm-section\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-wasm-section/-/helper-wasm-section-1.11.5.tgz\",
      \"integrity\": \"sha512-uEoThA1LN2NA+K3B9wDo3yKlBfVtC6rh0i4/6hvbz071E8gTNZD/pT0MsBf7MeD6KbApMSkaAK0XeKyOZC7CIA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-buffer\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/wasm-gen\": \"1.11.5\"
      }
    },
    \"@webassemblyjs/ieee754\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/ieee754/-/ieee754-1.11.5.tgz\",
      \"integrity\": \"sha512-37aGq6qVL8A8oPbPrSGMBcp38YZFXcHfiROflJn9jxSdSMMM5dS5P/9e2/TpaJuhE+wFrbukN2WI6Hw9MH5acg==\",
      \"dev\": true,
      \"requires\": {
        \"@xtuc/ieee754\": \"^1.2.0\"
      }
    },
    \"@webassemblyjs/leb128\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/leb128/-/leb128-1.11.5.tgz\",
      \"integrity\": \"sha512-ajqrRSXaTJoPW+xmkfYN6l8VIeNnR4vBOTQO9HzR7IygoCcKWkICbKFbVTNMjMgMREqXEr0+2M6zukzM47ZUfQ==\",
      \"dev\": true,
      \"requires\": {
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"@webassemblyjs/utf8\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/utf8/-/utf8-1.11.5.tgz\",
      \"integrity\": \"sha512-WiOhulHKTZU5UPlRl53gHR8OxdGsSOxqfpqWeA2FmcwBMaoEdz6b2x2si3IwC9/fSPLfe8pBMRTHVMk5nlwnFQ==\",
      \"dev\": true
    },
    \"@webassemblyjs/wasm-edit\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-edit/-/wasm-edit-1.11.5.tgz\",
      \"integrity\": \"sha512-C0p9D2fAu3Twwqvygvf42iGCQ4av8MFBLiTb+08SZ4cEdwzWx9QeAHDo1E2k+9s/0w1DM40oflJOpkZ8jW4HCQ==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-buffer\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-section\": \"1.11.5\",
        \"@webassemblyjs/wasm-gen\": \"1.11.5\",
        \"@webassemblyjs/wasm-opt\": \"1.11.5\",
        \"@webassemblyjs/wasm-parser\": \"1.11.5\",
        \"@webassemblyjs/wast-printer\": \"1.11.5\"
      }
    },
    \"@webassemblyjs/wasm-gen\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-gen/-/wasm-gen-1.11.5.tgz\",
      \"integrity\": \"sha512-14vteRlRjxLK9eSyYFvw1K8Vv+iPdZU0Aebk3j6oB8TQiQYuO6hj9s4d7qf6f2HJr2khzvNldAFG13CgdkAIfA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/ieee754\": \"1.11.5\",
        \"@webassemblyjs/leb128\": \"1.11.5\",
        \"@webassemblyjs/utf8\": \"1.11.5\"
      }
    },
    \"@webassemblyjs/wasm-opt\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-opt/-/wasm-opt-1.11.5.tgz\",
      \"integrity\": \"sha512-tcKwlIXstBQgbKy1MlbDMlXaxpucn42eb17H29rawYLxm5+MsEmgPzeCP8B1Cl69hCice8LeKgZpRUAPtqYPgw==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-buffer\": \"1.11.5\",
        \"@webassemblyjs/wasm-gen\": \"1.11.5\",
        \"@webassemblyjs/wasm-parser\": \"1.11.5\"
      }
    },
    \"@webassemblyjs/wasm-parser\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-parser/-/wasm-parser-1.11.5.tgz\",
      \"integrity\": \"sha512-SVXUIwsLQlc8srSD7jejsfTU83g7pIGr2YYNb9oHdtldSxaOhvA5xwvIiWIfcX8PlSakgqMXsLpLfbbJ4cBYew==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@webassemblyjs/helper-api-error\": \"1.11.5\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.11.5\",
        \"@webassemblyjs/ieee754\": \"1.11.5\",
        \"@webassemblyjs/leb128\": \"1.11.5\",
        \"@webassemblyjs/utf8\": \"1.11.5\"
      }
    },
    \"@webassemblyjs/wast-printer\": {
      \"version\": \"1.11.5\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wast-printer/-/wast-printer-1.11.5.tgz\",
      \"integrity\": \"sha512-f7Pq3wvg3GSPUPzR0F6bmI89Hdb+u9WXrSKc4v+N0aV0q6r42WoF92Jp2jEorBEBRoRNXgjp53nBniDXcqZYPA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.11.5\",
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"@webpack-cli/configtest\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/configtest/-/configtest-1.2.0.tgz\",
      \"integrity\": \"sha512-4FB8Tj6xyVkyqjj1OaTqCjXYULB9FMkqQ8yGrZjRDrYh0nOE+7Lhs45WioWQQMV+ceFlE368Ukhe6xdvJM9Egg==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"@webpack-cli/info\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/info/-/info-1.5.0.tgz\",
      \"integrity\": \"sha512-e8tSXZpw2hPl2uMJY6fsMswaok5FdlGNRTktvFk2sD8RjH0hE2+XistawJx1vmKteh4NmGmNUrp+Tb2w+udPcQ==\",
      \"dev\": true,
      \"requires\": {
        \"envinfo\": \"^7.7.3\"
      }
    },
    \"@webpack-cli/serve\": {
      \"version\": \"1.7.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/serve/-/serve-1.7.0.tgz\",
      \"integrity\": \"sha512-oxnCNGj88fL+xzV+dacXs44HcDwf1ovs3AuEzvP7mqXw7fQntqIhQ1BRmynh4qEKQSSSRSWVyXRjmTbZIX9V2Q==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"@xtuc/ieee754\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@xtuc/ieee754/-/ieee754-1.2.0.tgz\",
      \"integrity\": \"sha512-DX8nKgqcGwsc0eJSqYt5lwP4DH5FlHnmuWWBRy7X0NcaGR0ZtuyeESgMwTYVEtxmsNGY+qit4QYT/MIYTOTPeA==\",
      \"dev\": true
    },
    \"@xtuc/long\": {
      \"version\": \"4.2.2\",
      \"resolved\": \"https://registry.npmjs.org/@xtuc/long/-/long-4.2.2.tgz\",
      \"integrity\": \"sha512-NuHqBY1PB/D8xU6s/thBgOAiAP7HOYDQ32+BFZILJ8ivkUkAHQnWfn6WhL79Owj1qmUnoN/YPhktdIoucipkAQ==\",
      \"dev\": true
    },
    \"abbrev\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/abbrev/-/abbrev-1.1.1.tgz\",
      \"integrity\": \"sha512-nne9/IiQ/hzIhY6pdDnbBtz7DjPTKrY00P/zvPSm5pOFkl6xuGrGnXn/VtTNNfNtAfZ9/1RtehkszU9qcTii0Q==\",
      \"dev\": true
    },
    \"acorn\": {
      \"version\": \"8.10.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-8.10.0.tgz\",
      \"integrity\": \"sha512-F0SAmZ8iUtS//m8DmCTA0jlh6TDKkHQyK6xc6V4KDTyZKA9dnvX9/3sRTVQrWm79glUAZbnmmNcdYwUIHWVybw==\",
      \"dev\": true
    },
    \"acorn-import-assertions\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn-import-assertions/-/acorn-import-assertions-1.9.0.tgz\",
      \"integrity\": \"sha512-cmMwop9x+8KFhxvKrKfPYmN6/pKTYYHBqLa0DfvVZcKMJWNyWLnaqND7dx/qn66R7ewM1UX5XMaDVP5wlVTaVA==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"acorn-jsx\": {
      \"version\": \"5.3.2\",
      \"resolved\": \"https://registry.npmjs.org/acorn-jsx/-/acorn-jsx-5.3.2.tgz\",
      \"integrity\": \"sha512-rq9s+JNhf0IChjtDXxllJ7g41oZk5SlXtp0LHwyA5cejwn7vKmKp4pPri6YEePv2PU65sAsegbXtIinmDFDXgQ==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"agent-base\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/agent-base/-/agent-base-6.0.2.tgz\",
      \"integrity\": \"sha512-RZNwNclF7+MS/8bDg70amg32dyeZGZxiDuQmZxKLAlQjr3jGyLx+4Kkk58UO7D2QdgFIQCovuSuZESne6RG6XQ==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"4\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"agentkeepalive\": {
      \"version\": \"4.2.1\",
      \"resolved\": \"https://registry.npmjs.org/agentkeepalive/-/agentkeepalive-4.2.1.tgz\",
      \"integrity\": \"sha512-Zn4cw2NEqd+9fiSVWMscnjyQ1a8Yfoc5oBajLeo5w+YBHgDUcEBY2hS4YpTz6iN5f/2zQiktcuM6tS8x1p9dpA==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^4.1.0\",
        \"depd\": \"^1.1.2\",
        \"humanize-ms\": \"^1.2.1\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"aggregate-error\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/aggregate-error/-/aggregate-error-3.1.0.tgz\",
      \"integrity\": \"sha512-4I7Td01quW/RpocfNayFdFVk1qSuoh0E7JrbRJ16nH01HhKFQ88INq9Sd+nd72zqRySlr9BmDA8xlEJ6vJMrYA==\",
      \"dev\": true,
      \"requires\": {
        \"clean-stack\": \"^2.0.0\",
        \"indent-string\": \"^4.0.0\"
      }
    },
    \"ajv\": {
      \"version\": \"6.12.6\",
      \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-6.12.6.tgz\",
      \"integrity\": \"sha512-j3fVLgvTo527anyYyJOGTYJbG+vnnQYvE0m5mmkc1TK+nxAppkCLMIL0aZ4dblVCNoGShhm+kzE4ZUykBoMg4g==\",
      \"dev\": true,
      \"requires\": {
        \"fast-deep-equal\": \"^3.1.1\",
        \"fast-json-stable-stringify\": \"^2.0.0\",
        \"json-schema-traverse\": \"^0.4.1\",
        \"uri-js\": \"^4.2.2\"
      }
    },
    \"ajv-formats\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/ajv-formats/-/ajv-formats-2.1.1.tgz\",
      \"integrity\": \"sha512-Wx0Kx52hxE7C18hkMEggYlEifqWZtYaRgouJor+WMdPnQyEK13vgEWyVNup7SoeeoLMsr4kf5h6dOW11I15MUA==\",
      \"dev\": true,
      \"requires\": {
        \"ajv\": \"^8.0.0\"
      },
      \"dependencies\": {
        \"ajv\": {
          \"version\": \"8.11.0\",
          \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.11.0.tgz\",
          \"integrity\": \"sha512-wGgprdCvMalC0BztXvitD2hC04YffAvtsUn93JbGXYLAtCUO4xd17mCCZQxUOItiBwZvJScWo8NIvQMQ71rdpg==\",
          \"dev\": true,
          \"requires\": {
            \"fast-deep-equal\": \"^3.1.1\",
            \"json-schema-traverse\": \"^1.0.0\",
            \"require-from-string\": \"^2.0.2\",
            \"uri-js\": \"^4.2.2\"
          }
        },
        \"json-schema-traverse\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
          \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
          \"dev\": true
        }
      }
    },
    \"ajv-keywords\": {
      \"version\": \"3.5.2\",
      \"resolved\": \"https://registry.npmjs.org/ajv-keywords/-/ajv-keywords-3.5.2.tgz\",
      \"integrity\": \"sha512-5p6WTN0DdTGVQk6VjcEju19IgaHudalcfabD7yhDGeA6bcQnmL+CpveLJq/3hvfwd1aof6L386Ougkx6RfyMIQ==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"ansi-colors\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-4.1.1.tgz\",
      \"integrity\": \"sha512-JoX0apGbHaUJBNl6yF+p6JAFYZ666/hhCGKN5t9QFjbJQKUU/g8MNbFDbvfrgKXvI1QpZplPOnwIo99lX/AAmA==\",
      \"dev\": true
    },
    \"ansi-styles\": {
      \"version\": \"3.2.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
      \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
      \"dev\": true,
      \"requires\": {
        \"color-convert\": \"^1.9.0\"
      }
    },
    \"aproba\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/aproba/-/aproba-2.0.0.tgz\",
      \"integrity\": \"sha512-lYe4Gx7QT+MKGbDsA+Z+he/Wtef0BiwDOlK/XkBrdfsh9J/jPPXbX0tE9x9cl27Tmu5gg3QUbUrQYa/y+KOHPQ==\",
      \"dev\": true
    },
    \"argparse\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/argparse/-/argparse-2.0.1.tgz\",
      \"integrity\": \"sha512-8+9WqebbFzpX9OR+Wa6O29asIogeRMzcGtAINdpMHHyAg10f05aSFVBbcEqGf/PXw1EjAZ+q2/bEBg3DvurK3Q==\",
      \"dev\": true
    },
    \"array-buffer-byte-length\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/array-buffer-byte-length/-/array-buffer-byte-length-1.0.0.tgz\",
      \"integrity\": \"sha512-LPuwb2P+NrQw3XhxGc36+XSvuBPopovXYTR9Ew++Du9Yb/bx5AzBfrIsBoj0EZUifjQU+sHL21sseZ3jerWO/A==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"is-array-buffer\": \"^3.0.1\"
      }
    },
    \"array-includes\": {
      \"version\": \"3.1.7\",
      \"resolved\": \"https://registry.npmjs.org/array-includes/-/array-includes-3.1.7.tgz\",
      \"integrity\": \"sha512-dlcsNBIiWhPkHdOEEKnehA+RNUWDc4UqFtnIXU4uuYDPtA4LDkr7qip2p0VvFAEXNDr0yWZ9PJyIRiGjRLQzwQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"get-intrinsic\": \"^1.2.1\",
        \"is-string\": \"^1.0.7\"
      }
    },
    \"array-union\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-1.0.2.tgz\",
      \"integrity\": \"sha1-mjRBDk9OPaI96jdb5b5w8kd47Dk=\",
      \"dev\": true,
      \"requires\": {
        \"array-uniq\": \"^1.0.1\"
      }
    },
    \"array-uniq\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/array-uniq/-/array-uniq-1.0.3.tgz\",
      \"integrity\": \"sha1-r2rId6Jcx/dOBYiUdThY39sk/bY=\",
      \"dev\": true
    },
    \"array.prototype.findlastindex\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.findlastindex/-/array.prototype.findlastindex-1.2.3.tgz\",
      \"integrity\": \"sha512-LzLoiOMAxvy+Gd3BAq3B7VeIgPdo+Q8hthvKtXybMvRV0jrXfJM/t8mw7nNlpEcVlVUnCnM2KSX4XU5HmpodOA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"es-shim-unscopables\": \"^1.0.0\",
        \"get-intrinsic\": \"^1.2.1\"
      }
    },
    \"array.prototype.flat\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.flat/-/array.prototype.flat-1.3.2.tgz\",
      \"integrity\": \"sha512-djYB+Zx2vLewY8RWlNCUdHjDXs2XOgm602S9E7P/UpHgfeHL00cRiIF+IN/G/aUJ7kGPb6yO/ErDI5V2s8iycA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"es-shim-unscopables\": \"^1.0.0\"
      }
    },
    \"array.prototype.flatmap\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.flatmap/-/array.prototype.flatmap-1.3.2.tgz\",
      \"integrity\": \"sha512-Ewyx0c9PmpcsByhSW4r+9zDU7sGjFc86qf/kKtuSCRdhfbk0SNLLkaT5qvcHnRGgc5NP/ly/y+qkXkqONX54CQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"es-shim-unscopables\": \"^1.0.0\"
      }
    },
    \"arraybuffer.prototype.slice\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/arraybuffer.prototype.slice/-/arraybuffer.prototype.slice-1.0.1.tgz\",
      \"integrity\": \"sha512-09x0ZWFEjj4WD8PDbykUwo3t9arLn8NIzmmYEJFpYekOAQjpkGSyrQhNoRTcwwcFRu+ycWF78QZ63oWTqSjBcw==\",
      \"dev\": true,
      \"requires\": {
        \"array-buffer-byte-length\": \"^1.0.0\",
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"get-intrinsic\": \"^1.2.1\",
        \"is-array-buffer\": \"^3.0.2\",
        \"is-shared-array-buffer\": \"^1.0.2\"
      }
    },
    \"arrify\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/arrify/-/arrify-1.0.1.tgz\",
      \"integrity\": \"sha1-iYUI2iIm84DfkEcoRWhJwVAaSw0=\",
      \"dev\": true
    },
    \"assertion-error\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/assertion-error/-/assertion-error-1.1.0.tgz\",
      \"integrity\": \"sha512-jgsaNduz+ndvGyFt3uSuWqvy4lCnIJiovtouQN5JZHOKCS2QuhEdbcQHFhVksz2N2U9hXJo8odG7ETyWlEeuDw==\",
      \"dev\": true
    },
    \"async-foreach\": {
      \"version\": \"0.1.3\",
      \"resolved\": \"https://registry.npmjs.org/async-foreach/-/async-foreach-0.1.3.tgz\",
      \"integrity\": \"sha1-NhIfhFwFeBct5Bmpfb6x0W7DRUI=\",
      \"dev\": true
    },
    \"available-typed-arrays\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/available-typed-arrays/-/available-typed-arrays-1.0.5.tgz\",
      \"integrity\": \"sha512-DMD0KiN46eipeziST1LPP/STfDU0sufISXmjSgvVsoU2tqxctQeASejWcfNtxYKqETM1UxQ8sp2OrSBWpHY6sw==\",
      \"dev\": true
    },
    \"babel-loader\": {
      \"version\": \"9.1.3\",
      \"resolved\": \"https://registry.npmjs.org/babel-loader/-/babel-loader-9.1.3.tgz\",
      \"integrity\": \"sha512-xG3ST4DglodGf8qSwv0MdeWLhrDsw/32QMdTO5T1ZIp9gQur0HkCyFs7Awskr10JKXFXwpAhiCuYX5oGXnRGbw==\",
      \"dev\": true,
      \"requires\": {
        \"find-cache-dir\": \"^4.0.0\",
        \"schema-utils\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"ajv\": {
          \"version\": \"8.11.0\",
          \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.11.0.tgz\",
          \"integrity\": \"sha512-wGgprdCvMalC0BztXvitD2hC04YffAvtsUn93JbGXYLAtCUO4xd17mCCZQxUOItiBwZvJScWo8NIvQMQ71rdpg==\",
          \"dev\": true,
          \"requires\": {
            \"fast-deep-equal\": \"^3.1.1\",
            \"json-schema-traverse\": \"^1.0.0\",
            \"require-from-string\": \"^2.0.2\",
            \"uri-js\": \"^4.2.2\"
          }
        },
        \"ajv-keywords\": {
          \"version\": \"5.1.0\",
          \"resolved\": \"https://registry.npmjs.org/ajv-keywords/-/ajv-keywords-5.1.0.tgz\",
          \"integrity\": \"sha512-YCS/JNFAUyr5vAuhk1DWm1CBxRHW9LbJ2ozWeemrIqpbsqKjHVxYPyi5GC0rjZIT5JxJ3virVTS8wk4i/Z+krw==\",
          \"dev\": true,
          \"requires\": {
            \"fast-deep-equal\": \"^3.1.3\"
          }
        },
        \"find-cache-dir\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-4.0.0.tgz\",
          \"integrity\": \"sha512-9ZonPT4ZAK4a+1pUPVPZJapbi7O5qbbJPdYw/NOQWZZbVLdDTYM3A4R9z/DpAM08IDaFGsvPgiGZ82WEwUDWjg==\",
          \"dev\": true,
          \"requires\": {
            \"common-path-prefix\": \"^3.0.0\",
            \"pkg-dir\": \"^7.0.0\"
          }
        },
        \"find-up\": {
          \"version\": \"6.3.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-6.3.0.tgz\",
          \"integrity\": \"sha512-v2ZsoEuVHYy8ZIlYqwPe/39Cy+cFDzp4dXPaxNvkEuouymu+2Jbz0PxpKarJHYJTmv2HWT3O382qY8l4jMWthw==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^7.1.0\",
            \"path-exists\": \"^5.0.0\"
          }
        },
        \"json-schema-traverse\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
          \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
          \"dev\": true
        },
        \"locate-path\": {
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-7.2.0.tgz\",
          \"integrity\": \"sha512-gvVijfZvn7R+2qyPX8mAuKcFGDf6Nc61GdvGafQsHL0sBIxfKzA+usWn4GFC/bk+QdwPUD4kWFJLhElipq+0VA==\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^6.0.0\"
          }
        },
        \"p-limit\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-4.0.0.tgz\",
          \"integrity\": \"sha512-5b0R4txpzjPWVw/cXXUResoD4hb6U/x9BH08L7nw+GN1sezDzPdxeRvpc9c433fZhBan/wusjbCsqwqm4EIBIQ==\",
          \"dev\": true,
          \"requires\": {
            \"yocto-queue\": \"^1.0.0\"
          }
        },
        \"p-locate\": {
          \"version\": \"6.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-6.0.0.tgz\",
          \"integrity\": \"sha512-wPrq66Llhl7/4AGC6I+cqxT07LhXvWL08LNXz1fENOw0Ap4sRZZ/gZpTTJ5jpurzzzfS2W/Ge9BY3LgLjCShcw==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^4.0.0\"
          }
        },
        \"path-exists\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-5.0.0.tgz\",
          \"integrity\": \"sha512-RjhtfwJOxzcFmNOi6ltcbcu4Iu+FL3zEj83dk4kAS+fVpTxXLO1b38RvJgT/0QwvV/L3aY9TAnyv0EOqW4GoMQ==\",
          \"dev\": true
        },
        \"pkg-dir\": {
          \"version\": \"7.0.0\",
          \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-7.0.0.tgz\",
          \"integrity\": \"sha512-Ie9z/WINcxxLp27BKOCHGde4ITq9UklYKDzVo1nhk5sqGEXU3FpkwP5GM2voTGJkGd9B3Otl+Q4uwSOeSUtOBA==\",
          \"dev\": true,
          \"requires\": {
            \"find-up\": \"^6.3.0\"
          }
        },
        \"schema-utils\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-4.0.0.tgz\",
          \"integrity\": \"sha512-1edyXKgh6XnJsJSQ8mKWXnN/BVaIbFMLpouRUrXgVq7WYne5kw3MW7UPhO44uRXQSIpTSXoJbmrR2X0w9kUTyg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.9\",
            \"ajv\": \"^8.8.0\",
            \"ajv-formats\": \"^2.1.1\",
            \"ajv-keywords\": \"^5.0.0\"
          }
        },
        \"yocto-queue\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/yocto-queue/-/yocto-queue-1.0.0.tgz\",
          \"integrity\": \"sha512-9bnSc/HEW2uRy67wc+T8UwauLuPJVn28jb+GtJY16iiKWyvmYJRXVT4UamsAEGQfPohgr2q4Tq0sQbQlxTfi1g==\",
          \"dev\": true
        }
      }
    },
    \"babel-plugin-polyfill-corejs2\": {
      \"version\": \"0.4.6\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-corejs2/-/babel-plugin-polyfill-corejs2-0.4.6.tgz\",
      \"integrity\": \"sha512-jhHiWVZIlnPbEUKSSNb9YoWcQGdlTLq7z1GHL4AjFxaoOUMuuEVJ+Y4pAaQUGOGk93YsVCKPbqbfw3m0SM6H8Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.22.6\",
        \"@babel/helper-define-polyfill-provider\": \"^0.4.3\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"babel-plugin-polyfill-corejs3\": {
      \"version\": \"0.8.5\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-corejs3/-/babel-plugin-polyfill-corejs3-0.8.5.tgz\",
      \"integrity\": \"sha512-Q6CdATeAvbScWPNLB8lzSO7fgUVBkQt6zLgNlfyeCr/EQaEQR+bWiBYYPYAFyE528BMjRhL+1QBMOI4jc/c5TA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-define-polyfill-provider\": \"^0.4.3\",
        \"core-js-compat\": \"^3.32.2\"
      }
    },
    \"babel-plugin-polyfill-regenerator\": {
      \"version\": \"0.5.3\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-regenerator/-/babel-plugin-polyfill-regenerator-0.5.3.tgz\",
      \"integrity\": \"sha512-8sHeDOmXC8csczMrYEOf0UTNa4yE2SxV5JGeT/LP1n0OYVDUUFPxG9vdk2AlDlIit4t+Kf0xCtpgXPBwnn/9pw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-define-polyfill-provider\": \"^0.4.3\"
      }
    },
    \"balanced-match\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
      \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
      \"dev\": true
    },
    \"big.js\": {
      \"version\": \"5.2.2\",
      \"resolved\": \"https://registry.npmjs.org/big.js/-/big.js-5.2.2.tgz\",
      \"integrity\": \"sha512-vyL2OymJxmarO8gxMr0mhChsO9QGwhynfuu4+MHTAW6czfq9humCB7rKpUjDd9YUiDPU4mzpyupFSvOClAwbmQ==\",
      \"dev\": true
    },
    \"brace-expansion\": {
      \"version\": \"1.1.11\",
      \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-1.1.11.tgz\",
      \"integrity\": \"sha512-iCuPHDFgrHX7H2vEI/5xpz07zSHB00TpugqhmYtVmMO6518mCuRMoOYFldEBl0g187ufozdaHgWKcYFb61qGiA==\",
      \"dev\": true,
      \"requires\": {
        \"balanced-match\": \"^1.0.0\",
        \"concat-map\": \"0.0.1\"
      }
    },
    \"browser-stdout\": {
      \"version\": \"1.3.1\",
      \"resolved\": \"https://registry.npmjs.org/browser-stdout/-/browser-stdout-1.3.1.tgz\",
      \"integrity\": \"sha512-qhAVI1+Av2X7qelOfAIYwXONood6XlZE/fXaBSmW/T5SzLAmCgzi+eiWE7fUvbHaeNBQH13UftjpXxsfLkMpgw==\",
      \"dev\": true
    },
    \"browserslist\": {
      \"version\": \"4.22.1\",
      \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.22.1.tgz\",
      \"integrity\": \"sha512-FEVc202+2iuClEhZhrWy6ZiAcRLvNMyYcxZ8raemul1DYVOVdFsbqckWLdsixQZCpJlwe77Z3UTalE7jsjnKfQ==\",
      \"dev\": true,
      \"requires\": {
        \"caniuse-lite\": \"^1.0.30001541\",
        \"electron-to-chromium\": \"^1.4.535\",
        \"node-releases\": \"^2.0.13\",
        \"update-browserslist-db\": \"^1.0.13\"
      }
    },
    \"buffer-from\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.1.tgz\",
      \"integrity\": \"sha512-MQcXEUbCKtEo7bhqEs6560Hyd4XaovZlO/k9V3hjVUF/zwW7KBVdSK4gIt/bzwS9MbR5qob+F5jusZsb0YQK2A==\",
      \"dev\": true
    },
    \"cacache\": {
      \"version\": \"15.3.0\",
      \"resolved\": \"https://registry.npmjs.org/cacache/-/cacache-15.3.0.tgz\",
      \"integrity\": \"sha512-VVdYzXEn+cnbXpFgWs5hTT7OScegHVmLhJIR8Ufqk3iFD6A6j5iSX1KuBTfNEv4tdJWE2PzA6IVFtcLC7fN9wQ==\",
      \"dev\": true,
      \"requires\": {
        \"@npmcli/fs\": \"^1.0.0\",
        \"@npmcli/move-file\": \"^1.0.1\",
        \"chownr\": \"^2.0.0\",
        \"fs-minipass\": \"^2.0.0\",
        \"glob\": \"^7.1.4\",
        \"infer-owner\": \"^1.0.4\",
        \"lru-cache\": \"^6.0.0\",
        \"minipass\": \"^3.1.1\",
        \"minipass-collect\": \"^1.0.2\",
        \"minipass-flush\": \"^1.0.5\",
        \"minipass-pipeline\": \"^1.2.2\",
        \"mkdirp\": \"^1.0.3\",
        \"p-map\": \"^4.0.0\",
        \"promise-inflight\": \"^1.0.1\",
        \"rimraf\": \"^3.0.2\",
        \"ssri\": \"^8.0.1\",
        \"tar\": \"^6.0.2\",
        \"unique-filename\": \"^1.1.1\"
      },
      \"dependencies\": {
        \"glob\": {
          \"version\": \"7.2.3\",
          \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.3.tgz\",
          \"integrity\": \"sha512-nFR0zLpU2YCaRxwoCJvL6UvCH2JFyFVIvwTLsIf21AuHlMskA1hhTdk+LlYJtOlYt9v6dvszD2BGRqBL+iQK9Q==\",
          \"dev\": true,
          \"requires\": {
            \"fs.realpath\": \"^1.0.0\",
            \"inflight\": \"^1.0.4\",
            \"inherits\": \"2\",
            \"minimatch\": \"^3.1.1\",
            \"once\": \"^1.3.0\",
            \"path-is-absolute\": \"^1.0.0\"
          }
        },
        \"minimatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
          \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^1.1.7\"
          }
        },
        \"p-map\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
          \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
          \"dev\": true,
          \"requires\": {
            \"aggregate-error\": \"^3.0.0\"
          }
        },
        \"rimraf\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
          \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        }
      }
    },
    \"call-bind\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/call-bind/-/call-bind-1.0.2.tgz\",
      \"integrity\": \"sha512-7O+FbCihrB5WGbFYesctwmTKae6rOiIzmz1icreWJ+0aA7LJfuqhEso2T9ncpcFtzMQtzXf2QGGueWJGTYsqrA==\",
      \"dev\": true,
      \"requires\": {
        \"function-bind\": \"^1.1.1\",
        \"get-intrinsic\": \"^1.0.2\"
      }
    },
    \"callsites\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/callsites/-/callsites-3.1.0.tgz\",
      \"integrity\": \"sha512-P8BjAsXvZS+VIDUI11hHCQEv74YT67YUi5JJFNWIqL235sBmjX4+qx9Muvls5ivyNENctx46xQLQ3aTuE7ssaQ==\",
      \"dev\": true
    },
    \"camelcase\": {
      \"version\": \"5.3.1\",
      \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
      \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
      \"dev\": true
    },
    \"camelcase-keys\": {
      \"version\": \"6.2.2\",
      \"resolved\": \"https://registry.npmjs.org/camelcase-keys/-/camelcase-keys-6.2.2.tgz\",
      \"integrity\": \"sha512-YrwaA0vEKazPBkn0ipTiMpSajYDSe+KjQfrjhcBMxJt/znbvlHd8Pw/Vamaz5EB4Wfhs3SUR3Z9mwRu/P3s3Yg==\",
      \"dev\": true,
      \"requires\": {
        \"camelcase\": \"^5.3.1\",
        \"map-obj\": \"^4.0.0\",
        \"quick-lru\": \"^4.0.1\"
      }
    },
    \"caniuse-lite\": {
      \"version\": \"1.0.30001547\",
      \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001547.tgz\",
      \"integrity\": \"sha512-W7CrtIModMAxobGhz8iXmDfuJiiKg1WADMO/9x7/CLNin5cpSbuBjooyoIUVB5eyCc36QuTVlkVa1iB2S5+/eA==\",
      \"dev\": true
    },
    \"chai\": {
      \"version\": \"4.3.10\",
      \"resolved\": \"https://registry.npmjs.org/chai/-/chai-4.3.10.tgz\",
      \"integrity\": \"sha512-0UXG04VuVbruMUYbJ6JctvH0YnC/4q3/AkT18q4NaITo91CUm0liMS9VqzT9vZhVQ/1eqPanMWjBM+Juhfb/9g==\",
      \"dev\": true,
      \"requires\": {
        \"assertion-error\": \"^1.1.0\",
        \"check-error\": \"^1.0.3\",
        \"deep-eql\": \"^4.1.3\",
        \"get-func-name\": \"^2.0.2\",
        \"loupe\": \"^2.3.6\",
        \"pathval\": \"^1.1.1\",
        \"type-detect\": \"^4.0.8\"
      }
    },
    \"chalk\": {
      \"version\": \"2.4.2\",
      \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
      \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-styles\": \"^3.2.1\",
        \"escape-string-regexp\": \"^1.0.5\",
        \"supports-color\": \"^5.3.0\"
      }
    },
    \"check-error\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/check-error/-/check-error-1.0.3.tgz\",
      \"integrity\": \"sha512-iKEoDYaRmd1mxM90a2OEfWhjsjPpYPuQ+lMYsoxB126+t8fw7ySEO48nmDg5COTjxDI65/Y2OWpeEHk3ZOe8zg==\",
      \"dev\": true,
      \"requires\": {
        \"get-func-name\": \"^2.0.2\"
      }
    },
    \"chokidar\": {
      \"version\": \"3.5.3\",
      \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-3.5.3.tgz\",
      \"integrity\": \"sha512-Dr3sfKRP6oTcjf2JmUmFJfeVMvXBdegxB0iVQ5eb2V10uFJUCAS8OByZdVAyVb8xXNz3GjjTgj9kLWsZTqE6kw==\",
      \"dev\": true,
      \"requires\": {
        \"anymatch\": \"~3.1.2\",
        \"braces\": \"~3.0.2\",
        \"fsevents\": \"~2.3.2\",
        \"glob-parent\": \"~5.1.2\",
        \"is-binary-path\": \"~2.1.0\",
        \"is-glob\": \"~4.0.1\",
        \"normalize-path\": \"~3.0.0\",
        \"readdirp\": \"~3.6.0\"
      },
      \"dependencies\": {
        \"anymatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-3.1.2.tgz\",
          \"integrity\": \"sha512-P43ePfOAIupkguHUycrc4qJ9kz8ZiuOUijaETwX7THt0Y/GNK7v0aa8rY816xWjZ7rJdA5XdMcpVFTKMq+RvWg==\",
          \"dev\": true,
          \"requires\": {
            \"normalize-path\": \"^3.0.0\",
            \"picomatch\": \"^2.0.4\"
          }
        },
        \"binary-extensions\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-2.2.0.tgz\",
          \"integrity\": \"sha512-jDctJ/IVQbZoJykoeHbhXpOlNBqGNcwXJKJog42E5HDPUwQTSdjCHdihjj0DlnheQ7blbT6dHOafNAiS8ooQKA==\",
          \"dev\": true
        },
        \"braces\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
          \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
          \"dev\": true,
          \"requires\": {
            \"fill-range\": \"^7.0.1\"
          }
        },
        \"fill-range\": {
          \"version\": \"7.0.1\",
          \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-7.0.1.tgz\",
          \"integrity\": \"sha512-qOo9F+dMUmC2Lcb4BbVvnKJxTPjCm+RRpe4gDuGrzkL7mEVl/djYSu2OdQ2Pa302N4oqkSg9ir6jaLWJ2USVpQ==\",
          \"dev\": true,
          \"requires\": {
            \"to-regex-range\": \"^5.0.1\"
          }
        },
        \"glob-parent\": {
          \"version\": \"5.1.2\",
          \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-5.1.2.tgz\",
          \"integrity\": \"sha512-AOIgSQCepiJYwP3ARnGx+5VnTu2HBYdzbGP45eLw1vr3zB3vZLeyed1sC9hnbcOc9/SrMyM5RPQrkGz4aS9Zow==\",
          \"dev\": true,
          \"requires\": {
            \"is-glob\": \"^4.0.1\"
          }
        },
        \"is-binary-path\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-2.1.0.tgz\",
          \"integrity\": \"sha512-ZMERYes6pDydyuGidse7OsHxtbI7WVeUEozgR/g7rd0xUimYNlvZRE/K2MgZTjWy725IfelLeVcEM97mmtRGXw==\",
          \"dev\": true,
          \"requires\": {
            \"binary-extensions\": \"^2.0.0\"
          }
        },
        \"is-number\": {
          \"version\": \"7.0.0\",
          \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
          \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
          \"dev\": true
        },
        \"readdirp\": {
          \"version\": \"3.6.0\",
          \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-3.6.0.tgz\",
          \"integrity\": \"sha512-hOS089on8RduqdbhvQ5Z37A0ESjsqz6qnRcffsMU3495FuTdqSm+7bhJ29JvIOsBDEEnan5DPu9t3To9VRlMzA==\",
          \"dev\": true,
          \"requires\": {
            \"picomatch\": \"^2.2.1\"
          }
        },
        \"to-regex-range\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
          \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
          \"dev\": true,
          \"requires\": {
            \"is-number\": \"^7.0.0\"
          }
        }
      }
    },
    \"chownr\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/chownr/-/chownr-2.0.0.tgz\",
      \"integrity\": \"sha512-bIomtDF5KGpdogkLd9VspvFzk9KfpyyGlS8YFVZl7TGPBHL5snIOnxeshwVgPteQ9b4Eydl+pVbIyE1DcvCWgQ==\",
      \"dev\": true
    },
    \"chrome-trace-event\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/chrome-trace-event/-/chrome-trace-event-1.0.3.tgz\",
      \"integrity\": \"sha512-p3KULyQg4S7NIHixdwbGX+nFHkoBiA4YQmyWtjb8XngSKV124nJmRysgAeujbUVb15vh+RvFUfCPqU7rXk+hZg==\",
      \"dev\": true
    },
    \"clean-stack\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-stack/-/clean-stack-2.2.0.tgz\",
      \"integrity\": \"sha512-4diC9HaTE+KRAMWhDhrGOECgWZxoevMc5TlkObMqNSsVU62PYzXZ/SMTjzyGAFF1YusgxGcSWTEXBhp0CPwQ1A==\",
      \"dev\": true
    },
    \"clean-webpack-plugin\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-webpack-plugin/-/clean-webpack-plugin-4.0.0.tgz\",
      \"integrity\": \"sha512-WuWE1nyTNAyW5T7oNyys2EN0cfP2fdRxhxnIQWiAp0bMabPdHhoGxM8A6YL2GhqwgrPnnaemVE7nv5XJ2Fhh2w==\",
      \"dev\": true,
      \"requires\": {
        \"del\": \"^4.1.1\"
      }
    },
    \"cliui\": {
      \"version\": \"7.0.4\",
      \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-7.0.4.tgz\",
      \"integrity\": \"sha512-OcRE68cOsVMXp1Yvonl/fzkQOyjLSu/8bhPDfQt0e0/Eb283TKP20Fs2MqoPsr9SwA595rRCA+QMzYc9nBP+JQ==\",
      \"dev\": true,
      \"requires\": {
        \"string-width\": \"^4.2.0\",
        \"strip-ansi\": \"^6.0.0\",
        \"wrap-ansi\": \"^7.0.0\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"6.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
          \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^5.0.1\"
          }
        }
      }
    },
    \"clone-deep\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/clone-deep/-/clone-deep-4.0.1.tgz\",
      \"integrity\": \"sha512-neHB9xuzh/wk0dIHweyAXv2aPGZIVk3pLMe+/RNzINf17fe0OG96QroktYAUm7SM1PBnzTabaLboqqxDyMU+SQ==\",
      \"dev\": true,
      \"requires\": {
        \"is-plain-object\": \"^2.0.4\",
        \"kind-of\": \"^6.0.2\",
        \"shallow-clone\": \"^3.0.0\"
      }
    },
    \"color-convert\": {
      \"version\": \"1.9.3\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-1.9.3.tgz\",
      \"integrity\": \"sha512-QfAUtd+vFdAtFQcC8CCyYt1fYWxSqAiK2cSD6zDB8N3cpsEBAvRxp9zOGg6G/SHHJYAT88/az/IuDGALsNVbGg==\",
      \"dev\": true,
      \"requires\": {
        \"color-name\": \"1.1.3\"
      }
    },
    \"color-name\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.3.tgz\",
      \"integrity\": \"sha512-72fSenhMw2HZMTVHeCA9KCmpEIbzWiQsjN+BHcBbS9vr1mtt+vJjPdksIBNUmKAW8TFUDPJK5SUU3QhE9NEXDw==\",
      \"dev\": true
    },
    \"color-support\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/color-support/-/color-support-1.1.3.tgz\",
      \"integrity\": \"sha512-qiBjkpbMLO/HL68y+lh4q0/O1MZFj2RX6X/KmMa3+gJD3z+WwI1ZzDHysvqHGS3mP6mznPckpXmw1nI9cJjyRg==\",
      \"dev\": true
    },
    \"colorette\": {
      \"version\": \"2.0.19\",
      \"resolved\": \"https://registry.npmjs.org/colorette/-/colorette-2.0.19.tgz\",
      \"integrity\": \"sha512-3tlv/dIP7FWvj3BsbHrGLJ6l/oKh1O3TcgBqMn+yyCagOxc23fyzDS6HypQbgxWbkpDnf52p1LuR4eWDQ/K9WQ==\",
      \"dev\": true
    },
    \"commander\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-4.1.1.tgz\",
      \"integrity\": \"sha512-NOKm8xhkzAjzFx8B2v5OAHT+u5pRQc2UCa2Vq9jYL/31o2wi9mxBA7LIFs3sV5VSC49z6pEhfbMULvShKj26WA==\",
      \"dev\": true
    },
    \"common-path-prefix\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/common-path-prefix/-/common-path-prefix-3.0.0.tgz\",
      \"integrity\": \"sha512-QE33hToZseCH3jS0qN96O/bSh3kaw/h+Tq7ngyY9eWDUnTlTNUyqfqvCXioLe5Na5jFsL78ra/wuBU4iuEgd4w==\",
      \"dev\": true
    },
    \"commondir\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/commondir/-/commondir-1.0.1.tgz\",
      \"integrity\": \"sha1-3dgA2gxmEnOTzKWVDqloo6rxJTs=\",
      \"dev\": true
    },
    \"concat-map\": {
      \"version\": \"0.0.1\",
      \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
      \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
      \"dev\": true
    },
    \"confusing-browser-globals\": {
      \"version\": \"1.0.10\",
      \"resolved\": \"https://registry.npmjs.org/confusing-browser-globals/-/confusing-browser-globals-1.0.10.tgz\",
      \"integrity\": \"sha512-gNld/3lySHwuhaVluJUKLePYirM3QNCKzVxqAdhJII9/WXKVX5PURzMVJspS1jTslSqjeuG4KMVTSouit5YPHA==\",
      \"dev\": true
    },
    \"console-control-strings\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/console-control-strings/-/console-control-strings-1.1.0.tgz\",
      \"integrity\": \"sha512-ty/fTekppD2fIwRvnZAVdeOiGd1c7YXEixbgJTNzqcxJWKQnjJ/V1bNEEE6hygpM3WjwHFUVK6HTjWSzV4a8sQ==\",
      \"dev\": true
    },
    \"convert-source-map\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-2.0.0.tgz\",
      \"integrity\": \"sha512-Kvp459HrV2FEJ1CAsi1Ku+MY3kasH19TFykTz2xWmMeq6bk2NU3XXvfJ+Q61m0xktWwt+1HSYf3JZsTms3aRJg==\",
      \"dev\": true
    },
    \"core-js\": {
      \"version\": \"3.30.2\",
      \"resolved\": \"https://registry.npmjs.org/core-js/-/core-js-3.30.2.tgz\",
      \"integrity\": \"sha512-uBJiDmwqsbJCWHAwjrx3cvjbMXP7xD72Dmsn5LOJpiRmE3WbBbN5rCqQ2Qh6Ek6/eOrjlWngEynBWo4VxerQhg==\",
      \"dev\": true
    },
    \"core-js-compat\": {
      \"version\": \"3.33.0\",
      \"resolved\": \"https://registry.npmjs.org/core-js-compat/-/core-js-compat-3.33.0.tgz\",
      \"integrity\": \"sha512-0w4LcLXsVEuNkIqwjjf9rjCoPhK8uqA4tMRh4Ge26vfLtUutshn+aRJU21I9LCJlh2QQHfisNToLjw1XEJLTWw==\",
      \"dev\": true,
      \"requires\": {
        \"browserslist\": \"^4.22.1\"
      }
    },
    \"core-util-is\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
      \"integrity\": \"sha1-tf1UIgqivFq1eqtxQMlAdUUDwac=\",
      \"dev\": true
    },
    \"cross-spawn\": {
      \"version\": \"7.0.3\",
      \"resolved\": \"https://registry.npmjs.org/cross-spawn/-/cross-spawn-7.0.3.tgz\",
      \"integrity\": \"sha512-iRDPJKUPVEND7dHPO8rkbOnPpyDygcDFtWjpeWNCgy8WP2rXcxXL8TskReQl6OrB2G7+UJrags1q15Fudc7G6w==\",
      \"dev\": true,
      \"requires\": {
        \"path-key\": \"^3.1.0\",
        \"shebang-command\": \"^2.0.0\",
        \"which\": \"^2.0.1\"
      }
    },
    \"css-loader\": {
      \"version\": \"6.8.1\",
      \"resolved\": \"https://registry.npmjs.org/css-loader/-/css-loader-6.8.1.tgz\",
      \"integrity\": \"sha512-xDAXtEVGlD0gJ07iclwWVkLoZOpEvAWaSyf6W18S2pOC//K8+qUDIx8IIT3D+HjnmkJPQeesOPv5aiUaJsCM2g==\",
      \"dev\": true,
      \"requires\": {
        \"icss-utils\": \"^5.1.0\",
        \"postcss\": \"^8.4.21\",
        \"postcss-modules-extract-imports\": \"^3.0.0\",
        \"postcss-modules-local-by-default\": \"^4.0.3\",
        \"postcss-modules-scope\": \"^3.0.0\",
        \"postcss-modules-values\": \"^4.0.0\",
        \"postcss-value-parser\": \"^4.2.0\",
        \"semver\": \"^7.3.8\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"7.3.8\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.8.tgz\",
          \"integrity\": \"sha512-NB1ctGL5rlHrPJtFDVIVzTyQylMLu9N9VICA6HSFJo8MCGVTMW6gfpicwKmmK/dAjTOrqu5l63JJOpDSrAis3A==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        }
      }
    },
    \"cssesc\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/cssesc/-/cssesc-3.0.0.tgz\",
      \"integrity\": \"sha512-/Tb/JcjK111nNScGob5MNtsntNM1aCNUDipB/TkwZFhyDrrE47SOx/18wF2bbjgc3ZzCSKW1T5nt5EbFoAz/Vg==\",
      \"dev\": true
    },
    \"debug\": {
      \"version\": \"3.2.7\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
      \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
      \"dev\": true,
      \"requires\": {
        \"ms\": \"^2.1.1\"
      }
    },
    \"decamelize\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
      \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
      \"dev\": true
    },
    \"decamelize-keys\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize-keys/-/decamelize-keys-1.1.0.tgz\",
      \"integrity\": \"sha1-0XGoeTMlKAfrPLYdwcFEXQeN8tk=\",
      \"dev\": true,
      \"requires\": {
        \"decamelize\": \"^1.1.0\",
        \"map-obj\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"map-obj\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-1.0.1.tgz\",
          \"integrity\": \"sha1-2TPOuSBdgr3PSIb2dCvcK03qFG0=\",
          \"dev\": true
        }
      }
    },
    \"deep-eql\": {
      \"version\": \"4.1.3\",
      \"resolved\": \"https://registry.npmjs.org/deep-eql/-/deep-eql-4.1.3.tgz\",
      \"integrity\": \"sha512-WaEtAOpRA1MQ0eohqZjpGD8zdI0Ovsm8mmFhaDN8dvDZzyoUMcYDnf5Y6iu7HTXxf8JDS23qWa4a+hKCDyOPzw==\",
      \"dev\": true,
      \"requires\": {
        \"type-detect\": \"^4.0.0\"
      }
    },
    \"deep-is\": {
      \"version\": \"0.1.4\",
      \"resolved\": \"https://registry.npmjs.org/deep-is/-/deep-is-0.1.4.tgz\",
      \"integrity\": \"sha512-oIPzksmTg4/MriiaYGO+okXDT7ztn/w3Eptv/+gSIdMdKsJo0u4CfYNFJPy+4SKMuCqGw2wxnA+URMg3t8a/bQ==\",
      \"dev\": true
    },
    \"define-properties\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.2.0.tgz\",
      \"integrity\": \"sha512-xvqAVKGfT1+UAvPwKTVw/njhdQ8ZhXK4lI0bCIuCMrp2up9nPnaDftrLtmpTazqd1o+UY4zgzU+avtMbDP+ldA==\",
      \"dev\": true,
      \"requires\": {
        \"has-property-descriptors\": \"^1.0.0\",
        \"object-keys\": \"^1.1.1\"
      }
    },
    \"del\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/del/-/del-4.1.1.tgz\",
      \"integrity\": \"sha512-QwGuEUouP2kVwQenAsOof5Fv8K9t3D8Ca8NxcXKrIpEHjTXK5J2nXLdP+ALI1cgv8wj7KuwBhTwBkOZSJKM5XQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/glob\": \"^7.1.1\",
        \"globby\": \"^6.1.0\",
        \"is-path-cwd\": \"^2.0.0\",
        \"is-path-in-cwd\": \"^2.0.0\",
        \"p-map\": \"^2.0.0\",
        \"pify\": \"^4.0.1\",
        \"rimraf\": \"^2.6.3\"
      },
      \"dependencies\": {
        \"pify\": {
          \"version\": \"4.0.1\",
          \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
          \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
          \"dev\": true
        }
      }
    },
    \"delegates\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/delegates/-/delegates-1.0.0.tgz\",
      \"integrity\": \"sha512-bd2L678uiWATM6m5Z1VzNCErI3jiGzt6HGY8OVICs40JQq/HALfbyNJmp0UDakEY4pMMaN0Ly5om/B1VI/+xfQ==\",
      \"dev\": true
    },
    \"depd\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/depd/-/depd-1.1.2.tgz\",
      \"integrity\": \"sha512-7emPTl6Dpo6JRXOXjLRxck+FlLRX5847cLKEn00PLAgc3g2hTZZgr+e4c2v6QpSmLeFP3n5yUo7ft6avBK/5jQ==\",
      \"dev\": true
    },
    \"doctrine\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/doctrine/-/doctrine-3.0.0.tgz\",
      \"integrity\": \"sha512-yS+Q5i3hBf7GBkd4KG8a7eBNNWNGLTaEwwYWUijIYM7zrlYDM0BFXHjjPWlWZ1Rg7UaddZeIDmi9jF3HmqiQ2w==\",
      \"dev\": true,
      \"requires\": {
        \"esutils\": \"^2.0.2\"
      }
    },
    \"electron-to-chromium\": {
      \"version\": \"1.4.551\",
      \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.551.tgz\",
      \"integrity\": \"sha512-/Ng/W/kFv7wdEHYzxdK7Cv0BHEGSkSB3M0Ssl8Ndr1eMiYeas/+Mv4cNaDqamqWx6nd2uQZfPz6g25z25M/sdw==\",
      \"dev\": true
    },
    \"emoji-regex\": {
      \"version\": \"8.0.0\",
      \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-8.0.0.tgz\",
      \"integrity\": \"sha512-MSjYzcWNOA0ewAHpz0MxpYFvwg6yjy1NG3xteoqz644VCo/RPgnr1/GGt+ic3iJTzQ8Eu3TdM14SawnVUmGE6A==\",
      \"dev\": true
    },
    \"emojis-list\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/emojis-list/-/emojis-list-3.0.0.tgz\",
      \"integrity\": \"sha512-/kyM18EfinwXZbno9FyUGeFh87KC8HRQBQGildHZbEuRyWFOmv1U10o9BBp8XVZDVNNuQKyIGIu5ZYAAXJ0V2Q==\",
      \"dev\": true
    },
    \"encoding\": {
      \"version\": \"0.1.13\",
      \"resolved\": \"https://registry.npmjs.org/encoding/-/encoding-0.1.13.tgz\",
      \"integrity\": \"sha512-ETBauow1T35Y/WZMkio9jiM0Z5xjHHmJ4XmjZOq1l/dXz3lr2sRn87nJy20RupqSh1F2m3HHPSp8ShIPQJrJ3A==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"iconv-lite\": \"^0.6.2\"
      },
      \"dependencies\": {
        \"iconv-lite\": {
          \"version\": \"0.6.3\",
          \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.6.3.tgz\",
          \"integrity\": \"sha512-4fCk79wshMdzMp2rH06qWrJE4iolqLhCUH+OiuIgU++RB0+94NlDL81atO7GX55uUKueo0txHNtvEyI6D7WdMw==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"safer-buffer\": \">= 2.1.2 < 3.0.0\"
          }
        }
      }
    },
    \"enhanced-resolve\": {
      \"version\": \"5.15.0\",
      \"resolved\": \"https://registry.npmjs.org/enhanced-resolve/-/enhanced-resolve-5.15.0.tgz\",
      \"integrity\": \"sha512-LXYT42KJ7lpIKECr2mAXIaMldcNCh/7E0KBKOu4KSfkHmP+mZmSs+8V5gBAqisWBy0OO4W5Oyys0GO1Y8KtdKg==\",
      \"dev\": true,
      \"requires\": {
        \"graceful-fs\": \"^4.2.4\",
        \"tapable\": \"^2.2.0\"
      }
    },
    \"env-paths\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/env-paths/-/env-paths-2.2.1.tgz\",
      \"integrity\": \"sha512-+h1lkLKhZMTYjog1VEpJNG7NZJWcuc2DDk/qsqSTRRCOXiLjeQ1d1/udrUGhqMxUgAlwKNZ0cf2uqan5GLuS2A==\",
      \"dev\": true
    },
    \"envinfo\": {
      \"version\": \"7.8.1\",
      \"resolved\": \"https://registry.npmjs.org/envinfo/-/envinfo-7.8.1.tgz\",
      \"integrity\": \"sha512-/o+BXHmB7ocbHEAs6F2EnG0ogybVVUdkRunTT2glZU9XAaGmhqskrvKwqXuDfNjEO0LZKWdejEEpnq8aM0tOaw==\",
      \"dev\": true
    },
    \"err-code\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/err-code/-/err-code-2.0.3.tgz\",
      \"integrity\": \"sha512-2bmlRpNKBxT/CRmPOlyISQpNj+qSeYvcym/uT0Jx2bMOlKLtSy1ZmLuVxSEKKyor/N5yhvp/ZiG1oE3DEYMSFA==\",
      \"dev\": true
    },
    \"error-ex\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/error-ex/-/error-ex-1.3.2.tgz\",
      \"integrity\": \"sha512-7dFHNmqeFSEt2ZBsCriorKnn3Z2pj+fd9kmI6QoWw4//DL+icEBfc0U7qJCisqrTsKTjw4fNFy2pW9OqStD84g==\",
      \"dev\": true,
      \"requires\": {
        \"is-arrayish\": \"^0.2.1\"
      }
    },
    \"es-abstract\": {
      \"version\": \"1.22.1\",
      \"resolved\": \"https://registry.npmjs.org/es-abstract/-/es-abstract-1.22.1.tgz\",
      \"integrity\": \"sha512-ioRRcXMO6OFyRpyzV3kE1IIBd4WG5/kltnzdxSCqoP8CMGs/Li+M1uF5o7lOkZVFjDs+NLesthnF66Pg/0q0Lw==\",
      \"dev\": true,
      \"requires\": {
        \"array-buffer-byte-length\": \"^1.0.0\",
        \"arraybuffer.prototype.slice\": \"^1.0.1\",
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"es-set-tostringtag\": \"^2.0.1\",
        \"es-to-primitive\": \"^1.2.1\",
        \"function.prototype.name\": \"^1.1.5\",
        \"get-intrinsic\": \"^1.2.1\",
        \"get-symbol-description\": \"^1.0.0\",
        \"globalthis\": \"^1.0.3\",
        \"gopd\": \"^1.0.1\",
        \"has\": \"^1.0.3\",
        \"has-property-descriptors\": \"^1.0.0\",
        \"has-proto\": \"^1.0.1\",
        \"has-symbols\": \"^1.0.3\",
        \"internal-slot\": \"^1.0.5\",
        \"is-array-buffer\": \"^3.0.2\",
        \"is-callable\": \"^1.2.7\",
        \"is-negative-zero\": \"^2.0.2\",
        \"is-regex\": \"^1.1.4\",
        \"is-shared-array-buffer\": \"^1.0.2\",
        \"is-string\": \"^1.0.7\",
        \"is-typed-array\": \"^1.1.10\",
        \"is-weakref\": \"^1.0.2\",
        \"object-inspect\": \"^1.12.3\",
        \"object-keys\": \"^1.1.1\",
        \"object.assign\": \"^4.1.4\",
        \"regexp.prototype.flags\": \"^1.5.0\",
        \"safe-array-concat\": \"^1.0.0\",
        \"safe-regex-test\": \"^1.0.0\",
        \"string.prototype.trim\": \"^1.2.7\",
        \"string.prototype.trimend\": \"^1.0.6\",
        \"string.prototype.trimstart\": \"^1.0.6\",
        \"typed-array-buffer\": \"^1.0.0\",
        \"typed-array-byte-length\": \"^1.0.0\",
        \"typed-array-byte-offset\": \"^1.0.0\",
        \"typed-array-length\": \"^1.0.4\",
        \"unbox-primitive\": \"^1.0.2\",
        \"which-typed-array\": \"^1.1.10\"
      }
    },
    \"es-module-lexer\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/es-module-lexer/-/es-module-lexer-1.2.1.tgz\",
      \"integrity\": \"sha512-9978wrXM50Y4rTMmW5kXIC09ZdXQZqkE4mxhwkd8VbzsGkXGPgV4zWuqQJgCEzYngdo2dYDa0l8xhX4fkSwJSg==\",
      \"dev\": true
    },
    \"es-set-tostringtag\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/es-set-tostringtag/-/es-set-tostringtag-2.0.1.tgz\",
      \"integrity\": \"sha512-g3OMbtlwY3QewlqAiMLI47KywjWZoEytKr8pf6iTC8uJq5bIAH52Z9pnQ8pVL6whrCto53JZDuUIsifGeLorTg==\",
      \"dev\": true,
      \"requires\": {
        \"get-intrinsic\": \"^1.1.3\",
        \"has\": \"^1.0.3\",
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"es-shim-unscopables\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/es-shim-unscopables/-/es-shim-unscopables-1.0.2.tgz\",
      \"integrity\": \"sha512-J3yBRXCzDu4ULnQwxyToo/OjdMx6akgVC7K6few0a7F/0wLtmKKN7I73AH5T2836UuXRqN7Qg+IIUw/+YJksRw==\",
      \"dev\": true,
      \"requires\": {
        \"hasown\": \"^2.0.0\"
      }
    },
    \"es-to-primitive\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/es-to-primitive/-/es-to-primitive-1.2.1.tgz\",
      \"integrity\": \"sha512-QCOllgZJtaUo9miYBcLChTUaHNjJF3PYs1VidD7AwiEj1kYxKeQTctLAezAOH5ZKRH0g2IgPn6KwB4IT8iRpvA==\",
      \"dev\": true,
      \"requires\": {
        \"is-callable\": \"^1.1.4\",
        \"is-date-object\": \"^1.0.1\",
        \"is-symbol\": \"^1.0.2\"
      }
    },
    \"escalade\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/escalade/-/escalade-3.1.1.tgz\",
      \"integrity\": \"sha512-k0er2gUkLf8O0zKJiAhmkTnJlTvINGv7ygDNPbeIsX/TJjGJZHuh9B2UxbsaEkmlEo9MfhrSzmhIlhRlI2GXnw==\",
      \"dev\": true
    },
    \"escape-string-regexp\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
      \"integrity\": \"sha512-vbRorB5FUQWvla16U8R/qgaFIya2qGzwDrNmCZuYKrbdSUMG6I1ZCGQRefkRVhuOkIGVne7BQ35DSfo1qvJqFg==\",
      \"dev\": true
    },
    \"eslint\": {
      \"version\": \"8.54.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint/-/eslint-8.54.0.tgz\",
      \"integrity\": \"sha512-NY0DfAkM8BIZDVl6PgSa1ttZbx3xHgJzSNJKYcQglem6CppHyMhRIQkBVSSMaSRnLhig3jsDbEzOjwCVt4AmmA==\",
      \"dev\": true,
      \"requires\": {
        \"@eslint-community/eslint-utils\": \"^4.2.0\",
        \"@eslint-community/regexpp\": \"^4.6.1\",
        \"@eslint/eslintrc\": \"^2.1.3\",
        \"@eslint/js\": \"8.54.0\",
        \"@humanwhocodes/config-array\": \"^0.11.13\",
        \"@humanwhocodes/module-importer\": \"^1.0.1\",
        \"@nodelib/fs.walk\": \"^1.2.8\",
        \"@ungap/structured-clone\": \"^1.2.0\",
        \"ajv\": \"^6.12.4\",
        \"chalk\": \"^4.0.0\",
        \"cross-spawn\": \"^7.0.2\",
        \"debug\": \"^4.3.2\",
        \"doctrine\": \"^3.0.0\",
        \"escape-string-regexp\": \"^4.0.0\",
        \"eslint-scope\": \"^7.2.2\",
        \"eslint-visitor-keys\": \"^3.4.3\",
        \"espree\": \"^9.6.1\",
        \"esquery\": \"^1.4.2\",
        \"esutils\": \"^2.0.2\",
        \"fast-deep-equal\": \"^3.1.3\",
        \"file-entry-cache\": \"^6.0.1\",
        \"find-up\": \"^5.0.0\",
        \"glob-parent\": \"^6.0.2\",
        \"globals\": \"^13.19.0\",
        \"graphemer\": \"^1.4.0\",
        \"ignore\": \"^5.2.0\",
        \"imurmurhash\": \"^0.1.4\",
        \"is-glob\": \"^4.0.0\",
        \"is-path-inside\": \"^3.0.3\",
        \"js-yaml\": \"^4.1.0\",
        \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
        \"levn\": \"^0.4.1\",
        \"lodash.merge\": \"^4.6.2\",
        \"minimatch\": \"^3.1.2\",
        \"natural-compare\": \"^1.4.0\",
        \"optionator\": \"^0.9.3\",
        \"strip-ansi\": \"^6.0.1\",
        \"text-table\": \"^0.2.0\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
          \"dev\": true
        },
        \"ansi-styles\": {
          \"version\": \"4.3.0\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
          \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
          \"dev\": true,
          \"requires\": {
            \"color-convert\": \"^2.0.1\"
          }
        },
        \"chalk\": {
          \"version\": \"4.1.2\",
          \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-4.1.2.tgz\",
          \"integrity\": \"sha512-oKnbhFyRIXpUuez8iBMmyEa4nbj4IOQyuhc/wy9kY7/WVPcwIO9VA668Pu8RkO7+0G76SLROeyw9CpQ061i4mA==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-styles\": \"^4.1.0\",
            \"supports-color\": \"^7.1.0\"
          }
        },
        \"color-convert\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
          \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
          \"dev\": true,
          \"requires\": {
            \"color-name\": \"~1.1.4\"
          }
        },
        \"color-name\": {
          \"version\": \"1.1.4\",
          \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
          \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
          \"dev\": true
        },
        \"debug\": {
          \"version\": \"4.3.3\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.3.tgz\",
          \"integrity\": \"sha512-/zxw5+vh1Tfv+4Qn7a5nsbcJKPaSvCDhojn6FEl9vupwK2VCSDtEiEtqr8DFtzYFOdz63LBkxec7DYuc2jon6Q==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"escape-string-regexp\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-4.0.0.tgz\",
          \"integrity\": \"sha512-TtpcNJ3XAzx3Gq8sWRzJaVajRs0uVxA2YAkdb1jm2YkPz4G6egUFAyA3n5vtEIZefPk5Wa4UXbKuS5fKkJWdgA==\",
          \"dev\": true
        },
        \"eslint-scope\": {
          \"version\": \"7.2.2\",
          \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-7.2.2.tgz\",
          \"integrity\": \"sha512-dOt21O7lTMhDM+X9mB4GX+DZrZtCUJPL/wlcTqxyrx5IvO0IYtILdtrQGQp+8n5S0gwSVmOf9NQrjMOgfQZlIg==\",
          \"dev\": true,
          \"requires\": {
            \"esrecurse\": \"^4.3.0\",
            \"estraverse\": \"^5.2.0\"
          }
        },
        \"estraverse\": {
          \"version\": \"5.3.0\",
          \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
          \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
          \"dev\": true
        },
        \"find-up\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-5.0.0.tgz\",
          \"integrity\": \"sha512-78/PXT1wlLLDgTzDs7sjq9hzz0vXD+zn+7wypEe4fXQxCmdmqfGsEPQxmiCSQI3ajFV91bVSsvNtrJRiW6nGng==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^6.0.0\",
            \"path-exists\": \"^4.0.0\"
          }
        },
        \"glob-parent\": {
          \"version\": \"6.0.2\",
          \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-6.0.2.tgz\",
          \"integrity\": \"sha512-XxwI8EOhVQgWp6iDL+3b0r86f4d6AX6zSU55HfB4ydCEuXLXc5FcYeOu+nnGftS4TEju/11rt4KJPTMgbfmv4A==\",
          \"dev\": true,
          \"requires\": {
            \"is-glob\": \"^4.0.3\"
          }
        },
        \"globals\": {
          \"version\": \"13.19.0\",
          \"resolved\": \"https://registry.npmjs.org/globals/-/globals-13.19.0.tgz\",
          \"integrity\": \"sha512-dkQ957uSRWHw7CFXLUtUHQI3g3aWApYhfNR2O6jn/907riyTYKVBmxYVROkBcY614FSSeSJh7Xm7SrUWCxvJMQ==\",
          \"dev\": true,
          \"requires\": {
            \"type-fest\": \"^0.20.2\"
          }
        },
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
          \"dev\": true
        },
        \"is-path-inside\": {
          \"version\": \"3.0.3\",
          \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-3.0.3.tgz\",
          \"integrity\": \"sha512-Fd4gABb+ycGAmKou8eMftCupSir5lRxqf4aD/vd0cD2qc4HL07OjCeuHMr8Ro4CoMaeCKDB0/ECBOVWjTwUvPQ==\",
          \"dev\": true
        },
        \"locate-path\": {
          \"version\": \"6.0.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-6.0.0.tgz\",
          \"integrity\": \"sha512-iPZK6eYjbxRu3uB4/WZ3EsEIMJFMqAoopl3R+zuq0UjcAm/MO6KCweDgPfP3elTztoKP3KtnVHxTn2NHBSDVUw==\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^5.0.0\"
          }
        },
        \"minimatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
          \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^1.1.7\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        },
        \"p-limit\": {
          \"version\": \"3.1.0\",
          \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-3.1.0.tgz\",
          \"integrity\": \"sha512-TYOanM3wGwNGsZN2cVTYPArw454xnXj5qmWF1bEoAc4+cU/ol7GVh7odevjp1FNHduHc3KZMcFduxU5Xc6uJRQ==\",
          \"dev\": true,
          \"requires\": {
            \"yocto-queue\": \"^0.1.0\"
          }
        },
        \"p-locate\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-5.0.0.tgz\",
          \"integrity\": \"sha512-LaNjtRWUBY++zB5nE/NwcaoMylSPk+S+ZHNB1TzdbMJMny6dynpAGt7X/tl/QYq3TIeE6nxHppbo2LGymrG5Pw==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^3.0.2\"
          }
        },
        \"path-exists\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
          \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"6.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
          \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^5.0.1\"
          }
        },
        \"supports-color\": {
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
          \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^4.0.0\"
          }
        }
      }
    },
    \"eslint-config-airbnb-base\": {
      \"version\": \"15.0.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-config-airbnb-base/-/eslint-config-airbnb-base-15.0.0.tgz\",
      \"integrity\": \"sha512-xaX3z4ZZIcFLvh2oUNvcX5oEofXda7giYmuplVxoOg5A7EXJMrUyqRgR+mhDhPK8LZ4PttFOBvCYDbX3sUoUig==\",
      \"dev\": true,
      \"requires\": {
        \"confusing-browser-globals\": \"^1.0.10\",
        \"object.assign\": \"^4.1.2\",
        \"object.entries\": \"^1.1.5\",
        \"semver\": \"^6.3.0\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"6.3.0\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
          \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
          \"dev\": true
        }
      }
    },
    \"eslint-config-prestashop\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-config-prestashop/-/eslint-config-prestashop-0.2.1.tgz\",
      \"integrity\": \"sha512-OMk55c88NWKyjFH//uv0w9kEHEfzGFWic0ibDYqsJokJ9pxuWJwIgnxZi0Koh/cue7xCsBNp4IKQUmaI/vkbpw==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"eslint-import-resolver-node\": {
      \"version\": \"0.3.9\",
      \"resolved\": \"https://registry.npmjs.org/eslint-import-resolver-node/-/eslint-import-resolver-node-0.3.9.tgz\",
      \"integrity\": \"sha512-WFj2isz22JahUv+B788TlO3N6zL3nNJGU8CcZbPZvVEkBPaJdCV4vy5wyghty5ROFbCRnm132v8BScu5/1BQ8g==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^3.2.7\",
        \"is-core-module\": \"^2.13.0\",
        \"resolve\": \"^1.22.4\"
      }
    },
    \"eslint-module-utils\": {
      \"version\": \"2.8.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-module-utils/-/eslint-module-utils-2.8.0.tgz\",
      \"integrity\": \"sha512-aWajIYfsqCKRDgUfjEXNN/JlrzauMuSEy5sbd7WXbtW3EH6A6MpwEh42c7qD+MqQo9QMJ6fWLAeIJynx0g6OAw==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^3.2.7\"
      }
    },
    \"eslint-plugin-import\": {
      \"version\": \"2.29.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-plugin-import/-/eslint-plugin-import-2.29.0.tgz\",
      \"integrity\": \"sha512-QPOO5NO6Odv5lpoTkddtutccQjysJuFxoPS7fAHO+9m9udNHvTCPSAMW9zGAYj8lAIdr40I8yPCdUYrncXtrwg==\",
      \"dev\": true,
      \"requires\": {
        \"array-includes\": \"^3.1.7\",
        \"array.prototype.findlastindex\": \"^1.2.3\",
        \"array.prototype.flat\": \"^1.3.2\",
        \"array.prototype.flatmap\": \"^1.3.2\",
        \"debug\": \"^3.2.7\",
        \"doctrine\": \"^2.1.0\",
        \"eslint-import-resolver-node\": \"^0.3.9\",
        \"eslint-module-utils\": \"^2.8.0\",
        \"hasown\": \"^2.0.0\",
        \"is-core-module\": \"^2.13.1\",
        \"is-glob\": \"^4.0.3\",
        \"minimatch\": \"^3.1.2\",
        \"object.fromentries\": \"^2.0.7\",
        \"object.groupby\": \"^1.0.1\",
        \"object.values\": \"^1.1.7\",
        \"semver\": \"^6.3.1\",
        \"tsconfig-paths\": \"^3.14.2\"
      },
      \"dependencies\": {
        \"doctrine\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/doctrine/-/doctrine-2.1.0.tgz\",
          \"integrity\": \"sha512-35mSku4ZXK0vfCuHEDAwt55dg2jNajHZ1odvF+8SSr82EsZY4QmXfuWso8oEd8zRhVObSN18aM0CjSdoBX7zIw==\",
          \"dev\": true,
          \"requires\": {
            \"esutils\": \"^2.0.2\"
          }
        },
        \"minimatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
          \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^1.1.7\"
          }
        },
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"eslint-scope\": {
      \"version\": \"5.1.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-5.1.1.tgz\",
      \"integrity\": \"sha512-2NxwbF/hZ0KpepYN0cNbo+FN6XoK7GaHlQhgx/hIZl6Va0bF45RQOOwhLIy8lQDbuCiadSLCBnH2CFYquit5bw==\",
      \"dev\": true,
      \"requires\": {
        \"esrecurse\": \"^4.3.0\",
        \"estraverse\": \"^4.1.1\"
      }
    },
    \"eslint-visitor-keys\": {
      \"version\": \"3.4.3\",
      \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-3.4.3.tgz\",
      \"integrity\": \"sha512-wpc+LXeiyiisxPlEkUzU6svyS1frIO3Mgxj1fdy7Pm8Ygzguax2N3Fa/D/ag1WqbOprdI+uY6wMUl8/a2G+iag==\",
      \"dev\": true
    },
    \"espree\": {
      \"version\": \"9.6.1\",
      \"resolved\": \"https://registry.npmjs.org/espree/-/espree-9.6.1.tgz\",
      \"integrity\": \"sha512-oruZaFkjorTpF32kDSI5/75ViwGeZginGGy2NoOSg3Q9bnwlnmDm4HLnkl0RE3n+njDXR037aY1+x58Z/zFdwQ==\",
      \"dev\": true,
      \"requires\": {
        \"acorn\": \"^8.9.0\",
        \"acorn-jsx\": \"^5.3.2\",
        \"eslint-visitor-keys\": \"^3.4.1\"
      }
    },
    \"esquery\": {
      \"version\": \"1.4.2\",
      \"resolved\": \"https://registry.npmjs.org/esquery/-/esquery-1.4.2.tgz\",
      \"integrity\": \"sha512-JVSoLdTlTDkmjFmab7H/9SL9qGSyjElT3myyKp7krqjVFQCDLmj1QFaCLRFBszBKI0XVZaiiXvuPIX3ZwHe1Ng==\",
      \"dev\": true,
      \"requires\": {
        \"estraverse\": \"^5.1.0\"
      },
      \"dependencies\": {
        \"estraverse\": {
          \"version\": \"5.3.0\",
          \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
          \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
          \"dev\": true
        }
      }
    },
    \"esrecurse\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/esrecurse/-/esrecurse-4.3.0.tgz\",
      \"integrity\": \"sha512-KmfKL3b6G+RXvP8N1vr3Tq1kL/oCFgn2NYXEtqP8/L3pKapUA4G8cFVaoF3SU323CD4XypR/ffioHmkti6/Tag==\",
      \"dev\": true,
      \"requires\": {
        \"estraverse\": \"^5.2.0\"
      },
      \"dependencies\": {
        \"estraverse\": {
          \"version\": \"5.3.0\",
          \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
          \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
          \"dev\": true
        }
      }
    },
    \"estraverse\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.2.0.tgz\",
      \"integrity\": \"sha1-De4/7TH81GlhjOc0IJn8GvoL2xM=\",
      \"dev\": true
    },
    \"esutils\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/esutils/-/esutils-2.0.2.tgz\",
      \"integrity\": \"sha1-Cr9PHKpbyx96nYrMbepPqqBLrJs=\",
      \"dev\": true
    },
    \"events\": {
      \"version\": \"3.3.0\",
      \"resolved\": \"https://registry.npmjs.org/events/-/events-3.3.0.tgz\",
      \"integrity\": \"sha512-mQw+2fkQbALzQ7V0MY0IqdnXNOeTtP4r0lN9z7AAawCXgqea7bDii20AYrIBrFd/Hx0M2Ocz6S111CaFkUcb0Q==\",
      \"dev\": true
    },
    \"fast-deep-equal\": {
      \"version\": \"3.1.3\",
      \"resolved\": \"https://registry.npmjs.org/fast-deep-equal/-/fast-deep-equal-3.1.3.tgz\",
      \"integrity\": \"sha512-f3qQ9oQy9j2AhBe/H9VC91wLmKBCCU/gDOnKNAYG5hswO7BLKj09Hc5HYNz9cGI++xlpDCIgDaitVs03ATR84Q==\",
      \"dev\": true
    },
    \"fast-json-stable-stringify\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.0.0.tgz\",
      \"integrity\": \"sha1-1RQsDK7msRifh9OnYREGT4bIu/I=\",
      \"dev\": true
    },
    \"fast-levenshtein\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/fast-levenshtein/-/fast-levenshtein-2.0.6.tgz\",
      \"integrity\": \"sha512-DCXu6Ifhqcks7TZKY3Hxp3y6qphY5SJZmrWMDrKcERSOXWQdMhU9Ig/PYrzyw/ul9jOIyh0N4M0tbC5hodg8dw==\",
      \"dev\": true
    },
    \"fastest-levenshtein\": {
      \"version\": \"1.0.16\",
      \"resolved\": \"https://registry.npmjs.org/fastest-levenshtein/-/fastest-levenshtein-1.0.16.tgz\",
      \"integrity\": \"sha512-eRnCtTTtGZFpQCwhJiUOuxPQWRXVKYDn0b2PeHfXL6/Zi53SLAzAHfVhVWK2AryC/WH05kGfxhFIPvTF0SXQzg==\",
      \"dev\": true
    },
    \"fastq\": {
      \"version\": \"1.13.0\",
      \"resolved\": \"https://registry.npmjs.org/fastq/-/fastq-1.13.0.tgz\",
      \"integrity\": \"sha512-YpkpUnK8od0o1hmeSc7UUs/eB/vIPWJYjKck2QKIzAf71Vm1AAQ3EbuZB3g2JIy+pg+ERD0vqI79KyZiB2e2Nw==\",
      \"dev\": true,
      \"requires\": {
        \"reusify\": \"^1.0.4\"
      }
    },
    \"file-entry-cache\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/file-entry-cache/-/file-entry-cache-6.0.1.tgz\",
      \"integrity\": \"sha512-7Gps/XWymbLk2QLYK4NzpMOrYjMhdIxXuIvy2QBsLE6ljuodKvdkWs/cpyJJ3CVIVpH0Oi1Hvg1ovbMzLdFBBg==\",
      \"dev\": true,
      \"requires\": {
        \"flat-cache\": \"^3.0.4\"
      }
    },
    \"find-cache-dir\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-2.1.0.tgz\",
      \"integrity\": \"sha512-Tq6PixE0w/VMFfCgbONnkiQIVol/JJL7nRMi20fqzA4NRs9AfeqMGeRdPi3wIhYkxjeBaWh2rxwapn5Tu3IqOQ==\",
      \"dev\": true,
      \"requires\": {
        \"commondir\": \"^1.0.1\",
        \"make-dir\": \"^2.0.0\",
        \"pkg-dir\": \"^3.0.0\"
      }
    },
    \"find-up\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
      \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
      \"dev\": true,
      \"requires\": {
        \"locate-path\": \"^3.0.0\"
      }
    },
    \"flat\": {
      \"version\": \"5.0.2\",
      \"resolved\": \"https://registry.npmjs.org/flat/-/flat-5.0.2.tgz\",
      \"integrity\": \"sha512-b6suED+5/3rTpUBdG1gupIl8MPFCAMA0QXwmljLhvCUKcUvdE4gWky9zpuGCcXHOsz4J9wPGNWq6OKpmIzz3hQ==\",
      \"dev\": true
    },
    \"flat-cache\": {
      \"version\": \"3.0.4\",
      \"resolved\": \"https://registry.npmjs.org/flat-cache/-/flat-cache-3.0.4.tgz\",
      \"integrity\": \"sha512-dm9s5Pw7Jc0GvMYbshN6zchCA9RgQlzzEZX3vylR9IqFfS8XciblUXOKfW6SiuJ0e13eDYZoZV5wdrev7P3Nwg==\",
      \"dev\": true,
      \"requires\": {
        \"flatted\": \"^3.1.0\",
        \"rimraf\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"rimraf\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
          \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        }
      }
    },
    \"flatted\": {
      \"version\": \"3.2.4\",
      \"resolved\": \"https://registry.npmjs.org/flatted/-/flatted-3.2.4.tgz\",
      \"integrity\": \"sha512-8/sOawo8tJ4QOBX8YlQBMxL8+RLZfxMQOif9o0KUKTNTjMYElWPE0r/m5VNFxTRd0NSw8qSy8dajrwX4RYI1Hw==\",
      \"dev\": true
    },
    \"for-each\": {
      \"version\": \"0.3.3\",
      \"resolved\": \"https://registry.npmjs.org/for-each/-/for-each-0.3.3.tgz\",
      \"integrity\": \"sha512-jqYfLp7mo9vIyQf8ykW2v7A+2N4QjeCeI5+Dz9XraiO1ign81wjiH7Fb9vSOWvQfNtmSa4H2RoQTrrXivdUZmw==\",
      \"dev\": true,
      \"requires\": {
        \"is-callable\": \"^1.1.3\"
      }
    },
    \"fs-minipass\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fs-minipass/-/fs-minipass-2.1.0.tgz\",
      \"integrity\": \"sha512-V/JgOLFCS+R6Vcq0slCuaeWEdNC3ouDlJMNIsacH2VtALiu9mV4LPrHc5cDl8k5aw6J8jwgWWpiTo5RYhmIzvg==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.0.0\"
      }
    },
    \"fs-readdir-recursive\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fs-readdir-recursive/-/fs-readdir-recursive-1.1.0.tgz\",
      \"integrity\": \"sha512-GNanXlVr2pf02+sPN40XN8HG+ePaNcvM0q5mZBd668Obwb0yD5GiUbZOFgwn8kGMY6I3mdyDJzieUy3PTYyTRA==\",
      \"dev\": true
    },
    \"fs.realpath\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
      \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
      \"dev\": true
    },
    \"fsevents\": {
      \"version\": \"2.3.2\",
      \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-2.3.2.tgz\",
      \"integrity\": \"sha512-xiqMQR4xAeHTuB9uWm+fFRcIOgKBMiOBP+eXiyT7jsgVCq1bkVygt00oASowB7EdtpOHaaPgKt812P9ab+DDKA==\",
      \"dev\": true,
      \"optional\": true
    },
    \"function-bind\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.2.tgz\",
      \"integrity\": \"sha512-7XHNxH7qX9xG5mIwxkhumTox/MIRNcOgDrxWsMt2pAr23WHp6MrRlN7FBSFpCpr+oVO0F744iUgR82nJMfG2SA==\",
      \"dev\": true
    },
    \"function.prototype.name\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/function.prototype.name/-/function.prototype.name-1.1.5.tgz\",
      \"integrity\": \"sha512-uN7m/BzVKQnCUF/iW8jYea67v++2u7m5UgENbHRtdDVclOUP+FMPlCNdmk0h/ysGyo2tavMJEDqJAkJdRa1vMA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.0\",
        \"functions-have-names\": \"^1.2.2\"
      }
    },
    \"functions-have-names\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/functions-have-names/-/functions-have-names-1.2.3.tgz\",
      \"integrity\": \"sha512-xckBUXyTIqT97tq2x2AMb+g163b5JFysYk0x4qxNFwbfQkmNZoiRHb6sPzI9/QV33WeuvVYBUIiD4NzNIyqaRQ==\",
      \"dev\": true
    },
    \"gaze\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/gaze/-/gaze-1.1.3.tgz\",
      \"integrity\": \"sha512-BRdNm8hbWzFzWHERTrejLqwHDfS4GibPoq5wjTPIoJHoBtKGPg3xAFfxmM+9ztbXelxcf2hwQcaz1PtmFeue8g==\",
      \"dev\": true,
      \"requires\": {
        \"globule\": \"^1.0.0\"
      }
    },
    \"gensync\": {
      \"version\": \"1.0.0-beta.2\",
      \"resolved\": \"https://registry.npmjs.org/gensync/-/gensync-1.0.0-beta.2.tgz\",
      \"integrity\": \"sha512-3hN7NaskYvMDLQY55gnW3NQ+mesEAepTqlg+VEbj7zzqEMBVNhzcGYYeqFo/TlYz6eQiFcp1HcsCZO+nGgS8zg==\",
      \"dev\": true
    },
    \"get-caller-file\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/get-caller-file/-/get-caller-file-2.0.5.tgz\",
      \"integrity\": \"sha512-DyFP3BM/3YHTQOCUL/w0OZHR0lpKeGrxotcHWcqNEdnltqFwXVfhEBQ94eIo34AfQpo0rGki4cyIiftY06h2Fg==\",
      \"dev\": true
    },
    \"get-func-name\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/get-func-name/-/get-func-name-2.0.2.tgz\",
      \"integrity\": \"sha512-8vXOvuE167CtIc3OyItco7N/dpRtBbYOsPsXCz7X/PMnlGjYjSGuZJgM1Y7mmew7BKf9BqvLX2tnOVy1BBUsxQ==\",
      \"dev\": true
    },
    \"get-intrinsic\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/get-intrinsic/-/get-intrinsic-1.2.1.tgz\",
      \"integrity\": \"sha512-2DcsyfABl+gVHEfCOaTrWgyt+tb6MSEGmKq+kI5HwLbIYgjgmMcV8KQ41uaKz1xxUcn9tJtgFbQUEVcEbd0FYw==\",
      \"dev\": true,
      \"requires\": {
        \"function-bind\": \"^1.1.1\",
        \"has\": \"^1.0.3\",
        \"has-proto\": \"^1.0.1\",
        \"has-symbols\": \"^1.0.3\"
      }
    },
    \"get-stdin\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/get-stdin/-/get-stdin-4.0.1.tgz\",
      \"integrity\": \"sha1-uWjGsKBDhDJJAui/Gl3zJXmkUP4=\",
      \"dev\": true
    },
    \"get-symbol-description\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/get-symbol-description/-/get-symbol-description-1.0.0.tgz\",
      \"integrity\": \"sha512-2EmdH1YvIQiZpltCNgkuiUnyukzxM/R6NDJX31Ke3BG1Nq5b0S2PhX59UKi9vZpPDQVdqn+1IcaAwnzTT5vCjw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.1.1\"
      }
    },
    \"glob\": {
      \"version\": \"7.1.3\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.3.tgz\",
      \"integrity\": \"sha512-vcfuiIxogLV4DlGBHIUOwI0IbrJ8HWPc4MU7HzviGeNho/UJDfi6B5p3sHeWIQ0KGIU0Jpxi5ZHxemQfLkkAwQ==\",
      \"dev\": true,
      \"requires\": {
        \"fs.realpath\": \"^1.0.0\",
        \"inflight\": \"^1.0.4\",
        \"inherits\": \"2\",
        \"minimatch\": \"^3.0.4\",
        \"once\": \"^1.3.0\",
        \"path-is-absolute\": \"^1.0.0\"
      }
    },
    \"globals\": {
      \"version\": \"11.11.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-11.11.0.tgz\",
      \"integrity\": \"sha512-WHq43gS+6ufNOEqlrDBxVEbb8ntfXrfAUU2ZOpCxrBdGKW3gyv8mCxAfIBD0DroPKGrJ2eSsXsLtY9MPntsyTw==\",
      \"dev\": true
    },
    \"globalthis\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/globalthis/-/globalthis-1.0.3.tgz\",
      \"integrity\": \"sha512-sFdI5LyBiNTHjRd7cGPWapiHWMOXKyuBNX/cWJ3NfzrZQVa8GI/8cofCl74AOVqq9W5kNmguTIzJ/1s2gyI9wA==\",
      \"dev\": true,
      \"requires\": {
        \"define-properties\": \"^1.1.3\"
      }
    },
    \"globby\": {
      \"version\": \"6.1.0\",
      \"resolved\": \"https://registry.npmjs.org/globby/-/globby-6.1.0.tgz\",
      \"integrity\": \"sha1-9abXDoOV4hyFj7BInWTfAkJNUGw=\",
      \"dev\": true,
      \"requires\": {
        \"array-union\": \"^1.0.1\",
        \"glob\": \"^7.0.3\",
        \"object-assign\": \"^4.0.1\",
        \"pify\": \"^2.0.0\",
        \"pinkie-promise\": \"^2.0.0\"
      }
    },
    \"globule\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/globule/-/globule-1.3.2.tgz\",
      \"integrity\": \"sha512-7IDTQTIu2xzXkT+6mlluidnWo+BypnbSoEVVQCGfzqnl5Ik8d3e1d4wycb8Rj9tWW+Z39uPWsdlquqiqPCd/pA==\",
      \"dev\": true,
      \"requires\": {
        \"glob\": \"~7.1.1\",
        \"lodash\": \"~4.17.10\",
        \"minimatch\": \"~3.0.2\"
      }
    },
    \"gopd\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/gopd/-/gopd-1.0.1.tgz\",
      \"integrity\": \"sha512-d65bNlIadxvpb/A2abVdlqKqV563juRnZ1Wtk6s1sIR8uNsXR70xqIzVqxVf1eTqDunwT2MkczEeaezCKTZhwA==\",
      \"dev\": true,
      \"requires\": {
        \"get-intrinsic\": \"^1.1.3\"
      }
    },
    \"graceful-fs\": {
      \"version\": \"4.2.9\",
      \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.9.tgz\",
      \"integrity\": \"sha512-NtNxqUcXgpW2iMrfqSfR73Glt39K+BLwWsPs94yR63v45T0Wbej7eRmL5cWfwEgqXnmjQp3zaJTshdRW/qC2ZQ==\",
      \"dev\": true
    },
    \"graphemer\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/graphemer/-/graphemer-1.4.0.tgz\",
      \"integrity\": \"sha512-EtKwoO6kxCL9WO5xipiHTZlSzBm7WLT627TqC/uVRd0HKmq8NXyebnNYxDoBi7wt8eTWrUrKXCOVaFq9x1kgag==\",
      \"dev\": true
    },
    \"hard-rejection\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/hard-rejection/-/hard-rejection-2.1.0.tgz\",
      \"integrity\": \"sha512-VIZB+ibDhx7ObhAe7OVtoEbuP4h/MuOTHJ+J8h/eBXotJYl0fBgR72xDFCKgIh22OJZIOVNxBMWuhAr10r8HdA==\",
      \"dev\": true
    },
    \"has\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/has/-/has-1.0.3.tgz\",
      \"integrity\": \"sha512-f2dvO0VU6Oej7RkWJGrehjbzMAjFp5/VKPp5tTpWIV4JHHZK1/BxbFRtf/siA2SWTe09caDmVtYYzWEIbBS4zw==\",
      \"dev\": true,
      \"requires\": {
        \"function-bind\": \"^1.1.1\"
      }
    },
    \"has-bigints\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/has-bigints/-/has-bigints-1.0.2.tgz\",
      \"integrity\": \"sha512-tSvCKtBr9lkF0Ex0aQiP9N+OpV4zi2r/Nee5VkRDbaqv35RLYMzbwQfFSZZH0kR+Rd6302UJZ2p/bJCEoR3VoQ==\",
      \"dev\": true
    },
    \"has-flag\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-3.0.0.tgz\",
      \"integrity\": \"sha512-sKJf1+ceQBr4SMkvQnBDNDtf4TXpVhVGateu0t918bl30FnbE2m4vNLX+VWe/dpjlb+HugGYzW7uQXH98HPEYw==\",
      \"dev\": true
    },
    \"has-property-descriptors\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-property-descriptors/-/has-property-descriptors-1.0.0.tgz\",
      \"integrity\": \"sha512-62DVLZGoiEBDHQyqG4w9xCuZ7eJEwNmJRWw2VY84Oedb7WFcA27fiEVe8oUQx9hAUJ4ekurquucTGwsyO1XGdQ==\",
      \"dev\": true,
      \"requires\": {
        \"get-intrinsic\": \"^1.1.1\"
      }
    },
    \"has-proto\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/has-proto/-/has-proto-1.0.1.tgz\",
      \"integrity\": \"sha512-7qE+iP+O+bgF9clE5+UoBFzE65mlBiVj3tKCrlNQ0Ogwm0BjpT/gK4SlLYDMybDh5I3TCTKnPPa0oMG7JDYrhg==\",
      \"dev\": true
    },
    \"has-symbols\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
      \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
      \"dev\": true
    },
    \"has-tostringtag\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-tostringtag/-/has-tostringtag-1.0.0.tgz\",
      \"integrity\": \"sha512-kFjcSNhnlGV1kyoGk7OXKSawH5JOb/LzUc5w9B02hOTO0dfFRjbHQKvg1d6cf3HbeUmtU9VbbV3qzZ2Teh97WQ==\",
      \"dev\": true,
      \"requires\": {
        \"has-symbols\": \"^1.0.2\"
      }
    },
    \"has-unicode\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/has-unicode/-/has-unicode-2.0.1.tgz\",
      \"integrity\": \"sha512-8Rf9Y83NBReMnx0gFzA8JImQACstCYWUplepDa9xprwwtmgEZUF0h/i5xSA625zB/I37EtrswSST6OXxwaaIJQ==\",
      \"dev\": true
    },
    \"hasown\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/hasown/-/hasown-2.0.0.tgz\",
      \"integrity\": \"sha512-vUptKVTpIJhcczKBbgnS+RtcuYMB8+oNzPK2/Hp3hanz8JmpATdmmgLgSaadVREkDm+e2giHwY3ZRkyjSIDDFA==\",
      \"dev\": true,
      \"requires\": {
        \"function-bind\": \"^1.1.2\"
      }
    },
    \"he\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/he/-/he-1.2.0.tgz\",
      \"integrity\": \"sha512-F/1DnUGPopORZi0ni+CvrCgHQ5FyEAHRLSApuYWMmrbSwoN2Mn/7k+Gl38gJnR7yyDZk6WLXwiGod1JOWNDKGw==\",
      \"dev\": true
    },
    \"homedir-polyfill\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
      \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
      \"dev\": true,
      \"requires\": {
        \"parse-passwd\": \"^1.0.0\"
      }
    },
    \"http-cache-semantics\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/http-cache-semantics/-/http-cache-semantics-4.1.1.tgz\",
      \"integrity\": \"sha512-er295DKPVsV82j5kw1Gjt+ADA/XYHsajl82cGNQG2eyoPkvgUhX+nDIyelzhIWbbsXP39EHcI6l5tYs2FYqYXQ==\",
      \"dev\": true
    },
    \"http-proxy-agent\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/http-proxy-agent/-/http-proxy-agent-4.0.1.tgz\",
      \"integrity\": \"sha512-k0zdNgqWTGA6aeIRVpvfVob4fL52dTfaehylg0Y4UvSySvOq/Y+BOyPrgpUrA7HylqvU8vIZGsRuXmspskV0Tg==\",
      \"dev\": true,
      \"requires\": {
        \"@tootallnate/once\": \"1\",
        \"agent-base\": \"6\",
        \"debug\": \"4\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"https-proxy-agent\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/https-proxy-agent/-/https-proxy-agent-5.0.1.tgz\",
      \"integrity\": \"sha512-dFcAjpTQFgoLMzC2VwU+C/CbS7uRL0lWmxDITmqm7C+7F0Odmj6s9l6alZc6AELXhrnggM2CeWSXHGOdX2YtwA==\",
      \"dev\": true,
      \"requires\": {
        \"agent-base\": \"6\",
        \"debug\": \"4\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"humanize-ms\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/humanize-ms/-/humanize-ms-1.2.1.tgz\",
      \"integrity\": \"sha512-Fl70vYtsAFb/C06PTS9dZBo7ihau+Tu/DNCk/OyHhea07S+aeMWpFFkUaXRa8fI+ScZbEI8dfSxwY7gxZ9SAVQ==\",
      \"dev\": true,
      \"requires\": {
        \"ms\": \"^2.0.0\"
      }
    },
    \"icss-utils\": {
      \"version\": \"5.1.0\",
      \"resolved\": \"https://registry.npmjs.org/icss-utils/-/icss-utils-5.1.0.tgz\",
      \"integrity\": \"sha512-soFhflCVWLfRNOPU3iv5Z9VUdT44xFRbzjLsEzSr5AQmgqPMTHdU3PMT1Cf1ssx8fLNJDA1juftYl+PUcv3MqA==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"ignore\": {
      \"version\": \"5.2.4\",
      \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-5.2.4.tgz\",
      \"integrity\": \"sha512-MAb38BcSbH0eHNBxn7ql2NH/kX33OkB3lZ1BNdh7ENeRChHTYsTvWrMubiIAMNS2llXEEgZ1MUOBtXChP3kaFQ==\",
      \"dev\": true
    },
    \"import-fresh\": {
      \"version\": \"3.3.0\",
      \"resolved\": \"https://registry.npmjs.org/import-fresh/-/import-fresh-3.3.0.tgz\",
      \"integrity\": \"sha512-veYYhQa+D1QBKznvhUHxb8faxlrwUnxseDAbAp457E0wLNio2bOSKnjYDhMj+YiAq61xrMGhQk9iXVk5FzgQMw==\",
      \"dev\": true,
      \"requires\": {
        \"parent-module\": \"^1.0.0\",
        \"resolve-from\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"resolve-from\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/resolve-from/-/resolve-from-4.0.0.tgz\",
          \"integrity\": \"sha512-pb/MYmXstAkysRFx8piNI1tGFNQIFA3vkE3Gq4EuA1dF6gHp/+vgZqsCGJapvy8N3Q+4o7FwvquPJcnZ7RYy4g==\",
          \"dev\": true
        }
      }
    },
    \"import-local\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/import-local/-/import-local-3.0.2.tgz\",
      \"integrity\": \"sha512-vjL3+w0oulAVZ0hBHnxa/Nm5TAurf9YLQJDhqRZyqb+VKGOB6LU8t9H1Nr5CIo16vh9XfJTOoHwU0B71S557gA==\",
      \"dev\": true,
      \"requires\": {
        \"pkg-dir\": \"^4.2.0\",
        \"resolve-cwd\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"find-up\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
          \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^5.0.0\",
            \"path-exists\": \"^4.0.0\"
          }
        },
        \"locate-path\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-5.0.0.tgz\",
          \"integrity\": \"sha512-t7hw9pI+WvuwNJXwk5zVHpyhIqzg2qTlklJOf0mVxGSbe3Fp2VieZcduNYjaLDoy6p9uGpQEGWG87WpMKlNq8g==\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^4.1.0\"
          }
        },
        \"p-locate\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
          \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^2.2.0\"
          }
        },
        \"path-exists\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
          \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
          \"dev\": true
        },
        \"pkg-dir\": {
          \"version\": \"4.2.0\",
          \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-4.2.0.tgz\",
          \"integrity\": \"sha512-HRDzbaKjC+AOWVXxAU/x54COGeIv9eb+6CkDSQoNTt4XyWoIJvuPsXizxu/Fr23EiekbtZwmh1IcIG/l/a10GQ==\",
          \"dev\": true,
          \"requires\": {
            \"find-up\": \"^4.0.0\"
          }
        }
      }
    },
    \"imurmurhash\": {
      \"version\": \"0.1.4\",
      \"resolved\": \"https://registry.npmjs.org/imurmurhash/-/imurmurhash-0.1.4.tgz\",
      \"integrity\": \"sha1-khi5srkoojixPcT7a21XbyMUU+o=\",
      \"dev\": true
    },
    \"indent-string\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-4.0.0.tgz\",
      \"integrity\": \"sha512-EdDDZu4A2OyIK7Lr/2zG+w5jmbuk1DVBnEwREQvBzspBJkCEbRa8GxU1lghYcaGJCnRWibjDXlq779X1/y5xwg==\",
      \"dev\": true
    },
    \"infer-owner\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/infer-owner/-/infer-owner-1.0.4.tgz\",
      \"integrity\": \"sha512-IClj+Xz94+d7irH5qRyfJonOdfTzuDaifE6ZPWfx0N0+/ATZCbuTPq2prFl526urkQd90WyUKIh1DfBQ2hMz9A==\",
      \"dev\": true
    },
    \"inflight\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/inflight/-/inflight-1.0.6.tgz\",
      \"integrity\": \"sha1-Sb1jMdfQLQwJvJEKEHW6gWW1bfk=\",
      \"dev\": true,
      \"requires\": {
        \"once\": \"^1.3.0\",
        \"wrappy\": \"1\"
      }
    },
    \"inherits\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
      \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
      \"dev\": true
    },
    \"internal-slot\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/internal-slot/-/internal-slot-1.0.5.tgz\",
      \"integrity\": \"sha512-Y+R5hJrzs52QCG2laLn4udYVnxsfny9CpOhNhUvk/SSSVyF6T27FzRbF0sroPidSu3X8oEAkOn2K804mjpt6UQ==\",
      \"dev\": true,
      \"requires\": {
        \"get-intrinsic\": \"^1.2.0\",
        \"has\": \"^1.0.3\",
        \"side-channel\": \"^1.0.4\"
      }
    },
    \"interpret\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-2.2.0.tgz\",
      \"integrity\": \"sha512-Ju0Bz/cEia55xDwUWEa8+olFpCiQoypjnQySseKtmjNrnps3P+xfpUmGr90T7yjlVJmOtybRvPXhKMbHr+fWnw==\",
      \"dev\": true
    },
    \"ip\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/ip/-/ip-2.0.0.tgz\",
      \"integrity\": \"sha512-WKa+XuLG1A1R0UWhl2+1XQSi+fZWMsYKffMZTTYsiZaUD8k2yDAj5atimTUD2TZkyCkNEeYE5NhFZmupOGtjYQ==\",
      \"dev\": true
    },
    \"is-array-buffer\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-array-buffer/-/is-array-buffer-3.0.2.tgz\",
      \"integrity\": \"sha512-y+FyyR/w8vfIRq4eQcM1EYgSTnmHXPqaF+IgzgraytCFq5Xh8lllDVmAZolPJiZttZLeFSINPYMaEJ7/vWUa1w==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.2.0\",
        \"is-typed-array\": \"^1.1.10\"
      }
    },
    \"is-arrayish\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/is-arrayish/-/is-arrayish-0.2.1.tgz\",
      \"integrity\": \"sha1-d8mYQFJ6qOyxqLppe4BkWnqSap0=\",
      \"dev\": true
    },
    \"is-bigint\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/is-bigint/-/is-bigint-1.0.4.tgz\",
      \"integrity\": \"sha512-zB9CruMamjym81i2JZ3UMn54PKGsQzsJeo6xvN3HJJ4CAsQNB6iRutp2To77OfCNuoxspsIhzaPoO1zyCEhFOg==\",
      \"dev\": true,
      \"requires\": {
        \"has-bigints\": \"^1.0.1\"
      }
    },
    \"is-boolean-object\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/is-boolean-object/-/is-boolean-object-1.1.2.tgz\",
      \"integrity\": \"sha512-gDYaKHJmnj4aWxyj6YHyXVpdQawtVLHU5cb+eztPGczf6cjuTdwve5ZIEfgXqH4e57An1D1AKf8CZ3kYrQRqYA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"is-callable\": {
      \"version\": \"1.2.7\",
      \"resolved\": \"https://registry.npmjs.org/is-callable/-/is-callable-1.2.7.tgz\",
      \"integrity\": \"sha512-1BC0BVFhS/p0qtw6enp8e+8OD0UrK0oFLztSjNzhcKA3WDuJxxAPXzPuPtKkjEY9UUoEWlX/8fgKeu2S8i9JTA==\",
      \"dev\": true
    },
    \"is-core-module\": {
      \"version\": \"2.13.1\",
      \"resolved\": \"https://registry.npmjs.org/is-core-module/-/is-core-module-2.13.1.tgz\",
      \"integrity\": \"sha512-hHrIjvZsftOsvKSn2TRYl63zvxsgE0K+0mYMoH6gD4omR5IWB2KynivBQczo3+wF1cCkjzvptnI9Q0sPU66ilw==\",
      \"dev\": true,
      \"requires\": {
        \"hasown\": \"^2.0.0\"
      }
    },
    \"is-date-object\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-date-object/-/is-date-object-1.0.2.tgz\",
      \"integrity\": \"sha512-USlDT524woQ08aoZFzh3/Z6ch9Y/EWXEHQ/AaRN0SkKq4t2Jw2R2339tSXmwuVoY7LLlBCbOIlx2myP/L5zk0g==\",
      \"dev\": true
    },
    \"is-extglob\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
      \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
      \"dev\": true
    },
    \"is-fullwidth-code-point\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-3.0.0.tgz\",
      \"integrity\": \"sha512-zymm5+u+sCsSWyD9qNaejV3DFvhCKclKdizYaJUuHA83RLjb7nSuGnddCHGv0hk+KY7BMAlsWeK4Ueg6EV6XQg==\",
      \"dev\": true
    },
    \"is-glob\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-4.0.3.tgz\",
      \"integrity\": \"sha512-xelSayHH36ZgE7ZWhli7pW34hNbNl8Ojv5KVmkJD4hBdD3th8Tfk9vYasLM+mXWOZhFkgZfxhLSnrwRr4elSSg==\",
      \"dev\": true,
      \"requires\": {
        \"is-extglob\": \"^2.1.1\"
      }
    },
    \"is-lambda\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-lambda/-/is-lambda-1.0.1.tgz\",
      \"integrity\": \"sha512-z7CMFGNrENq5iFB9Bqo64Xk6Y9sg+epq1myIcdHaGnbMTYOxvzsEtdYqQUylB7LxfkvgrrjP32T6Ywciio9UIQ==\",
      \"dev\": true
    },
    \"is-negative-zero\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-negative-zero/-/is-negative-zero-2.0.2.tgz\",
      \"integrity\": \"sha512-dqJvarLawXsFbNDeJW7zAz8ItJ9cd28YufuuFzh0G8pNHjJMnY08Dv7sYX2uF5UpQOwieAeOExEYAWWfu7ZZUA==\",
      \"dev\": true
    },
    \"is-number-object\": {
      \"version\": \"1.0.7\",
      \"resolved\": \"https://registry.npmjs.org/is-number-object/-/is-number-object-1.0.7.tgz\",
      \"integrity\": \"sha512-k1U0IRzLMo7ZlYIfzRu23Oh6MiIFasgpb9X76eqfFZAqwH44UI4KTBvBYIZ1dSL9ZzChTB9ShHfLkR4pdW5krQ==\",
      \"dev\": true,
      \"requires\": {
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"is-path-cwd\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/is-path-cwd/-/is-path-cwd-2.2.0.tgz\",
      \"integrity\": \"sha512-w942bTcih8fdJPJmQHFzkS76NEP8Kzzvmw92cXsazb8intwLqPibPPdXf4ANdKV3rYMuuQYGIWtvz9JilB3NFQ==\",
      \"dev\": true
    },
    \"is-path-in-cwd\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-path-in-cwd/-/is-path-in-cwd-2.1.0.tgz\",
      \"integrity\": \"sha512-rNocXHgipO+rvnP6dk3zI20RpOtrAM/kzbB258Uw5BWr3TpXi861yzjo16Dn4hUox07iw5AyeMLHWsujkjzvRQ==\",
      \"dev\": true,
      \"requires\": {
        \"is-path-inside\": \"^2.1.0\"
      }
    },
    \"is-path-inside\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-path-inside/-/is-path-inside-2.1.0.tgz\",
      \"integrity\": \"sha512-wiyhTzfDWsvwAW53OBWF5zuvaOGlZ6PwYxAbPVDhpm+gM09xKQGjBq/8uYN12aDvMxnAnq3dxTyoSoRNmg5YFg==\",
      \"dev\": true,
      \"requires\": {
        \"path-is-inside\": \"^1.0.2\"
      }
    },
    \"is-plain-obj\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-plain-obj/-/is-plain-obj-1.1.0.tgz\",
      \"integrity\": \"sha1-caUMhCnfync8kqOQpKA7OfzVHT4=\",
      \"dev\": true
    },
    \"is-plain-object\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/is-plain-object/-/is-plain-object-2.0.4.tgz\",
      \"integrity\": \"sha512-h5PpgXkWitc38BBMYawTYMWJHFZJVnBquFE57xFpjB8pJFiF6gZ+bU+WyI/yqXiFR5mdLsgYNaPe8uao6Uv9Og==\",
      \"dev\": true,
      \"requires\": {
        \"isobject\": \"^3.0.1\"
      }
    },
    \"is-regex\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/is-regex/-/is-regex-1.1.4.tgz\",
      \"integrity\": \"sha512-kvRdxDsxZjhzUX07ZnLydzS1TU/TJlTUHHY4YLL87e37oUA49DfkLqgy+VjFocowy29cKvcSiu+kIv728jTTVg==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"is-shared-array-buffer\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-shared-array-buffer/-/is-shared-array-buffer-1.0.2.tgz\",
      \"integrity\": \"sha512-sqN2UDu1/0y6uvXyStCOzyhAjCSlHceFoMKJW8W9EU9cvic/QdsZ0kEU93HEy3IUEFZIiH/3w+AH/UQbPHNdhA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\"
      }
    },
    \"is-string\": {
      \"version\": \"1.0.7\",
      \"resolved\": \"https://registry.npmjs.org/is-string/-/is-string-1.0.7.tgz\",
      \"integrity\": \"sha512-tE2UXzivje6ofPW7l23cjDOMa09gb7xlAqG6jG5ej6uPV32TlWP3NKPigtaGeHNu9fohccRYvIiZMfOOnOYUtg==\",
      \"dev\": true,
      \"requires\": {
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"is-symbol\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/is-symbol/-/is-symbol-1.0.3.tgz\",
      \"integrity\": \"sha512-OwijhaRSgqvhm/0ZdAcXNZt9lYdKFpcRDT5ULUuYXPoT794UNOdU+gpT6Rzo7b4V2HUl/op6GqY894AZwv9faQ==\",
      \"dev\": true,
      \"requires\": {
        \"has-symbols\": \"^1.0.1\"
      }
    },
    \"is-typed-array\": {
      \"version\": \"1.1.10\",
      \"resolved\": \"https://registry.npmjs.org/is-typed-array/-/is-typed-array-1.1.10.tgz\",
      \"integrity\": \"sha512-PJqgEHiWZvMpaFZ3uTc8kHPM4+4ADTlDniuQL7cU/UDA0Ql7F70yGfHph3cLNe+c9toaigv+DFzTJKhc2CtO6A==\",
      \"dev\": true,
      \"requires\": {
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"gopd\": \"^1.0.1\",
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"is-unicode-supported\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-unicode-supported/-/is-unicode-supported-0.1.0.tgz\",
      \"integrity\": \"sha512-knxG2q4UC3u8stRGyAVJCOdxFmv5DZiRcdlIaAQXAbSfJya+OhopNotLQrstBhququ4ZpuKbDc/8S6mgXgPFPw==\",
      \"dev\": true
    },
    \"is-weakref\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-weakref/-/is-weakref-1.0.2.tgz\",
      \"integrity\": \"sha512-qctsuLZmIQ0+vSSMfoVvyFe2+GSEvnmZ2ezTup1SBse9+twCCeial6EEi3Nc2KFcf6+qz2FBPnjXsk8xhKSaPQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\"
      }
    },
    \"isarray\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-1.0.0.tgz\",
      \"integrity\": \"sha1-u5NdSFgsuhaMBoNJV6VKPgcSTxE=\",
      \"dev\": true
    },
    \"isexe\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/isexe/-/isexe-2.0.0.tgz\",
      \"integrity\": \"sha1-6PvzdNxVb/iUehDcsFctYz8s+hA=\",
      \"dev\": true
    },
    \"isobject\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-3.0.1.tgz\",
      \"integrity\": \"sha1-TkMekrEalzFjaqH5yNHMvP2reN8=\",
      \"dev\": true
    },
    \"jest-worker\": {
      \"version\": \"27.5.1\",
      \"resolved\": \"https://registry.npmjs.org/jest-worker/-/jest-worker-27.5.1.tgz\",
      \"integrity\": \"sha512-7vuh85V5cdDofPyxn58nrPjBktZo0u9x1g8WtjQol+jZDaE+fhN+cIvTj11GndBnMnyfrUOG1sZQxCdjKh+DKg==\",
      \"dev\": true,
      \"requires\": {
        \"@types/node\": \"*\",
        \"merge-stream\": \"^2.0.0\",
        \"supports-color\": \"^8.0.0\"
      },
      \"dependencies\": {
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
          \"dev\": true
        },
        \"supports-color\": {
          \"version\": \"8.1.1\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-8.1.1.tgz\",
          \"integrity\": \"sha512-MpUEN2OodtUzxvKQl72cUF7RQ5EiHsGvSsVG0ia9c5RbWGL2CI4C7EpPS8UTBIplnlzZiNuV56w+FuNxy3ty2Q==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^4.0.0\"
          }
        }
      }
    },
    \"jquery-ui-touch-punch\": {
      \"version\": \"0.2.3\",
      \"resolved\": \"https://registry.npmjs.org/jquery-ui-touch-punch/-/jquery-ui-touch-punch-0.2.3.tgz\",
      \"integrity\": \"sha1-7tgiQnM7okP0az6HwYQbMIGR2mg=\"
    },
    \"js-base64\": {
      \"version\": \"2.6.4\",
      \"resolved\": \"https://registry.npmjs.org/js-base64/-/js-base64-2.6.4.tgz\",
      \"integrity\": \"sha512-pZe//GGmwJndub7ZghVHz7vjb2LgC1m8B07Au3eYqeqv9emhESByMXxaEgkUkEqJe87oBbSniGYoQNIBklc7IQ==\",
      \"dev\": true
    },
    \"js-tokens\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/js-tokens/-/js-tokens-4.0.0.tgz\",
      \"integrity\": \"sha512-RdJUflcE3cUzKiMqQgsCu06FPu9UdIJO0beYbPhHN4k6apgJtifcoCtT9bcxOpYBtpD2kCM6Sbzg4CausW/PKQ==\",
      \"dev\": true
    },
    \"js-yaml\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/js-yaml/-/js-yaml-4.1.0.tgz\",
      \"integrity\": \"sha512-wpxZs9NoxZaJESJGIZTyDEaYpl0FKSA+FB9aJiyemKhMwkxQg63h4T1KJgUGHpTqPDNRcmmYLugrRjJlBtWvRA==\",
      \"dev\": true,
      \"requires\": {
        \"argparse\": \"^2.0.1\"
      }
    },
    \"jsesc\": {
      \"version\": \"2.5.2\",
      \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-2.5.2.tgz\",
      \"integrity\": \"sha512-OYu7XEzjkCQ3C5Ps3QIZsQfNpqoJyZZA99wd9aWd05NCtC5pWOkShK2mkL6HXQR6/Cy2lbNdPlZBpuQHXE63gA==\",
      \"dev\": true
    },
    \"json-parse-even-better-errors\": {
      \"version\": \"2.3.1\",
      \"resolved\": \"https://registry.npmjs.org/json-parse-even-better-errors/-/json-parse-even-better-errors-2.3.1.tgz\",
      \"integrity\": \"sha512-xyFwyhro/JEof6Ghe2iz2NcXoj2sloNsWr/XsERDK/oiPCfaNhl5ONfp+jQdAZRQQ0IJWNzH9zIZF7li91kh2w==\",
      \"dev\": true
    },
    \"json-schema-traverse\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-0.4.1.tgz\",
      \"integrity\": \"sha512-xbbCH5dCYU5T8LcEhhuh7HJ88HXuW3qsI3Y0zOZFKfZEHcpWiHU/Jxzk629Brsab/mMiHQti9wMP+845RPe3Vg==\",
      \"dev\": true
    },
    \"json-stable-stringify-without-jsonify\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/json-stable-stringify-without-jsonify/-/json-stable-stringify-without-jsonify-1.0.1.tgz\",
      \"integrity\": \"sha1-nbe1lJatPzz+8wp1FC0tkwrXJlE=\",
      \"dev\": true
    },
    \"json5\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/json5/-/json5-1.0.2.tgz\",
      \"integrity\": \"sha512-g1MWMLBiz8FKi1e4w0UyVL3w+iJceWAFBAaBnnGKOpNa5f8TLktkbre1+s6oICydWAm+HRUGTmI+//xv2hvXYA==\",
      \"dev\": true,
      \"requires\": {
        \"minimist\": \"^1.2.0\"
      }
    },
    \"kind-of\": {
      \"version\": \"6.0.3\",
      \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.3.tgz\",
      \"integrity\": \"sha512-dcS1ul+9tmeD95T+x28/ehLgd9mENa3LsvDTtzm3vyBEO7RPptvAD+t44WVXaUjTBRcrpFeFlC8WCruUR456hw==\",
      \"dev\": true
    },
    \"levn\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/levn/-/levn-0.4.1.tgz\",
      \"integrity\": \"sha512-+bT2uH4E5LGE7h/n3evcS/sQlJXCpIp6ym8OWJ5eV6+67Dsql/LaaT7qJBAt2rzfoa/5QBGBhxDix1dMt2kQKQ==\",
      \"dev\": true,
      \"requires\": {
        \"prelude-ls\": \"^1.2.1\",
        \"type-check\": \"~0.4.0\"
      }
    },
    \"lines-and-columns\": {
      \"version\": \"1.1.6\",
      \"resolved\": \"https://registry.npmjs.org/lines-and-columns/-/lines-and-columns-1.1.6.tgz\",
      \"integrity\": \"sha1-HADHQ7QzzQpOgHWPe2SldEDZ/wA=\",
      \"dev\": true
    },
    \"loader-runner\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/loader-runner/-/loader-runner-4.2.0.tgz\",
      \"integrity\": \"sha512-92+huvxMvYlMzMt0iIOukcwYBFpkYJdpl2xsZ7LrlayO7E8SOv+JJUEK17B/dJIHAOLMfh2dZZ/Y18WgmGtYNw==\",
      \"dev\": true
    },
    \"loader-utils\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/loader-utils/-/loader-utils-2.0.4.tgz\",
      \"integrity\": \"sha512-xXqpXoINfFhgua9xiqD8fPFHgkoq1mmmpE92WlDbm9rNRd/EbRb+Gqf908T2DMfuHjjJlksiK2RbHVOdD/MqSw==\",
      \"dev\": true,
      \"requires\": {
        \"big.js\": \"^5.2.2\",
        \"emojis-list\": \"^3.0.0\",
        \"json5\": \"^2.1.2\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
          \"dev\": true
        }
      }
    },
    \"locate-path\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-3.0.0.tgz\",
      \"integrity\": \"sha512-7AO748wWnIhNqAuaty2ZWHkQHRSNfPVIsPIfwEOWO22AmaoVrWavlOcMR5nzTLNYvp36X220/maaRsrec1G65A==\",
      \"dev\": true,
      \"requires\": {
        \"p-locate\": \"^3.0.0\",
        \"path-exists\": \"^3.0.0\"
      }
    },
    \"lodash\": {
      \"version\": \"4.17.21\",
      \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.21.tgz\",
      \"integrity\": \"sha512-v2kDEe57lecTulaDIuNTPy3Ry4gLGJ6Z1O3vE1krgXZNrsQ+LFTGHVxVjcXPs17LhbZVGedAJv8XZ1tvj5FvSg==\",
      \"dev\": true
    },
    \"lodash.debounce\": {
      \"version\": \"4.0.8\",
      \"resolved\": \"https://registry.npmjs.org/lodash.debounce/-/lodash.debounce-4.0.8.tgz\",
      \"integrity\": \"sha512-FT1yDzDYEoYWhnSGnpE/4Kj1fLZkDFyqRb7fNt6FdYOSxlUWAtp42Eh6Wb0rGIv/m9Bgo7x4GhQbm5Ys4SG5ow==\",
      \"dev\": true
    },
    \"lodash.escaperegexp\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.escaperegexp/-/lodash.escaperegexp-4.1.2.tgz\",
      \"integrity\": \"sha1-ZHYsSGGAglGKw99Mz11YhtriA0c=\"
    },
    \"lodash.merge\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.merge/-/lodash.merge-4.6.2.tgz\",
      \"integrity\": \"sha512-0KpjqXRVvrYyCsX1swR/XTK0va6VQkQM6MNo7PqW77ByjAhoARA8EfrP1N4+KlKj8YS0ZUCtRT/YUuhyYDujIQ==\",
      \"dev\": true
    },
    \"loupe\": {
      \"version\": \"2.3.6\",
      \"resolved\": \"https://registry.npmjs.org/loupe/-/loupe-2.3.6.tgz\",
      \"integrity\": \"sha512-RaPMZKiMy8/JruncMU5Bt6na1eftNoo++R4Y+N2FrxkDVTrGvcyzFTsaGif4QTeKESheMGegbhw6iUAq+5A8zA==\",
      \"dev\": true,
      \"requires\": {
        \"get-func-name\": \"^2.0.0\"
      }
    },
    \"lru-cache\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-6.0.0.tgz\",
      \"integrity\": \"sha512-Jo6dJ04CmSjuznwJSS3pUeWmd/H0ffTlkXXgwZi+eq1UCmqQwCh+eLsYOYCwY991i2Fah4h1BEMCx4qThGbsiA==\",
      \"dev\": true,
      \"requires\": {
        \"yallist\": \"^4.0.0\"
      }
    },
    \"make-dir\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/make-dir/-/make-dir-2.1.0.tgz\",
      \"integrity\": \"sha512-LS9X+dc8KLxXCb8dni79fLIIUA5VyZoyjSMCwTluaXA0o27cCK0bhXkpgw+sTXVpPy/lSO57ilRixqk0vDmtRA==\",
      \"dev\": true,
      \"requires\": {
        \"pify\": \"^4.0.1\",
        \"semver\": \"^5.6.0\"
      },
      \"dependencies\": {
        \"pify\": {
          \"version\": \"4.0.1\",
          \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
          \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
          \"dev\": true
        }
      }
    },
    \"make-fetch-happen\": {
      \"version\": \"9.1.0\",
      \"resolved\": \"https://registry.npmjs.org/make-fetch-happen/-/make-fetch-happen-9.1.0.tgz\",
      \"integrity\": \"sha512-+zopwDy7DNknmwPQplem5lAZX/eCOzSvSNNcSKm5eVwTkOBzoktEfXsa9L23J/GIRhxRsaxzkPEhrJEpE2F4Gg==\",
      \"dev\": true,
      \"requires\": {
        \"agentkeepalive\": \"^4.1.3\",
        \"cacache\": \"^15.2.0\",
        \"http-cache-semantics\": \"^4.1.0\",
        \"http-proxy-agent\": \"^4.0.1\",
        \"https-proxy-agent\": \"^5.0.0\",
        \"is-lambda\": \"^1.0.1\",
        \"lru-cache\": \"^6.0.0\",
        \"minipass\": \"^3.1.3\",
        \"minipass-collect\": \"^1.0.2\",
        \"minipass-fetch\": \"^1.3.2\",
        \"minipass-flush\": \"^1.0.5\",
        \"minipass-pipeline\": \"^1.2.4\",
        \"negotiator\": \"^0.6.2\",
        \"promise-retry\": \"^2.0.1\",
        \"socks-proxy-agent\": \"^6.0.0\",
        \"ssri\": \"^8.0.0\"
      }
    },
    \"map-obj\": {
      \"version\": \"4.2.1\",
      \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-4.2.1.tgz\",
      \"integrity\": \"sha512-+WA2/1sPmDj1dlvvJmB5G6JKfY9dpn7EVBUL06+y6PoljPkh+6V1QihwxNkbcGxCRjt2b0F9K0taiCuo7MbdFQ==\",
      \"dev\": true
    },
    \"meow\": {
      \"version\": \"9.0.0\",
      \"resolved\": \"https://registry.npmjs.org/meow/-/meow-9.0.0.tgz\",
      \"integrity\": \"sha512-+obSblOQmRhcyBt62furQqRAQpNyWXo8BuQ5bN7dG8wmwQ+vwHKp/rCFD4CrTP8CsDQD1sjoZ94K417XEUk8IQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/minimist\": \"^1.2.0\",
        \"camelcase-keys\": \"^6.2.2\",
        \"decamelize\": \"^1.2.0\",
        \"decamelize-keys\": \"^1.1.0\",
        \"hard-rejection\": \"^2.1.0\",
        \"minimist-options\": \"4.1.0\",
        \"normalize-package-data\": \"^3.0.0\",
        \"read-pkg-up\": \"^7.0.1\",
        \"redent\": \"^3.0.0\",
        \"trim-newlines\": \"^3.0.0\",
        \"type-fest\": \"^0.18.0\",
        \"yargs-parser\": \"^20.2.3\"
      },
      \"dependencies\": {
        \"find-up\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
          \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^5.0.0\",
            \"path-exists\": \"^4.0.0\"
          }
        },
        \"hosted-git-info\": {
          \"version\": \"4.0.2\",
          \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-4.0.2.tgz\",
          \"integrity\": \"sha512-c9OGXbZ3guC/xOlCg1Ci/VgWlwsqDv1yMQL1CWqXDL0hDjXuNcq0zuR4xqPSuasI3kqFDhqSyTjREz5gzq0fXg==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        },
        \"locate-path\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-5.0.0.tgz\",
          \"integrity\": \"sha512-t7hw9pI+WvuwNJXwk5zVHpyhIqzg2qTlklJOf0mVxGSbe3Fp2VieZcduNYjaLDoy6p9uGpQEGWG87WpMKlNq8g==\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^4.1.0\"
          }
        },
        \"normalize-package-data\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-3.0.2.tgz\",
          \"integrity\": \"sha512-6CdZocmfGaKnIHPVFhJJZ3GuR8SsLKvDANFp47Jmy51aKIr8akjAWTSxtpI+MBgBFdSMRyo4hMpDlT6dTffgZg==\",
          \"dev\": true,
          \"requires\": {
            \"hosted-git-info\": \"^4.0.1\",
            \"resolve\": \"^1.20.0\",
            \"semver\": \"^7.3.4\",
            \"validate-npm-package-license\": \"^3.0.1\"
          }
        },
        \"p-locate\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
          \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^2.2.0\"
          }
        },
        \"path-exists\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
          \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
          \"dev\": true
        },
        \"read-pkg\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/read-pkg/-/read-pkg-5.2.0.tgz\",
          \"integrity\": \"sha512-Ug69mNOpfvKDAc2Q8DRpMjjzdtrnv9HcSMX+4VsZxD1aZ6ZzrIE7rlzXBtWTyhULSMKg076AW6WR5iZpD0JiOg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/normalize-package-data\": \"^2.4.0\",
            \"normalize-package-data\": \"^2.5.0\",
            \"parse-json\": \"^5.0.0\",
            \"type-fest\": \"^0.6.0\"
          },
          \"dependencies\": {
            \"hosted-git-info\": {
              \"version\": \"2.8.9\",
              \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.8.9.tgz\",
              \"integrity\": \"sha512-mxIDAb9Lsm6DoOJ7xH+5+X4y1LU/4Hi50L9C5sIswK3JzULS4bwk1FvjdBgvYR4bzT4tuUQiC15FE2f5HbLvYw==\",
              \"dev\": true
            },
            \"normalize-package-data\": {
              \"version\": \"2.5.0\",
              \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-2.5.0.tgz\",
              \"integrity\": \"sha512-/5CMN3T0R4XTj4DcGaexo+roZSdSFW/0AOOTROrjxzCG1wrWXEsGbRKevjlIL+ZDE4sZlJr5ED4YW0yqmkK+eA==\",
              \"dev\": true,
              \"requires\": {
                \"hosted-git-info\": \"^2.1.4\",
                \"resolve\": \"^1.10.0\",
                \"semver\": \"2 || 3 || 4 || 5\",
                \"validate-npm-package-license\": \"^3.0.1\"
              }
            },
            \"semver\": {
              \"version\": \"5.7.1\",
              \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
              \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
              \"dev\": true
            },
            \"type-fest\": {
              \"version\": \"0.6.0\",
              \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.6.0.tgz\",
              \"integrity\": \"sha512-q+MB8nYR1KDLrgr4G5yemftpMC7/QLqVndBmEEdqzmNj5dcFOO4Oo8qlwZE3ULT3+Zim1F8Kq4cBnikNhlCMlg==\",
              \"dev\": true
            }
          }
        },
        \"read-pkg-up\": {
          \"version\": \"7.0.1\",
          \"resolved\": \"https://registry.npmjs.org/read-pkg-up/-/read-pkg-up-7.0.1.tgz\",
          \"integrity\": \"sha512-zK0TB7Xd6JpCLmlLmufqykGE+/TlOePD6qKClNW7hHDKFh/J7/7gCWGR7joEQEW1bKq3a3yUZSObOoWLFQ4ohg==\",
          \"dev\": true,
          \"requires\": {
            \"find-up\": \"^4.1.0\",
            \"read-pkg\": \"^5.2.0\",
            \"type-fest\": \"^0.8.1\"
          },
          \"dependencies\": {
            \"type-fest\": {
              \"version\": \"0.8.1\",
              \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.8.1.tgz\",
              \"integrity\": \"sha512-4dbzIzqvjtgiM5rw1k5rEHtBANKmdudhGyBEajN01fEyhaAIhsoKNy6y7+IN93IfpFtwY9iqi7kD+xwKhQsNJA==\",
              \"dev\": true
            }
          }
        },
        \"semver\": {
          \"version\": \"7.3.5\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.5.tgz\",
          \"integrity\": \"sha512-PoeGJYh8HK4BTO/a9Tf6ZG3veo/A7ZVsYrSA6J8ny9nb3B1VrpkuN+z9OE5wfE5p6H4LchYZsegiQgbJD94ZFQ==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        },
        \"type-fest\": {
          \"version\": \"0.18.1\",
          \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.18.1.tgz\",
          \"integrity\": \"sha512-OIAYXk8+ISY+qTOwkHtKqzAuxchoMiD9Udx+FSGQDuiRR+PJKJHc2NJAXlbhkGwTt/4/nKZxELY1w3ReWOL8mw==\",
          \"dev\": true
        }
      }
    },
    \"merge-stream\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
      \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
      \"dev\": true
    },
    \"mime-db\": {
      \"version\": \"1.44.0\",
      \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.44.0.tgz\",
      \"integrity\": \"sha512-/NOTfLrsPBVeH7YtFPgsVWveuL+4SjjYxaQ1xtM1KMFj7HdxlBlxeyNLzhyJVx7r4rZGJAZ/6lkKCitSc/Nmpg==\",
      \"dev\": true
    },
    \"mime-types\": {
      \"version\": \"2.1.27\",
      \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.27.tgz\",
      \"integrity\": \"sha512-JIhqnCasI9yD+SsmkquHBxTSEuZdQX5BuQnS2Vc7puQQQ+8yiP5AY5uWhpdv4YL4VM5c6iliiYWPgJ/nJQLp7w==\",
      \"dev\": true,
      \"requires\": {
        \"mime-db\": \"1.44.0\"
      }
    },
    \"min-indent\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/min-indent/-/min-indent-1.0.1.tgz\",
      \"integrity\": \"sha512-I9jwMn07Sy/IwOj3zVkVik2JTvgpaykDZEigL6Rx6N9LbMywwUSMtxET+7lVoDLLd3O3IXwJwvuuns8UB/HeAg==\",
      \"dev\": true
    },
    \"mini-css-extract-plugin\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/mini-css-extract-plugin/-/mini-css-extract-plugin-1.0.0.tgz\",
      \"integrity\": \"sha512-IsmrPv1nkdSUtFCDrAsuv5kg0k/27sLxfXqSz8vLjnbRKrNgoRdQrUNA4MppawvD+GHLkNP6L1P93Bw50ALkbg==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"normalize-url\": \"1.9.1\",
        \"schema-utils\": \"^3.0.0\",
        \"webpack-sources\": \"^1.1.0\"
      }
    },
    \"minimatch\": {
      \"version\": \"3.0.8\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.8.tgz\",
      \"integrity\": \"sha512-6FsRAQsxQ61mw+qP1ZzbL9Bc78x2p5OqNgNpnoAFLTrX8n5Kxph0CsnhmKKNXTWjXqU5L0pGPR7hYk+XWZr60Q==\",
      \"dev\": true,
      \"requires\": {
        \"brace-expansion\": \"^1.1.7\"
      }
    },
    \"minimist\": {
      \"version\": \"1.2.8\",
      \"resolved\": \"https://registry.npmjs.org/minimist/-/minimist-1.2.8.tgz\",
      \"integrity\": \"sha512-2yyAR8qBkN3YuheJanUpWC5U3bb5osDywNB8RzDVlDwDHbocAJveqqj1u8+SVD7jkWT4yvsHCpWqqWqAxb0zCA==\",
      \"dev\": true
    },
    \"minimist-options\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/minimist-options/-/minimist-options-4.1.0.tgz\",
      \"integrity\": \"sha512-Q4r8ghd80yhO/0j1O3B2BjweX3fiHg9cdOwjJd2J76Q135c+NDxGCqdYKQ1SKBuFfgWbAUzBfvYjPUEeNgqN1A==\",
      \"dev\": true,
      \"requires\": {
        \"arrify\": \"^1.0.1\",
        \"is-plain-obj\": \"^1.1.0\",
        \"kind-of\": \"^6.0.3\"
      }
    },
    \"minipass\": {
      \"version\": \"3.3.4\",
      \"resolved\": \"https://registry.npmjs.org/minipass/-/minipass-3.3.4.tgz\",
      \"integrity\": \"sha512-I9WPbWHCGu8W+6k1ZiGpPu0GkoKBeorkfKNuAFBNS1HNFJvke82sxvI5bzcCNpWPorkOO5QQ+zomzzwRxejXiw==\",
      \"dev\": true,
      \"requires\": {
        \"yallist\": \"^4.0.0\"
      }
    },
    \"minipass-collect\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/minipass-collect/-/minipass-collect-1.0.2.tgz\",
      \"integrity\": \"sha512-6T6lH0H8OG9kITm/Jm6tdooIbogG9e0tLgpY6mphXSm/A9u8Nq1ryBG+Qspiub9LjWlBPsPS3tWQ/Botq4FdxA==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.0.0\"
      }
    },
    \"minipass-fetch\": {
      \"version\": \"1.4.1\",
      \"resolved\": \"https://registry.npmjs.org/minipass-fetch/-/minipass-fetch-1.4.1.tgz\",
      \"integrity\": \"sha512-CGH1eblLq26Y15+Azk7ey4xh0J/XfJfrCox5LDJiKqI2Q2iwOLOKrlmIaODiSQS8d18jalF6y2K2ePUm0CmShw==\",
      \"dev\": true,
      \"requires\": {
        \"encoding\": \"^0.1.12\",
        \"minipass\": \"^3.1.0\",
        \"minipass-sized\": \"^1.0.3\",
        \"minizlib\": \"^2.0.0\"
      }
    },
    \"minipass-flush\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/minipass-flush/-/minipass-flush-1.0.5.tgz\",
      \"integrity\": \"sha512-JmQSYYpPUqX5Jyn1mXaRwOda1uQ8HP5KAT/oDSLCzt1BYRhQU0/hDtsB1ufZfEEzMZ9aAVmsBw8+FWsIXlClWw==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.0.0\"
      }
    },
    \"minipass-pipeline\": {
      \"version\": \"1.2.4\",
      \"resolved\": \"https://registry.npmjs.org/minipass-pipeline/-/minipass-pipeline-1.2.4.tgz\",
      \"integrity\": \"sha512-xuIq7cIOt09RPRJ19gdi4b+RiNvDFYe5JH+ggNvBqGqpQXcru3PcRmOZuHBKWK1Txf9+cQ+HMVN4d6z46LZP7A==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.0.0\"
      }
    },
    \"minipass-sized\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/minipass-sized/-/minipass-sized-1.0.3.tgz\",
      \"integrity\": \"sha512-MbkQQ2CTiBMlA2Dm/5cY+9SWFEN8pzzOXi6rlM5Xxq0Yqbda5ZQy9sU75a673FE9ZK0Zsbr6Y5iP6u9nktfg2g==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.0.0\"
      }
    },
    \"minizlib\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minizlib/-/minizlib-2.1.2.tgz\",
      \"integrity\": \"sha512-bAxsR8BVfj60DWXHE3u30oHzfl4G7khkSuPW+qvpd7jFRHm7dLxOjUk1EHACJ/hxLY8phGJ0YhYHZo7jil7Qdg==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.0.0\",
        \"yallist\": \"^4.0.0\"
      }
    },
    \"mkdirp\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
      \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
      \"dev\": true
    },
    \"mocha\": {
      \"version\": \"10.2.0\",
      \"resolved\": \"https://registry.npmjs.org/mocha/-/mocha-10.2.0.tgz\",
      \"integrity\": \"sha512-IDY7fl/BecMwFHzoqF2sg/SHHANeBoMMXFlS9r0OXKDssYE1M5O43wUY/9BVPeIvfH2zmEbBfseqN9gBQZzXkg==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-colors\": \"4.1.1\",
        \"browser-stdout\": \"1.3.1\",
        \"chokidar\": \"3.5.3\",
        \"debug\": \"4.3.4\",
        \"diff\": \"5.0.0\",
        \"escape-string-regexp\": \"4.0.0\",
        \"find-up\": \"5.0.0\",
        \"glob\": \"7.2.0\",
        \"he\": \"1.2.0\",
        \"js-yaml\": \"4.1.0\",
        \"log-symbols\": \"4.1.0\",
        \"minimatch\": \"5.0.1\",
        \"ms\": \"2.1.3\",
        \"nanoid\": \"3.3.3\",
        \"serialize-javascript\": \"6.0.0\",
        \"strip-json-comments\": \"3.1.1\",
        \"supports-color\": \"8.1.1\",
        \"workerpool\": \"6.2.1\",
        \"yargs\": \"16.2.0\",
        \"yargs-parser\": \"20.2.4\",
        \"yargs-unparser\": \"2.0.0\"
      },
      \"dependencies\": {
        \"ansi-styles\": {
          \"version\": \"4.3.0\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
          \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
          \"dev\": true,
          \"requires\": {
            \"color-convert\": \"^2.0.1\"
          }
        },
        \"chalk\": {
          \"version\": \"4.1.2\",
          \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-4.1.2.tgz\",
          \"integrity\": \"sha512-oKnbhFyRIXpUuez8iBMmyEa4nbj4IOQyuhc/wy9kY7/WVPcwIO9VA668Pu8RkO7+0G76SLROeyw9CpQ061i4mA==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-styles\": \"^4.1.0\",
            \"supports-color\": \"^7.1.0\"
          },
          \"dependencies\": {
            \"supports-color\": {
              \"version\": \"7.2.0\",
              \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
              \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
              \"dev\": true,
              \"requires\": {
                \"has-flag\": \"^4.0.0\"
              }
            }
          }
        },
        \"color-convert\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
          \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
          \"dev\": true,
          \"requires\": {
            \"color-name\": \"~1.1.4\"
          }
        },
        \"color-name\": {
          \"version\": \"1.1.4\",
          \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
          \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
          \"dev\": true
        },
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          },
          \"dependencies\": {
            \"ms\": {
              \"version\": \"2.1.2\",
              \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
              \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
              \"dev\": true
            }
          }
        },
        \"diff\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/diff/-/diff-5.0.0.tgz\",
          \"integrity\": \"sha512-/VTCrvm5Z0JGty/BWHljh+BAiw3IK+2j87NGMu8Nwc/f48WoDAC395uomO9ZD117ZOBaHmkX1oyLvkVM/aIT3w==\",
          \"dev\": true
        },
        \"escape-string-regexp\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-4.0.0.tgz\",
          \"integrity\": \"sha512-TtpcNJ3XAzx3Gq8sWRzJaVajRs0uVxA2YAkdb1jm2YkPz4G6egUFAyA3n5vtEIZefPk5Wa4UXbKuS5fKkJWdgA==\",
          \"dev\": true
        },
        \"find-up\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-5.0.0.tgz\",
          \"integrity\": \"sha512-78/PXT1wlLLDgTzDs7sjq9hzz0vXD+zn+7wypEe4fXQxCmdmqfGsEPQxmiCSQI3ajFV91bVSsvNtrJRiW6nGng==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^6.0.0\",
            \"path-exists\": \"^4.0.0\"
          }
        },
        \"glob\": {
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.0.tgz\",
          \"integrity\": \"sha512-lmLf6gtyrPq8tTjSmrO94wBeQbFR3HbLHbuyD69wuyQkImp2hWqMGB47OX65FBkPffO641IP9jWa1z4ivqG26Q==\",
          \"dev\": true,
          \"requires\": {
            \"fs.realpath\": \"^1.0.0\",
            \"inflight\": \"^1.0.4\",
            \"inherits\": \"2\",
            \"minimatch\": \"^3.0.4\",
            \"once\": \"^1.3.0\",
            \"path-is-absolute\": \"^1.0.0\"
          },
          \"dependencies\": {
            \"minimatch\": {
              \"version\": \"3.1.2\",
              \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
              \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
              \"dev\": true,
              \"requires\": {
                \"brace-expansion\": \"^1.1.7\"
              }
            }
          }
        },
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
          \"dev\": true
        },
        \"locate-path\": {
          \"version\": \"6.0.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-6.0.0.tgz\",
          \"integrity\": \"sha512-iPZK6eYjbxRu3uB4/WZ3EsEIMJFMqAoopl3R+zuq0UjcAm/MO6KCweDgPfP3elTztoKP3KtnVHxTn2NHBSDVUw==\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^5.0.0\"
          }
        },
        \"log-symbols\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/log-symbols/-/log-symbols-4.1.0.tgz\",
          \"integrity\": \"sha512-8XPvpAA8uyhfteu8pIvQxpJZ7SYYdpUivZpGy6sFsBuKRY/7rQGavedeB8aK+Zkyq6upMFVL/9AW6vOYzfRyLg==\",
          \"dev\": true,
          \"requires\": {
            \"chalk\": \"^4.1.0\",
            \"is-unicode-supported\": \"^0.1.0\"
          }
        },
        \"minimatch\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-5.0.1.tgz\",
          \"integrity\": \"sha512-nLDxIFRyhDblz3qMuq+SoRZED4+miJ/G+tdDrjkkkRnjAsBexeGpgjLEQ0blJy7rHhR2b93rhQY4SvyWu9v03g==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^2.0.1\"
          },
          \"dependencies\": {
            \"brace-expansion\": {
              \"version\": \"2.0.1\",
              \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-2.0.1.tgz\",
              \"integrity\": \"sha512-XnAIvQ8eM+kC6aULx6wuQiwVsnzsi9d3WxzV3FpWTGA19F621kwdbsAcFKXgKUHZWsy+mY6iL1sHTxWEFCytDA==\",
              \"dev\": true,
              \"requires\": {
                \"balanced-match\": \"^1.0.0\"
              }
            }
          }
        },
        \"p-limit\": {
          \"version\": \"3.1.0\",
          \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-3.1.0.tgz\",
          \"integrity\": \"sha512-TYOanM3wGwNGsZN2cVTYPArw454xnXj5qmWF1bEoAc4+cU/ol7GVh7odevjp1FNHduHc3KZMcFduxU5Xc6uJRQ==\",
          \"dev\": true,
          \"requires\": {
            \"yocto-queue\": \"^0.1.0\"
          }
        },
        \"p-locate\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-5.0.0.tgz\",
          \"integrity\": \"sha512-LaNjtRWUBY++zB5nE/NwcaoMylSPk+S+ZHNB1TzdbMJMny6dynpAGt7X/tl/QYq3TIeE6nxHppbo2LGymrG5Pw==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^3.0.2\"
          }
        },
        \"path-exists\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
          \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
          \"dev\": true
        },
        \"supports-color\": {
          \"version\": \"8.1.1\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-8.1.1.tgz\",
          \"integrity\": \"sha512-MpUEN2OodtUzxvKQl72cUF7RQ5EiHsGvSsVG0ia9c5RbWGL2CI4C7EpPS8UTBIplnlzZiNuV56w+FuNxy3ty2Q==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^4.0.0\"
          }
        },
        \"yargs\": {
          \"version\": \"16.2.0\",
          \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-16.2.0.tgz\",
          \"integrity\": \"sha512-D1mvvtDG0L5ft/jGWkLpG1+m0eQxOfaBvTNELraWj22wSVUMWxZUvYgJYcKh6jGGIkJFhH4IZPQhR4TKpc8mBw==\",
          \"dev\": true,
          \"requires\": {
            \"cliui\": \"^7.0.2\",
            \"escalade\": \"^3.1.1\",
            \"get-caller-file\": \"^2.0.5\",
            \"require-directory\": \"^2.1.1\",
            \"string-width\": \"^4.2.0\",
            \"y18n\": \"^5.0.5\",
            \"yargs-parser\": \"^20.2.2\"
          }
        },
        \"yargs-parser\": {
          \"version\": \"20.2.4\",
          \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-20.2.4.tgz\",
          \"integrity\": \"sha512-WOkpgNhPTlE73h4VFAFsOnomJVaovO8VqLDzy5saChRBFQFBoMYirowyW+Q9HB4HFF4Z7VZTiG3iSzJJA29yRA==\",
          \"dev\": true
        }
      }
    },
    \"ms\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.3.tgz\",
      \"integrity\": \"sha512-6FlzubTLZG3J2a/NVCAleEhjzq5oxgHyaCU9yYXvcLsvoVaHJq/s5xXI6/XXP6tz7R9xAOtHnSO/tXtF3WRTlA==\",
      \"dev\": true
    },
    \"nan\": {
      \"version\": \"2.17.0\",
      \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.17.0.tgz\",
      \"integrity\": \"sha512-2ZTgtl0nJsO0KQCjEpxcIr5D+Yv90plTitZt9JBfQvVJDS5seMl3FOvsh3+9CoYWXf/1l5OaZzzF6nDm4cagaQ==\",
      \"dev\": true
    },
    \"nanoid\": {
      \"version\": \"3.3.3\",
      \"resolved\": \"https://registry.npmjs.org/nanoid/-/nanoid-3.3.3.tgz\",
      \"integrity\": \"sha512-p1sjXuopFs0xg+fPASzQ28agW1oHD7xDsd9Xkf3T15H3c/cifrFHVwrh74PdoklAPi+i7MdRsE47vm2r6JoB+w==\",
      \"dev\": true
    },
    \"natural-compare\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/natural-compare/-/natural-compare-1.4.0.tgz\",
      \"integrity\": \"sha1-Sr6/7tdUHywnrPspvbvRXI1bpPc=\",
      \"dev\": true
    },
    \"negotiator\": {
      \"version\": \"0.6.3\",
      \"resolved\": \"https://registry.npmjs.org/negotiator/-/negotiator-0.6.3.tgz\",
      \"integrity\": \"sha512-+EUsqGPLsM+j/zdChZjsnX51g4XrHFOIXwfnCVPGlQk/k5giakcKsuxCObBRu6DSm9opw/O6slWbJdghQM4bBg==\",
      \"dev\": true
    },
    \"neo-async\": {
      \"version\": \"2.6.2\",
      \"resolved\": \"https://registry.npmjs.org/neo-async/-/neo-async-2.6.2.tgz\",
      \"integrity\": \"sha512-Yd3UES5mWCSqR+qNT93S3UoYUkqAZ9lLg8a7g9rimsWmYGK8cVToA4/sF3RrshdyV3sAGMXVUmpMYOw+dLpOuw==\",
      \"dev\": true
    },
    \"node-environment-flags\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/node-environment-flags/-/node-environment-flags-1.0.6.tgz\",
      \"integrity\": \"sha512-5Evy2epuL+6TM0lCQGpFIj6KwiEsGh1SrHUhTbNX+sLbBtjidPZFAnVK9y5yU1+h//RitLbRHTIMyxQPtxMdHw==\",
      \"dev\": true,
      \"requires\": {
        \"object.getownpropertydescriptors\": \"^2.0.3\",
        \"semver\": \"^5.7.0\"
      },
      \"dependencies\": {
        \"semver\": {
          \"version\": \"5.7.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
          \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
          \"dev\": true
        }
      }
    },
    \"node-gyp\": {
      \"version\": \"8.4.1\",
      \"resolved\": \"https://registry.npmjs.org/node-gyp/-/node-gyp-8.4.1.tgz\",
      \"integrity\": \"sha512-olTJRgUtAb/hOXG0E93wZDs5YiJlgbXxTwQAFHyNlRsXQnYzUaF2aGgujZbw+hR8aF4ZG/rST57bWMWD16jr9w==\",
      \"dev\": true,
      \"requires\": {
        \"env-paths\": \"^2.2.0\",
        \"glob\": \"^7.1.4\",
        \"graceful-fs\": \"^4.2.6\",
        \"make-fetch-happen\": \"^9.1.0\",
        \"nopt\": \"^5.0.0\",
        \"npmlog\": \"^6.0.0\",
        \"rimraf\": \"^3.0.2\",
        \"semver\": \"^7.3.5\",
        \"tar\": \"^6.1.2\",
        \"which\": \"^2.0.2\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
          \"dev\": true
        },
        \"are-we-there-yet\": {
          \"version\": \"3.0.1\",
          \"resolved\": \"https://registry.npmjs.org/are-we-there-yet/-/are-we-there-yet-3.0.1.tgz\",
          \"integrity\": \"sha512-QZW4EDmGwlYur0Yyf/b2uGucHQMa8aFUP7eu9ddR73vvhFyt4V0Vl3QHPcTNJ8l6qYOBdxgXdnBXQrHilfRQBg==\",
          \"dev\": true,
          \"requires\": {
            \"delegates\": \"^1.0.0\",
            \"readable-stream\": \"^3.6.0\"
          }
        },
        \"gauge\": {
          \"version\": \"4.0.4\",
          \"resolved\": \"https://registry.npmjs.org/gauge/-/gauge-4.0.4.tgz\",
          \"integrity\": \"sha512-f9m+BEN5jkg6a0fZjleidjN51VE1X+mPFQ2DJ0uv1V39oCLCbsGe6yjbBnp7eK7z/+GAon99a3nHuqbuuthyPg==\",
          \"dev\": true,
          \"requires\": {
            \"aproba\": \"^1.0.3 || ^2.0.0\",
            \"color-support\": \"^1.1.3\",
            \"console-control-strings\": \"^1.1.0\",
            \"has-unicode\": \"^2.0.1\",
            \"signal-exit\": \"^3.0.7\",
            \"string-width\": \"^4.2.3\",
            \"strip-ansi\": \"^6.0.1\",
            \"wide-align\": \"^1.1.5\"
          }
        },
        \"glob\": {
          \"version\": \"7.2.3\",
          \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.2.3.tgz\",
          \"integrity\": \"sha512-nFR0zLpU2YCaRxwoCJvL6UvCH2JFyFVIvwTLsIf21AuHlMskA1hhTdk+LlYJtOlYt9v6dvszD2BGRqBL+iQK9Q==\",
          \"dev\": true,
          \"requires\": {
            \"fs.realpath\": \"^1.0.0\",
            \"inflight\": \"^1.0.4\",
            \"inherits\": \"2\",
            \"minimatch\": \"^3.1.1\",
            \"once\": \"^1.3.0\",
            \"path-is-absolute\": \"^1.0.0\"
          }
        },
        \"minimatch\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
          \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^1.1.7\"
          }
        },
        \"npmlog\": {
          \"version\": \"6.0.2\",
          \"resolved\": \"https://registry.npmjs.org/npmlog/-/npmlog-6.0.2.tgz\",
          \"integrity\": \"sha512-/vBvz5Jfr9dT/aFWd0FIRf+T/Q2WBsLENygUaFUqstqsycmZAP/t5BvFJTK0viFmSUxiUKTUplWy5vt+rvKIxg==\",
          \"dev\": true,
          \"requires\": {
            \"are-we-there-yet\": \"^3.0.0\",
            \"console-control-strings\": \"^1.1.0\",
            \"gauge\": \"^4.0.3\",
            \"set-blocking\": \"^2.0.0\"
          }
        },
        \"readable-stream\": {
          \"version\": \"3.6.0\",
          \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-3.6.0.tgz\",
          \"integrity\": \"sha512-BViHy7LKeTz4oNnkcLJ+lVSL6vpiFeX6/d3oSH8zCW7UxP2onchk+vTGB143xuFjHS3deTgkKoXXymXqymiIdA==\",
          \"dev\": true,
          \"requires\": {
            \"inherits\": \"^2.0.3\",
            \"string_decoder\": \"^1.1.1\",
            \"util-deprecate\": \"^1.0.1\"
          }
        },
        \"rimraf\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
          \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        },
        \"semver\": {
          \"version\": \"7.3.7\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.7.tgz\",
          \"integrity\": \"sha512-QlYTucUYOews+WeEujDoEGziz4K6c47V/Bd+LjSSYcA94p+DmINdf7ncaUinThfvZyu13lN9OY1XDxt8C0Tw0g==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        },
        \"strip-ansi\": {
          \"version\": \"6.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
          \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^5.0.1\"
          }
        }
      }
    },
    \"node-releases\": {
      \"version\": \"2.0.13\",
      \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.13.tgz\",
      \"integrity\": \"sha512-uYr7J37ae/ORWdZeQ1xxMJe3NtdmqMC/JZK+geofDrkLUApKRHPd18/TxtBOJ4A0/+uUIliorNrfYV6s1b02eQ==\",
      \"dev\": true
    },
    \"node-sass\": {
      \"version\": \"9.0.0\",
      \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-9.0.0.tgz\",
      \"integrity\": \"sha512-yltEuuLrfH6M7Pq2gAj5B6Zm7m+gdZoG66wTqG6mIZV/zijq3M2OO2HswtT6oBspPyFhHDcaxWpsBm0fRNDHPg==\",
      \"dev\": true,
      \"requires\": {
        \"async-foreach\": \"^0.1.3\",
        \"chalk\": \"^4.1.2\",
        \"cross-spawn\": \"^7.0.3\",
        \"gaze\": \"^1.0.0\",
        \"get-stdin\": \"^4.0.1\",
        \"glob\": \"^7.0.3\",
        \"lodash\": \"^4.17.15\",
        \"make-fetch-happen\": \"^10.0.4\",
        \"meow\": \"^9.0.0\",
        \"nan\": \"^2.17.0\",
        \"node-gyp\": \"^8.4.1\",
        \"sass-graph\": \"^4.0.1\",
        \"stdout-stream\": \"^1.4.0\",
        \"true-case-path\": \"^2.2.1\"
      },
      \"dependencies\": {
        \"@npmcli/fs\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/@npmcli/fs/-/fs-2.1.2.tgz\",
          \"integrity\": \"sha512-yOJKRvohFOaLqipNtwYB9WugyZKhC/DZC4VYPmpaCzDBrA8YpK3qHZ8/HGscMnE4GqbkLNuVcCnxkeQEdGt6LQ==\",
          \"dev\": true,
          \"requires\": {
            \"@gar/promisify\": \"^1.1.3\",
            \"semver\": \"^7.3.5\"
          }
        },
        \"@npmcli/move-file\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/@npmcli/move-file/-/move-file-2.0.1.tgz\",
          \"integrity\": \"sha512-mJd2Z5TjYWq/ttPLLGqArdtnC74J6bOzg4rMDnN+p1xTacZ2yPRCk2y0oSWQtygLR9YVQXgOcONrwtnk3JupxQ==\",
          \"dev\": true,
          \"requires\": {
            \"mkdirp\": \"^1.0.4\",
            \"rimraf\": \"^3.0.2\"
          }
        },
        \"@tootallnate/once\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/@tootallnate/once/-/once-2.0.0.tgz\",
          \"integrity\": \"sha512-XCuKFP5PS55gnMVu3dty8KPatLqUoy/ZYzDzAGCQ8JNFCkLXzmI7vNHCR+XpbZaMWQK/vQubr7PkYq8g470J/A==\",
          \"dev\": true
        },
        \"ansi-styles\": {
          \"version\": \"4.3.0\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
          \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
          \"dev\": true,
          \"requires\": {
            \"color-convert\": \"^2.0.1\"
          }
        },
        \"brace-expansion\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/brace-expansion/-/brace-expansion-2.0.1.tgz\",
          \"integrity\": \"sha512-XnAIvQ8eM+kC6aULx6wuQiwVsnzsi9d3WxzV3FpWTGA19F621kwdbsAcFKXgKUHZWsy+mY6iL1sHTxWEFCytDA==\",
          \"dev\": true,
          \"requires\": {
            \"balanced-match\": \"^1.0.0\"
          }
        },
        \"cacache\": {
          \"version\": \"16.1.3\",
          \"resolved\": \"https://registry.npmjs.org/cacache/-/cacache-16.1.3.tgz\",
          \"integrity\": \"sha512-/+Emcj9DAXxX4cwlLmRI9c166RuL3w30zp4R7Joiv2cQTtTtA+jeuCAjH3ZlGnYS3tKENSrKhAzVVP9GVyzeYQ==\",
          \"dev\": true,
          \"requires\": {
            \"@npmcli/fs\": \"^2.1.0\",
            \"@npmcli/move-file\": \"^2.0.0\",
            \"chownr\": \"^2.0.0\",
            \"fs-minipass\": \"^2.1.0\",
            \"glob\": \"^8.0.1\",
            \"infer-owner\": \"^1.0.4\",
            \"lru-cache\": \"^7.7.1\",
            \"minipass\": \"^3.1.6\",
            \"minipass-collect\": \"^1.0.2\",
            \"minipass-flush\": \"^1.0.5\",
            \"minipass-pipeline\": \"^1.2.4\",
            \"mkdirp\": \"^1.0.4\",
            \"p-map\": \"^4.0.0\",
            \"promise-inflight\": \"^1.0.1\",
            \"rimraf\": \"^3.0.2\",
            \"ssri\": \"^9.0.0\",
            \"tar\": \"^6.1.11\",
            \"unique-filename\": \"^2.0.0\"
          },
          \"dependencies\": {
            \"glob\": {
              \"version\": \"8.0.3\",
              \"resolved\": \"https://registry.npmjs.org/glob/-/glob-8.0.3.tgz\",
              \"integrity\": \"sha512-ull455NHSHI/Y1FqGaaYFaLGkNMMJbavMrEGFXG/PGrg6y7sutWHUHrz6gy6WEBH6akM1M414dWKCNs+IhKdiQ==\",
              \"dev\": true,
              \"requires\": {
                \"fs.realpath\": \"^1.0.0\",
                \"inflight\": \"^1.0.4\",
                \"inherits\": \"2\",
                \"minimatch\": \"^5.0.1\",
                \"once\": \"^1.3.0\"
              }
            }
          }
        },
        \"chalk\": {
          \"version\": \"4.1.2\",
          \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-4.1.2.tgz\",
          \"integrity\": \"sha512-oKnbhFyRIXpUuez8iBMmyEa4nbj4IOQyuhc/wy9kY7/WVPcwIO9VA668Pu8RkO7+0G76SLROeyw9CpQ061i4mA==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-styles\": \"^4.1.0\",
            \"supports-color\": \"^7.1.0\"
          }
        },
        \"color-convert\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
          \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
          \"dev\": true,
          \"requires\": {
            \"color-name\": \"~1.1.4\"
          }
        },
        \"color-name\": {
          \"version\": \"1.1.4\",
          \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
          \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
          \"dev\": true
        },
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
          \"dev\": true
        },
        \"http-proxy-agent\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/http-proxy-agent/-/http-proxy-agent-5.0.0.tgz\",
          \"integrity\": \"sha512-n2hY8YdoRE1i7r6M0w9DIw5GgZN0G25P8zLCRQ8rjXtTU3vsNFBI/vWK/UIeE6g5MUUz6avwAPXmL6Fy9D/90w==\",
          \"dev\": true,
          \"requires\": {
            \"@tootallnate/once\": \"2\",
            \"agent-base\": \"6\",
            \"debug\": \"4\"
          }
        },
        \"lru-cache\": {
          \"version\": \"7.14.1\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-7.14.1.tgz\",
          \"integrity\": \"sha512-ysxwsnTKdAx96aTRdhDOCQfDgbHnt8SK0KY8SEjO0wHinhWOFTESbjVCMPbU1uGXg/ch4lifqx0wfjOawU2+WA==\",
          \"dev\": true
        },
        \"make-fetch-happen\": {
          \"version\": \"10.2.1\",
          \"resolved\": \"https://registry.npmjs.org/make-fetch-happen/-/make-fetch-happen-10.2.1.tgz\",
          \"integrity\": \"sha512-NgOPbRiaQM10DYXvN3/hhGVI2M5MtITFryzBGxHM5p4wnFxsVCbxkrBrDsk+EZ5OB4jEOT7AjDxtdF+KVEFT7w==\",
          \"dev\": true,
          \"requires\": {
            \"agentkeepalive\": \"^4.2.1\",
            \"cacache\": \"^16.1.0\",
            \"http-cache-semantics\": \"^4.1.0\",
            \"http-proxy-agent\": \"^5.0.0\",
            \"https-proxy-agent\": \"^5.0.0\",
            \"is-lambda\": \"^1.0.1\",
            \"lru-cache\": \"^7.7.1\",
            \"minipass\": \"^3.1.6\",
            \"minipass-collect\": \"^1.0.2\",
            \"minipass-fetch\": \"^2.0.3\",
            \"minipass-flush\": \"^1.0.5\",
            \"minipass-pipeline\": \"^1.2.4\",
            \"negotiator\": \"^0.6.3\",
            \"promise-retry\": \"^2.0.1\",
            \"socks-proxy-agent\": \"^7.0.0\",
            \"ssri\": \"^9.0.0\"
          }
        },
        \"minimatch\": {
          \"version\": \"5.1.1\",
          \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-5.1.1.tgz\",
          \"integrity\": \"sha512-362NP+zlprccbEt/SkxKfRMHnNY85V74mVnpUpNyr3F35covl09Kec7/sEFLt3RA4oXmewtoaanoIf67SE5Y5g==\",
          \"dev\": true,
          \"requires\": {
            \"brace-expansion\": \"^2.0.1\"
          }
        },
        \"minipass-fetch\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/minipass-fetch/-/minipass-fetch-2.1.2.tgz\",
          \"integrity\": \"sha512-LT49Zi2/WMROHYoqGgdlQIZh8mLPZmOrN2NdJjMXxYe4nkN6FUyuPuOAOedNJDrx0IRGg9+4guZewtp8hE6TxA==\",
          \"dev\": true,
          \"requires\": {
            \"encoding\": \"^0.1.13\",
            \"minipass\": \"^3.1.6\",
            \"minipass-sized\": \"^1.0.3\",
            \"minizlib\": \"^2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        },
        \"p-map\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
          \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
          \"dev\": true,
          \"requires\": {
            \"aggregate-error\": \"^3.0.0\"
          }
        },
        \"rimraf\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-3.0.2.tgz\",
          \"integrity\": \"sha512-JZkJMZkAGFFPP2YqXZXPbMlMBgsxzE8ILs4lMIX/2o0L9UBw9O/Y3o6wFw/i9YLapcUJWwqbi3kdxIPdC62TIA==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        },
        \"semver\": {
          \"version\": \"7.3.8\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.8.tgz\",
          \"integrity\": \"sha512-NB1ctGL5rlHrPJtFDVIVzTyQylMLu9N9VICA6HSFJo8MCGVTMW6gfpicwKmmK/dAjTOrqu5l63JJOpDSrAis3A==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          },
          \"dependencies\": {
            \"lru-cache\": {
              \"version\": \"6.0.0\",
              \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-6.0.0.tgz\",
              \"integrity\": \"sha512-Jo6dJ04CmSjuznwJSS3pUeWmd/H0ffTlkXXgwZi+eq1UCmqQwCh+eLsYOYCwY991i2Fah4h1BEMCx4qThGbsiA==\",
              \"dev\": true,
              \"requires\": {
                \"yallist\": \"^4.0.0\"
              }
            }
          }
        },
        \"socks-proxy-agent\": {
          \"version\": \"7.0.0\",
          \"resolved\": \"https://registry.npmjs.org/socks-proxy-agent/-/socks-proxy-agent-7.0.0.tgz\",
          \"integrity\": \"sha512-Fgl0YPZ902wEsAyiQ+idGd1A7rSFx/ayC1CQVMw5P+EQx2V0SgpGtf6OKFhVjPflPUl9YMmEOnmfjCdMUsygww==\",
          \"dev\": true,
          \"requires\": {
            \"agent-base\": \"^6.0.2\",
            \"debug\": \"^4.3.3\",
            \"socks\": \"^2.6.2\"
          }
        },
        \"ssri\": {
          \"version\": \"9.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ssri/-/ssri-9.0.1.tgz\",
          \"integrity\": \"sha512-o57Wcn66jMQvfHG1FlYbWeZWW/dHZhJXjpIcTfXldXEk5nz5lStPo3mK0OJQfGR3RbZUlbISexbljkJzuEj/8Q==\",
          \"dev\": true,
          \"requires\": {
            \"minipass\": \"^3.1.1\"
          }
        },
        \"supports-color\": {
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
          \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^4.0.0\"
          }
        },
        \"unique-filename\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/unique-filename/-/unique-filename-2.0.1.tgz\",
          \"integrity\": \"sha512-ODWHtkkdx3IAR+veKxFV+VBkUMcN+FaqzUUd7IZzt+0zhDZFPFxhlqwPF3YQvMHx1TD0tdgYl+kuPnJ8E6ql7A==\",
          \"dev\": true,
          \"requires\": {
            \"unique-slug\": \"^3.0.0\"
          }
        },
        \"unique-slug\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/unique-slug/-/unique-slug-3.0.0.tgz\",
          \"integrity\": \"sha512-8EyMynh679x/0gqE9fT9oilG+qEt+ibFyqjuVTsZn1+CMxH+XLlpvr2UZx4nVcCwTpx81nICr2JQFkM+HPLq4w==\",
          \"dev\": true,
          \"requires\": {
            \"imurmurhash\": \"^0.1.4\"
          }
        }
      }
    },
    \"nopt\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/nopt/-/nopt-5.0.0.tgz\",
      \"integrity\": \"sha512-Tbj67rffqceeLpcRXrT7vKAN8CwfPeIBgM7E6iBkmKLV7bEMwpGgYLGv0jACUsECaa/vuxP0IjEont6umdMgtQ==\",
      \"dev\": true,
      \"requires\": {
        \"abbrev\": \"1\"
      }
    },
    \"normalize-path\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
      \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
      \"dev\": true
    },
    \"normalize-url\": {
      \"version\": \"1.9.1\",
      \"resolved\": \"https://registry.npmjs.org/normalize-url/-/normalize-url-1.9.1.tgz\",
      \"integrity\": \"sha1-LMDWazHqIwNkWENuNiDYWVTGbDw=\",
      \"dev\": true,
      \"requires\": {
        \"object-assign\": \"^4.0.1\",
        \"prepend-http\": \"^1.0.0\",
        \"query-string\": \"^4.1.0\",
        \"sort-keys\": \"^1.0.0\"
      }
    },
    \"object-assign\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
      \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
      \"dev\": true
    },
    \"object-inspect\": {
      \"version\": \"1.12.3\",
      \"resolved\": \"https://registry.npmjs.org/object-inspect/-/object-inspect-1.12.3.tgz\",
      \"integrity\": \"sha512-geUvdk7c+eizMNUDkRpW1wJwgfOiOeHbxBR/hLXK1aT6zmVSO0jsQcs7fj6MGw89jC/cjGfLcNOrtMYtGqm81g==\",
      \"dev\": true
    },
    \"object-keys\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
      \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
      \"dev\": true
    },
    \"object.assign\": {
      \"version\": \"4.1.4\",
      \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.4.tgz\",
      \"integrity\": \"sha512-1mxKf0e58bvyjSCtKYY4sRe9itRk3PJpquJOjeIkz885CczcI4IvJJDLPS72oowuSh+pBxUFROpX+TU++hxhZQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"has-symbols\": \"^1.0.3\",
        \"object-keys\": \"^1.1.1\"
      }
    },
    \"object.entries\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/object.entries/-/object.entries-1.1.5.tgz\",
      \"integrity\": \"sha512-TyxmjUoZggd4OrrU1W66FMDG6CuqJxsFvymeyXI51+vQLN67zYfZseptRge703kKQdo4uccgAKebXFcRCzk4+g==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.1\"
      }
    },
    \"object.fromentries\": {
      \"version\": \"2.0.7\",
      \"resolved\": \"https://registry.npmjs.org/object.fromentries/-/object.fromentries-2.0.7.tgz\",
      \"integrity\": \"sha512-UPbPHML6sL8PI/mOqPwsH4G6iyXcCGzLin8KvEPenOZN5lpCNBZZQ+V62vdjB1mQHrmqGQt5/OJzemUA+KJmEA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\"
      }
    },
    \"object.getownpropertydescriptors\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/object.getownpropertydescriptors/-/object.getownpropertydescriptors-2.1.3.tgz\",
      \"integrity\": \"sha512-VdDoCwvJI4QdC6ndjpqFmoL3/+HxffFBbcJzKi5hwLLqqx3mdbedRpfZDdK0SrOSauj8X4GzBvnDZl4vTN7dOw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.1\"
      }
    },
    \"object.groupby\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/object.groupby/-/object.groupby-1.0.1.tgz\",
      \"integrity\": \"sha512-HqaQtqLnp/8Bn4GL16cj+CUYbnpe1bh0TtEaWvybszDG4tgxCJuRpV8VGuvNaI1fAnI4lUJzDG55MXcOH4JZcQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\",
        \"get-intrinsic\": \"^1.2.1\"
      }
    },
    \"object.values\": {
      \"version\": \"1.1.7\",
      \"resolved\": \"https://registry.npmjs.org/object.values/-/object.values-1.1.7.tgz\",
      \"integrity\": \"sha512-aU6xnDFYT3x17e/f0IiiwlGPTy2jzMySGfUB4fq6z7CV8l85CWHDk5ErhyhpfDHhrOMwGFhSQkhMGHaIotA6Ng==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"es-abstract\": \"^1.22.1\"
      }
    },
    \"once\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
      \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
      \"dev\": true,
      \"requires\": {
        \"wrappy\": \"1\"
      }
    },
    \"optionator\": {
      \"version\": \"0.9.3\",
      \"resolved\": \"https://registry.npmjs.org/optionator/-/optionator-0.9.3.tgz\",
      \"integrity\": \"sha512-JjCoypp+jKn1ttEFExxhetCKeJt9zhAgAve5FXHixTvFDW/5aEktX9bufBKLRRMdU7bNtpLfcGu94B3cdEJgjg==\",
      \"dev\": true,
      \"requires\": {
        \"@aashutoshrathi/word-wrap\": \"^1.2.3\",
        \"deep-is\": \"^0.1.3\",
        \"fast-levenshtein\": \"^2.0.6\",
        \"levn\": \"^0.4.1\",
        \"prelude-ls\": \"^1.2.1\",
        \"type-check\": \"^0.4.0\"
      }
    },
    \"p-limit\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.2.0.tgz\",
      \"integrity\": \"sha512-pZbTJpoUsCzV48Mc9Nh51VbwO0X9cuPFE8gYwx9BTCt9SF8/b7Zljd2fVgOxhIF/HDTKgpVzs+GPhyKfjLLFRQ==\",
      \"dev\": true,
      \"requires\": {
        \"p-try\": \"^2.0.0\"
      }
    },
    \"p-locate\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-3.0.0.tgz\",
      \"integrity\": \"sha512-x+12w/To+4GFfgJhBEpiDcLozRJGegY+Ei7/z0tSLkMmxGZNybVMSfWj9aJn8Z5Fc7dBUNJOOVgPv2H7IwulSQ==\",
      \"dev\": true,
      \"requires\": {
        \"p-limit\": \"^2.0.0\"
      }
    },
    \"p-map\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-2.1.0.tgz\",
      \"integrity\": \"sha512-y3b8Kpd8OAN444hxfBbFfj1FY/RjtTd8tzYwhUqNYXx0fXx2iX4maP4Qr6qhIKbQXI02wTLAda4fYUbDagTUFw==\",
      \"dev\": true
    },
    \"p-try\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.0.0.tgz\",
      \"integrity\": \"sha512-hMp0onDKIajHfIkdRk3P4CdCmErkYAxxDtP3Wx/4nZ3aGlau2VKh3mZpcuFkH27WQkL/3WBCPOktzA9ZOAnMQQ==\",
      \"dev\": true
    },
    \"parent-module\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/parent-module/-/parent-module-1.0.1.tgz\",
      \"integrity\": \"sha512-GQ2EWRpQV8/o+Aw8YqtfZZPfNRWZYkbidE9k5rpl/hC3vtHHBfGm2Ifi6qWV+coDGkrUKZAxE3Lot5kcsRlh+g==\",
      \"dev\": true,
      \"requires\": {
        \"callsites\": \"^3.0.0\"
      }
    },
    \"parse-json\": {
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-5.2.0.tgz\",
      \"integrity\": \"sha512-ayCKvm/phCGxOkYRSCM82iDwct8/EonSEgCSxWxD7ve6jHggsFl4fZVQBPRNgQoKiuV/odhFrGzQXZwbifC8Rg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.0.0\",
        \"error-ex\": \"^1.3.1\",
        \"json-parse-even-better-errors\": \"^2.3.0\",
        \"lines-and-columns\": \"^1.1.6\"
      }
    },
    \"parse-passwd\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
      \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
      \"dev\": true
    },
    \"path-exists\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-3.0.0.tgz\",
      \"integrity\": \"sha1-zg6+ql94yxiSXqfYENe1mwEP1RU=\",
      \"dev\": true
    },
    \"path-is-absolute\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/path-is-absolute/-/path-is-absolute-1.0.1.tgz\",
      \"integrity\": \"sha1-F0uSaHNVNP+8es5r9TpanhtcX18=\",
      \"dev\": true
    },
    \"path-is-inside\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/path-is-inside/-/path-is-inside-1.0.2.tgz\",
      \"integrity\": \"sha1-NlQX3t5EQw0cEa9hAn+s8HS9/FM=\",
      \"dev\": true
    },
    \"path-key\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/path-key/-/path-key-3.1.1.tgz\",
      \"integrity\": \"sha512-ojmeN0qd+y0jszEtoY48r0Peq5dwMEkIlCOu6Q5f41lfkswXuKtYrhgoTpLnyIcHm24Uhqx+5Tqm2InSwLhE6Q==\",
      \"dev\": true
    },
    \"path-parse\": {
      \"version\": \"1.0.7\",
      \"resolved\": \"https://registry.npmjs.org/path-parse/-/path-parse-1.0.7.tgz\",
      \"integrity\": \"sha512-LDJzPVEEEPR+y48z93A0Ed0yXb8pAByGWo/k5YYdYgpY2/2EsOsksJrq7lOHxryrVOn1ejG6oAp8ahvOIQD8sw==\",
      \"dev\": true
    },
    \"pathval\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/pathval/-/pathval-1.1.1.tgz\",
      \"integrity\": \"sha512-Dp6zGqpTdETdR63lehJYPeIOqpiNBNtc7BpWSLrOje7UaIsE5aY92r/AunQA7rsXvet3lrJ3JnZX29UPTKXyKQ==\",
      \"dev\": true
    },
    \"picocolors\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-1.0.0.tgz\",
      \"integrity\": \"sha512-1fygroTLlHu66zi26VoTDv8yRgm0Fccecssto+MhsZ0D/DGW2sm8E8AjW7NU5VVTRt5GxbeZ5qBuJr+HyLYkjQ==\",
      \"dev\": true
    },
    \"picomatch\": {
      \"version\": \"2.3.1\",
      \"resolved\": \"https://registry.npmjs.org/picomatch/-/picomatch-2.3.1.tgz\",
      \"integrity\": \"sha512-JU3teHTNjmE2VCGFzuY8EXzCDVwEqB2a8fsIvwaStHhAWJEeVd1o1QD80CU6+ZdEXXSLbSsuLwJjkCBWqRQUVA==\",
      \"dev\": true
    },
    \"pify\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
      \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
      \"dev\": true
    },
    \"pinkie\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/pinkie/-/pinkie-2.0.4.tgz\",
      \"integrity\": \"sha1-clVrgM+g1IqXToDnckjoDtT3+HA=\",
      \"dev\": true
    },
    \"pinkie-promise\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/pinkie-promise/-/pinkie-promise-2.0.1.tgz\",
      \"integrity\": \"sha1-ITXW36ejWMBprJsXh3YogihFD/o=\",
      \"dev\": true,
      \"requires\": {
        \"pinkie\": \"^2.0.0\"
      }
    },
    \"pirates\": {
      \"version\": \"4.0.5\",
      \"resolved\": \"https://registry.npmjs.org/pirates/-/pirates-4.0.5.tgz\",
      \"integrity\": \"sha512-8V9+HQPupnaXMA23c5hvl69zXvTwTzyAYasnkb0Tts4XvO4CliqONMOnvlq26rkhLC3nWDFBJf73LU1e1VZLaQ==\",
      \"dev\": true
    },
    \"pkg-dir\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-3.0.0.tgz\",
      \"integrity\": \"sha512-/E57AYkoeQ25qkxMj5PBOVgF8Kiu/h7cYS30Z5+R7WaiCCBfLq58ZI/dSeaEKb9WVJV5n/03QwrN3IeWIFllvw==\",
      \"dev\": true,
      \"requires\": {
        \"find-up\": \"^3.0.0\"
      }
    },
    \"postcss\": {
      \"version\": \"8.4.31\",
      \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-8.4.31.tgz\",
      \"integrity\": \"sha512-PS08Iboia9mts/2ygV3eLpY5ghnUcfLV/EXTOW1E2qYxJKGGBUtNjN76FYHnMs36RmARn41bC0AZmn+rR0OVpQ==\",
      \"dev\": true,
      \"requires\": {
        \"nanoid\": \"^3.3.6\",
        \"picocolors\": \"^1.0.0\",
        \"source-map-js\": \"^1.0.2\"
      },
      \"dependencies\": {
        \"nanoid\": {
          \"version\": \"3.3.6\",
          \"resolved\": \"https://registry.npmjs.org/nanoid/-/nanoid-3.3.6.tgz\",
          \"integrity\": \"sha512-BGcqMMJuToF7i1rt+2PWSNVnWIkGCU78jBG3RxO/bZlnZPK2Cmi2QaffxGO/2RvWi9sL+FAiRiXMgsyxQ1DIDA==\",
          \"dev\": true
        }
      }
    },
    \"postcss-modules-extract-imports\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-extract-imports/-/postcss-modules-extract-imports-3.0.0.tgz\",
      \"integrity\": \"sha512-bdHleFnP3kZ4NYDhuGlVK+CMrQ/pqUm8bx/oGL93K6gVwiclvX5x0n76fYMKuIGKzlABOy13zsvqjb0f92TEXw==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"postcss-modules-local-by-default\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-local-by-default/-/postcss-modules-local-by-default-4.0.3.tgz\",
      \"integrity\": \"sha512-2/u2zraspoACtrbFRnTijMiQtb4GW4BvatjaG/bCjYQo8kLTdevCUlwuBHx2sCnSyrI3x3qj4ZK1j5LQBgzmwA==\",
      \"dev\": true,
      \"requires\": {
        \"icss-utils\": \"^5.0.0\",
        \"postcss-selector-parser\": \"^6.0.2\",
        \"postcss-value-parser\": \"^4.1.0\"
      }
    },
    \"postcss-modules-scope\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-scope/-/postcss-modules-scope-3.0.0.tgz\",
      \"integrity\": \"sha512-hncihwFA2yPath8oZ15PZqvWGkWf+XUfQgUGamS4LqoP1anQLOsOJw0vr7J7IwLpoY9fatA2qiGUGmuZL0Iqlg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss-selector-parser\": \"^6.0.4\"
      }
    },
    \"postcss-modules-values\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-values/-/postcss-modules-values-4.0.0.tgz\",
      \"integrity\": \"sha512-RDxHkAiEGI78gS2ofyvCsu7iycRv7oqw5xMWn9iMoR0N/7mf9D50ecQqUo5BZ9Zh2vH4bCUR/ktCqbB9m8vJjQ==\",
      \"dev\": true,
      \"requires\": {
        \"icss-utils\": \"^5.0.0\"
      }
    },
    \"postcss-selector-parser\": {
      \"version\": \"6.0.6\",
      \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-6.0.6.tgz\",
      \"integrity\": \"sha512-9LXrvaaX3+mcv5xkg5kFwqSzSH1JIObIx51PrndZwlmznwXRfxMddDvo9gve3gVR8ZTKgoFDdWkbRFmEhT4PMg==\",
      \"dev\": true,
      \"requires\": {
        \"cssesc\": \"^3.0.0\",
        \"util-deprecate\": \"^1.0.2\"
      }
    },
    \"postcss-value-parser\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-value-parser/-/postcss-value-parser-4.2.0.tgz\",
      \"integrity\": \"sha512-1NNCs6uurfkVbeXG4S8JFT9t19m45ICnif8zWLd5oPSZ50QnwMfK+H3jv408d4jw/7Bttv5axS5IiHoLaVNHeQ==\",
      \"dev\": true
    },
    \"prelude-ls\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/prelude-ls/-/prelude-ls-1.2.1.tgz\",
      \"integrity\": \"sha512-vkcDPrRZo1QZLbn5RLGPpg/WmIQ65qoWWhcGKf/b5eplkkarX0m9z8ppCat4mlOqUsWpyNuYgO3VRyrYHSzX5g==\",
      \"dev\": true
    },
    \"prepend-http\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/prepend-http/-/prepend-http-1.0.4.tgz\",
      \"integrity\": \"sha1-1PRWKwzjaW5BrFLQ4ALlemNdxtw=\",
      \"dev\": true
    },
    \"process-nextick-args\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.0.tgz\",
      \"integrity\": \"sha512-MtEC1TqN0EU5nephaJ4rAtThHtC86dNN9qCuEhtshvpVBkAW5ZO7BASN9REnF9eoXGcRub+pFuKEpOHE+HbEMw==\",
      \"dev\": true
    },
    \"promise-inflight\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/promise-inflight/-/promise-inflight-1.0.1.tgz\",
      \"integrity\": \"sha512-6zWPyEOFaQBJYcGMHBKTKJ3u6TBsnMFOIZSa6ce1e/ZrrsOlnHRHbabMjLiBYKp+n44X9eUI6VUPaukCXHuG4g==\",
      \"dev\": true
    },
    \"promise-retry\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/promise-retry/-/promise-retry-2.0.1.tgz\",
      \"integrity\": \"sha512-y+WKFlBR8BGXnsNlIHFGPZmyDf3DFMoLhaflAnyZgV6rG6xu+JwesTo2Q9R6XwYmtmwAFCkAk3e35jEdoeh/3g==\",
      \"dev\": true,
      \"requires\": {
        \"err-code\": \"^2.0.2\",
        \"retry\": \"^0.12.0\"
      }
    },
    \"punycode\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-2.1.1.tgz\",
      \"integrity\": \"sha512-XRsRjdf+j5ml+y/6GKHPZbrF/8p2Yga0JPtdqTIY2Xe5ohJPD9saDJJLPvp9+NSBprVvevdXZybnj2cv8OEd0A==\",
      \"dev\": true
    },
    \"query-string\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/query-string/-/query-string-4.3.4.tgz\",
      \"integrity\": \"sha1-u7aTucqRXCMlFbIosaArYJBD2+s=\",
      \"dev\": true,
      \"requires\": {
        \"object-assign\": \"^4.1.0\",
        \"strict-uri-encode\": \"^1.0.0\"
      }
    },
    \"queue-microtask\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/queue-microtask/-/queue-microtask-1.2.3.tgz\",
      \"integrity\": \"sha512-NuaNSa6flKT5JaSYQzJok04JzTL1CA6aGhv5rfLW3PgqA+M2ChpZQnAC8h8i4ZFkBS8X5RqkDBHA7r4hej3K9A==\",
      \"dev\": true
    },
    \"quick-lru\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/quick-lru/-/quick-lru-4.0.1.tgz\",
      \"integrity\": \"sha512-ARhCpm70fzdcvNQfPoy49IaanKkTlRWF2JMzqhcJbhSFRZv7nPTvZJdcY7301IPmvW+/p0RgIWnQDLJxifsQ7g==\",
      \"dev\": true
    },
    \"randombytes\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/randombytes/-/randombytes-2.1.0.tgz\",
      \"integrity\": \"sha512-vYl3iOX+4CKUWuxGi9Ukhie6fsqXqS9FE2Zaic4tNFD2N2QQaXOMFbuKK4QmDHC0JO6B1Zp41J0LpT0oR68amQ==\",
      \"dev\": true,
      \"requires\": {
        \"safe-buffer\": \"^5.1.0\"
      }
    },
    \"readable-stream\": {
      \"version\": \"2.3.6\",
      \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.6.tgz\",
      \"integrity\": \"sha512-tQtKA9WIAhBF3+VLAseyMqZeBjW0AHJoxOtYqSUZNJxauErmLbVm2FW1y+J/YA9dUrAC39ITejlZWhVIwawkKw==\",
      \"dev\": true,
      \"requires\": {
        \"core-util-is\": \"~1.0.0\",
        \"inherits\": \"~2.0.3\",
        \"isarray\": \"~1.0.0\",
        \"process-nextick-args\": \"~2.0.0\",
        \"safe-buffer\": \"~5.1.1\",
        \"string_decoder\": \"~1.1.1\",
        \"util-deprecate\": \"~1.0.1\"
      }
    },
    \"rechoir\": {
      \"version\": \"0.7.0\",
      \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.7.0.tgz\",
      \"integrity\": \"sha512-ADsDEH2bvbjltXEP+hTIAmeFekTFK0V2BTxMkok6qILyAJEXV0AFfoWcAq4yfll5VdIMd/RVXq0lR+wQi5ZU3Q==\",
      \"dev\": true,
      \"requires\": {
        \"resolve\": \"^1.9.0\"
      }
    },
    \"redent\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/redent/-/redent-3.0.0.tgz\",
      \"integrity\": \"sha512-6tDA8g98We0zd0GvVeMT9arEOnTw9qM03L9cJXaCjrip1OO764RDBLBfrB4cwzNGDj5OA5ioymC9GkizgWJDUg==\",
      \"dev\": true,
      \"requires\": {
        \"indent-string\": \"^4.0.0\",
        \"strip-indent\": \"^3.0.0\"
      }
    },
    \"regenerate\": {
      \"version\": \"1.4.2\",
      \"resolved\": \"https://registry.npmjs.org/regenerate/-/regenerate-1.4.2.tgz\",
      \"integrity\": \"sha512-zrceR/XhGYU/d/opr2EKO7aRHUeiBI8qjtfHqADTwZd6Szfy16la6kqD0MIUs5z5hx6AaKa+PixpPrR289+I0A==\",
      \"dev\": true
    },
    \"regenerate-unicode-properties\": {
      \"version\": \"10.1.0\",
      \"resolved\": \"https://registry.npmjs.org/regenerate-unicode-properties/-/regenerate-unicode-properties-10.1.0.tgz\",
      \"integrity\": \"sha512-d1VudCLoIGitcU/hEg2QqvyGZQmdC0Lf8BqdOMXGFSvJP4bNV1+XqbPQeHHLD51Jh4QJJ225dlIFvY4Ly6MXmQ==\",
      \"dev\": true,
      \"requires\": {
        \"regenerate\": \"^1.4.2\"
      }
    },
    \"regenerator-runtime\": {
      \"version\": \"0.14.0\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.14.0.tgz\",
      \"integrity\": \"sha512-srw17NI0TUWHuGa5CFGGmhfNIeja30WMBfbslPNhf6JrqQlLN5gcrvig1oqPxiVaXb0oW0XRKtH6Nngs5lKCIA==\",
      \"dev\": true
    },
    \"regenerator-transform\": {
      \"version\": \"0.15.2\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-transform/-/regenerator-transform-0.15.2.tgz\",
      \"integrity\": \"sha512-hfMp2BoF0qOk3uc5V20ALGDS2ddjQaLrdl7xrGXvAIow7qeWRM2VA2HuCHkUKk9slq3VwEwLNK3DFBqDfPGYtg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/runtime\": \"^7.8.4\"
      }
    },
    \"regexp.prototype.flags\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/regexp.prototype.flags/-/regexp.prototype.flags-1.5.0.tgz\",
      \"integrity\": \"sha512-0SutC3pNudRKgquxGoRGIz946MZVHqbNfPjBdxeOhBrdgDKlRoXmYLQN9xRbrR09ZXWeGAdPuif7egofn6v5LA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.2.0\",
        \"functions-have-names\": \"^1.2.3\"
      }
    },
    \"regexpu-core\": {
      \"version\": \"5.3.2\",
      \"resolved\": \"https://registry.npmjs.org/regexpu-core/-/regexpu-core-5.3.2.tgz\",
      \"integrity\": \"sha512-RAM5FlZz+Lhmo7db9L298p2vHP5ZywrVXmVXpmAD9GuL5MPH6t9ROw1iA/wfHkQ76Qe7AaPF0nGuim96/IrQMQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/regjsgen\": \"^0.8.0\",
        \"regenerate\": \"^1.4.2\",
        \"regenerate-unicode-properties\": \"^10.1.0\",
        \"regjsparser\": \"^0.9.1\",
        \"unicode-match-property-ecmascript\": \"^2.0.0\",
        \"unicode-match-property-value-ecmascript\": \"^2.1.0\"
      }
    },
    \"regjsparser\": {
      \"version\": \"0.9.1\",
      \"resolved\": \"https://registry.npmjs.org/regjsparser/-/regjsparser-0.9.1.tgz\",
      \"integrity\": \"sha512-dQUtn90WanSNl+7mQKcXAgZxvUe7Z0SqXlgzv0za4LwiUhyzBC58yQO3liFoUgu8GiJVInAhJjkj1N0EtQ5nkQ==\",
      \"dev\": true,
      \"requires\": {
        \"jsesc\": \"~0.5.0\"
      },
      \"dependencies\": {
        \"jsesc\": {
          \"version\": \"0.5.0\",
          \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-0.5.0.tgz\",
          \"integrity\": \"sha512-uZz5UnB7u4T9LvwmFqXii7pZSouaRPorGs5who1Ip7VO0wxanFvBL7GkM6dTHlgX+jhBApRetaWpnDabOeTcnA==\",
          \"dev\": true
        }
      }
    },
    \"require-directory\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
      \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
      \"dev\": true
    },
    \"require-from-string\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/require-from-string/-/require-from-string-2.0.2.tgz\",
      \"integrity\": \"sha512-Xf0nWe6RseziFMu+Ap9biiUbmplq6S9/p+7w7YXP/JBHhrUDDUhwa+vANyubuqfZWTveU//DYVGsDG7RKL/vEw==\",
      \"dev\": true
    },
    \"resolve\": {
      \"version\": \"1.22.8\",
      \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.22.8.tgz\",
      \"integrity\": \"sha512-oKWePCxqpd6FlLvGV1VU0x7bkPmmCNolxzjMf4NczoDnQcIWrAF+cPtZn5i6n+RfD2d9i0tzpKnG6Yk168yIyw==\",
      \"dev\": true,
      \"requires\": {
        \"is-core-module\": \"^2.13.0\",
        \"path-parse\": \"^1.0.7\",
        \"supports-preserve-symlinks-flag\": \"^1.0.0\"
      }
    },
    \"resolve-cwd\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-cwd/-/resolve-cwd-3.0.0.tgz\",
      \"integrity\": \"sha512-OrZaX2Mb+rJCpH/6CpSqt9xFVpN++x01XnN2ie9g6P5/3xelLAkXWVADpdz1IHD/KFfEXyE6V0U01OQ3UO2rEg==\",
      \"dev\": true,
      \"requires\": {
        \"resolve-from\": \"^5.0.0\"
      }
    },
    \"resolve-from\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-from/-/resolve-from-5.0.0.tgz\",
      \"integrity\": \"sha512-qYg9KP24dD5qka9J47d0aVky0N+b4fTU89LN9iDnjB5waksiC49rvMB0PrUJQGoTmH50XPiqOvAjDfaijGxYZw==\",
      \"dev\": true
    },
    \"retry\": {
      \"version\": \"0.12.0\",
      \"resolved\": \"https://registry.npmjs.org/retry/-/retry-0.12.0.tgz\",
      \"integrity\": \"sha512-9LkiTwjUh6rT555DtE9rTX+BKByPfrMzEAtnlEtdEwr3Nkffwiihqe2bWADg+OQRjt9gl6ICdmB/ZFDCGAtSow==\",
      \"dev\": true
    },
    \"reusify\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/reusify/-/reusify-1.0.4.tgz\",
      \"integrity\": \"sha512-U9nH88a3fc/ekCF1l0/UP1IosiuIjyTh7hBvXVMHYgVcfGvt897Xguj2UOLDeI5BG2m7/uwyaLVT6fbtCwTyzw==\",
      \"dev\": true
    },
    \"rimraf\": {
      \"version\": \"2.6.3\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.6.3.tgz\",
      \"integrity\": \"sha512-mwqeW5XsA2qAejG46gYdENaxXjx9onRNCfn7L0duuP4hCuTIi/QO7PDK07KJfp1d+izWPrzEJDcSqBa0OZQriA==\",
      \"dev\": true,
      \"requires\": {
        \"glob\": \"^7.1.3\"
      }
    },
    \"run-parallel\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/run-parallel/-/run-parallel-1.2.0.tgz\",
      \"integrity\": \"sha512-5l4VyZR86LZ/lDxZTR6jqL8AFE2S0IFLMP26AbjsLVADxHdhB/c0GUsH+y39UfCi3dzz8OlQuPmnaJOMoDHQBA==\",
      \"dev\": true,
      \"requires\": {
        \"queue-microtask\": \"^1.2.2\"
      }
    },
    \"safe-array-concat\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/safe-array-concat/-/safe-array-concat-1.0.0.tgz\",
      \"integrity\": \"sha512-9dVEFruWIsnie89yym+xWTAYASdpw3CJV7Li/6zBewGf9z2i1j31rP6jnY0pHEO4QZh6N0K11bFjWmdR8UGdPQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.2.0\",
        \"has-symbols\": \"^1.0.3\",
        \"isarray\": \"^2.0.5\"
      },
      \"dependencies\": {
        \"isarray\": {
          \"version\": \"2.0.5\",
          \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.5.tgz\",
          \"integrity\": \"sha512-xHjhDr3cNBK0BzdUJSPXZntQUx/mwMS5Rw4A7lPJ90XGAO6ISP/ePDNuo0vhqOZU+UD5JoodwCAAoZQd3FeAKw==\",
          \"dev\": true
        }
      }
    },
    \"safe-buffer\": {
      \"version\": \"5.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
      \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
      \"dev\": true
    },
    \"safe-regex-test\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/safe-regex-test/-/safe-regex-test-1.0.0.tgz\",
      \"integrity\": \"sha512-JBUUzyOgEwXQY1NuPtvcj/qcBDbDmEvWufhlnXZIm75DEHp+afM1r1ujJpJsV/gSM4t59tpDyPi1sd6ZaPFfsA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.1.3\",
        \"is-regex\": \"^1.1.4\"
      }
    },
    \"safer-buffer\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
      \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
      \"dev\": true,
      \"optional\": true
    },
    \"sass-graph\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/sass-graph/-/sass-graph-4.0.1.tgz\",
      \"integrity\": \"sha512-5YCfmGBmxoIRYHnKK2AKzrAkCoQ8ozO+iumT8K4tXJXRVCPf+7s1/9KxTSW3Rbvf+7Y7b4FR3mWyLnQr3PHocA==\",
      \"dev\": true,
      \"requires\": {
        \"glob\": \"^7.0.0\",
        \"lodash\": \"^4.17.11\",
        \"scss-tokenizer\": \"^0.4.3\",
        \"yargs\": \"^17.2.1\"
      }
    },
    \"sass-loader\": {
      \"version\": \"13.3.2\",
      \"resolved\": \"https://registry.npmjs.org/sass-loader/-/sass-loader-13.3.2.tgz\",
      \"integrity\": \"sha512-CQbKl57kdEv+KDLquhC+gE3pXt74LEAzm+tzywcA0/aHZuub8wTErbjAoNI57rPUWRYRNC5WUnNl8eGJNbDdwg==\",
      \"dev\": true,
      \"requires\": {
        \"neo-async\": \"^2.6.2\"
      }
    },
    \"schema-utils\": {
      \"version\": \"3.3.0\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.3.0.tgz\",
      \"integrity\": \"sha512-pN/yOAvcC+5rQ5nERGuwrjLlYvLTbCibnZ1I7B1LaiAz9BRBlE9GMgE/eqV30P7aJQUf7Ddimy/RsbYO/GrVGg==\",
      \"dev\": true,
      \"requires\": {
        \"@types/json-schema\": \"^7.0.8\",
        \"ajv\": \"^6.12.5\",
        \"ajv-keywords\": \"^3.5.2\"
      }
    },
    \"scss-tokenizer\": {
      \"version\": \"0.4.3\",
      \"resolved\": \"https://registry.npmjs.org/scss-tokenizer/-/scss-tokenizer-0.4.3.tgz\",
      \"integrity\": \"sha512-raKLgf1LI5QMQnG+RxHz6oK0sL3x3I4FN2UDLqgLOGO8hodECNnNh5BXn7fAyBxrA8zVzdQizQ6XjNJQ+uBwMw==\",
      \"dev\": true,
      \"requires\": {
        \"js-base64\": \"^2.4.9\",
        \"source-map\": \"^0.7.3\"
      },
      \"dependencies\": {
        \"source-map\": {
          \"version\": \"0.7.4\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.7.4.tgz\",
          \"integrity\": \"sha512-l3BikUxvPOcn5E74dZiq5BGsTb5yEwhaTSzccU6t4sDOH8NWJCstKO5QT2CvtFoK6F0saL7p9xHAqHOlCPJygA==\",
          \"dev\": true
        }
      }
    },
    \"semver\": {
      \"version\": \"5.6.0\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.6.0.tgz\",
      \"integrity\": \"sha512-RS9R6R35NYgQn++fkDWaOmqGoj4Ek9gGs+DPxNUZKuwE183xjJroKvyo1IzVFeXvUrvmALy6FWD5xrdJT25gMg==\",
      \"dev\": true
    },
    \"serialize-javascript\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-6.0.0.tgz\",
      \"integrity\": \"sha512-Qr3TosvguFt8ePWqsvRfrKyQXIiW+nGbYpy8XK24NQHE83caxWt+mIymTT19DGFbNWNLfEwsrkSmN64lVWB9ag==\",
      \"dev\": true,
      \"requires\": {
        \"randombytes\": \"^2.1.0\"
      }
    },
    \"set-blocking\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
      \"integrity\": \"sha512-KiKBS8AnWGEyLzofFfmvKwpdPzqiy16LvQfK3yv/fVH7Bj13/wl3JSR1J+rfgRE9q7xUJK4qvgS8raSOeLUehw==\",
      \"dev\": true
    },
    \"shallow-clone\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/shallow-clone/-/shallow-clone-3.0.1.tgz\",
      \"integrity\": \"sha512-/6KqX+GVUdqPuPPd2LxDDxzX6CAbjJehAAOKlNpqqUpAqPM6HeL8f+o3a+JsyGjn2lv0WY8UsTgUJjU9Ok55NA==\",
      \"dev\": true,
      \"requires\": {
        \"kind-of\": \"^6.0.2\"
      }
    },
    \"shebang-command\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/shebang-command/-/shebang-command-2.0.0.tgz\",
      \"integrity\": \"sha512-kHxr2zZpYtdmrN1qDjrrX/Z1rR1kG8Dx+gkpK1G4eXmvXswmcE1hTWBWYUzlraYw1/yZp6YuDY77YtvbN0dmDA==\",
      \"dev\": true,
      \"requires\": {
        \"shebang-regex\": \"^3.0.0\"
      }
    },
    \"shebang-regex\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/shebang-regex/-/shebang-regex-3.0.0.tgz\",
      \"integrity\": \"sha512-7++dFhtcx3353uBaq8DDR4NuxBetBzC7ZQOhmTQInHEd6bSrXdiEyzCvG07Z44UYdLShWUyXt5M/yhz8ekcb1A==\",
      \"dev\": true
    },
    \"side-channel\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/side-channel/-/side-channel-1.0.4.tgz\",
      \"integrity\": \"sha512-q5XPytqFEIKHkGdiMIrY10mvLRvnQh42/+GoBlFW3b2LXLE2xxJpZFdm94we0BaoV3RwJyGqg5wS7epxTv0Zvw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.0\",
        \"get-intrinsic\": \"^1.0.2\",
        \"object-inspect\": \"^1.9.0\"
      }
    },
    \"signal-exit\": {
      \"version\": \"3.0.7\",
      \"resolved\": \"https://registry.npmjs.org/signal-exit/-/signal-exit-3.0.7.tgz\",
      \"integrity\": \"sha512-wnD2ZE+l+SPC/uoS0vXeE9L1+0wuaMqKlfz9AMUo38JsyLSBWSFcHR1Rri62LZc12vLr1gb3jl7iwQhgwpAbGQ==\",
      \"dev\": true
    },
    \"slash\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/slash/-/slash-2.0.0.tgz\",
      \"integrity\": \"sha512-ZYKh3Wh2z1PpEXWr0MpSBZ0V6mZHAQfYevttO11c51CaWjGTaadiKZ+wVt1PbMlDV5qhMFslpZCemhwOK7C89A==\",
      \"dev\": true
    },
    \"smart-buffer\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/smart-buffer/-/smart-buffer-4.2.0.tgz\",
      \"integrity\": \"sha512-94hK0Hh8rPqQl2xXc3HsaBoOXKV20MToPkcXvwbISWLEs+64sBq5kFgn2kJDHb1Pry9yrP0dxrCI9RRci7RXKg==\",
      \"dev\": true
    },
    \"socks\": {
      \"version\": \"2.7.0\",
      \"resolved\": \"https://registry.npmjs.org/socks/-/socks-2.7.0.tgz\",
      \"integrity\": \"sha512-scnOe9y4VuiNUULJN72GrM26BNOjVsfPXI+j+98PkyEfsIXroa5ofyjT+FzGvn/xHs73U2JtoBYAVx9Hl4quSA==\",
      \"dev\": true,
      \"requires\": {
        \"ip\": \"^2.0.0\",
        \"smart-buffer\": \"^4.2.0\"
      }
    },
    \"socks-proxy-agent\": {
      \"version\": \"6.2.1\",
      \"resolved\": \"https://registry.npmjs.org/socks-proxy-agent/-/socks-proxy-agent-6.2.1.tgz\",
      \"integrity\": \"sha512-a6KW9G+6B3nWZ1yB8G7pJwL3ggLy1uTzKAgCb7ttblwqdz9fMGJUuTy3uFzEP48FAs9FLILlmzDlE2JJhVQaXQ==\",
      \"dev\": true,
      \"requires\": {
        \"agent-base\": \"^6.0.2\",
        \"debug\": \"^4.3.3\",
        \"socks\": \"^2.6.2\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"4.3.4\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.4.tgz\",
          \"integrity\": \"sha512-PRWFHuSU3eDtQJPvnNY7Jcket1j0t5OuOsFzPPzsekD52Zl8qUfFIPEiswXqIvHWGVHOgX+7G/vCNNhehwxfkQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.1.2\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
          \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
          \"dev\": true
        }
      }
    },
    \"sort-keys\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/sort-keys/-/sort-keys-1.1.2.tgz\",
      \"integrity\": \"sha1-RBttTTRnmPG05J6JIK37oOVD+a0=\",
      \"dev\": true,
      \"requires\": {
        \"is-plain-obj\": \"^1.0.0\"
      }
    },
    \"source-list-map\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/source-list-map/-/source-list-map-2.0.1.tgz\",
      \"integrity\": \"sha512-qnQ7gVMxGNxsiL4lEuJwe/To8UnK7fAnmbGEEH8RpLouuKbeEm0lhbQVFIrNSuB+G7tVrAlVsZgETT5nljf+Iw==\",
      \"dev\": true
    },
    \"source-map-js\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/source-map-js/-/source-map-js-1.0.2.tgz\",
      \"integrity\": \"sha512-R0XvVJ9WusLiqTCEiGCmICCMplcCkIwwR11mOSD9CR5u+IXYdiseeEuXCVAjS54zqwkLcPNnmU4OeJ6tUrWhDw==\",
      \"dev\": true
    },
    \"source-map-support\": {
      \"version\": \"0.5.21\",
      \"resolved\": \"https://registry.npmjs.org/source-map-support/-/source-map-support-0.5.21.tgz\",
      \"integrity\": \"sha512-uBHU3L3czsIyYXKX88fdrGovxdSCoTGDRZ6SYXtSRxLZUzHg5P/66Ht6uoUlHu9EZod+inXhKo3qQgwXUT/y1w==\",
      \"dev\": true,
      \"requires\": {
        \"buffer-from\": \"^1.0.0\",
        \"source-map\": \"^0.6.0\"
      },
      \"dependencies\": {
        \"source-map\": {
          \"version\": \"0.6.1\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
          \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
          \"dev\": true
        }
      }
    },
    \"spdx-correct\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.1.1.tgz\",
      \"integrity\": \"sha512-cOYcUWwhCuHCXi49RhFRCyJEK3iPj1Ziz9DpViV3tbZOwXD49QzIN3MpOLJNxh2qwq2lJJZaKMVw9qNi4jTC0w==\",
      \"dev\": true,
      \"requires\": {
        \"spdx-expression-parse\": \"^3.0.0\",
        \"spdx-license-ids\": \"^3.0.0\"
      }
    },
    \"spdx-exceptions\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/spdx-exceptions/-/spdx-exceptions-2.3.0.tgz\",
      \"integrity\": \"sha512-/tTrYOC7PPI1nUAgx34hUpqXuyJG+DTHJTnIULG4rDygi4xu/tfgmq1e1cIRwRzwZgo4NLySi+ricLkZkw4i5A==\",
      \"dev\": true
    },
    \"spdx-expression-parse\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/spdx-expression-parse/-/spdx-expression-parse-3.0.1.tgz\",
      \"integrity\": \"sha512-cbqHunsQWnJNE6KhVSMsMeH5H/L9EpymbzqTQ3uLwNCLZ1Q481oWaofqH7nO6V07xlXwY6PhQdQ2IedWx/ZK4Q==\",
      \"dev\": true,
      \"requires\": {
        \"spdx-exceptions\": \"^2.1.0\",
        \"spdx-license-ids\": \"^3.0.0\"
      }
    },
    \"spdx-license-ids\": {
      \"version\": \"3.0.5\",
      \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.5.tgz\",
      \"integrity\": \"sha512-J+FWzZoynJEXGphVIS+XEh3kFSjZX/1i9gFBaWQcB+/tmpe2qUsSBABpcxqxnAxFdiUFEgAX1bjYGQvIZmoz9Q==\",
      \"dev\": true
    },
    \"ssri\": {
      \"version\": \"8.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ssri/-/ssri-8.0.1.tgz\",
      \"integrity\": \"sha512-97qShzy1AiyxvPNIkLWoGua7xoQzzPjQ0HAH4B0rWKo7SZ6USuPcrUiAFrws0UH8RrbWmgq3LMTObhPIHbbBeQ==\",
      \"dev\": true,
      \"requires\": {
        \"minipass\": \"^3.1.1\"
      }
    },
    \"stdout-stream\": {
      \"version\": \"1.4.1\",
      \"resolved\": \"https://registry.npmjs.org/stdout-stream/-/stdout-stream-1.4.1.tgz\",
      \"integrity\": \"sha512-j4emi03KXqJWcIeF8eIXkjMFN1Cmb8gUlDYGeBALLPo5qdyTfA9bOtl8m33lRoC+vFMkP3gl0WsDr6+gzxbbTA==\",
      \"dev\": true,
      \"requires\": {
        \"readable-stream\": \"^2.0.1\"
      }
    },
    \"strict-uri-encode\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/strict-uri-encode/-/strict-uri-encode-1.1.0.tgz\",
      \"integrity\": \"sha1-J5siXfHVgrH1TmWt3UNS4Y+qBxM=\",
      \"dev\": true
    },
    \"string_decoder\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.1.1.tgz\",
      \"integrity\": \"sha512-n/ShnvDi6FHbbVfviro+WojiFzv+s8MPMHBczVePfUpDJLwoLT0ht1l4YwBCbi8pJAveEEdnkHyPyTP/mzRfwg==\",
      \"dev\": true,
      \"requires\": {
        \"safe-buffer\": \"~5.1.0\"
      }
    },
    \"string-width\": {
      \"version\": \"4.2.3\",
      \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-4.2.3.tgz\",
      \"integrity\": \"sha512-wKyQRQpjJ0sIp62ErSZdGsjMJWsap5oRNihHhu6G7JVO/9jIB6UyevL+tXuOqrng8j/cxKTWyWUwvSTriiZz/g==\",
      \"dev\": true,
      \"requires\": {
        \"emoji-regex\": \"^8.0.0\",
        \"is-fullwidth-code-point\": \"^3.0.0\",
        \"strip-ansi\": \"^6.0.1\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"6.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
          \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^5.0.1\"
          }
        }
      }
    },
    \"string.prototype.trim\": {
      \"version\": \"1.2.7\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trim/-/string.prototype.trim-1.2.7.tgz\",
      \"integrity\": \"sha512-p6TmeT1T3411M8Cgg9wBTMRtY2q9+PNy9EV1i2lIXUN/btt763oIfxwN3RR8VU6wHX8j/1CFy0L+YuThm6bgOg==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      }
    },
    \"string.prototype.trimend\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trimend/-/string.prototype.trimend-1.0.6.tgz\",
      \"integrity\": \"sha512-JySq+4mrPf9EsDBEDYMOb/lM7XQLulwg5R/m1r0PXEFqrV0qHvl58sdTilSXtKOflCsK2E8jxf+GKC0T07RWwQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      }
    },
    \"string.prototype.trimstart\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trimstart/-/string.prototype.trimstart-1.0.6.tgz\",
      \"integrity\": \"sha512-omqjMDaY92pbn5HOX7f9IccLA+U1tA9GvtU4JrodiXFfYB7jPzzHpRzpglLAjtUV6bB557zwClJezTqnAiYnQA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      }
    },
    \"strip-bom\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-3.0.0.tgz\",
      \"integrity\": \"sha512-vavAMRXOgBVNF6nyEEmL3DBK19iRpDcoIwW+swQ+CbGiu7lju6t+JklA1MHweoWtadgt4ISVUsXLyDq34ddcwA==\",
      \"dev\": true
    },
    \"strip-indent\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/strip-indent/-/strip-indent-3.0.0.tgz\",
      \"integrity\": \"sha512-laJTa3Jb+VQpaC6DseHhF7dXVqHTfJPCRDaEbid/drOhgitgYku/letMUqOXFoWV0zIIUbjpdH2t+tYj4bQMRQ==\",
      \"dev\": true,
      \"requires\": {
        \"min-indent\": \"^1.0.0\"
      }
    },
    \"strip-json-comments\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-json-comments/-/strip-json-comments-3.1.1.tgz\",
      \"integrity\": \"sha512-6fPc+R4ihwqP6N/aIv2f1gMH8lOVtWQHoqC4yK6oSDVVocumAsfCqjkXnqiYMhmMwS/mEHLp7Vehlt3ql6lEig==\",
      \"dev\": true
    },
    \"style-loader\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/style-loader/-/style-loader-2.0.0.tgz\",
      \"integrity\": \"sha512-Z0gYUJmzZ6ZdRUqpg1r8GsaFKypE+3xAzuFeMuoHgjc9KZv3wMyCRjQIWEbhoFSq7+7yoHXySDJyyWQaPajeiQ==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^3.0.0\"
      }
    },
    \"supports-color\": {
      \"version\": \"5.5.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
      \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
      \"dev\": true,
      \"requires\": {
        \"has-flag\": \"^3.0.0\"
      }
    },
    \"supports-preserve-symlinks-flag\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-preserve-symlinks-flag/-/supports-preserve-symlinks-flag-1.0.0.tgz\",
      \"integrity\": \"sha512-ot0WnXS9fgdkgIcePe6RHNk1WA8+muPa6cSjeR3V8K27q9BB1rTE3R1p7Hv0z1ZyAc8s6Vvv8DIyWf681MAt0w==\",
      \"dev\": true
    },
    \"tapable\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/tapable/-/tapable-2.2.1.tgz\",
      \"integrity\": \"sha512-GNzQvQTOIP6RyTfE2Qxb8ZVlNmw0n88vp1szwWRimP02mnTsx3Wtn5qRdqY9w2XduFNUgvOwhNnQsjwCp+kqaQ==\",
      \"dev\": true
    },
    \"tar\": {
      \"version\": \"6.1.11\",
      \"resolved\": \"https://registry.npmjs.org/tar/-/tar-6.1.11.tgz\",
      \"integrity\": \"sha512-an/KZQzQUkZCkuoAA64hM92X0Urb6VpRhAFllDzz44U2mcD5scmT3zBc4VgVpkugF580+DQn8eAFSyoQt0tznA==\",
      \"dev\": true,
      \"requires\": {
        \"chownr\": \"^2.0.0\",
        \"fs-minipass\": \"^2.0.0\",
        \"minipass\": \"^3.0.0\",
        \"minizlib\": \"^2.1.1\",
        \"mkdirp\": \"^1.0.3\",
        \"yallist\": \"^4.0.0\"
      }
    },
    \"terser\": {
      \"version\": \"5.17.1\",
      \"resolved\": \"https://registry.npmjs.org/terser/-/terser-5.17.1.tgz\",
      \"integrity\": \"sha512-hVl35zClmpisy6oaoKALOpS0rDYLxRFLHhRuDlEGTKey9qHjS1w9GMORjuwIMt70Wan4lwsLYyWDVnWgF+KUEw==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/source-map\": \"^0.3.2\",
        \"acorn\": \"^8.5.0\",
        \"commander\": \"^2.20.0\",
        \"source-map-support\": \"~0.5.20\"
      },
      \"dependencies\": {
        \"commander\": {
          \"version\": \"2.20.3\",
          \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
          \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
          \"dev\": true
        }
      }
    },
    \"terser-webpack-plugin\": {
      \"version\": \"5.3.7\",
      \"resolved\": \"https://registry.npmjs.org/terser-webpack-plugin/-/terser-webpack-plugin-5.3.7.tgz\",
      \"integrity\": \"sha512-AfKwIktyP7Cu50xNjXF/6Qb5lBNzYaWpU6YfoX3uZicTx0zTy0stDDCsvjDapKsSDvOeWo5MEq4TmdBy2cNoHw==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"jest-worker\": \"^27.4.5\",
        \"schema-utils\": \"^3.1.1\",
        \"serialize-javascript\": \"^6.0.1\",
        \"terser\": \"^5.16.5\"
      },
      \"dependencies\": {
        \"serialize-javascript\": {
          \"version\": \"6.0.1\",
          \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-6.0.1.tgz\",
          \"integrity\": \"sha512-owoXEFjWRllis8/M1Q+Cw5k8ZH40e3zhp/ovX+Xr/vi1qj6QesbyXXViFbpNvWvPNAD62SutwEXavefrLJWj7w==\",
          \"dev\": true,
          \"requires\": {
            \"randombytes\": \"^2.1.0\"
          }
        }
      }
    },
    \"text-table\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/text-table/-/text-table-0.2.0.tgz\",
      \"integrity\": \"sha1-f17oI66AUgfACvLfSoTsP8+lcLQ=\",
      \"dev\": true
    },
    \"to-fast-properties\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-2.0.0.tgz\",
      \"integrity\": \"sha1-3F5pjL0HkmW8c+A3doGk5Og/YW4=\",
      \"dev\": true
    },
    \"trim-newlines\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/trim-newlines/-/trim-newlines-3.0.1.tgz\",
      \"integrity\": \"sha512-c1PTsA3tYrIsLGkJkzHF+w9F2EyxfXGo4UyJc4pFL++FMjnq0HJS69T3M7d//gKrFKwy429bouPescbjecU+Zw==\",
      \"dev\": true
    },
    \"true-case-path\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/true-case-path/-/true-case-path-2.2.1.tgz\",
      \"integrity\": \"sha512-0z3j8R7MCjy10kc/g+qg7Ln3alJTodw9aDuVWZa3uiWqfuBMKeAeP2ocWcxoyM3D73yz3Jt/Pu4qPr4wHSdB/Q==\",
      \"dev\": true
    },
    \"tsconfig-paths\": {
      \"version\": \"3.14.2\",
      \"resolved\": \"https://registry.npmjs.org/tsconfig-paths/-/tsconfig-paths-3.14.2.tgz\",
      \"integrity\": \"sha512-o/9iXgCYc5L/JxCHPe3Hvh8Q/2xm5Z+p18PESBU6Ff33695QnCHBEjcytY2q19ua7Mbl/DavtBOLq+oG0RCL+g==\",
      \"dev\": true,
      \"requires\": {
        \"@types/json5\": \"^0.0.29\",
        \"json5\": \"^1.0.2\",
        \"minimist\": \"^1.2.6\",
        \"strip-bom\": \"^3.0.0\"
      }
    },
    \"type-check\": {
      \"version\": \"0.4.0\",
      \"resolved\": \"https://registry.npmjs.org/type-check/-/type-check-0.4.0.tgz\",
      \"integrity\": \"sha512-XleUoc9uwGXqjWwXaUTZAmzMcFZ5858QA2vvx1Ur5xIcixXIP+8LnFDgRplU30us6teqdlskFfu+ae4K79Ooew==\",
      \"dev\": true,
      \"requires\": {
        \"prelude-ls\": \"^1.2.1\"
      }
    },
    \"type-detect\": {
      \"version\": \"4.0.8\",
      \"resolved\": \"https://registry.npmjs.org/type-detect/-/type-detect-4.0.8.tgz\",
      \"integrity\": \"sha512-0fr/mIH1dlO+x7TlcMy+bIDqKPsw/70tVyeHW787goQjhmqaZe10uwLujubK9q9Lg6Fiho1KUKDYz0Z7k7g5/g==\",
      \"dev\": true
    },
    \"type-fest\": {
      \"version\": \"0.20.2\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.20.2.tgz\",
      \"integrity\": \"sha512-Ne+eE4r0/iWnpAxD852z3A+N0Bt5RN//NjJwRd2VFHEmrywxf5vsZlh4R6lixl6B+wz/8d+maTSAkN1FIkI3LQ==\",
      \"dev\": true
    },
    \"typed-array-buffer\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-buffer/-/typed-array-buffer-1.0.0.tgz\",
      \"integrity\": \"sha512-Y8KTSIglk9OZEr8zywiIHG/kmQ7KWyjseXs1CbSo8vC42w7hg2HgYTxSWwP0+is7bWDc1H+Fo026CpHFwm8tkw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"get-intrinsic\": \"^1.2.1\",
        \"is-typed-array\": \"^1.1.10\"
      }
    },
    \"typed-array-byte-length\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-byte-length/-/typed-array-byte-length-1.0.0.tgz\",
      \"integrity\": \"sha512-Or/+kvLxNpeQ9DtSydonMxCx+9ZXOswtwJn17SNLvhptaXYDJvkFFP5zbfU/uLmvnBJlI4yrnXRxpdWH/M5tNA==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"has-proto\": \"^1.0.1\",
        \"is-typed-array\": \"^1.1.10\"
      }
    },
    \"typed-array-byte-offset\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-byte-offset/-/typed-array-byte-offset-1.0.0.tgz\",
      \"integrity\": \"sha512-RD97prjEt9EL8YgAgpOkf3O4IF9lhJFr9g0htQkm0rchFp/Vx7LW5Q8fSXXub7BXAODyUQohRMyOc3faCPd0hg==\",
      \"dev\": true,
      \"requires\": {
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"has-proto\": \"^1.0.1\",
        \"is-typed-array\": \"^1.1.10\"
      }
    },
    \"typed-array-length\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/typed-array-length/-/typed-array-length-1.0.4.tgz\",
      \"integrity\": \"sha512-KjZypGq+I/H7HI5HlOoGHkWUUGq+Q0TPhQurLbyrVrvnKTBgzLhIJ7j6J/XTQOi0d1RjyZ0wdas8bKs2p0x3Ng==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"is-typed-array\": \"^1.1.9\"
      }
    },
    \"unbox-primitive\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/unbox-primitive/-/unbox-primitive-1.0.2.tgz\",
      \"integrity\": \"sha512-61pPlCD9h51VoreyJ0BReideM3MDKMKnh6+V9L08331ipq6Q8OFXZYiqP6n/tbHx4s5I9uRhcye6BrbkizkBDw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"has-bigints\": \"^1.0.2\",
        \"has-symbols\": \"^1.0.3\",
        \"which-boxed-primitive\": \"^1.0.2\"
      }
    },
    \"unicode-canonical-property-names-ecmascript\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-canonical-property-names-ecmascript/-/unicode-canonical-property-names-ecmascript-2.0.0.tgz\",
      \"integrity\": \"sha512-yY5PpDlfVIU5+y/BSCxAJRBIS1Zc2dDG3Ujq+sR0U+JjUevW2JhocOF+soROYDSaAezOzOKuyyixhD6mBknSmQ==\",
      \"dev\": true
    },
    \"unicode-match-property-ecmascript\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-match-property-ecmascript/-/unicode-match-property-ecmascript-2.0.0.tgz\",
      \"integrity\": \"sha512-5kaZCrbp5mmbz5ulBkDkbY0SsPOjKqVS35VpL9ulMPfSl0J0Xsm+9Evphv9CoIZFwre7aJoa94AY6seMKGVN5Q==\",
      \"dev\": true,
      \"requires\": {
        \"unicode-canonical-property-names-ecmascript\": \"^2.0.0\",
        \"unicode-property-aliases-ecmascript\": \"^2.0.0\"
      }
    },
    \"unicode-match-property-value-ecmascript\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-match-property-value-ecmascript/-/unicode-match-property-value-ecmascript-2.1.0.tgz\",
      \"integrity\": \"sha512-qxkjQt6qjg/mYscYMC0XKRn3Rh0wFPlfxB0xkt9CfyTvpX1Ra0+rAmdX2QyAobptSEvuy4RtpPRui6XkV+8wjA==\",
      \"dev\": true
    },
    \"unicode-property-aliases-ecmascript\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/unicode-property-aliases-ecmascript/-/unicode-property-aliases-ecmascript-2.1.0.tgz\",
      \"integrity\": \"sha512-6t3foTQI9qne+OZoVQB/8x8rk2k1eVy1gRXhV3oFQ5T6R1dqQ1xtin3XqSlx3+ATBkliTaR/hHyJBm+LVPNM8w==\",
      \"dev\": true
    },
    \"unique-filename\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/unique-filename/-/unique-filename-1.1.1.tgz\",
      \"integrity\": \"sha512-Vmp0jIp2ln35UTXuryvjzkjGdRyf9b2lTXuSYUiPmzRcl3FDtYqAwOnTJkAngD9SWhnoJzDbTKwaOrZ+STtxNQ==\",
      \"dev\": true,
      \"requires\": {
        \"unique-slug\": \"^2.0.0\"
      }
    },
    \"unique-slug\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/unique-slug/-/unique-slug-2.0.2.tgz\",
      \"integrity\": \"sha512-zoWr9ObaxALD3DOPfjPSqxt4fnZiWblxHIgeWqW8x7UqDzEtHEQLzji2cuJYQFCU6KmoJikOYAZlrTHHebjx2w==\",
      \"dev\": true,
      \"requires\": {
        \"imurmurhash\": \"^0.1.4\"
      }
    },
    \"update-browserslist-db\": {
      \"version\": \"1.0.13\",
      \"resolved\": \"https://registry.npmjs.org/update-browserslist-db/-/update-browserslist-db-1.0.13.tgz\",
      \"integrity\": \"sha512-xebP81SNcPuNpPP3uzeW1NYXxI3rxyJzF3pD6sH4jE7o/IX+WtSpwnVU+qIsDPyk0d3hmFQ7mjqc6AtV604hbg==\",
      \"dev\": true,
      \"requires\": {
        \"escalade\": \"^3.1.1\",
        \"picocolors\": \"^1.0.0\"
      }
    },
    \"uri-js\": {
      \"version\": \"4.2.2\",
      \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.2.2.tgz\",
      \"integrity\": \"sha512-KY9Frmirql91X2Qgjry0Wd4Y+YTdrdZheS8TFwvkbLWf/G5KNJDCh6pKL5OZctEW4+0Baa5idK2ZQuELRwPznQ==\",
      \"dev\": true,
      \"requires\": {
        \"punycode\": \"^2.1.0\"
      }
    },
    \"util-deprecate\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
      \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
      \"dev\": true
    },
    \"v8flags\": {
      \"version\": \"3.2.0\",
      \"resolved\": \"https://registry.npmjs.org/v8flags/-/v8flags-3.2.0.tgz\",
      \"integrity\": \"sha512-mH8etigqMfiGWdeXpaaqGfs6BndypxusHHcv2qSHyZkGEznCd/qAXCWWRzeowtL54147cktFOC4P5y+kl8d8Jg==\",
      \"dev\": true,
      \"requires\": {
        \"homedir-polyfill\": \"^1.0.1\"
      }
    },
    \"validate-npm-package-license\": {
      \"version\": \"3.0.4\",
      \"resolved\": \"https://registry.npmjs.org/validate-npm-package-license/-/validate-npm-package-license-3.0.4.tgz\",
      \"integrity\": \"sha512-DpKm2Ui/xN7/HQKCtpZxoRWBhZ9Z0kqtygG8XCgNQ8ZlDnxuQmWhj566j8fN4Cu3/JmbhsDo7fcAJq4s9h27Ew==\",
      \"dev\": true,
      \"requires\": {
        \"spdx-correct\": \"^3.0.0\",
        \"spdx-expression-parse\": \"^3.0.0\"
      }
    },
    \"watchpack\": {
      \"version\": \"2.4.0\",
      \"resolved\": \"https://registry.npmjs.org/watchpack/-/watchpack-2.4.0.tgz\",
      \"integrity\": \"sha512-Lcvm7MGST/4fup+ifyKi2hjyIAwcdI4HRgtvTpIUxBRhB+RFtUh8XtDOxUfctVCnhVi+QQj49i91OyvzkJl6cg==\",
      \"dev\": true,
      \"requires\": {
        \"glob-to-regexp\": \"^0.4.1\",
        \"graceful-fs\": \"^4.1.2\"
      },
      \"dependencies\": {
        \"glob-to-regexp\": {
          \"version\": \"0.4.1\",
          \"resolved\": \"https://registry.npmjs.org/glob-to-regexp/-/glob-to-regexp-0.4.1.tgz\",
          \"integrity\": \"sha512-lkX1HJXwyMcprw/5YUZc2s7DrpAiHB21/V+E1rHUrVNokkvB6bqMzT0VfV6/86ZNabt1k14YOIaT7nDvOX3Iiw==\",
          \"dev\": true
        }
      }
    },
    \"webpack\": {
      \"version\": \"5.89.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack/-/webpack-5.89.0.tgz\",
      \"integrity\": \"sha512-qyfIC10pOr70V+jkmud8tMfajraGCZMBWJtrmuBymQKCrLTRejBI8STDp1MCyZu/QTdZSeacCQYpYNQVOzX5kw==\",
      \"dev\": true,
      \"requires\": {
        \"@types/eslint-scope\": \"^3.7.3\",
        \"@types/estree\": \"^1.0.0\",
        \"@webassemblyjs/ast\": \"^1.11.5\",
        \"@webassemblyjs/wasm-edit\": \"^1.11.5\",
        \"@webassemblyjs/wasm-parser\": \"^1.11.5\",
        \"acorn\": \"^8.7.1\",
        \"acorn-import-assertions\": \"^1.9.0\",
        \"browserslist\": \"^4.14.5\",
        \"chrome-trace-event\": \"^1.0.2\",
        \"enhanced-resolve\": \"^5.15.0\",
        \"es-module-lexer\": \"^1.2.1\",
        \"eslint-scope\": \"5.1.1\",
        \"events\": \"^3.2.0\",
        \"glob-to-regexp\": \"^0.4.1\",
        \"graceful-fs\": \"^4.2.9\",
        \"json-parse-even-better-errors\": \"^2.3.1\",
        \"loader-runner\": \"^4.2.0\",
        \"mime-types\": \"^2.1.27\",
        \"neo-async\": \"^2.6.2\",
        \"schema-utils\": \"^3.2.0\",
        \"tapable\": \"^2.1.1\",
        \"terser-webpack-plugin\": \"^5.3.7\",
        \"watchpack\": \"^2.4.0\",
        \"webpack-sources\": \"^3.2.3\"
      },
      \"dependencies\": {
        \"glob-to-regexp\": {
          \"version\": \"0.4.1\",
          \"resolved\": \"https://registry.npmjs.org/glob-to-regexp/-/glob-to-regexp-0.4.1.tgz\",
          \"integrity\": \"sha512-lkX1HJXwyMcprw/5YUZc2s7DrpAiHB21/V+E1rHUrVNokkvB6bqMzT0VfV6/86ZNabt1k14YOIaT7nDvOX3Iiw==\",
          \"dev\": true
        },
        \"webpack-sources\": {
          \"version\": \"3.2.3\",
          \"resolved\": \"https://registry.npmjs.org/webpack-sources/-/webpack-sources-3.2.3.tgz\",
          \"integrity\": \"sha512-/DyMEOrDgLKKIG0fmvtz+4dUX/3Ghozwgm6iPp8KRhvn+eQf9+Q7GWxVNMk3+uCPWfdXYC4ExGBckIXdFEfH1w==\",
          \"dev\": true
        }
      }
    },
    \"webpack-cli\": {
      \"version\": \"4.10.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack-cli/-/webpack-cli-4.10.0.tgz\",
      \"integrity\": \"sha512-NLhDfH/h4O6UOy+0LSso42xvYypClINuMNBVVzX4vX98TmTaTUxwRbXdhucbFMd2qLaCTcLq/PdYrvi8onw90w==\",
      \"dev\": true,
      \"requires\": {
        \"@discoveryjs/json-ext\": \"^0.5.0\",
        \"@webpack-cli/configtest\": \"^1.2.0\",
        \"@webpack-cli/info\": \"^1.5.0\",
        \"@webpack-cli/serve\": \"^1.7.0\",
        \"colorette\": \"^2.0.14\",
        \"commander\": \"^7.0.0\",
        \"cross-spawn\": \"^7.0.3\",
        \"fastest-levenshtein\": \"^1.0.12\",
        \"import-local\": \"^3.0.2\",
        \"interpret\": \"^2.2.0\",
        \"rechoir\": \"^0.7.0\",
        \"webpack-merge\": \"^5.7.3\"
      },
      \"dependencies\": {
        \"commander\": {
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/commander/-/commander-7.2.0.tgz\",
          \"integrity\": \"sha512-QrWXB+ZQSVPmIWIhtEO9H+gwHaMGYiF5ChvoJ+K9ZGHG/sVsa6yiesAD1GC/x46sET00Xlwo1u49RVVVzvcSkw==\",
          \"dev\": true
        }
      }
    },
    \"webpack-merge\": {
      \"version\": \"5.8.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack-merge/-/webpack-merge-5.8.0.tgz\",
      \"integrity\": \"sha512-/SaI7xY0831XwP6kzuwhKWVKDP9t1QY1h65lAFLbZqMPIuYcD9QAW4u9STIbU9kaJbPBB/geU/gLr1wDjOhQ+Q==\",
      \"dev\": true,
      \"requires\": {
        \"clone-deep\": \"^4.0.1\",
        \"wildcard\": \"^2.0.0\"
      }
    },
    \"webpack-sources\": {
      \"version\": \"1.4.3\",
      \"resolved\": \"https://registry.npmjs.org/webpack-sources/-/webpack-sources-1.4.3.tgz\",
      \"integrity\": \"sha512-lgTS3Xhv1lCOKo7SA5TjKXMjpSM4sBjNV5+q2bqesbSPs5FjGmU6jjtBSkX9b4qW87vDIsCIlUPOEhbZrMdjeQ==\",
      \"dev\": true,
      \"requires\": {
        \"source-list-map\": \"^2.0.0\",
        \"source-map\": \"~0.6.1\"
      },
      \"dependencies\": {
        \"source-map\": {
          \"version\": \"0.6.1\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
          \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
          \"dev\": true
        }
      }
    },
    \"which\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/which/-/which-2.0.2.tgz\",
      \"integrity\": \"sha512-BLI3Tl1TW3Pvl70l3yq3Y64i+awpwXqsGBYWkkqMtnbXgrMD+yj7rhW0kuEDxzJaYXGjEW5ogapKNMEKNMjibA==\",
      \"dev\": true,
      \"requires\": {
        \"isexe\": \"^2.0.0\"
      }
    },
    \"which-boxed-primitive\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/which-boxed-primitive/-/which-boxed-primitive-1.0.2.tgz\",
      \"integrity\": \"sha512-bwZdv0AKLpplFY2KZRX6TvyuN7ojjr7lwkg6ml0roIy9YeuSr7JS372qlNW18UQYzgYK9ziGcerWqZOmEn9VNg==\",
      \"dev\": true,
      \"requires\": {
        \"is-bigint\": \"^1.0.1\",
        \"is-boolean-object\": \"^1.1.0\",
        \"is-number-object\": \"^1.0.4\",
        \"is-string\": \"^1.0.5\",
        \"is-symbol\": \"^1.0.3\"
      }
    },
    \"which-typed-array\": {
      \"version\": \"1.1.11\",
      \"resolved\": \"https://registry.npmjs.org/which-typed-array/-/which-typed-array-1.1.11.tgz\",
      \"integrity\": \"sha512-qe9UWWpkeG5yzZ0tNYxDmd7vo58HDBc39mZ0xWWpolAGADdFOzkfamWLDxkOWcvHQKVmdTyQdLD4NOfjLWTKew==\",
      \"dev\": true,
      \"requires\": {
        \"available-typed-arrays\": \"^1.0.5\",
        \"call-bind\": \"^1.0.2\",
        \"for-each\": \"^0.3.3\",
        \"gopd\": \"^1.0.1\",
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"wide-align\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/wide-align/-/wide-align-1.1.5.tgz\",
      \"integrity\": \"sha512-eDMORYaPNZ4sQIuuYPDHdQvf4gyCF9rEEV/yPxGfwPkRodwEgiMUUXTx/dex+Me0wxx53S+NgUHaP7y3MGlDmg==\",
      \"dev\": true,
      \"requires\": {
        \"string-width\": \"^1.0.2 || 2 || 3 || 4\"
      }
    },
    \"wildcard\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/wildcard/-/wildcard-2.0.0.tgz\",
      \"integrity\": \"sha512-JcKqAHLPxcdb9KM49dufGXn2x3ssnfjbcaQdLlfZsL9rH9wgDQjUtDxbo8NE0F6SFvydeu1VhZe7hZuHsB2/pw==\",
      \"dev\": true
    },
    \"workerpool\": {
      \"version\": \"6.2.1\",
      \"resolved\": \"https://registry.npmjs.org/workerpool/-/workerpool-6.2.1.tgz\",
      \"integrity\": \"sha512-ILEIE97kDZvF9Wb9f6h5aXK4swSlKGUcOEGiIYb2OOu/IrDU9iwj0fD//SsA6E5ibwJxpEvhullJY4Sl4GcpAw==\",
      \"dev\": true
    },
    \"wrap-ansi\": {
      \"version\": \"7.0.0\",
      \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-7.0.0.tgz\",
      \"integrity\": \"sha512-YVGIj2kamLSTxw6NsZjoBxfSwsn0ycdesmc4p+Q21c5zPuZ1pl+NfxVdxPtdHvmNVOQ6XSYG4AUtyt/Fi7D16Q==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-styles\": \"^4.0.0\",
        \"string-width\": \"^4.1.0\",
        \"strip-ansi\": \"^6.0.0\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
          \"dev\": true
        },
        \"ansi-styles\": {
          \"version\": \"4.3.0\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-4.3.0.tgz\",
          \"integrity\": \"sha512-zbB9rCJAT1rbjiVDb2hqKFHNYLxgtk8NURxZ3IZwD3F6NtxbXZQCnnSi1Lkx+IDohdPlFp222wVALIheZJQSEg==\",
          \"dev\": true,
          \"requires\": {
            \"color-convert\": \"^2.0.1\"
          }
        },
        \"color-convert\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-2.0.1.tgz\",
          \"integrity\": \"sha512-RRECPsj7iu/xb5oKYcsFHSppFNnsj/52OVTRKb4zP5onXwVF3zVmmToNcOfGC+CRDpfK/U584fMg38ZHCaElKQ==\",
          \"dev\": true,
          \"requires\": {
            \"color-name\": \"~1.1.4\"
          }
        },
        \"color-name\": {
          \"version\": \"1.1.4\",
          \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.4.tgz\",
          \"integrity\": \"sha512-dOy+3AuW3a2wNbZHIuMZpTcgjGuLU/uBL/ubcZF9OXbDo8ff4O8yVp5Bf0efS8uEoYo5q4Fx7dY9OgQGXgAsQA==\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"6.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
          \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^5.0.1\"
          }
        }
      }
    },
    \"wrappy\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
      \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\",
      \"dev\": true
    },
    \"y18n\": {
      \"version\": \"5.0.8\",
      \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-5.0.8.tgz\",
      \"integrity\": \"sha512-0pfFzegeDWJHJIAmTLRP2DwHjdF5s7jo9tuztdQxAhINCdvS+3nGINqPd00AphqJR/0LhANUS6/+7SCb98YOfA==\",
      \"dev\": true
    },
    \"yallist\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-4.0.0.tgz\",
      \"integrity\": \"sha512-3wdGidZyq5PB084XLES5TpOSRA3wjXAlIWMhum2kRcv/41Sn2emQ0dycQW4uZXLejwKvg6EsvbdlVL+FYEct7A==\",
      \"dev\": true
    },
    \"yargs\": {
      \"version\": \"17.5.1\",
      \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-17.5.1.tgz\",
      \"integrity\": \"sha512-t6YAJcxDkNX7NFYiVtKvWUz8l+PaKTLiL63mJYWR2GnHq2gjEWISzsLp9wg3aY36dY1j+gfIEL3pIF+XlJJfbA==\",
      \"dev\": true,
      \"requires\": {
        \"cliui\": \"^7.0.2\",
        \"escalade\": \"^3.1.1\",
        \"get-caller-file\": \"^2.0.5\",
        \"require-directory\": \"^2.1.1\",
        \"string-width\": \"^4.2.3\",
        \"y18n\": \"^5.0.5\",
        \"yargs-parser\": \"^21.0.0\"
      },
      \"dependencies\": {
        \"yargs-parser\": {
          \"version\": \"21.1.1\",
          \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-21.1.1.tgz\",
          \"integrity\": \"sha512-tVpsJW7DdjecAiFpbIB1e3qxIQsE6NoPc5/eTdrbbIC4h0LVsWhnoa3g+m2HclBIujHzsxZ4VJVA+GUuc2/LBw==\",
          \"dev\": true
        }
      }
    },
    \"yargs-parser\": {
      \"version\": \"20.2.9\",
      \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-20.2.9.tgz\",
      \"integrity\": \"sha512-y11nGElTIV+CT3Zv9t7VKl+Q3hTQoT9a1Qzezhhl6Rp21gJ/IVTW7Z3y9EWXhuUBC2Shnf+DX0antecpAwSP8w==\",
      \"dev\": true
    },
    \"yargs-unparser\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/yargs-unparser/-/yargs-unparser-2.0.0.tgz\",
      \"integrity\": \"sha512-7pRTIA9Qc1caZ0bZ6RYRGbHJthJWuakf+WmHK0rVeLkNrrGhfoabBNdue6kdINI6r4if7ocq9aD/n7xwKOdzOA==\",
      \"dev\": true,
      \"requires\": {
        \"camelcase\": \"^6.0.0\",
        \"decamelize\": \"^4.0.0\",
        \"flat\": \"^5.0.2\",
        \"is-plain-obj\": \"^2.1.0\"
      },
      \"dependencies\": {
        \"camelcase\": {
          \"version\": \"6.2.0\",
          \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-6.2.0.tgz\",
          \"integrity\": \"sha512-c7wVvbw3f37nuobQNtgsgG9POC9qMbNuMQmTCqZv23b6MIz0fcYpBiOlv9gEN/hdLdnZTDQhg6e9Dq5M1vKvfg==\",
          \"dev\": true
        },
        \"decamelize\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-4.0.0.tgz\",
          \"integrity\": \"sha512-9iE1PgSik9HeIIw2JO94IidnE3eBoQrFJ3w7sFuzSX4DpmZ3v5sZpUiV5Swcf6mQEF+Y0ru8Neo+p+nyh2J+hQ==\",
          \"dev\": true
        },
        \"is-plain-obj\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/is-plain-obj/-/is-plain-obj-2.1.0.tgz\",
          \"integrity\": \"sha512-YWnfyRwxL/+SsrWYfOpUtz5b3YD+nyfkHvjbcanzk8zgyO4ASD67uVMRt8k5bM4lLMDnXfriRhOpemw+NfT1eA==\",
          \"dev\": true
        }
      }
    },
    \"yocto-queue\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/yocto-queue/-/yocto-queue-0.1.0.tgz\",
      \"integrity\": \"sha512-rVksvsnNCdJ/ohGc6xgPwyN8eheCxsiLM8mxuE/t/mOVqJewPuO1miLpTHQiRgTKCLexL4MeAFVagts7HmNZ2Q==\",
      \"dev\": true
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/package-lock.json";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/package-lock.json", "/var/www/html/modules/ps_facetedsearch/package-lock.json");
    }
}