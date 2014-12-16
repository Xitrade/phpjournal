<?php
	require_once(__DIR__ . "/../model/config.php");

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//user inputs information and will be selected in the query
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	//tells how many rows were selected from the database
	if ($query->num_rows == 1) {
		$row = $query->fetch_array();

		if ($row["password"] === crypt($password, $row["salt"])) {
			$_SESSION["authenticated"] = true;
			echo "<p> Logged In </p>";
		}
		else {
			echo "<p> Invalid password and username... U FOKEN WOT m89?!!!?!?!?!!!!!?!? </p>";
		}
	}
	else {
		echo "<p> Invalid password and username... sruberonies </p>";
	}

?>