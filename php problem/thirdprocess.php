<!DOCTYPE html>
<html>
<head>
	<title>process page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<center>
	<h1>
	<div class="alert-success">
	<?php
	if (isset($_POST['submit'])) {
		# code...
	
		$data = $_POST['data'];
		for ($i=$data; $i >=0 ; $i--) { 
			echo $i. " , ";
		}
	}
	else{

		echo "you dont press the submit button";
	}
	?>
</div>
</h1>
</center>
</body>
</html>