{extends file="standardPage.tpl"}
{block name="content"}
	<h2>{if $user == "new"}New{else}Edit{/if} user</h2>
	<div class="component" style="max-width: 600px;">
		<form method="post" action="{$home_path}admin/save_user">
			<div class="formRow">
				<div class="formLabel">
					First name:
				</div>
				<div class="formField">
					<input type="text" name="chr_name" value="{$chr_name}"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Family name:
				</div>
				<div class="formField">
					<input type="text" name="name" size="40" value="{$name}"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Email:
				</div>
				<div class="formField">
					<input type="text" name="email" size="60" value="{$email}"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					User name:
				</div>
				<div class="formField">
					<input type="text" name="username" size="40" value="{$username}"/> *
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Role:
				</div>
				<div class="formField">
					<select name="role">
						<option {if $userrole == "USER"}selected {/if} value="USER">USER</option>
						<option {if $userrole == "ADMIN"}selected {/if} value="ADMIN">ADMIN</option>
					</select>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Active:
				</div>
				<div class="formField">
					<select name="active">
						<option {if $active == "1"}selected {/if} value="1">Yes</option>
						<option {if $active == "0"}selected {/if}value="0">No</option>
					</select>
				</div>
			</div>
			<div class="formRow">
				<input class="appBtn" type="submit" value="Send"/>
				<input class="appBtn" type="button" value="Back" onclick="history.back()"/>
				<input type="hidden" name="user" value="{$user}"/>
			</div>
		</form>
	</div>
{/block}
