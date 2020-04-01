<?php
include 'header.php';
include 'showCart.php';
showCart();

$firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_SPECIAL_CHARS);
$address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
$country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
$postcode = filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['firstname_delivery'] = $firstname;
$_SESSION['lastname_delivery'] = $lastname;
$_SESSION['email_delivery'] = $email;
$_SESSION['phone_delivery'] = $phone;
$_SESSION['address_delivery'] = $address;
$_SESSION['city_delivery'] = $city;
$_SESSION['country_delivery'] = $country;
$_SESSION['postcode_delivery'] = $postcode;
?>

<!DOCTYPE html>
<html>

    <head>
        <title>checkout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h2>Hi <?= $_SESSION['user'] ?>, Your Order Info</h2>
        <h3>Order Information</h3>
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
    </div>
    <a href="placeOrder.php" class="buy">Place Order</a>
</body>
</html>