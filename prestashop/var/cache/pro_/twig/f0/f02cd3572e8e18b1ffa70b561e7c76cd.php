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

/* @Modules/ps_themecusto/translations/it.php */
class __TwigTemplate_7a703ab2bb979e7a4157d31520856715 extends Template
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
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_95db0d5190e9cdbed521ecf6ea2373ca'] = 'Personalizzazione del template grafico';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_c3db892b3555ae0538402754d0c375d0'] = 'Puoi configurare e personalizzare in modo semplice il template grafico e i principali moduli nativi della tua homepage. Funzione disponibile in Design > pagina Template grafico & Logo.';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_f87b9438e8de65a83e7a3ef56a9d23fb'] = 'Si è verificato un errore durante l\\'installazione. Ti preghiamo di contattarci attraverso il sito Addons';
\$_MODULE['<{ps_themecusto}prestashop>ps_themecusto_483e3e074a5d95afb68e454b8f675ddb'] = 'Si è verificato un errore durante la disinstallazione. Ti preghiamo di contattarci attraverso il sito Addons';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_c7e728f436eee2692d6c6f756621a70e'] = 'Si è verificato un errore, si prega di controllare il file zip';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_7bdb8c4b5d9ade9ec5b5b84c0486fafa'] = 'Il file non è valido.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_398744273abd0c569268859a4823c1dd'] = 'Prima di caricare i file di template grafico modificati, salvali in formato .zip direttamente a livello radice della cartella del template grafico child.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_25e1f8db54571babe546ace313723927'] = 'Solo i file CSS, YML e PNG sono accettati nello ZIP';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_b132585b3eaed4cfca783ccabbb12bb1'] = 'Ci sono alcuni file PHP nel tuo ZIP';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_6b39dec7aaea7436f961638f45b9b38f'] = 'Il template grafico esiste già , o il nome parent nel file config è errato';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_77983919a6fbfc68624b1365066c2fed'] = 'Devi inserire il nome del template grafico parent nel file theme.yml. Inoltre, il nome parent deve essere il template grafico parent attuale.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoadvanced_7e46d7414693424b67f64eb9a804e95d'] = 'Il template grafico child è stato aggiunto con successo.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_a27dfe771799a09fd55fea73286eb6ab'] = 'Disinstallare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_349838fb1d851d3e2014b9fe39203275'] = 'Installare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_f1206f9fadc5ce41694f69129aecac26'] = 'Configura';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_2faec1f9f8cc7f8f40d521c4dd574f49'] = 'Attivare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_bcfaccebf745acfd5e75351095a5394a'] = 'Disattivare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_038bd38b5172a9ba90468070bdc4d4f3'] = 'Disabilitare sul cellulare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_8b1a3613ac33a07ab788b2656755110c'] = 'Abilitare su cellulare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_526d688f37a86d3c3f27d0c5016eb71d'] = 'Resettare';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_b61541208db7fa7dba42c85224405911'] = 'Menu';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_2d9b9a764fb0be4be10e1b2fce63f561'] = 'Slider';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_4c9a5b9683fc96c83f62635c954e808a'] = 'Prodotti Home';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_7ef25f7b93adc8bf024ed532d722f697'] = 'Blocco di testo';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_6ff29916f99fff9d2494d28e721ae77e'] = 'Banner';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_189b43cdd11a8e8db346c4d4885c7fed'] = 'Social & Newsletter';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_ded40f2a77c30efc6062db0cbd857746'] = 'Footer';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_af1b98adf7f686b84cd0b443e022b7a0'] = 'Crea e gestisci Categorie prodotti';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_60328687faec0cab8613aa9d796cc0fe'] = 'Crea una lista completa di categorie e sottocategorie per classificare i tuoi prodotti e gestire in modo semplice il tuo catalogo.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_8b12d77641baf3ee673f6508bde7b707'] = 'Crea pagine di contenuto';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_3c0d599de9d0dcab37829c7eb7f8e522'] = 'Aggiungi e gestisci pagine di contenuto (pagine CMS: Termini e condizioni d\\'uso, I nostri negozi, Chi siamo ecc.) come preferisci.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_d928b386dd4043c0a72c435eb1cfffa7'] = 'Crea pagine di Marchi e Fornitori';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_f5f52d2a02db811858558a879a352e54'] = 'Questa pagina ti consente di creare e gestire le tue pagine su Marchi e/o Fornitori.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_7cd5fa3f9e9e911c6b60b9044436d227'] = 'Dettagli negozio';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_c15614439ecc7d478eec1e4e12edc85b'] = 'Visualizza informazioni aggiuntive sul tuo negozio o fai sapere ai tuoi clienti come possono contattarti.';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_4b8a74f166975e0d8c67e68e0590ce10'] = 'Azione sul modulo completata con successo';
\$_MODULE['<{ps_themecusto}prestashop>adminpsthemecustoconfiguration_80149ff14c961109480be108c06e80e9'] = 'Azione sul modulo non riuscita';
\$_MODULE['<{ps_themecusto}prestashop>page_791d9c090acf71156d40d9c57157c77b'] = 'Il modulo %s è stato disattivato';
\$_MODULE['<{ps_themecusto}prestashop>index_abccb80adfe3d53a54e87842d9334938'] = 'Personalizzazione avanzata';
\$_MODULE['<{ps_themecusto}prestashop>index_e1135a82239026c7b92d9e897d47d222'] = 'Puoi modificare il tuo template grafico usando la funzione template grafico parent/child';
\$_MODULE['<{ps_themecusto}prestashop>index_7ab2c451410ad06638de9434c52f65e6'] = 'Solo per utenti avanzati.';
\$_MODULE['<{ps_themecusto}prestashop>index_d84abdd10f2d2d71421ee3e170e0dc4c'] = 'Il team di supporto potrebbe non essere in grado di assisterti in caso di problemi creati dal tuo template grafico child.';
\$_MODULE['<{ps_themecusto}prestashop>index_fed862396f1f8eeef3dc2de2d0a6acb0'] = 'Scarica il tuo template grafico attuale ';
\$_MODULE['<{ps_themecusto}prestashop>index_ea9cc7f52bb2ea1205e4129d3c362745'] = 'Hai scelto un template grafico, ma vuoi apportare modifiche specifiche? Scegli un template grafico child: ti permetterà  di tenere le parti che vuoi e personalizzare le altre!';
\$_MODULE['<{ps_themecusto}prestashop>index_6518fce96e9f5c0e9aefa03a77a52fa2'] = 'Modifica il tuo template grafico child';
\$_MODULE['<{ps_themecusto}prestashop>index_08d370b6a89f63d62b7b4eff96720690'] = 'Una volta creato il template grafico child, il prossimo passo è semplice: modifica i file desiderati come vuoi; questa parte verrà  personalizzata senza problemi, mentre l\\'aspetto e le funzionalità  del template grafico parent verranno mantenuti.';
\$_MODULE['<{ps_themecusto}prestashop>index_b2fa5e05a1326d68a2205dfedbbe172f'] = 'Carica il tuo template grafico child';
\$_MODULE['<{ps_themecusto}prestashop>index_563b7dfacb0fd4e3951885b477f1dc79'] = 'Dato che stai modificando solo il template grafico child, puoi tranquillamente effettuare l\\'upgrade del template grafico parent senza perdere la tua personalizzazione.';
\$_MODULE['<{ps_themecusto}prestashop>index_a25c753ee3e4be15ec0daa5a40deb7b8'] = 'Si è verificato un errore.';
\$_MODULE['<{ps_themecusto}prestashop>index_90b89dfb6ce7a8368b1e36050f4419c3'] = 'Si prega di verificare di avere i diritti per scrivere nelle cartelle /app/cache/ e /themes/';
\$_MODULE['<{ps_themecusto}prestashop>index_2e0cc8edc76bb0e55a9912012b824119'] = 'Scarica template grafico';
\$_MODULE['<{ps_themecusto}prestashop>index_c7e71badf20a04f36d11be557ceb7a5b'] = 'Download in corso';
\$_MODULE['<{ps_themecusto}prestashop>index_5b944026692d208f651ccee464180a5a'] = 'Come usare i template grafici parent/child';
\$_MODULE['<{ps_themecusto}prestashop>index_818e5c22853d1cea07ded7cb82e137c2'] = 'Carica template grafico child';
\$_MODULE['<{ps_themecusto}prestashop>index_a82be0f551b8708bc08eb33cd9ded0cf'] = 'Informazioni';
\$_MODULE['<{ps_themecusto}prestashop>index_5195aacc657bf8c980eb34b1cc2773dc'] = 'In questo modo, puoi solo sovrascrivere il CSS del tuo template grafico.';
\$_MODULE['<{ps_themecusto}prestashop>index_a4948128259baac74a6e50aa5f7d6dfc'] = 'In questo modo, puoi sovrascrivere il CSS e l\\'html del tuo template grafico e aggiungere tag di analisi.';
\$_MODULE['<{ps_themecusto}prestashop>index_398744273abd0c569268859a4823c1dd'] = 'Prima di caricare i file di template grafico modificati, salvali in formato .zip direttamente a livello radice della cartella del template grafico child.';
\$_MODULE['<{ps_themecusto}prestashop>index_8ab4ab192bbbd5d5e2be4061ed32fa76'] = 'Una volta caricato, il template grafico child sarà  disponibile nella tua sezione Template grafico & Logo';
\$_MODULE['<{ps_themecusto}prestashop>modal_818e5c22853d1cea07ded7cb82e137c2'] = 'Carica template grafico child';
\$_MODULE['<{ps_themecusto}prestashop>modal_24c7cfc7a44dee945b7e52f1c9df09a1'] = 'Rilascia l\\'archivio del tuo template grafico child qui o';
\$_MODULE['<{ps_themecusto}prestashop>modal_ec2dab4ec46156a390cbe0652004f410'] = 'seleziona un file';
\$_MODULE['<{ps_themecusto}prestashop>modal_2c5b5cb39879603f5ecbcc0e63d91928'] = 'Carica un file alla volta, in formato .zip. Il tuo template grafico child verrà  installato subito dopo.';
\$_MODULE['<{ps_themecusto}prestashop>modal_824e2fcb263ee94399a6a261ee1ec7c1'] = 'Ops... Caricamento non riuscito.';
\$_MODULE['<{ps_themecusto}prestashop>modal_fa692d85f08c92a585ed8b3fed7f1d52'] = 'Cosa è successo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_c69732cc923305ac0684ac8fc05a4bca'] = 'Si è verificato un errore.';
\$_MODULE['<{ps_themecusto}prestashop>modal_f915a95e609bbd517a8a1e7bdcceef37'] = 'Riprova';
\$_MODULE['<{ps_themecusto}prestashop>index_d870f342dc67dbd123d09f0e0021b94a'] = 'Modifica colori, aspetto tipografico e posizione del logo';
\$_MODULE['<{ps_themecusto}prestashop>index_8e76275236fbf24dc81757217865154f'] = 'Usa il modulo Configuratore del tema per personalizzare gli elementi grafici principali del tuo sito web: colori, pulsanti, aspetto tipografico e posizione del logo.';
\$_MODULE['<{ps_themecusto}prestashop>index_f1206f9fadc5ce41694f69129aecac26'] = 'Configura';
\$_MODULE['<{ps_themecusto}prestashop>index_fd0b96315f3fce324c4eff21f4cdce73'] = 'Cartografia moduli principali template grafico';
\$_MODULE['<{ps_themecusto}prestashop>index_177b5a89de341b08186e5f5d45aa8292'] = 'Non ci sono moduli per questa sezione';
\$_MODULE['<{ps_themecusto}prestashop>index_0fae3206c90bed3220123bb3d760fb4c'] = 'Puoi installare un modulo per questa sezione dalla nostra selezione di moduli';
\$_MODULE['<{ps_themecusto}prestashop>index_573b936f93b0f7f5096571aaf26e75cd'] = 'Visualizza selezione moduli';
\$_MODULE['<{ps_themecusto}prestashop>index_400da42ad45e249c461b393547c54410'] = 'Visualizza tutti i moduli del template grafico';
\$_MODULE['<{ps_themecusto}prestashop>modal_10ad116a3eb7b6e5382ada40c393102c'] = 'Disinstallare modulo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_16c65b710bd0c33e9439b2603ee6e672'] = 'Disattivare modulo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_8916ba4927ba1516017e5ddb6409fac0'] = 'Resettare modulo?';
\$_MODULE['<{ps_themecusto}prestashop>modal_415864b61985d1b9f33349d3cf06fdb8'] = 'Stai per disinstallare';
\$_MODULE['<{ps_themecusto}prestashop>modal_7b8ae1ac729d88c81eb90e0a3baf98e8'] = 'Il modulo verrà  disattivato.';
\$_MODULE['<{ps_themecusto}prestashop>modal_7cc71badb9baf22d34e0637e8f038f82'] = 'Stai per disattivare ';
\$_MODULE['<{ps_themecusto}prestashop>modal_c5209889e18199fb2a2c50958d3212b8'] = 'Le tue impostazioni attuali verranno salvate, ma il modulo non sarà  pià¹ attivo.';
\$_MODULE['<{ps_themecusto}prestashop>modal_99d1b10bb171e0edf59948d0cb23dafe'] = 'Stai per resettare ';
\$_MODULE['<{ps_themecusto}prestashop>modal_58ce7123c3789e3c51cb3ffd42883df1'] = 'Verranno ripristinate le impostazioni predefinite.';
\$_MODULE['<{ps_themecusto}prestashop>modal_36fbfc01d63e4b57d18991077535c6e0'] = 'Questa azione non potrà  essere annullata.';
\$_MODULE['<{ps_themecusto}prestashop>modal_ea4788705e6873b424c65e91c2846b19'] = 'Annulla';
\$_MODULE['<{ps_themecusto}prestashop>modal_b8551bde0a3a5cee1ab95a3b64c09863'] = 'Sì, disinstalla';
\$_MODULE['<{ps_themecusto}prestashop>modal_8ffc312c0ad3aebfa25b900f353d4650'] = 'Sì, disattiva';
\$_MODULE['<{ps_themecusto}prestashop>modal_ae89782365cf87322e7a400afb448cb5'] = 'Sì, resetta';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_f1206f9fadc5ce41694f69129aecac26'] = 'Configura';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_bcfaccebf745acfd5e75351095a5394a'] = 'Disattivare';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_2faec1f9f8cc7f8f40d521c4dd574f49'] = 'Attivare';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_a27dfe771799a09fd55fea73286eb6ab'] = 'Disinstallare';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_526d688f37a86d3c3f27d0c5016eb71d'] = 'Resettare';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_9be8056e65ba01c83ca85c4552f86abe'] = 'Disabilitare sul cellulare';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_4c9cf94737c0f429f2e85d2c100950f2'] = 'Abilitare su cellulare';
\$_MODULE['<{ps_themecusto}prestashop>module_actions_349838fb1d851d3e2014b9fe39203275'] = 'Installare';
";
    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/translations/it.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/ps_themecusto/translations/it.php", "/var/www/html/modules/ps_themecusto/translations/it.php");
    }
}
