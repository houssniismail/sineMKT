<?php
    require_once('../model/updete.model.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class confermation_update extends update{
        function addPic(){
            if(isset($_FILES['productimage'])){
                $picname=$_FILES['productimage']['name'];
                $picsize=$_FILES['productimage']['size'];
                $pictmpname=$_FILES['productimage']['tmp_name'];
                $max_size = 5000000; 
                $allowed_exts = array("jpg","jpeg","png");
                $upload_dir = '../views/uploads/';
                if($_FILES['productimage']['error'] === 0){
                    
                    if($picsize > $max_size){
                        die("Error: File size is too large. Maximum allowed file size is $max_size bytes.");
                    }
                    $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    if(in_array($img_ex_lc, $allowed_exts)){
                        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                        $img_upload_path = $upload_dir . $new_img_name;
                        if(move_uploaded_file($pictmpname, $img_upload_path)){
                            return $img_upload_path;
                        }else{
                            die("Error: Failed to move uploaded file.");
                        }
                    }else{
                        die("Error: Invalid file extension. Allowed extensions: " . implode(", ", $allowed_exts));
                    }
                }
            }else{
                die("Error: No file was uploaded.");
            }
        }
        public function aplique(){
            if(isset($_POST['id'])){
                $productId=$_POST['id'];
                $productimage = $this->addPic();
                $productname = $_POST['productname'];
                $productprice = $_POST['productprice'];
                $productdescription = $_POST['productdescription'];
                $executing = new update();
                $executing->update_product($productimage, $productname, $productprice, $productdescription,$productId);
                header("Location: http://localhost/gestion_des_product/views/aficherAdmin.php"); 
            }
        }
    }
    $action = new confermation_update();
    $action->aplique();
?>