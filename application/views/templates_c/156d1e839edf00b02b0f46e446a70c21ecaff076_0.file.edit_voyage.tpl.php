<?php
/* Smarty version 3.1.32, created on 2021-04-05 14:12:21
  from '/Library/WebServer/Documents/esta/application/views/templates/edit_voyage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_606afea59062d0_20081192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156d1e839edf00b02b0f46e446a70c21ecaff076' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/edit_voyage.tpl',
      1 => 1617624738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606afea59062d0_20081192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1689696144606afea58ee147_72827916', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_1689696144606afea58ee147_72827916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1689696144606afea58ee147_72827916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h2>Subvoyage <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h2>
	<div id="profileData">
		<ul id="profileDataNavigator">
			<li id="profileXMLTab" class="profileDataActiveTab">Subvoyage</li>
			<li id="profileJSONTab">Slaves</li>
			<li id="profileTweakTab">Vessel</li>
			<li id="profileRecordsTab">Cargo</li>
			<li id="voyageTab">Voyage</li>
		</ul>

		<div id="profileDetails">
			<div id="profileXML">
				<?php echo $_smarty_tpl->tpl_vars['voyage_ed']->value;?>

			</div>
			<div id="profileJSON" class="noView">
				<?php echo $_smarty_tpl->tpl_vars['slave_ed']->value;?>

			</div>
			<div id="tweakXML" class="noView">
				<?php echo $_smarty_tpl->tpl_vars['vessel_ed']->value;?>

			</div>
			<div id="metadataRecs" class="noView">
				<div id="noCargos" class="noView">This subvoyage doesn't contain any cargos yet.</div>
				<?php echo $_smarty_tpl->tpl_vars['cargo_ed']->value;?>

			</div>
			<div id="voyage" class="noView">
				<div id="heVoyage" class="component">
					<div class="formRow">
						<div class="formLabel">
							Summary:
						</div>
						<div id="summary" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Year:
						</div>
						<div id="year" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Owner:
						</div>
						<div id="creator" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited on:
						</div>
						<div id="last_mutation" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited by:
						</div>
						<div id="modifier" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div id="globalVoyageBtns">
							<input id="globalVoyageEditBtn" class="saveBtn noView" type="button" value="Edit" onclick="editGlobalVoyage()"/>
							<input id="globalVoyageSaveBtn" class="saveBtn noView" type="button" value="Save" onclick="saveGlobalVoyage()"/>
							<input id="globalVoyageRejectBtn" class="saveBtn noView" type="button" value="Back" onclick="resetGlobalVoyage()"/>
							<input id="globalVoyageOwner" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['editUserID']->value;?>
"/>
							<input id="summaryBuffer" type="hidden">
							<input id="yearBuffer" type="hidden">
						</div>
					</div>
				</div>
			</div>
			<div id="actorForm" class="noView">
				<?php echo $_smarty_tpl->tpl_vars['actor_ed']->value;?>

			</div>
			<div id="slaveGroupForm" class="noView">
				<?php echo $_smarty_tpl->tpl_vars['slave_group_ed']->value;?>

			</div>
			<div id="mutView" class="noView">
				<?php echo $_smarty_tpl->tpl_vars['mut_view']->value;?>

			</div>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
