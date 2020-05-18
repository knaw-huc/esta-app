<?php
/* Smarty version 3.1.32, created on 2020-05-18 20:29:08
  from '/Library/WebServer/Documents/esta/application/views/templates/edit_voyage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ec2d3f4be2d49_36372801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '156d1e839edf00b02b0f46e446a70c21ecaff076' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/edit_voyage.tpl',
      1 => 1589826007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec2d3f4be2d49_36372801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19087625735ec2d3f4bd7cc3_56986988', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_19087625735ec2d3f4bd7cc3_56986988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19087625735ec2d3f4bd7cc3_56986988',
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
				<?php echo $_smarty_tpl->tpl_vars['cargo_ed']->value;?>

			</div>
			<div id="voyage" class="noView">
				<div class="component">
					<div class="formRow">
						<div class="formLabel">
							Summary:
						</div>
						<div class="formField">
							<?php echo $_smarty_tpl->tpl_vars['voyage']->value['summary'];?>

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Year:
						</div>
						<div class="formField">
							<?php echo $_smarty_tpl->tpl_vars['voyage']->value['year'];?>

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Owner:
						</div>
						<div class="formField">
							<?php echo $_smarty_tpl->tpl_vars['voyage']->value['creator'];?>

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited on:
						</div>
						<div class="formField">
							<?php echo $_smarty_tpl->tpl_vars['voyage']->value['last_mutation'];?>

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited by:
						</div>
						<div class="formField">
							<?php echo $_smarty_tpl->tpl_vars['voyage']->value['modifier'];?>

						</div>
					</div>
				</div>
			</div>
			<div id="actorForm" class="noView">
				<?php echo $_smarty_tpl->tpl_vars['actor_ed']->value;?>

			</div>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
