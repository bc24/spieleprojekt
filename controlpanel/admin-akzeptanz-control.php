<?php
session_start();
if ($_POST['starten']){
file_put_contents('../index.php','');
}
if ($_POST['beenden']){
file_put_contents('../index.php',"");
}
 ?>
