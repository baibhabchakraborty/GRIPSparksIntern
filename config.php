<?php

	$servername = "sql112.epizy.com";
	$username = "epiz_29115102";
	$password = "OvmaAiZfLlYj4s";
	$dbname = "epiz_29115102_pandera_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>