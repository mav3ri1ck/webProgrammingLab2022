<!DOCTYPE html>
<html>
	<head>
		<title>Function with default arg value</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	function show($name = "JEC")
	{
		echo "Hello, $name!";
	}


	show("Assam");	//	$name is "Assam"

	echo "<br>";

	show();			// $name takes the default value. i.e. "JEC"
?>
</h3>
</body>
</html>

