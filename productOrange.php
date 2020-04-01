<?php
include 'orderFruit.php';
include 'header.php';

$fruit = array(
    "name" => "Orange",
    "price" => 3.99,
    "quantity" => 0,
    "img" => '<img src="./img/orange.jpg" alt="fruit" class="fruit" style="width:100px;height:100px">'
);

if (isset($_POST['quantity'])) {
    if ($_POST["quantity"] > 0) {
        $quantity = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_SPECIAL_CHARS);
        $fruit["quantity"] = $quantity;
        orderFruit($fruit);
    }
}
?>

<!--img from https://sites.psu.edu/lifeitmoveson/files/2017/10/orange-1hoca2l.jpg-->

<!DOCTYPE html>

<html>
    <body>
        <h3>Welcome <?= $_SESSION["user"] ?>, please order your three fruits</h3>
        <div>
<?= $fruit["img"] ?>
            <p>Product: <?= $fruit["name"] ?></p>
            <p>Price: $<?= $fruit["price"] ?></p>
        </div>
        <form method="post" action="productOrange.php">
            Quantity: <input type="number" name="quantity" min="0" required><br><br>
            <input type="submit" value="Add to cart" > 
        </form>
        <br>
        <a  href="productBanana.php" class="add checkout" class="buy"> Choose Next Fruit</a>
    </body>
</html>
