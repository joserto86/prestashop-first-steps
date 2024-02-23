<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61d0263_79840303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa773aee03e82f5f56fa31062f8555fb89d04f6' => 
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
function content_65d893c61d0263_79840303 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'objectmodel' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/ea/a7/73/eaa773aee03e82f5f56fa31062f8555fb89d04f6_0.file.objectmodel.tpl.php',
    'uid' => 'eaa773aee03e82f5f56fa31062f8555fb89d04f6',
    'call_name' => 'smarty_template_function_objectmodel_120056032265d893c61ced25_30958013',
  ),
));
}
/* smarty_template_function_objectmodel_120056032265d893c61ced25_30958013 */
if (!function_exists('smarty_template_function_objectmodel_120056032265d893c61ced25_30958013')) {
function smarty_template_function_objectmodel_120056032265d893c61ced25_30958013(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 50) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 10) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_objectmodel_120056032265d893c61ced25_30958013 */
}
