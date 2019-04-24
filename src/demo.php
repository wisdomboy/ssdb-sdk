<?php
namespace demo;
require_once realpath(__FILE__)."/SSDB.php";

class demo{
	
	private $_db;
	
	public function __construct()
	{
		$this->_db = new SimpleSSDB('127.0.0.1', 8888);
	}
	
	public function set()
	{
		return $this->_db->set('key','123');
	}
	
	public function get()
	{
		return $this->_db->get('key');
	}
}
