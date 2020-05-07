<?php


class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->role != "ADMIN")
		{
			redirect(base_url() . "workspace");
		}
		$this->mysmarty->assign('user_name', $this->session->name);
		$this->mysmarty->assign("role", $this->session->role);
		$this->mysmarty->assign('title', 'ESTA Editor');

	}

	function users() {
		$users = $this->fetch->getUsers();
		$this->mysmarty->assign("users", $users);
		$this->mysmarty->view("users");
	}
}
