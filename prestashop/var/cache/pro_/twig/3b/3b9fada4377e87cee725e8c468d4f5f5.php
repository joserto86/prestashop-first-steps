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

/* @Modules/statsforecast/next.png */
class __TwigTemplate_9dc0df2882d54fbf39aa939464770571 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "�PNG

\000\000\000
IHDR\000\000\000\000\000\000\000\000\000��a\000\000\000gAMA\000doJ]�\000\000IDAT8�c���?%���4�~�n�v
x��f�%���e@��g�מx��}Ë�\tS���l@ނG�W���K�<���rmI\$M���7�'m��������Stv\t���j|��a����������wǵ�RI�e�s˵��>�_�����%��<��\\��d��D`Z~���'��������U�KX#꺝�(�����[����m�/�ػ��@�J:��t���6%���y�]Dr4JD�o]x濨��d%\$1��E����D*\000��뿀��\000\000\000\000IEND�B`�";
    }

    public function getTemplateName()
    {
        return "@Modules/statsforecast/next.png";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/statsforecast/next.png", "/var/www/html/modules/statsforecast/next.png");
    }
}
