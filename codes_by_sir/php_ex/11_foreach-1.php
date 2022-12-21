<!DOCTYPE html>
<html>
	<head>
		<title>foreach with indexed array</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	$month = array("jan", "feb", "mar", "apr");

	foreach($month as $val)
		echo "$val<br>";

	$num = array(1, 2, 3, 4);

	foreach($num as &$i)		// NOTE: using reference (&)
	{
		$i = $i + 5;
	}

	print_r($num);
	unset($i);
?>
</h3>
</body>
</html>
