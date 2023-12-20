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
        $check_existing = "SELECT * FROM `cart` WHERE `id_cust` = ? AND `product_id` = ?";
        $check_existing = $this->db->prepare($check_existing);
        $check_existing->execute([$id_cust, $product_id]);
    
        if ($check_existing->rowCount() > 0) {
            $update_data = "UPDATE `cart` SET `qty` = `qty` + ? WHERE `id_cust` = ? AND `product_id` = ?";
            $update_data = $this->db->prepare($update_data);
            $update_data->execute([$qty, $id_cust, $product_id]);
    
            return $update_data;
        } else {
            $insert_data = "INSERT INTO `cart` SET `id_cust` = ?, `product_id` = ?, `qty` = ?";
            $insert_data = $this->db->prepare($insert_data);
            $insert_data->execute([$id_cust, $product_id, $qty]);
    
            return $insert_data;
        }
    }


    public function update_cart($id_cust, $product_id, $qty){
        
            $update_data = "UPDATE `cart` SET `qty` = ? WHERE `id_cust` = ? AND `product_id` = ?";
            $update_data = $this->db->prepare($update_data);
            $update_data->execute([$qty, $id_cust, $product_id]);
    
            return $update_data;
    }

    public function del_cart($cartId){
        
        $del_data = "DELETE FROM `cart` WHERE `id` = ?";
        $del_data = $this->db->prepare($del_data);
        $del_data->execute([$cartId]);

        return $del_data;
}
    

    public function show_product(){
        $show_product = "SELECT * FROM `product`";
        $show_product = $this->db->prepare($show_product);
        $show_product->execute();

        return $show_product;
    }

    public function get_num_of_items($id_cust){
        $get_num = "SELECT SUM(`qty`) AS total_qty FROM `cart` WHERE `id_cust` = ?";
        $get_num = $this->db->prepare($get_num);
        $get_num->execute($id_cust);

        $result = $get_num->fetch(PDO::FETCH_ASSOC);

        return $result['total_qty'] ?? 0;
    }

    public function show_cart($id_cust){
        $show_cart = "SELECT cart.id as cart_id, cart.*, product.* FROM cart INNER JOIN product ON cart.product_id = product.id WHERE id_cust = ?";
        $show_cart = $this->db->prepare($show_cart);
        $show_cart->execute($id_cust);

        return $show_cart;
    }

    public function calculate_total($id_cust){
        $calc_total = "SELECT SUM(cart.qty * product.price) AS total_amount
                   FROM cart
                   INNER JOIN product ON cart.product_id = product.id
                   WHERE cart.id_cust = ?";
    $calc_total = $this->db->prepare($calc_total);
    $calc_total->execute($id_cust);

    $result = $calc_total->fetch(PDO::FETCH_ASSOC);
    return $result['total_amount'];
    }
}

?>