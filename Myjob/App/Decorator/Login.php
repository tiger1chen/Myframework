<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/8
 * Time: 9:49
 */

namespace App\Decorator;


class Login {
    function beforeRequest($class){
        session_start();
        if(empty($_SESSION['isLogin']) && $class !='\App\Controller\Login'){
            header('Location:http://localhost:8080/index.php/login/index');
            exit;
        }
    }

    function afterRequest($return_val){

    }
}