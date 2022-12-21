<!DOCTYPE html>
<html>
	<head>
		<title>date, time</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	date_default_timezone_set('Asia/Kolkata');

	echo date('d/m/Y');	# 'd'=01 to 31, 'm'=01 to 12, 'Y'=4 digit year
	echo "<br>";
	echo date('D, M');	# 'D'=Mon to Sun, 'M'=Jan to Dec
	echo "<br>";
	echo date('c');		# ISO 8601 date, eg: 2017-11-10T11:43:28+05:30
	echo "<br>";
	echo date('r');		# RFC2822 date, eg: Fri, 10 Nov 2017 11:42:52 +0530
	echo "<br>";
	echo date('h:i:s a');# 'h'=01 to 12, 'i'=00 to 59, 's'=00 to 59, 'a'=am or pm
	echo "<br>";
	echo date('U');		# 'U'=Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
	echo "<br>";
	echo time();			# same as date('U'), eg: 1510294470
	echo "<br>&nbsp<br>";
?>

	It is now <?= date('h:i:s a') ?> on <?= date('d/m/Y') ?>.

</h3>
</body>
</html>

