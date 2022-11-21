<?php

use LDAP\Result;

include "database/connection.php";

$result = $conn->query("select * from product");
$products = $result->fetch_all(MYSQLI_ASSOC);
$conn->close();

?>






<!doctype html>
<html lang="en">

<head>
  <title>PlayTech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require_once "includes/etc/css-cdn.php"; ?>
  <link rel="stylesheet" href="./src/css/shop.css">
  <style>
    h4.prix::after {
      content: " $";
    }
  </style>
</head>

<body class="bg-dark">


  <?php require_once "includes/navbar.php" ?>







  <section class="container mt-5  rounded-3" id="popular-products">
    <h2 class="h2 text-center text-white mb-4 mb-sm-5">Product</h2>
    <div class="row">
      <?php foreach ($products as $prod) {   ?>

        <div class="col-md mb-3">
          <div class="card bg-dark text-bg-dark bg-gradient mx-auto " style="width: 18rem;">
            <img src="download/<?php echo $prod["prod_img"] ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title"><?php echo $prod["prod_lib"] ?></h5>
              <h4 class="prix"><?php echo $prod["price"] ?></h4>
              <a href="shop.php" class="btn btn-outline-secondary mt-4">Buy now</a>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>



  </section>




  <?php require_once "includes/footer.php" ?>

  <?php require_once "includes/etc/js-cdn.php" ?>
  <script src="src/js/test.js"></script>

</body>

</html>