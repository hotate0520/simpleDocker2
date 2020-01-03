<?php



class Configurations{

	public $_dbhost;
	public $_dbname;
	public $_dbusername;
	public $_dbuserpassword;

	public function __construct(){
		$this->_dbhost = "172.19.0.3";
		$this->_dbname = "test";
		$this->_dbusername = "root";
		$this->_dbuserpassword = "root";
	}


}