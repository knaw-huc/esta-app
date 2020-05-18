<?php
/* Smarty version 3.1.32, created on 2020-05-18 13:51:27
  from '/Library/WebServer/Documents/esta/application/views/templates/standardPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec276bf25f6c5_80022124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc9bad8ea4ade85f5ccf5300c6f4d4d7e7c3c7a' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/standardPage.tpl',
      1 => 1589802158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec276bf25f6c5_80022124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/style.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/ccfstyle.css" type="text/css"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccforms.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/dep_grid.js"><?php echo '</script'; ?>
>
	<link href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/jmenu.css" rel="stylesheet" type="text/css"/>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jmenu.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('document').ready(function () {
			setEvents();
			<?php if (isset($_smarty_tpl->tpl_vars['voyage_ed']->value)) {?>setEditors(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);<?php }?>
			$('#jmenu').jmenu();
			});
	<?php echo '</script'; ?>
>
</head>
<body>
<div id="wrapper">
	<div id="header">
		ESTA Editor (demo)

		<?php if ($_smarty_tpl->tpl_vars['user_name']->value != '') {?>
			<div id="user"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</div>
		<?php }?></div>
	<?php if ($_smarty_tpl->tpl_vars['user_name']->value != '') {?>
		<div id="head_menu">
			<div id="menu-items">
				<ul id="jmenu">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace">Home</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace">Voyages</a></li>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace">My profile</a>
						<ul>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/user_profile">Profile</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/change_password">Change password</a></li>
						</ul>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['role']->value == 'ADMIN') {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
admin/users">Users</a></li>
					<?php }?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/logout">Logout</a></li>
				</ul>
			</div>
		</div>
	<?php }?>
	<div id="content">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15564746615ec276bf25c3b9_58913971', "content");
?>

	</div>
</div>
</body>
</html>
<?php }
/* {block "content"} */
class Block_15564746615ec276bf25c3b9_58913971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15564746615ec276bf25c3b9_58913971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Content<?php
}
}
/* {/block "content"} */
}
