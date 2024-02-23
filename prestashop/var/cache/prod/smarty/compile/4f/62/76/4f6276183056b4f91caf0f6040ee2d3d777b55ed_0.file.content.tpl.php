<?php
/* Smarty version 4.3.4, created on 2024-02-13 16:55:45
  from '/var/www/html/adminFarsa/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb9101a977f8_08171102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f6276183056b4f91caf0f6040ee2d3d777b55ed' => 
    array (
      0 => '/var/www/html/adminFarsa/themes/default/template/content.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cb9101a977f8_08171102 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
