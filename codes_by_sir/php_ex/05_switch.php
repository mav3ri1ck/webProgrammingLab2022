<!DOCTYPE html>
<html>
	<head>
		<title>switch</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	$mark = 65;

	switch((int)($mark / 10))	// NOTE: use type-casting
	{
	case 10:
	case 9:
	case 8:
		echo "A Grade<br>";
		break;
	case 7:
	case 6:
		echo "B Grade<br>";
		break;
	case 5:
	case 4:
		echo "C Grade<br>";
		break;
	case 3:
		echo "D Grade<br>";
		break;
	default:
		echo "F Grade<br>";
		break;
	}
?>
</h3>
</body>
</html>

