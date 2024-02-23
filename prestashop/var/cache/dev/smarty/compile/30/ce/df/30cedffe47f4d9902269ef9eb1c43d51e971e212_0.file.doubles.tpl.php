<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/doubles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a7ef9f7_01087791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30cedffe47f4d9902269ef9eb1c43d51e971e212' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/doubles.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a7ef9f7_01087791 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="doubles">Doubles</a>
  </h2>

  <table class="table table-condensed">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doublesQueries']->value, 'nb', false, 'q');
$_smarty_tpl->tpl_vars['nb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['q']->value => $_smarty_tpl->tpl_vars['nb']->value) {
$_smarty_tpl->tpl_vars['nb']->do_else = false;
?>
      <?php if ($_smarty_tpl->tpl_vars['nb']->value > 1) {?>
        <tr>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sql_queries', array('data'=>$_smarty_tpl->tpl_vars['nb']->value), true);?>

          </td>
          <td class="pre">
            <pre><?php echo $_smarty_tpl->tpl_vars['q']->value;?>
</pre>
          </td>
        </tr>
      <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </table>
</div>
<?php }
}
