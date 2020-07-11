<?php
/* Smarty version 3.1.32, created on 2020-07-08 15:15:33
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/vessel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f05c6f562d757_43351341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa4979234394773ec697eba1c3b251710d2f22b' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/vessel.tpl',
      1 => 1594062269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f05c6f562d757_43351341 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="heVessel"  data-action="<?php echo $_smarty_tpl->tpl_vars['vessel_action']->value;?>
">
	<div class="component">
		<div class="componentHeader">Vessel</div>
		<div class="element" data-name="vessel_name">
			<div class="label">Vessel name</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="vessel_name"
										data-validation-profile="5e823fa99abbd" class="input_element">
				<div id="errorMsg_5e823fa99abbd" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_name_standardized">
			<div class="label">Vessel name standardised
			</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="vessel_name_standardized" data-table="vessel"
										data-validation-profile="5e823fa99abc9" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99abc9" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_type">
			<div class="label">Vessel type</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="vessel_type"
										data-validation-profile="5e823fa99abcf" class="input_element">
				<div id="errorMsg_5e823fa99abcf" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_type_standardized">
			<div class="label">Vessel type standardised</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="vessel_type_standardized" data-table="vessel"
										data-validation-profile="5e823fa99abd5" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99abd5" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_tonnage">
			<div class="label">Tonnage</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="vessel_tonnage"
										data-validation-profile="5e823fa99abda" class="input_element">
				<div id="errorMsg_5e823fa99abda" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_tonnage_units">
			<div class="label">Tonnage standardised</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="vessel_tonnage_units"
										data-validation-profile="5e823fa99abe0" class="input_element">
				<div id="errorMsg_5e823fa99abe0" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_flag">
			<div class="label">Flag</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="vessel_flag"
										data-validation-profile="5e823fa99abe6" class="input_element">
				<div id="errorMsg_5e823fa99abe6" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vessel_flag_standardized">
			<div class="label">Flag standardised</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="vessel_flag_standardized" data-table="vessel"
										data-validation-profile="5e823fa99abeb" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99abeb" class="errorMsg"></div>
			</div>
		</div>
				<div class="element" data-name="vessel_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="vessel_notes"
										   data-validation-profile="5e823fa99abf8" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99abf8" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="vess_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="vess_source"
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
