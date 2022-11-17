<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php require_once "../includes/etc/css-cdn.php" ?>
</head>

<body>
    <?php require_once "../includes/navbar.php" ?>
    
    <h1 class="h1 text-center">Dashboard</h1>

    
    
    <div class="table-responsive mx-md-5">
        <table class="table table-striped
        table-hover	
        table-borderless
        table-primary
        align-middle">
            <thead class="table-light">
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr class="table-primary" >
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                    <tr class="table-primary">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
    
    <?php require_once "../includes/etc/js-cdn.php" ?>
    <script src="../src/js/test.js"></script>
</body>

</html>