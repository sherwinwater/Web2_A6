<?php
include 'orderFruit.php';
include 'header.php';

$fruit = array(
    "name" => "Banana",
    "price" => 1.19,
    "quantity" => 0,
    "img" => '<img src="./img/banana.jpg" alt="fruit" class="fruit" style="width:100px;height:100px">'
);

if (isset($_POST['quantity'])) {
    if ($_POST["quantity"] > 0) {
        $quantity = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_SPECIAL_CHARS);
        $fruit["quantity"] = $quantity;
        orderFruit($fruit);
    }
}
?>

<!--img from https://images-na.ssl-images-amazon.com/images/I/41XbQ%2BZVgxL.jpg-->

<!DOCTYPE html>

<html>
    <body>
        <h3>Welcome <?= $_SESSION["user"] ?>, please order your three fruits</h3>
        <div>
<?= $fruit["img"] ?>
            <p>Product: <?= $fruit["name"] ?></p>
            <p>Price: $<?= $fruit["price"] ?></p>
        </div>
        <form method="post" action="productBanana.php">
            Quantity: <input type="number" name="quantity" min="0" required><br><br>
            <input type="submit" value="Add to cart" > 
        </form>
        <br>
        <a  href="cart.php" class="add checkout" class="buy"> Proceed to Checkout</a><br><br>
    </body>
</html>
