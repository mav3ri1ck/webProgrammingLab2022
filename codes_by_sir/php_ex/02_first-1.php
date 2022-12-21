<!DOCTYPE html>
<html>
	<head>
		<title>First PHP Script</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
	<?php
		echo "Hello, World!<br>";
	?>

	<!-- following is the short echo tag (see note below) -->
	<?= "Hi, JEC!" ?>
</body>
</html>

<!--
	NOTE:
	The 'short echo tag' should work by default in PHP version 5.4 and above.
	However, in earlier versions,  'short_open_tag' has to be set to 'On' in
	the PHP configuration file (php.ini), to make it work.
-->

<!--
	Syntax note:
	* Every statement in PHP ends with a semi-colon.
	* PHP keywords, function names, class names etc. are NOT case-sensitive.
	* However, variable names in PHP are case-sensitive.
	* As such, following is valid:
		<?PHP
			ECHO "Hi<br>";
		?>
-->

