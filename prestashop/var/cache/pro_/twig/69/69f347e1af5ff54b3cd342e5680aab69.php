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

/* @MailThemes/classic/core/account.html.twig */
class __TwigTemplate_c1d2b750e20586e4ea28171d3615b0be extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/account.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thank you for creating a customer account at {shop_name}.", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your login email address on {shop_name}", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is your login email address:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "<br/>
              <span><strong>";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <a href=\"mailto:{email}\">{email}</a></strong></span>
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
            <p style=\"border-bottom:1px solid #D6D4D4;\">";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Important Security Tips:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</p>
            <ol>
              <li>";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always keep your account details safe.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</li>
              <li>";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Never disclose your login details to anyone.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</li>
              <li>";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change your password regularly.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</li>
              <li>";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Should you suspect someone is using your account illegally, please notify us immediately.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</li>
            </ol>
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
        // line 69
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can now place orders on our store:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <a href=\"{shop_url}\">{shop_name}</a></span>
    </font>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/core/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  161 => 69,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  127 => 50,  123 => 49,  102 => 31,  98 => 30,  95 => 29,  88 => 25,  84 => 23,  82 => 22,  78 => 21,  62 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/account.html.twig", "/var/www/html/mails/themes/classic/core/account.html.twig");
    }
}
