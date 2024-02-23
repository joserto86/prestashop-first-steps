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

/* @MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig */
class __TwigTemplate_d68786377a2d772de4783aa0b95f4e1e extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi,", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\" style=\"border:none;padding:7px 0\">
    <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have received a new return request for {shop_name}.", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</span>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
    <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
      ";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Return details", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
    </p>
    <span style=\"color:#777\">
      <span style=\"color:#333\"><strong>";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("{order_name} Placed on {date}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "<br/>
      <span style=\"color:#333\"><strong>";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</strong></span> {firstname} {lastname}, ({email})
    </span>
  </td>
</tr>
<tr>
  <td style=\"border:none;padding:7px 0\">
    <table class=\"table table-recap\" bgcolor=\"#ffffff\" style=\"width:100%;background-color:#fff\"><!-- Title -->
      <thead>
        <tr>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</th>
        </tr>
      </thead>
      <tbody>
        {items}
      </tbody>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
  <td style=\"border:none;padding:7px 0\">
    <table class=\"table\" style=\"width:100%;background-color:#fff\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
          <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</p>
          <span style=\"color:#777\">
            {delivery_block_html}
          </span>
        </td>
        <td width=\"20\" class=\"space_address\" style=\"border:none;padding:7px 0\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
          <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</p>
          <span style=\"color:#777\">
            {invoice_block_html}
          </span>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
    <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
      ";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer message:", [], "Emails.Body", ($context["locale"] ?? null));
        echo "
    </p>
    <span style=\"color:#777\">
      {message}
    </span>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 79,  144 => 64,  134 => 57,  114 => 40,  110 => 39,  106 => 38,  94 => 29,  88 => 28,  82 => 25,  70 => 16,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/return_slip.html.twig");
    }
}
