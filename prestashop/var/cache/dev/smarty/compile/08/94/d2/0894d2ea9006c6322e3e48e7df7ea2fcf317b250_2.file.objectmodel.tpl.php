<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f494ce2_20878763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0894d2ea9006c6322e3e48e7df7ea2fcf317b250' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/objectmodel.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f494ce2_20878763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'objectmodel' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/08/94/d2/0894d2ea9006c6322e3e48e7df7ea2fcf317b250_2.file.objectmodel.tpl.php',
    'uid' => '0894d2ea9006c6322e3e48e7df7ea2fcf317b250',
    'call_name' => 'smarty_template_function_objectmodel_75490510765d8803f493101_06981822',
  ),
));
}
/* smarty_template_function_objectmodel_75490510765d8803f493101_06981822 */
if (!function_exists('smarty_template_function_objectmodel_75490510765d8803f493101_06981822')) {
function smarty_template_function_objectmodel_75490510765d8803f493101_06981822(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 50) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 10) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_objectmodel_75490510765d8803f493101_06981822 */
}
