<?php

class Post{
    private $_db;
    public function __construct(){
        $this->_db = DB::getInstance();
    }

    public function selectAll($table){
        return $this->_db->selectData($table,$filter = null);
    }

    public function selectFilter($table,$collumn,$filter){
        return $this->_db->selectData($table,$collumn,$filter);
    }

    public function selectExcerpt($table,$limit){
        return $this->_db->select_excerpt($table,$limit);
    }

    public function selectSearch($table,$name){
        return $this->_db->select_search($table,$name);
    }

    public function updateData($table, $id ,$fields = []){
        return $this->_db->update_data($table,$id,$fields);
    }

    public function selectSidebar($table,$colomn){
        return $this->_db->select_sidebar($table,$colomn);
    }

    public function deleteData($table,$id){
        return $this->_db->delete_data($table,$id);
    }

    public function insertData($table, $fields = []){
        return $this->_db->insert_data($table, $fields);
    }

    public function excerpt($string){
        $string = substr($string, 0, 300);
        return $string . " [...]";
    }

    public function getPagin(){
        return $this->_db->pagin();
    }
}