<?php include('./includeParts/phpcommands.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Website - Home</title>
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
    <!--Navigacioni-->
    <?php include './includeParts/navigation.php' ?>

    <!-----------------------------------Full Slider----------------------------------------------->
    <?php include './includeParts/slider.php' ?>

    <!------------------------------------------Kategorite Featured--------------------------------->
    <div class="feature-heading">
        <h2>Featured Categories</h2>
    </div>
    <ul id="autoWidth" class="cs-hidden">
        <?php $select_product = mysqli_query($conn, "SELECT * FROM `indexfeaturecategories`") or die('query failed');
        if (mysqli_num_rows($select_product) > 0) {
            while ($fetch_product = mysqli_fetch_assoc($select_product)) { ?>
                <li class="item">
                    <!--Feature box-->
                    <div class="feature-box">
                        <a href="#">
                            <img src="img/<?php echo $fetch_product['img']; ?>" />
                        </a>
                    </div>
                    <!--Tekst---->
                    <span><?php echo $fetch_product['name']; ?></span>
                </li>
        <?php }
        } ?>
    </ul>

    <!-----------------------------------New-Arrival------------------------------------------->

    <section class="new-arrival">
        <!--heading----->
        <div class="arrival-heading">
            <strong>New Arrival</strong>
            <p>We provide you new design fashion clothes</p>
        </div>
        <!---product-container-->
        <div class="product-container">
            <?php $select_product = mysqli_query($conn, "SELECT * FROM `indexnewarriwal`") or die('query failed');
            include('includeParts/products.php'); ?>
        </div>
    </section>

    <!----------------------------------------Sale----------------------------------------------->
    <section class="sale">
        <!-----sale-box-->
        <div class="sale-box">
            <!---img-->
            <img src="img/Man-Wear-Featured-Items-03.jpg" />
        </div>
        <!-----sale-box-2-->
        <div class="sale-box">
            <!---img-->
            <img src="img/WhiteS.png" />
        </div>
        <!-----sale-box-3-->
        <div class="sale-box">
            <!---img-->
            <img src="img/KidCoverBody.png" />
        </div>
        <!----------------------------Feature-Items------------------------------------>
        <section class="new-arrival">
            <!--heading----->
            <div class="arrival-heading">
                <strong>feature Items</strong>
                <p>We provide you new design fashion clothes</p>
            </div>
            <!---product-container-->
            <div class="product-container">
                <?php $select_product = mysqli_query($conn, "SELECT * FROM `indexfeatureitems`") or die('query failed');
                include('includeParts/products.php'); ?>
            </div>
        </section>

        <!--banner------>
        <?php include './includeParts/banner.php' ?>
    </section>
    <!--services------------------>
    <?php include './includeParts/services.php' ?>

    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>
</body>

</html>