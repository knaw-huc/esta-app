<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require "../smarty/Smarty.class.php";

/**
* @file system/application/libraries/Mysmarty.php
*/
class Mysmarty extends Smarty {
	function __construct() {
		parent::__construct();
		$this->compile_dir = APPPATH . 'views/templates_c/';
		$this->template_dir = APPPATH . 'views/templates/';
		
		$config =& get_config();
		$this->assign("home_path", $config['base_url']);
		$this->assign("base_url", "/esta/");
	}
	
        function view($resource_name, $cache_id = null)   {
		if (strpos($resource_name, '.') === false) {
			$resource_name .= '.tpl';
		}
		return parent::display($resource_name, $cache_id);
	}
	
	function view2var($resource_name, $cache_id = null)   {
		if (strpos($resource_name, '.') === false) {
			$resource_name .= '.tpl';
		}
		return parent::fetch($resource_name, $cache_id);
	}
	
}
?>
