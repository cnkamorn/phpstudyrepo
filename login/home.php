<?php
    session_start();
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    Register successfully!!
  <input type="submit" name="back" value="back">
  </form>
</body>
</html>
<?php 
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);
 
error_reporting(E_ALL);
  $user = $_SESSION["userlogin"];
  if (!admin($user,$conn)) {
    $sql = "SELECT * FROM users WHERE user = '$user'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"], "<br>";
        echo $row["user"], "<br>";
        echo $row["password"], "<br>";
        echo $row["reg_date"],"<br>";
      };
      mysqli_close($conn);
  }
  else {
    echo "No user found";
  } ;
  }  
  // $password = $_SESSION["pass"];
  // $hash = password_hash($password,PASSWORD_DEFAULT);
  // if (password_verify("123",$hash)) {
  //   echo password_verify("123",$hash);
  // }  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy();
    header("Location: index.php");
  }

function admin($user,$connection) {
  if ($user == "admin@admin.com") {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($connection,$sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row["id"], "<br>";
      echo $row["user"], "<br>";
      echo $row["password"], "<br>";
      echo $row["reg_date"],"<br>";
    };
    return true;
  }
  else {
    echo "No user found";
  } ;
  }
  return false;
}
?>