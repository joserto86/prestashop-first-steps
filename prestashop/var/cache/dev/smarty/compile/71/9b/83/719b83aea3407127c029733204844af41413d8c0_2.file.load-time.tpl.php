<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/load-time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f486893_96272440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '719b83aea3407127c029733204844af41413d8c0' => 
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
function content_65d8803f486893_96272440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'load_time' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/71/9b/83/719b83aea3407127c029733204844af41413d8c0_2.file.load-time.tpl.php',
    'uid' => '719b83aea3407127c029733204844af41413d8c0',
    'call_name' => 'smarty_template_function_load_time_214230911365d8803f480492_00835481',
  ),
));
}
/* smarty_template_function_load_time_214230911365d8803f480492_00835481 */
if (!function_exists('smarty_template_function_load_time_214230911365d8803f480492_00835481')) {
function smarty_template_function_load_time_214230911365d8803f480492_00835481(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 1.6) {?>
    <span class="danger"><?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 0.8) {?>
    <span class="warning"><?php echo htmlspecialchars((string) round($_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) sprintf('%01.3f',$_smarty_tpl->tpl_vars['data']->value*1000), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
  ms
<?php
}}
/*/ smarty_template_function_load_time_214230911365d8803f480492_00835481 */
}
