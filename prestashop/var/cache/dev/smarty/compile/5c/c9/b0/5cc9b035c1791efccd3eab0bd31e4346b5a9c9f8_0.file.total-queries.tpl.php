<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61e5f50_70896704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cc9b035c1791efccd3eab0bd31e4346b5a9c9f8' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/total-queries.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d893c61e5f50_70896704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/5c/c9/b0/5cc9b035c1791efccd3eab0bd31e4346b5a9c9f8_0.file.total-queries.tpl.php',
    'uid' => '5cc9b035c1791efccd3eab0bd31e4346b5a9c9f8',
    'call_name' => 'smarty_template_function_total_queries_7123299465d893c61e4280_49468430',
  ),
));
}
/* smarty_template_function_total_queries_7123299465d893c61e4280_49468430 */
if (!function_exists('smarty_template_function_total_queries_7123299465d893c61e4280_49468430')) {
function smarty_template_function_total_queries_7123299465d893c61e4280_49468430(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_queries_7123299465d893c61e4280_49468430 */
}
