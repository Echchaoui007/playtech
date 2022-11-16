<?php 
    include "../database/connection.php";
    
    function getProducts ($term) {
        global $conn;
        $rslt = $conn->query("SELECT * FROM product;");
        header("Content-Type: application/json");
        return json_encode($rslt->fetch_all(MYSQLI_ASSOC));
    }
    


    echo getProducts("h");





    $conn->close();
    exit();
