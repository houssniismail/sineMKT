
<?php
require_once('../model/database.php');

class add extends dataB{
         public function add_product($productimage, $productname, $productprice, $productdescription){
            $data = new dataB();
            $pdo = $data->connect();
            $query = "INSERT INTO `products`(`id`, `image`, `name`, `price`, `description`) VALUES (NULL,'$productimage','$productname','$productprice','$productdescription');";
            $exe = $pdo->prepare($query);
            $exe->execute();
         }
}

?>