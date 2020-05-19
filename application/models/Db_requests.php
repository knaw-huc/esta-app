<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Db_requests extends CI_Model
{

	function getUser($un, $pw)
	{
		$params = array($un, $pw);
		$lsSQL = "SELECT * FROM users WHERE username = ? AND passwd = MD5(?) AND active = 1";
		$loResult = $this->db->query($lsSQL, $params);
		return $loResult->result_array();
	}

	function getUserByID($id)
	{
		$lsSQL = "SELECT * FROM users WHERE id = $id";
		$loResult = $this->db->query($lsSQL);
		return $loResult->row_array();
	}

	function insert_user($user) {
		$this->db->query("INSERT INTO users (chr_name, name, email, username, admin, active, passwd) VALUES(?, ?, ?, ?, ?, ?, MD5(?))", $user);
	}

	function update_user($user, $id) {
		$this->db->query("UPDATE users SET chr_name = ?, name = ?, email = ?, username = ?, admin = ?, active = ? WHERE id = $id", $user);
	}

	function getUsers()
	{
		$users = $this->db->query("SELECT * FROM users ORDER BY name");
		return $users->result_array();
	}

	function getVoyages($conditions = 1)
	{
		$result = array();
		$result["count"] = $this->count_recs("voyage", $conditions);
		$result["voyages"] = $this->getSubvoyages($this->getRecords("v.voyage_id, v.summary, v.year, DATE_FORMAT(`last_mutation`, \"%d-%m-%Y\") as last_mutation, CONCAT(u.chr_name, ' ', u.name) as creator, CONCAT(us.chr_name, ' ', us.name) AS modifier", "voyage as v, users as u, users as us", "v.created_by = u.id and v.modified_by = us.id"));
		return $result;
	}

	function getVoyage($id) {
		return $this->db->query("SELECT v.voyage_id, v.summary, v.year, DATE_FORMAT(`last_mutation`, \" %d -%m -%Y\") as last_mutation, CONCAT(u.chr_name, ' ', u.name) as creator, CONCAT(us.chr_name, ' ', us.name) AS modifier FROM voyage as v, users as u, users as us  WHERE  v.created_by = u.id and v.modified_by = us.id")->row_array();
	}

	function save_passwd_by_id($id, $passwd) {
		$this->db->query("UPDATE users SET passwd = MD5($passwd) WHERE id = $id");
	}

	function save_passwd_by_email($email, $passwd) {
		$this->db->query("UPDATE users SET passwd = MD5($passwd) WHERE email = $email");
	}

	function getSubvoyages($voyages) {
		$retArray = array();
		foreach ($voyages as $voyage) {
			$voyage["subvoyages"] = $this->getSubvoyageRecords($voyage["voyage_id"]);
			$retArray[] = $voyage;
		}
		return $retArray;
	}

	function getSubvoyagerecords($voyage_id) {
		$sql = "SELECT s.subvoyage_id, s.sub_dept_date_year, IFNULL(a.actor_name, '--') as captain, IFNULL(v.vessel_name, '--') as vessel, s.sub_dept_place, s.sub_arrival_place  FROM `subvoyage` as s LEFT JOIN vessel as v ON s.sub_vessel = v.vessel_id LEFT JOIN actor as a ON s.sub_captain = a.actor_id WHERE s.voyage_id = $voyage_id";
		return $this->db->query($sql)->result_array();
	}

	function setProfile($params) {
		$this->db->query("UPDATE users SET chr_name = ?, name = ?, email = ? WHERE id = ?", $params);
	}

	private function getRecords($fields, $table, $conditions)
	{
		return $this->db->query("SELECT $fields FROM $table WHERE $conditions")->result_array();
	}

	private function count_recs($table, $conditions) {
		return $this->db->query("SELECT COUNT(*) AS amount FROM $table WHERE $conditions")->row()->amount;
	}

	/*
	 * Function for service
	 */

	function getSubVoyageForEdit($id) {
		return $this->db->query("SELECT * FROM subvoyage WHERE subvoyage_id = $id")->row_array();
	}

	function getSlavesForEdit($id) {
		//$slave_id = $this->getSlaveID($id);
		//if ($slave_id == 0) {
		//	return array();
		//} else {
			return $this->db->query("SELECT * FROM slaves WHERE slaves_id = $id")->row_array();
		//}
	}

	function getActorForEdit($id) {
		return $this->db->query("SELECT * FROM actor WHERE actor_id = $id")->row_array();
	}

	function getVesselForEdit($id) {
		//$vessel_id = $this->getVesselID($id);
		//if ($vessel_id == 0) {
		//	return array();
		//} else {
			return $this->db->query("SELECT * FROM vessel WHERE vessel_id = $id")->row_array();
		//}
	}

	function getCargoOfSubVoyage($id) {
		return $this->db->query("SELECT cargo_id, cargo_commodity FROM cargo WHERE subvoyage_subvoyage_id = $id")->result_array();
	}

	function getCargoForEdit($cargo_id) {
		return $this->db->query("SELECT * FROM cargo WHERE cargo_id = $cargo_id")->row_array();
	}

	function update_data($key, $table, $data, $id) {
		$values = array();
		foreach ($data as $field => $value) {
			$values[] = "$field = ?";
		}
		$sql = "UPDATE $table SET " . implode(",", $values) . " WHERE $key = $id";
		error_log($sql);
		$this->db->query($sql, $data);
		return $id;
	}

	function change_password($old, $new, $id) {
		$params = array($new, $id, $old);
		$this->db->query("UPDATE users SET passwd = MD5(?) WHERE id = ? AND passwd = MD5(?)", $params);
		return $this->db->affected_rows();
	}

	function insert_data($key, $table, $data) {
		$values = array();
		$params = array();
		foreach ($data as $field => $value) {
			$values[] = "$field";
			$params[] = "?";
		}
		$sql = "INSERT INTO $table (" . implode(",", $values) . " ) VALUES(" . implode(",", $params) . ")";
		//error_log($sql);
		$this->db->query($sql, $data);
		return $this->db->insert_id();
	}

	function add_voyage($year, $summary, $user_id) {
		$params = array($year, $summary, $user_id, $user_id);
		$sql = "INSERT INTO voyage (year, summary, created_by, modified_by, last_mutation) VALUES(?, ?, ?, ?, NOW())";
		$this->db->query($sql, $params);
		return $this->db->insert_id();
	}

	function createNewSubvoyage() {
		$voyage_id = $this->session->voyage;
		$this->db->query("INSERT INTO subvoyage (voyage_id) VALUES($voyage_id)");
		return $this->db->insert_id();
	}



	private function getSlaveID($id) {
		$result = $this->db->query("SELECT sub_slaves FROM subvoyage WHERE subvoyage_id = $id")->row();
		if ($result) {
			return $result->sub_slaves;
		} else {
			return 0;
		}
	}

	private function getVesselID($id) {
		$result = $this->db->query("SELECT sub_vessel FROM subvoyage WHERE subvoyage_id = $id")->row();
		if ($result) {
			return $result->sub_vessel;
		} else {
			return 0;
		}
	}

	function getActorName($id) {
		if ($id == 0) {
			return "-none-";
		}
		$result = $this->db->query("SELECT actor_name FROM actor WHERE actor_id = $id")->row_array();
		if (count($result)) {
			return $result["actor_name"];
		} else {
			return "-none-";
		}
	}
}
