<?php


class Workspace extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->mysmarty->assign('user_name', 'Rob Zeeman');
		$this->mysmarty->assign('title', 'ESTA Editor');

	}

	function index() {
		$this->mysmarty->view('voyages');
	}

	function voyage() {
		$this->mysmarty->view('voyage');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function editor() {
		$json = file_get_contents(base_url() . 'json/editor.json');
		$this->mysmarty->assign('json', $json);
		$this->mysmarty->view('formPage');
	}
}
