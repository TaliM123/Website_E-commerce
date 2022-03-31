<?php include('./includeParts/phpcommands.php');
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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

    <div class="shoppingcart">
        <div class="shoppingcart_header">
            <ul>
                <li>Shopping Cart</li>
            </ul>
        </div>
        <div class="shoppingcart_products">
            <table>
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE username = '$username'") or die('query failed');
                    $grand_total = 0;
                    if (mysqli_num_rows($cart_query) > 0) {
                        while ($fetch_cart = mysqli_fetch_assoc($cart_query)) { ?>
                            <tr>
                                <td><img src="img/<?php echo $fetch_cart['img']; ?>" height="100" alt=""></td>
                                <td><?php echo $fetch_cart['name']; ?></td>
                                <td>$<?php echo $fetch_cart['price']; ?></td>
                                <td>
                                    <form action="" method="post">
                                        <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                        <input type="number" id="cartquantity" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                                        <input type="submit" class="updatecart" name="update_cart" value="update">
                                    </form>
                                </td>
                                <td>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
                                <td><a href="shoppingcart.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
                            </tr>
                    <?php //Kalkulimi i totalit te qmimit ne shop kart
                            $grand_total += $sub_total;
                        }
                    } else {
                        echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
                    } ?>
                    <tr class="table-bottom">
                        <td colspan="4">Grand Total :</td>
                        <td>$<?php echo $grand_total; ?></td>
                        <td><a href="shoppingcart.php?delete_all" onclick="return confirm('delete all from cart?');" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>">delete all</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>

</body>

</html>