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

/* @Modules/blockwishlist/package-lock.json */
class __TwigTemplate_25c8301c0188e2a9ce038cc41a9d2232 extends Template
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
  \"name\": \"blockwishlist\",
  \"version\": \"1.0.0\",
  \"lockfileVersion\": 1,
  \"requires\": true,
  \"dependencies\": {
    \"@aashutoshrathi/word-wrap\": {
      \"version\": \"1.2.6\",
      \"resolved\": \"https://registry.npmjs.org/@aashutoshrathi/word-wrap/-/word-wrap-1.2.6.tgz\",
      \"integrity\": \"sha512-1Yjs2SvM8TflER/OD3cOjhWWOZb58A2t7wpE2S9XfBYTiIl+XFhQG2bjy4Pu1I+EAlCNUzRDYDdFwFYUKvXcIA==\",
      \"dev\": true
    },
    \"@ampproject/remapping\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@ampproject/remapping/-/remapping-2.2.1.tgz\",
      \"integrity\": \"sha512-lFMjJTrFL3j7L9yBxwYfCq2k6qqwHyzuUl/XBnif78PWTJYyL/dfowQHWE3sp6U6ZzqWiiIZnpTMO96zhkjwtg==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/gen-mapping\": \"^0.3.0\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      }
    },
    \"@babel/code-frame\": {
      \"version\": \"7.15.8\",
      \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.15.8.tgz\",
      \"integrity\": \"sha512-2IAnmn8zbvC/jKYhq5Ki9I+DwjlrtMPUCH/CpHvqI4dNnlwHwsxoIhlc8WcYY5LSYknXQtAlFYuHfqAFCvQ4Wg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/highlight\": \"^7.14.5\"
      }
    },
    \"@babel/compat-data\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/compat-data/-/compat-data-7.22.9.tgz\",
      \"integrity\": \"sha512-5UamI7xkUcJ3i9qVDS+KFDEK8/7oJ55/sJMB1Ge7IEapr7KfdfV/HErR+koZwOfd+SgtFKOKRhRakdg++DcJpQ==\",
      \"dev\": true
    },
    \"@babel/core\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/core/-/core-7.22.9.tgz\",
      \"integrity\": \"sha512-G2EgeufBcYw27U4hhoIwFcgc1XU7TlXJ3mv04oOv1WCuo900U/anZSPzEqNjwdjgffkk2Gs0AN0dW1CKVLcG7w==\",
      \"dev\": true,
      \"requires\": {
        \"@ampproject/remapping\": \"^2.2.0\",
        \"@babel/code-frame\": \"^7.22.5\",
        \"@babel/generator\": \"^7.22.9\",
        \"@babel/helper-compilation-targets\": \"^7.22.9\",
        \"@babel/helper-module-transforms\": \"^7.22.9\",
        \"@babel/helpers\": \"^7.22.6\",
        \"@babel/parser\": \"^7.22.7\",
        \"@babel/template\": \"^7.22.5\",
        \"@babel/traverse\": \"^7.22.8\",
        \"@babel/types\": \"^7.22.5\",
        \"convert-source-map\": \"^1.7.0\",
        \"debug\": \"^4.1.0\",
        \"gensync\": \"^1.0.0-beta.2\",
        \"json5\": \"^2.2.2\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"@babel/code-frame\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.22.5.tgz\",
          \"integrity\": \"sha512-Xmwn266vad+6DAqEB2A6V/CcZVp62BbwVmcOJc2RPuwih1kw02TjQvWVWlcKGbBPd+8/0V5DEkOcizRGYsspYQ==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/highlight\": \"^7.22.5\"
          }
        },
        \"@babel/helper-validator-identifier\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.5.tgz\",
          \"integrity\": \"sha512-aJXu+6lErq8ltp+JhkJUfk1MTGyuA4v7f3pA+BJ5HLfNC6nAQ0Cpi9uOquUj8Hehg0aUiHzWQbOVJGao6ztBAQ==\",
          \"dev\": true
        },
        \"@babel/highlight\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.22.5.tgz\",
          \"integrity\": \"sha512-BSKlD1hgnedS5XRnGOljZawtag7H1yPfQp0tdNJCHoH6AZ+Pcm9VvkrK59/Yy593Ypg0zMxH2BxD1VPYUQ7UIw==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/helper-validator-identifier\": \"^7.22.5\",
            \"chalk\": \"^2.0.0\",
            \"js-tokens\": \"^4.0.0\"
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
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
          \"dev\": true
        },
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        },
        \"supports-color\": {
          \"version\": \"5.5.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
          \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"@babel/eslint-parser\": {
      \"version\": \"7.15.8\",
      \"resolved\": \"https://registry.npmjs.org/@babel/eslint-parser/-/eslint-parser-7.15.8.tgz\",
      \"integrity\": \"sha512-fYP7QFngCvgxjUuw8O057SVH5jCXsbFFOoE77CFDcvzwBVgTOkMD/L4mIC5Ud1xf8chK/no2fRbSSn1wvNmKuQ==\",
      \"dev\": true,
      \"requires\": {
        \"eslint-scope\": \"^5.1.1\",
        \"eslint-visitor-keys\": \"^2.1.0\",
        \"semver\": \"^6.3.0\"
      },
      \"dependencies\": {
        \"eslint-visitor-keys\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-2.1.0.tgz\",
          \"integrity\": \"sha512-0rSmRBzXgDzIsD6mGdJgevzgezI534Cer5L/vyMX0kHzT/jiB43jRhd9YUlMGYLQy2zprNmoT8qasCGtY+QaKw==\",
          \"dev\": true
        },
        \"semver\": {
          \"version\": \"6.3.0\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
          \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
          \"dev\": true
        }
      }
    },
    \"@babel/generator\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/generator/-/generator-7.22.9.tgz\",
      \"integrity\": \"sha512-KtLMbmicyuK2Ak/FTCJVbDnkN1SlT8/kceFTiuDiiRUUSMnHMidxSCdG4ndkTOHHpoomWe/4xkvHkEOncwjYIw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\",
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
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-builder-binary-assignment-operator-visitor/-/helper-builder-binary-assignment-operator-visitor-7.22.5.tgz\",
      \"integrity\": \"sha512-m1EP3lVOPptR+2DwD125gziZNcmoNSHGmJROKoy87loWUQyJaVXDgpmruWqDARZSmtYQ+Dl25okU8+qhVzuykw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-compilation-targets\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-compilation-targets/-/helper-compilation-targets-7.22.9.tgz\",
      \"integrity\": \"sha512-7qYrNM6HjpnPHJbopxmb8hSPoZ0gsX8IvUS32JGVoy+pU9e5N0nLr1VjJoR6kA4d9dmGLxNYOjeB8sUDal2WMw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.22.9\",
        \"@babel/helper-validator-option\": \"^7.22.5\",
        \"browserslist\": \"^4.21.9\",
        \"lru-cache\": \"^5.1.1\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
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
        \"caniuse-lite\": {
          \"version\": \"1.0.30001516\",
          \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001516.tgz\",
          \"integrity\": \"sha512-Wmec9pCBY8CWbmI4HsjBeQLqDTqV91nFVR83DnZpYyRnPI1wePDsTg0bGLPC5VU/3OIZV1fmxEea1b+tFKe86g==\",
          \"dev\": true
        },
        \"electron-to-chromium\": {
          \"version\": \"1.4.464\",
          \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.464.tgz\",
          \"integrity\": \"sha512-guZ84yoou4+ILNdj0XEbmGs6DEWj6zpVOWYpY09GU66yEb0DSYvP/biBPzHn0GuW/3RC/pnaYNUWlQE1fJYtgA==\",
          \"dev\": true
        },
        \"lru-cache\": {
          \"version\": \"5.1.1\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-5.1.1.tgz\",
          \"integrity\": \"sha512-KpNARQA3Iwv+jTA0utUVVbrh+Jlrr1Fv0e56GGzAFOXN7dk/FviaDW8LHmK52DlcH4WP2n6gI8vN1aesBFgo9w==\",
          \"dev\": true,
          \"requires\": {
            \"yallist\": \"^3.0.2\"
          }
        },
        \"node-releases\": {
          \"version\": \"2.0.13\",
          \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.13.tgz\",
          \"integrity\": \"sha512-uYr7J37ae/ORWdZeQ1xxMJe3NtdmqMC/JZK+geofDrkLUApKRHPd18/TxtBOJ4A0/+uUIliorNrfYV6s1b02eQ==\",
          \"dev\": true
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
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-create-class-features-plugin/-/helper-create-class-features-plugin-7.22.9.tgz\",
      \"integrity\": \"sha512-Pwyi89uO4YrGKxL/eNJ8lfEH55DnRloGPOseaA8NFNL6jAUnn+KccaISiFazCj5IolPPDjGSdzQzXVzODVRqUQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/helper-member-expression-to-functions\": \"^7.22.5\",
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
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-create-regexp-features-plugin/-/helper-create-regexp-features-plugin-7.22.9.tgz\",
      \"integrity\": \"sha512-+svjVa/tFwsNSG4NEy1h85+HQ5imbT92Q5/bgtS7P0GTQlP8WuFdqsiABmQouhiFGyV66oGxZFpeYHza1rNsKw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"regexpu-core\": \"^5.3.1\",
        \"semver\": \"^6.3.1\"
      },
      \"dependencies\": {
        \"jsesc\": {
          \"version\": \"0.5.0\",
          \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-0.5.0.tgz\",
          \"integrity\": \"sha512-uZz5UnB7u4T9LvwmFqXii7pZSouaRPorGs5who1Ip7VO0wxanFvBL7GkM6dTHlgX+jhBApRetaWpnDabOeTcnA==\",
          \"dev\": true
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
    \"@babel/helper-define-polyfill-provider\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-define-polyfill-provider/-/helper-define-polyfill-provider-0.4.1.tgz\",
      \"integrity\": \"sha512-kX4oXixDxG197yhX+J3Wp+NpL2wuCFjWQAr6yX2jtCnflK9ulMI51ULFGIrWiX1jGfvAxdHp+XQCcP2bZGPs9A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-compilation-targets\": \"^7.22.6\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"debug\": \"^4.1.1\",
        \"lodash.debounce\": \"^4.0.8\",
        \"resolve\": \"^1.14.2\"
      }
    },
    \"@babel/helper-environment-visitor\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-environment-visitor/-/helper-environment-visitor-7.22.5.tgz\",
      \"integrity\": \"sha512-XGmhECfVA/5sAt+H+xpSg0mfrHq6FzNr9Oxh7PSEBBRUb/mL7Kz3NICXb194rCqAEdxkhPT1a88teizAFyvk8Q==\",
      \"dev\": true
    },
    \"@babel/helper-function-name\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-function-name/-/helper-function-name-7.22.5.tgz\",
      \"integrity\": \"sha512-wtHSq6jMRE3uF2otvfuD3DIvVhOsSNshQl0Qrd7qC9oQJzHvOL4qQXlQn2916+CXGywIjpGuIkoyZRRxHPiNQQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/template\": \"^7.22.5\",
        \"@babel/types\": \"^7.22.5\"
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
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-member-expression-to-functions/-/helper-member-expression-to-functions-7.22.5.tgz\",
      \"integrity\": \"sha512-aBiH1NKMG0H2cGZqspNvsaBe6wNGjbJjuLy29aU+eDZjSbbN53BaxlpB02xm9v34pLTZ1nIQPFYn2qMZoa5BQQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-module-imports\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-imports/-/helper-module-imports-7.22.5.tgz\",
      \"integrity\": \"sha512-8Dl6+HD/cKifutF5qGd/8ZJi84QeAKh+CEe1sBzz8UayBBGg1dAIJrdHOcOM5b2MpzWL2yuotJTtGjETq0qjXg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helper-module-transforms\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-transforms/-/helper-module-transforms-7.22.9.tgz\",
      \"integrity\": \"sha512-t+WA2Xn5K+rTeGtC8jCsdAH52bjggG5TKRuRrAGNM/mjIbO4GxvlLMFOEz9wXY5I2XQ60PMFsAG2WIcG82dQMQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-module-imports\": \"^7.22.5\",
        \"@babel/helper-simple-access\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/helper-validator-identifier\": \"^7.22.5\"
      },
      \"dependencies\": {
        \"@babel/helper-validator-identifier\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.5.tgz\",
          \"integrity\": \"sha512-aJXu+6lErq8ltp+JhkJUfk1MTGyuA4v7f3pA+BJ5HLfNC6nAQ0Cpi9uOquUj8Hehg0aUiHzWQbOVJGao6ztBAQ==\",
          \"dev\": true
        }
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
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-remap-async-to-generator/-/helper-remap-async-to-generator-7.22.9.tgz\",
      \"integrity\": \"sha512-8WWC4oR4Px+tr+Fp0X3RHDVfINGpF3ad1HIbrc8A77epiR6eMMc6jsgozkzT2uDiOOdoS9cLIQ+XD2XvI2WSmQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-wrap-function\": \"^7.22.9\"
      }
    },
    \"@babel/helper-replace-supers\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-replace-supers/-/helper-replace-supers-7.22.9.tgz\",
      \"integrity\": \"sha512-LJIKvvpgPOPUThdYqcX6IXRuIcTkcAub0IaDRGCZH0p5GPUp7PhRU9QVgFcDDd51BaPkk77ZjqFwh6DZTAEmGg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-member-expression-to-functions\": \"^7.22.5\",
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
      \"version\": \"7.15.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.15.7.tgz\",
      \"integrity\": \"sha512-K4JvCtQqad9OY2+yTU8w+E82ywk/fe+ELNlt1G8z3bVGlZfn/hOcQQsUhGhW/N+tb3fxK800wLtKOE/aM0m72w==\",
      \"dev\": true
    },
    \"@babel/helper-validator-option\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-option/-/helper-validator-option-7.22.5.tgz\",
      \"integrity\": \"sha512-R3oB6xlIVKUnxNUxbmgq7pKjxpru24zlimpE8WK47fACIlM0II/Hm1RS8IaOI7NgCr6LNS+jl5l75m20npAziw==\",
      \"dev\": true
    },
    \"@babel/helper-wrap-function\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-wrap-function/-/helper-wrap-function-7.22.9.tgz\",
      \"integrity\": \"sha512-sZ+QzfauuUEfxSEjKFmi3qDSHgLsTPK/pEpoD/qonZKOtTPTLbf59oabPQ4rKekt9lFcj/hTZaOhWwFYrgjk+Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/template\": \"^7.22.5\",
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/helpers\": {
      \"version\": \"7.22.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helpers/-/helpers-7.22.6.tgz\",
      \"integrity\": \"sha512-YjDs6y/fVOYFV8hAf1rxd1QvR9wJe1pDBZ2AREKq/SDayfPzgk0PBnVuTCE5X1acEpMMNOVUqoe+OwiZGJ+OaA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/template\": \"^7.22.5\",
        \"@babel/traverse\": \"^7.22.6\",
        \"@babel/types\": \"^7.22.5\"
      }
    },
    \"@babel/highlight\": {
      \"version\": \"7.14.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.14.5.tgz\",
      \"integrity\": \"sha512-qf9u2WFWVV0MppaL877j2dBtQIDgmidgjGk5VIMw3OadXvYaXn66U1BFlH2t4+t3i+8PhedppRv+i40ABzd+gg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-validator-identifier\": \"^7.14.5\",
        \"chalk\": \"^2.0.0\",
        \"js-tokens\": \"^4.0.0\"
      },
      \"dependencies\": {
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
        \"supports-color\": {
          \"version\": \"5.5.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
          \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"@babel/parser\": {
      \"version\": \"7.22.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/parser/-/parser-7.22.7.tgz\",
      \"integrity\": \"sha512-7NF8pOkHP5o2vpmGgNGcfAeCvOYhGLyA3Z4eBQkT1RJlWu47n63bCs93QfJ2hIAFCil7L5P2IWhs1oToVgrL0Q==\",
      \"dev\": true
    },
    \"@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression/-/plugin-bugfix-safari-id-destructuring-collision-in-function-expression-7.22.5.tgz\",
      \"integrity\": \"sha512-NP1M5Rf+u2Gw9qfSO4ihjcTGW5zXTi36ITLd4/EoAcEhIZ0yjMqmftDNl3QC19CX7olhrjpyU454g/2W7X0jvQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining/-/plugin-bugfix-v8-spread-parameters-in-optional-chaining-7.22.5.tgz\",
      \"integrity\": \"sha512-31Bb65aZaUwqCbWMnZPduIZxCBngHFlzyN6Dq6KAJjtx+lx6ohKHubc61OomYi7XwVD4Ol0XCVz4h+pYFR048g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/plugin-transform-optional-chaining\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-proposal-private-property-in-object\": {
      \"version\": \"7.21.0-placeholder-for-preset-env.2\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-proposal-private-property-in-object/-/plugin-proposal-private-property-in-object-7.21.0-placeholder-for-preset-env.2.tgz\",
      \"integrity\": \"sha512-SOSkfJDddaM7mak6cPEpswyTRnuRltl429hMraQEglW+OkovnCzsiszTmsrlY//qLFjCpQDFRvjdm2wA5pPm9w==\",
      \"dev\": true
    },
    \"@babel/plugin-proposal-unicode-property-regex\": {
      \"version\": \"7.18.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-proposal-unicode-property-regex/-/plugin-proposal-unicode-property-regex-7.18.6.tgz\",
      \"integrity\": \"sha512-2BShG/d5yoZyXZfVePH91urL5wTG6ASZU9M4o03lKK8u8UW1y08OMttBSOADTcJrnPMpvDXRG3G8fyLh4ovs8w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.18.6\",
        \"@babel/helper-plugin-utils\": \"^7.18.6\"
      }
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
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-assertions/-/plugin-syntax-import-assertions-7.22.5.tgz\",
      \"integrity\": \"sha512-rdV97N7KqsRzeNGoWUOK6yUsWarLjE5Su/Snk9IYPU9CwkWHs4t+rTGOvffTR8XGkJMTAdLfO0xVnXm8wugIJg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-syntax-import-attributes\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-syntax-import-attributes/-/plugin-syntax-import-attributes-7.22.5.tgz\",
      \"integrity\": \"sha512-KwvoWDeNKPETmozyFE0P2rOLqh39EoQHNjqizrI5B8Vt0ZNS7M56s7dAiAqbYfiAYOuIzIh96z3iR2ktgu3tEg==\",
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
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-arrow-functions/-/plugin-transform-arrow-functions-7.22.5.tgz\",
      \"integrity\": \"sha512-26lTNXoVRdAnsaDXPpvCNUq+OVWEVC6bx7Vvz9rC53F2bagUWW4u4ii2+h8Fejfh7RYqPxn+libeFBBck9muEw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-async-generator-functions\": {
      \"version\": \"7.22.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-async-generator-functions/-/plugin-transform-async-generator-functions-7.22.7.tgz\",
      \"integrity\": \"sha512-7HmE7pk/Fmke45TODvxvkxRMV9RazV+ZZzhOL9AG8G29TLrr3jkjwF7uJfxZ30EoXpO+LJkq4oA8NjO2DTnEDg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-remap-async-to-generator\": \"^7.22.5\",
        \"@babel/plugin-syntax-async-generators\": \"^7.8.4\"
      }
    },
    \"@babel/plugin-transform-async-to-generator\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-async-to-generator/-/plugin-transform-async-to-generator-7.22.5.tgz\",
      \"integrity\": \"sha512-b1A8D8ZzE/VhNDoV1MSJTnpKkCG5bJo+19R4o4oy03zM7ws8yEMK755j61Dc3EyvdysbqH5BOOTquJ7ZX9C6vQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-imports\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-remap-async-to-generator\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-block-scoped-functions\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-block-scoped-functions/-/plugin-transform-block-scoped-functions-7.22.5.tgz\",
      \"integrity\": \"sha512-tdXZ2UdknEKQWKJP1KMNmuF5Lx3MymtMN/pvA+p/VEkhK8jVcQ1fzSy8KM9qRYhAf2/lV33hoMPKI/xaI9sADA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-block-scoping\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-block-scoping/-/plugin-transform-block-scoping-7.22.5.tgz\",
      \"integrity\": \"sha512-EcACl1i5fSQ6bt+YGuU/XGCeZKStLmyVGytWkpyhCLeQVA0eu6Wtiw92V+I1T/hnezUv7j74dA/Ro69gWcU+hg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-class-properties\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-class-properties/-/plugin-transform-class-properties-7.22.5.tgz\",
      \"integrity\": \"sha512-nDkQ0NfkOhPTq8YCLiWNxp1+f9fCobEjCb0n8WdbNUBc4IB5V7P1QnX9IjpSoquKrXF5SKojHleVNs2vGeHCHQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-class-static-block\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-class-static-block/-/plugin-transform-class-static-block-7.22.5.tgz\",
      \"integrity\": \"sha512-SPToJ5eYZLxlnp1UzdARpOGeC2GbHvr9d/UV0EukuVx8atktg194oe+C5BqQ8jRTkgLRVOPYeXRSBg1IlMoVRA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-class-static-block\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-transform-classes\": {
      \"version\": \"7.22.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-classes/-/plugin-transform-classes-7.22.6.tgz\",
      \"integrity\": \"sha512-58EgM6nuPNG6Py4Z3zSuu0xWu2VfodiMi72Jt5Kj2FECmaYk1RrTXA45z6KBFsu9tRgwQDwIiY4FXTt+YsSFAQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-compilation-targets\": \"^7.22.6\",
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/helper-optimise-call-expression\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"globals\": \"^11.1.0\"
      }
    },
    \"@babel/plugin-transform-computed-properties\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-computed-properties/-/plugin-transform-computed-properties-7.22.5.tgz\",
      \"integrity\": \"sha512-4GHWBgRf0krxPX+AaPtgBAlTgTeZmqDynokHOX7aqqAB4tHs3U2Y02zH6ETFdLZGcg9UQSD1WCmkVrE9ErHeOg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/template\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-destructuring\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-destructuring/-/plugin-transform-destructuring-7.22.5.tgz\",
      \"integrity\": \"sha512-GfqcFuGW8vnEqTUBM7UtPd5A4q797LTvvwKxXTgRsFjoqaJiEg9deBG6kWeQYkVEL569NpnmpC0Pkr/8BLKGnQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-dotall-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-dotall-regex/-/plugin-transform-dotall-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-5/Yk9QxCQCl+sOIB1WelKnVRxTJDSAIxtJLL2/pqL14ZVlbH0fUQUZa/T5/UnQtBNgghR7mfB8ERBKyKPCi7Vw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-duplicate-keys\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-duplicate-keys/-/plugin-transform-duplicate-keys-7.22.5.tgz\",
      \"integrity\": \"sha512-dEnYD+9BBgld5VBXHnF/DbYGp3fqGMsyxKbtD1mDyIA7AkTSpKXFhCVuj/oQVOoALfBs77DudA0BE4d5mcpmqw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-dynamic-import\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-dynamic-import/-/plugin-transform-dynamic-import-7.22.5.tgz\",
      \"integrity\": \"sha512-0MC3ppTB1AMxd8fXjSrbPa7LT9hrImt+/fcj+Pg5YMD7UQyWp/02+JWpdnCymmsXwIx5Z+sYn1bwCn4ZJNvhqQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-dynamic-import\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-exponentiation-operator\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-exponentiation-operator/-/plugin-transform-exponentiation-operator-7.22.5.tgz\",
      \"integrity\": \"sha512-vIpJFNM/FjZ4rh1myqIya9jXwrwwgFRHPjT3DkUA9ZLHuzox8jiXkOLvwm1H+PQIP3CqfC++WPKeuDi0Sjdj1g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-builder-binary-assignment-operator-visitor\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-export-namespace-from\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-export-namespace-from/-/plugin-transform-export-namespace-from-7.22.5.tgz\",
      \"integrity\": \"sha512-X4hhm7FRnPgd4nDA4b/5V280xCx6oL7Oob5+9qVS5C13Zq4bh1qq7LU0GgRU6b5dBWBvhGaXYVB4AcN6+ol6vg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-export-namespace-from\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-for-of\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-for-of/-/plugin-transform-for-of-7.22.5.tgz\",
      \"integrity\": \"sha512-3kxQjX1dU9uudwSshyLeEipvrLjBCVthCgeTp6CzE/9JYrlAIaeekVxRpCWsDDfYTfRZRoCeZatCQvwo+wvK8A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-function-name\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-function-name/-/plugin-transform-function-name-7.22.5.tgz\",
      \"integrity\": \"sha512-UIzQNMS0p0HHiQm3oelztj+ECwFnj+ZRV4KnguvlsD2of1whUeM6o7wGNj6oLwcDoAXQ8gEqfgC24D+VdIcevg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-compilation-targets\": \"^7.22.5\",
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-json-strings\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-json-strings/-/plugin-transform-json-strings-7.22.5.tgz\",
      \"integrity\": \"sha512-DuCRB7fu8MyTLbEQd1ew3R85nx/88yMoqo2uPSjevMj3yoN7CDM8jkgrY0wmVxfJZyJ/B9fE1iq7EQppWQmR5A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-json-strings\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-literals\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-literals/-/plugin-transform-literals-7.22.5.tgz\",
      \"integrity\": \"sha512-fTLj4D79M+mepcw3dgFBTIDYpbcB9Sm0bpm4ppXPaO+U+PKFFyV9MGRvS0gvGw62sd10kT5lRMKXAADb9pWy8g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-logical-assignment-operators\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-logical-assignment-operators/-/plugin-transform-logical-assignment-operators-7.22.5.tgz\",
      \"integrity\": \"sha512-MQQOUW1KL8X0cDWfbwYP+TbVbZm16QmQXJQ+vndPtH/BoO0lOKpVoEDMI7+PskYxH+IiE0tS8xZye0qr1lGzSA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-logical-assignment-operators\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-transform-member-expression-literals\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-member-expression-literals/-/plugin-transform-member-expression-literals-7.22.5.tgz\",
      \"integrity\": \"sha512-RZEdkNtzzYCFl9SE9ATaUMTj2hqMb4StarOJLrZRbqqU4HSBE7UlBw9WBWQiDzrJZJdUWiMTVDI6Gv/8DPvfew==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-modules-amd\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-amd/-/plugin-transform-modules-amd-7.22.5.tgz\",
      \"integrity\": \"sha512-R+PTfLTcYEmb1+kK7FNkhQ1gP4KgjpSO6HfH9+f8/yfp2Nt3ggBjiVpRwmwTlfqZLafYKJACy36yDXlEmI9HjQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-transforms\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-modules-commonjs\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-commonjs/-/plugin-transform-modules-commonjs-7.22.5.tgz\",
      \"integrity\": \"sha512-B4pzOXj+ONRmuaQTg05b3y/4DuFz3WcCNAXPLb2Q0GT0TrGKGxNKV4jwsXts+StaM0LQczZbOpj8o1DLPDJIiA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-transforms\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-simple-access\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-modules-systemjs\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-systemjs/-/plugin-transform-modules-systemjs-7.22.5.tgz\",
      \"integrity\": \"sha512-emtEpoaTMsOs6Tzz+nbmcePl6AKVtS1yC4YNAeMun9U8YCsgadPNxnOPQ8GhHFB2qdx+LZu9LgoC0Lthuu05DQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-module-transforms\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.5\"
      },
      \"dependencies\": {
        \"@babel/helper-validator-identifier\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.5.tgz\",
          \"integrity\": \"sha512-aJXu+6lErq8ltp+JhkJUfk1MTGyuA4v7f3pA+BJ5HLfNC6nAQ0Cpi9uOquUj8Hehg0aUiHzWQbOVJGao6ztBAQ==\",
          \"dev\": true
        }
      }
    },
    \"@babel/plugin-transform-modules-umd\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-modules-umd/-/plugin-transform-modules-umd-7.22.5.tgz\",
      \"integrity\": \"sha512-+S6kzefN/E1vkSsKx8kmQuqeQsvCKCd1fraCM7zXm4SFoggI099Tr4G8U81+5gtMdUeMQ4ipdQffbKLX0/7dBQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-transforms\": \"^7.22.5\",
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
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-new-target/-/plugin-transform-new-target-7.22.5.tgz\",
      \"integrity\": \"sha512-AsF7K0Fx/cNKVyk3a+DW0JLo+Ua598/NxMRvxDnkpCIGFh43+h/v2xyhRUYf6oD8gE4QtL83C7zZVghMjHd+iw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-nullish-coalescing-operator\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-nullish-coalescing-operator/-/plugin-transform-nullish-coalescing-operator-7.22.5.tgz\",
      \"integrity\": \"sha512-6CF8g6z1dNYZ/VXok5uYkkBBICHZPiGEl7oDnAx2Mt1hlHVHOSIKWJaXHjQJA5VB43KZnXZDIexMchY4y2PGdA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-nullish-coalescing-operator\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-numeric-separator\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-numeric-separator/-/plugin-transform-numeric-separator-7.22.5.tgz\",
      \"integrity\": \"sha512-NbslED1/6M+sXiwwtcAB/nieypGw02Ejf4KtDeMkCEpP6gWFMX1wI9WKYua+4oBneCCEmulOkRpwywypVZzs/g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-numeric-separator\": \"^7.10.4\"
      }
    },
    \"@babel/plugin-transform-object-rest-spread\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-object-rest-spread/-/plugin-transform-object-rest-spread-7.22.5.tgz\",
      \"integrity\": \"sha512-Kk3lyDmEslH9DnvCDA1s1kkd3YWQITiBOHngOtDL9Pt6BZjzqb6hiOlb8VfjiiQJ2unmegBqZu0rx5RxJb5vmQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.22.5\",
        \"@babel/helper-compilation-targets\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-object-rest-spread\": \"^7.8.3\",
        \"@babel/plugin-transform-parameters\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-object-super\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-object-super/-/plugin-transform-object-super-7.22.5.tgz\",
      \"integrity\": \"sha512-klXqyaT9trSjIUrcsYIfETAzmOEZL3cBYqOYLJxBHfMFFggmXOv+NYSX/Jbs9mzMVESw/WycLFPRx8ba/b2Ipw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-replace-supers\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-optional-catch-binding\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-optional-catch-binding/-/plugin-transform-optional-catch-binding-7.22.5.tgz\",
      \"integrity\": \"sha512-pH8orJahy+hzZje5b8e2QIlBWQvGpelS76C63Z+jhZKsmzfNaPQ+LaW6dcJ9bxTpo1mtXbgHwy765Ro3jftmUg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-optional-catch-binding\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-optional-chaining\": {
      \"version\": \"7.22.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-optional-chaining/-/plugin-transform-optional-chaining-7.22.6.tgz\",
      \"integrity\": \"sha512-Vd5HiWml0mDVtcLHIoEU5sw6HOUW/Zk0acLs/SAeuLzkGNOPc9DB4nkUajemhCmTIz3eiaKREZn2hQQqF79YTg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\",
        \"@babel/plugin-syntax-optional-chaining\": \"^7.8.3\"
      }
    },
    \"@babel/plugin-transform-parameters\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-parameters/-/plugin-transform-parameters-7.22.5.tgz\",
      \"integrity\": \"sha512-AVkFUBurORBREOmHRKo06FjHYgjrabpdqRSwq6+C7R5iTCZOsM4QbcB27St0a4U6fffyAOqh3s/qEfybAhfivg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-private-methods\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-private-methods/-/plugin-transform-private-methods-7.22.5.tgz\",
      \"integrity\": \"sha512-PPjh4gyrQnGe97JTalgRGMuU4icsZFnWkzicB/fUtzlKUqvsWBKEpPPfr5a2JiyirZkHxnAqkQMO5Z5B2kK3fA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-class-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-private-property-in-object\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-private-property-in-object/-/plugin-transform-private-property-in-object-7.22.5.tgz\",
      \"integrity\": \"sha512-/9xnaTTJcVoBtSSmrVyhtSvO3kbqS2ODoh2juEU72c3aYonNF0OMGiaz2gjukyKM2wBBYJP38S4JiE0Wfb5VMQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-annotate-as-pure\": \"^7.22.5\",
        \"@babel/helper-create-class-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/plugin-syntax-private-property-in-object\": \"^7.14.5\"
      }
    },
    \"@babel/plugin-transform-property-literals\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-property-literals/-/plugin-transform-property-literals-7.22.5.tgz\",
      \"integrity\": \"sha512-TiOArgddK3mK/x1Qwf5hay2pxI6wCZnvQqrFSqbtg1GLl2JcNMitVH/YnqjP+M31pLUeTfzY1HAXFDnUBV30rQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-regenerator\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-regenerator/-/plugin-transform-regenerator-7.22.5.tgz\",
      \"integrity\": \"sha512-rR7KePOE7gfEtNTh9Qw+iO3Q/e4DEsoQ+hdvM6QUDH7JRJ5qxq5AA52ZzBWbI5i9lfNuvySgOGP8ZN7LAmaiPw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"regenerator-transform\": \"^0.15.1\"
      },
      \"dependencies\": {
        \"regenerator-transform\": {
          \"version\": \"0.15.1\",
          \"resolved\": \"https://registry.npmjs.org/regenerator-transform/-/regenerator-transform-0.15.1.tgz\",
          \"integrity\": \"sha512-knzmNAcuyxV+gQCufkYcvOqX/qIIfHLv0u5x79kRxuGojfYVky1f15TzZEu2Avte8QGepvUNTnLskf8E6X6Vyg==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/runtime\": \"^7.8.4\"
          }
        }
      }
    },
    \"@babel/plugin-transform-reserved-words\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-reserved-words/-/plugin-transform-reserved-words-7.22.5.tgz\",
      \"integrity\": \"sha512-DTtGKFRQUDm8svigJzZHzb/2xatPc6TzNvAIJ5GqOKDsGFYgAskjRulbR/vGsPKq3OPqtexnz327qYpP57RFyA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-runtime\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-runtime/-/plugin-transform-runtime-7.22.9.tgz\",
      \"integrity\": \"sha512-9KjBH61AGJetCPYp/IEyLEp47SyybZb0nDRpBvmtEkm+rUIwxdlKpyNHI1TmsGkeuLclJdleQHRZ8XLBnnh8CQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-module-imports\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"babel-plugin-polyfill-corejs2\": \"^0.4.4\",
        \"babel-plugin-polyfill-corejs3\": \"^0.8.2\",
        \"babel-plugin-polyfill-regenerator\": \"^0.5.1\",
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
    \"@babel/plugin-transform-shorthand-properties\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-shorthand-properties/-/plugin-transform-shorthand-properties-7.22.5.tgz\",
      \"integrity\": \"sha512-vM4fq9IXHscXVKzDv5itkO1X52SmdFBFcMIBZ2FRn2nqVYqw6dBexUgMvAjHW+KXpPPViD/Yo3GrDEBaRC0QYA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-spread\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-spread/-/plugin-transform-spread-7.22.5.tgz\",
      \"integrity\": \"sha512-5ZzDQIGyvN4w8+dMmpohL6MBo+l2G7tfC/O2Dg7/hjpgeWvUx8FzfeOKxGog9IimPa4YekaQ9PlDqTLOljkcxg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-skip-transparent-expression-wrappers\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-sticky-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-sticky-regex/-/plugin-transform-sticky-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-zf7LuNpHG0iEeiyCNwX4j3gDg1jgt1k3ZdXBKbZSoA3BbGQGvMiSvfbZRR3Dr3aeJe3ooWFZxOOG3IRStYp2Bw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-template-literals\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-template-literals/-/plugin-transform-template-literals-7.22.5.tgz\",
      \"integrity\": \"sha512-5ciOehRNf+EyUeewo8NkbQiUs4d6ZxiHo6BcBcnFlgiJfu16q0bQUw9Jvo0b0gBKFG1SMhDSjeKXSYuJLeFSMA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-typeof-symbol\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-typeof-symbol/-/plugin-transform-typeof-symbol-7.22.5.tgz\",
      \"integrity\": \"sha512-bYkI5lMzL4kPii4HHEEChkD0rkc+nvnlR6+o/qdqR6zrm0Sv/nodmyLhlq2DO0YKLUNd2VePmPRjJXSBh9OIdA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-escapes\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-escapes/-/plugin-transform-unicode-escapes-7.22.5.tgz\",
      \"integrity\": \"sha512-biEmVg1IYB/raUO5wT1tgfacCef15Fbzhkx493D3urBI++6hpJ+RFG4SrWMn0NEZLfvilqKf3QDrRVZHo08FYg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-property-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-property-regex/-/plugin-transform-unicode-property-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-HCCIb+CbJIAE6sXn5CjFQXMwkCClcOfPCzTlilJ8cUatfzwHlWQkbtV0zD338u9dZskwvuOYTuuaMaA8J5EI5A==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-regex/-/plugin-transform-unicode-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-028laaOKptN5vHJf9/Arr/HiJekMd41hOEZYvNsrsXqJ7YPYuX2bQxh31fkZzGmq3YqHRJzYFFAVYvKfMPKqyg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/plugin-transform-unicode-sets-regex\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/plugin-transform-unicode-sets-regex/-/plugin-transform-unicode-sets-regex-7.22.5.tgz\",
      \"integrity\": \"sha512-lhMfi4FC15j13eKrh3DnYHjpGj6UKQHtNKTbtc1igvAhRy4+kLhV07OpLcsN0VgDEw/MjAvJO4BdMJsHwMhzCg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-create-regexp-features-plugin\": \"^7.22.5\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\"
      }
    },
    \"@babel/polyfill\": {
      \"version\": \"7.12.1\",
      \"resolved\": \"https://registry.npmjs.org/@babel/polyfill/-/polyfill-7.12.1.tgz\",
      \"integrity\": \"sha512-X0pi0V6gxLi6lFZpGmeNa4zxtwEmCs42isWLNjZZDE0Y8yVfgu0T2OAHlzBbdYlqbW/YXVvoBHpATEM+goCj8g==\",
      \"dev\": true,
      \"requires\": {
        \"core-js\": \"^2.6.5\",
        \"regenerator-runtime\": \"^0.13.4\"
      },
      \"dependencies\": {
        \"regenerator-runtime\": {
          \"version\": \"0.13.11\",
          \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.13.11.tgz\",
          \"integrity\": \"sha512-kY1AZVr2Ra+t+piVaJ4gxaFaReZVH40AKNo7UCX6W+dEwBo/2oZJzqfuN1qLq1oL45o56cPaTXELwrTh8Fpggg==\",
          \"dev\": true
        }
      }
    },
    \"@babel/preset-env\": {
      \"version\": \"7.22.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/preset-env/-/preset-env-7.22.9.tgz\",
      \"integrity\": \"sha512-wNi5H/Emkhll/bqPjsjQorSykrlfY5OWakd6AulLvMEytpKasMVUpVy8RL4qBIBs5Ac6/5i0/Rv0b/Fg6Eag/g==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.22.9\",
        \"@babel/helper-compilation-targets\": \"^7.22.9\",
        \"@babel/helper-plugin-utils\": \"^7.22.5\",
        \"@babel/helper-validator-option\": \"^7.22.5\",
        \"@babel/plugin-bugfix-safari-id-destructuring-collision-in-function-expression\": \"^7.22.5\",
        \"@babel/plugin-bugfix-v8-spread-parameters-in-optional-chaining\": \"^7.22.5\",
        \"@babel/plugin-proposal-private-property-in-object\": \"7.21.0-placeholder-for-preset-env.2\",
        \"@babel/plugin-syntax-async-generators\": \"^7.8.4\",
        \"@babel/plugin-syntax-class-properties\": \"^7.12.13\",
        \"@babel/plugin-syntax-class-static-block\": \"^7.14.5\",
        \"@babel/plugin-syntax-dynamic-import\": \"^7.8.3\",
        \"@babel/plugin-syntax-export-namespace-from\": \"^7.8.3\",
        \"@babel/plugin-syntax-import-assertions\": \"^7.22.5\",
        \"@babel/plugin-syntax-import-attributes\": \"^7.22.5\",
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
        \"@babel/plugin-transform-arrow-functions\": \"^7.22.5\",
        \"@babel/plugin-transform-async-generator-functions\": \"^7.22.7\",
        \"@babel/plugin-transform-async-to-generator\": \"^7.22.5\",
        \"@babel/plugin-transform-block-scoped-functions\": \"^7.22.5\",
        \"@babel/plugin-transform-block-scoping\": \"^7.22.5\",
        \"@babel/plugin-transform-class-properties\": \"^7.22.5\",
        \"@babel/plugin-transform-class-static-block\": \"^7.22.5\",
        \"@babel/plugin-transform-classes\": \"^7.22.6\",
        \"@babel/plugin-transform-computed-properties\": \"^7.22.5\",
        \"@babel/plugin-transform-destructuring\": \"^7.22.5\",
        \"@babel/plugin-transform-dotall-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-duplicate-keys\": \"^7.22.5\",
        \"@babel/plugin-transform-dynamic-import\": \"^7.22.5\",
        \"@babel/plugin-transform-exponentiation-operator\": \"^7.22.5\",
        \"@babel/plugin-transform-export-namespace-from\": \"^7.22.5\",
        \"@babel/plugin-transform-for-of\": \"^7.22.5\",
        \"@babel/plugin-transform-function-name\": \"^7.22.5\",
        \"@babel/plugin-transform-json-strings\": \"^7.22.5\",
        \"@babel/plugin-transform-literals\": \"^7.22.5\",
        \"@babel/plugin-transform-logical-assignment-operators\": \"^7.22.5\",
        \"@babel/plugin-transform-member-expression-literals\": \"^7.22.5\",
        \"@babel/plugin-transform-modules-amd\": \"^7.22.5\",
        \"@babel/plugin-transform-modules-commonjs\": \"^7.22.5\",
        \"@babel/plugin-transform-modules-systemjs\": \"^7.22.5\",
        \"@babel/plugin-transform-modules-umd\": \"^7.22.5\",
        \"@babel/plugin-transform-named-capturing-groups-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-new-target\": \"^7.22.5\",
        \"@babel/plugin-transform-nullish-coalescing-operator\": \"^7.22.5\",
        \"@babel/plugin-transform-numeric-separator\": \"^7.22.5\",
        \"@babel/plugin-transform-object-rest-spread\": \"^7.22.5\",
        \"@babel/plugin-transform-object-super\": \"^7.22.5\",
        \"@babel/plugin-transform-optional-catch-binding\": \"^7.22.5\",
        \"@babel/plugin-transform-optional-chaining\": \"^7.22.6\",
        \"@babel/plugin-transform-parameters\": \"^7.22.5\",
        \"@babel/plugin-transform-private-methods\": \"^7.22.5\",
        \"@babel/plugin-transform-private-property-in-object\": \"^7.22.5\",
        \"@babel/plugin-transform-property-literals\": \"^7.22.5\",
        \"@babel/plugin-transform-regenerator\": \"^7.22.5\",
        \"@babel/plugin-transform-reserved-words\": \"^7.22.5\",
        \"@babel/plugin-transform-shorthand-properties\": \"^7.22.5\",
        \"@babel/plugin-transform-spread\": \"^7.22.5\",
        \"@babel/plugin-transform-sticky-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-template-literals\": \"^7.22.5\",
        \"@babel/plugin-transform-typeof-symbol\": \"^7.22.5\",
        \"@babel/plugin-transform-unicode-escapes\": \"^7.22.5\",
        \"@babel/plugin-transform-unicode-property-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-unicode-regex\": \"^7.22.5\",
        \"@babel/plugin-transform-unicode-sets-regex\": \"^7.22.5\",
        \"@babel/preset-modules\": \"^0.1.5\",
        \"@babel/types\": \"^7.22.5\",
        \"babel-plugin-polyfill-corejs2\": \"^0.4.4\",
        \"babel-plugin-polyfill-corejs3\": \"^0.8.2\",
        \"babel-plugin-polyfill-regenerator\": \"^0.5.1\",
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
      \"version\": \"0.1.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/preset-modules/-/preset-modules-0.1.5.tgz\",
      \"integrity\": \"sha512-A57th6YRG7oR3cq/yt/Y84MvGgE0eJG2F1JLhKuyG+jFxEgrd/HAMJatiFtmOiZurz+0DkrvbheCLaV5f2JfjA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-plugin-utils\": \"^7.0.0\",
        \"@babel/plugin-proposal-unicode-property-regex\": \"^7.4.4\",
        \"@babel/plugin-transform-dotall-regex\": \"^7.4.4\",
        \"@babel/types\": \"^7.4.4\",
        \"esutils\": \"^2.0.2\"
      }
    },
    \"@babel/regjsgen\": {
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/regjsgen/-/regjsgen-0.8.0.tgz\",
      \"integrity\": \"sha512-x/rqGMdzj+fWZvCOYForTghzbtqPDZ5gPwaoNGHdgDfF2QA/XZbCBp4Moo5scrkAMPhB7z26XM/AaHuIJdgauA==\",
      \"dev\": true
    },
    \"@babel/runtime\": {
      \"version\": \"7.22.6\",
      \"resolved\": \"https://registry.npmjs.org/@babel/runtime/-/runtime-7.22.6.tgz\",
      \"integrity\": \"sha512-wDb5pWm4WDdF6LFUde3Jl8WzPA+3ZbxYqkC6xAXuD3irdEHN1k0NfTRrJD8ZD378SJ61miMLCqIOXYhd8x+AJQ==\",
      \"dev\": true,
      \"requires\": {
        \"regenerator-runtime\": \"^0.13.11\"
      },
      \"dependencies\": {
        \"regenerator-runtime\": {
          \"version\": \"0.13.11\",
          \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.13.11.tgz\",
          \"integrity\": \"sha512-kY1AZVr2Ra+t+piVaJ4gxaFaReZVH40AKNo7UCX6W+dEwBo/2oZJzqfuN1qLq1oL45o56cPaTXELwrTh8Fpggg==\",
          \"dev\": true
        }
      }
    },
    \"@babel/runtime-corejs2\": {
      \"version\": \"7.20.1\",
      \"resolved\": \"https://registry.npmjs.org/@babel/runtime-corejs2/-/runtime-corejs2-7.20.1.tgz\",
      \"integrity\": \"sha512-9hxzcvnXxG38gZ3ycsZ91+PNbpWwPVXmTsKaaS6mvJyXs49XziitKsj2SHCpTVwcedRc3hmYrzjGSs+9aAQe7Q==\",
      \"dev\": true,
      \"requires\": {
        \"core-js\": \"^2.6.12\",
        \"regenerator-runtime\": \"^0.13.10\"
      },
      \"dependencies\": {
        \"regenerator-runtime\": {
          \"version\": \"0.13.10\",
          \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.13.10.tgz\",
          \"integrity\": \"sha512-KepLsg4dU12hryUO7bp/axHAKvwGOCV0sGloQtpagJ12ai+ojVDqkeGSiRX1zlq+kjIMZ1t7gpze+26QqtdGqw==\",
          \"dev\": true
        }
      }
    },
    \"@babel/template\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/template/-/template-7.22.5.tgz\",
      \"integrity\": \"sha512-X7yV7eiwAxdj9k94NEylvbVHLiVG1nvzCV2EAowhxLTwODV1jl9UzZ48leOC0sH7OnuHrIkllaBgneUykIcZaw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.22.5\",
        \"@babel/parser\": \"^7.22.5\",
        \"@babel/types\": \"^7.22.5\"
      },
      \"dependencies\": {
        \"@babel/code-frame\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.22.5.tgz\",
          \"integrity\": \"sha512-Xmwn266vad+6DAqEB2A6V/CcZVp62BbwVmcOJc2RPuwih1kw02TjQvWVWlcKGbBPd+8/0V5DEkOcizRGYsspYQ==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/highlight\": \"^7.22.5\"
          }
        },
        \"@babel/helper-validator-identifier\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.5.tgz\",
          \"integrity\": \"sha512-aJXu+6lErq8ltp+JhkJUfk1MTGyuA4v7f3pA+BJ5HLfNC6nAQ0Cpi9uOquUj8Hehg0aUiHzWQbOVJGao6ztBAQ==\",
          \"dev\": true
        },
        \"@babel/highlight\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.22.5.tgz\",
          \"integrity\": \"sha512-BSKlD1hgnedS5XRnGOljZawtag7H1yPfQp0tdNJCHoH6AZ+Pcm9VvkrK59/Yy593Ypg0zMxH2BxD1VPYUQ7UIw==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/helper-validator-identifier\": \"^7.22.5\",
            \"chalk\": \"^2.0.0\",
            \"js-tokens\": \"^4.0.0\"
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
        \"supports-color\": {
          \"version\": \"5.5.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
          \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"@babel/traverse\": {
      \"version\": \"7.22.8\",
      \"resolved\": \"https://registry.npmjs.org/@babel/traverse/-/traverse-7.22.8.tgz\",
      \"integrity\": \"sha512-y6LPR+wpM2I3qJrsheCTwhIinzkETbplIgPBbwvqPKc+uljeA5gP+3nP8irdYt1mjQaDnlIcG+dw8OjAco4GXw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.22.5\",
        \"@babel/generator\": \"^7.22.7\",
        \"@babel/helper-environment-visitor\": \"^7.22.5\",
        \"@babel/helper-function-name\": \"^7.22.5\",
        \"@babel/helper-hoist-variables\": \"^7.22.5\",
        \"@babel/helper-split-export-declaration\": \"^7.22.6\",
        \"@babel/parser\": \"^7.22.7\",
        \"@babel/types\": \"^7.22.5\",
        \"debug\": \"^4.1.0\",
        \"globals\": \"^11.1.0\"
      },
      \"dependencies\": {
        \"@babel/code-frame\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.22.5.tgz\",
          \"integrity\": \"sha512-Xmwn266vad+6DAqEB2A6V/CcZVp62BbwVmcOJc2RPuwih1kw02TjQvWVWlcKGbBPd+8/0V5DEkOcizRGYsspYQ==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/highlight\": \"^7.22.5\"
          }
        },
        \"@babel/helper-validator-identifier\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.5.tgz\",
          \"integrity\": \"sha512-aJXu+6lErq8ltp+JhkJUfk1MTGyuA4v7f3pA+BJ5HLfNC6nAQ0Cpi9uOquUj8Hehg0aUiHzWQbOVJGao6ztBAQ==\",
          \"dev\": true
        },
        \"@babel/highlight\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.22.5.tgz\",
          \"integrity\": \"sha512-BSKlD1hgnedS5XRnGOljZawtag7H1yPfQp0tdNJCHoH6AZ+Pcm9VvkrK59/Yy593Ypg0zMxH2BxD1VPYUQ7UIw==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/helper-validator-identifier\": \"^7.22.5\",
            \"chalk\": \"^2.0.0\",
            \"js-tokens\": \"^4.0.0\"
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
        \"supports-color\": {
          \"version\": \"5.5.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
          \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"@babel/types\": {
      \"version\": \"7.22.5\",
      \"resolved\": \"https://registry.npmjs.org/@babel/types/-/types-7.22.5.tgz\",
      \"integrity\": \"sha512-zo3MIHGOkPOfoRXitsgHLjEXmlDaD/5KU1Uzuc9GNiZPhSqVxVRtxuPaSBZDsYZ9qV88AjtMtWW7ww98loJ9KA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-string-parser\": \"^7.22.5\",
        \"@babel/helper-validator-identifier\": \"^7.22.5\",
        \"to-fast-properties\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"@babel/helper-validator-identifier\": {
          \"version\": \"7.22.5\",
          \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.22.5.tgz\",
          \"integrity\": \"sha512-aJXu+6lErq8ltp+JhkJUfk1MTGyuA4v7f3pA+BJ5HLfNC6nAQ0Cpi9uOquUj8Hehg0aUiHzWQbOVJGao6ztBAQ==\",
          \"dev\": true
        }
      }
    },
    \"@cspotcode/source-map-consumer\": {
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/@cspotcode/source-map-consumer/-/source-map-consumer-0.8.0.tgz\",
      \"integrity\": \"sha512-41qniHzTU8yAGbCp04ohlmSrZf8bkf/iJsl3V0dRGsQN/5GFfx+LbCSsCpp2gqrqjTVg/K6O8ycoV35JIwAzAg==\",
      \"dev\": true
    },
    \"@cspotcode/source-map-support\": {
      \"version\": \"0.7.0\",
      \"resolved\": \"https://registry.npmjs.org/@cspotcode/source-map-support/-/source-map-support-0.7.0.tgz\",
      \"integrity\": \"sha512-X4xqRHqN8ACt2aHVe51OxeA2HjbcL4MqFqXkrmQszJ1NOUuUu5u6Vqx/0lZSVNku7velL5FC/s5uEAj1lsBMhA==\",
      \"dev\": true,
      \"requires\": {
        \"@cspotcode/source-map-consumer\": \"0.8.0\"
      }
    },
    \"@csstools/convert-colors\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/@csstools/convert-colors/-/convert-colors-1.4.0.tgz\",
      \"integrity\": \"sha512-5a6wqoJV/xEdbRNKVo6I4hO3VjyDq//8q2f9I6PBAvMesJHFauXDorcNCsr9RzvsZnaWi5NYCcfyqP1QeFHFbw==\",
      \"dev\": true
    },
    \"@discoveryjs/json-ext\": {
      \"version\": \"0.5.7\",
      \"resolved\": \"https://registry.npmjs.org/@discoveryjs/json-ext/-/json-ext-0.5.7.tgz\",
      \"integrity\": \"sha512-dBVuXR082gk3jsFp7Rd/JI4kytwGHecnCoTtXFb7DB6CNHp4rg5k1bhg0nWdLGLnOV71lmDzGQaLMy8iPLY0pw==\",
      \"dev\": true
    },
    \"@eslint/eslintrc\": {
      \"version\": \"0.4.3\",
      \"resolved\": \"https://registry.npmjs.org/@eslint/eslintrc/-/eslintrc-0.4.3.tgz\",
      \"integrity\": \"sha512-J6KFFz5QCYUJq3pf0mjEcCJVERbzv71PUIDczuh9JkwGEzced6CO5ADLHB1rbf/+oPBtoPfMYNOpGDzCANlbXw==\",
      \"dev\": true,
      \"requires\": {
        \"ajv\": \"^6.12.4\",
        \"debug\": \"^4.1.1\",
        \"espree\": \"^7.3.0\",
        \"globals\": \"^13.9.0\",
        \"ignore\": \"^4.0.6\",
        \"import-fresh\": \"^3.2.1\",
        \"js-yaml\": \"^3.13.1\",
        \"minimatch\": \"^3.0.4\",
        \"strip-json-comments\": \"^3.1.1\"
      },
      \"dependencies\": {
        \"globals\": {
          \"version\": \"13.20.0\",
          \"resolved\": \"https://registry.npmjs.org/globals/-/globals-13.20.0.tgz\",
          \"integrity\": \"sha512-Qg5QtVkCy/kv3FUSlu4ukeZDVf9ee0iXLAUYX13gbR17bnejFTzr4iS9bY7kwCf1NztRNm1t91fjOiyx4CSwPQ==\",
          \"dev\": true,
          \"requires\": {
            \"type-fest\": \"^0.20.2\"
          }
        },
        \"ignore\": {
          \"version\": \"4.0.6\",
          \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-4.0.6.tgz\",
          \"integrity\": \"sha512-cyFDKrqc/YdcWFniJhzI42+AzS+gNwmUzOSFcRCQYwySuBBBy/KjuxWLZ/FHEH6Moq1NizMOBWyTcv8O4OZIMg==\",
          \"dev\": true
        },
        \"strip-json-comments\": {
          \"version\": \"3.1.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-json-comments/-/strip-json-comments-3.1.1.tgz\",
          \"integrity\": \"sha512-6fPc+R4ihwqP6N/aIv2f1gMH8lOVtWQHoqC4yK6oSDVVocumAsfCqjkXnqiYMhmMwS/mEHLp7Vehlt3ql6lEig==\",
          \"dev\": true
        }
      }
    },
    \"@gar/promisify\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@gar/promisify/-/promisify-1.1.2.tgz\",
      \"integrity\": \"sha512-82cpyJyKRoQoRi+14ibCeGPu0CwypgtBAdBhq1WfvagpCZNKqwXbKwXllYSMG91DhmG4jt9gN8eP6lGOtozuaw==\",
      \"dev\": true
    },
    \"@humanwhocodes/config-array\": {
      \"version\": \"0.5.0\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/config-array/-/config-array-0.5.0.tgz\",
      \"integrity\": \"sha512-FagtKFz74XrTl7y6HCzQpwDfXP0yhxe9lHLD1UZxjvZIcbyRz8zTFF/yYNfSfzU414eDwZ1SrO0Qvtyf+wFMQg==\",
      \"dev\": true,
      \"requires\": {
        \"@humanwhocodes/object-schema\": \"^1.2.0\",
        \"debug\": \"^4.1.1\",
        \"minimatch\": \"^3.0.4\"
      }
    },
    \"@humanwhocodes/object-schema\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@humanwhocodes/object-schema/-/object-schema-1.2.1.tgz\",
      \"integrity\": \"sha512-ZnQMnLV4e7hDlUvw8H+U8ASL02SS2Gn6+9Ac3wGGLIe7+je2AeAOxPY+izIPJDfFDb7eDjev0Us8MO1iFRN8hA==\",
      \"dev\": true
    },
    \"@jest/types\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/@jest/types/-/types-26.6.2.tgz\",
      \"integrity\": \"sha512-fC6QCp7Sc5sX6g8Tvbmj4XUTbyrik0akgRy03yjXbQaBWWNWGE7SGtJk98m0N8nzegD/7SggrUlivxo5ax4KWQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/istanbul-lib-coverage\": \"^2.0.0\",
        \"@types/istanbul-reports\": \"^3.0.0\",
        \"@types/node\": \"*\",
        \"@types/yargs\": \"^15.0.0\",
        \"chalk\": \"^4.0.0\"
      }
    },
    \"@jridgewell/gen-mapping\": {
      \"version\": \"0.3.3\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/gen-mapping/-/gen-mapping-0.3.3.tgz\",
      \"integrity\": \"sha512-HLhSWOLRi875zjjMG/r+Nv0oCW8umGb0BgEhyX3dDX3egwZtB8PqLnjz3yedt8R5StBrzcg4aBpnh8UA9D1BoQ==\",
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
    \"@jridgewell/sourcemap-codec\": {
      \"version\": \"1.4.15\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/sourcemap-codec/-/sourcemap-codec-1.4.15.tgz\",
      \"integrity\": \"sha512-eF2rxCRulEKXHTRiDrDy6erMYWqNw4LPdQ8UQA4huuxaQsVeRPFl2oM8oDGxMFhJUWZf9McpLtJasDDZb/Bpeg==\",
      \"dev\": true
    },
    \"@jridgewell/trace-mapping\": {
      \"version\": \"0.3.18\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/trace-mapping/-/trace-mapping-0.3.18.tgz\",
      \"integrity\": \"sha512-w+niJYzMHdd7USdiH2U6869nqhD2nbfZXND5Yp93qIbEmnDNk7PD48o+YchRVpzMU7M6jVCbenTR7PA1FLQ9pA==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/resolve-uri\": \"3.1.0\",
        \"@jridgewell/sourcemap-codec\": \"1.4.14\"
      },
      \"dependencies\": {
        \"@jridgewell/sourcemap-codec\": {
          \"version\": \"1.4.14\",
          \"resolved\": \"https://registry.npmjs.org/@jridgewell/sourcemap-codec/-/sourcemap-codec-1.4.14.tgz\",
          \"integrity\": \"sha512-XPSJHWmi394fuUuzDnGz1wiKqWfo1yXecHQMRf2l6hztTO+nPru658AyDngaBe7isIxEkRsPR3FZh+s7iVa4Uw==\",
          \"dev\": true
        }
      }
    },
    \"@nicolo-ribaudo/semver-v6\": {
      \"version\": \"6.3.3\",
      \"resolved\": \"https://registry.npmjs.org/@nicolo-ribaudo/semver-v6/-/semver-v6-6.3.3.tgz\",
      \"integrity\": \"sha512-3Yc1fUTs69MG/uZbJlLSI3JISMn2UV2rg+1D/vROUqZyh3l6iYHCs7GMp+M40ZD7yOdDbYjJcU1oTJhrc+dGKg==\",
      \"dev\": true
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
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/@npmcli/fs/-/fs-1.0.0.tgz\",
      \"integrity\": \"sha512-8ltnOpRR/oJbOp8vaGUnipOi3bqkcW+sLHFlyXIr08OGHmVJLB1Hn7QtGXbYcpVtH1gAYZTlmDXtE4YV0+AMMQ==\",
      \"dev\": true,
      \"requires\": {
        \"@gar/promisify\": \"^1.0.1\",
        \"semver\": \"^7.3.5\"
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
        \"mkdirp\": {
          \"version\": \"1.0.4\",
          \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
          \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
          \"dev\": true
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
    \"@sindresorhus/is\": {
      \"version\": \"4.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@sindresorhus/is/-/is-4.2.0.tgz\",
      \"integrity\": \"sha512-VkE3KLBmJwcCaVARtQpfuKcKv8gcBmUubrfHGF84dXuuW6jgsRYxPtzcIhPyK9WAPpRt2/xY6zkD9MnRaJzSyw==\"
    },
    \"@szmarczak/http-timer\": {
      \"version\": \"4.0.6\",
      \"resolved\": \"https://registry.npmjs.org/@szmarczak/http-timer/-/http-timer-4.0.6.tgz\",
      \"integrity\": \"sha512-4BAffykYOgO+5nzBWYwE3W90sBgLJoUPRWWcL8wlyiM8IB8ipJz3UMJ9KXQd1RKQXpKp8Tutn80HZtWsu2u76w==\",
      \"requires\": {
        \"defer-to-connect\": \"^2.0.0\"
      }
    },
    \"@tootallnate/once\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@tootallnate/once/-/once-1.1.2.tgz\",
      \"integrity\": \"sha512-RbzJvlNzmRq5c3O09UipeuXno4tA1FE6ikOjxZK0tuxVv3412l64l5t1W5pj4+rJq9vpkm/kwiR07aZXnsKPxw==\",
      \"dev\": true
    },
    \"@tsconfig/node10\": {
      \"version\": \"1.0.8\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node10/-/node10-1.0.8.tgz\",
      \"integrity\": \"sha512-6XFfSQmMgq0CFLY1MslA/CPUfhIL919M1rMsa5lP2P097N2Wd1sSX0tx1u4olM16fLNhtHZpRhedZJphNJqmZg==\",
      \"dev\": true
    },
    \"@tsconfig/node12\": {
      \"version\": \"1.0.9\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node12/-/node12-1.0.9.tgz\",
      \"integrity\": \"sha512-/yBMcem+fbvhSREH+s14YJi18sp7J9jpuhYByADT2rypfajMZZN4WQ6zBGgBKp53NKmqI36wFYDb3yaMPurITw==\",
      \"dev\": true
    },
    \"@tsconfig/node14\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node14/-/node14-1.0.1.tgz\",
      \"integrity\": \"sha512-509r2+yARFfHHE7T6Puu2jjkoycftovhXRqW328PDXTVGKihlb1P8Z9mMZH04ebyajfRY7dedfGynlrFHJUQCg==\",
      \"dev\": true
    },
    \"@tsconfig/node16\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node16/-/node16-1.0.2.tgz\",
      \"integrity\": \"sha512-eZxlbI8GZscaGS7kkc/trHTT5xgrjH3/1n2JDwusC9iahPKWMRvRjJSAN5mCXviuTGQ/lHnhvv8Q1YTpnfz9gA==\",
      \"dev\": true
    },
    \"@types/cacheable-request\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/@types/cacheable-request/-/cacheable-request-6.0.2.tgz\",
      \"integrity\": \"sha512-B3xVo+dlKM6nnKTcmm5ZtY/OL8bOAOd2Olee9M1zft65ox50OzjEHW91sDiU9j6cvW8Ejg1/Qkf4xd2kugApUA==\",
      \"requires\": {
        \"@types/http-cache-semantics\": \"*\",
        \"@types/keyv\": \"*\",
        \"@types/node\": \"*\",
        \"@types/responselike\": \"*\"
      }
    },
    \"@types/glob\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@types/glob/-/glob-7.2.0.tgz\",
      \"integrity\": \"sha512-ZUxbzKl0IfJILTS6t7ip5fQQM/J3TJYubDm3nMbgubNNYS62eXeUpoLUC8/7fJNiFYHTrGPQn7hspDUzIHX3UA==\",
      \"dev\": true,
      \"requires\": {
        \"@types/minimatch\": \"*\",
        \"@types/node\": \"*\"
      }
    },
    \"@types/http-cache-semantics\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/http-cache-semantics/-/http-cache-semantics-4.0.1.tgz\",
      \"integrity\": \"sha512-SZs7ekbP8CN0txVG2xVRH6EgKmEm31BOxA07vkFaETzZz1xh+cbt8BcI0slpymvwhx5dlFnQG2rTlPVQn+iRPQ==\"
    },
    \"@types/istanbul-lib-coverage\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/istanbul-lib-coverage/-/istanbul-lib-coverage-2.0.3.tgz\",
      \"integrity\": \"sha512-sz7iLqvVUg1gIedBOvlkxPlc8/uVzyS5OwGz1cKjXzkl3FpL3al0crU8YGU1WoHkxn0Wxbw5tyi6hvzJKNzFsw==\",
      \"dev\": true
    },
    \"@types/istanbul-lib-report\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/@types/istanbul-lib-report/-/istanbul-lib-report-3.0.0.tgz\",
      \"integrity\": \"sha512-plGgXAPfVKFoYfa9NpYDAkseG+g6Jr294RqeqcqDixSbU34MZVJRi/P+7Y8GDpzkEwLaGZZOpKIEmeVZNtKsrg==\",
      \"dev\": true,
      \"requires\": {
        \"@types/istanbul-lib-coverage\": \"*\"
      }
    },
    \"@types/istanbul-reports\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/istanbul-reports/-/istanbul-reports-3.0.1.tgz\",
      \"integrity\": \"sha512-c3mAZEuK0lvBp8tmuL74XRKn1+y2dcwOUpH7x4WrF6gk1GIgiluDRgMYQtw2OFcBvAJWlt6ASU3tSqxp0Uu0Aw==\",
      \"dev\": true,
      \"requires\": {
        \"@types/istanbul-lib-report\": \"*\"
      }
    },
    \"@types/json-schema\": {
      \"version\": \"7.0.9\",
      \"resolved\": \"https://registry.npmjs.org/@types/json-schema/-/json-schema-7.0.9.tgz\",
      \"integrity\": \"sha512-qcUXuemtEu+E5wZSJHNxUXeCZhAfXKQ41D+duX+VYPde7xyEVZci+/oXKJL13tnRs9lR2pr4fod59GT6/X1/yQ==\",
      \"dev\": true
    },
    \"@types/json5\": {
      \"version\": \"0.0.29\",
      \"resolved\": \"https://registry.npmjs.org/@types/json5/-/json5-0.0.29.tgz\",
      \"integrity\": \"sha1-7ihweulOEdK4J7y+UnC86n8+ce4=\",
      \"dev\": true
    },
    \"@types/keyv\": {
      \"version\": \"3.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/keyv/-/keyv-3.1.3.tgz\",
      \"integrity\": \"sha512-FXCJgyyN3ivVgRoml4h94G/p3kY+u/B86La+QptcqJaWtBWtmc6TtkNfS40n9bIvyLteHh7zXOtgbobORKPbDg==\",
      \"requires\": {
        \"@types/node\": \"*\"
      }
    },
    \"@types/minimatch\": {
      \"version\": \"3.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimatch/-/minimatch-3.0.5.tgz\",
      \"integrity\": \"sha512-Klz949h02Gz2uZCMGwDUSDS1YBlTdDDgbWHi+81l29tQALUtvz4rAYi5uoVhE5Lagoq6DeqAUlbrHvW/mXDgdQ==\",
      \"dev\": true
    },
    \"@types/minimist\": {
      \"version\": \"1.2.2\",
      \"resolved\": \"https://registry.npmjs.org/@types/minimist/-/minimist-1.2.2.tgz\",
      \"integrity\": \"sha512-jhuKLIRrhvCPLqwPcx6INqmKeiA5EWrsCOPhrlFSrbrmU4ZMPjj5Ul/oLCMDO98XRUIwVm78xICz4EPCektzeQ==\",
      \"dev\": true
    },
    \"@types/node\": {
      \"version\": \"16.11.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-16.11.1.tgz\",
      \"integrity\": \"sha512-PYGcJHL9mwl1Ek3PLiYgyEKtwTMmkMw4vbiyz/ps3pfdRYLVv+SN7qHVAImrjdAXxgluDEw6Ph4lyv+m9UpRmA==\"
    },
    \"@types/normalize-package-data\": {
      \"version\": \"2.4.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/normalize-package-data/-/normalize-package-data-2.4.1.tgz\",
      \"integrity\": \"sha512-Gj7cI7z+98M282Tqmp2K5EIsoouUEzbBJhQQzDE3jSIRk6r9gsz0oUokqIUR4u1R3dMHo0pDHM7sNOHyhulypw==\",
      \"dev\": true
    },
    \"@types/responselike\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/@types/responselike/-/responselike-1.0.0.tgz\",
      \"integrity\": \"sha512-85Y2BjiufFzaMIlvJDvTTB8Fxl2xfLo4HgmHzVBz08w4wDePCTjYw66PdrolO0kzli3yam/YCgRufyo1DdQVTA==\",
      \"requires\": {
        \"@types/node\": \"*\"
      }
    },
    \"@types/source-list-map\": {
      \"version\": \"0.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@types/source-list-map/-/source-list-map-0.1.2.tgz\",
      \"integrity\": \"sha512-K5K+yml8LTo9bWJI/rECfIPrGgxdpeNbj+d53lwN4QjW1MCwlkhUms+gtdzigTeUyBr09+u8BwOIY3MXvHdcsA==\",
      \"dev\": true
    },
    \"@types/stack-utils\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/stack-utils/-/stack-utils-2.0.1.tgz\",
      \"integrity\": \"sha512-Hl219/BT5fLAaz6NDkSuhzasy49dwQS/DSdu4MdggFB8zcXv7vflBI3xp7FEmkmdDkBUI2bPUNeMttp2knYdxw==\",
      \"dev\": true
    },
    \"@types/tapable\": {
      \"version\": \"1.0.8\",
      \"resolved\": \"https://registry.npmjs.org/@types/tapable/-/tapable-1.0.8.tgz\",
      \"integrity\": \"sha512-ipixuVrh2OdNmauvtT51o3d8z12p6LtFW9in7U79der/kwejjdNchQC5UMn5u/KxNoM7VHHOs/l8KS8uHxhODQ==\",
      \"dev\": true
    },
    \"@types/uglify-js\": {
      \"version\": \"3.13.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/uglify-js/-/uglify-js-3.13.1.tgz\",
      \"integrity\": \"sha512-O3MmRAk6ZuAKa9CHgg0Pr0+lUOqoMLpc9AS4R8ano2auvsg7IE8syF3Xh/NPr26TWklxYcqoEEFdzLLs1fV9PQ==\",
      \"dev\": true,
      \"requires\": {
        \"source-map\": \"^0.6.1\"
      }
    },
    \"@types/webpack\": {
      \"version\": \"4.41.31\",
      \"resolved\": \"https://registry.npmjs.org/@types/webpack/-/webpack-4.41.31.tgz\",
      \"integrity\": \"sha512-/i0J7sepXFIp1ZT7FjUGi1eXMCg8HCCzLJEQkKsOtbJFontsJLolBcDC+3qxn5pPwiCt1G0ZdRmYRzNBtvpuGQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/node\": \"*\",
        \"@types/tapable\": \"^1\",
        \"@types/uglify-js\": \"*\",
        \"@types/webpack-sources\": \"*\",
        \"anymatch\": \"^3.0.0\",
        \"source-map\": \"^0.6.0\"
      }
    },
    \"@types/webpack-sources\": {
      \"version\": \"3.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@types/webpack-sources/-/webpack-sources-3.2.0.tgz\",
      \"integrity\": \"sha512-Ft7YH3lEVRQ6ls8k4Ff1oB4jN6oy/XmU6tQISKdhfh+1mR+viZFphS6WL0IrtDOzvefmJg5a0s7ZQoRXwqTEFg==\",
      \"dev\": true,
      \"requires\": {
        \"@types/node\": \"*\",
        \"@types/source-list-map\": \"*\",
        \"source-map\": \"^0.7.3\"
      },
      \"dependencies\": {
        \"source-map\": {
          \"version\": \"0.7.3\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.7.3.tgz\",
          \"integrity\": \"sha512-CkCj6giN3S+n9qrYiBTX5gystlENnRW5jZeNLHpe6aue+SrHcG5VYwujhW9s4dY31mEGsxBDrHR6oI69fTXsaQ==\",
          \"dev\": true
        }
      }
    },
    \"@types/yargs\": {
      \"version\": \"15.0.14\",
      \"resolved\": \"https://registry.npmjs.org/@types/yargs/-/yargs-15.0.14.tgz\",
      \"integrity\": \"sha512-yEJzHoxf6SyQGhBhIYGXQDSCkJjB6HohDShto7m8vaKg9Yp0Yn8+71J9eakh2bnPg6BfsH9PRMhiRTZnd4eXGQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/yargs-parser\": \"*\"
      }
    },
    \"@types/yargs-parser\": {
      \"version\": \"20.2.1\",
      \"resolved\": \"https://registry.npmjs.org/@types/yargs-parser/-/yargs-parser-20.2.1.tgz\",
      \"integrity\": \"sha512-7tFImggNeNBVMsn0vLrpn1H1uPrUBdnARPTpZoitY37ZrdJREzf7I16tMrlK3hen349gr1NYh8CmZQa7CTG6Aw==\",
      \"dev\": true
    },
    \"@types/zen-observable\": {
      \"version\": \"0.8.3\",
      \"resolved\": \"https://registry.npmjs.org/@types/zen-observable/-/zen-observable-0.8.3.tgz\",
      \"integrity\": \"sha512-fbF6oTd4sGGy0xjHPKAt+eS2CrxJ3+6gQ3FGcBoIJR2TLAyCkCyI8JqZNy+FeON0AhVgNJoUumVoZQjBFUqHkw==\"
    },
    \"@vue/component-compiler-utils\": {
      \"version\": \"3.2.2\",
      \"resolved\": \"https://registry.npmjs.org/@vue/component-compiler-utils/-/component-compiler-utils-3.2.2.tgz\",
      \"integrity\": \"sha512-rAYMLmgMuqJFWAOb3Awjqqv5X3Q3hVr4jH/kgrFJpiU0j3a90tnNBplqbj+snzrgZhC9W128z+dtgMifOiMfJg==\",
      \"dev\": true,
      \"requires\": {
        \"consolidate\": \"^0.15.1\",
        \"hash-sum\": \"^1.0.2\",
        \"lru-cache\": \"^4.1.2\",
        \"merge-source-map\": \"^1.1.0\",
        \"postcss\": \"^7.0.36\",
        \"postcss-selector-parser\": \"^6.0.2\",
        \"prettier\": \"^1.18.2\",
        \"source-map\": \"~0.6.1\",
        \"vue-template-es2015-compiler\": \"^1.9.0\"
      },
      \"dependencies\": {
        \"postcss-selector-parser\": {
          \"version\": \"6.0.6\",
          \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-6.0.6.tgz\",
          \"integrity\": \"sha512-9LXrvaaX3+mcv5xkg5kFwqSzSH1JIObIx51PrndZwlmznwXRfxMddDvo9gve3gVR8ZTKgoFDdWkbRFmEhT4PMg==\",
          \"dev\": true,
          \"requires\": {
            \"cssesc\": \"^3.0.0\",
            \"util-deprecate\": \"^1.0.2\"
          }
        }
      }
    },
    \"@vue/test-utils\": {
      \"version\": \"1.2.2\",
      \"resolved\": \"https://registry.npmjs.org/@vue/test-utils/-/test-utils-1.2.2.tgz\",
      \"integrity\": \"sha512-P+yiAsszoy8z1TqXiVUnAZaJj0WGGz5fCxm4bOSI6Cpwy1+PNYwYxDv0ROAA/SUtOPppV+aD8tp/QWwxf8ROJw==\",
      \"dev\": true,
      \"requires\": {
        \"dom-event-types\": \"^1.0.0\",
        \"lodash\": \"^4.17.15\",
        \"pretty\": \"^2.0.0\"
      }
    },
    \"@webassemblyjs/ast\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/ast/-/ast-1.9.0.tgz\",
      \"integrity\": \"sha512-C6wW5L+b7ogSDVqymbkkvuW9kruN//YisMED04xzeBBqjHa2FYnmvOlS6Xj68xWQRgWvI9cIglsjFowH/RJyEA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/helper-module-context\": \"1.9.0\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.9.0\",
        \"@webassemblyjs/wast-parser\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/floating-point-hex-parser\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/floating-point-hex-parser/-/floating-point-hex-parser-1.9.0.tgz\",
      \"integrity\": \"sha512-TG5qcFsS8QB4g4MhrxK5TqfdNe7Ey/7YL/xN+36rRjl/BlGE/NcBvJcqsRgCP6Z92mRE+7N50pRIi8SmKUbcQA==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-api-error\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-api-error/-/helper-api-error-1.9.0.tgz\",
      \"integrity\": \"sha512-NcMLjoFMXpsASZFxJ5h2HZRcEhDkvnNFOAKneP5RbKRzaWJN36NC4jqQHKwStIhGXu5mUWlUUk7ygdtrO8lbmw==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-buffer\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-buffer/-/helper-buffer-1.9.0.tgz\",
      \"integrity\": \"sha512-qZol43oqhq6yBPx7YM3m9Bv7WMV9Eevj6kMi6InKOuZxhw+q9hOkvq5e/PpKSiLfyetpaBnogSbNCfBwyB00CA==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-code-frame\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-code-frame/-/helper-code-frame-1.9.0.tgz\",
      \"integrity\": \"sha512-ERCYdJBkD9Vu4vtjUYe8LZruWuNIToYq/ME22igL+2vj2dQ2OOujIZr3MEFvfEaqKoVqpsFKAGsRdBSBjrIvZA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/wast-printer\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/helper-fsm\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-fsm/-/helper-fsm-1.9.0.tgz\",
      \"integrity\": \"sha512-OPRowhGbshCb5PxJ8LocpdX9Kl0uB4XsAjl6jH/dWKlk/mzsANvhwbiULsaiqT5GZGT9qinTICdj6PLuM5gslw==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-module-context\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-module-context/-/helper-module-context-1.9.0.tgz\",
      \"integrity\": \"sha512-MJCW8iGC08tMk2enck1aPW+BE5Cw8/7ph/VGZxwyvGbJwjktKkDK7vy7gAmMDx88D7mhDTCNKAW5tED+gZ0W8g==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/helper-wasm-bytecode\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-wasm-bytecode/-/helper-wasm-bytecode-1.9.0.tgz\",
      \"integrity\": \"sha512-R7FStIzyNcd7xKxCZH5lE0Bqy+hGTwS3LJjuv1ZVxd9O7eHCedSdrId/hMOd20I+v8wDXEn+bjfKDLzTepoaUw==\",
      \"dev\": true
    },
    \"@webassemblyjs/helper-wasm-section\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/helper-wasm-section/-/helper-wasm-section-1.9.0.tgz\",
      \"integrity\": \"sha512-XnMB8l3ek4tvrKUUku+IVaXNHz2YsJyOOmz+MMkZvh8h1uSJpSen6vYnw3IoQ7WwEuAhL8Efjms1ZWjqh2agvw==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/helper-buffer\": \"1.9.0\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.9.0\",
        \"@webassemblyjs/wasm-gen\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/ieee754\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/ieee754/-/ieee754-1.9.0.tgz\",
      \"integrity\": \"sha512-dcX8JuYU/gvymzIHc9DgxTzUUTLexWwt8uCTWP3otys596io0L5aW02Gb1RjYpx2+0Jus1h4ZFqjla7umFniTg==\",
      \"dev\": true,
      \"requires\": {
        \"@xtuc/ieee754\": \"^1.2.0\"
      }
    },
    \"@webassemblyjs/leb128\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/leb128/-/leb128-1.9.0.tgz\",
      \"integrity\": \"sha512-ENVzM5VwV1ojs9jam6vPys97B/S65YQtv/aanqnU7D8aSoHFX8GyhGg0CMfyKNIHBuAVjy3tlzd5QMMINa7wpw==\",
      \"dev\": true,
      \"requires\": {
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"@webassemblyjs/utf8\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/utf8/-/utf8-1.9.0.tgz\",
      \"integrity\": \"sha512-GZbQlWtopBTP0u7cHrEx+73yZKrQoBMpwkGEIqlacljhXCkVM1kMQge/Mf+csMJAjEdSwhOyLAS0AoR3AG5P8w==\",
      \"dev\": true
    },
    \"@webassemblyjs/wasm-edit\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-edit/-/wasm-edit-1.9.0.tgz\",
      \"integrity\": \"sha512-FgHzBm80uwz5M8WKnMTn6j/sVbqilPdQXTWraSjBwFXSYGirpkSWE2R9Qvz9tNiTKQvoKILpCuTjBKzOIm0nxw==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/helper-buffer\": \"1.9.0\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.9.0\",
        \"@webassemblyjs/helper-wasm-section\": \"1.9.0\",
        \"@webassemblyjs/wasm-gen\": \"1.9.0\",
        \"@webassemblyjs/wasm-opt\": \"1.9.0\",
        \"@webassemblyjs/wasm-parser\": \"1.9.0\",
        \"@webassemblyjs/wast-printer\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/wasm-gen\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-gen/-/wasm-gen-1.9.0.tgz\",
      \"integrity\": \"sha512-cPE3o44YzOOHvlsb4+E9qSqjc9Qf9Na1OO/BHFy4OI91XDE14MjFN4lTMezzaIWdPqHnsTodGGNP+iRSYfGkjA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.9.0\",
        \"@webassemblyjs/ieee754\": \"1.9.0\",
        \"@webassemblyjs/leb128\": \"1.9.0\",
        \"@webassemblyjs/utf8\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/wasm-opt\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-opt/-/wasm-opt-1.9.0.tgz\",
      \"integrity\": \"sha512-Qkjgm6Anhm+OMbIL0iokO7meajkzQD71ioelnfPEj6r4eOFuqm4YC3VBPqXjFyyNwowzbMD+hizmprP/Fwkl2A==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/helper-buffer\": \"1.9.0\",
        \"@webassemblyjs/wasm-gen\": \"1.9.0\",
        \"@webassemblyjs/wasm-parser\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/wasm-parser\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wasm-parser/-/wasm-parser-1.9.0.tgz\",
      \"integrity\": \"sha512-9+wkMowR2AmdSWQzsPEjFU7njh8HTO5MqO8vjwEHuM+AMHioNqSBONRdr0NQQ3dVQrzp0s8lTcYqzUdb7YgELA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/helper-api-error\": \"1.9.0\",
        \"@webassemblyjs/helper-wasm-bytecode\": \"1.9.0\",
        \"@webassemblyjs/ieee754\": \"1.9.0\",
        \"@webassemblyjs/leb128\": \"1.9.0\",
        \"@webassemblyjs/utf8\": \"1.9.0\"
      }
    },
    \"@webassemblyjs/wast-parser\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wast-parser/-/wast-parser-1.9.0.tgz\",
      \"integrity\": \"sha512-qsqSAP3QQ3LyZjNC/0jBJ/ToSxfYJ8kYyuiGvtn/8MK89VrNEfwj7BPQzJVHi0jGTRK2dGdJ5PRqhtjzoww+bw==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/floating-point-hex-parser\": \"1.9.0\",
        \"@webassemblyjs/helper-api-error\": \"1.9.0\",
        \"@webassemblyjs/helper-code-frame\": \"1.9.0\",
        \"@webassemblyjs/helper-fsm\": \"1.9.0\",
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"@webassemblyjs/wast-printer\": {
      \"version\": \"1.9.0\",
      \"resolved\": \"https://registry.npmjs.org/@webassemblyjs/wast-printer/-/wast-printer-1.9.0.tgz\",
      \"integrity\": \"sha512-2J0nE95rHXHyQ24cWjMKJ1tqB/ds8z/cyeOZxJhcb+rW+SQASVjuznUSmdz5GpVJTzU8JkhYut0D3siFDD6wsA==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/wast-parser\": \"1.9.0\",
        \"@xtuc/long\": \"4.2.2\"
      }
    },
    \"@webpack-cli/configtest\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/@webpack-cli/configtest/-/configtest-1.2.0.tgz\",
      \"integrity\": \"sha512-4FB8Tj6xyVkyqjj1OaTqCjXYULB9FMkqQ8yGrZjRDrYh0nOE+7Lhs45WioWQQMV+ceFlE368Ukhe6xdvJM9Egg==\",
      \"dev\": true
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
      \"dev\": true
    },
    \"@wry/context\": {
      \"version\": \"0.4.4\",
      \"resolved\": \"https://registry.npmjs.org/@wry/context/-/context-0.4.4.tgz\",
      \"integrity\": \"sha512-LrKVLove/zw6h2Md/KZyWxIkFM6AoyKp71OqpH9Hiip1csjPVoD3tPxlbQUNxEnHENks3UGgNpSBCAfq9KWuag==\",
      \"requires\": {
        \"@types/node\": \">=6\",
        \"tslib\": \"^1.9.3\"
      }
    },
    \"@wry/equality\": {
      \"version\": \"0.1.11\",
      \"resolved\": \"https://registry.npmjs.org/@wry/equality/-/equality-0.1.11.tgz\",
      \"integrity\": \"sha512-mwEVBDUVODlsQQ5dfuLUS5/Tf7jqUKyhKYHmVi4fPB6bDMOfWvUPJmKgS1Z7Za/sOI3vzWt4+O7yCiL/70MogA==\",
      \"requires\": {
        \"tslib\": \"^1.9.3\"
      }
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
    \"abab\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/abab/-/abab-2.0.5.tgz\",
      \"integrity\": \"sha512-9IK9EadsbHo6jLWIpxpR6pL0sazTXV6+SQv25ZB+F7Bj9mJNaOc4nCRabwd5M/JwmUa8idz6Eci6eKfJryPs6Q==\",
      \"dev\": true
    },
    \"abbrev\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/abbrev/-/abbrev-1.1.1.tgz\",
      \"integrity\": \"sha512-nne9/IiQ/hzIhY6pdDnbBtz7DjPTKrY00P/zvPSm5pOFkl6xuGrGnXn/VtTNNfNtAfZ9/1RtehkszU9qcTii0Q==\",
      \"dev\": true
    },
    \"acorn\": {
      \"version\": \"7.4.1\",
      \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-7.4.1.tgz\",
      \"integrity\": \"sha512-nQyp0o1/mNdbTO1PO6kHkwSrmgZ0MT/jCCpNiwbUjGoRN4dlBhqJtoQuCnEOKzgTVwg0ZWiCoQy6SxMebQVh8A==\",
      \"dev\": true
    },
    \"acorn-globals\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn-globals/-/acorn-globals-6.0.0.tgz\",
      \"integrity\": \"sha512-ZQl7LOWaF5ePqqcX4hLuv/bLXYQNfNWw2c0/yX/TsPRKamzHcTGQnlCjHT3TsmkOUVEPS3crCxiPfdzE/Trlhg==\",
      \"dev\": true,
      \"requires\": {
        \"acorn\": \"^7.1.1\",
        \"acorn-walk\": \"^7.1.1\"
      },
      \"dependencies\": {
        \"acorn-walk\": {
          \"version\": \"7.2.0\",
          \"resolved\": \"https://registry.npmjs.org/acorn-walk/-/acorn-walk-7.2.0.tgz\",
          \"integrity\": \"sha512-OPdCF6GsMIP+Az+aWfAAOEt2/+iVDKE7oy6lJ098aoe59oAmK76qV6Gw60SbZ8jHuG2wH058GF4pLFbYamYrVA==\",
          \"dev\": true
        }
      }
    },
    \"acorn-jsx\": {
      \"version\": \"5.3.2\",
      \"resolved\": \"https://registry.npmjs.org/acorn-jsx/-/acorn-jsx-5.3.2.tgz\",
      \"integrity\": \"sha512-rq9s+JNhf0IChjtDXxllJ7g41oZk5SlXtp0LHwyA5cejwn7vKmKp4pPri6YEePv2PU65sAsegbXtIinmDFDXgQ==\",
      \"dev\": true
    },
    \"acorn-walk\": {
      \"version\": \"8.2.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn-walk/-/acorn-walk-8.2.0.tgz\",
      \"integrity\": \"sha512-k+iyHEuPgSw6SbuDpGQM+06HQUa04DZ3o+F6CSzXMvvI5KMvnaEqXe+YVe555R9nn6GPt404fos4wcgpw12SDA==\",
      \"dev\": true
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
    \"aggregate-error\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/aggregate-error/-/aggregate-error-3.1.0.tgz\",
      \"integrity\": \"sha512-4I7Td01quW/RpocfNayFdFVk1qSuoh0E7JrbRJ16nH01HhKFQ88INq9Sd+nd72zqRySlr9BmDA8xlEJ6vJMrYA==\",
      \"dev\": true,
      \"requires\": {
        \"clean-stack\": \"^2.0.0\",
        \"indent-string\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"indent-string\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/indent-string/-/indent-string-4.0.0.tgz\",
          \"integrity\": \"sha512-EdDDZu4A2OyIK7Lr/2zG+w5jmbuk1DVBnEwREQvBzspBJkCEbRa8GxU1lghYcaGJCnRWibjDXlq779X1/y5xwg==\",
          \"dev\": true
        }
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
    \"ajv-errors\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/ajv-errors/-/ajv-errors-1.0.1.tgz\",
      \"integrity\": \"sha512-DCRfO/4nQ+89p/RK43i8Ezd41EqdGIU4ld7nGF8OQ14oc/we5rEntLCUa7+jrn3nn83BosfwZA0wb4pon2o8iQ==\",
      \"dev\": true
    },
    \"ajv-keywords\": {
      \"version\": \"3.5.2\",
      \"resolved\": \"https://registry.npmjs.org/ajv-keywords/-/ajv-keywords-3.5.2.tgz\",
      \"integrity\": \"sha512-5p6WTN0DdTGVQk6VjcEju19IgaHudalcfabD7yhDGeA6bcQnmL+CpveLJq/3hvfwd1aof6L386Ougkx6RfyMIQ==\",
      \"dev\": true
    },
    \"amdefine\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/amdefine/-/amdefine-1.0.1.tgz\",
      \"integrity\": \"sha512-S2Hw0TtNkMJhIabBwIojKL9YHO5T0n5eNqWJ7Lrlel/zDbftQpxpapi8tZs3X1HWa+u+QeydGmzzNU0m09+Rcg==\",
      \"dev\": true
    },
    \"ansi-colors\": {
      \"version\": \"3.2.3\",
      \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-3.2.3.tgz\",
      \"integrity\": \"sha512-LEHHyuhlPY3TmuUYMh2oz89lTShfvgbmzaBcxve9t/9Wuy7Dwf4yoAKcND7KFT1HAQfqZ12qtc+DUrBMeKF9nw==\",
      \"dev\": true
    },
    \"ansi-regex\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-2.1.1.tgz\",
      \"integrity\": \"sha1-w7M6te42DYbg5ijwRorn7yfWVN8=\",
      \"dev\": true
    },
    \"ansi-styles\": {
      \"version\": \"3.2.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
      \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
      \"requires\": {
        \"color-convert\": \"^1.9.0\"
      }
    },
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
    \"apollo-cache\": {
      \"version\": \"1.3.5\",
      \"resolved\": \"https://registry.npmjs.org/apollo-cache/-/apollo-cache-1.3.5.tgz\",
      \"integrity\": \"sha512-1XoDy8kJnyWY/i/+gLTEbYLnoiVtS8y7ikBr/IfmML4Qb+CM7dEEbIUOjnY716WqmZ/UpXIxTfJsY7rMcqiCXA==\",
      \"requires\": {
        \"apollo-utilities\": \"^1.3.4\",
        \"tslib\": \"^1.10.0\"
      }
    },
    \"apollo-cache-inmemory\": {
      \"version\": \"1.6.6\",
      \"resolved\": \"https://registry.npmjs.org/apollo-cache-inmemory/-/apollo-cache-inmemory-1.6.6.tgz\",
      \"integrity\": \"sha512-L8pToTW/+Xru2FFAhkZ1OA9q4V4nuvfoPecBM34DecAugUZEBhI2Hmpgnzq2hTKZ60LAMrlqiASm0aqAY6F8/A==\",
      \"requires\": {
        \"apollo-cache\": \"^1.3.5\",
        \"apollo-utilities\": \"^1.3.4\",
        \"optimism\": \"^0.10.0\",
        \"ts-invariant\": \"^0.4.0\",
        \"tslib\": \"^1.10.0\"
      }
    },
    \"apollo-client\": {
      \"version\": \"2.6.10\",
      \"resolved\": \"https://registry.npmjs.org/apollo-client/-/apollo-client-2.6.10.tgz\",
      \"integrity\": \"sha512-jiPlMTN6/5CjZpJOkGeUV0mb4zxx33uXWdj/xQCfAMkuNAC3HN7CvYDyMHHEzmcQ5GV12LszWoQ/VlxET24CtA==\",
      \"requires\": {
        \"@types/zen-observable\": \"^0.8.0\",
        \"apollo-cache\": \"1.3.5\",
        \"apollo-link\": \"^1.0.0\",
        \"apollo-utilities\": \"1.3.4\",
        \"symbol-observable\": \"^1.0.2\",
        \"ts-invariant\": \"^0.4.0\",
        \"tslib\": \"^1.10.0\",
        \"zen-observable\": \"^0.8.0\"
      }
    },
    \"apollo-link\": {
      \"version\": \"1.2.14\",
      \"resolved\": \"https://registry.npmjs.org/apollo-link/-/apollo-link-1.2.14.tgz\",
      \"integrity\": \"sha512-p67CMEFP7kOG1JZ0ZkYZwRDa369w5PIjtMjvrQd/HnIV8FRsHRqLqK+oAZQnFa1DDdZtOtHTi+aMIW6EatC2jg==\",
      \"requires\": {
        \"apollo-utilities\": \"^1.3.0\",
        \"ts-invariant\": \"^0.4.0\",
        \"tslib\": \"^1.9.3\",
        \"zen-observable-ts\": \"^0.8.21\"
      }
    },
    \"apollo-link-http\": {
      \"version\": \"1.5.17\",
      \"resolved\": \"https://registry.npmjs.org/apollo-link-http/-/apollo-link-http-1.5.17.tgz\",
      \"integrity\": \"sha512-uWcqAotbwDEU/9+Dm9e1/clO7hTB2kQ/94JYcGouBVLjoKmTeJTUPQKcJGpPwUjZcSqgYicbFqQSoJIW0yrFvg==\",
      \"requires\": {
        \"apollo-link\": \"^1.2.14\",
        \"apollo-link-http-common\": \"^0.2.16\",
        \"tslib\": \"^1.9.3\"
      }
    },
    \"apollo-link-http-common\": {
      \"version\": \"0.2.16\",
      \"resolved\": \"https://registry.npmjs.org/apollo-link-http-common/-/apollo-link-http-common-0.2.16.tgz\",
      \"integrity\": \"sha512-2tIhOIrnaF4UbQHf7kjeQA/EmSorB7+HyJIIrUjJOKBgnXwuexi8aMecRlqTIDWcyVXCeqLhUnztMa6bOH/jTg==\",
      \"requires\": {
        \"apollo-link\": \"^1.2.14\",
        \"ts-invariant\": \"^0.4.0\",
        \"tslib\": \"^1.9.3\"
      }
    },
    \"apollo-link-schema\": {
      \"version\": \"1.2.5\",
      \"resolved\": \"https://registry.npmjs.org/apollo-link-schema/-/apollo-link-schema-1.2.5.tgz\",
      \"integrity\": \"sha512-7XUS8fOsObJt9rzp8CUuZ/a9TNUBoChWwEDmdVmYxTlzgGcyUXxkLXkMS9CHUb0cx04jiiWjWQc41C4iakSmzA==\",
      \"requires\": {
        \"apollo-link\": \"^1.2.14\",
        \"tslib\": \"^1.9.3\"
      }
    },
    \"apollo-utilities\": {
      \"version\": \"1.3.4\",
      \"resolved\": \"https://registry.npmjs.org/apollo-utilities/-/apollo-utilities-1.3.4.tgz\",
      \"integrity\": \"sha512-pk2hiWrCXMAy2fRPwEyhvka+mqwzeP60Jr1tRYi5xru+3ko94HI9o6lK0CT33/w4RDlxWchmdhDCrvdr+pHCig==\",
      \"requires\": {
        \"@wry/equality\": \"^0.1.2\",
        \"fast-json-stable-stringify\": \"^2.0.0\",
        \"ts-invariant\": \"^0.4.0\",
        \"tslib\": \"^1.10.0\"
      }
    },
    \"aproba\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/aproba/-/aproba-1.2.0.tgz\",
      \"integrity\": \"sha512-Y9J6ZjXtoYh8RnXVCMOU/ttDmk1aBjunq9vO0ta5x85WDQiQfUF9sIPBITdbiiIVcBo03Hi3jMxigBtsddlXRw==\",
      \"dev\": true
    },
    \"are-we-there-yet\": {
      \"version\": \"1.1.7\",
      \"resolved\": \"https://registry.npmjs.org/are-we-there-yet/-/are-we-there-yet-1.1.7.tgz\",
      \"integrity\": \"sha512-nxwy40TuMiUGqMyRHgCSWZ9FM4VAoRP4xUYSTv5ImRog+h9yISPbVH7H8fASCIzYn9wlEv4zvFL7uKDMCFQm3g==\",
      \"dev\": true,
      \"requires\": {
        \"delegates\": \"^1.0.0\",
        \"readable-stream\": \"^2.0.6\"
      }
    },
    \"arg\": {
      \"version\": \"4.1.3\",
      \"resolved\": \"https://registry.npmjs.org/arg/-/arg-4.1.3.tgz\",
      \"integrity\": \"sha512-58S9QDqG0Xx27YwPSt9fJxivjYl432YCwfDMfZ+71RAqUrZef7LrKQZ3LHLOwCS4FLNBplP533Zx895SeOCHvA==\",
      \"dev\": true
    },
    \"argparse\": {
      \"version\": \"1.0.10\",
      \"resolved\": \"https://registry.npmjs.org/argparse/-/argparse-1.0.10.tgz\",
      \"integrity\": \"sha512-o5Roy6tNG4SL/FOkCAN6RzjiakZS25RLYFrcMttJqbdd8BWrnA+fGz57iN5Pb06pvBGvl5gQ0B48dJlslXvoTg==\",
      \"dev\": true,
      \"requires\": {
        \"sprintf-js\": \"~1.0.2\"
      }
    },
    \"arr-diff\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/arr-diff/-/arr-diff-4.0.0.tgz\",
      \"integrity\": \"sha1-1kYQdP6/7HHn4VI1dhoyml3HxSA=\",
      \"dev\": true
    },
    \"arr-flatten\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/arr-flatten/-/arr-flatten-1.1.0.tgz\",
      \"integrity\": \"sha512-L3hKV5R/p5o81R7O02IGnwpDmkp6E982XhtbuwSe3O4qOtMMMtodicASA1Cny2U+aCXcNpml+m4dPsvsJ3jatg==\",
      \"dev\": true
    },
    \"arr-union\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/arr-union/-/arr-union-3.1.0.tgz\",
      \"integrity\": \"sha1-45sJrqne+Gao8gbiiK9jkZuuOcQ=\",
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
    \"array-find\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/array-find/-/array-find-1.0.0.tgz\",
      \"integrity\": \"sha1-bI4obRHtdoMn+OYuzuhzU8o+eLg=\",
      \"dev\": true
    },
    \"array-includes\": {
      \"version\": \"3.1.4\",
      \"resolved\": \"https://registry.npmjs.org/array-includes/-/array-includes-3.1.4.tgz\",
      \"integrity\": \"sha512-ZTNSQkmWumEbiHO2GF4GmWxYVTiQyJy2XOTa15sdQSrvKn7l+180egQMqlrMOUMCyLMD7pmyQe4mMDUT6Behrw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.1\",
        \"get-intrinsic\": \"^1.1.1\",
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
    \"array-unique\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/array-unique/-/array-unique-0.3.2.tgz\",
      \"integrity\": \"sha1-qJS3XUvE9s1nnvMkSp/Y9Gri1Cg=\",
      \"dev\": true
    },
    \"array.prototype.flat\": {
      \"version\": \"1.2.5\",
      \"resolved\": \"https://registry.npmjs.org/array.prototype.flat/-/array.prototype.flat-1.2.5.tgz\",
      \"integrity\": \"sha512-KaYU+S+ndVqyUnignHftkwc58o3uVU1jzczILJ1tN2YaIZpFIKBiP/x/j97E5MVPsaCloPbqWLB/8qCTVvT2qg==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.0\"
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
      },
      \"dependencies\": {
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        },
        \"is-shared-array-buffer\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/is-shared-array-buffer/-/is-shared-array-buffer-1.0.2.tgz\",
          \"integrity\": \"sha512-sqN2UDu1/0y6uvXyStCOzyhAjCSlHceFoMKJW8W9EU9cvic/QdsZ0kEU93HEy3IUEFZIiH/3w+AH/UQbPHNdhA==\",
          \"dev\": true,
          \"requires\": {
            \"call-bind\": \"^1.0.2\"
          }
        }
      }
    },
    \"arrify\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/arrify/-/arrify-1.0.1.tgz\",
      \"integrity\": \"sha512-3CYzex9M9FGQjCGMGyi6/31c8GJbgb0qGyrx5HWxPd0aCwh4cB2YjMb2Xf9UuoogrMrlO9cTqnB5rI5GHZTcUA==\",
      \"dev\": true
    },
    \"asn1\": {
      \"version\": \"0.2.6\",
      \"resolved\": \"https://registry.npmjs.org/asn1/-/asn1-0.2.6.tgz\",
      \"integrity\": \"sha512-ix/FxPn0MDjeyJ7i/yoHGFt/EX6LyNbxSEhPPXODPL+KB0VPk86UYfL0lMdy+KCnv+fmvIzySwaK5COwqVbWTQ==\",
      \"dev\": true,
      \"requires\": {
        \"safer-buffer\": \"~2.1.0\"
      }
    },
    \"asn1.js\": {
      \"version\": \"5.4.1\",
      \"resolved\": \"https://registry.npmjs.org/asn1.js/-/asn1.js-5.4.1.tgz\",
      \"integrity\": \"sha512-+I//4cYPccV8LdmBLiX8CYvf9Sp3vQsrqu2QNXRcrbiWvcx/UdlFiqUJJzxRQxgsZmvhXhn4cSKeSmoFjVdupA==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.0.0\",
        \"inherits\": \"^2.0.1\",
        \"minimalistic-assert\": \"^1.0.0\",
        \"safer-buffer\": \"^2.1.0\"
      }
    },
    \"assert\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/assert/-/assert-1.5.0.tgz\",
      \"integrity\": \"sha512-EDsgawzwoun2CZkCgtxJbv392v4nbk9XDD06zI+kQYoBM/3RBWLlEyJARDOmhAAosBjWACEkKL6S+lIZtcAubA==\",
      \"dev\": true,
      \"requires\": {
        \"object-assign\": \"^4.1.1\",
        \"util\": \"0.10.3\"
      },
      \"dependencies\": {
        \"inherits\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.1.tgz\",
          \"integrity\": \"sha1-sX0I0ya0Qj5Wjv9xn5GwscvfafE=\",
          \"dev\": true
        },
        \"util\": {
          \"version\": \"0.10.3\",
          \"resolved\": \"https://registry.npmjs.org/util/-/util-0.10.3.tgz\",
          \"integrity\": \"sha1-evsa/lCAUkZInj23/g7TeTNqwPk=\",
          \"dev\": true,
          \"requires\": {
            \"inherits\": \"2.0.1\"
          }
        }
      }
    },
    \"assert-plus\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/assert-plus/-/assert-plus-1.0.0.tgz\",
      \"integrity\": \"sha512-NfJ4UzBCcQGLDlQq7nHxH+tv3kyZ0hHQqF5BO6J7tNJeP5do1llPr8dZ8zHonfhAu0PHAdMkSo+8o0wxg9lZWw==\",
      \"dev\": true
    },
    \"assertion-error\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/assertion-error/-/assertion-error-1.1.0.tgz\",
      \"integrity\": \"sha512-jgsaNduz+ndvGyFt3uSuWqvy4lCnIJiovtouQN5JZHOKCS2QuhEdbcQHFhVksz2N2U9hXJo8odG7ETyWlEeuDw==\",
      \"dev\": true
    },
    \"assign-symbols\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/assign-symbols/-/assign-symbols-1.0.0.tgz\",
      \"integrity\": \"sha1-WWZ/QfrdTyDMvCu5a41Pf3jsA2c=\",
      \"dev\": true
    },
    \"astral-regex\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/astral-regex/-/astral-regex-2.0.0.tgz\",
      \"integrity\": \"sha512-Z7tMw1ytTXt5jqMcOP+OQteU1VuNK9Y02uuJtKQ1Sv69jXQKKg5cibLwGJow8yzZP+eAc18EmLGPal0bp36rvQ==\",
      \"dev\": true
    },
    \"async-each\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/async-each/-/async-each-1.0.3.tgz\",
      \"integrity\": \"sha512-z/WhQ5FPySLdvREByI2vZiTWwCnF0moMJ1hK9YQwDTHKh6I7/uSckMetoRGb5UBZPC1z0jlw+n/XCgjeH7y1AQ==\",
      \"dev\": true,
      \"optional\": true
    },
    \"async-foreach\": {
      \"version\": \"0.1.3\",
      \"resolved\": \"https://registry.npmjs.org/async-foreach/-/async-foreach-0.1.3.tgz\",
      \"integrity\": \"sha512-VUeSMD8nEGBWaZK4lizI1sf3yEC7pnAQ/mrI7pC2fBz2s/tq5jWWEngTwaf0Gruu/OoXRGLGg1XFqpYBiGTYJA==\",
      \"dev\": true
    },
    \"asynckit\": {
      \"version\": \"0.4.0\",
      \"resolved\": \"https://registry.npmjs.org/asynckit/-/asynckit-0.4.0.tgz\",
      \"integrity\": \"sha1-x57Zf380y48robyXkLzDZkdLS3k=\",
      \"dev\": true
    },
    \"atob\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/atob/-/atob-2.1.2.tgz\",
      \"integrity\": \"sha512-Wm6ukoaOGJi/73p/cl2GvLjTI5JM1k/O14isD73YML8StrH/7/lRFgmg8nICZgD3bZZvjwCGxtMOD3wWNAu8cg==\",
      \"dev\": true
    },
    \"autoprefixer\": {
      \"version\": \"9.8.8\",
      \"resolved\": \"https://registry.npmjs.org/autoprefixer/-/autoprefixer-9.8.8.tgz\",
      \"integrity\": \"sha512-eM9d/swFopRt5gdJ7jrpCwgvEMIayITpojhkkSMRsFHYuH5bkSQ4p/9qTEHtmNudUZh22Tehu7I6CxAW0IXTKA==\",
      \"dev\": true,
      \"requires\": {
        \"browserslist\": \"^4.12.0\",
        \"caniuse-lite\": \"^1.0.30001109\",
        \"normalize-range\": \"^0.1.2\",
        \"num2fraction\": \"^1.2.2\",
        \"picocolors\": \"^0.2.1\",
        \"postcss\": \"^7.0.32\",
        \"postcss-value-parser\": \"^4.1.0\"
      }
    },
    \"available-typed-arrays\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/available-typed-arrays/-/available-typed-arrays-1.0.5.tgz\",
      \"integrity\": \"sha512-DMD0KiN46eipeziST1LPP/STfDU0sufISXmjSgvVsoU2tqxctQeASejWcfNtxYKqETM1UxQ8sp2OrSBWpHY6sw==\",
      \"dev\": true
    },
    \"aws-sign2\": {
      \"version\": \"0.7.0\",
      \"resolved\": \"https://registry.npmjs.org/aws-sign2/-/aws-sign2-0.7.0.tgz\",
      \"integrity\": \"sha512-08kcGqnYf/YmjoRhfxyu+CLxBjUtHLXLXX/vUfx9l2LYzG3c1m61nrpyFUZI6zeS+Li/wWMMidD9KgrqtGq3mA==\",
      \"dev\": true
    },
    \"aws4\": {
      \"version\": \"1.12.0\",
      \"resolved\": \"https://registry.npmjs.org/aws4/-/aws4-1.12.0.tgz\",
      \"integrity\": \"sha512-NmWvPnx0F1SfrQbYwOi7OeaNGokp9XhzNioJ/CSBs8Qa4vxug81mhJEAVZwxXuBmYB5KDRfMq/F3RR0BIU7sWg==\",
      \"dev\": true
    },
    \"babel-code-frame\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-code-frame/-/babel-code-frame-6.26.0.tgz\",
      \"integrity\": \"sha1-Y/1D99weO7fONZR9uP42mj9Yx0s=\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^1.1.3\",
        \"esutils\": \"^2.0.2\",
        \"js-tokens\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"ansi-styles\": {
          \"version\": \"2.2.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
          \"integrity\": \"sha1-tDLdM1i2NM914eRmQ2gkBTPB3b4=\",
          \"dev\": true
        },
        \"chalk\": {
          \"version\": \"1.1.3\",
          \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-1.1.3.tgz\",
          \"integrity\": \"sha1-qBFcVeSnAv5NFQq9OHKCKn4J/Jg=\",
          \"dev\": true,
          \"requires\": {
            \"ansi-styles\": \"^2.2.1\",
            \"escape-string-regexp\": \"^1.0.2\",
            \"has-ansi\": \"^2.0.0\",
            \"strip-ansi\": \"^3.0.0\",
            \"supports-color\": \"^2.0.0\"
          }
        },
        \"js-tokens\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/js-tokens/-/js-tokens-3.0.2.tgz\",
          \"integrity\": \"sha1-mGbfOVECEw449/mWvOtlRDIJwls=\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"3.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
          \"integrity\": \"sha1-ajhfuIU9lS1f8F0Oiq+UJ43GPc8=\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^2.0.0\"
          }
        },
        \"supports-color\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-2.0.0.tgz\",
          \"integrity\": \"sha1-U10EXOa2Nj+kARcIRimZXp3zJMc=\",
          \"dev\": true
        }
      }
    },
    \"babel-core\": {
      \"version\": \"6.26.3\",
      \"resolved\": \"https://registry.npmjs.org/babel-core/-/babel-core-6.26.3.tgz\",
      \"integrity\": \"sha512-6jyFLuDmeidKmUEb3NM+/yawG0M2bDZ9Z1qbZP59cyHLz8kYGKYwpJP0UwUKKUiTRNvxfLesJnTedqczP7cTDA==\",
      \"dev\": true,
      \"requires\": {
        \"babel-code-frame\": \"^6.26.0\",
        \"babel-generator\": \"^6.26.0\",
        \"babel-helpers\": \"^6.24.1\",
        \"babel-messages\": \"^6.23.0\",
        \"babel-register\": \"^6.26.0\",
        \"babel-runtime\": \"^6.26.0\",
        \"babel-template\": \"^6.26.0\",
        \"babel-traverse\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"babylon\": \"^6.18.0\",
        \"convert-source-map\": \"^1.5.1\",
        \"debug\": \"^2.6.9\",
        \"json5\": \"^0.5.1\",
        \"lodash\": \"^4.17.4\",
        \"minimatch\": \"^3.0.4\",
        \"path-is-absolute\": \"^1.0.1\",
        \"private\": \"^0.1.8\",
        \"slash\": \"^1.0.0\",
        \"source-map\": \"^0.5.7\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"2.6.9\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
          \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.0.0\"
          }
        },
        \"json5\": {
          \"version\": \"0.5.1\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-0.5.1.tgz\",
          \"integrity\": \"sha1-Hq3nrMASA0rYTiOWdn6tn6VJWCE=\",
          \"dev\": true
        },
        \"ms\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
          \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
          \"dev\": true
        },
        \"source-map\": {
          \"version\": \"0.5.7\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
          \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
          \"dev\": true
        }
      }
    },
    \"babel-generator\": {
      \"version\": \"6.26.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-generator/-/babel-generator-6.26.1.tgz\",
      \"integrity\": \"sha512-HyfwY6ApZj7BYTcJURpM5tznulaBvyio7/0d4zFOeMPUmfxkCjHocCuoLa2SAGzBI8AREcH3eP3758F672DppA==\",
      \"dev\": true,
      \"requires\": {
        \"babel-messages\": \"^6.23.0\",
        \"babel-runtime\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"detect-indent\": \"^4.0.0\",
        \"jsesc\": \"^1.3.0\",
        \"lodash\": \"^4.17.4\",
        \"source-map\": \"^0.5.7\",
        \"trim-right\": \"^1.0.1\"
      },
      \"dependencies\": {
        \"jsesc\": {
          \"version\": \"1.3.0\",
          \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-1.3.0.tgz\",
          \"integrity\": \"sha1-RsP+yMGJKxKwgz25vHYiF226s0s=\",
          \"dev\": true
        },
        \"source-map\": {
          \"version\": \"0.5.7\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
          \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
          \"dev\": true
        }
      }
    },
    \"babel-helper-vue-jsx-merge-props\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-vue-jsx-merge-props/-/babel-helper-vue-jsx-merge-props-2.0.3.tgz\",
      \"integrity\": \"sha512-gsLiKK7Qrb7zYJNgiXKpXblxbV5ffSwR0f5whkPAaBAR4fhi6bwRZxX9wBlIc5M/v8CCkXUbXZL4N/nSE97cqg==\"
    },
    \"babel-helpers\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helpers/-/babel-helpers-6.24.1.tgz\",
      \"integrity\": \"sha1-NHHenK7DiOXIUOWX5Yom3fN2ArI=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\"
      }
    },
    \"babel-loader\": {
      \"version\": \"8.3.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-loader/-/babel-loader-8.3.0.tgz\",
      \"integrity\": \"sha512-H8SvsMF+m9t15HNLMipppzkC+Y2Yq+v3SonZyU70RBL/h1gxPkH08Ot8pEE9Z4Kd+czyWJClmFS8qzIP9OZ04Q==\",
      \"dev\": true,
      \"requires\": {
        \"find-cache-dir\": \"^3.3.1\",
        \"loader-utils\": \"^2.0.0\",
        \"make-dir\": \"^3.1.0\",
        \"schema-utils\": \"^2.6.5\"
      },
      \"dependencies\": {
        \"find-cache-dir\": {
          \"version\": \"3.3.2\",
          \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-3.3.2.tgz\",
          \"integrity\": \"sha512-wXZV5emFEjrridIgED11OoUKLxiYjAcqot/NJdAkOhlJ+vGzwhOAfcG5OX1jP+S0PcjEn8bdMJv+g2jwQ3Onig==\",
          \"dev\": true,
          \"requires\": {
            \"commondir\": \"^1.0.1\",
            \"make-dir\": \"^3.0.2\",
            \"pkg-dir\": \"^4.1.0\"
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
          }
        },
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
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
        \"make-dir\": {
          \"version\": \"3.1.0\",
          \"resolved\": \"https://registry.npmjs.org/make-dir/-/make-dir-3.1.0.tgz\",
          \"integrity\": \"sha512-g3FeP20LNwhALb/6Cz6Dd4F2ngze0jz7tbzrD2wAV+o9FeNHe4rL+yK2md0J/fiSf1sa1ADhXqi5+oVwOM/eGw==\",
          \"dev\": true,
          \"requires\": {
            \"semver\": \"^6.0.0\"
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
        },
        \"schema-utils\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-2.7.1.tgz\",
          \"integrity\": \"sha512-SHiNtMOUGWBQJwzISiVYKu82GiV4QYGePp3odlY1tuKO7gPtphAT5R/py0fA6xtbgLL/RvtJZnU9b8s0F1q0Xg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.5\",
            \"ajv\": \"^6.12.4\",
            \"ajv-keywords\": \"^3.5.2\"
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
    \"babel-messages\": {
      \"version\": \"6.23.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-messages/-/babel-messages-6.23.0.tgz\",
      \"integrity\": \"sha1-8830cDhYA1sqKVHG7F7fbGLyYw4=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-polyfill-corejs2\": {
      \"version\": \"0.4.4\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-corejs2/-/babel-plugin-polyfill-corejs2-0.4.4.tgz\",
      \"integrity\": \"sha512-9WeK9snM1BfxB38goUEv2FLnA6ja07UMfazFHzCXUb3NyDZAwfXvQiURQ6guTTMeHcOsdknULm1PDhs4uWtKyA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.22.6\",
        \"@babel/helper-define-polyfill-provider\": \"^0.4.1\",
        \"@nicolo-ribaudo/semver-v6\": \"^6.3.3\"
      }
    },
    \"babel-plugin-polyfill-corejs3\": {
      \"version\": \"0.8.2\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-corejs3/-/babel-plugin-polyfill-corejs3-0.8.2.tgz\",
      \"integrity\": \"sha512-Cid+Jv1BrY9ReW9lIfNlNpsI53N+FN7gE+f73zLAUbr9C52W4gKLWSByx47pfDJsEysojKArqOtOKZSVIIUTuQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-define-polyfill-provider\": \"^0.4.1\",
        \"core-js-compat\": \"^3.31.0\"
      }
    },
    \"babel-plugin-polyfill-regenerator\": {
      \"version\": \"0.5.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-polyfill-regenerator/-/babel-plugin-polyfill-regenerator-0.5.1.tgz\",
      \"integrity\": \"sha512-L8OyySuI6OSQ5hFy9O+7zFjyr4WhAfRjLIOkhQGYl+emwJkd/S4XXT1JpfrgR1jrQ1NcGiOh+yAdGlF8pnC3Jw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-define-polyfill-provider\": \"^0.4.1\"
      }
    },
    \"babel-polyfill\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-polyfill/-/babel-polyfill-6.26.0.tgz\",
      \"integrity\": \"sha1-N5k3q8Z9eJWXCtxiHyhM2WbPIVM=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.26.0\",
        \"core-js\": \"^2.5.0\",
        \"regenerator-runtime\": \"^0.10.5\"
      }
    },
    \"babel-register\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-register/-/babel-register-6.26.0.tgz\",
      \"integrity\": \"sha1-btAhFz4vy0htestFxgCahW9kcHE=\",
      \"dev\": true,
      \"requires\": {
        \"babel-core\": \"^6.26.0\",
        \"babel-runtime\": \"^6.26.0\",
        \"core-js\": \"^2.5.0\",
        \"home-or-tmp\": \"^2.0.0\",
        \"lodash\": \"^4.17.4\",
        \"mkdirp\": \"^0.5.1\",
        \"source-map-support\": \"^0.4.15\"
      },
      \"dependencies\": {
        \"source-map\": {
          \"version\": \"0.5.7\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
          \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
          \"dev\": true
        },
        \"source-map-support\": {
          \"version\": \"0.4.18\",
          \"resolved\": \"https://registry.npmjs.org/source-map-support/-/source-map-support-0.4.18.tgz\",
          \"integrity\": \"sha512-try0/JqxPLF9nOjvSta7tVondkP5dwgyLDjVoyMDlmjugT2lRZ1OfsrYTkCd2hkDnJTKRbO/Rl3orm8vlsUzbA==\",
          \"dev\": true,
          \"requires\": {
            \"source-map\": \"^0.5.6\"
          }
        }
      }
    },
    \"babel-runtime\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-runtime/-/babel-runtime-6.26.0.tgz\",
      \"integrity\": \"sha1-llxwWGaOgrVde/4E/yM3vItWR/4=\",
      \"dev\": true,
      \"requires\": {
        \"core-js\": \"^2.4.0\",
        \"regenerator-runtime\": \"^0.11.0\"
      },
      \"dependencies\": {
        \"regenerator-runtime\": {
          \"version\": \"0.11.1\",
          \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.11.1.tgz\",
          \"integrity\": \"sha512-MguG95oij0fC3QV3URf4V2SDYGJhJnJGqvIIgdECeODCT98wSWDAJ94SSuVpYQUoTcGUIL6L4yNB7j1DFFHSBg==\",
          \"dev\": true
        }
      }
    },
    \"babel-template\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-template/-/babel-template-6.26.0.tgz\",
      \"integrity\": \"sha1-3gPi0WOWsGn0bdn/+FIfsaDjXgI=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.26.0\",
        \"babel-traverse\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"babylon\": \"^6.18.0\",
        \"lodash\": \"^4.17.4\"
      }
    },
    \"babel-traverse\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-traverse/-/babel-traverse-6.26.0.tgz\",
      \"integrity\": \"sha1-RqnL1+3MYsjlwGTi0tjQ9ANXZu4=\",
      \"dev\": true,
      \"requires\": {
        \"babel-code-frame\": \"^6.26.0\",
        \"babel-messages\": \"^6.23.0\",
        \"babel-runtime\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"babylon\": \"^6.18.0\",
        \"debug\": \"^2.6.8\",
        \"globals\": \"^9.18.0\",
        \"invariant\": \"^2.2.2\",
        \"lodash\": \"^4.17.4\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"2.6.9\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
          \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.0.0\"
          }
        },
        \"globals\": {
          \"version\": \"9.18.0\",
          \"resolved\": \"https://registry.npmjs.org/globals/-/globals-9.18.0.tgz\",
          \"integrity\": \"sha512-S0nG3CLEQiY/ILxqtztTWH/3iRRdyBLw6KMDxnKMchrtbj2OFmehVh0WUCfW3DUrIgx/qFrJPICrq4Z4sTR9UQ==\",
          \"dev\": true
        },
        \"ms\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
          \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
          \"dev\": true
        }
      }
    },
    \"babel-types\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-types/-/babel-types-6.26.0.tgz\",
      \"integrity\": \"sha1-o7Bz+Uq0nrb6Vc1lInozQ4BjJJc=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.26.0\",
        \"esutils\": \"^2.0.2\",
        \"lodash\": \"^4.17.4\",
        \"to-fast-properties\": \"^1.0.3\"
      },
      \"dependencies\": {
        \"to-fast-properties\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-1.0.3.tgz\",
          \"integrity\": \"sha1-uDVx+k2MJbguIxsG46MFXeTKGkc=\",
          \"dev\": true
        }
      }
    },
    \"babylon\": {
      \"version\": \"6.18.0\",
      \"resolved\": \"https://registry.npmjs.org/babylon/-/babylon-6.18.0.tgz\",
      \"integrity\": \"sha512-q/UEjfGJ2Cm3oKV71DJz9d25TPnq5rhBVL2Q4fA5wcC3jcrdn7+SssEybFIxwAvvP+YCsCYNKughoF33GxgycQ==\",
      \"dev\": true
    },
    \"balanced-match\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.2.tgz\",
      \"integrity\": \"sha512-3oSeUO0TMV67hN1AmbXsK4yaqU7tjiHlbxRDZOpH0KW9+CeX4bRAaX0Anxt0tx2MrpRpWwQaPwIlISEJhYU5Pw==\",
      \"dev\": true
    },
    \"base\": {
      \"version\": \"0.11.2\",
      \"resolved\": \"https://registry.npmjs.org/base/-/base-0.11.2.tgz\",
      \"integrity\": \"sha512-5T6P4xPgpp0YDFvSWwEZ4NoE3aM4QBQXDzmVbraCkFj8zHM+mba8SyqB5DbZWyR7mYHo6Y7BdQo3MoA4m0TeQg==\",
      \"dev\": true,
      \"requires\": {
        \"cache-base\": \"^1.0.1\",
        \"class-utils\": \"^0.3.5\",
        \"component-emitter\": \"^1.2.1\",
        \"define-property\": \"^1.0.0\",
        \"isobject\": \"^3.0.1\",
        \"mixin-deep\": \"^1.2.0\",
        \"pascalcase\": \"^0.1.1\"
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
          \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^1.0.0\"
          }
        }
      }
    },
    \"base64-js\": {
      \"version\": \"1.5.1\",
      \"resolved\": \"https://registry.npmjs.org/base64-js/-/base64-js-1.5.1.tgz\",
      \"integrity\": \"sha512-AKpaYlHn8t4SVbOHCy+b5+KKgvR4vrsD8vbvrbiQJps7fKDTkjkDry6ji0rUJjC0kzbNePLwzxq8iypo41qeWA==\",
      \"dev\": true
    },
    \"bcrypt-pbkdf\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/bcrypt-pbkdf/-/bcrypt-pbkdf-1.0.2.tgz\",
      \"integrity\": \"sha512-qeFIXtP4MSoi6NLqO12WfqARWWuCKi2Rn/9hJLEmtB5yTNr9DqFWkJRCf2qShWzPeAMRnOgCrq0sg/KLv5ES9w==\",
      \"dev\": true,
      \"requires\": {
        \"tweetnacl\": \"^0.14.3\"
      }
    },
    \"big.js\": {
      \"version\": \"5.2.2\",
      \"resolved\": \"https://registry.npmjs.org/big.js/-/big.js-5.2.2.tgz\",
      \"integrity\": \"sha512-vyL2OymJxmarO8gxMr0mhChsO9QGwhynfuu4+MHTAW6czfq9humCB7rKpUjDd9YUiDPU4mzpyupFSvOClAwbmQ==\",
      \"dev\": true
    },
    \"binary-extensions\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-2.2.0.tgz\",
      \"integrity\": \"sha512-jDctJ/IVQbZoJykoeHbhXpOlNBqGNcwXJKJog42E5HDPUwQTSdjCHdihjj0DlnheQ7blbT6dHOafNAiS8ooQKA==\",
      \"dev\": true
    },
    \"bindings\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/bindings/-/bindings-1.5.0.tgz\",
      \"integrity\": \"sha512-p2q/t/mhvuOj/UeLlV6566GD/guowlr0hHxClI0W9m7MWYkL1F0hLo+0Aexs9HSPCtR1SXQ0TD3MMKrXZajbiQ==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"file-uri-to-path\": \"1.0.0\"
      }
    },
    \"bluebird\": {
      \"version\": \"3.7.2\",
      \"resolved\": \"https://registry.npmjs.org/bluebird/-/bluebird-3.7.2.tgz\",
      \"integrity\": \"sha512-XpNj6GDQzdfW+r2Wnn7xiSAd7TM3jzkxGXBGTtWKuSXv1xUV+azxAm8jdWZN06QTQk+2N2XB9jRDkvbmQmcRtg==\",
      \"dev\": true
    },
    \"bn.js\": {
      \"version\": \"4.12.0\",
      \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
      \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
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
    \"braces\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/braces/-/braces-3.0.2.tgz\",
      \"integrity\": \"sha512-b8um+L1RzM3WDSzvhm6gIz1yfTbBt6YTlcEKAvsmqCZZFw46z626lVj9j1yEPW33H5H+lBQpZMP1k8l+78Ha0A==\",
      \"dev\": true,
      \"requires\": {
        \"fill-range\": \"^7.0.1\"
      }
    },
    \"brorand\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/brorand/-/brorand-1.1.0.tgz\",
      \"integrity\": \"sha1-EsJe/kCkXjwyPrhnWgoM5XsiNx8=\",
      \"dev\": true
    },
    \"browser-process-hrtime\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/browser-process-hrtime/-/browser-process-hrtime-1.0.0.tgz\",
      \"integrity\": \"sha512-9o5UecI3GhkpM6DrXr69PblIuWxPKk9Y0jHBRhdocZ2y7YECBFCsHm79Pr3OyR2AvjhDkabFJaDJMYRazHgsow==\",
      \"dev\": true
    },
    \"browser-stdout\": {
      \"version\": \"1.3.1\",
      \"resolved\": \"https://registry.npmjs.org/browser-stdout/-/browser-stdout-1.3.1.tgz\",
      \"integrity\": \"sha512-qhAVI1+Av2X7qelOfAIYwXONood6XlZE/fXaBSmW/T5SzLAmCgzi+eiWE7fUvbHaeNBQH13UftjpXxsfLkMpgw==\",
      \"dev\": true
    },
    \"browserify-aes\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/browserify-aes/-/browserify-aes-1.2.0.tgz\",
      \"integrity\": \"sha512-+7CHXqGuspUn/Sl5aO7Ea0xWGAtETPXNSAjHo48JfLdPWcMng33Xe4znFvQweqc/uzk5zSOI3H52CYnjCfb5hA==\",
      \"dev\": true,
      \"requires\": {
        \"buffer-xor\": \"^1.0.3\",
        \"cipher-base\": \"^1.0.0\",
        \"create-hash\": \"^1.1.0\",
        \"evp_bytestokey\": \"^1.0.3\",
        \"inherits\": \"^2.0.1\",
        \"safe-buffer\": \"^5.0.1\"
      }
    },
    \"browserify-cipher\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/browserify-cipher/-/browserify-cipher-1.0.1.tgz\",
      \"integrity\": \"sha512-sPhkz0ARKbf4rRQt2hTpAHqn47X3llLkUGn+xEJzLjwY8LRs2p0v7ljvI5EyoRO/mexrNunNECisZs+gw2zz1w==\",
      \"dev\": true,
      \"requires\": {
        \"browserify-aes\": \"^1.0.4\",
        \"browserify-des\": \"^1.0.0\",
        \"evp_bytestokey\": \"^1.0.0\"
      }
    },
    \"browserify-des\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/browserify-des/-/browserify-des-1.0.2.tgz\",
      \"integrity\": \"sha512-BioO1xf3hFwz4kc6iBhI3ieDFompMhrMlnDFC4/0/vd5MokpuAc3R+LYbwTA9A5Yc9pq9UYPqffKpW2ObuwX5A==\",
      \"dev\": true,
      \"requires\": {
        \"cipher-base\": \"^1.0.1\",
        \"des.js\": \"^1.0.0\",
        \"inherits\": \"^2.0.1\",
        \"safe-buffer\": \"^5.1.2\"
      }
    },
    \"browserify-rsa\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/browserify-rsa/-/browserify-rsa-4.1.0.tgz\",
      \"integrity\": \"sha512-AdEER0Hkspgno2aR97SAf6vi0y0k8NuOpGnVH3O99rcA5Q6sh8QxcngtHuJ6uXwnfAXNM4Gn1Gb7/MV1+Ymbog==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^5.0.0\",
        \"randombytes\": \"^2.0.1\"
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-5.2.0.tgz\",
          \"integrity\": \"sha512-D7iWRBvnZE8ecXiLj/9wbxH7Tk79fAh8IHaTNq1RWRixsS02W+5qS+iE9yq6RYl0asXx5tw0bLhmT5pIfbSquw==\",
          \"dev\": true
        }
      }
    },
    \"browserify-sign\": {
      \"version\": \"4.2.1\",
      \"resolved\": \"https://registry.npmjs.org/browserify-sign/-/browserify-sign-4.2.1.tgz\",
      \"integrity\": \"sha512-/vrA5fguVAKKAVTNJjgSm1tRQDHUU6DbwO9IROu/0WAzC8PKhucDSh18J0RMvVeHAn5puMd+QHC2erPRNf8lmg==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^5.1.1\",
        \"browserify-rsa\": \"^4.0.1\",
        \"create-hash\": \"^1.2.0\",
        \"create-hmac\": \"^1.1.7\",
        \"elliptic\": \"^6.5.3\",
        \"inherits\": \"^2.0.4\",
        \"parse-asn1\": \"^5.1.5\",
        \"readable-stream\": \"^3.6.0\",
        \"safe-buffer\": \"^5.2.0\"
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-5.2.0.tgz\",
          \"integrity\": \"sha512-D7iWRBvnZE8ecXiLj/9wbxH7Tk79fAh8IHaTNq1RWRixsS02W+5qS+iE9yq6RYl0asXx5tw0bLhmT5pIfbSquw==\",
          \"dev\": true
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
        }
      }
    },
    \"browserify-zlib\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/browserify-zlib/-/browserify-zlib-0.2.0.tgz\",
      \"integrity\": \"sha512-Z942RysHXmJrhqk88FmKBVq/v5tqmSkDz7p54G/MGyjMnCFFnC79XWNbg+Vta8W6Wb2qtSZTSxIGkJrRpCFEiA==\",
      \"dev\": true,
      \"requires\": {
        \"pako\": \"~1.0.5\"
      }
    },
    \"browserslist\": {
      \"version\": \"4.17.4\",
      \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.17.4.tgz\",
      \"integrity\": \"sha512-Zg7RpbZpIJRW3am9Lyckue7PLytvVxxhJj1CaJVlCWENsGEAOlnlt8X0ZxGRPp7Bt9o8tIRM5SEXy4BCPMJjLQ==\",
      \"dev\": true,
      \"requires\": {
        \"caniuse-lite\": \"^1.0.30001265\",
        \"electron-to-chromium\": \"^1.3.867\",
        \"escalade\": \"^3.1.1\",
        \"node-releases\": \"^2.0.0\",
        \"picocolors\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"picocolors\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-1.0.0.tgz\",
          \"integrity\": \"sha512-1fygroTLlHu66zi26VoTDv8yRgm0Fccecssto+MhsZ0D/DGW2sm8E8AjW7NU5VVTRt5GxbeZ5qBuJr+HyLYkjQ==\",
          \"dev\": true
        }
      }
    },
    \"buffer\": {
      \"version\": \"4.9.2\",
      \"resolved\": \"https://registry.npmjs.org/buffer/-/buffer-4.9.2.tgz\",
      \"integrity\": \"sha512-xq+q3SRMOxGivLhBNaUdC64hDTQwejJ+H0T/NB1XMtTVEwNTrfFF3gAxiyW0Bu/xWEGhjVKgUcMhCrUy2+uCWg==\",
      \"dev\": true,
      \"requires\": {
        \"base64-js\": \"^1.0.2\",
        \"ieee754\": \"^1.1.4\",
        \"isarray\": \"^1.0.0\"
      }
    },
    \"buffer-from\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/buffer-from/-/buffer-from-1.1.2.tgz\",
      \"integrity\": \"sha512-E+XQCRwSbaaiChtv6k6Dwgc+bx+Bs6vuKJHHl5kox/BaKbhiXzqQOwK4cO22yElGp2OCmjwVhT3HmxgyPGnJfQ==\",
      \"dev\": true
    },
    \"buffer-xor\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/buffer-xor/-/buffer-xor-1.0.3.tgz\",
      \"integrity\": \"sha1-JuYe0UIvtw3ULm42cp7VHYVf6Nk=\",
      \"dev\": true
    },
    \"builtin-status-codes\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/builtin-status-codes/-/builtin-status-codes-3.0.0.tgz\",
      \"integrity\": \"sha1-hZgoeOIbmOHGZCXgPQF0eI9Wnug=\",
      \"dev\": true
    },
    \"cacache\": {
      \"version\": \"12.0.4\",
      \"resolved\": \"https://registry.npmjs.org/cacache/-/cacache-12.0.4.tgz\",
      \"integrity\": \"sha512-a0tMB40oefvuInr4Cwb3GerbL9xTj1D5yg0T5xrjGCGyfvbxseIXX7BAO/u/hIXdafzOI5JC3wDwHyf24buOAQ==\",
      \"dev\": true,
      \"requires\": {
        \"bluebird\": \"^3.5.5\",
        \"chownr\": \"^1.1.1\",
        \"figgy-pudding\": \"^3.5.1\",
        \"glob\": \"^7.1.4\",
        \"graceful-fs\": \"^4.1.15\",
        \"infer-owner\": \"^1.0.3\",
        \"lru-cache\": \"^5.1.1\",
        \"mississippi\": \"^3.0.0\",
        \"mkdirp\": \"^0.5.1\",
        \"move-concurrently\": \"^1.0.1\",
        \"promise-inflight\": \"^1.0.1\",
        \"rimraf\": \"^2.6.3\",
        \"ssri\": \"^6.0.1\",
        \"unique-filename\": \"^1.1.1\",
        \"y18n\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"chownr\": {
          \"version\": \"1.1.4\",
          \"resolved\": \"https://registry.npmjs.org/chownr/-/chownr-1.1.4.tgz\",
          \"integrity\": \"sha512-jJ0bqzaylmJtVnNgzTeSOs8DPavpbYgEr/b0YL8/2GO3xJEhInFmhKMUnEJQjZumK7KXGFhUy89PrsJWlakBVg==\",
          \"dev\": true
        },
        \"lru-cache\": {
          \"version\": \"5.1.1\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-5.1.1.tgz\",
          \"integrity\": \"sha512-KpNARQA3Iwv+jTA0utUVVbrh+Jlrr1Fv0e56GGzAFOXN7dk/FviaDW8LHmK52DlcH4WP2n6gI8vN1aesBFgo9w==\",
          \"dev\": true,
          \"requires\": {
            \"yallist\": \"^3.0.2\"
          }
        },
        \"yallist\": {
          \"version\": \"3.1.1\",
          \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-3.1.1.tgz\",
          \"integrity\": \"sha512-a4UGQaWPH59mOXUYnAG2ewncQS4i4F43Tv3JoAM+s2VDAmS9NsK8GpDMLrCHPksFT7h3K6TOoUNn2pb7RoXx4g==\",
          \"dev\": true
        }
      }
    },
    \"cache-base\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/cache-base/-/cache-base-1.0.1.tgz\",
      \"integrity\": \"sha512-AKcdTnFSWATd5/GCPRxr2ChwIJ85CeyrEyjRHlKxQ56d4XJMGym0uAiKn0xbLOGOl3+yRpOTi484dVCEc5AUzQ==\",
      \"dev\": true,
      \"requires\": {
        \"collection-visit\": \"^1.0.0\",
        \"component-emitter\": \"^1.2.1\",
        \"get-value\": \"^2.0.6\",
        \"has-value\": \"^1.0.0\",
        \"isobject\": \"^3.0.1\",
        \"set-value\": \"^2.0.0\",
        \"to-object-path\": \"^0.3.0\",
        \"union-value\": \"^1.0.0\",
        \"unset-value\": \"^1.0.0\"
      }
    },
    \"cacheable-lookup\": {
      \"version\": \"5.0.4\",
      \"resolved\": \"https://registry.npmjs.org/cacheable-lookup/-/cacheable-lookup-5.0.4.tgz\",
      \"integrity\": \"sha512-2/kNscPhpcxrOigMZzbiWF7dz8ilhb/nIHU3EyZiXWXpeq/au8qJ8VhdftMkty3n7Gj6HIGalQG8oiBNB3AJgA==\"
    },
    \"cacheable-request\": {
      \"version\": \"7.0.2\",
      \"resolved\": \"https://registry.npmjs.org/cacheable-request/-/cacheable-request-7.0.2.tgz\",
      \"integrity\": \"sha512-pouW8/FmiPQbuGpkXQ9BAPv/Mo5xDGANgSNXzTzJ8DrKGuXOssM4wIQRjfanNRh3Yu5cfYPvcorqbhg2KIJtew==\",
      \"requires\": {
        \"clone-response\": \"^1.0.2\",
        \"get-stream\": \"^5.1.0\",
        \"http-cache-semantics\": \"^4.0.0\",
        \"keyv\": \"^4.0.0\",
        \"lowercase-keys\": \"^2.0.0\",
        \"normalize-url\": \"^6.0.1\",
        \"responselike\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"normalize-url\": {
          \"version\": \"6.1.0\",
          \"resolved\": \"https://registry.npmjs.org/normalize-url/-/normalize-url-6.1.0.tgz\",
          \"integrity\": \"sha512-DlL+XwOy3NxAQ8xuC0okPgK46iuVNAK01YN7RueYBqqFeGsBjV9XmCAzAdgt+667bCl5kPh9EqKKDwnaPG1I7A==\"
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
    \"caller-callsite\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/caller-callsite/-/caller-callsite-2.0.0.tgz\",
      \"integrity\": \"sha1-hH4PzgoiN1CpoCfFSzNzGtMVQTQ=\",
      \"dev\": true,
      \"requires\": {
        \"callsites\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"callsites\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/callsites/-/callsites-2.0.0.tgz\",
          \"integrity\": \"sha1-BuuE8A7qQT2oav/vrL/7Ngk7PFA=\",
          \"dev\": true
        }
      }
    },
    \"caller-path\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/caller-path/-/caller-path-2.0.0.tgz\",
      \"integrity\": \"sha1-Ro+DBE42mrIBD6xfBs7uFbsssfQ=\",
      \"dev\": true,
      \"requires\": {
        \"caller-callsite\": \"^2.0.0\"
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
      },
      \"dependencies\": {
        \"quick-lru\": {
          \"version\": \"4.0.1\",
          \"resolved\": \"https://registry.npmjs.org/quick-lru/-/quick-lru-4.0.1.tgz\",
          \"integrity\": \"sha512-ARhCpm70fzdcvNQfPoy49IaanKkTlRWF2JMzqhcJbhSFRZv7nPTvZJdcY7301IPmvW+/p0RgIWnQDLJxifsQ7g==\",
          \"dev\": true
        }
      }
    },
    \"caniuse-lite\": {
      \"version\": \"1.0.30001270\",
      \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001270.tgz\",
      \"integrity\": \"sha512-TcIC7AyNWXhcOmv2KftOl1ShFAaHQYcB/EPL/hEyMrcS7ZX0/DvV1aoy6BzV0+16wTpoAyTMGDNAJfSqS/rz7A==\",
      \"dev\": true
    },
    \"caseless\": {
      \"version\": \"0.12.0\",
      \"resolved\": \"https://registry.npmjs.org/caseless/-/caseless-0.12.0.tgz\",
      \"integrity\": \"sha512-4tYFyifaFfGacoiObjJegolkwSU4xQNGbVgUiNYVUxbQ2x2lUsFvY4hVgVzGiIe6WLOPqycWXA40l+PWsxthUw==\",
      \"dev\": true
    },
    \"chai\": {
      \"version\": \"4.3.4\",
      \"resolved\": \"https://registry.npmjs.org/chai/-/chai-4.3.4.tgz\",
      \"integrity\": \"sha512-yS5H68VYOCtN1cjfwumDSuzn/9c+yza4f3reKXlE5rUg7SFcCEy90gJvydNgOYtblyf4Zi6jIWRnXOgErta0KA==\",
      \"dev\": true,
      \"requires\": {
        \"assertion-error\": \"^1.1.0\",
        \"check-error\": \"^1.0.2\",
        \"deep-eql\": \"^3.0.1\",
        \"get-func-name\": \"^2.0.0\",
        \"pathval\": \"^1.1.1\",
        \"type-detect\": \"^4.0.5\"
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
    \"check-error\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/check-error/-/check-error-1.0.2.tgz\",
      \"integrity\": \"sha1-V00xLt2Iu13YkS6Sht1sCu1KrII=\",
      \"dev\": true
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
    \"cipher-base\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/cipher-base/-/cipher-base-1.0.4.tgz\",
      \"integrity\": \"sha512-Kkht5ye6ZGmwv40uUDZztayT2ThLQGfnj/T71N/XzeZeo3nf8foyW7zGTsPYkEya3m5f3cAypH+qe7YOrM1U2Q==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.1\",
        \"safe-buffer\": \"^5.0.1\"
      }
    },
    \"class-utils\": {
      \"version\": \"0.3.6\",
      \"resolved\": \"https://registry.npmjs.org/class-utils/-/class-utils-0.3.6.tgz\",
      \"integrity\": \"sha512-qOhPa/Fj7s6TY8H8esGu5QNpMMQxz79h+urzrNYN6mn+9BnxlDGf5QZ+XeCDsxSjPqsSR56XOZOJmpeurnLMeg==\",
      \"dev\": true,
      \"requires\": {
        \"arr-union\": \"^3.1.0\",
        \"define-property\": \"^0.2.5\",
        \"isobject\": \"^3.0.0\",
        \"static-extend\": \"^0.1.1\"
      }
    },
    \"clean-stack\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-stack/-/clean-stack-2.2.0.tgz\",
      \"integrity\": \"sha512-4diC9HaTE+KRAMWhDhrGOECgWZxoevMc5TlkObMqNSsVU62PYzXZ/SMTjzyGAFF1YusgxGcSWTEXBhp0CPwQ1A==\",
      \"dev\": true
    },
    \"clean-webpack-plugin\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-webpack-plugin/-/clean-webpack-plugin-3.0.0.tgz\",
      \"integrity\": \"sha512-MciirUH5r+cYLGCOL5JX/ZLzOZbVr1ot3Fw+KcvbhUb6PM+yycqd9ZhIlcigQ5gl+XhppNmw3bEFuaaMNyLj3A==\",
      \"dev\": true,
      \"requires\": {
        \"@types/webpack\": \"^4.4.31\",
        \"del\": \"^4.1.1\"
      }
    },
    \"cliui\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/cliui/-/cliui-5.0.0.tgz\",
      \"integrity\": \"sha512-PYeGSEmmHM6zvoef2w8TPzlrnNpXIjTipYK780YswmIP9vjxmd6Y2a3CB2Ks6/AU8NHjZugXvo8w3oWM2qnwXA==\",
      \"dev\": true,
      \"requires\": {
        \"string-width\": \"^3.1.0\",
        \"strip-ansi\": \"^5.2.0\",
        \"wrap-ansi\": \"^5.1.0\"
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
    \"clone-response\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/clone-response/-/clone-response-1.0.2.tgz\",
      \"integrity\": \"sha1-0dyXOSAxTfZ/vrlCI7TuNQI56Ws=\",
      \"requires\": {
        \"mimic-response\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"mimic-response\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/mimic-response/-/mimic-response-1.0.1.tgz\",
          \"integrity\": \"sha512-j5EctnkH7amfV/q5Hgmoal1g2QHFJRraOtmx0JpIqkxhBhI/lJSl1nMpQ45hVarwNETOoWEimndZ4QK0RHxuxQ==\"
        }
      }
    },
    \"code-point-at\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/code-point-at/-/code-point-at-1.1.0.tgz\",
      \"integrity\": \"sha512-RpAVKQA5T63xEj6/giIbUEtZwJ4UFIc3ZtvEkiaUERylqe8xb5IvqcgOurZLahv93CLKfxcw5YI+DZcUBRyLXA==\",
      \"dev\": true
    },
    \"collection-visit\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/collection-visit/-/collection-visit-1.0.0.tgz\",
      \"integrity\": \"sha1-S8A3PBZLwykbTTaMgpzxqApZ3KA=\",
      \"dev\": true,
      \"requires\": {
        \"map-visit\": \"^1.0.0\",
        \"object-visit\": \"^1.0.0\"
      }
    },
    \"color-convert\": {
      \"version\": \"1.9.3\",
      \"resolved\": \"https://registry.npmjs.org/color-convert/-/color-convert-1.9.3.tgz\",
      \"integrity\": \"sha512-QfAUtd+vFdAtFQcC8CCyYt1fYWxSqAiK2cSD6zDB8N3cpsEBAvRxp9zOGg6G/SHHJYAT88/az/IuDGALsNVbGg==\",
      \"requires\": {
        \"color-name\": \"1.1.3\"
      }
    },
    \"color-name\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.3.tgz\",
      \"integrity\": \"sha1-p9BVi9icQveV3UIyj3QIMcpTvCU=\"
    },
    \"colorette\": {
      \"version\": \"2.0.20\",
      \"resolved\": \"https://registry.npmjs.org/colorette/-/colorette-2.0.20.tgz\",
      \"integrity\": \"sha512-IfEDxwoWIjkeXL1eXcDiow4UbKjhLdq6/EuSVR9GMN7KVH3r9gQ83e73hsz1Nd1T3ijd5xv1wcWRYO+D6kCI2w==\",
      \"dev\": true
    },
    \"combined-stream\": {
      \"version\": \"1.0.8\",
      \"resolved\": \"https://registry.npmjs.org/combined-stream/-/combined-stream-1.0.8.tgz\",
      \"integrity\": \"sha512-FQN4MRfuJeHf7cBbBMJFXhKSDq+2kAArBlmRBvcvFE5BB1HZKXtSFASDhdlz9zOYwxh8lDdnvmMOe/+5cdoEdg==\",
      \"dev\": true,
      \"requires\": {
        \"delayed-stream\": \"~1.0.0\"
      }
    },
    \"commander\": {
      \"version\": \"2.20.3\",
      \"resolved\": \"https://registry.npmjs.org/commander/-/commander-2.20.3.tgz\",
      \"integrity\": \"sha512-GpVkmM8vF2vQUkj2LvZmD35JxeJOLCwJ9cUkugyk2nuhbv3+mJvpLYYt+0+USMxE+oj+ey/lJEnhZw75x/OMcQ==\",
      \"dev\": true
    },
    \"commondir\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/commondir/-/commondir-1.0.1.tgz\",
      \"integrity\": \"sha1-3dgA2gxmEnOTzKWVDqloo6rxJTs=\",
      \"dev\": true
    },
    \"component-emitter\": {
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/component-emitter/-/component-emitter-1.3.0.tgz\",
      \"integrity\": \"sha512-Rd3se6QB+sO1TwqZjscQrurpEPIfO0/yYnSin6Q/rD3mOutHvUrCAhJub3r90uNb+SESBuE0QYoB90YdfatsRg==\",
      \"dev\": true
    },
    \"concat-map\": {
      \"version\": \"0.0.1\",
      \"resolved\": \"https://registry.npmjs.org/concat-map/-/concat-map-0.0.1.tgz\",
      \"integrity\": \"sha1-2Klr13/Wjfd5OnMDajug1UBdR3s=\",
      \"dev\": true
    },
    \"concat-stream\": {
      \"version\": \"1.6.2\",
      \"resolved\": \"https://registry.npmjs.org/concat-stream/-/concat-stream-1.6.2.tgz\",
      \"integrity\": \"sha512-27HBghJxjiZtIk3Ycvn/4kbJk/1uZuJFfuPEns6LaEvpvG1f0hTea8lilrouyo9mVc2GWdcEZ8OLoGmSADlrCw==\",
      \"dev\": true,
      \"requires\": {
        \"buffer-from\": \"^1.0.0\",
        \"inherits\": \"^2.0.3\",
        \"readable-stream\": \"^2.2.2\",
        \"typedarray\": \"^0.0.6\"
      }
    },
    \"condense-newlines\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/condense-newlines/-/condense-newlines-0.2.1.tgz\",
      \"integrity\": \"sha1-PemFVTE5R10yUCyDsC9gaE0kxV8=\",
      \"dev\": true,
      \"requires\": {
        \"extend-shallow\": \"^2.0.1\",
        \"is-whitespace\": \"^0.3.0\",
        \"kind-of\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"kind-of\": {
          \"version\": \"3.2.2\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
          \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
          \"dev\": true,
          \"requires\": {
            \"is-buffer\": \"^1.1.5\"
          }
        }
      }
    },
    \"config-chain\": {
      \"version\": \"1.1.13\",
      \"resolved\": \"https://registry.npmjs.org/config-chain/-/config-chain-1.1.13.tgz\",
      \"integrity\": \"sha512-qj+f8APARXHrM0hraqXYb2/bOVSV4PvJQlNZ/DVj0QrmNM2q2euizkeuVckQ57J+W0mRH6Hvi+k50M4Jul2VRQ==\",
      \"dev\": true,
      \"requires\": {
        \"ini\": \"^1.3.4\",
        \"proto-list\": \"~1.2.1\"
      }
    },
    \"confusing-browser-globals\": {
      \"version\": \"1.0.11\",
      \"resolved\": \"https://registry.npmjs.org/confusing-browser-globals/-/confusing-browser-globals-1.0.11.tgz\",
      \"integrity\": \"sha512-JsPKdmh8ZkmnHxDk55FZ1TqVLvEQTvoByJZRN9jzI0UjxK/QgAmsphz7PGtqgPieQZ/CQcHWXCR7ATDNhGe+YA==\",
      \"dev\": true
    },
    \"console-browserify\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/console-browserify/-/console-browserify-1.2.0.tgz\",
      \"integrity\": \"sha512-ZMkYO/LkF17QvCPqM0gxw8yUzigAOZOSWSHg91FH6orS7vcEj5dVZTidN2fQ14yBSdg97RqhSNwLUXInd52OTA==\",
      \"dev\": true
    },
    \"console-control-strings\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/console-control-strings/-/console-control-strings-1.1.0.tgz\",
      \"integrity\": \"sha512-ty/fTekppD2fIwRvnZAVdeOiGd1c7YXEixbgJTNzqcxJWKQnjJ/V1bNEEE6hygpM3WjwHFUVK6HTjWSzV4a8sQ==\",
      \"dev\": true
    },
    \"consolidate\": {
      \"version\": \"0.15.1\",
      \"resolved\": \"https://registry.npmjs.org/consolidate/-/consolidate-0.15.1.tgz\",
      \"integrity\": \"sha512-DW46nrsMJgy9kqAbPt5rKaCr7uFtpo4mSUvLHIUbJEjm0vo+aY5QLwBUq3FK4tRnJr/X0Psc0C4jf/h+HtXSMw==\",
      \"dev\": true,
      \"requires\": {
        \"bluebird\": \"^3.1.1\"
      }
    },
    \"constants-browserify\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/constants-browserify/-/constants-browserify-1.0.0.tgz\",
      \"integrity\": \"sha1-wguW2MYXdIqvHBYCF2DNJ/y4y3U=\",
      \"dev\": true
    },
    \"convert-source-map\": {
      \"version\": \"1.8.0\",
      \"resolved\": \"https://registry.npmjs.org/convert-source-map/-/convert-source-map-1.8.0.tgz\",
      \"integrity\": \"sha512-+OQdjP49zViI/6i7nIJpA8rAl4sV/JdPfU9nZs3VqOwGIgizICvuN2ru6fMd+4llL0tar18UYJXfZ/TWtmhUjA==\",
      \"dev\": true,
      \"requires\": {
        \"safe-buffer\": \"~5.1.1\"
      },
      \"dependencies\": {
        \"safe-buffer\": {
          \"version\": \"5.1.2\",
          \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
          \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
          \"dev\": true
        }
      }
    },
    \"copy-concurrently\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/copy-concurrently/-/copy-concurrently-1.0.5.tgz\",
      \"integrity\": \"sha512-f2domd9fsVDFtaFcbaRZuYXwtdmnzqbADSwhSWYxYB/Q8zsdUUFMXVRwXGDMWmbEzAn1kdRrtI1T/KTFOL4X2A==\",
      \"dev\": true,
      \"requires\": {
        \"aproba\": \"^1.1.1\",
        \"fs-write-stream-atomic\": \"^1.0.8\",
        \"iferr\": \"^0.1.5\",
        \"mkdirp\": \"^0.5.1\",
        \"rimraf\": \"^2.5.4\",
        \"run-queue\": \"^1.0.0\"
      }
    },
    \"copy-descriptor\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/copy-descriptor/-/copy-descriptor-0.1.1.tgz\",
      \"integrity\": \"sha1-Z29us8OZl8LuGsOpJP1hJHSPV40=\",
      \"dev\": true
    },
    \"copy-webpack-plugin\": {
      \"version\": \"6.4.1\",
      \"resolved\": \"https://registry.npmjs.org/copy-webpack-plugin/-/copy-webpack-plugin-6.4.1.tgz\",
      \"integrity\": \"sha512-MXyPCjdPVx5iiWyl40Va3JGh27bKzOTNY3NjUTrosD2q7dR/cLD0013uqJ3BpFbUjyONINjb6qI7nDIJujrMbA==\",
      \"dev\": true,
      \"requires\": {
        \"cacache\": \"^15.0.5\",
        \"fast-glob\": \"^3.2.4\",
        \"find-cache-dir\": \"^3.3.1\",
        \"glob-parent\": \"^5.1.1\",
        \"globby\": \"^11.0.1\",
        \"loader-utils\": \"^2.0.0\",
        \"normalize-path\": \"^3.0.0\",
        \"p-limit\": \"^3.0.2\",
        \"schema-utils\": \"^3.0.0\",
        \"serialize-javascript\": \"^5.0.1\",
        \"webpack-sources\": \"^1.4.3\"
      },
      \"dependencies\": {
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
          }
        },
        \"find-cache-dir\": {
          \"version\": \"3.3.2\",
          \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-3.3.2.tgz\",
          \"integrity\": \"sha512-wXZV5emFEjrridIgED11OoUKLxiYjAcqot/NJdAkOhlJ+vGzwhOAfcG5OX1jP+S0PcjEn8bdMJv+g2jwQ3Onig==\",
          \"dev\": true,
          \"requires\": {
            \"commondir\": \"^1.0.1\",
            \"make-dir\": \"^3.0.2\",
            \"pkg-dir\": \"^4.1.0\"
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
          }
        },
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
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
          \"version\": \"3.1.0\",
          \"resolved\": \"https://registry.npmjs.org/make-dir/-/make-dir-3.1.0.tgz\",
          \"integrity\": \"sha512-g3FeP20LNwhALb/6Cz6Dd4F2ngze0jz7tbzrD2wAV+o9FeNHe4rL+yK2md0J/fiSf1sa1ADhXqi5+oVwOM/eGw==\",
          \"dev\": true,
          \"requires\": {
            \"semver\": \"^6.0.0\"
          }
        },
        \"mkdirp\": {
          \"version\": \"1.0.4\",
          \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
          \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
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
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
          \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^2.2.0\"
          },
          \"dependencies\": {
            \"p-limit\": {
              \"version\": \"2.3.0\",
              \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.3.0.tgz\",
              \"integrity\": \"sha512-//88mFWSJx8lxCzwdAABTJL2MyWB12+eIY7MDL2SqLmAkeKU9qxRvWuSyTjm3FUmpBEMuFfckAIqEaVGUDxb6w==\",
              \"dev\": true,
              \"requires\": {
                \"p-try\": \"^2.0.0\"
              }
            }
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
        \"semver\": {
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        },
        \"serialize-javascript\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-5.0.1.tgz\",
          \"integrity\": \"sha512-SaaNal9imEO737H2c05Og0/8LUXG7EnsZyMa8MzkmuHoELfT6txuj0cMqRj6zfPKnmQ1yasR4PCJc8x+M4JSPA==\",
          \"dev\": true,
          \"requires\": {
            \"randombytes\": \"^2.1.0\"
          }
        },
        \"ssri\": {
          \"version\": \"8.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ssri/-/ssri-8.0.1.tgz\",
          \"integrity\": \"sha512-97qShzy1AiyxvPNIkLWoGua7xoQzzPjQ0HAH4B0rWKo7SZ6USuPcrUiAFrws0UH8RrbWmgq3LMTObhPIHbbBeQ==\",
          \"dev\": true,
          \"requires\": {
            \"minipass\": \"^3.1.1\"
          }
        }
      }
    },
    \"core-js\": {
      \"version\": \"2.6.12\",
      \"resolved\": \"https://registry.npmjs.org/core-js/-/core-js-2.6.12.tgz\",
      \"integrity\": \"sha512-Kb2wC0fvsWfQrgk8HU5lW6U/Lcs8+9aaYcy4ZFc6DDlo4nZ7n70dEgE5rtR0oG6ufKDUnrwfWL1mXR5ljDatrQ==\",
      \"dev\": true
    },
    \"core-js-compat\": {
      \"version\": \"3.31.1\",
      \"resolved\": \"https://registry.npmjs.org/core-js-compat/-/core-js-compat-3.31.1.tgz\",
      \"integrity\": \"sha512-wIDWd2s5/5aJSdpOJHfSibxNODxoGoWOBHt8JSPB41NOE94M7kuTPZCYLOlTtuoXTsBPKobpJ6T+y0SSy5L9SA==\",
      \"dev\": true,
      \"requires\": {
        \"browserslist\": \"^4.21.9\"
      },
      \"dependencies\": {
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
        \"caniuse-lite\": {
          \"version\": \"1.0.30001516\",
          \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001516.tgz\",
          \"integrity\": \"sha512-Wmec9pCBY8CWbmI4HsjBeQLqDTqV91nFVR83DnZpYyRnPI1wePDsTg0bGLPC5VU/3OIZV1fmxEea1b+tFKe86g==\",
          \"dev\": true
        },
        \"electron-to-chromium\": {
          \"version\": \"1.4.464\",
          \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.464.tgz\",
          \"integrity\": \"sha512-guZ84yoou4+ILNdj0XEbmGs6DEWj6zpVOWYpY09GU66yEb0DSYvP/biBPzHn0GuW/3RC/pnaYNUWlQE1fJYtgA==\",
          \"dev\": true
        },
        \"node-releases\": {
          \"version\": \"2.0.13\",
          \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.13.tgz\",
          \"integrity\": \"sha512-uYr7J37ae/ORWdZeQ1xxMJe3NtdmqMC/JZK+geofDrkLUApKRHPd18/TxtBOJ4A0/+uUIliorNrfYV6s1b02eQ==\",
          \"dev\": true
        }
      }
    },
    \"core-util-is\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.3.tgz\",
      \"integrity\": \"sha512-ZQBvi1DcpJ4GDqanjucZ2Hj3wEO5pZDS89BWbkcrvdxksJorwUDDZamX9ldFkp9aw2lmBDLgkObEA4DWNJ9FYQ==\",
      \"dev\": true
    },
    \"create-ecdh\": {
      \"version\": \"4.0.4\",
      \"resolved\": \"https://registry.npmjs.org/create-ecdh/-/create-ecdh-4.0.4.tgz\",
      \"integrity\": \"sha512-mf+TCx8wWc9VpuxfP2ht0iSISLZnt0JgWlrOKZiNqyUZWnjIaCIVNQArMHnCZKfEYRg6IM7A+NeJoN8gf/Ws0A==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.1.0\",
        \"elliptic\": \"^6.5.3\"
      }
    },
    \"create-hash\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/create-hash/-/create-hash-1.2.0.tgz\",
      \"integrity\": \"sha512-z00bCGNHDG8mHAkP7CtT1qVu+bFQUPjYq/4Iv3C3kWjTFV10zIjfSoeqXo9Asws8gwSHDGj/hl2u4OGIjapeCg==\",
      \"dev\": true,
      \"requires\": {
        \"cipher-base\": \"^1.0.1\",
        \"inherits\": \"^2.0.1\",
        \"md5.js\": \"^1.3.4\",
        \"ripemd160\": \"^2.0.1\",
        \"sha.js\": \"^2.4.0\"
      }
    },
    \"create-hmac\": {
      \"version\": \"1.1.7\",
      \"resolved\": \"https://registry.npmjs.org/create-hmac/-/create-hmac-1.1.7.tgz\",
      \"integrity\": \"sha512-MJG9liiZ+ogc4TzUwuvbER1JRdgvUFSB5+VR/g5h82fGaIRWMWddtKBHi7/sVhfjQZ6SehlyhvQYrcYkaUIpLg==\",
      \"dev\": true,
      \"requires\": {
        \"cipher-base\": \"^1.0.3\",
        \"create-hash\": \"^1.1.0\",
        \"inherits\": \"^2.0.1\",
        \"ripemd160\": \"^2.0.0\",
        \"safe-buffer\": \"^5.0.1\",
        \"sha.js\": \"^2.4.8\"
      }
    },
    \"create-require\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/create-require/-/create-require-1.1.1.tgz\",
      \"integrity\": \"sha512-dcKFX3jn0MpIaXjisoRvexIJVEKzaq7z2rZKxf+MSr9TkdmHmsU4m2lcLojrj/FHl8mk5VxMmYA+ftRkP/3oKQ==\",
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
      },
      \"dependencies\": {
        \"which\": {
          \"version\": \"2.0.2\",
          \"resolved\": \"https://registry.npmjs.org/which/-/which-2.0.2.tgz\",
          \"integrity\": \"sha512-BLI3Tl1TW3Pvl70l3yq3Y64i+awpwXqsGBYWkkqMtnbXgrMD+yj7rhW0kuEDxzJaYXGjEW5ogapKNMEKNMjibA==\",
          \"dev\": true,
          \"requires\": {
            \"isexe\": \"^2.0.0\"
          }
        }
      }
    },
    \"crypto-browserify\": {
      \"version\": \"3.12.0\",
      \"resolved\": \"https://registry.npmjs.org/crypto-browserify/-/crypto-browserify-3.12.0.tgz\",
      \"integrity\": \"sha512-fz4spIh+znjO2VjL+IdhEpRJ3YN6sMzITSBijk6FK2UvTqruSQW+/cCZTSNsMiZNvUeq0CqurF+dAbyiGOY6Wg==\",
      \"dev\": true,
      \"requires\": {
        \"browserify-cipher\": \"^1.0.0\",
        \"browserify-sign\": \"^4.0.0\",
        \"create-ecdh\": \"^4.0.0\",
        \"create-hash\": \"^1.1.0\",
        \"create-hmac\": \"^1.1.0\",
        \"diffie-hellman\": \"^5.0.0\",
        \"inherits\": \"^2.0.1\",
        \"pbkdf2\": \"^3.0.3\",
        \"public-encrypt\": \"^4.0.0\",
        \"randombytes\": \"^2.0.0\",
        \"randomfill\": \"^1.0.3\"
      }
    },
    \"css-blank-pseudo\": {
      \"version\": \"0.1.4\",
      \"resolved\": \"https://registry.npmjs.org/css-blank-pseudo/-/css-blank-pseudo-0.1.4.tgz\",
      \"integrity\": \"sha512-LHz35Hr83dnFeipc7oqFDmsjHdljj3TQtxGGiNWSOsTLIAubSm4TEz8qCaKFpk7idaQ1GfWscF4E6mgpBysA1w==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.5\"
      }
    },
    \"css-has-pseudo\": {
      \"version\": \"0.10.0\",
      \"resolved\": \"https://registry.npmjs.org/css-has-pseudo/-/css-has-pseudo-0.10.0.tgz\",
      \"integrity\": \"sha512-Z8hnfsZu4o/kt+AuFzeGpLVhFOGO9mluyHBaA2bA8aCGTwah5sT3WV/fTHH8UNZUytOIImuGPrl/prlb4oX4qQ==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.6\",
        \"postcss-selector-parser\": \"^5.0.0-rc.4\"
      }
    },
    \"css-loader\": {
      \"version\": \"3.6.0\",
      \"resolved\": \"https://registry.npmjs.org/css-loader/-/css-loader-3.6.0.tgz\",
      \"integrity\": \"sha512-M5lSukoWi1If8dhQAUCvj4H8vUt3vOnwbQBH9DdTm/s4Ym2B/3dPMtYZeJmq7Q3S3Pa+I94DcZ7pc9bP14cWIQ==\",
      \"dev\": true,
      \"requires\": {
        \"camelcase\": \"^5.3.1\",
        \"cssesc\": \"^3.0.0\",
        \"icss-utils\": \"^4.1.1\",
        \"loader-utils\": \"^1.2.3\",
        \"normalize-path\": \"^3.0.0\",
        \"postcss\": \"^7.0.32\",
        \"postcss-modules-extract-imports\": \"^2.0.0\",
        \"postcss-modules-local-by-default\": \"^3.0.2\",
        \"postcss-modules-scope\": \"^2.2.0\",
        \"postcss-modules-values\": \"^3.0.0\",
        \"postcss-value-parser\": \"^4.1.0\",
        \"schema-utils\": \"^2.7.0\",
        \"semver\": \"^6.3.0\"
      },
      \"dependencies\": {
        \"schema-utils\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-2.7.1.tgz\",
          \"integrity\": \"sha512-SHiNtMOUGWBQJwzISiVYKu82GiV4QYGePp3odlY1tuKO7gPtphAT5R/py0fA6xtbgLL/RvtJZnU9b8s0F1q0Xg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.5\",
            \"ajv\": \"^6.12.4\",
            \"ajv-keywords\": \"^3.5.2\"
          }
        },
        \"semver\": {
          \"version\": \"6.3.0\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
          \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
          \"dev\": true
        }
      }
    },
    \"css-prefers-color-scheme\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/css-prefers-color-scheme/-/css-prefers-color-scheme-3.1.1.tgz\",
      \"integrity\": \"sha512-MTu6+tMs9S3EUqzmqLXEcgNRbNkkD/TGFvowpeoWJn5Vfq7FMgsmRQs9X5NXAURiOBmOxm/lLjsDNXDE6k9bhg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.5\"
      }
    },
    \"cssdb\": {
      \"version\": \"4.4.0\",
      \"resolved\": \"https://registry.npmjs.org/cssdb/-/cssdb-4.4.0.tgz\",
      \"integrity\": \"sha512-LsTAR1JPEM9TpGhl/0p3nQecC2LJ0kD8X5YARu1hk/9I1gril5vDtMZyNxcEpxxDj34YNck/ucjuoUd66K03oQ==\",
      \"dev\": true
    },
    \"cssesc\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/cssesc/-/cssesc-3.0.0.tgz\",
      \"integrity\": \"sha512-/Tb/JcjK111nNScGob5MNtsntNM1aCNUDipB/TkwZFhyDrrE47SOx/18wF2bbjgc3ZzCSKW1T5nt5EbFoAz/Vg==\",
      \"dev\": true
    },
    \"cssom\": {
      \"version\": \"0.4.4\",
      \"resolved\": \"https://registry.npmjs.org/cssom/-/cssom-0.4.4.tgz\",
      \"integrity\": \"sha512-p3pvU7r1MyyqbTk+WbNJIgJjG2VmTIaB10rI93LzVPrmDJKkzKYMtxxyAvQXR/NS6otuzveI7+7BBq3SjBS2mw==\",
      \"dev\": true
    },
    \"cssstyle\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/cssstyle/-/cssstyle-2.3.0.tgz\",
      \"integrity\": \"sha512-AZL67abkUzIuvcHqk7c09cezpGNcxUxU4Ioi/05xHk4DQeTkWmGYftIE6ctU6AEt+Gn4n1lDStOtj7FKycP71A==\",
      \"dev\": true,
      \"requires\": {
        \"cssom\": \"~0.3.6\"
      },
      \"dependencies\": {
        \"cssom\": {
          \"version\": \"0.3.8\",
          \"resolved\": \"https://registry.npmjs.org/cssom/-/cssom-0.3.8.tgz\",
          \"integrity\": \"sha512-b0tGHbfegbhPJpxpiBPU2sCkigAqtM9O121le6bbOlgyV+NyGyCmVfJ6QW9eRjz8CpNfWEOYBIMIGRYkLwsIYg==\",
          \"dev\": true
        }
      }
    },
    \"cyclist\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/cyclist/-/cyclist-1.0.1.tgz\",
      \"integrity\": \"sha1-WW6WmP0MgOEgOMK4LW6xs1tiJNk=\",
      \"dev\": true
    },
    \"dashdash\": {
      \"version\": \"1.14.1\",
      \"resolved\": \"https://registry.npmjs.org/dashdash/-/dashdash-1.14.1.tgz\",
      \"integrity\": \"sha512-jRFi8UDGo6j+odZiEpjazZaWqEal3w/basFjQHQEwVtZJGDpxbH1MeYluwCS8Xq5wmLJooDlMgvVarmWfGM44g==\",
      \"dev\": true,
      \"requires\": {
        \"assert-plus\": \"^1.0.0\"
      }
    },
    \"data-urls\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/data-urls/-/data-urls-2.0.0.tgz\",
      \"integrity\": \"sha512-X5eWTSXO/BJmpdIKCRuKUgSCgAN0OwliVK3yPKbwIWU1Tdw5BRajxlzMidvh+gwko9AfQ9zIj52pzF91Q3YAvQ==\",
      \"dev\": true,
      \"requires\": {
        \"abab\": \"^2.0.3\",
        \"whatwg-mimetype\": \"^2.3.0\",
        \"whatwg-url\": \"^8.0.0\"
      }
    },
    \"de-indent\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/de-indent/-/de-indent-1.0.2.tgz\",
      \"integrity\": \"sha1-sgOOhG3DO6pXlhKNCAS0VbjB4h0=\"
    },
    \"debug\": {
      \"version\": \"4.3.2\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-4.3.2.tgz\",
      \"integrity\": \"sha512-mOp8wKcvj7XxC78zLgw/ZA+6TSgkoE2C/ienthhRD298T7UNwAg9diBpLRxC0mOezLl4B0xV7M0cCO6P/O0Xhw==\",
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
    \"decamelize\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
      \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
      \"dev\": true
    },
    \"decamelize-keys\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/decamelize-keys/-/decamelize-keys-1.1.1.tgz\",
      \"integrity\": \"sha512-WiPxgEirIV0/eIOMcnFBA3/IJZAZqKnwAwWyvvdi4lsr1WCN22nhdf/3db3DoZcUjTV2SqfzIwNyp6y2xs3nmg==\",
      \"dev\": true,
      \"requires\": {
        \"decamelize\": \"^1.1.0\",
        \"map-obj\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"map-obj\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-1.0.1.tgz\",
          \"integrity\": \"sha512-7N/q3lyZ+LVCp7PzuxrJr4KMbBE2hW7BT7YNia330OFxIf4d3r5zVpicP2650l7CPN6RM9zOJRl3NGpqSiw3Eg==\",
          \"dev\": true
        }
      }
    },
    \"decimal.js\": {
      \"version\": \"10.3.1\",
      \"resolved\": \"https://registry.npmjs.org/decimal.js/-/decimal.js-10.3.1.tgz\",
      \"integrity\": \"sha512-V0pfhfr8suzyPGOx3nmq4aHqabehUZn6Ch9kyFpV79TGDTWFmHqUqXdabR7QHqxzrYolF4+tVmJhUG4OURg5dQ==\",
      \"dev\": true
    },
    \"decode-uri-component\": {
      \"version\": \"0.2.2\",
      \"resolved\": \"https://registry.npmjs.org/decode-uri-component/-/decode-uri-component-0.2.2.tgz\",
      \"integrity\": \"sha512-FqUYQ+8o158GyGTrMFJms9qh3CqTKvAqgqsTnkLI8sKu0028orqBhxNMFkFen0zGyg6epACD32pjVk58ngIErQ==\",
      \"dev\": true
    },
    \"decompress-response\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/decompress-response/-/decompress-response-6.0.0.tgz\",
      \"integrity\": \"sha512-aW35yZM6Bb/4oJlZncMH2LCoZtJXTRxES17vE3hoRiowU2kWHaJKFkSBDnDR+cm9J+9QhXmREyIfv0pji9ejCQ==\",
      \"requires\": {
        \"mimic-response\": \"^3.1.0\"
      }
    },
    \"deep-eql\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/deep-eql/-/deep-eql-3.0.1.tgz\",
      \"integrity\": \"sha512-+QeIQyN5ZuO+3Uk5DYh6/1eKO0m0YmJFGNmFHGACpf1ClL1nmlV/p4gNgbl2pJGxgXb4faqo6UE+M5ACEMyVcw==\",
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
    \"defer-to-connect\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/defer-to-connect/-/defer-to-connect-2.0.1.tgz\",
      \"integrity\": \"sha512-4tvttepXG1VaYGrRibk5EwJd1t4udunSOVMdLSAL6mId1ix438oPwPZMALY41FCijukO1L0twNcGsdzS7dHgDg==\"
    },
    \"define-properties\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.1.3.tgz\",
      \"integrity\": \"sha512-3MqfYKj2lLzdMSf8ZIZE/V+Zuy+BgD6f164e8K2w7dgnpKArBDerGYpM46IYYcjnkdPNMjPk9A6VFB8+3SKlXQ==\",
      \"dev\": true,
      \"requires\": {
        \"object-keys\": \"^1.0.12\"
      }
    },
    \"define-property\": {
      \"version\": \"0.2.5\",
      \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
      \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
      \"dev\": true,
      \"requires\": {
        \"is-descriptor\": \"^0.1.0\"
      },
      \"dependencies\": {
        \"is-accessor-descriptor\": {
          \"version\": \"0.1.6\",
          \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-0.1.6.tgz\",
          \"integrity\": \"sha1-qeEss66Nh2cn7u84Q/igiXtcmNY=\",
          \"dev\": true,
          \"requires\": {
            \"kind-of\": \"^3.0.2\"
          },
          \"dependencies\": {
            \"kind-of\": {
              \"version\": \"3.2.2\",
              \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
              \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
              \"dev\": true,
              \"requires\": {
                \"is-buffer\": \"^1.1.5\"
              }
            }
          }
        },
        \"is-data-descriptor\": {
          \"version\": \"0.1.4\",
          \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-0.1.4.tgz\",
          \"integrity\": \"sha1-C17mSDiOLIYCgueT8YVv7D8wG1Y=\",
          \"dev\": true,
          \"requires\": {
            \"kind-of\": \"^3.0.2\"
          },
          \"dependencies\": {
            \"kind-of\": {
              \"version\": \"3.2.2\",
              \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
              \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
              \"dev\": true,
              \"requires\": {
                \"is-buffer\": \"^1.1.5\"
              }
            }
          }
        },
        \"is-descriptor\": {
          \"version\": \"0.1.6\",
          \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-0.1.6.tgz\",
          \"integrity\": \"sha512-avDYr0SB3DwO9zsMov0gKCESFYqCnE4hq/4z3TdUlukEy5t9C0YRq7HLrsN52NAcqXKaepeCD0n+B0arnVG3Hg==\",
          \"dev\": true,
          \"requires\": {
            \"is-accessor-descriptor\": \"^0.1.6\",
            \"is-data-descriptor\": \"^0.1.4\",
            \"kind-of\": \"^5.0.0\"
          }
        },
        \"kind-of\": {
          \"version\": \"5.1.0\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
          \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
          \"dev\": true
        }
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
        \"pify\": {
          \"version\": \"4.0.1\",
          \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
          \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
          \"dev\": true
        }
      }
    },
    \"delayed-stream\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/delayed-stream/-/delayed-stream-1.0.0.tgz\",
      \"integrity\": \"sha1-3zrhmayt+31ECqrgsp4icrJOxhk=\",
      \"dev\": true
    },
    \"delegates\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/delegates/-/delegates-1.0.0.tgz\",
      \"integrity\": \"sha512-bd2L678uiWATM6m5Z1VzNCErI3jiGzt6HGY8OVICs40JQq/HALfbyNJmp0UDakEY4pMMaN0Ly5om/B1VI/+xfQ==\",
      \"dev\": true
    },
    \"deprecated-decorator\": {
      \"version\": \"0.1.6\",
      \"resolved\": \"https://registry.npmjs.org/deprecated-decorator/-/deprecated-decorator-0.1.6.tgz\",
      \"integrity\": \"sha1-AJZjF7ehL+kvPMgx91g68ym4bDc=\"
    },
    \"des.js\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/des.js/-/des.js-1.0.1.tgz\",
      \"integrity\": \"sha512-Q0I4pfFrv2VPd34/vfLrFOoRmlYj3OV50i7fskps1jZWK1kApMWWT9G6RRUeYedLcBDIhnSDaUvJMb3AhUlaEA==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.1\",
        \"minimalistic-assert\": \"^1.0.0\"
      }
    },
    \"detect-indent\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/detect-indent/-/detect-indent-4.0.0.tgz\",
      \"integrity\": \"sha1-920GQ1LN9Docts5hnE7jqUdd4gg=\",
      \"dev\": true,
      \"requires\": {
        \"repeating\": \"^2.0.0\"
      }
    },
    \"diff\": {
      \"version\": \"3.5.0\",
      \"resolved\": \"https://registry.npmjs.org/diff/-/diff-3.5.0.tgz\",
      \"integrity\": \"sha512-A46qtFgd+g7pDZinpnwiRJtxbC1hpgf0uzP3iG89scHk0AUC7A1TGxf5OiiOUv/JMZR8GOt8hL900hV0bOy5xA==\",
      \"dev\": true
    },
    \"diff-sequences\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/diff-sequences/-/diff-sequences-26.6.2.tgz\",
      \"integrity\": \"sha512-Mv/TDa3nZ9sbc5soK+OoA74BsS3mL37yixCvUAQkiuA4Wz6YtwP/K47n2rv2ovzHZvoiQeA5FTQOschKkEwB0Q==\",
      \"dev\": true
    },
    \"diffie-hellman\": {
      \"version\": \"5.0.3\",
      \"resolved\": \"https://registry.npmjs.org/diffie-hellman/-/diffie-hellman-5.0.3.tgz\",
      \"integrity\": \"sha512-kqag/Nl+f3GwyK25fhUMYj81BUOrZ9IuJsjIcDE5icNM9FJHAVm3VcUDxdLPoQtTuUylWm6ZIknYJwwaPxsUzg==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.1.0\",
        \"miller-rabin\": \"^4.0.0\",
        \"randombytes\": \"^2.0.0\"
      }
    },
    \"dir-glob\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/dir-glob/-/dir-glob-3.0.1.tgz\",
      \"integrity\": \"sha512-WkrWp9GR4KXfKGYzOLmTuGVi1UWFfws377n9cc55/tb6DuqyF6pcQ5AbiHEshaDpY9v6oaSr2XCDidGmMwdzIA==\",
      \"dev\": true,
      \"requires\": {
        \"path-type\": \"^4.0.0\"
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
    \"dom-event-types\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/dom-event-types/-/dom-event-types-1.0.0.tgz\",
      \"integrity\": \"sha512-2G2Vwi2zXTHBGqXHsJ4+ak/iP0N8Ar+G8a7LiD2oup5o4sQWytwqqrZu/O6hIMV0KMID2PL69OhpshLO0n7UJQ==\",
      \"dev\": true
    },
    \"dom-serializer\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/dom-serializer/-/dom-serializer-1.3.2.tgz\",
      \"integrity\": \"sha512-5c54Bk5Dw4qAxNOI1pFEizPSjVsx5+bpJKmL2kPn8JhBUq2q09tTCa3mjijun2NfK78NMouDYNMBkOrPZiS+ig==\",
      \"dev\": true,
      \"requires\": {
        \"domelementtype\": \"^2.0.1\",
        \"domhandler\": \"^4.2.0\",
        \"entities\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"entities\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/entities/-/entities-2.2.0.tgz\",
          \"integrity\": \"sha512-p92if5Nz619I0w+akJrLZH0MX0Pb5DX39XOwQTtXSdQQOaYH03S1uIQp4mhOZtAXrxq4ViO67YTiLBo2638o9A==\",
          \"dev\": true
        }
      }
    },
    \"domain-browser\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/domain-browser/-/domain-browser-1.2.0.tgz\",
      \"integrity\": \"sha512-jnjyiM6eRyZl2H+W8Q/zLMA481hzi0eszAaBUzIVnmYVDBbnLxVNnfu1HgEBvCbL+71FrxMl3E6lpKH7Ge3OXA==\",
      \"dev\": true
    },
    \"domelementtype\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/domelementtype/-/domelementtype-2.2.0.tgz\",
      \"integrity\": \"sha512-DtBMo82pv1dFtUmHyr48beiuq792Sxohr+8Hm9zoxklYPfa6n0Z3Byjj2IV7bmr2IyqClnqEQhfgHJJ5QF0R5A==\",
      \"dev\": true
    },
    \"domexception\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/domexception/-/domexception-2.0.1.tgz\",
      \"integrity\": \"sha512-yxJ2mFy/sibVQlu5qHjOkf9J3K6zgmCxgJ94u2EdvDOV09H+32LtRswEcUsmUWN72pVLOEnTSRaIVVzVQgS0dg==\",
      \"dev\": true,
      \"requires\": {
        \"webidl-conversions\": \"^5.0.0\"
      },
      \"dependencies\": {
        \"webidl-conversions\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/webidl-conversions/-/webidl-conversions-5.0.0.tgz\",
          \"integrity\": \"sha512-VlZwKPCkYKxQgeSbH5EyngOmRp7Ww7I9rQLERETtf5ofd9pGeswWiOtogpEO850jziPRarreGxn5QIiTqpb2wA==\",
          \"dev\": true
        }
      }
    },
    \"domhandler\": {
      \"version\": \"4.2.2\",
      \"resolved\": \"https://registry.npmjs.org/domhandler/-/domhandler-4.2.2.tgz\",
      \"integrity\": \"sha512-PzE9aBMsdZO8TK4BnuJwH0QT41wgMbRzuZrHUcpYncEjmQazq8QEaBWgLG7ZyC/DAZKEgglpIA6j4Qn/HmxS3w==\",
      \"dev\": true,
      \"requires\": {
        \"domelementtype\": \"^2.2.0\"
      }
    },
    \"domutils\": {
      \"version\": \"2.8.0\",
      \"resolved\": \"https://registry.npmjs.org/domutils/-/domutils-2.8.0.tgz\",
      \"integrity\": \"sha512-w96Cjofp72M5IIhpjgobBimYEfoPjx1Vx0BSX9P30WBdZW2WIKU0T1Bd0kz2eNZ9ikjKgHbEyKx8BB6H1L3h3A==\",
      \"dev\": true,
      \"requires\": {
        \"dom-serializer\": \"^1.0.1\",
        \"domelementtype\": \"^2.2.0\",
        \"domhandler\": \"^4.2.0\"
      }
    },
    \"duplexify\": {
      \"version\": \"3.7.1\",
      \"resolved\": \"https://registry.npmjs.org/duplexify/-/duplexify-3.7.1.tgz\",
      \"integrity\": \"sha512-07z8uv2wMyS51kKhD1KsdXJg5WQ6t93RneqRxUHnskXVtlYYkLqM0gqStQZ3pj073g687jPCHrqNfCzawLYh5g==\",
      \"dev\": true,
      \"requires\": {
        \"end-of-stream\": \"^1.0.0\",
        \"inherits\": \"^2.0.1\",
        \"readable-stream\": \"^2.0.0\",
        \"stream-shift\": \"^1.0.0\"
      }
    },
    \"ecc-jsbn\": {
      \"version\": \"0.1.2\",
      \"resolved\": \"https://registry.npmjs.org/ecc-jsbn/-/ecc-jsbn-0.1.2.tgz\",
      \"integrity\": \"sha512-eh9O+hwRHNbG4BLTjEl3nw044CkGm5X6LoaCf7LPp7UU8Qrt47JYNi6nPX8xjW97TKGKm1ouctg0QSpZe9qrnw==\",
      \"dev\": true,
      \"requires\": {
        \"jsbn\": \"~0.1.0\",
        \"safer-buffer\": \"^2.1.0\"
      }
    },
    \"editorconfig\": {
      \"version\": \"0.15.3\",
      \"resolved\": \"https://registry.npmjs.org/editorconfig/-/editorconfig-0.15.3.tgz\",
      \"integrity\": \"sha512-M9wIMFx96vq0R4F+gRpY3o2exzb8hEj/n9S8unZtHSvYjibBp/iMufSzvmOcV/laG0ZtuTVGtiJggPOSW2r93g==\",
      \"dev\": true,
      \"requires\": {
        \"commander\": \"^2.19.0\",
        \"lru-cache\": \"^4.1.5\",
        \"semver\": \"^5.6.0\",
        \"sigmund\": \"^1.0.1\"
      }
    },
    \"electron-to-chromium\": {
      \"version\": \"1.3.875\",
      \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.3.875.tgz\",
      \"integrity\": \"sha512-K/rqxvLwZOshysgPOqfU1x8rfdFXyieYLdT1JYlLHkLj8gI/4Qh4Xi+KrO6kq4t3aNhp/wGSGOyR4ooYvXbvyg==\",
      \"dev\": true
    },
    \"elliptic\": {
      \"version\": \"6.5.4\",
      \"resolved\": \"https://registry.npmjs.org/elliptic/-/elliptic-6.5.4.tgz\",
      \"integrity\": \"sha512-iLhC6ULemrljPZb+QutR5TQGB+pdW6KGD5RSegS+8sorOZT+rdQFbsQFJgvN3eRqNALqJer4oQ16YvJHlU8hzQ==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.11.9\",
        \"brorand\": \"^1.1.0\",
        \"hash.js\": \"^1.0.0\",
        \"hmac-drbg\": \"^1.0.1\",
        \"inherits\": \"^2.0.4\",
        \"minimalistic-assert\": \"^1.0.1\",
        \"minimalistic-crypto-utils\": \"^1.0.1\"
      }
    },
    \"emoji-regex\": {
      \"version\": \"7.0.3\",
      \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-7.0.3.tgz\",
      \"integrity\": \"sha512-CwBLREIQ7LvYFB0WyRvwhq5N5qPhc6PMjD6bYggFlI5YyDgl+0vxq5VHbMOFqLg7hfWzmu8T5Z1QofhmTIhItA==\",
      \"dev\": true
    },
    \"emojis-list\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/emojis-list/-/emojis-list-3.0.0.tgz\",
      \"integrity\": \"sha512-/kyM18EfinwXZbno9FyUGeFh87KC8HRQBQGildHZbEuRyWFOmv1U10o9BBp8XVZDVNNuQKyIGIu5ZYAAXJ0V2Q==\",
      \"dev\": true
    },
    \"end-of-stream\": {
      \"version\": \"1.4.4\",
      \"resolved\": \"https://registry.npmjs.org/end-of-stream/-/end-of-stream-1.4.4.tgz\",
      \"integrity\": \"sha512-+uw1inIHVPQoaVuHzRyXd21icM+cnt4CzD5rW+NC1wjOUSTOs+Te7FOv7AhN7vS9x/oIyhLP5PR1H+phQAHu5Q==\",
      \"requires\": {
        \"once\": \"^1.4.0\"
      }
    },
    \"enhanced-resolve\": {
      \"version\": \"4.5.0\",
      \"resolved\": \"https://registry.npmjs.org/enhanced-resolve/-/enhanced-resolve-4.5.0.tgz\",
      \"integrity\": \"sha512-Nv9m36S/vxpsI+Hc4/ZGRs0n9mXqSWGGq49zxb/cJfPAQMbUtttJAlNPS4AQzaBdw/pKskw5bMbekT/Y7W/Wlg==\",
      \"dev\": true,
      \"requires\": {
        \"graceful-fs\": \"^4.1.2\",
        \"memory-fs\": \"^0.5.0\",
        \"tapable\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"memory-fs\": {
          \"version\": \"0.5.0\",
          \"resolved\": \"https://registry.npmjs.org/memory-fs/-/memory-fs-0.5.0.tgz\",
          \"integrity\": \"sha512-jA0rdU5KoQMC0e6ppoNRtpp6vjFq6+NY7r8hywnC7V+1Xj/MtHwGIbB1QaK/dunyjWteJzmkpd7ooeWg10T7GA==\",
          \"dev\": true,
          \"requires\": {
            \"errno\": \"^0.1.3\",
            \"readable-stream\": \"^2.0.1\"
          }
        }
      }
    },
    \"enquirer\": {
      \"version\": \"2.3.6\",
      \"resolved\": \"https://registry.npmjs.org/enquirer/-/enquirer-2.3.6.tgz\",
      \"integrity\": \"sha512-yjNnPr315/FjS4zIsUxYguYUPP2e1NK4d7E7ZOLiyYCcbFBiTMyID+2wvm2w6+pZ/odMA7cRkjhsPbltwBOrLg==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-colors\": \"^4.1.1\"
      },
      \"dependencies\": {
        \"ansi-colors\": {
          \"version\": \"4.1.3\",
          \"resolved\": \"https://registry.npmjs.org/ansi-colors/-/ansi-colors-4.1.3.tgz\",
          \"integrity\": \"sha512-/6w/C21Pm1A7aZitlI5Ni/2J6FFQN8i1Cvz3kHABAAbw93v/NlvKdVOqz7CCWz/3iv/JplRSEEZ83XION15ovw==\",
          \"dev\": true
        }
      }
    },
    \"entities\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/entities/-/entities-3.0.1.tgz\",
      \"integrity\": \"sha512-WiyBqoomrwMdFG1e0kqvASYfnlb0lp8M5o5Fw2OFq1hNZxxcNk8Ik0Xm7LxzBhuidnZB/UtBqVCgUz3kBOP51Q==\",
      \"dev\": true
    },
    \"env-paths\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/env-paths/-/env-paths-2.2.1.tgz\",
      \"integrity\": \"sha512-+h1lkLKhZMTYjog1VEpJNG7NZJWcuc2DDk/qsqSTRRCOXiLjeQ1d1/udrUGhqMxUgAlwKNZ0cf2uqan5GLuS2A==\",
      \"dev\": true
    },
    \"envinfo\": {
      \"version\": \"7.10.0\",
      \"resolved\": \"https://registry.npmjs.org/envinfo/-/envinfo-7.10.0.tgz\",
      \"integrity\": \"sha512-ZtUjZO6l5mwTHvc1L9+1q5p/R3wTopcfqMW8r5t8SJSKqeVI/LtajORwRFEKpEFuekjD0VBjwu1HMxL4UalIRw==\",
      \"dev\": true
    },
    \"errno\": {
      \"version\": \"0.1.8\",
      \"resolved\": \"https://registry.npmjs.org/errno/-/errno-0.1.8.tgz\",
      \"integrity\": \"sha512-dJ6oBr5SQ1VSd9qkk7ByRgb/1SH4JZjCHSW/mr63/QcXO9zLVxvJ6Oy13nio03rxpSnVDDjFor75SjVeZWPW/A==\",
      \"dev\": true,
      \"requires\": {
        \"prr\": \"~1.0.1\"
      }
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
      \"version\": \"1.19.1\",
      \"resolved\": \"https://registry.npmjs.org/es-abstract/-/es-abstract-1.19.1.tgz\",
      \"integrity\": \"sha512-2vJ6tjA/UfqLm2MPs7jxVybLoB8i1t1Jd9R3kISld20sIxPcTbLuggQOUxeWeAvIUkduv/CfMjuh4WmiXr2v9w==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"es-to-primitive\": \"^1.2.1\",
        \"function-bind\": \"^1.1.1\",
        \"get-intrinsic\": \"^1.1.1\",
        \"get-symbol-description\": \"^1.0.0\",
        \"has\": \"^1.0.3\",
        \"has-symbols\": \"^1.0.2\",
        \"internal-slot\": \"^1.0.3\",
        \"is-callable\": \"^1.2.4\",
        \"is-negative-zero\": \"^2.0.1\",
        \"is-regex\": \"^1.1.4\",
        \"is-shared-array-buffer\": \"^1.0.1\",
        \"is-string\": \"^1.0.7\",
        \"is-weakref\": \"^1.0.1\",
        \"object-inspect\": \"^1.11.0\",
        \"object-keys\": \"^1.1.1\",
        \"object.assign\": \"^4.1.2\",
        \"string.prototype.trimend\": \"^1.0.4\",
        \"string.prototype.trimstart\": \"^1.0.4\",
        \"unbox-primitive\": \"^1.0.1\"
      }
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
      },
      \"dependencies\": {
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        }
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
      \"integrity\": \"sha1-G2HAViGQqN/2rjuyzwIAyhMLhtQ=\"
    },
    \"escodegen\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/escodegen/-/escodegen-2.0.0.tgz\",
      \"integrity\": \"sha512-mmHKys/C8BFUGI+MAWNcSYoORYLMdPzjrknd2Vc+bUsjN5bXcr8EhrNB+UTqfL1y3I9c4fw2ihgtMPQLBRiQxw==\",
      \"dev\": true,
      \"requires\": {
        \"esprima\": \"^4.0.1\",
        \"estraverse\": \"^5.2.0\",
        \"esutils\": \"^2.0.2\",
        \"optionator\": \"^0.8.1\",
        \"source-map\": \"~0.6.1\"
      }
    },
    \"eslint\": {
      \"version\": \"7.32.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint/-/eslint-7.32.0.tgz\",
      \"integrity\": \"sha512-VHZ8gX+EDfz+97jGcgyGCyRia/dPOd6Xh9yPv8Bl1+SoaIwD+a/vlrOmGRUyOYu7MwUhc7CxqeaDZU13S4+EpA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"7.12.11\",
        \"@eslint/eslintrc\": \"^0.4.3\",
        \"@humanwhocodes/config-array\": \"^0.5.0\",
        \"ajv\": \"^6.10.0\",
        \"chalk\": \"^4.0.0\",
        \"cross-spawn\": \"^7.0.2\",
        \"debug\": \"^4.0.1\",
        \"doctrine\": \"^3.0.0\",
        \"enquirer\": \"^2.3.5\",
        \"escape-string-regexp\": \"^4.0.0\",
        \"eslint-scope\": \"^5.1.1\",
        \"eslint-utils\": \"^2.1.0\",
        \"eslint-visitor-keys\": \"^2.0.0\",
        \"espree\": \"^7.3.1\",
        \"esquery\": \"^1.4.0\",
        \"esutils\": \"^2.0.2\",
        \"fast-deep-equal\": \"^3.1.3\",
        \"file-entry-cache\": \"^6.0.1\",
        \"functional-red-black-tree\": \"^1.0.1\",
        \"glob-parent\": \"^5.1.2\",
        \"globals\": \"^13.6.0\",
        \"ignore\": \"^4.0.6\",
        \"import-fresh\": \"^3.0.0\",
        \"imurmurhash\": \"^0.1.4\",
        \"is-glob\": \"^4.0.0\",
        \"js-yaml\": \"^3.13.1\",
        \"json-stable-stringify-without-jsonify\": \"^1.0.1\",
        \"levn\": \"^0.4.1\",
        \"lodash.merge\": \"^4.6.2\",
        \"minimatch\": \"^3.0.4\",
        \"natural-compare\": \"^1.4.0\",
        \"optionator\": \"^0.9.1\",
        \"progress\": \"^2.0.0\",
        \"regexpp\": \"^3.1.0\",
        \"semver\": \"^7.2.1\",
        \"strip-ansi\": \"^6.0.0\",
        \"strip-json-comments\": \"^3.1.0\",
        \"table\": \"^6.0.9\",
        \"text-table\": \"^0.2.0\",
        \"v8-compile-cache\": \"^2.0.3\"
      },
      \"dependencies\": {
        \"@babel/code-frame\": {
          \"version\": \"7.12.11\",
          \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.12.11.tgz\",
          \"integrity\": \"sha512-Zt1yodBx1UcyiePMSkWnU4hPqhwq7hGi2nFL1LeA3EUl+q2LQx16MISgJ0+z7dnmgvP9QtIleuETGOiOH1RcIw==\",
          \"dev\": true,
          \"requires\": {
            \"@babel/highlight\": \"^7.10.4\"
          }
        },
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
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
        \"escape-string-regexp\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-4.0.0.tgz\",
          \"integrity\": \"sha512-TtpcNJ3XAzx3Gq8sWRzJaVajRs0uVxA2YAkdb1jm2YkPz4G6egUFAyA3n5vtEIZefPk5Wa4UXbKuS5fKkJWdgA==\",
          \"dev\": true
        },
        \"globals\": {
          \"version\": \"13.20.0\",
          \"resolved\": \"https://registry.npmjs.org/globals/-/globals-13.20.0.tgz\",
          \"integrity\": \"sha512-Qg5QtVkCy/kv3FUSlu4ukeZDVf9ee0iXLAUYX13gbR17bnejFTzr4iS9bY7kwCf1NztRNm1t91fjOiyx4CSwPQ==\",
          \"dev\": true,
          \"requires\": {
            \"type-fest\": \"^0.20.2\"
          }
        },
        \"ignore\": {
          \"version\": \"4.0.6\",
          \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-4.0.6.tgz\",
          \"integrity\": \"sha512-cyFDKrqc/YdcWFniJhzI42+AzS+gNwmUzOSFcRCQYwySuBBBy/KjuxWLZ/FHEH6Moq1NizMOBWyTcv8O4OZIMg==\",
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
        \"lru-cache\": {
          \"version\": \"6.0.0\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-6.0.0.tgz\",
          \"integrity\": \"sha512-Jo6dJ04CmSjuznwJSS3pUeWmd/H0ffTlkXXgwZi+eq1UCmqQwCh+eLsYOYCwY991i2Fah4h1BEMCx4qThGbsiA==\",
          \"dev\": true,
          \"requires\": {
            \"yallist\": \"^4.0.0\"
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
        \"prelude-ls\": {
          \"version\": \"1.2.1\",
          \"resolved\": \"https://registry.npmjs.org/prelude-ls/-/prelude-ls-1.2.1.tgz\",
          \"integrity\": \"sha512-vkcDPrRZo1QZLbn5RLGPpg/WmIQ65qoWWhcGKf/b5eplkkarX0m9z8ppCat4mlOqUsWpyNuYgO3VRyrYHSzX5g==\",
          \"dev\": true
        },
        \"semver\": {
          \"version\": \"7.5.4\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.5.4.tgz\",
          \"integrity\": \"sha512-1bCSESV6Pv+i21Hvpxp3Dx+pSD8lIPt8uVjRrxAUt/nbswYc+tK6Y2btiULjd4+fnq15PX+nqQDC7Oft7WkwcA==\",
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
        },
        \"strip-json-comments\": {
          \"version\": \"3.1.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-json-comments/-/strip-json-comments-3.1.1.tgz\",
          \"integrity\": \"sha512-6fPc+R4ihwqP6N/aIv2f1gMH8lOVtWQHoqC4yK6oSDVVocumAsfCqjkXnqiYMhmMwS/mEHLp7Vehlt3ql6lEig==\",
          \"dev\": true
        },
        \"type-check\": {
          \"version\": \"0.4.0\",
          \"resolved\": \"https://registry.npmjs.org/type-check/-/type-check-0.4.0.tgz\",
          \"integrity\": \"sha512-XleUoc9uwGXqjWwXaUTZAmzMcFZ5858QA2vvx1Ur5xIcixXIP+8LnFDgRplU30us6teqdlskFfu+ae4K79Ooew==\",
          \"dev\": true,
          \"requires\": {
            \"prelude-ls\": \"^1.2.1\"
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
          \"version\": \"6.3.1\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.1.tgz\",
          \"integrity\": \"sha512-BR7VvDCVHO+q2xBEWskxS6DJE1qRnb7DxzUrogb71CWoSficBxYsiAGd+Kl0mmq/MprG9yArRkyrQxTO6XjMzA==\",
          \"dev\": true
        }
      }
    },
    \"eslint-config-prestashop\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-config-prestashop/-/eslint-config-prestashop-0.2.1.tgz\",
      \"integrity\": \"sha512-OMk55c88NWKyjFH//uv0w9kEHEfzGFWic0ibDYqsJokJ9pxuWJwIgnxZi0Koh/cue7xCsBNp4IKQUmaI/vkbpw==\",
      \"dev\": true
    },
    \"eslint-import-resolver-node\": {
      \"version\": \"0.3.6\",
      \"resolved\": \"https://registry.npmjs.org/eslint-import-resolver-node/-/eslint-import-resolver-node-0.3.6.tgz\",
      \"integrity\": \"sha512-0En0w03NRVMn9Uiyn8YRPDKvWjxCWkslUEhGNTdGx15RvPJYQ+lbOlqrlNI2vEAs4pDYK4f/HN2TbDmk5TP0iw==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^3.2.7\",
        \"resolve\": \"^1.20.0\"
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
    \"eslint-import-resolver-webpack\": {
      \"version\": \"0.12.2\",
      \"resolved\": \"https://registry.npmjs.org/eslint-import-resolver-webpack/-/eslint-import-resolver-webpack-0.12.2.tgz\",
      \"integrity\": \"sha512-7Jnm4YAoNNkvqPaZkKdIHsKGmv8/uNnYC5QsXkiSodvX4XEEfH2AKOna98FK52fCDXm3q4HzuX+7pRMKkJ64EQ==\",
      \"dev\": true,
      \"requires\": {
        \"array-find\": \"^1.0.0\",
        \"debug\": \"^2.6.9\",
        \"enhanced-resolve\": \"^0.9.1\",
        \"find-root\": \"^1.1.0\",
        \"has\": \"^1.0.3\",
        \"interpret\": \"^1.2.0\",
        \"lodash\": \"^4.17.15\",
        \"node-libs-browser\": \"^1.0.0 || ^2.0.0\",
        \"resolve\": \"^1.13.1\",
        \"semver\": \"^5.7.1\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"2.6.9\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
          \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.0.0\"
          }
        },
        \"enhanced-resolve\": {
          \"version\": \"0.9.1\",
          \"resolved\": \"https://registry.npmjs.org/enhanced-resolve/-/enhanced-resolve-0.9.1.tgz\",
          \"integrity\": \"sha1-TW5omzcl+GCQknzMhs2fFjW4ni4=\",
          \"dev\": true,
          \"requires\": {
            \"graceful-fs\": \"^4.1.2\",
            \"memory-fs\": \"^0.2.0\",
            \"tapable\": \"^0.1.8\"
          }
        },
        \"memory-fs\": {
          \"version\": \"0.2.0\",
          \"resolved\": \"https://registry.npmjs.org/memory-fs/-/memory-fs-0.2.0.tgz\",
          \"integrity\": \"sha1-8rslNovBIeORwlIN6Slpyu4KApA=\",
          \"dev\": true
        },
        \"ms\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
          \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
          \"dev\": true
        },
        \"tapable\": {
          \"version\": \"0.1.10\",
          \"resolved\": \"https://registry.npmjs.org/tapable/-/tapable-0.1.10.tgz\",
          \"integrity\": \"sha1-KcNXB8K3DlDQdIK10gLo7URtr9Q=\",
          \"dev\": true
        }
      }
    },
    \"eslint-module-utils\": {
      \"version\": \"2.7.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-module-utils/-/eslint-module-utils-2.7.1.tgz\",
      \"integrity\": \"sha512-fjoetBXQZq2tSTWZ9yWVl2KuFrTZZH3V+9iD1V1RfpDgxzJR+mPd/KZmMiA8gbPqdBzpNiEHOuT7IYEWxrH0zQ==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^3.2.7\",
        \"find-up\": \"^2.1.0\",
        \"pkg-dir\": \"^2.0.0\"
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
        \"find-up\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-2.1.0.tgz\",
          \"integrity\": \"sha1-RdG35QbHF93UgndaK3eSCjwMV6c=\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^2.0.0\"
          }
        },
        \"locate-path\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-2.0.0.tgz\",
          \"integrity\": \"sha1-K1aLJl7slExtnA3pw9u7ygNUzY4=\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^2.0.0\",
            \"path-exists\": \"^3.0.0\"
          }
        },
        \"p-limit\": {
          \"version\": \"1.3.0\",
          \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-1.3.0.tgz\",
          \"integrity\": \"sha512-vvcXsLAJ9Dr5rQOPk7toZQZJApBl2K4J6dANSsEuh6QI41JYcsS/qhTGa9ErIUUgK3WNQoJYvylxvjqmiqEA9Q==\",
          \"dev\": true,
          \"requires\": {
            \"p-try\": \"^1.0.0\"
          }
        },
        \"p-locate\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-2.0.0.tgz\",
          \"integrity\": \"sha1-IKAQOyIqcMj9OcwuWAaA893l7EM=\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^1.1.0\"
          }
        },
        \"p-try\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-1.0.0.tgz\",
          \"integrity\": \"sha1-y8ec26+P1CKOE/Yh8rGiN8GyB7M=\",
          \"dev\": true
        }
      }
    },
    \"eslint-plugin-html\": {
      \"version\": \"6.2.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-plugin-html/-/eslint-plugin-html-6.2.0.tgz\",
      \"integrity\": \"sha512-vi3NW0E8AJombTvt8beMwkL1R/fdRWl4QSNRNMhVQKWm36/X0KF0unGNAY4mqUF06mnwVWZcIcerrCnfn9025g==\",
      \"dev\": true,
      \"requires\": {
        \"htmlparser2\": \"^7.1.2\"
      }
    },
    \"eslint-plugin-import\": {
      \"version\": \"2.25.2\",
      \"resolved\": \"https://registry.npmjs.org/eslint-plugin-import/-/eslint-plugin-import-2.25.2.tgz\",
      \"integrity\": \"sha512-qCwQr9TYfoBHOFcVGKY9C9unq05uOxxdklmBXLVvcwo68y5Hta6/GzCZEMx2zQiu0woKNEER0LE7ZgaOfBU14g==\",
      \"dev\": true,
      \"requires\": {
        \"array-includes\": \"^3.1.4\",
        \"array.prototype.flat\": \"^1.2.5\",
        \"debug\": \"^2.6.9\",
        \"doctrine\": \"^2.1.0\",
        \"eslint-import-resolver-node\": \"^0.3.6\",
        \"eslint-module-utils\": \"^2.7.0\",
        \"has\": \"^1.0.3\",
        \"is-core-module\": \"^2.7.0\",
        \"is-glob\": \"^4.0.3\",
        \"minimatch\": \"^3.0.4\",
        \"object.values\": \"^1.1.5\",
        \"resolve\": \"^1.20.0\",
        \"tsconfig-paths\": \"^3.11.0\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"2.6.9\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
          \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.0.0\"
          }
        },
        \"ms\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
          \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
          \"dev\": true
        }
      }
    },
    \"eslint-plugin-vue\": {
      \"version\": \"7.20.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-plugin-vue/-/eslint-plugin-vue-7.20.0.tgz\",
      \"integrity\": \"sha512-oVNDqzBC9h3GO+NTgWeLMhhGigy6/bQaQbHS+0z7C4YEu/qK/yxHvca/2PTZtGNPsCrHwOTgKMrwu02A9iPBmw==\",
      \"dev\": true,
      \"requires\": {
        \"eslint-utils\": \"^2.1.0\",
        \"natural-compare\": \"^1.4.0\",
        \"semver\": \"^6.3.0\",
        \"vue-eslint-parser\": \"^7.10.0\"
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
    \"eslint-scope\": {
      \"version\": \"5.1.1\",
      \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-5.1.1.tgz\",
      \"integrity\": \"sha512-2NxwbF/hZ0KpepYN0cNbo+FN6XoK7GaHlQhgx/hIZl6Va0bF45RQOOwhLIy8lQDbuCiadSLCBnH2CFYquit5bw==\",
      \"dev\": true,
      \"requires\": {
        \"esrecurse\": \"^4.3.0\",
        \"estraverse\": \"^4.1.1\"
      },
      \"dependencies\": {
        \"estraverse\": {
          \"version\": \"4.3.0\",
          \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.3.0.tgz\",
          \"integrity\": \"sha512-39nnKffWz8xN1BU/2c79n9nB9HDzo0niYUqx6xyqUnyoAnQyyWpOTdZEeiCch8BBu515t4wp9ZmgVfVhn9EBpw==\",
          \"dev\": true
        }
      }
    },
    \"eslint-utils\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-utils/-/eslint-utils-2.1.0.tgz\",
      \"integrity\": \"sha512-w94dQYoauyvlDc43XnGB8lU3Zt713vNChgt4EWwhXAP2XkBvndfxF0AgIqKOOasjPIPzj9JqgwkwbCYD0/V3Zg==\",
      \"dev\": true,
      \"requires\": {
        \"eslint-visitor-keys\": \"^1.1.0\"
      },
      \"dependencies\": {
        \"eslint-visitor-keys\": {
          \"version\": \"1.3.0\",
          \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-1.3.0.tgz\",
          \"integrity\": \"sha512-6J72N8UNa462wa/KFODt/PJ3IU60SDpC3QXC1Hjc1BXXpfL2C9R5+AU7jhe0F6GREqVMh4Juu+NY7xn+6dipUQ==\",
          \"dev\": true
        }
      }
    },
    \"eslint-visitor-keys\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-2.1.0.tgz\",
      \"integrity\": \"sha512-0rSmRBzXgDzIsD6mGdJgevzgezI534Cer5L/vyMX0kHzT/jiB43jRhd9YUlMGYLQy2zprNmoT8qasCGtY+QaKw==\",
      \"dev\": true
    },
    \"espree\": {
      \"version\": \"7.3.1\",
      \"resolved\": \"https://registry.npmjs.org/espree/-/espree-7.3.1.tgz\",
      \"integrity\": \"sha512-v3JCNCE64umkFpmkFGqzVKsOT0tN1Zr+ueqLZfpV1Ob8e+CEgPWa+OxCoGH3tnhimMKIaBm4m/vaRpJ/krRz2g==\",
      \"dev\": true,
      \"requires\": {
        \"acorn\": \"^7.4.0\",
        \"acorn-jsx\": \"^5.3.1\",
        \"eslint-visitor-keys\": \"^1.3.0\"
      },
      \"dependencies\": {
        \"eslint-visitor-keys\": {
          \"version\": \"1.3.0\",
          \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-1.3.0.tgz\",
          \"integrity\": \"sha512-6J72N8UNa462wa/KFODt/PJ3IU60SDpC3QXC1Hjc1BXXpfL2C9R5+AU7jhe0F6GREqVMh4Juu+NY7xn+6dipUQ==\",
          \"dev\": true
        }
      }
    },
    \"esprima\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/esprima/-/esprima-4.0.1.tgz\",
      \"integrity\": \"sha512-eGuFFw7Upda+g4p+QHvnW0RyTX/SVeJBDM/gCtMARO0cLuT2HcEKnTPvhjV6aGeqrCB/sbNop0Kszm0jsaWU4A==\",
      \"dev\": true
    },
    \"esquery\": {
      \"version\": \"1.5.0\",
      \"resolved\": \"https://registry.npmjs.org/esquery/-/esquery-1.5.0.tgz\",
      \"integrity\": \"sha512-YQLXUplAwJgCydQ78IMJywZCceoqk1oH01OERdSAJc/7U2AylwjhSCLDEtqwg811idIS/9fIU5GjG73IgjKMVg==\",
      \"dev\": true,
      \"requires\": {
        \"estraverse\": \"^5.1.0\"
      }
    },
    \"esrecurse\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/esrecurse/-/esrecurse-4.3.0.tgz\",
      \"integrity\": \"sha512-KmfKL3b6G+RXvP8N1vr3Tq1kL/oCFgn2NYXEtqP8/L3pKapUA4G8cFVaoF3SU323CD4XypR/ffioHmkti6/Tag==\",
      \"dev\": true,
      \"requires\": {
        \"estraverse\": \"^5.2.0\"
      }
    },
    \"estraverse\": {
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-5.2.0.tgz\",
      \"integrity\": \"sha512-BxbNGGNm0RyRYvUdHpIwv9IWzeM9XClbOxwoATuFdOE7ZE6wHL+HQ5T8hoPM+zHvmKzzsEqhgy0GrQ5X13afiQ==\",
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
    \"evp_bytestokey\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/evp_bytestokey/-/evp_bytestokey-1.0.3.tgz\",
      \"integrity\": \"sha512-/f2Go4TognH/KvCISP7OUsHn85hT9nUkxxA9BEWxFn+Oj9o8ZNLm/40hdlgSLyuOimsrTKLUMEorQexp/aPQeA==\",
      \"dev\": true,
      \"requires\": {
        \"md5.js\": \"^1.3.4\",
        \"safe-buffer\": \"^5.1.1\"
      }
    },
    \"expand-brackets\": {
      \"version\": \"2.1.4\",
      \"resolved\": \"https://registry.npmjs.org/expand-brackets/-/expand-brackets-2.1.4.tgz\",
      \"integrity\": \"sha1-t3c14xXOMPa27/D4OwQVGiJEliI=\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^2.3.3\",
        \"define-property\": \"^0.2.5\",
        \"extend-shallow\": \"^2.0.1\",
        \"posix-character-classes\": \"^0.1.0\",
        \"regex-not\": \"^1.0.0\",
        \"snapdragon\": \"^0.8.1\",
        \"to-regex\": \"^3.0.1\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"2.6.9\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
          \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.0.0\"
          }
        },
        \"ms\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
          \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
          \"dev\": true
        }
      }
    },
    \"expect\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/expect/-/expect-26.6.2.tgz\",
      \"integrity\": \"sha512-9/hlOBkQl2l/PLHJx6JjoDF6xPKcJEsUlWKb23rKE7KzeDqUZKXKNMW27KIue5JMdBV9HgmoJPcc8HtO85t9IA==\",
      \"dev\": true,
      \"requires\": {
        \"@jest/types\": \"^26.6.2\",
        \"ansi-styles\": \"^4.0.0\",
        \"jest-get-type\": \"^26.3.0\",
        \"jest-matcher-utils\": \"^26.6.2\",
        \"jest-message-util\": \"^26.6.2\",
        \"jest-regex-util\": \"^26.0.0\"
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
    \"exports-loader\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/exports-loader/-/exports-loader-1.1.1.tgz\",
      \"integrity\": \"sha512-CmyhIR2sJ3KOfVsHjsR0Yvo+0lhRhRMAevCbB8dhTVLHsZPs0lCQTvRmR9YNvBXDBxUuhmCE2f54KqEjZUaFrg==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^3.0.0\",
        \"source-map\": \"^0.6.1\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
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
    \"expose-loader\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/expose-loader/-/expose-loader-1.0.3.tgz\",
      \"integrity\": \"sha512-gP6hs3vYeWIqyoVfsApGQcgCEpbcI1xe+celwI31zeDhXz2q03ycBC1+75IlQUGaYvj6rAloFIe/NIBnEElLsQ==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
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
    \"extend\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/extend/-/extend-3.0.2.tgz\",
      \"integrity\": \"sha512-fjquC59cD7CyW6urNXK0FBufkZcoiGG80wTuPujX590cB5Ttln20E2UB4S/WARVqhXffZl2LNgS+gQdPIIim/g==\",
      \"dev\": true
    },
    \"extend-shallow\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
      \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
      \"dev\": true,
      \"requires\": {
        \"is-extendable\": \"^0.1.0\"
      }
    },
    \"extglob\": {
      \"version\": \"2.0.4\",
      \"resolved\": \"https://registry.npmjs.org/extglob/-/extglob-2.0.4.tgz\",
      \"integrity\": \"sha512-Nmb6QXkELsuBr24CJSkilo6UHHgbekK5UiZgfE6UHD3Eb27YC6oD+bhcT+tJ6cl8dmsgdQxnWlcry8ksBIBLpw==\",
      \"dev\": true,
      \"requires\": {
        \"array-unique\": \"^0.3.2\",
        \"define-property\": \"^1.0.0\",
        \"expand-brackets\": \"^2.1.4\",
        \"extend-shallow\": \"^2.0.1\",
        \"fragment-cache\": \"^0.2.1\",
        \"regex-not\": \"^1.0.0\",
        \"snapdragon\": \"^0.8.1\",
        \"to-regex\": \"^3.0.1\"
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
          \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^1.0.0\"
          }
        }
      }
    },
    \"extsprintf\": {
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/extsprintf/-/extsprintf-1.3.0.tgz\",
      \"integrity\": \"sha512-11Ndz7Nv+mvAC1j0ktTa7fAb0vLyGGX+rMHNBYQviQDGU0Hw7lhctJANqbPhu9nV9/izT/IntTgZ7Im/9LJs9g==\",
      \"dev\": true
    },
    \"fast-deep-equal\": {
      \"version\": \"3.1.3\",
      \"resolved\": \"https://registry.npmjs.org/fast-deep-equal/-/fast-deep-equal-3.1.3.tgz\",
      \"integrity\": \"sha512-f3qQ9oQy9j2AhBe/H9VC91wLmKBCCU/gDOnKNAYG5hswO7BLKj09Hc5HYNz9cGI++xlpDCIgDaitVs03ATR84Q==\",
      \"dev\": true
    },
    \"fast-glob\": {
      \"version\": \"3.2.12\",
      \"resolved\": \"https://registry.npmjs.org/fast-glob/-/fast-glob-3.2.12.tgz\",
      \"integrity\": \"sha512-DVj4CQIYYow0BlaelwK1pHl5n5cRSJfM60UA0zK891sVInoPri2Ekj7+e1CT3/3qxXenpI+nBBmQAcJPJgaj4w==\",
      \"dev\": true,
      \"requires\": {
        \"@nodelib/fs.stat\": \"^2.0.2\",
        \"@nodelib/fs.walk\": \"^1.2.3\",
        \"glob-parent\": \"^5.1.2\",
        \"merge2\": \"^1.3.0\",
        \"micromatch\": \"^4.0.4\"
      },
      \"dependencies\": {
        \"micromatch\": {
          \"version\": \"4.0.5\",
          \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.5.tgz\",
          \"integrity\": \"sha512-DMy+ERcEW2q8Z2Po+WNXuw3c5YaUSFjAO5GsJqfEl7UjvtIuFKO6ZrKvcItdy98dwFI2N1tg3zNIdKaQT+aNdA==\",
          \"dev\": true,
          \"requires\": {
            \"braces\": \"^3.0.2\",
            \"picomatch\": \"^2.3.1\"
          }
        },
        \"picomatch\": {
          \"version\": \"2.3.1\",
          \"resolved\": \"https://registry.npmjs.org/picomatch/-/picomatch-2.3.1.tgz\",
          \"integrity\": \"sha512-JU3teHTNjmE2VCGFzuY8EXzCDVwEqB2a8fsIvwaStHhAWJEeVd1o1QD80CU6+ZdEXXSLbSsuLwJjkCBWqRQUVA==\",
          \"dev\": true
        }
      }
    },
    \"fast-json-stable-stringify\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/fast-json-stable-stringify/-/fast-json-stable-stringify-2.1.0.tgz\",
      \"integrity\": \"sha512-lhd/wF+Lk98HZoTCtlVraHtfh5XYijIjalXck7saUtuanSDyLMxnHhSXEDJqHxD7msR8D0uCmqlkwjCV8xvwHw==\"
    },
    \"fast-levenshtein\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/fast-levenshtein/-/fast-levenshtein-2.0.6.tgz\",
      \"integrity\": \"sha1-PYpcZog6FqMMqGQ+hR8Zuqd5eRc=\",
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
    \"figgy-pudding\": {
      \"version\": \"3.5.2\",
      \"resolved\": \"https://registry.npmjs.org/figgy-pudding/-/figgy-pudding-3.5.2.tgz\",
      \"integrity\": \"sha512-0btnI/H8f2pavGMN8w40mlSKOfTK2SVJmBfBeVIj3kNw0swwgzyRq0d5TJVOwodFmtvpPeWPN/MCcfuWF0Ezbw==\",
      \"dev\": true
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
      \"version\": \"5.1.0\",
      \"resolved\": \"https://registry.npmjs.org/file-loader/-/file-loader-5.1.0.tgz\",
      \"integrity\": \"sha512-u/VkLGskw3Ue59nyOwUwXI/6nuBCo7KBkniB/l7ICwr/7cPNGsL1WCXUp3GB0qgOOKU1TiP49bv4DZF/LJqprg==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^1.4.0\",
        \"schema-utils\": \"^2.5.0\"
      },
      \"dependencies\": {
        \"schema-utils\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-2.7.1.tgz\",
          \"integrity\": \"sha512-SHiNtMOUGWBQJwzISiVYKu82GiV4QYGePp3odlY1tuKO7gPtphAT5R/py0fA6xtbgLL/RvtJZnU9b8s0F1q0Xg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.5\",
            \"ajv\": \"^6.12.4\",
            \"ajv-keywords\": \"^3.5.2\"
          }
        }
      }
    },
    \"file-uri-to-path\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/file-uri-to-path/-/file-uri-to-path-1.0.0.tgz\",
      \"integrity\": \"sha512-0Zt+s3L7Vf1biwWZ29aARiVYLx7iMGnEUl9x33fbB/j3jR81u/O2LbqK+Bm1CDSNDKVtJ/YjwY7TUd5SkeLQLw==\",
      \"dev\": true,
      \"optional\": true
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
    \"find-cache-dir\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-2.1.0.tgz\",
      \"integrity\": \"sha512-Tq6PixE0w/VMFfCgbONnkiQIVol/JJL7nRMi20fqzA4NRs9AfeqMGeRdPi3wIhYkxjeBaWh2rxwapn5Tu3IqOQ==\",
      \"dev\": true,
      \"requires\": {
        \"commondir\": \"^1.0.1\",
        \"make-dir\": \"^2.0.0\",
        \"pkg-dir\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"pkg-dir\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-3.0.0.tgz\",
          \"integrity\": \"sha512-/E57AYkoeQ25qkxMj5PBOVgF8Kiu/h7cYS30Z5+R7WaiCCBfLq58ZI/dSeaEKb9WVJV5n/03QwrN3IeWIFllvw==\",
          \"dev\": true,
          \"requires\": {
            \"find-up\": \"^3.0.0\"
          }
        }
      }
    },
    \"find-root\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/find-root/-/find-root-1.1.0.tgz\",
      \"integrity\": \"sha512-NKfW6bec6GfKc0SGx1e07QZY9PE99u0Bft/0rzSD5k3sO/vwkVUpDUKVm5Gpp5Ue3YfShPFTX2070tDs5kB9Ng==\",
      \"dev\": true
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
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/flat/-/flat-4.1.1.tgz\",
      \"integrity\": \"sha512-FmTtBsHskrU6FJ2VxCnsDb84wu9zhmO3cUX2kGFb5tuwhfXxGciiT0oRY+cck35QmG+NmGh5eLz6lLCpWTqwpA==\",
      \"dev\": true,
      \"requires\": {
        \"is-buffer\": \"~2.0.3\"
      },
      \"dependencies\": {
        \"is-buffer\": {
          \"version\": \"2.0.5\",
          \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-2.0.5.tgz\",
          \"integrity\": \"sha512-i2R6zNFDwgEHJyQUtJEk0XFi1i0dPFn/oqjK3/vPCcDeJvW5NQ83V8QbicfF1SupOaB0h8ntgBC2YiE7dfyctQ==\",
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
      \"version\": \"3.2.7\",
      \"resolved\": \"https://registry.npmjs.org/flatted/-/flatted-3.2.7.tgz\",
      \"integrity\": \"sha512-5nqDSxl8nn5BSNxyR3n4I6eDmbolI6WT+QqR547RwxQapgjQBmtktdP+HTBb/a/zLsbzERTONyUB5pefh5TtjQ==\",
      \"dev\": true
    },
    \"flatten\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/flatten/-/flatten-1.0.3.tgz\",
      \"integrity\": \"sha512-dVsPA/UwQ8+2uoFe5GHtiBMu48dWLTdsuEd7CKGlZlD78r1TTWBvDuFaFGKCo/ZfEr95Uk56vZoX86OsHkUeIg==\",
      \"dev\": true
    },
    \"flush-write-stream\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/flush-write-stream/-/flush-write-stream-1.1.1.tgz\",
      \"integrity\": \"sha512-3Z4XhFZ3992uIq0XOqb9AreonueSYphE6oYbpt5+3u06JWklbsPkNv3ZKkP9Bz/r+1MWCaMoSQ28P85+1Yc77w==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.3\",
        \"readable-stream\": \"^2.3.6\"
      }
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
    \"for-in\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/for-in/-/for-in-1.0.2.tgz\",
      \"integrity\": \"sha1-gQaNKVqBQuwKxybG4iAMMPttXoA=\",
      \"dev\": true
    },
    \"forever-agent\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/forever-agent/-/forever-agent-0.6.1.tgz\",
      \"integrity\": \"sha512-j0KLYPhm6zeac4lz3oJ3o65qvgQCcPubiyotZrXqEaG4hNagNYO8qdlUrX5vwqv9ohqeT/Z3j6+yW067yWWdUw==\",
      \"dev\": true
    },
    \"form-data\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/form-data/-/form-data-3.0.1.tgz\",
      \"integrity\": \"sha512-RHkBKtLWUVwd7SqRIvCZMEvAMoGUp0XU+seQiZejj0COz3RI3hWP4sCv3gZWWLjJTd7rGwcsF5eKZGii0r/hbg==\",
      \"dev\": true,
      \"requires\": {
        \"asynckit\": \"^0.4.0\",
        \"combined-stream\": \"^1.0.8\",
        \"mime-types\": \"^2.1.12\"
      }
    },
    \"fragment-cache\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/fragment-cache/-/fragment-cache-0.2.1.tgz\",
      \"integrity\": \"sha1-QpD60n8T6Jvn8zeZxrxaCr//DRk=\",
      \"dev\": true,
      \"requires\": {
        \"map-cache\": \"^0.2.2\"
      }
    },
    \"from2\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/from2/-/from2-2.3.0.tgz\",
      \"integrity\": \"sha1-i/tVAr3kpNNs/e6gB/zKIdfjgq8=\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.1\",
        \"readable-stream\": \"^2.0.0\"
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
    \"fs-write-stream-atomic\": {
      \"version\": \"1.0.10\",
      \"resolved\": \"https://registry.npmjs.org/fs-write-stream-atomic/-/fs-write-stream-atomic-1.0.10.tgz\",
      \"integrity\": \"sha1-tH31NJPvkR33VzHnCp3tAYnbQMk=\",
      \"dev\": true,
      \"requires\": {
        \"graceful-fs\": \"^4.1.2\",
        \"iferr\": \"^0.1.5\",
        \"imurmurhash\": \"^0.1.4\",
        \"readable-stream\": \"1 || 2\"
      }
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
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/function-bind/-/function-bind-1.1.1.tgz\",
      \"integrity\": \"sha512-yIovAzMX49sF8Yl58fSCWJ5svSLuaibPxXQJFLmBObTuCr0Mf1KiPopGM9NiFjiYBCbfaa2Fh6breQ6ANVTI0A==\",
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
    \"functional-red-black-tree\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/functional-red-black-tree/-/functional-red-black-tree-1.0.1.tgz\",
      \"integrity\": \"sha512-dsKNQNdj6xA3T+QlADDA7mOSlX0qiMINjn0cgr+eGHGsbSHzTabcIogz2+p/iqP1Xs6EP/sS2SbqH+brGTbq0g==\",
      \"dev\": true
    },
    \"functions-have-names\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/functions-have-names/-/functions-have-names-1.2.3.tgz\",
      \"integrity\": \"sha512-xckBUXyTIqT97tq2x2AMb+g163b5JFysYk0x4qxNFwbfQkmNZoiRHb6sPzI9/QV33WeuvVYBUIiD4NzNIyqaRQ==\",
      \"dev\": true
    },
    \"gauge\": {
      \"version\": \"2.7.4\",
      \"resolved\": \"https://registry.npmjs.org/gauge/-/gauge-2.7.4.tgz\",
      \"integrity\": \"sha512-14x4kjc6lkD3ltw589k0NrPD6cCNTD6CWoVUNpB85+DrtONoZn+Rug6xZU5RvSC4+TZPxA5AnBibQYAvZn41Hg==\",
      \"dev\": true,
      \"requires\": {
        \"aproba\": \"^1.0.3\",
        \"console-control-strings\": \"^1.0.0\",
        \"has-unicode\": \"^2.0.0\",
        \"object-assign\": \"^4.1.0\",
        \"signal-exit\": \"^3.0.0\",
        \"string-width\": \"^1.0.1\",
        \"strip-ansi\": \"^3.0.1\",
        \"wide-align\": \"^1.1.0\"
      },
      \"dependencies\": {
        \"is-fullwidth-code-point\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-1.0.0.tgz\",
          \"integrity\": \"sha512-1pqUqRjkhPJ9miNq9SwMfdvi6lBJcd6eFxvfaivQhaH3SgisfiuudvFntdKOmxuee/77l+FPjKrQjWvmPjWrRw==\",
          \"dev\": true,
          \"requires\": {
            \"number-is-nan\": \"^1.0.0\"
          }
        },
        \"string-width\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-1.0.2.tgz\",
          \"integrity\": \"sha512-0XsVpQLnVCXHJfyEs8tC0zpTVIr5PKKsQtkT29IwupnPTjtPmQ3xT/4yCREF9hYkV/3M3kzcUTSAZT6a6h81tw==\",
          \"dev\": true,
          \"requires\": {
            \"code-point-at\": \"^1.0.0\",
            \"is-fullwidth-code-point\": \"^1.0.0\",
            \"strip-ansi\": \"^3.0.0\"
          }
        },
        \"strip-ansi\": {
          \"version\": \"3.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
          \"integrity\": \"sha512-VhumSSbBqDTP8p2ZLKj40UjBCV4+v8bUSEpUb4KjRgWk9pbqGF4REFj6KEagidb2f/M6AzC0EmFyDNGaw9OCzg==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^2.0.0\"
          }
        }
      }
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
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/get-func-name/-/get-func-name-2.0.0.tgz\",
      \"integrity\": \"sha1-6td0q+5y4gQJQzoGY2YCPdaIekE=\",
      \"dev\": true
    },
    \"get-intrinsic\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/get-intrinsic/-/get-intrinsic-1.1.1.tgz\",
      \"integrity\": \"sha512-kWZrnVM42QCiEA2Ig1bG8zjoIMOgxWwYCEeNdwY6Tv/cOSeGpcoX4pXHfKUxNKVoArnrEr2e9srnAxxGIraS9Q==\",
      \"dev\": true,
      \"requires\": {
        \"function-bind\": \"^1.1.1\",
        \"has\": \"^1.0.3\",
        \"has-symbols\": \"^1.0.1\"
      }
    },
    \"get-stdin\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/get-stdin/-/get-stdin-4.0.1.tgz\",
      \"integrity\": \"sha512-F5aQMywwJ2n85s4hJPTT9RPxGmubonuB10MNYo17/xph174n2MIR33HRguhzVag10O/npM7SPk73LMZNP+FaWw==\",
      \"dev\": true
    },
    \"get-stream\": {
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/get-stream/-/get-stream-5.2.0.tgz\",
      \"integrity\": \"sha512-nBF+F1rAZVCu/p7rjzgA+Yb4lfYXrpl7a6VmJrU8wF9I1CKvP/QwPNZHnOlwbTkY6dvtFIzFMSyQXbLoTQPRpA==\",
      \"requires\": {
        \"pump\": \"^3.0.0\"
      }
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
    \"get-value\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/get-value/-/get-value-2.0.6.tgz\",
      \"integrity\": \"sha1-3BXKHGcjh8p2vTesCjlbogQqLCg=\",
      \"dev\": true
    },
    \"getpass\": {
      \"version\": \"0.1.7\",
      \"resolved\": \"https://registry.npmjs.org/getpass/-/getpass-0.1.7.tgz\",
      \"integrity\": \"sha512-0fzj9JxOLfJ+XGLhR8ze3unN0KZCgZwiSSDz168VERjK8Wl8kVSdcu2kspd4s4wtAa1y/qrVRiAA0WclVsu0ng==\",
      \"dev\": true,
      \"requires\": {
        \"assert-plus\": \"^1.0.0\"
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
      \"version\": \"11.1.0\",
      \"resolved\": \"https://registry.npmjs.org/globby/-/globby-11.1.0.tgz\",
      \"integrity\": \"sha512-jhIXaOzy1sb8IyocaruWSn1TjmnBVs8Ayhcy83rmxNJ8q2uWKCAj3CnJY+KpGSXCueAPc0i05kVvVKtP1t9S3g==\",
      \"dev\": true,
      \"requires\": {
        \"array-union\": \"^2.1.0\",
        \"dir-glob\": \"^3.0.1\",
        \"fast-glob\": \"^3.2.9\",
        \"ignore\": \"^5.2.0\",
        \"merge2\": \"^1.4.1\",
        \"slash\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"array-union\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-2.1.0.tgz\",
          \"integrity\": \"sha512-HGyxoOTYUyCM6stUe6EJgnd4EoewAI7zMdfqO+kGjnlZmBDz/cR5pf8r/cR4Wq60sL/p0IkcjUEEPwS3GFrIyw==\",
          \"dev\": true
        },
        \"slash\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/slash/-/slash-3.0.0.tgz\",
          \"integrity\": \"sha512-g9Q1haeby36OSStwb4ntCGGGaKsaVSjQ68fBxoQcutl5fS1vuY18H3wSt3jFyFtrkx+Kz0V1G85A4MyAdDMi2Q==\",
          \"dev\": true
        }
      }
    },
    \"globule\": {
      \"version\": \"1.3.4\",
      \"resolved\": \"https://registry.npmjs.org/globule/-/globule-1.3.4.tgz\",
      \"integrity\": \"sha512-OPTIfhMBh7JbBYDpa5b+Q5ptmMWKwcNcFSR/0c6t8V4f3ZAVBEsKNY37QdVqmLRYSMhOUGYrY0QhSoEpzGr/Eg==\",
      \"dev\": true,
      \"requires\": {
        \"glob\": \"~7.1.1\",
        \"lodash\": \"^4.17.21\",
        \"minimatch\": \"~3.0.2\"
      },
      \"dependencies\": {
        \"glob\": {
          \"version\": \"7.1.7\",
          \"resolved\": \"https://registry.npmjs.org/glob/-/glob-7.1.7.tgz\",
          \"integrity\": \"sha512-OvD9ENzPLbegENnYP5UUfJIirTg4+XwMWGaQfQTY0JenxNvvIKP3U3/tAQSPIu/lHxXYSZmpXlUHeqAIdKzBLQ==\",
          \"dev\": true,
          \"requires\": {
            \"fs.realpath\": \"^1.0.0\",
            \"inflight\": \"^1.0.4\",
            \"inherits\": \"2\",
            \"minimatch\": \"^3.0.4\",
            \"once\": \"^1.3.0\",
            \"path-is-absolute\": \"^1.0.0\"
          }
        }
      }
    },
    \"gopd\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/gopd/-/gopd-1.0.1.tgz\",
      \"integrity\": \"sha512-d65bNlIadxvpb/A2abVdlqKqV563juRnZ1Wtk6s1sIR8uNsXR70xqIzVqxVf1eTqDunwT2MkczEeaezCKTZhwA==\",
      \"dev\": true,
      \"requires\": {
        \"get-intrinsic\": \"^1.1.3\"
      },
      \"dependencies\": {
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        }
      }
    },
    \"got\": {
      \"version\": \"11.8.5\",
      \"resolved\": \"https://registry.npmjs.org/got/-/got-11.8.5.tgz\",
      \"integrity\": \"sha512-o0Je4NvQObAuZPHLFoRSkdG2lTgtcynqymzg2Vupdx6PorhaT5MCbIyXG6d4D94kk8ZG57QeosgdiqfJWhEhlQ==\",
      \"requires\": {
        \"@sindresorhus/is\": \"^4.0.0\",
        \"@szmarczak/http-timer\": \"^4.0.5\",
        \"@types/cacheable-request\": \"^6.0.1\",
        \"@types/responselike\": \"^1.0.0\",
        \"cacheable-lookup\": \"^5.0.3\",
        \"cacheable-request\": \"^7.0.2\",
        \"decompress-response\": \"^6.0.0\",
        \"http2-wrapper\": \"^1.0.0-beta.5.2\",
        \"lowercase-keys\": \"^2.0.0\",
        \"p-cancelable\": \"^2.0.0\",
        \"responselike\": \"^2.0.0\"
      }
    },
    \"graceful-fs\": {
      \"version\": \"4.2.8\",
      \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.8.tgz\",
      \"integrity\": \"sha512-qkIilPUYcNhJpd33n0GBXTB1MMPp14TxEsEs0pTrsSVucApsYzW5V+Q8Qxhik6KU3evy+qkAAowTByymK0avdg==\",
      \"dev\": true
    },
    \"graphql\": {
      \"version\": \"14.7.0\",
      \"resolved\": \"https://registry.npmjs.org/graphql/-/graphql-14.7.0.tgz\",
      \"integrity\": \"sha512-l0xWZpoPKpppFzMfvVyFmp9vLN7w/ZZJPefUicMCepfJeQ8sMcztloGYY9DfjVPo6tIUDzU5Hw3MUbIjj9AVVA==\",
      \"requires\": {
        \"iterall\": \"^1.2.2\"
      }
    },
    \"graphql-tag\": {
      \"version\": \"2.12.5\",
      \"resolved\": \"https://registry.npmjs.org/graphql-tag/-/graphql-tag-2.12.5.tgz\",
      \"integrity\": \"sha512-5xNhP4063d16Pz3HBtKprutsPrmHZi5IdUGOWRxA2B6VF7BIRGOHZ5WQvDmJXZuPcBg7rYwaFxvQYjqkSdR3TQ==\",
      \"requires\": {
        \"tslib\": \"^2.1.0\"
      },
      \"dependencies\": {
        \"tslib\": {
          \"version\": \"2.3.1\",
          \"resolved\": \"https://registry.npmjs.org/tslib/-/tslib-2.3.1.tgz\",
          \"integrity\": \"sha512-77EbyPPpMz+FRFRuAFlWMtmgUWGe9UOG2Z25NqCwiIjRhOf5iKGuzSe5P2w1laq+FkRy4p+PCuVkJSGkzTEKVw==\"
        }
      }
    },
    \"graphql-tools\": {
      \"version\": \"4.0.8\",
      \"resolved\": \"https://registry.npmjs.org/graphql-tools/-/graphql-tools-4.0.8.tgz\",
      \"integrity\": \"sha512-MW+ioleBrwhRjalKjYaLQbr+920pHBgy9vM/n47sswtns8+96sRn5M/G+J1eu7IMeKWiN/9p6tmwCHU7552VJg==\",
      \"requires\": {
        \"apollo-link\": \"^1.2.14\",
        \"apollo-utilities\": \"^1.0.1\",
        \"deprecated-decorator\": \"^0.1.6\",
        \"iterall\": \"^1.1.3\",
        \"uuid\": \"^3.1.0\"
      }
    },
    \"graphql-type-json\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/graphql-type-json/-/graphql-type-json-0.3.2.tgz\",
      \"integrity\": \"sha512-J+vjof74oMlCWXSvt0DOf2APEdZOCdubEvGDUAlqH//VBYcOYsGgRW7Xzorr44LvkjiuvecWc8fChxuZZbChtg==\"
    },
    \"growl\": {
      \"version\": \"1.10.5\",
      \"resolved\": \"https://registry.npmjs.org/growl/-/growl-1.10.5.tgz\",
      \"integrity\": \"sha512-qBr4OuELkhPenW6goKVXiv47US3clb3/IbuWF9KNKEijAy9oeHxU9IgzjvJhHkUzhaj7rOUD7+YGWqUjLp5oSA==\",
      \"dev\": true
    },
    \"har-schema\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/har-schema/-/har-schema-2.0.0.tgz\",
      \"integrity\": \"sha512-Oqluz6zhGX8cyRaTQlFMPw80bSJVG2x/cFb8ZPhUILGgHka9SsokCCOQgpveePerqidZOrT14ipqfJb7ILcW5Q==\",
      \"dev\": true
    },
    \"har-validator\": {
      \"version\": \"5.1.5\",
      \"resolved\": \"https://registry.npmjs.org/har-validator/-/har-validator-5.1.5.tgz\",
      \"integrity\": \"sha512-nmT2T0lljbxdQZfspsno9hgrG3Uir6Ks5afism62poxqBM6sDnMEuPmzTq8XN0OEwqKLLdh1jQI3qyE66Nzb3w==\",
      \"dev\": true,
      \"requires\": {
        \"ajv\": \"^6.12.3\",
        \"har-schema\": \"^2.0.0\"
      }
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
    \"has-ansi\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-ansi/-/has-ansi-2.0.0.tgz\",
      \"integrity\": \"sha1-NPUEnOHs3ysGSa8+8k5F7TVBbZE=\",
      \"dev\": true,
      \"requires\": {
        \"ansi-regex\": \"^2.0.0\"
      }
    },
    \"has-bigints\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/has-bigints/-/has-bigints-1.0.1.tgz\",
      \"integrity\": \"sha512-LSBS2LjbNBTf6287JEbEzvJgftkF5qFkmCo9hDRpAzKhUOlJ+hx8dd4USs00SgsUNwc4617J9ki5YtEClM2ffA==\",
      \"dev\": true
    },
    \"has-flag\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-3.0.0.tgz\",
      \"integrity\": \"sha1-tdRU3CGZriJWmfNGfloH87lVuv0=\"
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
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.2.tgz\",
      \"integrity\": \"sha512-chXa79rL/UC2KlX17jo3vRGz0azaWEx5tGqZg5pO3NUyEJVB17dMruQlzCCOfUvElghKcm5194+BCRvi2Rv/Gw==\",
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
    \"has-value\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-1.0.0.tgz\",
      \"integrity\": \"sha1-GLKB2lhbHFxR3vJMkw7SmgvmsXc=\",
      \"dev\": true,
      \"requires\": {
        \"get-value\": \"^2.0.6\",
        \"has-values\": \"^1.0.0\",
        \"isobject\": \"^3.0.0\"
      }
    },
    \"has-values\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-1.0.0.tgz\",
      \"integrity\": \"sha1-lbC2P+whRmGab+V/51Yo1aOe/k8=\",
      \"dev\": true,
      \"requires\": {
        \"is-number\": \"^3.0.0\",
        \"kind-of\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"kind-of\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-4.0.0.tgz\",
          \"integrity\": \"sha1-IIE989cSkosgc3hpGkUGb65y3Vc=\",
          \"dev\": true,
          \"requires\": {
            \"is-buffer\": \"^1.1.5\"
          }
        }
      }
    },
    \"hash-base\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/hash-base/-/hash-base-3.1.0.tgz\",
      \"integrity\": \"sha512-1nmYp/rhMDiE7AYkDw+lLwlAzz0AntGIe51F3RfFfEqyQ3feY2eI/NcwC6umIQVOASPMsWJLJScWKSSvzL9IVA==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.4\",
        \"readable-stream\": \"^3.6.0\",
        \"safe-buffer\": \"^5.2.0\"
      },
      \"dependencies\": {
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
        }
      }
    },
    \"hash-sum\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/hash-sum/-/hash-sum-1.0.2.tgz\",
      \"integrity\": \"sha1-M7QHd3VMZDJXPBIMw4CLvRDUfwQ=\",
      \"dev\": true
    },
    \"hash.js\": {
      \"version\": \"1.1.7\",
      \"resolved\": \"https://registry.npmjs.org/hash.js/-/hash.js-1.1.7.tgz\",
      \"integrity\": \"sha512-taOaskGt4z4SOANNseOviYDvjEJinIkRgmp7LbKP2YTTmVxWBl87s/uzK9r+44BclBSp2X7K1hqeNfz9JbBeXA==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.3\",
        \"minimalistic-assert\": \"^1.0.1\"
      }
    },
    \"he\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/he/-/he-1.2.0.tgz\",
      \"integrity\": \"sha512-F/1DnUGPopORZi0ni+CvrCgHQ5FyEAHRLSApuYWMmrbSwoN2Mn/7k+Gl38gJnR7yyDZk6WLXwiGod1JOWNDKGw==\"
    },
    \"hmac-drbg\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/hmac-drbg/-/hmac-drbg-1.0.1.tgz\",
      \"integrity\": \"sha1-0nRXAQJabHdabFRXk+1QL8DGSaE=\",
      \"dev\": true,
      \"requires\": {
        \"hash.js\": \"^1.0.3\",
        \"minimalistic-assert\": \"^1.0.0\",
        \"minimalistic-crypto-utils\": \"^1.0.1\"
      }
    },
    \"home-or-tmp\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/home-or-tmp/-/home-or-tmp-2.0.0.tgz\",
      \"integrity\": \"sha1-42w/LSyufXRqhX440Y1fMqeILbg=\",
      \"dev\": true,
      \"requires\": {
        \"os-homedir\": \"^1.0.0\",
        \"os-tmpdir\": \"^1.0.1\"
      }
    },
    \"hosted-git-info\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/hosted-git-info/-/hosted-git-info-4.1.0.tgz\",
      \"integrity\": \"sha512-kyCuEOWjJqZuDbRHzL8V93NzQhwIB71oFWSyzVo+KPZI+pnQPPxucdkrOZvkLRnrf5URsQM+IJ09Dw29cRALIA==\",
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
    \"html-encoding-sniffer\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/html-encoding-sniffer/-/html-encoding-sniffer-2.0.1.tgz\",
      \"integrity\": \"sha512-D5JbOMBIR/TVZkubHT+OyT2705QvogUW4IBn6nHd756OwieSF9aDYFj4dv6HHEVGYbHaLETa3WggZYWWMyy3ZQ==\",
      \"dev\": true,
      \"requires\": {
        \"whatwg-encoding\": \"^1.0.5\"
      }
    },
    \"htmlparser2\": {
      \"version\": \"7.1.2\",
      \"resolved\": \"https://registry.npmjs.org/htmlparser2/-/htmlparser2-7.1.2.tgz\",
      \"integrity\": \"sha512-d6cqsbJba2nRdg8WW2okyD4ceonFHn9jLFxhwlNcLhQWcFPdxXeJulgOLjLKtAK9T6ahd+GQNZwG9fjmGW7lyg==\",
      \"dev\": true,
      \"requires\": {
        \"domelementtype\": \"^2.0.1\",
        \"domhandler\": \"^4.2.2\",
        \"domutils\": \"^2.8.0\",
        \"entities\": \"^3.0.1\"
      }
    },
    \"http-cache-semantics\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/http-cache-semantics/-/http-cache-semantics-4.1.1.tgz\",
      \"integrity\": \"sha512-er295DKPVsV82j5kw1Gjt+ADA/XYHsajl82cGNQG2eyoPkvgUhX+nDIyelzhIWbbsXP39EHcI6l5tYs2FYqYXQ==\"
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
    \"http-signature\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/http-signature/-/http-signature-1.2.0.tgz\",
      \"integrity\": \"sha512-CAbnr6Rz4CYQkLYUtSNXxQPUH2gK8f3iWexVlsnMeD+GjlsQ0Xsy1cOX+mN3dtxYomRy21CiOzU8Uhw6OwncEQ==\",
      \"dev\": true,
      \"requires\": {
        \"assert-plus\": \"^1.0.0\",
        \"jsprim\": \"^1.2.2\",
        \"sshpk\": \"^1.7.0\"
      }
    },
    \"http2-wrapper\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/http2-wrapper/-/http2-wrapper-1.0.3.tgz\",
      \"integrity\": \"sha512-V+23sDMr12Wnz7iTcDeJr3O6AIxlnvT/bmaAAAP/Xda35C90p9599p0F1eHR/N1KILWSoWVAiOMFjBBXaXSMxg==\",
      \"requires\": {
        \"quick-lru\": \"^5.1.1\",
        \"resolve-alpn\": \"^1.0.0\"
      }
    },
    \"https-browserify\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/https-browserify/-/https-browserify-1.0.0.tgz\",
      \"integrity\": \"sha1-7AbBDgo0wPL68Zn3/X/Hj//QPHM=\",
      \"dev\": true
    },
    \"https-proxy-agent\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/https-proxy-agent/-/https-proxy-agent-5.0.0.tgz\",
      \"integrity\": \"sha512-EkYm5BcKUGiduxzSt3Eppko+PiNWNEpa4ySk9vTC6wDsQJW9rHSa+UhGNJoRYp7bz6Ht1eaRIa6QaJqO5rCFbA==\",
      \"dev\": true,
      \"requires\": {
        \"agent-base\": \"6\",
        \"debug\": \"4\"
      }
    },
    \"iconv-lite\": {
      \"version\": \"0.4.24\",
      \"resolved\": \"https://registry.npmjs.org/iconv-lite/-/iconv-lite-0.4.24.tgz\",
      \"integrity\": \"sha512-v3MXnZAcvnywkTUEZomIActle7RXXeedOR31wwl7VlyoXO4Qi9arvSenNQWne1TcRwhCL1HwLI21bEqdpj8/rA==\",
      \"dev\": true,
      \"requires\": {
        \"safer-buffer\": \">= 2.1.2 < 3\"
      }
    },
    \"icss-utils\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/icss-utils/-/icss-utils-4.1.1.tgz\",
      \"integrity\": \"sha512-4aFq7wvWyMHKgxsH8QQtGpvbASCf+eM3wPRLI6R+MgAnTCZ6STYsRvttLvRWK0Nfif5piF394St3HeJDaljGPA==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.14\"
      }
    },
    \"ieee754\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/ieee754/-/ieee754-1.2.1.tgz\",
      \"integrity\": \"sha512-dcyqhDvX1C46lXZcVqCpK+FtMRQVdIMN6/Df5js2zouUsqG7I6sFxitIC+7KYK29KdXOLHdu9zL4sFnoVQnqaA==\",
      \"dev\": true
    },
    \"iferr\": {
      \"version\": \"0.1.5\",
      \"resolved\": \"https://registry.npmjs.org/iferr/-/iferr-0.1.5.tgz\",
      \"integrity\": \"sha1-xg7taebY/bazEEofy8ocGS3FtQE=\",
      \"dev\": true
    },
    \"ignore\": {
      \"version\": \"5.2.4\",
      \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-5.2.4.tgz\",
      \"integrity\": \"sha512-MAb38BcSbH0eHNBxn7ql2NH/kX33OkB3lZ1BNdh7ENeRChHTYsTvWrMubiIAMNS2llXEEgZ1MUOBtXChP3kaFQ==\",
      \"dev\": true
    },
    \"import-cwd\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/import-cwd/-/import-cwd-2.1.0.tgz\",
      \"integrity\": \"sha1-qmzzbnInYShcs3HsZRn1PiQ1sKk=\",
      \"dev\": true,
      \"requires\": {
        \"import-from\": \"^2.1.0\"
      }
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
    \"import-from\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/import-from/-/import-from-2.1.0.tgz\",
      \"integrity\": \"sha1-M1238qev/VOqpHHUuAId7ja387E=\",
      \"dev\": true,
      \"requires\": {
        \"resolve-from\": \"^3.0.0\"
      }
    },
    \"import-local\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/import-local/-/import-local-3.1.0.tgz\",
      \"integrity\": \"sha512-ASB07uLtnDs1o6EHjKpX34BKYDSqnFerfTOJL2HvMqF70LnxpjkzDB8J44oT9pu4AMPkQwf8jl6szgvNd2tRIg==\",
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
    \"imports-loader\": {
      \"version\": \"0.8.0\",
      \"resolved\": \"https://registry.npmjs.org/imports-loader/-/imports-loader-0.8.0.tgz\",
      \"integrity\": \"sha512-kXWL7Scp8KQ4552ZcdVTeaQCZSLW+e6nJfp3cwUMB673T7Hr98Xjx5JK+ql7ADlJUvj1JS5O01RLbKoutN5QDQ==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^1.0.2\",
        \"source-map\": \"^0.6.1\"
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
    \"indexes-of\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/indexes-of/-/indexes-of-1.0.1.tgz\",
      \"integrity\": \"sha1-8w9xbI4r00bHtn0985FVZqfAVgc=\",
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
    \"ini\": {
      \"version\": \"1.3.8\",
      \"resolved\": \"https://registry.npmjs.org/ini/-/ini-1.3.8.tgz\",
      \"integrity\": \"sha512-JV/yugV2uzW5iMRSiZAyDtQd+nxtUnjeLt0acNdw98kKLrvuRVyB80tsREOE7yvGVgalhZ6RNXCmEHkUKBKxew==\",
      \"dev\": true
    },
    \"internal-slot\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/internal-slot/-/internal-slot-1.0.3.tgz\",
      \"integrity\": \"sha512-O0DB1JC/sPyZl7cIo78n5dR7eUSwwpYPiXRhTzNxZVAMUuB8vlnRFyLxdrVToks6XPLVnFfbzaVd5WLjhgg+vA==\",
      \"dev\": true,
      \"requires\": {
        \"get-intrinsic\": \"^1.1.0\",
        \"has\": \"^1.0.3\",
        \"side-channel\": \"^1.0.4\"
      }
    },
    \"interpret\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-1.4.0.tgz\",
      \"integrity\": \"sha512-agE4QfB2Lkp9uICn7BAqoscw4SZP9kTE2hxiFI3jBPmXJfdqiahTbUuKGsMoN2GtqL9AxhYioAcVvgsb1HvRbA==\",
      \"dev\": true
    },
    \"invariant\": {
      \"version\": \"2.2.4\",
      \"resolved\": \"https://registry.npmjs.org/invariant/-/invariant-2.2.4.tgz\",
      \"integrity\": \"sha512-phJfQVBuaJM5raOpJjSfkiD6BpbCE4Ns//LaXl6wGYtUBY83nWS6Rf9tXm2e8VaK60JEjYldbPif/A2B1C2gNA==\",
      \"dev\": true,
      \"requires\": {
        \"loose-envify\": \"^1.0.0\"
      }
    },
    \"is-accessor-descriptor\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-1.0.0.tgz\",
      \"integrity\": \"sha512-m5hnHTkcVsPfqx3AKlyttIPb7J+XykHvJP2B9bZDjlhLIoEq4XoK64Vg7boZlVWYK6LUY94dYPEE7Lh0ZkZKcQ==\",
      \"dev\": true,
      \"requires\": {
        \"kind-of\": \"^6.0.0\"
      }
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
      },
      \"dependencies\": {
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        }
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
    \"is-binary-path\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-2.1.0.tgz\",
      \"integrity\": \"sha512-ZMERYes6pDydyuGidse7OsHxtbI7WVeUEozgR/g7rd0xUimYNlvZRE/K2MgZTjWy725IfelLeVcEM97mmtRGXw==\",
      \"dev\": true,
      \"requires\": {
        \"binary-extensions\": \"^2.0.0\"
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
    \"is-buffer\": {
      \"version\": \"1.1.6\",
      \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-1.1.6.tgz\",
      \"integrity\": \"sha512-NcdALwpXkTm5Zvvbk7owOUSvVvBKDgKP5/ewfXEznmQFfs4ZRmanOeKBTjRVjka3QFoN6XJ+9F3USqfHqTaU5w==\",
      \"dev\": true
    },
    \"is-callable\": {
      \"version\": \"1.2.4\",
      \"resolved\": \"https://registry.npmjs.org/is-callable/-/is-callable-1.2.4.tgz\",
      \"integrity\": \"sha512-nsuwtxZfMX67Oryl9LCQ+upnC0Z0BgpwntpS89m1H/TLF0zNfzfLMV/9Wa/6MZsj0acpEjAO0KF1xT6ZdLl95w==\",
      \"dev\": true
    },
    \"is-core-module\": {
      \"version\": \"2.8.0\",
      \"resolved\": \"https://registry.npmjs.org/is-core-module/-/is-core-module-2.8.0.tgz\",
      \"integrity\": \"sha512-vd15qHsaqrRL7dtH6QNuy0ndJmRDrS9HAM1CAiSifNUFv4x1a0CCVsj18hJ1mShxIG6T2i1sO78MkP56r0nYRw==\",
      \"dev\": true,
      \"requires\": {
        \"has\": \"^1.0.3\"
      }
    },
    \"is-data-descriptor\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-1.0.0.tgz\",
      \"integrity\": \"sha512-jbRXy1FmtAoCjQkVmIVYwuuqDFUbaOeDjmed1tOGPrsMhtJA4rD9tkgA0F1qJ3gRFRXcHYVkdeaP50Q5rE/jLQ==\",
      \"dev\": true,
      \"requires\": {
        \"kind-of\": \"^6.0.0\"
      }
    },
    \"is-date-object\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/is-date-object/-/is-date-object-1.0.5.tgz\",
      \"integrity\": \"sha512-9YQaSxsAiSwcvS33MBk3wTCVnWK+HhF8VZR2jRxehM16QcVOdHqPn4VPHmRK4lSr38n9JriurInLcP90xsYNfQ==\",
      \"dev\": true,
      \"requires\": {
        \"has-tostringtag\": \"^1.0.0\"
      }
    },
    \"is-descriptor\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-descriptor/-/is-descriptor-1.0.2.tgz\",
      \"integrity\": \"sha512-2eis5WqQGV7peooDyLmNEPUrps9+SXX5c9pL3xEB+4e9HnGuDa7mB7kHxHw4CbqS9k1T2hOH3miL8n8WtiYVtg==\",
      \"dev\": true,
      \"requires\": {
        \"is-accessor-descriptor\": \"^1.0.0\",
        \"is-data-descriptor\": \"^1.0.0\",
        \"kind-of\": \"^6.0.2\"
      }
    },
    \"is-directory\": {
      \"version\": \"0.3.1\",
      \"resolved\": \"https://registry.npmjs.org/is-directory/-/is-directory-0.3.1.tgz\",
      \"integrity\": \"sha1-YTObbyR1/Hcv2cnYP1yFddwVSuE=\",
      \"dev\": true
    },
    \"is-extendable\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
      \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
      \"dev\": true
    },
    \"is-extglob\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
      \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
      \"dev\": true
    },
    \"is-finite\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-finite/-/is-finite-1.1.0.tgz\",
      \"integrity\": \"sha512-cdyMtqX/BOqqNBBiKlIVkytNHm49MtMlYyn1zxzvJKWmFMlGzm+ry5BBfYyeY9YmNKbRSo/o7OX9w9ale0wg3w==\",
      \"dev\": true
    },
    \"is-fullwidth-code-point\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-2.0.0.tgz\",
      \"integrity\": \"sha1-o7MKXE8ZkYMWeqq5O+764937ZU8=\",
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
    \"is-negative-zero\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-negative-zero/-/is-negative-zero-2.0.1.tgz\",
      \"integrity\": \"sha512-2z6JzQvZRa9A2Y7xC6dQQm4FSTSTNWjKIYYTt4246eMTJmIo0Q+ZyOsU66X8lxK1AbB92dFeglPLrhwpeRKO6w==\",
      \"dev\": true
    },
    \"is-number\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-3.0.0.tgz\",
      \"integrity\": \"sha1-JP1iAaR4LPUFYcgQJ2r8fRLXEZU=\",
      \"dev\": true,
      \"requires\": {
        \"kind-of\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"kind-of\": {
          \"version\": \"3.2.2\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
          \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
          \"dev\": true,
          \"requires\": {
            \"is-buffer\": \"^1.1.5\"
          }
        }
      }
    },
    \"is-number-object\": {
      \"version\": \"1.0.6\",
      \"resolved\": \"https://registry.npmjs.org/is-number-object/-/is-number-object-1.0.6.tgz\",
      \"integrity\": \"sha512-bEVOqiRcvo3zO1+G2lVMy+gkkEm9Yh7cDMRusKKu5ZJKPUYSJwICTKZrNKHA2EbSP0Tu0+6B/emsYNHZyn6K8g==\",
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
      \"integrity\": \"sha512-yvkRyxmFKEOQ4pNXCmJG5AEQNlXJS5LaONXo5/cLdTZdWvsZ1ioJEonLGAosKlMWE8lwUy/bJzMjcw8az73+Fg==\",
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
    \"is-potential-custom-element-name\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-potential-custom-element-name/-/is-potential-custom-element-name-1.0.1.tgz\",
      \"integrity\": \"sha512-bCYeRA2rVibKZd+s2625gGnGF/t7DSqDs4dP7CrLA1m7jKWz6pps0LpYLJN8Q64HtmPKJ1hrN3nzPNKFEKOUiQ==\",
      \"dev\": true
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
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-shared-array-buffer/-/is-shared-array-buffer-1.0.1.tgz\",
      \"integrity\": \"sha512-IU0NmyknYZN0rChcKhRO1X8LYz5Isj/Fsqh8NJOSf+N/hCOTwy29F32Ik7a+QszE63IdvmwdTPDd6cZ5pg4cwA==\",
      \"dev\": true
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
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/is-symbol/-/is-symbol-1.0.4.tgz\",
      \"integrity\": \"sha512-C/CPBqKWnvdcxqIARxyOh4v1UUEOCHpgDa0WYgpKDFMszcrPcffg5uhwSgPCLD2WWxmq6isisz87tzT01tuGhg==\",
      \"dev\": true,
      \"requires\": {
        \"has-symbols\": \"^1.0.2\"
      }
    },
    \"is-typed-array\": {
      \"version\": \"1.1.12\",
      \"resolved\": \"https://registry.npmjs.org/is-typed-array/-/is-typed-array-1.1.12.tgz\",
      \"integrity\": \"sha512-Z14TF2JNG8Lss5/HMqt0//T9JeHXttXy5pH/DBU4vi98ozO2btxzq9MwYDZYnKwU8nRsz/+GVFVRDq3DkVuSPg==\",
      \"dev\": true,
      \"requires\": {
        \"which-typed-array\": \"^1.1.11\"
      }
    },
    \"is-typedarray\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-typedarray/-/is-typedarray-1.0.0.tgz\",
      \"integrity\": \"sha512-cyA56iCMHAh5CdzjJIa4aohJyeO1YbwLi3Jc35MmRU6poroFjIGZzUzupGiRPOjgHg9TLu43xbpwXk523fMxKA==\",
      \"dev\": true
    },
    \"is-weakref\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-weakref/-/is-weakref-1.0.1.tgz\",
      \"integrity\": \"sha512-b2jKc2pQZjaeFYWEf7ScFj+Be1I+PXmlu572Q8coTXZ+LD/QQZ7ShPMst8h16riVgyXTQwUsFEl74mDvc/3MHQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.0\"
      }
    },
    \"is-whitespace\": {
      \"version\": \"0.3.0\",
      \"resolved\": \"https://registry.npmjs.org/is-whitespace/-/is-whitespace-0.3.0.tgz\",
      \"integrity\": \"sha1-Fjnssb4DauxppUy7QBz77XEUq38=\",
      \"dev\": true
    },
    \"is-windows\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/is-windows/-/is-windows-1.0.2.tgz\",
      \"integrity\": \"sha512-eXK1UInq2bPmjyX6e3VHIzMLobc4J94i4AWn+Hpq3OU5KkrRC96OAcR3PRJ/pGu6m8TRnBHP9dkXQVsT/COVIA==\",
      \"dev\": true
    },
    \"is-wsl\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-wsl/-/is-wsl-1.1.0.tgz\",
      \"integrity\": \"sha1-HxbkqiKwTRM2tmGIpmrzxgDDpm0=\",
      \"dev\": true
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
    \"isstream\": {
      \"version\": \"0.1.2\",
      \"resolved\": \"https://registry.npmjs.org/isstream/-/isstream-0.1.2.tgz\",
      \"integrity\": \"sha512-Yljz7ffyPbrLpLngrMtZ7NduUgVvi6wG9RJ9IUcyCd59YQ911PBJphODUcbOVbqYfxe1wuYf/LJ8PauMRwsM/g==\",
      \"dev\": true
    },
    \"iterall\": {
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/iterall/-/iterall-1.3.0.tgz\",
      \"integrity\": \"sha512-QZ9qOMdF+QLHxy1QIpUHUU1D5pS2CG2P69LF6L6CPjPYA/XMOmKV3PZpawHoAjHNyB0swdVTRxdYT4tbBbxqwg==\"
    },
    \"jest-diff\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/jest-diff/-/jest-diff-26.6.2.tgz\",
      \"integrity\": \"sha512-6m+9Z3Gv9wN0WFVasqjCL/06+EFCMTqDEUl/b87HYK2rAPTyfz4ZIuSlPhY51PIQRWx5TaxeF1qmXKe9gfN3sA==\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^4.0.0\",
        \"diff-sequences\": \"^26.6.2\",
        \"jest-get-type\": \"^26.3.0\",
        \"pretty-format\": \"^26.6.2\"
      }
    },
    \"jest-get-type\": {
      \"version\": \"26.3.0\",
      \"resolved\": \"https://registry.npmjs.org/jest-get-type/-/jest-get-type-26.3.0.tgz\",
      \"integrity\": \"sha512-TpfaviN1R2pQWkIihlfEanwOXK0zcxrKEE4MlU6Tn7keoXdN6/3gK/xl0yEh8DOunn5pOVGKf8hB4R9gVh04ig==\",
      \"dev\": true
    },
    \"jest-matcher-utils\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/jest-matcher-utils/-/jest-matcher-utils-26.6.2.tgz\",
      \"integrity\": \"sha512-llnc8vQgYcNqDrqRDXWwMr9i7rS5XFiCwvh6DTP7Jqa2mqpcCBBlpCbn+trkG0KNhPu/h8rzyBkriOtBstvWhw==\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^4.0.0\",
        \"jest-diff\": \"^26.6.2\",
        \"jest-get-type\": \"^26.3.0\",
        \"pretty-format\": \"^26.6.2\"
      }
    },
    \"jest-message-util\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/jest-message-util/-/jest-message-util-26.6.2.tgz\",
      \"integrity\": \"sha512-rGiLePzQ3AzwUshu2+Rn+UMFk0pHN58sOG+IaJbk5Jxuqo3NYO1U2/MIR4S1sKgsoYSXSzdtSa0TgrmtUwEbmA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.0.0\",
        \"@jest/types\": \"^26.6.2\",
        \"@types/stack-utils\": \"^2.0.0\",
        \"chalk\": \"^4.0.0\",
        \"graceful-fs\": \"^4.2.4\",
        \"micromatch\": \"^4.0.2\",
        \"pretty-format\": \"^26.6.2\",
        \"slash\": \"^3.0.0\",
        \"stack-utils\": \"^2.0.2\"
      },
      \"dependencies\": {
        \"micromatch\": {
          \"version\": \"4.0.4\",
          \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.4.tgz\",
          \"integrity\": \"sha512-pRmzw/XUcwXGpD9aI9q/0XOwLNygjETJ8y0ao0wdqprrzDa4YnxLcz7fQRZr8voh8V10kGhABbNcHVk5wHgWwg==\",
          \"dev\": true,
          \"requires\": {
            \"braces\": \"^3.0.1\",
            \"picomatch\": \"^2.2.3\"
          }
        },
        \"slash\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/slash/-/slash-3.0.0.tgz\",
          \"integrity\": \"sha512-g9Q1haeby36OSStwb4ntCGGGaKsaVSjQ68fBxoQcutl5fS1vuY18H3wSt3jFyFtrkx+Kz0V1G85A4MyAdDMi2Q==\",
          \"dev\": true
        }
      }
    },
    \"jest-regex-util\": {
      \"version\": \"26.0.0\",
      \"resolved\": \"https://registry.npmjs.org/jest-regex-util/-/jest-regex-util-26.0.0.tgz\",
      \"integrity\": \"sha512-Gv3ZIs/nA48/Zvjrl34bf+oD76JHiGDUxNOVgUjh3j890sblXryjY4rss71fPtD/njchl6PSE2hIhvyWa1eT0A==\",
      \"dev\": true
    },
    \"jest-worker\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/jest-worker/-/jest-worker-26.6.2.tgz\",
      \"integrity\": \"sha512-KWYVV1c4i+jbMpaBC+U++4Va0cp8OisU185o73T1vo99hqi7w8tSJfUXYswwqqrjzwxa6KpRK54WhPvwf5w6PQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/node\": \"*\",
        \"merge-stream\": \"^2.0.0\",
        \"supports-color\": \"^7.0.0\"
      }
    },
    \"js-base64\": {
      \"version\": \"2.6.4\",
      \"resolved\": \"https://registry.npmjs.org/js-base64/-/js-base64-2.6.4.tgz\",
      \"integrity\": \"sha512-pZe//GGmwJndub7ZghVHz7vjb2LgC1m8B07Au3eYqeqv9emhESByMXxaEgkUkEqJe87oBbSniGYoQNIBklc7IQ==\",
      \"dev\": true
    },
    \"js-beautify\": {
      \"version\": \"1.14.0\",
      \"resolved\": \"https://registry.npmjs.org/js-beautify/-/js-beautify-1.14.0.tgz\",
      \"integrity\": \"sha512-yuck9KirNSCAwyNJbqW+BxJqJ0NLJ4PwBUzQQACl5O3qHMBXVkXb/rD0ilh/Lat/tn88zSZ+CAHOlk0DsY7GuQ==\",
      \"dev\": true,
      \"requires\": {
        \"config-chain\": \"^1.1.12\",
        \"editorconfig\": \"^0.15.3\",
        \"glob\": \"^7.1.3\",
        \"nopt\": \"^5.0.0\"
      }
    },
    \"js-tokens\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/js-tokens/-/js-tokens-4.0.0.tgz\",
      \"integrity\": \"sha512-RdJUflcE3cUzKiMqQgsCu06FPu9UdIJO0beYbPhHN4k6apgJtifcoCtT9bcxOpYBtpD2kCM6Sbzg4CausW/PKQ==\",
      \"dev\": true
    },
    \"js-yaml\": {
      \"version\": \"3.14.1\",
      \"resolved\": \"https://registry.npmjs.org/js-yaml/-/js-yaml-3.14.1.tgz\",
      \"integrity\": \"sha512-okMH7OXXJ7YrN9Ok3/SXrnu4iX9yOk+25nqX4imS2npuvTYDmo/QEZoqwZkYaIDk3jVvBOTOIEgEhaLOynBS9g==\",
      \"dev\": true,
      \"requires\": {
        \"argparse\": \"^1.0.7\",
        \"esprima\": \"^4.0.0\"
      }
    },
    \"jsbn\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/jsbn/-/jsbn-0.1.1.tgz\",
      \"integrity\": \"sha512-UVU9dibq2JcFWxQPA6KCqj5O42VOmAY3zQUfEKxU0KpTGXwNoCjkX1e13eHNvw/xPynt6pU0rZ1htjWTNTSXsg==\",
      \"dev\": true
    },
    \"jsdom\": {
      \"version\": \"16.7.0\",
      \"resolved\": \"https://registry.npmjs.org/jsdom/-/jsdom-16.7.0.tgz\",
      \"integrity\": \"sha512-u9Smc2G1USStM+s/x1ru5Sxrl6mPYCbByG1U/hUmqaVsm4tbNyS7CicOSRyuGQYZhTu0h84qkZZQ/I+dzizSVw==\",
      \"dev\": true,
      \"requires\": {
        \"abab\": \"^2.0.5\",
        \"acorn\": \"^8.2.4\",
        \"acorn-globals\": \"^6.0.0\",
        \"cssom\": \"^0.4.4\",
        \"cssstyle\": \"^2.3.0\",
        \"data-urls\": \"^2.0.0\",
        \"decimal.js\": \"^10.2.1\",
        \"domexception\": \"^2.0.1\",
        \"escodegen\": \"^2.0.0\",
        \"form-data\": \"^3.0.0\",
        \"html-encoding-sniffer\": \"^2.0.1\",
        \"http-proxy-agent\": \"^4.0.1\",
        \"https-proxy-agent\": \"^5.0.0\",
        \"is-potential-custom-element-name\": \"^1.0.1\",
        \"nwsapi\": \"^2.2.0\",
        \"parse5\": \"6.0.1\",
        \"saxes\": \"^5.0.1\",
        \"symbol-tree\": \"^3.2.4\",
        \"tough-cookie\": \"^4.0.0\",
        \"w3c-hr-time\": \"^1.0.2\",
        \"w3c-xmlserializer\": \"^2.0.0\",
        \"webidl-conversions\": \"^6.1.0\",
        \"whatwg-encoding\": \"^1.0.5\",
        \"whatwg-mimetype\": \"^2.3.0\",
        \"whatwg-url\": \"^8.5.0\",
        \"ws\": \"^7.4.6\",
        \"xml-name-validator\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"acorn\": {
          \"version\": \"8.5.0\",
          \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-8.5.0.tgz\",
          \"integrity\": \"sha512-yXbYeFy+jUuYd3/CDcg2NkIYE991XYX/bje7LmjJigUciaeO1JR4XxXgCIV1/Zc/dRuFEyw1L0pbA+qynJkW5Q==\",
          \"dev\": true
        }
      }
    },
    \"jsdom-global\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/jsdom-global/-/jsdom-global-3.0.2.tgz\",
      \"integrity\": \"sha1-a9KZwTsMRiay2iwDk81DhdYGrLk=\",
      \"dev\": true
    },
    \"jsesc\": {
      \"version\": \"2.5.2\",
      \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-2.5.2.tgz\",
      \"integrity\": \"sha512-OYu7XEzjkCQ3C5Ps3QIZsQfNpqoJyZZA99wd9aWd05NCtC5pWOkShK2mkL6HXQR6/Cy2lbNdPlZBpuQHXE63gA==\",
      \"dev\": true
    },
    \"json-buffer\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/json-buffer/-/json-buffer-3.0.1.tgz\",
      \"integrity\": \"sha512-4bV5BfR2mqfQTJm+V5tPPdf+ZpuhiIvTuAB5g8kcrXOZpTT/QwwVRWBywX1ozr6lEuPdbHxwaJlm9G6mI2sfSQ==\"
    },
    \"json-parse-better-errors\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/json-parse-better-errors/-/json-parse-better-errors-1.0.2.tgz\",
      \"integrity\": \"sha512-mrqyZKfX5EhL7hvqcV6WG1yYjnjeuYDzDhhcAAUrq8Po85NBQBJP+ZDUT75qZQ98IkUoBqdkExkukOU7Ts2wrw==\",
      \"dev\": true
    },
    \"json-parse-even-better-errors\": {
      \"version\": \"2.3.1\",
      \"resolved\": \"https://registry.npmjs.org/json-parse-even-better-errors/-/json-parse-even-better-errors-2.3.1.tgz\",
      \"integrity\": \"sha512-xyFwyhro/JEof6Ghe2iz2NcXoj2sloNsWr/XsERDK/oiPCfaNhl5ONfp+jQdAZRQQ0IJWNzH9zIZF7li91kh2w==\",
      \"dev\": true
    },
    \"json-schema\": {
      \"version\": \"0.4.0\",
      \"resolved\": \"https://registry.npmjs.org/json-schema/-/json-schema-0.4.0.tgz\",
      \"integrity\": \"sha512-es94M3nTIfsEPisRafak+HDLfHXnKBhV3vU5eqPcS3flIWqcxJWgXHXiey3YrpaNsanY5ei1VoYEbOzijuq9BA==\",
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
      \"integrity\": \"sha512-Bdboy+l7tA3OGW6FjyFHWkP5LuByj1Tk33Ljyq0axyzdk9//JSi2u3fP1QSmd1KNwq6VOKYGlAu87CisVir6Pw==\",
      \"dev\": true
    },
    \"json-stringify-safe\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/json-stringify-safe/-/json-stringify-safe-5.0.1.tgz\",
      \"integrity\": \"sha512-ZClg6AaYvamvYEE82d3Iyd3vSSIjQ+odgjaTzRuO3s7toCdFKczob2i0zCh7JE8kWn17yvAWhUVxvqGwUalsRA==\",
      \"dev\": true
    },
    \"json5\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/json5/-/json5-1.0.1.tgz\",
      \"integrity\": \"sha512-aKS4WQjPenRxiQsC93MNfjx+nbF4PAdYzmd/1JIj8HYzqfbu86beTuNgXDzPknWk0n0uARlyewZo4s++ES36Ow==\",
      \"dev\": true,
      \"requires\": {
        \"minimist\": \"^1.2.0\"
      }
    },
    \"jsprim\": {
      \"version\": \"1.4.2\",
      \"resolved\": \"https://registry.npmjs.org/jsprim/-/jsprim-1.4.2.tgz\",
      \"integrity\": \"sha512-P2bSOMAc/ciLz6DzgjVlGJP9+BrJWu5UDGK70C2iweC5QBIeFf0ZXRvGjEj2uYgrY2MkAAhsSWHDWlFtEroZWw==\",
      \"dev\": true,
      \"requires\": {
        \"assert-plus\": \"1.0.0\",
        \"extsprintf\": \"1.3.0\",
        \"json-schema\": \"0.4.0\",
        \"verror\": \"1.10.0\"
      }
    },
    \"keyv\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/keyv/-/keyv-4.0.3.tgz\",
      \"integrity\": \"sha512-zdGa2TOpSZPq5mU6iowDARnMBZgtCqJ11dJROFi6tg6kTn4nuUdU09lFyLFSaHrWqpIJ+EBq4E8/Dc0Vx5vLdA==\",
      \"requires\": {
        \"json-buffer\": \"3.0.1\"
      }
    },
    \"kind-of\": {
      \"version\": \"6.0.3\",
      \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-6.0.3.tgz\",
      \"integrity\": \"sha512-dcS1ul+9tmeD95T+x28/ehLgd9mENa3LsvDTtzm3vyBEO7RPptvAD+t44WVXaUjTBRcrpFeFlC8WCruUR456hw==\",
      \"dev\": true
    },
    \"klona\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/klona/-/klona-2.0.6.tgz\",
      \"integrity\": \"sha512-dhG34DXATL5hSxJbIexCft8FChFXtmskoZYnoPWjXQuebWYCNkVeV3KkGegCK9CP1oswI/vQibS2GY7Em/sJJA==\",
      \"dev\": true
    },
    \"levn\": {
      \"version\": \"0.3.0\",
      \"resolved\": \"https://registry.npmjs.org/levn/-/levn-0.3.0.tgz\",
      \"integrity\": \"sha1-OwmSTt+fCDwEkP3UwLxEIeBHZO4=\",
      \"dev\": true,
      \"requires\": {
        \"prelude-ls\": \"~1.1.2\",
        \"type-check\": \"~0.3.2\"
      }
    },
    \"lines-and-columns\": {
      \"version\": \"1.2.4\",
      \"resolved\": \"https://registry.npmjs.org/lines-and-columns/-/lines-and-columns-1.2.4.tgz\",
      \"integrity\": \"sha512-7ylylesZQ/PV29jhEDl3Ufjo6ZX7gCqJr5F7PKrqc93v7fzSymt1BpwEU8nAUXs8qzzvqhbjhK5QZg6Mt/HkBg==\",
      \"dev\": true
    },
    \"loader-runner\": {
      \"version\": \"2.4.0\",
      \"resolved\": \"https://registry.npmjs.org/loader-runner/-/loader-runner-2.4.0.tgz\",
      \"integrity\": \"sha512-Jsmr89RcXGIwivFY21FcRrisYZfvLMTWx5kOLc+JTxtpBOG6xML0vzbc6SEQG2FO9/4Fc3wW4LVcB5DmGflaRw==\",
      \"dev\": true
    },
    \"loader-utils\": {
      \"version\": \"1.4.2\",
      \"resolved\": \"https://registry.npmjs.org/loader-utils/-/loader-utils-1.4.2.tgz\",
      \"integrity\": \"sha512-I5d00Pd/jwMD2QCduo657+YM/6L3KZu++pmX9VFncxaxvHcru9jx1lBaFft+r4Mt2jK0Yhp41XlRAihzPxHNCg==\",
      \"dev\": true,
      \"requires\": {
        \"big.js\": \"^5.2.2\",
        \"emojis-list\": \"^3.0.0\",
        \"json5\": \"^1.0.1\"
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
    \"lodash.merge\": {
      \"version\": \"4.6.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.merge/-/lodash.merge-4.6.2.tgz\",
      \"integrity\": \"sha512-0KpjqXRVvrYyCsX1swR/XTK0va6VQkQM6MNo7PqW77ByjAhoARA8EfrP1N4+KlKj8YS0ZUCtRT/YUuhyYDujIQ==\",
      \"dev\": true
    },
    \"lodash.truncate\": {
      \"version\": \"4.4.2\",
      \"resolved\": \"https://registry.npmjs.org/lodash.truncate/-/lodash.truncate-4.4.2.tgz\",
      \"integrity\": \"sha512-jttmRe7bRse52OsWIMDLaXxWqRAmtIUccAQ3garviCqJjafXOfNMO0yMfNpdD6zbGaTU0P5Nz7e7gAT6cKmJRw==\",
      \"dev\": true
    },
    \"log-symbols\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/log-symbols/-/log-symbols-3.0.0.tgz\",
      \"integrity\": \"sha512-dSkNGuI7iG3mfvDzUuYZyvk5dD9ocYCYzNU6CYDE6+Xqd+gwme6Z00NS3dUh8mq/73HaEtT7m6W+yUPtU6BZnQ==\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^2.4.2\"
      },
      \"dependencies\": {
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
        \"supports-color\": {
          \"version\": \"5.5.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
          \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"loose-envify\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/loose-envify/-/loose-envify-1.4.0.tgz\",
      \"integrity\": \"sha512-lyuxPGr/Wfhrlem2CL/UcnUc1zcqKAImBDzukY7Y5F/yQiNdko6+fRLevlw1HgMySw7f611UIY408EtxRSoK3Q==\",
      \"dev\": true,
      \"requires\": {
        \"js-tokens\": \"^3.0.0 || ^4.0.0\"
      }
    },
    \"lowercase-keys\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/lowercase-keys/-/lowercase-keys-2.0.0.tgz\",
      \"integrity\": \"sha512-tqNXrS78oMOE73NMxK4EMLQsQowWf8jKooH9g7xPavRT706R6bkQJ6DY2Te7QukaZsulxa30wQ7bk0pm4XiHmA==\"
    },
    \"lru-cache\": {
      \"version\": \"4.1.5\",
      \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-4.1.5.tgz\",
      \"integrity\": \"sha512-sWZlbEP2OsHNkXrMl5GYk/jKk70MBng6UU4YI/qGDYbgf6YbP4EvmqISbXCoJiRKs+1bSpFHVgQxvJ17F2li5g==\",
      \"dev\": true,
      \"requires\": {
        \"pseudomap\": \"^1.0.2\",
        \"yallist\": \"^2.1.2\"
      },
      \"dependencies\": {
        \"yallist\": {
          \"version\": \"2.1.2\",
          \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-2.1.2.tgz\",
          \"integrity\": \"sha1-HBH5IY8HYImkfdUS+TxmmaaoHVI=\",
          \"dev\": true
        }
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
    \"make-error\": {
      \"version\": \"1.3.6\",
      \"resolved\": \"https://registry.npmjs.org/make-error/-/make-error-1.3.6.tgz\",
      \"integrity\": \"sha512-s8UhlNe7vPKomQhC1qFelMokr/Sc3AgNbso3n74mVPA5LTZwkB9NlXf4XPamLxJE8h0gh73rM94xvwRT2CVInw==\",
      \"dev\": true
    },
    \"map-cache\": {
      \"version\": \"0.2.2\",
      \"resolved\": \"https://registry.npmjs.org/map-cache/-/map-cache-0.2.2.tgz\",
      \"integrity\": \"sha1-wyq9C9ZSXZsFFkW7TyasXcmKDb8=\",
      \"dev\": true
    },
    \"map-obj\": {
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/map-obj/-/map-obj-4.3.0.tgz\",
      \"integrity\": \"sha512-hdN1wVrZbb29eBGiGjJbeP8JbKjq1urkHJ/LIP/NY48MZ1QVXUsQBV1G1zvYFHn1XE06cwjBsOI2K3Ulnj1YXQ==\",
      \"dev\": true
    },
    \"map-visit\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/map-visit/-/map-visit-1.0.0.tgz\",
      \"integrity\": \"sha1-7Nyo8TFE5mDxtb1B8S80edmN+48=\",
      \"dev\": true,
      \"requires\": {
        \"object-visit\": \"^1.0.0\"
      }
    },
    \"md5.js\": {
      \"version\": \"1.3.5\",
      \"resolved\": \"https://registry.npmjs.org/md5.js/-/md5.js-1.3.5.tgz\",
      \"integrity\": \"sha512-xitP+WxNPcTTOgnTJcrhM0xvdPepipPSf3I8EIpGKeFLjt3PlJLIDG3u8EX53ZIubkb+5U2+3rELYpEhHhzdkg==\",
      \"dev\": true,
      \"requires\": {
        \"hash-base\": \"^3.0.0\",
        \"inherits\": \"^2.0.1\",
        \"safe-buffer\": \"^5.1.2\"
      }
    },
    \"memory-fs\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/memory-fs/-/memory-fs-0.4.1.tgz\",
      \"integrity\": \"sha512-cda4JKCxReDXFXRqOHPQscuIYg1PvxbE2S2GP45rnwfEK+vZaXC8C1OFvdHIbgw0DLzowXGVoxLaAmlgRy14GQ==\",
      \"dev\": true,
      \"requires\": {
        \"errno\": \"^0.1.3\",
        \"readable-stream\": \"^2.0.1\"
      }
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
        \"type-fest\": {
          \"version\": \"0.18.1\",
          \"resolved\": \"https://registry.npmjs.org/type-fest/-/type-fest-0.18.1.tgz\",
          \"integrity\": \"sha512-OIAYXk8+ISY+qTOwkHtKqzAuxchoMiD9Udx+FSGQDuiRR+PJKJHc2NJAXlbhkGwTt/4/nKZxELY1w3ReWOL8mw==\",
          \"dev\": true
        },
        \"yargs-parser\": {
          \"version\": \"20.2.9\",
          \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-20.2.9.tgz\",
          \"integrity\": \"sha512-y11nGElTIV+CT3Zv9t7VKl+Q3hTQoT9a1Qzezhhl6Rp21gJ/IVTW7Z3y9EWXhuUBC2Shnf+DX0antecpAwSP8w==\",
          \"dev\": true
        }
      }
    },
    \"merge-source-map\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/merge-source-map/-/merge-source-map-1.1.0.tgz\",
      \"integrity\": \"sha512-Qkcp7P2ygktpMPh2mCQZaf3jhN6D3Z/qVZHSdWvQ+2Ef5HgRAPBO57A77+ENm0CPx2+1Ce/MYKi3ymqdfuqibw==\",
      \"dev\": true,
      \"requires\": {
        \"source-map\": \"^0.6.1\"
      }
    },
    \"merge-stream\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
      \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
      \"dev\": true
    },
    \"merge2\": {
      \"version\": \"1.4.1\",
      \"resolved\": \"https://registry.npmjs.org/merge2/-/merge2-1.4.1.tgz\",
      \"integrity\": \"sha512-8q7VEgMJW4J8tcfVPy8g09NcQwZdbwFEqhe/WZkoIzjn/3TGDwtOCYtXGxA3O8tPzpczCCDgv+P2P5y00ZJOOg==\",
      \"dev\": true
    },
    \"micromatch\": {
      \"version\": \"3.1.10\",
      \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-3.1.10.tgz\",
      \"integrity\": \"sha512-MWikgl9n9M3w+bpsY3He8L+w9eF9338xRl8IAO5viDizwSzziFEyUzo2xrrloB64ADbTf8uA8vRqqttDTOmccg==\",
      \"dev\": true,
      \"requires\": {
        \"arr-diff\": \"^4.0.0\",
        \"array-unique\": \"^0.3.2\",
        \"braces\": \"^2.3.1\",
        \"define-property\": \"^2.0.2\",
        \"extend-shallow\": \"^3.0.2\",
        \"extglob\": \"^2.0.4\",
        \"fragment-cache\": \"^0.2.1\",
        \"kind-of\": \"^6.0.2\",
        \"nanomatch\": \"^1.2.9\",
        \"object.pick\": \"^1.3.0\",
        \"regex-not\": \"^1.0.0\",
        \"snapdragon\": \"^0.8.1\",
        \"to-regex\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"braces\": {
          \"version\": \"2.3.2\",
          \"resolved\": \"https://registry.npmjs.org/braces/-/braces-2.3.2.tgz\",
          \"integrity\": \"sha512-aNdbnj9P8PjdXU4ybaWLK2IF3jc/EoDYbC7AazW6to3TRsfXxscC9UXOB5iDiEQrkyIbWp2SLQda4+QAa7nc3w==\",
          \"dev\": true,
          \"requires\": {
            \"arr-flatten\": \"^1.1.0\",
            \"array-unique\": \"^0.3.2\",
            \"extend-shallow\": \"^2.0.1\",
            \"fill-range\": \"^4.0.0\",
            \"isobject\": \"^3.0.1\",
            \"repeat-element\": \"^1.1.2\",
            \"snapdragon\": \"^0.8.1\",
            \"snapdragon-node\": \"^2.0.1\",
            \"split-string\": \"^3.0.2\",
            \"to-regex\": \"^3.0.1\"
          },
          \"dependencies\": {
            \"extend-shallow\": {
              \"version\": \"2.0.1\",
              \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
              \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
              \"dev\": true,
              \"requires\": {
                \"is-extendable\": \"^0.1.0\"
              }
            },
            \"is-extendable\": {
              \"version\": \"0.1.1\",
              \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
              \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
              \"dev\": true
            }
          }
        },
        \"define-property\": {
          \"version\": \"2.0.2\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
          \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^1.0.2\",
            \"isobject\": \"^3.0.1\"
          }
        },
        \"extend-shallow\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
          \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
          \"dev\": true,
          \"requires\": {
            \"assign-symbols\": \"^1.0.0\",
            \"is-extendable\": \"^1.0.1\"
          }
        },
        \"fill-range\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-4.0.0.tgz\",
          \"integrity\": \"sha1-1USBHUKPmOsGpj3EAtJAPDKMOPc=\",
          \"dev\": true,
          \"requires\": {
            \"extend-shallow\": \"^2.0.1\",
            \"is-number\": \"^3.0.0\",
            \"repeat-string\": \"^1.6.1\",
            \"to-regex-range\": \"^2.1.0\"
          },
          \"dependencies\": {
            \"extend-shallow\": {
              \"version\": \"2.0.1\",
              \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
              \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
              \"dev\": true,
              \"requires\": {
                \"is-extendable\": \"^0.1.0\"
              }
            },
            \"is-extendable\": {
              \"version\": \"0.1.1\",
              \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
              \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
              \"dev\": true
            }
          }
        },
        \"is-extendable\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
          \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
          \"dev\": true,
          \"requires\": {
            \"is-plain-object\": \"^2.0.4\"
          }
        },
        \"to-regex-range\": {
          \"version\": \"2.1.1\",
          \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-2.1.1.tgz\",
          \"integrity\": \"sha1-fIDBe53+vlmeJzZ+DU3VWQFB2zg=\",
          \"dev\": true,
          \"requires\": {
            \"is-number\": \"^3.0.0\",
            \"repeat-string\": \"^1.6.1\"
          }
        }
      }
    },
    \"miller-rabin\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/miller-rabin/-/miller-rabin-4.0.1.tgz\",
      \"integrity\": \"sha512-115fLhvZVqWwHPbClyntxEVfVDfl9DLLTuJvq3g2O/Oxi8AiNouAHvDSzHS0viUJc+V5vm3eq91Xwqn9dp4jRA==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.0.0\",
        \"brorand\": \"^1.0.1\"
      }
    },
    \"mime-db\": {
      \"version\": \"1.50.0\",
      \"resolved\": \"https://registry.npmjs.org/mime-db/-/mime-db-1.50.0.tgz\",
      \"integrity\": \"sha512-9tMZCDlYHqeERXEHO9f/hKfNXhre5dK2eE/krIvUjZbS2KPcqGDfNShIWS1uW9XOTKQKqK6qbeOci18rbfW77A==\",
      \"dev\": true
    },
    \"mime-types\": {
      \"version\": \"2.1.33\",
      \"resolved\": \"https://registry.npmjs.org/mime-types/-/mime-types-2.1.33.tgz\",
      \"integrity\": \"sha512-plLElXp7pRDd0bNZHw+nMd52vRYjLwQjygaNg7ddJ2uJtTlmnTCjWuPKxVu6//AdaRuME84SvLW91sIkBqGT0g==\",
      \"dev\": true,
      \"requires\": {
        \"mime-db\": \"1.50.0\"
      }
    },
    \"mimic-response\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/mimic-response/-/mimic-response-3.1.0.tgz\",
      \"integrity\": \"sha512-z0yWI+4FDrrweS8Zmt4Ej5HdJmky15+L2e6Wgn3+iK5fWzb6T3fhNFq2+MeTRb064c6Wr4N/wv0DzQTjNzHNGQ==\"
    },
    \"min-indent\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/min-indent/-/min-indent-1.0.1.tgz\",
      \"integrity\": \"sha512-I9jwMn07Sy/IwOj3zVkVik2JTvgpaykDZEigL6Rx6N9LbMywwUSMtxET+7lVoDLLd3O3IXwJwvuuns8UB/HeAg==\",
      \"dev\": true
    },
    \"mini-css-extract-plugin\": {
      \"version\": \"1.6.2\",
      \"resolved\": \"https://registry.npmjs.org/mini-css-extract-plugin/-/mini-css-extract-plugin-1.6.2.tgz\",
      \"integrity\": \"sha512-WhDvO3SjGm40oV5y26GjMJYjd2UMqrLAGKy5YS2/3QKJy2F7jgynuHTir/tgUUOiNQu5saXHdc8reo7YuhhT4Q==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^3.0.0\",
        \"webpack-sources\": \"^1.1.0\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
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
    \"minimalistic-assert\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/minimalistic-assert/-/minimalistic-assert-1.0.1.tgz\",
      \"integrity\": \"sha512-UtJcAD4yEaGtjPezWuO9wC4nwUnVH/8/Im3yEHQP4b67cXlD/Qr9hdITCU1xDbSEXg2XKNaP8jsReV7vQd00/A==\",
      \"dev\": true
    },
    \"minimalistic-crypto-utils\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/minimalistic-crypto-utils/-/minimalistic-crypto-utils-1.0.1.tgz\",
      \"integrity\": \"sha1-9sAMHAsIIkblxNmd+4x8CDsrWCo=\",
      \"dev\": true
    },
    \"minimatch\": {
      \"version\": \"3.0.4\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.0.4.tgz\",
      \"integrity\": \"sha512-yJHVQEhyqPLUTgt9B83PXu6W3rx4MvvHvSUvToogpwoGDOUQ+yDrR0HRot+yOCdCO7u4hX3pWft6kWBBcqh0UA==\",
      \"dev\": true,
      \"requires\": {
        \"brace-expansion\": \"^1.1.7\"
      }
    },
    \"minimist\": {
      \"version\": \"1.2.6\",
      \"resolved\": \"https://registry.npmjs.org/minimist/-/minimist-1.2.6.tgz\",
      \"integrity\": \"sha512-Jsjnk4bw3YJqYzbdyBiNsPWHPfO++UGG749Cxs6peCu5Xg4nrena6OVxOYxrQTqww0Jmwt+Ref8rggumkTLz9Q==\",
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
      \"version\": \"3.1.5\",
      \"resolved\": \"https://registry.npmjs.org/minipass/-/minipass-3.1.5.tgz\",
      \"integrity\": \"sha512-+8NzxD82XQoNKNrl1d/FSi+X8wAEWR+sbYAfIvub4Nz0d22plFG72CEVVaufV8PNf4qSslFTD8VMOxNVhHCjTw==\",
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
    \"mississippi\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/mississippi/-/mississippi-3.0.0.tgz\",
      \"integrity\": \"sha512-x471SsVjUtBRtcvd4BzKE9kFC+/2TeWgKCgw0bZcw1b9l2X3QX5vCWgF+KaZaYm87Ss//rHnWryupDrgLvmSkA==\",
      \"dev\": true,
      \"requires\": {
        \"concat-stream\": \"^1.5.0\",
        \"duplexify\": \"^3.4.2\",
        \"end-of-stream\": \"^1.1.0\",
        \"flush-write-stream\": \"^1.0.0\",
        \"from2\": \"^2.1.0\",
        \"parallel-transform\": \"^1.1.0\",
        \"pump\": \"^3.0.0\",
        \"pumpify\": \"^1.3.3\",
        \"stream-each\": \"^1.1.0\",
        \"through2\": \"^2.0.0\"
      }
    },
    \"mixin-deep\": {
      \"version\": \"1.3.2\",
      \"resolved\": \"https://registry.npmjs.org/mixin-deep/-/mixin-deep-1.3.2.tgz\",
      \"integrity\": \"sha512-WRoDn//mXBiJ1H40rqa3vH0toePwSsGb45iInWlTySa+Uu4k3tYUSxa2v1KqAiLtvlrSzaExqS1gtk96A9zvEA==\",
      \"dev\": true,
      \"requires\": {
        \"for-in\": \"^1.0.2\",
        \"is-extendable\": \"^1.0.1\"
      },
      \"dependencies\": {
        \"is-extendable\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
          \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
          \"dev\": true,
          \"requires\": {
            \"is-plain-object\": \"^2.0.4\"
          }
        }
      }
    },
    \"mkdirp\": {
      \"version\": \"0.5.5\",
      \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-0.5.5.tgz\",
      \"integrity\": \"sha512-NKmAlESf6jMGym1++R0Ra7wvhV+wFW63FaSOFPwRahvea0gMUcGUhVeAg/0BC0wiv9ih5NYPB1Wn1UEI1/L+xQ==\",
      \"dev\": true,
      \"requires\": {
        \"minimist\": \"^1.2.5\"
      }
    },
    \"mocha\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/mocha/-/mocha-7.2.0.tgz\",
      \"integrity\": \"sha512-O9CIypScywTVpNaRrCAgoUnJgozpIofjKUYmJhiCIJMiuYnLI6otcb1/kpW9/n/tJODHGZ7i8aLQoDVsMtOKQQ==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-colors\": \"3.2.3\",
        \"browser-stdout\": \"1.3.1\",
        \"chokidar\": \"3.3.0\",
        \"debug\": \"3.2.6\",
        \"diff\": \"3.5.0\",
        \"escape-string-regexp\": \"1.0.5\",
        \"find-up\": \"3.0.0\",
        \"glob\": \"7.1.3\",
        \"growl\": \"1.10.5\",
        \"he\": \"1.2.0\",
        \"js-yaml\": \"3.13.1\",
        \"log-symbols\": \"3.0.0\",
        \"minimatch\": \"3.0.4\",
        \"mkdirp\": \"0.5.5\",
        \"ms\": \"2.1.1\",
        \"node-environment-flags\": \"1.0.6\",
        \"object.assign\": \"4.1.0\",
        \"strip-json-comments\": \"2.0.1\",
        \"supports-color\": \"6.0.0\",
        \"which\": \"1.3.1\",
        \"wide-align\": \"1.1.3\",
        \"yargs\": \"13.3.2\",
        \"yargs-parser\": \"13.1.2\",
        \"yargs-unparser\": \"1.6.0\"
      },
      \"dependencies\": {
        \"chokidar\": {
          \"version\": \"3.3.0\",
          \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-3.3.0.tgz\",
          \"integrity\": \"sha512-dGmKLDdT3Gdl7fBUe8XK+gAtGmzy5Fn0XkkWQuYxGIgWVPPse2CxFA5mtrlD0TOHaHjEUqkWNyP1XdHoJES/4A==\",
          \"dev\": true,
          \"requires\": {
            \"anymatch\": \"~3.1.1\",
            \"braces\": \"~3.0.2\",
            \"fsevents\": \"~2.1.1\",
            \"glob-parent\": \"~5.1.0\",
            \"is-binary-path\": \"~2.1.0\",
            \"is-glob\": \"~4.0.1\",
            \"normalize-path\": \"~3.0.0\",
            \"readdirp\": \"~3.2.0\"
          }
        },
        \"debug\": {
          \"version\": \"3.2.6\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-3.2.6.tgz\",
          \"integrity\": \"sha512-mel+jf7nrtEl5Pn1Qx46zARXKDpBbvzezse7p7LqINmdoIk8PYP5SySaxEmYv6TZ0JyEKA1hsCId6DIhgITtWQ==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"^2.1.1\"
          },
          \"dependencies\": {
            \"ms\": {
              \"version\": \"2.1.3\",
              \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.3.tgz\",
              \"integrity\": \"sha512-6FlzubTLZG3J2a/NVCAleEhjzq5oxgHyaCU9yYXvcLsvoVaHJq/s5xXI6/XXP6tz7R9xAOtHnSO/tXtF3WRTlA==\",
              \"dev\": true
            }
          }
        },
        \"fsevents\": {
          \"version\": \"2.1.3\",
          \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-2.1.3.tgz\",
          \"integrity\": \"sha512-Auw9a4AxqWpa9GUfj370BMPzzyncfBABW8Mab7BGWBYDj4Isgq+cDKtx0i6u9jcX9pQDnswsaaOTgTmA5pEjuQ==\",
          \"dev\": true,
          \"optional\": true
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
        \"js-yaml\": {
          \"version\": \"3.13.1\",
          \"resolved\": \"https://registry.npmjs.org/js-yaml/-/js-yaml-3.13.1.tgz\",
          \"integrity\": \"sha512-YfbcO7jXDdyj0DGxYVSlSeQNHbD7XPWvrVWeVUujrQEoZzWJIRrCPoyk6kL6IAjAG2IolMK4T0hNUe0HOUs5Jw==\",
          \"dev\": true,
          \"requires\": {
            \"argparse\": \"^1.0.7\",
            \"esprima\": \"^4.0.0\"
          }
        },
        \"ms\": {
          \"version\": \"2.1.1\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.1.tgz\",
          \"integrity\": \"sha512-tgp+dl5cGk28utYktBsrFqA7HKgrhgPsg6Z/EfhWI4gl1Hwq8B/GmY/0oXZ6nF8hDVesS/FpnYaD/kOWhYQvyg==\",
          \"dev\": true
        },
        \"object.assign\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.0.tgz\",
          \"integrity\": \"sha512-exHJeq6kBKj58mqGyTQ9DFvrZC/eR6OwxzoM9YRoGBqrXYonaFyGiFMuc9VZrXf7DarreEwMpurG3dd+CNyW5w==\",
          \"dev\": true,
          \"requires\": {
            \"define-properties\": \"^1.1.2\",
            \"function-bind\": \"^1.1.1\",
            \"has-symbols\": \"^1.0.0\",
            \"object-keys\": \"^1.0.11\"
          }
        },
        \"readdirp\": {
          \"version\": \"3.2.0\",
          \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-3.2.0.tgz\",
          \"integrity\": \"sha512-crk4Qu3pmXwgxdSgGhgA/eXiJAPQiX4GMOZZMXnqKxHX7TaoL+3gQVo/WeuAiogr07DpnfjIMpXXa+PAIvwPGQ==\",
          \"dev\": true,
          \"requires\": {
            \"picomatch\": \"^2.0.4\"
          }
        },
        \"supports-color\": {
          \"version\": \"6.0.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-6.0.0.tgz\",
          \"integrity\": \"sha512-on9Kwidc1IUQo+bQdhi8+Tijpo0e1SS6RoGo2guUwn5vdaxw8RXOF9Vb2ws+ihWOmh4JnCJOvaziZWP1VABaLg==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"mochapack\": {
      \"version\": \"2.1.4\",
      \"resolved\": \"https://registry.npmjs.org/mochapack/-/mochapack-2.1.4.tgz\",
      \"integrity\": \"sha512-qoZYT8ibht6z35e936P6Y/3nynFX843Jm+2l/pNWB3Sue63IHBfqZeAnF6Ypez85kUll7HtapMogfO2hGb2N2Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/runtime-corejs2\": \"^7.0.0\",
        \"chalk\": \"^2.4.2\",
        \"chokidar\": \"^3.5.2\",
        \"glob-parent\": \"5.1.2\",
        \"globby\": \"^10.0.1\",
        \"interpret\": \"^1.2.0\",
        \"is-glob\": \"^4.0.1\",
        \"loader-utils\": \"^1.2.3\",
        \"lodash\": \"^4.17.15\",
        \"memory-fs\": \"^0.4.1\",
        \"minimatch\": \"^3.0.4\",
        \"nodent-runtime\": \"^3.2.1\",
        \"normalize-path\": \"^3.0.0\",
        \"progress\": \"^2.0.3\",
        \"source-map-support\": \"^0.5.13\",
        \"toposort\": \"^2.0.2\",
        \"yargs\": \"14.0.0\"
      },
      \"dependencies\": {
        \"array-union\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/array-union/-/array-union-2.1.0.tgz\",
          \"integrity\": \"sha512-HGyxoOTYUyCM6stUe6EJgnd4EoewAI7zMdfqO+kGjnlZmBDz/cR5pf8r/cR4Wq60sL/p0IkcjUEEPwS3GFrIyw==\",
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
        \"globby\": {
          \"version\": \"10.0.2\",
          \"resolved\": \"https://registry.npmjs.org/globby/-/globby-10.0.2.tgz\",
          \"integrity\": \"sha512-7dUi7RvCoT/xast/o/dLN53oqND4yk0nsHkhRgn9w65C4PofCLOoJ39iSOg+qVDdWQPIEj+eszMHQ+aLVwwQSg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/glob\": \"^7.1.1\",
            \"array-union\": \"^2.1.0\",
            \"dir-glob\": \"^3.0.1\",
            \"fast-glob\": \"^3.0.3\",
            \"glob\": \"^7.1.3\",
            \"ignore\": \"^5.1.1\",
            \"merge2\": \"^1.2.3\",
            \"slash\": \"^3.0.0\"
          }
        },
        \"ignore\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/ignore/-/ignore-5.2.0.tgz\",
          \"integrity\": \"sha512-CmxgYGiEPCLhfLnpPp1MoRmifwEIOgjcHXxOBjv7mY96c+eWScsOP9c112ZyLdWHi0FxHjI+4uVhKYp/gcdRmQ==\",
          \"dev\": true
        },
        \"slash\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/slash/-/slash-3.0.0.tgz\",
          \"integrity\": \"sha512-g9Q1haeby36OSStwb4ntCGGGaKsaVSjQ68fBxoQcutl5fS1vuY18H3wSt3jFyFtrkx+Kz0V1G85A4MyAdDMi2Q==\",
          \"dev\": true
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
        \"yargs\": {
          \"version\": \"14.0.0\",
          \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-14.0.0.tgz\",
          \"integrity\": \"sha512-ssa5JuRjMeZEUjg7bEL99AwpitxU/zWGAGpdj0di41pOEmJti8NR6kyUIJBkR78DTYNPZOU08luUo0GTHuB+ow==\",
          \"dev\": true,
          \"requires\": {
            \"cliui\": \"^5.0.0\",
            \"decamelize\": \"^1.2.0\",
            \"find-up\": \"^3.0.0\",
            \"get-caller-file\": \"^2.0.1\",
            \"require-directory\": \"^2.1.1\",
            \"require-main-filename\": \"^2.0.0\",
            \"set-blocking\": \"^2.0.0\",
            \"string-width\": \"^3.0.0\",
            \"which-module\": \"^2.0.0\",
            \"y18n\": \"^4.0.0\",
            \"yargs-parser\": \"^13.1.1\"
          }
        }
      }
    },
    \"move-concurrently\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/move-concurrently/-/move-concurrently-1.0.1.tgz\",
      \"integrity\": \"sha1-viwAX9oy4LKa8fBdfEszIUxwH5I=\",
      \"dev\": true,
      \"requires\": {
        \"aproba\": \"^1.1.1\",
        \"copy-concurrently\": \"^1.0.0\",
        \"fs-write-stream-atomic\": \"^1.0.8\",
        \"mkdirp\": \"^0.5.1\",
        \"rimraf\": \"^2.5.4\",
        \"run-queue\": \"^1.0.3\"
      }
    },
    \"ms\": {
      \"version\": \"2.1.3\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.1.3.tgz\",
      \"integrity\": \"sha512-6FlzubTLZG3J2a/NVCAleEhjzq5oxgHyaCU9yYXvcLsvoVaHJq/s5xXI6/XXP6tz7R9xAOtHnSO/tXtF3WRTlA==\",
      \"dev\": true
    },
    \"nan\": {
      \"version\": \"2.15.0\",
      \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.15.0.tgz\",
      \"integrity\": \"sha512-8ZtvEnA2c5aYCZYd1cvgdnU6cqwixRoYg70xPLWUws5ORTa/lnw+u4amixRS/Ac5U5mQVgp9pnlSUnbNWFaWZQ==\",
      \"dev\": true
    },
    \"nanomatch\": {
      \"version\": \"1.2.13\",
      \"resolved\": \"https://registry.npmjs.org/nanomatch/-/nanomatch-1.2.13.tgz\",
      \"integrity\": \"sha512-fpoe2T0RbHwBTBUOftAfBPaDEi06ufaUai0mE6Yn1kacc3SnTErfb/h+X94VXzI64rKFHYImXSvdwGGCmwOqCA==\",
      \"dev\": true,
      \"requires\": {
        \"arr-diff\": \"^4.0.0\",
        \"array-unique\": \"^0.3.2\",
        \"define-property\": \"^2.0.2\",
        \"extend-shallow\": \"^3.0.2\",
        \"fragment-cache\": \"^0.2.1\",
        \"is-windows\": \"^1.0.2\",
        \"kind-of\": \"^6.0.2\",
        \"object.pick\": \"^1.3.0\",
        \"regex-not\": \"^1.0.0\",
        \"snapdragon\": \"^0.8.1\",
        \"to-regex\": \"^3.0.1\"
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"2.0.2\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
          \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^1.0.2\",
            \"isobject\": \"^3.0.1\"
          }
        },
        \"extend-shallow\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
          \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
          \"dev\": true,
          \"requires\": {
            \"assign-symbols\": \"^1.0.0\",
            \"is-extendable\": \"^1.0.1\"
          }
        },
        \"is-extendable\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
          \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
          \"dev\": true,
          \"requires\": {
            \"is-plain-object\": \"^2.0.4\"
          }
        }
      }
    },
    \"natural-compare\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/natural-compare/-/natural-compare-1.4.0.tgz\",
      \"integrity\": \"sha512-OWND8ei3VtNC9h7V60qff3SVobHr996CTwgxubgyQYEpg290h9J0buyECNNJexkFm5sOajh5G116RYA1c8ZMSw==\",
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
      }
    },
    \"node-gyp\": {
      \"version\": \"7.1.2\",
      \"resolved\": \"https://registry.npmjs.org/node-gyp/-/node-gyp-7.1.2.tgz\",
      \"integrity\": \"sha512-CbpcIo7C3eMu3dL1c3d0xw449fHIGALIJsRP4DDPHpyiW8vcriNY7ubh9TE4zEKfSxscY7PjeFnshE7h75ynjQ==\",
      \"dev\": true,
      \"requires\": {
        \"env-paths\": \"^2.2.0\",
        \"glob\": \"^7.1.4\",
        \"graceful-fs\": \"^4.2.3\",
        \"nopt\": \"^5.0.0\",
        \"npmlog\": \"^4.1.2\",
        \"request\": \"^2.88.2\",
        \"rimraf\": \"^3.0.2\",
        \"semver\": \"^7.3.2\",
        \"tar\": \"^6.0.2\",
        \"which\": \"^2.0.2\"
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
          \"version\": \"7.5.4\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.5.4.tgz\",
          \"integrity\": \"sha512-1bCSESV6Pv+i21Hvpxp3Dx+pSD8lIPt8uVjRrxAUt/nbswYc+tK6Y2btiULjd4+fnq15PX+nqQDC7Oft7WkwcA==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
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
        }
      }
    },
    \"node-libs-browser\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/node-libs-browser/-/node-libs-browser-2.2.1.tgz\",
      \"integrity\": \"sha512-h/zcD8H9kaDZ9ALUWwlBUDo6TKF8a7qBSCSEGfjTVIYeqsioSKaAX+BN7NgiMGp6iSIXZ3PxgCu8KS3b71YK5Q==\",
      \"dev\": true,
      \"requires\": {
        \"assert\": \"^1.1.1\",
        \"browserify-zlib\": \"^0.2.0\",
        \"buffer\": \"^4.3.0\",
        \"console-browserify\": \"^1.1.0\",
        \"constants-browserify\": \"^1.0.0\",
        \"crypto-browserify\": \"^3.11.0\",
        \"domain-browser\": \"^1.1.1\",
        \"events\": \"^3.0.0\",
        \"https-browserify\": \"^1.0.0\",
        \"os-browserify\": \"^0.3.0\",
        \"path-browserify\": \"0.0.1\",
        \"process\": \"^0.11.10\",
        \"punycode\": \"^1.2.4\",
        \"querystring-es3\": \"^0.2.0\",
        \"readable-stream\": \"^2.3.3\",
        \"stream-browserify\": \"^2.0.1\",
        \"stream-http\": \"^2.7.2\",
        \"string_decoder\": \"^1.0.0\",
        \"timers-browserify\": \"^2.0.4\",
        \"tty-browserify\": \"0.0.0\",
        \"url\": \"^0.11.0\",
        \"util\": \"^0.11.0\",
        \"vm-browserify\": \"^1.0.1\"
      },
      \"dependencies\": {
        \"inherits\": {
          \"version\": \"2.0.3\",
          \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
          \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
          \"dev\": true
        },
        \"punycode\": {
          \"version\": \"1.4.1\",
          \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-1.4.1.tgz\",
          \"integrity\": \"sha1-wNWmOycYgArY4esPpSachN1BhF4=\",
          \"dev\": true
        },
        \"util\": {
          \"version\": \"0.11.1\",
          \"resolved\": \"https://registry.npmjs.org/util/-/util-0.11.1.tgz\",
          \"integrity\": \"sha512-HShAsny+zS2TZfaXxD9tYj4HQGlBezXZMZuM/S5PKLLoZkShZiGk9o5CzukI1LVHZvjdvZ2Sj1aW/Ndn2NB/HQ==\",
          \"dev\": true,
          \"requires\": {
            \"inherits\": \"2.0.3\"
          }
        }
      }
    },
    \"node-releases\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.1.tgz\",
      \"integrity\": \"sha512-CqyzN6z7Q6aMeF/ktcMVTzhAHCEpf8SOarwpzpf8pNBY2k5/oM34UHldUwp8VKI7uxct2HxSRdJjBaZeESzcxA==\",
      \"dev\": true
    },
    \"node-sass\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/node-sass/-/node-sass-6.0.1.tgz\",
      \"integrity\": \"sha512-f+Rbqt92Ful9gX0cGtdYwjTrWAaGURgaK5rZCWOgCNyGWusFYHhbqCCBoFBeat+HKETOU02AyTxNhJV0YZf2jQ==\",
      \"dev\": true,
      \"requires\": {
        \"async-foreach\": \"^0.1.3\",
        \"chalk\": \"^1.1.1\",
        \"cross-spawn\": \"^7.0.3\",
        \"gaze\": \"^1.0.0\",
        \"get-stdin\": \"^4.0.1\",
        \"glob\": \"^7.0.3\",
        \"lodash\": \"^4.17.15\",
        \"meow\": \"^9.0.0\",
        \"nan\": \"^2.13.2\",
        \"node-gyp\": \"^7.1.0\",
        \"npmlog\": \"^4.0.0\",
        \"request\": \"^2.88.0\",
        \"sass-graph\": \"2.2.5\",
        \"stdout-stream\": \"^1.4.0\",
        \"true-case-path\": \"^1.0.2\"
      },
      \"dependencies\": {
        \"ansi-styles\": {
          \"version\": \"2.2.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
          \"integrity\": \"sha512-kmCevFghRiWM7HB5zTPULl4r9bVFSWjz62MhqizDGUrq2NWuNMQyuv4tHHoKJHs69M/MF64lEcHdYIocrdWQYA==\",
          \"dev\": true
        },
        \"chalk\": {
          \"version\": \"1.1.3\",
          \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-1.1.3.tgz\",
          \"integrity\": \"sha512-U3lRVLMSlsCfjqYPbLyVv11M9CPW4I728d6TCKMAOJueEeB9/8o+eSsMnxPJD+Q+K909sdESg7C+tIkoH6on1A==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-styles\": \"^2.2.1\",
            \"escape-string-regexp\": \"^1.0.2\",
            \"has-ansi\": \"^2.0.0\",
            \"strip-ansi\": \"^3.0.0\",
            \"supports-color\": \"^2.0.0\"
          }
        },
        \"strip-ansi\": {
          \"version\": \"3.0.1\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-3.0.1.tgz\",
          \"integrity\": \"sha512-VhumSSbBqDTP8p2ZLKj40UjBCV4+v8bUSEpUb4KjRgWk9pbqGF4REFj6KEagidb2f/M6AzC0EmFyDNGaw9OCzg==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^2.0.0\"
          }
        },
        \"supports-color\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-2.0.0.tgz\",
          \"integrity\": \"sha512-KKNVtd6pCYgPIKU4cp2733HWYCpplQhddZLBUryaAHou723x+FRzQ5Df824Fj+IyyuiQTRoub4SnIFfIcrp70g==\",
          \"dev\": true
        }
      }
    },
    \"nodent-runtime\": {
      \"version\": \"3.2.1\",
      \"resolved\": \"https://registry.npmjs.org/nodent-runtime/-/nodent-runtime-3.2.1.tgz\",
      \"integrity\": \"sha512-7Ws63oC+215smeKJQCxzrK21VFVlCFBkwl0MOObt0HOpVQXs3u483sAmtkF33nNqZ5rSOQjB76fgyPBmAUrtCA==\",
      \"dev\": true
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
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/normalize-package-data/-/normalize-package-data-3.0.3.tgz\",
      \"integrity\": \"sha512-p2W1sgqij3zMMyRC067Dg16bfzVH+w7hyegmpIvZ4JNjqtGOVAIvLmjBx3yP7YTe9vKJgkoNOPjwQGogDoMXFA==\",
      \"dev\": true,
      \"requires\": {
        \"hosted-git-info\": \"^4.0.1\",
        \"is-core-module\": \"^2.5.0\",
        \"semver\": \"^7.3.4\",
        \"validate-npm-package-license\": \"^3.0.1\"
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
        },
        \"semver\": {
          \"version\": \"7.5.4\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.5.4.tgz\",
          \"integrity\": \"sha512-1bCSESV6Pv+i21Hvpxp3Dx+pSD8lIPt8uVjRrxAUt/nbswYc+tK6Y2btiULjd4+fnq15PX+nqQDC7Oft7WkwcA==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        }
      }
    },
    \"normalize-path\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
      \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
      \"dev\": true
    },
    \"normalize-range\": {
      \"version\": \"0.1.2\",
      \"resolved\": \"https://registry.npmjs.org/normalize-range/-/normalize-range-0.1.2.tgz\",
      \"integrity\": \"sha1-LRDAa9/TEuqXd2laTShDlFa3WUI=\",
      \"dev\": true
    },
    \"npmlog\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/npmlog/-/npmlog-4.1.2.tgz\",
      \"integrity\": \"sha512-2uUqazuKlTaSI/dC8AzicUck7+IrEaOnN/e0jd3Xtt1KcGpwx30v50mL7oPyr/h9bL3E4aZccVwpwP+5W9Vjkg==\",
      \"dev\": true,
      \"requires\": {
        \"are-we-there-yet\": \"~1.1.2\",
        \"console-control-strings\": \"~1.1.0\",
        \"gauge\": \"~2.7.3\",
        \"set-blocking\": \"~2.0.0\"
      }
    },
    \"num2fraction\": {
      \"version\": \"1.2.2\",
      \"resolved\": \"https://registry.npmjs.org/num2fraction/-/num2fraction-1.2.2.tgz\",
      \"integrity\": \"sha1-b2gragJ6Tp3fpFZM0lidHU5mnt4=\",
      \"dev\": true
    },
    \"number-is-nan\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/number-is-nan/-/number-is-nan-1.0.1.tgz\",
      \"integrity\": \"sha512-4jbtZXNAsfZbAHiiqjLPBiCl16dES1zI4Hpzzxw61Tk+loF+sBDBKx1ICKKKwIqQ7M0mFn1TmkN7euSncWgHiQ==\",
      \"dev\": true
    },
    \"nwsapi\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/nwsapi/-/nwsapi-2.2.0.tgz\",
      \"integrity\": \"sha512-h2AatdwYH+JHiZpv7pt/gSX1XoRGb7L/qSIeuqA6GwYoF9w1vP1cw42TO0aI2pNyshRK5893hNSl+1//vHK7hQ==\",
      \"dev\": true
    },
    \"oauth-sign\": {
      \"version\": \"0.9.0\",
      \"resolved\": \"https://registry.npmjs.org/oauth-sign/-/oauth-sign-0.9.0.tgz\",
      \"integrity\": \"sha512-fexhUFFPTGV8ybAtSIGbV6gOkSv8UtRbDBnAyLQw4QPKkgNlsH2ByPGtMUqdWkos6YCRmAqViwgZrJc/mRDzZQ==\",
      \"dev\": true
    },
    \"object-assign\": {
      \"version\": \"4.1.1\",
      \"resolved\": \"https://registry.npmjs.org/object-assign/-/object-assign-4.1.1.tgz\",
      \"integrity\": \"sha1-IQmtx5ZYh8/AXLvUQsrIv7s2CGM=\",
      \"dev\": true
    },
    \"object-copy\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/object-copy/-/object-copy-0.1.0.tgz\",
      \"integrity\": \"sha1-fn2Fi3gb18mRpBupde04EnVOmYw=\",
      \"dev\": true,
      \"requires\": {
        \"copy-descriptor\": \"^0.1.0\",
        \"define-property\": \"^0.2.5\",
        \"kind-of\": \"^3.0.3\"
      },
      \"dependencies\": {
        \"kind-of\": {
          \"version\": \"3.2.2\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
          \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
          \"dev\": true,
          \"requires\": {
            \"is-buffer\": \"^1.1.5\"
          }
        }
      }
    },
    \"object-inspect\": {
      \"version\": \"1.11.0\",
      \"resolved\": \"https://registry.npmjs.org/object-inspect/-/object-inspect-1.11.0.tgz\",
      \"integrity\": \"sha512-jp7ikS6Sd3GxQfZJPyH3cjcbJF6GZPClgdV+EFygjFLQ5FmW/dRUnTd9PQ9k0JhoNDabWFbpF1yCdSWCC6gexg==\",
      \"dev\": true
    },
    \"object-keys\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/object-keys/-/object-keys-1.1.1.tgz\",
      \"integrity\": \"sha512-NuAESUOUMrlIXOfHKzD6bpPu3tYt3xvjNdRIQ+FeT0lNb4K8WR70CaDxhuNguS2XG+GjkyMwOzsN5ZktImfhLA==\",
      \"dev\": true
    },
    \"object-visit\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/object-visit/-/object-visit-1.0.1.tgz\",
      \"integrity\": \"sha1-95xEk68MU3e1n+OdOV5BBC3QRbs=\",
      \"dev\": true,
      \"requires\": {
        \"isobject\": \"^3.0.0\"
      }
    },
    \"object.assign\": {
      \"version\": \"4.1.2\",
      \"resolved\": \"https://registry.npmjs.org/object.assign/-/object.assign-4.1.2.tgz\",
      \"integrity\": \"sha512-ixT2L5THXsApyiUPYKmW+2EHpXXe5Ii3M+f4e+aJFAHao5amFRW6J0OO6c/LU8Be47utCx2GL89hxGB6XSmKuQ==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.0\",
        \"define-properties\": \"^1.1.3\",
        \"has-symbols\": \"^1.0.1\",
        \"object-keys\": \"^1.1.1\"
      }
    },
    \"object.entries\": {
      \"version\": \"1.1.6\",
      \"resolved\": \"https://registry.npmjs.org/object.entries/-/object.entries-1.1.6.tgz\",
      \"integrity\": \"sha512-leTPzo4Zvg3pmbQ3rDK69Rl8GQvIqMWubrkxONG9/ojtFE2rD9fjMKfSI5BxW3osRH1m6VdzmqK8oAY9aT4x5w==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.4\",
        \"es-abstract\": \"^1.20.4\"
      },
      \"dependencies\": {
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
        \"has-bigints\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/has-bigints/-/has-bigints-1.0.2.tgz\",
          \"integrity\": \"sha512-tSvCKtBr9lkF0Ex0aQiP9N+OpV4zi2r/Nee5VkRDbaqv35RLYMzbwQfFSZZH0kR+Rd6302UJZ2p/bJCEoR3VoQ==\",
          \"dev\": true
        },
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
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
        \"is-callable\": {
          \"version\": \"1.2.7\",
          \"resolved\": \"https://registry.npmjs.org/is-callable/-/is-callable-1.2.7.tgz\",
          \"integrity\": \"sha512-1BC0BVFhS/p0qtw6enp8e+8OD0UrK0oFLztSjNzhcKA3WDuJxxAPXzPuPtKkjEY9UUoEWlX/8fgKeu2S8i9JTA==\",
          \"dev\": true
        },
        \"is-negative-zero\": {
          \"version\": \"2.0.2\",
          \"resolved\": \"https://registry.npmjs.org/is-negative-zero/-/is-negative-zero-2.0.2.tgz\",
          \"integrity\": \"sha512-dqJvarLawXsFbNDeJW7zAz8ItJ9cd28YufuuFzh0G8pNHjJMnY08Dv7sYX2uF5UpQOwieAeOExEYAWWfu7ZZUA==\",
          \"dev\": true
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
        \"is-weakref\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/is-weakref/-/is-weakref-1.0.2.tgz\",
          \"integrity\": \"sha512-qctsuLZmIQ0+vSSMfoVvyFe2+GSEvnmZ2ezTup1SBse9+twCCeial6EEi3Nc2KFcf6+qz2FBPnjXsk8xhKSaPQ==\",
          \"dev\": true,
          \"requires\": {
            \"call-bind\": \"^1.0.2\"
          }
        },
        \"object-inspect\": {
          \"version\": \"1.12.3\",
          \"resolved\": \"https://registry.npmjs.org/object-inspect/-/object-inspect-1.12.3.tgz\",
          \"integrity\": \"sha512-geUvdk7c+eizMNUDkRpW1wJwgfOiOeHbxBR/hLXK1aT6zmVSO0jsQcs7fj6MGw89jC/cjGfLcNOrtMYtGqm81g==\",
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
        }
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
    \"object.pick\": {
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/object.pick/-/object.pick-1.3.0.tgz\",
      \"integrity\": \"sha1-h6EKxMFpS9Lhy/U1kaZhQftd10c=\",
      \"dev\": true,
      \"requires\": {
        \"isobject\": \"^3.0.1\"
      }
    },
    \"object.values\": {
      \"version\": \"1.1.5\",
      \"resolved\": \"https://registry.npmjs.org/object.values/-/object.values-1.1.5.tgz\",
      \"integrity\": \"sha512-QUZRW0ilQ3PnPpbNtgdNV1PDbEqLIiSFB3l+EnGtBQ/8SUTLj1PZwtQHABZtLgwpJZTSZhuGLOGk57Drx2IvYg==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\",
        \"es-abstract\": \"^1.19.1\"
      }
    },
    \"once\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
      \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
      \"requires\": {
        \"wrappy\": \"1\"
      }
    },
    \"optimism\": {
      \"version\": \"0.10.3\",
      \"resolved\": \"https://registry.npmjs.org/optimism/-/optimism-0.10.3.tgz\",
      \"integrity\": \"sha512-9A5pqGoQk49H6Vhjb9kPgAeeECfUDF6aIICbMDL23kDLStBn1MWk3YvcZ4xWF9CsSf6XEgvRLkXy4xof/56vVw==\",
      \"requires\": {
        \"@wry/context\": \"^0.4.0\"
      }
    },
    \"optionator\": {
      \"version\": \"0.8.3\",
      \"resolved\": \"https://registry.npmjs.org/optionator/-/optionator-0.8.3.tgz\",
      \"integrity\": \"sha512-+IW9pACdk3XWmmTXG8m3upGUJst5XRGzxMRjXzAuJ1XnIFNvfhjjIuYkDvysnPQ7qzqVzLt78BCruntqRhWQbA==\",
      \"dev\": true,
      \"requires\": {
        \"deep-is\": \"~0.1.3\",
        \"fast-levenshtein\": \"~2.0.6\",
        \"levn\": \"~0.3.0\",
        \"prelude-ls\": \"~1.1.2\",
        \"type-check\": \"~0.3.2\",
        \"word-wrap\": \"~1.2.3\"
      }
    },
    \"os-browserify\": {
      \"version\": \"0.3.0\",
      \"resolved\": \"https://registry.npmjs.org/os-browserify/-/os-browserify-0.3.0.tgz\",
      \"integrity\": \"sha1-hUNzx/XCMVkU/Jv8a9gjj92h7Cc=\",
      \"dev\": true
    },
    \"os-homedir\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/os-homedir/-/os-homedir-1.0.2.tgz\",
      \"integrity\": \"sha1-/7xJiDNuDoM94MFox+8VISGqf7M=\",
      \"dev\": true
    },
    \"os-tmpdir\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/os-tmpdir/-/os-tmpdir-1.0.2.tgz\",
      \"integrity\": \"sha1-u+Z0BseaqFxc/sdm/lc0VV36EnQ=\",
      \"dev\": true
    },
    \"p-cancelable\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/p-cancelable/-/p-cancelable-2.1.1.tgz\",
      \"integrity\": \"sha512-BZOr3nRQHOntUjTrH8+Lh54smKHoHyur8We1V8DSMVrl5A2malOOwuJRnKRDjSnkoeBh4at6BwEnb5I7Jl31wg==\"
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
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
      \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
      \"dev\": true
    },
    \"pako\": {
      \"version\": \"1.0.11\",
      \"resolved\": \"https://registry.npmjs.org/pako/-/pako-1.0.11.tgz\",
      \"integrity\": \"sha512-4hLB8Py4zZce5s4yd9XzopqwVv/yGNhV1Bl8NTmCq1763HeK2+EwVTv+leGeL13Dnh2wfbqowVPXCIO0z4taYw==\",
      \"dev\": true
    },
    \"parallel-transform\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/parallel-transform/-/parallel-transform-1.2.0.tgz\",
      \"integrity\": \"sha512-P2vSmIu38uIlvdcU7fDkyrxj33gTUy/ABO5ZUbGowxNCopBq/OoD42bP4UmMrJoPyk4Uqf0mu3mtWBhHCZD8yg==\",
      \"dev\": true,
      \"requires\": {
        \"cyclist\": \"^1.0.1\",
        \"inherits\": \"^2.0.3\",
        \"readable-stream\": \"^2.1.5\"
      }
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
    \"parse-asn1\": {
      \"version\": \"5.1.6\",
      \"resolved\": \"https://registry.npmjs.org/parse-asn1/-/parse-asn1-5.1.6.tgz\",
      \"integrity\": \"sha512-RnZRo1EPU6JBnra2vGHj0yhp6ebyjBZpmUCLHWiFhxlzvBCCpAuZ7elsBp1PVAbQN0/04VD/19rfzlBSwLstMw==\",
      \"dev\": true,
      \"requires\": {
        \"asn1.js\": \"^5.2.0\",
        \"browserify-aes\": \"^1.0.0\",
        \"evp_bytestokey\": \"^1.0.0\",
        \"pbkdf2\": \"^3.0.3\",
        \"safe-buffer\": \"^5.1.1\"
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
    \"parse5\": {
      \"version\": \"6.0.1\",
      \"resolved\": \"https://registry.npmjs.org/parse5/-/parse5-6.0.1.tgz\",
      \"integrity\": \"sha512-Ofn/CTFzRGTTxwpNEs9PP93gXShHcTq255nzRYSKe8AkVpZY7e1fpmTfOyoIvjP5HG7Z2ZM7VS9PPhQGW2pOpw==\",
      \"dev\": true
    },
    \"pascalcase\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/pascalcase/-/pascalcase-0.1.1.tgz\",
      \"integrity\": \"sha1-s2PlXoAGym/iF4TS2yK9FdeRfxQ=\",
      \"dev\": true
    },
    \"path\": {
      \"version\": \"0.12.7\",
      \"resolved\": \"https://registry.npmjs.org/path/-/path-0.12.7.tgz\",
      \"integrity\": \"sha1-1NwqUGxM4hl+tIHr/NWzbAFAsQ8=\",
      \"dev\": true,
      \"requires\": {
        \"process\": \"^0.11.1\",
        \"util\": \"^0.10.3\"
      }
    },
    \"path-browserify\": {
      \"version\": \"0.0.1\",
      \"resolved\": \"https://registry.npmjs.org/path-browserify/-/path-browserify-0.0.1.tgz\",
      \"integrity\": \"sha512-BapA40NHICOS+USX9SN4tyhq+A2RrN/Ws5F0Z5aMHDp98Fl86lX8Oti8B7uN93L4Ifv4fHOEA+pQw87gmMO/lQ==\",
      \"dev\": true
    },
    \"path-dirname\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/path-dirname/-/path-dirname-1.0.2.tgz\",
      \"integrity\": \"sha512-ALzNPpyNq9AqXMBjeymIjFDAkAFH06mHJH/cSBHAgU0s4vfpBn6b2nf8tiRLvagKD8RbTpq2FKTBg7cl9l3c7Q==\",
      \"dev\": true,
      \"optional\": true
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
    \"path-type\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/path-type/-/path-type-4.0.0.tgz\",
      \"integrity\": \"sha512-gDKb8aZMDeD/tZWs9P6+q0J9Mwkdl6xMV8TjnGP3qJVJ06bdMgkbBlLU8IdfOsIsFz2BW1rNVT3XuNEl8zPAvw==\",
      \"dev\": true
    },
    \"pathval\": {
      \"version\": \"1.1.1\",
      \"resolved\": \"https://registry.npmjs.org/pathval/-/pathval-1.1.1.tgz\",
      \"integrity\": \"sha512-Dp6zGqpTdETdR63lehJYPeIOqpiNBNtc7BpWSLrOje7UaIsE5aY92r/AunQA7rsXvet3lrJ3JnZX29UPTKXyKQ==\",
      \"dev\": true
    },
    \"pbkdf2\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/pbkdf2/-/pbkdf2-3.1.2.tgz\",
      \"integrity\": \"sha512-iuh7L6jA7JEGu2WxDwtQP1ddOpaJNC4KlDEFfdQajSGgGPNi4OyDc2R7QnbY2bR9QjBVGwgvTdNJZoE7RaxUMA==\",
      \"dev\": true,
      \"requires\": {
        \"create-hash\": \"^1.1.2\",
        \"create-hmac\": \"^1.1.4\",
        \"ripemd160\": \"^2.0.1\",
        \"safe-buffer\": \"^5.0.1\",
        \"sha.js\": \"^2.4.8\"
      }
    },
    \"performance-now\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/performance-now/-/performance-now-2.1.0.tgz\",
      \"integrity\": \"sha512-7EAHlyLHI56VEIdK57uwHdHKIaAGbnXPiw0yWbarQZOKaKpvUIgW0jWRVLiatnM+XXlSwsanIBH/hzGMJulMow==\",
      \"dev\": true
    },
    \"picocolors\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-0.2.1.tgz\",
      \"integrity\": \"sha512-cMlDqaLEqfSaW8Z7N5Jw+lyIW869EzT73/F5lhtY9cLGoVxSXznfgfXMO0Z5K0o0Q2TkTXq+0KFsdnSe3jDViA==\",
      \"dev\": true
    },
    \"picomatch\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/picomatch/-/picomatch-2.3.0.tgz\",
      \"integrity\": \"sha512-lY1Q/PiJGC2zOv/z391WOTD+Z02bCgsFfvxoXXf6h7kv9o+WmsmzYqrAwY63sNgOxE4xEdq0WyUnXfKeBrSvYw==\",
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
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-2.0.0.tgz\",
      \"integrity\": \"sha1-9tXREJ4Z1j7fQo4L1X4Sd3YVM0s=\",
      \"dev\": true,
      \"requires\": {
        \"find-up\": \"^2.1.0\"
      },
      \"dependencies\": {
        \"find-up\": {
          \"version\": \"2.1.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-2.1.0.tgz\",
          \"integrity\": \"sha1-RdG35QbHF93UgndaK3eSCjwMV6c=\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^2.0.0\"
          }
        },
        \"locate-path\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/locate-path/-/locate-path-2.0.0.tgz\",
          \"integrity\": \"sha1-K1aLJl7slExtnA3pw9u7ygNUzY4=\",
          \"dev\": true,
          \"requires\": {
            \"p-locate\": \"^2.0.0\",
            \"path-exists\": \"^3.0.0\"
          }
        },
        \"p-limit\": {
          \"version\": \"1.3.0\",
          \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-1.3.0.tgz\",
          \"integrity\": \"sha512-vvcXsLAJ9Dr5rQOPk7toZQZJApBl2K4J6dANSsEuh6QI41JYcsS/qhTGa9ErIUUgK3WNQoJYvylxvjqmiqEA9Q==\",
          \"dev\": true,
          \"requires\": {
            \"p-try\": \"^1.0.0\"
          }
        },
        \"p-locate\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-2.0.0.tgz\",
          \"integrity\": \"sha1-IKAQOyIqcMj9OcwuWAaA893l7EM=\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^1.1.0\"
          }
        },
        \"p-try\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-1.0.0.tgz\",
          \"integrity\": \"sha1-y8ec26+P1CKOE/Yh8rGiN8GyB7M=\",
          \"dev\": true
        }
      }
    },
    \"posix-character-classes\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/posix-character-classes/-/posix-character-classes-0.1.1.tgz\",
      \"integrity\": \"sha1-AerA/jta9xoqbAL+q7jB/vfgDqs=\",
      \"dev\": true
    },
    \"postcss\": {
      \"version\": \"7.0.39\",
      \"resolved\": \"https://registry.npmjs.org/postcss/-/postcss-7.0.39.tgz\",
      \"integrity\": \"sha512-yioayjNbHn6z1/Bywyb2Y4s3yvDAeXGOyxqD+LnVOinq6Mdmd++SW2wUNVzavyyHxd6+DxzWGIuosg6P1Rj8uA==\",
      \"dev\": true,
      \"requires\": {
        \"picocolors\": \"^0.2.1\",
        \"source-map\": \"^0.6.1\"
      }
    },
    \"postcss-attribute-case-insensitive\": {
      \"version\": \"4.0.2\",
      \"resolved\": \"https://registry.npmjs.org/postcss-attribute-case-insensitive/-/postcss-attribute-case-insensitive-4.0.2.tgz\",
      \"integrity\": \"sha512-clkFxk/9pcdb4Vkn0hAHq3YnxBQ2p0CGD1dy24jN+reBck+EWxMbxSUqN4Yj7t0w8csl87K6p0gxBe1utkJsYA==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-selector-parser\": \"^6.0.2\"
      },
      \"dependencies\": {
        \"postcss-selector-parser\": {
          \"version\": \"6.0.6\",
          \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-6.0.6.tgz\",
          \"integrity\": \"sha512-9LXrvaaX3+mcv5xkg5kFwqSzSH1JIObIx51PrndZwlmznwXRfxMddDvo9gve3gVR8ZTKgoFDdWkbRFmEhT4PMg==\",
          \"dev\": true,
          \"requires\": {
            \"cssesc\": \"^3.0.0\",
            \"util-deprecate\": \"^1.0.2\"
          }
        }
      }
    },
    \"postcss-color-functional-notation\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-color-functional-notation/-/postcss-color-functional-notation-2.0.1.tgz\",
      \"integrity\": \"sha512-ZBARCypjEDofW4P6IdPVTLhDNXPRn8T2s1zHbZidW6rPaaZvcnCS2soYFIQJrMZSxiePJ2XIYTlcb2ztr/eT2g==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-color-gray\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-color-gray/-/postcss-color-gray-5.0.0.tgz\",
      \"integrity\": \"sha512-q6BuRnAGKM/ZRpfDascZlIZPjvwsRye7UDNalqVz3s7GDxMtqPY6+Q871liNxsonUw8oC61OG+PSaysYpl1bnw==\",
      \"dev\": true,
      \"requires\": {
        \"@csstools/convert-colors\": \"^1.4.0\",
        \"postcss\": \"^7.0.5\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-color-hex-alpha\": {
      \"version\": \"5.0.3\",
      \"resolved\": \"https://registry.npmjs.org/postcss-color-hex-alpha/-/postcss-color-hex-alpha-5.0.3.tgz\",
      \"integrity\": \"sha512-PF4GDel8q3kkreVXKLAGNpHKilXsZ6xuu+mOQMHWHLPNyjiUBOr75sp5ZKJfmv1MCus5/DWUGcK9hm6qHEnXYw==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.14\",
        \"postcss-values-parser\": \"^2.0.1\"
      }
    },
    \"postcss-color-mod-function\": {
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/postcss-color-mod-function/-/postcss-color-mod-function-3.0.3.tgz\",
      \"integrity\": \"sha512-YP4VG+xufxaVtzV6ZmhEtc+/aTXH3d0JLpnYfxqTvwZPbJhWqp8bSY3nfNzNRFLgB4XSaBA82OE4VjOOKpCdVQ==\",
      \"dev\": true,
      \"requires\": {
        \"@csstools/convert-colors\": \"^1.4.0\",
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-color-rebeccapurple\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-color-rebeccapurple/-/postcss-color-rebeccapurple-4.0.1.tgz\",
      \"integrity\": \"sha512-aAe3OhkS6qJXBbqzvZth2Au4V3KieR5sRQ4ptb2b2O8wgvB3SJBsdG+jsn2BZbbwekDG8nTfcCNKcSfe/lEy8g==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-custom-media\": {
      \"version\": \"7.0.8\",
      \"resolved\": \"https://registry.npmjs.org/postcss-custom-media/-/postcss-custom-media-7.0.8.tgz\",
      \"integrity\": \"sha512-c9s5iX0Ge15o00HKbuRuTqNndsJUbaXdiNsksnVH8H4gdc+zbLzr/UasOwNG6CTDpLFekVY4672eWdiiWu2GUg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.14\"
      }
    },
    \"postcss-custom-properties\": {
      \"version\": \"8.0.11\",
      \"resolved\": \"https://registry.npmjs.org/postcss-custom-properties/-/postcss-custom-properties-8.0.11.tgz\",
      \"integrity\": \"sha512-nm+o0eLdYqdnJ5abAJeXp4CEU1c1k+eB2yMCvhgzsds/e0umabFrN6HoTy/8Q4K5ilxERdl/JD1LO5ANoYBeMA==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.17\",
        \"postcss-values-parser\": \"^2.0.1\"
      }
    },
    \"postcss-custom-selectors\": {
      \"version\": \"5.1.2\",
      \"resolved\": \"https://registry.npmjs.org/postcss-custom-selectors/-/postcss-custom-selectors-5.1.2.tgz\",
      \"integrity\": \"sha512-DSGDhqinCqXqlS4R7KGxL1OSycd1lydugJ1ky4iRXPHdBRiozyMHrdu0H3o7qNOCiZwySZTUI5MV0T8QhCLu+w==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-selector-parser\": \"^5.0.0-rc.3\"
      }
    },
    \"postcss-dir-pseudo-class\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-dir-pseudo-class/-/postcss-dir-pseudo-class-5.0.0.tgz\",
      \"integrity\": \"sha512-3pm4oq8HYWMZePJY+5ANriPs3P07q+LW6FAdTlkFH2XqDdP4HeeJYMOzn0HYLhRSjBO3fhiqSwwU9xEULSrPgw==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-selector-parser\": \"^5.0.0-rc.3\"
      }
    },
    \"postcss-double-position-gradients\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-double-position-gradients/-/postcss-double-position-gradients-1.0.0.tgz\",
      \"integrity\": \"sha512-G+nV8EnQq25fOI8CH/B6krEohGWnF5+3A6H/+JEpOncu5dCnkS1QQ6+ct3Jkaepw1NGVqqOZH6lqrm244mCftA==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.5\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-env-function\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/postcss-env-function/-/postcss-env-function-2.0.2.tgz\",
      \"integrity\": \"sha512-rwac4BuZlITeUbiBq60h/xbLzXY43qOsIErngWa4l7Mt+RaSkT7QBjXVGTcBHupykkblHMDrBFh30zchYPaOUw==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-focus-visible\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-focus-visible/-/postcss-focus-visible-4.0.0.tgz\",
      \"integrity\": \"sha512-Z5CkWBw0+idJHSV6+Bgf2peDOFf/x4o+vX/pwcNYrWpXFrSfTkQ3JQ1ojrq9yS+upnAlNRHeg8uEwFTgorjI8g==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-focus-within\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-focus-within/-/postcss-focus-within-3.0.0.tgz\",
      \"integrity\": \"sha512-W0APui8jQeBKbCGZudW37EeMCjDeVxKgiYfIIEo8Bdh5SpB9sxds/Iq8SEuzS0Q4YFOlG7EPFulbbxujpkrV2w==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-font-variant\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-font-variant/-/postcss-font-variant-4.0.1.tgz\",
      \"integrity\": \"sha512-I3ADQSTNtLTTd8uxZhtSOrTCQ9G4qUVKPjHiDk0bV75QSxXjVWiJVJ2VLdspGUi9fbW9BcjKJoRvxAH1pckqmA==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-gap-properties\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-gap-properties/-/postcss-gap-properties-2.0.0.tgz\",
      \"integrity\": \"sha512-QZSqDaMgXCHuHTEzMsS2KfVDOq7ZFiknSpkrPJY6jmxbugUPTuSzs/vuE5I3zv0WAS+3vhrlqhijiprnuQfzmg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-image-set-function\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-image-set-function/-/postcss-image-set-function-3.0.1.tgz\",
      \"integrity\": \"sha512-oPTcFFip5LZy8Y/whto91L9xdRHCWEMs3e1MdJxhgt4jy2WYXfhkng59fH5qLXSCPN8k4n94p1Czrfe5IOkKUw==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-initial\": {
      \"version\": \"3.0.4\",
      \"resolved\": \"https://registry.npmjs.org/postcss-initial/-/postcss-initial-3.0.4.tgz\",
      \"integrity\": \"sha512-3RLn6DIpMsK1l5UUy9jxQvoDeUN4gP939tDcKUHD/kM8SGSKbFAnvkpFpj3Bhtz3HGk1jWY5ZNWX6mPta5M9fg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-lab-function\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-lab-function/-/postcss-lab-function-2.0.1.tgz\",
      \"integrity\": \"sha512-whLy1IeZKY+3fYdqQFuDBf8Auw+qFuVnChWjmxm/UhHWqNHZx+B99EwxTvGYmUBqe3Fjxs4L1BoZTJmPu6usVg==\",
      \"dev\": true,
      \"requires\": {
        \"@csstools/convert-colors\": \"^1.4.0\",
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-load-config\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/postcss-load-config/-/postcss-load-config-2.1.2.tgz\",
      \"integrity\": \"sha512-/rDeGV6vMUo3mwJZmeHfEDvwnTKKqQ0S7OHUi/kJvvtx3aWtyWG2/0ZWnzCt2keEclwN6Tf0DST2v9kITdOKYw==\",
      \"dev\": true,
      \"requires\": {
        \"cosmiconfig\": \"^5.0.0\",
        \"import-cwd\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"cosmiconfig\": {
          \"version\": \"5.2.1\",
          \"resolved\": \"https://registry.npmjs.org/cosmiconfig/-/cosmiconfig-5.2.1.tgz\",
          \"integrity\": \"sha512-H65gsXo1SKjf8zmrJ67eJk8aIRKV5ff2D4uKZIBZShbhGSpEmsQOPW/SKMKYhSTrqR7ufy6RP69rPogdaPh/kA==\",
          \"dev\": true,
          \"requires\": {
            \"import-fresh\": \"^2.0.0\",
            \"is-directory\": \"^0.3.1\",
            \"js-yaml\": \"^3.13.1\",
            \"parse-json\": \"^4.0.0\"
          }
        },
        \"import-fresh\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/import-fresh/-/import-fresh-2.0.0.tgz\",
          \"integrity\": \"sha1-2BNVwVYS04bGH53dOSLUMEgipUY=\",
          \"dev\": true,
          \"requires\": {
            \"caller-path\": \"^2.0.0\",
            \"resolve-from\": \"^3.0.0\"
          }
        },
        \"parse-json\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/parse-json/-/parse-json-4.0.0.tgz\",
          \"integrity\": \"sha1-vjX1Qlvh9/bHRxhPmKeIy5lHfuA=\",
          \"dev\": true,
          \"requires\": {
            \"error-ex\": \"^1.3.1\",
            \"json-parse-better-errors\": \"^1.0.1\"
          }
        }
      }
    },
    \"postcss-loader\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-loader/-/postcss-loader-3.0.0.tgz\",
      \"integrity\": \"sha512-cLWoDEY5OwHcAjDnkyRQzAXfs2jrKjXpO/HQFcc5b5u/r7aa471wdmChmwfnv7x2u840iat/wi0lQ5nbRgSkUA==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^1.1.0\",
        \"postcss\": \"^7.0.0\",
        \"postcss-load-config\": \"^2.0.0\",
        \"schema-utils\": \"^1.0.0\"
      }
    },
    \"postcss-logical\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-logical/-/postcss-logical-3.0.0.tgz\",
      \"integrity\": \"sha512-1SUKdJc2vuMOmeItqGuNaC+N8MzBWFWEkAnRnLpFYj1tGGa7NqyVBujfRtgNa2gXR+6RkGUiB2O5Vmh7E2RmiA==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-media-minmax\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-media-minmax/-/postcss-media-minmax-4.0.0.tgz\",
      \"integrity\": \"sha512-fo9moya6qyxsjbFAYl97qKO9gyre3qvbMnkOZeZwlsW6XYFsvs2DMGDlchVLfAd8LHPZDxivu/+qW2SMQeTHBw==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-modules-extract-imports\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-extract-imports/-/postcss-modules-extract-imports-2.0.0.tgz\",
      \"integrity\": \"sha512-LaYLDNS4SG8Q5WAWqIJgdHPJrDDr/Lv775rMBFUbgjTz6j34lUznACHcdRWroPvXANP2Vj7yNK57vp9eFqzLWQ==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.5\"
      }
    },
    \"postcss-modules-local-by-default\": {
      \"version\": \"3.0.3\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-local-by-default/-/postcss-modules-local-by-default-3.0.3.tgz\",
      \"integrity\": \"sha512-e3xDq+LotiGesympRlKNgaJ0PCzoUIdpH0dj47iWAui/kyTgh3CiAr1qP54uodmJhl6p9rN6BoNcdEDVJx9RDw==\",
      \"dev\": true,
      \"requires\": {
        \"icss-utils\": \"^4.1.1\",
        \"postcss\": \"^7.0.32\",
        \"postcss-selector-parser\": \"^6.0.2\",
        \"postcss-value-parser\": \"^4.1.0\"
      },
      \"dependencies\": {
        \"postcss-selector-parser\": {
          \"version\": \"6.0.6\",
          \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-6.0.6.tgz\",
          \"integrity\": \"sha512-9LXrvaaX3+mcv5xkg5kFwqSzSH1JIObIx51PrndZwlmznwXRfxMddDvo9gve3gVR8ZTKgoFDdWkbRFmEhT4PMg==\",
          \"dev\": true,
          \"requires\": {
            \"cssesc\": \"^3.0.0\",
            \"util-deprecate\": \"^1.0.2\"
          }
        }
      }
    },
    \"postcss-modules-scope\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-scope/-/postcss-modules-scope-2.2.0.tgz\",
      \"integrity\": \"sha512-YyEgsTMRpNd+HmyC7H/mh3y+MeFWevy7V1evVhJWewmMbjDHIbZbOXICC2y+m1xI1UVfIT1HMW/O04Hxyu9oXQ==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.6\",
        \"postcss-selector-parser\": \"^6.0.0\"
      },
      \"dependencies\": {
        \"postcss-selector-parser\": {
          \"version\": \"6.0.6\",
          \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-6.0.6.tgz\",
          \"integrity\": \"sha512-9LXrvaaX3+mcv5xkg5kFwqSzSH1JIObIx51PrndZwlmznwXRfxMddDvo9gve3gVR8ZTKgoFDdWkbRFmEhT4PMg==\",
          \"dev\": true,
          \"requires\": {
            \"cssesc\": \"^3.0.0\",
            \"util-deprecate\": \"^1.0.2\"
          }
        }
      }
    },
    \"postcss-modules-values\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-modules-values/-/postcss-modules-values-3.0.0.tgz\",
      \"integrity\": \"sha512-1//E5jCBrZ9DmRX+zCtmQtRSV6PV42Ix7Bzj9GbwJceduuf7IqP8MgeTXuRDHOWj2m0VzZD5+roFWDuU8RQjcg==\",
      \"dev\": true,
      \"requires\": {
        \"icss-utils\": \"^4.0.0\",
        \"postcss\": \"^7.0.6\"
      }
    },
    \"postcss-nesting\": {
      \"version\": \"7.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-nesting/-/postcss-nesting-7.0.1.tgz\",
      \"integrity\": \"sha512-FrorPb0H3nuVq0Sff7W2rnc3SmIcruVC6YwpcS+k687VxyxO33iE1amna7wHuRVzM8vfiYofXSBHNAZ3QhLvYg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-overflow-shorthand\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-overflow-shorthand/-/postcss-overflow-shorthand-2.0.0.tgz\",
      \"integrity\": \"sha512-aK0fHc9CBNx8jbzMYhshZcEv8LtYnBIRYQD5i7w/K/wS9c2+0NSR6B3OVMu5y0hBHYLcMGjfU+dmWYNKH0I85g==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-page-break\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-page-break/-/postcss-page-break-2.0.0.tgz\",
      \"integrity\": \"sha512-tkpTSrLpfLfD9HvgOlJuigLuk39wVTbbd8RKcy8/ugV2bNBUW3xU+AIqyxhDrQr1VUj1RmyJrBn1YWrqUm9zAQ==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-place\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-place/-/postcss-place-4.0.1.tgz\",
      \"integrity\": \"sha512-Zb6byCSLkgRKLODj/5mQugyuj9bvAAw9LqJJjgwz5cYryGeXfFZfSXoP1UfveccFmeq0b/2xxwcTEVScnqGxBg==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-values-parser\": \"^2.0.0\"
      }
    },
    \"postcss-preset-env\": {
      \"version\": \"6.7.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-preset-env/-/postcss-preset-env-6.7.0.tgz\",
      \"integrity\": \"sha512-eU4/K5xzSFwUFJ8hTdTQzo2RBLbDVt83QZrAvI07TULOkmyQlnYlpwep+2yIK+K+0KlZO4BvFcleOCCcUtwchg==\",
      \"dev\": true,
      \"requires\": {
        \"autoprefixer\": \"^9.6.1\",
        \"browserslist\": \"^4.6.4\",
        \"caniuse-lite\": \"^1.0.30000981\",
        \"css-blank-pseudo\": \"^0.1.4\",
        \"css-has-pseudo\": \"^0.10.0\",
        \"css-prefers-color-scheme\": \"^3.1.1\",
        \"cssdb\": \"^4.4.0\",
        \"postcss\": \"^7.0.17\",
        \"postcss-attribute-case-insensitive\": \"^4.0.1\",
        \"postcss-color-functional-notation\": \"^2.0.1\",
        \"postcss-color-gray\": \"^5.0.0\",
        \"postcss-color-hex-alpha\": \"^5.0.3\",
        \"postcss-color-mod-function\": \"^3.0.3\",
        \"postcss-color-rebeccapurple\": \"^4.0.1\",
        \"postcss-custom-media\": \"^7.0.8\",
        \"postcss-custom-properties\": \"^8.0.11\",
        \"postcss-custom-selectors\": \"^5.1.2\",
        \"postcss-dir-pseudo-class\": \"^5.0.0\",
        \"postcss-double-position-gradients\": \"^1.0.0\",
        \"postcss-env-function\": \"^2.0.2\",
        \"postcss-focus-visible\": \"^4.0.0\",
        \"postcss-focus-within\": \"^3.0.0\",
        \"postcss-font-variant\": \"^4.0.0\",
        \"postcss-gap-properties\": \"^2.0.0\",
        \"postcss-image-set-function\": \"^3.0.1\",
        \"postcss-initial\": \"^3.0.0\",
        \"postcss-lab-function\": \"^2.0.1\",
        \"postcss-logical\": \"^3.0.0\",
        \"postcss-media-minmax\": \"^4.0.0\",
        \"postcss-nesting\": \"^7.0.0\",
        \"postcss-overflow-shorthand\": \"^2.0.0\",
        \"postcss-page-break\": \"^2.0.0\",
        \"postcss-place\": \"^4.0.1\",
        \"postcss-pseudo-class-any-link\": \"^6.0.0\",
        \"postcss-replace-overflow-wrap\": \"^3.0.0\",
        \"postcss-selector-matches\": \"^4.0.0\",
        \"postcss-selector-not\": \"^4.0.0\"
      }
    },
    \"postcss-pseudo-class-any-link\": {
      \"version\": \"6.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-pseudo-class-any-link/-/postcss-pseudo-class-any-link-6.0.0.tgz\",
      \"integrity\": \"sha512-lgXW9sYJdLqtmw23otOzrtbDXofUdfYzNm4PIpNE322/swES3VU9XlXHeJS46zT2onFO7V1QFdD4Q9LiZj8mew==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\",
        \"postcss-selector-parser\": \"^5.0.0-rc.3\"
      }
    },
    \"postcss-replace-overflow-wrap\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-replace-overflow-wrap/-/postcss-replace-overflow-wrap-3.0.0.tgz\",
      \"integrity\": \"sha512-2T5hcEHArDT6X9+9dVSPQdo7QHzG4XKclFT8rU5TzJPDN7RIRTbO9c4drUISOVemLj03aezStHCR2AIcr8XLpw==\",
      \"dev\": true,
      \"requires\": {
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-selector-matches\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-selector-matches/-/postcss-selector-matches-4.0.0.tgz\",
      \"integrity\": \"sha512-LgsHwQR/EsRYSqlwdGzeaPKVT0Ml7LAT6E75T8W8xLJY62CE4S/l03BWIt3jT8Taq22kXP08s2SfTSzaraoPww==\",
      \"dev\": true,
      \"requires\": {
        \"balanced-match\": \"^1.0.0\",
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-selector-not\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-selector-not/-/postcss-selector-not-4.0.1.tgz\",
      \"integrity\": \"sha512-YolvBgInEK5/79C+bdFMyzqTg6pkYqDbzZIST/PDMqa/o3qtXenD05apBG2jLgT0/BQ77d4U2UK12jWpilqMAQ==\",
      \"dev\": true,
      \"requires\": {
        \"balanced-match\": \"^1.0.0\",
        \"postcss\": \"^7.0.2\"
      }
    },
    \"postcss-selector-parser\": {
      \"version\": \"5.0.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-selector-parser/-/postcss-selector-parser-5.0.0.tgz\",
      \"integrity\": \"sha512-w+zLE5Jhg6Liz8+rQOWEAwtwkyqpfnmsinXjXg6cY7YIONZZtgvE0v2O0uhQBs0peNomOJwWRKt6JBfTdTd3OQ==\",
      \"dev\": true,
      \"requires\": {
        \"cssesc\": \"^2.0.0\",
        \"indexes-of\": \"^1.0.1\",
        \"uniq\": \"^1.0.1\"
      },
      \"dependencies\": {
        \"cssesc\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/cssesc/-/cssesc-2.0.0.tgz\",
          \"integrity\": \"sha512-MsCAG1z9lPdoO/IUMLSBWBSVxVtJ1395VGIQ+Fc2gNdkQ1hNDnQdw3YhA71WJCBW1vdwA0cAnk/DnW6bqoEUYg==\",
          \"dev\": true
        }
      }
    },
    \"postcss-value-parser\": {
      \"version\": \"4.1.0\",
      \"resolved\": \"https://registry.npmjs.org/postcss-value-parser/-/postcss-value-parser-4.1.0.tgz\",
      \"integrity\": \"sha512-97DXOFbQJhk71ne5/Mt6cOu6yxsSfM0QGQyl0L25Gca4yGWEGJaig7l7gbCX623VqTBNGLRLaVUCnNkcedlRSQ==\",
      \"dev\": true
    },
    \"postcss-values-parser\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/postcss-values-parser/-/postcss-values-parser-2.0.1.tgz\",
      \"integrity\": \"sha512-2tLuBsA6P4rYTNKCXYG/71C7j1pU6pK503suYOmn4xYrQIzW+opD+7FAFNuGSdZC/3Qfy334QbeMu7MEb8gOxg==\",
      \"dev\": true,
      \"requires\": {
        \"flatten\": \"^1.0.2\",
        \"indexes-of\": \"^1.0.1\",
        \"uniq\": \"^1.0.1\"
      }
    },
    \"prelude-ls\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/prelude-ls/-/prelude-ls-1.1.2.tgz\",
      \"integrity\": \"sha1-IZMqVJ9eUv/ZqCf1cOBL5iqX2lQ=\",
      \"dev\": true
    },
    \"prettier\": {
      \"version\": \"1.19.1\",
      \"resolved\": \"https://registry.npmjs.org/prettier/-/prettier-1.19.1.tgz\",
      \"integrity\": \"sha512-s7PoyDv/II1ObgQunCbB9PdLmUcBZcnWOcxDh7O0N/UwDEsHyqkW+Qh28jW+mVuCdx7gLB0BotYI1Y6uI9iyew==\",
      \"dev\": true,
      \"optional\": true
    },
    \"pretty\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pretty/-/pretty-2.0.0.tgz\",
      \"integrity\": \"sha1-rbx5YLe7/iiaVX3F9zdhmiINBqU=\",
      \"dev\": true,
      \"requires\": {
        \"condense-newlines\": \"^0.2.1\",
        \"extend-shallow\": \"^2.0.1\",
        \"js-beautify\": \"^1.6.12\"
      }
    },
    \"pretty-format\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/pretty-format/-/pretty-format-26.6.2.tgz\",
      \"integrity\": \"sha512-7AeGuCYNGmycyQbCqd/3PWH4eOoX/OiCa0uphp57NVTeAGdJGaAliecxwBDHYQCIvrW7aDBZCYeNTP/WX69mkg==\",
      \"dev\": true,
      \"requires\": {
        \"@jest/types\": \"^26.6.2\",
        \"ansi-regex\": \"^5.0.0\",
        \"ansi-styles\": \"^4.0.0\",
        \"react-is\": \"^17.0.1\"
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
        }
      }
    },
    \"private\": {
      \"version\": \"0.1.8\",
      \"resolved\": \"https://registry.npmjs.org/private/-/private-0.1.8.tgz\",
      \"integrity\": \"sha512-VvivMrbvd2nKkiG38qjULzlc+4Vx4wm/whI9pQD35YrARNnhxeiRktSOhSukRLFNlzg6Br/cJPet5J/u19r/mg==\",
      \"dev\": true
    },
    \"process\": {
      \"version\": \"0.11.10\",
      \"resolved\": \"https://registry.npmjs.org/process/-/process-0.11.10.tgz\",
      \"integrity\": \"sha1-czIwDoQBYb2j5podHZGn1LwW8YI=\",
      \"dev\": true
    },
    \"process-nextick-args\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/process-nextick-args/-/process-nextick-args-2.0.1.tgz\",
      \"integrity\": \"sha512-3ouUOpQhtgrbOa17J7+uxOTpITYWaGP7/AhoR3+A+/1e9skrzelGi/dXzEYyvbxubEF6Wn2ypscTKiKJFFn1ag==\",
      \"dev\": true
    },
    \"progress\": {
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/progress/-/progress-2.0.3.tgz\",
      \"integrity\": \"sha512-7PiHtLll5LdnKIMw100I+8xJXR5gW2QwWYkT6iJva0bXitZKa/XMrSbdmg3r2Xnaidz9Qumd0VPaMrZlF9V9sA==\",
      \"dev\": true
    },
    \"promise-inflight\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/promise-inflight/-/promise-inflight-1.0.1.tgz\",
      \"integrity\": \"sha1-mEcocL8igTL8vdhoEputEsPAKeM=\",
      \"dev\": true
    },
    \"proto-list\": {
      \"version\": \"1.2.4\",
      \"resolved\": \"https://registry.npmjs.org/proto-list/-/proto-list-1.2.4.tgz\",
      \"integrity\": \"sha1-IS1b/hMYMGpCD2QCuOJv85ZHqEk=\",
      \"dev\": true
    },
    \"prr\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/prr/-/prr-1.0.1.tgz\",
      \"integrity\": \"sha1-0/wRS6BplaRexok/SEzrHXj19HY=\",
      \"dev\": true
    },
    \"pseudomap\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/pseudomap/-/pseudomap-1.0.2.tgz\",
      \"integrity\": \"sha1-8FKijacOYYkX7wqKw0wa5aaChrM=\",
      \"dev\": true
    },
    \"psl\": {
      \"version\": \"1.8.0\",
      \"resolved\": \"https://registry.npmjs.org/psl/-/psl-1.8.0.tgz\",
      \"integrity\": \"sha512-RIdOzyoavK+hA18OGGWDqUTsCLhtA7IcZ/6NCs4fFJaHBDab+pDDmDIByWFRQJq2Cd7r1OoQxBGKOaztq+hjIQ==\",
      \"dev\": true
    },
    \"public-encrypt\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/public-encrypt/-/public-encrypt-4.0.3.tgz\",
      \"integrity\": \"sha512-zVpa8oKZSz5bTMTFClc1fQOnyyEzpl5ozpi1B5YcvBrdohMjH2rfsBtyXcuNuwjsDIXmBYlF2N5FlJYhR29t8Q==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.1.0\",
        \"browserify-rsa\": \"^4.0.0\",
        \"create-hash\": \"^1.1.0\",
        \"parse-asn1\": \"^5.0.0\",
        \"randombytes\": \"^2.0.1\",
        \"safe-buffer\": \"^5.1.2\"
      }
    },
    \"pump\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pump/-/pump-3.0.0.tgz\",
      \"integrity\": \"sha512-LwZy+p3SFs1Pytd/jYct4wpv49HiYCqd9Rlc5ZVdk0V+8Yzv6jR5Blk3TRmPL1ft69TxP0IMZGJ+WPFU2BFhww==\",
      \"requires\": {
        \"end-of-stream\": \"^1.1.0\",
        \"once\": \"^1.3.1\"
      }
    },
    \"pumpify\": {
      \"version\": \"1.5.1\",
      \"resolved\": \"https://registry.npmjs.org/pumpify/-/pumpify-1.5.1.tgz\",
      \"integrity\": \"sha512-oClZI37HvuUJJxSKKrC17bZ9Cu0ZYhEAGPsPUy9KlMUmv9dKX2o77RUmq7f3XjIxbwyGwYzbzQ1L2Ks8sIradQ==\",
      \"dev\": true,
      \"requires\": {
        \"duplexify\": \"^3.6.0\",
        \"inherits\": \"^2.0.3\",
        \"pump\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"pump\": {
          \"version\": \"2.0.1\",
          \"resolved\": \"https://registry.npmjs.org/pump/-/pump-2.0.1.tgz\",
          \"integrity\": \"sha512-ruPMNRkN3MHP1cWJc9OWr+T/xDP0jhXYCLfJcBuX54hhfIBnaQmAUMfDcG4DM5UMWByBbJY69QSphm3jtDKIkA==\",
          \"dev\": true,
          \"requires\": {
            \"end-of-stream\": \"^1.1.0\",
            \"once\": \"^1.3.1\"
          }
        }
      }
    },
    \"punycode\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-2.1.1.tgz\",
      \"integrity\": \"sha512-XRsRjdf+j5ml+y/6GKHPZbrF/8p2Yga0JPtdqTIY2Xe5ohJPD9saDJJLPvp9+NSBprVvevdXZybnj2cv8OEd0A==\",
      \"dev\": true
    },
    \"qs\": {
      \"version\": \"6.5.3\",
      \"resolved\": \"https://registry.npmjs.org/qs/-/qs-6.5.3.tgz\",
      \"integrity\": \"sha512-qxXIEh4pCGfHICj1mAJQ2/2XVZkjCDTcEgfoSQxc/fYivUZxTkk7L3bDBJSoNrEzXI17oUO5Dp07ktqE5KzczA==\",
      \"dev\": true
    },
    \"querystring\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/querystring/-/querystring-0.2.0.tgz\",
      \"integrity\": \"sha1-sgmEkgO7Jd+CDadW50cAWHhSFiA=\",
      \"dev\": true
    },
    \"querystring-es3\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/querystring-es3/-/querystring-es3-0.2.1.tgz\",
      \"integrity\": \"sha1-nsYfeQSYdXB9aUFFlv2Qek1xHnM=\",
      \"dev\": true
    },
    \"queue-microtask\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/queue-microtask/-/queue-microtask-1.2.3.tgz\",
      \"integrity\": \"sha512-NuaNSa6flKT5JaSYQzJok04JzTL1CA6aGhv5rfLW3PgqA+M2ChpZQnAC8h8i4ZFkBS8X5RqkDBHA7r4hej3K9A==\",
      \"dev\": true
    },
    \"quick-lru\": {
      \"version\": \"5.1.1\",
      \"resolved\": \"https://registry.npmjs.org/quick-lru/-/quick-lru-5.1.1.tgz\",
      \"integrity\": \"sha512-WuyALRjWPDGtt/wzJiadO5AXY+8hZ80hVpe6MyivgraREW751X3SbhRvG3eLKOYN+8VEvqLcf3wdnt44Z4S4SA==\"
    },
    \"randombytes\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/randombytes/-/randombytes-2.1.0.tgz\",
      \"integrity\": \"sha512-vYl3iOX+4CKUWuxGi9Ukhie6fsqXqS9FE2Zaic4tNFD2N2QQaXOMFbuKK4QmDHC0JO6B1Zp41J0LpT0oR68amQ==\",
      \"requires\": {
        \"safe-buffer\": \"^5.1.0\"
      }
    },
    \"randomfill\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/randomfill/-/randomfill-1.0.4.tgz\",
      \"integrity\": \"sha512-87lcbR8+MhcWcUiQ+9e+Rwx8MyR2P7qnt15ynUlbm3TU/fjbgz4GsvfSUDTemtCCtVCqb4ZcEFlyPNTh9bBTLw==\",
      \"dev\": true,
      \"requires\": {
        \"randombytes\": \"^2.0.5\",
        \"safe-buffer\": \"^5.1.0\"
      }
    },
    \"react-is\": {
      \"version\": \"17.0.2\",
      \"resolved\": \"https://registry.npmjs.org/react-is/-/react-is-17.0.2.tgz\",
      \"integrity\": \"sha512-w2GsyukL62IJnlaff/nRegPQR94C/XXamvMWmSHRJ4y7Ts/4ocGRmTHvOs8PSE6pB3dWOrD/nueuU5sduBsQ4w==\",
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
      },
      \"dependencies\": {
        \"safe-buffer\": {
          \"version\": \"5.1.2\",
          \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
          \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
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
        }
      }
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
    \"rechoir\": {
      \"version\": \"0.7.1\",
      \"resolved\": \"https://registry.npmjs.org/rechoir/-/rechoir-0.7.1.tgz\",
      \"integrity\": \"sha512-/njmZ8s1wVeR6pjTZ+0nCnv8SpZNRMT2D1RLOJQESlYFDBvwpTA4KWJpZ+sBJ4+vhjILRcK7JIFdGCdxEAAitg==\",
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
      \"version\": \"0.10.5\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.10.5.tgz\",
      \"integrity\": \"sha1-M2w+/BIgrc7dosn6tntaeVWjNlg=\",
      \"dev\": true
    },
    \"regex-not\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/regex-not/-/regex-not-1.0.2.tgz\",
      \"integrity\": \"sha512-J6SDjUgDxQj5NusnOtdFxDwN/+HWykR8GELwctJ7mdqhcyy1xEc4SRFHUXvxTp661YaVKAjfRLZ9cCqS6tn32A==\",
      \"dev\": true,
      \"requires\": {
        \"extend-shallow\": \"^3.0.2\",
        \"safe-regex\": \"^1.1.0\"
      },
      \"dependencies\": {
        \"extend-shallow\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
          \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
          \"dev\": true,
          \"requires\": {
            \"assign-symbols\": \"^1.0.0\",
            \"is-extendable\": \"^1.0.1\"
          }
        },
        \"is-extendable\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
          \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
          \"dev\": true,
          \"requires\": {
            \"is-plain-object\": \"^2.0.4\"
          }
        }
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
      },
      \"dependencies\": {
        \"define-properties\": {
          \"version\": \"1.2.0\",
          \"resolved\": \"https://registry.npmjs.org/define-properties/-/define-properties-1.2.0.tgz\",
          \"integrity\": \"sha512-xvqAVKGfT1+UAvPwKTVw/njhdQ8ZhXK4lI0bCIuCMrp2up9nPnaDftrLtmpTazqd1o+UY4zgzU+avtMbDP+ldA==\",
          \"dev\": true,
          \"requires\": {
            \"has-property-descriptors\": \"^1.0.0\",
            \"object-keys\": \"^1.1.1\"
          }
        }
      }
    },
    \"regexpp\": {
      \"version\": \"3.2.0\",
      \"resolved\": \"https://registry.npmjs.org/regexpp/-/regexpp-3.2.0.tgz\",
      \"integrity\": \"sha512-pq2bWo9mVD43nbts2wGv17XLiNLya+GklZ8kaDLV2Z08gDCsGpnKn9BFMepvWuHCbyVvY7J5o5+BVvoQbmlJLg==\",
      \"dev\": true
    },
    \"remove-trailing-separator\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/remove-trailing-separator/-/remove-trailing-separator-1.1.0.tgz\",
      \"integrity\": \"sha512-/hS+Y0u3aOfIETiaiirUFwDBDzmXPvO+jAfKTitUngIPzdKc6Z0LoFjM/CK5PL4C+eKwHohlHAb6H0VFfmmUsw==\",
      \"dev\": true,
      \"optional\": true
    },
    \"repeat-element\": {
      \"version\": \"1.1.4\",
      \"resolved\": \"https://registry.npmjs.org/repeat-element/-/repeat-element-1.1.4.tgz\",
      \"integrity\": \"sha512-LFiNfRcSu7KK3evMyYOuCzv3L10TW7yC1G2/+StMjK8Y6Vqd2MG7r/Qjw4ghtuCOjFvlnms/iMmLqpvW/ES/WQ==\",
      \"dev\": true
    },
    \"repeat-string\": {
      \"version\": \"1.6.1\",
      \"resolved\": \"https://registry.npmjs.org/repeat-string/-/repeat-string-1.6.1.tgz\",
      \"integrity\": \"sha1-jcrkcOHIirwtYA//Sndihtp15jc=\",
      \"dev\": true
    },
    \"repeating\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/repeating/-/repeating-2.0.1.tgz\",
      \"integrity\": \"sha1-UhTFOpJtNVJwdSf7q0FdvAjQbdo=\",
      \"dev\": true,
      \"requires\": {
        \"is-finite\": \"^1.0.0\"
      }
    },
    \"request\": {
      \"version\": \"2.88.2\",
      \"resolved\": \"https://registry.npmjs.org/request/-/request-2.88.2.tgz\",
      \"integrity\": \"sha512-MsvtOrfG9ZcrOwAW+Qi+F6HbD0CWXEh9ou77uOb7FM2WPhwT7smM833PzanhJLsgXjN89Ir6V2PczXNnMpwKhw==\",
      \"dev\": true,
      \"requires\": {
        \"aws-sign2\": \"~0.7.0\",
        \"aws4\": \"^1.8.0\",
        \"caseless\": \"~0.12.0\",
        \"combined-stream\": \"~1.0.6\",
        \"extend\": \"~3.0.2\",
        \"forever-agent\": \"~0.6.1\",
        \"form-data\": \"~2.3.2\",
        \"har-validator\": \"~5.1.3\",
        \"http-signature\": \"~1.2.0\",
        \"is-typedarray\": \"~1.0.0\",
        \"isstream\": \"~0.1.2\",
        \"json-stringify-safe\": \"~5.0.1\",
        \"mime-types\": \"~2.1.19\",
        \"oauth-sign\": \"~0.9.0\",
        \"performance-now\": \"^2.1.0\",
        \"qs\": \"~6.5.2\",
        \"safe-buffer\": \"^5.1.2\",
        \"tough-cookie\": \"~2.5.0\",
        \"tunnel-agent\": \"^0.6.0\",
        \"uuid\": \"^3.3.2\"
      },
      \"dependencies\": {
        \"form-data\": {
          \"version\": \"2.3.3\",
          \"resolved\": \"https://registry.npmjs.org/form-data/-/form-data-2.3.3.tgz\",
          \"integrity\": \"sha512-1lLKB2Mu3aGP1Q/2eCOx0fNbRMe7XdwktwOruhfqqd0rIJWwN4Dh+E3hrPSlDCXnSR7UtZ1N38rVXm+6+MEhJQ==\",
          \"dev\": true,
          \"requires\": {
            \"asynckit\": \"^0.4.0\",
            \"combined-stream\": \"^1.0.6\",
            \"mime-types\": \"^2.1.12\"
          }
        },
        \"tough-cookie\": {
          \"version\": \"2.5.0\",
          \"resolved\": \"https://registry.npmjs.org/tough-cookie/-/tough-cookie-2.5.0.tgz\",
          \"integrity\": \"sha512-nlLsUzgm1kfLXSXfRZMc1KLAugd4hqJHDTvc2hDIwS3mZAfMEuMbc03SujMF+GEcpaX/qboeycw6iO8JwVv2+g==\",
          \"dev\": true,
          \"requires\": {
            \"psl\": \"^1.1.28\",
            \"punycode\": \"^2.1.1\"
          }
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
    \"require-main-filename\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
      \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
      \"dev\": true
    },
    \"resolve\": {
      \"version\": \"1.20.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve/-/resolve-1.20.0.tgz\",
      \"integrity\": \"sha512-wENBPt4ySzg4ybFQW2TT1zMQucPK95HSh/nq2CFTZVOGut2+pQvSsgtda4d26YrYcr067wjbmzOG8byDPBX63A==\",
      \"dev\": true,
      \"requires\": {
        \"is-core-module\": \"^2.2.0\",
        \"path-parse\": \"^1.0.6\"
      }
    },
    \"resolve-alpn\": {
      \"version\": \"1.2.1\",
      \"resolved\": \"https://registry.npmjs.org/resolve-alpn/-/resolve-alpn-1.2.1.tgz\",
      \"integrity\": \"sha512-0a1F4l73/ZFZOakJnQ3FvkJ2+gSTQWz/r2KE5OdDY0TxPm5h4GkqkWWfM47T7HsbnOtcJVEF4epCVy6u7Q3K+g==\"
    },
    \"resolve-cwd\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-cwd/-/resolve-cwd-3.0.0.tgz\",
      \"integrity\": \"sha512-OrZaX2Mb+rJCpH/6CpSqt9xFVpN++x01XnN2ie9g6P5/3xelLAkXWVADpdz1IHD/KFfEXyE6V0U01OQ3UO2rEg==\",
      \"dev\": true,
      \"requires\": {
        \"resolve-from\": \"^5.0.0\"
      },
      \"dependencies\": {
        \"resolve-from\": {
          \"version\": \"5.0.0\",
          \"resolved\": \"https://registry.npmjs.org/resolve-from/-/resolve-from-5.0.0.tgz\",
          \"integrity\": \"sha512-qYg9KP24dD5qka9J47d0aVky0N+b4fTU89LN9iDnjB5waksiC49rvMB0PrUJQGoTmH50XPiqOvAjDfaijGxYZw==\",
          \"dev\": true
        }
      }
    },
    \"resolve-from\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-from/-/resolve-from-3.0.0.tgz\",
      \"integrity\": \"sha1-six699nWiBvItuZTM17rywoYh0g=\",
      \"dev\": true
    },
    \"resolve-url\": {
      \"version\": \"0.2.1\",
      \"resolved\": \"https://registry.npmjs.org/resolve-url/-/resolve-url-0.2.1.tgz\",
      \"integrity\": \"sha1-LGN/53yJOv0qZj/iGqkIAGjiBSo=\",
      \"dev\": true
    },
    \"responselike\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/responselike/-/responselike-2.0.0.tgz\",
      \"integrity\": \"sha512-xH48u3FTB9VsZw7R+vvgaKeLKzT6jOogbQhEe/jewwnZgzPcnyWui2Av6JpoYZF/91uueC+lqhWqeURw5/qhCw==\",
      \"requires\": {
        \"lowercase-keys\": \"^2.0.0\"
      }
    },
    \"ret\": {
      \"version\": \"0.1.15\",
      \"resolved\": \"https://registry.npmjs.org/ret/-/ret-0.1.15.tgz\",
      \"integrity\": \"sha512-TTlYpa+OL+vMMNG24xSlQGEJ3B/RzEfUlLct7b5G/ytav+wPrplCpVMFuwzXbkecJrb6IYo1iFb0S9v37754mg==\",
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
    \"ripemd160\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/ripemd160/-/ripemd160-2.0.2.tgz\",
      \"integrity\": \"sha512-ii4iagi25WusVoiC4B4lq7pbXfAp3D9v5CwfkY33vffw2+pkDjY1D8GaN7spsxvCSx8dkPqOZCEZyfxcmJG2IA==\",
      \"dev\": true,
      \"requires\": {
        \"hash-base\": \"^3.0.0\",
        \"inherits\": \"^2.0.1\"
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
    \"run-queue\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/run-queue/-/run-queue-1.0.3.tgz\",
      \"integrity\": \"sha1-6Eg5bwV9Ij8kOGkkYY4laUFh7Ec=\",
      \"dev\": true,
      \"requires\": {
        \"aproba\": \"^1.1.1\"
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        },
        \"isarray\": {
          \"version\": \"2.0.5\",
          \"resolved\": \"https://registry.npmjs.org/isarray/-/isarray-2.0.5.tgz\",
          \"integrity\": \"sha512-xHjhDr3cNBK0BzdUJSPXZntQUx/mwMS5Rw4A7lPJ90XGAO6ISP/ePDNuo0vhqOZU+UD5JoodwCAAoZQd3FeAKw==\",
          \"dev\": true
        }
      }
    },
    \"safe-buffer\": {
      \"version\": \"5.2.1\",
      \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.2.1.tgz\",
      \"integrity\": \"sha512-rp3So07KcdmmKbGvgaNxQSJr7bGVSVk5S9Eq1F+ppbRo70+YeaDxkw5Dd8NPN+GD6bjnYm2VuPuCXmpuYvmCXQ==\"
    },
    \"safe-regex\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/safe-regex/-/safe-regex-1.1.0.tgz\",
      \"integrity\": \"sha1-QKNmnzsHfR6UPURinhV91IAjvy4=\",
      \"dev\": true,
      \"requires\": {
        \"ret\": \"~0.1.10\"
      }
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
      },
      \"dependencies\": {
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        }
      }
    },
    \"safer-buffer\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
      \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
      \"dev\": true
    },
    \"sass-graph\": {
      \"version\": \"2.2.5\",
      \"resolved\": \"https://registry.npmjs.org/sass-graph/-/sass-graph-2.2.5.tgz\",
      \"integrity\": \"sha512-VFWDAHOe6mRuT4mZRd4eKE+d8Uedrk6Xnh7Sh9b4NGufQLQjOrvf/MQoOdx+0s92L89FeyUUNfU597j/3uNpag==\",
      \"dev\": true,
      \"requires\": {
        \"glob\": \"^7.0.0\",
        \"lodash\": \"^4.0.0\",
        \"scss-tokenizer\": \"^0.2.3\",
        \"yargs\": \"^13.3.2\"
      }
    },
    \"sass-loader\": {
      \"version\": \"10.4.1\",
      \"resolved\": \"https://registry.npmjs.org/sass-loader/-/sass-loader-10.4.1.tgz\",
      \"integrity\": \"sha512-aX/iJZTTpNUNx/OSYzo2KsjIUQHqvWsAhhUijFjAPdZTEhstjZI9zTNvkTTwsx+uNUJqUwOw5gacxQMx4hJxGQ==\",
      \"dev\": true,
      \"requires\": {
        \"klona\": \"^2.0.4\",
        \"loader-utils\": \"^2.0.0\",
        \"neo-async\": \"^2.6.2\",
        \"schema-utils\": \"^3.0.0\",
        \"semver\": \"^7.3.2\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.3\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.3.tgz\",
          \"integrity\": \"sha512-XmOWe7eyHYH14cLdVPoyg+GOH3rYX++KpzrylJwSW98t3Nk+U8XOl8FWKOgwtzdb8lXGf6zYwDUzeHMWfxasyg==\",
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
        \"lru-cache\": {
          \"version\": \"6.0.0\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-6.0.0.tgz\",
          \"integrity\": \"sha512-Jo6dJ04CmSjuznwJSS3pUeWmd/H0ffTlkXXgwZi+eq1UCmqQwCh+eLsYOYCwY991i2Fah4h1BEMCx4qThGbsiA==\",
          \"dev\": true,
          \"requires\": {
            \"yallist\": \"^4.0.0\"
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
        \"semver\": {
          \"version\": \"7.5.4\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.5.4.tgz\",
          \"integrity\": \"sha512-1bCSESV6Pv+i21Hvpxp3Dx+pSD8lIPt8uVjRrxAUt/nbswYc+tK6Y2btiULjd4+fnq15PX+nqQDC7Oft7WkwcA==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
          }
        }
      }
    },
    \"saxes\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/saxes/-/saxes-5.0.1.tgz\",
      \"integrity\": \"sha512-5LBh1Tls8c9xgGjw3QrMwETmTMVk0oFgvrFSvWx62llR2hcEInrKNZ2GZCCuuy2lvWrdl5jhbpeqc5hRYKFOcw==\",
      \"dev\": true,
      \"requires\": {
        \"xmlchars\": \"^2.2.0\"
      }
    },
    \"schema-utils\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-1.0.0.tgz\",
      \"integrity\": \"sha512-i27Mic4KovM/lnGsy8whRCHhc7VicJajAjTrYg11K9zfZXnYIt4k5F+kZkwjnrhKzLic/HLU4j11mjsz2G/75g==\",
      \"dev\": true,
      \"requires\": {
        \"ajv\": \"^6.1.0\",
        \"ajv-errors\": \"^1.0.0\",
        \"ajv-keywords\": \"^3.1.0\"
      }
    },
    \"scss-tokenizer\": {
      \"version\": \"0.2.3\",
      \"resolved\": \"https://registry.npmjs.org/scss-tokenizer/-/scss-tokenizer-0.2.3.tgz\",
      \"integrity\": \"sha512-dYE8LhncfBUar6POCxMTm0Ln+erjeczqEvCJib5/7XNkdw1FkUGgwMPY360FY0FgPWQxHWCx29Jl3oejyGLM9Q==\",
      \"dev\": true,
      \"requires\": {
        \"js-base64\": \"^2.1.8\",
        \"source-map\": \"^0.4.2\"
      },
      \"dependencies\": {
        \"source-map\": {
          \"version\": \"0.4.4\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.4.4.tgz\",
          \"integrity\": \"sha512-Y8nIfcb1s/7DcobUz1yOO1GSp7gyL+D9zLHDehT7iRESqGSxjJ448Sg7rvfgsRJCnKLdSl11uGf0s9X80cH0/A==\",
          \"dev\": true,
          \"requires\": {
            \"amdefine\": \">=0.0.4\"
          }
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
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-4.0.0.tgz\",
      \"integrity\": \"sha512-GaNA54380uFefWghODBWEGisLZFj00nS5ACs6yHa9nLqlLpVLO8ChDGeKRjZnV4Nh4n0Qi7nhYZD/9fCPzEqkw==\",
      \"requires\": {
        \"randombytes\": \"^2.1.0\"
      }
    },
    \"set-blocking\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/set-blocking/-/set-blocking-2.0.0.tgz\",
      \"integrity\": \"sha1-BF+XgtARrppoA93TgrJDkrPYkPc=\",
      \"dev\": true
    },
    \"set-value\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/set-value/-/set-value-2.0.1.tgz\",
      \"integrity\": \"sha512-JxHc1weCN68wRY0fhCoXpyK55m/XPHafOmK4UWD7m2CI14GMcFypt4w/0+NV5f/ZMby2F6S2wwA7fgynh9gWSw==\",
      \"dev\": true,
      \"requires\": {
        \"extend-shallow\": \"^2.0.1\",
        \"is-extendable\": \"^0.1.1\",
        \"is-plain-object\": \"^2.0.3\",
        \"split-string\": \"^3.0.1\"
      }
    },
    \"setimmediate\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/setimmediate/-/setimmediate-1.0.5.tgz\",
      \"integrity\": \"sha1-KQy7Iy4waULX1+qbg3Mqt4VvgoU=\",
      \"dev\": true
    },
    \"sha.js\": {
      \"version\": \"2.4.11\",
      \"resolved\": \"https://registry.npmjs.org/sha.js/-/sha.js-2.4.11.tgz\",
      \"integrity\": \"sha512-QMEp5B7cftE7APOjk5Y6xgrbWu+WkLVQwk8JNjZ8nKRciZaByEW6MubieAiToS7+dwvrjGhH8jRXz3MVd0AYqQ==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"^2.0.1\",
        \"safe-buffer\": \"^5.0.1\"
      }
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
    \"sigmund\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/sigmund/-/sigmund-1.0.1.tgz\",
      \"integrity\": \"sha1-P/IfGYytIXX587eBhT/ZTQ0ZtZA=\",
      \"dev\": true
    },
    \"signal-exit\": {
      \"version\": \"3.0.7\",
      \"resolved\": \"https://registry.npmjs.org/signal-exit/-/signal-exit-3.0.7.tgz\",
      \"integrity\": \"sha512-wnD2ZE+l+SPC/uoS0vXeE9L1+0wuaMqKlfz9AMUo38JsyLSBWSFcHR1Rri62LZc12vLr1gb3jl7iwQhgwpAbGQ==\",
      \"dev\": true
    },
    \"slash\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/slash/-/slash-1.0.0.tgz\",
      \"integrity\": \"sha1-xB8vbDn8FtHNF61LXYlhFK5HDVU=\",
      \"dev\": true
    },
    \"slice-ansi\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/slice-ansi/-/slice-ansi-4.0.0.tgz\",
      \"integrity\": \"sha512-qMCMfhY040cVHT43K9BFygqYbUPFZKHOg7K73mtTWJRb8pyP3fzf4Ixd5SzdEJQ6MRUg/WBnOLxghZtKKurENQ==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-styles\": \"^4.0.0\",
        \"astral-regex\": \"^2.0.0\",
        \"is-fullwidth-code-point\": \"^3.0.0\"
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
        },
        \"is-fullwidth-code-point\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-3.0.0.tgz\",
          \"integrity\": \"sha512-zymm5+u+sCsSWyD9qNaejV3DFvhCKclKdizYaJUuHA83RLjb7nSuGnddCHGv0hk+KY7BMAlsWeK4Ueg6EV6XQg==\",
          \"dev\": true
        }
      }
    },
    \"snapdragon\": {
      \"version\": \"0.8.2\",
      \"resolved\": \"https://registry.npmjs.org/snapdragon/-/snapdragon-0.8.2.tgz\",
      \"integrity\": \"sha512-FtyOnWN/wCHTVXOMwvSv26d+ko5vWlIDD6zoUJ7LW8vh+ZBC8QdljveRP+crNrtBwioEUWy/4dMtbBjA4ioNlg==\",
      \"dev\": true,
      \"requires\": {
        \"base\": \"^0.11.1\",
        \"debug\": \"^2.2.0\",
        \"define-property\": \"^0.2.5\",
        \"extend-shallow\": \"^2.0.1\",
        \"map-cache\": \"^0.2.2\",
        \"source-map\": \"^0.5.6\",
        \"source-map-resolve\": \"^0.5.0\",
        \"use\": \"^3.1.0\"
      },
      \"dependencies\": {
        \"debug\": {
          \"version\": \"2.6.9\",
          \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
          \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
          \"dev\": true,
          \"requires\": {
            \"ms\": \"2.0.0\"
          }
        },
        \"ms\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
          \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
          \"dev\": true
        },
        \"source-map\": {
          \"version\": \"0.5.7\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
          \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
          \"dev\": true
        }
      }
    },
    \"snapdragon-node\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/snapdragon-node/-/snapdragon-node-2.1.1.tgz\",
      \"integrity\": \"sha512-O27l4xaMYt/RSQ5TR3vpWCAB5Kb/czIcqUFOM/C4fYcLnbZUc1PkjTAMjof2pBWaSTwOUd6qUHcFGVGj7aIwnw==\",
      \"dev\": true,
      \"requires\": {
        \"define-property\": \"^1.0.0\",
        \"isobject\": \"^3.0.0\",
        \"snapdragon-util\": \"^3.0.1\"
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-1.0.0.tgz\",
          \"integrity\": \"sha1-dp66rz9KY6rTr56NMEybvnm/sOY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^1.0.0\"
          }
        }
      }
    },
    \"snapdragon-util\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/snapdragon-util/-/snapdragon-util-3.0.1.tgz\",
      \"integrity\": \"sha512-mbKkMdQKsjX4BAL4bRYTj21edOf8cN7XHdYUJEe+Zn99hVEYcMvKPct1IqNe7+AZPirn8BCDOQBHQZknqmKlZQ==\",
      \"dev\": true,
      \"requires\": {
        \"kind-of\": \"^3.2.0\"
      },
      \"dependencies\": {
        \"kind-of\": {
          \"version\": \"3.2.2\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
          \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
          \"dev\": true,
          \"requires\": {
            \"is-buffer\": \"^1.1.5\"
          }
        }
      }
    },
    \"source-list-map\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/source-list-map/-/source-list-map-2.0.1.tgz\",
      \"integrity\": \"sha512-qnQ7gVMxGNxsiL4lEuJwe/To8UnK7fAnmbGEEH8RpLouuKbeEm0lhbQVFIrNSuB+G7tVrAlVsZgETT5nljf+Iw==\",
      \"dev\": true
    },
    \"source-map\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
      \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
      \"dev\": true
    },
    \"source-map-resolve\": {
      \"version\": \"0.5.3\",
      \"resolved\": \"https://registry.npmjs.org/source-map-resolve/-/source-map-resolve-0.5.3.tgz\",
      \"integrity\": \"sha512-Htz+RnsXWk5+P2slx5Jh3Q66vhQj1Cllm0zvnaY98+NFx+Dv2CF/f5O/t8x+KaNdrdIAsruNzoh/KpialbqAnw==\",
      \"dev\": true,
      \"requires\": {
        \"atob\": \"^2.1.2\",
        \"decode-uri-component\": \"^0.2.0\",
        \"resolve-url\": \"^0.2.1\",
        \"source-map-url\": \"^0.4.0\",
        \"urix\": \"^0.1.0\"
      }
    },
    \"source-map-support\": {
      \"version\": \"0.5.20\",
      \"resolved\": \"https://registry.npmjs.org/source-map-support/-/source-map-support-0.5.20.tgz\",
      \"integrity\": \"sha512-n1lZZ8Ve4ksRqizaBQgxXDgKwttHDhyfQjA6YZZn8+AroHbsIz+JjwxQDxbp+7y5OYCI8t1Yk7etjD9CRd2hIw==\",
      \"dev\": true,
      \"requires\": {
        \"buffer-from\": \"^1.0.0\",
        \"source-map\": \"^0.6.0\"
      }
    },
    \"source-map-url\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map-url/-/source-map-url-0.4.1.tgz\",
      \"integrity\": \"sha512-cPiFOTLUKvJFIg4SKVScy4ilPPW6rFgMgfuZJPNoDuMs3nC1HbMUycBoJw77xFIp6z1UJQJOfx6C9GMH80DiTw==\",
      \"dev\": true
    },
    \"spdx-correct\": {
      \"version\": \"3.2.0\",
      \"resolved\": \"https://registry.npmjs.org/spdx-correct/-/spdx-correct-3.2.0.tgz\",
      \"integrity\": \"sha512-kN9dJbvnySHULIluDHy32WHRUu3Og7B9sbY7tsFLctQkIqnMh3hErYgdMjTYuqmcXX+lK5T1lnUt3G7zNswmZA==\",
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
      \"version\": \"3.0.13\",
      \"resolved\": \"https://registry.npmjs.org/spdx-license-ids/-/spdx-license-ids-3.0.13.tgz\",
      \"integrity\": \"sha512-XkD+zwiqXHikFZm4AX/7JSCXA98U5Db4AFd5XUg/+9UNtnH75+Z9KxtpYiJZx36mUDVOwH83pl7yvCer6ewM3w==\",
      \"dev\": true
    },
    \"split-string\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/split-string/-/split-string-3.1.0.tgz\",
      \"integrity\": \"sha512-NzNVhJDYpwceVVii8/Hu6DKfD2G+NrQHlS/V/qgv763EYudVwEcMQNxd2lh+0VrUByXN/oJkl5grOhYWvQUYiw==\",
      \"dev\": true,
      \"requires\": {
        \"extend-shallow\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"extend-shallow\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
          \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
          \"dev\": true,
          \"requires\": {
            \"assign-symbols\": \"^1.0.0\",
            \"is-extendable\": \"^1.0.1\"
          }
        },
        \"is-extendable\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
          \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
          \"dev\": true,
          \"requires\": {
            \"is-plain-object\": \"^2.0.4\"
          }
        }
      }
    },
    \"sprintf-js\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/sprintf-js/-/sprintf-js-1.0.3.tgz\",
      \"integrity\": \"sha1-BOaSb2YolTVPPdAVIDYzuFcpfiw=\",
      \"dev\": true
    },
    \"sshpk\": {
      \"version\": \"1.17.0\",
      \"resolved\": \"https://registry.npmjs.org/sshpk/-/sshpk-1.17.0.tgz\",
      \"integrity\": \"sha512-/9HIEs1ZXGhSPE8X6Ccm7Nam1z8KcoCqPdI7ecm1N33EzAetWahvQWVqLZtaZQ+IDKX4IyA2o0gBzqIMkAagHQ==\",
      \"dev\": true,
      \"requires\": {
        \"asn1\": \"~0.2.3\",
        \"assert-plus\": \"^1.0.0\",
        \"bcrypt-pbkdf\": \"^1.0.0\",
        \"dashdash\": \"^1.12.0\",
        \"ecc-jsbn\": \"~0.1.1\",
        \"getpass\": \"^0.1.1\",
        \"jsbn\": \"~0.1.0\",
        \"safer-buffer\": \"^2.0.2\",
        \"tweetnacl\": \"~0.14.0\"
      }
    },
    \"ssri\": {
      \"version\": \"6.0.2\",
      \"resolved\": \"https://registry.npmjs.org/ssri/-/ssri-6.0.2.tgz\",
      \"integrity\": \"sha512-cepbSq/neFK7xB6A50KHN0xHDotYzq58wWCa5LeWqnPrHG8GzfEjO/4O8kpmcGW+oaxkvhEJCWgbgNk4/ZV93Q==\",
      \"dev\": true,
      \"requires\": {
        \"figgy-pudding\": \"^3.5.1\"
      }
    },
    \"stack-utils\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/stack-utils/-/stack-utils-2.0.5.tgz\",
      \"integrity\": \"sha512-xrQcmYhOsn/1kX+Vraq+7j4oE2j/6BFscZ0etmYg81xuM8Gq0022Pxb8+IqgOFUIaxHs0KaSb7T1+OegiNrNFA==\",
      \"dev\": true,
      \"requires\": {
        \"escape-string-regexp\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"escape-string-regexp\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-2.0.0.tgz\",
          \"integrity\": \"sha512-UpzcLCXolUWcNu5HtVMHYdXJjArjsF9C0aNnquZYY4uW/Vu0miy5YoWvbV345HauVvcAUnpRuhMMcqTcGOY2+w==\",
          \"dev\": true
        }
      }
    },
    \"static-extend\": {
      \"version\": \"0.1.2\",
      \"resolved\": \"https://registry.npmjs.org/static-extend/-/static-extend-0.1.2.tgz\",
      \"integrity\": \"sha1-YICcOcv/VTNyJv1eC1IPNB8ftcY=\",
      \"dev\": true,
      \"requires\": {
        \"define-property\": \"^0.2.5\",
        \"object-copy\": \"^0.1.0\"
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
    \"stream-browserify\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/stream-browserify/-/stream-browserify-2.0.2.tgz\",
      \"integrity\": \"sha512-nX6hmklHs/gr2FuxYDltq8fJA1GDlxKQCz8O/IM4atRqBH8OORmBNgfvW5gG10GT/qQ9u0CzIvr2X5Pkt6ntqg==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"~2.0.1\",
        \"readable-stream\": \"^2.0.2\"
      }
    },
    \"stream-each\": {
      \"version\": \"1.2.3\",
      \"resolved\": \"https://registry.npmjs.org/stream-each/-/stream-each-1.2.3.tgz\",
      \"integrity\": \"sha512-vlMC2f8I2u/bZGqkdfLQW/13Zihpej/7PmSiMQsbYddxuTsJp8vRe2x2FvVExZg7FaOds43ROAuFJwPR4MTZLw==\",
      \"dev\": true,
      \"requires\": {
        \"end-of-stream\": \"^1.1.0\",
        \"stream-shift\": \"^1.0.0\"
      }
    },
    \"stream-http\": {
      \"version\": \"2.8.3\",
      \"resolved\": \"https://registry.npmjs.org/stream-http/-/stream-http-2.8.3.tgz\",
      \"integrity\": \"sha512-+TSkfINHDo4J+ZobQLWiMouQYB+UVYFttRA94FpEzzJ7ZdqcL4uUUQ7WkdkI4DSozGmgBUE/a47L+38PenXhUw==\",
      \"dev\": true,
      \"requires\": {
        \"builtin-status-codes\": \"^3.0.0\",
        \"inherits\": \"^2.0.1\",
        \"readable-stream\": \"^2.3.6\",
        \"to-arraybuffer\": \"^1.0.0\",
        \"xtend\": \"^4.0.0\"
      }
    },
    \"stream-shift\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/stream-shift/-/stream-shift-1.0.1.tgz\",
      \"integrity\": \"sha512-AiisoFqQ0vbGcZgQPY1cdP2I76glaVA/RauYR4G4thNFgkTqr90yXTo4LYX60Jl+sIlPNHHdGSwo01AvbKUSVQ==\",
      \"dev\": true
    },
    \"string-width\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-3.1.0.tgz\",
      \"integrity\": \"sha512-vafcv6KjVZKSgz06oM/H6GDBrAtz8vdhQakGjFIvNrHA6y3HCF1CInLy+QLq8dTJPQ1b+KDUqDFctkdRW44e1w==\",
      \"dev\": true,
      \"requires\": {
        \"emoji-regex\": \"^7.0.1\",
        \"is-fullwidth-code-point\": \"^2.0.0\",
        \"strip-ansi\": \"^5.1.0\"
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
      },
      \"dependencies\": {
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
        \"has-bigints\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/has-bigints/-/has-bigints-1.0.2.tgz\",
          \"integrity\": \"sha512-tSvCKtBr9lkF0Ex0aQiP9N+OpV4zi2r/Nee5VkRDbaqv35RLYMzbwQfFSZZH0kR+Rd6302UJZ2p/bJCEoR3VoQ==\",
          \"dev\": true
        },
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
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
        \"is-callable\": {
          \"version\": \"1.2.7\",
          \"resolved\": \"https://registry.npmjs.org/is-callable/-/is-callable-1.2.7.tgz\",
          \"integrity\": \"sha512-1BC0BVFhS/p0qtw6enp8e+8OD0UrK0oFLztSjNzhcKA3WDuJxxAPXzPuPtKkjEY9UUoEWlX/8fgKeu2S8i9JTA==\",
          \"dev\": true
        },
        \"is-negative-zero\": {
          \"version\": \"2.0.2\",
          \"resolved\": \"https://registry.npmjs.org/is-negative-zero/-/is-negative-zero-2.0.2.tgz\",
          \"integrity\": \"sha512-dqJvarLawXsFbNDeJW7zAz8ItJ9cd28YufuuFzh0G8pNHjJMnY08Dv7sYX2uF5UpQOwieAeOExEYAWWfu7ZZUA==\",
          \"dev\": true
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
        \"is-weakref\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/is-weakref/-/is-weakref-1.0.2.tgz\",
          \"integrity\": \"sha512-qctsuLZmIQ0+vSSMfoVvyFe2+GSEvnmZ2ezTup1SBse9+twCCeial6EEi3Nc2KFcf6+qz2FBPnjXsk8xhKSaPQ==\",
          \"dev\": true,
          \"requires\": {
            \"call-bind\": \"^1.0.2\"
          }
        },
        \"object-inspect\": {
          \"version\": \"1.12.3\",
          \"resolved\": \"https://registry.npmjs.org/object-inspect/-/object-inspect-1.12.3.tgz\",
          \"integrity\": \"sha512-geUvdk7c+eizMNUDkRpW1wJwgfOiOeHbxBR/hLXK1aT6zmVSO0jsQcs7fj6MGw89jC/cjGfLcNOrtMYtGqm81g==\",
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
        }
      }
    },
    \"string.prototype.trimend\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trimend/-/string.prototype.trimend-1.0.4.tgz\",
      \"integrity\": \"sha512-y9xCjw1P23Awk8EvTpcyL2NIr1j7wJ39f+k6lvRnSMz+mz9CGz9NYPelDk42kOz6+ql8xjfK8oYzy3jAP5QU5A==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\"
      }
    },
    \"string.prototype.trimstart\": {
      \"version\": \"1.0.4\",
      \"resolved\": \"https://registry.npmjs.org/string.prototype.trimstart/-/string.prototype.trimstart-1.0.4.tgz\",
      \"integrity\": \"sha512-jh6e984OBfvxS50tdY2nRZnoC5/mLFKOREQfw8t5yytkoUsJRNxvI/E39qu1sD0OtWI3OC0XgKSmcWwziwYuZw==\",
      \"dev\": true,
      \"requires\": {
        \"call-bind\": \"^1.0.2\",
        \"define-properties\": \"^1.1.3\"
      }
    },
    \"string_decoder\": {
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/string_decoder/-/string_decoder-1.3.0.tgz\",
      \"integrity\": \"sha512-hkRX8U1WjJFd8LsDJ2yQ/wWWxaopEsABU1XfkM8A+j0+85JAGppt16cr1Whg6KIbb4okU6Mql6BOj+uup/wKeA==\",
      \"dev\": true,
      \"requires\": {
        \"safe-buffer\": \"~5.2.0\"
      }
    },
    \"strip-ansi\": {
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
      \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-regex\": \"^4.1.0\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.0.tgz\",
          \"integrity\": \"sha512-1apePfXM1UOSqw0o9IiFAovVz9M5S1Dg+4TrDwfMewQ6p/rmMueb7tWZjQ1rx4Loy1ArBggoqGpfqqdI4rondg==\",
          \"dev\": true
        }
      }
    },
    \"strip-bom\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/strip-bom/-/strip-bom-3.0.0.tgz\",
      \"integrity\": \"sha1-IzTBjpx1n3vdVv3vfprj1YjmjtM=\",
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
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/strip-json-comments/-/strip-json-comments-2.0.1.tgz\",
      \"integrity\": \"sha1-PFMZQukIwml8DsNEhYwobHygpgo=\",
      \"dev\": true
    },
    \"style-loader\": {
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/style-loader/-/style-loader-1.3.0.tgz\",
      \"integrity\": \"sha512-V7TCORko8rs9rIqkSrlMfkqA63DfoGBBJmK1kKGCcSi+BWb4cqz0SRsnp4l6rU5iwOEd0/2ePv68SV22VXon4Q==\",
      \"dev\": true,
      \"requires\": {
        \"loader-utils\": \"^2.0.0\",
        \"schema-utils\": \"^2.7.0\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.0.tgz\",
          \"integrity\": \"sha512-f+8cldu7X/y7RAJurMEJmdoKXGB/X550w2Nr3tTbezL6RwEE/iMcm+tZnXeoZtKuOq6ft8+CqzEkrIgx1fPoQA==\",
          \"dev\": true,
          \"requires\": {
            \"minimist\": \"^1.2.5\"
          }
        },
        \"loader-utils\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/loader-utils/-/loader-utils-2.0.0.tgz\",
          \"integrity\": \"sha512-rP4F0h2RaWSvPEkD7BLDFQnvSf+nK+wr3ESUjNTyAGobqrijmW92zc+SO6d4p4B1wh7+B/Jg1mkQe5NYUEHtHQ==\",
          \"dev\": true,
          \"requires\": {
            \"big.js\": \"^5.2.2\",
            \"emojis-list\": \"^3.0.0\",
            \"json5\": \"^2.1.2\"
          }
        },
        \"schema-utils\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-2.7.1.tgz\",
          \"integrity\": \"sha512-SHiNtMOUGWBQJwzISiVYKu82GiV4QYGePp3odlY1tuKO7gPtphAT5R/py0fA6xtbgLL/RvtJZnU9b8s0F1q0Xg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.5\",
            \"ajv\": \"^6.12.4\",
            \"ajv-keywords\": \"^3.5.2\"
          }
        }
      }
    },
    \"supports-color\": {
      \"version\": \"7.2.0\",
      \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-7.2.0.tgz\",
      \"integrity\": \"sha512-qpCAvRl9stuOHveKsn7HncJRvv501qIacKzQlO/+Lwxc9+0q2wLyv4Dfvt80/DPn2pqOBsJdDiogXGR9+OvwRw==\",
      \"dev\": true,
      \"requires\": {
        \"has-flag\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
          \"dev\": true
        }
      }
    },
    \"symbol-observable\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/symbol-observable/-/symbol-observable-1.2.0.tgz\",
      \"integrity\": \"sha512-e900nM8RRtGhlV36KGEU9k65K3mPb1WV70OdjfxlG2EAuM1noi/E/BaW/uMhL7bPEssK8QV57vN3esixjUvcXQ==\"
    },
    \"symbol-tree\": {
      \"version\": \"3.2.4\",
      \"resolved\": \"https://registry.npmjs.org/symbol-tree/-/symbol-tree-3.2.4.tgz\",
      \"integrity\": \"sha512-9QNk5KwDF+Bvz+PyObkmSYjI5ksVUYtjW7AU22r2NKcfLJcXp96hkDWU3+XndOsUb+AQ9QhfzfCT2O+CNWT5Tw==\",
      \"dev\": true
    },
    \"table\": {
      \"version\": \"6.8.1\",
      \"resolved\": \"https://registry.npmjs.org/table/-/table-6.8.1.tgz\",
      \"integrity\": \"sha512-Y4X9zqrCftUhMeH2EptSSERdVKt/nEdijTOacGD/97EKjhQ/Qs8RTlEGABSJNNN8lac9kheH+af7yAkEWlgneA==\",
      \"dev\": true,
      \"requires\": {
        \"ajv\": \"^8.0.1\",
        \"lodash.truncate\": \"^4.4.2\",
        \"slice-ansi\": \"^4.0.0\",
        \"string-width\": \"^4.2.3\",
        \"strip-ansi\": \"^6.0.1\"
      },
      \"dependencies\": {
        \"ajv\": {
          \"version\": \"8.12.0\",
          \"resolved\": \"https://registry.npmjs.org/ajv/-/ajv-8.12.0.tgz\",
          \"integrity\": \"sha512-sRu1kpcO9yLtYxBKvqfTeh9KzZEwO3STyX1HT+4CaDzC6HpTGYhIhPIzj9XuKU7KYDwnaeh5hcOwjy1QuJzBPA==\",
          \"dev\": true,
          \"requires\": {
            \"fast-deep-equal\": \"^3.1.1\",
            \"json-schema-traverse\": \"^1.0.0\",
            \"require-from-string\": \"^2.0.2\",
            \"uri-js\": \"^4.2.2\"
          }
        },
        \"ansi-regex\": {
          \"version\": \"5.0.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-5.0.1.tgz\",
          \"integrity\": \"sha512-quJQXlTSUGL2LH9SUXo8VwsY4soanhgo6LNSm84E1LBcE8s3O0wpdiRzyR9z/ZZJMlMWv37qOOb9pdJlMUEKFQ==\",
          \"dev\": true
        },
        \"emoji-regex\": {
          \"version\": \"8.0.0\",
          \"resolved\": \"https://registry.npmjs.org/emoji-regex/-/emoji-regex-8.0.0.tgz\",
          \"integrity\": \"sha512-MSjYzcWNOA0ewAHpz0MxpYFvwg6yjy1NG3xteoqz644VCo/RPgnr1/GGt+ic3iJTzQ8Eu3TdM14SawnVUmGE6A==\",
          \"dev\": true
        },
        \"is-fullwidth-code-point\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/is-fullwidth-code-point/-/is-fullwidth-code-point-3.0.0.tgz\",
          \"integrity\": \"sha512-zymm5+u+sCsSWyD9qNaejV3DFvhCKclKdizYaJUuHA83RLjb7nSuGnddCHGv0hk+KY7BMAlsWeK4Ueg6EV6XQg==\",
          \"dev\": true
        },
        \"json-schema-traverse\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-1.0.0.tgz\",
          \"integrity\": \"sha512-NM8/P9n3XjXhIZn1lLhkFaACTOURQXjWhV4BA/RnOv8xvgqtqpAX9IO4mRQxSx1Rlo4tqzeqb0sOlruaOy3dug==\",
          \"dev\": true
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
    \"tapable\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/tapable/-/tapable-1.1.3.tgz\",
      \"integrity\": \"sha512-4WK/bYZmj8xLr+HUCODHGF1ZFzsYffasLUgEiMBY4fgtltdO6B4WJtlSbPaDTLpYTcGVwM2qLnFTICEcNxs3kA==\",
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
      },
      \"dependencies\": {
        \"mkdirp\": {
          \"version\": \"1.0.4\",
          \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
          \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
          \"dev\": true
        }
      }
    },
    \"terser\": {
      \"version\": \"4.8.1\",
      \"resolved\": \"https://registry.npmjs.org/terser/-/terser-4.8.1.tgz\",
      \"integrity\": \"sha512-4GnLC0x667eJG0ewJTa6z/yXrbLGv80D9Ru6HIpCQmO+Q4PfEtBFi0ObSckqwL6VyQv/7ENJieXHo2ANmdQwgw==\",
      \"dev\": true,
      \"requires\": {
        \"commander\": \"^2.20.0\",
        \"source-map\": \"~0.6.1\",
        \"source-map-support\": \"~0.5.12\"
      }
    },
    \"terser-webpack-plugin\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/terser-webpack-plugin/-/terser-webpack-plugin-3.1.0.tgz\",
      \"integrity\": \"sha512-cjdZte66fYkZ65rQ2oJfrdCAkkhJA7YLYk5eGOcGCSGlq0ieZupRdjedSQXYknMPo2IveQL+tPdrxUkERENCFA==\",
      \"dev\": true,
      \"requires\": {
        \"cacache\": \"^15.0.5\",
        \"find-cache-dir\": \"^3.3.1\",
        \"jest-worker\": \"^26.2.1\",
        \"p-limit\": \"^3.0.2\",
        \"schema-utils\": \"^2.6.6\",
        \"serialize-javascript\": \"^4.0.0\",
        \"source-map\": \"^0.6.1\",
        \"terser\": \"^4.8.0\",
        \"webpack-sources\": \"^1.4.3\"
      },
      \"dependencies\": {
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
          }
        },
        \"find-cache-dir\": {
          \"version\": \"3.3.2\",
          \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-3.3.2.tgz\",
          \"integrity\": \"sha512-wXZV5emFEjrridIgED11OoUKLxiYjAcqot/NJdAkOhlJ+vGzwhOAfcG5OX1jP+S0PcjEn8bdMJv+g2jwQ3Onig==\",
          \"dev\": true,
          \"requires\": {
            \"commondir\": \"^1.0.1\",
            \"make-dir\": \"^3.0.2\",
            \"pkg-dir\": \"^4.1.0\"
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
          \"version\": \"3.1.0\",
          \"resolved\": \"https://registry.npmjs.org/make-dir/-/make-dir-3.1.0.tgz\",
          \"integrity\": \"sha512-g3FeP20LNwhALb/6Cz6Dd4F2ngze0jz7tbzrD2wAV+o9FeNHe4rL+yK2md0J/fiSf1sa1ADhXqi5+oVwOM/eGw==\",
          \"dev\": true,
          \"requires\": {
            \"semver\": \"^6.0.0\"
          }
        },
        \"mkdirp\": {
          \"version\": \"1.0.4\",
          \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
          \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
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
          \"version\": \"4.1.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-4.1.0.tgz\",
          \"integrity\": \"sha512-R79ZZ/0wAxKGu3oYMlz8jy/kbhsNrS7SKZ7PxEHBgJ5+F2mtFW2fK2cOtBh1cHYkQsbzFV7I+EoRKe6Yt0oK7A==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^2.2.0\"
          },
          \"dependencies\": {
            \"p-limit\": {
              \"version\": \"2.3.0\",
              \"resolved\": \"https://registry.npmjs.org/p-limit/-/p-limit-2.3.0.tgz\",
              \"integrity\": \"sha512-//88mFWSJx8lxCzwdAABTJL2MyWB12+eIY7MDL2SqLmAkeKU9qxRvWuSyTjm3FUmpBEMuFfckAIqEaVGUDxb6w==\",
              \"dev\": true,
              \"requires\": {
                \"p-try\": \"^2.0.0\"
              }
            }
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
        \"schema-utils\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-2.7.1.tgz\",
          \"integrity\": \"sha512-SHiNtMOUGWBQJwzISiVYKu82GiV4QYGePp3odlY1tuKO7gPtphAT5R/py0fA6xtbgLL/RvtJZnU9b8s0F1q0Xg==\",
          \"dev\": true,
          \"requires\": {
            \"@types/json-schema\": \"^7.0.5\",
            \"ajv\": \"^6.12.4\",
            \"ajv-keywords\": \"^3.5.2\"
          }
        },
        \"semver\": {
          \"version\": \"6.3.0\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
          \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
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
        }
      }
    },
    \"text-table\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/text-table/-/text-table-0.2.0.tgz\",
      \"integrity\": \"sha512-N+8UisAXDGk8PFXP4HAzVR9nbfmVJ3zYLAWiTIoqC5v5isinhr+r5uaO8+7r3BMfuNIufIsA7RdpVgacC2cSpw==\",
      \"dev\": true
    },
    \"throttle-debounce\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/throttle-debounce/-/throttle-debounce-2.3.0.tgz\",
      \"integrity\": \"sha512-H7oLPV0P7+jgvrk+6mwwwBDmxTaxnu9HMXmloNLXwnNO0ZxZ31Orah2n8lU1eMPvsaowP2CX+USCgyovXfdOFQ==\"
    },
    \"through2\": {
      \"version\": \"2.0.5\",
      \"resolved\": \"https://registry.npmjs.org/through2/-/through2-2.0.5.tgz\",
      \"integrity\": \"sha512-/mrRod8xqpA+IHSLyGCQ2s8SPHiCDEeQJSep1jqLYeEUClOFG2Qsh+4FU6G9VeqpZnGW/Su8LQGc4YKni5rYSQ==\",
      \"dev\": true,
      \"requires\": {
        \"readable-stream\": \"~2.3.6\",
        \"xtend\": \"~4.0.1\"
      }
    },
    \"timers-browserify\": {
      \"version\": \"2.0.12\",
      \"resolved\": \"https://registry.npmjs.org/timers-browserify/-/timers-browserify-2.0.12.tgz\",
      \"integrity\": \"sha512-9phl76Cqm6FhSX9Xe1ZUAMLtm1BLkKj2Qd5ApyWkXzsMRaA7dgr81kf4wJmQf/hAvg8EEyJxDo3du/0KlhPiKQ==\",
      \"dev\": true,
      \"requires\": {
        \"setimmediate\": \"^1.0.4\"
      }
    },
    \"to-arraybuffer\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/to-arraybuffer/-/to-arraybuffer-1.0.1.tgz\",
      \"integrity\": \"sha1-fSKbH8xjfkZsoIEYCDanqr/4P0M=\",
      \"dev\": true
    },
    \"to-fast-properties\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-2.0.0.tgz\",
      \"integrity\": \"sha512-/OaKK0xYrs3DmxRYqL/yDc+FxFUVYhDlXMhRmv3z915w2HF1tnN1omB354j8VUGO/hbRzyD6Y3sA7v7GS/ceog==\",
      \"dev\": true
    },
    \"to-object-path\": {
      \"version\": \"0.3.0\",
      \"resolved\": \"https://registry.npmjs.org/to-object-path/-/to-object-path-0.3.0.tgz\",
      \"integrity\": \"sha1-KXWIt7Dn4KwI4E5nL4XB9JmeF68=\",
      \"dev\": true,
      \"requires\": {
        \"kind-of\": \"^3.0.2\"
      },
      \"dependencies\": {
        \"kind-of\": {
          \"version\": \"3.2.2\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
          \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
          \"dev\": true,
          \"requires\": {
            \"is-buffer\": \"^1.1.5\"
          }
        }
      }
    },
    \"to-regex\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/to-regex/-/to-regex-3.0.2.tgz\",
      \"integrity\": \"sha512-FWtleNAtZ/Ki2qtqej2CXTOayOH9bHDQF+Q48VpWyDXjbYxA4Yz8iDB31zXOBUlOHHKidDbqGVrTUvQMPmBGBw==\",
      \"dev\": true,
      \"requires\": {
        \"define-property\": \"^2.0.2\",
        \"extend-shallow\": \"^3.0.2\",
        \"regex-not\": \"^1.0.2\",
        \"safe-regex\": \"^1.1.0\"
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"2.0.2\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-2.0.2.tgz\",
          \"integrity\": \"sha512-jwK2UV4cnPpbcG7+VRARKTZPUWowwXA8bzH5NP6ud0oeAxyYPuGZUAC7hMugpCdz4BeSZl2Dl9k66CHJ/46ZYQ==\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^1.0.2\",
            \"isobject\": \"^3.0.1\"
          }
        },
        \"extend-shallow\": {
          \"version\": \"3.0.2\",
          \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-3.0.2.tgz\",
          \"integrity\": \"sha1-Jqcarwc7OfshJxcnRhMcJwQCjbg=\",
          \"dev\": true,
          \"requires\": {
            \"assign-symbols\": \"^1.0.0\",
            \"is-extendable\": \"^1.0.1\"
          }
        },
        \"is-extendable\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
          \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
          \"dev\": true,
          \"requires\": {
            \"is-plain-object\": \"^2.0.4\"
          }
        }
      }
    },
    \"to-regex-range\": {
      \"version\": \"5.0.1\",
      \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-5.0.1.tgz\",
      \"integrity\": \"sha512-65P7iz6X5yEr1cwcgvQxbbIw7Uk3gOy5dIdtZ4rDveLqhrdJP+Li/Hx6tyK0NEb+2GCyneCMJiGqrADCSNk8sQ==\",
      \"dev\": true,
      \"requires\": {
        \"is-number\": \"^7.0.0\"
      },
      \"dependencies\": {
        \"is-number\": {
          \"version\": \"7.0.0\",
          \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
          \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
          \"dev\": true
        }
      }
    },
    \"toposort\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/toposort/-/toposort-2.0.2.tgz\",
      \"integrity\": \"sha512-0a5EOkAUp8D4moMi2W8ZF8jcga7BgZd91O/yabJCFY8az+XSzeGyTKs0Aoo897iV1Nj6guFq8orWDS96z91oGg==\",
      \"dev\": true
    },
    \"tough-cookie\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/tough-cookie/-/tough-cookie-4.0.0.tgz\",
      \"integrity\": \"sha512-tHdtEpQCMrc1YLrMaqXXcj6AxhYi/xgit6mZu1+EDWUn+qhUf8wMQoFIy9NXuq23zAwtcB0t/MjACGR18pcRbg==\",
      \"dev\": true,
      \"requires\": {
        \"psl\": \"^1.1.33\",
        \"punycode\": \"^2.1.1\",
        \"universalify\": \"^0.1.2\"
      },
      \"dependencies\": {
        \"universalify\": {
          \"version\": \"0.1.2\",
          \"resolved\": \"https://registry.npmjs.org/universalify/-/universalify-0.1.2.tgz\",
          \"integrity\": \"sha512-rBJeI5CXAlmy1pV+617WB9J63U6XcazHHF2f2dbJix4XzpUF0RS3Zbj0FGIOCAva5P/d/GBOYaACQ1w+0azUkg==\",
          \"dev\": true
        }
      }
    },
    \"tr46\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/tr46/-/tr46-2.1.0.tgz\",
      \"integrity\": \"sha512-15Ih7phfcdP5YxqiB+iDtLoaTz4Nd35+IiAv0kQ5FNKHzXgdWqPoTIqEDDJmXceQt4JZk6lVPT8lnDlPpGDppw==\",
      \"dev\": true,
      \"requires\": {
        \"punycode\": \"^2.1.1\"
      }
    },
    \"trim-newlines\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/trim-newlines/-/trim-newlines-3.0.1.tgz\",
      \"integrity\": \"sha512-c1PTsA3tYrIsLGkJkzHF+w9F2EyxfXGo4UyJc4pFL++FMjnq0HJS69T3M7d//gKrFKwy429bouPescbjecU+Zw==\",
      \"dev\": true
    },
    \"trim-right\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/trim-right/-/trim-right-1.0.1.tgz\",
      \"integrity\": \"sha1-yy4SAwZ+DI3h9hQJS5/kVwTqYAM=\",
      \"dev\": true
    },
    \"true-case-path\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/true-case-path/-/true-case-path-1.0.3.tgz\",
      \"integrity\": \"sha512-m6s2OdQe5wgpFMC+pAJ+q9djG82O2jcHPOI6RNg1yy9rCYR+WD6Nbpl32fDpfC56nirdRy+opFa/Vk7HYhqaew==\",
      \"dev\": true,
      \"requires\": {
        \"glob\": \"^7.1.2\"
      }
    },
    \"ts-invariant\": {
      \"version\": \"0.4.4\",
      \"resolved\": \"https://registry.npmjs.org/ts-invariant/-/ts-invariant-0.4.4.tgz\",
      \"integrity\": \"sha512-uEtWkFM/sdZvRNNDL3Ehu4WVpwaulhwQszV8mrtcdeE8nN00BV9mAmQ88RkrBhFgl9gMgvjJLAQcZbnPXI9mlA==\",
      \"requires\": {
        \"tslib\": \"^1.9.3\"
      }
    },
    \"ts-loader\": {
      \"version\": \"8.3.0\",
      \"resolved\": \"https://registry.npmjs.org/ts-loader/-/ts-loader-8.3.0.tgz\",
      \"integrity\": \"sha512-MgGly4I6cStsJy27ViE32UoqxPTN9Xly4anxxVyaIWR+9BGxboV4EyJBGfR3RePV7Ksjj3rHmPZJeIt+7o4Vag==\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^4.1.0\",
        \"enhanced-resolve\": \"^4.0.0\",
        \"loader-utils\": \"^2.0.0\",
        \"micromatch\": \"^4.0.0\",
        \"semver\": \"^7.3.4\"
      },
      \"dependencies\": {
        \"json5\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/json5/-/json5-2.2.0.tgz\",
          \"integrity\": \"sha512-f+8cldu7X/y7RAJurMEJmdoKXGB/X550w2Nr3tTbezL6RwEE/iMcm+tZnXeoZtKuOq6ft8+CqzEkrIgx1fPoQA==\",
          \"dev\": true,
          \"requires\": {
            \"minimist\": \"^1.2.5\"
          }
        },
        \"loader-utils\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/loader-utils/-/loader-utils-2.0.0.tgz\",
          \"integrity\": \"sha512-rP4F0h2RaWSvPEkD7BLDFQnvSf+nK+wr3ESUjNTyAGobqrijmW92zc+SO6d4p4B1wh7+B/Jg1mkQe5NYUEHtHQ==\",
          \"dev\": true,
          \"requires\": {
            \"big.js\": \"^5.2.2\",
            \"emojis-list\": \"^3.0.0\",
            \"json5\": \"^2.1.2\"
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
        \"micromatch\": {
          \"version\": \"4.0.4\",
          \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-4.0.4.tgz\",
          \"integrity\": \"sha512-pRmzw/XUcwXGpD9aI9q/0XOwLNygjETJ8y0ao0wdqprrzDa4YnxLcz7fQRZr8voh8V10kGhABbNcHVk5wHgWwg==\",
          \"dev\": true,
          \"requires\": {
            \"braces\": \"^3.0.1\",
            \"picomatch\": \"^2.2.3\"
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
    \"ts-node\": {
      \"version\": \"10.3.0\",
      \"resolved\": \"https://registry.npmjs.org/ts-node/-/ts-node-10.3.0.tgz\",
      \"integrity\": \"sha512-RYIy3i8IgpFH45AX4fQHExrT8BxDeKTdC83QFJkNzkvt8uFB6QJ8XMyhynYiKMLxt9a7yuXaDBZNOYS3XjDcYw==\",
      \"dev\": true,
      \"requires\": {
        \"@cspotcode/source-map-support\": \"0.7.0\",
        \"@tsconfig/node10\": \"^1.0.7\",
        \"@tsconfig/node12\": \"^1.0.7\",
        \"@tsconfig/node14\": \"^1.0.0\",
        \"@tsconfig/node16\": \"^1.0.2\",
        \"acorn\": \"^8.4.1\",
        \"acorn-walk\": \"^8.1.1\",
        \"arg\": \"^4.1.0\",
        \"create-require\": \"^1.1.0\",
        \"diff\": \"^4.0.1\",
        \"make-error\": \"^1.1.1\",
        \"yn\": \"3.1.1\"
      },
      \"dependencies\": {
        \"acorn\": {
          \"version\": \"8.5.0\",
          \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-8.5.0.tgz\",
          \"integrity\": \"sha512-yXbYeFy+jUuYd3/CDcg2NkIYE991XYX/bje7LmjJigUciaeO1JR4XxXgCIV1/Zc/dRuFEyw1L0pbA+qynJkW5Q==\",
          \"dev\": true
        },
        \"diff\": {
          \"version\": \"4.0.2\",
          \"resolved\": \"https://registry.npmjs.org/diff/-/diff-4.0.2.tgz\",
          \"integrity\": \"sha512-58lmxKSA4BNyLz+HHMUzlOEpg09FV+ev6ZMe3vJihgdxzgcwZ8VoEEPmALCZG9LmqfVoNMMKpttIYTVG6uDY7A==\",
          \"dev\": true
        }
      }
    },
    \"tsconfig-paths\": {
      \"version\": \"3.11.0\",
      \"resolved\": \"https://registry.npmjs.org/tsconfig-paths/-/tsconfig-paths-3.11.0.tgz\",
      \"integrity\": \"sha512-7ecdYDnIdmv639mmDwslG6KQg1Z9STTz1j7Gcz0xa+nshh/gKDAHcPxRbWOsA3SPp0tXP2leTcY9Kw+NAkfZzA==\",
      \"dev\": true,
      \"requires\": {
        \"@types/json5\": \"^0.0.29\",
        \"json5\": \"^1.0.1\",
        \"minimist\": \"^1.2.0\",
        \"strip-bom\": \"^3.0.0\"
      }
    },
    \"tslib\": {
      \"version\": \"1.14.1\",
      \"resolved\": \"https://registry.npmjs.org/tslib/-/tslib-1.14.1.tgz\",
      \"integrity\": \"sha512-Xni35NKzjgMrwevysHTCArtLDpPvye8zV/0E4EyYn43P7/7qvQwPh9BGkHewbMulVntbigmcT7rdX3BNo9wRJg==\"
    },
    \"tty-browserify\": {
      \"version\": \"0.0.0\",
      \"resolved\": \"https://registry.npmjs.org/tty-browserify/-/tty-browserify-0.0.0.tgz\",
      \"integrity\": \"sha1-oVe6QC2iTpv5V/mqadUk7tQpAaY=\",
      \"dev\": true
    },
    \"tunnel-agent\": {
      \"version\": \"0.6.0\",
      \"resolved\": \"https://registry.npmjs.org/tunnel-agent/-/tunnel-agent-0.6.0.tgz\",
      \"integrity\": \"sha512-McnNiV1l8RYeY8tBgEpuodCC1mLUdbSN+CYBL7kJsJNInOP8UjDDEwdk6Mw60vdLLrr5NHKZhMAOSrR2NZuQ+w==\",
      \"dev\": true,
      \"requires\": {
        \"safe-buffer\": \"^5.0.1\"
      }
    },
    \"tweetnacl\": {
      \"version\": \"0.14.5\",
      \"resolved\": \"https://registry.npmjs.org/tweetnacl/-/tweetnacl-0.14.5.tgz\",
      \"integrity\": \"sha512-KXXFFdAbFXY4geFIwoyNK+f5Z1b7swfXABfL7HXCmoIWMKU3dmS26672A4EeQtDzLKy7SXmfBu51JolvEKwtGA==\",
      \"dev\": true
    },
    \"type-check\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/type-check/-/type-check-0.3.2.tgz\",
      \"integrity\": \"sha1-WITKtRLPHTVeP7eE8wgEsrUg23I=\",
      \"dev\": true,
      \"requires\": {
        \"prelude-ls\": \"~1.1.2\"
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
      },
      \"dependencies\": {
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
        \"has-symbols\": {
          \"version\": \"1.0.3\",
          \"resolved\": \"https://registry.npmjs.org/has-symbols/-/has-symbols-1.0.3.tgz\",
          \"integrity\": \"sha512-l3LCuF6MgDNwTDKkdYGEihYjt5pRPbEg46rtlmnSPlUbgmB8LOIrKJbYYFBSbnPaJexMKtiPO8hmeRjRz2Td+A==\",
          \"dev\": true
        }
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
    \"typedarray\": {
      \"version\": \"0.0.6\",
      \"resolved\": \"https://registry.npmjs.org/typedarray/-/typedarray-0.0.6.tgz\",
      \"integrity\": \"sha1-hnrHTjhkGHsdPUfZlqeOxciDB3c=\",
      \"dev\": true
    },
    \"typescript\": {
      \"version\": \"4.4.4\",
      \"resolved\": \"https://registry.npmjs.org/typescript/-/typescript-4.4.4.tgz\",
      \"integrity\": \"sha512-DqGhF5IKoBl8WNf8C1gu8q0xZSInh9j1kJJMqT3a94w1JzVaBU4EXOSMrz9yDqMT0xt3selp83fuFMQ0uzv6qA==\",
      \"dev\": true
    },
    \"unbox-primitive\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/unbox-primitive/-/unbox-primitive-1.0.1.tgz\",
      \"integrity\": \"sha512-tZU/3NqK3dA5gpE1KtyiJUrEB0lxnGkMFHptJ7q6ewdZ8s12QrODwNbhIJStmJkd1QDXa1NRA8aF2A1zk/Ypyw==\",
      \"dev\": true,
      \"requires\": {
        \"function-bind\": \"^1.1.1\",
        \"has-bigints\": \"^1.0.1\",
        \"has-symbols\": \"^1.0.2\",
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
    \"union-value\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/union-value/-/union-value-1.0.1.tgz\",
      \"integrity\": \"sha512-tJfXmxMeWYnczCVs7XAEvIV7ieppALdyepWMkHkwciRpZraG/xwT+s2JN8+pr1+8jCRf80FFzvr+MpQeeoF4Xg==\",
      \"dev\": true,
      \"requires\": {
        \"arr-union\": \"^3.1.0\",
        \"get-value\": \"^2.0.6\",
        \"is-extendable\": \"^0.1.1\",
        \"set-value\": \"^2.0.1\"
      }
    },
    \"uniq\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/uniq/-/uniq-1.0.1.tgz\",
      \"integrity\": \"sha1-sxxa6CVIRKOoKBVBzisEuGWnNP8=\",
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
    \"unset-value\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/unset-value/-/unset-value-1.0.0.tgz\",
      \"integrity\": \"sha1-g3aHP30jNRef+x5vw6jtDfyKtVk=\",
      \"dev\": true,
      \"requires\": {
        \"has-value\": \"^0.3.1\",
        \"isobject\": \"^3.0.0\"
      },
      \"dependencies\": {
        \"has-value\": {
          \"version\": \"0.3.1\",
          \"resolved\": \"https://registry.npmjs.org/has-value/-/has-value-0.3.1.tgz\",
          \"integrity\": \"sha1-ex9YutpiyoJ+wKIHgCVlSEWZXh8=\",
          \"dev\": true,
          \"requires\": {
            \"get-value\": \"^2.0.3\",
            \"has-values\": \"^0.1.4\",
            \"isobject\": \"^2.0.0\"
          },
          \"dependencies\": {
            \"isobject\": {
              \"version\": \"2.1.0\",
              \"resolved\": \"https://registry.npmjs.org/isobject/-/isobject-2.1.0.tgz\",
              \"integrity\": \"sha1-8GVWEJaj8dou9GJy+BXIQNh+DIk=\",
              \"dev\": true,
              \"requires\": {
                \"isarray\": \"1.0.0\"
              }
            }
          }
        },
        \"has-values\": {
          \"version\": \"0.1.4\",
          \"resolved\": \"https://registry.npmjs.org/has-values/-/has-values-0.1.4.tgz\",
          \"integrity\": \"sha1-bWHeldkd/Km5oCCJrThL/49it3E=\",
          \"dev\": true
        }
      }
    },
    \"upath\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/upath/-/upath-1.2.0.tgz\",
      \"integrity\": \"sha512-aZwGpamFO61g3OlfT7OQCHqhGnW43ieH9WZeP7QxN/G/jS4jfqUkZxoryvJgVPEcrl5NL/ggHsSmLMHuH64Lhg==\",
      \"dev\": true,
      \"optional\": true
    },
    \"update-browserslist-db\": {
      \"version\": \"1.0.11\",
      \"resolved\": \"https://registry.npmjs.org/update-browserslist-db/-/update-browserslist-db-1.0.11.tgz\",
      \"integrity\": \"sha512-dCwEFf0/oT85M1fHBg4F0jtLwJrutGoHSQXCh7u4o2t1drG+c0a9Flnqww6XUKSfQMPpJBRjU8d4RXB09qtvaA==\",
      \"dev\": true,
      \"requires\": {
        \"escalade\": \"^3.1.1\",
        \"picocolors\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"picocolors\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/picocolors/-/picocolors-1.0.0.tgz\",
          \"integrity\": \"sha512-1fygroTLlHu66zi26VoTDv8yRgm0Fccecssto+MhsZ0D/DGW2sm8E8AjW7NU5VVTRt5GxbeZ5qBuJr+HyLYkjQ==\",
          \"dev\": true
        }
      }
    },
    \"uri-js\": {
      \"version\": \"4.4.1\",
      \"resolved\": \"https://registry.npmjs.org/uri-js/-/uri-js-4.4.1.tgz\",
      \"integrity\": \"sha512-7rKUyy33Q1yc98pQ1DAmLtwX109F7TIfWlW1Ydo8Wl1ii1SeHieeh0HHfPeL2fMXK6z0s8ecKs9frCuLJvndBg==\",
      \"dev\": true,
      \"requires\": {
        \"punycode\": \"^2.1.0\"
      }
    },
    \"urix\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/urix/-/urix-0.1.0.tgz\",
      \"integrity\": \"sha1-2pN/emLiH+wf0Y1Js1wpNQZ6bHI=\",
      \"dev\": true
    },
    \"url\": {
      \"version\": \"0.11.0\",
      \"resolved\": \"https://registry.npmjs.org/url/-/url-0.11.0.tgz\",
      \"integrity\": \"sha1-ODjpfPxgUh63PFJajlW/3Z4uKPE=\",
      \"dev\": true,
      \"requires\": {
        \"punycode\": \"1.3.2\",
        \"querystring\": \"0.2.0\"
      },
      \"dependencies\": {
        \"punycode\": {
          \"version\": \"1.3.2\",
          \"resolved\": \"https://registry.npmjs.org/punycode/-/punycode-1.3.2.tgz\",
          \"integrity\": \"sha1-llOgNvt8HuQjQvIyXM7v6jkmxI0=\",
          \"dev\": true
        }
      }
    },
    \"use\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/use/-/use-3.1.1.tgz\",
      \"integrity\": \"sha512-cwESVXlO3url9YWlFW/TA9cshCEhtu7IKJ/p5soJ/gGpj7vbvFrAY/eIioQ6Dw23KjZhYgiIo8HOs1nQ2vr/oQ==\",
      \"dev\": true
    },
    \"util\": {
      \"version\": \"0.10.4\",
      \"resolved\": \"https://registry.npmjs.org/util/-/util-0.10.4.tgz\",
      \"integrity\": \"sha512-0Pm9hTQ3se5ll1XihRic3FDIku70C+iHUdT/W926rSgHV5QgXsYbKZN8MSC3tJtSkhuROzvsQjAaFENRXr+19A==\",
      \"dev\": true,
      \"requires\": {
        \"inherits\": \"2.0.3\"
      },
      \"dependencies\": {
        \"inherits\": {
          \"version\": \"2.0.3\",
          \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.3.tgz\",
          \"integrity\": \"sha1-Yzwsg+PaQqUC9SRmAiSA9CCCYd4=\",
          \"dev\": true
        }
      }
    },
    \"util-deprecate\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
      \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
      \"dev\": true
    },
    \"uuid\": {
      \"version\": \"3.4.0\",
      \"resolved\": \"https://registry.npmjs.org/uuid/-/uuid-3.4.0.tgz\",
      \"integrity\": \"sha512-HjSDRw6gZE5JMggctHBcjVak08+KEVhSIiDzFnT9S9aegmp85S/bReBVTb4QTFaRNptJ9kuYaNhnbNEOkbKb/A==\"
    },
    \"v-click-outside\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/v-click-outside/-/v-click-outside-3.1.2.tgz\",
      \"integrity\": \"sha512-gMdRqfRE6m6XU6SiFi3dyBlFB2MWogiXpof8Aa3LQysrl9pzTndqp/iEaAphLoadaQUFnQ0ec6fLLaxr7LiY6A==\"
    },
    \"v8-compile-cache\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/v8-compile-cache/-/v8-compile-cache-2.3.0.tgz\",
      \"integrity\": \"sha512-l8lCEmLcLYZh4nbunNZvQCJc5pv7+RCwa8q/LdUx8u7lsWvPDKmpodJAJNwkAhJC//dFY48KuIEmjtd4RViDrA==\",
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
    \"verror\": {
      \"version\": \"1.10.0\",
      \"resolved\": \"https://registry.npmjs.org/verror/-/verror-1.10.0.tgz\",
      \"integrity\": \"sha512-ZZKSmDAEFOijERBLkmYfJ+vmk3w+7hOLYDNkRCuRuMJGEmqYNCNLyBBFwWKVMhfwaEF3WOd0Zlw86U/WC/+nYw==\",
      \"dev\": true,
      \"requires\": {
        \"assert-plus\": \"^1.0.0\",
        \"core-util-is\": \"1.0.2\",
        \"extsprintf\": \"^1.2.0\"
      },
      \"dependencies\": {
        \"core-util-is\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/core-util-is/-/core-util-is-1.0.2.tgz\",
          \"integrity\": \"sha512-3lqz5YjWTYnW6dlDa5TLaTCcShfar1e40rmcJVwCBJC6mWlFuj0eCHIElmG1g5kyuJ/GD+8Wn4FFCcz4gJPfaQ==\",
          \"dev\": true
        }
      }
    },
    \"vm-browserify\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/vm-browserify/-/vm-browserify-1.1.2.tgz\",
      \"integrity\": \"sha512-2ham8XPWTONajOR0ohOKOHXkm3+gaBmGut3SRuu75xLd/RRaY6vqgh8NBYYk7+RW3u5AtzPQZG8F10LHkl0lAQ==\",
      \"dev\": true
    },
    \"vue\": {
      \"version\": \"2.6.14\",
      \"resolved\": \"https://registry.npmjs.org/vue/-/vue-2.6.14.tgz\",
      \"integrity\": \"sha512-x2284lgYvjOMj3Za7kqzRcUSxBboHqtgRE2zlos1qWaOye5yUmHn42LB1250NJBLRwEcdrB0JRwyPTEPhfQjiQ==\"
    },
    \"vue-apollo\": {
      \"version\": \"3.0.8\",
      \"resolved\": \"https://registry.npmjs.org/vue-apollo/-/vue-apollo-3.0.8.tgz\",
      \"integrity\": \"sha512-RnkC75PMoGwl1sdZdVO3R9P51wqmgOVi4QmljkBaTzlVThVlqfkJhrBcPiw2K9EohvSagvZclNqXktyOCcXbBA==\",
      \"requires\": {
        \"chalk\": \"^2.4.2\",
        \"serialize-javascript\": \"^4.0.0\",
        \"throttle-debounce\": \"^2.1.0\"
      },
      \"dependencies\": {
        \"chalk\": {
          \"version\": \"2.4.2\",
          \"resolved\": \"https://registry.npmjs.org/chalk/-/chalk-2.4.2.tgz\",
          \"integrity\": \"sha512-Mti+f9lpJNcwF4tWV8/OrTTtF1gZi+f8FqlyAdouralcFWFQWF2+NgCHShjkCb+IFBLq9buZwE1xckQU4peSuQ==\",
          \"requires\": {
            \"ansi-styles\": \"^3.2.1\",
            \"escape-string-regexp\": \"^1.0.5\",
            \"supports-color\": \"^5.3.0\"
          }
        },
        \"supports-color\": {
          \"version\": \"5.5.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-5.5.0.tgz\",
          \"integrity\": \"sha512-QjVjwdXIt408MIiAqCX4oUKsgU2EqAGzs2Ppkm4aQYbjm+ZEWEcW4SfFNTr4uMNZma0ey4f5lgLrkB0aX0QMow==\",
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
      }
    },
    \"vue-content-loader\": {
      \"version\": \"0.2.3\",
      \"resolved\": \"https://registry.npmjs.org/vue-content-loader/-/vue-content-loader-0.2.3.tgz\",
      \"integrity\": \"sha512-gJlNEdXkuHGvgnyY0lBMsrSsOMk+TTog5uNAil5MSLv08f/mE7Apag0VavpxJ6ieb4P5J1iVKEIhHI41HQNq9Q==\",
      \"requires\": {
        \"babel-helper-vue-jsx-merge-props\": \"^2.0.3\"
      }
    },
    \"vue-eslint-parser\": {
      \"version\": \"7.11.0\",
      \"resolved\": \"https://registry.npmjs.org/vue-eslint-parser/-/vue-eslint-parser-7.11.0.tgz\",
      \"integrity\": \"sha512-qh3VhDLeh773wjgNTl7ss0VejY9bMMa0GoDG2fQVyDzRFdiU3L7fw74tWZDHNQXdZqxO3EveQroa9ct39D2nqg==\",
      \"dev\": true,
      \"requires\": {
        \"debug\": \"^4.1.1\",
        \"eslint-scope\": \"^5.1.1\",
        \"eslint-visitor-keys\": \"^1.1.0\",
        \"espree\": \"^6.2.1\",
        \"esquery\": \"^1.4.0\",
        \"lodash\": \"^4.17.21\",
        \"semver\": \"^6.3.0\"
      },
      \"dependencies\": {
        \"eslint-visitor-keys\": {
          \"version\": \"1.3.0\",
          \"resolved\": \"https://registry.npmjs.org/eslint-visitor-keys/-/eslint-visitor-keys-1.3.0.tgz\",
          \"integrity\": \"sha512-6J72N8UNa462wa/KFODt/PJ3IU60SDpC3QXC1Hjc1BXXpfL2C9R5+AU7jhe0F6GREqVMh4Juu+NY7xn+6dipUQ==\",
          \"dev\": true
        },
        \"espree\": {
          \"version\": \"6.2.1\",
          \"resolved\": \"https://registry.npmjs.org/espree/-/espree-6.2.1.tgz\",
          \"integrity\": \"sha512-ysCxRQY3WaXJz9tdbWOwuWr5Y/XrPTGX9Kiz3yoUXwW0VZ4w30HTkQLaGx/+ttFjF8i+ACbArnB4ce68a9m5hw==\",
          \"dev\": true,
          \"requires\": {
            \"acorn\": \"^7.1.1\",
            \"acorn-jsx\": \"^5.2.0\",
            \"eslint-visitor-keys\": \"^1.1.0\"
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
    \"vue-hot-reload-api\": {
      \"version\": \"2.3.4\",
      \"resolved\": \"https://registry.npmjs.org/vue-hot-reload-api/-/vue-hot-reload-api-2.3.4.tgz\",
      \"integrity\": \"sha512-BXq3jwIagosjgNVae6tkHzzIk6a8MHFtzAdwhnV5VlvPTFxDCvIttgSiHWjdGoTJvXtmRu5HacExfdarRcFhog==\",
      \"dev\": true
    },
    \"vue-i18n\": {
      \"version\": \"8.26.5\",
      \"resolved\": \"https://registry.npmjs.org/vue-i18n/-/vue-i18n-8.26.5.tgz\",
      \"integrity\": \"sha512-qYqfsFd8v2QFSLDAabqXXXpwjGvkuqJtTWqRpZPXpAFO6PArGH4A9vSplnA0HLmnB8km7OB5ZSdP8lkkX0rLew==\"
    },
    \"vue-loader\": {
      \"version\": \"15.9.8\",
      \"resolved\": \"https://registry.npmjs.org/vue-loader/-/vue-loader-15.9.8.tgz\",
      \"integrity\": \"sha512-GwSkxPrihfLR69/dSV3+5CdMQ0D+jXg8Ma1S4nQXKJAznYFX14vHdc/NetQc34Dw+rBbIJyP7JOuVb9Fhprvog==\",
      \"dev\": true,
      \"requires\": {
        \"@vue/component-compiler-utils\": \"^3.1.0\",
        \"hash-sum\": \"^1.0.2\",
        \"loader-utils\": \"^1.1.0\",
        \"vue-hot-reload-api\": \"^2.3.0\",
        \"vue-style-loader\": \"^4.1.0\"
      }
    },
    \"vue-resource\": {
      \"version\": \"1.5.3\",
      \"resolved\": \"https://registry.npmjs.org/vue-resource/-/vue-resource-1.5.3.tgz\",
      \"integrity\": \"sha512-REhTuEuYSpwmEH/VN4fgDQVC/VXxDK/xsguuiDPnINxOwy1s0CSu//p++osTUkiAXi6d/vptwBpb0AcBIDsXzw==\",
      \"requires\": {
        \"got\": \">=8.0 <12.0\"
      }
    },
    \"vue-router\": {
      \"version\": \"2.8.1\",
      \"resolved\": \"https://registry.npmjs.org/vue-router/-/vue-router-2.8.1.tgz\",
      \"integrity\": \"sha512-MC4jacHBhTPKtmcfzvaj2N7g6jgJ/Z/eIjZdt+yUaUOM1iKC0OUIlO/xCtz6OZFFTNUJs/1YNro2GN/lE+nOXA==\"
    },
    \"vue-style-loader\": {
      \"version\": \"4.1.3\",
      \"resolved\": \"https://registry.npmjs.org/vue-style-loader/-/vue-style-loader-4.1.3.tgz\",
      \"integrity\": \"sha512-sFuh0xfbtpRlKfm39ss/ikqs9AbKCoXZBpHeVZ8Tx650o0k0q/YCM7FRvigtxpACezfq6af+a7JeqVTWvncqDg==\",
      \"dev\": true,
      \"requires\": {
        \"hash-sum\": \"^1.0.2\",
        \"loader-utils\": \"^1.0.2\"
      }
    },
    \"vue-template-compiler\": {
      \"version\": \"2.6.14\",
      \"resolved\": \"https://registry.npmjs.org/vue-template-compiler/-/vue-template-compiler-2.6.14.tgz\",
      \"integrity\": \"sha512-ODQS1SyMbjKoO1JBJZojSw6FE4qnh9rIpUZn2EUT86FKizx9uH5z6uXiIrm4/Nb/gwxTi/o17ZDEGWAXHvtC7g==\",
      \"requires\": {
        \"de-indent\": \"^1.0.2\",
        \"he\": \"^1.1.0\"
      }
    },
    \"vue-template-es2015-compiler\": {
      \"version\": \"1.9.1\",
      \"resolved\": \"https://registry.npmjs.org/vue-template-es2015-compiler/-/vue-template-es2015-compiler-1.9.1.tgz\",
      \"integrity\": \"sha512-4gDntzrifFnCEvyoO8PqyJDmguXgVPxKiIxrBKjIowvL9l+N66196+72XVYR8BBf1Uv1Fgt3bGevJ+sEmxfZzw==\",
      \"dev\": true
    },
    \"vuex\": {
      \"version\": \"2.5.0\",
      \"resolved\": \"https://registry.npmjs.org/vuex/-/vuex-2.5.0.tgz\",
      \"integrity\": \"sha512-5oJPOJySBgSgSzoeO+gZB/BbN/XsapgIF6tz34UwJqnGZMQurzIO3B4KIBf862gfc9ya+oduY5sSkq+5/oOilQ==\"
    },
    \"w3c-hr-time\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/w3c-hr-time/-/w3c-hr-time-1.0.2.tgz\",
      \"integrity\": \"sha512-z8P5DvDNjKDoFIHK7q8r8lackT6l+jo/Ye3HOle7l9nICP9lf1Ci25fy9vHd0JOWewkIFzXIEig3TdKT7JQ5fQ==\",
      \"dev\": true,
      \"requires\": {
        \"browser-process-hrtime\": \"^1.0.0\"
      }
    },
    \"w3c-xmlserializer\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/w3c-xmlserializer/-/w3c-xmlserializer-2.0.0.tgz\",
      \"integrity\": \"sha512-4tzD0mF8iSiMiNs30BiLO3EpfGLZUT2MSX/G+o7ZywDzliWQ3OPtTZ0PTC3B3ca1UAf4cJMHB+2Bf56EriJuRA==\",
      \"dev\": true,
      \"requires\": {
        \"xml-name-validator\": \"^3.0.0\"
      }
    },
    \"watchpack\": {
      \"version\": \"1.7.5\",
      \"resolved\": \"https://registry.npmjs.org/watchpack/-/watchpack-1.7.5.tgz\",
      \"integrity\": \"sha512-9P3MWk6SrKjHsGkLT2KHXdQ/9SNkyoJbabxnKOoJepsvJjJG8uYTR3yTPxPQvNDI3w4Nz1xnE0TLHK4RIVe/MQ==\",
      \"dev\": true,
      \"requires\": {
        \"chokidar\": \"^3.4.1\",
        \"graceful-fs\": \"^4.1.2\",
        \"neo-async\": \"^2.5.0\",
        \"watchpack-chokidar2\": \"^2.0.1\"
      }
    },
    \"watchpack-chokidar2\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/watchpack-chokidar2/-/watchpack-chokidar2-2.0.1.tgz\",
      \"integrity\": \"sha512-nCFfBIPKr5Sh61s4LPpy1Wtfi0HE8isJ3d2Yb5/Ppw2P2B/3eVSEBjKfN0fmHJSK14+31KwMKmcrzs2GM4P0Ww==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"chokidar\": \"^2.1.8\"
      },
      \"dependencies\": {
        \"anymatch\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-2.0.0.tgz\",
          \"integrity\": \"sha512-5teOsQWABXHHBFP9y3skS5P3d/WfWXpv3FUpy+LorMrNYaT9pI4oLMQX7jzQ2KklNpGpWHzdCXTDT2Y3XGlZBw==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"micromatch\": \"^3.1.4\",
            \"normalize-path\": \"^2.1.1\"
          },
          \"dependencies\": {
            \"normalize-path\": {
              \"version\": \"2.1.1\",
              \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-2.1.1.tgz\",
              \"integrity\": \"sha512-3pKJwH184Xo/lnH6oyP1q2pMd7HcypqqmRs91/6/i2CGtWwIKGCkOOMTm/zXbgTEWHw1uNpNi/igc3ePOYHb6w==\",
              \"dev\": true,
              \"optional\": true,
              \"requires\": {
                \"remove-trailing-separator\": \"^1.0.1\"
              }
            }
          }
        },
        \"binary-extensions\": {
          \"version\": \"1.13.1\",
          \"resolved\": \"https://registry.npmjs.org/binary-extensions/-/binary-extensions-1.13.1.tgz\",
          \"integrity\": \"sha512-Un7MIEDdUC5gNpcGDV97op1Ywk748MpHcFTHoYs6qnj1Z3j7I53VG3nwZhKzoBZmbdRNnb6WRdFlwl7tSDuZGw==\",
          \"dev\": true,
          \"optional\": true
        },
        \"braces\": {
          \"version\": \"2.3.2\",
          \"resolved\": \"https://registry.npmjs.org/braces/-/braces-2.3.2.tgz\",
          \"integrity\": \"sha512-aNdbnj9P8PjdXU4ybaWLK2IF3jc/EoDYbC7AazW6to3TRsfXxscC9UXOB5iDiEQrkyIbWp2SLQda4+QAa7nc3w==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"arr-flatten\": \"^1.1.0\",
            \"array-unique\": \"^0.3.2\",
            \"extend-shallow\": \"^2.0.1\",
            \"fill-range\": \"^4.0.0\",
            \"isobject\": \"^3.0.1\",
            \"repeat-element\": \"^1.1.2\",
            \"snapdragon\": \"^0.8.1\",
            \"snapdragon-node\": \"^2.0.1\",
            \"split-string\": \"^3.0.2\",
            \"to-regex\": \"^3.0.1\"
          }
        },
        \"chokidar\": {
          \"version\": \"2.1.8\",
          \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-2.1.8.tgz\",
          \"integrity\": \"sha512-ZmZUazfOzf0Nve7duiCKD23PFSCs4JPoYyccjUFF3aQkQadqBhfzhjkwBH2mNOG9cTBwhamM37EIsIkZw3nRgg==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"anymatch\": \"^2.0.0\",
            \"async-each\": \"^1.0.1\",
            \"braces\": \"^2.3.2\",
            \"fsevents\": \"^1.2.7\",
            \"glob-parent\": \"^3.1.0\",
            \"inherits\": \"^2.0.3\",
            \"is-binary-path\": \"^1.0.0\",
            \"is-glob\": \"^4.0.0\",
            \"normalize-path\": \"^3.0.0\",
            \"path-is-absolute\": \"^1.0.0\",
            \"readdirp\": \"^2.2.1\",
            \"upath\": \"^1.1.1\"
          }
        },
        \"fill-range\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/fill-range/-/fill-range-4.0.0.tgz\",
          \"integrity\": \"sha512-VcpLTWqWDiTerugjj8e3+esbg+skS3M9e54UuR3iCeIDMXCLTsAH8hTSzDQU/X6/6t3eYkOKoZSef2PlU6U1XQ==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"extend-shallow\": \"^2.0.1\",
            \"is-number\": \"^3.0.0\",
            \"repeat-string\": \"^1.6.1\",
            \"to-regex-range\": \"^2.1.0\"
          }
        },
        \"fsevents\": {
          \"version\": \"1.2.13\",
          \"resolved\": \"https://registry.npmjs.org/fsevents/-/fsevents-1.2.13.tgz\",
          \"integrity\": \"sha512-oWb1Z6mkHIskLzEJ/XWX0srkpkTQ7vaopMQkyaEIoq0fmtFVxOthb8cCxeT+p3ynTdkk/RZwbgG4brR5BeWECw==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"bindings\": \"^1.5.0\",
            \"nan\": \"^2.12.1\"
          }
        },
        \"glob-parent\": {
          \"version\": \"3.1.0\",
          \"resolved\": \"https://registry.npmjs.org/glob-parent/-/glob-parent-3.1.0.tgz\",
          \"integrity\": \"sha512-E8Ak/2+dZY6fnzlR7+ueWvhsH1SjHr4jjss4YS/h4py44jY9MhK/VFdaZJAWDz6BbL21KeteKxFSFpq8OS5gVA==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"is-glob\": \"^3.1.0\",
            \"path-dirname\": \"^1.0.0\"
          },
          \"dependencies\": {
            \"is-glob\": {
              \"version\": \"3.1.0\",
              \"resolved\": \"https://registry.npmjs.org/is-glob/-/is-glob-3.1.0.tgz\",
              \"integrity\": \"sha512-UFpDDrPgM6qpnFNI+rh/p3bUaq9hKLZN8bMUWzxmcnZVS3omf4IPK+BrewlnWjO1WmUsMYuSjKh4UJuV4+Lqmw==\",
              \"dev\": true,
              \"optional\": true,
              \"requires\": {
                \"is-extglob\": \"^2.1.0\"
              }
            }
          }
        },
        \"is-binary-path\": {
          \"version\": \"1.0.1\",
          \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-1.0.1.tgz\",
          \"integrity\": \"sha512-9fRVlXc0uCxEDj1nQzaWONSpbTfx0FmJfzHF7pwlI8DkWGoHBBea4Pg5Ky0ojwwxQmnSifgbKkI06Qv0Ljgj+Q==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"binary-extensions\": \"^1.0.0\"
          }
        },
        \"readdirp\": {
          \"version\": \"2.2.1\",
          \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-2.2.1.tgz\",
          \"integrity\": \"sha512-1JU/8q+VgFZyxwrJ+SVIOsh+KywWGpds3NTqikiKpDMZWScmAYyKIgqkO+ARvNWJfXeXR1zxz7aHF4u4CyH6vQ==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"graceful-fs\": \"^4.1.11\",
            \"micromatch\": \"^3.1.10\",
            \"readable-stream\": \"^2.0.2\"
          }
        },
        \"to-regex-range\": {
          \"version\": \"2.1.1\",
          \"resolved\": \"https://registry.npmjs.org/to-regex-range/-/to-regex-range-2.1.1.tgz\",
          \"integrity\": \"sha512-ZZWNfCjUokXXDGXFpZehJIkZqq91BcULFq/Pi7M5i4JnxXdhMKAK682z8bCW3o8Hj1wuuzoKcW3DfVzaP6VuNg==\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"is-number\": \"^3.0.0\",
            \"repeat-string\": \"^1.6.1\"
          }
        }
      }
    },
    \"webidl-conversions\": {
      \"version\": \"6.1.0\",
      \"resolved\": \"https://registry.npmjs.org/webidl-conversions/-/webidl-conversions-6.1.0.tgz\",
      \"integrity\": \"sha512-qBIvFLGiBpLjfwmYAaHPXsn+ho5xZnGvyGvsarywGNc8VyQJUMHJ8OBKGGrPER0okBeMDaan4mNBlgBROxuI8w==\",
      \"dev\": true
    },
    \"webpack\": {
      \"version\": \"4.46.0\",
      \"resolved\": \"https://registry.npmjs.org/webpack/-/webpack-4.46.0.tgz\",
      \"integrity\": \"sha512-6jJuJjg8znb/xRItk7bkT0+Q7AHCYjjFnvKIWQPkNIOyRqoCGvkOs0ipeQzrqz4l5FtN5ZI/ukEHroeX/o1/5Q==\",
      \"dev\": true,
      \"requires\": {
        \"@webassemblyjs/ast\": \"1.9.0\",
        \"@webassemblyjs/helper-module-context\": \"1.9.0\",
        \"@webassemblyjs/wasm-edit\": \"1.9.0\",
        \"@webassemblyjs/wasm-parser\": \"1.9.0\",
        \"acorn\": \"^6.4.1\",
        \"ajv\": \"^6.10.2\",
        \"ajv-keywords\": \"^3.4.1\",
        \"chrome-trace-event\": \"^1.0.2\",
        \"enhanced-resolve\": \"^4.5.0\",
        \"eslint-scope\": \"^4.0.3\",
        \"json-parse-better-errors\": \"^1.0.2\",
        \"loader-runner\": \"^2.4.0\",
        \"loader-utils\": \"^1.2.3\",
        \"memory-fs\": \"^0.4.1\",
        \"micromatch\": \"^3.1.10\",
        \"mkdirp\": \"^0.5.3\",
        \"neo-async\": \"^2.6.1\",
        \"node-libs-browser\": \"^2.2.1\",
        \"schema-utils\": \"^1.0.0\",
        \"tapable\": \"^1.1.3\",
        \"terser-webpack-plugin\": \"^1.4.3\",
        \"watchpack\": \"^1.7.4\",
        \"webpack-sources\": \"^1.4.1\"
      },
      \"dependencies\": {
        \"acorn\": {
          \"version\": \"6.4.2\",
          \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-6.4.2.tgz\",
          \"integrity\": \"sha512-XtGIhXwF8YM8bJhGxG5kXgjkEuNGLTkoYqVE+KMR+aspr4KGYmKYg7yUe3KghyQ9yheNwLnjmzh/7+gfDBmHCQ==\",
          \"dev\": true
        },
        \"eslint-scope\": {
          \"version\": \"4.0.3\",
          \"resolved\": \"https://registry.npmjs.org/eslint-scope/-/eslint-scope-4.0.3.tgz\",
          \"integrity\": \"sha512-p7VutNr1O/QrxysMo3E45FjYDTeXBy0iTltPFNSqKAIfjDSXC+4dj+qfyuD8bfAXrW/y6lW3O76VaYNPKfpKrg==\",
          \"dev\": true,
          \"requires\": {
            \"esrecurse\": \"^4.1.0\",
            \"estraverse\": \"^4.1.1\"
          }
        },
        \"estraverse\": {
          \"version\": \"4.3.0\",
          \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.3.0.tgz\",
          \"integrity\": \"sha512-39nnKffWz8xN1BU/2c79n9nB9HDzo0niYUqx6xyqUnyoAnQyyWpOTdZEeiCch8BBu515t4wp9ZmgVfVhn9EBpw==\",
          \"dev\": true
        },
        \"terser-webpack-plugin\": {
          \"version\": \"1.4.5\",
          \"resolved\": \"https://registry.npmjs.org/terser-webpack-plugin/-/terser-webpack-plugin-1.4.5.tgz\",
          \"integrity\": \"sha512-04Rfe496lN8EYruwi6oPQkG0vo8C+HT49X687FZnpPF0qMAIHONI6HEXYPKDOE8e5HjXTyKfqRd/agHtH0kOtw==\",
          \"dev\": true,
          \"requires\": {
            \"cacache\": \"^12.0.2\",
            \"find-cache-dir\": \"^2.1.0\",
            \"is-wsl\": \"^1.1.0\",
            \"schema-utils\": \"^1.0.0\",
            \"serialize-javascript\": \"^4.0.0\",
            \"source-map\": \"^0.6.1\",
            \"terser\": \"^4.1.2\",
            \"webpack-sources\": \"^1.4.0\",
            \"worker-farm\": \"^1.7.0\"
          }
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
        },
        \"interpret\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/interpret/-/interpret-2.2.0.tgz\",
          \"integrity\": \"sha512-Ju0Bz/cEia55xDwUWEa8+olFpCiQoypjnQySseKtmjNrnps3P+xfpUmGr90T7yjlVJmOtybRvPXhKMbHr+fWnw==\",
          \"dev\": true
        }
      }
    },
    \"webpack-fix-style-only-entries\": {
      \"version\": \"0.6.1\",
      \"resolved\": \"https://registry.npmjs.org/webpack-fix-style-only-entries/-/webpack-fix-style-only-entries-0.6.1.tgz\",
      \"integrity\": \"sha512-wyIhoxS3DD3Fr9JA8hQPA+ZmaWnqPxx12Nv166wcsI/0fbReqyEtiIk2llOFYIg57WVS3XX5cZJxw2ji70R0sA==\",
      \"dev\": true
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
      }
    },
    \"whatwg-encoding\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/whatwg-encoding/-/whatwg-encoding-1.0.5.tgz\",
      \"integrity\": \"sha512-b5lim54JOPN9HtzvK9HFXvBma/rnfFeqsic0hSpjtDbVxR3dJKLc+KB4V6GgiGOvl7CY/KNh8rxSo9DKQrnUEw==\",
      \"dev\": true,
      \"requires\": {
        \"iconv-lite\": \"0.4.24\"
      }
    },
    \"whatwg-mimetype\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/whatwg-mimetype/-/whatwg-mimetype-2.3.0.tgz\",
      \"integrity\": \"sha512-M4yMwr6mAnQz76TbJm914+gPpB/nCwvZbJU28cUD6dR004SAxDLOOSUaB1JDRqLtaOV/vi0IC5lEAGFgrjGv/g==\",
      \"dev\": true
    },
    \"whatwg-url\": {
      \"version\": \"8.7.0\",
      \"resolved\": \"https://registry.npmjs.org/whatwg-url/-/whatwg-url-8.7.0.tgz\",
      \"integrity\": \"sha512-gAojqb/m9Q8a5IV96E3fHJM70AzCkgt4uXYX2O7EmuyOnLrViCQlsEBmF9UQIu3/aeAIp2U17rtbpZWNntQqdg==\",
      \"dev\": true,
      \"requires\": {
        \"lodash\": \"^4.7.0\",
        \"tr46\": \"^2.1.0\",
        \"webidl-conversions\": \"^6.1.0\"
      }
    },
    \"which\": {
      \"version\": \"1.3.1\",
      \"resolved\": \"https://registry.npmjs.org/which/-/which-1.3.1.tgz\",
      \"integrity\": \"sha512-HxJdYWq1MTIQbJ3nw0cqssHoTNU267KlrDuGZ1WYlxDStUtKUhOaJmh112/TZmHxxUfuJqPXSOm7tDyas0OSIQ==\",
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
    \"which-module\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
      \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
      \"dev\": true
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
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/wide-align/-/wide-align-1.1.3.tgz\",
      \"integrity\": \"sha512-QGkOQc8XL6Bt5PwnsExKBPuMKBxnGxWWW3fU55Xt4feHozMUhdUMaBCk290qpm/wG5u/RSKzwdAC4i51YigihA==\",
      \"dev\": true,
      \"requires\": {
        \"string-width\": \"^1.0.2 || 2\"
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-3.0.0.tgz\",
          \"integrity\": \"sha1-7QMXwyIGT3lGbAKWa922Bas32Zg=\",
          \"dev\": true
        },
        \"string-width\": {
          \"version\": \"2.1.1\",
          \"resolved\": \"https://registry.npmjs.org/string-width/-/string-width-2.1.1.tgz\",
          \"integrity\": \"sha512-nOqH59deCq9SRHlxq1Aw85Jnt4w6KvLKqWVik6oA9ZklXLNIOlqg4F2yrT1MVaTjAqvVwdfeZ7w7aCvJD7ugkw==\",
          \"dev\": true,
          \"requires\": {
            \"is-fullwidth-code-point\": \"^2.0.0\",
            \"strip-ansi\": \"^4.0.0\"
          }
        },
        \"strip-ansi\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-4.0.0.tgz\",
          \"integrity\": \"sha1-qEeQIusaw2iocTibY1JixQXuNo8=\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^3.0.0\"
          }
        }
      }
    },
    \"wildcard\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/wildcard/-/wildcard-2.0.0.tgz\",
      \"integrity\": \"sha512-JcKqAHLPxcdb9KM49dufGXn2x3ssnfjbcaQdLlfZsL9rH9wgDQjUtDxbo8NE0F6SFvydeu1VhZe7hZuHsB2/pw==\",
      \"dev\": true
    },
    \"word-wrap\": {
      \"version\": \"1.2.4\",
      \"resolved\": \"https://registry.npmjs.org/word-wrap/-/word-wrap-1.2.4.tgz\",
      \"integrity\": \"sha512-2V81OA4ugVo5pRo46hAoD2ivUJx8jXmWXfUkY4KFNw0hEptvN0QfH3K4nHiwzGeKl5rFKedV48QVoqYavy4YpA==\",
      \"dev\": true
    },
    \"worker-farm\": {
      \"version\": \"1.7.0\",
      \"resolved\": \"https://registry.npmjs.org/worker-farm/-/worker-farm-1.7.0.tgz\",
      \"integrity\": \"sha512-rvw3QTZc8lAxyVrqcSGVm5yP/IJ2UcB3U0graE3LCFoZ0Yn2x4EoVSqJKdB/T5M+FLcRPjz4TDacRf3OCfNUzw==\",
      \"dev\": true,
      \"requires\": {
        \"errno\": \"~0.1.7\"
      }
    },
    \"wrap-ansi\": {
      \"version\": \"5.1.0\",
      \"resolved\": \"https://registry.npmjs.org/wrap-ansi/-/wrap-ansi-5.1.0.tgz\",
      \"integrity\": \"sha512-QC1/iN/2/RPVJ5jYK8BGttj5z83LmSKmvbvrXPNCLZSEb32KKVDJDl/MOt2N01qU2H/FkzEa9PKto1BqDjtd7Q==\",
      \"dev\": true,
      \"requires\": {
        \"ansi-styles\": \"^3.2.0\",
        \"string-width\": \"^3.0.0\",
        \"strip-ansi\": \"^5.0.0\"
      }
    },
    \"wrappy\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/wrappy/-/wrappy-1.0.2.tgz\",
      \"integrity\": \"sha1-tSQ9jz7BqjXxNkYFvA0QNuMKtp8=\"
    },
    \"ws\": {
      \"version\": \"7.5.5\",
      \"resolved\": \"https://registry.npmjs.org/ws/-/ws-7.5.5.tgz\",
      \"integrity\": \"sha512-BAkMFcAzl8as1G/hArkxOxq3G7pjUqQ3gzYbLL0/5zNkph70e+lCoxBGnm6AW1+/aiNeV4fnKqZ8m4GZewmH2w==\",
      \"dev\": true
    },
    \"xml-name-validator\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/xml-name-validator/-/xml-name-validator-3.0.0.tgz\",
      \"integrity\": \"sha512-A5CUptxDsvxKJEU3yO6DuWBSJz/qizqzJKOMIfUJHETbBw/sFaDxgd6fxm1ewUaM0jZ444Fc5vC5ROYurg/4Pw==\",
      \"dev\": true
    },
    \"xmlchars\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/xmlchars/-/xmlchars-2.2.0.tgz\",
      \"integrity\": \"sha512-JZnDKK8B0RCDw84FNdDAIpZK+JuJw+s7Lz8nksI7SIuU3UXJJslUthsi+uWBUYOwPFwW7W7PRLRfUKpxjtjFCw==\",
      \"dev\": true
    },
    \"xtend\": {
      \"version\": \"4.0.2\",
      \"resolved\": \"https://registry.npmjs.org/xtend/-/xtend-4.0.2.tgz\",
      \"integrity\": \"sha512-LKYU1iAXJXUgAXn9URjiu+MWhyUXHsvfp7mcuYm9dSUKK0/CjtrUwFAxD82/mCWbtLsGjFIad0wIsod4zrTAEQ==\",
      \"dev\": true
    },
    \"y18n\": {
      \"version\": \"4.0.3\",
      \"resolved\": \"https://registry.npmjs.org/y18n/-/y18n-4.0.3.tgz\",
      \"integrity\": \"sha512-JKhqTOwSrqNA1NY5lSztJ1GrBiUodLMmIZuLiDaMRJ+itFd+ABVE8XBjOvIWL+rSqNDC74LCSFmlb/U4UZ4hJQ==\",
      \"dev\": true
    },
    \"yallist\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-4.0.0.tgz\",
      \"integrity\": \"sha512-3wdGidZyq5PB084XLES5TpOSRA3wjXAlIWMhum2kRcv/41Sn2emQ0dycQW4uZXLejwKvg6EsvbdlVL+FYEct7A==\",
      \"dev\": true
    },
    \"yargs\": {
      \"version\": \"13.3.2\",
      \"resolved\": \"https://registry.npmjs.org/yargs/-/yargs-13.3.2.tgz\",
      \"integrity\": \"sha512-AX3Zw5iPruN5ie6xGRIDgqkT+ZhnRlZMLMHAs8tg7nRruy2Nb+i5o9bwghAogtM08q1dpr2LVoS8KSTMYpWXUw==\",
      \"dev\": true,
      \"requires\": {
        \"cliui\": \"^5.0.0\",
        \"find-up\": \"^3.0.0\",
        \"get-caller-file\": \"^2.0.1\",
        \"require-directory\": \"^2.1.1\",
        \"require-main-filename\": \"^2.0.0\",
        \"set-blocking\": \"^2.0.0\",
        \"string-width\": \"^3.0.0\",
        \"which-module\": \"^2.0.0\",
        \"y18n\": \"^4.0.0\",
        \"yargs-parser\": \"^13.1.2\"
      }
    },
    \"yargs-parser\": {
      \"version\": \"13.1.2\",
      \"resolved\": \"https://registry.npmjs.org/yargs-parser/-/yargs-parser-13.1.2.tgz\",
      \"integrity\": \"sha512-3lbsNRf/j+A4QuSZfDRA7HRSfWrzO0YjqTJd5kjAq37Zep1CEgaYmrH9Q3GwPiB9cHyd1Y1UwggGhJGoxipbzg==\",
      \"dev\": true,
      \"requires\": {
        \"camelcase\": \"^5.0.0\",
        \"decamelize\": \"^1.2.0\"
      }
    },
    \"yargs-unparser\": {
      \"version\": \"1.6.0\",
      \"resolved\": \"https://registry.npmjs.org/yargs-unparser/-/yargs-unparser-1.6.0.tgz\",
      \"integrity\": \"sha512-W9tKgmSn0DpSatfri0nx52Joq5hVXgeLiqR/5G0sZNDoLZFOr/xjBUDcShCOGNsBnEMNo1KAMBkTej1Hm62HTw==\",
      \"dev\": true,
      \"requires\": {
        \"flat\": \"^4.1.0\",
        \"lodash\": \"^4.17.15\",
        \"yargs\": \"^13.3.0\"
      }
    },
    \"yn\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/yn/-/yn-3.1.1.tgz\",
      \"integrity\": \"sha512-Ux4ygGWsu2c7isFWe8Yu1YluJmqVhxqK2cLXNQA5AcC3QfbGNpM7fu0Y8b/z16pXLnFxZYvWhd3fhBY9DLmC6Q==\",
      \"dev\": true
    },
    \"yocto-queue\": {
      \"version\": \"0.1.0\",
      \"resolved\": \"https://registry.npmjs.org/yocto-queue/-/yocto-queue-0.1.0.tgz\",
      \"integrity\": \"sha512-rVksvsnNCdJ/ohGc6xgPwyN8eheCxsiLM8mxuE/t/mOVqJewPuO1miLpTHQiRgTKCLexL4MeAFVagts7HmNZ2Q==\",
      \"dev\": true
    },
    \"zen-observable\": {
      \"version\": \"0.8.15\",
      \"resolved\": \"https://registry.npmjs.org/zen-observable/-/zen-observable-0.8.15.tgz\",
      \"integrity\": \"sha512-PQ2PC7R9rslx84ndNBZB/Dkv8V8fZEpk83RLgXtYd0fwUgEjseMn1Dgajh2x6S8QbZAFa9p2qVCEuYZNgve0dQ==\"
    },
    \"zen-observable-ts\": {
      \"version\": \"0.8.21\",
      \"resolved\": \"https://registry.npmjs.org/zen-observable-ts/-/zen-observable-ts-0.8.21.tgz\",
      \"integrity\": \"sha512-Yj3yXweRc8LdRMrCC8nIc4kkjWecPAUVh0TI0OUrWXx6aX790vLcDlWca6I4vsyCGH3LpWxq0dJRcMOFoVqmeg==\",
      \"requires\": {
        \"tslib\": \"^1.9.3\",
        \"zen-observable\": \"^0.8.0\"
      }
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/package-lock.json";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockwishlist/package-lock.json", "/var/www/html/modules/blockwishlist/package-lock.json");
    }
}
