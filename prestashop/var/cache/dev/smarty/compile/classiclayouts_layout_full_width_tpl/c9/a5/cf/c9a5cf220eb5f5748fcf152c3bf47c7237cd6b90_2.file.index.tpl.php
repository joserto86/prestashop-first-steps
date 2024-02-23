<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:44
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d88040b216f5_72339532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d88040b216f5_72339532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30111675865d88040b1f4c8_79346573', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_113698728665d88040b1f8e2_29733814 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_96327537565d88040b20344_67173688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_195505616765d88040b20085_46782062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96327537565d88040b20344_67173688', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_30111675865d88040b1f4c8_79346573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_30111675865d88040b1f4c8_79346573',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_113698728665d88040b1f8e2_29733814',
  ),
  'page_content' => 
  array (
    0 => 'Block_195505616765d88040b20085_46782062',
  ),
  'hook_home' => 
  array (
    0 => 'Block_96327537565d88040b20344_67173688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113698728665d88040b1f8e2_29733814', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195505616765d88040b20085_46782062', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
