<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/php-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a781133_51299775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce378cd8c80c6a73842637cbd671817b7f5d5ac' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/php-version.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a781133_51299775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'php_version' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/2c/e3/78/2ce378cd8c80c6a73842637cbd671817b7f5d5ac_0.file.php-version.tpl.php',
    'uid' => '2ce378cd8c80c6a73842637cbd671817b7f5d5ac',
    'call_name' => 'smarty_template_function_php_version_138435963465d8805a77f4d8_75291700',
  ),
));
}
/* smarty_template_function_php_version_138435963465d8805a77f4d8_75291700 */
if (!function_exists('smarty_template_function_php_version_138435963465d8805a77f4d8_75291700')) {
function smarty_template_function_php_version_138435963465d8805a77f4d8_75291700(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.1') <= 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.4') <= 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_php_version_138435963465d8805a77f4d8_75291700 */
}
