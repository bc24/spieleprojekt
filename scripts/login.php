<?php
session_start();
include("connection.php");
if (isset($_POST['LogIn'])){
  $query ="SELECT user,password FROM user WHERE user = '".$_POST['username']."' AND password = '".$_POST['password']."'";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  if ($row){
    $_SESSION['username']=$row['user'];
    header("Location: index.php");
  } else {
    echo "Nutzer wurde nicht gefunden!";
  }
}
 ?>
