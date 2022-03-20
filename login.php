<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You are already logged in";
    header('location: index.php');
}
?>

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
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
            <!--right menu-->
            <div class="right-menu">
                <a><i></i></a><a><i></i></a>
            </div>
        </div>
    </nav>
    <br>
    <div class="form">
        <?php if (isset($register_popup)) { ?>
            <h1 class="successfulRegister"><?php echo $register_popup ?></h1>
        <?php } ?>
        <!--login------->
        <div class="login-form">
            <!--heading-->
            <strong>Log In</strong>
            <!---inputet-->
            <form method="POST" action="results.php">
                <?php if (isset($login_error)) { ?>
                    <p><?php echo $login_error ?></p>
                <?php } ?>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password" required>
                <!--butoni-submit-->
                <input type="submit" value="Log In" name="login_user">
            </form>
            <!--butoni-forget-dhe-sign-up-->
            <div class="form-buttons">
                <a href="#" class="forget">Forgot your password?</a>
                <a href="register.php" class="sign-up-btn">Create account</a>
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