<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "tod";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) {
    	die("Connect failed: " . $conn->connect_error);
	}
?>
