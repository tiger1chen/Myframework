<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 11:18
 */

namespace App\Controller;

class Observer1 implements \Core\Observer{
    function update(){
        echo "逻辑1<br/>";
    }
}