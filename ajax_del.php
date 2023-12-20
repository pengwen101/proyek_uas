<?php
include 'includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartId = $_POST['cartId'];

    $shop->del_cart($cartId);

} else {
    http_response_code(400);
    echo "Invalid request method.";
}
?>