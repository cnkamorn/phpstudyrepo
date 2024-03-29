<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="index.php"button type="button" class="btn btn-outline-primary me-2">
          Login</button></a>
         <a href="register.php"><button type="button" class="btn btn-primary">
        Sign-up</button></a>
      </div>
    </header>
  </div>

    <div class="container d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput"></label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword"></label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit" name="login">Login</button>
    <p class="mt-5 mb-3 text-body-secondary"><p>
  </form>
</main>
</div>
</body>

    

</body>

</html>

<?php 
include("database.php");
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);
 
error_reporting(E_ALL);

//todo login database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $_SESSION["email"] = filter_input(INPUT_POST,"username",FILTER_SANITIZE_EMAIL,FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["pass"] = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
    if ($_SESSION["email"] && $_SESSION["pass"]) {
      if (checkLogin($_SESSION["email"],$_SESSION["pass"],$conn)) {
        header("Location: afterlogin.php");
      } else {
        echo "<script> alert('Wrong email or password'); </script>";
      }
    }
  } else {
    echo "<script> alert('Please input email and password'); </script>";
  }
}
function checkLogin($email,$pass,$connection){
  try {  
    $sql = "SELECT * FROM users WHERE user = '$email'";
    $result = mysqli_query($connection,$sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        $dehash = password_verify($pass,$row["password"]);
        if ($dehash) {
          return True;
        }
      };
      mysqli_close($connection);
      return False;
}} catch(mysqli_sql_exception) {
  echo "error";
} }
?>