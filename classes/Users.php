<?php

class Users{
    private $_db;
    public function __construct(){
        $this->_db = DB::getInstance();
    }

    public function login($table, $user, $password){
        return $this->_db->select_login($table,$user,$password);
    }
    
}
