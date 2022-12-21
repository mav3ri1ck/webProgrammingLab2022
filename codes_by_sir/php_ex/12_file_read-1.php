<!DOCTYPE html>
<html>
	<head>
		<title>File read 1</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<pre>
<?php
	$file_name = "GNU-GPL";
	$FH = fopen($file_name, 'r') or die("Can't open $file_name");

	$file_data = fread($FH, 50);	// '50' is number of bytes 
	echo $file_data;
	echo "<hr>";

	rewind($FH);
	$file_data = fread( $FH, filesize($file_name) );	// filesize() returns length of the file in bytes
	echo $file_data;

	fclose($FH);
?>
</pre>
</body>
</html>

