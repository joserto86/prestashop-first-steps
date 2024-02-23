<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/functions/php-version.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61d7203_37597481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bda87e1c390fbdb357ea85c07b4a90a31452b74' => 
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
function content_65d893c61d7203_37597481 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'php_version' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/dev/smarty/compile/4b/da/87/4bda87e1c390fbdb357ea85c07b4a90a31452b74_0.file.php-version.tpl.php',
    'uid' => '4bda87e1c390fbdb357ea85c07b4a90a31452b74',
    'call_name' => 'smarty_template_function_php_version_36010164365d893c61d5972_86083839',
  ),
));
}
/* smarty_template_function_php_version_36010164365d893c61d5972_86083839 */
if (!function_exists('smarty_template_function_php_version_36010164365d893c61d5972_86083839')) {
function smarty_template_function_php_version_36010164365d893c61d5972_86083839(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.1') <= 0) {?>
    <span class="danger"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Upgrade strongly recommended)</span>
  <?php } elseif (version_compare($_smarty_tpl->tpl_vars['version']->value,'7.4') <= 0) {?>
    <span class="warning"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (Consider upgrading)</span>
  <?php } else { ?>
    <span class="success"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
 (OK)</span>
  <?php }
}}
/*/ smarty_template_function_php_version_36010164365d893c61d5972_86083839 */
}
