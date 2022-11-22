<?php


// require "../auth/onlyAdmin.php";

    include "managment.php";

    if (isset($_POST["delete"])) {
        echo "is Delete";
        deleteProductById($_POST["delete"]);
    }
    if (isset($_POST["update"])) {

        updateProductById($_POST,$_FILES["image"]);
    }
    if (isset($_POST["create"])) {

        addProduct($_POST,$_FILES["image"]);
    }
    header("location: dashboard.php");

