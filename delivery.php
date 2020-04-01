<?php
include 'header.php';

$firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, "lastname", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$account = filter_input(INPUT_POST, "account", FILTER_SANITIZE_SPECIAL_CHARS);
$address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
$country = filter_input(INPUT_POST, "country", FILTER_SANITIZE_SPECIAL_CHARS);
$postcode = filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['firstname_payment'] = $firstname;
$_SESSION['lastname_payment'] = $lastname;
$_SESSION['email_payment'] = $email;
$_SESSION['account_payment'] = $account;
$_SESSION['address_payment'] = $address;
$_SESSION['city_payment'] = $city;
$_SESSION['country_payment'] = $country;
$_SESSION['postcode_payment'] = $postcode;
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Delivery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div >
            <h1>Delivery Information</h1>
            <p>Hi <?= $_SESSION['user'] ?>, please input your delivery info</p>

            <form method='post' action='checkout.php'>
                <input type='text' name='firstname' placeholder='firstname' required ><br>
                <input type='text' name='lastname' placeholder='lastname' required ><br>
                <input type='text' name='phone' placeholder='phone number' required ><br>
                <input type='email' name='email' placeholder='email' required ><br>
                <input type='text' name='address' placeholder='Billing address 
                       (1000 queensway, ) ' required><br>       
                <input type='text' name='city' placeholder='city' required ><br>
                <input type='text' name='country' placeholder='country' required ><br>
                <input type='text' name='postcode' placeholder='post code' required ><br><br>
                <input type='submit' value='Confirm' class="buy">
            </form>

        </div>

    </body>
</html>