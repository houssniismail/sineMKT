
<?php
require_once('../controller/login.controller.php');
require_once '../controller/add.controller.php';


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
<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">image</label>
    <input type="file" class="form-control" name="productimage" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text" class="form-control" name="productname" id="exampleInputPassword1" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="text" class="form-control" name="productprice" id="exampleInputPassword1" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">description</label>
    <input type="text" class="form-control" name="productdescription" id="exampleInputPassword1" require>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>