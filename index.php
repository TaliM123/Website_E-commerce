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

    <!--Search bari------------->
    <?php include './includeParts/search-bar.php' ?>

    <!--------------------------------------log-in-dhe-sign-up-form---------------------------------->
    <?php include './includeParts/login-signup-form.php' ?>

    <!-----------------------------------Full Slider----------------------------------------------->
    <?php include './includeParts/slider.php' ?>

    <!------------------------------------------Kategorite Featured--------------------------------->
    <div class="feature-heading">
        <h2>Featured Categories</h2>
    </div>

    <ul id="autoWidth" class="cs-hidden">
        <!-------1------------------------------------------->
        <li class="item">
            <!--Feature box-->
            <div class="feature-box">
                <a href="#">
                    <img src="img/Men-Wear-NewArrival-01.jpg" />
                </a>
            </div>
            <!--Tekst---->
            <span>Men's</span>
        </li>
        <!-------2------------------------------------------->
        <li class="item">
            <!--Feature box-->
            <div class="feature-box">
                <a href="#">
                    <img src="img/WhiteS.png" />
                </a>
            </div>
            <!--Tekst---->
            <span>Women's</span>
        </li>
        <!-------3------------------------------------------->
        <li class="item">
            <!--Feature box-->
            <div class="feature-box">
                <a href="#">
                    <img src="img/ecohoodie.png" />
                </a>
            </div>
            <!--Tekst---->
            <span>Children's</span>
        </li>
        <!-------4------------------------------------------->
        <li class="item">
            <!--Feature box-->
            <div class="feature-box">
                <a href="#">
                    <img src="img/Man-Wear-Sale-03.jpg" />
                </a>
            </div>
            <!--Tekst---->
            <span>Trousers</span>
        </li>
        <!-------5------------------------------------------->
        <li class="item">
            <!--Feature box-->
            <div class="feature-box">
                <a href="#">
                    <img src="img/FeatureSkirts.png" />
                </a>
            </div>
            <!--Tekst---->
            <span>Skirts</span>
        </li>
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
            <!---product-box-1-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/Man-Wear-Featured-Items-04.jpg" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Sweatshirt</a>
                    <span class="p-price">$40.00</span>
                </div>
            </div>
            <!---product-box-2-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/Man-Wear-Sale-02.jpg" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Man Pants</a>
                    <span class="p-price">$35.00</span>
                </div>
            </div>
            <!---product-box-3-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/DressP.png" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Dress</a>
                    <span class="p-price">$25.00</span>
                </div>
            </div>
            <!---product-box-4-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/FeatureSkirts.png" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Skirt</a>
                    <span class="p-price">$20.00</span>
                </div>
            </div>
            <!---product-box-5-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/jacketK.png" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Kid's Jacket</a>
                    <span class="p-price">$25.00</span>
                </div>
            </div>
            <!---product-box-6-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/KidCoverT.png" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Children's T-shirt</a>
                    <span class="p-price">$15.00</span>
                </div>
            </div>
            <!---product-box-7-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/Thoodie.png" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Hoodie</a>
                    <span class="p-price">$30.00</span>
                </div>
            </div>
            <!---product-box-8-->
            <div class="product-box">

                <!---img-->
                <div class="product-img">
                    <!--add-shopping-cart-->
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <img src="img/Men-Wear-NewArrival-06.jpg" />
                </div>


                <!---details-->
                <div class="product-details">
                    <a href="#" class="p-name">Hoodie</a>
                    <span class="p-price">$30.00</span>
                </div>
            </div>

        </div>
    </section>

    <!----------------------------------------Sale----------------------------------------------->

    <section class="sale">
        <!-----sale-box-->
        <div class="sale-box">
            <!---img-->
            <img src="img/Man-Wear-Featured-Items-03.jpg" />
            <!---text-->
            <a href="#">
                <div class="sale-text">
                    <strong></strong>
                    <span></span>
                </div>
            </a>
        </div>
        <!-----sale-box-2-->
        <div class="sale-box">
            <!---img-->
            <img src="img/WhiteS.png" />
            <!---text-->
            <a href="#">
                <div class="sale-text">
                    <strong></strong>
                    <span></span>
                </div>
            </a>
        </div>
        <!-----sale-box-3-->
        <div class="sale-box">
            <!---img-->
            <img src="img/KidCoverBody.png" />
            <!---text-->
            <a href="#">
                <div class="sale-text">
                    <strong></strong>
                    <span></span>
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
                <!---product-box-1-->
                <div class="product-box">

                    <!---img-->
                    <div class="product-img">
                        <!--add-shopping-cart-->
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="img/Men-Wear-NewArrival-05.jpg" />
                    </div>


                    <!---details-->
                    <div class="product-details">
                        <a href="#" class="p-name">Men's hoodie</a>
                        <span class="p-price">$40.00</span>
                    </div>
                </div>
                <!---product-box-2-->
                <div class="product-box">

                    <!---img-->
                    <div class="product-img">
                        <!--add-shopping-cart-->
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="img/DressH.png" />
                    </div>


                    <!---details-->
                    <div class="product-details">
                        <a href="#" class="p-name">Dress</a>
                        <span class="p-price">$29.00</span>
                    </div>
                </div>
                <!---product-box-3-->
                <div class="product-box">

                    <!---img-->
                    <div class="product-img">
                        <!--add-shopping-cart-->
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="img/KidsTshirt.png" />
                    </div>


                    <!---details-->
                    <div class="product-details">
                        <a href="#" class="p-name">T-shirt</a>
                        <span class="p-price">$15.00</span>
                    </div>
                </div>
                <!---product-box-4-->
                <div class="product-box">

                    <!---img-->
                    <div class="product-img">
                        <!--add-shopping-cart-->
                        <a href="#" class="add-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                        <img src="img/toddler.png" />
                    </div>


                    <!---details-->
                    <div class="product-details">
                        <a href="#" class="p-name">Toddler's T-shirt</a>
                        <span class="p-price">$20.00</span>
                    </div>
                </div>
            </div>
        </section>

        <!--banner------>
        <div class="banner-box f-slide-1">
            <!--Slider text container-->
            <div class="banner-container">
                <div class="banner-text banner-text-home">
                    <span>Limited Offer</span>
                    <strong>25% off<br /> with <font>promo code</font></strong>
                    <a href="#" class="banner-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--services------------------>
    <?php include './includeParts/services.php' ?>

    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>

    <!--Script------>
    <script src="js/scipt.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/ValidationForm.js"></script>
</body>

</html>