<?php
/* Smarty version 3.1.32, created on 2020-06-03 13:44:49
  from '/Library/WebServer/Documents/esta/application/views/templates/invite_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ed78d31524af7_08729424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9b37dde040d36f5fb7647baceacdd9de927188e' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/invite_user.tpl',
      1 => 1591184261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed78d31524af7_08729424 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
,

Welcome to the ESTA application. An account is made for you.

User name: <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>


Password: <?php echo $_smarty_tpl->tpl_vars['passwd']->value;?>


You can login at <?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
. In your account settings you can change your password.

Best,

The ESTA administrators
<?php }
}
