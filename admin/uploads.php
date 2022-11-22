
<?php
//uploads file with prod_$id_prod 
// ex : prod_10004.png
// require "../auth/onlyAdmin.php";
function uploadProdImg($fileToUpload, $id_prod)
{
    // set $id_ prod to next auto_increment value if null
    if ($id_prod == null) {
        include "../database/connection.php";
        $id_prod = $conn->query("call getCurrId();")->fetch_assoc()['curr_id'];
        $conn->close();
    }
    $target_dir = "../download/";
    
    $imageFileType = strtolower(pathinfo($fileToUpload["name"], PATHINFO_EXTENSION));

    $target_file = $target_dir ."prod_$id_prod." .$imageFileType;
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($fileToUpload["tmp_name"]);
        if ($check == false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($fileToUpload["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
}

?>
