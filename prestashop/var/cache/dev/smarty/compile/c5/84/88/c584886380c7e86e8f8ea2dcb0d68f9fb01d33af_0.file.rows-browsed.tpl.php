<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/rows-browsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a785347_45529963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c584886380c7e86e8f8ea2dcb0d68f9fb01d33af' => 
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
function content_65d8805a785347_45529963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'rows_browsed' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/c5/84/88/c584886380c7e86e8f8ea2dcb0d68f9fb01d33af_0.file.rows-browsed.tpl.php',
    'uid' => 'c584886380c7e86e8f8ea2dcb0d68f9fb01d33af',
    'call_name' => 'smarty_template_function_rows_browsed_89868124465d8805a783740_67453590',
  ),
));
}
/* smarty_template_function_rows_browsed_89868124465d8805a783740_67453590 */
if (!function_exists('smarty_template_function_rows_browsed_89868124465d8805a783740_67453590')) {
function smarty_template_function_rows_browsed_89868124465d8805a783740_67453590(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_rows_browsed_89868124465d8805a783740_67453590 */
}
