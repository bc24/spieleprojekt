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
            `username` VARCHAR(40) NOT NULL,
            `player` VARCHAR(40) NOT NULL,
            `team` VARCHAR(40) NOT NULL,
					`frag1b` INT(2) NOT NULL,
          `frag1t` INT(2) NOT NULL,
					`frag2b` INT(2) NOT NULL,
          `frag2t` INT(2) NOT NULL,
					`frag3b` INT(2) NOT NULL,
          `frag3t` INT(2) NOT NULL,
					`frag4b` INT(2) NOT NULL,
          `frag4t` INT(2) NOT NULL,
					`frag5b` INT(2) NOT NULL,
          `frag5t` INT(2) NOT NULL,
					`frag6b` INT(2) NOT NULL,
          `frag6t` INT(2) NOT NULL,
					`frag7b` INT(2) NOT NULL,
          `frag7t` INT(2) NOT NULL,
					`frag8b` INT(2) NOT NULL,
          `frag8t` INT(2) NOT NULL,
					`frag9b` INT(2) NOT NULL,
          `frag9t` INT(2) NOT NULL,
					`frag10b` INT(2) NOT NULL,
          `frag10t` INT(2) NOT NULL,
					`frag11b` INT(2) NOT NULL,
          `frag11t` INT(2) NOT NULL,
					`frag12b` VARCHAR(400) NOT NULL,
          `geschickt` VARCHAR(5) NOT NULL
    			) ENGINE = MYISAM;
				";
	if (mysqli_query($conn, $sqluser)) {
	    echo "<br> Table user created successfully";
	} else {
	    echo "<br> Error creating table: " . mysqli_error($conn);
	}

?>
