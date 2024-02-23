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

/* @Modules/ps_themecusto/translations/es.php */
class __TwigTemplate_6948aa531bbd913e9917434080717747 extends Template
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
        echo "<?php

global \$_MODULE;
\$_MODULE = [];
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_95db0d5190e9cdbed521ecf6ea2373ca'] = 'Personalización del tema';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_c3db892b3555ae0538402754d0c375d0'] = 'Configura y personaliza fácilmente el tema de tu página de inicio y los principales módulos nativos. Funcionalidad disponible en la página Diseño > Tema y logo.';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_f87b9438e8de65a83e7a3ef56a9d23fb'] = 'Se ha producido un error durante la instalación. Ponte en contacto con nosotros a través del sitio web de Addons';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_483e3e074a5d95afb68e454b8f675ddb'] = 'Se ha producido un error durante la desinstalación. Ponte en contacto con nosotros a través del sitio web de Addons';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_c7e728f436eee2692d6c6f756621a70e'] = 'Se ha producido un error, por favor revisa tu archivo comprimido';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_7bdb8c4b5d9ade9ec5b5b84c0486fafa'] = 'El archivo no es válido.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_398744273abd0c569268859a4823c1dd'] = 'Asegúrate de comprimir los archivos de tu tema editado directamente en el directorio raá­z de tu tema subordinado antes de cargarlo.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_25e1f8db54571babe546ace313723927'] = 'Solo se puede incluir archivos CSS, YML y PNG en el ZIP.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_b132585b3eaed4cfca783ccabbb12bb1'] = 'Hay PHP archivos en el archivo comprimido';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_6b39dec7aaea7436f961638f45b9b38f'] = 'El tema ya existe o el nombre principal que aparece en el archivo de configuración es erróneo';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_77983919a6fbfc68624b1365066c2fed'] = 'Tienes que introducir el nombre del tema principal en el archivo tema.yml. Además, el nombre principal debe ser el del tema principal actual.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_7e46d7414693424b67f64eb9a804e95d'] = 'Se ha añadido correctamente el tema subordinado.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_a27dfe771799a09fd55fea73286eb6ab'] = 'Desinstalar';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_349838fb1d851d3e2014b9fe39203275'] = 'Instalar';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_f1206f9fadc5ce41694f69129aecac26'] = 'Configurar';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_2faec1f9f8cc7f8f40d521c4dd574f49'] = 'Activar';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_bcfaccebf745acfd5e75351095a5394a'] = 'Desactivar';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_038bd38b5172a9ba90468070bdc4d4f3'] = 'Desactivar móvil';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_8b1a3613ac33a07ab788b2656755110c'] = 'Activar móvil';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_526d688f37a86d3c3f27d0c5016eb71d'] = 'Reiniciar';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_b61541208db7fa7dba42c85224405911'] = 'Menú';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_2d9b9a764fb0be4be10e1b2fce63f561'] = 'Carrusel';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_4c9a5b9683fc96c83f62635c954e808a'] = 'Productos de la página de inicio';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_7ef25f7b93adc8bf024ed532d722f697'] = 'Bloque de texto';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_6ff29916f99fff9d2494d28e721ae77e'] = 'Banner';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_189b43cdd11a8e8db346c4d4885c7fed'] = 'Redes sociales y boletá­n';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_ded40f2a77c30efc6062db0cbd857746'] = 'Pie de página';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_af1b98adf7f686b84cd0b443e022b7a0'] = 'Crear y gestionar categorías de productos';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_60328687faec0cab8613aa9d796cc0fe'] = 'Crea una amplia gama de categorías y subcategorías para clasificar tus productos y gestionar fácilmente tu catálogo.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_8b12d77641baf3ee673f6508bde7b707'] = 'Crear páginas de contenido';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_3c0d599de9d0dcab37829c7eb7f8e522'] = 'Añade y gestiona tus páginas de contenido (páginas CMS: Condiciones de uso, Nuestras tiendas, Sobre nosotros, etc.) como quieras.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_d928b386dd4043c0a72c435eb1cfffa7'] = 'Crear páginas de marcas y proveedores';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_f5f52d2a02db811858558a879a352e54'] = 'Este apartado te permite crear y gestionar tus páginas de marcas y proveedores.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_7cd5fa3f9e9e911c6b60b9044436d227'] = 'Detalles de la tienda';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_c15614439ecc7d478eec1e4e12edc85b'] = 'Muestra información adicional sobre tu tienda o sobre la forma de contacto para que a tus clientes les resulte más fácil hablar contigo.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_4b8a74f166975e0d8c67e68e0590ce10'] = 'La acción en el módulo se ha completado correctamente';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_80149ff14c961109480be108c06e80e9'] = 'La acción en el módulo ha fallado';
\$_MODULE['<{ps_themecusto}prestashop>page_791d9c090acf71156d40d9c57157c77b'] = 'Se ha desactivado el módulo %s';
\$_MODULE['<{ps_themecusto}prestashop>index_abccb80adfe3d53a54e87842d9334938'] = 'Personalización avanzada';
\$_MODULE['<{ps_themecusto}prestashop>index_e1135a82239026c7b92d9e897d47d222'] = 'Puedes editar tu tema mediante la funcionalidad de tema principal/subordinado';
\$_MODULE['<{ps_themecusto}prestashop>index_7ab2c451410ad06638de9434c52f65e6'] = 'Solo uso avanzado.';
\$_MODULE['<{ps_themecusto}prestashop>index_d84abdd10f2d2d71421ee3e170e0dc4c'] = 'El equipo de soporte no podrá ayudarte con los problemas debidos a la modificación de tu tema subordinado.';
\$_MODULE['<{ps_themecusto}prestashop>index_fed862396f1f8eeef3dc2de2d0a6acb0'] = 'Descargar tu tema actual ';
\$_MODULE['<{ps_themecusto}prestashop>index_ea9cc7f52bb2ea1205e4129d3c362745'] = '¿Has seleccionado un tema, pero te gustaría hacerle algunos ajustes? Usa un tema subordinado: ¡te permitirá conservar las partes que desees y personalizar el resto!';
\$_MODULE['<{ps_themecusto}prestashop>index_6518fce96e9f5c0e9aefa03a77a52fa2'] = 'Editar tu tema subordinado';
\$_MODULE['<{ps_themecusto}prestashop>index_08d370b6a89f63d62b7b4eff96720690'] = 'Una vez credo el tema subordinado, el siguiente paso es sencillo: aplica los cambios que quieras en los archivos deseados para efectuar la personalización manteniendo la funcionalidad y el aspecto del tema principal';
\$_MODULE['<{ps_themecusto}prestashop>index_b2fa5e05a1326d68a2205dfedbbe172f'] = 'Cargar tu tema subordinado';
\$_MODULE['<{ps_themecusto}prestashop>index_563b7dfacb0fd4e3951885b477f1dc79'] = 'Como solo modificas el tema subordinado, podrás actualizar fácilmente el principal sin perder la personalización.';
\$_MODULE['<{ps_themecusto}prestashop>index_a25c753ee3e4be15ec0daa5a40deb7b8'] = 'Se ha producido un error';
\$_MODULE['<{ps_themecusto}prestashop>index_90b89dfb6ce7a8368b1e36050f4419c3'] = 'Por favor comprueba que tienes permisos de escritura en las carpetas /app/cache/ y /themes/.';
\$_MODULE['<{ps_themecusto}prestashop>index_2e0cc8edc76bb0e55a9912012b824119'] = 'Descargar tema';
\$_MODULE['<{ps_themecusto}prestashop>index_c7e71badf20a04f36d11be557ceb7a5b'] = 'Descargando';
\$_MODULE['<{ps_themecusto}prestashop>index_5b944026692d208f651ccee464180a5a'] = 'Cómo utilizar los temas principales/subordinados';
\$_MODULE['<{ps_themecusto}prestashop>index_818e5c22853d1cea07ded7cb82e137c2'] = 'Cargar tema subordinado';
\$_MODULE['<{ps_themecusto}prestashop>index_a82be0f551b8708bc08eb33cd9ded0cf'] = 'Información';
\$_MODULE['<{ps_themecusto}prestashop>index_5195aacc657bf8c980eb34b1cc2773dc'] = 'Al utilizar este método, solo podrás sobrescribir el CSS de tu tema.';
\$_MODULE['<{ps_themecusto}prestashop>index_a4948128259baac74a6e50aa5f7d6dfc'] = 'Al utilizar este método, podrás sobrescribir el CSS y el html de tu tema y añadir etiquetas estadísticas.';
\$_MODULE['<{ps_themecusto}prestashop>index_398744273abd0c569268859a4823c1dd'] = 'Asegúrate de comprimir los archivos de tu tema editado directamente en el directorio raá­z de tu tema subordinado antes de cargarlo.';
\$_MODULE['<{ps_themecusto}prestashop>index_8ab4ab192bbbd5d5e2be4061ed32fa76'] = 'Una vez cargado, el tema subordinado estará disponible en tu sección Tema y logo';
\$_MODULE['<{ps_themecusto}prestashop>modal_818e5c22853d1cea07ded7cb82e137c2'] = 'Cargar tema subordinado';
\$_MODULE['<{ps_themecusto}prestashop>modal_24c7cfc7a44dee945b7e52f1c9df09a1'] = 'Suelta el archivo de tu tema subordinado aquá­ o';
\$_MODULE['<{ps_themecusto}prestashop>modal_ec2dab4ec46156a390cbe0652004f410'] = 'selecciona un archivo';
\$_MODULE['<{ps_themecusto}prestashop>modal_2c5b5cb39879603f5ecbcc0e63d91928'] = 'Carga un solo archivo en formato .zip cada vez. Tu tema subordinado se instalará justo después.';
\$_MODULE['<{ps_themecusto}prestashop>modal_824e2fcb263ee94399a6a261ee1ec7c1'] = 'Vaya... La carga ha fallado.';
\$_MODULE['<{ps_themecusto}prestashop>modal_fa692d85f08c92a585ed8b3fed7f1d52'] = '¿Qué ha pasado?';
\$_MODULE['<{ps_themecusto}prestashop>modal_c69732cc923305ac0684ac8fc05a4bca'] = 'Se ha producido un error.';
\$_MODULE['<{ps_themecusto}prestashop>modal_f915a95e609bbd517a8a1e7bdcceef37'] = 'Inténtalo de nuevo';
\$_MODULE['<{ps_themecusto}prestashop>index_d870f342dc67dbd123d09f0e0021b94a'] = 'Cambia los colores, la tipografía y la posición de tu logo';
\$_MODULE['<{ps_themecusto}prestashop>index_8e76275236fbf24dc81757217865154f'] = 'Utiliza el módulo de configuración de temas para personalizar los principales elementos gráficos de tu sitio web: colores, botones, tipografía o posición del logo.';
\$_MODULE['<{ps_themecusto}prestashop>index_f1206f9fadc5ce41694f69129aecac26'] = 'Configurar';
\$_MODULE['<{ps_themecusto}prestashop>index_fd0b96315f3fce324c4eff21f4cdce73'] = 'Mapa de los principales módulos del tema';
\$_MODULE['<{ps_themecusto}prestashop>index_177b5a89de341b08186e5f5d45aa8292'] = 'No hay módulos para esta sección';
\$_MODULE['<{ps_themecusto}prestashop>index_0fae3206c90bed3220123bb3d760fb4c'] = 'Puedes instalar un módulo para esta sección desde nuestra Selección de módulos';
\$_MODULE['<{ps_themecusto}prestashop>index_573b936f93b0f7f5096571aaf26e75cd'] = 'Ver la selección de módulos';
\$_MODULE['<{ps_themecusto}prestashop>index_400da42ad45e249c461b393547c54410'] = 'Ver todos los módulos del tema';
\$_MODULE['<{ps_themecusto}prestashop>modal_10ad116a3eb7b6e5382ada40c393102c'] = '¿Desinstalar el módulo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_16c65b710bd0c33e9439b2603ee6e672'] = '¿Desactivar el módulo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_8916ba4927ba1516017e5ddb6409fac0'] = '¿Reiniciar el módulo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_415864b61985d1b9f33349d3cf06fdb8'] = 'Estás a punto de desinstalar';
\$_MODULE['<{ps_themecusto}prestashop>modal_7b8ae1ac729d88c81eb90e0a3baf98e8'] = 'Esta operación desactivará el módulo de forma definitiva.';
\$_MODULE['<{ps_themecusto}prestashop>modal_7cc71badb9baf22d34e0637e8f038f82'] = 'Estás a punto de desactivar ';
\$_MODULE['<{ps_themecusto}prestashop>modal_c5209889e18199fb2a2c50958d3212b8'] = 'Se guardarán tus opciones actuales, pero el módulo dejará de estar activo.';
\$_MODULE['<{ps_themecusto}prestashop>modal_99d1b10bb171e0edf59948d0cb23dafe'] = 'Estás a punto de reiniciar ';
\$_MODULE['<{ps_themecusto}prestashop>modal_58ce7123c3789e3c51cb3ffd42883df1'] = 'Esta operación restaurará las opciones predeterminadas.';
\$_MODULE['<{ps_themecusto}prestashop>modal_36fbfc01d63e4b57d18991077535c6e0'] = 'Esta acción no se puede deshacer.';
\$_MODULE['<{ps_themecusto}prestashop>modal_ea4788705e6873b424c65e91c2846b19'] = 'Cancelar';
\$_MODULE['<{ps_themecusto}prestashop>modal_b8551bde0a3a5cee1ab95a3b64c09863'] = 'Sí, desinstalar el módulo';
\$_MODULE['<{ps_themecusto}prestashop>modal_8ffc312c0ad3aebfa25b900f353d4650'] = 'Sí, desactivar el módulo';
\$_MODULE['<{ps_themecusto}prestashop>modal_ae89782365cf87322e7a400afb448cb5'] = 'Sí, reiniciar el módulo';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_f1206f9fadc5ce41694f69129aecac26'] = 'Configurar';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_bcfaccebf745acfd5e75351095a5394a'] = 'Desactivar';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_2faec1f9f8cc7f8f40d521c4dd574f49'] = 'Activar';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_a27dfe771799a09fd55fea73286eb6ab'] = 'Desinstalar';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_526d688f37a86d3c3f27d0c5016eb71d'] = 'Reiniciar';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_9be8056e65ba01c83ca85c4552f86abe'] = 'Desactivar móvil';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_4c9cf94737c0f429f2e85d2c100950f2'] = 'Activar móvil';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_349838fb1d851d3e2014b9fe39203275'] = 'Instalar';
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/translations/es.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/translations/es.php", "/var/www/html/modules/ps_themecusto/translations/es.php");
    }
}
