<div id="heSubvoyage" data-action="{$sub_voyage_action}">
	<div class="component" id="5eaac4f83afa7" data-name="subvoyage" data-order="1">
		<div class="componentHeader">Subvoyage</div>
		<div class="element" data-name="subvoyage_type">
			<div class="label">Type</div>
			<div class="control"><select id="subvoyage_type" data-validation-profile="5eaac4f83b67e"
										 class="input_element">
					<option value="">--</option>
					<option value="sea">sea</option>
					<option value="land">land</option>
				</select>
				<div id="errorMsg_5eaac4f83b67e" class="errorMsg"></div>
			</div>
		</div>
		<hr/>
		<div class="element" data-name="sub_dept_location">
			<div class="label">Location of departure</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value=""
										id="sub_dept_location" data-validation-profile="5eaac4f83b69c"
										class="input_element">
				<div id="errorMsg_5eaac4f83b69c" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_dept_location_standardized">
			<div class="label">Location of departure standardised</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value=""
										id="sub_dept_location_standardized" data-table="slaves" data-validation-profile="5eaac4f83b6d2"
										class="input_element" data-auto="yes">
				<div id="errorMsg_5eaac4f83b6d2" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_dept_location_status">
			<div class="label">Location of departure status</div>
			<div class="control"><select id="sub_dept_location_status" data-validation-profile="5eaac4f83b67e"
										 class="input_element">
					<option value="">--</option>
					<option value="Confirmed">Confirmed</option>
					<option value="Implied">Implied</option>
					<option value="Intended">Intended</option>
					<option value="Uncertain">Uncertain</option>
				</select>
				<div id="errorMsg_5eaac4f83b67e" class="errorMsg"></div>
			</div>
		</div>
		<hr/>
		<div class="element" data-name="sub_dept_date_as_source">
			<div class="label">Departure date as in source</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value=""
										id="sub_dept_date_as_source" data-validation-profile="5eaac4f83b6e2"
										class="input_element">
				<div id="errorMsg_5eaac4f83b6e2" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_dept_date_status">
			<div class="label">Departure date status</div>
			<div class="control"><select id="sub_dept_date_status" data-validation-profile="5eaac4f83b67e"
										 class="input_element" onchange="changeDepartureDateStatus(this)">
					<option value="Confirmed">Confirmed</option>
					<option value="Inferred">Inferred</option>
					<option value="Uncertain">Uncertain</option>
					<option value="Incomplete">Incomplete</option>
					<option value="Range">Range</option>
					<option value="Date alternative">Date alternative</option>
					<option value="Year alternative">Year alternative</option>
					<option value="Month alternative">Month alternative</option>
					<option value="Day alternative">Day alternative</option>
					<option value="Relative">Relative</option>
				</select>
				<div id="errorMsg_5eaac4f83b67e" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_dept_date_standardized">
			<div class="label">Departure date standardized (d-m-y)</div>
			<div class="control">
				<div class="date_control" id="sub_dept_date_from">
					<select id="sub_dept_date_relative" class="input_element noView">
						<option value="">--</option>
						<option value="Before">Before</option>
						<option value="After">After</option>
					</select>
					<input type="number" class="input_element" id="sub_dept_date_day" size="2"> - <input type="number" class="input_element" id="sub_dept_date_month" size="2"> - <input type="number" class="input_element" id="sub_dept_date_year" size="4">
				</div>
				<div class="date_control noView" id="sub_dept_date_to">
					<input type="number" class="input_element" id="sub_dept_date_day_to" size="2"> - <input type="number" class="input_element" id="sub_dept_date_month_to" size="2"> - <input type="number" class="input_element" id="sub_dept_date_year_to" size="4">
				</div>
			</div>
		</div>
		<hr/>
		<div class="element" data-name="sub_arrival_location">
			<div class="label">Place of arrival</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value=""
										id="sub_arrival_location" data-validation-profile="5eaac4f83b700"
										class="input_element">
				<div id="errorMsg_5eaac4f83b700" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_arrival_location_standardized">
			<div class="label">Place of arrival standardised</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value=""
										id="sub_arrival_location_standardized" data-table="slaves" data-validation-profile="5eaac4f83b711"
										class="input_element" data-auto="yes">
				<div id="errorMsg_5eaac4f83b711" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_arrival_location_status">
			<div class="label">Location of departure status</div>
			<div class="control"><select id="sub_arrival_location_status" data-validation-profile="5eaac4f83b67e"  class="input_element">
					<option value="">--</option>
					<option value="Confirmed">Confirmed</option>
					<option value="Implied">Implied</option>
					<option value="Intended">Intended</option>
					<option value="Uncertain">Uncertain</option>
				</select>
				<div id="errorMsg_5eaac4f83b67e" class="errorMsg"></div>
			</div>
		</div>
	<hr/>
		<div class="element" data-name="sub_arrival_date_as_source">
			<div class="label">Arrival date as in source</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value=""
										id="sub_arrival_date_as_source" data-validation-profile="5eaac4f83b721"
										class="input_element">
				<div id="errorMsg_5eaac4f83b721" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_arrival_date_status">
			<div class="label">Arrival date status</div>
			<div class="control">
				<select id="sub_arrival_date_status" data-validation-profile="5eaac4f83b747" class="input_element" onchange="changeArrivalDateStatus(this)">
					<option value="Confirmed">Confirmed</option>
					<option value="Inferred">Inferred</option>
					<option value="Uncertain">Uncertain</option>
					<option value="Incomplete">Incomplete</option>
					<option value="Range">Range</option>
					<option value="Date alternative">Date alternative</option>
					<option value="Year alternative">Year alternative</option>
					<option value="Month alternative">Month alternative</option>
					<option value="Day alternative">Day alternative</option>
					<option value="Relative">Relative</option>
				</select>
				<div id="errorMsg_5eaac4f83b747" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_arrival_date_standardized">
			<div class="label">Departure date standardized (d-m-y)</div>
			<div class="control">
				<div class="date_control" id="sub_arrival_date_from">
					<select id="sub_arrival_date_relative" class="input_element noView">
						<option value="">--</option>
						<option value="Before">Before</option>
						<option value="After">After</option>
					</select>
					<input type="number" id="sub_arrival_date_day" size="2" class="input_element"> - <input type="number" id="sub_arrival_date_month" size="2" class="input_element"> - <input type="number" id="sub_arrival_date_year" size="4" class="input_element">
				</div>
				<div class="date_control noView" id="sub_arrival_date_to">
					<input type="number" id="sub_arrival_date_day_to" size="2" class="input_element"> - <input type="number" id="sub_arrival_date_month_to" size="2" class="input_element"> - <input type="number" id="sub_arrival_date_year_to" size="4" class="input_element">
				</div>
			</div>
		</div>
		<hr/>
		<div class="element" data-name="slaving_voyage_status">
			<div class="label">Slaving voyage status</div>
			<div class="control"><select id="slaving_voyage_status" data-validation-profile="5eaac4f83b79b"
										 class="input_element">
					<option value="">--</option>
					<option value="confirmed">confirmed</option>
					<option value="probable">probable</option>
					<option value="possible">possible</option>
					<option value="projected">projected</option>
				</select>
				<div id="errorMsg_5eaac4f83b79b" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="subvoyage_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
										   id="subvoyage_notes"
										   data-validation-profile="5eaac4f83b7a4"
										   class="input_element"></textarea>
				<div id="errorMsg_5eaac4f83b7a4" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="sub_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
										   id="sub_source"
										   data-validation-profile="5eaac4f83b7ab"
										   class="input_element"></textarea>
				<div id="errorMsg_5eaac4f83b7ab" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="saveBtn" onclick="saveSubVoyage()"/>
		<input type="button" value="Back" class="resetBtn" onclick="history.back()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		<div id="tmpFormatter">
			<table id="voyageActorTable" class="resultTable">
				<tr>
					<th>Actors</th>
					<th></th>
					<th></th>
					<th><a href="javascript:new_actor('voyageActor', editVars.currentVoyage)">+</a></th>
				</tr>
			</table>
		</div>
		<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations()"/>
	</div>
</div>
