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
                <li><a href="Men.php">Men</a></li>
                <li><a href="Women.php">Women</a></li>
                <li><a href="Kids.php">Children</a></li>
                <li><a href="login.php">Login/Register</a></li>
            </ul>
            <!--right menu-->
            <div class="right-menu">
                <a><i></i></a><a><i></i></a>
            </div>
        </div>
    </nav>
    <br>
    <div class="form">
        <!--Sign-up------->
        <div class="sign-up-form">
            <!---butoni-cancel-->
            <a href="javascript:void(0);" class="form-cancel">
                <i class="fas fa-times"> </i>
            </a>
            <!--heading-->
            <strong>Sign Up</strong>
            <!---inputet-->
            <form name="sing-up" onsubmit="validateCreateAccount(this)">
                <input type="text" id="name02" placeholder="Full Name" name="fullname" required>
                <input type="email" id="email02" placeholder="Example@gmail.com" name="email" required>
                <input type="password" id="pass02" placeholder="Password" name="password" required>
                <!--butoni-submit-->
                <input type="submit" value="Sign Up">
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
    <script src="js/ValidationForm.js"></script>

</body>

</html>