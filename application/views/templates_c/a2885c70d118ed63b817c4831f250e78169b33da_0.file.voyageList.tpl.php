<?php
/* Smarty version 3.1.32, created on 2021-05-04 19:59:02
  from '/Library/WebServer/Documents/esta/application/views/templates/voyageList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_60918b6626eb91_72557039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2885c70d118ed63b817c4831f250e78169b33da' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/voyageList.tpl',
      1 => 1620150123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60918b6626eb91_72557039 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18762583460918b6624dd22_55236478', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_18762583460918b6624dd22_55236478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18762583460918b6624dd22_55236478',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Voyages: page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</h2>
	<ul id="voyagesMenu">
		<li class="appBtn" id="vmCollapser">Expand</li>
		<li class="appBtn <?php echo $_smarty_tpl->tpl_vars['range']->value;?>
" id="vmMyVoyages"><?php if ($_smarty_tpl->tpl_vars['range']->value == "allRecs") {?>My (sub)voyages<?php } else { ?>All voyages<?php }?></li>
		<li class="appBtn" id="vmSearch">Search</li>
		<li class="appBtn" id="vmNew">New voyage</li>
	</ul>
	<table id="voyageList" class="resultTable">
		<tr>
			<th>ID</th>
			<th>Summary</th>
			<th>Year</th>
			<th>Creator</th>
			<th>Last edit</th>
			<th>Mutation date</th>
			<th></th>
			<th></th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['voyages']->value, 'voyage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voyage']->value) {
?>
			<tr class="voyageRow">
				<td><?php echo $_smarty_tpl->tpl_vars['voyage']->value['voyage_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['voyage']->value['summary'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['voyage']->value['year'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['voyage']->value['creator'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['voyage']->value['modifier'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['voyage']->value['last_mutation'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage/<?php echo $_smarty_tpl->tpl_vars['voyage']->value['voyage_id'];?>
" title="Edit voyage"><img
								src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
				<td><?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['voyage']->value['created_by']) {?><img class="withPointer" title="Delete voyage" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px" onclick="delete_voyage('<?php echo $_smarty_tpl->tpl_vars['voyage']->value['voyage_id'];?>
')"><?php }?></td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['voyage']->value['subvoyages'], 'subvoyage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subvoyage']->value) {
?>
				<tr class="subVoyageRow">
					<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['subvoyage_id'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_dept_date_year'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['captain'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['vessel'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_dept_location'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['subvoyage']->value['sub_arrival_location'];?>
</td>
					<td></td>
					<td></td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<tr id="voyageBrowser">
			<td colspan="3" id="voyageBrowserPrev">
				<?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/<?php if ($_smarty_tpl->tpl_vars['range']->value == "myRecs") {?>my<?php }?>voyages/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">previous</a><?php } else { ?>&nbsp;<?php }?>
			</td>
			<td colspan="3" id="voyageBrowserPage">&nbsp;</td>
			<td colspan="3" id="voyageBrowserNext">
				<?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['pages']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/<?php if ($_smarty_tpl->tpl_vars['range']->value == "myRecs") {?>my<?php }?>voyages/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">next</a><?php } else { ?>&nbsp;<?php }?>
			</td>
		</tr>
	</table>
<?php
}
}
/* {/block "content"} */
}
