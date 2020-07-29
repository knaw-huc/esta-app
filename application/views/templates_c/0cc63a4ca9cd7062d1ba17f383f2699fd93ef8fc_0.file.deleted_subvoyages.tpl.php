<?php
/* Smarty version 3.1.32, created on 2020-07-29 21:25:44
  from '/Library/WebServer/Documents/esta/application/views/templates/deleted_subvoyages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f21cd38ee38c1_96561199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cc63a4ca9cd7062d1ba17f383f2699fd93ef8fc' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/deleted_subvoyages.tpl',
      1 => 1596050740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f21cd38ee38c1_96561199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12457326745f21cd38ecf472_13931523', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_12457326745f21cd38ecf472_13931523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12457326745f21cd38ecf472_13931523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Voyage <?php echo $_smarty_tpl->tpl_vars['voyage']->value;?>
: deleted sub voyages</h2>
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/undelete_subvoyages">
	<table class="resultTable">
		<tr>
			<th>Departure date</th>
			<th>Vessel</th>
			<th>From</th>
			<th>To</th>
			<th>Deleted by</th>
			<th></th>
			<th><input type="checkbox" onclick="change_cbDeleted(this)"</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subvoyages']->value, 'subvoyage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subvoyage']->value) {
?>
			<tr class="even">
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_dept_date_year'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['vessel'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_dept_place'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_arrival_place'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['username'];?>
</td>
				<td></td>
				<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['subvoyage_id'];?>
" name="undelete[]" class="cbDeleted"></td>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
	<br/>
	<div id="dashBoard">
		<?php if ($_smarty_tpl->tpl_vars['role']->value == "ADMIN") {?><input type="submit" class="" value="Undelete"/><?php }?>
		<input type="button" value="Back" onclick="history.back()"/>
	</div>
		<input type="hidden" name="voyage" value="<?php echo $_smarty_tpl->tpl_vars['voyage']->value;?>
"/>
	</form>

<?php
}
}
/* {/block "content"} */
}
