<?php
/* Smarty version 3.1.32, created on 2020-06-08 15:18:27
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/actor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ede3aa38d3748_76826563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64f297d15bef232769f092094909205a57d8a62e' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/actor.tpl',
      1 => 1591620849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede3aa38d3748_76826563 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="heActor"  data-action="<?php echo $_smarty_tpl->tpl_vars['actor_action']->value;?>
">
	<div class="component">
		<div id="actorType" class="componentHeader">Actor</div>
		<div class="element" data-name="actor_name">
			<div class="label">Name</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="actor_name"
										data-validation-profile="5e823fa99af97" class="input_element">
				<div id="errorMsg_5e823fa99af97" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_name_standardised">
			<div class="label">Name standardised</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="actor_name_standardised"
										data-validation-profile="5e823fa99afa1" class="input_element">
				<div id="errorMsg_5e823fa99afa1" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_nationality">
			<div class="label">Nationality</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="actor_nationality"
										data-validation-profile="5e823fa99afa8" class="input_element">
				<div id="errorMsg_5e823fa99afa8" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_nationality_standardised">
			<div class="label">Nationality standardised</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="actor_nationality_standardised"
										data-validation-profile="5e823fa99afad" class="input_element">
				<div id="errorMsg_5e823fa99afad" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_sex">
			<div class="label">Sex</div>
			<div class="control"><select id="actor_sex" data-validation-profile="5e823fa99afb3"
										 class="input_element">
					<option value="">--</option>
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="unknown">unknown</option>
				</select>
				<div id="errorMsg_5e823fa99afb3" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_possible_overlap">
			<div class="label">Possible overlap</div>
			<div class="control"><input id="actor_possible_overlap" type="text" data-reset-value="line" value=""
										data-validation-profile="5e823fa99afbe" class="input_element">
				<div id="errorMsg_5e823fa99afbe" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="actor_notes"
										   data-validation-profile="5e823fa99afe1" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99afe1" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="actor_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="actor_source"
										   data-validation-profile="5e823fa99afe7" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99afe7" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="saveBtn" onclick="saveActor()"/>
		<input type="button" value="Back" class="resetBtn" onclick="returnToMainTab()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
		<div id="tmpFormatter">
			&nbsp;
		</div>
		<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations()"/>
	</div>
</div>
<?php }
}