{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyage {$voyage_id}: sub voyages</h2>
	<table class="resultTable">
		<tr>
			<th>Code</th>
			<th>Departure date</th>
			<th>Vehicle</th>
			<th>Transport</th>
			<th>From</th>
			<th>To</th>
			<th></th>
			<th><a href="{$home_path}workspace/new_subvoyage">+</a></th>
		</tr>
		{foreach from=$subvoyages item=subvoyage}
			<tr class="even">
				<td id="SV{$subvoyage@index + 1}" class="{$subvoyage.subvoyage_type}" data-id="{$subvoyage.subvoyage_id}" onclick="set_candidate(this)">SV{$subvoyage@index + 1}</td>
				<td>{$subvoyage.sub_dept_date_year}</td>
				<td>{$subvoyage.vessel}</td>
				<td>{$subvoyage.captain}</td>
				<td>{$subvoyage.sub_dept_location}</td>
				<td>{$subvoyage.sub_arrival_location}</td>
				<td><img src="{$home_path}img/edit.png"  class="withPointer" height="16px" width="16px" onclick="edit_voyage('{$subvoyage.subvoyage_id}')"></td>
				<td><img id="bin{$subvoyage.subvoyage_id}"  class="withPointer" src="{$home_path}img/bin.png" height="16px" width="16px" onclick="delete_subvoyage('{$subvoyage.subvoyage_id}')">
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
		<button id="gridSaveBtn" onclick="save_dependencies()">Save</button>
		<div>
			&nbsp;<br/>
			<button onclick="window.location = '{$home_path}workspace/deleted_subvoyages/{$voyage_id}'">Deletions</button>
		</div>
	</div>
	<div id="gridMessage"></div>
	<script>
		get_grid_data();
	</script>
{/block}
