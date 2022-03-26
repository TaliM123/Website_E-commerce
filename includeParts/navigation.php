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
            <!--Admin panel-->
            <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') { ?>
                <a href="adminpanel.php">
                    <i class="fa fa-user"></i>
                </a> <?php } ?>
            <!--Log out icon-->
            <?php if (isset($_SESSION['username'])) : ?>
                <a href="index.php?logout='1'" onclick="return confirm('Are you sure you want to logout?');">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            <?php endif ?>
            <!--search ikon-->
            <a href="javascript:void(0);" class="search">
                <i class="fas fa-search"></i>
            </a>
            <!--Kart ikon-->
            <a href="shoppingcart.php">
                <i class="fas fa-shopping-cart">
                    <!--Numra e produkteve brenda kartes-->
                    <span class="num-cart-product">
                        <?php if ($result = mysqli_query($conn, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo $rowcount;
                        } ?>
                    </span>
                </i>
            </a>
        </div>
    </div>
    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message" onclick="this.remove();">' . $message . '</div>';
        }
    }
    ?>
</nav>

<div class="search-bar">
    <!--Search Inputi ----->
    <div class="search-input">
        <!--Input-->
        <input type="text" placeholder="Search For Product" />
        <!--Butoni Cancel-->
        <a href="javascript:void(0);" class="search-cancel">
            <i class="fas fa-times"></i>
        </a>
    </div>
</div>