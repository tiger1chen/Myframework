<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/7
 * Time: 9:21
 */
namespace Core;
class Allfortest implements  \Iterator{
    protected  $ids;
    protected  $index;
    public function  __construct () {
        $db = Factory::getDatabase();
        $handle = $db->excute("select id from fortest");
        $this->ids = $handle->fetch_all(MYSQL_ASSOC);
    }

    function  rewind () {
        $this->index = 0;
    }

    function  current () {
        return Factory::getTestfor($this->ids[$this->index]['id']);
    }

    function  key () {
        return $this->index;
    }

    function  next () {
        return $this->index++;
    }

    function  valid () {
        return $this->index < count($this->ids);
    }
}