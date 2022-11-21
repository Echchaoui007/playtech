<?php
if (isset($_POST["submit"])) {
    require "uploads.php";
    uploadProdImg($_FILES["myfile"], null);
} else {
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Editor</title>

    <?php require_once "../includes/etc/css-cdn.php" ?>

</head>

<body class="bg-dark">
    <?php require_once "../includes/navbar.php" ?>

<form action="" method="post">
    <section class="">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">

                    <h1 class="text-white mb-4">Add Product</h1>

                    <div class="card text-bg-dark bg-gradient" style="border-radius: 15px;">
                        <div class="card-body">

                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Label</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input name="label" type="text" class="form-control form-control-lg text-bg-dark    " />

                                </div>

                            </div>

                            <hr class="mx-n3">
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Price</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input name="price" type="number" class="form-control form-control-lg text-bg-dark  " />

                                </div>

                            </div>

                            <hr class="mx-n3">
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Quantity</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input name="quantity" type="number" class="form-control form-control-lg text-bg-dark   " />

                                </div>

                            </div>

                            <hr class="mx-n3">
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Category</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <select name="category" class="form-select text-bg-dark " aria-label="Disabled select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                </div>

                            </div>



                            <hr class="mx-n3">

                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">

                                    <h6 class="mb-0">Upload Poster</h6>

                                </div>
                                <div class="col-md-9 pe-5">

                                    <input name="upload poster" class="form-control form-control-lg text-bg-dark    " id="formFileLg" type="file" />
                                    <div class="small text-muted mt-2">Upload image of the product </div>

                                </div>
                            </div>

                            <hr class="mx-n3">

                            <div class="px-5 py-4">
                                <button type="submit" class="btn btn-primary btn-lg">Confirm</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    </form>


    <?php require_once "../includes/footer.php" ?>
    <?php require_once "../includes/etc/js-cdn.php" ?>
</body>

</html>