{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Users</h2>
	<table id="resultTable">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Active</th>
			<th>+</th>
		</tr>
		{foreach from=$users item=user}
			<tr>
				<td>{$user.chr_name} {$user.name}</td>
				<td><a href="mailto:{$user.email}">{$user.email}</a></td>
				<td>{$user.admin}</td>
				<td>{if $user.active}Yes{else}No{/if}</td>
				<td><a href="{$home_path}admin/edit_user"><img src="{$home_path}img/edit.png" height="16px" width="16px"></a></td>
			</tr>
		{/foreach}
	</table>
{/block}
