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

/* @MailThemes/classic/core/credit_slip.html.twig */
class __TwigTemplate_010f9de5a33a75a5b1a9ded2e14249e8 extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/credit_slip.html.twig", 1);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Credit slip created", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 28
        echo "            <span>
              ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We have generated a credit slip in your name for order with the reference [1]{order_name}[/1].", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
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
        // line 43
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Review this credit slip and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%credit_slips_label%</a> section of your customer account.", ["%credit_slips_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Credit slips", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/core/credit_slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  113 => 43,  96 => 29,  93 => 28,  84 => 24,  80 => 22,  78 => 21,  74 => 20,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/credit_slip.html.twig", "/var/www/html/mails/themes/classic/core/credit_slip.html.twig");
    }
}
