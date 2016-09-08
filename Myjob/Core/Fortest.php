<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/6
 * Time: 15:21
 */
namespace Core;
class Fortest{
    protected $id;
    protected $data;
    protected $db;
    protected $change = false;
    function __construct($id){
        $this->db = Factory::getDatabase();
        $query = $this->db->excute("select * from fortest where id =".$id);
        $this->data = $query->fetch_assoc();
        $this->id = $id;
    }

    function __get($key){
        if(isset($this->data[$key])){
            return $this->data[$key];
        }
    }

    function __set($key,$value){
        $this->data[$key] = $value;
        $this->change = true;
    }

    function __destruct(){
        $fields = array();
        if($this->change){
            foreach($this->data as $k=>$v){
                $fields[] =" $k='{$v}'";
            }
            $sql = "update fortest set ".implode(',',$fields)." where id=".$this->id." limit 1";
            $this->db->excute($sql);
        }
    }
}