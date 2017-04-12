<?php
session_start();
if ($_POST['start']){
file_put_contents('../akzeptanz/akzeptanz-update-index.php',"akzeptanz.php");
}
if ($_POST['beenden']){
file_put_contents('../akzeptanz/akzeptanz-update-index.php','');
}
 ?>
