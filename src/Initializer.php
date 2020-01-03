<?php


class Initializer{

	private $_hostname;
	private $_dbname;
	private $_dbuser;
	private $_dbuserpassword;


	public function __construct(){
	}

	public function setHostName($hostname){
		$this->_hostname = $hostname;
	}

	public function getHostName(){
		return $this->_hostname;
	}

	public function setDbName($dbname){
		$this->_dbname = $dbname;
	}

	public function getDbName(){
		return $this->_dbname;
	}

	public function setDbUser($dbuser){
		$this->_dbuser = $dbuser;
	}

	public function getDbUser(){
		return $this->_dbuser;
	}

	public function setDbUserPassword($dbuserpassword){
		$this->_dbuserpassword = $dbuserpassword;
	}

	public function getDbUserPassword(){
		return $this->_dbuserpassword;
	}

}
