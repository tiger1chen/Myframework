<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 17:07
 */
namespace App\Decorator;
class Json {
    function beforeRequest($class){

    }

    function afterRequest($return_val){
        if(isset($_GET['app']) && $_GET['app'] == 'json'){
            echo  json_encode($return_val);
            echo "123";
        }
    }
}