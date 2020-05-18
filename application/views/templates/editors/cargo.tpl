<div id="heCargo"  data-action="{$cargo_action}">
	<div class="component">
		<div class="componentHeader">Cargo</div>
		<div class="element" data-name="cargo_commodity">
			<div class="label">Cargo commodity</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="cargo_commodity"
										data-validation-profile="5e823fa99d63e" class="input_element">
				<div id="errorMsg_5e823fa99d63e" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_commodity_standardized">
			<div class="label">Cargo commodity standardized</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="cargo_commodity_standardized"
										data-validation-profile="5e823fa99d64c" class="input_element">
				<div id="errorMsg_5e823fa99d64c" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_unit">
			<div class="label">Cargo unit</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_unit"
										data-validation-profile="5e823fa99d653" class="input_element">
				<div id="errorMsg_5e823fa99d653" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_unit_standardized">
			<div class="label">Cargo unit standardized</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_unit_standardized"
										data-validation-profile="5e823fa99d65a" class="input_element">
				<div id="errorMsg_5e823fa99d65a" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_quantity">
			<div class="label">Cargo quantity</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_quantity"
										data-validation-profile="5e823fa99d660" class="input_element">
				<div id="errorMsg_5e823fa99d660" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_quantity_standardized">
			<div class="label">Cargo quantity standardized</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_quantity_standardized"
										data-validation-profile="5e823fa99d666" class="input_element">
				<div id="errorMsg_5e823fa99d666" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_value">
			<div class="label">Cargo value</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_value"
										data-validation-profile="5e823fa99d66d" class="input_element">
				<div id="errorMsg_5e823fa99d66d" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_value_standardized">
			<div class="label">Cargo value standardized</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_value_standardized"
										data-validation-profile="5e823fa99d673" class="input_element">
				<div id="errorMsg_5e823fa99d673" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="cargo_notes"
										   data-validation-profile="5e823fa99de76" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99de76" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="cargo_source"
										   data-validation-profile="5e823fa99de7c" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99de7c" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="cargoSaveBtn" onclick="saveCargo()"/>
		<input type="button" value="Back" class="resetBtn"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		<div id="tmpFormatter">
			<table id="cargoTable">
				<tr>
					<th>Cargos</th>
					<th></th>
					<th><a href="javascript:new_cargo()">+</a></th>
				</tr>
			</table>
		</div>
		<input id="mutBtn" type="button" value="Mutation history" onclick="alert('This function is not active yet.');"/>
	</div>
</div>
