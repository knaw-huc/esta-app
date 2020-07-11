<?php


class Workspace extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->logged_in != 1) {
			redirect(base_url());
		}
		$this->mysmarty->assign('user_name', $this->session->name);
		$this->mysmarty->assign("role", $this->session->role);
		$this->mysmarty->assign('title', 'ESTA Editor');

		$this->pageLength = 20;
	}

	function index()
	{
		$this->mysmarty->assign("notLoggedIn", false);
		$this->mysmarty->view('home');
	}

	function voyages($page = 1)
	{
		$pageInfo = $this->getPageInfo();
		if ($this->pageNotCorrect($page, $pageInfo["pages"])) {
			redirect(base_url('workspace/voyages'));
		} else {
			$voyages = $this->fetch->getVoyages(($page - 1) * $this->pageLength, $this->pageLength);
			$this->mysmarty->assign("user", $this->session->id);
			$this->mysmarty->assign("range", "allRecs");
			$this->mysmarty->assign("page", $page);
			$this->mysmarty->assign("pages", $pageInfo["pages"]);
			$this->mysmarty->assign("count", $pageInfo["items"]);
			$this->mysmarty->assign("voyages", $voyages["voyages"]);
			$this->mysmarty->view('voyageList');
		}

	}

	function myvoyages($page = 1)
	{
		$pageInfo = $this->getPageInfo($this->session->id);
		$voyages = $this->fetch->getVoyages(($page - 1) * $this->pageLength, $this->pageLength, $this->session->id);
		$this->mysmarty->assign("range", "myRecs");
		$this->mysmarty->assign("page", $page);
		$this->mysmarty->assign("pages", $pageInfo["pages"]);
		$this->mysmarty->assign("count", $pageInfo["items"]);
		$this->mysmarty->assign("voyages", $voyages["voyages"]);
		$this->mysmarty->view('voyageList');
	}

	function voyage($id = 0)
	{
		if ($id == 0) {
			redirect(base_url('workspace/'));
		} else {
			$subvoyages = $this->fetch->getSubvoyagerecords($id);
			$this->mysmarty->assign('voyage_id', $id);
			$this->mysmarty->assign("subvoyages", $subvoyages);
			$this->session->set_userdata("voyage", $id);
		}
		$this->mysmarty->view('voyage');
	}

	function deleted_subvoyages($id = null) {
		if (is_null($id || !is_numeric($id))) {
			redirect(base_url('workspace'));
		} else {
			$deleted = $this->fetch->getDeletedSubvoyages($id);
			$this->mysmarty->assign('role', $this->session->role);
			$this->mysmarty->assign("voyage", $id);
			$this->mysmarty->assign("subvoyages", $deleted);
			$this->mysmarty->view('deleted_subvoyages');
		}
	}

	function undelete_subvoyages() {
		if ($this->session->role != "ADMIN")
		{
			redirect(base_url() . "workspace");
		} else {
			if (!is_null($this->input->post("undelete"))) {
				$this->fetch->undeleteSubvoyages( implode($this->input->post("undelete"), ", "));
				redirect(base_url("workspace/voyage/" . $this->input->post("voyage")));
			} else {
				if (!is_null($this->input->post("voyage"))) {
					redirect(base_url("workspace/voyage/" . $this->input->post("voyage")));
				} else {
					redirect(base_url("workspace"));
				}
			}
		}
	}

	function new_subvoyage()
	{
		$subvoyage_id = $this->fetch->createNewSubvoyage();
		redirect(base_url("workspace/edit_voyage/$subvoyage_id"));
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	function editor()
	{
		$json = file_get_contents(base_url() . 'json/editor.json');
		$this->mysmarty->assign('json', $json);
		$this->mysmarty->view('formPage');
	}

	function change_password()
	{
		$this->mysmarty->view("change_passwd");
	}

	function newpasswd()
	{
		$old = $this->input->post("opw");
		$new = $this->input->post("passwd1");
		$succes = $this->fetch->change_password($old, $new, $this->session->id);
		if ($succes) {
			$this->mysmarty->assign('msg', "Password changed");
		} else {
			$this->mysmarty->assign('msg', "Password not changed. Please try again");
		}
		$this->mysmarty->view("passwd_changed");
	}

	function new_voyage()
	{
		$this->mysmarty->view("voyageForm");
	}

	function accept_new_voyage()
	{
		$voyage_id = $this->fetch->add_voyage($this->input->post("year"), $this->input->post("summary"), $this->session->id);
		redirect(base_url() . "workspace/voyage/$voyage_id");
	}

	function edit_voyage($id = 0)
	{
		if ($id == 0) {
			redirect(base_url('workspace'));
		} else {
			$voyage = $this->fetch->getVoyage($id);
			$this->mysmarty->assign("sub_voyage_action", base_url('service/save_voyage'));
			$this->mysmarty->assign("slaves_action", base_url());
			$this->mysmarty->assign("vessel_action", base_url());
			$this->mysmarty->assign("cargo_action", base_url());
			$this->mysmarty->assign("actor_action", base_url());
			$this->mysmarty->assign('voyage', $voyage);
			$this->mysmarty->assign('id', $id);
			$this->mysmarty->assign('voyage_ed', $this->mysmarty->view2var('editors/subvoyage.tpl'));
			$this->mysmarty->assign('slave_ed', $this->mysmarty->view2var('editors/slaves.tpl'));
			$this->mysmarty->assign('vessel_ed', $this->mysmarty->view2var('editors/vessel.tpl'));
			$this->mysmarty->assign('cargo_ed', $this->mysmarty->view2var('editors/cargo.tpl'));
			$this->mysmarty->assign('actor_ed', $this->mysmarty->view2var('editors/actor.tpl'));
			$this->mysmarty->assign('mut_view', $this->mysmarty->view2var('editors/mutation_view'));
			$this->mysmarty->view("edit_voyage");
		}
	}

	function user_profile()
	{
		$user = $this->fetch->getUserByID($this->session->id);
		$this->mysmarty->assign("id", $this->session->id);
		$this->mysmarty->assign('user_name', $user["chr_name"] . " " . $user["name"]);
		$this->mysmarty->assign('first_name', $user["chr_name"]);
		$this->mysmarty->assign('last_name', $user["name"]);
		$this->mysmarty->assign('email', $user["email"]);
		$this->mysmarty->view("user_profile");
	}

	function set_profile()
	{
		$params = array(
			$this->input->post("first_name"),
			$this->input->post("name"),
			$this->input->post("email"),
			$this->session->id
		);
		$this->fetch->setProfile($params);
		redirect(base_url('workspace/user_profile/' . $this->session->id));
	}

	private function getPageInfo($id = null)
	{
		if (is_null($id)) {
			$count = $this->fetch->count_recs("voyage", "NOT deleted ");
		} else {
			$count = $this->fetch->count_recs("voyage", "created_by = $id AND NOT deleted");
		}
		return array("items" => $count, "pages" => ceil($count / $this->pageLength));
	}

	private function pageNotCorrect($page, $count)
	{
		if (!is_numeric($page)) {
			return true;
		} else {
			if ($page < 1 || $page > $count) {
				return true;
			} else {
				return false;
			}
		}
	}
}
