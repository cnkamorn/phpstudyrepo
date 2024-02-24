<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
    <style>
        .form-signin {
            max-width: 330px;
            padding:1rem;
        }
        .eiei {
            color:red;
            text-align: center;
        }
        </style>
<body>
    <div class="container d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
  <form action="index.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput"></label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword"></label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit" name="login">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary"><p>
  </form>
</main>
</div>
</body>

    

</body>

</html>

<?php

if (isset($_POST["login"])) {
    $_SESSION["userlogin"] = filter_input(INPUT_POST,"username",FILTER_SANITIZE_EMAIL);
    $_SESSION["pass"] = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
    if ($_SESSION["userlogin"] == 'a@gmail.com' && $_SESSION["pass"] == '123') {
    header("Location: http://localhost/php/login/home.php");
    } else {
        echo "<script> alert('login failed'); </script>";
    }
}


//     //$name = filter_input(INPUT_POST,"username",FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_SPECIAL_CHARS);


?>
    <!-- <form action="index.php" method="post">
        username: <input type="text" name="username"><br>
        password: <input type="text" name="password"><br>
        <input type="submit" name="login">
    </form>
    <a href="./home.php">see profile</a> -->