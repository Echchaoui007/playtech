<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


    <title>Document</title>
</head>

<body>
    <table id="example" class="display">

    </tbody> -->
    </table>
</body>

<?php require_once "managment.php" ?>

<script>
    let req = new XMLHttpRequest(`./managment.php?id=${id}&qtty=${id}`)
    req.send()
    if(req.responseText = "OK")
</script>

</html>