<?php
	$serverName = "eu-cdbr-west-01.cleardb.com";
	$userName = "b9066ff68b8732";
	$password = "e0622d0c";
	$dbname = "heroku_676455dc86be3ba";

	$conn = mysqli_connect($serverName, $userName, $password, $dbname);
	/*$conn = mysqli_connect('shareddb-x.hosting.stackcp.net','shivangi','12345678@','malyaraaj-313537e38d');*/

	if (!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>