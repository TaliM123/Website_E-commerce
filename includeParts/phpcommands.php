<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'shop_db') or die('connection failed');
$connadmin = mysqli_connect('localhost', 'root', '', 'registration') or die('connection failed');

$username = $_SESSION['username'];

$sql = "Select * from cart where username = '$username'";

if (!isset($_SESSION['username'])) {
    header('location: login.php');
    $message[] = "You must login first!";
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

if (isset($_POST['addToCart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND username = '$username'") or die('query failed');

    if (mysqli_num_rows($select_cart) > 0) {
        $message[] = 'product already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(username, name, price, img, quantity) VALUES('$username', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
        $message[] = 'product added to cart!';
    }
}

if (isset($_POST['update_cart'])) {
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = 'cart quantity updated successfully!';
}

if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
}
if (isset($_GET['removeuser'])) {
    $remove_id = $_GET['removeuser'];
    mysqli_query($connadmin, "DELETE FROM `users` WHERE id = '$remove_id'") or die('query failed');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE username = '$username'") or die('query failed');
    header('location:index.php');
}

if (isset($_POST['deleteproduct'])) {
    $remove_product = $_POST['product_dbname'];
    $img_id = $_POST['product_image'];
    mysqli_query($conn, "DELETE FROM `$remove_product` WHERE img = '$img_id'") or die('query failed');
}

if(isset($_POST['update_user'])){
    $user_id = $_POST['user_id'];
    $update_username = $_POST['user_name'];
    $update_usertype = $_POST['user_type'];
    mysqli_query($connadmin, "UPDATE `users` SET username = '$update_username', user_type = '$update_usertype' WHERE id = '$user_id'") or die('query failed');
}
