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

	function edit_user($id = 0) {
		if ($id == 0) {
			$this->init_user_form();
			$this->mysmarty->assign('user', 'new');
		} else {
			$user = $this->fetch->getUserByID($id);
			if (count($user)) {
				$this->init_user_form($user["chr_name"], $user["name"], $user["email"], $user["admin"], $user["active"]);
				$this->mysmarty->assign('user', $id);
			} else {
				redirect(base_url('admin/users'));
			}
		}
		$this->mysmarty->view('admin_edit_user');
	}

	function save_user() {
		$user_values = array();
		$user_values["chr_name"] = $this->input->post("chr_name");
		$user_values["name"] = $this->input->post("name");
		$user_values["email"] = $this->input->post("email");
		$user_values["role"] = $this->input->post("role");
		$user_values["active"] = $this->input->post("active");
		if ($this->input->post("user") == "new") {
			$user_values["passwd"] = $this->createPasswd();
			$this->fetch->insert_user($user_values);
		} else {
			$this->fetch->update_user($user_values, $this->input->post("user"));
		}
		redirect(base_url("admin/users"));
	}

	/*
	 * Private functions
	 */

	private function init_user_form($chr_name = '', $name = '', $email = '', $role = 'USER', $active = 1) {
		$this->mysmarty->assign('chr_name', $chr_name);
		$this->mysmarty->assign('name', $name);
		$this->mysmarty->assign('email', $email);
		$this->mysmarty->assign('role', $role);
		$this->mysmarty->assign('active', $active);
	}

	private function createPasswd() {
		return substr(md5(mt_rand()), 0, 8);
	}
}
