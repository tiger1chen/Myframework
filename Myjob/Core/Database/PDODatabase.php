<?php
namespace Core\Database;
use Core\IDatabase;
use \PDO;

class PDODatabase implements IDatabase{
    protected $conn;
    static private $db;
    static private $db_config;
    private function __construct()
    {

    }

    function connect(){
        $conn = new PDO('mysql:dbname='.self::$db_config['dbname'].';host='.self::$db_config['host'],self::$db_config['user'],self::$db_config['password'] );
        $this->conn = $conn;
    }

    function excute($sql){
        $res = $this->conn->query($sql);
        return $res;
    }

    function close(){
        unset($this->conn);
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