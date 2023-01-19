<?php
require_once('../model/database.php');

class delete extends dataB{
  public function suppression($produitid){
    $data = new dataB();
    $pdo=$data->connect();
    $query = "DELETE FROM `products` WHERE id = '$produitid'";
    $exe = $pdo->prepare($query);
    $exe->execute();
  }
}

?>