<div class="form">
    <!--login------->
    <div class="login-form">
        <!---butoni-cancel-->
        <a href="javascript:void(0);" class="form-cancel">
            <i class="fas fa-times"> </i>
        </a>
        <!--heading-->
        <strong>Log In</strong>
        <!---inputet-->
        <form name="registration" onsubmit="validateLogin(this)">
            <input type="email" id="email01" placeholder="Example@gmail.com" name="email" required>
            <input type="password" id="pass01" placeholder="Password" name="password" required>
            <!--butoni-submit-->
            <input type="submit" value="Log In">
        </form>
        <!--butoni-forget-dhe-sign-up-->
        <div class="form-buttons">
            <a href="#" class="forget">Forgot your password?</a>
            <a href="javascript:void(0);" class="sign-up-btn">Create account</a>
        </div>
    </div>


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
            <a href="javascript:void(0);" class="already-account">Already have an account?</a>

        </div>
    </div>

</div>