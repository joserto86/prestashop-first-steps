<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/sql-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f4a3b91_44953394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fb94eb07ed127cb4739c51329551482aa252eb5' => 
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
function content_65d8803f4a3b91_44953394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sql_queries' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/9f/b9/4e/9fb94eb07ed127cb4739c51329551482aa252eb5_2.file.sql-queries.tpl.php',
    'uid' => '9fb94eb07ed127cb4739c51329551482aa252eb5',
    'call_name' => 'smarty_template_function_sql_queries_172824970965d8803f4a1f50_79153311',
  ),
));
}
/* smarty_template_function_sql_queries_172824970965d8803f4a1f50_79153311 */
if (!function_exists('smarty_template_function_sql_queries_172824970965d8803f4a1f50_79153311')) {
function smarty_template_function_sql_queries_172824970965d8803f4a1f50_79153311(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value > 150) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value > 100) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 queries</span>
  <?php }
}}
/*/ smarty_template_function_sql_queries_172824970965d8803f4a1f50_79153311 */
}
