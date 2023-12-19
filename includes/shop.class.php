<?php

class Shop{
    private $db;

    public function __construct($db = ""){
        $this -> setConnect($db);
    }

    public function setConnect($db){
        $this -> db = $db;
    }

    public function insert_to_cart($id_cust, $product_id, $qty){
        // Check if a row with the given id_cust and product_id already exists
        $check_existing = "SELECT * FROM `cart` WHERE `id_cust` = ? AND `product_id` = ?";
        $check_existing = $this->db->prepare($check_existing);
        $check_existing->execute([$id_cust, $product_id]);
    
        if ($check_existing->rowCount() > 0) {
            // If the row exists, update the quantity by adding the new quantity to the existing quantity
            $update_data = "UPDATE `cart` SET `qty` = `qty` + ? WHERE `id_cust` = ? AND `product_id` = ?";
            $update_data = $this->db->prepare($update_data);
            $update_data->execute([$qty, $id_cust, $product_id]);
    
            return $update_data;
        } else {
            // If the row doesn't exist, insert a new row
            $insert_data = "INSERT INTO `cart` SET `id_cust` = ?, `product_id` = ?, `qty` = ?, `is_selected` = ?";
            $insert_data = $this->db->prepare($insert_data);
            $insert_data->execute([$id_cust, $product_id, $qty, true]);
    
            return $insert_data;
        }
    }
    

    public function show_product(){
        $show_product = "SELECT * FROM `product` WHERE `type` = 0";
        $show_product = $this->db->prepare($show_product);
        $show_product->execute();

        return $show_product;
    }

    public function get_num_of_items($id_cust){
        $get_num = "SELECT SUM(`qty`) AS total_qty FROM `cart` WHERE `id_cust` = ?";
        $get_num = $this->db->prepare($get_num);
        $get_num->execute($id_cust);

        // Fetch the result as an associative array
        $result = $get_num->fetch(PDO::FETCH_ASSOC);

        // Return the total quantity
        return $result['total_qty'] ?? 0; // Default to 0 if there's no result
    }
}

?>