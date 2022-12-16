<?php

    include "managment.php";

    if (isset($_POST["delete"])) {
        deleteProductById($_POST["delete"]);
    }
    if (isset($_POST["update"])) {
    $img = $_FILES["image"] ?? null;
    updateProductById($_POST, $img);
    }
    if (isset($_POST["create"])) {
        
        addProduct($_POST,$_FILES["image"]);
    }
    header("location: dashboard.php");

