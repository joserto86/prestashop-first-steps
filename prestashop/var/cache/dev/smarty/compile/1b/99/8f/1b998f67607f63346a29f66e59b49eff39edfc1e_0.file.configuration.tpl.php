<?php
/* Smarty version 4.3.4, created on 2024-02-23 13:47:02
  from '/var/www/html/tools/profiling/templates/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d893c61f7493_67439743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b998f67607f63346a29f66e59b49eff39edfc1e' => 
    array (
      0 => '/var/www/html/tools/profiling/templates/configuration.tpl',
      1 => 1702479318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d893c61f7493_67439743 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-4">
  <table class="table table-condensed">
    <tr>
      <td>PrestaShop Version</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['psVersion'];?>
</td>
    </tr>
    <tr>
      <td>PHP Version</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['phpVersion'];?>
</td>
    </tr>
    <tr>
      <td>MySQL Version</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['mysqlVersion'];?>
</td>
    </tr>
    <tr>
      <td>Memory Limit</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['memoryLimit'];?>
</td>
    </tr>
    <tr>
      <td>Max Execution Time</td>
      <td><?php echo $_smarty_tpl->tpl_vars['configuration']->value['maxExecutionTime'];?>
s</td>
    </tr>
    <tr>
      <td>Smarty Cache</td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['configuration']->value['smartyCache']) {?>
          <span class="success">enabled</span>
        <?php } else { ?>
          <span class="error">disabled</span>
        <?php }?>
      </td>
    </tr>
    <tr>
      <td>Smarty Compilation</td>
      <td>
      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['smartyCompilation'] == 0) {?>
        <span class="success">never recompile</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['smartyCompilation'] == 1) {?>
        <span class="warning">auto</span>
      <?php } else { ?>
        <span class="red">force compile</span>
      <?php }?>
      </td>
    </tr>
  </table>
</div>
<?php }
}
