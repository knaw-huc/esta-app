{extends file="standardPage.tpl"}
{block name="content"}

	<form name="login" id="newPasswdForm" method="post" action="{$home_path}sessions/new_passwd">
		<h2>Request new password</h2>
		<div class="formRow">
			<div class="formLabel">
				Email:
			</div>
			<div class="formField">
				<input id="email" name="email" type="text" size="60" /> *
			</div>
		</div>
		<div class="formRow">
			<input class="appBtn" type="button" value="Send" onclick="submitNewPasswd()"/> <input class="appBtn" type="button" value="Back" onclick="history.back()"/>
		</div>
		<div class="message" id="nwPasswdMessage">
			A new password will be sent to this email adress.
		</div>
	</form>
{/block}

