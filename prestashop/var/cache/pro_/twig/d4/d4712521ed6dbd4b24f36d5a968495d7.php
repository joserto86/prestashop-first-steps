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

/* @Modules/ps_emailalerts/mails/es/productoutofstock.html */
class __TwigTemplate_4c6e157c274c30a979a72b59aeb02b30 extends Template
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
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
  <title> Producto fuera de stock </title>
  <!--[if !mso]><!-->
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!--<![endif]-->
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
          <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <noscript>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        </noscript>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style>
  <!--<![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }

    .moz-text-html .mj-column-px-25 {
      width: 25px !important;
      max-width: 25px;
    }
  </style>
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>

</head>

<body style=\"margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; word-spacing: normal; background-color: #eeeeee;\" bgcolor=\"#eeeeee\">
  <div style=\"background-color:#eeeeee;\" bgcolor=\"#eeeeee\">
    <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"margin:0px auto;max-width:604px;\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
        <tbody>
          <tr>
            <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0; text-align: center;\" align=\"center\">
              <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
              <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; word-break: break-word;\">
                        <div style=\"height:40px;line-height:40px;\" height=\"40\"> </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"shadow-outlook wrapper-container-outlook\" role=\"presentation\" style=\"width:604px;\" width=\"604\" bgcolor=\"#ffffff\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div class=\"shadow wrapper-container\" style=\"box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1); background: #ffffff; background-color: #ffffff; margin: 0px auto; border-radius: 4px; max-width: 604px;\" bgcolor=\"#ffffff\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; background-color: #ffffff; width: 100%; border-radius: 4px;\" bgcolor=\"#ffffff\" width=\"100%\">
        <tbody>
          <tr>
            <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 0 30px; text-align: center;\" align=\"center\">
              <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><![endif]--> 
                                        
              <!-- LOGO BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 45px 25px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0px\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse; border-spacing: 0px;\">
                                    <tbody>
                                      <tr>
                                        <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 150px;\" width=\"150\">
                                          <a href=\"{shop_url}\" target=\"_blank\" style=\"color: #25B9D7; text-decoration: underline; font-weight: 600;\">
                                            <img height=\"auto\" src=\"{shop_logo}\" style=\"line-height: 100%; -ms-interpolation-mode: bicubic; border: 0; display: block; outline: none; text-decoration: none; height: auto; width: 100%; font-size: 13px;\" width=\"100%\" border=\"0\">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- LOGO ENDING -->
              
                  
                  <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 25px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; padding: 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; padding-bottom: 20px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">Hola,</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 50px 40px; text-align: left;\" align=\"left\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" class=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; padding-right: 0; padding-left: 0; word-break: break-word;\">
                                  <p style=\"display: block; border-top: solid 3px #505050; font-size: 1px; margin: 0px auto; width: 25px;\" width=\"25\">
                                  </p>
                                  <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\" ><tr><td style=\"height:0;line-height:0;\"> &nbsp;
</td></tr></table><![endif]-->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 25px 0; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; padding: 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0px; padding-bottom: 0px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">{product} está cerca de quedarse sin stock.</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- SUBTITLE ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 15px 50px 40px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fefefe; border: 1px solid #DFDFDF; vertical-align: top; padding-top: 10px; padding-bottom: 10px;\" bgcolor=\"#fefefe\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">Actualmente hay menos de <span class=\"label\" style=\"font-weight: 700;\">{last_qty}</span> artículos en stock.</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">
<span class=\"warning\" style=\"font-weight: 700; font-size: 16px;\">Stock disponible:</span> {qty}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">Reponga su inventario, vaya a la sección <span class=\"label\" style=\"font-weight: 700;\"> Catálogo&gt; Existencias </span> de su back office para administrar sus existencias.</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              


                                    
              <!--[if mso | IE]></table><![endif]-->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!--[if mso | IE]></td></tr></table><![endif]--> 
                                        
              <!-- SHOP NAME BEGINING -->
              <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 20px 0; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:center;color:#363A41;\" align=\"center\"><a href=\"{shop_url}\" style=\"text-decoration: underline; color: #656565; font-size: 16px; font-weight: 600;\">{shop_name}</a></div>
                                </td>
                              </tr>
                              <tr>
                                <td align=\"center\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; word-break: break-word;\">
                                  <div style=\"font-family:Open sans, arial, sans-serif;font-size:12px;line-height:25px;text-align:center;color:#656565;\" align=\"center\">Powered by <a href=\"https://www.prestashop-project.org/\" style=\"text-decoration: underline; color: #656565; font-weight: 400;\">PrestaShop</a>
</div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table><![endif]-->
              <!-- SHOP NAME ENDING -->
              
                  
  </div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/es/productoutofstock.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/es/productoutofstock.html", "/var/www/html/modules/ps_emailalerts/mails/es/productoutofstock.html");
    }
}
