<?php
session_start();
include("connection.php");
if (isset($_POST['LogIn'])){
  $query ="SELECT user,password,username,player,team FROM user WHERE user = '".$_POST['username']."' AND password = '".$_POST['password']."'";
  $result = mysqli_query($link, $query);
  $row = mysqli_fetch_array($result);
  if ($row){
    $_SESSION['user']=$row['user'];
    $_SESSION['username']=$row['username'];
    $_SESSION['player']=$row['player'];
    $_SESSION['team']=$row['team'];
    header("Location: admin.php");
  } else {
    echo "Nutzer wurde nicht gefunden!";
  }
}
 ?>
