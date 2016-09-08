<?php
namespace Core;
class Application {
	protected $instance;
	static function dispatcher(){
		$uri = $_SERVER['PATH_INFO'];	
		list($c,$m) = explode('/',trim($uri,'/'));
		$c = strtolower($c);
		$c = ucwords($c);
        $con_config = new Config(BASEDIR.'/configs');
        $decorators = $con_config['controller']['home']['decorator'];
        $class = '\\App\\Controller\\'.$c;
        $obj = new $class();
        foreach($decorators as $key=>$val){
            $classD = new $val();
            $classD->beforeRequest($class);
        }

		$return_val = $obj->$m();

        foreach($decorators as $key=>$val){
            $classD = new $val();
            $classD->afterRequest($return_val);
        }
	}
}