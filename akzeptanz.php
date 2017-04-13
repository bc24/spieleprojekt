<?php
session_start();
if (!isset($_SESSION['user']))
  {
    header("Location:login.php");
  }
  
include ('akzeptanz/akzeptanz.html');
include("scripts/connection.php");

if (isset($_POST['ergebnis'])){
  // Bomberman Frage 1 - 6
  $sql = "UPDATE user SET frag1b = '".$_POST['sliderFrage1Bomberman']."' , frag2b = '".$_POST['sliderFrage2Bomberman']."' , frag3b = '".$_POST['sliderFrage3Bomberman']."' , frag4b = '".$_POST['sliderFrage4Bomberman']."' , frag5b = '".$_POST['sliderFrage5Bomberman']."' , frag6b = '".$_POST['sliderFrage6Bomberman']."' WHERE user='".$_SESSION['username']."'";
  // Bomberman Frage 7 - 11 + Text
  $sql2 = "UPDATE user SET frag7b = '".$_POST['sliderFrage7Bomberman']."' , frag8b = '".$_POST['sliderFrage8Bomberman']."' , frag9b = '".$_POST['sliderFrage9Bomberman']."' , frag10b = '".$_POST['sliderFrage10Bomberman']."' ,frag11b = '".$_POST['sliderFrage11Bomberman']."' WHERE user='".$_SESSION['username']."'";
  // Teeworld Frage 1 - 6
  $sql3 = "UPDATE user SET frag1t = '".$_POST['sliderFrage1Teeworld']."' , frag2t = '".$_POST['sliderFrage2Teeworld']."' , frag3t = '".$_POST['sliderFrage3Teeworld']."' , frag4t = '".$_POST['sliderFrage4Teeworld']."' , frag5t = '".$_POST['sliderFrage5Teeworld']."' , frag6t = '".$_POST['sliderFrage6Teeworld']."' WHERE user='".$_SESSION['username']."'";
  // Teeworld Frage 7 - 11
  $sql4 = "UPDATE user SET frag7t = '".$_POST['sliderFrage7Teeworld']."' , frag8t = '".$_POST['sliderFrage8Teeworld']."' , frag9t = '".$_POST['sliderFrage9Teeworld']."' , frag10t = '".$_POST['sliderFrage10Teeworld']."' , frag11t = '".$_POST['sliderFrage11Teeworld']."' WHERE user='".$_SESSION['username']."'";
  // Verbesserungstext
  $sql5 = "UPDATE user SET frag12b = '".strip_tags($_POST['verbesserungText'])."' WHERE user='".$_SESSION['username']."'";

 mysqli_query($link, $sql);
 mysqli_query($link, $sql2);
 mysqli_query($link, $sql3);
 mysqli_query($link, $sql4);
 mysqli_query($link, $sql5);
}
?>
