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

/* @Modules/ps_themecusto/translations/fr.php */
class __TwigTemplate_a10331c897ba5222b17a58997f12aa38 extends Template
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
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_95db0d5190e9cdbed521ecf6ea2373ca'] = 'Personnalisation de thème';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_c3db892b3555ae0538402754d0c375d0'] = 'Configurez et personnalisez facilement le thème de votre page d\\'accueil et vos principaux modules natifs. Fonctionnalité disponible dans la page Apparence > Theme & Logo.';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_f87b9438e8de65a83e7a3ef56a9d23fb'] = 'Une erreur est survenue pendant l\\'installation. Veuillez nous contacter via le site PrestaShop Addons';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_483e3e074a5d95afb68e454b8f675ddb'] = 'Une erreur est survenue pendant la désinstallation. Veuillez nous contacter via le site PrestaShop Addons';
\$_MODULE['<{ps_themecusto}prestashop>page_791d9c090acf71156d40d9c57157c77b'] = 'Le module %s a été désactivé';
\$_MODULE['<{ps_themecusto}prestashop>index_abccb80adfe3d53a54e87842d9334938'] = 'Personnalisation avancée';
\$_MODULE['<{ps_themecusto}prestashop>index_e1135a82239026c7b92d9e897d47d222'] = 'Vous pouvez modifier votre thème en utilisant la fonctionnalité thème parent/enfant';
\$_MODULE['<{ps_themecusto}prestashop>index_7ab2c451410ad06638de9434c52f65e6'] = 'Cette fonctionnalité s\\'adresse uniquement aux utilisateurs avancés.';
\$_MODULE['<{ps_themecusto}prestashop>index_d84abdd10f2d2d71421ee3e170e0dc4c'] = 'L\\'équipe support est en droit de refuser de vous aider sur des problèmes liés à  la modification de votre thème.';
\$_MODULE['<{ps_themecusto}prestashop>index_fed862396f1f8eeef3dc2de2d0a6acb0'] = 'Télécharger votre thème actuel';
\$_MODULE['<{ps_themecusto}prestashop>index_ea9cc7f52bb2ea1205e4129d3c362745'] = 'Vous avez choisi un thème mais souhaitez y apporter quelques modifications ? Utilisez un thème enfant, cela vous permettra de garder les éléments que vous souhaitez et customiser les autres !';
\$_MODULE['<{ps_themecusto}prestashop>index_6518fce96e9f5c0e9aefa03a77a52fa2'] = 'Modifier votre thème enfant';
\$_MODULE['<{ps_themecusto}prestashop>index_08d370b6a89f63d62b7b4eff96720690'] = 'Une fois le thème enfant créé, l\\'étape suivante est simple : appliquez les modifications dans les fichiers souhaités, cela permettra d\\'apporter de la personnalisation à  votre thème tout en gardant son style et ses fonctionnalités.';
\$_MODULE['<{ps_themecusto}prestashop>index_b2fa5e05a1326d68a2205dfedbbe172f'] = 'Importer votre thème enfant';
\$_MODULE['<{ps_themecusto}prestashop>index_563b7dfacb0fd4e3951885b477f1dc79'] = 'Vos modifications ne touchent que le thème enfant, ce qui signifie que vous pouvez mettre à  jour facilement votre thème parent tout en gardant votre customisation.';
\$_MODULE['<{ps_themecusto}prestashop>index_a25c753ee3e4be15ec0daa5a40deb7b8'] = 'Une erreur est survenue.';
\$_MODULE['<{ps_themecusto}prestashop>index_90b89dfb6ce7a8368b1e36050f4419c3'] = 'Veuillez vérifier que vous avez les droits d\\'écriture sur les dossiers /app/cache/ et /themes/.';
\$_MODULE['<{ps_themecusto}prestashop>index_2e0cc8edc76bb0e55a9912012b824119'] = 'Télécharger le thème';
\$_MODULE['<{ps_themecusto}prestashop>index_c7e71badf20a04f36d11be557ceb7a5b'] = 'Téléchargement en cours';
\$_MODULE['<{ps_themecusto}prestashop>index_5b944026692d208f651ccee464180a5a'] = 'Comment utiliser les thèmes parent/enfant';
\$_MODULE['<{ps_themecusto}prestashop>index_818e5c22853d1cea07ded7cb82e137c2'] = 'Importer thème enfant';
\$_MODULE['<{ps_themecusto}prestashop>index_a82be0f551b8708bc08eb33cd9ded0cf'] = 'Informations';
\$_MODULE['<{ps_themecusto}prestashop>index_5195aacc657bf8c980eb34b1cc2773dc'] = 'En utilisant cette méthode vous pouvez seulement overrider le CSS de votre thème.';
\$_MODULE['<{ps_themecusto}prestashop>index_a4948128259baac74a6e50aa5f7d6dfc'] = 'En utilisant cette méthode vous pouvez overrider le CSS et le html de votre thème, et ajouter des tags analytics.';
\$_MODULE['<{ps_themecusto}prestashop>index_8ab4ab192bbbd5d5e2be4061ed32fa76'] = 'Une fois importé, le thème enfant sera disponible dans votre section Thème & Logo.';
\$_MODULE['<{ps_themecusto}prestashop>modal_818e5c22853d1cea07ded7cb82e137c2'] = 'Importer thème enfant';
\$_MODULE['<{ps_themecusto}prestashop>modal_24c7cfc7a44dee945b7e52f1c9df09a1'] = 'Glissez l\\'archive de votre module ici ou';
\$_MODULE['<{ps_themecusto}prestashop>modal_ec2dab4ec46156a390cbe0652004f410'] = 'sélectionnez un fichier';
\$_MODULE['<{ps_themecusto}prestashop>modal_2c5b5cb39879603f5ecbcc0e63d91928'] = 'Veuillez charger un seul fichier à  la fois au format.zip. Votre module sera installé juste après.';
\$_MODULE['<{ps_themecusto}prestashop>modal_824e2fcb263ee94399a6a261ee1ec7c1'] = 'Aïe... le chargement a échoué.';
\$_MODULE['<{ps_themecusto}prestashop>modal_fa692d85f08c92a585ed8b3fed7f1d52'] = 'Que s\\'est-il passé ?';
\$_MODULE['<{ps_themecusto}prestashop>modal_c69732cc923305ac0684ac8fc05a4bca'] = 'Une erreur est survenue.';
\$_MODULE['<{ps_themecusto}prestashop>modal_f915a95e609bbd517a8a1e7bdcceef37'] = 'Réessayer';
\$_MODULE['<{ps_themecusto}prestashop>modal_10ad116a3eb7b6e5382ada40c393102c'] = 'Désinstaller le module ?';
\$_MODULE['<{ps_themecusto}prestashop>modal_16c65b710bd0c33e9439b2603ee6e672'] = 'Désactiver le module ?';
\$_MODULE['<{ps_themecusto}prestashop>modal_8916ba4927ba1516017e5ddb6409fac0'] = 'Réinitialiser le module ?';
\$_MODULE['<{ps_themecusto}prestashop>modal_415864b61985d1b9f33349d3cf06fdb8'] = 'Vous êtes sur le point de désinstaller';
\$_MODULE['<{ps_themecusto}prestashop>modal_7b8ae1ac729d88c81eb90e0a3baf98e8'] = 'Cette action désactivera définitivement le module.';
\$_MODULE['<{ps_themecusto}prestashop>modal_7cc71badb9baf22d34e0637e8f038f82'] = 'Vous êtes sur le point de désactiver';
\$_MODULE['<{ps_themecusto}prestashop>modal_c5209889e18199fb2a2c50958d3212b8'] = 'Vos réglages actuels seront conservés mais le module ne sera plus actif.';
\$_MODULE['<{ps_themecusto}prestashop>modal_99d1b10bb171e0edf59948d0cb23dafe'] = 'Vous êtes sur le point de réinitialiser';
\$_MODULE['<{ps_themecusto}prestashop>modal_58ce7123c3789e3c51cb3ffd42883df1'] = 'Cette action restaurera les paramètres par défaut.';
\$_MODULE['<{ps_themecusto}prestashop>modal_36fbfc01d63e4b57d18991077535c6e0'] = 'Cette action ne peut pas être annulée.';
\$_MODULE['<{ps_themecusto}prestashop>modal_ea4788705e6873b424c65e91c2846b19'] = 'Annuler';
\$_MODULE['<{ps_themecusto}prestashop>modal_b8551bde0a3a5cee1ab95a3b64c09863'] = 'Oui, désinstaller le module';
\$_MODULE['<{ps_themecusto}prestashop>modal_8ffc312c0ad3aebfa25b900f353d4650'] = 'Oui, désactiver le module';
\$_MODULE['<{ps_themecusto}prestashop>modal_ae89782365cf87322e7a400afb448cb5'] = 'Oui, réinitialiser le module';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_f1206f9fadc5ce41694f69129aecac26'] = 'Configurer';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_bcfaccebf745acfd5e75351095a5394a'] = 'Désactiver';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_2faec1f9f8cc7f8f40d521c4dd574f49'] = 'Activer';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_a27dfe771799a09fd55fea73286eb6ab'] = 'Désinstaller';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_526d688f37a86d3c3f27d0c5016eb71d'] = 'Réinitialiser';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_9be8056e65ba01c83ca85c4552f86abe'] = 'Désactiver sur mobile';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_4c9cf94737c0f429f2e85d2c100950f2'] = 'Activer sur mobile';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_349838fb1d851d3e2014b9fe39203275'] = 'Installer';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_a27dfe771799a09fd55fea73286eb6ab'] = 'Désinstaller';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_349838fb1d851d3e2014b9fe39203275'] = 'Installer';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_f1206f9fadc5ce41694f69129aecac26'] = 'Configurer';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_2faec1f9f8cc7f8f40d521c4dd574f49'] = 'Activer';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_bcfaccebf745acfd5e75351095a5394a'] = 'Désactiver';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_038bd38b5172a9ba90468070bdc4d4f3'] = 'Désactiver sur mobile';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_8b1a3613ac33a07ab788b2656755110c'] = 'Activer sur mobile';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_526d688f37a86d3c3f27d0c5016eb71d'] = 'Réinitialiser';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_b61541208db7fa7dba42c85224405911'] = 'Menu';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_2d9b9a764fb0be4be10e1b2fce63f561'] = 'Diaporama';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_4c9a5b9683fc96c83f62635c954e808a'] = 'Produits en page d\\'accueil';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_7ef25f7b93adc8bf024ed532d722f697'] = 'Bloc de texte';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_6ff29916f99fff9d2494d28e721ae77e'] = 'Bannière';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_189b43cdd11a8e8db346c4d4885c7fed'] = 'Newsletter & Réseaux Sociaux';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_ded40f2a77c30efc6062db0cbd857746'] = 'Footer';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_af1b98adf7f686b84cd0b443e022b7a0'] = 'Créer des catégories de produits';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_60328687faec0cab8613aa9d796cc0fe'] = 'Créez un ensemble de catégories et sous-catégories pour classer vos produits et les gérer en toute simplicité.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_8b12d77641baf3ee673f6508bde7b707'] = 'Créer des pages de contenu';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_3c0d599de9d0dcab37829c7eb7f8e522'] = 'Ajoutez et gérez vos pages de contenu “CMS” (CGV, Livraison, A propos, etc.) comme vous le souhaitez.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_d928b386dd4043c0a72c435eb1cfffa7'] = 'Créer des pages Marques et Fournisseurs';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_f5f52d2a02db811858558a879a352e54'] = 'Cette page vous permet de créer et de gérer vos pages Marques et/ou Fournisseurs.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_7cd5fa3f9e9e911c6b60b9044436d227'] = 'Détails de la boutique';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_c15614439ecc7d478eec1e4e12edc85b'] = 'Ajoutez des informations additionnelles sur votre boutique ou sur vos moyens de contact pour permettre à  vos clients de vous joindre plus facilement.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_1826a0766c2f533def4675c3299a1751'] = 'Créez un ensemble de catégories et sous-catégories pour classer vos produits et les gérer en toute simplicité.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_4b8a74f166975e0d8c67e68e0590ce10'] = 'L\\'action sur le module a été correctement réalisée';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_80149ff14c961109480be108c06e80e9'] = 'L\\'action sur le module a échoué';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_c7e728f436eee2692d6c6f756621a70e'] = 'Une erreur est survenue, veuillez vérifier votre fichier zip';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_7bdb8c4b5d9ade9ec5b5b84c0486fafa'] = 'Le fichier n\\'est pas valide.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_398744273abd0c569268859a4823c1dd'] = 'Vérifiez que vous zippez les fichiers de thème modifiés directement à  la racine du dossier de votre thème enfant avant de l\\'importer.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_25e1f8db54571babe546ace313723927'] = 'Seuls les fichiers CSS, YML et PNG sont acceptés dans le zip.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_b132585b3eaed4cfca783ccabbb12bb1'] = 'Des fichiers PHP sont présents dans votre zip';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_6b39dec7aaea7436f961638f45b9b38f'] = 'Ce thème existe déjà  ou le nom du parent dans le fichier de configuration est erroné';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_77983919a6fbfc68624b1365066c2fed'] = 'Vous devez ajouter le nom du thème parent dans le fichier theme.yml. Celui-ci doit être celui du thème actif actuellement sur votre boutique.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_7e46d7414693424b67f64eb9a804e95d'] = 'Le thème enfant a été ajouté avec succès.';
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/translations/fr.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/translations/fr.php", "/var/www/html/modules/ps_themecusto/translations/fr.php");
    }
}