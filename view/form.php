<?php
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>
<!--Method: . Action: creates a path a specific file -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title"/>
	</div>

	<div>
	<label for="post">Post: </label>
	<textarea name="post"></textarea>
	</div>

	<div>
		<button type="submit">Submit That Shiz</button>
	</div>
</form>