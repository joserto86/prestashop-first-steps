<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f4a02f9_27907555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b1f0bcb0011d29b8aec840702c639af7e1968d' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/rows-browsed.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f4a02f9_27907555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/32/b1/f0/32b1f0bcb0011d29b8aec840702c639af7e1968d_2.file.rows-browsed.tpl.php',
    'uid' => '32b1f0bcb0011d29b8aec840702c639af7e1968d',
    'call_name' => 'smarty_template_function_rows_browsed_27497691765d8803f49ea13_61548675',
  ),
));
}
/* smarty_template_function_rows_browsed_27497691765d8803f49ea13_61548675 */
if (!function_exists('smarty_template_function_rows_browsed_27497691765d8803f49ea13_61548675')) {
function smarty_template_function_rows_browsed_27497691765d8803f49ea13_61548675(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 400) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 rows browsed</span>
  <?php }
}}
/*/ smarty_template_function_rows_browsed_27497691765d8803f49ea13_61548675 */
}
