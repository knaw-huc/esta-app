<?php
/* Smarty version 3.1.32, created on 2020-05-07 15:33:28
  from '/Library/WebServer/Documents/esta/application/views/templates/user_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eb40e2848e276_75864783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c8c018b51f285cd3c8c00c4bdbd75690c7a764' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/user_profile.tpl',
      1 => 1588858123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb40e2848e276_75864783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13165811215eb40e284891f5_73315218', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_13165811215eb40e284891f5_73315218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13165811215eb40e284891f5_73315218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Profile <?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</h2>
	<form name="userProfile" id="userProfileForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/set_profile">
		<div class="formRow">
			<div class="formLabel">Firstname:</div>
			<div class="formField"><span class="noUserEdit"><?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
</span><input type="input" size="30" name="forst_name" class="UserEdit" value="<?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
"/></div>
		</div>
		<div class="formRow">
			<div class="formLabel">Family name:</div>
			<div class="formField"><span class="noUserEdit"><?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
</span><input type="input" size="60" name="name" class="UserEdit" value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
"/></div>
		</div>
		<div class="formRow">
			<div class="formLabel">Email:</div>
			<div class="formField"><span class="noUserEdit"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span><input type="input" size="60" name="email" class="UserEdit" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/></div>
		</div>
		<div class="formRow">
			<input class="appBtn noUserEdit" type="button" value="Edit" onclick="setUserEdit()"/>
			<input class="appBtn UserEdit" type="button" value="Submit" onclick="submitUserEdit()"/>
			<input class="appBtn UserEdit" type="button" value="Revoke" onclick="revokeUserEdit()"/>
		</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
