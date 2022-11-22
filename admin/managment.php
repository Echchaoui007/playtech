<?php
// require "../auth/onlyAdmin.php";

function getProducts()
{
    include "../database/connection.php";

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
function getProductById($id)
{
    include "../database/connection.php";
    $rslt = $conn->query("select * from product where id_prod = $id");
    $row = $rslt->fetch_assoc();
    $conn->close();
    return $row;
}


function getCategories()
{
    include "../database/connection.php";

    $rslt = $conn->query("Select * FROM category");
    $rows = $rslt->fetch_all(MYSQLI_ASSOC);
    $conn->close();
    return $rows;
}

function deleteProductById($p_id)
{
    include "../database/connection.php";

    $conn->query("delete from product where id_prod= $p_id");
    $conn->close();
    //to implement
}
function updateProductById($p, $p_img)
{
    include "../database/connection.php";
    include "uploads.php";
    $img_name = uploadProdImg($p_img, $p["id"]);
    $statment = $conn->prepare("update product set prod_lib = ? ,price = ? ,qtty = ? ,id_cat = ? ,prod_img = ? where id_prod = ? ");
    $statment->bind_param("sdiisi", $label, $price, $quatity, $category, $img_name, $id);
    $label = $p["label"];
    $quatity = $p["quantity"];
    $price = $p["price"];
    $category = $p["category"];
    $id = $p["id"];
    $statment->execute();
    $conn->close();
}

function addProduct($p,$image)
{
    include "../database/connection.php";
    include "uploads.php";

    $img = uploadProdImg($image, null);
    
    $sql = "INSERT INTO product(prod_lib, price, qtty, id_cat,prod_img) VALUES (? ,? ,? ,? ,?);";
    // values
    $statment = $conn->prepare($sql);
    $statment->bind_param("sdiis", $label, $price, $quatity, $category, $img_name);
    $label = $p["label"];
    $quatity = $p["quantity"];
    $price = $p["price"];
    $category = $p["category"];
    $img_name = $img;
    
    $statment->execute();
    
    // $conn->query();
    $conn->close();
}
