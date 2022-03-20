<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$db = mysqli_connect('localhost', 'root', '', 'registration');
//Register form
if (isset($_POST['reg_user'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);

    if (strlen($username) < 6 || preg_match('/\s/', $username)) {
        $username_error = 'Your username needs to have a minimum of 6 letters and no whitespace';
    }
    if (empty($email)) {
        $email_error = 'Please insert your email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
    }
    if (strlen($password) < 8) {
        $password_error = 'Your password needs to have a minimum of 8 letters';
    } else if (strlen($password) > 32) {
        $password_error = 'Your password shoudn\'t have more than 32 letters';
    } else if (!$number || !$uppercase || !$lowercase) {
        $password_error = 'Your password shoud have at least 1 number, 1 uppercase and 1 lowercase charater';
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            $username_error = 'Username already exists';
        }

        if ($user['email'] === $email) {
            $email_error = 'Email already exists';
        }
    }

    if (empty($username_error) && empty($email_error) && empty($password_error)) {
        $password = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password, user_type) 
        VALUES('$username', '$email', '$password', 'user')";
        mysqli_query($db, $query);

        $register_popup = 'Thanks for Registering with Us please log in';
        include('login.php');
    } else {
        include('register.php');
    }
}
//LOGIN form

if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
        $logged_in_user = mysqli_fetch_assoc($results);
        if ($logged_in_user['user_type'] == 'admin') {
            $_SESSION['username'] = $username;
            $_SESSION['success']  = "You are now logged in Admin";
            header('location: admin/index.php');
        } else {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
    } else {
        $login_error = 'Wrong username / password combination';
        include('login.php');
    }
}
