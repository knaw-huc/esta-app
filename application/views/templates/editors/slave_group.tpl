<div id="heSlaveGroup" data-action="{$slave_group_action}">
	<div class="component">
		<div class="componentHeader">Slave group</div>
		<div class="element" data-name="sex">
			<div class="label">Sex</div>
			<div class="control"><select id="gr_sex" data-validation-profile="5eaac4f83b67e"
										 class="input_element">
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="mixed">mixed</option>
					<option value="unknown">unknown</option>
				</select>
				<div id="errorMsg_5e823fa99b7ed" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="ethnicity">
			<div class="label">Ethnicity</div>
			<div class="control">
				<input type="text" size="30" data-reset-value="line" value="" id="gr_ethnicity"
					   data-validation-profile="5e823fa99b83a" class="input_element">
			</div>
		</div>
		<div class="element" data-name="physical_state">
			<div class="label">Physical state</div>
			<div class="control">
				<select id="gr_physical_state" data-validation-profile="5eaac4f83b67e"
						class="input_element">
					<option value="Healthy">Healthy</option>
					<option value="Impaired">Impaired</option>
					<option value="Pregnant">Pregnant</option>
					<option value="Other">Other</option>
				</select>
			</div>
		</div>
		<div class="element" data-name="age_group">
			<div class="label">Age group</div>
			<div class="control"><select id="gr_age_group" data-validation-profile="5eaac4f83b67e"
										 class="input_element">
					<option value="adult">adult</option>
					<option value="child">child</option>
					<option value="infant">infant</option>
					<option value="unknown">unknown</option>
				</select>
				<div id="errorMsg_5e823fa99b821" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="quantity">
			<div class="label">Amount</div>
			<div class="control"><input type="text" size="30" data-reset-value="line" value="" id="gr_quantity"
										data-validation-profile="5e823fa99b83a" class="input_element">
				<div id="errorMsg_5e823fa99b83a" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="gr_quantity_standardized">
			<div class="label">Amount standardized</div>
			<div class="control"><input type="number" size="4" data-reset-value="line" value="" id="gr_quantity_standardized" min="0"
										data-validation-profile="5e823fa99b83a" class="input_element">
				<div id="errorMsg_5e823fa99b83a" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="slaveSaveBtn" onclick="saveSlaveGroup();"/>
		<input type="button" value="Back" class="resetBtn" onclick="returnToMainTab()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		{*<div id="tmpFormatter">
			<table id="slavesActorTable" class="resultTable">
				<tr>
					<th>Actors</th>
					<th></th>
					<th></th>
					<th><a href="javascript:new_actor('slaveGroupActor', editVars.slaveGroup)">+</a></th>
				</tr>
			</table>
		</div>*}
		<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations();"/>
	</div>
</div>
