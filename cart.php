<?php
include 'Fruit.php';
include 'header.php';
include 'showCart.php';
showCart();
?>

<!DOCTYPE html>

<html>

    <body>
        <?php
//        if ($totalprice > 0 && !isset($_SESSION['orderID'])) {
        if ($totalprice > 0) {
            ?>
            <h2>Hey <?= $_SESSION["user"] ?>, Your shopping cart</h2>
            <?= $out ?>
            <a href="payment.php" class="buy">Proceed to Checkout </a>
        <?php } else {
            ?>
            <p>You haven't chosen any fruit</p>
        <?php }
        ?>
<!--        <script>
        var quantity = document.getElementsByClassName('quantity');
        var totalprice = document.getElementById('totalprice');
        var deleteBtn = document.getElementsByClassName('deleteBtn');

        Object.entries(quantity).forEach(([key, val]) => {
            val.addEventListener('change', function () {
                changePrice(key, val);
            });
        });

        Object.entries(deleteBtn).forEach(([key, val]) => {
            val.addEventListener('click', function () {
                removeItem(key, val);
            });
        });

        function changePrice(key, val) {
            var price = document.getElementById('price' + key);
            var unitprice = document.getElementById('unitprice' + key);
            totalprice.innerHTML = (Number(totalprice.innerHTML) - Number(price.innerHTML)).toFixed(2);
            price.innerHTML = Number(val.value * unitprice.innerHTML).toFixed(2);
            totalprice.innerHTML = (Number(totalprice.innerHTML) + Number(price.innerHTML)).toFixed(2);
        }

        function removeItem(key, val) {
            var rowElement = document.getElementById('row' + key);
            var price = document.getElementById('price' + key);
            rowElement.remove();
            totalprice.innerHTML = (Number(totalprice.innerHTML) - Number(price.innerHTML)).toFixed(2);
        }

    </script>-->
    </body>

</html>