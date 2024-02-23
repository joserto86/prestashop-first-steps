<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a792ea6_89891130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c2e0d7c6998a0db83021761db5e3a54b33100ee' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/time.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a792ea6_89891130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/1c/2e/0d/1c2e0d7c6998a0db83021761db5e3a54b33100ee_0.file.time.tpl.php',
    'uid' => '1c2e0d7c6998a0db83021761db5e3a54b33100ee',
    'call_name' => 'smarty_template_function_time_155646072165d8805a790e79_88663184',
  ),
));
}
/* smarty_template_function_time_155646072165d8805a790e79_88663184 */
if (!function_exists('smarty_template_function_time_155646072165d8805a790e79_88663184')) {
function smarty_template_function_time_155646072165d8805a790e79_88663184(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 4) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 2) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_time_155646072165d8805a790e79_88663184 */
}
