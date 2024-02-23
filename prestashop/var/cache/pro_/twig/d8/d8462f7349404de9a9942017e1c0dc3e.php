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

/* @Modules/blockreassurance/views/img/ITIcons/pack2_phone.svg */
class __TwigTemplate_dcf0c3e3c93921e70ee104429393bbac extends Template
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
<svg width=\"117px\" height=\"123px\" viewBox=\"0 0 117 123\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: sketchtool 53.2 (72643) - https://sketchapp.com -->
    <title>811952ED-9DF0-4341-8482-F30C8FC51DA3</title>
    <desc>Created with sketchtool.</desc>
    <g id=\"Mockups\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"Reassurance-Images-Themes---Free\" transform=\"translate(-383.000000, -692.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <g id=\"IT-Icons\" transform=\"translate(20.000000, 640.000000)\">
                <path d=\"M461.443427,81.0026195 C464.092922,82.2315606 467.032179,82.7833828 469.989445,82.5727648 C470.175741,82.3032986 470.336669,82.0268898 470.469538,81.7446154 C467.40288,82.3078088 464.292656,82.0286004 461.443427,81.0026195 Z M454.172205,86.7199925 C450.086739,84.7881826 447.010405,81.0504009 446.001846,76.4683077 C444.908477,71.7286071 446.526969,66.2024488 449.77313,63.0429082 C449.820257,62.4098213 449.901965,61.7759831 450.019077,61.144 L450.019077,61.1390769 C445.685538,63.8344615 443.307692,70.3870769 444.575385,75.8824615 C445.698251,80.9838797 449.38417,85.0387556 454.172205,86.7199925 Z M369.429538,114.833846 C369.535385,102.526154 372.441231,93.0615385 378.254154,84.6061538 C385.943337,72.9396429 398.065886,64.9218204 411.811077,62.4116923 C417.486305,61.2585961 423.322432,61.1335363 429.041846,62.0424615 C430.046154,62.2012308 430.997538,62.3070769 431.995692,62.5175385 C432.753934,62.6247954 433.432101,63.0460206 433.864312,63.6781822 C434.296523,64.3103439 434.442919,65.0951421 434.267692,65.8406154 C434.135312,66.5767789 433.715494,67.2300314 433.10085,67.6562643 C432.486207,68.0824973 431.727242,68.2466879 430.991385,68.1126154 C428.776,67.848 426.552,67.5316923 424.332923,67.3741538 C416.640319,66.8038908 408.932705,68.2616405 401.979692,71.6018462 C393.719999,75.4064126 386.783303,81.588887 382.057231,89.3581538 C377.412527,96.5760056 375.07191,105.035365 375.345846,113.614154 C375.504615,117.155077 376.032615,120.643077 376.508923,124.129846 C376.773538,126.032615 375.928,127.617846 374.342769,127.935385 C373.521776,128.104571 372.667707,127.911293 371.999553,127.405108 C371.331398,126.898923 370.914141,126.129062 370.854769,125.292923 C370.222154,121.176 369.747077,117.052923 369.429538,114.833846 Z M421.211692,165.617846 C418.728,165.406154 416.244308,165.194462 413.704,164.931077 C412.911907,164.916541 412.165237,164.558464 411.65802,163.949898 C411.150802,163.341332 410.933119,162.542364 411.061538,161.760615 C411.25497,160.194855 412.661953,159.069159 414.232,159.224 C415.817231,159.329846 417.402462,159.593231 418.987692,159.699077 C442.573465,160.946093 463.327544,144.26513 467.182154,120.963077 C468.250666,114.615745 467.962495,108.114064 466.336615,101.886154 C465.860308,99.9304615 466.6,98.4510769 468.396923,97.976 C469.184736,97.809473 470.006342,97.9761604 470.666966,98.4365462 C471.327591,98.896932 471.768411,99.6100229 471.884923,100.406769 C473.350959,106.113881 473.85018,112.026331 473.361846,117.898462 C470.897034,144.882037 448.300153,165.55612 421.204308,165.617846 L421.211692,165.617846 Z M397.542769,151.930462 C397.49929,158.125763 392.446574,163.115387 386.251215,163.08102 C380.055856,163.046653 375.058806,158.00128 375.084062,151.805877 C375.109318,145.610474 380.147336,140.60601 386.342769,140.622154 C392.53213,140.713879 397.510612,145.740504 397.542769,151.930462 Z M386.234462,157.372923 C388.823074,157.369825 391.050623,155.542274 391.559424,153.004155 C392.068225,150.466037 390.7172,147.92111 388.329794,146.920501 C385.942389,145.919892 383.180573,146.741044 381.727665,148.883469 C380.274757,151.025893 380.533613,153.895547 382.346462,155.743385 C383.370717,156.787276 384.771995,157.375023 386.234462,157.374154 L386.234462,157.372923 Z M368.478154,154.784615 C367.739692,154.784615 366.945846,154.837538 366.206154,154.784615 C364.697677,154.640788 363.563131,153.345474 363.6193,151.831197 C363.675469,150.31692 364.902859,149.109217 366.417846,149.077538 C367.791385,149.024615 369.217846,149.024615 370.592615,149.077538 C372.084567,149.112392 373.30158,150.283419 373.393846,151.772923 C373.45653,153.320661 372.29413,154.645483 370.751385,154.784615 C369.994565,154.837533 369.234974,154.837533 368.478154,154.784615 Z M377.993231,140.411692 C378.127219,141.617044 377.494022,142.777741 376.408,143.317538 C375.443568,143.88491 374.221817,143.756593 373.396308,143.001231 C372.203935,141.940763 371.074621,140.81145 370.014154,139.619077 C369.109448,138.527957 369.178067,136.928986 370.172923,135.919385 C371.051502,134.857337 372.608906,134.671596 373.712615,135.497231 C375.071374,136.652713 376.343317,137.906556 377.518154,139.248615 C377.784041,139.583156 377.948863,139.986669 377.993231,140.411692 Z M404.202462,149.130462 C404.995077,149.130462 405.787692,149.077538 406.580308,149.130462 C407.893241,149.285249 408.912357,150.348742 409.011077,151.667077 C409.213587,153.024278 408.340128,154.309564 407.003692,154.620923 C405.124875,154.831839 403.228356,154.831839 401.349538,154.620923 C400.012108,154.302463 399.125624,153.032277 399.288,151.667077 C399.399073,150.314819 400.472357,149.241535 401.824615,149.130462 C402.616348,149.077569 403.410729,149.077569 404.202462,149.130462 Z M389.194462,169.797538 C389.194462,170.536 389.247385,171.224 389.194462,171.963692 C389.137532,173.469284 387.899898,174.660153 386.393231,174.659077 C384.893783,174.700225 383.620772,173.568421 383.486154,172.074462 C383.380557,170.561635 383.380557,169.043288 383.486154,167.530462 C383.604017,166.021991 384.876752,164.866531 386.38956,164.894588 C387.902368,164.922646 389.131383,166.124504 389.193231,167.636308 L389.193231,169.802462 L389.194462,169.797538 Z M400.398154,168.789538 C398.552,168.789538 394.691077,164.932308 394.691077,163.082462 C394.711294,162.016007 395.321745,161.048893 396.275783,160.571874 C397.229821,160.094855 398.369783,160.186762 399.235077,160.810462 C400.458055,161.874787 401.605828,163.022561 402.670154,164.245538 C403.411372,165.082358 403.518775,166.305252 402.934769,167.258462 C402.451653,168.212122 401.467083,168.806877 400.398154,168.790769 L400.398154,168.789538 Z M389.194462,134.175385 C389.194462,134.862154 389.247385,135.548923 389.194462,136.184 C389.131902,137.686031 387.91773,138.883546 386.414978,138.925352 C384.912227,138.967158 383.633355,137.838999 383.487385,136.342769 C383.408043,134.846384 383.408043,133.346846 383.487385,131.850462 C383.604582,130.348287 384.887638,129.207068 386.393231,129.265846 C387.908253,129.243804 389.15816,130.446483 389.194462,131.961231 C389.247385,132.696 389.194462,133.435692 389.194462,134.175385 Z M394.689846,141.150154 C394.689846,138.984 398.495385,135.072615 400.291077,135.072615 C401.394282,135.028326 402.415087,135.654419 402.875692,136.657846 C403.482623,137.658625 403.330379,138.944071 402.506462,139.775385 C401.499039,140.914856 400.422548,141.991346 399.283077,142.998769 C398.470106,143.771802 397.247018,143.921752 396.271385,143.368 C395.383646,142.967018 394.77971,142.120097 394.689846,141.150154 Z M377.990769,162.816615 C377.937846,164.984 374.080615,168.847385 372.283692,168.788308 C371.175161,168.8397 370.156252,168.181686 369.747077,167.150154 C369.223503,166.16828 369.371133,164.96362 370.116308,164.137231 C371.120615,163.029538 372.230769,161.971077 373.340923,160.913846 C374.183943,160.114545 375.452051,159.964355 376.458462,160.544615 C377.350665,160.95963 377.940304,161.833907 377.990769,162.816615 Z M388.665231,100.248 C388.666705,94.8552807 390.640044,89.6492193 394.213538,85.6104615 C395.641397,84.0237503 397.631971,83.0567233 399.761846,82.9150769 C400.344,82.8621538 400.977846,82.8621538 401.558769,82.8092308 C405.786462,82.3341538 408.481846,84.1298462 409.961231,88.1470769 C411.068923,91.2116923 412.545846,94.1187692 413.819692,97.1316923 C415.193231,100.249231 414.347692,102.944615 412.444923,105.481231 C411.802911,106.345257 411.11516,107.174338 410.384615,107.964923 C410.155437,108.146406 410.013338,108.416057 409.993193,108.707695 C409.973048,108.999333 410.076721,109.28596 410.278769,109.497231 C414.605099,115.891992 420.574242,121.003177 427.558769,124.293538 C427.839999,124.502164 428.196779,124.581122 428.539776,124.510643 C428.882773,124.440164 429.179512,124.226921 429.355692,123.924308 C430.624615,122.339077 431.940308,120.806769 433.265846,119.221538 C434.728912,117.28918 437.400312,116.745621 439.502154,117.952615 C443.465231,119.855385 447.379077,121.758154 451.339692,123.659692 C453.552811,124.48323 454.848116,126.784086 454.404308,129.103385 C454.229722,130.845553 453.947335,132.575227 453.558769,134.282462 C452.820308,137.236308 450.547077,139.038154 448.220923,140.623385 C442.460923,144.428923 436.224615,144.904 429.724923,142.737846 C414.452888,137.901123 401.565044,127.485727 393.631385,113.568615 C391.466095,110.228245 389.876063,106.54854 388.927385,102.682462 C388.786317,101.877657 388.69874,101.064387 388.665231,100.248 Z M394.372308,100.142154 C394.451427,102.239138 395.03127,104.286734 396.063385,106.113846 C403.144,120.540923 414.032615,130.792 429.091077,136.499077 C432.630769,137.819692 436.277538,138.876923 440.136,137.976 C442.700017,137.378926 445.05529,136.100726 446.953231,134.276308 C448.275077,133.008615 448.169231,131.423385 448.485538,129.889846 C448.605717,129.617914 448.605405,129.307863 448.48468,129.036173 C448.363955,128.764482 448.134056,128.556448 447.851692,128.463385 C444.628308,126.931077 441.404923,125.398769 438.181538,123.813538 C437.954403,123.652352 437.669629,123.594902 437.397767,123.65542 C437.125905,123.715938 436.892391,123.888762 436.755077,124.131077 C435.539077,125.608 434.324308,127.084923 433.109538,128.516308 C431.048,131.052923 429.304,131.423385 426.292308,130.154462 C417.585478,126.380214 410.192993,120.10945 405.049231,112.134769 C403.040615,109.180923 403.252308,107.273231 405.683077,104.683692 C406.646156,103.67567 407.511562,102.578665 408.267692,101.407385 C408.583543,100.766134 408.640398,100.027899 408.426462,99.3458462 C407.318769,96.5975385 406.100308,93.8504615 404.885538,91.1550769 C403.777846,88.6713846 403.777846,88.6184615 400.975385,88.7772308 C400.039136,88.757376 399.13104,89.0979669 398.438769,89.7286154 C395.845117,92.5780438 394.395988,96.2854639 394.369846,100.138462 L394.372308,100.142154 Z M458.843692,93.2153846 C448.45341,93.1248907 439.766961,85.2897608 438.609007,74.963808 C437.451053,64.6378553 444.186302,55.0733335 454.298462,52.6836923 C456.144615,52.2086154 457.363077,52.5249231 458.156923,53.7409231 C458.872431,54.9449661 458.699409,56.4780265 457.733538,57.4923077 C455.574126,60.4598357 454.933359,64.2690851 456.003044,67.7797913 C457.072729,71.2904974 459.728731,74.0952463 463.176,75.3544615 C466.92784,76.8365828 471.182845,76.2343359 474.376,73.7692308 C476.437538,72.3427692 478.815385,73.1353846 479.184615,75.4073846 C479.22848,75.8328541 479.192584,76.2627729 479.078769,76.6750769 C477.17288,86.3275766 468.682413,93.2677502 458.843692,93.2153846 Z\" id=\"pack2_phone\"></path>
            </g>
        </g>
    </g>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/ITIcons/pack2_phone.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/blockreassurance/views/img/ITIcons/pack2_phone.svg", "/var/www/html/modules/blockreassurance/views/img/ITIcons/pack2_phone.svg");
    }
}
