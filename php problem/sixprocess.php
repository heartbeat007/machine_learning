<!DOCTYPE html>
<html>
<head>
	<title>process page</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<center>
<body>

	<?php 
		function find_last($number){
				return $number % 10;

		}
		function find_first($number){
			// if you divide a portion of the 
			//number and the resultant is 
			//less than 10 that means it is the first
			//number
			while (true) {
				$number=$number/10;   //first remove one digit from the right
					if ($number<10) {	//if the digit is less than 10 if it is
						return $number%10; #then divide the digit with 10 and take its resultant
					}
			}

		}
	?>

	<div class="container-fluid">
		<?php
			//get the data
			if (isset($_POST['submit'])) {
				//get the data
				$data=$_POST['data'];
					$first = find_last($data);
					$last = find_first($data);
					$result =$first + $last;
					echo "<h1> {$result}</h1>";
			}

		?>		

	</div>
</body>
</center>
</html>