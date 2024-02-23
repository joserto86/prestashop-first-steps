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

/* @Modules/ps_linklist/views/package-lock.json */
class __TwigTemplate_48dde05c9bc8530f3fe04a63ea4a7507 extends Template
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
  \"name\": \"ps_linklist\",
  \"version\": \"3.0.4\",
  \"lockfileVersion\": 1,
  \"requires\": true,
  \"dependencies\": {
    \"@ampproject/remapping\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@ampproject/remapping/-/remapping-2.1.2.tgz\",
      \"integrity\": \"sha512-hoyByceqwKirw7w3Z7gnIIZC3Wx3J484Y3L/cMpXFbr7d9ZQj2mODrirNzcJa+SM3UlpWXYvKV4RlRpFXlWgXg==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/trace-mapping\": \"^0.3.0\"
      }
    },
    \"@babel/code-frame\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/code-frame/-/code-frame-7.16.7.tgz\",
      \"integrity\": \"sha512-iAXqUn8IIeBTNd72xsFlgaXHkMBMt6y4HJp1tIaK465CWLT/fG1aqB7ykr95gHHmlBdGbFeWWfyB4NJJ0nmeIg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/highlight\": \"^7.16.7\"
      }
    },
    \"@babel/compat-data\": {
      \"version\": \"7.17.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/compat-data/-/compat-data-7.17.7.tgz\",
      \"integrity\": \"sha512-p8pdE6j0a29TNGebNm7NzYZWB3xVZJBZ7XGs42uAKzQo8VQ3F0By/cQCtUEABwIqw5zo6WA4NbmxsfzADzMKnQ==\",
      \"dev\": true
    },
    \"@babel/core\": {
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/core/-/core-7.17.9.tgz\",
      \"integrity\": \"sha512-5ug+SfZCpDAkVp9SFIZAzlW18rlzsOcJGaetCjkySnrXXDUw9AR8cDUm1iByTmdWM6yxX6/zycaV76w3YTF2gw==\",
      \"dev\": true,
      \"requires\": {
        \"@ampproject/remapping\": \"^2.1.0\",
        \"@babel/code-frame\": \"^7.16.7\",
        \"@babel/generator\": \"^7.17.9\",
        \"@babel/helper-compilation-targets\": \"^7.17.7\",
        \"@babel/helper-module-transforms\": \"^7.17.7\",
        \"@babel/helpers\": \"^7.17.9\",
        \"@babel/parser\": \"^7.17.9\",
        \"@babel/template\": \"^7.16.7\",
        \"@babel/traverse\": \"^7.17.9\",
        \"@babel/types\": \"^7.17.0\",
        \"convert-source-map\": \"^1.7.0\",
        \"debug\": \"^4.1.0\",
        \"gensync\": \"^1.0.0-beta.2\",
        \"json5\": \"^2.2.1\",
        \"semver\": \"^6.3.0\"
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
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/generator/-/generator-7.17.9.tgz\",
      \"integrity\": \"sha512-rAdDousTwxbIxbz5I7GEQ3lUip+xVCXooZNbsydCWs3xA7ZsYOv+CFRdzGxRX78BmQHu9B1Eso59AOZQOJDEdQ==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.17.0\",
        \"jsesc\": \"^2.5.1\",
        \"source-map\": \"^0.5.0\"
      },
      \"dependencies\": {
        \"jsesc\": {
          \"version\": \"2.5.2\",
          \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-2.5.2.tgz\",
          \"integrity\": \"sha512-OYu7XEzjkCQ3C5Ps3QIZsQfNpqoJyZZA99wd9aWd05NCtC5pWOkShK2mkL6HXQR6/Cy2lbNdPlZBpuQHXE63gA==\",
          \"dev\": true
        }
      }
    },
    \"@babel/helper-compilation-targets\": {
      \"version\": \"7.17.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-compilation-targets/-/helper-compilation-targets-7.17.7.tgz\",
      \"integrity\": \"sha512-UFzlz2jjd8kroj0hmCFV5zr+tQPi1dpC2cRsDV/3IEW8bJfCPrPpmcSN6ZS8RqIq4LXcmpipCQFPddyFA5Yc7w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/compat-data\": \"^7.17.7\",
        \"@babel/helper-validator-option\": \"^7.16.7\",
        \"browserslist\": \"^4.17.5\",
        \"semver\": \"^6.3.0\"
      },
      \"dependencies\": {
        \"browserslist\": {
          \"version\": \"4.20.2\",
          \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-4.20.2.tgz\",
          \"integrity\": \"sha512-CQOBCqp/9pDvDbx3xfMi+86pr4KXIf2FDkTTdeuYw8OxS9t898LA1Khq57gtufFILXpfgsSx5woNgsBgvGjpsA==\",
          \"dev\": true,
          \"requires\": {
            \"caniuse-lite\": \"^1.0.30001317\",
            \"electron-to-chromium\": \"^1.4.84\",
            \"escalade\": \"^3.1.1\",
            \"node-releases\": \"^2.0.2\",
            \"picocolors\": \"^1.0.0\"
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
    \"@babel/helper-environment-visitor\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-environment-visitor/-/helper-environment-visitor-7.16.7.tgz\",
      \"integrity\": \"sha512-SLLb0AAn6PkUeAfKJCCOl9e1R53pQlGAfc4y4XuMRZfqeMYLE0dM1LMhqbGAlGQY0lfw5/ohoYWAe9V1yibRag==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.16.7\"
      }
    },
    \"@babel/helper-function-name\": {
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-function-name/-/helper-function-name-7.17.9.tgz\",
      \"integrity\": \"sha512-7cRisGlVtiVqZ0MW0/yFB4atgpGLWEHUVYnb448hZK4x+vih0YO5UoS11XIYtZYqHd0dIPMdUSv8q5K4LdMnIg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/template\": \"^7.16.7\",
        \"@babel/types\": \"^7.17.0\"
      }
    },
    \"@babel/helper-hoist-variables\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-hoist-variables/-/helper-hoist-variables-7.16.7.tgz\",
      \"integrity\": \"sha512-m04d/0Op34H5v7pbZw6pSKP7weA6lsMvfiIAMeIvkY/R4xQtBSMFEigu9QTZ2qB/9l22vsxtM8a+Q8CzD255fg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.16.7\"
      }
    },
    \"@babel/helper-module-imports\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-imports/-/helper-module-imports-7.16.7.tgz\",
      \"integrity\": \"sha512-LVtS6TqjJHFc+nYeITRo6VLXve70xmq7wPhWTqDJusJEgGmkAACWwMiTNrvfoQo6hEhFwAIixNkvB0jPXDL8Wg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.16.7\"
      }
    },
    \"@babel/helper-module-transforms\": {
      \"version\": \"7.17.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-module-transforms/-/helper-module-transforms-7.17.7.tgz\",
      \"integrity\": \"sha512-VmZD99F3gNTYB7fJRDTi+u6l/zxY0BE6OIxPSU7a50s6ZUQkHwSDmV92FfM+oCG0pZRVojGYhkR8I0OGeCVREw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-environment-visitor\": \"^7.16.7\",
        \"@babel/helper-module-imports\": \"^7.16.7\",
        \"@babel/helper-simple-access\": \"^7.17.7\",
        \"@babel/helper-split-export-declaration\": \"^7.16.7\",
        \"@babel/helper-validator-identifier\": \"^7.16.7\",
        \"@babel/template\": \"^7.16.7\",
        \"@babel/traverse\": \"^7.17.3\",
        \"@babel/types\": \"^7.17.0\"
      }
    },
    \"@babel/helper-simple-access\": {
      \"version\": \"7.17.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-simple-access/-/helper-simple-access-7.17.7.tgz\",
      \"integrity\": \"sha512-txyMCGroZ96i+Pxr3Je3lzEJjqwaRC9buMUgtomcrLe5Nd0+fk1h0LLA+ixUF5OW7AhHuQ7Es1WcQJZmZsz2XA==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.17.0\"
      }
    },
    \"@babel/helper-split-export-declaration\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-split-export-declaration/-/helper-split-export-declaration-7.16.7.tgz\",
      \"integrity\": \"sha512-xbWoy/PFoxSWazIToT9Sif+jJTlrMcndIsaOKvTA6u7QEo7ilkRZpjew18/W3c7nm8fXdUDXh02VXTbZ0pGDNw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/types\": \"^7.16.7\"
      }
    },
    \"@babel/helper-validator-identifier\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-identifier/-/helper-validator-identifier-7.16.7.tgz\",
      \"integrity\": \"sha512-hsEnFemeiW4D08A5gUAZxLBTXpZ39P+a+DGDsHw1yxqyQ/jzFEnxf5uTEGp+3bzAbNOxU1paTgYS4ECU/IgfDw==\",
      \"dev\": true
    },
    \"@babel/helper-validator-option\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helper-validator-option/-/helper-validator-option-7.16.7.tgz\",
      \"integrity\": \"sha512-TRtenOuRUVo9oIQGPC5G9DgK4743cdxvtOw0weQNpZXaS16SCBi5MNjZF8vba3ETURjZpTbVn7Vvcf2eAwFozQ==\",
      \"dev\": true
    },
    \"@babel/helpers\": {
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/helpers/-/helpers-7.17.9.tgz\",
      \"integrity\": \"sha512-cPCt915ShDWUEzEp3+UNRktO2n6v49l5RSnG9M5pS24hA+2FAc5si+Pn1i4VVbQQ+jh+bIZhPFQOJOzbrOYY1Q==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/template\": \"^7.16.7\",
        \"@babel/traverse\": \"^7.17.9\",
        \"@babel/types\": \"^7.17.0\"
      }
    },
    \"@babel/highlight\": {
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/highlight/-/highlight-7.17.9.tgz\",
      \"integrity\": \"sha512-J9PfEKCbFIv2X5bjTMiZu6Vf341N05QIY+d6FvVKynkG1S7G0j3I0QoRtWIrXhZ+/Nlb5Q0MzqL7TokEJ5BNHg==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-validator-identifier\": \"^7.16.7\",
        \"chalk\": \"^2.0.0\",
        \"js-tokens\": \"^4.0.0\"
      },
      \"dependencies\": {
        \"ansi-styles\": {
          \"version\": \"3.2.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
          \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
          \"dev\": true,
          \"requires\": {
            \"color-convert\": \"^1.9.0\"
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
        \"js-tokens\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/js-tokens/-/js-tokens-4.0.0.tgz\",
          \"integrity\": \"sha512-RdJUflcE3cUzKiMqQgsCu06FPu9UdIJO0beYbPhHN4k6apgJtifcoCtT9bcxOpYBtpD2kCM6Sbzg4CausW/PKQ==\",
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
    \"@babel/parser\": {
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/parser/-/parser-7.17.9.tgz\",
      \"integrity\": \"sha512-vqUSBLP8dQHFPdPi9bc5GK9vRkYHJ49fsZdtoJ8EQ8ibpwk5rPKfvNIwChB0KVXcIjcepEBBd2VHC5r9Gy8ueg==\",
      \"dev\": true
    },
    \"@babel/template\": {
      \"version\": \"7.16.7\",
      \"resolved\": \"https://registry.npmjs.org/@babel/template/-/template-7.16.7.tgz\",
      \"integrity\": \"sha512-I8j/x8kHUrbYRTUxXrrMbfCa7jxkE7tZre39x3kjr9hvI82cK1FfqLygotcWN5kdPGWcLdWMHpSBavse5tWw3w==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.16.7\",
        \"@babel/parser\": \"^7.16.7\",
        \"@babel/types\": \"^7.16.7\"
      }
    },
    \"@babel/traverse\": {
      \"version\": \"7.17.9\",
      \"resolved\": \"https://registry.npmjs.org/@babel/traverse/-/traverse-7.17.9.tgz\",
      \"integrity\": \"sha512-PQO8sDIJ8SIwipTPiR71kJQCKQYB5NGImbOviK8K+kg5xkNSYXLBupuX9QhatFowrsvo9Hj8WgArg3W7ijNAQw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/code-frame\": \"^7.16.7\",
        \"@babel/generator\": \"^7.17.9\",
        \"@babel/helper-environment-visitor\": \"^7.16.7\",
        \"@babel/helper-function-name\": \"^7.17.9\",
        \"@babel/helper-hoist-variables\": \"^7.16.7\",
        \"@babel/helper-split-export-declaration\": \"^7.16.7\",
        \"@babel/parser\": \"^7.17.9\",
        \"@babel/types\": \"^7.17.0\",
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
        \"globals\": {
          \"version\": \"11.12.0\",
          \"resolved\": \"https://registry.npmjs.org/globals/-/globals-11.12.0.tgz\",
          \"integrity\": \"sha512-WOBp/EEGUiIsJSp7wcv/y6MO+lV9UoncWqxuFfm8eBwzWNgyfBd6Gz+IeKQ9jCmyhoH99g15M3T+QaVHFjizVA==\",
          \"dev\": true
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
      \"version\": \"7.17.0\",
      \"resolved\": \"https://registry.npmjs.org/@babel/types/-/types-7.17.0.tgz\",
      \"integrity\": \"sha512-TmKSNO4D5rzhL5bjWFcVHHLETzfQ/AmbKpKPOSjlP0WoHZ6L911fgoOKY4Alp/emzG4cHJdyN49zpgkbXFEHHw==\",
      \"dev\": true,
      \"requires\": {
        \"@babel/helper-validator-identifier\": \"^7.16.7\",
        \"to-fast-properties\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"to-fast-properties\": {
          \"version\": \"2.0.0\",
          \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-2.0.0.tgz\",
          \"integrity\": \"sha1-3F5pjL0HkmW8c+A3doGk5Og/YW4=\",
          \"dev\": true
        }
      }
    },
    \"@cspotcode/source-map-support\": {
      \"version\": \"0.8.1\",
      \"resolved\": \"https://registry.npmjs.org/@cspotcode/source-map-support/-/source-map-support-0.8.1.tgz\",
      \"integrity\": \"sha512-IchNf6dN4tHoMFIn/7OE8LWZ19Y6q/67Bmf6vnGREv8RSbBVb9LPJxEcnwrcwX6ixSvaiGoomAUvu4YSxXrVgw==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/trace-mapping\": \"0.3.9\"
      }
    },
    \"@gar/promisify\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/@gar/promisify/-/promisify-1.1.3.tgz\",
      \"integrity\": \"sha512-k2Ty1JcVojjJFwrg/ThKi2ujJ7XNLYaFGNB/bWT9wGR+oSMJHMa5w+CUq6p/pVrKeNNgA7pCqEcjSnHVoqJQFw==\",
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
      \"version\": \"3.0.5\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/resolve-uri/-/resolve-uri-3.0.5.tgz\",
      \"integrity\": \"sha512-VPeQ7+wH0itvQxnG+lIzWgkysKIr3L9sslimFW55rHMdGu/qCQ5z5h9zq4gI8uBtqkpHhsF4Z/OwExufUCThew==\",
      \"dev\": true
    },
    \"@jridgewell/set-array\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/set-array/-/set-array-1.1.2.tgz\",
      \"integrity\": \"sha512-xnkseuNADM0gt2bs+BvhO0p78Mk762YnZdsuzFV018NoG1Sj1SCQvpSqa7XUaTam5vAGasABV9qXASMKnFMwMw==\",
      \"dev\": true
    },
    \"@jridgewell/source-map\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/source-map/-/source-map-0.3.2.tgz\",
      \"integrity\": \"sha512-m7O9o2uR8k2ObDysZYzdfhb08VuEml5oWGiosa1VdaPZ/A6QyPkAJuwN0Q1lhULOf6B7MtQmHENS743hWtCrgw==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/gen-mapping\": \"^0.3.0\",
        \"@jridgewell/trace-mapping\": \"^0.3.9\"
      }
    },
    \"@jridgewell/sourcemap-codec\": {
      \"version\": \"1.4.11\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/sourcemap-codec/-/sourcemap-codec-1.4.11.tgz\",
      \"integrity\": \"sha512-Fg32GrJo61m+VqYSdRSjRXMjQ06j8YIYfcTqndLYVAaHmroZHLJZCydsWBOTDqXS2v+mjxohBWEMfg97GXmYQg==\",
      \"dev\": true
    },
    \"@jridgewell/trace-mapping\": {
      \"version\": \"0.3.9\",
      \"resolved\": \"https://registry.npmjs.org/@jridgewell/trace-mapping/-/trace-mapping-0.3.9.tgz\",
      \"integrity\": \"sha512-3Belt6tdc8bPgAtbcmdtNJlirVoTmEb5e2gC94PnkwEW9jI6CAHUeoG85tjWP5WquqfavoMtMwiG4P926ZKKuQ==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/resolve-uri\": \"^3.0.3\",
        \"@jridgewell/sourcemap-codec\": \"^1.4.10\"
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
        \"mkdirp\": {
          \"version\": \"1.0.4\",
          \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
          \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
          \"dev\": true
        }
      }
    },
    \"@tsconfig/node10\": {
      \"version\": \"1.0.9\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node10/-/node10-1.0.9.tgz\",
      \"integrity\": \"sha512-jNsYVVxU8v5g43Erja32laIDHXeoNvFEpX33OK4d6hljo3jDhCBDhx5dhCCTMWUojscpAagGiRkBKxpdl9fxqA==\",
      \"dev\": true
    },
    \"@tsconfig/node12\": {
      \"version\": \"1.0.11\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node12/-/node12-1.0.11.tgz\",
      \"integrity\": \"sha512-cqefuRsh12pWyGsIoBKJA9luFu3mRxCA+ORZvA4ktLSzIuCUtWVxGIuXigEwO5/ywWFMZ2QEGKWvkZG1zDMTag==\",
      \"dev\": true
    },
    \"@tsconfig/node14\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node14/-/node14-1.0.3.tgz\",
      \"integrity\": \"sha512-ysT8mhdixWK6Hw3i1V2AeRqZ5WfXg1G43mqoYlM2nc6388Fq5jcXyr5mRsqViLx/GJYdoL0bfXD8nmF+Zn/Iow==\",
      \"dev\": true
    },
    \"@tsconfig/node16\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/@tsconfig/node16/-/node16-1.0.3.tgz\",
      \"integrity\": \"sha512-yOlFc+7UtL/89t2ZhjPvvB/DeAr3r+Dq58IgzsFkOAvVC6NMJXmCGjbptdXdR9qsX7pKcTL+s87FtYREi2dEEQ==\",
      \"dev\": true
    },
    \"@types/json-schema\": {
      \"version\": \"7.0.11\",
      \"resolved\": \"https://registry.npmjs.org/@types/json-schema/-/json-schema-7.0.11.tgz\",
      \"integrity\": \"sha512-wOuvG1SN4Us4rez+tylwwwCV1psiNVOkJeM3AUWUNWg/jDQY2+HE/444y5gc+jBmRqASOm2Oeh5c1axHobwRKQ==\",
      \"dev\": true
    },
    \"@types/node\": {
      \"version\": \"17.0.25\",
      \"resolved\": \"https://registry.npmjs.org/@types/node/-/node-17.0.25.tgz\",
      \"integrity\": \"sha512-wANk6fBrUwdpY4isjWrKTufkrXdu1D2YHCot2fD/DfWxF5sMrVSA+KN7ydckvaTCh0HiqX9IVl0L5/ZoXg5M7w==\",
      \"dev\": true
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
    \"acorn\": {
      \"version\": \"8.7.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn/-/acorn-8.7.0.tgz\",
      \"integrity\": \"sha512-V/LGr1APy+PXIwKebEWrkZPwoeoF+w1jiOBUmuxuiUIaOHtob8Qc9BTrYo7VuI5fR8tqsy+buA2WFooR5olqvQ==\",
      \"dev\": true
    },
    \"acorn-walk\": {
      \"version\": \"8.2.0\",
      \"resolved\": \"https://registry.npmjs.org/acorn-walk/-/acorn-walk-8.2.0.tgz\",
      \"integrity\": \"sha512-k+iyHEuPgSw6SbuDpGQM+06HQUa04DZ3o+F6CSzXMvvI5KMvnaEqXe+YVe555R9nn6GPt404fos4wcgpw12SDA==\",
      \"dev\": true
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
    \"ansi-regex\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-2.1.1.tgz\",
      \"integrity\": \"sha1-w7M6te42DYbg5ijwRorn7yfWVN8=\",
      \"dev\": true
    },
    \"ansi-styles\": {
      \"version\": \"2.2.1\",
      \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-2.2.1.tgz\",
      \"integrity\": \"sha1-tDLdM1i2NM914eRmQ2gkBTPB3b4=\",
      \"dev\": true
    },
    \"anymatch\": {
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/anymatch/-/anymatch-3.1.2.tgz\",
      \"integrity\": \"sha512-P43ePfOAIupkguHUycrc4qJ9kz8ZiuOUijaETwX7THt0Y/GNK7v0aa8rY816xWjZ7rJdA5XdMcpVFTKMq+RvWg==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"normalize-path\": \"^3.0.0\",
        \"picomatch\": \"^2.0.4\"
      }
    },
    \"aproba\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/aproba/-/aproba-1.2.0.tgz\",
      \"integrity\": \"sha512-Y9J6ZjXtoYh8RnXVCMOU/ttDmk1aBjunq9vO0ta5x85WDQiQfUF9sIPBITdbiiIVcBo03Hi3jMxigBtsddlXRw==\",
      \"dev\": true
    },
    \"arg\": {
      \"version\": \"4.1.3\",
      \"resolved\": \"https://registry.npmjs.org/arg/-/arg-4.1.3.tgz\",
      \"integrity\": \"sha512-58S9QDqG0Xx27YwPSt9fJxivjYl432YCwfDMfZ+71RAqUrZef7LrKQZ3LHLOwCS4FLNBplP533Zx895SeOCHvA==\",
      \"dev\": true
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
    \"array-unique\": {
      \"version\": \"0.3.2\",
      \"resolved\": \"https://registry.npmjs.org/array-unique/-/array-unique-0.3.2.tgz\",
      \"integrity\": \"sha1-qJS3XUvE9s1nnvMkSp/Y9Gri1Cg=\",
      \"dev\": true
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
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"4.12.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
          \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
          \"dev\": true
        }
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
    \"assign-symbols\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/assign-symbols/-/assign-symbols-1.0.0.tgz\",
      \"integrity\": \"sha1-WWZ/QfrdTyDMvCu5a41Pf3jsA2c=\",
      \"dev\": true
    },
    \"async-each\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/async-each/-/async-each-1.0.3.tgz\",
      \"integrity\": \"sha512-z/WhQ5FPySLdvREByI2vZiTWwCnF0moMJ1hK9YQwDTHKh6I7/uSckMetoRGb5UBZPC1z0jlw+n/XCgjeH7y1AQ==\",
      \"dev\": true,
      \"optional\": true
    },
    \"atob\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/atob/-/atob-2.1.2.tgz\",
      \"integrity\": \"sha512-Wm6ukoaOGJi/73p/cl2GvLjTI5JM1k/O14isD73YML8StrH/7/lRFgmg8nICZgD3bZZvjwCGxtMOD3wWNAu8cg==\",
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
      }
    },
    \"babel-helper-bindify-decorators\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-bindify-decorators/-/babel-helper-bindify-decorators-6.24.1.tgz\",
      \"integrity\": \"sha1-FMGeXxQte0fxmlJDHlKxzLxAozA=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-builder-binary-assignment-operator-visitor\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-builder-binary-assignment-operator-visitor/-/babel-helper-builder-binary-assignment-operator-visitor-6.24.1.tgz\",
      \"integrity\": \"sha1-zORReto1b0IgvK6KAsKzRvmlZmQ=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-explode-assignable-expression\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-call-delegate\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-call-delegate/-/babel-helper-call-delegate-6.24.1.tgz\",
      \"integrity\": \"sha1-7Oaqzdx25Bw0YfiL/Fdb0Nqi340=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-hoist-variables\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-define-map\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-define-map/-/babel-helper-define-map-6.26.0.tgz\",
      \"integrity\": \"sha1-pfVtq0GiX5fstJjH66ypgZ+Vvl8=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-function-name\": \"^6.24.1\",
        \"babel-runtime\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"lodash\": \"^4.17.4\"
      }
    },
    \"babel-helper-explode-assignable-expression\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-explode-assignable-expression/-/babel-helper-explode-assignable-expression-6.24.1.tgz\",
      \"integrity\": \"sha1-8luCz33BBDPFX3BZLVdGQArCLKo=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-explode-class\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-explode-class/-/babel-helper-explode-class-6.24.1.tgz\",
      \"integrity\": \"sha1-fcKjkQ3uAHBW4eMdZAztPVTqqes=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-bindify-decorators\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-function-name\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-function-name/-/babel-helper-function-name-6.24.1.tgz\",
      \"integrity\": \"sha1-00dbjAPtmCQqJbSDUasYOZ01gKk=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-get-function-arity\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-get-function-arity\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-get-function-arity/-/babel-helper-get-function-arity-6.24.1.tgz\",
      \"integrity\": \"sha1-j3eCqpNAfEHTqlCQj4mwMbG2hT0=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-hoist-variables\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-hoist-variables/-/babel-helper-hoist-variables-6.24.1.tgz\",
      \"integrity\": \"sha1-HssnaJydJVE+rbyZFKc/VAi+enY=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-optimise-call-expression\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-optimise-call-expression/-/babel-helper-optimise-call-expression-6.24.1.tgz\",
      \"integrity\": \"sha1-96E0J7qfc/j0+pk8VKl4gtEkQlc=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-regex\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-regex/-/babel-helper-regex-6.26.0.tgz\",
      \"integrity\": \"sha1-MlxZ+QL4LyS3T6zu0DY5VPZJXnI=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"lodash\": \"^4.17.4\"
      }
    },
    \"babel-helper-remap-async-to-generator\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-remap-async-to-generator/-/babel-helper-remap-async-to-generator-6.24.1.tgz\",
      \"integrity\": \"sha1-XsWBgnrXI/7N04HxySg5BnbkVRs=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-function-name\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-helper-replace-supers\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-helper-replace-supers/-/babel-helper-replace-supers-6.24.1.tgz\",
      \"integrity\": \"sha1-v22/5Dk40XNpohPKiov3S2qQqxo=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-optimise-call-expression\": \"^6.24.1\",
        \"babel-messages\": \"^6.23.0\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-loader\": {
      \"version\": \"7.1.5\",
      \"resolved\": \"https://registry.npmjs.org/babel-loader/-/babel-loader-7.1.5.tgz\",
      \"integrity\": \"sha512-iCHfbieL5d1LfOQeeVJEUyD9rTwBcP/fcEbRCfempxTDuqrKpu0AZjLAQHEQa3Yqyj9ORKe2iHfoj4rHLf7xpw==\",
      \"dev\": true,
      \"requires\": {
        \"find-cache-dir\": \"^1.0.0\",
        \"loader-utils\": \"^1.0.2\",
        \"mkdirp\": \"^0.5.1\"
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
    \"babel-plugin-check-es2015-constants\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-check-es2015-constants/-/babel-plugin-check-es2015-constants-6.22.0.tgz\",
      \"integrity\": \"sha1-NRV7EBQm/S/9PaP3XH0ekYNbv4o=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-syntax-async-functions\": {
      \"version\": \"6.13.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-async-functions/-/babel-plugin-syntax-async-functions-6.13.0.tgz\",
      \"integrity\": \"sha1-ytnK0RkbWtY0vzCuCHI5HgZHvpU=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-async-generators\": {
      \"version\": \"6.13.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-async-generators/-/babel-plugin-syntax-async-generators-6.13.0.tgz\",
      \"integrity\": \"sha1-a8lj67FuzLrmuStZbrfzXDQqi5o=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-class-properties\": {
      \"version\": \"6.13.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-class-properties/-/babel-plugin-syntax-class-properties-6.13.0.tgz\",
      \"integrity\": \"sha1-1+sjt5oxf4VDlixQW4J8fWysJ94=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-decorators\": {
      \"version\": \"6.13.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-decorators/-/babel-plugin-syntax-decorators-6.13.0.tgz\",
      \"integrity\": \"sha1-MSVjtNvePMgGzuPkFszurd0RrAs=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-dynamic-import\": {
      \"version\": \"6.18.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-dynamic-import/-/babel-plugin-syntax-dynamic-import-6.18.0.tgz\",
      \"integrity\": \"sha1-jWomIpyDdFqZgqRBBRVyyqF5sdo=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-exponentiation-operator\": {
      \"version\": \"6.13.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-exponentiation-operator/-/babel-plugin-syntax-exponentiation-operator-6.13.0.tgz\",
      \"integrity\": \"sha1-nufoM3KQ2pUoggGmpX9BcDF4MN4=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-object-rest-spread\": {
      \"version\": \"6.13.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-object-rest-spread/-/babel-plugin-syntax-object-rest-spread-6.13.0.tgz\",
      \"integrity\": \"sha1-/WU28rzhODb/o6VFjEkDpZe7O/U=\",
      \"dev\": true
    },
    \"babel-plugin-syntax-trailing-function-commas\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-syntax-trailing-function-commas/-/babel-plugin-syntax-trailing-function-commas-6.22.0.tgz\",
      \"integrity\": \"sha1-ugNgk3+NBuQBgKQ/4NVhb/9TLPM=\",
      \"dev\": true
    },
    \"babel-plugin-transform-async-generator-functions\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-async-generator-functions/-/babel-plugin-transform-async-generator-functions-6.24.1.tgz\",
      \"integrity\": \"sha1-8FiQAUX9PpkHpt3yjaWfIVJYpds=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-remap-async-to-generator\": \"^6.24.1\",
        \"babel-plugin-syntax-async-generators\": \"^6.5.0\",
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-async-to-generator\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-async-to-generator/-/babel-plugin-transform-async-to-generator-6.24.1.tgz\",
      \"integrity\": \"sha1-ZTbjeK/2yx1VF6wOQOs+n8jQh2E=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-remap-async-to-generator\": \"^6.24.1\",
        \"babel-plugin-syntax-async-functions\": \"^6.8.0\",
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-class-properties\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-class-properties/-/babel-plugin-transform-class-properties-6.24.1.tgz\",
      \"integrity\": \"sha1-anl2PqYdM9NvN7YRqp3vgagbRqw=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-function-name\": \"^6.24.1\",
        \"babel-plugin-syntax-class-properties\": \"^6.8.0\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-decorators\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-decorators/-/babel-plugin-transform-decorators-6.24.1.tgz\",
      \"integrity\": \"sha1-eIAT2PjGtSIr33s0Q5Df13Vp4k0=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-explode-class\": \"^6.24.1\",
        \"babel-plugin-syntax-decorators\": \"^6.13.0\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-arrow-functions\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-arrow-functions/-/babel-plugin-transform-es2015-arrow-functions-6.22.0.tgz\",
      \"integrity\": \"sha1-RSaSy3EdX3ncf4XkQM5BufJE0iE=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-block-scoped-functions\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-block-scoped-functions/-/babel-plugin-transform-es2015-block-scoped-functions-6.22.0.tgz\",
      \"integrity\": \"sha1-u8UbSflk1wy42OC5ToICRs46YUE=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-block-scoping\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-block-scoping/-/babel-plugin-transform-es2015-block-scoping-6.26.0.tgz\",
      \"integrity\": \"sha1-1w9SmcEwjQXBL0Y4E7CgnnOxiV8=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.26.0\",
        \"babel-template\": \"^6.26.0\",
        \"babel-traverse\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\",
        \"lodash\": \"^4.17.4\"
      }
    },
    \"babel-plugin-transform-es2015-classes\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-classes/-/babel-plugin-transform-es2015-classes-6.24.1.tgz\",
      \"integrity\": \"sha1-WkxYpQyclGHlZLSyo7+ryXolhNs=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-define-map\": \"^6.24.1\",
        \"babel-helper-function-name\": \"^6.24.1\",
        \"babel-helper-optimise-call-expression\": \"^6.24.1\",
        \"babel-helper-replace-supers\": \"^6.24.1\",
        \"babel-messages\": \"^6.23.0\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-computed-properties\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-computed-properties/-/babel-plugin-transform-es2015-computed-properties-6.24.1.tgz\",
      \"integrity\": \"sha1-b+Ko0WiV1WNPTNmZttNICjCBWbM=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-destructuring\": {
      \"version\": \"6.23.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-destructuring/-/babel-plugin-transform-es2015-destructuring-6.23.0.tgz\",
      \"integrity\": \"sha1-mXux8auWf2gtKwh2/jWNYOdlxW0=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-duplicate-keys\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-duplicate-keys/-/babel-plugin-transform-es2015-duplicate-keys-6.24.1.tgz\",
      \"integrity\": \"sha1-c+s9MQypaePvnskcU3QabxV2Qj4=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-for-of\": {
      \"version\": \"6.23.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-for-of/-/babel-plugin-transform-es2015-for-of-6.23.0.tgz\",
      \"integrity\": \"sha1-9HyVsrYT3x0+zC/bdXNiPHUkhpE=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-function-name\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-function-name/-/babel-plugin-transform-es2015-function-name-6.24.1.tgz\",
      \"integrity\": \"sha1-g0yJhTvDaxrw86TF26qU/Y6sqos=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-function-name\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-literals\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-literals/-/babel-plugin-transform-es2015-literals-6.22.0.tgz\",
      \"integrity\": \"sha1-T1SgLWzWbPkVKAAZox0xklN3yi4=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-modules-amd\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-modules-amd/-/babel-plugin-transform-es2015-modules-amd-6.24.1.tgz\",
      \"integrity\": \"sha1-Oz5UAXI5hC1tGcMBHEvS8AoA0VQ=\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-transform-es2015-modules-commonjs\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-modules-commonjs\": {
      \"version\": \"6.26.2\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-modules-commonjs/-/babel-plugin-transform-es2015-modules-commonjs-6.26.2.tgz\",
      \"integrity\": \"sha512-CV9ROOHEdrjcwhIaJNBGMBCodN+1cfkwtM1SbUHmvyy35KGT7fohbpOxkE2uLz1o6odKK2Ck/tz47z+VqQfi9Q==\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-transform-strict-mode\": \"^6.24.1\",
        \"babel-runtime\": \"^6.26.0\",
        \"babel-template\": \"^6.26.0\",
        \"babel-types\": \"^6.26.0\"
      }
    },
    \"babel-plugin-transform-es2015-modules-systemjs\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-modules-systemjs/-/babel-plugin-transform-es2015-modules-systemjs-6.24.1.tgz\",
      \"integrity\": \"sha1-/4mhQrkRmpBhlfXxBuzzBdlAfSM=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-hoist-variables\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-modules-umd\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-modules-umd/-/babel-plugin-transform-es2015-modules-umd-6.24.1.tgz\",
      \"integrity\": \"sha1-rJl+YoXNGO1hdq22B9YCNErThGg=\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-transform-es2015-modules-amd\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-object-super\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-object-super/-/babel-plugin-transform-es2015-object-super-6.24.1.tgz\",
      \"integrity\": \"sha1-JM72muIcuDp/hgPa0CH1cusnj40=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-replace-supers\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-parameters\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-parameters/-/babel-plugin-transform-es2015-parameters-6.24.1.tgz\",
      \"integrity\": \"sha1-V6w1GrScrxSpfNE7CfZv3wpiXys=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-call-delegate\": \"^6.24.1\",
        \"babel-helper-get-function-arity\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-template\": \"^6.24.1\",
        \"babel-traverse\": \"^6.24.1\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-shorthand-properties\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-shorthand-properties/-/babel-plugin-transform-es2015-shorthand-properties-6.24.1.tgz\",
      \"integrity\": \"sha1-JPh11nIch2YbvZmkYi5R8U3jiqA=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-spread\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-spread/-/babel-plugin-transform-es2015-spread-6.22.0.tgz\",
      \"integrity\": \"sha1-1taKmfia7cRTbIGlQujdnxdG+NE=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-sticky-regex\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-sticky-regex/-/babel-plugin-transform-es2015-sticky-regex-6.24.1.tgz\",
      \"integrity\": \"sha1-AMHNsaynERLN8M9hJsLta0V8zbw=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-regex\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-plugin-transform-es2015-template-literals\": {
      \"version\": \"6.22.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-template-literals/-/babel-plugin-transform-es2015-template-literals-6.22.0.tgz\",
      \"integrity\": \"sha1-qEs0UPfp+PH2g51taH2oS7EjbY0=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-typeof-symbol\": {
      \"version\": \"6.23.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-typeof-symbol/-/babel-plugin-transform-es2015-typeof-symbol-6.23.0.tgz\",
      \"integrity\": \"sha1-3sCfHN3/lLUqxz1QXITfWdzOs3I=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-es2015-unicode-regex\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-es2015-unicode-regex/-/babel-plugin-transform-es2015-unicode-regex-6.24.1.tgz\",
      \"integrity\": \"sha1-04sS9C6nMj9yk4fxinxa4frrNek=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-regex\": \"^6.24.1\",
        \"babel-runtime\": \"^6.22.0\",
        \"regexpu-core\": \"^2.0.0\"
      }
    },
    \"babel-plugin-transform-exponentiation-operator\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-exponentiation-operator/-/babel-plugin-transform-exponentiation-operator-6.24.1.tgz\",
      \"integrity\": \"sha1-KrDJx/MJj6SJB3cruBP+QejeOg4=\",
      \"dev\": true,
      \"requires\": {
        \"babel-helper-builder-binary-assignment-operator-visitor\": \"^6.24.1\",
        \"babel-plugin-syntax-exponentiation-operator\": \"^6.8.0\",
        \"babel-runtime\": \"^6.22.0\"
      }
    },
    \"babel-plugin-transform-object-rest-spread\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-object-rest-spread/-/babel-plugin-transform-object-rest-spread-6.26.0.tgz\",
      \"integrity\": \"sha1-DzZpLVD+9rfi1LOsFHgTepY7ewY=\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-syntax-object-rest-spread\": \"^6.8.0\",
        \"babel-runtime\": \"^6.26.0\"
      }
    },
    \"babel-plugin-transform-regenerator\": {
      \"version\": \"6.26.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-regenerator/-/babel-plugin-transform-regenerator-6.26.0.tgz\",
      \"integrity\": \"sha1-4HA2lvveJ/Cj78rPi03KL3s6jy8=\",
      \"dev\": true,
      \"requires\": {
        \"regenerator-transform\": \"^0.10.0\"
      }
    },
    \"babel-plugin-transform-strict-mode\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-plugin-transform-strict-mode/-/babel-plugin-transform-strict-mode-6.24.1.tgz\",
      \"integrity\": \"sha1-1fr3qleKZbvlkc9e2uBKDGcCB1g=\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.22.0\",
        \"babel-types\": \"^6.24.1\"
      }
    },
    \"babel-preset-env\": {
      \"version\": \"1.7.0\",
      \"resolved\": \"https://registry.npmjs.org/babel-preset-env/-/babel-preset-env-1.7.0.tgz\",
      \"integrity\": \"sha512-9OR2afuKDneX2/q2EurSftUYM0xGu4O2D9adAhVfADDhrYDaxXV0rBbevVYoY9n6nyX1PmQW/0jtpJvUNr9CHg==\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-check-es2015-constants\": \"^6.22.0\",
        \"babel-plugin-syntax-trailing-function-commas\": \"^6.22.0\",
        \"babel-plugin-transform-async-to-generator\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-arrow-functions\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-block-scoped-functions\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-block-scoping\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-classes\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-computed-properties\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-destructuring\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-duplicate-keys\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-for-of\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-function-name\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-literals\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-modules-amd\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-modules-commonjs\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-modules-systemjs\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-modules-umd\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-object-super\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-parameters\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-shorthand-properties\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-spread\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-sticky-regex\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-template-literals\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-typeof-symbol\": \"^6.23.0\",
        \"babel-plugin-transform-es2015-unicode-regex\": \"^6.22.0\",
        \"babel-plugin-transform-exponentiation-operator\": \"^6.22.0\",
        \"babel-plugin-transform-regenerator\": \"^6.22.0\",
        \"browserslist\": \"^3.2.6\",
        \"invariant\": \"^2.2.2\",
        \"semver\": \"^5.3.0\"
      }
    },
    \"babel-preset-es2015\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-preset-es2015/-/babel-preset-es2015-6.24.1.tgz\",
      \"integrity\": \"sha1-1EBQ1rwsn+6nAqrzjXJ6AhBTiTk=\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-check-es2015-constants\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-arrow-functions\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-block-scoped-functions\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-block-scoping\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-classes\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-computed-properties\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-destructuring\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-duplicate-keys\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-for-of\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-function-name\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-literals\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-modules-amd\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-modules-commonjs\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-modules-systemjs\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-modules-umd\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-object-super\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-parameters\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-shorthand-properties\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-spread\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-sticky-regex\": \"^6.24.1\",
        \"babel-plugin-transform-es2015-template-literals\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-typeof-symbol\": \"^6.22.0\",
        \"babel-plugin-transform-es2015-unicode-regex\": \"^6.24.1\",
        \"babel-plugin-transform-regenerator\": \"^6.24.1\"
      }
    },
    \"babel-preset-stage-2\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-preset-stage-2/-/babel-preset-stage-2-6.24.1.tgz\",
      \"integrity\": \"sha1-2eKWD7PXEYfw5k7sYrwHdnIZvcE=\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-syntax-dynamic-import\": \"^6.18.0\",
        \"babel-plugin-transform-class-properties\": \"^6.24.1\",
        \"babel-plugin-transform-decorators\": \"^6.24.1\",
        \"babel-preset-stage-3\": \"^6.24.1\"
      }
    },
    \"babel-preset-stage-3\": {
      \"version\": \"6.24.1\",
      \"resolved\": \"https://registry.npmjs.org/babel-preset-stage-3/-/babel-preset-stage-3-6.24.1.tgz\",
      \"integrity\": \"sha1-g2raCp56f6N8sTj7kyb4eTSkg5U=\",
      \"dev\": true,
      \"requires\": {
        \"babel-plugin-syntax-trailing-function-commas\": \"^6.22.0\",
        \"babel-plugin-transform-async-generator-functions\": \"^6.24.1\",
        \"babel-plugin-transform-async-to-generator\": \"^6.24.1\",
        \"babel-plugin-transform-exponentiation-operator\": \"^6.24.1\",
        \"babel-plugin-transform-object-rest-spread\": \"^6.22.0\"
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
      }
    },
    \"babylon\": {
      \"version\": \"6.18.0\",
      \"resolved\": \"https://registry.npmjs.org/babylon/-/babylon-6.18.0.tgz\",
      \"integrity\": \"sha512-q/UEjfGJ2Cm3oKV71DJz9d25TPnq5rhBVL2Q4fA5wcC3jcrdn7+SssEybFIxwAvvP+YCsCYNKughoF33GxgycQ==\",
      \"dev\": true
    },
    \"balanced-match\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/balanced-match/-/balanced-match-1.0.0.tgz\",
      \"integrity\": \"sha1-ibTRmasr7kneFk6gK4nORi1xt2c=\",
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
      \"dev\": true,
      \"optional\": true
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
      \"version\": \"5.2.0\",
      \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-5.2.0.tgz\",
      \"integrity\": \"sha512-D7iWRBvnZE8ecXiLj/9wbxH7Tk79fAh8IHaTNq1RWRixsS02W+5qS+iE9yq6RYl0asXx5tw0bLhmT5pIfbSquw==\",
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
        \"inherits\": {
          \"version\": \"2.0.4\",
          \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
          \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
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
        },
        \"safe-buffer\": {
          \"version\": \"5.2.1\",
          \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.2.1.tgz\",
          \"integrity\": \"sha512-rp3So07KcdmmKbGvgaNxQSJr7bGVSVk5S9Eq1F+ppbRo70+YeaDxkw5Dd8NPN+GD6bjnYm2VuPuCXmpuYvmCXQ==\",
          \"dev\": true
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
      \"version\": \"3.2.8\",
      \"resolved\": \"https://registry.npmjs.org/browserslist/-/browserslist-3.2.8.tgz\",
      \"integrity\": \"sha512-WHVocJYavUwVgVViC0ORikPHQquXwVh939TaelZ4WDqpWgTX/FsGhl/+P4qBUAGcRvtOgDgC+xftNWWp2RUTAQ==\",
      \"dev\": true,
      \"requires\": {
        \"caniuse-lite\": \"^1.0.30000844\",
        \"electron-to-chromium\": \"^1.3.47\"
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
        \"mkdirp\": {
          \"version\": \"1.0.4\",
          \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-1.0.4.tgz\",
          \"integrity\": \"sha512-vVqVZQyf3WLx2Shd0qJ9xuvqgAyKPLAiqITEtqW0oIUjzo3PePDd6fW9iFz30ef7Ysp/oiWqbhszeGWW2T6Gzw==\",
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
    \"camelcase\": {
      \"version\": \"5.3.1\",
      \"resolved\": \"https://registry.npmjs.org/camelcase/-/camelcase-5.3.1.tgz\",
      \"integrity\": \"sha512-L28STB170nwWS63UjtlEOE3dldQApaJXZkOI1uMFfzf3rRuPegHaHesyee+YxQ+W6SvRDQV6UrdOdRiR153wJg==\",
      \"dev\": true
    },
    \"caniuse-lite\": {
      \"version\": \"1.0.30001332\",
      \"resolved\": \"https://registry.npmjs.org/caniuse-lite/-/caniuse-lite-1.0.30001332.tgz\",
      \"integrity\": \"sha512-10T30NYOEQtN6C11YGg411yebhvpnC6Z102+B95eAsN0oB6KUs01ivE8u+G6FMIRtIrVlYXhL+LUwQ3/hXwDWw==\",
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
    \"chokidar\": {
      \"version\": \"3.5.3\",
      \"resolved\": \"https://registry.npmjs.org/chokidar/-/chokidar-3.5.3.tgz\",
      \"integrity\": \"sha512-Dr3sfKRP6oTcjf2JmUmFJfeVMvXBdegxB0iVQ5eb2V10uFJUCAS8OByZdVAyVb8xXNz3GjjTgj9kLWsZTqE6kw==\",
      \"dev\": true,
      \"optional\": true,
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
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"0.2.5\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
          \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^0.1.0\"
          }
        },
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
    \"clean-stack\": {
      \"version\": \"2.2.0\",
      \"resolved\": \"https://registry.npmjs.org/clean-stack/-/clean-stack-2.2.0.tgz\",
      \"integrity\": \"sha512-4diC9HaTE+KRAMWhDhrGOECgWZxoevMc5TlkObMqNSsVU62PYzXZ/SMTjzyGAFF1YusgxGcSWTEXBhp0CPwQ1A==\",
      \"dev\": true
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
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"4.1.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.1.tgz\",
          \"integrity\": \"sha512-ILlv4k/3f6vfQ4OoP2AGvirOktlQ98ZEL1k9FaQjxa3L1abBgbuTDAdPOpvbGncC0BTVQrl+OM8xZGK6tWXt7g==\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
          \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^4.1.0\"
          }
        }
      }
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
      \"dev\": true,
      \"requires\": {
        \"color-name\": \"1.1.3\"
      }
    },
    \"color-name\": {
      \"version\": \"1.1.3\",
      \"resolved\": \"https://registry.npmjs.org/color-name/-/color-name-1.1.3.tgz\",
      \"integrity\": \"sha1-p9BVi9icQveV3UIyj3QIMcpTvCU=\",
      \"dev\": true
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
    \"console-browserify\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/console-browserify/-/console-browserify-1.2.0.tgz\",
      \"integrity\": \"sha512-ZMkYO/LkF17QvCPqM0gxw8yUzigAOZOSWSHg91FH6orS7vcEj5dVZTidN2fQ14yBSdg97RqhSNwLUXInd52OTA==\",
      \"dev\": true
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
      },
      \"dependencies\": {
        \"rimraf\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
          \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        }
      }
    },
    \"copy-descriptor\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/copy-descriptor/-/copy-descriptor-0.1.1.tgz\",
      \"integrity\": \"sha1-Z29us8OZl8LuGsOpJP1hJHSPV40=\",
      \"dev\": true
    },
    \"core-js\": {
      \"version\": \"2.5.7\",
      \"resolved\": \"https://registry.npmjs.org/core-js/-/core-js-2.5.7.tgz\",
      \"integrity\": \"sha512-RszJCAxg/PP6uzXVXL6BsxSXx/B05oJAQ2vkJRjyjrEcNVycaqOmNb5OTxZPE3xa5gwZduqza6L9JOCenh/Ecw==\",
      \"dev\": true
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
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"4.12.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
          \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
          \"dev\": true
        }
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
      \"version\": \"6.0.5\",
      \"resolved\": \"https://registry.npmjs.org/cross-spawn/-/cross-spawn-6.0.5.tgz\",
      \"integrity\": \"sha512-eTVLrBSt7fjbDygz805pMnstIs2VTBNkRm0qxZd+M7A5XDdxVRWO5MxGBXZhjY4cqLYLdtrGqRf8mBPmzwSpWQ==\",
      \"dev\": true,
      \"requires\": {
        \"nice-try\": \"^1.0.4\",
        \"path-key\": \"^2.0.1\",
        \"semver\": \"^5.5.0\",
        \"shebang-command\": \"^1.2.0\",
        \"which\": \"^1.2.9\"
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
    \"cyclist\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/cyclist/-/cyclist-1.0.1.tgz\",
      \"integrity\": \"sha1-WW6WmP0MgOEgOMK4LW6xs1tiJNk=\",
      \"dev\": true
    },
    \"debug\": {
      \"version\": \"2.6.9\",
      \"resolved\": \"https://registry.npmjs.org/debug/-/debug-2.6.9.tgz\",
      \"integrity\": \"sha512-bC7ElrdJaJnPbAP+1EotYvqZsb3ecl5wi6Bfi6BJTUcNowp6cvspg0jXznRTKDjm/E7AdgFBVeAPVMNcKGsHMA==\",
      \"dev\": true,
      \"requires\": {
        \"ms\": \"2.0.0\"
      }
    },
    \"decamelize\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/decamelize/-/decamelize-1.2.0.tgz\",
      \"integrity\": \"sha1-9lNNFRSCabIDUue+4m9QH5oZEpA=\",
      \"dev\": true
    },
    \"decode-uri-component\": {
      \"version\": \"0.2.2\",
      \"resolved\": \"https://registry.npmjs.org/decode-uri-component/-/decode-uri-component-0.2.2.tgz\",
      \"integrity\": \"sha512-FqUYQ+8o158GyGTrMFJms9qh3CqTKvAqgqsTnkLI8sKu0028orqBhxNMFkFen0zGyg6epACD32pjVk58ngIErQ==\",
      \"dev\": true
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
    \"detect-file\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/detect-file/-/detect-file-1.0.0.tgz\",
      \"integrity\": \"sha1-8NZtA2cqglyxtzvbP+YjEMjlUrc=\",
      \"dev\": true
    },
    \"diff\": {
      \"version\": \"4.0.2\",
      \"resolved\": \"https://registry.npmjs.org/diff/-/diff-4.0.2.tgz\",
      \"integrity\": \"sha512-58lmxKSA4BNyLz+HHMUzlOEpg09FV+ev6ZMe3vJihgdxzgcwZ8VoEEPmALCZG9LmqfVoNMMKpttIYTVG6uDY7A==\",
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
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"4.12.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
          \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
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
    \"electron-to-chromium\": {
      \"version\": \"1.4.118\",
      \"resolved\": \"https://registry.npmjs.org/electron-to-chromium/-/electron-to-chromium-1.4.118.tgz\",
      \"integrity\": \"sha512-maZIKjnYDvF7Fs35nvVcyr44UcKNwybr93Oba2n3HkKDFAtk0svERkLN/HyczJDS3Fo4wU9th9fUQd09ZLtj1w==\",
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
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"4.12.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
          \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
          \"dev\": true
        },
        \"inherits\": {
          \"version\": \"2.0.4\",
          \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
          \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
          \"dev\": true
        }
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
      \"dev\": true,
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
        \"tapable\": {
          \"version\": \"1.1.3\",
          \"resolved\": \"https://registry.npmjs.org/tapable/-/tapable-1.1.3.tgz\",
          \"integrity\": \"sha512-4WK/bYZmj8xLr+HUCODHGF1ZFzsYffasLUgEiMBY4fgtltdO6B4WJtlSbPaDTLpYTcGVwM2qLnFTICEcNxs3kA==\",
          \"dev\": true
        }
      }
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
    \"escalade\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/escalade/-/escalade-3.1.1.tgz\",
      \"integrity\": \"sha512-k0er2gUkLf8O0zKJiAhmkTnJlTvINGv7ygDNPbeIsX/TJjGJZHuh9B2UxbsaEkmlEo9MfhrSzmhIlhRlI2GXnw==\",
      \"dev\": true
    },
    \"escape-string-regexp\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/escape-string-regexp/-/escape-string-regexp-1.0.5.tgz\",
      \"integrity\": \"sha1-G2HAViGQqN/2rjuyzwIAyhMLhtQ=\",
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
      \"version\": \"4.3.0\",
      \"resolved\": \"https://registry.npmjs.org/estraverse/-/estraverse-4.3.0.tgz\",
      \"integrity\": \"sha512-39nnKffWz8xN1BU/2c79n9nB9HDzo0niYUqx6xyqUnyoAnQyyWpOTdZEeiCch8BBu515t4wp9ZmgVfVhn9EBpw==\",
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
        \"define-property\": {
          \"version\": \"0.2.5\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
          \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^0.1.0\"
          }
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
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
          \"dev\": true
        },
        \"kind-of\": {
          \"version\": \"5.1.0\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
          \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
          \"dev\": true
        }
      }
    },
    \"expand-tilde\": {
      \"version\": \"2.0.2\",
      \"resolved\": \"https://registry.npmjs.org/expand-tilde/-/expand-tilde-2.0.2.tgz\",
      \"integrity\": \"sha1-l+gBqgUt8CRU3kawK/YhZCzchQI=\",
      \"dev\": true,
      \"requires\": {
        \"homedir-polyfill\": \"^1.0.1\"
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
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
          \"dev\": true
        }
      }
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
    \"figgy-pudding\": {
      \"version\": \"3.5.2\",
      \"resolved\": \"https://registry.npmjs.org/figgy-pudding/-/figgy-pudding-3.5.2.tgz\",
      \"integrity\": \"sha512-0btnI/H8f2pavGMN8w40mlSKOfTK2SVJmBfBeVIj3kNw0swwgzyRq0d5TJVOwodFmtvpPeWPN/MCcfuWF0Ezbw==\",
      \"dev\": true
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
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/find-cache-dir/-/find-cache-dir-1.0.0.tgz\",
      \"integrity\": \"sha1-kojj6ePMN0hxfTnq3hfPcfww7m8=\",
      \"dev\": true,
      \"requires\": {
        \"commondir\": \"^1.0.1\",
        \"make-dir\": \"^1.0.0\",
        \"pkg-dir\": \"^2.0.0\"
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
    \"findup-sync\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/findup-sync/-/findup-sync-3.0.0.tgz\",
      \"integrity\": \"sha512-YbffarhcicEhOrm4CtrwdKBdCuz576RLdhJDsIfvNtxUuhdRet1qZcsMjqbePtAseKdAnDyM/IyXbu7PRPRLYg==\",
      \"dev\": true,
      \"requires\": {
        \"detect-file\": \"^1.0.0\",
        \"is-glob\": \"^4.0.0\",
        \"micromatch\": \"^3.0.4\",
        \"resolve-dir\": \"^1.0.1\"
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
            }
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
            }
          }
        },
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
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
    \"for-in\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/for-in/-/for-in-1.0.2.tgz\",
      \"integrity\": \"sha1-gQaNKVqBQuwKxybG4iAMMPttXoA=\",
      \"dev\": true
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
    \"get-value\": {
      \"version\": \"2.0.6\",
      \"resolved\": \"https://registry.npmjs.org/get-value/-/get-value-2.0.6.tgz\",
      \"integrity\": \"sha1-3BXKHGcjh8p2vTesCjlbogQqLCg=\",
      \"dev\": true
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
      \"optional\": true,
      \"requires\": {
        \"is-glob\": \"^4.0.1\"
      }
    },
    \"global-modules\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/global-modules/-/global-modules-2.0.0.tgz\",
      \"integrity\": \"sha512-NGbfmJBp9x8IxyJSd1P+otYK8vonoJactOogrVfFRIAEY1ukil8RSKDz2Yo7wh1oihl51l/r6W4epkeKJHqL8A==\",
      \"dev\": true,
      \"requires\": {
        \"global-prefix\": \"^3.0.0\"
      }
    },
    \"global-prefix\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/global-prefix/-/global-prefix-3.0.0.tgz\",
      \"integrity\": \"sha512-awConJSVCHVGND6x3tmMaKcQvwXLhjdkmomy2W+Goaui8YPgYgXJZewhg3fWC+DlfqqQuWg8AwqjGTD2nAPVWg==\",
      \"dev\": true,
      \"requires\": {
        \"ini\": \"^1.3.5\",
        \"kind-of\": \"^6.0.2\",
        \"which\": \"^1.3.1\"
      }
    },
    \"globals\": {
      \"version\": \"9.18.0\",
      \"resolved\": \"https://registry.npmjs.org/globals/-/globals-9.18.0.tgz\",
      \"integrity\": \"sha512-S0nG3CLEQiY/ILxqtztTWH/3iRRdyBLw6KMDxnKMchrtbj2OFmehVh0WUCfW3DUrIgx/qFrJPICrq4Z4sTR9UQ==\",
      \"dev\": true
    },
    \"graceful-fs\": {
      \"version\": \"4.2.10\",
      \"resolved\": \"https://registry.npmjs.org/graceful-fs/-/graceful-fs-4.2.10.tgz\",
      \"integrity\": \"sha512-9ByhssR2fPVsNZj478qUUbKfmL0+t5BDVyjShtyZZLiK7ZDAArFFfopyOTj0M05wE2tJPisA4iTnnXl2YoPvOA==\",
      \"dev\": true
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
    \"has-flag\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-3.0.0.tgz\",
      \"integrity\": \"sha1-tdRU3CGZriJWmfNGfloH87lVuv0=\",
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
        \"inherits\": {
          \"version\": \"2.0.4\",
          \"resolved\": \"https://registry.npmjs.org/inherits/-/inherits-2.0.4.tgz\",
          \"integrity\": \"sha512-k/vGaX4/Yla3WzyMCvTQOXYeIHvqOKtnqBduzTHpzpQZzAskKMhZ2K+EnBiSM9zGSoIFeMpXKxa4dYeZIQqewQ==\",
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
        },
        \"safe-buffer\": {
          \"version\": \"5.2.1\",
          \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.2.1.tgz\",
          \"integrity\": \"sha512-rp3So07KcdmmKbGvgaNxQSJr7bGVSVk5S9Eq1F+ppbRo70+YeaDxkw5Dd8NPN+GD6bjnYm2VuPuCXmpuYvmCXQ==\",
          \"dev\": true
        }
      }
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
    \"homedir-polyfill\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/homedir-polyfill/-/homedir-polyfill-1.0.3.tgz\",
      \"integrity\": \"sha512-eSmmWE5bZTK2Nou4g0AI3zZ9rswp7GRKoKXS1BLUkvPviOqs4YTN1djQIqrXy9k5gEtdLPy86JjRwsNM9tnDcA==\",
      \"dev\": true,
      \"requires\": {
        \"parse-passwd\": \"^1.0.0\"
      }
    },
    \"https-browserify\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/https-browserify/-/https-browserify-1.0.0.tgz\",
      \"integrity\": \"sha1-7AbBDgo0wPL68Zn3/X/Hj//QPHM=\",
      \"dev\": true
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
    \"import-local\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/import-local/-/import-local-2.0.0.tgz\",
      \"integrity\": \"sha512-b6s04m3O+s3CGSbqDIyP4R6aAwAeYlVq9+WUWep6iHa8ETRf9yei1U48C5MmfJmV9AiLYYBKPMq/W+/WRpQmCQ==\",
      \"dev\": true,
      \"requires\": {
        \"pkg-dir\": \"^3.0.0\",
        \"resolve-cwd\": \"^2.0.0\"
      },
      \"dependencies\": {
        \"find-up\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
          \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^3.0.0\"
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
        \"p-try\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
          \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
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
    \"ini\": {
      \"version\": \"1.3.8\",
      \"resolved\": \"https://registry.npmjs.org/ini/-/ini-1.3.8.tgz\",
      \"integrity\": \"sha512-JV/yugV2uzW5iMRSiZAyDtQd+nxtUnjeLt0acNdw98kKLrvuRVyB80tsREOE7yvGVgalhZ6RNXCmEHkUKBKxew==\",
      \"dev\": true
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
    \"is-binary-path\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/is-binary-path/-/is-binary-path-2.1.0.tgz\",
      \"integrity\": \"sha512-ZMERYes6pDydyuGidse7OsHxtbI7WVeUEozgR/g7rd0xUimYNlvZRE/K2MgZTjWy725IfelLeVcEM97mmtRGXw==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"binary-extensions\": \"^2.0.0\"
      }
    },
    \"is-buffer\": {
      \"version\": \"1.1.6\",
      \"resolved\": \"https://registry.npmjs.org/is-buffer/-/is-buffer-1.1.6.tgz\",
      \"integrity\": \"sha512-NcdALwpXkTm5Zvvbk7owOUSvVvBKDgKP5/ewfXEznmQFfs4ZRmanOeKBTjRVjka3QFoN6XJ+9F3USqfHqTaU5w==\",
      \"dev\": true
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
    \"is-extendable\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-1.0.1.tgz\",
      \"integrity\": \"sha512-arnXMxT1hhoKo9k1LZdmlNyJdDDfy2v0fXjFlmok4+i8ul/6WlbVge9bhM74OpNPQPMGUToDtz+KXa1PneJxOA==\",
      \"dev\": true,
      \"requires\": {
        \"is-plain-object\": \"^2.0.4\"
      }
    },
    \"is-extglob\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/is-extglob/-/is-extglob-2.1.1.tgz\",
      \"integrity\": \"sha1-qIwCU1eR8C7TfHahueqXc8gz+MI=\",
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
    \"is-number\": {
      \"version\": \"7.0.0\",
      \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-7.0.0.tgz\",
      \"integrity\": \"sha512-41Cifkg6e8TylSpdtTpeLVMqvSBEVzTttHvERD741+pnZ8ANv0004MRL43QKPDlK9cGvNp6NZWZUBlbGXYxxng==\",
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
    \"jest-worker\": {
      \"version\": \"26.6.2\",
      \"resolved\": \"https://registry.npmjs.org/jest-worker/-/jest-worker-26.6.2.tgz\",
      \"integrity\": \"sha512-KWYVV1c4i+jbMpaBC+U++4Va0cp8OisU185o73T1vo99hqi7w8tSJfUXYswwqqrjzwxa6KpRK54WhPvwf5w6PQ==\",
      \"dev\": true,
      \"requires\": {
        \"@types/node\": \"*\",
        \"merge-stream\": \"^2.0.0\",
        \"supports-color\": \"^7.0.0\"
      },
      \"dependencies\": {
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
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
        }
      }
    },
    \"js-tokens\": {
      \"version\": \"3.0.2\",
      \"resolved\": \"https://registry.npmjs.org/js-tokens/-/js-tokens-3.0.2.tgz\",
      \"integrity\": \"sha1-mGbfOVECEw449/mWvOtlRDIJwls=\",
      \"dev\": true
    },
    \"json-parse-better-errors\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/json-parse-better-errors/-/json-parse-better-errors-1.0.2.tgz\",
      \"integrity\": \"sha512-mrqyZKfX5EhL7hvqcV6WG1yYjnjeuYDzDhhcAAUrq8Po85NBQBJP+ZDUT75qZQ98IkUoBqdkExkukOU7Ts2wrw==\",
      \"dev\": true
    },
    \"json-schema-traverse\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/json-schema-traverse/-/json-schema-traverse-0.4.1.tgz\",
      \"integrity\": \"sha512-xbbCH5dCYU5T8LcEhhuh7HJ88HXuW3qsI3Y0zOZFKfZEHcpWiHU/Jxzk629Brsab/mMiHQti9wMP+845RPe3Vg==\",
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
    \"lodash\": {
      \"version\": \"4.17.21\",
      \"resolved\": \"https://registry.npmjs.org/lodash/-/lodash-4.17.21.tgz\",
      \"integrity\": \"sha512-v2kDEe57lecTulaDIuNTPy3Ry4gLGJ6Z1O3vE1krgXZNrsQ+LFTGHVxVjcXPs17LhbZVGedAJv8XZ1tvj5FvSg==\",
      \"dev\": true
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
      \"version\": \"1.3.0\",
      \"resolved\": \"https://registry.npmjs.org/make-dir/-/make-dir-1.3.0.tgz\",
      \"integrity\": \"sha512-2w31R7SJtieJJnQtGc7RVL2StM2vGYVfqUOvUDxH6bC6aJTxPxTF0GnIgCyu7tjockiUWAYQRbxa7vKn34s5sQ==\",
      \"dev\": true,
      \"requires\": {
        \"pify\": \"^3.0.0\"
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
      \"version\": \"0.5.0\",
      \"resolved\": \"https://registry.npmjs.org/memory-fs/-/memory-fs-0.5.0.tgz\",
      \"integrity\": \"sha512-jA0rdU5KoQMC0e6ppoNRtpp6vjFq6+NY7r8hywnC7V+1Xj/MtHwGIbB1QaK/dunyjWteJzmkpd7ooeWg10T7GA==\",
      \"dev\": true,
      \"requires\": {
        \"errno\": \"^0.1.3\",
        \"readable-stream\": \"^2.0.1\"
      }
    },
    \"merge-stream\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/merge-stream/-/merge-stream-2.0.0.tgz\",
      \"integrity\": \"sha512-abv/qOcuPfk3URPfDzmZU1LKmuw8kT+0nIHvKrKgFrwifol/doWcdA4ZqsWQ8ENrFKkd67Mfpo/LovbIUsbt3w==\",
      \"dev\": true
    },
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
    \"miller-rabin\": {
      \"version\": \"4.0.1\",
      \"resolved\": \"https://registry.npmjs.org/miller-rabin/-/miller-rabin-4.0.1.tgz\",
      \"integrity\": \"sha512-115fLhvZVqWwHPbClyntxEVfVDfl9DLLTuJvq3g2O/Oxi8AiNouAHvDSzHS0viUJc+V5vm3eq91Xwqn9dp4jRA==\",
      \"dev\": true,
      \"requires\": {
        \"bn.js\": \"^4.0.0\",
        \"brorand\": \"^1.0.1\"
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"4.12.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
          \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
          \"dev\": true
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
      \"version\": \"3.1.2\",
      \"resolved\": \"https://registry.npmjs.org/minimatch/-/minimatch-3.1.2.tgz\",
      \"integrity\": \"sha512-J7p63hRiAjw1NDEww1W7i37+ByIrOWO5XQQAzZ3VOcL0PNybwpfmV/N05zFAzwQ9USyEcX6t3UO+K5aqBQOIHw==\",
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
    \"minipass\": {
      \"version\": \"3.1.6\",
      \"resolved\": \"https://registry.npmjs.org/minipass/-/minipass-3.1.6.tgz\",
      \"integrity\": \"sha512-rty5kpw9/z8SX9dmxblFA6edItUmwJgMeYDZRrwlIVN27i8gysGbznJwUggw2V/FVqFSDdWy040ZPS811DYAqQ==\",
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
      }
    },
    \"mkdirp\": {
      \"version\": \"0.5.6\",
      \"resolved\": \"https://registry.npmjs.org/mkdirp/-/mkdirp-0.5.6.tgz\",
      \"integrity\": \"sha512-FP+p8RB8OWpF3YZBCrP5gtADmtXApB5AMLn+vdyA+PyxCjrCs00mjyUozssO33cwDeT3wNGdLxJ5M//YqtHAJw==\",
      \"dev\": true,
      \"requires\": {
        \"minimist\": \"^1.2.6\"
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
      },
      \"dependencies\": {
        \"rimraf\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
          \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
          }
        }
      }
    },
    \"ms\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/ms/-/ms-2.0.0.tgz\",
      \"integrity\": \"sha1-VgiurfwAvmwpAd9fmGF4jeDVl8g=\",
      \"dev\": true
    },
    \"nan\": {
      \"version\": \"2.15.0\",
      \"resolved\": \"https://registry.npmjs.org/nan/-/nan-2.15.0.tgz\",
      \"integrity\": \"sha512-8ZtvEnA2c5aYCZYd1cvgdnU6cqwixRoYg70xPLWUws5ORTa/lnw+u4amixRS/Ac5U5mQVgp9pnlSUnbNWFaWZQ==\",
      \"dev\": true,
      \"optional\": true
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
      }
    },
    \"neo-async\": {
      \"version\": \"2.6.2\",
      \"resolved\": \"https://registry.npmjs.org/neo-async/-/neo-async-2.6.2.tgz\",
      \"integrity\": \"sha512-Yd3UES5mWCSqR+qNT93S3UoYUkqAZ9lLg8a7g9rimsWmYGK8cVToA4/sF3RrshdyV3sAGMXVUmpMYOw+dLpOuw==\",
      \"dev\": true
    },
    \"nice-try\": {
      \"version\": \"1.0.5\",
      \"resolved\": \"https://registry.npmjs.org/nice-try/-/nice-try-1.0.5.tgz\",
      \"integrity\": \"sha512-1nh45deeb5olNY7eX82BkPO7SSxR5SSYJiPTrTdFUVYwAl8CKMA5N9PjTYkHiRjisVcxcQ1HXdLhx2qxxJzLNQ==\",
      \"dev\": true
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
      \"version\": \"2.0.3\",
      \"resolved\": \"https://registry.npmjs.org/node-releases/-/node-releases-2.0.3.tgz\",
      \"integrity\": \"sha512-maHFz6OLqYxz+VQyCAtA3PTX4UP/53pa05fyDNc9CwjvJ0yEh6+xBwKsgCxMNhS8taUKBFYxfuiaD9U/55iFaw==\",
      \"dev\": true
    },
    \"normalize-path\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/normalize-path/-/normalize-path-3.0.0.tgz\",
      \"integrity\": \"sha512-6eZs5Ls3WtCisHWp9S2GUy8dqkpGi4BVSz3GaqiE6ezub0512ESztXUwUB6C6IKbQkY2Pnb/mD4WYojCRwcwLA==\",
      \"dev\": true,
      \"optional\": true
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
        \"define-property\": {
          \"version\": \"0.2.5\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
          \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^0.1.0\"
          }
        },
        \"is-accessor-descriptor\": {
          \"version\": \"0.1.6\",
          \"resolved\": \"https://registry.npmjs.org/is-accessor-descriptor/-/is-accessor-descriptor-0.1.6.tgz\",
          \"integrity\": \"sha1-qeEss66Nh2cn7u84Q/igiXtcmNY=\",
          \"dev\": true,
          \"requires\": {
            \"kind-of\": \"^3.0.2\"
          }
        },
        \"is-data-descriptor\": {
          \"version\": \"0.1.4\",
          \"resolved\": \"https://registry.npmjs.org/is-data-descriptor/-/is-data-descriptor-0.1.4.tgz\",
          \"integrity\": \"sha1-C17mSDiOLIYCgueT8YVv7D8wG1Y=\",
          \"dev\": true,
          \"requires\": {
            \"kind-of\": \"^3.0.2\"
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
          },
          \"dependencies\": {
            \"kind-of\": {
              \"version\": \"5.1.0\",
              \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
              \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
              \"dev\": true
            }
          }
        },
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
    \"object-visit\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/object-visit/-/object-visit-1.0.1.tgz\",
      \"integrity\": \"sha1-95xEk68MU3e1n+OdOV5BBC3QRbs=\",
      \"dev\": true,
      \"requires\": {
        \"isobject\": \"^3.0.0\"
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
    \"once\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/once/-/once-1.4.0.tgz\",
      \"integrity\": \"sha1-WDsap3WWHUsROsF9nFC6753Xa9E=\",
      \"dev\": true,
      \"requires\": {
        \"wrappy\": \"1\"
      }
    },
    \"os-browserify\": {
      \"version\": \"0.3.0\",
      \"resolved\": \"https://registry.npmjs.org/os-browserify/-/os-browserify-0.3.0.tgz\",
      \"integrity\": \"sha1-hUNzx/XCMVkU/Jv8a9gjj92h7Cc=\",
      \"dev\": true
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
    \"p-map\": {
      \"version\": \"4.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-map/-/p-map-4.0.0.tgz\",
      \"integrity\": \"sha512-/bjOqmgETBYB5BoEeGVea8dmvHb2m9GLy1E9W43yeyfP6QQCZGFNa+XRceJEuDB6zqr+gKpIAmlLebMpykw/MQ==\",
      \"dev\": true,
      \"requires\": {
        \"aggregate-error\": \"^3.0.0\"
      }
    },
    \"p-try\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-1.0.0.tgz\",
      \"integrity\": \"sha1-y8ec26+P1CKOE/Yh8rGiN8GyB7M=\",
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
    \"parse-passwd\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/parse-passwd/-/parse-passwd-1.0.0.tgz\",
      \"integrity\": \"sha1-bVuTSkVpk7I9N/QKOC1vFmao5cY=\",
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
      \"integrity\": \"sha1-zDPSTVJeCZpTiMAzbG4yuRYGCeA=\",
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
    \"path-key\": {
      \"version\": \"2.0.1\",
      \"resolved\": \"https://registry.npmjs.org/path-key/-/path-key-2.0.1.tgz\",
      \"integrity\": \"sha1-QRyttXTFoUDTpLGRDUDYDMn0C0A=\",
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
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pify/-/pify-3.0.0.tgz\",
      \"integrity\": \"sha1-5aSs0sEB/fPZpNB/DbxNtJ3SgXY=\",
      \"dev\": true
    },
    \"pkg-dir\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pkg-dir/-/pkg-dir-2.0.0.tgz\",
      \"integrity\": \"sha1-9tXREJ4Z1j7fQo4L1X4Sd3YVM0s=\",
      \"dev\": true,
      \"requires\": {
        \"find-up\": \"^2.1.0\"
      }
    },
    \"posix-character-classes\": {
      \"version\": \"0.1.1\",
      \"resolved\": \"https://registry.npmjs.org/posix-character-classes/-/posix-character-classes-0.1.1.tgz\",
      \"integrity\": \"sha1-AerA/jta9xoqbAL+q7jB/vfgDqs=\",
      \"dev\": true
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
    \"promise-inflight\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/promise-inflight/-/promise-inflight-1.0.1.tgz\",
      \"integrity\": \"sha1-mEcocL8igTL8vdhoEputEsPAKeM=\",
      \"dev\": true
    },
    \"prr\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/prr/-/prr-1.0.1.tgz\",
      \"integrity\": \"sha1-0/wRS6BplaRexok/SEzrHXj19HY=\",
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
      },
      \"dependencies\": {
        \"bn.js\": {
          \"version\": \"4.12.0\",
          \"resolved\": \"https://registry.npmjs.org/bn.js/-/bn.js-4.12.0.tgz\",
          \"integrity\": \"sha512-c98Bf3tPniI+scsdk237ku1Dc3ujXQTSgyiPUDEOe7tRkhrqridvh8klBv0HCEso1OLOYcHuCv/cS6DNxKH+ZA==\",
          \"dev\": true
        }
      }
    },
    \"pump\": {
      \"version\": \"3.0.0\",
      \"resolved\": \"https://registry.npmjs.org/pump/-/pump-3.0.0.tgz\",
      \"integrity\": \"sha512-LwZy+p3SFs1Pytd/jYct4wpv49HiYCqd9Rlc5ZVdk0V+8Yzv6jR5Blk3TRmPL1ft69TxP0IMZGJ+WPFU2BFhww==\",
      \"dev\": true,
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
    \"randombytes\": {
      \"version\": \"2.1.0\",
      \"resolved\": \"https://registry.npmjs.org/randombytes/-/randombytes-2.1.0.tgz\",
      \"integrity\": \"sha512-vYl3iOX+4CKUWuxGi9Ukhie6fsqXqS9FE2Zaic4tNFD2N2QQaXOMFbuKK4QmDHC0JO6B1Zp41J0LpT0oR68amQ==\",
      \"dev\": true,
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
    \"readdirp\": {
      \"version\": \"3.6.0\",
      \"resolved\": \"https://registry.npmjs.org/readdirp/-/readdirp-3.6.0.tgz\",
      \"integrity\": \"sha512-hOS089on8RduqdbhvQ5Z37A0ESjsqz6qnRcffsMU3495FuTdqSm+7bhJ29JvIOsBDEEnan5DPu9t3To9VRlMzA==\",
      \"dev\": true,
      \"optional\": true,
      \"requires\": {
        \"picomatch\": \"^2.2.1\"
      }
    },
    \"regenerate\": {
      \"version\": \"1.4.0\",
      \"resolved\": \"https://registry.npmjs.org/regenerate/-/regenerate-1.4.0.tgz\",
      \"integrity\": \"sha512-1G6jJVDWrt0rK99kBjvEtziZNCICAuvIPkSiUFIQxVP06RCVpq3dmDo2oi6ABpYaDYaTRr67BEhL8r1wgEZZKg==\",
      \"dev\": true
    },
    \"regenerator-runtime\": {
      \"version\": \"0.11.1\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-runtime/-/regenerator-runtime-0.11.1.tgz\",
      \"integrity\": \"sha512-MguG95oij0fC3QV3URf4V2SDYGJhJnJGqvIIgdECeODCT98wSWDAJ94SSuVpYQUoTcGUIL6L4yNB7j1DFFHSBg==\",
      \"dev\": true
    },
    \"regenerator-transform\": {
      \"version\": \"0.10.1\",
      \"resolved\": \"https://registry.npmjs.org/regenerator-transform/-/regenerator-transform-0.10.1.tgz\",
      \"integrity\": \"sha512-PJepbvDbuK1xgIgnau7Y90cwaAmO/LCLMI2mPvaXq2heGMR3aWW5/BQvYrhJ8jgmQjXewXvBjzfqKcVOmhjZ6Q==\",
      \"dev\": true,
      \"requires\": {
        \"babel-runtime\": \"^6.18.0\",
        \"babel-types\": \"^6.19.0\",
        \"private\": \"^0.1.6\"
      }
    },
    \"regex-not\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/regex-not/-/regex-not-1.0.2.tgz\",
      \"integrity\": \"sha512-J6SDjUgDxQj5NusnOtdFxDwN/+HWykR8GELwctJ7mdqhcyy1xEc4SRFHUXvxTp661YaVKAjfRLZ9cCqS6tn32A==\",
      \"dev\": true,
      \"requires\": {
        \"extend-shallow\": \"^3.0.2\",
        \"safe-regex\": \"^1.1.0\"
      }
    },
    \"regexpu-core\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/regexpu-core/-/regexpu-core-2.0.0.tgz\",
      \"integrity\": \"sha1-SdA4g3uNz4v6W5pCE5k45uoq4kA=\",
      \"dev\": true,
      \"requires\": {
        \"regenerate\": \"^1.2.1\",
        \"regjsgen\": \"^0.2.0\",
        \"regjsparser\": \"^0.1.4\"
      }
    },
    \"regjsgen\": {
      \"version\": \"0.2.0\",
      \"resolved\": \"https://registry.npmjs.org/regjsgen/-/regjsgen-0.2.0.tgz\",
      \"integrity\": \"sha1-bAFq3qxVT3WCP+N6wFuS1aTtsfc=\",
      \"dev\": true
    },
    \"regjsparser\": {
      \"version\": \"0.1.5\",
      \"resolved\": \"https://registry.npmjs.org/regjsparser/-/regjsparser-0.1.5.tgz\",
      \"integrity\": \"sha1-fuj4Tcb6eS0/0K4ijSS9lJ6tIFw=\",
      \"dev\": true,
      \"requires\": {
        \"jsesc\": \"~0.5.0\"
      },
      \"dependencies\": {
        \"jsesc\": {
          \"version\": \"0.5.0\",
          \"resolved\": \"https://registry.npmjs.org/jsesc/-/jsesc-0.5.0.tgz\",
          \"integrity\": \"sha1-597mbjXW/Bb3EP6R1c9p9w8IkR0=\",
          \"dev\": true
        }
      }
    },
    \"remove-trailing-separator\": {
      \"version\": \"1.1.0\",
      \"resolved\": \"https://registry.npmjs.org/remove-trailing-separator/-/remove-trailing-separator-1.1.0.tgz\",
      \"integrity\": \"sha1-wkvOKig62tW8P1jg1IJJuSN52O8=\",
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
    \"require-directory\": {
      \"version\": \"2.1.1\",
      \"resolved\": \"https://registry.npmjs.org/require-directory/-/require-directory-2.1.1.tgz\",
      \"integrity\": \"sha1-jGStX9MNqxyXbiNE/+f3kqam30I=\",
      \"dev\": true
    },
    \"require-main-filename\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/require-main-filename/-/require-main-filename-2.0.0.tgz\",
      \"integrity\": \"sha512-NKN5kMDylKuldxYLSUfrbo5Tuzh4hd+2E8NPPX02mZtn1VuREQToYe/ZdlJy+J3uCpfaiGF05e7B8W0iXbQHmg==\",
      \"dev\": true
    },
    \"resize-observer-polyfill\": {
      \"version\": \"1.5.1\",
      \"resolved\": \"https://registry.npmjs.org/resize-observer-polyfill/-/resize-observer-polyfill-1.5.1.tgz\",
      \"integrity\": \"sha512-LwZrotdHOo12nQuZlHEmtuXdqGoOD0OhaxopaNFxWzInpEgaLWoVuAMbTzixuosCx2nEG58ngzW3vxdWoxIgdg==\",
      \"dev\": true
    },
    \"resolve-cwd\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/resolve-cwd/-/resolve-cwd-2.0.0.tgz\",
      \"integrity\": \"sha1-AKn3OHVW4nA46uIyyqNypqWbZlo=\",
      \"dev\": true,
      \"requires\": {
        \"resolve-from\": \"^3.0.0\"
      }
    },
    \"resolve-dir\": {
      \"version\": \"1.0.1\",
      \"resolved\": \"https://registry.npmjs.org/resolve-dir/-/resolve-dir-1.0.1.tgz\",
      \"integrity\": \"sha1-eaQGRMNivoLybv/nOcm7U4IEb0M=\",
      \"dev\": true,
      \"requires\": {
        \"expand-tilde\": \"^2.0.0\",
        \"global-modules\": \"^1.0.0\"
      },
      \"dependencies\": {
        \"global-modules\": {
          \"version\": \"1.0.0\",
          \"resolved\": \"https://registry.npmjs.org/global-modules/-/global-modules-1.0.0.tgz\",
          \"integrity\": \"sha512-sKzpEkf11GpOFuw0Zzjzmt4B4UZwjOcG757PPvrfhxcLFbq0wpsgpOqxpxtxFiCG4DtG93M6XRVbF2oGdev7bg==\",
          \"dev\": true,
          \"requires\": {
            \"global-prefix\": \"^1.0.1\",
            \"is-windows\": \"^1.0.1\",
            \"resolve-dir\": \"^1.0.0\"
          }
        },
        \"global-prefix\": {
          \"version\": \"1.0.2\",
          \"resolved\": \"https://registry.npmjs.org/global-prefix/-/global-prefix-1.0.2.tgz\",
          \"integrity\": \"sha1-2/dDxsFJklk8ZVVoy2btMsASLr4=\",
          \"dev\": true,
          \"requires\": {
            \"expand-tilde\": \"^2.0.2\",
            \"homedir-polyfill\": \"^1.0.1\",
            \"ini\": \"^1.3.4\",
            \"is-windows\": \"^1.0.1\",
            \"which\": \"^1.2.14\"
          }
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
    \"ret\": {
      \"version\": \"0.1.15\",
      \"resolved\": \"https://registry.npmjs.org/ret/-/ret-0.1.15.tgz\",
      \"integrity\": \"sha512-TTlYpa+OL+vMMNG24xSlQGEJ3B/RzEfUlLct7b5G/ytav+wPrplCpVMFuwzXbkecJrb6IYo1iFb0S9v37754mg==\",
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
    \"run-queue\": {
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/run-queue/-/run-queue-1.0.3.tgz\",
      \"integrity\": \"sha1-6Eg5bwV9Ij8kOGkkYY4laUFh7Ec=\",
      \"dev\": true,
      \"requires\": {
        \"aproba\": \"^1.1.1\"
      }
    },
    \"safe-buffer\": {
      \"version\": \"5.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safe-buffer/-/safe-buffer-5.1.2.tgz\",
      \"integrity\": \"sha512-Gd2UZBJDkXlY7GbJxfsE8/nvKkUEU1G38c1siN6QP6a9PT9MmHB8GnpscSmMJSoF8LOIrt8ud/wPtojys4G6+g==\",
      \"dev\": true
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
    \"safer-buffer\": {
      \"version\": \"2.1.2\",
      \"resolved\": \"https://registry.npmjs.org/safer-buffer/-/safer-buffer-2.1.2.tgz\",
      \"integrity\": \"sha512-YZo3K82SD7Riyi0E1EQPojLz7kpepnSQI9IyPbHHg1XXXevb5dJI7tpyN2ADxGcQbHG7vcyRHk0cbwqcQriUtg==\",
      \"dev\": true
    },
    \"schema-utils\": {
      \"version\": \"3.1.1\",
      \"resolved\": \"https://registry.npmjs.org/schema-utils/-/schema-utils-3.1.1.tgz\",
      \"integrity\": \"sha512-Y5PQxS4ITlC+EahLuXaY86TXfR7Dc5lw294alXOq86JAHCihAIZfqv8nNCWvaEJvaC51uN9hbLGeV0cFBdH+Fw==\",
      \"dev\": true,
      \"requires\": {
        \"@types/json-schema\": \"^7.0.8\",
        \"ajv\": \"^6.12.5\",
        \"ajv-keywords\": \"^3.5.2\"
      }
    },
    \"semver\": {
      \"version\": \"5.7.1\",
      \"resolved\": \"https://registry.npmjs.org/semver/-/semver-5.7.1.tgz\",
      \"integrity\": \"sha512-sauaDf/PZdVgrLTNYHRtpXa1iRiKcaebiKQ1BJdpQlWH2lCvexQdX55snPFyK7QzpudqbCI0qXFfOasHdyNDGQ==\",
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
    \"shebang-command\": {
      \"version\": \"1.2.0\",
      \"resolved\": \"https://registry.npmjs.org/shebang-command/-/shebang-command-1.2.0.tgz\",
      \"integrity\": \"sha1-RKrGW2lbAzmJaMOfNj/uXer98eo=\",
      \"dev\": true,
      \"requires\": {
        \"shebang-regex\": \"^1.0.0\"
      }
    },
    \"shebang-regex\": {
      \"version\": \"1.0.0\",
      \"resolved\": \"https://registry.npmjs.org/shebang-regex/-/shebang-regex-1.0.0.tgz\",
      \"integrity\": \"sha1-2kL0l0DAtC2yypcoVxyxkMmO/qM=\",
      \"dev\": true
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
        \"define-property\": {
          \"version\": \"0.2.5\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
          \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^0.1.0\"
          }
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
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
          \"dev\": true
        },
        \"kind-of\": {
          \"version\": \"5.1.0\",
          \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-5.1.0.tgz\",
          \"integrity\": \"sha512-NGEErnH6F2vUuXDh+OlbcKW7/wOcfdRHaZ7VWtqCztfHri/++YKmP51OdWeGPuqCOba6kk2OTe5d02VmTB80Pw==\",
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
      \"version\": \"0.5.7\",
      \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.5.7.tgz\",
      \"integrity\": \"sha1-igOdLRAh0i0eoUyA2OpGi6LvP8w=\",
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
    \"source-map-url\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/source-map-url/-/source-map-url-0.4.1.tgz\",
      \"integrity\": \"sha512-cPiFOTLUKvJFIg4SKVScy4ilPPW6rFgMgfuZJPNoDuMs3nC1HbMUycBoJw77xFIp6z1UJQJOfx6C9GMH80DiTw==\",
      \"dev\": true
    },
    \"split-string\": {
      \"version\": \"3.1.0\",
      \"resolved\": \"https://registry.npmjs.org/split-string/-/split-string-3.1.0.tgz\",
      \"integrity\": \"sha512-NzNVhJDYpwceVVii8/Hu6DKfD2G+NrQHlS/V/qgv763EYudVwEcMQNxd2lh+0VrUByXN/oJkl5grOhYWvQUYiw==\",
      \"dev\": true,
      \"requires\": {
        \"extend-shallow\": \"^3.0.0\"
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
    },
    \"static-extend\": {
      \"version\": \"0.1.2\",
      \"resolved\": \"https://registry.npmjs.org/static-extend/-/static-extend-0.1.2.tgz\",
      \"integrity\": \"sha1-YICcOcv/VTNyJv1eC1IPNB8ftcY=\",
      \"dev\": true,
      \"requires\": {
        \"define-property\": \"^0.2.5\",
        \"object-copy\": \"^0.1.0\"
      },
      \"dependencies\": {
        \"define-property\": {
          \"version\": \"0.2.5\",
          \"resolved\": \"https://registry.npmjs.org/define-property/-/define-property-0.2.5.tgz\",
          \"integrity\": \"sha1-w1se+RjsPJkPmlvFe+BKrOxcgRY=\",
          \"dev\": true,
          \"requires\": {
            \"is-descriptor\": \"^0.1.0\"
          }
        },
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
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"4.1.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.1.tgz\",
          \"integrity\": \"sha512-ILlv4k/3f6vfQ4OoP2AGvirOktlQ98ZEL1k9FaQjxa3L1abBgbuTDAdPOpvbGncC0BTVQrl+OM8xZGK6tWXt7g==\",
          \"dev\": true
        },
        \"strip-ansi\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
          \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^4.1.0\"
          }
        }
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
      \"version\": \"5.14.2\",
      \"resolved\": \"https://registry.npmjs.org/terser/-/terser-5.14.2.tgz\",
      \"integrity\": \"sha512-oL0rGeM/WFQCUd0y2QrWxYnq7tfSuKBiqTjRPWrRgB46WD/kiwHwF8T23z78H6Q6kGCuuHcPB+KULHRdxvVGQA==\",
      \"dev\": true,
      \"requires\": {
        \"@jridgewell/source-map\": \"^0.3.2\",
        \"acorn\": \"^8.5.0\",
        \"commander\": \"^2.20.0\",
        \"source-map-support\": \"~0.5.20\"
      },
      \"dependencies\": {
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
        }
      }
    },
    \"terser-webpack-plugin\": {
      \"version\": \"4.2.3\",
      \"resolved\": \"https://registry.npmjs.org/terser-webpack-plugin/-/terser-webpack-plugin-4.2.3.tgz\",
      \"integrity\": \"sha512-jTgXh40RnvOrLQNgIkwEKnQ8rmHjHK4u+6UBEi+W+FPmvb+uo+chJXntKe7/3lW5mNysgSWD60KyesnhW8D6MQ==\",
      \"dev\": true,
      \"requires\": {
        \"cacache\": \"^15.0.5\",
        \"find-cache-dir\": \"^3.3.1\",
        \"jest-worker\": \"^26.5.0\",
        \"p-limit\": \"^3.0.2\",
        \"schema-utils\": \"^3.0.0\",
        \"serialize-javascript\": \"^5.0.1\",
        \"source-map\": \"^0.6.1\",
        \"terser\": \"^5.3.4\",
        \"webpack-sources\": \"^1.4.3\"
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
        \"p-try\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
          \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
          \"dev\": true
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
        \"semver\": {
          \"version\": \"6.3.0\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-6.3.0.tgz\",
          \"integrity\": \"sha512-b39TBaTSfV6yBrapU89p5fKekE2m/NwnDocOVruQFS1/veMgdzuPcnOM34M6CwxW8jH/lxEa5rBoDeUwu5HHTw==\",
          \"dev\": true
        },
        \"source-map\": {
          \"version\": \"0.6.1\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
          \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
          \"dev\": true
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
        }
      }
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
      \"version\": \"1.0.3\",
      \"resolved\": \"https://registry.npmjs.org/to-fast-properties/-/to-fast-properties-1.0.3.tgz\",
      \"integrity\": \"sha1-uDVx+k2MJbguIxsG46MFXeTKGkc=\",
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
    },
    \"ts-loader\": {
      \"version\": \"8.4.0\",
      \"resolved\": \"https://registry.npmjs.org/ts-loader/-/ts-loader-8.4.0.tgz\",
      \"integrity\": \"sha512-6nFY3IZ2//mrPc+ImY3hNWx1vCHyEhl6V+wLmL4CZcm6g1CqX7UKrkc6y0i4FwcfOhxyMPCfaEvh20f4r9GNpw==\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^4.1.0\",
        \"enhanced-resolve\": \"^4.0.0\",
        \"loader-utils\": \"^2.0.0\",
        \"micromatch\": \"^4.0.0\",
        \"semver\": \"^7.3.4\"
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
        \"has-flag\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/has-flag/-/has-flag-4.0.0.tgz\",
          \"integrity\": \"sha512-EykJT/Q1KjTWctppgIAgfSO0tKVuZUjhgMr17kqTumMl6Afv3EISleU7qZUzoXDFTAHTDC4NOoG/ZxU3EvlMPQ==\",
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
        \"semver\": {
          \"version\": \"7.3.8\",
          \"resolved\": \"https://registry.npmjs.org/semver/-/semver-7.3.8.tgz\",
          \"integrity\": \"sha512-NB1ctGL5rlHrPJtFDVIVzTyQylMLu9N9VICA6HSFJo8MCGVTMW6gfpicwKmmK/dAjTOrqu5l63JJOpDSrAis3A==\",
          \"dev\": true,
          \"requires\": {
            \"lru-cache\": \"^6.0.0\"
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
    \"ts-node\": {
      \"version\": \"10.9.1\",
      \"resolved\": \"https://registry.npmjs.org/ts-node/-/ts-node-10.9.1.tgz\",
      \"integrity\": \"sha512-NtVysVPkxxrwFGUUxGYhfux8k78pQB3JqYBXlLRZgdGUqTO5wU/UyHop5p70iEbGhB7q5KmiZiU0Y3KlJrScEw==\",
      \"dev\": true,
      \"requires\": {
        \"@cspotcode/source-map-support\": \"^0.8.0\",
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
        \"v8-compile-cache-lib\": \"^3.0.1\",
        \"yn\": \"3.1.1\"
      }
    },
    \"tty-browserify\": {
      \"version\": \"0.0.0\",
      \"resolved\": \"https://registry.npmjs.org/tty-browserify/-/tty-browserify-0.0.0.tgz\",
      \"integrity\": \"sha1-oVe6QC2iTpv5V/mqadUk7tQpAaY=\",
      \"dev\": true
    },
    \"typedarray\": {
      \"version\": \"0.0.6\",
      \"resolved\": \"https://registry.npmjs.org/typedarray/-/typedarray-0.0.6.tgz\",
      \"integrity\": \"sha1-hnrHTjhkGHsdPUfZlqeOxciDB3c=\",
      \"dev\": true
    },
    \"typescript\": {
      \"version\": \"4.8.4\",
      \"resolved\": \"https://registry.npmjs.org/typescript/-/typescript-4.8.4.tgz\",
      \"integrity\": \"sha512-QCh+85mCy+h0IGff8r5XWzOVSbBO+KfeYrMQh7NJ58QujwcE22u+NUSmUxqF+un70P9GXKxa2HCNiTTMJknyjQ==\"
    },
    \"uglify-save-license\": {
      \"version\": \"0.4.1\",
      \"resolved\": \"https://registry.npmjs.org/uglify-save-license/-/uglify-save-license-0.4.1.tgz\",
      \"integrity\": \"sha1-lXJsF8xv0XHDYX479NjYKqjEzOE=\",
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
      },
      \"dependencies\": {
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
          \"dev\": true
        }
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
      }
    },
    \"util-deprecate\": {
      \"version\": \"1.0.2\",
      \"resolved\": \"https://registry.npmjs.org/util-deprecate/-/util-deprecate-1.0.2.tgz\",
      \"integrity\": \"sha1-RQ1Nyfpw3nMnYvvS1KKJgUGaDM8=\",
      \"dev\": true
    },
    \"v8-compile-cache\": {
      \"version\": \"2.3.0\",
      \"resolved\": \"https://registry.npmjs.org/v8-compile-cache/-/v8-compile-cache-2.3.0.tgz\",
      \"integrity\": \"sha512-l8lCEmLcLYZh4nbunNZvQCJc5pv7+RCwa8q/LdUx8u7lsWvPDKmpodJAJNwkAhJC//dFY48KuIEmjtd4RViDrA==\",
      \"dev\": true
    },
    \"v8-compile-cache-lib\": {
      \"version\": \"3.0.1\",
      \"resolved\": \"https://registry.npmjs.org/v8-compile-cache-lib/-/v8-compile-cache-lib-3.0.1.tgz\",
      \"integrity\": \"sha512-wa7YjyUGfNZngI/vtK0UHAN+lgDCxBPCylVXGp0zu59Fz5aiGtNXaq3DhIov063MorB+VfufLh3JlF2KdTK3xg==\",
      \"dev\": true
    },
    \"vm-browserify\": {
      \"version\": \"1.1.2\",
      \"resolved\": \"https://registry.npmjs.org/vm-browserify/-/vm-browserify-1.1.2.tgz\",
      \"integrity\": \"sha512-2ham8XPWTONajOR0ohOKOHXkm3+gaBmGut3SRuu75xLd/RRaY6vqgh8NBYYk7+RW3u5AtzPQZG8F10LHkl0lAQ==\",
      \"dev\": true
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
              \"integrity\": \"sha1-GrKLVW4Zg2Oowab35vogE3/mrtk=\",
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
          },
          \"dependencies\": {
            \"extend-shallow\": {
              \"version\": \"2.0.1\",
              \"resolved\": \"https://registry.npmjs.org/extend-shallow/-/extend-shallow-2.0.1.tgz\",
              \"integrity\": \"sha1-Ua99YUrZqfYQ6huvu5idaxxWiQ8=\",
              \"dev\": true,
              \"optional\": true,
              \"requires\": {
                \"is-extendable\": \"^0.1.0\"
              }
            }
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
          \"integrity\": \"sha1-1USBHUKPmOsGpj3EAtJAPDKMOPc=\",
          \"dev\": true,
          \"optional\": true,
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
              \"optional\": true,
              \"requires\": {
                \"is-extendable\": \"^0.1.0\"
              }
            }
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
          \"integrity\": \"sha1-nmr2KZ2NO9K9QEMIMr0RPfkGxa4=\",
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
              \"integrity\": \"sha1-e6WuJCF4BKxwcHuWkiVnSGzD6Eo=\",
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
          \"integrity\": \"sha1-dfFmQrSA8YenEcgUFh/TpKdlWJg=\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"binary-extensions\": \"^1.0.0\"
          }
        },
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
          \"dev\": true,
          \"optional\": true
        },
        \"is-number\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/is-number/-/is-number-3.0.0.tgz\",
          \"integrity\": \"sha1-JP1iAaR4LPUFYcgQJ2r8fRLXEZU=\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"kind-of\": \"^3.0.2\"
          },
          \"dependencies\": {
            \"kind-of\": {
              \"version\": \"3.2.2\",
              \"resolved\": \"https://registry.npmjs.org/kind-of/-/kind-of-3.2.2.tgz\",
              \"integrity\": \"sha1-MeohpzS6ubuw8yRm2JOupR5KPGQ=\",
              \"dev\": true,
              \"optional\": true,
              \"requires\": {
                \"is-buffer\": \"^1.1.5\"
              }
            }
          }
        },
        \"micromatch\": {
          \"version\": \"3.1.10\",
          \"resolved\": \"https://registry.npmjs.org/micromatch/-/micromatch-3.1.10.tgz\",
          \"integrity\": \"sha512-MWikgl9n9M3w+bpsY3He8L+w9eF9338xRl8IAO5viDizwSzziFEyUzo2xrrloB64ADbTf8uA8vRqqttDTOmccg==\",
          \"dev\": true,
          \"optional\": true,
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
          \"integrity\": \"sha1-fIDBe53+vlmeJzZ+DU3VWQFB2zg=\",
          \"dev\": true,
          \"optional\": true,
          \"requires\": {
            \"is-number\": \"^3.0.0\",
            \"repeat-string\": \"^1.6.1\"
          }
        }
      }
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
            }
          }
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
          }
        },
        \"chownr\": {
          \"version\": \"1.1.4\",
          \"resolved\": \"https://registry.npmjs.org/chownr/-/chownr-1.1.4.tgz\",
          \"integrity\": \"sha512-jJ0bqzaylmJtVnNgzTeSOs8DPavpbYgEr/b0YL8/2GO3xJEhInFmhKMUnEJQjZumK7KXGFhUy89PrsJWlakBVg==\",
          \"dev\": true
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
            }
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
        \"is-extendable\": {
          \"version\": \"0.1.1\",
          \"resolved\": \"https://registry.npmjs.org/is-extendable/-/is-extendable-0.1.1.tgz\",
          \"integrity\": \"sha1-YrEQ4omkcUGOPsNqYX1HLjAd/Ik=\",
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
        \"lru-cache\": {
          \"version\": \"5.1.1\",
          \"resolved\": \"https://registry.npmjs.org/lru-cache/-/lru-cache-5.1.1.tgz\",
          \"integrity\": \"sha512-KpNARQA3Iwv+jTA0utUVVbrh+Jlrr1Fv0e56GGzAFOXN7dk/FviaDW8LHmK52DlcH4WP2n6gI8vN1aesBFgo9w==\",
          \"dev\": true,
          \"requires\": {
            \"yallist\": \"^3.0.2\"
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
          }
        },
        \"memory-fs\": {
          \"version\": \"0.4.1\",
          \"resolved\": \"https://registry.npmjs.org/memory-fs/-/memory-fs-0.4.1.tgz\",
          \"integrity\": \"sha1-OpoguEYlI+RHz7x+i7gO1me/xVI=\",
          \"dev\": true,
          \"requires\": {
            \"errno\": \"^0.1.3\",
            \"readable-stream\": \"^2.0.1\"
          }
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
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/p-locate/-/p-locate-3.0.0.tgz\",
          \"integrity\": \"sha512-x+12w/To+4GFfgJhBEpiDcLozRJGegY+Ei7/z0tSLkMmxGZNybVMSfWj9aJn8Z5Fc7dBUNJOOVgPv2H7IwulSQ==\",
          \"dev\": true,
          \"requires\": {
            \"p-limit\": \"^2.0.0\"
          }
        },
        \"p-try\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
          \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
          \"dev\": true
        },
        \"pify\": {
          \"version\": \"4.0.1\",
          \"resolved\": \"https://registry.npmjs.org/pify/-/pify-4.0.1.tgz\",
          \"integrity\": \"sha512-uB80kBFb/tfd68bVleG9T5GGsGPjJrLAUpR5PZIrhBnIaRTQRjqdJSsIKkOP6OAIFbj7GOrcudc5pNjZ+geV2g==\",
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
        \"rimraf\": {
          \"version\": \"2.7.1\",
          \"resolved\": \"https://registry.npmjs.org/rimraf/-/rimraf-2.7.1.tgz\",
          \"integrity\": \"sha512-uWjbaKIK3T1OSVptzX7Nl6PvQ3qAGtKEtVRjRuazjfL3Bx5eI409VZSqgND+4UNnmzLVdPj9FqFJNPqBZFve4w==\",
          \"dev\": true,
          \"requires\": {
            \"glob\": \"^7.1.3\"
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
        \"serialize-javascript\": {
          \"version\": \"4.0.0\",
          \"resolved\": \"https://registry.npmjs.org/serialize-javascript/-/serialize-javascript-4.0.0.tgz\",
          \"integrity\": \"sha512-GaNA54380uFefWghODBWEGisLZFj00nS5ACs6yHa9nLqlLpVLO8ChDGeKRjZnV4Nh4n0Qi7nhYZD/9fCPzEqkw==\",
          \"dev\": true,
          \"requires\": {
            \"randombytes\": \"^2.1.0\"
          }
        },
        \"source-map\": {
          \"version\": \"0.6.1\",
          \"resolved\": \"https://registry.npmjs.org/source-map/-/source-map-0.6.1.tgz\",
          \"integrity\": \"sha512-UjgapumWlbMhkBgzT7Ykc5YXUT46F0iKu8SGXq0bcwP5dz/h0Plj6enJqjz1Zbq2l5WaqYnrVbwWOWMyF3F47g==\",
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
        \"tapable\": {
          \"version\": \"1.1.3\",
          \"resolved\": \"https://registry.npmjs.org/tapable/-/tapable-1.1.3.tgz\",
          \"integrity\": \"sha512-4WK/bYZmj8xLr+HUCODHGF1ZFzsYffasLUgEiMBY4fgtltdO6B4WJtlSbPaDTLpYTcGVwM2qLnFTICEcNxs3kA==\",
          \"dev\": true
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
        \"yallist\": {
          \"version\": \"3.1.1\",
          \"resolved\": \"https://registry.npmjs.org/yallist/-/yallist-3.1.1.tgz\",
          \"integrity\": \"sha512-a4UGQaWPH59mOXUYnAG2ewncQS4i4F43Tv3JoAM+s2VDAmS9NsK8GpDMLrCHPksFT7h3K6TOoUNn2pb7RoXx4g==\",
          \"dev\": true
        }
      }
    },
    \"webpack-cli\": {
      \"version\": \"3.3.12\",
      \"resolved\": \"https://registry.npmjs.org/webpack-cli/-/webpack-cli-3.3.12.tgz\",
      \"integrity\": \"sha512-NVWBaz9k839ZH/sinurM+HcDvJOTXwSjYp1ku+5XKeOC03z8v5QitnK/x+lAxGXFyhdayoIf/GOpv85z3/xPag==\",
      \"dev\": true,
      \"requires\": {
        \"chalk\": \"^2.4.2\",
        \"cross-spawn\": \"^6.0.5\",
        \"enhanced-resolve\": \"^4.1.1\",
        \"findup-sync\": \"^3.0.0\",
        \"global-modules\": \"^2.0.0\",
        \"import-local\": \"^2.0.0\",
        \"interpret\": \"^1.4.0\",
        \"loader-utils\": \"^1.4.0\",
        \"supports-color\": \"^6.1.0\",
        \"v8-compile-cache\": \"^2.1.1\",
        \"yargs\": \"^13.3.2\"
      },
      \"dependencies\": {
        \"ansi-styles\": {
          \"version\": \"3.2.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-styles/-/ansi-styles-3.2.1.tgz\",
          \"integrity\": \"sha512-VT0ZI6kZRdTh8YyJw3SMbYm/u+NqfsAxEpWO0Pf9sq8/e94WxxOpPKx9FR1FlyCtOVDNOQ+8ntlqFxiRc+r5qA==\",
          \"dev\": true,
          \"requires\": {
            \"color-convert\": \"^1.9.0\"
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
          },
          \"dependencies\": {
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
        \"supports-color\": {
          \"version\": \"6.1.0\",
          \"resolved\": \"https://registry.npmjs.org/supports-color/-/supports-color-6.1.0.tgz\",
          \"integrity\": \"sha512-qe1jfm1Mg7Nq/NSh6XE24gPXROEVsWHxC1LIx//XNlD9iw7YZQGjZNjYN7xGaEG6iKdA8EtNFW6R0gjnVXp+wQ==\",
          \"dev\": true,
          \"requires\": {
            \"has-flag\": \"^3.0.0\"
          }
        }
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
    \"which-module\": {
      \"version\": \"2.0.0\",
      \"resolved\": \"https://registry.npmjs.org/which-module/-/which-module-2.0.0.tgz\",
      \"integrity\": \"sha1-2e8H3Od7mQK4o6j6SzHD4/fm6Ho=\",
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
      },
      \"dependencies\": {
        \"ansi-regex\": {
          \"version\": \"4.1.1\",
          \"resolved\": \"https://registry.npmjs.org/ansi-regex/-/ansi-regex-4.1.1.tgz\",
          \"integrity\": \"sha512-ILlv4k/3f6vfQ4OoP2AGvirOktlQ98ZEL1k9FaQjxa3L1abBgbuTDAdPOpvbGncC0BTVQrl+OM8xZGK6tWXt7g==\",
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
        \"strip-ansi\": {
          \"version\": \"5.2.0\",
          \"resolved\": \"https://registry.npmjs.org/strip-ansi/-/strip-ansi-5.2.0.tgz\",
          \"integrity\": \"sha512-DuRs1gKbBqsMKIZlrffwlug8MHkcnpjs5VPmL1PAh+mA30U0DTotfDZ0d2UUsXpPmPmMMJ6W773MaA3J+lbiWA==\",
          \"dev\": true,
          \"requires\": {
            \"ansi-regex\": \"^4.1.0\"
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
      },
      \"dependencies\": {
        \"find-up\": {
          \"version\": \"3.0.0\",
          \"resolved\": \"https://registry.npmjs.org/find-up/-/find-up-3.0.0.tgz\",
          \"integrity\": \"sha512-1yD6RmLI1XBfxugvORwlck6f75tYL+iR0jqwsOrOxMZyGYqUuDhJ0l4AXdO1iX/FTs9cBAMEk1gWSEx1kSbylg==\",
          \"dev\": true,
          \"requires\": {
            \"locate-path\": \"^3.0.0\"
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
        \"p-try\": {
          \"version\": \"2.2.0\",
          \"resolved\": \"https://registry.npmjs.org/p-try/-/p-try-2.2.0.tgz\",
          \"integrity\": \"sha512-R4nPAVTAU0B9D35/Gk3uJf/7XYbQcyohSKdvAxIRSNghFl4e71hVoGnBNQz9cWaXxO2I10KTC+3jMdvvoKw6dQ==\",
          \"dev\": true
        }
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
    }
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/package-lock.json";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_linklist/views/package-lock.json", "/var/www/html/modules/ps_linklist/views/package-lock.json");
    }
}
