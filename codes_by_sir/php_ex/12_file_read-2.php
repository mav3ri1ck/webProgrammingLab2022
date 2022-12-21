<!DOCTYPE html>
<html>
	<head>
		<title>File read 2</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<pre>
<?php
	$file_name = "GNU-GPL";
	$FH = fopen($file_name, 'r') or die("Can't open $file_name");
	
	$file_data = fgets($FH);	// fgets() reads one line at a time
	echo $file_data;

	echo "<hr>";

	rewind($FH);
	$linenum = 1;
	while( !feof($FH) )
	{
		// echo $linenum . " " . fgets($FH);
		echo $linenum . " " . htmlspecialchars(fgets($FH));
		$linenum++;
	}
	
	fclose($FH);
?>
</pre>
</body>
</html>

