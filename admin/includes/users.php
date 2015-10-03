<?php

class Users {

    public static function find_all_users(){
        $database = new Database;

        $result = $database->query("SELECT * FROM users");

        return $result;
    }

}
