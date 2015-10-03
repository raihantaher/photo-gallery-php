<?php

class Users {

    public static function find_all_users(){
        return self::execute_query("SELECT * FROM users");
    }

    public static function find_by_id($id){
        return self::execute_query("SELECT * FROM users WHERE id=$id LIMIT 1");
    }

    private function execute_query($sql){
        $database = new Database;

        return $database->query($sql);
    }

}
