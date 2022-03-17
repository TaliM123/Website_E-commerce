<?php

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if(strlen($username) < 6){
        $username_error = 'Your username needs to have a minimum of 6 letters';
    }
    if(empty($email)){
        $email_error = 'Please insert your email';
    }
    if(strlen($password) < 8){
        $password_error = 'Your password needs to have a minimum of 8 letters';
    } elseif(strlen($password) > 32){
        $password_error = 'Your password shoudn\'t have more than 32 letters';
    }

    if(empty($username_error) && empty($email_error) && empty($password_error)){
        $register_popup = 'Thanks for Registering with Us please log in';
        include('login.php');
    } else {
        include('register.php');  
    }
