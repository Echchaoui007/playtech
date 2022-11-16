<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Signin</title>

  <?php require_once "../includes/etc/css-cdn.php" ?>

  <style>
    input:autofill {
      background: white;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../src/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form>
      <img class="mb-3" src="../assets/image/Logo.svg" alt="" width="210" height="65">
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg  btn-primary mb-3" type="submit">Sign in</button>

      <a class="w-50 btn btn-lg text-primary" href="signup.php">Sign up</a>
      <p class="mt-5 mb-3 text-muted">PlayTech &copy; 1990–2021</p>
    </form>
  </main>



</body>

</html>