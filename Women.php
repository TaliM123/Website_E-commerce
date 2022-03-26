<?php
include('./includeParts/phpcommands.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Clothing</title>
    <!--stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--JQuery--------->
    <script src="js/jQuery.js"></script>

    <!--Ikona ne titullin e webit-->
    <link rel="shortcut icon" href="img/Ikona-logo.png" />
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/02f97eb423.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Navigacioni-->
    <?php include './includeParts/navigation.php' ?>

    <!------------------------------------------Kategorite Featured--------------------------------->

    <div class="header-title women">
        <h2>Women's Clothing</h2>
    </div>


    <!-----------------------------------New-Arrival------------------------------------------->

    <section class="new-arrival">
        <!--heading----->
        <div class="arrival-heading">

            <strong>New Arrival</strong>
            <p>We provide you the best fashion clothes</p>

        </div>
        <!---product-container-->
        <div class="product-container">
            <?php $select_product = mysqli_query($conn, "SELECT * FROM `womennewarrival`") or die('query failed');
            include('includeParts/products.php'); ?>
        </div>
    </section>

    <!----------------------------------------Sale----------------------------------------------->

    <section class="sale">
        <!-----sale-box-->
        <div class="sale-box">
            <!---img-->
            <img src="img/FeatureDresses.png" />
            <!---text-->
            <a href="#">
                <div class="sale-text">
                    <strong>White Dress</strong>
                    <span>Sale off 15%</span>
                </div>
            </a>
        </div>
        <!-----sale-box-2-->
        <div class="sale-box">
            <!---img-->
            <img src="img/FeatureSweatshirts.png" />
            <!---text-->
            <a href="#">
                <div class="sale-text">
                    <strong>Black Sweater</strong>
                    <span>Sale off 20%</span>
                </div>
            </a>
        </div>
        <!-----sale-box-3-->
        <div class="sale-box">
            <!---img-->
            <img src="img/FeatureTshirts.png" />
            <!---text-->
            <a href="#">
                <div class="sale-text">
                    <strong>Black <br>T-shirt</strong>
                    <span>Sale off 17%</span>
                </div>
            </a>
        </div>
        <!--new-arrival----------------->
        <section class="new-arrival">
            <!--heading----->
            <div class="arrival-heading">

                <strong>feature Items</strong>
                <p>We provide you new design fashion clothes</p>

            </div>
            <!---product-container-->
            <div class="product-container">
                <?php $select_product = mysqli_query($conn, "SELECT * FROM `womenfeatureitems`") or die('query failed');
                include('includeParts/products.php'); ?>
            </div>
        </section>

        <!--banner------>
        <div class="banner-box banner-foto-women-clothes">
            <!--Slider text container-->
            <div class="banner-container">
                <div class="banner-text">
                    <span>Limited Offer</span>
                    <strong>25% off<br /> with <font>promo code</font></strong>
                    <a href="#" class="banner-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>

    <!--Script------>
    <script src="js/scipt.js"></script>

</body>

</html>