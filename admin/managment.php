<?php
include "../database/connection.php";

function getProducts()
{
    global $conn;
    $rslt = $conn->query("SELECT
        id_prod,
        prod_lib,
        qtty,
        price,
        prod_img,
        cat_lib FROM product JOIN category ON category.id_cat = product.id_cat;");
    $rows = $rslt->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $rows;
}



function deleteProductById($p_id)
{
    //to implement
}
function updateProductById($p_id)
{
    //to implement
}
