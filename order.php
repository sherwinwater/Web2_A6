<?php
include 'header.php';
include 'showCart.php';
showCart();
?>

<!DOCTYPE html>

<html>
    <body>
        <?php
        if (isset($_SESSION['orderID'])) {
            ?>
            <p>Hi <?= $_SESSION['user'] ?>, Your Order ID <?= $_SESSION['orderID'] ?></p>
            <?= $out ?>

            <p>Delivery Information</p>
            <div class="order_deliveryinfo">
                <p>Recipient:<a><?= $_SESSION['firstname_delivery'] . " " . $_SESSION['lastname_delivery'] ?></a></p>
                <p>Email:<a><?= $_SESSION['email_delivery'] ?></a></p>
                <p>Phone:<a><?= $_SESSION['phone_delivery'] ?></a></p>
                <p>Delivery address:<a><?=
                        $_SESSION['address_delivery'] . "," . $_SESSION['city_delivery']
                        . "," . $_SESSION['country_delivery'] . "," . $_SESSION['postcode_delivery']
                        ?></a></p>
            </div>
            
            <p>Billing Information</p>
            <div class="order_deliveryinfo">
                <p>Name:<a><?= $_SESSION['firstname_delivery'] . " " . $_SESSION['lastname_delivery'] ?></a></p>
                <p>Billing address:<a><?=
                        $_SESSION['address_payment'] . "," . $_SESSION['city_payment']
                        . "," . $_SESSION['country_payment'] . "," . $_SESSION['postcode_payment']
                        ?></a></p>
            </div>

        <?php } else {
            if (isset($_SESSION['user'])) {
                ?>

                <p> Hi <?= $_SESSION['user'] ?>, You haven't place any orders </p>
        <?php } else { ?>
                <p> Hi Guest, You haven't place any orders </p>

            <?php } ?>
<?php } ?>

    </body>
</html>

