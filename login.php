<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <h1>Log In</h1>
        <form method='post' action='productApple.php'>
            <input type='text' name='userid' placeholder='userid' required autofocus><br>
            <input type='password' name='password' placeholder='password' required><br>       
            <input type='submit' value='Login'>
        </form>
        <p>Hint: user: Andy, password: Andy</p>
        <br>
        <form method='post' action='productApple.php'>
            <input type='submit' value='Login As Guest'>
        </form>

    </body>
</html>
