<?php

class connexio {
    var $host;
    var $db;
    var $user;
    var $passwd;
    var $conn;
    
    function connexio($ruta="../../"){
        $this->host="localhost";
        $this->db="pt3";
        $this->user="david";
        $this->passwd="david";
    }
    
    function DB_Open() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->passwd);
        if($this->conn){
            if(! mysqli_select_db($this->conn, $this->db)){
                $status = mysqli_error();
            }else {
                $status = 0;
            }
        } else {
            $status = mysqli_error();
        }
        return ($status);
    }
    
    function DB_Close() {
        if(mysqli_close($this->conn)){
            $status=1;
        } else{
            $status = 0;
        }
        return ($status);
    }
    
    function DB_Select() {
        
    }
    
    function DB_Execute() {
        
    }
    
    function DB_Fetch() {
        
    }
    
}

?>