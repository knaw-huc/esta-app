{extends file="standardPage.tpl"}
{block name="content"}
	<h2>Profile {$user_name}</h2>
	<form name="userProfile" id="userProfileForm" method="post" action="{$home_path}workspace/set_profile">
		<div class="formRow">
			<div class="formLabel">Firstname:</div>
			<div class="formField"><span class="noUserEdit">{$first_name}</span><input type="input" size="30" id="first_name" name="first_name" class="UserEdit" value="{$first_name}"/></div>
		</div>
		<div class="formRow">
			<div class="formLabel">Family name:</div>
			<div class="formField"><span class="noUserEdit">{$last_name}</span><input type="input" size="60" id="name" name="name" class="UserEdit" value="{$last_name}"/></div>
		</div>
		<div class="formRow">
			<div class="formLabel">Email:</div>
			<div class="formField"><span class="noUserEdit">{$email}</span><input type="input" size="60" id="email" name="email" class="UserEdit" value="{$email}"/></div>
		</div>

		<div class="formRow">
			<input class="appBtn noUserEdit" type="button" value="Edit" onclick="setUserEdit()"/>
			<input class="appBtn UserEdit" type="button" value="Submit" onclick="submitUserEdit()"/>
			<input class="appBtn UserEdit" type="button" value="Revoke" onclick="revokeUserEdit()"/>
		</div>
		<div id="loginError"></div>
	</form>
{/block}
