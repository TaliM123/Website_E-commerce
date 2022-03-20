<nav>
    <!--social link-->
    <div class="social-call">
        <div class="msg_welcome">
            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <?php endif ?>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
        </div>
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
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Men.php">Men</a></li>
            <li><a href="Women.php">Women</a></li>
            <li><a href="Kids.php">Children</a></li>
        </ul>


        <!--right menu-->
        <div class="right-menu">
            <!--Log out icon-->
            <?php if (isset($_SESSION['username'])) : ?>
                <a href="index.php?logout='1'">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            <?php endif ?>
            <!--search ikon-->
            <a href="javascript:void(0);" class="search">
                <i class="fas fa-search"></i>
            </a>
            <!--Kart ikon-->
            <a href="#">
                <i class="fas fa-shopping-cart">
                    <!--Numra e produkteve brenda kartes-->
                    <span class="num-cart-product">0</span>
                </i>
            </a>
        </div>
    </div>
</nav>