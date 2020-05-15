<?php
/* Smarty version 3.1.32, created on 2020-05-15 16:07:08
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/cargo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ebea20c2524e8_29105133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a5947cb38d135d21665a981697c6588b4b022f' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/cargo.tpl',
      1 => 1589548672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebea20c2524e8_29105133 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="heCargo"  data-action="<?php echo $_smarty_tpl->tpl_vars['cargo_action']->value;?>
">
	<div class="component">
		<div class="componentHeader">Cargo</div>
		<div class="element" data-name="cargo_commodity">
			<div class="label">Cargo commodity</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="cargo_commodity"
										data-validation-profile="5e823fa99d63e" class="input_element">
				<div id="errorMsg_5e823fa99d63e" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_commodity_standardized">
			<div class="label">Cargo commodity standardized</div>
			<div class="control"><input type="text" size="100" data-reset-value="line" value="" id="cargo_commodity_standardized"
										data-validation-profile="5e823fa99d64c" class="input_element">
				<div id="errorMsg_5e823fa99d64c" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_unit">
			<div class="label">Cargo unit</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_unit"
										data-validation-profile="5e823fa99d653" class="input_element">
				<div id="errorMsg_5e823fa99d653" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_unit_standardized">
			<div class="label">Cargo unit standardized</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_unit_standardized"
										data-validation-profile="5e823fa99d65a" class="input_element">
				<div id="errorMsg_5e823fa99d65a" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_quantity">
			<div class="label">Cargo quantity</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_quantity"
										data-validation-profile="5e823fa99d660" class="input_element">
				<div id="errorMsg_5e823fa99d660" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_quantity_standardized">
			<div class="label">Cargo quantity standardized</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_quantity_standardized"
										data-validation-profile="5e823fa99d666" class="input_element">
				<div id="errorMsg_5e823fa99d666" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_value">
			<div class="label">Cargo value</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_value"
										data-validation-profile="5e823fa99d66d" class="input_element">
				<div id="errorMsg_5e823fa99d66d" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_value_standardized">
			<div class="label">Cargo value standardized</div>
			<div class="control"><input type="text" size="45" data-reset-value="line" value="" id="cargo_value_standardized"
										data-validation-profile="5e823fa99d673" class="input_element">
				<div id="errorMsg_5e823fa99d673" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_notes">
			<div class="label">Notes</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="cargo_notes"
										   data-validation-profile="5e823fa99de76" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99de76" class="errorMsg"></div>
			</div>
		</div>
		<div class="element" data-name="cargo_source">
			<div class="label">Source</div>
			<div class="control"><textarea rows="8" cols="100" data-reset-value="area" id="cargo_source"
										   data-validation-profile="5e823fa99de7c" class="input_element"></textarea>
				<div id="errorMsg_5e823fa99de7c" class="errorMsg"></div>
			</div>
		</div>
	</div>
</div>
<?php }
}
