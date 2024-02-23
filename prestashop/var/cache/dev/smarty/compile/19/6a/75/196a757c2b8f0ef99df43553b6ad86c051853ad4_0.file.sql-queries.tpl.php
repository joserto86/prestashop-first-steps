<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a789e14_27923500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196a757c2b8f0ef99df43553b6ad86c051853ad4' => 
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
function content_65d8805a789e14_27923500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/19/6a/75/196a757c2b8f0ef99df43553b6ad86c051853ad4_0.file.sql-queries.tpl.php',
    'uid' => '196a757c2b8f0ef99df43553b6ad86c051853ad4',
    'call_name' => 'smarty_template_function_sql_queries_183793989665d8805a787709_85308525',
  ),
));
}
/* smarty_template_function_sql_queries_183793989665d8805a787709_85308525 */
if (!function_exists('smarty_template_function_sql_queries_183793989665d8805a787709_85308525')) {
function smarty_template_function_sql_queries_183793989665d8805a787709_85308525(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_sql_queries_183793989665d8805a787709_85308525 */
}
