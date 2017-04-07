<?php

$dbname = "userdaten";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqluser ="CREATE TABLE user(
    				`id` INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    				`user` VARCHAR(40) NOT NULL,
    				`password` VARCHAR(40) NOT NULL,
					`frag1` VARCHAR(10) NOT NULL,
					`frag2` VARCHAR(10) NOT NULL,
					`frag3` VARCHAR(10) NOT NULL,
					`frag4` VARCHAR(10) NOT NULL,
					`frag5` VARCHAR(10) NOT NULL,
					`frag6` VARCHAR(10) NOT NULL,
					`frag7` VARCHAR(10) NOT NULL,
					`frag8` VARCHAR(10) NOT NULL,
					`frag9` VARCHAR(10) NOT NULL,
					`frag10` VARCHAR(10) NOT NULL,
					`frag11` VARCHAR(10) NOT NULL,
					`frag12` VARCHAR(10) NOT NULL					
    			) ENGINE = MYISAM;
				";

	if (mysqli_query($conn, $sqluser)) {
	    echo "<br> Table user created successfully";
	} else {
	    echo "<br> Error creating table: " . mysqli_error($conn);
	}

?>