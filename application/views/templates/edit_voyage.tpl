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
				{$cargo_ed}
			</div>
			<div id="voyage" class="noView">
				<div class="component">
					<div class="formRow">
						<div class="formLabel">
							Summary:
						</div>
						<div class="formField">
							{$voyage.summary}
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Year:
						</div>
						<div class="formField">
							{$voyage.year}
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Owner:
						</div>
						<div class="formField">
							{$voyage.creator}
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited on:
						</div>
						<div class="formField">
							{$voyage.last_mutation}
						</div>
					</div>
					<div class="formRow">
						<div class="formLabel">
							Last edited by:
						</div>
						<div class="formField">
							{$voyage.modifier}
						</div>
					</div>
				</div>
			</div>
			<div id="actorForm" class="noView">
				{$actor_ed}
			</div>
		</div>
	</div>
{/block}
