<?php
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<div>
		<label for="username">Returning Scrub's Epic Username: </label>
		<input type="text" name="username"/>
	</div>


	<div>
		<label for="password">Returning Scrub's Super Secret Password: </label>
		<input type="password" name="password" />
	</div>


	<div>
		<button type="submit">Click Here For Yes</button>		
	</div>
