<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Fruit online</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css" >
    </head>
    <body>
        <h1>Welcome to Fruit Online Shopping</h1>

        <ul>
            <li><a href="index.php">Home</a></li>

            <?php
            if (isset($_SESSION["user"])) {
                if ($_SESSION["user"] != "Guest") {
                    ?>
                    <li><a><? echo "Hi ".$_SESSION["user"] ?></a></li>
                    <li><a href="logout.php">Logout</a></li>
    <?php } else { ?>
                    <li><a ><? echo "Hi Guest" ?></a></li>
                    <li><a href="login.php">Login</a></li>

                <?php } ?>
                <?php
            } else {
                ?>
                <li><a href="login.php">Login</a></li>
                <?php
            }
            ?>
            <li><a href="productApple.php">Shopping </a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="order.php">My Order</a></li>
        </ul>
    </body>
</html>
