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
        $the_result_array = self::execute_query("SELECT * FROM users WHERE id=$id LIMIT 1");

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
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
            if($a_user->check_has_attribute($key)){
                $a_user->$key = $value;
            }

        }

        return $a_user;
    }

    private function check_has_attribute($the_attribute){

        $object_properties = get_object_vars($this);

        return array_key_exists($the_attribute, $object_properties);

    }

}
