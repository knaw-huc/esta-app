<?php


class Service extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function get_subvoyage() {
		if ($this->input->post("id")) {
			$subvoyage = $this->fetch->getSubVoyageForEdit($this->input->post("id"));
			if (count($subvoyage)) {
				$subvoyage["ac_captain_name"] = $this->fetch->getActorName($subvoyage["sub_captain"]);
				$subvoyage["ac_outfitter_name"] = $this->fetch->getActorName($subvoyage["voyage_outfitter"]);
				$subvoyage["ac_investor_name"] = $this->fetch->getActorName($subvoyage["voyage_investor"]);
				$subvoyage["ac_insurer_name"] = $this->fetch->getActorName($subvoyage["voyage_insurer"]);
				$this->send_json($subvoyage);
			} else {
				$this->throw_error("Subvoyage does not exist");
			}
		} else {
			$this->throw_error();
		}
	}

	private function throw_error($error = "Bad request") {
		header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		$response = array("error" => $error);
		send_json($response);
	}

	private function send_json($message_array) {
		header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		echo json_encode($message_array);
	}
}
