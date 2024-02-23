<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/mysql-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61cd642_60953306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b123ef6bee5512b98d957d6791a48f41b23ef5' => 
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
function content_65d893c61cd642_60953306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mysql_version' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/68/b1/23/68b123ef6bee5512b98d957d6791a48f41b23ef5_0.file.mysql-version.tpl.php',
    'uid' => '68b123ef6bee5512b98d957d6791a48f41b23ef5',
    'call_name' => 'smarty_template_function_mysql_version_37231221065d893c61cbcf6_79092915',
  ),
));
}
/* smarty_template_function_mysql_version_37231221065d893c61cbcf6_79092915 */
if (!function_exists('smarty_template_function_mysql_version_37231221065d893c61cbcf6_79092915')) {
function smarty_template_function_mysql_version_37231221065d893c61cbcf6_79092915(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_mysql_version_37231221065d893c61cbcf6_79092915 */
}
