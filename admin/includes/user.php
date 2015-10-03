<?php

class User {

    public function find_all_users(){
        $database = new Database;

        $result = $database->query("SELECT * FROM users");

        return $result;
    }

}