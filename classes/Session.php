<?php

class Session{
    public static function set($name,$value){
        return $_SESSION[$name] = $value;
    }

    public static function get($name){
        return $_SESSION[$name];
    }
}