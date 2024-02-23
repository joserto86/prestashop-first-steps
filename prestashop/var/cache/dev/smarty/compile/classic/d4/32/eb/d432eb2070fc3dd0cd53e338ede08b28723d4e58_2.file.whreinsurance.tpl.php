<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:44
  from '/var/www/html/modules/whreinsurance/views/templates/hook/whreinsurance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d88040c2fbc9_83391099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd432eb2070fc3dd0cd53e338ede08b28723d4e58' => 
    array (
      0 => '/var/www/html/modules/whreinsurance/views/templates/hook/whreinsurance.tpl',
      1 => 1708342345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d88040c2fbc9_83391099 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="whreinsurance_container">
    <div>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_img_dir']->value, ENT_QUOTES, 'UTF-8');?>
wh1.png"/>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Free delivery",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
</span>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Get free delivery",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>

            <br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"for orders above 50€",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
</p>
    </div>
    <div>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_img_dir']->value, ENT_QUOTES, 'UTF-8');?>
wh2.png"/>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Secured payments",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
</span>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Every transaction is secured",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
<br/><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"by our partner",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
</p>
    </div>
    <div>
        <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_img_dir']->value, ENT_QUOTES, 'UTF-8');?>
wh3.png"/>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Free returns",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
</span>
        <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Don't hesitate, free return",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>
<br/>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"for your products within 15 days",'mod'=>"whreinsurance"),$_smarty_tpl ) );?>

        </p>
    </div>
</div><?php }
}
