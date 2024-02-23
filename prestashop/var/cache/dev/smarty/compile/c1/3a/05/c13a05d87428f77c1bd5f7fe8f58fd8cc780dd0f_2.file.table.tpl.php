<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f4a71e8_14968673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c13a05d87428f77c1bd5f7fe8f58fd8cc780dd0f' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/table.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f4a71e8_14968673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/c1/3a/05/c13a05d87428f77c1bd5f7fe8f58fd8cc780dd0f_2.file.table.tpl.php',
    'uid' => 'c13a05d87428f77c1bd5f7fe8f58fd8cc780dd0f',
    'call_name' => 'smarty_template_function_table_182761713565d8803f4a5904_30634043',
  ),
));
}
/* smarty_template_function_table_182761713565d8803f4a5904_30634043 */
if (!function_exists('smarty_template_function_table_182761713565d8803f4a5904_30634043')) {
function smarty_template_function_table_182761713565d8803f4a5904_30634043(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 30) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 20) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_table_182761713565d8803f4a5904_30634043 */
}
