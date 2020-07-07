{extends file="standardPage.tpl"}
{block name="content"}
	<h2>{if $user == "new"}New{else}Edit{/if} user</h2>
	<div class="component" style="max-width: 600px;">
		<form id="userForm" method="post" action="{$home_path}admin/save_user">
			<div class="formRow">
				<div class="formLabel">
					First name:
				</div>
				<div class="formField">
					<input type="text" id="chr_name" name="chr_name" value="{$chr_name}"/> *
					<div id="chr_name_error" class="userFormError"/>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Family name:
				</div>
				<div class="formField">
					<input type="text" id="name" name="name" size="40" value="{$name}"/> *
					<div id="name_error" class="userFormError"/>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					Email:
				</div>
				<div class="formField">
					<input type="text" id="email" name="email" size="60" value="{$email}"/> *
					<div id="email_error" class="userFormError">{if isset($mail_error)}{$mail_error}{/if}</div>
				</div>
			</div>
			<div class="formRow">
				<div class="formLabel">
					User name:
				</div>
				<div class="formField">
					<input type="text" id="username" name="username" size="40" value="{$username}"/> *
					<div id="username_error" class="userFormError">{if isset($name_error)}{$name_error}{/if}</div>
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
				<input class="appBtn" type="button" value="Send" onclick="validate_user()"/>
				<input class="appBtn" type="button" value="Back" onclick="window.location = '{$home_path}admin/users'"/>
				<input type="hidden" name="user" value="{$user}"/>
			</div>
			<div id="loginError"></div>
		</form>
	</div>
{/block}
