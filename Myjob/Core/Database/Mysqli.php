<?php
namespace Core\Database;
use Core\IDatabase;

class Mysqli implements IDatabase{
    protected $conn;
    static private $db;
    static private $db_config;
    private function __construct()
    {

    }

    function connect(){
        $conn = mysqli_connect(self::$db_config['host'],self::$db_config['user'],self::$db_config['password'],self::$db_config['dbname']);
        $this->conn = $conn;
    }

    function excute($sql){
        $res = mysqli_query($this->conn,$sql);
        return $res;
    }

    function close(){
        mysqli_close($this->conn);
    }

    static function getInstance($db_config){
        if(self::$db instanceof self){
            return self::$db;
        }
        self::$db = new self();
        self::$db_config = $db_config;
        return self::$db;
    }

    final function __clone(){

    }
}