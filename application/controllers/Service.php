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
				$subvoyage["actors"] = $this->fetch->getActors($this->input->post("id"), 'voyage');
				$subvoyage["sub_cargo"] = $this->fetch->getCargoOfSubVoyage($this->input->post("id"));
				$this->session->set_userdata("subvoyage", $this->input->post("id"));
				$this->send_json($subvoyage);
			} else {
				$this->throw_error("Subvoyage does not exist");
			}
		} else {
			$this->throw_error();
		}
	}

	function check_existence() {
		if ($this->input->post("field")) {
			$arr =  $this->fetch->checkExistence($this->input->post("field"), $this->input->post("value"));
			$this->send_json($arr);
		} else {
			$this->throw_error();
		}
	}

	function add_actor() {
		if ($this->input->post("id") && $this->input->post("actor_type")) {
			$id = $this->fetch->insert_data("", "actor", array());
			$this->fetch->insert_data("", "free_actors", array("type" => $this->input->post("actor_type"), "actor_id" => $id , "type_id" => $this->input->post("id")));
			$this->send_json($id);
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
				$slaves["actors"] = $this->fetch->getSlaveActors($this->input->post("id"));
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
			if (count($cargo)) {
				$cargo["actors"] = $this->fetch->getCargoActors($this->input->post("id"));
			}
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

	function get_voyage() {
		if ($this->input->post("id")) {
			$voyage = $this->fetch->getVoyage($this->input->post("id"));
			$this->send_json($voyage);
		} else {
			$this->throw_error();
		}
	}

	function delete_actor() {
		if ($this->input->post("id")) {
			if ($this->fetch->deleteActor($this->input->post("id"))) {
				$this->send_json(array("status" => "OK"));
			} else {
				$this->throw_error();
			}
		} else {
			$this->throw_error();
		}
	}

	function delete_cargo() {
		if ($this->input->post("id")) {
			if ($this->fetch->deleteCargo($this->input->post("id")) && $this->fetch->deleteCargoActors($this->input->post("id"))) {
				$this->send_json(array("status" => "OK"));
			} else {
				$this->throw_error();
			}
		} else {
			$this->throw_error();
		}
	}

	function update_grid_data() {
		if ($this->input->post("id")) {
			if ($this->fetch->updateGridData($this->input->post("id"), $this->input->post("data"))) {
				$this->send_json(array("status" => "OK"));
			} else {
				$this->throw_error();
			}
		} else {
			$this->throw_error();
		}
	}

	function get_grid_data() {
		if ($this->input->post("id")) {
			$this->send_grid_json($this->fetch->getGridData($this->input->post("id")));
		} else {
			$this->throw_error();
		}
	}

	function get_mutation_data() {
		if ($this->input->post("id")) {
			$this->send_json($this->fetch->getMutationData($this->input->post("id"),$this->input->post("table")));
		} else {
			$this->throw_error();
		}
	}

	function get_standard_values($table = "", $field = "") {
		if ($table == "" || $field == "") {
			$this->throw_error();
		} else {
			$value = $this->input->post("q");
			$result = $this->fetch->getStandardValues($table, $field, $value);
			if ($result) {
				$this->send_json($result);
			} else {
				$this->throw_error();
			}
		}
	}

	function delete_voyage($id) {
		if ($this->session->logged_in) {
			if ($this->fetch->deleteVoyage($id, $this->session->id)) {
				$this->send_json(array("status" => "OK"));
			} else {
				$this->throw_error();
			}
		} else {
			$this->throw_error();
		}
	}

	function delete_subvoyage($id) {
		if ($this->session->logged_in) {
			if ($this->fetch->deleteSubVoyage($id, $this->session->id)) {
				$this->send_json(array("status" => "OK"));
			} else {
				$this->throw_error();
			}
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
		header("HTTP/1.0 400 Bad Request");
		/*header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		$response = array("error" => $error);
		$this->send_json($response);*/
	}

	private function send_json($message_array) {
		header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		echo json_encode($message_array);
	}

	private function send_grid_json($json) {
		header('Content-Type: application/json; charset=UTF-8');
		header('Access-Control-Allow-Origin: *');
		echo $json;
	}
}
