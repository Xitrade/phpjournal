<?php
	require_once(__DIR__ . "/Database.php");
//creates path variable to the desired file/folder
	session_start();
	//creates session id
	session_regenerate_id(true);

	$path = "/phpjournal/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	if(!isset($_SESSION["connection"])) {
		//opens connection to the variables in Database.php
		$connection = new Database($host, $username, $password, $database);
		//sessions preserve information
		$_SESSION["connection"] = $connection;
	}
?>