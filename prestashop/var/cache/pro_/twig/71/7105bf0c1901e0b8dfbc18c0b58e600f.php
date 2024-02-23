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

/* @Modules/blockreassurance/views/img/ITIcons/pack2_support.svg */
class __TwigTemplate_3667abf2dcd97b833a8d96fe0fc95934 extends Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<svg width=\"125px\" height=\"125px\" viewBox=\"0 0 125 125\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: sketchtool 53.2 (72643) - https://sketchapp.com -->
    <title>DAA105A6-79E0-43D2-9B29-B3C4508267A0</title>
    <desc>Created with sketchtool.</desc>
    <g id=\"Mockups\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Reassurance-Images-Themes---Free\" transform=\"translate(-206.000000, -693.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <g id=\"IT-Icons\" transform=\"translate(20.000000, 640.000000)\">
                <path d=\"M232.645588,150.89289 C231.749763,150.015699 231.345698,148.720062 231.63073,147.455014 C231.99525,144.061542 232.29787,140.607546 232.60049,137.275974 C232.788856,134.871106 233.017192,132.430431 233.249863,130.009669 C233.183756,129.333639 233.119211,128.659272 233.066252,127.997279 C233.016485,127.86189 232.99586,127.717519 233.005728,127.573611 C232.707234,130.664463 232.399112,133.814463 232.157016,136.905315 C231.854396,140.236887 231.551776,143.690883 231.187256,147.084356 C230.858314,148.542405 231.445224,150.041277 232.645588,150.89289 Z M228.522068,124.915317 L228.522823,124.906427 L226.8254,124.906427 L223.492452,124.91468 C214.276947,124.874175 206.256909,131.208938 204.161903,140.183241 C203.384722,144.643447 203.180864,149.184704 203.555288,153.696605 C203.615812,155.211081 203.676336,156.786082 203.676336,158.362457 L204.72505,158.362457 C204.724928,156.789042 204.664465,155.214318 204.604002,153.701369 C204.228793,149.189532 204.43219,144.648233 205.209243,140.188005 C207.304248,131.213702 215.324286,124.878939 224.539791,124.919444 L227.874114,124.915317 L228.522068,124.915317 Z M233.541758,156.741807 C233.718403,156.782714 233.900668,156.803906 234.085392,156.803906 C234.798799,156.803906 235.475544,156.487825 235.933438,155.940758 C236.419006,155.456565 236.903198,154.977875 237.38739,154.547329 L239.387434,152.547286 C240.291699,151.715928 240.723269,150.489279 240.538766,149.274862 C239.988548,142.851062 239.447958,136.368113 238.903242,130.065362 L238.600622,126.248221 L238.600622,125.096889 C239.32691,125.096889 240.113723,125.096889 240.842762,125.036365 C241.389248,125.001333 241.936368,124.981326 242.483504,124.97633 C241.587587,124.953142 240.690657,124.97017 239.795423,125.027475 C239.066384,125.087999 238.280947,125.087999 237.553283,125.087999 L237.553283,126.239331 L237.855903,130.056471 C238.400619,136.359223 238.941209,142.843547 239.491427,149.265971 C239.67618,150.480412 239.244569,151.707176 238.340095,152.538395 L236.340051,154.538439 C235.848981,154.968985 235.370291,155.447675 234.886099,155.931867 C234.537856,156.34793 234.063027,156.630388 233.541758,156.741807 Z M255.507458,158.483505 L255.507458,147.28032 C255.517708,146.895547 255.497471,146.510566 255.446934,146.128988 C255.400707,145.538297 255.11651,144.991725 254.659519,144.614616 C254.202527,144.237507 253.611949,144.062217 253.023222,144.128944 C252.925679,144.136292 252.830055,144.149802 252.736705,144.169065 C253.054789,144.246212 253.354689,144.394621 253.61218,144.607102 C254.069171,144.984211 254.353368,145.530783 254.399595,146.121473 C254.450131,146.503051 254.470369,146.888032 254.460119,147.272805 L254.460119,158.483505 L255.507458,158.483505 Z M217.268654,158.362457 L217.268654,147.278944 C217.277532,146.853934 217.25731,146.428813 217.20813,146.006564 C217.159287,145.421475 216.871937,144.882233 216.41352,144.515395 C215.955103,144.148558 215.365982,143.986424 214.784418,144.067044 C214.705554,144.075973 214.628043,144.088892 214.552073,144.105586 C214.845768,144.179675 215.123409,144.316084 215.364805,144.509256 C215.823222,144.876094 216.110572,145.415336 216.159416,146.000425 C216.208433,146.422688 216.228655,146.847797 216.21994,147.272805 L216.21994,158.362457 L217.268654,158.362457 Z M264.950276,91.3773673 C265.212741,91.8372519 265.319533,92.3766211 265.243024,92.9126024 L265.243024,92.9112268 C265.263334,93.7814134 265.222886,94.6519565 265.121976,95.516511 L265.121976,96.5467949 L265.54702,96.788891 C265.78139,96.5545214 266.001901,96.3201518 266.215106,96.0856262 C266.284027,95.3555232 266.310088,94.6218891 266.293114,93.8885013 L266.291739,93.8898769 C266.39892,93.1390289 266.146375,92.381532 265.610063,91.8452204 C265.415595,91.6507524 265.192046,91.4935943 264.950276,91.3773673 Z M255.768654,89.9483922 C255.493585,89.4789006 255.376354,88.926726 255.445559,88.3753129 L255.445559,73.1067521 C255.344335,72.3843107 255.583636,71.6557461 256.093513,71.1340243 C256.60339,70.6123025 257.326268,70.3563352 258.050843,70.440944 L290.711807,70.440944 C291.169632,70.3864212 291.627278,70.4654398 292.033159,70.6601324 C291.928001,70.4749587 291.797554,70.3027294 291.643697,70.1488728 C291.123562,69.6287377 290.39345,69.3761504 289.663093,69.4636694 L257.002128,69.4636694 C256.277329,69.3785953 255.554042,69.6343569 255.043834,70.1561417 C254.533627,70.6779266 254.294156,71.4067696 254.395468,72.1294776 L254.395468,87.3980384 C254.299413,88.1629595 254.562126,88.9293544 255.107255,89.4744833 C255.302701,89.6699288 255.526589,89.8290714 255.768654,89.9483922 Z M308.308686,115.821748 C307.957227,115.811285 306.352049,115.888333 303.493152,116.052893 C302.170638,116.080608 301.066515,115.05024 301.002876,113.728968 C300.939237,112.407695 301.939223,111.275983 303.258278,111.176466 C304.962045,111.058408 306.665812,111 308.251521,111 C308.870761,111.010162 309.461217,111.263215 309.895638,111.704621 C310.375395,112.210114 310.629643,112.888559 310.600259,113.584854 C310.62836,114.195981 310.394017,114.789998 309.956238,115.217331 C309.518458,115.644665 308.918956,115.864597 308.308686,115.821748 Z M188.379365,115.816957 C187.049249,115.800829 185.984052,114.709481 186.000181,113.379365 C186.01631,112.049249 187.107657,110.984052 188.437773,111.000181 C190.08189,111.000181 191.727249,111.059831 193.312957,111.176647 C193.957823,111.190846 194.568503,111.469485 195.001853,111.947251 C195.435204,112.425018 195.653123,113.059905 195.60453,113.703093 C195.565926,115.03039 194.465341,116.078856 193.137734,116.053074 L188.379365,115.816957 Z M250.610123,55.2920169 L250.610123,60.2852596 C250.602865,60.9112256 250.342967,61.5076968 249.88945,61.9392161 C249.435934,62.3707354 248.827288,62.6006809 248.201734,62.5768324 C246.906112,62.6033053 245.83127,61.5805966 245.793346,60.2852596 C245.734938,58.5814926 245.734938,56.9373761 245.793346,55.2920169 C245.800936,54.6662678 246.06098,54.070119 246.514459,53.6388693 C246.967938,53.2076196 247.576393,52.9778424 248.201734,53.0016868 C248.827075,52.9778424 249.435531,53.2076196 249.88901,53.6388693 C250.342489,54.070119 250.602532,54.6662678 250.610123,55.2920169 Z M248.143326,177.16992 C247.502444,177.17698 246.88575,176.925507 246.43255,176.472307 C245.979351,176.019107 245.727878,175.402414 245.734938,174.761531 C245.67653,173.17458 245.67653,171.530463 245.734938,169.885104 C245.729865,169.250091 245.983915,168.640458 246.43843,168.196967 C246.892944,167.753475 247.508629,167.514466 248.143326,167.535124 L248.201734,167.535124 C249.509371,167.534739 250.57841,168.577852 250.610123,169.885104 L250.610123,174.819939 C250.601152,175.460834 250.334572,176.071138 249.870492,176.513242 C249.406412,176.955345 248.783902,177.192027 248.143326,177.16992 Z M299.901179,145.726837 C299.602038,145.542047 298.173389,144.806184 295.615231,143.519248 C294.456043,142.881993 294.015028,141.437607 294.620552,140.261532 C295.226075,139.085457 296.657944,138.605358 297.850038,139.178702 C299.384573,139.928344 300.889282,140.729645 302.262546,141.522499 C302.793742,141.840919 303.178566,142.355298 303.334082,142.954777 C303.496817,143.632426 303.377781,144.347101 303.004186,144.935417 C302.722959,145.478719 302.223003,145.875981 301.630208,146.027173 C301.037413,146.178365 300.408263,146.069081 299.901179,145.726837 Z M196.041735,85.7580286 C194.897885,85.0790025 194.521071,83.6012695 195.200097,82.4574196 C195.879123,81.3135696 197.356856,80.9367554 198.500706,81.6157815 C199.924553,82.4378397 201.319651,83.3121782 202.634507,84.2061978 C203.185877,84.540927 203.575422,85.0875759 203.711831,85.7180088 C203.848241,86.3484417 203.719521,87.0072296 203.355844,87.5399511 C202.658764,88.6701215 201.181396,89.0278277 200.044545,88.341696 L196.041735,85.7580286 Z M277.667519,167.421651 C277.500851,167.112047 276.631536,165.760447 275.059574,163.366849 C274.374315,162.235376 274.714578,160.763994 275.827014,160.048244 C276.93945,159.332495 278.419535,159.632652 279.165247,160.725229 C280.119372,162.141705 281.021838,163.588007 281.814692,164.961271 C282.115511,165.502629 282.191589,166.140506 282.026531,166.737428 C281.828639,167.405657 281.368213,167.965065 280.750512,168.287765 C280.235311,168.617664 279.603706,168.711726 279.014734,168.546264 C278.425763,168.380803 277.935545,167.971585 277.667519,167.421651 Z M217.707007,63.5574176 C217.055917,62.3974388 217.468453,60.9292774 218.628431,60.2781873 C219.78841,59.6270972 221.256572,60.0396331 221.907662,61.1996119 C222.72972,62.6234585 223.500741,64.0782067 224.19243,65.5098785 C224.502566,66.0754477 224.566597,66.7436321 224.369515,67.3578075 C224.172432,67.971983 223.731563,68.4781501 223.150249,68.757662 C221.981475,69.3878783 220.523184,68.9589769 219.881708,67.7963442 L217.707007,63.5574176 Z M281.684099,81.8854868 C282.906719,81.8789362 283.914263,80.9243573 283.986763,79.7038708 C284.010551,79.0910473 283.785928,78.4945736 283.363814,78.0496708 C282.9417,77.6047681 282.35785,77.3491202 281.744623,77.3406828 C280.514047,77.3591353 279.520935,78.3522474 279.502483,79.5828228 C279.474787,80.1806296 279.691724,80.7639387 280.103318,81.1983701 C280.514912,81.6328014 281.085668,81.8808916 281.684099,81.8854868 Z M273.199731,81.890989 C274.430306,81.8725365 275.423418,80.8794244 275.441871,79.648849 C275.443337,79.0537484 275.207583,78.4825992 274.786782,78.0617983 C274.365981,77.6409973 273.794832,77.4052432 273.199731,77.406709 C272.572646,77.4183773 271.970668,77.6551649 271.503683,78.0738488 C271.070137,78.5027833 270.848561,79.1015421 270.898442,79.709373 C271.011121,80.9101924 271.99461,81.8425374 273.199731,81.890989 Z M266.958879,79.7107486 C266.984332,79.1192092 266.764709,78.5433565 266.351808,78.1189997 C265.938906,77.6946428 265.369277,77.4593485 264.777263,77.4686086 C263.564789,77.5098973 262.598575,78.4963296 262.582401,79.7093982 C262.566226,80.9224667 263.505797,81.9343095 264.716739,82.0079104 C265.928072,81.899313 266.879675,80.9243586 266.958879,79.7107486 Z M244.63872,120.361623 C255.04491,120.361623 267.183159,130.893414 267.183159,143.861319 L267.183159,158.313578 C267.183159,161.414531 265.723601,162.965008 262.804485,162.965008 L202.776281,162.965008 C200.147556,162.965008 198.833194,161.414531 198.833194,158.313578 L198.833194,143.861319 C198.833194,127.849943 214.764612,120.361623 221.00684,120.361623 C216.472421,116.44827 214.140771,110.563141 214.764612,104.606119 C215.162994,100.122563 217.293151,95.9708065 220.702844,93.0322749 C227.534513,86.9067009 237.866803,86.8547116 244.759769,92.9112268 C248.770938,96.3691972 251.036245,101.432114 250.941472,106.727211 C250.908467,111.96903 248.610321,116.94049 244.63872,120.361623 Z M232.946579,92.9717508 C232.883304,92.9717508 232.82278,92.9717508 232.886055,93.0308993 C225.411135,93.1158845 219.391015,99.1899303 219.372691,106.665311 C219.317345,110.282624 220.717399,113.770552 223.258397,116.345691 C225.799395,118.920831 229.268326,120.367312 232.886055,120.360248 C240.387775,120.315669 246.44874,114.227679 246.459943,106.725835 C246.477938,103.024131 245.016599,99.4685847 242.400707,96.8494151 C239.882575,94.3628454 236.485508,92.9695189 232.946579,92.9717508 Z M296.994753,72.4912462 C296.994753,77.6481682 296.994753,82.6097627 296.932853,87.4035406 C297.079154,89.4214278 296.341072,91.4032532 294.910465,92.8338602 C293.479858,94.2644671 291.498032,95.0025492 289.480145,94.8562489 L285.602481,94.8562489 C281.965537,94.8562489 278.269445,94.8562489 274.573353,94.9167729 C273.970352,94.956322 273.396453,95.1904186 272.937829,95.5839127 C270.93916,97.4629086 268.939116,99.4615769 266.999596,101.340573 C266.271933,102.068237 265.545644,102.734001 264.817981,103.461665 C264.346889,104.022587 263.669435,104.369745 262.938985,104.424547 C262.713328,104.408477 262.490091,104.367889 262.27322,104.303499 C261.224607,103.9825 260.542944,102.972331 260.637696,101.879787 L260.637696,94.7902227 L257.061277,94.7902227 C255.179764,94.8637627 253.349138,94.1695828 251.989466,92.8669745 C250.629794,91.5643662 249.857812,89.7651659 249.850664,87.8822306 C249.729616,82.6111383 249.729616,77.3386704 249.850664,71.5820103 C250.00264,67.9186059 252.972062,65.002144 256.637608,64.9161143 C258.577128,64.8555903 260.577172,64.8555903 262.454792,64.8555903 L289.359097,64.8555903 C291.427537,64.7017522 293.460371,65.4566764 294.927019,66.9233243 C296.393667,68.3899722 297.148591,70.4228058 296.994753,72.4912462 Z\" id=\"pack2_support\"></path>
            </g>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/ITIcons/pack2_support.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/ITIcons/pack2_support.svg", "/var/www/html/modules/blockreassurance/views/img/ITIcons/pack2_support.svg");
    }
}