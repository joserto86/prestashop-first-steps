<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61d9fd7_85303968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91b95c4cbb21f13918013f56c5341cf02384ad53' => 
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
function content_65d893c61d9fd7_85303968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/91/b9/5c/91b95c4cbb21f13918013f56c5341cf02384ad53_0.file.rows-browsed.tpl.php',
    'uid' => '91b95c4cbb21f13918013f56c5341cf02384ad53',
    'call_name' => 'smarty_template_function_rows_browsed_69890888165d893c61d8ae2_75047961',
  ),
));
}
/* smarty_template_function_rows_browsed_69890888165d893c61d8ae2_75047961 */
if (!function_exists('smarty_template_function_rows_browsed_69890888165d893c61d8ae2_75047961')) {
function smarty_template_function_rows_browsed_69890888165d893c61d8ae2_75047961(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 400) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 rows browsed</span>
  <?php }
}}
/*/ smarty_template_function_rows_browsed_69890888165d893c61d8ae2_75047961 */
}
