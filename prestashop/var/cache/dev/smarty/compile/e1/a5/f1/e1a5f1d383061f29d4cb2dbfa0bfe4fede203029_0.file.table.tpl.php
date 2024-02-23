<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a78e8e1_65593586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1a5f1d383061f29d4cb2dbfa0bfe4fede203029' => 
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
function content_65d8805a78e8e1_65593586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/e1/a5/f1/e1a5f1d383061f29d4cb2dbfa0bfe4fede203029_0.file.table.tpl.php',
    'uid' => 'e1a5f1d383061f29d4cb2dbfa0bfe4fede203029',
    'call_name' => 'smarty_template_function_table_35561358165d8805a78caf5_10239699',
  ),
));
}
/* smarty_template_function_table_35561358165d8805a78caf5_10239699 */
if (!function_exists('smarty_template_function_table_35561358165d8805a78caf5_10239699')) {
function smarty_template_function_table_35561358165d8805a78caf5_10239699(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 30) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 20) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_table_35561358165d8805a78caf5_10239699 */
}
