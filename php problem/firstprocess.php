<!DOCTYPE html>
<html>
<head>
	<title>process file</title>
</head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>
	<center><div class="jumbotron">
		<div class="container">
		<?php 
		//we will use a super global variable
		$data=$_POST['data'];

		//now lets process this data
		if ($data%2==0) {
			echo "<center><h1>this is a even number</center></h1>";
		}
		 ?>
	</div>
	</div>
	<?php 
		if ($data % 2!=0){
	?>

	<div class="alert-warning">
		<div class="jumbotron">
			<div class="container">
				
				<?php
					echo "<h1>this is a odd number </h1>";
			}
				?>
			</div>
		</div>
	</div>
</center>

</body>
</html>