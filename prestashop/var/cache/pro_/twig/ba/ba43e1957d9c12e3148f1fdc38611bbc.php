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

/* @Modules/pagesnotfound/views/css/stacking_responsive.css */
class __TwigTemplate_40dde885957615ddbb0121acf3dc9f20 extends Template
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
        echo ".stacking__wrapper {
  width: 100%;
}

.stacking__wrapper .table {
  width: 100%;
  max-width: 100%;
}


/* ------- Presentational Formatting --------- */

.stacking__wrapper .table {
  border: 1px solid #f0f0f0;
  border-collapse: collapse;
}

.stacking__wrapper .table tr {
  border-bottom: 1px solid #f0f0f0;
}

.stacking__wrapper .table thead tr {
  border-bottom: 2px solid #f0f0f0;
}

.stacking__wrapper .table td,
.stacking__wrapper .table th {
  padding: .5em;
}

.stacking__wrapper .table th {
  text-align: left;
}

@media screen and (max-width:768px) {
  .stacking__wrapper .table {
    margin: 0 auto;
    width: 100%;
    border-spacing: 0;
  }
  .stacking__wrapper .table thead {
    position: absolute;
    clip: rect(1px, 1px, 1px, 1px);
    padding: 0;
    border: 0;
    height: 1px;
    width: 1px;
    overflow: hidden;
  }
  .stacking__wrapper .table tbody,
  .stacking__wrapper .table tr,
  .stacking__wrapper .table th,
  .stacking__wrapper .table td {
    display: block;
    padding: 0;
    text-align: left;
    white-space: normal;
  }
  .stacking__wrapper .table tr td,
  .stacking__wrapper .table tr th {
    padding: 2em 1em;
    vertical-align: middle;
    overflow: hidden;
    position: relative;
    vertical-align: top;
    border: 1px solid #EDF0F1;
    border-top: none;
    width: 100%;
    white-space: normal;
  }
  .stacking__wrapper .table th[scope=\"row\"] {
    width: 100%;
    height: 0.5em;
    text-align: center;
    display: block;
    background-color: #B3BFC6;
    margin: 0 auto;
    padding: 0;    
  }
  .stacking__wrapper .table td[data-header]:before {
    content: attr(data-header);
    display: block;
    float: left;
    width: 20%;
    color: #000000;
    font-weight: bold;
    text-align: left;
  }
  .stacking__wrapper .table td[data-header] > * {
    display: block;
    width: 80%;
    float: right;
    clear: right;
    padding-left: 1em;
    margin-top: 0;        
  }
  .stacking__wrapper .table td[data-header]:after {
    content: \"\";
    position: absolute;
    left: 0;
    top: 0;
    width: 20%;    
    padding-bottom: 200%;
    display: block;            
  }
}
";
    }

    public function getTemplateName()
    {
        return "@Modules/pagesnotfound/views/css/stacking_responsive.css";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/pagesnotfound/views/css/stacking_responsive.css", "/var/www/html/modules/pagesnotfound/views/css/stacking_responsive.css");
    }
}
