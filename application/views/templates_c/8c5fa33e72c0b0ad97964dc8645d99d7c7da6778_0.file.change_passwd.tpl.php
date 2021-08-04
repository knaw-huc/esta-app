<?php
/* Smarty version 3.1.32, created on 2020-05-18 14:16:37
  from '/Library/WebServer/Documents/esta/application/views/templates/change_passwd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec27ca54cda03_57963869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5fa33e72c0b0ad97964dc8645d99d7c7da6778' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/change_passwd.tpl',
      1 => 1589804178,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec27ca54cda03_57963869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12059024535ec27ca54c8e90_51486243', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_12059024535ec27ca54c8e90_51486243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12059024535ec27ca54c8e90_51486243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form name="pw" id="pw" method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/newpasswd">
		<h2>Change password</h2>
		<div class="formRow">
			<div class="formLabel">
				Old password:
			</div>
			<div class="formField">
				<input id="opw" name="opw" type="text" size="30" />
			</div>
		</div>
		<div class="formRow">
			<div class="formLabel">
				New password:
			</div>
			<div class="formField">
				<input id="passwd1" name="passwd1" type="password" size="30" />
			</div>
		</div>
		<div class="formRow">
			<div class="formLabel">
				New password again:
			</div>
			<div class="formField">
				<input id="passwd2" name="passwd2" type="password" size="30" />
			</div>
		</div>
		<div class="formRow">
			<input class="appBtn" type="button" value="OK" onclick="validate_pw()" />
		</div>
		<div id="loginError" class="formRow">
		</div>
	</form>

<?php
}
}
/* {/block "content"} */
}
