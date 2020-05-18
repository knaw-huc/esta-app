<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>{$title}</title>
	<link rel="stylesheet" href="{$home_path}css/style.css" type="text/css"/>
	<link rel="stylesheet" href="{$home_path}css/ccfstyle.css" type="text/css"/>
	<script type="text/javascript" src="{$home_path}js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="{$home_path}js/ccforms.js"></script>
	<script type="text/javascript" src="{$home_path}js/dep_grid.js"></script>
	<link href="{$home_path}css/jmenu.css" rel="stylesheet" type="text/css"/>
	<script src="{$home_path}js/jmenu.js"></script>
	<script>
		$('document').ready(function () {literal}{{/literal}
			setEvents();
			{if isset($voyage_ed)}setEditors({$id});{/if}
			$('#jmenu').jmenu();
			{literal}}{/literal});
	</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		ESTA Editor (demo)

		{if $user_name != ""}
			<div id="user">{$user_name}</div>
		{/if}</div>
	{if $user_name != ""}
		<div id="head_menu">
			<div id="menu-items">
				<ul id="jmenu">
					<li><a href="{$home_path}workspace">Home</a></li>
					<li><a href="{$home_path}workspace">Voyages</a></li>
					<li><a href="{$home_path}workspace">My profile</a>
						<ul>
							<li><a href="{$home_path}workspace/user_profile">Profile</a></li>
							<li><a href="{$home_path}workspace/change_password">Change password</a></li>
						</ul>
					</li>
					{if $role == 'ADMIN'}
						<li><a href="{$home_path}admin/users">Users</a></li>
					{/if}
					<li><a href="{$home_path}workspace/logout">Logout</a></li>
				</ul>
			</div>
		</div>
	{/if}
	<div id="content">
		{block name="content"}Content{/block}
	</div>
</div>
</body>
</html>
