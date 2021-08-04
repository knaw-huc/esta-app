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
				$this->init_user_form($user["chr_name"], $user["name"], $user["email"], $user["username"], $user["admin"], $user["active"]);
				$this->mysmarty->assign('user', $id);
			} else {
				redirect(base_url('admin/users'));
			}
		}
		$this->mysmarty->view('admin_edit_user');
	}

	function save_user() {
		if ($this->input->post("name")) {
			$user_values = array();
			$user_values["chr_name"] = $this->input->post("chr_name");
			$user_values["name"] = $this->input->post("name");
			$user_values["email"] = $this->input->post("email");
			$user_values["username"] = $this->input->post("username");
			$user_values["role"] = $this->input->post("role");
			$user_values["active"] = $this->input->post("active");

			$username_exists = $this->fetch->valueExists("username", $user_values["username"], $this->input->post("user"));
			$email_exists = $this->fetch->valueExists("email", $user_values["email"], $this->input->post("user"));

			if (!$username_exists && !$email_exists) {

				if ($this->input->post("user") == "new") {
					$user_values["passwd"] = $this->createPasswd();
					if ($this->fetch->insert_user($user_values)) {
						$this->inviteUser($user_values["chr_name"] . " " . $user_values["name"] = $this->input->post("name"),
							$user_values["username"],
							$user_values["email"],
							$user_values["passwd"]
						);
					}
				} else {
					$this->fetch->update_user($user_values, $this->input->post("user"));
				}
				redirect(base_url("admin/users"));
			} else {
				$this->init_user_form($user_values["chr_name"], $user_values["name"], $user_values["email"], $user_values["username"], $user_values["role"], $user_values["active"]);
				$this->mysmarty->assign('user', $this->input->post("user"));
				if ($username_exists) {
					$this->mysmarty->assign("name_error", "User name already exists for another user!");
				}
				if ($email_exists) {
					$this->mysmarty->assign("mail_error", "Email address already exists for another user!");
				}
				$this->mysmarty->view('admin_edit_user');
			}
		} else {
			redirect(base_url("admin/users"));
		}
	}

	function test_mail() {
		$this->email->from('rob.zeeman@di.huc.knaw.nl');
		$this->email->to("rob@robzeeman.nl");
		$this->email->message("Hallo Rob");
		$this->email->subject( 'ESTA');
		$this->email->send();
		echo 'OK';
}

	/*
	 * Private functions
	 */

	private function init_user_form($chr_name = '', $name = '', $email = '', $username = '', $role = 'USER', $active = 1) {
		$this->mysmarty->assign('chr_name', $chr_name);
		$this->mysmarty->assign('name', $name);
		$this->mysmarty->assign('email', $email);
		$this->mysmarty->assign('username', $username);
		$this->mysmarty->assign('userrole', $role);
		$this->mysmarty->assign('active', $active);
	}

	private function createPasswd() {
		return substr(md5(mt_rand()), 0, 8);
	}

	private function inviteUser($name, $user_name, $email, $passwd) {
		$this->mysmarty->assign('name', $name);
		$this->mysmarty->assign('user_name', $user_name);
		$this->mysmarty->assign('email', $email);
		$this->mysmarty->assign('passwd', $passwd);

		$this->email->from('rob.zeeman@di.huc.knaw.nl');
		$this->email->to($email);
		$this->email->message($this->mysmarty->view2var("invite_user"));
		$this->email->subject( 'Your new ESTA account');
		$this->email->send();

	}
}
