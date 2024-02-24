<?php 
include("header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Food <br>
    <form action="index.php" method="post">
        login<input type="text" name="login">
        password <input type="text" name="password">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php 
    include("footer.html");
?>
<?php
// if ($_COOKIE["fav_food"] == "xxx") {
//     echo "Welcome! Login successful!{$_COOKIE["fav_food"]}";
// }
// if (!empty($_POST["food"])) {
//     setcookie("fav_food",$_POST["food"],time() + 20000,"/");
//     header("Refresh:0");
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username"><br>
    <label for="password">Password: </label>
    <input type="password" name="password"> <br>
    <input type="submit" name="login" value="login"> 
</form>

<form action="index.php" method="post">
    <input type="radio" name="credit" value="Visa"> Visa <br>
    <input type="radio" name="credit" value="Master"> MasterCard <br>
    <input type="radio" name="credit" value="Paypal"> Paypal <br>
    <input type="submit" name="confirm" value="confirm">
</form>

<form action="index.php" method="post">
    <input type="checkbox" name="foods[]" value="Pizza">Pizza <br>
    <input type="checkbox" name="foods[]" value="Rice">Rice <br>
    <input type="checkbox" name="foods[]" value="Noodle">Noodle <br>
    <input type="checkbox" name="foods[]" value="Burger">Burger <br>
    <input type="submit" name="submit">
</form>

</body>
</html>

// $name = "   DOG                 ";
// $phone = "1-2-3";
// $name = strtolower($name);
// $name = strtoupper($name);
// $name = trim($name);
// $name = trim($name);
// $name= str_pad($name,5,"0");
// echo str_replace("-"," ",$phone);
// echo $name;
// echo "sss";
// for ($a = 0;$a < count([1,2,3]); $a++) {
//     echo $a;
// }
// if (isset($_POST["submit"])) {
//     $foods = $_POST["foods"];
//     $unchecked = array();
//     $all = ["Pizza","Rice","Noodle","Burger"];
//     foreach ($all as $a) {
//         if (!in_array($a,$foods)){
//             array_push($unchecked,$a);
//         }
//     }
//     echo "Unchecked: ", implode(", " , $unchecked);
// }
// if (isset($_POST["confirm"])) {
//     $x = $_POST["credit"];
//     switch ($x) {
//         case "Paypal":
//             echo "Paypal";
//             break;
//         case "Visa":
//             echo "Visa";
//             break;
//         case "Master":
//             echo "Master";
//             break;
//         default:
//             echo "DOG";
//     }
 
// }
// $db = array("guyza" => "basex", "basex" => "guyza");
// $id = null;
// $pass = null;
// if (isset($_POST["login"])) {
//     $name = $_POST["username"];
//     //$name = filter_input(INPUT_POST,"username",FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_SPECIAL_CHARS);
//     $pass =filter_input(INPUT_POST,"password",FILTER_VALIDATE_INT);
//     if (!empty($pass)) {
//         echo "pass";
//     } else {
//         echo "WRONG";
//     }
//     // if (isset($name)) {
//     //     echo "Hello {$name}";
//     //     echo "{$pass}";
//     // }
// } 
// // foreach ($_POST as $k => $v) {
//    //$k == username or $k == password
//    if ($k == 'username') {
//     $id = $v;
//    } else {
//     $pass = $v;
//    } 
// }
// if (($db[$id] == $pass)) 
//     echo "$id $pass"

