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

/* @Modules/psgdpr/views/css/faq.css */
class __TwigTemplate_63087546ed9095af8e692974193f3bb8 extends Template
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
        echo "#faq span.faq-h1 {
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
}
#faq span.faq-h2 {
    font-size: 14px;
    display: block;
    cursor: pointer;
}
#faq span.faq-h2:hover {
    color: #25B9D7;
}
#faq span.faq-h2.faq-open {
    color: #25B9D7;
    font-weight: bold;
}
#faq span.faq-h2 i {
    font-size: 13px;
    margin-right: 2px;
}
#faq > ul {
    list-style: none;
}
#faq > ul > li {
    list-style: none;
    padding: 5px
}
#faq .faq-text {
    padding: 15px 15px;
    background: #f7f7f7;
    margin: 10px 0;
}

.helpContentParent {
    overflow:hidden;
}
.helpContentLeft {
    float:left;
    width:30%;
    border-right:1px solid #555;
    overflow:hidden;
}
.helpContentLeft > .left {
    float:left;
    width:20%;
}
.helpContentLeft > .left  img {
  max-width: 100%;
}
.helpContentLeft > .right {
    float:left;
    width:80%;
    text-align: justify;
    text-justify: inter-word;
    padding: 0 5%;
}
.helpContentRight {
    float:right;
    width:70%;
    /*border-left:1px solid #16222c;*/
}
.helpContentRight-sub{
    margin-left:50px;
}
.numberCircle {
    border-radius: 50%;
    float:left;
    margin-right: 10px;
    width: 20px;
    height: 20px;
    /*padding: 8px;*/
    background: #fff;
    border: 2px solid #666;
    color: #555;
    text-align: center;
    font: 14px Arial, sans-serif;
}
.numberCircleText {
    margin-left: 30px;
}

";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/css/faq.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/views/css/faq.css", "/var/www/html/modules/psgdpr/views/css/faq.css");
    }
}
