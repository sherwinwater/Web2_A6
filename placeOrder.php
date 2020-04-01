<?php
include 'header.php';

$today = date("Ymd");
$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
$unique = $today . $rand;
$_SESSION['orderID']=$unique;
?>

<!DOCTYPE html>

<html>
    <body>
        <p>Hi <?=$_SESSION['user']?>, your order <?= $_SESSION['orderID']?> has been placed</p>
        
    </body>
</html>

