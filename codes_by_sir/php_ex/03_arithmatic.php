<!DOCTYPE html>
<html>
	<head>
		<title>Arithmatic in php</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>

<?php
	$a = 15;
	$b = 10;

	echo "a + b = " . ($a + $b) . "<br>";
	echo "a - b = " . ($a - $b) . "<br>";
	echo "a * b = " . ($a * $b) . "<br>";
	echo "a / b = " . ($a / $b) . "<br>";
	echo "a % b = " . ($a % $b) . "<br>";
	echo "++a = " . (++$a) . "<br>";
	echo "b += 10 = " . ($b += 10) . "<br>";
?>

</h3>
</body>
</html>

<!--
	Operators:
		Arithmatic: + - * / % **	(** is exponentiation)

		Assignment:	= += -= *= /= %=

		Comparison: == === != <> !== < > <= >= (!= and <> are 'not equal')

		Increment/Decrement: ++ (and minus minus)

		Logical: && and || or xor !

		String: . .=

		Array: + == === != <> !== (+ is union)
-->

