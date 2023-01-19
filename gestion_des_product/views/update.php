<?php
require_once('../controller/login.controller.php');
include('../controller/getOneProductController.php');

$aff = new productAficher();
$product = $aff->confr();
// var_dump($product);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>addpoduct</title>
</head>
<body>
    <?php foreach($product as $products):?>
        <div>
<form method="POST" action="../controller/update.controller.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image</label>
    <input type="file" class="form-control" value="<?php  echo $products['image']?>" name="productimage" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text" class="form-control" name="productname" id="exampleInputPassword1" value="<?php echo $products['name']?>" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="text" class="form-control" name="productprice" id="exampleInputPassword1" value="<?php echo $products['price']?>" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <input type="text" class="form-control" name="productdescription" id="exampleInputPassword1" value="<?php echo $products['description']?>" require>
  </div>
  
  <input type="hidden" name="id" value="<?php echo $products['id']?>">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php endforeach;?>
</body>
</html>