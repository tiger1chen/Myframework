<?php
namespace Core;
use Core\Database;
class Factory{
	static function getDatabase($id = 'proxy'){
        if($id == 'proxy'){
            $db = new \Core\Database\Proxy();
            return $db;
        }
        $config = new Config(BASEDIR.'/configs');
        $db_config = $config['database'][$id];
        $class_name = 'Core\\Database\\'.$db_config['type'];
        $key = 'database_'.$id;
        if($db = Register::get($key)){
            return $db;
        }

		$db = $class_name::getInstance($db_config);
        $db->connect();
        Register::set($key,$db);
		return $db;
	}

    static function getTestfor($id = 1){
        $key = 'test_'.$id;
        $test = Register::get($id);
        if(!$test){
            $test = new Fortest($id);
            Register::set($key,$test);
        }
        return $test;
    }
}