{extends file="standardPage.tpl"}
{block name="content"}

	<form name="login" id="loginForm" method="post" action="{$home_path}sessions/login">
		<h2>Login</h2>
		<div class="formRow">
			<div class="formLabel">
				User name:
			</div>
			<div class="formField">
				<input id="userName" name="username" type="text" size="30" />
			</div>
		</div>
		<div class="formRow">
			<div class="formLabel">
				Password:
			</div>
			<div class="formField">
				<input id="passwd" name="passwd" type="password" size="30" />
			</div>
		</div>
		<div class="formRow">
			<input class="appBtn" type="button" value="Login" onclick="validate_login()" />
			<a id="forgotPasswd" href="{$home_path}sessions/forgot_passwd">Forgot your password?</a>
		</div>
		<div id="loginError" class="formRow">
		</div>
	</form>
{/block}

