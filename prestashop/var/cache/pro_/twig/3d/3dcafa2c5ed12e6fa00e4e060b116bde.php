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

/* @MailThemes/classic/core/download_product.html.twig */
class __TwigTemplate_3965b5b45d48a8c6d6c64fbee77a95fc extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/download_product.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thank you for your order with the reference {order_name} from <strong>{shop_name}</strong>", [], "Emails.Body", ($context["locale"] ?? null));
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product(s) now available for download", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              ";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have [1]{nbProducts}[/1] product(s) now available for download using the following link(s):", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo "<br/><br/>
              ";
        // line 31
        if ((($context["templateType"] ?? null) == "html")) {
            // line 32
            echo "                {virtualProducts}
              ";
        }
        // line 34
        echo "              ";
        if ((($context["templateType"] ?? null) == "txt")) {
            // line 35
            echo "                {virtualProductsTxt}
              ";
        }
        // line 37
        echo "            </span>
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
        // line 50
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 61
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
        return "@MailThemes/classic/core/download_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  145 => 59,  135 => 52,  130 => 50,  115 => 37,  111 => 35,  108 => 34,  104 => 32,  102 => 31,  98 => 30,  95 => 29,  88 => 25,  84 => 23,  82 => 22,  78 => 21,  62 => 8,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/download_product.html.twig", "/var/www/html/mails/themes/classic/core/download_product.html.twig");
    }
}
