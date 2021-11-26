{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Voyages: page {$page} of {$pages} ({$count})</h2>
	<p><strong>Search value: {$value}</strong></p>
	<ul id="voyagesMenu">
		<li class="appBtn" id="vmCollapser">Expand</li>
		<li class="appBtn" onclick="location.href='{$home_path}/workspace/voyages'">Browse</li>
	</ul>
	<form id="searchForm" class="noView" method="GET" action="{$home_path}/workspace/search">
		<input id="searchText" name="value" type="hidden" value="{$value}">
		<input type="hidden" name="table" value="{$table}" />
		<input type="hidden" id="sr_page" name="page" value="1" />
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
                {if $page > 1}<div class="browserBtn"  onclick="goto_search_result('{$page+1}')">previous</div>{else}&nbsp;{/if}
			</td>
			<td colspan="3" id="voyageBrowserPage"><select onchange="goto_search_result(this.value)">
                    {for $i=1 to $pages}
						<option value="{$i}" {if $i == $page}selected{/if}>{$i}</option>
                    {/for}
				</select></td>
			<td colspan="3" id="voyageBrowserNext">
                {if $page < $pages}<div class="browserBtn"   onclick="goto_search_result('{$page+1}')">next</div>{else}&nbsp;{/if}
			</td>
		</tr>
	</table>
{/block}
