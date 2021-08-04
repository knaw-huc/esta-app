<?php
/* Smarty version 3.1.32, created on 2020-06-08 14:29:00
  from '/Library/WebServer/Documents/esta/application/views/templates/editors/mutation_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ede2f0cbb5d17_02202476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e856a1f2a4e4ad15773456be7be8c0bd64081f' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/editors/mutation_view.tpl',
      1 => 1591616208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede2f0cbb5d17_02202476 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="component">
	<table id="mutTable">
		<tr>
			<th>Table name</th>
			<th>Field name</th>
			<th>Modified by</th>
			<th>Modification date</th>
			<th>Old value</th>
			<th>New value</th>
		</tr>
	</table>
</div>
<div id="btnFrame">
	<input type="button" value="Back" class="resetBtn" onclick="closeMutationView()"/>
	&nbsp;
	<input type="button" value="Go top" class="appBtn" onclick="window.scrollTo(0,0)"/>
</div>
<?php }
}
