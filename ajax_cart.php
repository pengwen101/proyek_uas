<?php
include 'includes/connect.php';

session_start();

// if (isset($_GET["id_cust"]) && !empty($_GET["id_cust"])) {
//     $id_cust = $_GET["id_cust"];
// } else {
//   header("Location: login.php");
// }

// if (isset($_SESSION['id_cust'])) {
//     $id_cust = $_SESSION['id_cust'];
    
//     $product_id = $_POST['product_id'];
//     $qty = $_POST['quantity'];

//     $result = $shop->insert_to_cart($id_cust, $product_id, $qty);

//     if ($result) {
//         echo "Item added to cart successfully!";
//     } else {
//         echo "Error adding item to cart.";
//     }
// } else {
//     echo "Error: id_cust not set in session.";
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];
    $customerId = 1;

    $shop->insert_to_cart($customerId, $productId, $quantity);

    $num = $shop->get_num_of_items([$customerId]);
    echo $num;
} else {
    http_response_code(400);
    echo "Invalid request method.";
}
?>