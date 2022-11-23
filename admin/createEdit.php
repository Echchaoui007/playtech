<?php
include "managment.php";
$product = null;

if (isset($_GET["add"])) {
    $title =  "Add";
    $operation = "create";
} else {
    $title =  "Edit";
    $operation = "update";
    if (isset($_GET["id"]) && $_GET["id"] = !null) {
        $product = getProductById($_REQUEST["id"]);
    }
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
    <style>
        form label::after {
            content: " *";
            color: red;
            font-size: 20px;
        }
    </style>

</head>

<body class="bg-dark">
    <?php require_once "../includes/navbar.php" ?>

    <form action="operate.php" method="post" enctype="multipart/form-data">
        <input type="text" name="<?php echo $operation ?>" hidden>
        <?php if (isset($product["id_prod"])) { ?>
            <input type="text" name="id" value="<?php echo $product["id_prod"] ?>" hidden>
        <?php } ?>
        <section class="">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-9">

                        <h1 class="text-white mb-4"><?php echo $title ?> Product</h1>

                        <div class="card text-bg-dark bg-gradient" style="border-radius: 15px;">
                            <div class="card-body">

                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <label class="mb-0" for="label">Label</label>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input value="<?php if ($product != null) {
                                                            echo $product["prod_lib"];
                                                        } ?>" id="label" name="label" type="text" class="form-control form-control-lg text-bg-dark    " required />

                                    </div>

                                </div>

                                <hr class="mx-n3">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <label class="mb-0" for="price">Price</label>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input step="0.01" value="<?php if ($product != null) {
                                                            echo $product["price"];
                                                        } ?>" id="price" name="price" type="number" class="form-control form-control-lg text-bg-dark  " required />

                                    </div>

                                </div>

                                <hr class="mx-n3">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <label class="mb-0" for="quantity">Quantity</label>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input value="<?php if ($product != null) {
                                                            echo $product["qtty"];
                                                        } ?>" id="quantity" name="quantity" type="number" class="form-control form-control-lg text-bg-dark   " required />

                                    </div>

                                </div>

                                <hr class="mx-n3">
                                <div class="row align-items-center pt-4 pb-3">
                                    <div class="col-md-3 ps-5">

                                        <label for="category" class="mb-0">Category</label>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <select id="category" name="category" class="form-select text-bg-dark " aria-label="Disabled select example" required>
                                            <?php foreach (getCategories() as $cat) { ?>
                                                <option value="<?php echo $cat["id_cat"]  ?>" <?php if ($product != null) {
                                                                                                    if ($cat["id_cat"] == $product["id_cat"]) {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                } ?>><?php echo $cat["cat_lib"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>



                                <hr class="mx-n3">

                                <div class="row align-items-center py-3">
                                    <div class="col-md-3 ps-5">

                                        <label class="mb-0">Upload Poster</label>

                                    </div>
                                    <div class="col-md-9 pe-5">

                                        <input required name="image" class="form-control form-control-lg text-bg-dark    " id="formFileLg" type="file" />
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