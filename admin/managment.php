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

function addProduct($libel, $quatity, $price, $image, $category)
{
    global $conn;
    uploadProdImg($image, null);
    $sql = "INSERT INTO product(prod_lib, price, qtty,prod_img, id_cat) VALUES ( , , , ,);";
    // $conn->query();
    $conn->close();
}
