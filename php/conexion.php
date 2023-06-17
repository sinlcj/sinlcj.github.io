<?php

function connect_db(){

	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$dbname = "free_turismo";

	$conexion = new mysqli($servername, $username,$password, $dbname );
	if ($conexion->connect_error) {
	 die("connection failed: " . $conexion->connect_error);
	}

	return $conexion;

}
?>