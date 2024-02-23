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

/* @MailThemes/classic/modules/referralprogram/referralprogram-congratulations.html.twig */
class __TwigTemplate_adc5118bc87ccd992f5e5b9866b436f2 extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/referralprogram/referralprogram-congratulations.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Congratulations!", [], "Emails.Body", ($context["locale"] ?? null));
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
            <span>
              ";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your referred friend [1]{sponsored_firstname} {sponsored_lastname}[/1] has placed his or her first order on <a href=\"{shop_url}\">{shop_name}</a>!", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "<br/><br/>
              ";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We are pleased to offer you a voucher worth [1]{discount_display} (voucher # {discount_name})[/1] that you can use on your next order.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
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
        // line 37
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Best regards,", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span>
    </font>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/referralprogram/referralprogram-congratulations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  100 => 37,  83 => 23,  79 => 22,  74 => 20,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/modules/referralprogram/referralprogram-congratulations.html.twig", "/var/www/html/mails/themes/classic/modules/referralprogram/referralprogram-congratulations.html.twig");
    }
}
