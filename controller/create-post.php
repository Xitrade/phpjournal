<?php
require_once(__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password, $database);

//the filter command gives a specific variable by name and filters it
$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

echo "<p>Title: $title</p>"; //echos out the title variable
echo "<p>Post: $post</p>"; //echos out the post variable
//Closes connection variable
$connection->close();
?>