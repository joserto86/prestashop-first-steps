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

/* @MailThemes/classic/core/test.html.twig */
class __TwigTemplate_576a41759d284537d979adc2f60e7ba7 extends Template
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
        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/test.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hello", [], "Emails.Body", ($context["locale"] ?? null));
        echo "</span>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <span>
      ";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is a [1]test e-mail[/1] from your shop.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", ($context["locale"] ?? null));
        echo ".
      <br/><br/>
      ";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you can read this, the test was successful!", [], "Emails.Body", ($context["locale"] ?? null));
        echo ".
    </span>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/core/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  66 => 15,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MailThemes/classic/core/test.html.twig", "/var/www/html/mails/themes/classic/core/test.html.twig");
    }
}
