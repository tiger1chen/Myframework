<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 14:53
 */

namespace Core;


class FemaleStrategy implements  \Core\Strategy{
    function showAd(){
        echo "这里是男装123123123<br/>";
    }
    function showCa(){
        echo "这里是男士目录<br/>";
    }
}