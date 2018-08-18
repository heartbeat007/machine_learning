<!DOCTYPE html>
<html>
<head>
	<title>fourth  process</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="jumbotron">
			<div class="alert-danger">
				<?php
				if (isset($_POST['submit'])) {
					
				
					//get the data
				 $data=$_POST['data'];
				 $junk=array();
				 //process the data
				 for ($i=1; $i <=$data ; $i++) { //take all the number till the number selected
				 	if ($data % $i==0) { //

				 		array_push($junk, $i);
				 	}
				 }
				}
				else{
					echo "<center><h1>is nit submitted<h1></center>";
				}

				 echo "<pre>";
				 print_r($junk);
				 echo "</pre>";
				?>
			</div>
		</div>
	</div>

</body>
</html>