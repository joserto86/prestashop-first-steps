<?php
/* Smarty version 4.3.4, created on 2024-02-23 12:23:44
  from '/var/www/html/modules/whcallback/views/templates/hook/whcallback.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65d88040c390b0_96828541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec3eed93b543ac8fac051f11194db1d4722351b' => 
    array (
      0 => '/var/www/html/modules/whcallback/views/templates/hook/whcallback.tpl',
      1 => 1708343515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d88040c390b0_96828541 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="whcallback_container">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Any question? We can call you back!",'mod'=>"whcallback"),$_smarty_tpl ) );?>
</span>
    <?php if ((isset($_smarty_tpl->tpl_vars['alert_message']->value)) || (isset($_smarty_tpl->tpl_vars['success_message']->value))) {?>
        <p class="alert <?php if ((isset($_smarty_tpl->tpl_vars['alert_message']->value))) {?>alert-warning<?php } else { ?>alert-success<?php }?>">
            <?php if ((isset($_smarty_tpl->tpl_vars['alert_message']->value))) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['alert_message']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php if ((isset($_smarty_tpl->tpl_vars['success_message']->value))) {?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['success_message']->value, ENT_QUOTES, 'UTF-8');?>

                <?php }?>
            <?php }?>
        </p>
    <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Please leave us your details and we call you back",'mod'=>"whcallback"),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['hours']->value > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"in less than",'mod'=>"whcallback"),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hours']->value, ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"hour(s)",'mod'=>"whcallback"),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"as soon as possible!",'mod'=>"whcallback"),$_smarty_tpl ) );
}?></p>
    <?php }?>
    <form action="" method="POST">
        <label for="whcbfirstname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Firstname",'mod'=>"whcallback"),$_smarty_tpl ) );?>

            <input type="text" name="whcbfirstname" id="whcbfirstname"/>
        </label>
        <label for="whcblastname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Lastname",'mod'=>"whcallback"),$_smarty_tpl ) );?>

            <input type="text" name="whcblastname" id="whcblastname"/>
        </label>
        <label for="whcbphone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Phone number",'mod'=>"whcallback"),$_smarty_tpl ) );?>

            <input type="text" name="whcbphone" id="whcbphone"/>
        </label>
        <div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','mod'=>'psgdpr','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

        </div>
        <div class="break"></div>
        <input type="submit" name="whcbsubmit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','mod'=>'whcallback'),$_smarty_tpl ) );?>
" class="btn btn-primary"/>
    </form>
</div><?php }
}
