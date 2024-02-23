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

/* @Modules/blockreassurance/package-lock.json */
class __TwigTemplate_b676413a2b526297f32cd5d52931d8e8 extends Template
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
  \"name\": \"blockreassurance\",
  \"lockfileVersion\": 2,
  \"requires\": true,
  \"packages\": {
    \"\": {
      \"name\": \"blockreassurance\",
      \"license\": \"AFL-3.0\",
      \"dependencies\": {
        \"sortablejs\": \"1.15.0\",
        \"vue\": \"^2.7.15\"
      },
      \"devDependencies\": {
        \"@babel/core\": \"^7.23.2\",
        \"@babel/eslint-parser\": \"^7.22.15\",
        \"babel-loader\": \"^9.1.3\",
        \"clean-webpack-plugin\": \"^4.0.0\",
        \"css-loader\": \"^6.7.4\",
        \"eslint\": \"^8.53.0\",
        \"eslint-config-airbnb-base\": \"^15.0.0\",
        \"eslint-config-prestashop\": \"^0.2.1\",
        \"eslint-plugin-import\": \"^2.29.0\",
        \"file-loader\": \"^6.2.0\",
        \"mini-css-extract-plugin\": \"^2.7.6\",
        \"node-sass\": \"^8.0.0\",
        \"sass-loader\": \"^13.3.2\",
        \"style-loader\": \"^3.3.3\",
        \"webpack\": \"^5.89.0\",
        \"webpack-cli\": \"^5.1.4\"
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
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/compat-data/-/compat-data-7.22.9.tgz\",
      \"integrity\": \"sha512-5UamI7xkUcJ3i9qVDS+KFDEK8/7oJ55/sJMB1Ge7IEapr7KfdfV/HErR+koZwOfd+SgtFKOKRhRakdg++DcJpQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/core\": {
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/core/-/core-7.23.2.tgz\",
      \"integrity\": \"sha512-n7s51eWdaWZ3vGT2tD4T7J6eJs3QoBXydv7vkUM06Bf1cbVD2Kc2UrkzhiQwobfV7NwOnQXYL7UBJ5VPU+RGoQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"@ampproject/remapping\": \"^2.2.0\",
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.0\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-module-transforms\": \"^7.23.0\",
        \"@babel/helpers\": \"^7.23.2\",
        \"@babel/parser\": \"^7.23.0\",
        \"@babel/template\": \"^7.22.15\",
        \"@babel/traverse\": \"^7.23.2\",
        \"@babel/types\": \"^7.23.0\",
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
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/eslint-parser/-/eslint-parser-7.22.15.tgz\",
      \"integrity\": \"sha512-yc8OOBIQk1EcRrpizuARSQS0TWAcOMpEJ1aafhNznaeYkeL+OhqnDObGFylB8ka8VFF/sZc+S4RzHyO+3LjQxg==\",
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
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/generator/-/generator-7.23.0.tgz\",
      \"integrity\": \"sha512-lN85QRR+5IbYrMWM6Y4pE/noaQtg4pNiqeNGX60eqOfo6gtEj6uw/JagelB8vVztSd7R6M5n1+PQkDbHbBRU4g==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/types\": \"^7.23.0\",
        \"@jridgewell/gen-mapping\": \"^0.3.2\",
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"jsesc\": \"^2.5.1\"
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
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-transforms/-/helper-module-transforms-7.23.0.tgz\",
      \"integrity\": \"sha512-WhDWw1tdrlT0gMgUJSlX0IQvoO1eN279zrAUbVB+KpV2c3Tylz8+GnKOLllCS6Z/iZQEyVYxhZVUdPTqs2YYPw==\",
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
    \"node_modules/@babel/parser\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/parser/-/parser-7.23.0.tgz\",
      \"integrity\": \"sha512-vvPKKdMemU85V9WE/l5wZEmImpCtLqbnTvqDS2U1fJ96KrxoW7KrXhNsNCblQlg8Ck4b85yxdTyelsMUgFUXiw==\",
      \"bin\": {
        \"parser\": \"bin/babel-parser.js\"
      },
      \"engines\": {
        \"node\": \">=6.0.0\"
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
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/traverse/-/traverse-7.23.2.tgz\",
      \"integrity\": \"sha512-azpe59SQ48qG6nu2CzcMLbxUudtN+dOM9kDbUqGq3HXUJRlo7i8fvPoxQUzYgLZ4cMVmuZgm8vvBpNeRhd6XSw==\",
      \"dev\": true,
      \"dependencies\": {
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.0\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/parser\": \"^7.23.0\",
        \"@babel/types\": \"^7.23.0\",
        \"debug\": \"^4.1.0\",
        \"globals\": \"^11.1.0\"
      },
      \"engines\": {
        \"node\": \">=6.9.0\"
      }
    },
    \"node_modules/@babel/types\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/types/-/types-7.23.0.tgz\",
      \"integrity\": \"sha512-0oIyUfKoI3mSqMvsxBdclDwxXKXAUA8v/apZbc+iSyARYou1o8ZGDxbUYyLFoW2arqS2jDGqJuZvv1d/io1axg==\",
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
      \"version\": \"0.5.5\",
      \"resolved\": \"https://registry.npmjs.org/@discoveryjs/json-ext/-/json-ext-0.5.5.tgz\",
      \"integrity\": \"sha512-6nFkfkmSeV/rqSaS4oWHgmpnYw194f6hmWF5is6b0J1naJZoiD0NTc9AiUwPHvWsowkjuHErCZT1wa0jg+BLIA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10.0.0\"
      }
    },
    \"node_modules/@eslint-community/eslint-utils\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint-community/eslint-utils/-/eslint-utils-4.2.0.tgz\",
      \"integrity\": \"sha512-gB8T4H4DEfX2IV9zGDJPOBgP1e/DbfCPDTtEqUMckpvzS1OYtva8JdFYBqMwYk7xAQ429WGF/UPqn8uQ//h2vQ==\",
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
    \"node_modules/@eslint/eslintrc/node_modules/type-fest\": {
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
    \"node_modules/@eslint/js\": {
      \"version\": \"8.53.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/js/-/js-8.53.0.tgz\",
      \"integrity\": \"sha512-Kn7K8dx/5U6+cT1yEhpX1w4PCSg0M+XyRILPgvwcEBjerFWCwQj5sbr3/VmxqV0JGHCBCzyd6LxypEuehypY1w==\",
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
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/set-array/-/set-array-1.1.2.tgz\",
      \"integrity\": \"sha512-xnkseuNADM0gt2bs+BvhO0p78Mk762YnZdsuzFV018NoG1Sj1SCQvpSqa7XUaTam5vAGasABV9qXASMKnFMwMw==\",
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
    \"node_modules/@nicolo-ribaudo/eslint-scope-5-internals\": {
      \"version\": \"5.1.1-v1\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/eslint-scope-5-internals/-/eslint-scope-5-internals-5.1.1-v1.tgz\",
      \"integrity\": \"sha512-54/JRvkLIzzDWshCWfuhadfrfZVPiElY8Fcgmg1HroEly/EDSszzhBAsarCux+D/kOslTRquNzuyGSmUSTTHGg==\",
      \"dev\": true,
      \"dependencies\": {
        \"eslint-scope\": \"5.1.1\"
      }
    },
    \"node_modules/@nicolo-ribaudo/eslint-scope-5-internals/node_modules/eslint-scope\": {
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
      \"version\": \"7.1.4\",
      \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.1.4.tgz\",
      \"integrity\": \"sha512-w+LsMxKyYQm347Otw+IfBXOv9UWVjpHpCDdbBMt8Kz/xbvCYNjP+0qPh91Km3iKfSRLBB0P7fAMf0KHrPu+MyA==\",
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
      \"version\": \"3.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.5.tgz\",
      \"integrity\": \"sha512-Klz949h02Gz2uZCMGwDUSDS1YBlTdDDgbWHi+81l29tQALUtvz4rAYi5uoVhE5Lagoq6DeqAUlbrHvW/mXDgdQ==\",
      \"dev\": true
    },
    \"node_modules/@types/minimist\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimist/-/minimist-1.2.1.tgz\",
      \"integrity\": \"sha512-fZQQafSREFyuZcdWFAExYjBiCL7AUCdgsk80iO0q4yihYYdcIiH28CcuPTGFgLOCC8RlW49GSQxdHwZP+I7CNg==\",
      \"dev\": true
    },
    \"node_modules/@types/node\": {
      \"version\": \"14.14.6\",
      \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-14.14.6.tgz\",
      \"integrity\": \"sha512-6QlRuqsQ/Ox/aJEQWBEJG7A9+u7oSYl3mem/K8IzxXG/kAGbV1YPD9Bg9Zw3vyxC/YP+zONKwy8hGkSt1jxFMw==\",
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
    \"node_modules/@vue/compiler-sfc\": {
      \"version\": \"2.7.15\",
      \"resolved\": \"https://registry.npmjs.org/@vue/compiler-sfc/-/compiler-sfc-2.7.15.tgz\",
      \"integrity\": \"sha512-FCvIEevPmgCgqFBH7wD+3B97y7u7oj/Wr69zADBf403Tui377bThTjBvekaZvlRr4IwUAu3M6hYZeULZFJbdYg==\",
      \"dependencies\": {
        \"@babel/parser\": \"^7.18.4\",
        \"postcss\": \"^8.4.14\",
        \"source-map\": \"^0.6.1\"
      }
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
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/configtest/-/configtest-2.1.1.tgz\",
      \"integrity\": \"sha512-wy0mglZpDSiSS0XHrVR+BAdId2+yxPSoJW8fsna3ZpYSlufjvxnP4YbKTCBZnNIcGN4r6ZPXV55X4mYExOfLmw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=14.15.0\"
      },
      \"peerDependencies\": {
        \"webpack\": \"5.x.x\",
        \"webpack-cli\": \"5.x.x\"
      }
    },
    \"node_modules/@webpack-cli/info\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/info/-/info-2.0.2.tgz\",
      \"integrity\": \"sha512-zLHQdI/Qs1UyT5UBdWNqsARasIA+AaF8t+4u2aS2nEpBQh2mWIVb8qAklq0eUENnC5mOItrIB4LiS9xMtph18A==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=14.15.0\"
      },
      \"peerDependencies\": {
        \"webpack\": \"5.x.x\",
        \"webpack-cli\": \"5.x.x\"
      }
    },
    \"node_modules/@webpack-cli/serve\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/serve/-/serve-2.0.5.tgz\",
      \"integrity\": \"sha512-lqaoKnRYBdo1UgDX8uF24AfGMifWK19TxPmM5FHc2vAGxrJ/qtyUyFBWoY1tISZdelsQ5fBcOusifo5o5wSJxQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=14.15.0\"
      },
      \"peerDependencies\": {
        \"webpack\": \"5.x.x\",
        \"webpack-cli\": \"5.x.x\"
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
      \"version\": \"8.8.1\",
      \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.8.1.tgz\",
      \"integrity\": \"sha512-6CiMNDrzv0ZR916u2T+iRunnD60uWmNn8SkdB44/6stVORUg0aAkWO7PkOhpCmjmW8f2I/G/xnowD66fxGyQJg==\",
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
    \"node_modules/ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
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
    \"node_modules/browserslist\": {
      \"version\": \"4.21.9\",
      \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.21.9.tgz\",
      \"integrity\": \"sha512-M0MFoZzbUrRU4KNfCrDLnvyE7gub+peetoTid3TBIqtunaDJyXlwhakT+/VkvSXcfIzFfK/nkCs4nmyTmxdNSg==\",
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
        \"caniuse-lite\": \"^1.0.30001503\",
        \"electron-to-chromium\": \"^1.4.431\",
        \"node-releases\": \"^2.0.12\",
        \"update-browserslist-db\": \"^1.0.11\"
      },
      \"bin\": {
        \"browserslist\": \"cli.js\"
      },
      \"engines\": {
        \"node\": \"^6 || ^7 || ^8 || ^9 || ^10 || ^11 || ^12 || >=13.7\"
      }
    },
    \"node_modules/buffer-from\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.2.tgz\",
      \"integrity\": \"sha512-E+XQCRwSbaaiChtv6k6Dwgc+bx+Bs6vuKJHHl5kox/BaKbhiXzqQOwK4cO22yElGp2OCmjwVhT3HmxgyPGnJfQ==\",
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
      \"version\": \"1.0.30001512\",
      \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001512.tgz\",
      \"integrity\": \"sha512-2S9nK0G/mE+jasCUsMPlARhRCts1ebcp2Ji8Y8PWi4NDE1iRdLCnEPHkEfeBrGC45L4isBx5ur3IQ6yTE2mRZw==\",
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
    \"node_modules/commander\": {
      \"version\": \"2.20.3\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
      \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
      \"dev\": true
    },
    \"node_modules/common-path-prefix\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/common-path-prefix/-/common-path-prefix-3.0.0.tgz\",
      \"integrity\": \"sha512-QE33hToZseCH3jS0qN96O/bSh3kaw/h+Tq7ngyY9eWDUnTlTNUyqfqvCXioLe5Na5jFsL78ra/wuBU4iuEgd4w==\",
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
      \"version\": \"6.7.4\",
      \"resolved\": \"https://registry.npmjs.org/css-loader/-/css-loader-6.7.4.tgz\",
      \"integrity\": \"sha512-0Y5uHtK5BswfaGJ+jrO+4pPg1msFBc0pwPIE1VqfpmVn6YbDfYfXMj8rfd7nt+4goAhJueO+H/I40VWJfcP1mQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"icss-utils\": \"^5.1.0\",
        \"postcss\": \"^8.4.21\",
        \"postcss-modules-extract-imports\": \"^3.0.0\",
        \"postcss-modules-local-by-default\": \"^4.0.1\",
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
    \"node_modules/csstype\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/csstype/-/csstype-3.1.0.tgz\",
      \"integrity\": \"sha512-uX1KG+x9h5hIJsaKR9xHUeUraxf8IODOwq9JLNPq6BwB04a/xgpq3rcx47l5BZu5zBPlgD342tdke3Hom/nJRA==\"
    },
    \"node_modules/debug\": {
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
      \"version\": \"1.4.450\",
      \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.450.tgz\",
      \"integrity\": \"sha512-BLG5HxSELlrMx7dJ2s+8SFlsCtJp37Zpk2VAxyC6CZtbc+9AJeZHfYHbrlSgdXp6saQ8StMqOTEDaBKgA7u1sw==\",
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
      \"version\": \"8.53.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint/-/eslint-8.53.0.tgz\",
      \"integrity\": \"sha512-N4VuiPjXDUa4xVeV/GC/RV3hQW9Nw+Y463lkWaKKXKYMvmRiRDAtfpuPFLN+E1/6ZhyR8J2ig+eVREnYgUsiag==\",
      \"dev\": true,
      \"dependencies\": {
        \"@eslint-community/eslint-utils\": \"^4.2.0\",
        \"@eslint-community/regexpp\": \"^4.6.1\",
        \"@eslint/eslintrc\": \"^2.1.3\",
        \"@eslint/js\": \"8.53.0\",
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
    \"node_modules/eslint-import-resolver-node/node_modules/debug\": {
      \"version\": \"3.2.7\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
      \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"^2.1.1\"
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
    \"node_modules/eslint-module-utils/node_modules/debug\": {
      \"version\": \"3.2.7\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
      \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"^2.1.1\"
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
    \"node_modules/eslint-plugin-import/node_modules/debug\": {
      \"version\": \"3.2.7\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
      \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"^2.1.1\"
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
    \"node_modules/eslint-scope/node_modules/estraverse\": {
      \"version\": \"5.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.3.0.tgz\",
      \"integrity\": \"sha512-MMdARuVEQziNTeJD8DgMqmhwR11BRQ/cBP+pLtYdSTnf3MIO8fFeiINEbX36ZdNlfU/7A9f3gUw49B3oQsvwBA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4.0\"
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
    \"node_modules/eslint/node_modules/type-fest\": {
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
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.2.0.tgz\",
      \"integrity\": \"sha512-BxbNGGNm0RyRYvUdHpIwv9IWzeM9XClbOxwoATuFdOE7ZE6wHL+HQ5T8hoPM+zHvmKzzsEqhgy0GrQ5X13afiQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4.0\"
      }
    },
    \"node_modules/estraverse\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.3.0.tgz\",
      \"integrity\": \"sha512-39nnKffWz8xN1BU/2c79n9nB9HDzo0niYUqx6xyqUnyoAnQyyWpOTdZEeiCch8BBu515t4wp9ZmgVfVhn9EBpw==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=4.0\"
      }
    },
    \"node_modules/esutils\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/esutils/-/esutils-2.0.3.tgz\",
      \"integrity\": \"sha512-kVscqXk4OCp68SZ0dkgEKVi6/8ij300KBWTJq32P/dYeWTSwK41WyTxalN1eRmA5Z9UU/LX9D7FWSmV9SAYx6g==\",
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
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.1.0.tgz\",
      \"integrity\": \"sha512-lhd/wF+Lk98HZoTCtlVraHtfh5XYijIjalXck7saUtuanSDyLMxnHhSXEDJqHxD7msR8D0uCmqlkwjCV8xvwHw==\",
      \"dev\": true
    },
    \"node_modules/fast-levenshtein\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/fast-levenshtein/-/fast-levenshtein-2.0.6.tgz\",
      \"integrity\": \"sha512-DCXu6Ifhqcks7TZKY3Hxp3y6qphY5SJZmrWMDrKcERSOXWQdMhU9Ig/PYrzyw/ul9jOIyh0N4M0tbC5hodg8dw==\",
      \"dev\": true
    },
    \"node_modules/fastest-levenshtein\": {
      \"version\": \"1.0.12\",
      \"resolved\": \"https://registry.npmjs.org/fastest-levenshtein/-/fastest-levenshtein-1.0.12.tgz\",
      \"integrity\": \"sha512-On2N+BpYJ15xIC974QNVuYGMOlEVt4s0EOI3wwMqOmK1fdDY+FN/zltPV8vosq4ad4c/gJ1KHScUn/6AWIgiow==\",
      \"dev\": true
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
    \"node_modules/file-loader\": {
      \"version\": \"6.2.0\",
      \"resolved\": \"https://registry.npmjs.org/file-loader/-/file-loader-6.2.0.tgz\",
      \"integrity\": \"sha512-qo3glqyTa61Ytg4u73GultjHGjdRyig3tG6lPtyX/jOEJvHif9uB0/OCI2Kif6ctF3caQTW2G5gym21oAsI4pw==\",
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
    \"node_modules/file-loader/node_modules/schema-utils\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.0.0.tgz\",
      \"integrity\": \"sha512-6D82/xSzO094ajanoOSbe4YvXWMfn2A//8Y1+MUqFAJul5Bs+yn36xbK9OtNDcRVSBJ9jjeoXftM6CfztsjOAA==\",
      \"dev\": true,
      \"dependencies\": {
        \"@types/json-schema\": \"^7.0.6\",
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
    \"node_modules/find-cache-dir\": {
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
    \"node_modules/find-cache-dir/node_modules/find-up\": {
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
    \"node_modules/find-cache-dir/node_modules/locate-path\": {
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
    \"node_modules/find-cache-dir/node_modules/p-limit\": {
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
    \"node_modules/find-cache-dir/node_modules/p-locate\": {
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
    \"node_modules/find-cache-dir/node_modules/pkg-dir\": {
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
    \"node_modules/find-cache-dir/node_modules/yocto-queue\": {
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
    \"node_modules/find-up\": {
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
    \"node_modules/find-up/node_modules/path-exists\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
      \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
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
    \"node_modules/fs.realpath\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
      \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
      \"dev\": true
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
      \"version\": \"7.1.6\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.6.tgz\",
      \"integrity\": \"sha512-LwaxwyZ72Lk7vZINtNNrywX0ZuLyStrdDtabefZKAY5ZGJhVtgdznluResxNmPitE0SAO+O26sWTHeKSI2wMBA==\",
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
    \"node_modules/glob-parent\": {
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
    \"node_modules/glob-to-regexp\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/glob-to-regexp/-/glob-to-regexp-0.4.1.tgz\",
      \"integrity\": \"sha512-lkX1HJXwyMcprw/5YUZc2s7DrpAiHB21/V+E1rHUrVNokkvB6bqMzT0VfV6/86ZNabt1k14YOIaT7nDvOX3Iiw==\",
      \"dev\": true
    },
    \"node_modules/globals\": {
      \"version\": \"11.12.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-11.12.0.tgz\",
      \"integrity\": \"sha512-WOBp/EEGUiIsJSp7wcv/y6MO+lV9UoncWqxuFfm8eBwzWNgyfBd6Gz+IeKQ9jCmyhoH99g15M3T+QaVHFjizVA==\",
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
    \"node_modules/globby/node_modules/pify\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
      \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
      \"dev\": true,
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
    \"node_modules/hosted-git-info\": {
      \"version\": \"2.8.9\",
      \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.8.9.tgz\",
      \"integrity\": \"sha512-mxIDAb9Lsm6DoOJ7xH+5+X4y1LU/4Hi50L9C5sIswK3JzULS4bwk1FvjdBgvYR4bzT4tuUQiC15FE2f5HbLvYw==\",
      \"dev\": true
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
    \"node_modules/humanize-ms\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/humanize-ms/-/humanize-ms-1.2.1.tgz\",
      \"integrity\": \"sha512-Fl70vYtsAFb/C06PTS9dZBo7ihau+Tu/DNCk/OyHhea07S+aeMWpFFkUaXRa8fI+ScZbEI8dfSxwY7gxZ9SAVQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"ms\": \"^2.0.0\"
      }
    },
    \"node_modules/iconv-lite\": {
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
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/import-local/-/import-local-3.0.3.tgz\",
      \"integrity\": \"sha512-bE9iaUY3CXH8Cwfan/abDKAxe1KGT9kyGsBPqf6DMK/z0a2OzAsrukeYNgIH6cH5Xr452jb1TUL8rSfCLjZ9uA==\",
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
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
      \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
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
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-3.1.1.tgz\",
      \"integrity\": \"sha512-6xwYfHbajpoF0xLW+iwLkhwgvLoZDfjYfoFNu8ftMoXINzwuymNLd9u/KmwtdT2GbR+/Cz66otEGEVVUHX9QLQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10.13.0\"
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
    \"node_modules/locate-path\": {
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
    \"node_modules/lodash\": {
      \"version\": \"4.17.21\",
      \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.21.tgz\",
      \"integrity\": \"sha512-v2kDEe57lecTulaDIuNTPy3Ry4gLGJ6Z1O3vE1krgXZNrsQ+LFTGHVxVjcXPs17LhbZVGedAJv8XZ1tvj5FvSg==\",
      \"dev\": true
    },
    \"node_modules/lodash.merge\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.merge/-/lodash.merge-4.6.2.tgz\",
      \"integrity\": \"sha512-0KpjqXRVvrYyCsX1swR/XTK0va6VQkQM6MNo7PqW77ByjAhoARA8EfrP1N4+KlKj8YS0ZUCtRT/YUuhyYDujIQ==\",
      \"dev\": true
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
      \"version\": \"2.7.6\",
      \"resolved\": \"https://registry.npmjs.org/mini-css-extract-plugin/-/mini-css-extract-plugin-2.7.6.tgz\",
      \"integrity\": \"sha512-Qk7HcgaPkGG6eD77mLvZS1nmxlao3j+9PkrT9Uc7HAE1id3F41+DdBRYRYkbyfNRGzm8/YWtzhw7nVPmwhqTQw==\",
      \"dev\": true,
      \"dependencies\": {
        \"schema-utils\": \"^4.0.0\"
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
    \"node_modules/ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"node_modules/nan\": {
      \"version\": \"2.17.0\",
      \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.17.0.tgz\",
      \"integrity\": \"sha512-2ZTgtl0nJsO0KQCjEpxcIr5D+Yv90plTitZt9JBfQvVJDS5seMl3FOvsh3+9CoYWXf/1l5OaZzzF6nDm4cagaQ==\",
      \"dev\": true
    },
    \"node_modules/nanoid\": {
      \"version\": \"3.3.6\",
      \"resolved\": \"https://registry.npmjs.org/nanoid/-/nanoid-3.3.6.tgz\",
      \"integrity\": \"sha512-BGcqMMJuToF7i1rt+2PWSNVnWIkGCU78jBG3RxO/bZlnZPK2Cmi2QaffxGO/2RvWi9sL+FAiRiXMgsyxQ1DIDA==\",
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
    \"node_modules/node-releases\": {
      \"version\": \"2.0.12\",
      \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.12.tgz\",
      \"integrity\": \"sha512-QzsYKWhXTWx8h1kIvqfnC++o0pEmpRQA/aenALsL2F4pqNVr7YzcdMlDij5WBnwftRbJCNJL/O7zdKaxKPHqgQ==\",
      \"dev\": true
    },
    \"node_modules/node-sass\": {
      \"version\": \"8.0.0\",
      \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-8.0.0.tgz\",
      \"integrity\": \"sha512-jPzqCF2/e6JXw6r3VxfIqYc8tKQdkj5Z/BDATYyG6FL6b/LuYBNFGFVhus0mthcWifHm/JzBpKAd+3eXsWeK/A==\",
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
        \"node\": \">=14\"
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
    \"node_modules/normalize-package-data\": {
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
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.3.0.tgz\",
      \"integrity\": \"sha512-//88mFWSJx8lxCzwdAABTJL2MyWB12+eIY7MDL2SqLmAkeKU9qxRvWuSyTjm3FUmpBEMuFfckAIqEaVGUDxb6w==\",
      \"dev\": true,
      \"dependencies\": {
        \"p-try\": \"^2.0.0\"
      },
      \"engines\": {
        \"node\": \">=6\"
      },
      \"funding\": {
        \"url\": \"https://github.com/sponsors/sindresorhus\"
      }
    },
    \"node_modules/p-locate\": {
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
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
      \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
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
    \"node_modules/path-exists\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-5.0.0.tgz\",
      \"integrity\": \"sha512-RjhtfwJOxzcFmNOi6ltcbcu4Iu+FL3zEj83dk4kAS+fVpTxXLO1b38RvJgT/0QwvV/L3aY9TAnyv0EOqW4GoMQ==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \"^12.20.0 || ^14.13.1 || >=16.0.0\"
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
    \"node_modules/picocolors\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-1.0.0.tgz\",
      \"integrity\": \"sha512-1fygroTLlHu66zi26VoTDv8yRgm0Fccecssto+MhsZ0D/DGW2sm8E8AjW7NU5VVTRt5GxbeZ5qBuJr+HyLYkjQ==\"
    },
    \"node_modules/pify\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
      \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=6\"
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
    \"node_modules/pkg-dir\": {
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
    \"node_modules/postcss\": {
      \"version\": \"8.4.31\",
      \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-8.4.31.tgz\",
      \"integrity\": \"sha512-PS08Iboia9mts/2ygV3eLpY5ghnUcfLV/EXTOW1E2qYxJKGGBUtNjN76FYHnMs36RmARn41bC0AZmn+rR0OVpQ==\",
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
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-local-by-default/-/postcss-modules-local-by-default-4.0.1.tgz\",
      \"integrity\": \"sha512-Zr/dB+IlXaEqdoslLHhhqecwj73vc3rDmOpsBNBEVk7P2aqAlz+Ijy0fFbU5Ie9PtreDOIgGa9MsLWakVGl+fA==\",
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
    \"node_modules/prelude-ls\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/prelude-ls/-/prelude-ls-1.2.1.tgz\",
      \"integrity\": \"sha512-vkcDPrRZo1QZLbn5RLGPpg/WmIQ65qoWWhcGKf/b5eplkkarX0m9z8ppCat4mlOqUsWpyNuYgO3VRyrYHSzX5g==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">= 0.8.0\"
      }
    },
    \"node_modules/process-nextick-args\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.1.tgz\",
      \"integrity\": \"sha512-3ouUOpQhtgrbOa17J7+uxOTpITYWaGP7/AhoR3+A+/1e9skrzelGi/dXzEYyvbxubEF6Wn2ypscTKiKJFFn1ag==\",
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
    \"node_modules/read-pkg\": {
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
    \"node_modules/read-pkg-up\": {
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
    \"node_modules/read-pkg-up/node_modules/type-fest\": {
      \"version\": \"0.8.1\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.8.1.tgz\",
      \"integrity\": \"sha512-4dbzIzqvjtgiM5rw1k5rEHtBANKmdudhGyBEajN01fEyhaAIhsoKNy6y7+IN93IfpFtwY9iqi7kD+xwKhQsNJA==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/read-pkg/node_modules/type-fest\": {
      \"version\": \"0.6.0\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.6.0.tgz\",
      \"integrity\": \"sha512-q+MB8nYR1KDLrgr4G5yemftpMC7/QLqVndBmEEdqzmNj5dcFOO4Oo8qlwZE3ULT3+Zim1F8Kq4cBnikNhlCMlg==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=8\"
      }
    },
    \"node_modules/readable-stream\": {
      \"version\": \"2.3.7\",
      \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.7.tgz\",
      \"integrity\": \"sha512-Ebho8K4jIbHAxnuxi7o42OrZgF/ZTNcsZj6nRKyUmkhLFq8CHItp/fy6hQZuZmP/n3yZ9VBUbp4zz/mX8hmYPw==\",
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
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.8.0.tgz\",
      \"integrity\": \"sha512-/vxpCXddiX8NGfGO/mTafwjq4aFa/71pvamip0++IQk3zG8cbCj0fifNPrjjF1XMXUne91jL9OoxmdykoEtifQ==\",
      \"dev\": true,
      \"dependencies\": {
        \"resolve\": \"^1.20.0\"
      },
      \"engines\": {
        \"node\": \">= 10.13.0\"
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
    \"node_modules/require-directory\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
      \"integrity\": \"sha512-fGxEI7+wsG9xrvdjsrlmL22OMTTiHRwAMroiEeMgq8gzoLC/PQr7RsRDSTLUg/bZAZtF+TVIkHc6/4RIKrui+Q==\",
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
      \"version\": \"2.7.1\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
      \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
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
    \"node_modules/schema-utils/node_modules/ajv\": {
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
    \"node_modules/schema-utils/node_modules/ajv-keywords\": {
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
    \"node_modules/schema-utils/node_modules/json-schema-traverse\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
      \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
      \"dev\": true
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
      \"version\": \"5.7.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
      \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
      \"dev\": true,
      \"bin\": {
        \"semver\": \"bin/semver\"
      }
    },
    \"node_modules/serialize-javascript\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-6.0.1.tgz\",
      \"integrity\": \"sha512-owoXEFjWRllis8/M1Q+Cw5k8ZH40e3zhp/ovX+Xr/vi1qj6QesbyXXViFbpNvWvPNAD62SutwEXavefrLJWj7w==\",
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
    \"node_modules/sortablejs\": {
      \"version\": \"1.15.0\",
      \"resolved\": \"https://registry.npmjs.org/sortablejs/-/sortablejs-1.15.0.tgz\",
      \"integrity\": \"sha512-bv9qgVMjUMf89wAvM6AxVvS/4MX3sPeN0+agqShejLU5z5GX4C75ow1O2e5k4L6XItUyAK3gH6AxSbXrOM5e8w==\"
    },
    \"node_modules/source-map\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
      \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
      \"engines\": {
        \"node\": \">=0.10.0\"
      }
    },
    \"node_modules/source-map-js\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/source-map-js/-/source-map-js-1.0.2.tgz\",
      \"integrity\": \"sha512-R0XvVJ9WusLiqTCEiGCmICCMplcCkIwwR11mOSD9CR5u+IXYdiseeEuXCVAjS54zqwkLcPNnmU4OeJ6tUrWhDw==\",
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
      \"version\": \"3.0.6\",
      \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.6.tgz\",
      \"integrity\": \"sha512-+orQK83kyMva3WyPf59k1+Y525csj5JejicWut55zeTWANuN17qSiSLUXWtzHeNWORSvT7GLDJ/E/XiIWoXBTw==\",
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
    \"node_modules/strip-ansi\": {
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
      \"version\": \"3.3.3\",
      \"resolved\": \"https://registry.npmjs.org/style-loader/-/style-loader-3.3.3.tgz\",
      \"integrity\": \"sha512-53BiGLXAcll9maCYtZi2RCQZKa8NQQai5C4horqKyRmHj9H7QmcUyucrH+4KW/gBQbXM2AsB0axoEcFZPlfPcw==\",
      \"dev\": true,
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
    \"node_modules/terser-webpack-plugin/node_modules/schema-utils\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.1.2.tgz\",
      \"integrity\": \"sha512-pvjEHOgWc9OWA/f/DE3ohBWTD6EleVLf7iFUkoSwAxttdBhB9QUebQgxER2kWueOvRJXPHNnyrvvh9eZINB8Eg==\",
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
    \"node_modules/text-table\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/text-table/-/text-table-0.2.0.tgz\",
      \"integrity\": \"sha1-f17oI66AUgfACvLfSoTsP8+lcLQ=\",
      \"dev\": true
    },
    \"node_modules/to-fast-properties\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-2.0.0.tgz\",
      \"integrity\": \"sha512-/OaKK0xYrs3DmxRYqL/yDc+FxFUVYhDlXMhRmv3z915w2HF1tnN1omB354j8VUGO/hbRzyD6Y3sA7v7GS/ceog==\",
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
    \"node_modules/tsconfig-paths/node_modules/json5\": {
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
    \"node_modules/type-fest\": {
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
      \"version\": \"1.0.11\",
      \"resolved\": \"https://registry.npmjs.org/update-browserslist-db/-/update-browserslist-db-1.0.11.tgz\",
      \"integrity\": \"sha512-dCwEFf0/oT85M1fHBg4F0jtLwJrutGoHSQXCh7u4o2t1drG+c0a9Flnqww6XUKSfQMPpJBRjU8d4RXB09qtvaA==\",
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
      \"version\": \"4.4.0\",
      \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.4.0.tgz\",
      \"integrity\": \"sha512-B0yRTzYdUCCn9n+F4+Gh4yIDtMQcaJsmYBDsTSG8g/OejKBodLQ2IHfN3bM7jUsRXndopT7OIXWdYqc1fjmV6g==\",
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
    \"node_modules/vue\": {
      \"version\": \"2.7.15\",
      \"resolved\": \"https://registry.npmjs.org/vue/-/vue-2.7.15.tgz\",
      \"integrity\": \"sha512-a29fsXd2G0KMRqIFTpRgpSbWaNBK3lpCTOLuGLEDnlHWdjB8fwl6zyYZ8xCrqkJdatwZb4mGHiEfJjnw0Q6AwQ==\",
      \"dependencies\": {
        \"@vue/compiler-sfc\": \"2.7.15\",
        \"csstype\": \"^3.1.0\"
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
      \"version\": \"5.1.4\",
      \"resolved\": \"https://registry.npmjs.org/webpack-cli/-/webpack-cli-5.1.4.tgz\",
      \"integrity\": \"sha512-pIDJHIEI9LR0yxHXQ+Qh95k2EvXpWzZ5l+d+jIo+RdSm9MiHfzazIxwwni/p7+x4eJZuvG1AJwgC4TNQ7NRgsg==\",
      \"dev\": true,
      \"dependencies\": {
        \"@discoveryjs/json-ext\": \"^0.5.0\",
        \"@webpack-cli/configtest\": \"^2.1.1\",
        \"@webpack-cli/info\": \"^2.0.2\",
        \"@webpack-cli/serve\": \"^2.0.5\",
        \"colorette\": \"^2.0.14\",
        \"commander\": \"^10.0.1\",
        \"cross-spawn\": \"^7.0.3\",
        \"envinfo\": \"^7.7.3\",
        \"fastest-levenshtein\": \"^1.0.12\",
        \"import-local\": \"^3.0.2\",
        \"interpret\": \"^3.1.1\",
        \"rechoir\": \"^0.8.0\",
        \"webpack-merge\": \"^5.7.3\"
      },
      \"bin\": {
        \"webpack-cli\": \"bin/cli.js\"
      },
      \"engines\": {
        \"node\": \">=14.15.0\"
      },
      \"funding\": {
        \"type\": \"opencollective\",
        \"url\": \"https://opencollective.com/webpack\"
      },
      \"peerDependencies\": {
        \"webpack\": \"5.x.x\"
      },
      \"peerDependenciesMeta\": {
        \"@webpack-cli/generators\": {
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
    \"node_modules/webpack-cli/node_modules/colorette\": {
      \"version\": \"2.0.16\",
      \"resolved\": \"https://registry.npmjs.org/colorette/-/colorette-2.0.16.tgz\",
      \"integrity\": \"sha512-hUewv7oMjCp+wkBv5Rm0v87eJhq4woh5rSR+42YSQJKecCqgIqNkZ6lAlQms/BwHPJA5NKMRlpxPRv0n8HQW6g==\",
      \"dev\": true
    },
    \"node_modules/webpack-cli/node_modules/commander\": {
      \"version\": \"10.0.1\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-10.0.1.tgz\",
      \"integrity\": \"sha512-y4Mg2tXshplEbSGzx7amzPwKKOCGuoSRP/CjEdwwk0FOGlUbq6lKuoyDZTNZkmxHdJtp54hdfY/JUrdL7Xfdug==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=14\"
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
      \"version\": \"3.2.3\",
      \"resolved\": \"https://registry.npmjs.org/webpack-sources/-/webpack-sources-3.2.3.tgz\",
      \"integrity\": \"sha512-/DyMEOrDgLKKIG0fmvtz+4dUX/3Ghozwgm6iPp8KRhvn+eQf9+Q7GWxVNMk3+uCPWfdXYC4ExGBckIXdFEfH1w==\",
      \"dev\": true,
      \"engines\": {
        \"node\": \">=10.13.0\"
      }
    },
    \"node_modules/webpack/node_modules/eslint-scope\": {
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
    \"node_modules/webpack/node_modules/schema-utils\": {
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
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/compat-data/-/compat-data-7.22.9.tgz\",
      \"integrity\": \"sha512-5UamI7xkUcJ3i9qVDS+KFDEK8/7oJ55/sJMB1Ge7IEapr7KfdfV/HErR+koZwOfd+SgtFKOKRhRakdg++DcJpQ==\",
      \"dev\": true
    },
    \"@babel/core\": {
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/core/-/core-7.23.2.tgz\",
      \"integrity\": \"sha512-n7s51eWdaWZ3vGT2tD4T7J6eJs3QoBXydv7vkUM06Bf1cbVD2Kc2UrkzhiQwobfV7NwOnQXYL7UBJ5VPU+RGoQ==\",
      \"dev\": true,
      \"requires\": {
        \"@ampproject/remapping\": \"^2.2.0\",
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.0\",
        \"@babel/helper-compilation-targets\": \"^7.22.15\",
        \"@babel/helper-module-transforms\": \"^7.23.0\",
        \"@babel/helpers\": \"^7.23.2\",
        \"@babel/parser\": \"^7.23.0\",
        \"@babel/template\": \"^7.22.15\",
        \"@babel/traverse\": \"^7.23.2\",
        \"@babel/types\": \"^7.23.0\",
        \"convert-source-map\": \"^2.0.0\",
        \"debug\": \"^4.1.0\",
        \"gensync\": \"^1.0.0-beta.2\",
        \"json5\": \"^2.2.3\",
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
    \"@babel/eslint-parser\": {
      \"version\": \"7.22.15\",
      \"resolved\": \"https://registry.npmjs.org/@babel/eslint-parser/-/eslint-parser-7.22.15.tgz\",
      \"integrity\": \"sha512-yc8OOBIQk1EcRrpizuARSQS0TWAcOMpEJ1aafhNznaeYkeL+OhqnDObGFylB8ka8VFF/sZc+S4RzHyO+3LjQxg==\",
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
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/generator/-/generator-7.23.0.tgz\",
      \"integrity\": \"sha512-lN85QRR+5IbYrMWM6Y4pE/noaQtg4pNiqeNGX60eqOfo6gtEj6uw/JagelB8vVztSd7R6M5n1+PQkDbHbBRU4g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.23.0\",
        \"@jridgewell/gen-mapping\": \"^0.3.2\",
        \"@jridgewell/trace-mapping\": \"^0.3.17\",
        \"jsesc\": \"^2.5.1\"
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
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-transforms/-/helper-module-transforms-7.23.0.tgz\",
      \"integrity\": \"sha512-WhDWw1tdrlT0gMgUJSlX0IQvoO1eN279zrAUbVB+KpV2c3Tylz8+GnKOLllCS6Z/iZQEyVYxhZVUdPTqs2YYPw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-module-imports\": \"^7.22.15\",
        \"@babel/helper-simple-access\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\"
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
    \"@babel/parser\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/parser/-/parser-7.23.0.tgz\",
      \"integrity\": \"sha512-vvPKKdMemU85V9WE/l5wZEmImpCtLqbnTvqDS2U1fJ96KrxoW7KrXhNsNCblQlg8Ck4b85yxdTyelsMUgFUXiw==\"
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
      \"version\": \"7.23.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/traverse/-/traverse-7.23.2.tgz\",
      \"integrity\": \"sha512-azpe59SQ48qG6nu2CzcMLbxUudtN+dOM9kDbUqGq3HXUJRlo7i8fvPoxQUzYgLZ4cMVmuZgm8vvBpNeRhd6XSw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.22.13\",
        \"@babel/generator\": \"^7.23.0\",
        \"@babel/helper-environment-visitor\": \"^7.22.20\",
        \"@babel/helper-function-name\": \"^7.23.0\",
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/parser\": \"^7.23.0\",
        \"@babel/types\": \"^7.23.0\",
        \"debug\": \"^4.1.0\",
        \"globals\": \"^11.1.0\"
      }
    },
    \"@babel/types\": {
      \"version\": \"7.23.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/types/-/types-7.23.0.tgz\",
      \"integrity\": \"sha512-0oIyUfKoI3mSqMvsxBdclDwxXKXAUA8v/apZbc+iSyARYou1o8ZGDxbUYyLFoW2arqS2jDGqJuZvv1d/io1axg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-string-parser\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.20\",
        \"to-fast-properties\": \"^2.0.0\"
      }
    },
    \"@discoveryjs/json-ext\": {
      \"version\": \"0.5.5\",
      \"resolved\": \"https://registry.npmjs.org/@discoveryjs/json-ext/-/json-ext-0.5.5.tgz\",
      \"integrity\": \"sha512-6nFkfkmSeV/rqSaS4oWHgmpnYw194f6hmWF5is6b0J1naJZoiD0NTc9AiUwPHvWsowkjuHErCZT1wa0jg+BLIA==\",
      \"dev\": true
    },
    \"@eslint-community/eslint-utils\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint-community/eslint-utils/-/eslint-utils-4.2.0.tgz\",
      \"integrity\": \"sha512-gB8T4H4DEfX2IV9zGDJPOBgP1e/DbfCPDTtEqUMckpvzS1OYtva8JdFYBqMwYk7xAQ429WGF/UPqn8uQ//h2vQ==\",
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
        \"type-fest\": {
          \"version\": \"0.20.2\",
          \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.20.2.tgz\",
          \"integrity\": \"sha512-Ne+eE4r0/iWnpAxD852z3A+N0Bt5RN//NjJwRd2VFHEmrywxf5vsZlh4R6lixl6B+wz/8d+maTSAkN1FIkI3LQ==\",
          \"dev\": true
        }
      }
    },
    \"@eslint/js\": {
      \"version\": \"8.53.0\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/js/-/js-8.53.0.tgz\",
      \"integrity\": \"sha512-Kn7K8dx/5U6+cT1yEhpX1w4PCSg0M+XyRILPgvwcEBjerFWCwQj5sbr3/VmxqV0JGHCBCzyd6LxypEuehypY1w==\",
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
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/set-array/-/set-array-1.1.2.tgz\",
      \"integrity\": \"sha512-xnkseuNADM0gt2bs+BvhO0p78Mk762YnZdsuzFV018NoG1Sj1SCQvpSqa7XUaTam5vAGasABV9qXASMKnFMwMw==\",
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
    \"@nicolo-ribaudo/eslint-scope-5-internals\": {
      \"version\": \"5.1.1-v1\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/eslint-scope-5-internals/-/eslint-scope-5-internals-5.1.1-v1.tgz\",
      \"integrity\": \"sha512-54/JRvkLIzzDWshCWfuhadfrfZVPiElY8Fcgmg1HroEly/EDSszzhBAsarCux+D/kOslTRquNzuyGSmUSTTHGg==\",
      \"dev\": true,
      \"requires\": {
        \"eslint-scope\": \"5.1.1\"
      },
      \"dependencies\": {
        \"eslint-scope\": {
          \"version\": \"5.1.1\",
          \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-5.1.1.tgz\",
          \"integrity\": \"sha512-2NxwbF/hZ0KpepYN0cNbo+FN6XoK7GaHlQhgx/hIZl6Va0bF45RQOOwhLIy8lQDbuCiadSLCBnH2CFYquit5bw==\",
          \"dev\": true,
          \"requires\": {
            \"esrecurse\": \"^4.3.0\",
            \"estraverse\": \"^4.1.1\"
          }
        }
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
      \"version\": \"7.1.4\",
      \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.1.4.tgz\",
      \"integrity\": \"sha512-w+LsMxKyYQm347Otw+IfBXOv9UWVjpHpCDdbBMt8Kz/xbvCYNjP+0qPh91Km3iKfSRLBB0P7fAMf0KHrPu+MyA==\",
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
      \"version\": \"3.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.5.tgz\",
      \"integrity\": \"sha512-Klz949h02Gz2uZCMGwDUSDS1YBlTdDDgbWHi+81l29tQALUtvz4rAYi5uoVhE5Lagoq6DeqAUlbrHvW/mXDgdQ==\",
      \"dev\": true
    },
    \"@types/minimist\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimist/-/minimist-1.2.1.tgz\",
      \"integrity\": \"sha512-fZQQafSREFyuZcdWFAExYjBiCL7AUCdgsk80iO0q4yihYYdcIiH28CcuPTGFgLOCC8RlW49GSQxdHwZP+I7CNg==\",
      \"dev\": true
    },
    \"@types/node\": {
      \"version\": \"14.14.6\",
      \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-14.14.6.tgz\",
      \"integrity\": \"sha512-6QlRuqsQ/Ox/aJEQWBEJG7A9+u7oSYl3mem/K8IzxXG/kAGbV1YPD9Bg9Zw3vyxC/YP+zONKwy8hGkSt1jxFMw==\",
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
    \"@vue/compiler-sfc\": {
      \"version\": \"2.7.15\",
      \"resolved\": \"https://registry.npmjs.org/@vue/compiler-sfc/-/compiler-sfc-2.7.15.tgz\",
      \"integrity\": \"sha512-FCvIEevPmgCgqFBH7wD+3B97y7u7oj/Wr69zADBf403Tui377bThTjBvekaZvlRr4IwUAu3M6hYZeULZFJbdYg==\",
      \"requires\": {
        \"@babel/parser\": \"^7.18.4\",
        \"postcss\": \"^8.4.14\",
        \"source-map\": \"^0.6.1\"
      }
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
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/configtest/-/configtest-2.1.1.tgz\",
      \"integrity\": \"sha512-wy0mglZpDSiSS0XHrVR+BAdId2+yxPSoJW8fsna3ZpYSlufjvxnP4YbKTCBZnNIcGN4r6ZPXV55X4mYExOfLmw==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"@webpack-cli/info\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/info/-/info-2.0.2.tgz\",
      \"integrity\": \"sha512-zLHQdI/Qs1UyT5UBdWNqsARasIA+AaF8t+4u2aS2nEpBQh2mWIVb8qAklq0eUENnC5mOItrIB4LiS9xMtph18A==\",
      \"dev\": true,
      \"requires\": {}
    },
    \"@webpack-cli/serve\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/serve/-/serve-2.0.5.tgz\",
      \"integrity\": \"sha512-lqaoKnRYBdo1UgDX8uF24AfGMifWK19TxPmM5FHc2vAGxrJ/qtyUyFBWoY1tISZdelsQ5fBcOusifo5o5wSJxQ==\",
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
          \"version\": \"8.8.1\",
          \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.8.1.tgz\",
          \"integrity\": \"sha512-6CiMNDrzv0ZR916u2T+iRunnD60uWmNn8SkdB44/6stVORUg0aAkWO7PkOhpCmjmW8f2I/G/xnowD66fxGyQJg==\",
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
    \"ansi-regex\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
      \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
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
    \"browserslist\": {
      \"version\": \"4.21.9\",
      \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.21.9.tgz\",
      \"integrity\": \"sha512-M0MFoZzbUrRU4KNfCrDLnvyE7gub+peetoTid3TBIqtunaDJyXlwhakT+/VkvSXcfIzFfK/nkCs4nmyTmxdNSg==\",
      \"dev\": true,
      \"requires\": {
        \"caniuse-lite\": \"^1.0.30001503\",
        \"electron-to-chromium\": \"^1.4.431\",
        \"node-releases\": \"^2.0.12\",
        \"update-browserslist-db\": \"^1.0.11\"
      }
    },
    \"buffer-from\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.2.tgz\",
      \"integrity\": \"sha512-E+XQCRwSbaaiChtv6k6Dwgc+bx+Bs6vuKJHHl5kox/BaKbhiXzqQOwK4cO22yElGp2OCmjwVhT3HmxgyPGnJfQ==\",
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
      \"version\": \"1.0.30001512\",
      \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001512.tgz\",
      \"integrity\": \"sha512-2S9nK0G/mE+jasCUsMPlARhRCts1ebcp2Ji8Y8PWi4NDE1iRdLCnEPHkEfeBrGC45L4isBx5ur3IQ6yTE2mRZw==\",
      \"dev\": true
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
    \"commander\": {
      \"version\": \"2.20.3\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
      \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
      \"dev\": true
    },
    \"common-path-prefix\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/common-path-prefix/-/common-path-prefix-3.0.0.tgz\",
      \"integrity\": \"sha512-QE33hToZseCH3jS0qN96O/bSh3kaw/h+Tq7ngyY9eWDUnTlTNUyqfqvCXioLe5Na5jFsL78ra/wuBU4iuEgd4w==\",
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
      \"version\": \"6.7.4\",
      \"resolved\": \"https://registry.npmjs.org/css-loader/-/css-loader-6.7.4.tgz\",
      \"integrity\": \"sha512-0Y5uHtK5BswfaGJ+jrO+4pPg1msFBc0pwPIE1VqfpmVn6YbDfYfXMj8rfd7nt+4goAhJueO+H/I40VWJfcP1mQ==\",
      \"dev\": true,
      \"requires\": {
        \"icss-utils\": \"^5.1.0\",
        \"postcss\": \"^8.4.21\",
        \"postcss-modules-extract-imports\": \"^3.0.0\",
        \"postcss-modules-local-by-default\": \"^4.0.1\",
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
    \"csstype\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/csstype/-/csstype-3.1.0.tgz\",
      \"integrity\": \"sha512-uX1KG+x9h5hIJsaKR9xHUeUraxf8IODOwq9JLNPq6BwB04a/xgpq3rcx47l5BZu5zBPlgD342tdke3Hom/nJRA==\"
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
      \"version\": \"1.4.450\",
      \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.450.tgz\",
      \"integrity\": \"sha512-BLG5HxSELlrMx7dJ2s+8SFlsCtJp37Zpk2VAxyC6CZtbc+9AJeZHfYHbrlSgdXp6saQ8StMqOTEDaBKgA7u1sw==\",
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
      \"version\": \"8.53.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint/-/eslint-8.53.0.tgz\",
      \"integrity\": \"sha512-N4VuiPjXDUa4xVeV/GC/RV3hQW9Nw+Y463lkWaKKXKYMvmRiRDAtfpuPFLN+E1/6ZhyR8J2ig+eVREnYgUsiag==\",
      \"dev\": true,
      \"requires\": {
        \"@eslint-community/eslint-utils\": \"^4.2.0\",
        \"@eslint-community/regexpp\": \"^4.6.1\",
        \"@eslint/eslintrc\": \"^2.1.3\",
        \"@eslint/js\": \"8.53.0\",
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
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
          \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^4.0.0\"
          }
        },
        \"type-fest\": {
          \"version\": \"0.20.2\",
          \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.20.2.tgz\",
          \"integrity\": \"sha512-Ne+eE4r0/iWnpAxD852z3A+N0Bt5RN//NjJwRd2VFHEmrywxf5vsZlh4R6lixl6B+wz/8d+maTSAkN1FIkI3LQ==\",
          \"dev\": true
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
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"3.2.7\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
          \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"^2.1.1\"
          }
        }
      }
    },
    \"eslint-module-utils\": {
      \"version\": \"2.8.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-module-utils/-/eslint-module-utils-2.8.0.tgz\",
      \"integrity\": \"sha512-aWajIYfsqCKRDgUfjEXNN/JlrzauMuSEy5sbd7WXbtW3EH6A6MpwEh42c7qD+MqQo9QMJ6fWLAeIJynx0g6OAw==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^3.2.7\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"3.2.7\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
          \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"^2.1.1\"
          }
        }
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
        \"debug\": {
          \"version\": \"3.2.7\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.7.tgz\",
          \"integrity\": \"sha512-CFjzYYAi4ThfiQvizrFQevTTXHtnCqWfe7x1AhgEscTz6ZbLbfoLRLPugTQyBth6f8ZERVUSyWHFD/7Wu4t1XQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"^2.1.1\"
          }
        },
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
      \"version\": \"7.2.2\",
      \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-7.2.2.tgz\",
      \"integrity\": \"sha512-dOt21O7lTMhDM+X9mB4GX+DZrZtCUJPL/wlcTqxyrx5IvO0IYtILdtrQGQp+8n5S0gwSVmOf9NQrjMOgfQZlIg==\",
      \"dev\": true,
      \"requires\": {
        \"esrecurse\": \"^4.3.0\",
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
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.2.0.tgz\",
          \"integrity\": \"sha512-BxbNGGNm0RyRYvUdHpIwv9IWzeM9XClbOxwoATuFdOE7ZE6wHL+HQ5T8hoPM+zHvmKzzsEqhgy0GrQ5X13afiQ==\",
          \"dev\": true
        }
      }
    },
    \"estraverse\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.3.0.tgz\",
      \"integrity\": \"sha512-39nnKffWz8xN1BU/2c79n9nB9HDzo0niYUqx6xyqUnyoAnQyyWpOTdZEeiCch8BBu515t4wp9ZmgVfVhn9EBpw==\",
      \"dev\": true
    },
    \"esutils\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/esutils/-/esutils-2.0.3.tgz\",
      \"integrity\": \"sha512-kVscqXk4OCp68SZ0dkgEKVi6/8ij300KBWTJq32P/dYeWTSwK41WyTxalN1eRmA5Z9UU/LX9D7FWSmV9SAYx6g==\",
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
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.1.0.tgz\",
      \"integrity\": \"sha512-lhd/wF+Lk98HZoTCtlVraHtfh5XYijIjalXck7saUtuanSDyLMxnHhSXEDJqHxD7msR8D0uCmqlkwjCV8xvwHw==\",
      \"dev\": true
    },
    \"fast-levenshtein\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/fast-levenshtein/-/fast-levenshtein-2.0.6.tgz\",
      \"integrity\": \"sha512-DCXu6Ifhqcks7TZKY3Hxp3y6qphY5SJZmrWMDrKcERSOXWQdMhU9Ig/PYrzyw/ul9jOIyh0N4M0tbC5hodg8dw==\",
      \"dev\": true
    },
    \"fastest-levenshtein\": {
      \"version\": \"1.0.12\",
      \"resolved\": \"https://registry.npmjs.org/fastest-levenshtein/-/fastest-levenshtein-1.0.12.tgz\",
      \"integrity\": \"sha512-On2N+BpYJ15xIC974QNVuYGMOlEVt4s0EOI3wwMqOmK1fdDY+FN/zltPV8vosq4ad4c/gJ1KHScUn/6AWIgiow==\",
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
    \"file-loader\": {
      \"version\": \"6.2.0\",
      \"resolved\": \"https://registry.npmjs.org/file-loader/-/file-loader-6.2.0.tgz\",
      \"integrity\": \"sha512-qo3glqyTa61Ytg4u73GultjHGjdRyig3tG6lPtyX/jOEJvHif9uB0/OCI2Kif6ctF3caQTW2G5gym21oAsI4pw==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"schema-utils\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.0.0.tgz\",
          \"integrity\": \"sha512-6D82/xSzO094ajanoOSbe4YvXWMfn2A//8Y1+MUqFAJul5Bs+yn36xbK9OtNDcRVSBJ9jjeoXftM6CfztsjOAA==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.6\",
            \"ajv\": \"^6.12.5\",
            \"ajv-keywords\": \"^3.5.2\"
          }
        }
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
      },
      \"dependencies\": {
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
        \"pkg-dir\": {
          \"version\": \"7.0.0\",
          \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-7.0.0.tgz\",
          \"integrity\": \"sha512-Ie9z/WINcxxLp27BKOCHGde4ITq9UklYKDzVo1nhk5sqGEXU3FpkwP5GM2voTGJkGd9B3Otl+Q4uwSOeSUtOBA==\",
          \"dev\": true,
          \"requires\": {
            \"find-up\": \"^6.3.0\"
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
    \"find-up\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-4.1.0.tgz\",
      \"integrity\": \"sha512-PpOwAdQ/YlXQ2vj8a3h8IipDuYRi3wceVQQGYWxNINccq40Anw7BlsEXCMbt1Zt+OLA6Fq9suIpIWD0OsnISlw==\",
      \"dev\": true,
      \"requires\": {
        \"locate-path\": \"^5.0.0\",
        \"path-exists\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"path-exists\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-4.0.0.tgz\",
          \"integrity\": \"sha512-ak9Qy5Q7jYb2Wwcey5Fpvg2KoAc/ZIhLSLOSBmRmygPsGwkVVt0fZa0qrtMz+m6tJTAHfZQ8FnmB4MG4LWy7/w==\",
          \"dev\": true
        }
      }
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
    \"fs.realpath\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/fs.realpath/-/fs.realpath-1.0.0.tgz\",
      \"integrity\": \"sha1-FQStJSMVjKpA20onh8sBQRmU6k8=\",
      \"dev\": true
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
      \"version\": \"7.1.6\",
      \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.6.tgz\",
      \"integrity\": \"sha512-LwaxwyZ72Lk7vZINtNNrywX0ZuLyStrdDtabefZKAY5ZGJhVtgdznluResxNmPitE0SAO+O26sWTHeKSI2wMBA==\",
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
    \"glob-parent\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-6.0.2.tgz\",
      \"integrity\": \"sha512-XxwI8EOhVQgWp6iDL+3b0r86f4d6AX6zSU55HfB4ydCEuXLXc5FcYeOu+nnGftS4TEju/11rt4KJPTMgbfmv4A==\",
      \"dev\": true,
      \"requires\": {
        \"is-glob\": \"^4.0.3\"
      }
    },
    \"glob-to-regexp\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/glob-to-regexp/-/glob-to-regexp-0.4.1.tgz\",
      \"integrity\": \"sha512-lkX1HJXwyMcprw/5YUZc2s7DrpAiHB21/V+E1rHUrVNokkvB6bqMzT0VfV6/86ZNabt1k14YOIaT7nDvOX3Iiw==\",
      \"dev\": true
    },
    \"globals\": {
      \"version\": \"11.12.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-11.12.0.tgz\",
      \"integrity\": \"sha512-WOBp/EEGUiIsJSp7wcv/y6MO+lV9UoncWqxuFfm8eBwzWNgyfBd6Gz+IeKQ9jCmyhoH99g15M3T+QaVHFjizVA==\",
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
      },
      \"dependencies\": {
        \"pify\": {
          \"version\": \"2.3.0\",
          \"resolved\": \"https://registry.npmjs.org/pify/-/pify-2.3.0.tgz\",
          \"integrity\": \"sha1-7RQaasBDqEnqWISY59yosVMw6Qw=\",
          \"dev\": true
        }
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
    \"hosted-git-info\": {
      \"version\": \"2.8.9\",
      \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-2.8.9.tgz\",
      \"integrity\": \"sha512-mxIDAb9Lsm6DoOJ7xH+5+X4y1LU/4Hi50L9C5sIswK3JzULS4bwk1FvjdBgvYR4bzT4tuUQiC15FE2f5HbLvYw==\",
      \"dev\": true
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
    \"iconv-lite\": {
      \"version\": \"0.6.3\",
      \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.6.3.tgz\",
      \"integrity\": \"sha512-4fCk79wshMdzMp2rH06qWrJE4iolqLhCUH+OiuIgU++RB0+94NlDL81atO7GX55uUKueo0txHNtvEyI6D7WdMw==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"safer-buffer\": \">= 2.1.2 < 3.0.0\"
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
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/import-local/-/import-local-3.0.3.tgz\",
      \"integrity\": \"sha512-bE9iaUY3CXH8Cwfan/abDKAxe1KGT9kyGsBPqf6DMK/z0a2OzAsrukeYNgIH6cH5Xr452jb1TUL8rSfCLjZ9uA==\",
      \"dev\": true,
      \"requires\": {
        \"pkg-dir\": \"^4.2.0\",
        \"resolve-cwd\": \"^3.0.0\"
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
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
      \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
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
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-3.1.1.tgz\",
      \"integrity\": \"sha512-6xwYfHbajpoF0xLW+iwLkhwgvLoZDfjYfoFNu8ftMoXINzwuymNLd9u/KmwtdT2GbR+/Cz66otEGEVVUHX9QLQ==\",
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
      \"version\": \"2.2.3\",
      \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
      \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
      \"dev\": true
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
    \"lodash\": {
      \"version\": \"4.17.21\",
      \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.21.tgz\",
      \"integrity\": \"sha512-v2kDEe57lecTulaDIuNTPy3Ry4gLGJ6Z1O3vE1krgXZNrsQ+LFTGHVxVjcXPs17LhbZVGedAJv8XZ1tvj5FvSg==\",
      \"dev\": true
    },
    \"lodash.merge\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.merge/-/lodash.merge-4.6.2.tgz\",
      \"integrity\": \"sha512-0KpjqXRVvrYyCsX1swR/XTK0va6VQkQM6MNo7PqW77ByjAhoARA8EfrP1N4+KlKj8YS0ZUCtRT/YUuhyYDujIQ==\",
      \"dev\": true
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
        \"hosted-git-info\": {
          \"version\": \"4.0.2\",
          \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-4.0.2.tgz\",
          \"integrity\": \"sha512-c9OGXbZ3guC/xOlCg1Ci/VgWlwsqDv1yMQL1CWqXDL0hDjXuNcq0zuR4xqPSuasI3kqFDhqSyTjREz5gzq0fXg==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
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
        \"semver\": {
          \"version\": \"7.3.5\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.5.tgz\",
          \"integrity\": \"sha512-PoeGJYh8HK4BTO/a9Tf6ZG3veo/A7ZVsYrSA6J8ny9nb3B1VrpkuN+z9OE5wfE5p6H4LchYZsegiQgbJD94ZFQ==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
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
      \"version\": \"2.7.6\",
      \"resolved\": \"https://registry.npmjs.org/mini-css-extract-plugin/-/mini-css-extract-plugin-2.7.6.tgz\",
      \"integrity\": \"sha512-Qk7HcgaPkGG6eD77mLvZS1nmxlao3j+9PkrT9Uc7HAE1id3F41+DdBRYRYkbyfNRGzm8/YWtzhw7nVPmwhqTQw==\",
      \"dev\": true,
      \"requires\": {
        \"schema-utils\": \"^4.0.0\"
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
    \"ms\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.2.tgz\",
      \"integrity\": \"sha512-sGkPx+VjMtmA6MX27oA4FBFELFCZZ4S4XqeGOXCv68tT+jb3vk/RyaKWP0PTKyWtmLSM0b+adUTEvbs1PEaH2w==\",
      \"dev\": true
    },
    \"nan\": {
      \"version\": \"2.17.0\",
      \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.17.0.tgz\",
      \"integrity\": \"sha512-2ZTgtl0nJsO0KQCjEpxcIr5D+Yv90plTitZt9JBfQvVJDS5seMl3FOvsh3+9CoYWXf/1l5OaZzzF6nDm4cagaQ==\",
      \"dev\": true
    },
    \"nanoid\": {
      \"version\": \"3.3.6\",
      \"resolved\": \"https://registry.npmjs.org/nanoid/-/nanoid-3.3.6.tgz\",
      \"integrity\": \"sha512-BGcqMMJuToF7i1rt+2PWSNVnWIkGCU78jBG3RxO/bZlnZPK2Cmi2QaffxGO/2RvWi9sL+FAiRiXMgsyxQ1DIDA==\"
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
        }
      }
    },
    \"node-releases\": {
      \"version\": \"2.0.12\",
      \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.12.tgz\",
      \"integrity\": \"sha512-QzsYKWhXTWx8h1kIvqfnC++o0pEmpRQA/aenALsL2F4pqNVr7YzcdMlDij5WBnwftRbJCNJL/O7zdKaxKPHqgQ==\",
      \"dev\": true
    },
    \"node-sass\": {
      \"version\": \"8.0.0\",
      \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-8.0.0.tgz\",
      \"integrity\": \"sha512-jPzqCF2/e6JXw6r3VxfIqYc8tKQdkj5Z/BDATYyG6FL6b/LuYBNFGFVhus0mthcWifHm/JzBpKAd+3eXsWeK/A==\",
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
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.3.0.tgz\",
      \"integrity\": \"sha512-//88mFWSJx8lxCzwdAABTJL2MyWB12+eIY7MDL2SqLmAkeKU9qxRvWuSyTjm3FUmpBEMuFfckAIqEaVGUDxb6w==\",
      \"dev\": true,
      \"requires\": {
        \"p-try\": \"^2.0.0\"
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
    \"p-map\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-2.1.0.tgz\",
      \"integrity\": \"sha512-y3b8Kpd8OAN444hxfBbFfj1FY/RjtTd8tzYwhUqNYXx0fXx2iX4maP4Qr6qhIKbQXI02wTLAda4fYUbDagTUFw==\",
      \"dev\": true
    },
    \"p-try\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
      \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
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
    \"path-exists\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-exists/-/path-exists-5.0.0.tgz\",
      \"integrity\": \"sha512-RjhtfwJOxzcFmNOi6ltcbcu4Iu+FL3zEj83dk4kAS+fVpTxXLO1b38RvJgT/0QwvV/L3aY9TAnyv0EOqW4GoMQ==\",
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
    \"picocolors\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-1.0.0.tgz\",
      \"integrity\": \"sha512-1fygroTLlHu66zi26VoTDv8yRgm0Fccecssto+MhsZ0D/DGW2sm8E8AjW7NU5VVTRt5GxbeZ5qBuJr+HyLYkjQ==\"
    },
    \"pify\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
      \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
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
    \"pkg-dir\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-4.2.0.tgz\",
      \"integrity\": \"sha512-HRDzbaKjC+AOWVXxAU/x54COGeIv9eb+6CkDSQoNTt4XyWoIJvuPsXizxu/Fr23EiekbtZwmh1IcIG/l/a10GQ==\",
      \"dev\": true,
      \"requires\": {
        \"find-up\": \"^4.0.0\"
      }
    },
    \"postcss\": {
      \"version\": \"8.4.31\",
      \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-8.4.31.tgz\",
      \"integrity\": \"sha512-PS08Iboia9mts/2ygV3eLpY5ghnUcfLV/EXTOW1E2qYxJKGGBUtNjN76FYHnMs36RmARn41bC0AZmn+rR0OVpQ==\",
      \"requires\": {
        \"nanoid\": \"^3.3.6\",
        \"picocolors\": \"^1.0.0\",
        \"source-map-js\": \"^1.0.2\"
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
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-local-by-default/-/postcss-modules-local-by-default-4.0.1.tgz\",
      \"integrity\": \"sha512-Zr/dB+IlXaEqdoslLHhhqecwj73vc3rDmOpsBNBEVk7P2aqAlz+Ijy0fFbU5Ie9PtreDOIgGa9MsLWakVGl+fA==\",
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
    \"process-nextick-args\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.1.tgz\",
      \"integrity\": \"sha512-3ouUOpQhtgrbOa17J7+uxOTpITYWaGP7/AhoR3+A+/1e9skrzelGi/dXzEYyvbxubEF6Wn2ypscTKiKJFFn1ag==\",
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
    \"readable-stream\": {
      \"version\": \"2.3.7\",
      \"resolved\": \"https://registry.npmjs.org/readable-stream/-/readable-stream-2.3.7.tgz\",
      \"integrity\": \"sha512-Ebho8K4jIbHAxnuxi7o42OrZgF/ZTNcsZj6nRKyUmkhLFq8CHItp/fy6hQZuZmP/n3yZ9VBUbp4zz/mX8hmYPw==\",
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
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.8.0.tgz\",
      \"integrity\": \"sha512-/vxpCXddiX8NGfGO/mTafwjq4aFa/71pvamip0++IQk3zG8cbCj0fifNPrjjF1XMXUne91jL9OoxmdykoEtifQ==\",
      \"dev\": true,
      \"requires\": {
        \"resolve\": \"^1.20.0\"
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
    \"require-directory\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
      \"integrity\": \"sha512-fGxEI7+wsG9xrvdjsrlmL22OMTTiHRwAMroiEeMgq8gzoLC/PQr7RsRDSTLUg/bZAZtF+TVIkHc6/4RIKrui+Q==\",
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
      \"version\": \"2.7.1\",
      \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
      \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
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
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-4.0.0.tgz\",
      \"integrity\": \"sha512-1edyXKgh6XnJsJSQ8mKWXnN/BVaIbFMLpouRUrXgVq7WYne5kw3MW7UPhO44uRXQSIpTSXoJbmrR2X0w9kUTyg==\",
      \"dev\": true,
      \"requires\": {
        \"@types/json-schema\": \"^7.0.9\",
        \"ajv\": \"^8.8.0\",
        \"ajv-formats\": \"^2.1.1\",
        \"ajv-keywords\": \"^5.0.0\"
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
        \"json-schema-traverse\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
          \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
          \"dev\": true
        }
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
      \"version\": \"5.7.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
      \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
      \"dev\": true
    },
    \"serialize-javascript\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-6.0.1.tgz\",
      \"integrity\": \"sha512-owoXEFjWRllis8/M1Q+Cw5k8ZH40e3zhp/ovX+Xr/vi1qj6QesbyXXViFbpNvWvPNAD62SutwEXavefrLJWj7w==\",
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
      }
    },
    \"sortablejs\": {
      \"version\": \"1.15.0\",
      \"resolved\": \"https://registry.npmjs.org/sortablejs/-/sortablejs-1.15.0.tgz\",
      \"integrity\": \"sha512-bv9qgVMjUMf89wAvM6AxVvS/4MX3sPeN0+agqShejLU5z5GX4C75ow1O2e5k4L6XItUyAK3gH6AxSbXrOM5e8w==\"
    },
    \"source-map\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
      \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\"
    },
    \"source-map-js\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/source-map-js/-/source-map-js-1.0.2.tgz\",
      \"integrity\": \"sha512-R0XvVJ9WusLiqTCEiGCmICCMplcCkIwwR11mOSD9CR5u+IXYdiseeEuXCVAjS54zqwkLcPNnmU4OeJ6tUrWhDw==\"
    },
    \"source-map-support\": {
      \"version\": \"0.5.21\",
      \"resolved\": \"https://registry.npmjs.org/source-map-support/-/source-map-support-0.5.21.tgz\",
      \"integrity\": \"sha512-uBHU3L3czsIyYXKX88fdrGovxdSCoTGDRZ6SYXtSRxLZUzHg5P/66Ht6uoUlHu9EZod+inXhKo3qQgwXUT/y1w==\",
      \"dev\": true,
      \"requires\": {
        \"buffer-from\": \"^1.0.0\",
        \"source-map\": \"^0.6.0\"
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
      \"version\": \"3.0.6\",
      \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.6.tgz\",
      \"integrity\": \"sha512-+orQK83kyMva3WyPf59k1+Y525csj5JejicWut55zeTWANuN17qSiSLUXWtzHeNWORSvT7GLDJ/E/XiIWoXBTw==\",
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
    \"strip-ansi\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-6.0.1.tgz\",
      \"integrity\": \"sha512-Y38VPSHcqkFrCpFnQ9vuSXmquuv5oXOKpGeT6aGrr3o3Gc9AlVa6JBfUSOCnbxGGZF+/0ooI7KrPuUSztUdU5A==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-regex\": \"^5.0.1\"
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
      \"version\": \"3.3.3\",
      \"resolved\": \"https://registry.npmjs.org/style-loader/-/style-loader-3.3.3.tgz\",
      \"integrity\": \"sha512-53BiGLXAcll9maCYtZi2RCQZKa8NQQai5C4horqKyRmHj9H7QmcUyucrH+4KW/gBQbXM2AsB0axoEcFZPlfPcw==\",
      \"dev\": true,
      \"requires\": {}
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
        \"schema-utils\": {
          \"version\": \"3.1.2\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.1.2.tgz\",
          \"integrity\": \"sha512-pvjEHOgWc9OWA/f/DE3ohBWTD6EleVLf7iFUkoSwAxttdBhB9QUebQgxER2kWueOvRJXPHNnyrvvh9eZINB8Eg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.8\",
            \"ajv\": \"^6.12.5\",
            \"ajv-keywords\": \"^3.5.2\"
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
      \"integrity\": \"sha512-/OaKK0xYrs3DmxRYqL/yDc+FxFUVYhDlXMhRmv3z915w2HF1tnN1omB354j8VUGO/hbRzyD6Y3sA7v7GS/ceog==\",
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
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-1.0.2.tgz\",
          \"integrity\": \"sha512-g1MWMLBiz8FKi1e4w0UyVL3w+iJceWAFBAaBnnGKOpNa5f8TLktkbre1+s6oICydWAm+HRUGTmI+//xv2hvXYA==\",
          \"dev\": true,
          \"requires\": {
            \"minimist\": \"^1.2.0\"
          }
        }
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
    \"type-fest\": {
      \"version\": \"0.18.1\",
      \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.18.1.tgz\",
      \"integrity\": \"sha512-OIAYXk8+ISY+qTOwkHtKqzAuxchoMiD9Udx+FSGQDuiRR+PJKJHc2NJAXlbhkGwTt/4/nKZxELY1w3ReWOL8mw==\",
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
      \"version\": \"1.0.11\",
      \"resolved\": \"https://registry.npmjs.org/update-browserslist-db/-/update-browserslist-db-1.0.11.tgz\",
      \"integrity\": \"sha512-dCwEFf0/oT85M1fHBg4F0jtLwJrutGoHSQXCh7u4o2t1drG+c0a9Flnqww6XUKSfQMPpJBRjU8d4RXB09qtvaA==\",
      \"dev\": true,
      \"requires\": {
        \"escalade\": \"^3.1.1\",
        \"picocolors\": \"^1.0.0\"
      }
    },
    \"uri-js\": {
      \"version\": \"4.4.0\",
      \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.4.0.tgz\",
      \"integrity\": \"sha512-B0yRTzYdUCCn9n+F4+Gh4yIDtMQcaJsmYBDsTSG8g/OejKBodLQ2IHfN3bM7jUsRXndopT7OIXWdYqc1fjmV6g==\",
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
    \"vue\": {
      \"version\": \"2.7.15\",
      \"resolved\": \"https://registry.npmjs.org/vue/-/vue-2.7.15.tgz\",
      \"integrity\": \"sha512-a29fsXd2G0KMRqIFTpRgpSbWaNBK3lpCTOLuGLEDnlHWdjB8fwl6zyYZ8xCrqkJdatwZb4mGHiEfJjnw0Q6AwQ==\",
      \"requires\": {
        \"@vue/compiler-sfc\": \"2.7.15\",
        \"csstype\": \"^3.1.0\"
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
        }
      }
    },
    \"webpack-cli\": {
      \"version\": \"5.1.4\",
      \"resolved\": \"https://registry.npmjs.org/webpack-cli/-/webpack-cli-5.1.4.tgz\",
      \"integrity\": \"sha512-pIDJHIEI9LR0yxHXQ+Qh95k2EvXpWzZ5l+d+jIo+RdSm9MiHfzazIxwwni/p7+x4eJZuvG1AJwgC4TNQ7NRgsg==\",
      \"dev\": true,
      \"requires\": {
        \"@discoveryjs/json-ext\": \"^0.5.0\",
        \"@webpack-cli/configtest\": \"^2.1.1\",
        \"@webpack-cli/info\": \"^2.0.2\",
        \"@webpack-cli/serve\": \"^2.0.5\",
        \"colorette\": \"^2.0.14\",
        \"commander\": \"^10.0.1\",
        \"cross-spawn\": \"^7.0.3\",
        \"envinfo\": \"^7.7.3\",
        \"fastest-levenshtein\": \"^1.0.12\",
        \"import-local\": \"^3.0.2\",
        \"interpret\": \"^3.1.1\",
        \"rechoir\": \"^0.8.0\",
        \"webpack-merge\": \"^5.7.3\"
      },
      \"dependencies\": {
        \"colorette\": {
          \"version\": \"2.0.16\",
          \"resolved\": \"https://registry.npmjs.org/colorette/-/colorette-2.0.16.tgz\",
          \"integrity\": \"sha512-hUewv7oMjCp+wkBv5Rm0v87eJhq4woh5rSR+42YSQJKecCqgIqNkZ6lAlQms/BwHPJA5NKMRlpxPRv0n8HQW6g==\",
          \"dev\": true
        },
        \"commander\": {
          \"version\": \"10.0.1\",
          \"resolved\": \"https://registry.npmjs.org/commander/-/commander-10.0.1.tgz\",
          \"integrity\": \"sha512-y4Mg2tXshplEbSGzx7amzPwKKOCGuoSRP/CjEdwwk0FOGlUbq6lKuoyDZTNZkmxHdJtp54hdfY/JUrdL7Xfdug==\",
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
      \"version\": \"3.2.3\",
      \"resolved\": \"https://registry.npmjs.org/webpack-sources/-/webpack-sources-3.2.3.tgz\",
      \"integrity\": \"sha512-/DyMEOrDgLKKIG0fmvtz+4dUX/3Ghozwgm6iPp8KRhvn+eQf9+Q7GWxVNMk3+uCPWfdXYC4ExGBckIXdFEfH1w==\",
      \"dev\": true
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
        return "@Modules/blockreassurance/package-lock.json";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/package-lock.json", "/var/www/html/modules/blockreassurance/package-lock.json");
    }
}
