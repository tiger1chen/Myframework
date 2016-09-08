<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 15:11
 */

namespace Core;


use Core\Strategy;

class MaleStrategy implements \Core\Strategy{
    function showAd(){
        echo "这里是女士广告位";
    }

    function showCa(){
        echo "这里是女士目录";
    }
}