<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:43
  from '/var/www/html/tools/profiling/templates/objectmodel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8803f5a16e3_66488437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55802453e543c6af3cd3f3b8503a2ab352d9cd94' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/objectmodel.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8803f5a16e3_66488437 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <h2>
    <a name="objectModels">
      ObjectModel instances
    </a>
  </h2>

  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Instances</th>
        <th>Source</th>
      </tr>
    </thead>

    <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['objectmodel']->value, 'info', false, 'class');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
        <tr>
          <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
</td>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'objectmodel', array('data'=>count($_smarty_tpl->tpl_vars['info']->value)), true);?>

          </td>
          <td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'trace');
$_smarty_tpl->tpl_vars['trace']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trace']->value) {
$_smarty_tpl->tpl_vars['trace']->do_else = false;
?>
              <?php echo htmlspecialchars((string) str_replace(array(_PS_ROOT_DIR_,'\\'),array('','/'),$_smarty_tpl->tpl_vars['trace']->value['file']), ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['trace']->value['line'], ENT_QUOTES, 'UTF-8');?>
 (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['trace']->value['function'], ENT_QUOTES, 'UTF-8');?>
) [id: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['trace']->value['id'], ENT_QUOTES, 'UTF-8');?>
]
              <br />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<?php }
}
