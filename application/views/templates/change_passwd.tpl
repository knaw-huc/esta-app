{extends file="standardPage.tpl"}
{block name="content"}
	<form name="pw" id="pw" method="post" action="{$home_path}workspace/newpasswd">
		<h2>Change password</h2>
		<div class="formRow">
			<div class="formLabel">
				Old password:
			</div>
			<div class="formField">
				<input id="opw" name="opw" type="text" size="30" />
			</div>
		</div>
		<div class="formRow">
			<div class="formLabel">
				New password:
			</div>
			<div class="formField">
				<input id="passwd1" name="passwd1" type="password" size="30" />
			</div>
		</div>
		<div class="formRow">
			<div class="formLabel">
				New password again:
			</div>
			<div class="formField">
				<input id="passwd2" name="passwd2" type="password" size="30" />
			</div>
		</div>
		<div class="formRow">
			<input class="appBtn" type="button" value="OK" onclick="validate_pw()" />
		</div>
		<div id="loginError" class="formRow">
		</div>
	</form>

{/block}
