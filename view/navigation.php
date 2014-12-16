<?php
//goes to the config file
	require_once(__DIR__ . "/../model/config.php");
?>
<nav>
	<ul>
		<li>
		<!--Inserted the php into href to echo into a variable path and concatenates it with the string-->
		<a href="<?php echo $path . "post.php"?>">Create A Blog Post</a>
		<!-- makes link to the post file -->
		</li>
	</ul>
</nav>