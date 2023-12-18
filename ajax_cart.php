<?php
include 'includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
    $customerId = 1; // Replace with the actual customer ID

    // Use your shop object to update the cart in the database
    $shop->insert_to_cart($customerId, $productId, $quantity);

    // Return the updated quantity for display
    $num = $shop->get_num_of_items([$customerId]);
    echo $num;
} else {
    http_response_code(400); // Bad Request
    echo "Invalid request method.";
}
?>