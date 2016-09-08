<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 15:14
 */

namespace App\Controller;


class Page {
    private $strategy;
    function index(){
        echo "AD:<br/>";
        $this->strategy->showAd();
        echo "-------";
        echo "Category:<br/>";
        $this->strategy->showCa();
        echo "------";
    }
    function setStrategy(\Core\Strategy $stra){
        $this->strategy = $stra;
    }
}