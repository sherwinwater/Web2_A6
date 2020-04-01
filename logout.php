<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
    <body>
        <p>Hi <?= $_SESSION['user'] ?>, You have logged out. </p>
        <a  href="login.php" class="add checkout"> Login</a><br>
        <?php 
        session_destroy();
        ?>

    </body>
</html>
