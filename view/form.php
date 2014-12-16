<?php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	if (!authenticateUser()) {
		header("Location: " . $path . "journal.php");
		die();
	}
?>

<h1>Create Blog Post</h1>
<!--Method: . Action: creates a path a specific file -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<label for="title">Title: </label>
		<font color="white"><input type="text" name="title"/></font>
	</div>

	<div>
	<label for="post">Post: </label>
	<textarea name="post"></textarea>
	</div>

	<div>
		<!-- this makes a button to collect data -->
		<button type="submit">Submit That Shiz</button>
	</div>
</form>