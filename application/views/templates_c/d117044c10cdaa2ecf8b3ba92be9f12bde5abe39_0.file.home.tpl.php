<?php
/* Smarty version 3.1.32, created on 2020-04-30 14:12:46
  from '/Library/WebServer/Documents/esta/application/views/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eaac0bed5ebc4_06918191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd117044c10cdaa2ecf8b3ba92be9f12bde5abe39' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/home.tpl',
      1 => 1588238055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaac0bed5ebc4_06918191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13485935565eaac0bed432d4_24174869', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_13485935565eaac0bed432d4_24174869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13485935565eaac0bed432d4_24174869',
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
		</div>
		<div id="loginError" class="formRow">
		</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
