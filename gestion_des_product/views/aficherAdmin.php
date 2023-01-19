<?php
include("../controller/login.controller.php");
include('../controller/show.controller.php');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>gestion_du_product</title>
</head>
<body>
  <!-- ___________________________________________________________________________________ -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item mx-3">
        <a class="btn btn-primary mb-3 mt-3" href="../views/addproducts.php">add</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary mb-3 mt-3" href="../views/index.php">Home</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- ___________________________________________________________________________________ -->
<div class="table-responsive px-2 " class="d-flex justify-content-evenly">
<table class="table" style="justify-content: space-evenly; position: relative;">
  <thead>
    <tr >
      <th scope="row">id</th>
      <th scope="col">image</th>
      <th scope="col">name</th>
      <th scope="col">prix</th>
      <th scope="col">description</th>
      <th style="display: flex; align-items:center; justify-content:center;" scope="col">Actions</th>
    </tr>
  </thead>
  <tbody >

    <?php foreach($product as $products):?>
    <tr>
      <th scope="row"><?php echo $products['id']?></th>
      <td><img src="./<?php  echo $products['image']?>" alt="new-arrivals images" style="width: 50px;"></td>
      <td><?php echo $products['name']?></td>
      <td><?php echo $products['price']?></td>
      <td style="align-items:center; justify-content:center;"><?php echo $products['description']?></td>
      <td>
        <div style="display: flex; align-items:center; justify-content:center;">
      <form action="../controller/delete.controller.php" method="POST" >
							<input type="hidden" name="id" value="<?php echo $products['id']?>">
            	<button style="margin: 3px" class="btn btn-danger" type="submit">delete</button>
              </form>
              <form method="POST" action="../views/update.php">
              <input type="hidden" name="id" value="<?php echo $products['id']?>">
              <button name="submit" class="btn btn-primary">update</button>
             </form>
    </div>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
</body>
</html>