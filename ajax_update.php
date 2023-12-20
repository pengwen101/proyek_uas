<?php
include 'includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
    $customerId = 1;

    $shop->update_cart($customerId, $productId, $quantity);
} else {
    http_response_code(400);
    echo "Invalid request method.";
}
?>