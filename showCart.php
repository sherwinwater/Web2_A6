<?php

$totalprice = "";
$out = "";

function showCart() {
    global $totalprice;
    global $out;

    if (isset($_SESSION['cart'])) {
//        $out = '<form method="post" action="payment.php">';
        $out .= "<table>";
        $out .= "<tr>"
                . "<th>ID</th>"
                . "<th>Product</th>"
                . "<th>Unit Price</th>"
                . "<th>Quantity</th>"
                . "<th>Total Price</th>"
                . "</tr>";
        $i = 0;
        $totalprice = 0;

        foreach ($_SESSION['cart'] as $key => $value) {

            $out .= "<tr id='row" . $i . "'>"
                    . "<td>" . ($i + 1) . "</td>"
                    . "<td>" . $value["name"] . $value["img"] . "</td>"
                    . "<td id='unitprice" . $i . "'>" . $value["price"] . "</td>"
                    //            . "<td>" . $value["quantity"] . 
//                    . '<td ><input type="number" class="quantity" name="quantity" '
//                    . 'min="0" value="' . $value["quantity"] . '" required><br>'
                    . '<td>' . $value["quantity"]
//                    . '<button class="deleteBtn" type="button">delete</button>' . "</td>"
                    . "</td>"
                    . "<td id='price" . $i . "'>" . $value["quantity"] * $value["price"] . "</td>"
                    . "</tr>";
            $i++;
            $totalprice += $value["quantity"] * $value["price"];
        }

        $out .= "<tr>"
                . "<td colspan='4'>" . "Sum" . "</td>"
                . "<td id='totalprice'>" . $totalprice . "</td>"
                . "</tr>";
        $out .= "</table><br>";
//        $out .= '<input type="submit" value="Proceed to Checkout" > </form>';
    }
}

$_SESSION['totalprice'] = $totalprice;
?>