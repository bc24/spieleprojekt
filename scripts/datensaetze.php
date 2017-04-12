<?php

$sql = "INSERT INTO user(user, password, username, player, team) VALUES
			('1234','1234', 'TestUser', 'Spieler 0', 'Team 0'),
			('92106','95267', 'Sara','1' , '4'),
			('67496','45592', 'Alec', '2', '4'),
			('24394','49583', 'Kevin K.', '3', '1'),
			('70916','83744', 'Dennis', '4', '1'),
			('85853','97824', 'Eric', '5', '3'),
			('15197','38491', 'Cora', '6', '4'),
			('66402','57828', 'Raphael', '7', '2'),
			('97665','31760', 'Erik', '8', '3'),
			('66298','55812', 'Noah', '9', '1'),
			('11833','51207', 'Tom', '10', '1'),
			('99848','10913', 'Max', '11', '3'),
			('12215','36591', 'Konstantin', '12', '2'),
			('89888','91961', 'Gregor', '13', '4'),
			('64878','69711', 'Roman', '14', '2'),
			('92569','55091', 'Richard', '15', '2'),
			('56145','58121', 'Julian', '16', '3'),
			('22664','61421', NULL, '17', NULL),
			('48342','97658', NULL, '18', NULL),
			('17214','51543', NULL, '19', NULL),
			('39558','49183', NULL, '20', NULL),
			('admin-login', 'krankespw','Admin','69','69')
			";
	if (mysqli_query($conn, $sql)) {
   	 echo " <br> New record created successfully";
	} else {
   	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



?>
