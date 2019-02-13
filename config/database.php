<?php

class Database 
{
	private $dsn;
	public $default = array(
		'datasource' 	=> 'Database/Mysql',
		'persistent' 	=> false,
		'host'		 	=> 'localhost',
		'user'			=> 'root',
		'password'	 	=> '',
		'database'	 	=> 'db_remidi',
		'prefix'	 	=> 'tbl_',
		'encoding'	 	=> 'UTF8',
		'port'		 	=> '',
	);

	public function dbkoneksi() {
		static $instance;
		if($instance === null) {
			$opt = array(
				PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
				PDO::ATTR_EMULATE_PREPARES   => FALSE
			);

			$dsn = 'mysql:host='.$this->default['host'].';dbname='.$this->default['database'].';charset='.$this->default['encoding'];
			$instance = new PDO($dsn,$this->default['user'],$this->default['password'],$opt);
		}
		return $instance;
	}
}

// Create Connection To Database
$dbcon = new Database();
$conn = $dbcon->dbkoneksi();
