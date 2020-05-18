<?php
/* Smarty version 3.1.32, created on 2020-05-18 08:06:12
  from '/Library/WebServer/Documents/esta/application/views/templates/voyage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec225d4c0f485_37405109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69526d4fd7a0c5ab00e32a42ee8f1cad0075f4c8' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/voyage.tpl',
      1 => 1589781800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec225d4c0f485_37405109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11066347625ec225d4bf8d60_01347904', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_11066347625ec225d4bf8d60_01347904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11066347625ec225d4bf8d60_01347904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Voyage <?php echo $_smarty_tpl->tpl_vars['voyage_id']->value;?>
: sub voyages</h2>
	<table class="resultTable">
		<tr>
			<th>Code</th>
			<th>Departure date</th>
			<th>Vessel</th>
			<th>Captain</th>
			<th>From</th>
			<th>To</th>
			<th></th>
			<th><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/new_subvoyage">+</a></th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subvoyages']->value, 'subvoyage');
$_smarty_tpl->tpl_vars['subvoyage']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subvoyage']->value) {
$_smarty_tpl->tpl_vars['subvoyage']->index++;
$__foreach_subvoyage_0_saved = $_smarty_tpl->tpl_vars['subvoyage'];
?>
			<tr class="even">
				<td id="SV<?php echo $_smarty_tpl->tpl_vars['subvoyage']->index+1;?>
" class="sea" onclick="set_candidate(this)">SV<?php echo $_smarty_tpl->tpl_vars['subvoyage']->index+1;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_dept_date_year'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['vessel'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['captain'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_dept_place'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_arrival_place'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/edit_voyage/<?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['subvoyage_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
				<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
				</td>
			</tr>
		<?php
$_smarty_tpl->tpl_vars['subvoyage'] = $__foreach_subvoyage_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
	<br/>
	<h2>Subvoyage relations</h2>
	<table id="dependencyTable">
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
		<tr>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
		<tr>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
		<tr>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
	</table>
	<div id="dashBoard">
		<input type="button" value="Add row" onclick="addRow()"/>
		<input type="button" value="Add column" onclick="addCol()"/>
	</div>
<?php
}
}
/* {/block "content"} */
}
