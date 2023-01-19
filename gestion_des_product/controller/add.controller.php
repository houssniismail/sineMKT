<?php
require_once('../model/add.model.php');

class add_confermation extends add{
    function addPic(){
        if(isset($_FILES['productimage'])){
            $picname=$_FILES['productimage']['name'];
            $picsize=$_FILES['productimage']['size'];
            $pictmpname=$_FILES['productimage']['tmp_name'];
        
            if($_FILES['productimage']['error']===0){
                    $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
        
                    $allowed_exs=array("jpg","jpeg","png");
        
                    if(in_array($img_ex_lc,$allowed_exs)){
                        $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                        $img_upload_path='uploads/'.$new_img_name;
                        move_uploaded_file($pictmpname,$img_upload_path);
                        return $img_upload_path;
                    }else{
                        die("error");
                    }
                    
            }else{
                    die("error");
                }     
        }
    }

    public function confirmer(){
        
        if(isset( $_POST['productname'], $_POST['productprice'], $_POST['productdescription'])){
            
            $productimage = $this->addPic();
            $productname = $_POST['productname'];
            $productprice = $_POST['productprice'];
            $productdescription = $_POST['productdescription'];
            $executing = new add();
            $executing->add_product($productimage, $productname, $productprice, $productdescription);
          header("Location: http://localhost/gestion_des_product/views/aficherAdmin.php"); 
        }
    
    }
}

$action = new add_confermation();
$action->confirmer();
?>