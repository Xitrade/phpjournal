<?php
	require_once(__DIR__ . "/../model/config.php");

	//the filter command gives a specific variable by name and filters it
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');
	//The INSERT INTO is used to "insert" new records to a tables.
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

	if($query) {
		echo "<p> Successfully Inserted Post: $title </p>";
		echo "Posted on: " . $date->format("m/d/y") . " at " . $time->format("g:i");
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
?>