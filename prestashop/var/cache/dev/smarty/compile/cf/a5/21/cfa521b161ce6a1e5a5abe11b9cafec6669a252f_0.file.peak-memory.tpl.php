<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/peak-memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61d4018_03831521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa521b161ce6a1e5a5abe11b9cafec6669a252f' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/peak-memory.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d893c61d4018_03831521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'peak_memory' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/cf/a5/21/cfa521b161ce6a1e5a5abe11b9cafec6669a252f_0.file.peak-memory.tpl.php',
    'uid' => 'cfa521b161ce6a1e5a5abe11b9cafec6669a252f',
    'call_name' => 'smarty_template_function_peak_memory_91159546265d893c61d1ac8_38379210',
  ),
));
}
/* smarty_template_function_peak_memory_91159546265d893c61d1ac8_38379210 */
if (!function_exists('smarty_template_function_peak_memory_91159546265d893c61d1ac8_38379210')) {
function smarty_template_function_peak_memory_91159546265d893c61d1ac8_38379210(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 16) {?>
    <span class="danger"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 12) {?>
    <span class="warning"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_peak_memory_91159546265d893c61d1ac8_38379210 */
}
