<?php


class Sessions extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->mysmarty->assign('user_name', '');
		$this->mysmarty->assign('title', 'ESTA Editor');
	}

	function index() {
		$this->mysmarty->view('home');
	}

	function login() {
		if ($this->input->post("username") && $this->input->post("passwd")) {
			$results = $this->fetch->getUser($this->input->post("username"), $this->input->post("passwd"));
			if (count($results)) {
				$this->session->set_userdata("logged_in", 1);
				$this->session->set_userdata("id", $results[0]["id"]);
				$this->session->set_userdata("role", $results[0]["admin"]);
				$this->session->set_userdata("name", $results[0]["chr_name"] . ' ' . $results[0]["name"]);
				redirect(base_url() . "workspace");
			} else {
				redirect(base_url());
			}
		} else {
			redirect(base_url());
		}
	}

	function forgot_passwd() {
		$this->mysmarty->view("forgotten_passwd");
	}
}
