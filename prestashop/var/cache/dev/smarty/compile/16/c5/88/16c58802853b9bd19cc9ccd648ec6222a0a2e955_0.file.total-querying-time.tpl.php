<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/total-querying-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61e9260_22883988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c58802853b9bd19cc9ccd648ec6222a0a2e955' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/total-querying-time.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d893c61e9260_22883988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_querying_time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/16/c5/88/16c58802853b9bd19cc9ccd648ec6222a0a2e955_0.file.total-querying-time.tpl.php',
    'uid' => '16c58802853b9bd19cc9ccd648ec6222a0a2e955',
    'call_name' => 'smarty_template_function_total_querying_time_135935825665d893c61e7a17_69967705',
  ),
));
}
/* smarty_template_function_total_querying_time_135935825665d893c61e7a17_69967705 */
if (!function_exists('smarty_template_function_total_querying_time_135935825665d893c61e7a17_69967705')) {
function smarty_template_function_total_querying_time_135935825665d893c61e7a17_69967705(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_total_querying_time_135935825665d893c61e7a17_69967705 */
}
