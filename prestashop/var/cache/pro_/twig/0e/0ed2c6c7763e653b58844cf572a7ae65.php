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

/* @Modules/ps_emailalerts/mails/es/new_order.html */
class __TwigTemplate_bc1d7ce7f27f9254f8284d3a096c9395 extends Template
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
  <title> Nuevo Pedido </title>
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

    .box {
      width: 244px;
    }

    .margin {
      margin-right: 16px
    }

    table {
      font-family: Open sans, Arial, sans-serif;
      font-size: 14px;
    }

    .products-table,
    .products-table th,
    .products-table td {
      font-family: Open sans, Arial, sans-serif;
      font-size: 12px;
      background-color: #FDFDFD;
      color: #353943;
    }

    .products-table th {
      font-weight: 600;
      padding: 10px 5px;
      border: 1px solid #DFDFDF;
    }

    .products-table .order_summary td {
      font-weight: 600;
      font-size: 14px;
      padding: 10px;
      border: 1px solid #DFDFDF;
    }

    .products-table.mail-alert td {
      border: 1px solid #DFDFDF;
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

      .box {
        display: block !important;
        width: 100%
      }

      .space {
        display: none !important
      }
    }
  </style>

</head>

<body style=\"margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; word-spacing: normal; background-color: #eeeeee;\" bgcolor=\"#eeeeee\">
  <div style=\"background-color:#eeeeee;\" bgcolor=\"#eeeeee\">
    <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
    <div style=\"margin:0px auto;max-width:604px;\">
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
        <tbody>
          <tr>
            <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0; text-align: center;\" align=\"center\">
              <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
              <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; vertical-align: top;\" width=\"100%\">
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
      <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; background: #ffffff; background-color: #ffffff; width: 100%; border-radius: 4px;\" bgcolor=\"#ffffff\" width=\"100%\">
        <tbody>
          <tr>
            <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 0 30px; text-align: center;\" align=\"center\">
              <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><![endif]--> 
                                        
              <!-- LOGO BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 45px 25px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; vertical-align: top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0px\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; border-collapse: collapse; border-spacing: 0px;\">
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
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 25px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; padding: 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; padding-bottom: 20px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">¡Enhorabuena!</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- H2 TITLE BEGINING -->
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0px; padding-bottom: 25px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">Un nuevo pedido ha sido efectuado en <span class=\"label\" style=\"font-weight: 700;\">{shop_name}</span> por el siguiente cliente: {firstname} {lastname} ({email})</div>
                                        </td>
                                      </tr>
                                      <!-- H2 TITLE ENDING -->
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
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 50px 40px; text-align: left;\" align=\"left\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; vertical-align: top;\" width=\"100%\">
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
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 25px 0; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; padding: 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0px; padding-bottom: 0px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">Detalles del pedido</div>
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
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 15px 50px 40px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fefefe; border: 1px solid #DFDFDF; vertical-align: top; padding-top: 10px; padding-bottom: 10px;\" bgcolor=\"#fefefe\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">
<span class=\"label\" style=\"font-weight: 700;\">Pedido:</span> {order_name} Realizado el {date}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">
<span class=\"label\" style=\"font-weight: 700;\">Pago:</span> {payment}</div>
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
              <!-- TABLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 20px 0; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; vertical-align: top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"left\" class=\"products-table mail-alert\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-size: 0px; padding: 10px 25px; padding-right: 50px; padding-left: 50px; word-break: break-word;\" bgcolor=\"#FDFDFD\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Open sans, arial, sans-serif; font-size: 14px; line-height: 22px; table-layout: auto; width: 100%; border: none;\">
                                    <colgroup>
                                      <col span=\"1\" style=\"width: 15%;\" width=\"15%\">
                                      <col span=\"1\" style=\"width: 40%;\" width=\"40%\">
                                      <col span=\"1\" style=\"width: 15%;\" width=\"15%\">
                                      <col span=\"1\" style=\"width: 15%;\" width=\"15%\">
                                      <col span=\"1\" style=\"width: 15%;\" width=\"15%\">
                                    </colgroup>
                                    <tr>
                                      <th bgcolor=\"#FDFDFD\" style=\"font-family: Open sans, Arial, sans-serif; font-size: 12px; background-color: #FDFDFD; color: #353943; font-weight: 600; padding: 10px 5px; border: 1px solid #DFDFDF;\">Referencia</th>
                                      <th bgcolor=\"#FDFDFD\" style=\"font-family: Open sans, Arial, sans-serif; font-size: 12px; background-color: #FDFDFD; color: #353943; font-weight: 600; padding: 10px 5px; border: 1px solid #DFDFDF;\">Producto</th>
                                      <th bgcolor=\"#FDFDFD\" style=\"font-family: Open sans, Arial, sans-serif; font-size: 12px; background-color: #FDFDFD; color: #353943; font-weight: 600; padding: 10px 5px; border: 1px solid #DFDFDF;\">Precio unitario</th>
                                      <th bgcolor=\"#FDFDFD\" style=\"font-family: Open sans, Arial, sans-serif; font-size: 12px; background-color: #FDFDFD; color: #353943; font-weight: 600; padding: 10px 5px; border: 1px solid #DFDFDF;\">Cantidad</th>
                                      <th bgcolor=\"#FDFDFD\" style=\"font-family: Open sans, Arial, sans-serif; font-size: 12px; background-color: #FDFDFD; color: #353943; font-weight: 600; padding: 10px 5px; border: 1px solid #DFDFDF;\">Precio total</th>
                                    </tr>
                                    <mj-raw> {items} </mj-raw>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"right\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\">
                                        Productos
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\"> {total_products} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"right\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\">
                                        Descuentos
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\"> {total_discounts} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"right\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\">
                                        Embalaje de regalo
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\"> {total_wrapping} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"right\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\">
                                        Transporte
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\"> {total_shipping} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"right\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\">
                                        Incluyendo impuestos totales
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\"> {total_tax_paid} </td>
                                    </tr>
                                    <tr class=\"order_summary\">
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" align=\"right\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\">
                                        Total pagado
                                      </td>
                                      <td bgcolor=\"#FDFDFD\" colspan=\"3\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; background-color: #FDFDFD; color: #353943; font-weight: 600; font-size: 14px; padding: 10px; border: 1px solid #DFDFDF;\"> {total_paid} </td>
                                    </tr>
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
              <!-- TABLE ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 50px 0; text-align: left;\" align=\"left\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; padding: 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 0; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">
<img src=\"http://localhost:8098//mails/themes/modern/assets/baseline-local_shipping-24px.png\" style=\"border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; margin-right: 10px;\" border=\"0\">
                                            Transportista
                                          </div>
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
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 15px 50px 40px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #fefefe; border: 1px solid #DFDFDF; vertical-align: top; padding-top: 10px; padding-bottom: 10px;\" bgcolor=\"#fefefe\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">
<span class=\"label\" style=\"font-weight: 700;\">Transportista:</span> {carrier}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; padding-top: 0; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">
<span class=\"label\" style=\"font-weight: 700;\">Pago:</span> {payment}</div>
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
              <!-- 2 COLUMNS BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 25px 0; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; vertical-align: top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                  <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" border=\"0\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; font-family: Open sans, arial, sans-serif; font-size: 14px; line-height: 22px; table-layout: auto; width: 100%; border: none;\">
                                    <tr>
                                      <td class=\"box\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 244px;\" width=\"244\">
                                        <table class=\"table\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                                          <tbody>
                                            <tr>
                                              <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
                                                <p style=\"display: block; margin: 13px 0; font-weight: 600;\">
                                                  <img src=\"http://localhost:8098//mails/themes/modern/assets/baseline-location_on-24px.png\" style=\"border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: 15px; margin-right: 10px;\" border=\"0\" width=\"15\">
                                                  Dirección de entrega
                                                </p>
                                                <p style=\"display: block; margin: 13px 0; border: 1px solid #DFDFDF; background-color: #FEFEFE; padding: 20px; font-size: 14px;\" bgcolor=\"#FEFEFE\"> {delivery_block_html} </p>
                                              </td>
                                              <td width=\"10\" class=\"space\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 7px 0;\"> </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                      <td class=\"box\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 244px;\" width=\"244\">
                                        <table class=\"table\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                                          <tbody>
                                            <tr>
                                              <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
                                                <p style=\"display: block; margin: 13px 0; font-weight: 600;\">
                                                  <img src=\"http://localhost:8098//mails/themes/modern/assets/baseline-credit_card-24px.png\" style=\"border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: 25px; margin-right: 10px;\" border=\"0\" width=\"25\">
                                                  Dirección de facturación
                                                </p>
                                                <p style=\"display: block; margin: 13px 0; border: 1px solid #DFDFDF; background-color: #FEFEFE; padding: 20px; font-size: 14px;\" bgcolor=\"#FEFEFE\"> {invoice_block_html} </p>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
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
              <!-- 2 COLUMNS ENDING -->
              <!-- SUBTITLE BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 0 50px 0; text-align: left;\" align=\"left\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; padding: 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 0; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;font-weight:600;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">Mensaje del cliente:</div>
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
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 15px 50px 40px; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\">
                            <tbody>
                              <tr>
                                <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f3f3f3; vertical-align: top; padding-top: 10px; padding-bottom: 10px;\" bgcolor=\"#f3f3f3\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px;\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"left\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-size: 0px; padding: 10px 25px; word-break: break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:left;color:#363A41;\" align=\"left\">{message}</div>
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
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; width: 100%;\" width=\"100%\">
                  <tbody>
                    <tr>
                      <td style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; direction: ltr; font-size: 0px; padding: 20px 0; text-align: center;\" align=\"center\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:604px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\" align=\"left\" width=\"100%\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-family: Open sans, Arial, sans-serif; font-size: 14px; vertical-align: top;\" width=\"100%\">
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
        return "@Modules/ps_emailalerts/mails/es/new_order.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_emailalerts/mails/es/new_order.html", "/var/www/html/modules/ps_emailalerts/mails/es/new_order.html");
    }
}
