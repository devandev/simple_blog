<?php

class Validate{
    private $_error = [],
            $_passed = false;


    public function check($fields = []){
        foreach($fields as $field => $value){
            foreach ($value as $key => $val) {
                //print_r($key);
                //die();
                $source = Input::get($field);
                switch ($key) {
                    case 'required':
                        if(empty($source)){
                            $this->addError("{$field} tidak boleh kosong !");
                        }
                        break;

                    case 'min':
                        if(strlen($source) < $val){
                            $this->addError("{$field} tidak boleh kurang dari {$val}");
                        }
                        break;
                        
                    case 'max':
                        if(strlen($source) > $val){
                            $this->addError("{$field} tidak boleh lebih dari {$val}");
                        }
                        break;
                    default:
                        # code...
                        break;
                    }
                }
            }
        
        if(empty($this->_error)){
            return $this->_passed = true;
        }
    }

    public function addError($error){
        $this->_error[] = $error;
    }

    public function errors(){
        return $this->_error;
    }

    public function passed(){
        return $this->_passed;
    }
}