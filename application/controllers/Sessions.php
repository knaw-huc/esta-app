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
			$this->session->set_userdata("logged_in", 1);
			redirect(base_url() . "workspace/");
		} else {
			redirect(base_url());
		}
	}
}
