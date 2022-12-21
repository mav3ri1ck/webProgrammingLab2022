<!DOCTYPE html>
<html>
	<head>
		<title>if, else, elseif</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	$a = 15;

	if($a > 0)
		echo "$a is positive";
	elseif($a < 0)
		echo "$a is negative";
	else
		echo "$a is neither positive nor negative";
?>
</h3>
</body>
</html>

