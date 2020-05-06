{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyage 2775</h2>
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
				<div id="ccform1">
					<div class="component" id="5eaac4f83afa7" data-name="subvoyage" data-order="1">

						<div class="element" data-name="subvoyage_type" data-order="undefined">
							<div class="label">Type</div>
							<div class="control"><select id="5eaac4f83b67e" data-validation-profile="5eaac4f83b67e"
														 class="input_element">
									<option value="">--</option>
									<option value="sea">sea</option>
									<option value="land">land</option>
								</select>
								<div id="errorMsg_5eaac4f83b67e" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_place" data-order="undefined">
							<div class="label">Place of departure</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b69c" data-validation-profile="5eaac4f83b69c"
														class="input_element">
								<div id="errorMsg_5eaac4f83b69c" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_region" data-order="undefined">
							<div class="label">Region of departure</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b6c6" data-validation-profile="5eaac4f83b6c6"
														class="input_element">
								<div id="errorMsg_5eaac4f83b6c6" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_polity" data-order="undefined">
							<div class="label">Polity of departure</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b6cc" data-validation-profile="5eaac4f83b6cc"
														class="input_element">
								<div id="errorMsg_5eaac4f83b6cc" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_place_standardized" data-order="undefined">
							<div class="label">Place of departure standardised</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b6d2" data-validation-profile="5eaac4f83b6d2"
														class="input_element">
								<div id="errorMsg_5eaac4f83b6d2" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_region_standardized" data-order="undefined">
							<div class="label">Region of departure standardised</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b6d7" data-validation-profile="5eaac4f83b6d7"
														class="input_element">
								<div id="errorMsg_5eaac4f83b6d7" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_polity_standardized" data-order="undefined">
							<div class="label">Polity of departure standardised</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b6dd" data-validation-profile="5eaac4f83b6dd"
														class="input_element">
								<div id="errorMsg_5eaac4f83b6dd" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_date_as_source" data-order="undefined">
							<div class="label">Source departure date</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5eaac4f83b6e2" data-validation-profile="5eaac4f83b6e2"
														class="input_element">
								<div id="errorMsg_5eaac4f83b6e2" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_date_year" data-order="undefined">
							<div class="label">Departure date year</div>
							<div class="control"><input type="text" size="4" data-reset-value="line" value=""
														id="5eaac4f83b6e7"
														data-validation-profile="5eaac4f83b6e7" class="input_element">
								<div id="errorMsg_5eaac4f83b6e7" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_date_month" data-order="undefined">
							<div class="label">Departure date month</div>
							<div class="control"><input type="text" size="2" data-reset-value="line" value=""
														id="5eaac4f83b6ed"
														data-validation-profile="5eaac4f83b6ed" class="input_element">
								<div id="errorMsg_5eaac4f83b6ed" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_date_day" data-order="undefined">
							<div class="label">Departure date day</div>
							<div class="control"><input type="text" size="2" data-reset-value="line" value=""
														id="5eaac4f83b6f2"
														data-validation-profile="5eaac4f83b6f2" class="input_element">
								<div id="errorMsg_5eaac4f83b6f2" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_dept_date_status" data-order="undefined">
							<div class="label">Departure date status</div>
							<div class="control"><select id="5eaac4f83b6f8" data-validation-profile="5eaac4f83b6f8"
														 class="input_element">
									<option value="">--</option>
									<option value="uncertain">uncertain</option>
									<option value="incomplete">incomplete</option>
									<option value="range">range</option>
									<option value="date/month/day/year alternative">date/month/day/year alternative
									</option>
									<option value="unknown to indicate status of departure date">unknown to indicate
										status of
										departure date
									</option>
								</select>
								<div id="errorMsg_5eaac4f83b6f8" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_place" data-order="undefined">
							<div class="label">Place of arrival</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b700" data-validation-profile="5eaac4f83b700"
														class="input_element">
								<div id="errorMsg_5eaac4f83b700" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_region" data-order="undefined">
							<div class="label">Region of arrival</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b706" data-validation-profile="5eaac4f83b706"
														class="input_element">
								<div id="errorMsg_5eaac4f83b706" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_polity" data-order="undefined">
							<div class="label">Polity of arrival</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b70c" data-validation-profile="5eaac4f83b70c"
														class="input_element">
								<div id="errorMsg_5eaac4f83b70c" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_place_standardized" data-order="undefined">
							<div class="label">Place of arrival standardised</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b711" data-validation-profile="5eaac4f83b711"
														class="input_element">
								<div id="errorMsg_5eaac4f83b711" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_region_standardized" data-order="undefined">
							<div class="label">Region of arrival standardised</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b717" data-validation-profile="5eaac4f83b717"
														class="input_element">
								<div id="errorMsg_5eaac4f83b717" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_polity_standardized" data-order="undefined">
							<div class="label">Polity of arrival standardised</div>
							<div class="control"><input type="text" size="100" data-reset-value="line" value=""
														id="5eaac4f83b71c" data-validation-profile="5eaac4f83b71c"
														class="input_element">
								<div id="errorMsg_5eaac4f83b71c" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_date_as_source" data-order="undefined">
							<div class="label">Arrival date source</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5eaac4f83b721" data-validation-profile="5eaac4f83b721"
														class="input_element">
								<div id="errorMsg_5eaac4f83b721" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_date_year_standardized" data-order="undefined">
							<div class="label">Year of arrival standardised</div>
							<div class="control"><input type="text" size="4" data-reset-value="line" value=""
														id="5eaac4f83b727"
														data-validation-profile="5eaac4f83b727" class="input_element">
								<div id="errorMsg_5eaac4f83b727" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_date_month_standardized" data-order="undefined">
							<div class="label">Month of arrival standardised</div>
							<div class="control"><input type="text" size="2" data-reset-value="line" value=""
														id="5eaac4f83b72d"
														data-validation-profile="5eaac4f83b72d" class="input_element">
								<div id="errorMsg_5eaac4f83b72d" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_date_day_standardized" data-order="undefined">
							<div class="label">Day of arrival standardised</div>
							<div class="control"><input type="text" size="2" data-reset-value="line" value=""
														id="5eaac4f83b732"
														data-validation-profile="5eaac4f83b732" class="input_element">
								<div id="errorMsg_5eaac4f83b732" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_range_arrival_date_year_standardized"
							 data-order="undefined">
							<div class="label">Range arrival year standardised</div>
							<div class="control"><input type="text" size="4" data-reset-value="line" value=""
														id="5eaac4f83b737"
														data-validation-profile="5eaac4f83b737" class="input_element">
								<div id="errorMsg_5eaac4f83b737" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_range_arrival_date_month_standardized"
							 data-order="undefined">
							<div class="label">Range arrival month standardised</div>
							<div class="control"><input type="text" size="2" data-reset-value="line" value=""
														id="5eaac4f83b73c"
														data-validation-profile="5eaac4f83b73c" class="input_element">
								<div id="errorMsg_5eaac4f83b73c" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_range_arrival_date_day_standardized" data-order="undefined">
							<div class="label">Range arrival day standardised</div>
							<div class="control"><input type="text" size="2" data-reset-value="line" value=""
														id="5eaac4f83b741"
														data-validation-profile="5eaac4f83b741" class="input_element">
								<div id="errorMsg_5eaac4f83b741" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_arrival_date_status" data-order="undefined">
							<div class="label">Arrival date status</div>
							<div class="control"><select id="5eaac4f83b747" data-validation-profile="5eaac4f83b747"
														 class="input_element">
									<option value="">--</option>
									<option value="confirmed">confirmed</option>
									<option value="inferred">inferred</option>
									<option value="incomplete">incomplete</option>
									<option value="uncertain">uncertain</option>
									<option value="range">range</option>
									<option value="date/month/day/year alternative">date/month/day/year alternative
									</option>
									<option value="unknown to indicate status of arrival date">unknown to indicate
										status of
										arrival date
									</option>
								</select>
								<div id="errorMsg_5eaac4f83b747" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="voyage_status" data-order="undefined">
							<div class="label">Status</div>
							<div class="control"><select id="5eaac4f83b781" data-validation-profile="5eaac4f83b781"
														 class="input_element">
									<option value="">--</option>
									<option value="confirmed">confirmed</option>
									<option value="probable">probable</option>
									<option value="possible">possible</option>
									<option value="projected">projected</option>
								</select>
								<div id="errorMsg_5eaac4f83b781" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="voyage_outfitter" data-order="undefined">
							<div class="label">Outfitter</div>
							<div class="control"><input id="5eaac4f83b789" type="text" data-reset-value="line" value=""
														data-validation-profile="5eaac4f83b789" class="input_element">
								<div id="errorMsg_5eaac4f83b789" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="voyage_investor" data-order="undefined">
							<div class="label">Investor</div>
							<div class="control"><input id="5eaac4f83b790" type="text" data-reset-value="line" value=""
														data-validation-profile="5eaac4f83b790" class="input_element">
								<div id="errorMsg_5eaac4f83b790" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="voyage_insurer" data-order="undefined">
							<div class="label">Insurer</div>
							<div class="control"><input id="5eaac4f83b795" type="text" data-reset-value="line" value=""
														data-validation-profile="5eaac4f83b795" class="input_element">
								<div id="errorMsg_5eaac4f83b795" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaving_voyage_status" data-order="undefined">
							<div class="label">Slaving voyage status</div>
							<div class="control"><select id="5eaac4f83b79b" data-validation-profile="5eaac4f83b79b"
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
						<div class="element" data-name="subvoyage_notes" data-order="undefined">
							<div class="label">Notes</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5eaac4f83b7a4"
														   data-validation-profile="5eaac4f83b7a4"
														   class="input_element"></textarea>
								<div id="errorMsg_5eaac4f83b7a4" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="sub_source" data-order="undefined">
							<div class="label">Source</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5eaac4f83b7ab"
														   data-validation-profile="5eaac4f83b7ab"
														   class="input_element"></textarea>
								<div id="errorMsg_5eaac4f83b7ab" class="errorMsg"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="profileJSON" class="noView">
				<div id="ccform2">
					<div class="component">
						<div class="element" data-name="slaves_total" data-order="undefined">
							<div class="label">Total amount of slaves</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b7ed"
														data-validation-profile="5e823fa99b7ed" class="input_element">
								<div id="errorMsg_5e823fa99b7ed" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_male" data-order="undefined">
							<div class="label">Total male slaves</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b821"
														data-validation-profile="5e823fa99b821" class="input_element">
								<div id="errorMsg_5e823fa99b821" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_female" data-order="undefined">
							<div class="label">Total female slaves</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b83a"
														data-validation-profile="5e823fa99b83a" class="input_element">
								<div id="errorMsg_5e823fa99b83a" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_males_adult" data-order="undefined">
							<div class="label">Total adult males</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b858"
														data-validation-profile="5e823fa99b858" class="input_element">
								<div id="errorMsg_5e823fa99b858" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_females_adult" data-order="undefined">
							<div class="label">Total adult females</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b874"
														data-validation-profile="5e823fa99b874" class="input_element">
								<div id="errorMsg_5e823fa99b874" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_males_children" data-order="undefined">
							<div class="label">Total male children</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b89a"
														data-validation-profile="5e823fa99b89a" class="input_element">
								<div id="errorMsg_5e823fa99b89a" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_female_children" data-order="undefined">
							<div class="label">Total female children</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b8cb"
														data-validation-profile="5e823fa99b8cb" class="input_element">
								<div id="errorMsg_5e823fa99b8cb" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_adults" data-order="undefined">
							<div class="label">Total adults</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b8ed"
														data-validation-profile="5e823fa99b8ed" class="input_element">
								<div id="errorMsg_5e823fa99b8ed" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_children" data-order="undefined">
							<div class="label">Total children</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b910"
														data-validation-profile="5e823fa99b910" class="input_element">
								<div id="errorMsg_5e823fa99b910" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_infants" data-order="undefined">
							<div class="label">Total infants</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99b935"
														data-validation-profile="5e823fa99b935" class="input_element">
								<div id="errorMsg_5e823fa99b935" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_standardized" data-order="undefined">
							<div class="label">Total standardised</div>
							<div class="control"><input id="5e823fa99b954" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b954" class="input_element">
								<div id="errorMsg_5e823fa99b954" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_male_standardized" data-order="undefined">
							<div class="label">Total males standardised</div>
							<div class="control"><input id="5e823fa99b966" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b966" class="input_element">
								<div id="errorMsg_5e823fa99b966" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_female_standardized" data-order="undefined">
							<div class="label">Total females standardised</div>
							<div class="control"><input id="5e823fa99b974" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b974" class="input_element">
								<div id="errorMsg_5e823fa99b974" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_males_adult_standardized" data-order="undefined">
							<div class="label">Total adult males standardised</div>
							<div class="control"><input id="5e823fa99b982" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b982" class="input_element">
								<div id="errorMsg_5e823fa99b982" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_females_adult_standardized" data-order="undefined">
							<div class="label">Total adult females standardised</div>
							<div class="control"><input id="5e823fa99b992" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b992" class="input_element">
								<div id="errorMsg_5e823fa99b992" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_males_children_standardized"
							 data-order="undefined">
							<div class="label">Total male children standardised</div>
							<div class="control"><input id="5e823fa99b9b6" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b9b6" class="input_element">
								<div id="errorMsg_5e823fa99b9b6" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_female_children_standardized"
							 data-order="undefined">
							<div class="label">Total female children standardised</div>
							<div class="control"><input id="5e823fa99b9d4" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b9d4" class="input_element">
								<div id="errorMsg_5e823fa99b9d4" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_adults_standardized" data-order="undefined">
							<div class="label">Total adults standardised</div>
							<div class="control"><input id="5e823fa99b9f7" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99b9f7" class="input_element">
								<div id="errorMsg_5e823fa99b9f7" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_children_standardized" data-order="undefined">
							<div class="label">Total children standardised</div>
							<div class="control"><input id="5e823fa99ba03" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99ba03" class="input_element">
								<div id="errorMsg_5e823fa99ba03" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_total_infants_standardized" data-order="undefined">
							<div class="label">Total infants standardised</div>
							<div class="control"><input id="5e823fa99ba0d" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99ba0d" class="input_element">
								<div id="errorMsg_5e823fa99ba0d" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_mortality" data-order="undefined">
							<div class="label">Mortality</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99ba1f"
														data-validation-profile="5e823fa99ba1f" class="input_element">
								<div id="errorMsg_5e823fa99ba1f" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_mortality_standardized" data-order="undefined">
							<div class="label">Mortality standardised</div>
							<div class="control"><input id="5e823fa99ba2d" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99ba2d" class="input_element">
								<div id="errorMsg_5e823fa99ba2d" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_subvoyage_id" data-order="undefined">
							<div class="label">Sub voyage</div>
							<div class="control"><input id="5e823fa99ba34" type="text" data-reset-value="line" value=""
														data-validation-profile="5e823fa99ba34" class="input_element">
								<div id="errorMsg_5e823fa99ba34" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_possible_overlap_id" data-order="undefined">
							<div class="label">Possible overlap</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99ba39"
														data-validation-profile="5e823fa99ba39" class="input_element">
								<div id="errorMsg_5e823fa99ba39" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_type" data-order="undefined">
							<div class="label">Type</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99ba40"
														data-validation-profile="5e823fa99ba40" class="input_element">
								<div id="errorMsg_5e823fa99ba40" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_type_standardized" data-order="undefined">
							<div class="label">Type standardised</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99ba45"
														data-validation-profile="5e823fa99ba45" class="input_element">
								<div id="errorMsg_5e823fa99ba45" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_ethnicity" data-order="undefined">
							<div class="label">Ethnicity</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99ba55"
														data-validation-profile="5e823fa99ba55" class="input_element">
								<div id="errorMsg_5e823fa99ba55" class="errorMsg"></div>
							</div>
						</div>
						<div class="component" id="5e823fa99ba6f" data-name="main_actor_id" data-order="undefined">
							<div class="componentHeader">Main actor</div>
							<div class="element" data-name="actor_name" data-order="undefined">
								<div class="label">Name</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99bef2"
															data-validation-profile="5e823fa99bef2"
															class="input_element">
									<div id="errorMsg_5e823fa99bef2" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_name_standardised" data-order="undefined">
								<div class="label">Name standardised</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99bf0b"
															data-validation-profile="5e823fa99bf0b"
															class="input_element">
									<div id="errorMsg_5e823fa99bf0b" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_nationality" data-order="undefined">
								<div class="label">Nationality</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99bf12"
															data-validation-profile="5e823fa99bf12"
															class="input_element">
									<div id="errorMsg_5e823fa99bf12" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_nationality_standardised" data-order="undefined">
								<div class="label">Nationality standardised</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99bf18"
															data-validation-profile="5e823fa99bf18"
															class="input_element">
									<div id="errorMsg_5e823fa99bf18" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_sex" data-order="undefined">
								<div class="label">Sex</div>
								<div class="control"><select id="5e823fa99bf1e" data-validation-profile="5e823fa99bf1e"
															 class="input_element">
										<option value="">--</option>
										<option value="male">male</option>
										<option value="female">female</option>
										<option value="unknown">unknown</option>
									</select>
									<div id="errorMsg_5e823fa99bf1e" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_possible_overlap" data-order="undefined">
								<div class="label">Possible overlap</div>
								<div class="control"><input id="5e823fa99bf27" type="text" data-reset-value="line"
															value=""
															data-validation-profile="5e823fa99bf27"
															class="input_element">
									<div id="errorMsg_5e823fa99bf27" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_notes" data-order="undefined">
								<div class="label">Notes</div>
								<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
															   id="5e823fa99bf2d"
															   data-validation-profile="5e823fa99bf2d"
															   class="input_element"></textarea>
									<div id="errorMsg_5e823fa99bf2d" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_source" data-order="undefined">
								<div class="label">Source</div>
								<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
															   id="5e823fa99bf32"
															   data-validation-profile="5e823fa99bf32"
															   class="input_element"></textarea>
									<div id="errorMsg_5e823fa99bf32" class="errorMsg"></div>
								</div>
							</div>
						</div>
						<div class="element" data-name="main_actor_role" data-order="undefined">
							<div class="label">Main actor role</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99bf3a"
														   data-validation-profile="5e823fa99bf3a"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99bf3a" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="main_actor_role_standardized" data-order="undefined">
							<div class="label">Main actor role standardised</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99bf3f"
														   data-validation-profile="5e823fa99bf3f"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99bf3f" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="main_actor_company" data-order="undefined">
							<div class="label">Main actor company</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99bf44"
														   data-validation-profile="5e823fa99bf44"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99bf44" class="errorMsg"></div>
							</div>
						</div>
						<div class="component" id="5e823fa99bf4b" data-name="actor_id2" data-order="undefined">
							<div class="componentHeader">Second actor</div>
							<div class="element" data-name="actor_name" data-order="undefined">
								<div class="label">Name</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99c64e"
															data-validation-profile="5e823fa99c64e"
															class="input_element">
									<div id="errorMsg_5e823fa99c64e" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_name_standardised" data-order="undefined">
								<div class="label">Name standardised</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99c72f"
															data-validation-profile="5e823fa99c72f"
															class="input_element">
									<div id="errorMsg_5e823fa99c72f" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_nationality" data-order="undefined">
								<div class="label">Nationality</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99c76d"
															data-validation-profile="5e823fa99c76d"
															class="input_element">
									<div id="errorMsg_5e823fa99c76d" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_nationality_standardised" data-order="undefined">
								<div class="label">Nationality standardised</div>
								<div class="control"><input type="text" size="100" data-reset-value="line" value=""
															id="5e823fa99c780"
															data-validation-profile="5e823fa99c780"
															class="input_element">
									<div id="errorMsg_5e823fa99c780" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_sex" data-order="undefined">
								<div class="label">Sex</div>
								<div class="control"><select id="5e823fa99c793" data-validation-profile="5e823fa99c793"
															 class="input_element">
										<option value="">--</option>
										<option value="male">male</option>
										<option value="female">female</option>
										<option value="unknown">unknown</option>
									</select>
									<div id="errorMsg_5e823fa99c793" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_possible_overlap" data-order="undefined">
								<div class="label">Possible overlap</div>
								<div class="control"><input id="5e823fa99c7da" type="text" data-reset-value="line"
															value=""
															data-validation-profile="5e823fa99c7da"
															class="input_element">
									<div id="errorMsg_5e823fa99c7da" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_notes" data-order="undefined">
								<div class="label">Notes</div>
								<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
															   id="5e823fa99c8ef"
															   data-validation-profile="5e823fa99c8ef"
															   class="input_element"></textarea>
									<div id="errorMsg_5e823fa99c8ef" class="errorMsg"></div>
								</div>
							</div>
							<div class="element" data-name="actor_source" data-order="undefined">
								<div class="label">Source</div>
								<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
															   id="5e823fa99c94e"
															   data-validation-profile="5e823fa99c94e"
															   class="input_element"></textarea>
									<div id="errorMsg_5e823fa99c94e" class="errorMsg"></div>
								</div>
							</div>
						</div>
						<div class="element" data-name="actor2_role" data-order="undefined">
							<div class="label">Second actor role</div>
							<div class="control"><input type="text" size="45" data-reset-value="line" value=""
														id="5e823fa99c986"
														data-validation-profile="5e823fa99c986" class="input_element">
								<div id="errorMsg_5e823fa99c986" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="actor2_role_standardized" data-order="undefined">
							<div class="label">Second actor role standardised</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99c9a9"
														   data-validation-profile="5e823fa99c9a9"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99c9a9" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="actor2_company" data-order="undefined">
							<div class="label">Second actor company</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99c9c6"
														   data-validation-profile="5e823fa99c9c6"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99c9c6" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_notes" data-order="undefined">
							<div class="label">Notes</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99ca35"
														   data-validation-profile="5e823fa99ca35"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99ca35" class="errorMsg"></div>
							</div>
						</div>
						<div class="element" data-name="slaves_source" data-order="undefined">
							<div class="label">Source</div>
							<div class="control"><textarea rows="8" cols="100" data-reset-value="area"
														   id="5e823fa99ca46"
														   data-validation-profile="5e823fa99ca46"
														   class="input_element"></textarea>
								<div id="errorMsg_5e823fa99ca46" class="errorMsg"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="voyage" class="noView">
				<div class="component">
					<div class="formRow">
						<div class="formLabel">
							Summary:
						</div>
						<div class="formField">
							Just another voyage
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Year:
						</div>
						<div class="formField">
							1768
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Owner:
						</div>
						<div class="formField">
							Rob Zeeman
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited on:
						</div>
						<div class="formField">
							05-05-2020
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited by:
						</div>
						<div class="formField">
							Rob Zeeman
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}
