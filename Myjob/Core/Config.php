<?php
namespace Core;
class Config implements \arrayaccess{
    private  $container  = array();
	protected $path;
    public function  __construct ($path) {
		$this->path = $path;
    }
    public function  offsetSet ($offset, $value ) {
        throw new Exception("can't modify the config");
    }
    public function  offsetExists ( $offset ) {
        return isset( $this -> container [ $offset ]);
    }
    public function  offsetUnset ( $offset ) {
        unset( $this -> container [ $offset ]);
    }
    public function  offsetGet ( $offset ) {
		if(empty($this->container[$offset])){			
			$this->container[$offset] = require $this->path.'/'.$offset.'.php';
		}
        return $this->container[$offset];
    }	
}