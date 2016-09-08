<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 17:11
 */
namespace App\Decorator;
class Xml {
    function beforeRequest($class){

    }

    function afterRequest($return_val){
        if(isset($_GET['app']) && $_GET['app'] == 'xml') {
            echo "<xml>" . $return_val . "</xml>";
            echo "__tail";
        }
    }
}