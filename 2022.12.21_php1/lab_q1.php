<!doctype html>
<html>
	<head>
		<title>Question 1</title>
	</head>
	<body>
		<?php

			function check($n) {
				if($n > 0) {
					echo "$n is positive";
				}
				elseif($n < 0) {
					echo "$n is negative";
				}
				else {
					echo "$n is neither positive nor negative(i.e. zero)";
				}
			}
		?>
		<h2>
			<?php
				check(23);
			?>
		</h2>
		<h2>
			<?php
				check(-3);
			?>
		</h2>
		<h2>
			<?php
				check(0);
			?>
		</h2>
	</body>
</html>
