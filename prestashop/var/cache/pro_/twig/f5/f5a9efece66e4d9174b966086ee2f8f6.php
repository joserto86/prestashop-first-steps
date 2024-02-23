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

/* @Modules/blockreassurance/views/img/ITIcons/pack2_carrier.svg */
class __TwigTemplate_6b7063c75c02af827208382f36e80b55 extends Template
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
<svg width=\"128px\" height=\"121px\" viewBox=\"0 0 128 121\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: sketchtool 53.2 (72643) - https://sketchapp.com -->
    <title>8F5F531B-C1D6-4CA2-BB98-DE5A7372CDC6</title>
    <desc>Created with sketchtool.</desc>
    <g id=\"Mockups\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Reassurance-Images-Themes---Free\" transform=\"translate(-378.000000, -1049.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <g id=\"IT-Icons\" transform=\"translate(20.000000, 640.000000)\">
                <path d=\"M440,446 L440,445 L428,445 L428,461 L429,460.065276 L429,446 L440,446 Z M466.780971,485.201965 C467.87912,484.427948 469.218445,483.90393 470.495483,483.90393 C473.049561,483.90393 475.733887,486 476.477451,488 L481,488 L481,476.831691 L472.044672,460 L460,460 L460,488 L463.754874,488 L464.513515,488 C464.825849,487 465.682822,485.975983 466.780971,485.201965 C465.682822,485.975983 464.825849,487 464.513515,488 L461,488 L461,461 L472.044672,461 L481,476.831691 L481,488 L476.477451,488 C475.733887,486 473.049561,483.90393 470.495483,483.90393 C469.218445,483.90393 467.87912,484.427948 466.780971,485.201965 Z M395.286502,471.860583 L360.293259,471.860583 C359.667293,471.853325 359.070822,471.593427 358.639302,471.13991 C358.207783,470.686394 357.977838,470.077748 358.001686,469.452194 C357.975213,468.156573 358.997922,467.08173 360.293259,467.043806 C361.997026,466.985398 393.641143,466.985398 395.286502,467.043806 C395.912251,467.051396 396.5084,467.31144 396.939649,467.764919 C397.370899,468.218398 397.600676,468.826854 397.576832,469.452194 C397.600676,470.077535 397.370899,470.685991 396.939649,471.13947 C396.5084,471.592949 395.912251,471.852992 395.286502,471.860583 Z M395.286502,461.860583 L370.293259,461.860583 C369.667293,461.853325 369.070822,461.593427 368.639302,461.13991 C368.207783,460.686394 367.977838,460.077748 368.001686,459.452194 C367.975213,458.156573 368.997922,457.08173 370.293259,457.043806 C371.997026,456.985398 393.641143,456.985398 395.286502,457.043806 C395.912251,457.051396 396.5084,457.31144 396.939649,457.764919 C397.370899,458.218398 397.600676,458.826854 397.576832,459.452194 C397.600676,460.077535 397.370899,460.685991 396.939649,461.13947 C396.5084,461.592949 395.912251,461.852992 395.286502,461.860583 Z M395.286502,481.860583 L380.293259,481.860583 C379.667293,481.853325 379.070822,481.593427 378.639302,481.13991 C378.207783,480.686394 377.977838,480.077748 378.001686,479.452194 C377.975213,478.156573 378.997922,477.08173 380.293259,477.043806 C381.997026,476.985398 393.641143,476.985398 395.286502,477.043806 C395.912251,477.051396 396.5084,477.31144 396.939649,477.764919 C397.370899,478.218398 397.600676,478.826854 397.576832,479.452194 C397.600676,480.077535 397.370899,480.685991 396.939649,481.13947 C396.5084,481.592949 395.912251,481.852992 395.286502,481.860583 Z M459.689397,422.331192 L461.26178,423.567158 L458.789848,426.711924 L457.217465,425.475958 C456.964463,425.277087 456.709888,425.080515 456.453764,424.886255 L454.860259,423.677643 L457.277483,420.490634 L458.870988,421.699246 C459.145465,421.907426 459.418277,422.11808 459.689397,422.331192 Z M451.245964,416.717684 L452.99155,417.693866 L451.039186,421.185037 L449.293601,420.208855 C449.013145,420.052016 448.731397,419.89765 448.448385,419.745767 L446.686125,418.800019 L448.57762,415.275498 L450.33988,416.221246 C450.643272,416.384066 450.945311,416.54955 451.245964,416.717684 Z M442.753597,412.808694 L444.630293,413.500078 L443.247525,417.25347 L441.370829,416.562086 C441.069161,416.45095 440.766549,416.342427 440.463028,416.236528 L438.574666,415.577674 L439.892374,411.80095 L441.780736,412.459804 C442.106006,412.573291 442.430305,412.689591 442.753597,412.808694 Z M433.831078,410.286087 L435.791901,410.680009 L435.004057,414.601654 L433.043234,414.207732 C432.727629,414.144329 432.411478,414.083637 432.094819,414.025664 L430.127517,413.665496 L430.847853,409.730891 L432.815155,410.091059 C433.15435,410.153158 433.493005,410.218169 433.831078,410.286087 Z M424.56147,409.161692 L426.5596,409.24815 L426.386685,413.244411 L424.388554,413.157953 C424.067341,413.144054 423.746013,413.132904 423.424609,413.124504 L421.425292,413.072251 L421.529799,409.073616 L423.529117,409.12587 C423.87333,409.134866 424.217461,409.146807 424.56147,409.161692 Z M415.214941,409.482676 L417.202417,409.25921 L417.649349,413.234163 L415.661873,413.457629 C415.341955,413.4936 415.022357,413.532318 414.703116,413.57378 L412.719773,413.831369 L412.204594,409.864684 L414.187937,409.607095 C414.529906,409.562681 414.872254,409.521207 415.214941,409.482676 Z M406.153532,411.214082 L408.083301,410.688731 L409.134002,414.548268 L407.204233,415.073619 C406.893553,415.158197 406.583599,415.245464 406.274407,415.335412 L404.354019,415.894082 L403.23668,412.053307 L405.157068,411.494637 C405.488424,411.398241 405.820591,411.30472 406.153532,411.214082 Z M397.376304,414.357843 L399.200676,413.53829 L400.839782,417.187034 L399.01541,418.006587 C398.722097,418.138351 398.429872,418.272686 398.138765,418.409584 L396.328904,419.260703 L394.626667,415.640981 L396.436528,414.789862 C396.748599,414.643105 397.061869,414.499095 397.376304,414.357843 Z M389.186744,418.838707 L390.860787,417.744366 L393.049467,421.092452 L391.375424,422.186792 C391.106167,422.362808 390.838296,422.541242 390.571834,422.722084 L388.916964,423.845207 L386.670718,420.535467 L388.325588,419.412344 C388.611131,419.218553 388.898192,419.027336 389.186744,418.838707 Z M381.787392,424.543131 L383.272372,423.203417 L385.9518,426.173377 L384.46682,427.513091 C384.234503,427.722682 384.003696,427.934377 383.774469,428.148119 L383.754149,428.167075 L382.292049,429.531723 L379.562753,426.607523 L381.024853,425.242875 L381.046538,425.222645 C381.291845,424.993911 381.538803,424.767402 381.787392,424.543131 Z M375.375544,431.286164 L376.637927,429.73491 L379.740436,432.259675 L378.478053,433.810929 C378.275151,434.060261 378.074523,434.311187 377.87618,434.563683 L376.640718,436.136462 L373.49516,433.665538 L374.730622,432.092759 C374.943158,431.822195 375.158136,431.553322 375.375544,431.286164 Z M370.076818,438.947804 L371.08244,437.219011 L374.540026,439.230255 L373.534404,440.959048 C373.372595,441.237217 373.213249,441.516717 373.056376,441.797518 L372.080948,443.543525 L368.588934,441.592669 L369.564362,439.846662 C369.732533,439.545637 369.903356,439.246008 370.076818,438.947804 Z M366.812919,492.773538 L366.024274,490.935594 L369.700163,489.358304 L370.488808,491.196248 C370.615635,491.491821 370.74505,491.786341 370.877043,492.079778 L371.697496,493.903745 L368.049561,495.544651 L367.229108,493.720683 C367.087611,493.406117 366.948878,493.090391 366.812919,492.773538 Z M371.153523,501.035126 L370.087572,499.342865 L373.472095,497.210963 L374.538046,498.903224 C374.709418,499.175288 374.883225,499.445996 375.059456,499.715322 L376.154533,501.388883 L372.807411,503.579037 L371.712334,501.905476 C371.523466,501.616837 371.337191,501.326711 371.153523,501.035126 Z M376.730014,508.525 L375.415163,507.017961 L378.429242,504.38826 L379.744093,505.895299 C379.9556,506.137721 380.169353,506.378565 380.385342,506.61781 L381.725563,508.102333 L378.756516,510.782774 L377.416296,509.298251 C377.185152,509.04222 376.956387,508.784462 376.730014,508.525 Z M383.371497,515.054029 L381.841588,513.76586 L384.417925,510.706042 L385.947834,511.99421 C386.194667,512.202041 386.443129,512.407603 386.693199,512.610885 L388.245123,513.872443 L385.722006,516.976292 L384.170081,515.714733 C383.902148,515.496931 383.635945,515.276691 383.371497,515.054029 Z M390.937491,520.477645 L389.226021,519.442816 L391.295678,516.019876 L393.007148,517.054704 C393.282869,517.221417 393.559956,517.38568 393.838381,517.547481 L395.567595,518.552378 L393.557801,522.010806 L391.828587,521.005909 C391.53011,520.832455 391.233068,520.656363 390.937491,520.477645 Z M399.282929,524.668179 L397.430805,523.913436 L398.940292,520.209188 L400.792416,520.963932 C401.090461,521.085386 401.389533,521.204247 401.689599,521.320504 L403.554519,522.043051 L402.109427,525.772891 L400.244507,525.050345 C399.922908,524.925744 399.60237,524.798352 399.282929,524.668179 Z M408.125734,527.494032 L406.179239,527.034511 L407.098283,523.141522 L409.044777,523.601044 C409.357889,523.674962 409.671635,523.746187 409.98598,523.814712 L411.940088,524.240692 L411.088128,528.148909 L409.134019,527.722929 C408.797274,527.649521 408.461165,527.57322 408.125734,527.494032 Z M417.34757,528.927892 L415.353462,528.77449 L415.660268,524.786273 L417.654376,524.939676 C417.975104,524.964349 418.29604,524.986276 418.617148,525.005453 L420.61359,525.124689 L420.37512,529.117574 L418.378677,528.998338 C418.034779,528.9778 417.691063,528.954317 417.34757,528.927892 Z M426.696392,528.92087 L424.702522,529.077338 L424.389587,525.089598 L426.383457,524.93313 C426.704466,524.907939 427.025248,524.879994 427.345766,524.849296 L429.336656,524.658617 L429.718013,528.640397 L427.727124,528.831075 C427.383813,528.863956 427.040223,528.893889 426.696392,528.92087 Z M435.820319,527.494018 L433.873946,527.954052 L432.953878,524.061306 L434.900251,523.601272 C435.213536,523.527225 435.526181,523.450474 435.83815,523.371024 L437.776285,522.877435 L438.763465,526.753706 L436.825329,527.247295 C436.491033,527.332431 436.156017,527.414675 435.820319,527.494018 Z M444.701999,524.647347 L442.850958,525.404744 L441.336166,521.702663 L443.187207,520.945266 C443.485077,520.823386 443.78193,520.698901 444.077736,520.571821 L445.915336,519.782374 L447.494229,523.457574 L445.656629,524.247021 C445.339529,524.383249 445.021308,524.516695 444.701999,524.647347 Z M453.034165,520.448371 L451.324092,521.485506 L449.249822,518.06536 L450.959895,517.028225 C451.234834,516.861478 451.508445,516.692279 451.780704,516.520636 L453.472553,515.45403 L455.605765,518.837727 L453.913917,519.904333 C453.622112,520.088298 453.328852,520.269648 453.034165,520.448371 Z M460.618057,514.997509 L459.089383,516.287143 L456.510114,513.229796 L458.038788,511.940161 C458.284686,511.732715 458.529025,511.523 458.771784,511.311027 L460.278293,509.995569 L462.909209,513.008587 L461.4027,514.324045 C461.14285,514.550942 460.881295,514.775434 460.618057,514.997509 Z M467.257825,508.464002 L465.944204,509.972113 L462.927982,507.34487 L464.241603,505.836759 C464.453187,505.593849 464.662532,505.349292 464.869626,505.103111 L466.157108,503.572624 L469.218082,506.147588 L467.9306,507.678075 C467.708741,507.941808 467.484478,508.203792 467.257825,508.464002 Z M477.882305,447.309227 L478.608118,449.172877 L474.880817,450.624505 L474.155003,448.760854 C474.038312,448.461232 473.919009,448.162585 473.797102,447.864947 L473.039057,446.014173 L476.740606,444.498082 L477.498652,446.348857 C477.629331,446.667913 477.757219,446.988048 477.882305,447.309227 Z M473.700096,438.334779 L474.708165,440.062146 L471.253431,442.078283 L470.245362,440.350916 C470.083228,440.073092 469.91862,439.796566 469.75155,439.521364 L468.713669,437.811744 L472.13291,435.735981 L473.170791,437.445602 C473.349867,437.74058 473.526306,438.036982 473.700096,438.334779 Z M467.258366,429.51093 L468.601677,430.992657 L465.638223,433.67928 L464.294912,432.197553 C464.078831,431.959206 463.860543,431.722516 463.64006,431.487503 L462.271656,430.028917 L465.188827,427.29211 L466.557231,428.750695 C466.793285,429.002306 467.027001,429.255725 467.258366,429.51093 Z M411,488 L418.919866,488 C419.919866,486 421.529412,484.102703 424.764706,484.102703 C428,484.102703 429.969238,486 430.609546,488 L455,488 L455,445 L444.764706,445 L444.764706,466.880959 C444.764706,468.161662 443.711258,469.199878 442.411765,469.199878 C441.784774,469.199878 441.183714,468.953254 440.741973,468.514736 L437.568255,465.364183 L434.176471,462.072973 L430.913262,465.340528 L427.598967,468.583677 C426.67679,469.486011 425.187,469.480734 424.271428,468.571892 C423.833818,468.137499 423.588235,467.5502 423.588235,466.938072 L423.588235,445 L411,445 L411,488 Z M460.117647,455.08 L475.090909,455.08 L486,475.221818 L486,493.149091 L477.258325,493.149091 C476.352266,495.96194 473.682226,498 470.529412,498 C467.376598,498 464.706558,495.96194 463.800499,493.149091 L431.552442,493.149091 C430.646384,495.96194 427.976343,498 424.823529,498 C421.670716,498 419.000675,495.96194 418.094616,493.149091 L406,493.149091 L406,445.8 C406,442.596748 408.633619,440 411.882353,440 L454.235294,440 C457.484028,440 460.117647,442.596748 460.117647,445.8 L460.117647,455.08 Z M425,493 C426.104569,493 427,492.104569 427,491 C427,489.895431 426.104569,489 425,489 C423.895431,489 423,489.895431 423,491 C423,492.104569 423.895431,493 425,493 Z M470.5,493 C471.604569,493 472.5,492.104569 472.5,491 C472.5,489.895431 471.604569,489 470.5,489 C469.395431,489 468.5,489.895431 468.5,491 C468.5,492.104569 469.395431,493 470.5,493 Z\" id=\"pack2_carrier\"></path>
            </g>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/ITIcons/pack2_carrier.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/ITIcons/pack2_carrier.svg", "/var/www/html/modules/blockreassurance/views/img/ITIcons/pack2_carrier.svg");
    }
}