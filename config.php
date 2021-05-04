<?php
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbname = "raghuvamsi";

	$conn = mysqli_connect($serverName, $userName, $password, $dbname);
	/*$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');*/

	if (!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>