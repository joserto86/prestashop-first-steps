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

/* @Modules/ps_facetedsearch/img/cross.png */
class __TwigTemplate_15b5676642a8706dd3d739f01b6231b7 extends Template
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
IHDR\000\000\000\000\000\000\000\000\000(-S\000\000\000KPLTE\000\000\000\000\000\000�@0�Q7�M2�eO�iT�ú�I-��������{�������������nY��v����~l��q�aK�U<�YA�]Fhh%�\000\000\000tRNS\0003�C�.\000\000\000iIDATx^e�I�0��t/���_J4��b�Oi@O����b
�Z��J� c�a��s���2r�2��n'�[�:�Z����4`��
\"4���B�Yj�T�s�'�#�\000\000\000\000IEND�B`�";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/img/cross.png";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_facetedsearch/img/cross.png", "/var/www/html/modules/ps_facetedsearch/img/cross.png");
    }
}
