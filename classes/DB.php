<?php
class DB{
    private $host = "localhost",
            $user = "ivan",
            $pass = "ivan",
            $db = "db_blog",
            $numberOfPage,
            $conn ;
    private static $_Instance;
    
    public function __construct(){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if(mysqli_connect_error()){
            die('gagal terhubung ke server!');
        }
    }

    public function getInstance(){
        if(!self::$_Instance){
            self::$_Instance = new self();
        }
        return self::$_Instance;
    }

    public function selectData($table, $column =null, $filter=null){
        if(is_null($filter)){
            $sql = "SELECT * FROM {$table}";
            $result = $this->conn->query($sql);
            while($row = $result->fetch_assoc()){
                $results[] = $row;
            }
            return $results;
        }else{
            $sql = "SELECT * FROM {$table} WHERE {$column} = ?";
            $result = $this->conn->prepare($sql);
            $result->bind_param('s',$filter);
            $result->execute();
            $fetch = $result->get_result();
            while($row = $fetch->fetch_assoc()){
                $results[] = $row;
            }
            return $results;
        }
        
    }
    
    public function select_excerpt($table,$limit){
        $query = "SELECT * FROM {$table}";
        $result = $this->conn->query($query);
        $page_total = $result->num_rows;
        $this->numberOfPage = ceil($page_total/$limit);
        if(!Input::get('page')){
            $page = 1;
        }else{
            $page = Input::get('page');
        }
        $l = ($page-1)*$limit;
        $sql = "SELECT * FROM {$table} LIMIT $l,$limit";
        $result = $this->conn->query($sql);
        
        while($row = $result->fetch_assoc()){
            $results[] = $row;
        }
        return $results;
    }

    public function pagin(){
        return $this->numberOfPage;
    }

    public function select_login($table,$user,$pass){
        $query = "SELECT * FROM {$table} WHERE email = ? AND passwords = ?";
        $result = $this->conn->prepare($query);
        $result->bind_param("ss",$user,$pass);
        $result->execute();
       
        $result->get_result();
        
        $result->store_result();
        if($result->affected_rows){
            return true;
        }
        return false;
    }

    public function select_search($table,$title){
            $sql = "SELECT * FROM {$table} WHERE title LIKE ?";
            $result = $this->conn->prepare($sql);
            $filter = "%".$title."%";
            $result->bind_param('s',$filter);
            $result->execute();
            $fetch = $result->get_result();
            while($row = $fetch->fetch_assoc()){
                $results[] = $row;
            }
            return $results;
    }

    public function select_sidebar($table,$column){
        $sql = "SELECT DISTINCT {$column} FROM {$table}";
        $result = $this->conn->query($sql);
        while($row = $result->fetch_assoc()){
            $results[] = $row;
        }
        return $results;
    }

    public function update_data($table,$id,$fields=[]){
        //for key
        $x = 1;
        foreach ($fields as $key => $value) {
            $set .= "{$key} = ?";
            if($x < count($fields)){
                $set .= ", ";
            }
            $x++;
        }
        $query = "UPDATE {$table} SET $set WHERE id = ?";
        //for value
        $val = array_values($fields);
        $result = $this->conn->prepare($query);
        $result->bind_param("sssss",$val[0],$val[1],$val[2],$val[3],$id);
        $result->execute();
        if($result == true){
            return true;
        }
        return false;
    }

    public function delete_data($table,$id){
        $query ="DELETE FROM {$table} WHERE id = ?";
        $result = $this->conn->prepare($query);
        $result->bind_param("s",$id);
        $result->execute();
        if($result == true){
            return true;
        }
        return false;
    }

    public function insert_data($table,$fields){
        //find the key
        $keys = array_keys($fields);
        $key = implode(',',$keys);

        //find the value
        $x = 1;
        foreach ($keys as $k => $v){
            $val .= "?";
            if($x < count($fields)){
                $val .= ",";
            }
        $x++;
        }
        $query = "INSERT INTO {$table}({$key}) VALUES({$val})";
        $result = $this->conn->prepare($query);
        $value = array_values($fields);
        $result->bind_param("ssss",$value[0],$value[1],$value[2],$value[3]);
        if($result->execute()){
            return true;
        }
        return false;
    }

}