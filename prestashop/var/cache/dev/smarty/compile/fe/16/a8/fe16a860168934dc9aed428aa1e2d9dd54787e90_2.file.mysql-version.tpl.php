<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/mysql-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f491421_98607533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe16a860168934dc9aed428aa1e2d9dd54787e90' => 
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
function content_65d8803f491421_98607533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'mysql_version' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/fe/16/a8/fe16a860168934dc9aed428aa1e2d9dd54787e90_2.file.mysql-version.tpl.php',
    'uid' => 'fe16a860168934dc9aed428aa1e2d9dd54787e90',
    'call_name' => 'smarty_template_function_mysql_version_3347429165d8803f48f3a0_45704439',
  ),
));
}
/* smarty_template_function_mysql_version_3347429165d8803f48f3a0_45704439 */
if (!function_exists('smarty_template_function_mysql_version_3347429165d8803f48f3a0_45704439')) {
function smarty_template_function_mysql_version_3347429165d8803f48f3a0_45704439(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.5') < 0) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'5.6') < 0) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_mysql_version_3347429165d8803f48f3a0_45704439 */
}
