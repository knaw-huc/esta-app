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

	function new_passwd() {
		if ($this->input->post("email")) {
			$pw = $this->createPasswd();
			$this->fetch->updatePasswd($this->input->post("email"), $pw);
			$this->email->from('no-reply@esta.huc.knaw.nl', 'ESTA administrator');
			$this->email->to($this->input->post("email"));
			$this->mysmarty->assign("pw", $pw);
			$this->email->subject("New password ESTA user");
			$this->email->message($this->mysmarty->view2var("new_password_mail"));
			$this->email->send();
			$this->mysmarty->assign('email', $this->input->post("email"));
			$this->mysmarty->view("passwd_send");
		} else {
			redirect(base_url());
		}
	}

	private function createPasswd() {
		return substr(md5(mt_rand()), 0, 8);
	}
}
