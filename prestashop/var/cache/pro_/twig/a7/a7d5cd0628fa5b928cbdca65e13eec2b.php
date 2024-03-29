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

/* @Modules/psgdpr/translations/br.php */
class __TwigTemplate_eeb596dd7b7c91e165259f24c97b6b12 extends Template
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
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
global \$_MODULE;
\$_MODULE = [];
\$_MODULE['<{psgdpr}prestashop>psgdpr_5966265f35dd87febf4d59029bc9ef66'] = 'Conformidade oficial com o RGPD';
\$_MODULE['<{psgdpr}prestashop>psgdpr_dbf90f78fc135d723570a4a43041a3dc'] = 'Cumpra com os principais requisitos do Regulamento Europeu Geral sobre a Proteção de Dados (RGPD) com a ajuda deste módulo desenvolvido pela PrestaShop.';
\$_MODULE['<{psgdpr}prestashop>psgdpr_bb8956c67b82c7444a80c6b2433dd8b4'] = 'Você tem certeza de que deseja desinstalar este módulo?';
\$_MODULE['<{psgdpr}prestashop>psgdpr_e9415612c1d72517733c98e6877a6b46'] = 'Ocorreu um erro durante a desinstalação. Entre em contato conosco através do site do Addons.';
\$_MODULE['<{psgdpr}prestashop>psgdpr_78d320af42aca685d1fcd1113f09939e'] = 'Ocorreu um erro durante a desinstalação. Entre em contato conosco através do site do Addons';
\$_MODULE['<{psgdpr}prestashop>psgdpr_e7502bc086a11cfa8789053af27eab2d'] = 'Salvo com sucesso!';
\$_MODULE['<{psgdpr}prestashop>psgdpr_a59aa7fb037f2498e36a6d687869e83e'] = 'Dados dos clientes excluídos pelo módulo RGPD oficial.';
\$_MODULE['<{psgdpr}prestashop>psgdpr_cb84a315de222f4aa4ab6d6d5219314e'] = 'Favor preencher todos os campos necessários.';
\$_MODULE['<{psgdpr}prestashop>htmltemplatepsgdprmodule_9ad5a301cfed1c7f825506bf57205ab6'] = 'DADOS PESSOAIS';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_c654dacdea4ad6f75ad36553a8a947cd'] = 'Meus dados pessoais';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_a8308387f3ffc2d045d2b6125e74317d'] = 'Acesso aos meus dados';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_915f4446a47b51378e37374cfbb72d7f'] = 'A qualquer momento, você tem o direito de recuperar os dados que forneceu ao nosso site. Clique em \"Obter meus dados\" para baixar automaticamente uma cópia dos seus dados pessoais como arquivo em formato PDF ou CSV.';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_49b5d04f5f20820830f080d4674c8669'] = 'OBTER MEUS DADOS CSV';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_7b0b06bfe69473081553bcccb12ca068'] = 'OBTER MEUS DADOS PDF';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_91a49c1d45a5d37e85658d01b6f37423'] = 'Solicitações de retificação e exclusão';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_01cb324ae91e9bd16213cc2945334249'] = 'Você tem o direito de modificar todas as informações pessoais encontradas na página \"Minha conta\". Para quaisquer outra solicitações que você tenha em relação à retificação e/ou exclusão dos seus dados pessoais, entre em contato conosco em nossa';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_af5efea250326c1c34d69aa9364b482c'] = 'página de contato.';
\$_MODULE['<{psgdpr}prestashop>customerpersonaldata_332087a4991d8bc866abd3fd78a2e514'] = 'Analisaremos sua solicitação e responderemos assim que possível.';
\$_MODULE['<{psgdpr}prestashop>customeraccount_5868129c4526891dddb05b8e59c33572'] = 'Meus dados pessoais';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_93bd48ecb9c4d5c4eec7fefffbb2070f'] = 'Últimas conexões';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_33e29c1d042c0923008f78b46af94984'] = 'Solicitação de origem';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_57f32d7d0e6672cc2b60bc7a49f91453'] = 'Página vista';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_fae6aba9bc4e69842be0ac98e15c4c99'] = 'Tempo na página';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_75ba8d70e3692ba200f0e0df37b4d2ae'] = 'Endereço IP';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>personaldata.connections-tab_c51e6bdf66e5d601e85d055301014410'] = 'Nenhuma conexão';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_284b47b0bb63ae2df3b29f0e691d6fcf'] = 'Endereços';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_effdb9ce6c5d44df31b89d7069c8e0fb'] = 'Alias';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Empresa';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_dd7bf230fde8d4836917806aff6a6b27'] = 'Endereço';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_fac322c3b42d04806299ae195f8a9238'] = 'Fone(s)';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_59716c97497eb9694541f7c3d37b1a4d'] = 'País';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>personaldata.addresses-tab_587bb937485e3dbe02ea0d281600bb52'] = 'Nenhum endereço';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_7442e29d7d53e549b78d93c46b8cdcfc'] = 'Pedidos';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_63d5049791d9d79d86e9a108b0a999ca'] = 'Referência';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_c453a4b8e8d98e82f35b67f433e3b4da'] = 'Pagamento';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_d02bbc3cb147c272b0445ac5ca7d1a36'] = 'Estado do pedido';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_ea067eb37801c5aab1a1c685eb97d601'] = 'Total pago';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_0e166fe6d96b79167a1cdc0dcecb43dd'] = 'Produto(s) no pedido';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_63d5049791d9d79d86e9a108b0a999ca'] = 'Referência';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_694e8d1f2ee056f98ee488bdc4982d73'] = 'Quantidade';
\$_MODULE['<{psgdpr}prestashop>personaldata.orders-tab_08cfa7751d1812e961560f623e082aba'] = 'Nenhum pedido';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_fc26e55e0993a75e892175deb02aae15'] = 'Carrinhos';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_490aa6e856ccf208a054389e47ce0d06'] = 'ID';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_db205f01b4fd580fb5daa9072d96849d'] = 'Total de produtos';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_83a234de54312687bf9ab33fe4168f6c'] = 'Produto(s) no carrinho';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_63d5049791d9d79d86e9a108b0a999ca'] = 'Referência';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_694e8d1f2ee056f98ee488bdc4982d73'] = 'Quantidade';
\$_MODULE['<{psgdpr}prestashop>personaldata.carts-tab_bbd47e26c95290218b2fc449e54e8cdc'] = 'Nenhum carrinho';
\$_MODULE['<{psgdpr}prestashop>personaldata.messages-tab_41de6d6cfb8953c021bbe4ba0701c8a1'] = 'Mensagens';
\$_MODULE['<{psgdpr}prestashop>personaldata.messages-tab_a12a3079e14ced46e69ba52b8a90b21a'] = 'IP';
\$_MODULE['<{psgdpr}prestashop>personaldata.messages-tab_4c2a8fe7eaf24721cc7a9f0175115bd4'] = 'Mensagem';
\$_MODULE['<{psgdpr}prestashop>personaldata.messages-tab_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>personaldata.messages-tab_58a747ef5d07d22101bdcd058e772ff9'] = 'Nenhuma mensagem';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_3bcfe5c02494f4ff326c5dbd1dcffa91'] = 'Informações gerais';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_019ec3132cdf8ee0f2e2a75cf5d3e459'] = 'Sexo';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_9c37b7b6ff829e977df287900543ea54'] = 'Data de nascimento';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_9d8d2d5ab12b515182a505f54db7f538'] = 'Idade';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_ce8ae9da5b7cd6c3df2929543a9af92d'] = 'E-mail';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_4994a8ffeba4ac3140beb89e8d41f174'] = 'Idioma';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_c4aebdbba922c239df53567d2991e510'] = 'Dados de criação da conta';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_5e5914912e8d2f2765525840acf98bea'] = 'Última visita';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_60adc330494a66981dec101c81e27f03'] = 'CNPJ';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_6c5a79a30b5c5c4fb6ec45735d32edc2'] = 'Ape';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Empresa';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_15bbb9d0bbf25e8d2978de1168c749dc'] = 'Site';
\$_MODULE['<{psgdpr}prestashop>personaldata.generalinfo-tab_019ec3132cdf8ee0f2e2a75cf5d3e459'] = 'Sexo';
\$_MODULE['<{psgdpr}prestashop>personaldata.modules-tab_e55f75a29310d7b60f7ac1d390c8ae42'] = 'Módulo';
\$_MODULE['<{psgdpr}prestashop>dataconsent_9aa5e987f351139f2b4e3d14b9353e56'] = 'Configurar suas caixas de seleção';
\$_MODULE['<{psgdpr}prestashop>dataconsent_62442110c88c18b3645145cee9211474'] = 'Personalize suas mensagens de solicitação de consentimento nos campos dedicados abaixo:';
\$_MODULE['<{psgdpr}prestashop>dataconsent_40cfa1617e59da6c05189eb33fd19b34'] = '';
\$_MODULE['<{psgdpr}prestashop>dataconsent_6c92285fa6d3e827b198d120ea3ac674'] = 'clique aqui';
\$_MODULE['<{psgdpr}prestashop>dataconsent_b1e293bbb668bf8c149fff2865d0273d'] = 'Formulário de criação da conta';
\$_MODULE['<{psgdpr}prestashop>dataconsent_7469a286259799e5b37e5db9296f00b3'] = 'SIM';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c2f3f489a00553e7a01d369c103c7251'] = 'NÃO';
\$_MODULE['<{psgdpr}prestashop>dataconsent_f782036f044fe2a6de1677dcac0868c2'] = 'Mensagem de solicitação de consentimento';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c7ad735a42df6942cbad2402dd3fad2a'] = 'Esta mensagem será exibida no formulário de criação de conta de cliente';
\$_MODULE['<{psgdpr}prestashop>dataconsent_27fb780f8fef2ffc1767a0a75cc12b65'] = 'Área da conta do cliente';
\$_MODULE['<{psgdpr}prestashop>dataconsent_7469a286259799e5b37e5db9296f00b3'] = 'SIM';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c2f3f489a00553e7a01d369c103c7251'] = 'NÃO';
\$_MODULE['<{psgdpr}prestashop>dataconsent_f782036f044fe2a6de1677dcac0868c2'] = 'Mensagem de solicitação de consentimento';
\$_MODULE['<{psgdpr}prestashop>dataconsent_361f761e0f718800272dc62901fd06dd'] = 'Esta mensagem será exibida na aba “Meus dados pessoais” da conta de cliente';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c661cf76442d8d2cb318d560285a2a57'] = '';
\$_MODULE['<{psgdpr}prestashop>dataconsent_7469a286259799e5b37e5db9296f00b3'] = 'SIM';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c2f3f489a00553e7a01d369c103c7251'] = 'NÃO';
\$_MODULE['<{psgdpr}prestashop>dataconsent_f782036f044fe2a6de1677dcac0868c2'] = 'Mensagem de solicitação de consentimento';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c7ad735a42df6942cbad2402dd3fad2a'] = 'Esta mensagem será exibida no formulário de criação de conta de cliente';
\$_MODULE['<{psgdpr}prestashop>dataconsent_7469a286259799e5b37e5db9296f00b3'] = 'SIM';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c2f3f489a00553e7a01d369c103c7251'] = 'NÃO';
\$_MODULE['<{psgdpr}prestashop>dataconsent_f782036f044fe2a6de1677dcac0868c2'] = 'Mensagem de solicitação de consentimento';
\$_MODULE['<{psgdpr}prestashop>dataconsent_5562e13c7ff921bf7907e1d5e0ffc294'] = 'Esta mensagem será incluída com uma caixa de seleção.';
\$_MODULE['<{psgdpr}prestashop>dataconsent_a8b79d64d6a4c3e13b3c805542292d78'] = 'Para outros módulos instalados que solicitam confirmação de consentimento, eles serão exibidos nesta guia somente se tiverem feito a atualização de GDPR. Os campos correspondentes aparecerão automaticamente para que você personalize as caixas de seleção de confirmação de consentimento.';
\$_MODULE['<{psgdpr}prestashop>dataconsent_c9cc8cce247e49bae79f15173ce97354'] = 'Salvar';
\$_MODULE['<{psgdpr}prestashop>help_c2ba71bfcb3f9d58df2ccacc5b949c2d'] = 'Ajuda e contato';
\$_MODULE['<{psgdpr}prestashop>help_a19f5b117715d61a9fe7474260e1f6bf'] = 'Este módulo permite que você:';
\$_MODULE['<{psgdpr}prestashop>help_129d6406c710afbbd8e26fdfdec211e5'] = 'Exclua a conta do cliente com os dados pessoais coletados pela sua loja, se solicitado pelo cliente';
\$_MODULE['<{psgdpr}prestashop>help_cd66b7179c438249ca40ff6498bb28c4'] = 'Adicione uma caixa de seleção de confirmação de consentimento em um formulário de módulo que coleta dados pessoais e a personalize';
\$_MODULE['<{psgdpr}prestashop>help_bd47684406e8441b4e2e354ad3adafa7'] = 'Permita a seu cliente consultar e exportar os próprios dados pessoais coletados pela sua loja em sua conta de cliente';
\$_MODULE['<{psgdpr}prestashop>help_38dfa44543ebf8ab68578ead08b1c19a'] = 'Veja todas as ações do cliente relacionadas aos próprios dados pessoais';
\$_MODULE['<{psgdpr}prestashop>help_73878c19cdc6ef2ab0d0fac6943cc958'] = 'Preciso de ajuda?';
\$_MODULE['<{psgdpr}prestashop>help_5eaa63820c162e960a23700319f7e3cc'] = 'Encontre aqui a documentação desse módulo';
\$_MODULE['<{psgdpr}prestashop>help_5b6cf869265c13af8566f192b4ab3d2a'] = 'Documentação';
\$_MODULE['<{psgdpr}prestashop>help_1fe917b01f9a3f87fa2d7d3b7643fac1'] = 'FAQ';
\$_MODULE['<{psgdpr}prestashop>help_986c907a7f2adcdbadb4785a441f9b23'] = 'Nenhuma resposta encontrada para a sua pergunta?';
\$_MODULE['<{psgdpr}prestashop>help_0b4f23e625077174e2bda0b340e02632'] = 'Contacte-nos em Prestashop Addons';
\$_MODULE['<{psgdpr}prestashop>customeractivity_f5a289ea76ecee6abfd43c2e7eddf58f'] = 'Lista de atividades do cliente';
\$_MODULE['<{psgdpr}prestashop>customeractivity_f078af4e0b76b98d53f3820e0ce629b2'] = 'Acompanha as atividades do cliente relacionadas a acessibilidade, consentimento e exclusão de dados.';
\$_MODULE['<{psgdpr}prestashop>customeractivity_9579cdef0bf63ffa6b1e3e3c616d9cac'] = 'Nome do cliente/ID';
\$_MODULE['<{psgdpr}prestashop>customeractivity_b9263f280c2c2ef949e10b7aa7a61549'] = 'Tipo de solicitação';
\$_MODULE['<{psgdpr}prestashop>customeractivity_f0dc5a7e50af112eee854e8cee968e06'] = 'Data de envio';
\$_MODULE['<{psgdpr}prestashop>customeractivity_b62799f8fdbb9329b450c490004a6213'] = 'Confirmação de consentimento';
\$_MODULE['<{psgdpr}prestashop>customeractivity_e0e4fc6213e8b3593495a7260c3a4c2e'] = 'Acessibilidade';
\$_MODULE['<{psgdpr}prestashop>customeractivity_e0e4fc6213e8b3593495a7260c3a4c2e'] = 'Acessibilidade';
\$_MODULE['<{psgdpr}prestashop>customeractivity_530479efffb195651bdbfbd50cfb8a4c'] = 'Exclusão';
\$_MODULE['<{psgdpr}prestashop>getstarted_be11c74c1dd7f307bb80183a90dc2067'] = 'Iniciar';
\$_MODULE['<{psgdpr}prestashop>getstarted_20719d3a43ec43a93df59b1bbfdecb98'] = 'Bem-vindo(a) ao módulo GDPR';
\$_MODULE['<{psgdpr}prestashop>getstarted_4d47947737e64fb8d082cd23e655c58c'] = 'Esta interface ajudará você a conhecer o RGPD e lhe dará orientações para auxiliá-lo a se tornar compatível com este regulamento.';
\$_MODULE['<{psgdpr}prestashop>getstarted_7126b43016dfc29aba0a051092789885'] = 'Este módulo cumpre com os principais requisitos regulamentares relacionados a dados pessoais dos seus clientes incluindo:';
\$_MODULE['<{psgdpr}prestashop>getstarted_d743912f3dd67b05698f902990065dc2'] = 'O direito a acessar os dados pessoais e portabilidade de dados';
\$_MODULE['<{psgdpr}prestashop>getstarted_674eec70af9feb40728481ce959ca7ea'] = 'O direito a obter retificação e/ou excluir dados pessoais';
\$_MODULE['<{psgdpr}prestashop>getstarted_56ebf6e5564c6b92e4d77e88949fd52c'] = 'O direito a dar e retirar consentimento';
\$_MODULE['<{psgdpr}prestashop>getstarted_eff0cc2d13389da1aa5ae9405418354f'] = 'Permite que você mantenha um registro das atividades de processamento (especialmente para acesso, consentimento e exclusão).';
\$_MODULE['<{psgdpr}prestashop>getstarted_cb5830c9314fa880d3607bbac3d78af8'] = 'Siga nossas três etapas para configurar seu módulo e ajudar você a ficar em conformidade com o GDPR!';
\$_MODULE['<{psgdpr}prestashop>getstarted_34e34c43ec6b943c10a3cc1a1a16fb11'] = 'Gerir';
\$_MODULE['<{psgdpr}prestashop>getstarted_604c6226ffa8d05ba2e9d637852673a6'] = 'Veja a guia de Gerenciamento de dados pessoais para visualizar os dados coletados pela PrestaShop e pelos módulos personalizados e de comunidade.';
\$_MODULE['<{psgdpr}prestashop>getstarted_63a78ed4647f7c63c2929e35ec1c95e3'] = 'Personalizar';
\$_MODULE['<{psgdpr}prestashop>getstarted_232c8c9b71d0a7d5197d29735ef4b903'] = 'Personalize as caixas de seleção de confirmação de consentimento e mensagens de solicitação de consentimento em formulários diferentes em sua loja, especialmente para criação de conta e assinatura de newsletter.';
\$_MODULE['<{psgdpr}prestashop>getstarted_afc9168648f61aa6abd0bf76b84abc3b'] = 'Acompanhamento';
\$_MODULE['<{psgdpr}prestashop>getstarted_c9c1dc03aed08d4c60bde968b3417f60'] = 'Visualize todas as ações dos clientes relacionadas aos seus dados e gerencie as solicitações de exclusão.';
\$_MODULE['<{psgdpr}prestashop>getstarted_eb36499a1ed94957bf4988899d45aa1a'] = 'Obs.: Verifique se tem acesso à versão mais recente dos módulos instalados para se beneficiar inteiramente dos recursos do nosso módulo GDPR. Se algum ou vários dos seus módulos não fornecerem a lista de dados, solicitamos que você entre em contato diretamente com os desenvolvedores desses módulos.';
\$_MODULE['<{psgdpr}prestashop>getstarted_011400bd7b57639a3aa5a2dd70f275ee'] = 'Mais informações sobre o GDPR';
\$_MODULE['<{psgdpr}prestashop>getstarted_75ab3e8ff5e5eb97d91eb14e5c82beb2'] = 'Sites das autoridades de proteção de dados';
\$_MODULE['<{psgdpr}prestashop>getstarted_47d4e5149c64dfa18b87cf6dc464e5ee'] = 'White paper da PrestaShop sobre o RGPD';
\$_MODULE['<{psgdpr}prestashop>getstarted_5040ffa592d5e7ed29a396a4c416ebda'] = 'Documentação do módulo';
\$_MODULE['<{psgdpr}prestashop>getstarted_34e2d1989a1dbf75cd631596133ee5ee'] = 'Vídeo';
\$_MODULE['<{psgdpr}prestashop>getstarted_712b9d33de9cca47077a2d2b1831edb8'] = 'Artigo Build';
\$_MODULE['<{psgdpr}prestashop>getstarted_1972bd6acee82b7e9fc7af320ae4e673'] = 'Obs.: Os recursos deste módulo têm como objetivo auxiliar você a tornar-se compatível com o GDPR. No entanto, usá-los não garante que seu site esteja em total conformidade com os requisitos do GDPR.';
\$_MODULE['<{psgdpr}prestashop>getstarted_85e3340d54570d5167c2daaff75308c6'] = 'É de sua responsabilidade';
\$_MODULE['<{psgdpr}prestashop>getstarted_651f509e8c074849330167fa1dd41c19'] = 'configurar os módulos e adotar todas as ações necessárias para assegurar a conformidade. Para quaisquer perguntas, recomendamos que você entre em contato com um advogado especializado em questões de legislação de dados pessoais.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_aa4de6aaed26c361322b279d34d8a7dd'] = 'Visualização de dados e ações automáticas';
\$_MODULE['<{psgdpr}prestashop>dataconfig_c32a80e0c500e5a7537f5b70fe8129fd'] = 'Encontre listados aqui todos os dados pessoais coletados pela PrestaShop e pelos seus módulos instalados.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_3a7a2fb701b6c416ccfd2328cb1461d6'] = 'Esses dados serão utilizados em dois níveis diferentes:';
\$_MODULE['<{psgdpr}prestashop>dataconfig_34c7656d69407f8ff8bc0ae5ad35daca'] = 'Quando um cliente solicita acesso aos próprios dados: ele recebe uma cópia dos dados pessoais coletados em sua loja.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_d61bbb8ed4a9c97a676591d853b71488'] = 'Quando um cliente solicita a exclusão dos dados: se você aceitar a solicitação, os dados do cliente serão removidos permanentemente.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_5680774f084e3133256426b423793cdf'] = 'Lista de módulo compatível';
\$_MODULE['<{psgdpr}prestashop>dataconfig_fbc7f08ab791ff80697db8706f83ac05'] = 'Encontre listados aqui todos os elementos que são compatíveis com o RGPD.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_e7040e6151b9ba04bebf1ac35a3b9773'] = 'Dados PrestaShop';
\$_MODULE['<{psgdpr}prestashop>dataconfig_007798f2b7231fa9572e704aa3e2b864'] = 'Veja abaixo a lista dos seus módulos instalados que não são exibidos acima: Se você considera que um ou vários desses módulos coletam dados pessoais (';
\$_MODULE['<{psgdpr}prestashop>dataconfig_a4ea91cd0d1ea33d8113457644dd6157'] = 'clique aqui';
\$_MODULE['<{psgdpr}prestashop>dataconfig_b1cb373e07897abad098c86e8f026b20'] = 'para saber quais dados são definidos como pessoais):';
\$_MODULE['<{psgdpr}prestashop>dataconfig_d50e4299564d3d86275eaa685cc64a0b'] = 'Verifique se tem acesso à versão mais recente desses módulos instalados para se beneficiar inteiramente das atualizações do GDPR.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_9f776b9ffe1e70cc7e59acbc33dff365'] = 'Se eles ainda não forem exibidos no bloco acima, entre em contato com seus respectivos desenvolvedores para receber mais informações sobre esses módulos.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_301d4d850b1fd6e10ae104b17235e3c7'] = 'Gerenciar dados pessoais do cliente';
\$_MODULE['<{psgdpr}prestashop>dataconfig_2e0a7d4ff8913a1d22b0c74c72c7008c'] = 'Pesquise um cliente ao digitar a primeira letra do nome ou do e-mail.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_bac34a31ff6a35a479858c60dffe3705'] = 'Pesquisar um nome ou e-mail do cliente';
\$_MODULE['<{psgdpr}prestashop>dataconfig_d69e451e32539a7b9b79381d327fc028'] = 'P. ex., John Doe, john.doe@ etc.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_13348442cc6a27032d2b4aa28b75a5d3'] = 'Pesquisa';
\$_MODULE['<{psgdpr}prestashop>dataconfig_2f43ddb446e84df137be34b78029835f'] = 'Para visualizar todos os dados que sua loja coletou de um cliente específico, clique no bloco de clientes correspondente';
\$_MODULE['<{psgdpr}prestashop>dataconfig_261e15beaa4972092243d9a678afa8a3'] = 'Número dos pedidos';
\$_MODULE['<{psgdpr}prestashop>dataconfig_3ec365dd533ddb7ef3d1c111186ce872'] = 'Detalhes';
\$_MODULE['<{psgdpr}prestashop>dataconfig_596403b61367ca30d6de75812275f9cd'] = 'Remover dados';
\$_MODULE['<{psgdpr}prestashop>dataconfig_5fde470e78d8f75e778801d4ec4bd91b'] = 'Baixar faturas';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6016c2bb7bd8dd79293094d37ebfea3f'] = 'Dados do cliente';
\$_MODULE['<{psgdpr}prestashop>dataconfig_997c785cce775d7c1014ffbd6e446d50'] = 'Informações gerais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_019ec3132cdf8ee0f2e2a75cf5d3e459'] = 'Sexo';
\$_MODULE['<{psgdpr}prestashop>dataconfig_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>dataconfig_9c37b7b6ff829e977df287900543ea54'] = 'Data de nascimento';
\$_MODULE['<{psgdpr}prestashop>dataconfig_9d8d2d5ab12b515182a505f54db7f538'] = 'Idade';
\$_MODULE['<{psgdpr}prestashop>dataconfig_ce8ae9da5b7cd6c3df2929543a9af92d'] = 'E-mail';
\$_MODULE['<{psgdpr}prestashop>dataconfig_4994a8ffeba4ac3140beb89e8d41f174'] = 'Idioma';
\$_MODULE['<{psgdpr}prestashop>dataconfig_3112209b2dd9b55cf5dbc4865dd15afd'] = 'Dados de criação da conta';
\$_MODULE['<{psgdpr}prestashop>dataconfig_5e5914912e8d2f2765525840acf98bea'] = 'Última visita';
\$_MODULE['<{psgdpr}prestashop>dataconfig_60adc330494a66981dec101c81e27f03'] = 'CNPJ';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6c5a79a30b5c5c4fb6ec45735d32edc2'] = 'Ape';
\$_MODULE['<{psgdpr}prestashop>dataconfig_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Empresa';
\$_MODULE['<{psgdpr}prestashop>dataconfig_15bbb9d0bbf25e8d2978de1168c749dc'] = 'Site';
\$_MODULE['<{psgdpr}prestashop>dataconfig_284b47b0bb63ae2df3b29f0e691d6fcf'] = 'Endereços';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_effdb9ce6c5d44df31b89d7069c8e0fb'] = 'Alias';
\$_MODULE['<{psgdpr}prestashop>dataconfig_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Empresa';
\$_MODULE['<{psgdpr}prestashop>dataconfig_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>dataconfig_dd7bf230fde8d4836917806aff6a6b27'] = 'Endereço';
\$_MODULE['<{psgdpr}prestashop>dataconfig_fac322c3b42d04806299ae195f8a9238'] = 'Fone(s)';
\$_MODULE['<{psgdpr}prestashop>dataconfig_59716c97497eb9694541f7c3d37b1a4d'] = 'País';
\$_MODULE['<{psgdpr}prestashop>dataconfig_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>dataconfig_587bb937485e3dbe02ea0d281600bb52'] = 'Nenhum endereço';
\$_MODULE['<{psgdpr}prestashop>dataconfig_7442e29d7d53e549b78d93c46b8cdcfc'] = 'Pedidos';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_63d5049791d9d79d86e9a108b0a999ca'] = 'Referência';
\$_MODULE['<{psgdpr}prestashop>dataconfig_c453a4b8e8d98e82f35b67f433e3b4da'] = 'Pagamento';
\$_MODULE['<{psgdpr}prestashop>dataconfig_d02bbc3cb147c272b0445ac5ca7d1a36'] = 'Estado do pedido';
\$_MODULE['<{psgdpr}prestashop>dataconfig_ea067eb37801c5aab1a1c685eb97d601'] = 'Total pago';
\$_MODULE['<{psgdpr}prestashop>dataconfig_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>dataconfig_08cfa7751d1812e961560f623e082aba'] = 'Nenhum pedido';
\$_MODULE['<{psgdpr}prestashop>dataconfig_fc26e55e0993a75e892175deb02aae15'] = 'Carrinhos';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_490aa6e856ccf208a054389e47ce0d06'] = 'ID';
\$_MODULE['<{psgdpr}prestashop>dataconfig_1070734fc83ac44f690c17af28986fb7'] = 'Total de produtos';
\$_MODULE['<{psgdpr}prestashop>dataconfig_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>dataconfig_bbd47e26c95290218b2fc449e54e8cdc'] = 'Nenhum carrinho';
\$_MODULE['<{psgdpr}prestashop>dataconfig_41de6d6cfb8953c021bbe4ba0701c8a1'] = 'Mensagens';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_a12a3079e14ced46e69ba52b8a90b21a'] = 'IP';
\$_MODULE['<{psgdpr}prestashop>dataconfig_4c2a8fe7eaf24721cc7a9f0175115bd4'] = 'Mensagem';
\$_MODULE['<{psgdpr}prestashop>dataconfig_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>dataconfig_58a747ef5d07d22101bdcd058e772ff9'] = 'Nenhuma mensagem';
\$_MODULE['<{psgdpr}prestashop>dataconfig_93bd48ecb9c4d5c4eec7fefffbb2070f'] = 'Últimas conexões';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_33e29c1d042c0923008f78b46af94984'] = 'Solicitação de origem';
\$_MODULE['<{psgdpr}prestashop>dataconfig_57f32d7d0e6672cc2b60bc7a49f91453'] = 'Página vista';
\$_MODULE['<{psgdpr}prestashop>dataconfig_fae6aba9bc4e69842be0ac98e15c4c99'] = 'Tempo na página';
\$_MODULE['<{psgdpr}prestashop>dataconfig_75ba8d70e3692ba200f0e0df37b4d2ae'] = 'Endereço IP';
\$_MODULE['<{psgdpr}prestashop>dataconfig_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>dataconfig_c51e6bdf66e5d601e85d055301014410'] = 'Nenhuma conexão';
\$_MODULE['<{psgdpr}prestashop>dataconfig_e55f75a29310d7b60f7ac1d390c8ae42'] = 'Módulo';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_42a7b2626eae970122e01f65af2f5092'] = 'Nenhum dado';
\$_MODULE['<{psgdpr}prestashop>dataconfig_42a7b2626eae970122e01f65af2f5092'] = 'Nenhum dado';
\$_MODULE['<{psgdpr}prestashop>dataconfig_61a649a33f2869e5e35fbb7aff3a80d9'] = 'E-mail';
\$_MODULE['<{psgdpr}prestashop>dataconfig_596403b61367ca30d6de75812275f9cd'] = 'Remover dados';
\$_MODULE['<{psgdpr}prestashop>dataconfig_e55f75a29310d7b60f7ac1d390c8ae42'] = 'Módulo';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_42a7b2626eae970122e01f65af2f5092'] = 'Nenhum dado';
\$_MODULE['<{psgdpr}prestashop>dataconfig_42a7b2626eae970122e01f65af2f5092'] = 'Nenhum dado';
\$_MODULE['<{psgdpr}prestashop>dataconfig_f9dd946cc89c1f3b41a0edbe0f36931d'] = 'TELEFONE';
\$_MODULE['<{psgdpr}prestashop>dataconfig_596403b61367ca30d6de75812275f9cd'] = 'Remover dados';
\$_MODULE['<{psgdpr}prestashop>dataconfig_e55f75a29310d7b60f7ac1d390c8ae42'] = 'Módulo';
\$_MODULE['<{psgdpr}prestashop>dataconfig_6370c5a9859b827de2be9d30ec4b997e'] = 'Dados pessoais';
\$_MODULE['<{psgdpr}prestashop>dataconfig_42a7b2626eae970122e01f65af2f5092'] = 'Nenhum dado';
\$_MODULE['<{psgdpr}prestashop>dataconfig_42a7b2626eae970122e01f65af2f5092'] = 'Nenhum dado';
\$_MODULE['<{psgdpr}prestashop>dataconfig_f3f5e3b297c7980c5af3c17a4c0ebcf2'] = 'Não houve resultados no banco de dados do cliente para';
\$_MODULE['<{psgdpr}prestashop>dataconfig_e9a837cf85ac119ec97ac242df3ce0d3'] = 'Se estiver procurando alguém sem uma conta de cliente, pesquise pelo endereço de e-mail completo ou pelo número de telefone.';
\$_MODULE['<{psgdpr}prestashop>dataconfig_f049593e15945e4e954d5a8803ec1e9f'] = 'No entanto, você pode continuar o processo de exclusão para este endereço (somente para os módulos que tiverem feito uma atualização de RGPD).';
\$_MODULE['<{psgdpr}prestashop>menu_be11c74c1dd7f307bb80183a90dc2067'] = 'Iniciar';
\$_MODULE['<{psgdpr}prestashop>menu_949de8585e0cc176f0e47317ce985023'] = 'Gerenciamento de dados pessoais';
\$_MODULE['<{psgdpr}prestashop>menu_04d691f0f2b299343d6431e23cfe6be4'] = 'Personalização da caixa de seleção de consentimento';
\$_MODULE['<{psgdpr}prestashop>menu_e898759faaefeae772f161b7dbdc31ec'] = 'Atividades do cliente';
\$_MODULE['<{psgdpr}prestashop>menu_6a26f548831e6a8c26bfbbd9f6ec61e0'] = 'Ajuda';
\$_MODULE['<{psgdpr}prestashop>menu_34b6cd75171affba6957e308dcbd92be'] = 'Versão';
\$_MODULE['<{psgdpr}prestashop>menu_4fb72931ca985b1f33b9b2b5b604c6ef'] = 'URL copiado!';
\$_MODULE['<{psgdpr}prestashop>menu_cdec11f09fb339e01121a4ef5224594c'] = 'As faturas foram baixadas com sucesso.';
\$_MODULE['<{psgdpr}prestashop>menu_f0a90a69e73126cef322ef544ebb641f'] = 'Nenhuma fatura disponível para este cliente.';
\$_MODULE['<{psgdpr}prestashop>menu_729a51874fe901b092899e9e8b31c97a'] = 'Deseja continuar?';
\$_MODULE['<{psgdpr}prestashop>menu_7db050b741b6de7a1f955472f33d8325'] = 'Atenção! Esta ação é irreversível. Confirme se fez o download de todas as faturas do cliente (se houver alguma), antes de clicar em Confirmar exclusão';
\$_MODULE['<{psgdpr}prestashop>menu_1bf87e44da33943a3baad59edd51f4a0'] = 'Cancelar ação';
\$_MODULE['<{psgdpr}prestashop>menu_0cac91b206582769ea4876fbbae5f2ab'] = 'Confirmar exclusão';
\$_MODULE['<{psgdpr}prestashop>menu_3906c6e10eba20bf0f2b77d442cba324'] = 'Os dados do cliente foram excluídos com sucesso!';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_3bcfe5c02494f4ff326c5dbd1dcffa91'] = 'Informações gerais';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_019ec3132cdf8ee0f2e2a75cf5d3e459'] = 'Sexo';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_9c37b7b6ff829e977df287900543ea54'] = 'Data de nascimento';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_9d8d2d5ab12b515182a505f54db7f538'] = 'Idade';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_ce8ae9da5b7cd6c3df2929543a9af92d'] = 'E-mail';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_4994a8ffeba4ac3140beb89e8d41f174'] = 'Idioma';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_7d9f5730d745285016630376deebcbd8'] = 'Dados de criação da conta';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_5e5914912e8d2f2765525840acf98bea'] = 'Última visita';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_60adc330494a66981dec101c81e27f03'] = 'CNPJ';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_6c5a79a30b5c5c4fb6ec45735d32edc2'] = 'Ape';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Empresa';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_15bbb9d0bbf25e8d2978de1168c749dc'] = 'Site';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_284b47b0bb63ae2df3b29f0e691d6fcf'] = 'Endereços';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_effdb9ce6c5d44df31b89d7069c8e0fb'] = 'Alias';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_1c76cbfe21c6f44c1d1e59d54f3e4420'] = 'Empresa';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_dd7bf230fde8d4836917806aff6a6b27'] = 'Endereço';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_59716c97497eb9694541f7c3d37b1a4d'] = 'País';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_587bb937485e3dbe02ea0d281600bb52'] = 'Nenhum endereço';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_7442e29d7d53e549b78d93c46b8cdcfc'] = 'Pedidos';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_63d5049791d9d79d86e9a108b0a999ca'] = 'Referência';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_c453a4b8e8d98e82f35b67f433e3b4da'] = 'Pagamento';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_d02bbc3cb147c272b0445ac5ca7d1a36'] = 'Estado do pedido';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_ea067eb37801c5aab1a1c685eb97d601'] = 'Total pago';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_08cfa7751d1812e961560f623e082aba'] = 'Nenhum pedido';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_c8be451a5698956a0e78b5c2caab4821'] = 'Produtos comprados';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_79af0c77f8ce8cbb17006e22e8e9494b'] = 'Referência de encomenda';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_2cc349f141e8c9932281bf573f2c40ef'] = 'Referência do produto';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_694e8d1f2ee056f98ee488bdc4982d73'] = 'Quantidade';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_fc26e55e0993a75e892175deb02aae15'] = 'Carrinhos';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_490aa6e856ccf208a054389e47ce0d06'] = 'ID';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_db205f01b4fd580fb5daa9072d96849d'] = 'Total de produtos';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_bbd47e26c95290218b2fc449e54e8cdc'] = 'Nenhum carrinho';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_fc6dfe4f8b07fc04c99e27425f780754'] = 'ID';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_75ed578ac3cb02b0ba40002a25bc0403'] = 'Referência do produto';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_49ee3087348e8d44e1feda1917443987'] = 'Nome';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_694e8d1f2ee056f98ee488bdc4982d73'] = 'Quantidade';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_09dc02ecbb078868a3a86dded030076d'] = 'Nenhum produto';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_bbd47e26c95290218b2fc449e54e8cdc'] = 'Nenhum carrinho';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_41de6d6cfb8953c021bbe4ba0701c8a1'] = 'Mensagens';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_a12a3079e14ced46e69ba52b8a90b21a'] = 'IP';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_4c2a8fe7eaf24721cc7a9f0175115bd4'] = 'Mensagem';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_58a747ef5d07d22101bdcd058e772ff9'] = 'Nenhuma mensagem';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_93bd48ecb9c4d5c4eec7fefffbb2070f'] = 'Últimas conexões';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_33e29c1d042c0923008f78b46af94984'] = 'Solicitação de origem';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_57f32d7d0e6672cc2b60bc7a49f91453'] = 'Página vista';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_fae6aba9bc4e69842be0ac98e15c4c99'] = 'Tempo na página';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_75ba8d70e3692ba200f0e0df37b4d2ae'] = 'Endereço IP';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_59716c97497eb9694541f7c3d37b1a4d'] = 'País';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_44749712dbec183e983dcd78a7736c41'] = 'Data';
\$_MODULE['<{psgdpr}prestashop>exportdatatocsv_c51e6bdf66e5d601e85d055301014410'] = 'Nenhuma conexão';
";
    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/translations/br.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Modules/psgdpr/translations/br.php", "/var/www/html/modules/psgdpr/translations/br.php");
    }
}
