<?php
namespace Core;
class Database{
	protected $conn;
	static private $db;
	protected $db_config;
    private function __construct()
    {
		
    }
		
	function connect(){
		$config = new Config(BASEDIR.'/configs');
		$this->db_config = $config['database'];
		$conn = mysqli_connect($this->db_config['host'],$this->db_config['user'],$this->db_config['password'],$this->db_config['dbname']);
		$this->conn = $conn;
	}
	
	function query($sql){
		$res = mysqli_query($this->conn,$sql);
		return $res;
	}
	
	function close(){
		mysqli_close($this->conn);
	}		
	
	static function getInstance(){
		if(self::$db instanceof self){
			return self::$db;
		}
		self::$db = new self();
		return self::$db;
	}
	
	final function __clone(){
		
	}
}