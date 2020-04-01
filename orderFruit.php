<?php
function orderFruit($array) {

    $_SESSION['cart'][$array["name"]] = $array;
}
