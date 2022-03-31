<?php include('./includeParts/phpcommands.php');
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'user') {
    header('location: index.php');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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

    <div class="show-users">

        <div class="adminpanel_header">
            <h2>All Users</h2>
        </div>
        <div class="user-div">
            <table class="users">
                <thead>
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>user type</th>
                    <th colspan="2">action</th>
                </thead>
                <tbody>
                    <?php $reg_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
                    if (mysqli_num_rows($reg_users) > 0) {
                        while ($fetch_users = mysqli_fetch_assoc($reg_users)) { ?>
                            <tr>
                                <td><?php echo $fetch_users['id']; ?></td>
                                <td><?php echo $fetch_users['username']; ?></td>
                                <td><?php echo $fetch_users['email']; ?></td>
                                <td><?php echo $fetch_users['user_type']; ?></td>
                                <td>
                                    <form method="post" action="adminpanel.php">
                                        <input type="hidden" name="user_id" value="<?php echo $fetch_users['id']; ?>">
                                        <input type="hidden" name="user_name" value="<?php echo $fetch_users['username']; ?>">
                                        <input type="hidden" name="user_type" value="<?php echo $fetch_users['user_type']; ?>">
                                        <input type="submit" class="updatecart" name="edit_user" value="edit ">
                                    </form>
                                </td>
                                <td><a href="adminpanel.php?removeuser=<?php echo $fetch_users['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php if (isset($_POST['edit_user'])) { ?>
        <div class="show-users">
            <div class="adminpanel_header">
                <h2>Edit User</h2>
            </div>
            <div>
                <table>
                    <thead>
                        <th>id</th>
                        <th>username</th>
                        <th>user type</th>
                        <th>action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="" method="post">
                                <td><input type="hidden" name="user_id" value="<?php echo $_POST['user_id']; ?>"><?php echo $_POST['user_id']; ?></td>
                                <td><input type="text" name="user_name" value="<?php echo $_POST['user_name']; ?>"></td>
                                <td><select name="user_type">
                                        <option value="<?php echo $_POST['user_type']; ?>"><?php echo $_POST['user_type']; ?></option>
                                        <?php if ($_POST['user_type'] == 'user') { ?>
                                            <option value="admin">admin</option> <?php } ?>
                                        <?php if ($_POST['user_type'] == 'admin') { ?>
                                            <option value="user">user</option> <?php } ?>
                                    </select>
                                </td>
                                <td><input type="submit" class="updatecart" name="update_user" value="save "></td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    <div class="show-users">
        <div class="adminpanel_header">
            <h2>Add Product</h2>
        </div>
        <div class="add-product">
            <table>
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Table</th>
                </thead>
                <tbody>
                    <form action="adminpanel.php" method="POST" enctype="multipart/form-data">
                        <tr>
                            <td><input type="file" name="image"></td>
                            <td><input type="text" name="name" class="inputbox"></td>
                            <td><input type="number" step="0.01" name="price" class="inputbox price"></td>
                            <td>
                                <ul>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="indexfeatureitems" required>
                                        <label for="ifi">Index Feature Items</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="indexnewarriwal" required>
                                        <label for="ina">Index New Arrival</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="kidsfeatureitems" required>
                                        <label for="kfi">Kids Feature Items</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="kidsnewarrival" required>
                                        <label for="kna">Kids New Arrival</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="menfeatureitems" required>
                                        <label for="mfi">Man Feature Items</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="mennewarrival" required>
                                        <label for="mna">Man New Arrival</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="womenfeatureitems" required>
                                        <label for="wfi">Women Feature Items</label>
                                    </li>
                                    <li><input type="checkbox" class="checkboxes" name="table[]" value="womennewarrival" required>
                                        <label for="wna">Women New Arrival</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" id="add-product"><input type="submit" name="addproduct" id="checkBtn" class="updatecart" value="Add Product"></td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>



    <!-------------------------------------------Footer----------------------------------------------->
    <?php include './includeParts/footer.php' ?>

</body>

</html>