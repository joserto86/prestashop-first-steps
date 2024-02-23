<?php
/* Smarty version 4.3.4, created on 2024-02-13 16:54:01
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cb909985ff71_00663371',
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
function content_65cb909985ff71_00663371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5002830865cb909985ede8_09406931', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_117259701465cb909985f0b5_23639466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_128652907665cb909985f6a2_85954043 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_75495878965cb909985f4a8_10638158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128652907665cb909985f6a2_85954043', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5002830865cb909985ede8_09406931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5002830865cb909985ede8_09406931',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_117259701465cb909985f0b5_23639466',
  ),
  'page_content' => 
  array (
    0 => 'Block_75495878965cb909985f4a8_10638158',
  ),
  'hook_home' => 
  array (
    0 => 'Block_128652907665cb909985f6a2_85954043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117259701465cb909985f0b5_23639466', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75495878965cb909985f4a8_10638158', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
