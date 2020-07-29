{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyage {$voyage}: deleted sub voyages</h2>
	<form method="post" action="{$home_path}workspace/undelete_subvoyages">
	<table class="resultTable">
		<tr>
			<th>Departure date</th>
			<th>Vessel</th>
			<th>From</th>
			<th>To</th>
			<th>Deleted by</th>
			<th></th>
			<th><input type="checkbox" onclick="change_cbDeleted(this)"</th>
		</tr>
		{foreach from=$subvoyages item=subvoyage}
			<tr class="even">
				<td>{$subvoyage.sub_dept_date_year}</td>
				<td>{$subvoyage.vessel}</td>
				<td>{$subvoyage.sub_dept_place}</td>
				<td>{$subvoyage.sub_arrival_place}</td>
				<td>{$subvoyage.username}</td>
				<td></td>
				<td><input type="checkbox" value="{$subvoyage.subvoyage_id}" name="undelete[]" class="cbDeleted"></td>
				</td>
			</tr>
		{/foreach}
	</table>
	<br/>
	<div id="dashBoard">
		{if $role == "ADMIN"}<input type="submit" class="" value="Undelete"/>{/if}
		<input type="button" value="Back" onclick="history.back()"/>
	</div>
		<input type="hidden" name="voyage" value="{$voyage}"/>
	</form>

{/block}
