<?php


class Workspace extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->logged_in != 1)
		{
			redirect(base_url());
		}
		$this->mysmarty->assign('user_name', $this->session->name);
		$this->mysmarty->assign("role", $this->session->role);
		$this->mysmarty->assign('title', 'ESTA Editor');

	}

	function index() {
		$voyages = $this->fetch->getVoyages();
		$this->mysmarty->assign("page", 1);
		$this->mysmarty->assign("pages", 1);
		$this->mysmarty->assign("count", $voyages["count"]);
		$this->mysmarty->assign("voyages", $voyages["voyages"]);
		$this->mysmarty->view('voyageList');
	}

	function voyage($id = 0) {
		if ($id == 0) {
			redirect(base_url('workspace/'));
		} else {
			$subvoyages = $this->fetch->getSubvoyagerecords($id);
			if (count($subvoyages)) {
				$this->mysmarty->assign('voyage_id', $id);
				$this->mysmarty->assign("subvoyages", $subvoyages);
			} else {
				redirect(base_url('workspace/'));
			}
		}
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

	function new_voyage() {
		$this->mysmarty->view("voyageForm");
	}

	function accept_new_voyage() {
		$this->session->set_userdata("year", $this->input->post["year"]);
		$this->session->set_userdata("summary", $this->input->post["summary"]);
		redirect(base_url() . "workspace/edit_voyage");
	}

	function edit_voyage($id = 0) {
		if ($id == 0) {
			redirect(base_url('workspace'));
		} else {
			$voyage = $this->fetch->getVoyage($id);
			$this->mysmarty->assign('voyage', $voyage);
			$this->mysmarty->assign('id', $id);
			$this->mysmarty->assign('voyage_ed', $this->mysmarty->view2var('editors/subvoyage.tpl'));
			$this->mysmarty->assign('slave_ed', $this->mysmarty->view2var('editors/slaves.tpl'));
			$this->mysmarty->assign('vessel_ed', $this->mysmarty->view2var('editors/vessel.tpl'));
			$this->mysmarty->assign('cargo_ed', $this->mysmarty->view2var('editors/cargo.tpl'));
			$this->mysmarty->view("edit_voyage");
		}
	}

	function user_profile() {
		$user = $this->fetch->getUserByID($this->session->id);
		$this->mysmarty->assign('user_name', $user["chr_name"] . " " . $user["name"]);
		$this->mysmarty->assign('first_name', $user["chr_name"]);
		$this->mysmarty->assign('last_name', $user["name"]);
		$this->mysmarty->assign('email', $user["email"]);
		$this->mysmarty->view("user_profile");
	}
}
