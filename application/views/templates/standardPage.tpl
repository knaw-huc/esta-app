<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{$title}</title>
        <link rel="stylesheet" href="{$home_path}css/style.css" type="text/css" />
        <script type="text/javascript" src="{$home_path}js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="{$home_path}js/ccforms.js"></script>
        <script type="text/javascript" src="{$home_path}js/dep_grid.js"></script>
        <script>
            $('document').ready(function(){literal}{{/literal}
            setEvents();{literal}}{/literal});
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div id="header">
            ESTA Editor (demo)
        </div>
        {if $user_name != ""}
			<div id="user">{$user_name}</div>
			<div id="logout">Logout</div>
		{/if}
        <div id="homeBtn"></div>
        <div id="content">
            {block name="content"}Content{/block}
        </div>
        </div>
    </body>
</html>
