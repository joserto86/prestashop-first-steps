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

/* @Modules/blockreassurance/views/img/ITIcons/pack2_globe.svg */
class __TwigTemplate_c794c49eed4228cc92c236eeb19188c3 extends Template
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
    <title>C33A9902-92D1-455C-978C-24E48775A185</title>
    <desc>Created with sketchtool.</desc>
    <g id=\"Mockups\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Reassurance-Images-Themes---Free\" transform=\"translate(-553.000000, -691.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <g id=\"IT-Icons\" transform=\"translate(20.000000, 640.000000)\">
                <path d=\"M573.654312,128.165142 C571.154098,119.708386 571.073734,110.719693 573.423059,102.218824 C573.612549,101.710588 573.744314,101.459608 574.371765,101.459608 L592.723451,101.459608 C592.723451,101.185675 592.723451,100.911689 592.723451,100.637647 L592.722196,100.633882 C592.532706,100.633882 592.345725,100.569882 592.220235,100.569882 L573.169569,100.569882 C572.542118,100.569882 572.416627,100.820863 572.220863,101.329098 C569.865375,109.852269 569.95234,118.865826 572.471843,127.341961 C572.659355,128.031159 573.033649,128.162468 573.65431,128.165135 Z M599.620392,128.102431 L599.620392,101.465882 L618.835657,101.465882 C618.759481,101.165964 618.682642,100.867607 618.605804,100.571137 L598.351686,100.571137 L598.355451,128.039686 C598.47533,128.086128 598.603461,128.107483 598.731922,128.102431 L599.620392,128.102431 Z M576.185165,94.9378824 C579.617153,87.5430874 585.446497,81.5259829 592.722196,77.8607628 L592.722196,76.3301961 C584.570152,80.0667956 578.096626,86.698191 574.55749,94.9378824 L576.185165,94.9378824 Z M599.620392,94.9378824 L599.620392,77.2826667 C601.738202,78.2563688 603.741989,79.4261203 605.609599,80.7691494 C603.39142,79.021285 600.959641,77.5275205 598.355451,76.3301961 L598.355451,94.9378824 L599.620392,94.9378824 Z M592.722196,134.688157 L592.722196,133.735686 L575.064471,133.735686 C577.516573,139.04712 581.226751,143.628894 585.82417,147.114153 C581.780126,143.763366 578.500298,139.528803 576.265412,134.688157 L592.722196,134.688157 Z M599.620392,150.624981 L599.620392,134.688157 L615.551239,134.688157 C615.710088,134.373352 615.864512,134.055835 616.014431,133.735686 L598.419451,133.735686 L598.419451,151.203922 C598.82394,151.01806 599.224306,150.825028 599.620392,150.624981 Z M626.34353,128.103686 C628.755303,119.286763 628.794568,109.985586 626.452706,101.143373 C628.760594,101.143373 631.026474,101.101364 633.28438,101.11945 C633.209282,100.872375 632.908422,100.572392 632.720941,100.572392 C629.936314,100.508392 627.151686,100.572392 624.303059,100.572392 C626.689806,109.585555 626.603105,119.075401 624.052078,128.043451 L624.052078,128.039686 C624.194991,128.088033 624.345566,128.109726 624.496314,128.103686 L626.34353,128.103686 Z M624.923575,95.1237328 C624.28455,94.66725 623.792609,93.9237495 623.354353,92.843451 C620.797249,86.9431756 616.869958,81.7377614 611.898353,77.6591373 C611.771608,77.5336471 611.580863,77.4081569 611.455373,77.2826667 C610.727151,76.9647754 609.987751,76.6686167 609.237961,76.3941961 C609.363451,76.5836863 609.363451,76.6451765 609.363451,76.7104314 C609.488941,76.8359216 609.679686,76.9614118 609.806431,77.086902 C614.777826,81.1657282 618.705076,86.3710872 621.262431,92.2712157 C622.086407,94.3023095 623.10015,95.1428689 624.923575,95.1237328 Z M614.006916,149.211361 C614.085045,149.138478 614.163146,149.065631 614.241255,148.992784 C618.168823,145.240335 621.310219,140.743668 623.482353,135.764863 C623.754042,134.700391 624.810185,134.033759 625.888,134.246431 C627.134554,134.363054 628.381109,134.360367 629.642291,134.341055 C629.751307,134.114025 629.849932,133.890734 629.937569,133.671686 L629.937569,133.672941 C627.849412,133.672941 625.824,133.798431 623.798588,133.608941 C622.720773,133.396269 621.66463,134.062901 621.392941,135.127373 C619.220895,140.106227 616.079488,144.60291 612.151843,148.355294 C611.203137,149.241255 610.253176,150.127216 609.240471,151.077176 C610.633189,150.817852 612.270274,150.155045 614.006916,149.211361 Z M559.080532,128.232272 C556.169025,119.951027 556.089082,110.932255 558.861176,102.594039 C558.987922,102.284078 559.306667,101.841098 559.557647,101.841098 C561.797114,101.788417 564.079945,101.7791 566.406141,101.777452 C566.501104,101.373652 566.600913,100.970682 566.705569,100.568627 L566.709333,100.571137 C563.860706,100.571137 561.076078,100.571137 558.354196,100.633882 C558.103216,100.633882 557.784471,101.076863 557.657725,101.393098 C554.836704,109.878351 554.969388,119.06843 558.034196,127.468706 C558.123048,127.963572 558.585613,128.298422 559.080532,128.232272 Z M562.321227,95.0614199 C565.43959,89.2933816 571.558746,83.2332427 578.352271,79.7007183 C579.26049,78.7895981 580.21166,77.9180919 581.203451,77.0894118 C581.392941,76.9639216 581.519686,76.7731765 581.830902,76.5196863 C572.785569,79.3708235 563.988706,87.5992157 560.507608,95.0683922 L560.506353,95.0646275 L561.519059,95.0646275 C561.786447,95.0646275 562.053836,95.063383 562.321227,95.0614199 Z M567.806662,142.385909 C565.671668,140.146766 563.792688,137.649862 562.219294,134.936627 L566.523608,134.936627 C567.514248,134.936627 568.696492,134.648275 569.528541,134.906117 C569.302638,134.462143 569.037722,134.080325 568.675765,133.857412 C567.852549,133.350431 566.460863,133.731922 565.321412,133.731922 L561.017098,133.731922 C562.879672,136.942598 565.170264,139.850153 567.806662,142.385909 Z M579.15657,148.724198 C579.89753,149.495898 580.667185,150.241365 581.464225,150.958933 C581.568263,150.997517 581.672503,151.035677 581.776941,151.073412 L581.773176,151.078431 C581.583686,150.952941 581.456941,150.762196 581.271216,150.635451 C580.544948,150.020439 579.839762,149.382967 579.15657,148.724198 Z M630.001569,68.9915294 C628.926118,68.2323137 627.849412,67.409098 626.709961,66.6498824 C602.718559,50.7825976 570.640553,55.4392913 552.151216,77.4734118 C546.325204,84.3466364 542.262897,92.5367239 540.316235,101.334118 C538.946665,107.479624 538.583041,113.806601 539.239529,120.068549 C540.060047,128.110661 542.653876,135.870718 546.834196,142.789804 C547.023686,143.106039 547.150431,143.359529 547.336157,143.675765 C548.067386,145.004365 547.586544,146.674127 546.260706,147.410353 C545.642221,147.758569 544.908847,147.84071 544.228651,147.637953 C543.548454,147.435195 542.979749,146.964921 542.652863,146.334902 C541.262826,144.018659 539.995305,141.631062 538.855529,139.181961 C534.694368,130.025879 532.888601,119.974665 533.60251,109.942745 C534.335671,97.4622541 538.887349,85.508732 546.640941,75.7014902 C554.791066,64.9566449 566.351515,57.3013046 579.425255,53.9916863 C599.615373,48.8654118 618.160314,52.7254902 634.615843,65.6371765 C634.866824,65.8266667 635.117804,66.0136471 635.501804,66.3336471 C635.501804,65.8906667 635.565804,65.6371765 635.565804,65.3209412 L635.565804,57.9170196 C635.547518,57.1841409 635.826183,56.4749763 636.338507,55.9506006 C636.850831,55.4262249 637.553326,55.1311482 638.286431,55.1323922 C639.805382,55.1191235 641.049713,56.3354159 641.071059,57.8542745 C641.133804,62.6011503 641.133804,67.3480261 641.071059,72.094902 C641.108999,72.8277638 640.834435,73.5423489 640.315529,74.0612545 C639.796623,74.58016 639.082038,74.8547244 638.349176,74.8167843 L624.109804,74.8167843 C622.60655,74.8167843 621.387922,73.5981561 621.387922,72.094902 C621.387922,70.5916478 622.60655,69.3730196 624.109804,69.3730196 C626.071216,69.3102745 628.033882,69.3730196 629.995294,69.3730196 C629.959179,69.2501278 629.959179,69.1194408 629.995294,68.996549 L630.001569,68.9915294 Z M555.569569,161.46149 L555.569569,169.879373 C555.584237,171.125638 554.762077,172.227188 553.563127,172.567648 C552.364177,172.908109 551.085793,172.403042 550.443294,171.335059 C550.199737,170.750276 550.050228,170.130643 550.000314,169.499137 C549.936314,167.537725 549.936314,165.575059 549.936314,163.549647 C549.936314,160.891765 549.872314,158.232627 549.872314,155.643765 C549.75755,154.814139 550.02878,153.977614 550.608519,153.37317 C551.188257,152.768725 552.012741,152.462841 552.846431,152.542902 L566.581333,152.542902 C567.345092,152.474569 568.102407,152.730366 568.668307,153.247814 C569.234207,153.765263 569.556587,154.49672 569.556706,155.263529 C569.592009,156.04653 569.282831,156.805753 568.710564,157.341333 C568.138297,157.876913 567.360282,158.135184 566.581333,158.048157 L560.126118,158.048157 C560.879059,158.675608 561.392314,159.123608 561.960784,159.566588 C583.424761,175.256822 612.898396,173.968696 632.911686,156.465725 C642.746909,148.025001 649.253857,136.356895 651.265882,123.553412 C653.635938,110.263002 651.093755,96.5642006 644.112941,85.009098 C643.100235,83.2371765 643.164235,81.8442353 644.363922,80.8315294 C644.977057,80.2954539 645.801311,80.0684838 646.602441,80.2151213 C647.403571,80.3617589 648.09399,80.8659726 648.47749,81.5844706 C649.86846,83.986204 651.135888,86.4573952 652.274824,88.9883922 C656.082391,97.4914887 657.838766,106.770269 657.402353,116.076706 C656.960774,130.634075 651.3255,144.553112 641.515294,155.31749 C632.630128,165.418902 620.621608,172.258259 607.400784,174.747137 C588.476863,178.41898 571.451608,174.119686 556.326275,162.152941 C556.266039,161.967216 556.012549,161.777725 555.569569,161.46149 Z M640.950588,114.814275 C640.064627,140.573647 619.240784,160.195294 593.545412,159.118588 C568.59909,158.024432 549.212579,137.00091 550.139847,112.047828 C551.067116,87.0947457 571.960493,67.5680439 596.91922,68.3283833 C621.877946,69.0887227 641.543964,89.8510207 640.950588,114.814275 Z\" id=\"pack2_globe\"></path>
            </g>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/ITIcons/pack2_globe.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/ITIcons/pack2_globe.svg", "/var/www/html/modules/blockreassurance/views/img/ITIcons/pack2_globe.svg");
    }
}
