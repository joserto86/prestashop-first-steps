<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61dcc73_63389350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ef26d2818de0940ee199165f5e21dd35ca56522' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/sql-queries.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d893c61dcc73_63389350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/8e/f2/6d/8ef26d2818de0940ee199165f5e21dd35ca56522_0.file.sql-queries.tpl.php',
    'uid' => '8ef26d2818de0940ee199165f5e21dd35ca56522',
    'call_name' => 'smarty_template_function_sql_queries_211681155765d893c61db7c3_22740614',
  ),
));
}
/* smarty_template_function_sql_queries_211681155765d893c61db7c3_22740614 */
if (!function_exists('smarty_template_function_sql_queries_211681155765d893c61db7c3_22740614')) {
function smarty_template_function_sql_queries_211681155765d893c61db7c3_22740614(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 150) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 queries</span>
  <?php }
}}
/*/ smarty_template_function_sql_queries_211681155765d893c61db7c3_22740614 */
}
