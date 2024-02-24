<?php
    session_start();
  
?>

<?php 
  echo $_SESSION["userlogin"], "<br>";
  echo $_SESSION["pass"];
?>