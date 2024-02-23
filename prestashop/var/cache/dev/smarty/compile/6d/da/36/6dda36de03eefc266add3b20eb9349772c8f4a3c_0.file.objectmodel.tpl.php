<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a778090_83975185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dda36de03eefc266add3b20eb9349772c8f4a3c' => 
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
function content_65d8805a778090_83975185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'objectmodel' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/6d/da/36/6dda36de03eefc266add3b20eb9349772c8f4a3c_0.file.objectmodel.tpl.php',
    'uid' => '6dda36de03eefc266add3b20eb9349772c8f4a3c',
    'call_name' => 'smarty_template_function_objectmodel_141229413665d8805a775c10_00448823',
  ),
));
}
/* smarty_template_function_objectmodel_141229413665d8805a775c10_00448823 */
if (!function_exists('smarty_template_function_objectmodel_141229413665d8805a775c10_00448823')) {
function smarty_template_function_objectmodel_141229413665d8805a775c10_00448823(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_objectmodel_141229413665d8805a775c10_00448823 */
}
