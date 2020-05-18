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
				$subvoyage["sub_cargo"] = $this->fetch->getCargoOfSubVoyage($this->input->post("id"));
				$this->send_json($subvoyage);
			} else {
				$this->throw_error("Subvoyage does not exist");
			}
		} else {
			$this->throw_error();
		}
	}

	function update_data() {
		$id = $this->input->post("id");
		$data = json_decode($this->input->post("data"), true);
		$form = $this->input->post("form");
		$key = $this->get_key($form);
		$table = $this->get_table($form);
		if ($id == 0) {
			$ret_id = $this->fetch->insert_data($key, $table, $data);
		} else {
			$ret_id = $this->fetch->update_data($key, $table, $data, $id);
		}
		$this->send_json($ret_id);
	}

	function get_slaves() {
		if ($this->input->post("id")) {
			$slaves = $this->fetch->getSlavesForEdit($this->input->post("id"));
			if (count($slaves)) {
				$slaves["ac_main_actor"] = $this->fetch->getActorName($slaves["main_actor_id"]);
				$slaves["ac_second_actor"] = $this->fetch->getActorName($slaves["actor_id2"]);
				$this->send_json($slaves);
			} else {
				$this->throw_error("Slave info does not exist");
			}
		} else {
			$this->throw_error();
		}
	}

	function get_vessel() {
		if ($this->input->post("id")) {
			$vessel = $this->fetch->getVesselForEdit($this->input->post("id"));
			$this->send_json($vessel);
		} else {
			$this->throw_error();
		}
	}

	function get_cargo() {
		if ($this->input->post("id")) {
			$cargo = $this->fetch->getCargoForEdit($this->input->post("id"));
			$this->send_json($cargo);
		} else {
			$this->throw_error();
		}
	}

	function get_actor() {
		if ($this->input->post("id")) {
			$actor = $this->fetch->getActorForEdit($this->input->post("id"));
			$this->send_json($actor);
		} else {
			$this->throw_error();
		}
	}

	private function get_key($form) {
		$keys = array(
			"heSubvoyage" => "subvoyage_id",
			"heVessel" => "vessel_id",
			"heSlaves" => "slaves_id",
			"heCargo" => "cargo_id",
			"heActor" => "actor_id",
		);
		return $keys[$form];
	}

	private function get_table($form) {
		$tables = array(
			"heSubvoyage" => "subvoyage",
			"heVessel" => "vessel",
			"heSlaves" => "slaves",
			"heCargo" => "cargo",
			"heActor" => "actor",
		);
		return $tables[$form];
	}

	private function throw_error($error = "Bad request") {
		header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		$response = array("error" => $error);
		$this->send_json($response);
	}

	private function send_json($message_array) {
		header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		echo json_encode($message_array);
	}
}
