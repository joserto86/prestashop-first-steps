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

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_159df0a36280912f752169dee32ceb47 extends Template
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
        // line 25
        $context["ats"] = twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 25);
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         [twig_get_attribute($this->env, $this->source,         // line 29
($context["ats"] ?? null), "name", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "displayName", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "nbRates", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "starsRate", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "img", [], "any", false, false, false, 29), (((twig_get_attribute($this->env, $this->source,         // line 30
($context["ats"] ?? null), "serviceUrl", [], "any", true, true, false, 30) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "serviceUrl", [], "any", false, false, false, 30)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "serviceUrl", [], "any", false, false, false, 30)) : (false)), twig_get_attribute($this->env, $this->source,         // line 31
($context["ats"] ?? null), "version", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "cover", [], "any", false, false, false, 31), (((twig_get_attribute($this->env, $this->source,         // line 32
($context["ats"] ?? null), "additionalDescription", [], "any", true, true, false, 32) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "additionalDescription", [], "any", false, false, false, 32)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "additionalDescription", [], "any", false, false, false, 32)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 33
($context["ats"] ?? null), "fullDescription", [], "any", true, true, false, 33) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "fullDescription", [], "any", false, false, false, 33)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "fullDescription", [], "any", false, false, false, 33)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 34
($context["ats"] ?? null), "changeLog", [], "any", true, true, false, 34) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "changeLog", [], "any", false, false, false, 34)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "changeLog", [], "any", false, false, false, 34)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 35
($context["ats"] ?? null), "customer_benefits", [], "any", true, true, false, 35) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "customer_benefits", [], "any", false, false, false, 35)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "customer_benefits", [], "any", false, false, false, 35)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 36
($context["ats"] ?? null), "demo_video", [], "any", true, true, false, 36) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "demo_video", [], "any", false, false, false, 36)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "demo_video", [], "any", false, false, false, 36)) : (false)), twig_get_attribute($this->env, $this->source,         // line 37
($context["ats"] ?? null), "author", [], "any", false, false, false, 37), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", twig_get_attribute($this->env, $this->source,         // line 38
($context["ats"] ?? null), "features", [], "any", false, false, false, 38), (((twig_get_attribute($this->env, $this->source,         // line 39
($context["ats"] ?? null), "badges", [], "any", true, true, false, 39) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "badges", [], "any", false, false, false, 39)) > 0))) ? (twig_get_attribute($this->env, $this->source, ($context["ats"] ?? null), "badges", [], "any", false, false, false, 39)) : (false))];
        // line 41
        echo "<div
  class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      ";
        // line 46
        if ((($context["nbRates"] ?? null) > 0)) {
            // line 47
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, ($context["starsRate"] ?? null), "html", null, true);
            echo "\">
          (
          ";
            // line 49
            echo twig_escape_filter($this->env, ($context["nbRates"] ?? null), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 53
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 56
        echo twig_escape_filter($this->env, ($context["displayName"] ?? null), "html", null, true);
        echo "<br>
            <small class=\"version small-text\">
              ";
        // line 58
        if ((array_key_exists("serviceUrl", $context) && (twig_length_filter($this->env, ($context["serviceUrl"] ?? null)) > 0))) {
            // line 59
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => ($context["author"] ?? null)], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 61
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% by %author%", ["%version%" => ($context["version"] ?? null), "%author%" => ($context["author"] ?? null)], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 63
        echo "            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body module-modal-body\">
      <div class=\"module-big-cover\">
        <img src=\"";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "big", [], "any", true, true, false, 75)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "big", [], "any", false, false, false, 75), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["notFoundImg"] ?? null), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"module-menu-readmore\">
        <nav
          class=\"navbar navbar-light\">
          ";
        // line 81
        echo "          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-";
        // line 83
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 85
        if (($context["additionalDescription"] ?? null)) {
            // line 86
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 87
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional information", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 90
        echo "            ";
        if (($context["customerBenefits"] ?? null)) {
            // line 91
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 92
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Benefits", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 95
        echo "            ";
        if (($context["features"] ?? null)) {
            // line 96
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 97
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 100
        echo "            ";
        if (($context["demoVideo"] ?? null)) {
            // line 101
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 102
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demo video", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 105
        echo "            ";
        if (($context["changeLog"] ?? null)) {
            // line 106
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 107
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changelog", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 110
        echo "            ";
        // line 111
        echo "          </ul>
        </nav>
        <div
          class=\"tab-content\">
          ";
        // line 116
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade in active show\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 118
        if (($context["fullDescription"] ?? null)) {
            // line 119
            echo "                ";
            echo ($context["fullDescription"] ?? null);
            echo "
              ";
        } else {
            // line 121
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No description found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 123
        echo "            </p>
            ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 124), "multistoreCompatibility", [], "any", true, true, false, 124) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 124), "multistoreCompatibility", [], "any", false, false, false, 124) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_UNKNOWN")))) {
            // line 125
            echo "              <div class=\"module-readmore-multistore-content\">
                <h3>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multistore compatibility:", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</h3>
                ";
            // line 127
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 127), "multistoreCompatibility", [], "any", false, false, false, 127) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_YES"))) {
                // line 128
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is compatible with the multistore feature. It can be either:", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                  <ul>
                    <li>";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("configured differently from one store to another;", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                    <li>";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("configured quickly in the same way on all stores thanks to the all shops context or to the group of shops;", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                    <li>";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or even activated for one store and deactivated for another.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                  </ul>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 134
($context["module"] ?? null), "attributes", [], "any", false, false, false, 134), "multistoreCompatibility", [], "any", false, false, false, 134) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_PARTIAL"))) {
                // line 135
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is partially compatible with the multistore feature. Some of its options might not be available.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 136
($context["module"] ?? null), "attributes", [], "any", false, false, false, 136), "multistoreCompatibility", [], "any", false, false, false, 136) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_NOT_CONCERNED"))) {
                // line 137
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is not compatible with the multistore feature because it would not be useful.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 138
($context["module"] ?? null), "attributes", [], "any", false, false, false, 138), "multistoreCompatibility", [], "any", false, false, false, 138) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_NO"))) {
                // line 139
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is not compatible with the multistore feature. It means that its configuration applies to all stores.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            }
            // line 141
            echo "              </div>
            ";
        }
        // line 143
        echo "          </div>

          <div id=\"additional-";
        // line 145
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 147
        if (($context["additionalDescription"] ?? null)) {
            // line 148
            echo "                ";
            echo ($context["additionalDescription"] ?? null);
            echo "
              ";
        } else {
            // line 150
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No additional description provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 152
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 155
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 157
        if (($context["features"] ?? null)) {
            // line 158
            echo "                ";
            echo ($context["features"] ?? null);
            echo "
              ";
        } else {
            // line 160
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No feature list provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 162
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 165
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 167
        if (($context["customerBenefits"] ?? null)) {
            // line 168
            echo "                ";
            echo ($context["customerBenefits"] ?? null);
            echo "
              ";
        } else {
            // line 170
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No customer benefits notes found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 172
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 175
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 177
        if (($context["demoVideo"] ?? null)) {
            // line 178
            echo "                ";
            echo $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getYoutubeLink(($context["demoVideo"] ?? null));
            echo "
              ";
        } else {
            // line 180
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No demonstration video found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 182
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 185
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 186
        if (($context["changeLog"] ?? null)) {
            // line 187
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->arrayCast(($context["changeLog"] ?? null))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 189
                echo "                  <li>
                    <b>";
                // line 190
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 192
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "              </ul>
            ";
        } else {
            // line 198
            echo "              ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No changelog provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 200
        echo "          </div>
          ";
        // line 202
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          ";
        // line 209
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 209), "url_active", [], "any", false, false, false, 209) == "buy") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 209), "price", [], "any", false, false, false, 209), "raw", [], "any", false, false, false, 209) != "0.00"))) {
            // line 210
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, false, false, 210), "price", [], "any", false, false, false, 210), "displayPrice", [], "any", false, false, false, 210), "html", null, true);
            echo "
          ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 211
($context["module"] ?? null), "attributes", [], "any", false, false, false, 211), "url_active", [], "any", false, false, false, 211) != "buy")) {
            // line 212
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
          ";
        }
        // line 214
        echo "        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["badges"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 219
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "img", [], "any", false, false, false, 219), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 219), "html", null, true);
            echo "\"/>
            ";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 220), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "        </div>
        <div class=\"float-right module-action\">
          ";
        // line 224
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 224)->display(twig_array_merge($context, ["module" => ($context["module"] ?? null), "level" => ($context["level"] ?? null)]));
        // line 225
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 225,  502 => 224,  498 => 222,  490 => 220,  483 => 219,  479 => 218,  473 => 214,  467 => 212,  465 => 211,  460 => 210,  458 => 209,  449 => 202,  446 => 200,  440 => 198,  436 => 196,  429 => 194,  420 => 192,  416 => 191,  412 => 190,  409 => 189,  405 => 188,  402 => 187,  400 => 186,  396 => 185,  391 => 182,  385 => 180,  379 => 178,  377 => 177,  372 => 175,  367 => 172,  361 => 170,  355 => 168,  353 => 167,  348 => 165,  343 => 162,  337 => 160,  331 => 158,  329 => 157,  324 => 155,  319 => 152,  313 => 150,  307 => 148,  305 => 147,  300 => 145,  296 => 143,  292 => 141,  286 => 139,  284 => 138,  279 => 137,  277 => 136,  272 => 135,  270 => 134,  265 => 132,  261 => 131,  257 => 130,  251 => 128,  249 => 127,  245 => 126,  242 => 125,  240 => 124,  237 => 123,  231 => 121,  225 => 119,  223 => 118,  217 => 116,  211 => 111,  209 => 110,  201 => 107,  198 => 106,  195 => 105,  187 => 102,  184 => 101,  181 => 100,  173 => 97,  170 => 96,  167 => 95,  159 => 92,  156 => 91,  153 => 90,  145 => 87,  142 => 86,  140 => 85,  133 => 83,  129 => 81,  117 => 75,  103 => 63,  97 => 61,  91 => 59,  89 => 58,  84 => 56,  77 => 54,  74 => 53,  67 => 49,  61 => 47,  59 => 46,  52 => 41,  50 => 39,  49 => 38,  48 => 37,  47 => 36,  46 => 35,  45 => 34,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  39 => 26,  37 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more_content.html.twig");
    }
}
