{extends file="standardPage.tpl"}
{block name="content"}
<h2>New voyage</h2>
	<form id="newVoyageForm" method="POST" action="{$home_path}workspace/accept_new_voyage">
	<div class="component standardForm">
		<div class="componentHeader">
			Generic voyage data
		</div>
		<div class="element">
			<div class="label">
				Summary
			</div>
			<div class="control">
				<input id="voyageSummary" name="summary" type="text" size="80"/>
			</div>
		</div>
		<div class="element">
			<div class="label">
				Year
			</div>
			<div class="control">
				<input id="voyageYear" name="year" type="text" size="4"/>
			</div>
		</div>
		<div class="element">
			<div class="control">
				<input class="appBtn"  type="button" value="OK" onclick="validateNewVoyage()"/>&nbsp;&nbsp;<input class="appBtn"  type="button" value="Back" onclick="history.back()"/>
			</div>
		</div>
		<div id="formError"></div>
	</div>
	</form>
{/block}
