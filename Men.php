<?php include('./includeParts/phpcommands.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Clothing</title>
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

    <!------------------------------------------Header Title--------------------------------->
    <div class="header-title man">
        <h2>Men's Clothing</h2>
    </div>
    <!-----------------------------------New-Arrival------------------------------------------->
    <section class="new-arrival">
        <!--heading----->
        <div class="arrival-heading">
            <strong>New Arrival</strong>
            <p>We provide you new design fashion clothes</p>
        </div>
        <!---product-container-->
        <div class="product-container">
            <?php $select_product = mysqli_query($conn, "SELECT * FROM `mennewarrival`") or die('query failed');
            include('includeParts/products.php'); ?>
        </div>
    </section>
    <!----------------------------------------Sale----------------------------------------------->
    <section class="sale">
        <!-----sale-box-->
        <div class="sale-box">
            <!---img-->
            <img src="img/Man-Wear-Sale-01.jpg" />
        </div>
        <!-----sale-box-2-->
        <div class="sale-box">
            <!---img-->
            <img src="img/Man-Wear-Sale-02.jpg" />
        </div>
        <!-----sale-box-3-->
        <div class="sale-box">
            <!---img-->
            <img src="img/Man-Wear-Sale-03.jpg" />
        </div>
        <!-------------------------new-arrival-------------------------------------------------->
        <section class="new-arrival">
            <!--heading----->
            <div class="arrival-heading">
                <strong>feature Items</strong>
                <p>We provide you with the best fashion clothes</p>
            </div>
            <!---product-container-->
            <div class="product-container">
                <?php
                $select_product = mysqli_query($conn, "SELECT * FROM `menfeatureitems`") or die('query failed');
                include('includeParts/products.php'); ?>
            </div>
        </section>

        <!--banner------>
        <div class="banner-box banner-foto-man-clothes"></div>
    </section>
    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>

</body>

</html>