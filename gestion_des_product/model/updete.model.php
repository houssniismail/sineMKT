<?php
include('../model/database.php');

class update extends dataB{

    public function update_product($productimage, $productname, $productprice, $productdescription,$idproduct){
       $data = new dataB();
       $prod=$data->connect();
       $query = "UPDATE `products` 
       SET `image`='$productimage',`name`='$productname',`price`='$productprice',`description`='$productdescription' 
       WHERE `id` = '$idproduct'";
       $exe = $prod->prepare($query);
       $exe->execute();

     
    }
}
?>