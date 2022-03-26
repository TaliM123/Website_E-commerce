<?php if (mysqli_num_rows($select_product) > 0) {
    while ($fetch_product = mysqli_fetch_assoc($select_product)) { ?>
        <form class="product-box" method="post" action="">
            <!---img-->
            <div class="product-img">
                <!--add-shopping-cart-->
                <button type="submit" class="add-cart" name="addToCart">
                    <i class="fas fa-shopping-cart"></i>
                </button>
                <?php if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin') { ?>
                    <button type="submit" class="remove-product" name="deleteproduct" onclick="return confirm('remove item from cart?');">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button> <?php } ?>
                <img src="img/<?php echo $fetch_product['img']; ?>" />
            </div>

            <!---details-->
            <div class="product-details">
                <a href="#" class="p-name"><?php echo $fetch_product['name']; ?></a>
                <span class="p-price">$<?php echo $fetch_product['price']; ?></span>
            </div>
            <input type="hidden" name="product_quantity" value="1">
            <input type="hidden" name="product_dbname" value="<?php echo $fetch_product['table']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['img']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
        </form>
<?php };
}; ?>