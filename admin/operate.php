<?php

include "managment.php";

print_r($_POST);
if (isset($_POST["delete"])) {
    echo "sss";
    deleteProductById($_POST["delete"]);
}
if (isset($_POST["update"])) {

    updateProductById($p_id);
}
