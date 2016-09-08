<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/6
 * Time: 14:07
 */
namespace Core;
class Register{
    protected static $objects;
    static function set($key,$value){
        self::$objects[$key] = $value;
    }
    static function get($key){
        if(!isset($objects[$key])){
            return false;
        }
        return $objects[$key];
    }

    static function _unset($key){
        unset(self::$objects[$key]);
    }
}