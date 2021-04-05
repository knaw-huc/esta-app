{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Subvoyage {$id}</h2>
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
				{$voyage_ed}
			</div>
			<div id="profileJSON" class="noView">
				{$slave_ed}
			</div>
			<div id="tweakXML" class="noView">
				{$vessel_ed}
			</div>
			<div id="metadataRecs" class="noView">
				<div id="noCargos" class="noView">This subvoyage doesn't contain any cargos yet.</div>
				{$cargo_ed}
			</div>
			<div id="voyage" class="noView">
				<div id="heVoyage" class="component">
					<div class="formRow">
						<div class="formLabel">
							Summary:
						</div>
						<div id="summary" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Year:
						</div>
						<div id="year" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Owner:
						</div>
						<div id="creator" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited on:
						</div>
						<div id="last_mutation" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited by:
						</div>
						<div id="modifier" class="formField">

						</div>
					</div>
					<div class="formRow">
						<div id="globalVoyageBtns">
							<input id="globalVoyageEditBtn" class="saveBtn noView" type="button" value="Edit" onclick="editGlobalVoyage()"/>
							<input id="globalVoyageSaveBtn" class="saveBtn noView" type="button" value="Save" onclick="saveGlobalVoyage()"/>
							<input id="globalVoyageRejectBtn" class="saveBtn noView" type="button" value="Back" onclick="resetGlobalVoyage()"/>
							<input id="globalVoyageOwner" type="hidden" value="{$editUserID}"/>
							<input id="summaryBuffer" type="hidden">
							<input id="yearBuffer" type="hidden">
						</div>
					</div>
				</div>
			</div>
			<div id="actorForm" class="noView">
				{$actor_ed}
			</div>
			<div id="slaveGroupForm" class="noView">
				{$slave_group_ed}
			</div>
			<div id="mutView" class="noView">
				{$mut_view}
			</div>
		</div>
	</div>
{/block}
