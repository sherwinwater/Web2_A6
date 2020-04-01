<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Payment</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php if (!isset($_SESSION['firstname_payment'])) {
            ?>
            <div>
                <p>Hi <?= $_SESSION['user'] ?>, please input your payment info</p>
                <h1>Payment Information</h1>
                <form method='post' action='delivery.php'>
                    <input type='text' name='firstname' placeholder='firstname' required ><br>
                    <input type='text' name='lastname' placeholder='lastname' required ><br>
                    <input type='text' name='account' placeholder='account number' required><br>       
                    <input type='text' name='expireddate' placeholder='expired date(month/year): 01/22' required ><br>
                    <input type='text' name='securitycode' placeholder='security code' required ><br>
                    <input type='text' name='address' placeholder='Billing address 
                           (1000 queensway, ) ' required><br>       
                    <input type='text' name='city' placeholder='city' required ><br>
                    <input type='text' name='country' placeholder='country' required ><br>
                    <input type='text' name='postcode' placeholder='post code' required ><br><br>
                    <input type='submit' value='Confirm' class="buy">
                </form>

            </div>

        <?php
        } else {
            include 'checkout.php';
        }
        ?>

    </body>
</html>
