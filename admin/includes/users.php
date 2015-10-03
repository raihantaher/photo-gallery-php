<?php

class Users {

    public $id;
    public $username;
    public $password;
    public $firstname;
    public $lastname;

    public static function find_all_users(){
        return self::execute_query("SELECT * FROM users");
    }

    public static function find_by_id($id){
        return self::execute_query("SELECT * FROM users WHERE id=$id LIMIT 1");
    }

    private function execute_query($sql){

        $database = new Database;

        $result = $database->query($sql);

        $user_array = array();

        while($row = mysqli_fetch_array($result)){
            $user_array[] = self::instantiation($row);
        }

        return $user_array;
    }

    private function instantiation($result){

        $a_user = new self;

        foreach($result as $key => $value){
            $a_user->$key = $value;
        }

        return $a_user;
    }

}
