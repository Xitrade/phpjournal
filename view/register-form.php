<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register You Scrub!</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
	<div>
		<label for="email">Scrub's Email: </label>
		<input type="text" name="email"/>
	</div>


	<div>
		<label for="username">Scrub's Shitty Username: </label>
		<input type="text" name="username"/>
	</div>


	<div>
		<label for="password">Scrub's Super Secret Password: </label>
		<input type="password" name="password" />
	</div>


	<div>
		<button type="submit">Submit For Submit</button>		
	</div>
</form>