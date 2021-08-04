<?php
/* Smarty version 3.1.32, created on 2020-06-03 12:02:42
  from '/Library/WebServer/Documents/esta/application/views/templates/passwd_send.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ed775428b6675_34121856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15cc4c7d9c8144d64d8932bd9c7413dc5641b690' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/passwd_send.tpl',
      1 => 1591178551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed775428b6675_34121856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9773368305ed775428b2216_79348585', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_9773368305ed775428b2216_79348585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9773368305ed775428b2216_79348585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>New password</h2>
	<p>A new password is send to <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
.</p>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
">Login</a></p>
<?php
}
}
/* {/block "content"} */
}
