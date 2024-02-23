<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a797036_55744035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09deaafe5bf5cef3ccc58b0d72d9f4310d194fa5' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/total-queries.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a797036_55744035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/09/de/aa/09deaafe5bf5cef3ccc58b0d72d9f4310d194fa5_0.file.total-queries.tpl.php',
    'uid' => '09deaafe5bf5cef3ccc58b0d72d9f4310d194fa5',
    'call_name' => 'smarty_template_function_total_queries_105940611365d8805a795183_17090554',
  ),
));
}
/* smarty_template_function_total_queries_105940611365d8805a795183_17090554 */
if (!function_exists('smarty_template_function_total_queries_105940611365d8805a795183_17090554')) {
function smarty_template_function_total_queries_105940611365d8805a795183_17090554(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_queries_105940611365d8805a795183_17090554 */
}
