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

}
