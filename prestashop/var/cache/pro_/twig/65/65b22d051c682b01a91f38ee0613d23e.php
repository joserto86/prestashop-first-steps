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

/* @MailThemes/classic/core/order_conf.html.twig */
class __TwigTemplate_e40acc9bf89eb1b339c852c5e242e48f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MailThemes/classic/components/order_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/order_layout.html.twig", "@MailThemes/classic/core/order_conf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span><br/>
      <span class=\"subtitle\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thank you for shopping with {shop_name}!", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 22
        if ((($context["templateType"] ?? null) == "html")) {
            // line 23
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order details", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              <span><strong>";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {order_name} ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placed on", [], "Emails.Body", ($context["locale"] ?? null));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {payment}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>
    <font size=\"2\" face=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <tr>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unit price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total price", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
        </tr>
        ";
        // line 51
        if ((($context["templateType"] ?? null) == "html")) {
            // line 52
            echo "{products}
";
        }
        // line 54
        echo "        ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 55
            echo "{products_txt}
";
        }
        // line 57
        echo "
        ";
        // line 58
        if ((($context["templateType"] ?? null) == "html")) {
            // line 59
            echo "{discounts}
";
        }
        // line 61
        echo "        ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 62
            echo "{discounts_txt}
";
        }
        // line 64
        echo "
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" align=\"right\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_products}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discounts", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_discounts}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        // line 121
        if ((($context["giftWrapping"] ?? null) == 1)) {
            // line 122
            echo "        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
            // line 128
            echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
            echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift-wrapping", [], "Emails.Body", ($context["locale"] ?? null));
            echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
            // line 141
            echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
            echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_wrapping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        }
        // line 151
        echo "        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 157
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 170
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_shipping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 185
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Tax paid", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 198
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_tax_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 213
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total paid", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"4\" face=\"";
        // line 226
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>

      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 246
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 247
        if ((($context["templateType"] ?? null) == "html")) {
            // line 248
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 250
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 254
        echo "            <span>
              <span><strong>";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {carrier}<br/><br/>
              <span><strong>";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {payment}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td>
    <table class=\"table\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"";
        // line 277
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 278
        if ((($context["templateType"] ?? null) == "html")) {
            // line 279
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 280
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                    </p>
                    <span>
                      {delivery_block_html}
                    </span>
                  ";
        }
        // line 286
        echo "                  ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 287
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
\t\t\t\t\t\t\t\t\t\t{delivery_block_txt}
\t\t\t\t\t\t\t\t\t";
        }
        // line 290
        echo "                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
        <td width=\"20\" class=\"space_address\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"";
        // line 302
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 303
        if ((($context["templateType"] ?? null) == "html")) {
            // line 304
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 305
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
                    </p>
                    <span>
                      {invoice_block_html}
                    </span>
                  ";
        }
        // line 311
        echo "\t\t\t\t\t\t\t\t\t";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 312
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
\t\t\t\t\t\t\t\t\t\t{invoice_block_txt}
\t\t\t\t\t\t\t\t\t";
        }
        // line 315
        echo "                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 330
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 339
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/core/order_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 341,  567 => 339,  557 => 332,  552 => 330,  535 => 315,  528 => 312,  525 => 311,  516 => 305,  513 => 304,  511 => 303,  507 => 302,  493 => 290,  486 => 287,  483 => 286,  474 => 280,  471 => 279,  469 => 278,  465 => 277,  441 => 256,  437 => 255,  434 => 254,  427 => 250,  423 => 248,  421 => 247,  417 => 246,  394 => 226,  379 => 214,  375 => 213,  357 => 198,  342 => 186,  338 => 185,  320 => 170,  305 => 158,  301 => 157,  293 => 151,  280 => 141,  265 => 129,  261 => 128,  253 => 122,  251 => 121,  239 => 112,  224 => 100,  220 => 99,  202 => 84,  187 => 72,  183 => 71,  174 => 64,  170 => 62,  167 => 61,  163 => 59,  161 => 58,  158 => 57,  154 => 55,  151 => 54,  147 => 52,  145 => 51,  140 => 49,  136 => 48,  132 => 47,  128 => 46,  124 => 45,  118 => 42,  104 => 31,  98 => 30,  95 => 29,  88 => 25,  84 => 23,  82 => 22,  78 => 21,  62 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/order_conf.html.twig", "/var/www/html/mails/themes/classic/core/order_conf.html.twig");
    }
}
