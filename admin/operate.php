<?php

$isAdmin = true;


if($isAdmin) {
    include "managment.php";

    if (isset($_POST["delete"])) {
        echo "is Delete";
        deleteProductById($_POST["delete"]);
    }
    if (isset($_POST["update"])) {
        echo "is update";
        updateProductById($p_id);
    }
    if (isset($_POST["update"])) {
        echo "is update";
        updateProductById($p_id);
    }
}
