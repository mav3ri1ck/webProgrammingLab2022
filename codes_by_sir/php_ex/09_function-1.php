<!DOCTYPE html>
<html>
	<head>
		<title>Simple Function</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
<body>
	<h3>
	<?php
		function show()
		{
			echo "Hello, World!";
		}

		show();
	?>
	</h3>

	<p>A New Paragraph</p>

	<h3>
	<?php
		show();
	?>
	</h3>
</body>
</html>

