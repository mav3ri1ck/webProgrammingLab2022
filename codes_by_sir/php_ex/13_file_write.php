<!DOCTYPE html>
<html>
	<head>
		<title>File write</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
<h3>
<?php
	$file_name = "php_file_test.txt";
	$FH = fopen($file_name, 'w') or die("Can't open $file_name");
	
	fwrite($FH, "Jorhat Engg. College\n");
	fwrite($FH, "Jorhat, Assam.\n");
	
	fclose($FH);

	$FH = fopen($file_name, 'r') or die("Can't open $file_name");

	while( !feof($FH) )
		echo fgets($FH) . "<br>";
	
	fclose($FH);
?>
</h3>
</body>
</html>

<!--
	NOTE: Most probably, this script will faill in a GNU/Linux system.
	To run this script, following two things may need to be done:

	(a) Modify file permission:
		Allow write access on the directory where this script is located
		to the web-server daemon ('apache' in Fedora Linux, if running the
		Apache httpd service).

	(b) Modify SELinux context (if SELinux is enabled):
		In Fedora Linux, if 'auditd' service is running, it should report
		the error, and also should provide the necessary solution.
		(SELinux may be temporarily disabled (setenforce 0), to check if the
		script runs or not. *Never* disable SELinux permanently)
-->

