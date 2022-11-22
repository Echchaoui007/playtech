<?php
require "managment.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once "../includes/etc/css-cdn.php" ?>

    <style>
        tr:hover {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-dark bg-opacity-75">
    <?php require_once "../includes/navbar.php" ?>


    <div class="text-light container text-center my-5">
        <h2 class="h2">Products Manager</h2>

    </div>
    <div class="container-sm d-flex justify-content-center mb-2 ">
        <form action="operate.php" method="post">
            <div class="btn-group btn-group-lg" role="group" id="controls" aria-label="Basic mixed styles example">
                <a href="createEdit.php?add" class="btn btn-success btn rounded-pill rounded-end ">Add</a>
                <a id="edit-link" class="btn btn-warning text-white disabled">Edit</a>
                <button type="submit" name="delete" id="btn-delete" value="-1" class="btn  btn-danger rounded-pill rounded-start disabled">Delete</button>
            </div>
        </form>
    </div>
    <div class="table-responsive mx-md-5">
        <table class="table table-dark table-hover ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Label</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (getProducts() as $row) {
                ?>
                    <tr class="">
                        <td scope="row"><?php echo $row["id_prod"]; ?></td>
                        <td><?php echo $row["prod_lib"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["qtty"]; ?></td>
                        <td><?php echo $row["cat_lib"]; ?></td>
                        <td><img style="width:128px;height:128px;object-fit: contain;"  src="<?php echo "../download/" . $row["prod_img"]; ?>" class="img-fluid" alt="product image"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php require_once "../includes/footer.php" ?>

    <?php require_once "../includes/etc/js-cdn.php" ?>
    <script src="../src/js/dashboard.js"></script>
</body>

</html>