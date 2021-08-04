<?php
/* Smarty version 3.1.32, created on 2020-07-07 14:13:39
  from '/Library/WebServer/Documents/esta/application/views/templates/admin_edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f0466f31caae3_49861577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f249b92db63d5e44e3f42249c30f597e33c8ae' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/admin_edit_user.tpl',
      1 => 1594124007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0466f31caae3_49861577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14595480535f0466f31b7500_81533894', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_14595480535f0466f31b7500_81533894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14595480535f0466f31b7500_81533894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2><?php if ($_smarty_tpl->tpl_vars['user']->value == "new") {?>New<?php } else { ?>Edit<?php }?> user</h2>
	<div class="component" style="max-width: 600px;">
		<form id="userForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
admin/save_user">
			<div class="formRow">
				<div class="formLabel">
					First name:
				</div>
				<div class="formField">
					<input type="text" id="chr_name" name="chr_name" value="<?php echo $_smarty_tpl->tpl_vars['chr_name']->value;?>
"/> *
					<div id="chr_name_error" class="userFormError"/>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Family name:
				</div>
				<div class="formField">
					<input type="text" id="name" name="name" size="40" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/> *
					<div id="name_error" class="userFormError"/>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Email:
				</div>
				<div class="formField">
					<input type="text" id="email" name="email" size="60" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/> *
					<div id="email_error" class="userFormError"><?php if (isset($_smarty_tpl->tpl_vars['mail_error']->value)) {
echo $_smarty_tpl->tpl_vars['mail_error']->value;
}?></div>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					User name:
				</div>
				<div class="formField">
					<input type="text" id="username" name="username" size="40" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/> *
					<div id="username_error" class="userFormError"><?php if (isset($_smarty_tpl->tpl_vars['name_error']->value)) {
echo $_smarty_tpl->tpl_vars['name_error']->value;
}?></div>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Role:
				</div>
				<div class="formField">
					<select name="role">
						<option <?php if ($_smarty_tpl->tpl_vars['userrole']->value == "USER") {?>selected <?php }?> value="USER">USER</option>
						<option <?php if ($_smarty_tpl->tpl_vars['userrole']->value == "ADMIN") {?>selected <?php }?> value="ADMIN">ADMIN</option>
					</select>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Active:
				</div>
				<div class="formField">
					<select name="active">
						<option <?php if ($_smarty_tpl->tpl_vars['active']->value == "1") {?>selected <?php }?> value="1">Yes</option>
						<option <?php if ($_smarty_tpl->tpl_vars['active']->value == "0") {?>selected <?php }?>value="0">No</option>
					</select>
				</div>
			</div>
			<div class="formRow">
				<input class="appBtn" type="button" value="Send" onclick="validate_user()"/>
				<input class="appBtn" type="button" value="Back" onclick="window.location = '<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
admin/users'"/>
				<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"/>
			</div>
			<div id="loginError"></div>
		</form>
	</div>
<?php
}
}
/* {/block "content"} */
}
