<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61dfa17_96678966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4efe4a43179cfeebce1588b0a5e441c871e1416' => 
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
function content_65d893c61dfa17_96678966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'table' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/d4/ef/e4/d4efe4a43179cfeebce1588b0a5e441c871e1416_0.file.table.tpl.php',
    'uid' => 'd4efe4a43179cfeebce1588b0a5e441c871e1416',
    'call_name' => 'smarty_template_function_table_147729610465d893c61de4c9_35150117',
  ),
));
}
/* smarty_template_function_table_147729610465d893c61de4c9_35150117 */
if (!function_exists('smarty_template_function_table_147729610465d893c61de4c9_35150117')) {
function smarty_template_function_table_147729610465d893c61de4c9_35150117(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_table_147729610465d893c61de4c9_35150117 */
}
