<?php
/* Smarty version 3.1.32, created on 2020-04-29 23:01:46
  from '/Library/WebServer/Documents/esta/application/views/templates/voyage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ea9eb3a719f52_50077917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69526d4fd7a0c5ab00e32a42ee8f1cad0075f4c8' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/voyage.tpl',
      1 => 1588194096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9eb3a719f52_50077917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20859753435ea9eb3a6f5908_00992079', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "standardPage.tpl");
}
/* {block "content"} */
class Block_20859753435ea9eb3a6f5908_00992079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20859753435ea9eb3a6f5908_00992079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h2>Voyage 284: sub voyages</h2>
    <table id="resultTable">
        <tr>
            <th>Code</th>
            <th>Departure date</th>
            <th>Vessel</th>
            <th>Captain</th>
            <th>From</th>
            <th>To</th>
            <th></th>
            <th>+</th>
        </tr>
        <tr class="even">
            <td id="V1" class="sea" onclick="set_candidate(this)">V1</td>
            <td>??/??/1735</td>
            <td>The Black Rock</td>
            <td>Captain Hook</td>
            <td>Batavia</td>
            <td>Calcutta</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/editor"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td id="V2" class="sea" onclick="set_candidate(this)">V2</td>
            <td>??/??/1735</td>
            <td>Ye Olde Barke</td>
            <td>John Davies</td>
            <td>Shanghai</td>
            <td>Macao</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/editor"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td id="V3" class="sea" onclick="set_candidate(this)">V3</td>
            <td>??/??/1735</td>
            <td>The Bleak Housewive</td>
            <td>David Jefferies</td>
            <td>Hanoi</td>
            <td>Hué</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/editor"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td id="V4" class="land" onclick="set_candidate(this)">V4</td>
            <td>??/??/1735</td>
            <td>De Gulden Draeck</td>
            <td>Harrie Smit</td>
            <td>Batavia</td>
            <td>Poulo Condore</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/editor"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
        <tr class="even">
            <td id="V5" class="sea" onclick="set_candidate(this)">V5</td>
            <td>??/??/1735</td>
            <td>Molly</td>
            <td>Jeff Bevis</td>
            <td>London</td>
            <td>Pinang</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
workspace/editor"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/edit.png" height="16px" width="16px"></a></td>
            <td><a href="" title="Delete profile"><img src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
img/bin.png" height="16px" width="16px"></a>
            </td>
        </tr>
    </table>
    <br/>
    <h2>Dependencies</h2>
    <table id="dependencyTable">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
        </tr>
        <tr>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
        </tr>
        <tr>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
        </tr>
        <tr>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
            <td onclick="fill_cell(this)"></td>
        </tr>
    </table>
    <div id="dashBoard">
        <input type="button" value="Add row" onclick="addRow()"/>
        <input type="button" value="Add column" onclick="addCol()"/>
    </div>
<?php
}
}
/* {/block "content"} */
}
