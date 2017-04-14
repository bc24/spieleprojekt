<?php

$sql = "INSERT INTO user(user, password, username, player, team, geschickt) VALUES
			('1234','1234', 'TestUser', 'Spieler 0', 'Team 0', 'nein'),
			('92106','95267', 'Sara','1' , '4', 'nein'),
			('67496','45592', 'Alec', '2', '4', 'nein'),
			('24394','49583', 'Kevin K.', '3', '1', 'nein'),
			('70916','83744', 'Dennis', '4', '1', 'nein'),
			('85853','97824', 'Eric', '5', '3', 'nein'),
			('15197','38491', 'Cora', '6', '4', 'nein'),
			('66402','57828', 'Raphael', '7', '2', 'nein'),
			('97665','31760', 'Erik', '8', '3', 'nein'),
			('66298','55812', 'Noah', '9', '1', 'nein'),
			('11833','51207', 'Tom', '10', '1', 'nein'),
			('99848','10913', 'Max', '11', '3', 'nein'),
			('12215','36591', 'Konstantin', '12', '2', 'nein'),
			('89888','91961', 'Gregor', '13', '4', 'nein'),
			('64878','69711', 'Roman', '14', '2', 'nein'),
			('92569','55091', 'Richard', '15', '2', 'nein'),
			('56145','58121', 'Julian', '16', '3', 'nein'),
			('22664','61421', NULL, '17', NULL, 'nein'),
			('48342','97658', NULL, '18', NULL, 'nein'),
			('17214','51543', NULL, '19', NULL, 'nein'),
			('39558','49183', NULL, '20', NULL, 'nein'),
			('admin-login', 'krankespw','Admin','69','69', 'nein')
			";
	if (mysqli_query($conn, $sql)) {
   	 echo " <br> New record created successfully";
	} else {
   	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



?>
