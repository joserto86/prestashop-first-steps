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

/* @MailThemes/classic/modules/referralprogram/referralprogram-voucher.html.twig */
class __TwigTemplate_2e34275706d983429a0e73c27d621491 extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/referralprogram/referralprogram-voucher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<tr>
  <td align=\"center\" class=\"titleblock\">
    <span class=\"title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi {firstname} {lastname},", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span>
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
        // line 18
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 19
        if ((($context["templateType"] ?? null) == "html")) {
            // line 20
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Referral Program", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>
            
";
        }
        // line 26
        echo "            <span>
              ";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We have created a voucher in your name for referring a friend.", [], "Emails.Body", ($context["locale"] ?? null));
        echo "<br/>
              ";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is the code of your voucher:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <span><strong>{voucher_num}</strong></span>";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(", with an amount of", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <span><strong>{voucher_amount}</strong></span>.<br/><br/>
              ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Simply copy/paste this code during the payment process for your next order.", [], "Emails.Body", ($context["locale"] ?? null));
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
        return "@MailThemes/classic/modules/referralprogram/referralprogram-voucher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  93 => 28,  89 => 27,  86 => 26,  79 => 22,  75 => 20,  73 => 19,  69 => 18,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/modules/referralprogram/referralprogram-voucher.html.twig", "/var/www/html/mails/themes/classic/modules/referralprogram/referralprogram-voucher.html.twig");
    }
}
