<?php

    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username)){
        $username_error = 'Please insert your username';
    }
    if(empty($email)){
        $email_error = 'Please insert your email';
    }
    if(empty($password)){
        $password_error = 'Please insert your password';
    }


?>
