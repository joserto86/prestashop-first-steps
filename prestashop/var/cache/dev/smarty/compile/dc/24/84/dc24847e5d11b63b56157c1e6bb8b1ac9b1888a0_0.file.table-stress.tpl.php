<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/table-stress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c621a593_87259891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc24847e5d11b63b56157c1e6bb8b1ac9b1888a0' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/table-stress.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d893c621a593_87259891 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<h2><a name="tables">Tables stress</a></h2>
	<table class="table table-condensed">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tableStress']->value, 'nb', false, 'table');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['table']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
      <tr>
        <td>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'table', array('data'=>$_smarty_tpl->tpl_vars['nb']->value), true);?>
 <?php echo $_smarty_tpl->tpl_vars['table']->value;?>

        </td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
