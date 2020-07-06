<?php
/* Smarty version 3.1.32, created on 2020-07-06 15:42:56
  from '/Library/WebServer/Documents/esta/application/views/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f032a60b3ae06_24901254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd117044c10cdaa2ecf8b3ba92be9f12bde5abe39' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/home.tpl',
      1 => 1594042680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f032a60b3ae06_24901254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5520120865f032a60b2ce39_21420928', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_5520120865f032a60b2ce39_21420928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5520120865f032a60b2ce39_21420928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="homeContent">
		<div class="homeComponent">
			<h2>ESTA</h2>
			<p>The main theme of the works of Tarantino is a self-supporting paradox.
				Therefore, the premise of pretextual narrative holds that the purpose of the
				participant is significant form, but only if Baudrillard’s essay on Marxist
				class is invalid. Derrida suggests the use of socialist realism to attack and
				read class.</p>

			<p>However, the subject is interpolated into a pretextual narrative that
				includes language as a whole. Marx uses the term ‘precapitalist constructivist
				theory’ to denote the difference between society and truth.</p>

			<p>It could be said that the subject is contextualised into a socialist realism
				that includes consciousness as a paradox. The characteristic theme of
				Wilson’s[3] critique of pretextual narrative is the defining
				characteristic, and therefore the stasis, of postsemantic class.</p>

			<p>Thus, the subject is interpolated into a Marxist class that includes
				language as a whole. Baudrillard uses the term ‘socialist realism’ to denote
				the bridge between reality and sexual identity.</p>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['notLoggedIn']->value) {?>
		<div id="loginFrame">
			<form name="login" id="loginForm" method="post" action="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
sessions/login">
				<h2>Login</h2>
				<div class="formRow">
					<div class="loginFormLabel">
						User name:
					</div>
					<div class="formField">
						<input id="userName" name="username" type="text" size="30"/>
					</div>
				</div>
				<div class="formRow">
					<div class="loginFormLabel">
						Password:
					</div>
					<div class="formField">
						<input id="passwd" name="passwd" type="password" size="30"/>
					</div>
				</div>
				<div class="formRow">
					<input class="appBtn" id="loginBtn" type="button" value="Login" onclick="validate_login()"/>
					<a id="forgotPasswd" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
sessions/forgot_passwd">Forgot your password?</a>
				</div>
				<div id="loginError" class="formRow">
				</div>
			</form>
		</div>
		<?php }?>
	</div>
<?php
}
}
/* {/block "content"} */
}
