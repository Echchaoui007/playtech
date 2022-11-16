<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require_once "../includes/etc/css-cdn.php" ?>

    <link rel="stylesheet" href="../src/css/signup.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="mb-3 mx-auto " style="width:fit-content ;">
                <img src="../assets/image/Logo.svg" alt="" width="210" height="65">

            </div>
            <form>
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input name="fname" type="text" class="form-control" placeholder="name">
                            <label for="fname">Fisrt Name</label>
                        </div>

                    </div>
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input name="lname" type="text" class="form-control" placeholder="name">
                            <label for="floatingPassword">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" placeholder="email">
                            <label for="floatingInput">Email address</label>
                        </div>

                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input name="email" type="password" class="form-control" placeholder="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    </div>
                </div>

                
                <button class="btn btn-lg  btn-primary mb-3 mx-auto" type="submit">Sign up</button>
            
        </form>
    </div>
    <a class="btn btn-lg text-primary" href="login.php">Sign in</a>
        <p class="mt-5 mb-3 text-muted ">PlayTech &copy; 1990–2021</p>
    </main>
</body>

</html>