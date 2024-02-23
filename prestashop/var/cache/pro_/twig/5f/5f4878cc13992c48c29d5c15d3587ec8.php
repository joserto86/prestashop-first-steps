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

/* @MailThemes/classic/core/in_transit.html.twig */
class __TwigTemplate_1d8e15d76a5dc03ddc63525760f599d9 extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/in_transit.html.twig", 1);
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
          <div itemscope=\"\" itemtype=\"https://schema.org/ParcelDelivery\">
            <div itemprop=\"deliveryAddress\" itemscope=\"\" itemtype=\"https://schema.org/PostalAddress\">
              <meta itemprop=\"streetAddress\" content=\"{address1}\"/>
              <meta itemprop=\"addressLocality\" content=\"{city}\"/>
              <meta itemprop=\"addressRegion\" content=\"{city}\"/>
              <meta itemprop=\"addressCountry\" content=\"{country}\"/>
              <meta itemprop=\"postalCode\" content=\"{postcode}\"/>
            </div>

            <link itemprop=\"trackingUrl\" href=\"{followup}\"/>
            <div itemprop=\"carrier\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
              <meta itemprop=\"name\" content=\"{carrier}\"/>
            </div>

            {meta_products}

            <div itemprop=\"partOfOrder\" itemscope=\"\" itemtype=\"https://schema.org/Order\">
              <meta itemprop=\"orderNumber\" content=\"{order_name}\"/>
              <div itemprop=\"merchant\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
                <meta itemprop=\"name\" content=\"{shop_name}\"/>
              </div>
              <link itemprop=\"orderStatus\" href=\"https://schema.org/OrderInTransit\"/>
            </div>
          </div>

          <font size=\"2\" face=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 46
        if ((($context["templateType"] ?? null) == "html")) {
            // line 47
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order {order_name}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In transit", [], "Emails.Body", ($context["locale"] ?? null));
            echo "
              </p>

";
        }
        // line 53
        echo "            <span>
              ";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your order with the reference [1]{order_name}[/1] is currently in transit.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo " <br/><br/>
              ";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can track your package using the following link:", [], "Emails.Body", ($context["locale"] ?? null));
        echo " <a href=\"{followup}\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("{followup}", [], "Emails.Body", ($context["locale"] ?? null)), "html", null, true);
        echo "</a>
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
        // line 69
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", ($context["locale"] ?? null))], "Emails.Body", ($context["locale"] ?? null));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["languageDefaultFont"] ?? null), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 80
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
        return "@MailThemes/classic/core/in_transit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 80,  159 => 78,  149 => 71,  144 => 69,  125 => 55,  121 => 54,  118 => 53,  109 => 49,  105 => 47,  103 => 46,  99 => 45,  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/in_transit.html.twig", "/var/www/html/mails/themes/classic/core/in_transit.html.twig");
    }
}
