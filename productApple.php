<?php
include 'orderFruit.php';
include 'header.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (!isset($_SESSION["user"]) || ($_SESSION["user"] == "Guest")) {
    if (isset($_POST["userid"])) {
        $userid = filter_input(INPUT_POST, "userid", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $row = $userid == "Andy" && $password == "Andy";

        if ($row) {
            $_SESSION["user"] = $userid;
        } else {
            session_unset();
            session_destroy();
        }
    } else {
        $_SESSION["user"] = "Guest";
    }
}

$fruit = array(
    "name" => "Apple",
    "price" => 2.99,
    "quantity" => 0,
    "img" => '<img src="./img/apple.jpg" alt="fruit" class="fruit" style="width:100px;height:100px">'
);

if (isset($_POST['quantity'])) {
    if ($_POST["quantity"] > 0) {
        $quantity = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_SPECIAL_CHARS);
        $fruit["quantity"] = $quantity;
        orderFruit($fruit);
    }
}
?>
<!--img from https://candlekiln.com/wp-content/uploads/2017/06/apple2.jpg-->
<!DOCTYPE html>
<html>
    <body>

        <?php
        if (isset($_SESSION["user"])) {
            ?> 
            <h3>Welcome <?= $_SESSION["user"] ?>!, please order 3 fruits</h3>
            <div>
    <?= $fruit["img"] ?>
                <p>Product: <?= $fruit["name"] ?></p>
                <p>Price: $<?= $fruit["price"] ?></p>
            </div>
            <form method="post" action="productApple.php">
                Quantity: <input type="number" name="quantity" min="0" required><br><br>
                <input type="submit" value="Add to cart" > 
            </form>
            <br>
            <a  href="productOrange.php" class="add checkout buy"> Choose Next Fruit</a><br>

            <?php
        } else {
            ?>
            <h1>Login Error! Access denied.</h1>
            <a href="login.php">Try again.</a>
            <?php
        }
        ?>

    </body>
</html>
