<?php
/* Smarty version 3.1.32, created on 2020-05-18 14:16:47
  from '/Library/WebServer/Documents/esta/application/views/templates/passwd_changed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec27caf779e53_23050376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca73b7058563a31047b817502ace2ba71b1677f5' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/passwd_changed.tpl',
      1 => 1589804069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec27caf779e53_23050376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8425326125ec27caf777835_51669412', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_8425326125ec27caf777835_51669412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8425326125ec27caf777835_51669412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Change password</h2>
	<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php
}
}
/* {/block "content"} */
}
