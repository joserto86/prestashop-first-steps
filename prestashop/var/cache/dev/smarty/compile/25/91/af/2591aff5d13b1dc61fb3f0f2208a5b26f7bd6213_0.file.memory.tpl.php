<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a76e721_54028140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2591aff5d13b1dc61fb3f0f2208a5b26f7bd6213' => 
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
function content_65d8805a76e721_54028140 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/25/91/af/2591aff5d13b1dc61fb3f0f2208a5b26f7bd6213_0.file.memory.tpl.php',
    'uid' => '2591aff5d13b1dc61fb3f0f2208a5b26f7bd6213',
    'call_name' => 'smarty_template_function_memory_179813858065d8805a76a842_31148186',
  ),
));
}
/* smarty_template_function_memory_179813858065d8805a76a842_31148186 */
if (!function_exists('smarty_template_function_memory_179813858065d8805a76a842_31148186')) {
function smarty_template_function_memory_179813858065d8805a76a842_31148186(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php $_smarty_tpl->_assignInScope('data', round($_smarty_tpl->tpl_vars['data']->value/1048576,2));?>
  <?php if ($_smarty_tpl->tpl_vars['data']->value > 3) {?>
    <span class="danger"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 1) {?>
    <span class="warning"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } elseif (round($_smarty_tpl->tpl_vars['data']->value,2) > 0) {?>
    <span class="success"><?php echo sprintf("%0.2f",$_smarty_tpl->tpl_vars['data']->value);?>
</span>
  <?php } else { ?>
    <span class="success">-</span>
  <?php }?>
  Mb
<?php
}}
/*/ smarty_template_function_memory_179813858065d8805a76a842_31148186 */
}
