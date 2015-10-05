<?php

class Database {

    private $conn;

    function __construct(){

        $this->open_db_connection();

    }

    private function open_db_connection(){
        $this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if (mysqli_connect_errno()){
            die("Database connection failed badly" . mysqli_error());
        }
    }

    public function query($sql){
        return mysqli_query($this->conn, $sql);
    }

    private function confirm_query($result){
        if(!$result){
            die("Query Failed!");
        }
    }

    public function escape_string($string){
        $escaped_string = mysqli_real_escape_string($this->conn, $string);
        return $escaped_string;
    }

}
