<?php
include('../model/delete.model.php');

class confirmation_suppression extends delete{
    public function confirmer(){
        if(isset($_POST['id'])){
            $produitid = $_POST['id'];
            $deleted = new delete();
            $deleted->suppression($produitid);
            
        }
        header("Location: ../views/aficherAdmin.php");
    }
}
$action = new confirmation_suppression();
$action->confirmer();
?>