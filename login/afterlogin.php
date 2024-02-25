<?php 
session_start();
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
    <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>

<?php
$getsession = $_SESSION["email"];
echo $getsession;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["logout"];
    if ($_POST["logout"]) {
        session_destroy();
        header("Location: index.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_destroy();
    header("Location: index.php");
  }
?>