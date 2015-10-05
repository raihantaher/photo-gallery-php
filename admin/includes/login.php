<?php include('init.php'); ?>

<?php

if($session->is_signed_in()){
    redirect_to("index.php");
}

if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // do the database stuff

    if($user_found){

        $session->login($user_found);
        redirect_to("index.php");
    } else{
        $the_message = "Your username or password is incorrect";
    }
}
