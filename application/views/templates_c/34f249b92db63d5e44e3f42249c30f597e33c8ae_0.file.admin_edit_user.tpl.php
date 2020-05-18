<?php
/* Smarty version 3.1.32, created on 2020-05-18 18:12:48
  from '/Library/WebServer/Documents/esta/application/views/templates/admin_edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec2b4008c6b58_40346248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34f249b92db63d5e44e3f42249c30f597e33c8ae' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/admin_edit_user.tpl',
      1 => 1589818364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec2b4008c6b58_40346248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1563626955ec2b4008bdd51_06421759', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_1563626955ec2b4008bdd51_06421759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1563626955ec2b4008bdd51_06421759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2><?php if ($_smarty_tpl->tpl_vars['user']->value == "new") {?>New<?php } else { ?>Edit<?php }?> user</h2>
	<div class="component" style="max-width: 600px;">
		<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
admin/save_user">
			<div class="formRow">
				<div class="formLabel">
					First name:
				</div>
				<div class="formField">
					<input type="text" name="chr_name" value="<?php echo $_smarty_tpl->tpl_vars['chr_name']->value;?>
"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Family name:
				</div>
				<div class="formField">
					<input type="text" name="name" size="40" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Email:
				</div>
				<div class="formField">
					<input type="text" name="email" size="60" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					User name:
				</div>
				<div class="formField">
					<input type="text" name="username" size="40" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/> *
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
				<input class="appBtn" type="submit" value="Send"/>
				<input class="appBtn" type="button" value="Back" onclick="history.back()"/>
				<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"/>
			</div>
		</form>
	</div>
<?php
}
}
/* {/block "content"} */
}
