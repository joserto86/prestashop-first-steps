<?php
/* Smarty version 4.3.4, created on 2024-02-13 17:16:29
  from '/var/www/html/adminFarsa/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb95dd64f065_07770836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b576398517aca95dd3039df6520f3ec4669a6ce4' => 
    array (
      0 => '/var/www/html/adminFarsa/themes/new-theme/template/content.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb95dd64f065_07770836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
