<?php
if (isset($_POST["submit"])) {
    require "uploads.php";
    uploadProdImg($_FILES["myfile"],null);
}else{
    echo "you"; 
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
</head>

<body>
    <h1>To implements</h1>
    <form action="createEdit.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="myfile" class="form-label">Choose file</label>
            <input type="file" class="form-control" name="myfile" id="myfile" placeholder="" aria-describedby="fileHelpId">
            <div id="fileHelpId" class="form-text">Help text</div>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>