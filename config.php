<?php
	$serverName = "us-cdbr-east-04.cleardb.com";
	$userName = "bd90ea3fb61162";
	$password = "5ce8e922";
	$dbname = "heroku_9dbf9d1489f66cc";

	$conn = mysqli_connect($serverName, $userName, $password, $dbname);
	/*$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');*/

	if (!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>