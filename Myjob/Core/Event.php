<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 11:22
 */

namespace Core;


class Event {
    private $observers = array();
    function addObserver(Observer $observer){
        $this->observers[] = $observer;
    }

    function notify(){
        foreach($this->observers as $v){
            $v->update();
        }
    }
}