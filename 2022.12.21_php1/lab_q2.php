<!doctype html>
<html>
	<head>
		<title>Question 2</title>
	</head>
	<body>
		<?php
			function check_prime($n) {
				$n_root = (int)sqrt($n);
				for($i = 2; $i < $n_root; $i++) {
					if($n % $i == 0) {
						echo "$n is not prime";
						return;
					}
				}
				echo "$n is prime";
			}
		?>
		<h2>
			<?php
				check_prime(112);
			?>
		</h2>
		<h2>
			<?php
				check_prime(3);
			?>
		</h2>
		<h2>
			<?php
				check_prime(113);
			?>
		</h2>
		<h2>
			<?php
				check_prime(79);
			?>
		</h2>
	</body>
</html>
