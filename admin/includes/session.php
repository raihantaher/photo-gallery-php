<?php

class Session {

    private $sign_in;
    public $user_id;

    function __construct(){
        session_start();
    }

}

$session = new Session;