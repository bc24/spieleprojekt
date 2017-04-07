<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE userdaten";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "<br> Error creating database: " . mysqli_error($conn);
}

#Tabelle erstellen

include("tabelleerstellen.php");

#Datensätze init
	$query_datecreate ="SELECT * FROM user WHERE user = '92106'";
	$result = mysqli_query($conn, $query_datecreate);
	$row = mysqli_fetch_array($result);
	if(!$row){
		include("datensaetze.php");
	}
	else{
		echo " <br> Daten existieren schon!";
	}
	

mysqli_close($conn);			
?>