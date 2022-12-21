<!DOCTYPE html>
<html>
	<head>
		<title>foreach with Associative array</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	$student = array("cs0110" => "Abc", "cs0210" => "Xyz", "cs0310" => "Pqr");

	foreach($student as $key => $value)
	{
		echo "$key : $value<br>";
	}
?>
</h3>
</body>
</html>
