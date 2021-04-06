{extends file="standardPage.tpl"}
{block name="content"}
	<div id="homeContent">
		<div class="homeComponent">
			<p>
			<img id="homeImg" align="right" src="{$home_path}/img/SK-A-4988.jpg"/>
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
		{if $notLoggedIn}
		<div id="loginFrame">
			<form name="login" id="loginForm" method="post" action="{$home_path}sessions/login">
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
					<a id="forgotPasswd" href="{$home_path}sessions/forgot_passwd">Forgot your password?</a>
				</div>
				<div id="loginError" class="formRow">
				</div>
			</form>
		</div>
		{/if}
	</div>
{/block}

