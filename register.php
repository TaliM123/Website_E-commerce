<?php if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($username)) {
    $username = '';
}
if (!isset($email)) {
    $email = '';
}
if (isset($_SESSION['username'])) {
    $message[] = "You are already have an account";
    header('location: index.php');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--------jQuery------>
    <script src="js/jQuery.js"></script>
    <!--Ikona ne titullin e webit-->
    <link rel="shortcut icon" href="img/Ikona-logo.png" />
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/02f97eb423.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <!--social link-->
        <div class="social-call">
            <div class="social">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!--Menu-bar---------------------->
        <div class="navigation">
            <!--logo-->
            <a href="#" class="logo">
                <img src="img/Logo.png" alt="">
            </a>
            <!--menu-icon-------------->
            <div class="toggle"></div>
            <!--menu-->
            <ul class="menu" style="margin-right: 20px;">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
            <!--right menu-->
            <div class="right-menu">
                <a><i></i></a><a><i></i></a>
            </div>
        </div>
        <!--Message from phpcommands-->
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
            }
        }
        ?>
    </nav>
    <br>
    <div class="form">
        <!--Sign-up------->
        <div class="sign-up-form">
            <!--heading-->
            <strong>Sign Up</strong>
            <!---inputet-->
            <form action="results.php" method="POST">
                <input type="text" placeholder="Username" value="<?php echo htmlspecialchars($username) ?>" name="username" required>
                <?php if (isset($username_error)) { ?>
                    <p><?php echo $username_error ?></p>
                <?php } ?>
                <input type="email" placeholder="Example@gmail.com" value="<?php echo htmlspecialchars($email) ?>" name="email" required>
                <?php if (isset($email_error)) { ?>
                    <p><?php echo $email_error ?></p>
                <?php } ?>
                <input type="password" placeholder="Password" name="password" required>
                <?php if (isset($password_error)) { ?>
                    <p><?php echo $password_error ?></p>
                <?php } ?>
                <!--butoni-submit-->
                <input type="submit" value="Sign Up" name="reg_user">
            </form>
            <!--butoni-forget-dhe-sign-up-->
            <div class="form-buttons">
                <a href="login.php" class="already-account">Already have an account?</a>
            </div>
        </div>
    </div>

    <?php include './includeParts/banner.php' ?>

    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>

    <!--Script------>
    <script src="js/scipt.js"></script>

</body>

</html>