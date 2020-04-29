<?php
/* Smarty version 3.1.32, created on 2020-04-29 23:09:09
  from '/Library/WebServer/Documents/esta/application/views/templates/formPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ea9ecf577d348_52857904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5a0cd2fca4df4523e11ff4793037eb82728bc3e' => 
    array (
      0 => '/Library/WebServer/Documents/esta/application/views/templates/formPage.tpl',
      1 => 1588194544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9ecf577d348_52857904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/ccfstyle.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
css/autocomplete.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/jquery.autocomplete.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccf_config<?php if (!isset($_smarty_tpl->tpl_vars['lang']->value)) {?>_en<?php } else { ?>_<?php echo $_smarty_tpl->tpl_vars['lang']->value;
}?>.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccfparser.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home_path']->value;?>
js/ccforms.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            obj = <?php echo $_smarty_tpl->tpl_vars['json']->value;?>
;
            $('document').ready(function(){
            setEvents();
            formBuilder.start(obj);
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            ESTA Editor (demo)
        </div>
        <div id="user">Rob Zeeman</div>
        <div id="homeBtn"></div>
        <div id="content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11888677255ea9ecf577b752_68554554', "content");
?>

        </div>
        </div>
    </body>
</html>
<?php }
/* {block "content"} */
class Block_11888677255ea9ecf577b752_68554554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11888677255ea9ecf577b752_68554554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ccform"></div><?php
}
}
/* {/block "content"} */
}
