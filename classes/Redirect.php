<?php

class Redirect{
    public static function to($location, $x = null, $id = null){
        if(is_null($id)){
            header('location:'.$location.'.php');
        }else{
            header('location:'.$location.'.php?'.$x.'='.$id);
        }
    }
}