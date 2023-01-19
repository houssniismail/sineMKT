<?php
require_once('../model/database.php');
class afficher extends dataB{
      public function afficherToutProduct(){
        $data = new dataB();
        $pdo=$data->connect();
        $query = "SELECT * FROM `products`";
        $exe = $pdo->prepare($query);
        $exe->execute();
        $toutproduct = $exe->fetchAll(PDO::FETCH_ASSOC);
        return $toutproduct;
      }
}
?>