<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/functions/php-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f49cc83_66327161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb2df90bf566e24d9e595bee2de9e8337bca3402' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/functions/php-version.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f49cc83_66327161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'php_version' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/bb/2d/f9/bb2df90bf566e24d9e595bee2de9e8337bca3402_2.file.php-version.tpl.php',
    'uid' => 'bb2df90bf566e24d9e595bee2de9e8337bca3402',
    'call_name' => 'smarty_template_function_php_version_83118762365d8803f49afc2_08122446',
  ),
));
}
/* smarty_template_function_php_version_83118762365d8803f49afc2_08122446 */
if (!function_exists('smarty_template_function_php_version_83118762365d8803f49afc2_08122446')) {
function smarty_template_function_php_version_83118762365d8803f49afc2_08122446(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.1') <= 0) {?>
    <span class="danger"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.4') <= 0) {?>
    <span class="warning"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8');?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_php_version_83118762365d8803f49afc2_08122446 */
}
