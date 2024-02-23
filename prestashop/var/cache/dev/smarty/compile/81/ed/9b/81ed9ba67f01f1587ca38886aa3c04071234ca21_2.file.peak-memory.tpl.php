<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/peak-memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f499438_75472175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ed9ba67f01f1587ca38886aa3c04071234ca21' => 
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
function content_65d8803f499438_75472175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'peak_memory' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/81/ed/9b/81ed9ba67f01f1587ca38886aa3c04071234ca21_2.file.peak-memory.tpl.php',
    'uid' => '81ed9ba67f01f1587ca38886aa3c04071234ca21',
    'call_name' => 'smarty_template_function_peak_memory_120315359165d8803f496820_57227934',
  ),
));
}
/* smarty_template_function_peak_memory_120315359165d8803f496820_57227934 */
if (!function_exists('smarty_template_function_peak_memory_120315359165d8803f496820_57227934')) {
function smarty_template_function_peak_memory_120315359165d8803f496820_57227934(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 16) {?>
    <span class="danger"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 12) {?>
    <span class="warning"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf("%0.1f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_peak_memory_120315359165d8803f496820_57227934 */
}
