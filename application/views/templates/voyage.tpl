{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyage {$voyage_id}: sub voyages</h2>
	<table class="resultTable">
		<tr>
			<th>Code</th>
			<th>Departure date</th>
			<th>Vessel</th>
			<th>Captain</th>
			<th>From</th>
			<th>To</th>
			<th></th>
			<th><a href="{$home_path}workspace/new_subvoyage">+</a></th>
		</tr>
		{foreach from=$subvoyages item=subvoyage}
			<tr class="even">
				<td id="SV{$subvoyage@index + 1}" class="sea" data-id="{$subvoyage.subvoyage_id}" onclick="set_candidate(this)">SV{$subvoyage@index + 1}</td>
				<td>{$subvoyage.sub_dept_date_year}</td>
				<td>{$subvoyage.vessel}</td>
				<td>{$subvoyage.captain}</td>
				<td>{$subvoyage.sub_dept_place}</td>
				<td>{$subvoyage.sub_arrival_place}</td>
				<td><a href="{$home_path}workspace/edit_voyage/{$subvoyage.subvoyage_id}"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
				<td><a href="" title="Delete profile"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
				</td>
			</tr>
		{/foreach}
	</table>
	<br/>
	<h2>Subvoyage relations</h2>
	<table id="dependencyTable" data-voyage-id="{$voyage_id}">
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		<tr class="depRow">
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
		<tr class="depRow">
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
		<tr class="depRow">
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
		<tr class="depRow">
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
			<td onclick="fill_cell(this)"></td>
		</tr>
	</table>
	<div id="dashBoard">
		<input type="button" value="Add row" onclick="addRow()"/>
		<input type="button" value="Add column" onclick="addCol()"/>
		<input type="button" value="Save" onclick="save_dependencies()"/>
	</div>
	<div id="gridMessage"></div>
	<script>
		get_grid_data();
	</script>
{/block}
