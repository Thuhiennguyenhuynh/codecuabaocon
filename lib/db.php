<?php
class database{
    private $host='localhost';
    private $username='root';
    private $password='';
    private $dbname='nguyenhuynhthuhien_2123110408';
    public $conn;
    function __construct(){
        $this ->conn= new mysqli($this ->host, $this ->username,$this -> password,$this ->dbname);
    
    if($this ->conn ->connect_error){
        die("connection failed:".$this ->conn ->connect_error);
    }
}
}
?>