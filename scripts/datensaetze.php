<?php

$sql = "INSERT INTO user(user, password, username, player, team) VALUES
			('1234','1234', 'TestUser', 'Spieler 0', 'Team 0'),
			('92106','95267', NULL, NULL, NULL),
			('67496','45592', NULL, NULL, NULL),
			('24394','49583', NULL, NULL, NULL),
			('70916','83744', NULL, NULL, NULL),
			('85853','97824', NULL, NULL, NULL),
			('15197','38491', NULL, NULL, NULL),
			('66402','57828', NULL, NULL, NULL),
			('97665','31760', NULL, NULL, NULL),
			('66298','55812', NULL, NULL, NULL),
			('11833','51207', NULL, NULL, NULL),
			('99848','10913', NULL, NULL, NULL),
			('12215','36591', NULL, NULL, NULL),
			('89888','91961', NULL, NULL, NULL),
			('64878','69711', NULL, NULL, NULL),
			('92569','55091', NULL, NULL, NULL),
			('56145','58121', NULL, NULL, NULL),
			('22664','61421', NULL, NULL, NULL),
			('48342','97658', NULL, NULL, NULL),
			('17214','51543', NULL, NULL, NULL),
			('39558','49183', NULL, NULL, NULL)
			";
	if (mysqli_query($conn, $sql)) {
   	 echo " <br> New record created successfully";
	} else {
   	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



?>
