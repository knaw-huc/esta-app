<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class DB_requests extends CI_Model {

	function getUser($un, $pw) {
		$params = array($un, $pw);
		$lsSQL = "SELECT * FROM users WHERE username = ? AND passwd = MD5(?) AND active = 1";
		$loResult = $this->db->query($lsSQL, $params);
		return $loResult->result_array();
	}

	function getUserByID($id) {
		$lsSQL = "SELECT * FROM users WHERE id = $id";
		$loResult = $this->db->query($lsSQL);
		return $loResult->row_array();
	}

	function getUsers() {
		$users = $this->db->query("SELECT * FROM users ORDER BY name");
		return $users->result_array();
	}
}
