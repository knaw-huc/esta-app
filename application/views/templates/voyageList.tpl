{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyages: page {$page} of {$pages} ({$count})</h2>
	<ul id="voyagesMenu">
		<li class="appBtn" id="vmCollapser">Expand</li>
		<li class="appBtn {$range}"  id="vmMyVoyages">{if $range == "allRecs"}My (sub)voyages{else}All voyages{/if}</li>
		<li  class="appBtn" id="vmSearch">Search</li>
		<li  class="appBtn" id="vmNew">New voyage</li>
	</ul>
	<table class="resultTable">
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
				<td><a href="{$home_path}workspace/voyage/{$voyage.voyage_id}" title="Edit voyage"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
				<td><a href="" title="Delete voyage"><img src="{$home_path}img/bin.png" height="16px" width="16px"></a>
			</tr>
			{foreach from=$voyage.subvoyages item=subvoyage}
				<tr class="subVoyageRow">
					<td>{$subvoyage.subvoyage_id}</td>
					<td>{$subvoyage.sub_dept_date_year}</td>
					<td>{$subvoyage.captain}</td>
					<td>{$subvoyage.vessel}</td>
					<td>{$subvoyage.sub_dept_place}</td>
					<td>{$subvoyage.sub_arrival_place}</td>
					<td></td>
					<td></td>
				</tr>
			{/foreach}
		{/foreach}
		{*<tr id="voyageBrowser">
			<td colspan="3" id="voyageBrowserPrev">previous</td>
			<td colspan="3" id="voyageBrowserPage"></td>
			<td colspan="2" id="voyageBrowserNext">next</td>
		</tr>*}
	</table>
{/block}
