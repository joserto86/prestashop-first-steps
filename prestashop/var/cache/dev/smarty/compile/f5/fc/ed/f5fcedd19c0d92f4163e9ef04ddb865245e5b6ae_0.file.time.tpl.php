<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61e2842_96924216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5fcedd19c0d92f4163e9ef04ddb865245e5b6ae' => 
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
function content_65d893c61e2842_96924216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/f5/fc/ed/f5fcedd19c0d92f4163e9ef04ddb865245e5b6ae_0.file.time.tpl.php',
    'uid' => 'f5fcedd19c0d92f4163e9ef04ddb865245e5b6ae',
    'call_name' => 'smarty_template_function_time_202422754965d893c61e12c6_17683434',
  ),
));
}
/* smarty_template_function_time_202422754965d893c61e12c6_17683434 */
if (!function_exists('smarty_template_function_time_202422754965d893c61e12c6_17683434')) {
function smarty_template_function_time_202422754965d893c61e12c6_17683434(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_time_202422754965d893c61e12c6_17683434 */
}
