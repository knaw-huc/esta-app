<div id="heActor"  data-action="{$actor_action}">
	<div class="component">
		<div id="actorType" class="componentHeader">Actor(s)</div>
		<div class="element" data-name="actor_name">
			<div class="label">Name</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="actor_name"
										data-validation-profile="5e823fa99af97" class="input_element">
				<div id="errorMsg_5e823fa99af97" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_alias">
			<div class="label">Alias</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="actor_alias" data-table="actor"
										data-validation-profile="5e823fa99afa1" class="input_element" data-auto="yes">
				<div id="errorMsg_5e823fa99afa1" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_sex">
			<div class="label">Sex</div>
			<div class="control"><select id="actor_sex" data-validation-profile="5e823fa99afb3"
										 class="input_element">
					<option value="">--</option>
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="mixed">mixed</option>
					<option value="unknown">unknown</option>
				</select>
				<div id="errorMsg_5e823fa99afb3" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_description">
			<div class="label">Description</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="actor_description"
										   data-validation-profile="5e823fa99afe1" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99afe1" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_role">
			<div class="label">Role</div>
			<div class="control"><select id="actor_role"
										 data-validation-profile="5e823fa99af97" class="input_element">
					<option value="Vendor">Vendor</option>
					<option value="Purchaser">Purchaser</option>
					<option value="Translator or interpreter">Translator or interpreter</option>
					<option value="Commissioner">Commissioner</option>
					<option value="Investor">Investor</option>
					<option value="Insurer">Insurer</option>
					<option value="Outfitter">Outfitter</option>
					<option value="Nominated functionary">Nominated functionary</option>
				</select>
			</div>
		</div>
		<div class="element" data-name="actor_quantity">
			<div class="label">Quantity</div>
			<div class="control"><input type="number" size="4" data-reset-value="line" id="actor_quantity" min="0"
										class="input_element">
			</div>
		</div>
		<div class="element" data-name="actor_presence">
			<div class="label">Presence</div>
			<div class="control"><select id="actor_presence"
										 data-validation-profile="5e823fa99af97" class="input_element">
					<option value="Yes">Yes</option>
					<option value="No">No</option>
					<option value="Unknown">Unknown</option>
				</select>
			</div>
		</div>




		<div class="element" data-name="actor_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="actor_notes"
										   data-validation-profile="5e823fa99afe1" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99afe1" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="actor_source"
										   data-validation-profile="5e823fa99afe7" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99afe7" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="saveBtn" onclick="saveActor()"/>
		<input type="button" value="Back" class="resetBtn" onclick="returnToMainTab()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		<div id="tmpFormatter">
			&nbsp;
		</div>
		<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations()"/>
	</div>
</div>
