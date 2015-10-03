<?php

require_once("database_config.php");

class Database {

    private $conn;

    function __construct(){

        $this->conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if (!$this->conn)
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

    }

    public function query($sql){
        return mysqli_query($this->conn, $sql);
    }

}
