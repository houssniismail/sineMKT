<?php
require_once('../model/database.php');
class afficher extends dataB{
  
      public function afficherProduct($id){
        $data = new dataB();
        $pdo=$data->connect();
        $query = "SELECT * FROM `products` WHERE id=$id";
        $exe = $pdo->prepare($query);
        $exe->execute();
        $product = $exe->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($product);
        return $product;
      }
}




?>