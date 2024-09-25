<?php 
    $servername = "localhost";
	$username = "iste240t89";
	$password = "Unpossessed9!limbus";
	$dbname = "iste240t89";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}