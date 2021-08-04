<?php
/* Smarty version 3.1.32, created on 2020-04-30 13:54:30
  from '/Library/WebServer/Documents/esta/application/views/templates/voyageForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eaabc7614b291_51797661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09a2832bfaf267c055b5e6d7b112ffed114fa71c' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/voyageForm.tpl',
      1 => 1588247282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaabc7614b291_51797661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_628457205eaabc7613b855_59106483', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_628457205eaabc7613b855_59106483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_628457205eaabc7613b855_59106483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>New voyage</h2>
	<form id="newVoyageForm" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/accept_new_voyage">
	<div class="component standardForm">
		<div class="componentHeader">
			Generic voyage data
		</div>
		<div class="element">
			<div class="label">
				Summary
			</div>
			<div class="control">
				<input id="voyageSummary" name="summary" type="text" size="80"/>
			</div>
		</div>
		<div class="element">
			<div class="label">
				Year
			</div>
			<div class="control">
				<input id="voyageYear" name="year" type="text" size="4"/>
			</div>
		</div>
		<div class="element">
			<div class="control">
				<input class="appBtn"  type="button" value="OK" onclick="validateNewVoyage()"/>&nbsp;&nbsp;<input class="appBtn"  type="button" value="Back" onclick="history.back()"/>
			</div>
		</div>
		<div id="formError"></div>
	</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
