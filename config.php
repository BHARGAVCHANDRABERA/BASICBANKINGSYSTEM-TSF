<?php

	$servername = "localhost";
	$username = "id16102765_bhargav";
	$password = "Bhargav@2811";
	$dbname = "id16102765_ecbdata";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>