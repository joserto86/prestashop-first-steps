<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/total-queries.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f4ae149_52396464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a05141aae9359620470a48c2129637518426a31' => 
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
function content_65d8803f4ae149_52396464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'total_queries' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/8a/05/14/8a05141aae9359620470a48c2129637518426a31_2.file.total-queries.tpl.php',
    'uid' => '8a05141aae9359620470a48c2129637518426a31',
    'call_name' => 'smarty_template_function_total_queries_209081055265d8803f4ac7c2_83838392',
  ),
));
}
/* smarty_template_function_total_queries_209081055265d8803f4ac7c2_83838392 */
if (!function_exists('smarty_template_function_total_queries_209081055265d8803f4ac7c2_83838392')) {
function smarty_template_function_total_queries_209081055265d8803f4ac7c2_83838392(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if ($_smarty_tpl->tpl_vars['data']->value >= 100) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } elseif ($_smarty_tpl->tpl_vars['data']->value >= 50) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }
}}
/*/ smarty_template_function_total_queries_209081055265d8803f4ac7c2_83838392 */
}
