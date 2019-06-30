<?php

	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "certsys";

	$conn = mysqli_connect($hostname, $username, $password, $database);
	$conn->query("SET NAMES utf8");

	$_SESSION['conn'] = $conn;

 ?>
