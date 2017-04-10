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
					`frag1b` VARCHAR(10) NOT NULL,
          `frag1t` VARCHAR(10) NOT NULL,
					`frag2b` VARCHAR(10) NOT NULL,
          `frag2t` VARCHAR(10) NOT NULL,
					`frag3b` VARCHAR(10) NOT NULL,
          `frag3t` VARCHAR(10) NOT NULL,
					`frag4b` VARCHAR(10) NOT NULL,
          `frag4t` VARCHAR(10) NOT NULL,
					`frag5b` VARCHAR(10) NOT NULL,
          `frag5t` VARCHAR(10) NOT NULL,
					`frag6b` VARCHAR(10) NOT NULL,
          `frag6t` VARCHAR(10) NOT NULL,
					`frag7b` VARCHAR(10) NOT NULL,
          `frag7t` VARCHAR(10) NOT NULL,
					`frag8b` VARCHAR(10) NOT NULL,
          `frag8t` VARCHAR(10) NOT NULL,
					`frag9b` VARCHAR(10) NOT NULL,
          `frag9t` VARCHAR(10) NOT NULL,
					`frag10b` VARCHAR(10) NOT NULL,
          `frag10t` VARCHAR(10) NOT NULL,
					`frag11b` VARCHAR(10) NOT NULL,
          `frag11t` VARCHAR(10) NOT NULL,
					`frag12b` VARCHAR(10) NOT NULL,
          `frag12t` VARCHAR(10) NOT NULL
    			) ENGINE = MYISAM;
				";
	if (mysqli_query($conn, $sqluser)) {
	    echo "<br> Table user created successfully";
	} else {
	    echo "<br> Error creating table: " . mysqli_error($conn);
	}

?>
