<!doctype html>
<html>
	<head>
		<title>Question 3</title>
	</head>
	<body>
		<h3>The first 20 numbers of the Fibonacci sequence are:</h3>
		</h4>

			<?php
				$n1 = 0;
				$n2 = 1;
				echo "$n1, $n2";
					
				for($i = 0; $i < 18; $i++) {
					$temp = $n1 + $n2;
					$n1 = $n2;
					$n2 = $temp;
					echo ", $n2";
				}		
			?>
		</h4>
	</body>
</html>
