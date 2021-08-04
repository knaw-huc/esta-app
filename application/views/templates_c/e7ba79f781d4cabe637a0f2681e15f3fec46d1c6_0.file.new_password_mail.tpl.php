<?php
/* Smarty version 3.1.32, created on 2020-05-25 12:02:31
  from '/Library/WebServer/Documents/esta/application/views/templates/new_password_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ecb97b7ba4b29_80367463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7ba79f781d4cabe637a0f2681e15f3fec46d1c6' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/new_password_mail.tpl',
      1 => 1590400860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ecb97b7ba4b29_80367463 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear user,

On your request a new password is generated for your ESTA account.

The password is: <?php echo $_smarty_tpl->tpl_vars['pw']->value;?>


With greetings,

The ESTA administrator
<?php }
}
