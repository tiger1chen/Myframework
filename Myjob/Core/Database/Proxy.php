<?php
namespace Core\Database;
use Core\Factory;

class Proxy{
    function excute($sql){
        $sql = trim($sql);
        if(substr($sql,0,6)== 'select'){
            echo "here is read<br/>";
            $db = Factory::getDatabase('slave')->excute($sql);
            return $db;
        }else{
            echo "here is insert<br/>";
            $db = Factory::getDatabase('master')->excute($sql);
            return $db;
        }
    }
}