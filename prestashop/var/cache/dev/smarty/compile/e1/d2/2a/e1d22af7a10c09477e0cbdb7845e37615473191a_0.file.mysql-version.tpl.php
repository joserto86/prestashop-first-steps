<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/mysql-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a773791_35144580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d22af7a10c09477e0cbdb7845e37615473191a' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/mysql-version.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a773791_35144580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mysql_version' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/e1/d2/2a/e1d22af7a10c09477e0cbdb7845e37615473191a_0.file.mysql-version.tpl.php',
    'uid' => 'e1d22af7a10c09477e0cbdb7845e37615473191a',
    'call_name' => 'smarty_template_function_mysql_version_64191408965d8805a771661_31469071',
  ),
));
}
/* smarty_template_function_mysql_version_64191408965d8805a771661_31469071 */
if (!function_exists('smarty_template_function_mysql_version_64191408965d8805a771661_31469071')) {
function smarty_template_function_mysql_version_64191408965d8805a771661_31469071(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.5') < 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.6') < 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_mysql_version_64191408965d8805a771661_31469071 */
}
