<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/memory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61ca1a7_95312843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd553680a9d2895e1c23b8ed560f9ce0545661dd8' => 
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
function content_65d893c61ca1a7_95312843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'memory' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/d5/53/68/d553680a9d2895e1c23b8ed560f9ce0545661dd8_0.file.memory.tpl.php',
    'uid' => 'd553680a9d2895e1c23b8ed560f9ce0545661dd8',
    'call_name' => 'smarty_template_function_memory_42366826165d893c61c7296_97128051',
  ),
));
}
/* smarty_template_function_memory_42366826165d893c61c7296_97128051 */
if (!function_exists('smarty_template_function_memory_42366826165d893c61c7296_97128051')) {
function smarty_template_function_memory_42366826165d893c61c7296_97128051(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_memory_42366826165d893c61c7296_97128051 */
}
