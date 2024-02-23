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

/* @MailThemes/classic/modules/ps_reminder/followup_4.html.twig */
class __TwigTemplate_3e8b0260fe706718822796626e97c1c9 extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_reminder/followup_4.html.twig", 1);
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
        // line 20
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 21
        if ((($context["templateType"] ?? null) == "html")) {
            // line 22
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your cart at {shop_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "
              </p>

";
        }
        // line 28
        echo "            <span>
              ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are one of our best customers, however you have not placed an order in {days_threshold} days.", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "<br/> <br/>
              ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your cart has been saved, you can resume your order by visiting our store:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <span><strong><a title=\"{shop_name}\" href=\"{shop_url}\">{shop_url}</a></strong></span><br/><br/>
              ";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We wish to thank you for the trust you have placed in us and want to give you a discount of [1]{amount}%[/1] valid on your next order! This offer is valid for [1]{days}[/1] days, so do not waste a moment!", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
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
        // line 49
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <span>
              <span><strong>";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is your coupon:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {voucher_num}<br/><br/>
              ";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter this code in your shopping cart to get your discount.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/ps_reminder/followup_4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  128 => 51,  123 => 49,  102 => 31,  98 => 30,  94 => 29,  91 => 28,  84 => 24,  80 => 22,  78 => 21,  74 => 20,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/modules/ps_reminder/followup_4.html.twig", "/var/www/html/mails/themes/classic/modules/ps_reminder/followup_4.html.twig");
    }
}
