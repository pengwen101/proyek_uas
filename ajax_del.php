<?php
include 'includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartId = $_POST['cartId'];

    // Use your shop object to update the cart in the database
    $shop->del_cart($cartId);

} else {
    http_response_code(400); // Bad Request
    echo "Invalid request method.";
}
?>