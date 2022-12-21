<!DOCTYPE html>
<html>
	<head>
		<title>Function with args and return</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	function show($name)
	{
		echo "Hello, $name!";
	}

	function add($a, $b)
	{
		return($a + $b);
	}

	show("JEC");

	echo "<br>";

	$c = add(5, 10);
	echo $c;
	/* or:
	 * echo add(5, 10);
	 */
?>
</h3>
</body>
</html>

