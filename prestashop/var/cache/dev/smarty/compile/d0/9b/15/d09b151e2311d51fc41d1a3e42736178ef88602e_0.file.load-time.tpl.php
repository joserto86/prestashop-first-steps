<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a768545_02735171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd09b151e2311d51fc41d1a3e42736178ef88602e' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/load-time.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a768545_02735171 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/d0/9b/15/d09b151e2311d51fc41d1a3e42736178ef88602e_0.file.load-time.tpl.php',
    'uid' => 'd09b151e2311d51fc41d1a3e42736178ef88602e',
    'call_name' => 'smarty_template_function_load_time_145801696165d8805a7657c4_96354560',
  ),
));
}
/* smarty_template_function_load_time_145801696165d8805a7657c4_96354560 */
if (!function_exists('smarty_template_function_load_time_145801696165d8805a7657c4_96354560')) {
function smarty_template_function_load_time_145801696165d8805a7657c4_96354560(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 1.6) {?>
    <span class="danger"><?php echo round($_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 0.8) {?>
    <span class="warning"><?php echo round($_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo sprintf('%01.3f',$_smarty_tpl->tpl_vars['data']->value*1000);?>
</span>
  <?php }?>
  ms
<?php
}}
/*/ smarty_template_function_load_time_145801696165d8805a7657c4_96354560 */
}
