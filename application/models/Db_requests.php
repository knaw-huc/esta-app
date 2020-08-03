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

	function insert_user($user)
	{
		return $this->db->query("INSERT INTO users (chr_name, name, email, username, admin, active, passwd) VALUES(?, ?, ?, ?, ?, ?, MD5(?))", $user);
	}

	function update_user($user, $id)
	{
		$this->db->query("UPDATE users SET chr_name = ?, name = ?, email = ?, username = ?, admin = ?, active = ? WHERE id = $id", $user);
	}

	function getUsers()
	{
		$users = $this->db->query("SELECT * FROM users ORDER BY name");
		return $users->result_array();
	}

	function valueExists($field, $value, $id) {
		$params = array($value);
		if ($id == "new") {
			$result = $this->db->query("SELECT id FROM users WHERE $field = ?", $params)->result_array();
		} else {
			$result = $this->db->query("SELECT id FROM users WHERE id <> $id AND $field = ?", $params)->result_array();
		}

		if (count($result)) {
			return true;
		} else {
			return false;
		}
	}

	function deleteVoyage($id, $user) {
		return $this->db->query("UPDATE voyage SET deleted = 1 WHERE voyage_id = $id AND created_by = $user");
	}

	function deleteSubVoyage($id, $user) {
		return $this->db->query("UPDATE subvoyage SET deleted = 1, deleted_by = $user WHERE subvoyage_id = $id ");
	}

	function deleteActor($id) {
		if ($this->db->query("DELETE FROM free_actors WHERE actor_id = $id LIMIT 1"))
		{
			return $this->db->query("DELETE FROM actor WHERE actor_id = $id LIMIT 1");
		} else {
			return false;
		}
	}

	function deleteCargo($id) {
		return $this->db->query("DELETE FROM cargo WHERE cargo_id = $id");
	}

	function getDeletedSubvoyages($id) {
		$sql = "SELECT s.subvoyage_id, s.subvoyage_type, s.sub_dept_date_year, IFNULL(v.vessel_name, '--') as vessel, s.sub_dept_place, s.sub_arrival_place, CONCAT(chr_name , ' ', name) AS username  FROM `subvoyage` as s LEFT JOIN vessel as v ON s.sub_vessel = v.vessel_id LEFT JOIN users AS u ON s.deleted_by = u.id WHERE s.voyage_id = $id AND deleted";
		return $this->db->query($sql)->result_array();
	}

	function undeleteSubvoyages($range) {
		$sql = "UPDATE subvoyage SET deleted = 0, deleted_by = 0 WHERE subvoyage_id IN ($range)";
		$this->db->query($sql);
	}

	function getVoyages($start, $offset, $id = null)
	{
		$result = array();
		if (is_null($id)) {
			$result["count"] = $this->count_recs("voyage", "NOT deleted");
			$result["voyages"] = $this->getSubvoyages($this->getRecords("v.voyage_id, v.summary,  v.created_by, v.year, DATE_FORMAT(`last_mutation`, \"%d-%m-%Y\") as last_mutation, CONCAT(u.chr_name, ' ', u.name) as creator, CONCAT(us.chr_name, ' ', us.name) AS modifier", "voyage as v, users as u, users as us", "NOT v.deleted AND v.created_by = u.id AND v.modified_by = us.id ORDER BY v.voyage_id LIMIT $start, $offset"));
		} else {
			$result["count"] = $this->count_recs("voyage", "created_by = $id AND NOT deleted");
			$result["voyages"] = $this->getSubvoyages($this->getRecords("v.voyage_id, v.summary, v.year, v.created_by, DATE_FORMAT(`last_mutation`, \"%d-%m-%Y\") as last_mutation, CONCAT(u.chr_name, ' ', u.name) as creator, CONCAT(us.chr_name, ' ', us.name) AS modifier", "voyage as v, users as u, users as us", "v.created_by = $id AND NOT v.deleted AND v.created_by = u.id and v.modified_by = us.id LIMIT $start, $offset"));
		}
		return $result;
	}

	function updateGridData($id, $grid) {
		$sql = "INSERT INTO subvoyage_dependencies (voyage_id, grid) VALUES ($id,'$grid') ON DUPLICATE KEY UPDATE grid='$grid'";
		return $this->db->query($sql);
	}

	function getGridData($id) {
		$result = $this->db->query("SELECT * FROM subvoyage_dependencies WHERE voyage_id = $id")->result_array();
		if (count($result)) {
			return $result[0]["grid"];
		} else {
			return json_encode(array("count" => 0));
		}
	}

	function getStandardValues($table, $field, $value) {
		$params = array($value . '%');
		try {
			$result = $this->db->query("SELECT DISTINCT $field AS value, $field AS data FROM $table WHERE $field LIKE ?", $params)->result_array();
			$retArray = array("query" => "Unit", "suggestions" => $result);
			return $retArray;
		} catch (Exception $e) {
			return 0;
		}
	}

	function getVoyage($id)
	{
		return $this->db->query("SELECT v.voyage_id, v.summary, v.year, DATE_FORMAT(`last_mutation`, \"%d-%m-%Y\") as last_mutation, CONCAT(u.chr_name, ' ', u.name) as creator, CONCAT(us.chr_name, ' ', us.name) AS modifier FROM voyage as v, users as u, users as us  WHERE  v.voyage_id = $id AND v.created_by = u.id and v.modified_by = us.id")->row_array();
	}

	function save_passwd_by_id($id, $passwd)
	{
		$this->db->query("UPDATE users SET passwd = MD5($passwd) WHERE id = $id");
	}

	function save_passwd_by_email($email, $passwd)
	{
		$this->db->query("UPDATE users SET passwd = MD5($passwd) WHERE email = $email");
	}

	function getSubvoyages($voyages)
	{
		$retArray = array();
		foreach ($voyages as $voyage) {
			$voyage["subvoyages"] = $this->getSubvoyageRecords($voyage["voyage_id"]);
			$retArray[] = $voyage;
		}
		return $retArray;
	}

	function getSubvoyagerecords($voyage_id)
	{
		$sql = "SELECT s.subvoyage_id, s.subvoyage_type, s.sub_dept_date_year, IFNULL(a.actor_name, '--') as captain, IFNULL(v.vessel_name, '--') as vessel, s.sub_dept_place, s.sub_arrival_place FROM `subvoyage` as s LEFT JOIN vessel as v ON s.sub_vessel = v.vessel_id LEFT JOIN (SELECT f.type_id, a.actor_name FROM free_actors as f, `actor` as a WHERE f.type = 'voyage' AND f.actor_id = a.actor_id AND (a.actor_role = 'captain' OR a.actor_role_standardised = 'captain' )) AS a ON s.subvoyage_id = a.type_id WHERE s.voyage_id = $voyage_id AND NOT deleted";
		return $this->db->query($sql)->result_array();
	}

	function getActors($id, $type) {
		$sql = "SELECT a.actor_id, a.actor_name, a.actor_role FROM free_actors AS f, actor AS a WHERE f.type ='$type' AND f.type_id = $id AND f.actor_id = a.actor_id";
		return $this->db->query($sql)->result_array();
	}

	function setProfile($params)
	{
		$this->db->query("UPDATE users SET chr_name = ?, name = ?, email = ? WHERE id = ?", $params);
	}

	private function getRecords($fields, $table, $conditions)
	{
		return $this->db->query("SELECT $fields FROM $table WHERE $conditions")->result_array();
	}

	function count_recs($table, $conditions)
	{
		return $this->db->query("SELECT COUNT(*) AS amount FROM $table WHERE $conditions")->row()->amount;
	}

	/*
	 * Function for service
	 */

	function getSubVoyageForEdit($id)
	{
		return $this->db->query("SELECT * FROM subvoyage WHERE subvoyage_id = $id")->row_array();
	}

	function getSlavesForEdit($id)
	{
		//$slave_id = $this->getSlaveID($id);
		//if ($slave_id == 0) {
		//	return array();
		//} else {
		return $this->db->query("SELECT * FROM slaves WHERE slaves_id = $id")->row_array();
		//}
	}

	function getActorForEdit($id)
	{
		return $this->db->query("SELECT * FROM actor WHERE actor_id = $id")->row_array();
	}

	function getVesselForEdit($id)
	{
		//$vessel_id = $this->getVesselID($id);
		//if ($vessel_id == 0) {
		//	return array();
		//} else {
		return $this->db->query("SELECT * FROM vessel WHERE vessel_id = $id")->row_array();
		//}
	}

	function getCargoOfSubVoyage($id)
	{
		return $this->db->query("SELECT cargo_id, cargo_commodity FROM cargo WHERE subvoyage_subvoyage_id = $id")->result_array();
	}

	function updatePasswd($mail, $pw)
	{
		$params = array($pw, $mail);
		return $this->db->query("UPDATE users SET passwd = MD5(?) WHERE email = ?", $params);
	}

	function getCargoForEdit($cargo_id)
	{
		return $this->db->query("SELECT * FROM cargo WHERE cargo_id = $cargo_id")->row_array();
	}

	function update_data($key, $table, $data, $id)
	{
		$values = array();
		foreach ($data as $field => $value) {
			$values[] = "$field = ?";
		}
		$sql = "UPDATE $table SET " . implode(",", $values) . " WHERE $key = $id";
		$this->log_modifications($key, $table, $data, $id);
		$this->set_modifier();
		$this->db->query($sql, $data);
		return $id;
	}

	function getMutationData($id, $table) {
		$results = $this->db->query("SELECT m.*, CONCAT(u.chr_name, ' ', u.name) AS name FROM sys_mutations AS m, users AS u WHERE m.user = u.id AND record_id = $id AND tablename = '$table'")->result_array();
		return json_encode($results);
	}

	private function set_modifier() {
		$id = $this->getVoyageID($this->session->subvoyage);
		$modifier = $this->session->id;
		$this->db->query("UPDATE voyage SET modified_by = $modifier, last_mutation = NOW() WHERE voyage_id = $id LIMIT 1");
	}

	private function getVoyageID($subvoyageID) {
		$row = $this->db->query("SELECT voyage_id FROM subvoyage WHERE subvoyage_id = $subvoyageID")->row();
		if (isset($row->voyage_id)) {
			return $row->voyage_id;
		} else {
			return 0;
		}
	}

	private function log_modifications($key, $table, $data, $id)
	{
		$user = $this->session->id;
		foreach ($data as $fn => $value) {
			$this->set_log($key, $table, $fn, $value, $user, $id);
		}
	}

	private function set_log($key, $table, $fn, $value, $user, $id)
	{
		$old_value = $this->get_old_value($key, $table, $fn, $id);
		$params = array($table, $fn, $id, $user, $old_value, $value);
		$this->db->query("INSERT INTO sys_mutations (tablename, fieldname, record_id, user, value_before, value_after, modification_date) VALUES(?, ?, ?, ?, ?, ?, NOW())", $params);
	}

	private function get_old_value($key, $table, $fn, $id)
	{
		$sql = "SELECT $fn AS field_value FROM $table WHERE $key = $id";
		$result = $this->db->query($sql)->row();
		if (isset($result->field_value)) {
			return $result->field_value;
		} else {
			return "";
		}
	}

	function change_password($old, $new, $id)
	{
		$params = array($new, $id, $old);
		$this->db->query("UPDATE users SET passwd = MD5(?) WHERE id = ? AND passwd = MD5(?)", $params);
		return $this->db->affected_rows();
	}

	function insert_data($key, $table, $data)
	{
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

	function add_voyage($year, $summary, $user_id)
	{
		$params = array($year, $summary, $user_id, $user_id);
		$sql = "INSERT INTO voyage (year, summary, created_by, modified_by, last_mutation) VALUES(?, ?, ?, ?, NOW())";
		$this->db->query($sql, $params);
		return $this->db->insert_id();
	}

	function createNewSubvoyage()
	{
		$voyage_id = $this->session->voyage;
		$this->db->query("INSERT INTO subvoyage (voyage_id) VALUES($voyage_id)");
		return $this->db->insert_id();
	}

	function getSlaveActors($id) {
		$sql = "SELECT a.actor_id, a.actor_name, a.actor_role FROM free_actors AS f, actor AS a WHERE f.type = 'slaves' AND f.type_id = $id AND f.actor_id = a.actor_id";
		return $this->db->query($sql)->result_array();
	}

	function getcargoActors($id) {
		$sql = "SELECT a.actor_id, a.actor_name, a.actor_role FROM free_actors AS f, actor AS a WHERE f.type = 'cargo' AND f.type_id = $id AND f.actor_id = a.actor_id";
		return $this->db->query($sql)->result_array();
	}

	function deleteCargoActors($id) {
		return $this->db->query("delete actor, free_actors FROM actor INNER JOIN free_actors on actor.actor_id = free_actors.actor_id WHERE free_actors.type = 'cargo' and free_actors.type_id = $id");
	}


	private function getSlaveID($id)
	{
		$result = $this->db->query("SELECT sub_slaves FROM subvoyage WHERE subvoyage_id = $id")->row();
		if ($result) {
			return $result->sub_slaves;
		} else {
			return 0;
		}
	}

	private function getVesselID($id)
	{
		$result = $this->db->query("SELECT sub_vessel FROM subvoyage WHERE subvoyage_id = $id")->row();
		if ($result) {
			return $result->sub_vessel;
		} else {
			return 0;
		}
	}

	function getActorName($id)
	{
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
