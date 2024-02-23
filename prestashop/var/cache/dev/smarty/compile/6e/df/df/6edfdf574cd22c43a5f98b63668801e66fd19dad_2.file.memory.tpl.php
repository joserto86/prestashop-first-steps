<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f48d1c2_11148098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6edfdf574cd22c43a5f98b63668801e66fd19dad' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/memory.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f48d1c2_11148098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/6e/df/df/6edfdf574cd22c43a5f98b63668801e66fd19dad_2.file.memory.tpl.php',
    'uid' => '6edfdf574cd22c43a5f98b63668801e66fd19dad',
    'call_name' => 'smarty_template_function_memory_126264272565d8803f488a94_95406255',
  ),
));
}
/* smarty_template_function_memory_126264272565d8803f488a94_95406255 */
if (!function_exists('smarty_template_function_memory_126264272565d8803f488a94_95406255')) {
function smarty_template_function_memory_126264272565d8803f488a94_95406255(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value > 3) {?>
    <span class="danger"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 1) {?>
    <span class="warning"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif (round($_smarty_tpl->tpl_vars['data']->value,2) > 0) {?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success">-</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_memory_126264272565d8803f488a94_95406255 */
}
