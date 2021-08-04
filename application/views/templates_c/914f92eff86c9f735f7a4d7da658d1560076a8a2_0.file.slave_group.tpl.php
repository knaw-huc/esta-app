<?php
/* Smarty version 3.1.32, created on 2021-05-03 14:36:55
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/slave_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_608fee67d8f6c6_52957372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914f92eff86c9f735f7a4d7da658d1560076a8a2' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/slave_group.tpl',
      1 => 1620045408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608fee67d8f6c6_52957372 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="heSlaveGroup" data-action="<?php echo $_smarty_tpl->tpl_vars['slave_group_action']->value;?>
">
	<div class="component">
		<div class="componentHeader">Slave group</div>
		<div class="element" data-name="sex">
			<div class="label">Sex</div>
			<div class="control"><select id="gr_sex" data-validation-profile="5eaac4f83b67e"
										 class="input_element">
					<option value="male">male</option>
					<option value="female">female</option>
					<option value="mixed">mixed</option>
					<option value="unknown">unknown</option>
				</select>
				<div id="errorMsg_5e823fa99b7ed" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="ethnicity">
			<div class="label">Ethnicity</div>
			<div class="control">
				<input type="text" size="30" data-reset-value="line" value="" id="gr_ethnicity"
					   data-validation-profile="5e823fa99b83a" class="input_element">
			</div>
		</div>
		<div class="element" data-name="physical_state">
			<div class="label">Physical state</div>
			<div class="control">
				<select id="gr_physical_state" data-validation-profile="5eaac4f83b67e"
						class="input_element">
					<option value="Healthy">Healthy</option>
					<option value="Impaired">Impaired</option>
					<option value="Pregnant">Pregnant</option>
					<option value="Other">Other</option>
				</select>
			</div>
		</div>
		<div class="element" data-name="age_group">
			<div class="label">Age group</div>
			<div class="control"><select id="gr_age_group" data-validation-profile="5eaac4f83b67e"
										 class="input_element">
					<option value="adult">adult</option>
					<option value="child">child</option>
					<option value="infant">infant</option>
					<option value="unknown">unknown</option>
				</select>
				<div id="errorMsg_5e823fa99b821" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="quantity">
			<div class="label">Amount</div>
			<div class="control"><input type="text" size="30" data-reset-value="line" value="" id="gr_quantity"
										data-validation-profile="5e823fa99b83a" class="input_element">
				<div id="errorMsg_5e823fa99b83a" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="gr_quantity_standardized">
			<div class="label">Amount standardized</div>
			<div class="control"><input type="number" size="4" data-reset-value="line" value="" id="gr_quantity_standardized" min="0"
										data-validation-profile="5e823fa99b83a" class="input_element">
				<div id="errorMsg_5e823fa99b83a" class="errorMsg"></div>
			</div>
		</div>
	</div>
	<div id="btnFrame">
		<input type="button" value="Save" id="slaveSaveBtn" onclick="saveSlaveGroup();"/>
		<input type="button" value="Back" class="resetBtn" onclick="returnToMainTab()"/>
		&nbsp;
		<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
		<div class="messageBox">&nbsp;</div>
				<input id="mutBtn" type="button" value="Mutation history" onclick="show_mutations();"/>
	</div>
</div>
<?php }
}
