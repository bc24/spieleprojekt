<?php
session_start();

include 'akzeptanz/akzeptanz.html';
include("scripts/connection.php");

if (isset($_POST['ergebnis'])){
  // Bomberman Frage 1 - 6
  $sql = "UPDATE user SET frag1b = '".$_POST['sliderFrage1Bomberman']."' , frag2b = '".$_POST['sliderFrage2Bomberman']."' , frag3b = '".$_POST['sliderFrage3Bomberman']."' , frag4b = '".$_POST['sliderFrage4Bomberman']."' , frag5b = '".$_POST['sliderFrage5Bomberman']."' , frag6b = '".$_POST['sliderFrage6Bomberman']."' WHERE user='".$_SESSION['username']."'";
  // Bomberman Grage 7 -12
  $sql2 = "UPDATE user SET frag7b = '".$_POST['sliderFrage7Bomberman']."' , frag8b = '".$_POST['sliderFrage8Bomberman']."' , frag9b = '".$_POST['sliderFrage9Bomberman']."' , frag10b = '".$_POST['sliderFrage10Bomberman']."' , frag12b = '".$_POST['verbesserungText']."' WHERE user='".$_SESSION['username']."'";
  $sql3 = "UPDATE user SET frag11b = '".$_POST['sliderFrage11Bomberman']."' WHERE user='".$_SESSION['username']."'";
  // Frage 11 Bomerbman wird nicht gesendet ????? Der rest ??
  $result = mysqli_query($link, $sql);
  $result = mysqli_query($link, $sql2);
  $result = mysqli_query($link, $sql3);
}
// Update user Set frag1 = "5" WHERE user="1234"
?>
