<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61c5249_02620048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d2e98b2d94887086790355a7232e104e5fd05a' => 
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
function content_65d893c61c5249_02620048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/31/d2/e9/31d2e98b2d94887086790355a7232e104e5fd05a_0.file.load-time.tpl.php',
    'uid' => '31d2e98b2d94887086790355a7232e104e5fd05a',
    'call_name' => 'smarty_template_function_load_time_200502826265d893c61c2527_48928564',
  ),
));
}
/* smarty_template_function_load_time_200502826265d893c61c2527_48928564 */
if (!function_exists('smarty_template_function_load_time_200502826265d893c61c2527_48928564')) {
function smarty_template_function_load_time_200502826265d893c61c2527_48928564(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_load_time_200502826265d893c61c2527_48928564 */
}
