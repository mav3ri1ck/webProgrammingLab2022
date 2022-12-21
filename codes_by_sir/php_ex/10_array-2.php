<!DOCTYPE html>
<html>
	<head>
		<title>Associative Array</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	$student = array("cs0110" => "Abc", "cs0210" => "Xyz", "cs0310" => "Pqr");

	echo $student['cs0110'] . "<br>";
	// or:
	echo "{$student['cs0210']} <br>";

	print_r($student);
	echo "<br>";
	var_dump($student);
?>
</h3>
</body>
</html>
