<?php
/* Smarty version 3.1.32, created on 2021-04-06 08:38:30
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/slaves.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_606c01e62c5145_11917092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b9a0ccd905ac6c1aa3b1249dc82bf26c2cf72d6' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/slaves.tpl',
      1 => 1617691083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606c01e62c5145_11917092 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="heSlaves" data-action="<?php echo $_smarty_tpl->tpl_vars['slaves_action']->value;?>
">
	<div class="component">
		<div class="componentHeader">Slaves</div>
		<div class="element" data-name="slaves_total">
			<div class="label">Total amount of slaves</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="slaves_total"
										data-validation-profile="5e823fa99b7ed" class="input_element">
				<div id="errorMsg_5e823fa99b7ed" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_total_standardized">
			<div class="label">Total standardised</div>
			<div class="control"><input id="slaves_total_standardized" type="text" data-reset-value="line" value=""
										data-validation-profile="5e823fa99b954" class="input_element">
				<div id="errorMsg_5e823fa99b954" class="errorMsg"></div>
			</div>
		</div>
				<div class="element" data-name="slaves_mortality">
			<div class="label">Mortality</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="slaves_mortality"
										data-validation-profile="5e823fa99ba1f" class="input_element">
				<div id="errorMsg_5e823fa99ba1f" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_mortality_standardized">
			<div class="label">Mortality standardised</div>
			<div class="control"><input id="slaves_mortality_standardized" type="text" data-reset-value="line" value=""
										data-validation-profile="5e823fa99ba2d" class="input_element">
				<div id="errorMsg_5e823fa99ba2d" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_type">
			<div class="label">Type</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="slaves_type"
										data-validation-profile="5e823fa99ba40" class="input_element">
				<div id="errorMsg_5e823fa99ba40" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_type_standardized">
			<div class="label">Type standardised</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="slaves_type_standardized" data-table="slaves"
										data-validation-profile="5e823fa99ba45" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99ba45" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_ethnicity">
			<div class="label">Ethnicity</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="slaves_ethnicity"
										data-validation-profile="5e823fa99ba55" class="input_element">
				<div id="errorMsg_5e823fa99ba55" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="slaves_notes"
										   data-validation-profile="5e823fa99ca35" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99ca35" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="slaves_source"
										   data-validation-profile="5e823fa99ca46" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99ca46" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="slaveSaveBtn" onclick="saveSlaves();"/>
		<input type="button" value="Back" class="resetBtn" onclick="history.back()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		<div id="tmpFormatter">
			<table id="slaveGroupTable" class="resultTable">
				<tr>
					<th>Groups</th>
					<th></th>
					<th class="btnHeader"><a href="javascript:new_group( editVars.slaves)">+</a></th>
				</tr>
			</table>
			<p>&nbsp;</p>
			<table id="slavesActorTable" class="resultTable">
				<tr>
					<th>Actors</th>
					<th></th>
					<th></th>
					<th class="btnHeader"><a href="javascript:new_actor('slavesActor', editVars.slaves)">+</a></th>
				</tr>
			</table>
		</div>
		<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations();"/>
	</div>
</div>
<?php }
}
