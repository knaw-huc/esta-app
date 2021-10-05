<?php
/* Smarty version 3.1.32, created on 2021-10-05 18:40:08
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/vessel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_615c9c0894d8d0_82199549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa4979234394773ec697eba1c3b251710d2f22b' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/vessel.tpl',
      1 => 1633459085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615c9c0894d8d0_82199549 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="heVessel"  data-action="<?php echo $_smarty_tpl->tpl_vars['vessel_action']->value;?>
">
	<div class="component">
		<div class="componentHeader">Transport</div>
		<div class="element" data-name="vessel_name">
			<div class="label">Vehicle name</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="transport_name"
										data-validation-profile="5e823fa99abbd" class="input_element">
				<div id="errorMsg_5e823fa99abbd" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_name_standardized">
			<div class="label">Vehicle name standardised
			</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="transport_name_standardized" data-table="vessel"
										data-validation-profile="5e823fa99abc9" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99abc9" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_type">
			<div class="label">Vehicle type</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="transport_type" data-table="vessel"
										data-validation-profile="5e823fa99abd5" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99abcf" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_type_standardized">
			<div class="label">Vehicle type standardised</div>
			<div class="control">
				<select id="transport_type_standardized"
						data-validation-profile="5e823fa99abcf" class="input_element">
					<option value="Non-vehicular">Non-vehicular</option>
					<option value="Boat">Boat</option>
					<option value="Ship">Ship</option>
					<option value="Wagon">Wagon</option>
					<option value="Train">Train</option>
				</select>
				<div id="errorMsg_5e823fa99abd5" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_tonnage">
			<div class="label">Capacity</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="transport_capacity"
										data-validation-profile="5e823fa99abda" class="input_element">
				<div id="errorMsg_5e823fa99abda" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_flag">
			<div class="label">Designation</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="transport_designation"
										data-validation-profile="5e823fa99abe6" class="input_element">
				<div id="errorMsg_5e823fa99abe6" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_flag_standardized">
			<div class="label">Designation standardised</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="transport_designation_standardized" data-table="vessel"
										data-validation-profile="5e823fa99abeb" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99abeb" class="errorMsg"></div>
			</div>
		</div>
				<div class="element" data-name="transport_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="transport_notes"
										   data-validation-profile="5e823fa99abf8" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99abf8" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="transport_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="transport_source"
										   data-validation-profile="5e823fa99abfd" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99abfd" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="saveVesselBtn" onclick="saveVessel()"/>
		<input type="button" value="Back" class="resetBtn" onclick="history.back()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		<div id="tmpFormatter">
			&nbsp;
		</div>
		<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations();"/>
	</div>
</div>
<?php }
}
