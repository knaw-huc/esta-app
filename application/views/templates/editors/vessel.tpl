<div id="heVessel"  data-action="{$vessel_action}">
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
		{*<div class="element" data-name="vessel_possible_overlap">
			<div class="label">Possible overlap</div>
			<div class="control"><input id="vessel_possible_overlap" type="text" data-reset-value="line" value=""
										data-validation-profile="5e823fa99abf2" class="input_element">
				<div id="errorMsg_5e823fa99abf2" class="errorMsg"></div>
			</div>
		</div>*}
		<div class="element" data-name="transport_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="vessel_notes"
										   data-validation-profile="5e823fa99abf8" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99abf8" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="transport_source">
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
