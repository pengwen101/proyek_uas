<?php

try{
    $connect = new PDO("mysql:host=localhost; dbname=project_tekweb", "root", "");
}catch(PDOException $e){
    die("Tidak berhasil terkoneksi ke database! <br> Error: ". $e);
}

include "shop.class.php";

$shop = new Shop($connect);

?>