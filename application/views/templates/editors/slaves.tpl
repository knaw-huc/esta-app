<div id="heSlaves" data-action="{$slaves_action}">
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
			<div class="label">Total standardized</div>
			<div class="control">Min: <input id="slaves_total_standardized_min" type="number" min="0" size="4" data-reset-value="line" value=""
										data-validation-profile="5e823fa99b954" class="input_element">&nbsp;
				Max: <input id="slaves_total_standardized_max" type="number" min="0" size="4" data-reset-value="line" value=""
							data-validation-profile="5e823fa99b954" class="input_element">&nbsp;
				Total: <input id="slaves_total_standardized_total" type="number" min="0" size="4" data-reset-value="line" value=""
							  data-validation-profile="5e823fa99b954" class="input_element">
				<div id="errorMsg_5e823fa99b954" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_total_status">
			<div class="label">Total status</div>
			<div class="control"><select id="slaves_total_status"
										 data-validation-profile="5e823fa99abcf" class="input_element">
					<option value="Confirmed">Confirmed</option>
					<option value="Approximate">Approximate</option>
					<option value="Range">Range</option>
					<option value="Unknown">Unknown</option>
				</select>
				<div id="errorMsg_5e823fa99ba45" class="errorMsg"></div>
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
			<div class="control"><input id="slaves_mortality_standardized" type="number" data-reset-value="line" value="" min="0" size="4"
										data-validation-profile="5e823fa99ba2d" class="input_element">
				<div id="errorMsg_5e823fa99ba2d" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_type">
			<div class="label">Type of forced relocation</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="slaves_type"
										data-validation-profile="5e823fa99ba40" class="input_element">
				<div id="errorMsg_5e823fa99ba40" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="slaves_type_standardized">
			<div class="label">Type of forced relocation standardised</div>
			<div class="control"><select id="slaves_type_standardized"
										 data-validation-profile="5e823fa99abcf" class="input_element">
					<option value="Slave trade">Slave trade</option>
					<option value="Penal labour">Penal labour</option>
					<option value="Tributary">Tributary</option>
					<option value="Prisoners of war">Prisoners of war</option>
					<option value="Other">Other</option>
				</select>
				<div id="errorMsg_5e823fa99ba45" class="errorMsg"></div>
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
