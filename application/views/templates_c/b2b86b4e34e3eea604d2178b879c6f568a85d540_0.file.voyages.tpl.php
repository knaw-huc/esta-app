<?php
/* Smarty version 3.1.32, created on 2020-04-30 08:50:03
  from '/Library/WebServer/Documents/esta/application/views/templates/voyages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5eaa751b6c4385_79027163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b86b4e34e3eea604d2178b879c6f568a85d540' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/voyages.tpl',
      1 => 1588229399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaa751b6c4385_79027163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17572600425eaa751b6b5ce9_97929794', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_17572600425eaa751b6b5ce9_97929794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17572600425eaa751b6b5ce9_97929794',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Voyages: page 1 of 1 (6)</h2>
	<ul id="voyagesMenu">
		<li id="vmCollapser">Expand</li>
		<li id="vmMyVoyages">My (sub)voyages</li>
		<li id="vmSearch">Search</li>
		<li id="vmNew">New voyage</li>
	</ul>
	<table id="resultTable">
		<tr>
			<th>ID</th>
			<th>Summary</th>
			<th>Year</th>
			<th>Creator</th>
			<th>Last edit</th>
			<th>Mutation date</th>
			<th></th>
			<th></th>
		</tr>
		<tr class="voyageRow">
			<td>23</td>
			<td>Just another summary 1</td>
			<td>1833</td>
			<td>Rob Zeeman</td>
			<td>Rob Zeeman</td>
			<td>22-04-2020</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
		</tr>
		<tr class="subVoyageRow">
			<td>37726</td>
			<td>1877</td>
			<td>Wessanen</td>
			<td>Robert Jenkins</td>
			<td>Madegascar</td>
			<td>Bali</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="subVoyageRow">
			<td>37727</td>
			<td>1877</td>
			<td>Wessanen</td>
			<td>Robert Jenkins</td>
			<td>Bali</td>
			<td>Singapore</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="subVoyageRow">
			<td>37728</td>
			<td>1877</td>
			<td>Wessanen</td>
			<td>Robert Jenkins</td>
			<td>Singapore</td>
			<td>Batavia</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="voyageRow">
			<td>2331</td>
			<td>Just another summary 2</td>
			<td>1833</td>
			<td>Rob Zeeman</td>
			<td>Ulbe Bosma</td>
			<td>22-04-2020</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
		</tr>
		<tr class="subVoyageRow">
			<td>37727</td>
			<td>1877</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Bali</td>
			<td>Singapore</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="subVoyageRow">
			<td>377255</td>
			<td>1814</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Singapore</td>
			<td>Batavia</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="voyageRow">
			<td>2334</td>
			<td>This is the example</td>
			<td>1854</td>
			<td>Rob Zeeman</td>
			<td>Ulbe Bosma</td>
			<td>07-05-2020</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
		</tr>
		<tr class="subVoyageRow">
			<td>3255</td>
			<td>??/??/1735</td>
			<td>The Black Rock</td>
			<td>Captain Hook</td>
			<td>Batavia</td>
			<td>Calcutta</td>
			<td></td>
			<td></td>
			</td>
		</tr>
		<tr class="subVoyageRow">
			<td>3775</td>
			<td>??/??/1735</td>
			<td>Ye Olde Barke</td>
			<td>John Davies</td>
			<td>Shanghai</td>
			<td>Macao</td>
			<td></td>
			<td></td>
			</td>
		</tr>
		<tr class="subVoyageRow">
			<td>375</td>
			<td>??/??/1735</td>
			<td>The Bleak Housewive</td>
			<td>David Jefferies</td>
			<td>Hanoi</td>
			<td>Hué</td>
			<td></td>
			<td></td>
			</td>
		</tr>
		<tr class="subVoyageRow">
			<td>377232</td>
			<td>??/??/1735</td>
			<td>De Gulden Draeck</td>
			<td>Harrie Smit</td>
			<td>Batavia</td>
			<td>Poulo Condore</td>
			<td></td>
			<td></td>
			</td>
		</tr>
		<tr class="subVoyageRow">
			<td>377255</td>
			<td>??/??/1735</td>
			<td>Molly</td>
			<td>Jeff Bevis</td>
			<td>London</td>
			<td>Pinang</td>
			<td></td>
			<td></td>
			</td>
		</tr>
		<tr class="voyageRow">
			<td>2334456</td>
			<td>Just another summary 3</td>
			<td>1833</td>
			<td>Rob Zeeman</td>
			<td>Ulbe Bosma</td>
			<td>22-04-2020</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
		</tr>
		<tr class="subVoyageRow">
			<td>37727</td>
			<td>1877</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Bali</td>
			<td>Singapore</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="subVoyageRow">
			<td>377255</td>
			<td>1814</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Singapore</td>
			<td>Batavia</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="voyageRow">
			<td>233234</td>
			<td>Just another summary 4</td>
			<td>1833</td>
			<td>Rob Zeeman</td>
			<td>Ulbe Bosma</td>
			<td>22-04-2020</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
		</tr>
		<tr class="subVoyageRow">
			<td>37727</td>
			<td>1877</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Bali</td>
			<td>Singapore</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="subVoyageRow">
			<td>377255</td>
			<td>1814</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Singapore</td>
			<td>Batavia</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="voyageRow">
			<td>23367</td>
			<td>Just another summary 5</td>
			<td>1833</td>
			<td>Rob Zeeman</td>
			<td>Ulbe Bosma</td>
			<td>22-04-2020</td>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/voyage"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
			<td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
		</tr>
		<tr class="subVoyageRow">
			<td>37727</td>
			<td>1877</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Bali</td>
			<td>Singapore</td>
			<td></td>
			<td></td>
		</tr>
		<tr class="subVoyageRow">
			<td>377255</td>
			<td>1814</td>
			<td>Swallow</td>
			<td>John Bell</td>
			<td>Singapore</td>
			<td>Batavia</td>
			<td></td>
			<td></td>
		</tr>
	</table>
<?php
}
}
/* {/block "content"} */
}
