<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:24:10
  from '/var/www/html/tools/profiling/templates/hooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d8805a7be2e2_61049800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7b375b53801b40b7fc1cc7e15cfe1366d405d47' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/hooks.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d8805a7be2e2_61049800 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<div class="col-5">
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Hook</th>
        <th>Time</th>
        <th>Memory Usage</th>
      </tr>
    </thead>

    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value['perfs'], 'hooksPerfs', false, 'hook');
$_smarty_tpl->tpl_vars['hooksPerfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value => $_smarty_tpl->tpl_vars['hooksPerfs']->value) {
$_smarty_tpl->tpl_vars['hooksPerfs']->do_else = false;
?>
      <tr>
        <td>
          <a href="javascript:void(0);" onclick="$('.<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
_modules_details').toggle();"><?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
</a>
        </td>
        <td>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['hooksPerfs']->value['time']), true);?>

        </td>
        <td>
          <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['hooksPerfs']->value['memory']), true);?>

        </td>
      </tr>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooksPerfs']->value['modules'], 'perfs');
$_smarty_tpl->tpl_vars['perfs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perfs']->value) {
$_smarty_tpl->tpl_vars['perfs']->do_else = false;
?>
        <tr class="<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>
_modules_details" style="background-color:#EFEFEF;display:none">
          <td>
            =&gt; <?php echo $_smarty_tpl->tpl_vars['perfs']->value['module'];?>

          </td>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['perfs']->value['time']), true);?>

          </td>
          <td>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['perfs']->value['memory']), true);?>

          </td>
        </tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
    <tfoot>
      <tr>
        <th><b><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['hooks']->value['perfs']);?>
 hook(s)</b></th>
        <th><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'load_time', array('data'=>$_smarty_tpl->tpl_vars['hooks']->value['totalHooksTime']), true);?>
</th>
        <th><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'memory', array('data'=>$_smarty_tpl->tpl_vars['hooks']->value['totalHooksMemory']), true);?>
</th>
      </tr>
    </tfoot>
  </table>
</div>
<?php }
}
