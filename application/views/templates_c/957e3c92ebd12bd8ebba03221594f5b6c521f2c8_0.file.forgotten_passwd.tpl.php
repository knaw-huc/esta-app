<?php
/* Smarty version 3.1.32, created on 2020-06-03 11:47:28
  from '/Library/WebServer/Documents/esta/application/views/templates/forgotten_passwd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ed771b0393fb5_51323014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '957e3c92ebd12bd8ebba03221594f5b6c521f2c8' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/forgotten_passwd.tpl',
      1 => 1591177439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed771b0393fb5_51323014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1570777495ed771b037a5f5_94438673', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_1570777495ed771b037a5f5_94438673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1570777495ed771b037a5f5_94438673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form name="login" id="newPasswdForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
sessions/new_passwd">
		<h2>Request new password</h2>
		<div class="formRow">
			<div class="formLabel">
				Email:
			</div>
			<div class="formField">
				<input id="email" name="email" type="text" size="60" /> *
			</div>
		</div>
		<div class="formRow">
			<input class="appBtn" type="button" value="Send" onclick="submitNewPasswd()"/> <input class="appBtn" type="button" value="Back" onclick="history.back()"/>
		</div>
		<div class="message" id="nwPasswdMessage">
			A new password will be sent to this email adress.
		</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
