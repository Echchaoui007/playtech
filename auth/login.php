<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location: ../index.php");
} else {
  if (isset($_POST["submit"])) {
    include "../database/connection.php";
    $st = $conn->prepare("select * from user where email = ? and pswd = ?");
    $st->bind_param("ss", $email, $pswd);
    $email = $_POST["email"];
    $pswd = $_POST["password"];
    $st->execute();
    $rslt = $st->get_result();
    if ($rslt->num_rows != 0) {
      $_SESSION["user"] = $rslt->fetch_assoc();
      header("location: ../index.php");
    } else {
      $_REQUEST["error"] = 1;
    }
    $conn->close();
  }
}

function isErr()
{
  if (isset($_REQUEST["error"])) {
    echo "is-invalid";
  }
}

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Signin</title>

  <?php require_once "../includes/etc/css-cdn.php" ?>




  <link href="../src/css/signin.css" rel="stylesheet">
</head>

<body class="text-center text-bg-dark bg-gradient ">

  <main class="form-signin">
    <form method="POST" action="login.php">
      <img class="mb-3" src="../assets/image/Logo-dark.svg" alt="" width="210" height="65">
      <div class="form-floating">
        <input name="email" type="email" class="form-control text-bg-dark <?php isErr() ?>" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control  text-bg-dark <?php isErr() ?> " id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg  btn-primary mb-3" name="submit" type="submit">Sign in</button>

      <a class="w-50 btn btn-lg text-primary" href="signup.php">Sign up</a>
      <p class="mt-5 mb-3 text-muted">PlayTech &copy; 1990–2021</p>
    </form>
  </main>



</body>

</html>