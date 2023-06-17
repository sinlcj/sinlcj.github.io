<?php

function connect_db(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "proyecyo_sin";

	$conn = new mysqli($servername, $username,$password, $dbname );
	if ($conn->connect_error) {
	 die("connection failed: " . $conn->connect_error);
	}

	return $conn;

}

?>
