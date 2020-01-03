<?php

require("./Initializer.php");
require("./Configurations.php");

class DbConnection{

	private $dbInstance;
	private $configInstance;

	public function __construct(){
		$this->dbInstance = new Initializer();
		$this->configInstance = new Configurations();
	}

	/*	
	 *	makeDbConnect
	 *	@param : none
	 *	@return : dbh
	 */
	public function makeDbConnect(){

		$this->dbInstance->setHostName($this->configInstance->_dbhost);
		$this->dbInstance->setDbName($this->configInstance->_dbname);
		$this->dbInstance->setDbUser($this->configInstance->_dbusername);
		$this->dbInstance->setDbUserPassword($this->configInstance->_dbuserpassword);

		$hostName = $this->dbInstance->getHostName();
		$dbName = $this->dbInstance->getDbName();
		$dbUserName = $this->dbInstance->getDbUser();
		$dbUserPassword = $this->dbInstance->getDbUserPassword();

		$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET CHARACTER SET 'utf8'");

		try {
			$dbh = new PDO('mysql:host=' . $hostName .';dbname='. $dbName, $dbUserName, $dbUserPassword, $options);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit;
		}

		return $dbh;
	}


}

