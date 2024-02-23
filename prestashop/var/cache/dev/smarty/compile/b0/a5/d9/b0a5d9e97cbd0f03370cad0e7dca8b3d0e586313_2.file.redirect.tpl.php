<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f13b216_44240796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a5d9e97cbd0f03370cad0e7dca8b3d0e586313' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/redirect.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f13b216_44240796 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <meta charset="utf-8" />
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="container" style="width:100%">
      <div class="row">
        <div class="col-lg-12">
          <h2>Caught redirection to <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirectAfter']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['redirectAfter']->value, ENT_QUOTES, 'UTF-8');?>
</a></h2>
        </div>
      </div>
    </div>
  </body>
</html>
<?php }
}
