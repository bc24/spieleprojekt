<?php
session_start();

include 'akzeptanz/akzeptanz.html';
include("scripts/connection.php");

if (isset($_POST['ergebnis'])){
  $sql = "Update user Set frag1 = "'.$_Post['sliderFrage1Bomberman'].'" WHERE USER='1234'";

}
// Update user Set frag1 = "5" WHERE user="1234"
?>
