<?php
$isAdmin = false; // for testing purposes
if ($isAdmin) {
} else {
    header("HTTP/1.1 403 Forbidden");
    require_once "../includes/etc/error.php";
    die(403);
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once "../includes/etc/css-cdn.php" ?>
</head>

<body class="bg-dark bg-opacity-75">
    <?php require_once "../includes/navbar.php" ?>


    <div class="text-light container text-center my-5">
        <h2 class="h2">Products Manager</h2>

    </div>
    <div class="container-sm d-flex justify-content-center mb-2 ">
        <div class="btn-group " role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-success btn">Add</button>
            <button type="button" class="btn btn-warning">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
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
                <?php foreach ($variable as $key => $value) {
                ?>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require_once "../includes/etc/js-cdn.php" ?>
    <script src="../src/js/dashboard.js"></script>
</body>

</html>