<!DOCTYPE html>
<html>
	<head>
		<title>Sort Array</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
$month = array("jan", "feb", "mar", "apr");
$student = array("cs0110" => "Abc", "cs0210" => "Xyz", "cs0310" => "Pqr");

sort($month);		// sort indexed array
print_r($month);
echo "<br><br>";

rsort($month);		// reverse sort indexed array
print_r($month);
echo "<br><br>";

asort($student);	// sort associative array on value
print_r($student);
echo "<br><br>";

arsort($student);	// reverse sort associative array on value
print_r($student);
echo "<br><br>";

ksort($student);	// sort associative array on key
print_r($student);
echo "<br><br>";

krsort($student);	// reverse sort associative array on key
print_r($student);
echo "<br><br>";
?>
</h3>
</body>
</html>

