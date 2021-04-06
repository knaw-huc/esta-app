<?php
/* Smarty version 3.1.32, created on 2021-04-06 15:08:52
  from '/Library/WebServer/Documents/esta/application/views/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_606c5d64016173_17836576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd117044c10cdaa2ecf8b3ba92be9f12bde5abe39' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/home.tpl',
      1 => 1617714466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606c5d64016173_17836576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_357923706606c5d63f1cff4_77855837', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_357923706606c5d63f1cff4_77855837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_357923706606c5d63f1cff4_77855837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="homeContent">
		<div class="homeComponent">
			<p>
			<img id="homeImg" align="right" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
/img/SK-A-4988.jpg"/>
			<h3>ESTA Editor</h3>
			This is the database editor of the <em>Exploring Slave Trade in Asia</em> project. The ESTA Editor allows adding observations and editing data on slave trade (sub)voyages in the wider Indian Ocean and Indonesian Archipelago worlds.
			</p>
			<p>
			<h3>Exploring Slave Trade in Asia</h3>
			Since 2016, a growing group of scholars focusing on slavery and slave trade in the Indian Ocean and Indonesian Archipelago Worlds has forged new connections through successful workshops in Amsterdam (2016), Kalmar (2017) and Lyon (2019). The scholars of this emerging network are committed to develop a coherent field of Asian slave trade and slavery studies, including East, Southeast and South Asia as well as East Africa. Key groundwork in propelling both current and future research in the field of Asian slavery studies entails creating the basis for a collaborative slave trade database initiative. Within this wider network of Asian slavery and slave trade studies, we have therefore initiated the project <em>Exploring Slave Trade in Asia</em> that aims to work towards a collaborative slave trade database for the wider Indian Ocean and Indonesian Archipelago regions slave trade.
			</p>
			<p>
			<h3>Want to join or contribute?</h3>
			Scholars or students who are interested in contributing to the initiative and providing data are more than welcome. The project collects existing datasets, invites new connections for the network and fosters new data contributions. If you are interested to contribute, please contact <a href="">Etaoin Shrdlu</a>.
			</p>
			<p>
			<h3>More information</h3>
			More information on the ESTA project and slavery and slave trade in Asia network can be found here: <a href="https://iisg.amsterdam/nl/research/projects/slave-trade-asia" target="_new">https://iisg.amsterdam/nl/research/projects/slave-trade-asia</a>. The curated existing datasets are collected and stored at the IISH Dataverse: <a href="https://datasets.socialhistory.org/dataverse/iomastd" target="_new">https://datasets.socialhistory.org/dataverse/iomastd</a>.
			</p>
			<p>
			<h3>Funding</h3>
			The first phase of this project is funded by the project grant <em>Exploring Slave Trade in Asia (ESTA)</em> awarded within the NWO Internationalisation in the Humanities 2018 Grant Programme (2018).
			</p>
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
