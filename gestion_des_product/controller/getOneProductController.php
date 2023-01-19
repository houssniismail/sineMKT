<?php
require_once("../model/getOneproduct.php");
class productAficher extends afficher{
public function confr(){
   if(isset($_POST['id'])){
    $id = $_POST['id'];
    $product = new afficher();
    $result = $product->afficherProduct($id);
    return $result;
} 
}
}
$aff = new productAficher();
$product = $aff->confr();
// var_dump($product);
?>





