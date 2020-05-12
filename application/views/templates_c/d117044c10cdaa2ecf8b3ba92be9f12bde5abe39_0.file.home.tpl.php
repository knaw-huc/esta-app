<?php
/* Smarty version 3.1.32, created on 2020-05-11 15:20:26
  from '/Library/WebServer/Documents/esta/application/views/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eb9511a341f27_48168818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd117044c10cdaa2ecf8b3ba92be9f12bde5abe39' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/home.tpl',
      1 => 1589203220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb9511a341f27_48168818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5449406645eb9511a33b727_14710354', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_5449406645eb9511a33b727_14710354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5449406645eb9511a33b727_14710354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<form name="login" id="loginForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
sessions/login">
		<h2>Login</h2>
		<div class="formRow">
			<div class="formLabel">
				User name:
			</div>
			<div class="formField">
				<input id="userName" name="username" type="text" size="30" />
			</div>
		</div>
		<div class="formRow">
			<div class="formLabel">
				Password:
			</div>
			<div class="formField">
				<input id="passwd" name="passwd" type="password" size="30" />
			</div>
		</div>
		<div class="formRow">
			<input class="appBtn" type="button" value="Login" onclick="validate_login()" />
			<a id="forgotPasswd" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
sessions/forgot_passwd">Forgot your password?</a>
		</div>
		<div id="loginError" class="formRow">
		</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
