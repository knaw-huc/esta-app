<?php
/* Smarty version 3.1.32, created on 2020-05-17 17:34:54
  from '/Library/WebServer/Documents/esta/application/views/templates/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec1599eba6e37_65700633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cba56ea1e24551e4347679af6adeaf1c76b68da' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/users.tpl',
      1 => 1589729684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec1599eba6e37_65700633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4001637265ec1599eb928a4_01256050', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_4001637265ec1599eb928a4_01256050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4001637265ec1599eb928a4_01256050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Users</h2>
	<table class="resultTable">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Active</th>
			<th><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
admin/edit_user">+</a></th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['chr_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
				<td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['user']->value['admin'];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['user']->value['active']) {?>Yes<?php } else { ?>No<?php }?></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
admin/edit_user/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
<?php
}
}
/* {/block "content"} */
}
