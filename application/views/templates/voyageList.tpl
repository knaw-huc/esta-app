{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyages: page {$page} of {$pages} ({$count})</h2>
	<ul id="voyagesMenu">
		<li class="appBtn" id="vmCollapser">Expand</li>
		<li class="appBtn {$range}" id="vmMyVoyages">{if $range == "allRecs"}My (sub)voyages{else}All voyages{/if}</li>
		<li class="appBtn" id="vmSearch">Search</li>
		<li class="appBtn" id="vmNew">New voyage</li>
	</ul>
	<form id="searchForm" class="noView" method="GET" action="{$home_path}/workspace/search">
		<input id="searchText" name="value" type="text">
		<select id="tableSelect" name="table">
			<option value="actor">Actor</option>
			<option value="cargo">Cargo</option>
			<option value="vessel">Transport</option>
			<option value="subvoyage">Subvoyage</option>
			<option value="voyage">Voyage</option>
		</select>
		<button id="searchBtn" onclick="checkSearch()">OK</button>
		<input type="hidden" name="page" value="1" />
	</form>
	<table id="voyageList" class="resultTable">
		<tr>
			<th>ID</th>
			<th>Summary</th>
			<th>Year</th>
			<th>Creator</th>
			<th>Last edit</th>
			<th>Mutation date</th>
			<th></th>
			<th></th>
		</tr>
		{foreach from=$voyages item=voyage}
			<tr class="voyageRow">
				<td>{$voyage.voyage_id}</td>
				<td>{$voyage.summary}</td>
				<td>{$voyage.year}</td>
				<td>{$voyage.creator}</td>
				<td>{$voyage.modifier}</td>
				<td>{$voyage.last_mutation}</td>
				<td><a href="{$home_path}workspace/voyage/{$voyage.voyage_id}" title="Edit voyage"><img
								src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
				<td>{if $user == $voyage.created_by}<img class="withPointer" title="Delete voyage" src="{$home_path}img/bin.png" height="16px" width="16px" onclick="delete_voyage('{$voyage.voyage_id}')">{/if}</td>
			</tr>
			{foreach from=$voyage.subvoyages item=subvoyage}
				<tr class="subVoyageRow">
					<td>{$subvoyage.subvoyage_id}</td>
					<td>{$subvoyage.sub_dept_date_year}</td>
					<td>{$subvoyage.captain}</td>
					<td>{$subvoyage.vessel}</td>
					<td>{$subvoyage.sub_dept_location}</td>
					<td>{$subvoyage.sub_arrival_location}</td>
					<td></td>
					<td></td>
				</tr>
			{/foreach}
		{/foreach}
		<tr id="voyageBrowser">
			<td colspan="3" id="voyageBrowserPrev">
				{if $page > 1}<a href="{$home_path}workspace/{if $range == "myRecs"}my{/if}voyages/{$page-1}">previous</a>{else}&nbsp;{/if}
			</td>
			<td colspan="3" id="voyageBrowserPage"><select onchange="gotopage(this, '{$range}')">
					{for $i=1 to $pages}
						<option value="{$i}" {if $i == $page}selected{/if}>{$i}</option>
					{/for}
				</select></td>
			<td colspan="3" id="voyageBrowserNext">
				{if $page < $pages}<a href="{$home_path}workspace/{if $range == "myRecs"}my{/if}voyages/{$page+1}">next</a>{else}&nbsp;{/if}
			</td>
		</tr>
	</table>
{/block}
