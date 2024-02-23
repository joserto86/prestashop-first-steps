<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/total-querying-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f4b1d53_39907638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7496992b357b513b565017e7f9a06287b2a12bd7' => 
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
function content_65d8803f4b1d53_39907638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_querying_time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/74/96/99/7496992b357b513b565017e7f9a06287b2a12bd7_2.file.total-querying-time.tpl.php',
    'uid' => '7496992b357b513b565017e7f9a06287b2a12bd7',
    'call_name' => 'smarty_template_function_total_querying_time_12140070365d8803f4afe13_63766157',
  ),
));
}
/* smarty_template_function_total_querying_time_12140070365d8803f4afe13_63766157 */
if (!function_exists('smarty_template_function_total_querying_time_12140070365d8803f4afe13_63766157')) {
function smarty_template_function_total_querying_time_12140070365d8803f4afe13_63766157(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_querying_time_12140070365d8803f4afe13_63766157 */
}
