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

/* @MailThemes/classic/core/bankwire.html.twig */
class __TwigTemplate_b95509fcecb61d068b1ce9ebcd415935 extends Template
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
        return "@MailThemes/classic/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/bankwire.html.twig", 1);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Awaiting wire payment", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your order with the reference [1]{order_name}[/1] has been placed successfully and will be [1]shipped as soon as we receive your payment[/1].", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "
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
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <p style=\"border-bottom:1px solid #D6D4D4;\">
              ";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have selected to pay by wire transfer.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
            </p>
            <span>
              ";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here are the bank details for your transfer:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "<br/>
              <span><strong>";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {total_paid}<br/>
              <span><strong>";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account owner:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {bankwire_owner}<br/>
              <span><strong>";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account details:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {bankwire_details}<br/>
              <span><strong>";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bank address:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {bankwire_address}<br/>
                            ";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please specify your order reference in the bankwire description.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
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
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 81
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 83
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
        return "@MailThemes/classic/core/bankwire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 83,  184 => 81,  174 => 74,  169 => 72,  152 => 58,  148 => 57,  144 => 56,  140 => 55,  136 => 54,  132 => 53,  126 => 50,  121 => 48,  100 => 30,  97 => 29,  88 => 25,  84 => 23,  82 => 22,  78 => 21,  62 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/bankwire.html.twig", "/var/www/html/mails/themes/classic/core/bankwire.html.twig");
    }
}
